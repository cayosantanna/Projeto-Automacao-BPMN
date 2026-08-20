<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/Altcha/Challenge' => [[['_route' => 'glpi_altcha_challenge', '_controller' => 'Glpi\\Controller\\Altcha\\ChallengeController'], null, ['GET' => 0], null, false, false, null]],
        '/front/central.php' => [[['_route' => 'front_central_legacy', '_controller' => 'Glpi\\Controller\\CentralController'], null, null, null, false, false, null]],
        '/Central' => [[['_route' => 'front_central', '_controller' => 'Glpi\\Controller\\CentralController'], null, null, null, false, false, null]],
        '/Config/Helpdesk/AddTile' => [[['_route' => 'glpi_config_helpdesk_add_tile', '_controller' => 'Glpi\\Controller\\Config\\Helpdesk\\AddTileController'], null, ['POST' => 0], null, false, false, null]],
        '/Config/Helpdesk/CopyParentEntity' => [[['_route' => 'glpi_config_helpdesk_copy_parent_entity', '_controller' => 'Glpi\\Controller\\Config\\Helpdesk\\CopyParentEntityController'], null, ['POST' => 0], null, false, false, null]],
        '/Config/Helpdesk/DeleteTile' => [[['_route' => 'glpi_config_helpdesk_delete_tile', '_controller' => 'Glpi\\Controller\\Config\\Helpdesk\\DeleteTileController'], null, ['POST' => 0], null, false, false, null]],
        '/Config/Helpdesk/SetTilesOrder' => [[['_route' => 'glpi_config_helpdesk_set_tiles_order', '_controller' => 'Glpi\\Controller\\Config\\Helpdesk\\SetTilesOrderController'], null, ['POST' => 0], null, false, false, null]],
        '/Config/Helpdesk/ShowAddTileForm' => [[['_route' => 'glpi_config_helpdesk_show_add_tile_form', '_controller' => 'Glpi\\Controller\\Config\\Helpdesk\\ShowAddTileFormController'], null, ['GET' => 0], null, false, false, null]],
        '/Config/Helpdesk/ShowEditTileForm' => [[['_route' => 'glpi_config_helpdesk_show_edit_tile_form', '_controller' => 'Glpi\\Controller\\Config\\Helpdesk\\ShowEditTileFormController'], null, ['GET' => 0], null, false, false, null]],
        '/Config/Helpdesk/UpdateTile' => [[['_route' => 'glpi_config_helpdesk_update_tile', '_controller' => 'Glpi\\Controller\\Config\\Helpdesk\\UpdateTileController'], null, ['POST' => 0], null, false, false, null]],
        '/Form/AllowListDropdown/CountUsers' => [[['_route' => 'form_allow_list_dropdown_count_users', '_controller' => 'Glpi\\Controller\\Form\\AllowListDropdown\\CountUsersController'], null, ['GET' => 0], null, false, false, null]],
        '/Form/Condition/Visibility/Editor' => [[['_route' => 'glpi_form_condition_visibility_editor', '_controller' => 'Glpi\\Controller\\Form\\Condition\\EditorController::visibilityEditor'], null, ['POST' => 0], null, false, false, null]],
        '/Form/Condition/Validation/Editor' => [[['_route' => 'glpi_form_condition_validation_editor', '_controller' => 'Glpi\\Controller\\Form\\Condition\\EditorController::validationEditor'], null, ['POST' => 0], null, false, false, null]],
        '/Form/Condition/Editor/SupportedValueOperators' => [[['_route' => 'glpi_form_condition_editor_supported_value_operators', '_controller' => 'Glpi\\Controller\\Form\\Condition\\EditorController::supportedValueOperators'], null, ['POST' => 0], null, false, false, null]],
        '/Form/Condition/Engine' => [[['_route' => 'glpi_form_condition_engine', '_controller' => 'Glpi\\Controller\\Form\\Condition\\EngineController'], null, ['POST' => 0], null, false, false, null]],
        '/Form/Delegation' => [[['_route' => 'glpi_form_delegation', '_controller' => 'Glpi\\Controller\\Form\\DelegationController'], null, ['GET' => 0], null, false, false, null]],
        '/Form/Export' => [[['_route' => 'glpi_form_export', '_controller' => 'Glpi\\Controller\\Form\\ExportController'], null, null, null, false, false, null]],
        '/Form/Import' => [[['_route' => 'glpi_form_import', '_controller' => 'Glpi\\Controller\\Form\\Import\\Step1IndexController'], null, ['GET' => 0], null, false, false, null]],
        '/Form/Import/Preview' => [[['_route' => 'glpi_form_import_preview', '_controller' => 'Glpi\\Controller\\Form\\Import\\Step2PreviewController'], null, ['POST' => 0], null, false, false, null]],
        '/Form/Import/ResolveIssues' => [[['_route' => 'glpi_form_import_resolve_issues', '_controller' => 'Glpi\\Controller\\Form\\Import\\Step3ResolveIssuesController'], null, ['POST' => 0], null, false, false, null]],
        '/Form/Import/Execute' => [[['_route' => 'glpi_form_import_execute', '_controller' => 'Glpi\\Controller\\Form\\Import\\Step4ExecuteController'], null, ['POST' => 0], null, false, false, null]],
        '/Form/Question/ActorsDropdown' => [[['_route' => 'glpi_form_question_actors_dropdown_value', '_controller' => 'Glpi\\Controller\\Form\\QuestionActorsDropdownController'], null, ['POST' => 0], null, false, false, null]],
        '/Form/SubmitAnswers' => [[['_route' => 'glpi_form_submit_answers', '_controller' => 'Glpi\\Controller\\Form\\SubmitAnswerController'], null, ['POST' => 0], null, false, false, null]],
        '/Form/TagList' => [[['_route' => 'glpi_form_tags_list', '_controller' => 'Glpi\\Controller\\Form\\TagListController'], null, ['GET' => 0], null, false, false, null]],
        '/Form/ValidateAnswers' => [[['_route' => 'glpi_form_validate_answers', '_controller' => 'Glpi\\Controller\\Form\\ValidateAnswerController'], null, ['POST' => 0], null, false, false, null]],
        '/GenericAjaxCrud' => [[['_route' => 'glpi_generic_ajax_crud', '_controller' => 'Glpi\\Controller\\GenericAjaxCrudController'], null, null, null, false, false, null]],
        '/Helpdesk' => [[['_route' => 'glpi_helpdesk_index', '_controller' => 'Glpi\\Controller\\Helpdesk\\IndexController'], null, ['GET' => 0], null, false, false, null]],
        '/Helpdesk/Search' => [[['_route' => 'glpi_helpdesk_search', '_controller' => 'Glpi\\Controller\\Helpdesk\\SearchController'], null, ['GET' => 0], null, false, false, null]],
        '/Helpdesk/Translation/Add' => [[['_route' => 'glpi_add_helpdesk_translation', '_controller' => 'Glpi\\Controller\\Helpdesk\\Translation\\AddNewHelpdeskTranslationController'], null, ['POST' => 0], null, false, false, null]],
        '/' => [[['_route' => 'glpi_index', '_controller' => 'Glpi\\Controller\\IndexController', '_locale' => 'base'], null, null, null, false, false, null]],
        '/index.php' => [[['_route' => 'glpi_index', '_controller' => 'Glpi\\Controller\\IndexController', '_locale' => 'legacy_index_file'], null, null, null, false, false, null]],
        '/Install/InitDatabase' => [[['_route' => 'glpi_install_initdatabase', '_controller' => 'Glpi\\Controller\\InstallController::initDatabase'], null, ['POST' => 0], null, false, false, null]],
        '/Install/UpdateDatabase' => [[['_route' => 'glpi_install_updatedatabase', '_controller' => 'Glpi\\Controller\\InstallController::updateDatabase'], null, ['POST' => 0], null, false, false, null]],
        '/Inventory' => [[['_route' => 'glpi_inventory', '_controller' => 'Glpi\\Controller\\InventoryController::index'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/front/inventory.php' => [[['_route' => 'glpi_inventory_legacy', '_controller' => 'Glpi\\Controller\\InventoryController::index'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/Inventory/RefusedEquipment' => [[['_route' => 'glpi_refused_inventory', '_controller' => 'Glpi\\Controller\\InventoryController::refusedEquipement'], null, ['POST' => 0], null, false, false, null]],
        '/Inventory/Configuration' => [[['_route' => 'glpi_inventory_configuration', '_controller' => 'Glpi\\Controller\\InventoryController::configure'], null, ['GET' => 0], null, false, false, null]],
        '/front/inventory.conf.php' => [
            [['_route' => 'glpi_inventory_configuration_legacy', '_controller' => 'Glpi\\Controller\\InventoryController::configure'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'glpi_inventory_store_configuration_legacy', '_controller' => 'Glpi\\Controller\\InventoryController::storeConfiguration'], null, ['POST' => 0], null, false, false, null],
        ],
        '/Inventory/Configuration/Store' => [[['_route' => 'glpi_inventory_store_configuration', '_controller' => 'Glpi\\Controller\\InventoryController::storeConfiguration'], null, ['POST' => 0], null, false, false, null]],
        '/Inventory/ImportFiles' => [[['_route' => 'glpi_inventory_report', '_controller' => 'Glpi\\Controller\\InventoryController::report'], null, ['POST' => 0], null, false, false, null]],
        '/front/authmail.form.php' => [[['_route' => 'glpi_itemtype_authmail_form', '_controller' => 'Glpi\\Controller\\ItemType\\Form\\AuthMailFormController'], null, null, null, false, false, null]],
        '/front/contact.form.php' => [[['_route' => 'glpi_itemtype_contact_form', '_controller' => 'Glpi\\Controller\\ItemType\\Form\\ContactFormController'], null, null, null, false, false, null]],
        '/front/mailcollector.form.php' => [[['_route' => 'glpi_itemtype_mailcollector_form', '_controller' => 'Glpi\\Controller\\ItemType\\Form\\MailCollectorFormController'], null, null, null, false, false, null]],
        '/front/savedsearch.form.php' => [[['_route' => 'glpi_itemtype_savedsearch_form', '_controller' => 'Glpi\\Controller\\ItemType\\Form\\SavedSearchFormController'], null, null, null, false, false, null]],
        '/MFA/Setup' => [[['_route' => 'mfa_setup', '_controller' => 'Glpi\\Controller\\Security\\MFAController::setup'], null, null, null, false, false, null]],
        '/MFA/Prompt' => [[['_route' => 'mfa_prompt', '_controller' => 'Glpi\\Controller\\Security\\MFAController::prompt'], null, ['GET' => 0], null, false, false, null]],
        '/MFA/Verify' => [[['_route' => 'mfa_verify_totp', '_controller' => 'Glpi\\Controller\\Security\\MFAController::verify'], null, ['POST' => 0], null, false, false, null]],
        '/MFA/ShowBackupCodes' => [[['_route' => 'mfa_show_status', '_controller' => 'Glpi\\Controller\\Security\\MFAController::showBackupCodes'], null, ['GET' => 0], null, false, false, null]],
        '/ServiceCatalog' => [[['_route' => 'glpi_service_catalog', '_controller' => 'Glpi\\Controller\\ServiceCatalog\\IndexController'], null, ['GET' => 0], null, false, false, null]],
        '/ServiceCatalog/Items' => [[['_route' => 'glpi_form_list', '_controller' => 'Glpi\\Controller\\ServiceCatalog\\ItemsController'], null, ['GET' => 0], null, false, false, null]],
        '/Session/ChangeEntity' => [[['_route' => 'glpi_change_entity', '_controller' => 'Glpi\\Controller\\Session\\ChangeEntityController'], null, ['POST' => 0], null, false, false, null]],
        '/Session/ChangeProfile' => [[['_route' => 'glpi_change_profile', '_controller' => 'Glpi\\Controller\\Session\\ChangeProfileController'], null, ['POST' => 0], null, false, false, null]],
        '/status.php' => [[['_route' => 'glpi_status', '_controller' => 'Glpi\\Controller\\StatusController'], null, null, null, false, false, null]],
        '/UI/Illustration/Search' => [[['_route' => 'glpi_ui_illustration_search', '_controller' => 'Glpi\\Controller\\UI\\Illustration\\SearchController'], null, null, null, false, false, null]],
        '/UI/Illustration/Upload' => [[['_route' => 'glpi_ui_illustration_upload', '_controller' => 'Glpi\\Controller\\UI\\Illustration\\UploadController'], null, ['POST' => 0], null, false, false, null]],
        '/.well-known/change-password' => [[['_route' => 'glpi_wellknown_change_password', '_controller' => 'Glpi\\Controller\\WellKnownController::changePassword'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/api(?'
                    .'|\\.php(.*)(*:23)'
                    .'|rest\\.php(.*)(*:43)'
                .')'
                .'|/caldav\\.php(.*)(*:67)'
                .'|/Form/(?'
                    .'|([^/]++)/Destination(?'
                        .'|/(?'
                            .'|Add(*:113)'
                            .'|([^/]++)/(?'
                                .'|Purge(*:138)'
                                .'|Update(*:152)'
                            .')'
                        .')'
                        .'|s/([^/]++)(*:172)'
                    .')'
                    .'|Render/(\\d+)(*:193)'
                    .'|Translation/([^/]++)/(?'
                        .'|Add(*:228)'
                        .'|([^/]++)(?'
                            .'|/Delete(*:254)'
                            .'|(*:262)'
                        .')'
                    .')'
                .')'
                .'|/Helpdesk/Translation/([^/]++)(?'
                    .'|/Delete(*:313)'
                    .'|(*:321)'
                .')'
                .'|/Knowbase/KnowbaseItem/(?'
                    .'|(\\d+)/Content(*:369)'
                    .'|(\\d+)/Full(*:387)'
                    .'|Search/([^/]++)/(\\d+)(*:416)'
                .')'
                .'|/Plugin/([^/]++)/Logo(*:446)'
                .'|/progress/check/([^/]++)(*:478)'
                .'|/UI/Illustration/Custom(?'
                    .'|Illustration/([^/]++)(*:533)'
                    .'|Scene/([^/]++)(*:555)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        23 => [[['_route' => 'glpi_api', '_controller' => 'Glpi\\Controller\\ApiController'], ['request_parameters'], null, null, false, true, null]],
        43 => [[['_route' => 'glpi_api_rest', '_controller' => 'Glpi\\Controller\\ApiRestController'], ['request_parameters'], null, null, false, true, null]],
        67 => [[['_route' => 'glpi_caldav', '_controller' => 'Glpi\\Controller\\CaldavController'], ['request_parameters'], null, null, false, true, null]],
        113 => [[['_route' => 'glpi_form_destination_add', '_controller' => 'Glpi\\Controller\\Form\\Destination\\AddDestinationController'], ['form_id'], ['POST' => 0], null, false, false, null]],
        138 => [[['_route' => 'glpi_form_destination_purge', '_controller' => 'Glpi\\Controller\\Form\\Destination\\PurgeDestinationController'], ['form_id', 'destination_id'], ['POST' => 0], null, false, false, null]],
        152 => [[['_route' => 'glpi_form_destination_update', '_controller' => 'Glpi\\Controller\\Form\\Destination\\UpdateDestinationController'], ['form_id', 'destination_id'], ['POST' => 0], null, false, false, null]],
        172 => [[['_route' => 'glpi_form_destination_get_form', '_controller' => 'Glpi\\Controller\\Form\\Destination\\GetDestinationFormController'], ['form_id', 'destination_id'], ['GET' => 0], null, false, true, null]],
        193 => [[['_route' => 'glpi_form_render', '_controller' => 'Glpi\\Controller\\Form\\RendererController'], ['id'], ['GET' => 0], null, false, true, null]],
        228 => [[['_route' => 'glpi_add_form_translation', '_controller' => 'Glpi\\Controller\\Form\\Translation\\AddNewFormTranslationController'], ['form_id'], ['POST' => 0], null, false, false, null]],
        254 => [[['_route' => 'glpi_delete_form_translation', '_controller' => 'Glpi\\Controller\\Form\\Translation\\DeleteFormTranslationController'], ['form_id', 'language'], ['POST' => 0], null, false, false, null]],
        262 => [[['_route' => 'glpi_update_form_translation', '_controller' => 'Glpi\\Controller\\Form\\Translation\\UpdateFormTranslationController'], ['form_id', 'language'], ['POST' => 0], null, false, true, null]],
        313 => [[['_route' => 'glpi_delete_helpdesk_translation', '_controller' => 'Glpi\\Controller\\Helpdesk\\Translation\\DeleteHelpdeskTranslationController'], ['language'], ['POST' => 0], null, false, false, null]],
        321 => [[['_route' => 'glpi_update_helpdesk_translation', '_controller' => 'Glpi\\Controller\\Helpdesk\\Translation\\UpdateHelpdeskTranslationController'], ['language'], ['POST' => 0], null, false, true, null]],
        369 => [[['_route' => 'knowbaseitem_content', '_controller' => 'Glpi\\Controller\\Knowbase\\KnowbaseItemController::content'], ['knowbaseitems_id'], null, null, false, false, null]],
        387 => [[['_route' => 'knowbaseitem_full', '_controller' => 'Glpi\\Controller\\Knowbase\\KnowbaseItemController::full'], ['knowbaseitems_id'], null, null, false, false, null]],
        416 => [[['_route' => 'knowbaseitem_search', '_controller' => 'Glpi\\Controller\\Knowbase\\KnowbaseItemController::search'], ['itemtype', 'items_id'], null, null, false, true, null]],
        446 => [[['_route' => 'glpi_plugin_logo', '_controller' => 'Glpi\\Controller\\Plugin\\LogoController'], ['plugin_key'], ['GET' => 0], null, false, false, null]],
        478 => [[['_route' => 'glpi_progress_check', '_controller' => 'Glpi\\Controller\\ProgressController::check'], ['key'], ['GET' => 0], null, false, true, null]],
        533 => [[['_route' => 'glpi_ui_illustration_custom_illustration', '_controller' => 'Glpi\\Controller\\UI\\Illustration\\CustomIllustrationController'], ['id'], ['GET' => 0], null, false, true, null]],
        555 => [
            [['_route' => 'glpi_ui_illustration_custom_scene', '_controller' => 'Glpi\\Controller\\UI\\Illustration\\CustomSceneController'], ['id'], ['GET' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
