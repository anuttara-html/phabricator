<?php

/**
 * This file is automatically generated. Use 'phutil_mapper.php' to rebuild it.
 * @generated
 */

phutil_register_library_map(array(
  'class' =>
  array(
    'Aphront400Response' => 'aphront/response/400',
    'Aphront404Response' => 'aphront/response/404',
    'AphrontAjaxResponse' => 'aphront/response/ajax',
    'AphrontApplicationConfiguration' => 'aphront/applicationconfiguration',
    'AphrontController' => 'aphront/controller',
    'AphrontDatabaseConnection' => 'storage/connection/base',
    'AphrontDefaultApplicationConfiguration' => 'aphront/default/configuration',
    'AphrontDefaultApplicationController' => 'aphront/default/controller',
    'AphrontDialogResponse' => 'aphront/response/dialog',
    'AphrontDialogView' => 'view/dialog',
    'AphrontErrorView' => 'view/form/error',
    'AphrontException' => 'aphront/exception/base',
    'AphrontFileResponse' => 'aphront/response/file',
    'AphrontFormCheckboxControl' => 'view/form/control/checkbox',
    'AphrontFormControl' => 'view/form/control/base',
    'AphrontFormDividerControl' => 'view/form/control/divider',
    'AphrontFormFileControl' => 'view/form/control/file',
    'AphrontFormMarkupControl' => 'view/form/control/markup',
    'AphrontFormPasswordControl' => 'view/form/control/password',
    'AphrontFormRecaptchaControl' => 'view/form/control/recaptcha',
    'AphrontFormSelectControl' => 'view/form/control/select',
    'AphrontFormStaticControl' => 'view/form/control/static',
    'AphrontFormSubmitControl' => 'view/form/control/submit',
    'AphrontFormTextAreaControl' => 'view/form/control/textarea',
    'AphrontFormTextControl' => 'view/form/control/text',
    'AphrontFormTokenizerControl' => 'view/form/control/tokenizer',
    'AphrontFormView' => 'view/form/base',
    'AphrontMySQLDatabaseConnection' => 'storage/connection/mysql',
    'AphrontNullView' => 'view/null',
    'AphrontPageView' => 'view/page/base',
    'AphrontPanelView' => 'view/layout/panel',
    'AphrontQueryConnectionException' => 'storage/exception/connection',
    'AphrontQueryConnectionLostException' => 'storage/exception/connectionlost',
    'AphrontQueryCountException' => 'storage/exception/count',
    'AphrontQueryDuplicateKeyException' => 'storage/exception/duplicatekey',
    'AphrontQueryException' => 'storage/exception/base',
    'AphrontQueryObjectMissingException' => 'storage/exception/objectmissing',
    'AphrontQueryParameterException' => 'storage/exception/parameter',
    'AphrontQueryRecoverableException' => 'storage/exception/recoverable',
    'AphrontRedirectException' => 'aphront/exception/redirect',
    'AphrontRedirectResponse' => 'aphront/response/redirect',
    'AphrontRequest' => 'aphront/request',
    'AphrontRequestFailureView' => 'view/page/failure',
    'AphrontResponse' => 'aphront/response/base',
    'AphrontSideNavView' => 'view/layout/sidenav',
    'AphrontTableView' => 'view/control/table',
    'AphrontURIMapper' => 'aphront/mapper',
    'AphrontView' => 'view/base',
    'AphrontWebpageResponse' => 'aphront/response/webpage',
    'CelerityAPI' => 'infrastructure/celerity/api',
    'CelerityResourceController' => 'infrastructure/celerity/controller',
    'CelerityResourceMap' => 'infrastructure/celerity/map',
    'CelerityStaticResourceResponse' => 'infrastructure/celerity/response',
    'ConduitAPIMethod' => 'applications/conduit/method/base',
    'ConduitAPIRequest' => 'applications/conduit/protocol/request',
    'ConduitAPI_conduit_connect_Method' => 'applications/conduit/method/conduit/connect',
    'ConduitAPI_differential_creatediff_Method' => 'applications/conduit/method/differential/creatediff',
    'ConduitAPI_differential_createrevision_Method' => 'applications/conduit/method/differential/createrevision',
    'ConduitAPI_differential_parsecommitmessage_Method' => 'applications/conduit/method/differential/parsecommitmessage',
    'ConduitAPI_differential_setdiffproperty_Method' => 'applications/conduit/method/differential/setdiffproperty',
    'ConduitAPI_differential_updaterevision_Method' => 'applications/conduit/method/differential/updaterevision',
    'ConduitAPI_file_upload_Method' => 'applications/conduit/method/file/upload',
    'ConduitAPI_user_find_Method' => 'applications/conduit/method/user/find',
    'ConduitException' => 'applications/conduit/protocol/exception',
    'DarkConsole' => 'aphront/console/api',
    'DarkConsoleController' => 'aphront/console/controller',
    'DarkConsoleCore' => 'aphront/console/core',
    'DarkConsoleErrorLogPlugin' => 'aphront/console/plugin/errorlog',
    'DarkConsoleErrorLogPluginAPI' => 'aphront/console/plugin/errorlog/api',
    'DarkConsolePlugin' => 'aphront/console/plugin/base',
    'DarkConsoleRequestPlugin' => 'aphront/console/plugin/request',
    'DarkConsoleServicesPlugin' => 'aphront/console/plugin/services',
    'DarkConsoleServicesPluginAPI' => 'aphront/console/plugin/services/api',
    'DarkConsoleXHProfPlugin' => 'aphront/console/plugin/xhprof',
    'DarkConsoleXHProfPluginAPI' => 'aphront/console/plugin/xhprof/api',
    'DifferentialAction' => 'applications/differential/constants/action',
    'DifferentialAddCommentView' => 'applications/differential/view/addcomment',
    'DifferentialCCWelcomeMail' => 'applications/differential/mail/ccwelcome',
    'DifferentialChangeType' => 'applications/differential/constants/changetype',
    'DifferentialChangeset' => 'applications/differential/storage/changeset',
    'DifferentialChangesetDetailView' => 'applications/differential/view/changesetdetailview',
    'DifferentialChangesetListView' => 'applications/differential/view/changesetlistview',
    'DifferentialChangesetParser' => 'applications/differential/parser/changeset',
    'DifferentialChangesetViewController' => 'applications/differential/controller/changesetview',
    'DifferentialComment' => 'applications/differential/storage/comment',
    'DifferentialCommentEditor' => 'applications/differential/editor/comment',
    'DifferentialCommentMail' => 'applications/differential/mail/comment',
    'DifferentialCommentPreviewController' => 'applications/differential/controller/commentpreview',
    'DifferentialCommentSaveController' => 'applications/differential/controller/commentsave',
    'DifferentialCommitMessage' => 'applications/differential/parser/commitmessage',
    'DifferentialCommitMessageParserException' => 'applications/differential/parser/commitmessage/exception',
    'DifferentialController' => 'applications/differential/controller/base',
    'DifferentialDAO' => 'applications/differential/storage/base',
    'DifferentialDiff' => 'applications/differential/storage/diff',
    'DifferentialDiffContentMail' => 'applications/differential/mail/diffcontent',
    'DifferentialDiffCreateController' => 'applications/differential/controller/diffcreate',
    'DifferentialDiffProperty' => 'applications/differential/storage/diffproperty',
    'DifferentialDiffTableOfContentsView' => 'applications/differential/view/difftableofcontents',
    'DifferentialDiffViewController' => 'applications/differential/controller/diffview',
    'DifferentialHunk' => 'applications/differential/storage/hunk',
    'DifferentialInlineComment' => 'applications/differential/storage/inlinecomment',
    'DifferentialInlineCommentEditController' => 'applications/differential/controller/inlinecommentedit',
    'DifferentialInlineCommentPreviewController' => 'applications/differential/controller/inlinecommentpreview',
    'DifferentialInlineCommentView' => 'applications/differential/view/inlinecomment',
    'DifferentialLintStatus' => 'applications/differential/constants/lintstatus',
    'DifferentialMail' => 'applications/differential/mail/base',
    'DifferentialMarkupEngineFactory' => 'applications/differential/parser/markup',
    'DifferentialNewDiffMail' => 'applications/differential/mail/newdiff',
    'DifferentialReviewRequestMail' => 'applications/differential/mail/reviewrequest',
    'DifferentialRevision' => 'applications/differential/storage/revision',
    'DifferentialRevisionCommentListView' => 'applications/differential/view/revisioncommentlist',
    'DifferentialRevisionCommentView' => 'applications/differential/view/revisioncomment',
    'DifferentialRevisionControlSystem' => 'applications/differential/constants/revisioncontrolsystem',
    'DifferentialRevisionDetailView' => 'applications/differential/view/revisiondetail',
    'DifferentialRevisionEditController' => 'applications/differential/controller/revisionedit',
    'DifferentialRevisionEditor' => 'applications/differential/editor/revision',
    'DifferentialRevisionListController' => 'applications/differential/controller/revisionlist',
    'DifferentialRevisionListData' => 'applications/differential/data/revisionlist',
    'DifferentialRevisionStatus' => 'applications/differential/constants/revisionstatus',
    'DifferentialRevisionUpdateHistoryView' => 'applications/differential/view/revisionupdatehistory',
    'DifferentialRevisionViewController' => 'applications/differential/controller/revisionview',
    'DifferentialUnitStatus' => 'applications/differential/constants/unitstatus',
    'Javelin' => 'infrastructure/javelin/api',
    'LiskDAO' => 'storage/lisk/dao',
    'Phabricator404Controller' => 'applications/base/controller/404',
    'PhabricatorAuthController' => 'applications/auth/controller/base',
    'PhabricatorConduitAPIController' => 'applications/conduit/controller/api',
    'PhabricatorConduitConnectionLog' => 'applications/conduit/storage/connectionlog',
    'PhabricatorConduitConsoleController' => 'applications/conduit/controller/console',
    'PhabricatorConduitController' => 'applications/conduit/controller/base',
    'PhabricatorConduitDAO' => 'applications/conduit/storage/base',
    'PhabricatorConduitLogController' => 'applications/conduit/controller/log',
    'PhabricatorConduitMethodCallLog' => 'applications/conduit/storage/methodcalllog',
    'PhabricatorController' => 'applications/base/controller/base',
    'PhabricatorDirectoryCategory' => 'applications/directory/storage/category',
    'PhabricatorDirectoryCategoryDeleteController' => 'applications/directory/controller/categorydelete',
    'PhabricatorDirectoryCategoryEditController' => 'applications/directory/controller/categoryedit',
    'PhabricatorDirectoryCategoryListController' => 'applications/directory/controller/categorylist',
    'PhabricatorDirectoryController' => 'applications/directory/controller/base',
    'PhabricatorDirectoryDAO' => 'applications/directory/storage/base',
    'PhabricatorDirectoryItem' => 'applications/directory/storage/item',
    'PhabricatorDirectoryItemDeleteController' => 'applications/directory/controller/itemdelete',
    'PhabricatorDirectoryItemEditController' => 'applications/directory/controller/itemedit',
    'PhabricatorDirectoryItemListController' => 'applications/directory/controller/itemlist',
    'PhabricatorDirectoryMainController' => 'applications/directory/controller/main',
    'PhabricatorDraft' => 'applications/draft/storage/draft',
    'PhabricatorDraftDAO' => 'applications/draft/storage/base',
    'PhabricatorEmailLoginController' => 'applications/auth/controller/email',
    'PhabricatorEmailTokenController' => 'applications/auth/controller/emailtoken',
    'PhabricatorEnv' => 'infrastructure/env',
    'PhabricatorFacebookAuthController' => 'applications/auth/controller/facebookauth',
    'PhabricatorFacebookAuthDiagnosticsController' => 'applications/auth/controller/facebookauth/diagnostics',
    'PhabricatorFile' => 'applications/files/storage/file',
    'PhabricatorFileController' => 'applications/files/controller/base',
    'PhabricatorFileDAO' => 'applications/files/storage/base',
    'PhabricatorFileListController' => 'applications/files/controller/list',
    'PhabricatorFileStorageBlob' => 'applications/files/storage/storageblob',
    'PhabricatorFileURI' => 'applications/files/uri',
    'PhabricatorFileUploadController' => 'applications/files/controller/upload',
    'PhabricatorFileViewController' => 'applications/files/controller/view',
    'PhabricatorLiskDAO' => 'applications/base/storage/lisk',
    'PhabricatorLoginController' => 'applications/auth/controller/login',
    'PhabricatorLogoutController' => 'applications/auth/controller/logout',
    'PhabricatorMailImplementationAdapter' => 'applications/metamta/adapter/base',
    'PhabricatorMailImplementationPHPMailerLiteAdapter' => 'applications/metamta/adapter/phpmailerlite',
    'PhabricatorMetaMTAController' => 'applications/metamta/controller/base',
    'PhabricatorMetaMTADAO' => 'applications/metamta/storage/base',
    'PhabricatorMetaMTAListController' => 'applications/metamta/controller/list',
    'PhabricatorMetaMTAMail' => 'applications/metamta/storage/mail',
    'PhabricatorMetaMTAMailingList' => 'applications/metamta/storage/mailinglist',
    'PhabricatorMetaMTAMailingListEditController' => 'applications/metamta/controller/mailinglistedit',
    'PhabricatorMetaMTAMailingListsController' => 'applications/metamta/controller/mailinglists',
    'PhabricatorMetaMTASendController' => 'applications/metamta/controller/send',
    'PhabricatorMetaMTAViewController' => 'applications/metamta/controller/view',
    'PhabricatorObjectHandle' => 'applications/phid/handle',
    'PhabricatorObjectHandleData' => 'applications/phid/handle/data',
    'PhabricatorPHID' => 'applications/phid/storage/phid',
    'PhabricatorPHIDAllocateController' => 'applications/phid/controller/allocate',
    'PhabricatorPHIDController' => 'applications/phid/controller/base',
    'PhabricatorPHIDDAO' => 'applications/phid/storage/base',
    'PhabricatorPHIDListController' => 'applications/phid/controller/list',
    'PhabricatorPHIDLookupController' => 'applications/phid/controller/lookup',
    'PhabricatorPHIDType' => 'applications/phid/storage/type',
    'PhabricatorPHIDTypeEditController' => 'applications/phid/controller/typeedit',
    'PhabricatorPHIDTypeListController' => 'applications/phid/controller/typelist',
    'PhabricatorPeopleController' => 'applications/people/controller/base',
    'PhabricatorPeopleEditController' => 'applications/people/controller/edit',
    'PhabricatorPeopleListController' => 'applications/people/controller/list',
    'PhabricatorPeopleProfileController' => 'applications/people/controller/profile',
    'PhabricatorStandardPageView' => 'view/page/standard',
    'PhabricatorTypeaheadCommonDatasourceController' => 'applications/typeahead/controller/common',
    'PhabricatorTypeaheadDatasourceController' => 'applications/typeahead/controller/base',
    'PhabricatorUser' => 'applications/people/storage/user',
    'PhabricatorUserDAO' => 'applications/people/storage/base',
    'PhabricatorUserSettingsController' => 'applications/people/controller/settings',
    'PhabricatorXHProfController' => 'applications/xhprof/controller/base',
    'PhabricatorXHProfProfileController' => 'applications/xhprof/controller/profile',
    'PhabricatorXHProfProfileSymbolView' => 'applications/xhprof/view/symbol',
    'PhabricatorXHProfProfileTopLevelView' => 'applications/xhprof/view/toplevel',
  ),
  'function' =>
  array(
    '_qsprintf_check_scalar_type' => 'storage/qsprintf',
    '_qsprintf_check_type' => 'storage/qsprintf',
    'celerity_generate_unique_node_id' => 'infrastructure/celerity/api',
    'celerity_register_resource_map' => 'infrastructure/celerity/map',
    'javelin_render_tag' => 'infrastructure/javelin/markup',
    'phabricator_format_relative_time' => 'view/utils',
    'phabricator_format_timestamp' => 'view/utils',
    'phabricator_format_units_generic' => 'view/utils',
    'qsprintf' => 'storage/qsprintf',
    'queryfx' => 'storage/queryfx',
    'queryfx_all' => 'storage/queryfx',
    'queryfx_one' => 'storage/queryfx',
    'require_celerity_resource' => 'infrastructure/celerity/api',
    'vqsprintf' => 'storage/qsprintf',
    'vqueryfx' => 'storage/queryfx',
    'vqueryfx_all' => 'storage/queryfx',
    'xsprintf_query' => 'storage/qsprintf',
  ),
  'requires_class' =>
  array(
    'Aphront400Response' => 'AphrontResponse',
    'Aphront404Response' => 'AphrontResponse',
    'AphrontAjaxResponse' => 'AphrontResponse',
    'AphrontDefaultApplicationConfiguration' => 'AphrontApplicationConfiguration',
    'AphrontDefaultApplicationController' => 'AphrontController',
    'AphrontDialogResponse' => 'AphrontResponse',
    'AphrontDialogView' => 'AphrontView',
    'AphrontErrorView' => 'AphrontView',
    'AphrontFileResponse' => 'AphrontResponse',
    'AphrontFormCheckboxControl' => 'AphrontFormControl',
    'AphrontFormControl' => 'AphrontView',
    'AphrontFormDividerControl' => 'AphrontFormControl',
    'AphrontFormFileControl' => 'AphrontFormControl',
    'AphrontFormMarkupControl' => 'AphrontFormControl',
    'AphrontFormPasswordControl' => 'AphrontFormControl',
    'AphrontFormRecaptchaControl' => 'AphrontFormControl',
    'AphrontFormSelectControl' => 'AphrontFormControl',
    'AphrontFormStaticControl' => 'AphrontFormControl',
    'AphrontFormSubmitControl' => 'AphrontFormControl',
    'AphrontFormTextAreaControl' => 'AphrontFormControl',
    'AphrontFormTextControl' => 'AphrontFormControl',
    'AphrontFormTokenizerControl' => 'AphrontFormControl',
    'AphrontFormView' => 'AphrontView',
    'AphrontMySQLDatabaseConnection' => 'AphrontDatabaseConnection',
    'AphrontNullView' => 'AphrontView',
    'AphrontPageView' => 'AphrontView',
    'AphrontPanelView' => 'AphrontView',
    'AphrontQueryConnectionException' => 'AphrontQueryException',
    'AphrontQueryConnectionLostException' => 'AphrontQueryRecoverableException',
    'AphrontQueryCountException' => 'AphrontQueryException',
    'AphrontQueryDuplicateKeyException' => 'AphrontQueryException',
    'AphrontQueryObjectMissingException' => 'AphrontQueryException',
    'AphrontQueryParameterException' => 'AphrontQueryException',
    'AphrontQueryRecoverableException' => 'AphrontQueryException',
    'AphrontRedirectException' => 'AphrontException',
    'AphrontRedirectResponse' => 'AphrontResponse',
    'AphrontRequestFailureView' => 'AphrontView',
    'AphrontSideNavView' => 'AphrontView',
    'AphrontTableView' => 'AphrontView',
    'AphrontWebpageResponse' => 'AphrontResponse',
    'CelerityResourceController' => 'AphrontController',
    'ConduitAPI_conduit_connect_Method' => 'ConduitAPIMethod',
    'ConduitAPI_differential_creatediff_Method' => 'ConduitAPIMethod',
    'ConduitAPI_differential_createrevision_Method' => 'ConduitAPIMethod',
    'ConduitAPI_differential_parsecommitmessage_Method' => 'ConduitAPIMethod',
    'ConduitAPI_differential_setdiffproperty_Method' => 'ConduitAPIMethod',
    'ConduitAPI_differential_updaterevision_Method' => 'ConduitAPIMethod',
    'ConduitAPI_file_upload_Method' => 'ConduitAPIMethod',
    'ConduitAPI_user_find_Method' => 'ConduitAPIMethod',
    'DarkConsoleController' => 'PhabricatorController',
    'DarkConsoleErrorLogPlugin' => 'DarkConsolePlugin',
    'DarkConsoleRequestPlugin' => 'DarkConsolePlugin',
    'DarkConsoleServicesPlugin' => 'DarkConsolePlugin',
    'DarkConsoleXHProfPlugin' => 'DarkConsolePlugin',
    'DifferentialAddCommentView' => 'AphrontView',
    'DifferentialCCWelcomeMail' => 'DifferentialReviewRequestMail',
    'DifferentialChangeset' => 'DifferentialDAO',
    'DifferentialChangesetDetailView' => 'AphrontView',
    'DifferentialChangesetListView' => 'AphrontView',
    'DifferentialChangesetViewController' => 'DifferentialController',
    'DifferentialComment' => 'DifferentialDAO',
    'DifferentialCommentMail' => 'DifferentialMail',
    'DifferentialCommentPreviewController' => 'DifferentialController',
    'DifferentialCommentSaveController' => 'DifferentialController',
    'DifferentialController' => 'PhabricatorController',
    'DifferentialDAO' => 'PhabricatorLiskDAO',
    'DifferentialDiff' => 'DifferentialDAO',
    'DifferentialDiffContentMail' => 'DifferentialMail',
    'DifferentialDiffCreateController' => 'DifferentialController',
    'DifferentialDiffProperty' => 'DifferentialDAO',
    'DifferentialDiffTableOfContentsView' => 'AphrontView',
    'DifferentialDiffViewController' => 'DifferentialController',
    'DifferentialHunk' => 'DifferentialDAO',
    'DifferentialInlineComment' => 'DifferentialDAO',
    'DifferentialInlineCommentEditController' => 'DifferentialController',
    'DifferentialInlineCommentPreviewController' => 'DifferentialController',
    'DifferentialInlineCommentView' => 'AphrontView',
    'DifferentialNewDiffMail' => 'DifferentialReviewRequestMail',
    'DifferentialReviewRequestMail' => 'DifferentialMail',
    'DifferentialRevision' => 'DifferentialDAO',
    'DifferentialRevisionCommentListView' => 'AphrontView',
    'DifferentialRevisionCommentView' => 'AphrontView',
    'DifferentialRevisionDetailView' => 'AphrontView',
    'DifferentialRevisionEditController' => 'DifferentialController',
    'DifferentialRevisionListController' => 'DifferentialController',
    'DifferentialRevisionUpdateHistoryView' => 'AphrontView',
    'DifferentialRevisionViewController' => 'DifferentialController',
    'Phabricator404Controller' => 'PhabricatorController',
    'PhabricatorAuthController' => 'PhabricatorController',
    'PhabricatorConduitAPIController' => 'PhabricatorConduitController',
    'PhabricatorConduitConnectionLog' => 'PhabricatorConduitDAO',
    'PhabricatorConduitConsoleController' => 'PhabricatorConduitController',
    'PhabricatorConduitController' => 'PhabricatorController',
    'PhabricatorConduitDAO' => 'PhabricatorLiskDAO',
    'PhabricatorConduitLogController' => 'PhabricatorConduitController',
    'PhabricatorConduitMethodCallLog' => 'PhabricatorConduitDAO',
    'PhabricatorController' => 'AphrontController',
    'PhabricatorDirectoryCategory' => 'PhabricatorDirectoryDAO',
    'PhabricatorDirectoryCategoryDeleteController' => 'PhabricatorDirectoryController',
    'PhabricatorDirectoryCategoryEditController' => 'PhabricatorDirectoryController',
    'PhabricatorDirectoryCategoryListController' => 'PhabricatorDirectoryController',
    'PhabricatorDirectoryController' => 'PhabricatorController',
    'PhabricatorDirectoryDAO' => 'PhabricatorLiskDAO',
    'PhabricatorDirectoryItem' => 'PhabricatorDirectoryDAO',
    'PhabricatorDirectoryItemDeleteController' => 'PhabricatorDirectoryController',
    'PhabricatorDirectoryItemEditController' => 'PhabricatorDirectoryController',
    'PhabricatorDirectoryItemListController' => 'PhabricatorDirectoryController',
    'PhabricatorDirectoryMainController' => 'PhabricatorDirectoryController',
    'PhabricatorDraft' => 'PhabricatorDraftDAO',
    'PhabricatorDraftDAO' => 'PhabricatorLiskDAO',
    'PhabricatorEmailLoginController' => 'PhabricatorAuthController',
    'PhabricatorEmailTokenController' => 'PhabricatorAuthController',
    'PhabricatorFacebookAuthController' => 'PhabricatorAuthController',
    'PhabricatorFacebookAuthDiagnosticsController' => 'PhabricatorAuthController',
    'PhabricatorFile' => 'PhabricatorFileDAO',
    'PhabricatorFileController' => 'PhabricatorController',
    'PhabricatorFileDAO' => 'PhabricatorLiskDAO',
    'PhabricatorFileListController' => 'PhabricatorFileController',
    'PhabricatorFileStorageBlob' => 'PhabricatorFileDAO',
    'PhabricatorFileUploadController' => 'PhabricatorFileController',
    'PhabricatorFileViewController' => 'PhabricatorFileController',
    'PhabricatorLiskDAO' => 'LiskDAO',
    'PhabricatorLoginController' => 'PhabricatorAuthController',
    'PhabricatorLogoutController' => 'PhabricatorAuthController',
    'PhabricatorMailImplementationPHPMailerLiteAdapter' => 'PhabricatorMailImplementationAdapter',
    'PhabricatorMetaMTAController' => 'PhabricatorController',
    'PhabricatorMetaMTADAO' => 'PhabricatorLiskDAO',
    'PhabricatorMetaMTAListController' => 'PhabricatorMetaMTAController',
    'PhabricatorMetaMTAMail' => 'PhabricatorMetaMTADAO',
    'PhabricatorMetaMTAMailingList' => 'PhabricatorMetaMTADAO',
    'PhabricatorMetaMTAMailingListEditController' => 'PhabricatorMetaMTAController',
    'PhabricatorMetaMTAMailingListsController' => 'PhabricatorMetaMTAController',
    'PhabricatorMetaMTASendController' => 'PhabricatorMetaMTAController',
    'PhabricatorMetaMTAViewController' => 'PhabricatorMetaMTAController',
    'PhabricatorPHID' => 'PhabricatorPHIDDAO',
    'PhabricatorPHIDAllocateController' => 'PhabricatorPHIDController',
    'PhabricatorPHIDController' => 'PhabricatorController',
    'PhabricatorPHIDDAO' => 'PhabricatorLiskDAO',
    'PhabricatorPHIDListController' => 'PhabricatorPHIDController',
    'PhabricatorPHIDLookupController' => 'PhabricatorPHIDController',
    'PhabricatorPHIDType' => 'PhabricatorPHIDDAO',
    'PhabricatorPHIDTypeEditController' => 'PhabricatorPHIDController',
    'PhabricatorPHIDTypeListController' => 'PhabricatorPHIDController',
    'PhabricatorPeopleController' => 'PhabricatorController',
    'PhabricatorPeopleEditController' => 'PhabricatorPeopleController',
    'PhabricatorPeopleListController' => 'PhabricatorPeopleController',
    'PhabricatorPeopleProfileController' => 'PhabricatorPeopleController',
    'PhabricatorStandardPageView' => 'AphrontPageView',
    'PhabricatorTypeaheadCommonDatasourceController' => 'PhabricatorTypeaheadDatasourceController',
    'PhabricatorTypeaheadDatasourceController' => 'PhabricatorController',
    'PhabricatorUser' => 'PhabricatorUserDAO',
    'PhabricatorUserDAO' => 'PhabricatorLiskDAO',
    'PhabricatorUserSettingsController' => 'PhabricatorPeopleController',
    'PhabricatorXHProfController' => 'PhabricatorController',
    'PhabricatorXHProfProfileController' => 'PhabricatorXHProfController',
    'PhabricatorXHProfProfileSymbolView' => 'AphrontView',
    'PhabricatorXHProfProfileTopLevelView' => 'AphrontView',
  ),
  'requires_interface' =>
  array(
  ),
));
