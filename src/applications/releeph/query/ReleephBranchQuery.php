<?php

final class ReleephBranchQuery
  extends PhabricatorCursorPagedPolicyAwareQuery {

  private $ids;
  private $phids;

  private $needCutPointCommits;

  public function withIDs(array $ids) {
    $this->ids = $ids;
    return $this;
  }

  public function withPHIDs(array $phids) {
    $this->phids = $phids;
    return $this;
  }

  public function needCutPointCommits($need_commits) {
    $this->needCutPointCommits = $need_commits;
    return $this;
  }

  public function loadPage() {
    $table = new ReleephBranch();
    $conn_r = $table->establishConnection('r');

    $data = queryfx_all(
      $conn_r,
      'SELECT * FROM %T %Q %Q %Q',
      $table->getTableName(),
      $this->buildWhereClause($conn_r),
      $this->buildOrderClause($conn_r),
      $this->buildLimitClause($conn_r));

    return $table->loadAllFromArray($data);
  }

  public function willFilterPage(array $branches) {
    $project_ids = mpull($branches, 'getReleephProjectID');

    $projects = id(new ReleephProjectQuery())
      ->withIDs($project_ids)
      ->setViewer($this->getViewer())
      ->execute();

    foreach ($branches as $key => $branch) {
      $project_id = $project_ids[$key];
      if (isset($projects[$project_id])) {
        $branch->attachProject($projects[$project_id]);
      } else {
        unset($branches[$key]);
      }
    }

    if ($this->needCutPointCommits) {
      $commit_phids = mpull($branches, 'getCutPointCommitPHID');
      $commits = id(new DiffusionCommitQuery())
        ->setViewer($this->getViewer())
        ->withPHIDs($commit_phids)
        ->execute();
      $commits = mpull($commits, null, 'getPHID');

      foreach ($branches as $branch) {
        $commit = idx($commits, $branch->getCutPointCommitPHID());
        $branch->attachCutPointCommit($commit);
      }
    }

    return $branches;
  }

  private function buildWhereClause(AphrontDatabaseConnection $conn_r) {
    $where = array();

    if ($this->ids) {
      $where[] = qsprintf(
        $conn_r,
        'id IN (%Ld)',
        $this->ids);
    }

    if ($this->phids) {
      $where[] = qsprintf(
        $conn_r,
        'phid IN (%Ls)',
        $this->phids);
    }

    $where[] = $this->buildPagingClause($conn_r);

    return $this->formatWhereClause($where);
  }

}
