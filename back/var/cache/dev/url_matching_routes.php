<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin' => [[['_route' => 'admin_dashboard', '_controller' => 'App\\Controller\\AdminController::index'], null, null, null, false, false, null]],
        '/admin/users' => [[['_route' => 'admin_manage_users', '_controller' => 'App\\Controller\\AdminController::manageUsers'], null, null, null, false, false, null]],
        '/admin/services' => [[['_route' => 'admin_manage_services', '_controller' => 'App\\Controller\\AdminController::manageServices'], null, null, null, false, false, null]],
        '/admin/jobs' => [[['_route' => 'admin_manage_jobs', '_controller' => 'App\\Controller\\AdminController::manageJobs'], null, null, null, false, false, null]],
        '/categories' => [[['_route' => 'category_list', '_controller' => 'App\\Controller\\CategoryController::index'], null, ['GET' => 0], null, false, false, null]],
        '/clients' => [[['_route' => 'client_list', '_controller' => 'App\\Controller\\ClientController::index'], null, null, null, false, false, null]],
        '/dashboard' => [[['_route' => 'dashboard', '_controller' => 'App\\Controller\\DashboardController::dashboard'], null, null, null, false, false, null]],
        '/freelancers' => [[['_route' => 'freelancer_list', '_controller' => 'App\\Controller\\FreelancerController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, ['GET' => 0], null, false, false, null]],
        '/banned' => [[['_route' => 'banned_page', '_controller' => 'App\\Controller\\HomeController::bannedPage'], null, null, null, false, false, null]],
        '/jobs' => [[['_route' => 'job_list', '_controller' => 'App\\Controller\\JobController::list'], null, null, null, false, false, null]],
        '/jobs/new' => [[['_route' => 'job_create', '_controller' => 'App\\Controller\\JobController::create'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\LoginController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\LoginController::logout'], null, null, null, false, false, null]],
        '/create-checkout-session' => [[['_route' => 'create_checkout_session', '_controller' => 'App\\Controller\\PaymentController::createCheckoutSession'], null, null, null, false, false, null]],
        '/profile' => [[['_route' => 'profile', '_controller' => 'App\\Controller\\ProfileController::view'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/services' => [[['_route' => 'service_list', '_controller' => 'App\\Controller\\ServiceController::list'], null, null, null, false, false, null]],
        '/service/new' => [[['_route' => 'service_new', '_controller' => 'App\\Controller\\ServiceController::new'], null, null, null, false, false, null]],
        '/payment-success' => [[['_route' => 'payment_success', '_controller' => 'App\\Controller\\ServiceController::paymentSuccess'], null, null, null, false, false, null]],
        '/payment-cancel' => [[['_route' => 'payment_cancel', '_controller' => 'App\\Controller\\ServiceController::paymentCancel'], null, null, null, false, false, null]],
        '/connect/google' => [[['_route' => 'connect_google_start', '_controller' => 'App\\Controller\\GoogleController::connect'], null, null, null, false, false, null]],
        '/connect/google/check' => [[['_route' => 'connect_google_check'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/a(?'
                    .'|pi(?'
                        .'|/(?'
                            .'|\\.well\\-known/genid/([^/]++)(*:49)'
                            .'|errors/(\\d+)(*:68)'
                            .'|validation_errors/([^/]++)(*:101)'
                        .')'
                        .'|(?:/(index)(?:\\.([^/]++))?)?(*:138)'
                        .'|/(?'
                            .'|docs(?:\\.([^/]++))?(*:169)'
                            .'|c(?'
                                .'|ontexts/([^.]+)(?:\\.(jsonld))?(*:211)'
                                .'|ategories(?'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(*:257)'
                                    .'|(?:\\.([^/]++))?(?'
                                        .'|(*:283)'
                                    .')'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                        .'|(*:321)'
                                    .')'
                                .')'
                                .'|lients(?'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(*:366)'
                                    .'|(?:\\.([^/]++))?(?'
                                        .'|(*:392)'
                                    .')'
                                    .'|/(?'
                                        .'|([^/\\.]++)(?:\\.([^/]++))?(?'
                                            .'|(*:433)'
                                        .')'
                                        .'|([^/]++)(?'
                                            .'|(*:453)'
                                        .')'
                                    .')'
                                    .'|(*:463)'
                                .')'
                            .')'
                            .'|validation_errors/([^/]++)(?'
                                .'|(*:502)'
                            .')'
                            .'|badges(?'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(*:546)'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:572)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:610)'
                                .')'
                            .')'
                            .'|freelancers(?'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(*:660)'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:686)'
                                .')'
                                .'|/(?'
                                    .'|([^/\\.]++)(?:\\.([^/]++))?(?'
                                        .'|(*:727)'
                                    .')'
                                    .'|([^/]++)(?'
                                        .'|(*:747)'
                                    .')'
                                .')'
                                .'|(*:757)'
                            .')'
                            .'|jobs(?'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(*:799)'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:825)'
                                .')'
                                .'|/(?'
                                    .'|([^/\\.]++)(?:\\.([^/]++))?(?'
                                        .'|(*:866)'
                                    .')'
                                    .'|([^/]++)(?'
                                        .'|(*:886)'
                                    .')'
                                .')'
                                .'|(*:896)'
                            .')'
                            .'|profiles(?'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(*:942)'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:968)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:1006)'
                                .')'
                            .')'
                            .'|reviews(?'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(*:1053)'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:1080)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:1119)'
                                .')'
                            .')'
                            .'|s(?'
                                .'|ervices(?'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(*:1170)'
                                    .'|(?:\\.([^/]++))?(?'
                                        .'|(*:1197)'
                                    .')'
                                    .'|/(?'
                                        .'|([^/\\.]++)(?:\\.([^/]++))?(?'
                                            .'|(*:1239)'
                                        .')'
                                        .'|([^/]++)(?'
                                            .'|(*:1260)'
                                        .')'
                                    .')'
                                    .'|(*:1271)'
                                .')'
                                .'|kills(?'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(*:1315)'
                                    .'|(?:\\.([^/]++))?(?'
                                        .'|(*:1342)'
                                    .')'
                                    .'|/(?'
                                        .'|([^/\\.]++)(?:\\.([^/]++))?(?'
                                            .'|(*:1384)'
                                        .')'
                                        .'|([^/]++)(?'
                                            .'|(*:1405)'
                                        .')'
                                    .')'
                                    .'|(*:1416)'
                                .')'
                            .')'
                            .'|users(?'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(*:1461)'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:1488)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:1527)'
                                .')'
                            .')'
                        .')'
                    .')'
                    .'|dmin/services/delete/([^/]++)(*:1569)'
                .')'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:1607)'
                .'|/c(?'
                    .'|ategories/([^/]++)/services(*:1648)'
                    .'|lient/([^/]++)(*:1671)'
                .')'
                .'|/freelancer/([^/]++)(*:1701)'
                .'|/jobs/(?'
                    .'|delete/(\\d+)(*:1731)'
                    .'|(\\d+)(*:1745)'
                .')'
                .'|/service/(?'
                    .'|delete/(\\d+)(*:1779)'
                    .'|([^/]++)/(?'
                        .'|reserve(*:1807)'
                        .'|checkout(*:1824)'
                    .')'
                    .'|(\\d+)(*:1839)'
                    .'|edit/(\\d+)(*:1858)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        49 => [[['_route' => 'api_genid', '_controller' => 'api_platform.action.not_exposed', '_api_respond' => 'true'], ['id'], ['GET' => 0, 'HEAD' => 1], null, false, true, null]],
        68 => [[['_route' => 'api_errors', '_controller' => 'api_platform.action.error_page'], ['status'], ['GET' => 0, 'HEAD' => 1], null, false, true, null]],
        101 => [[['_route' => 'api_validation_errors', '_controller' => 'api_platform.action.not_exposed'], ['id'], ['GET' => 0, 'HEAD' => 1], null, false, true, null]],
        138 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index', '_format'], ['GET' => 0, 'HEAD' => 1], null, false, true, null]],
        169 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], ['_format'], ['GET' => 0, 'HEAD' => 1], null, false, true, null]],
        211 => [[['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName', '_format'], ['GET' => 0, 'HEAD' => 1], null, false, true, null]],
        257 => [[['_route' => '_api_/categories/{id}{._format}_get', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Category', '_api_operation_name' => '_api_/categories/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        283 => [
            [['_route' => '_api_/categories{._format}_get_collection', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Category', '_api_operation_name' => '_api_/categories{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/categories{._format}_post', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Category', '_api_operation_name' => '_api_/categories{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        321 => [
            [['_route' => '_api_/categories/{id}{._format}_patch', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Category', '_api_operation_name' => '_api_/categories/{id}{._format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/categories/{id}{._format}_delete', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Category', '_api_operation_name' => '_api_/categories/{id}{._format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        366 => [[['_route' => '_api_/clients/{id}{._format}_get', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Client', '_api_operation_name' => '_api_/clients/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        392 => [
            [['_route' => '_api_/clients{._format}_get_collection', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Client', '_api_operation_name' => '_api_/clients{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/clients{._format}_post', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Client', '_api_operation_name' => '_api_/clients{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        433 => [
            [['_route' => '_api_/clients/{id}{._format}_patch', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Client', '_api_operation_name' => '_api_/clients/{id}{._format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/clients/{id}{._format}_delete', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Client', '_api_operation_name' => '_api_/clients/{id}{._format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        453 => [
            [['_route' => 'app_clientapi_show', '_controller' => 'App\\Controller\\ClientApiController::show'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'app_clientapi_update', '_controller' => 'App\\Controller\\ClientApiController::update'], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'app_clientapi_delete', '_controller' => 'App\\Controller\\ClientApiController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        463 => [
            [['_route' => 'app_clientapi_index', '_controller' => 'App\\Controller\\ClientApiController::index'], [], ['GET' => 0], null, true, false, null],
            [['_route' => 'app_clientapi_create', '_controller' => 'App\\Controller\\ClientApiController::create'], [], ['POST' => 0], null, true, false, null],
        ],
        502 => [
            [['_route' => '_api_validation_errors_problem', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => null, '_api_resource_class' => 'ApiPlatform\\Validator\\Exception\\ValidationException', '_api_operation_name' => '_api_validation_errors_problem'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_validation_errors_hydra', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => null, '_api_resource_class' => 'ApiPlatform\\Validator\\Exception\\ValidationException', '_api_operation_name' => '_api_validation_errors_hydra'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_validation_errors_jsonapi', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => null, '_api_resource_class' => 'ApiPlatform\\Validator\\Exception\\ValidationException', '_api_operation_name' => '_api_validation_errors_jsonapi'], ['id'], ['GET' => 0], null, false, true, null],
        ],
        546 => [[['_route' => '_api_/badges/{id}{._format}_get', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Badge', '_api_operation_name' => '_api_/badges/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        572 => [
            [['_route' => '_api_/badges{._format}_get_collection', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Badge', '_api_operation_name' => '_api_/badges{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/badges{._format}_post', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Badge', '_api_operation_name' => '_api_/badges{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        610 => [
            [['_route' => '_api_/badges/{id}{._format}_patch', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Badge', '_api_operation_name' => '_api_/badges/{id}{._format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/badges/{id}{._format}_delete', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Badge', '_api_operation_name' => '_api_/badges/{id}{._format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        660 => [[['_route' => '_api_/freelancers/{id}{._format}_get', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Freelancer', '_api_operation_name' => '_api_/freelancers/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        686 => [
            [['_route' => '_api_/freelancers{._format}_get_collection', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Freelancer', '_api_operation_name' => '_api_/freelancers{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/freelancers{._format}_post', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Freelancer', '_api_operation_name' => '_api_/freelancers{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        727 => [
            [['_route' => '_api_/freelancers/{id}{._format}_patch', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Freelancer', '_api_operation_name' => '_api_/freelancers/{id}{._format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/freelancers/{id}{._format}_delete', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Freelancer', '_api_operation_name' => '_api_/freelancers/{id}{._format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        747 => [
            [['_route' => 'app_freelancerapi_show', '_controller' => 'App\\Controller\\FreelancerApiController::show'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'app_freelancerapi_update', '_controller' => 'App\\Controller\\FreelancerApiController::update'], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'app_freelancerapi_delete', '_controller' => 'App\\Controller\\FreelancerApiController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        757 => [
            [['_route' => 'app_freelancerapi_index', '_controller' => 'App\\Controller\\FreelancerApiController::index'], [], ['GET' => 0], null, true, false, null],
            [['_route' => 'app_freelancerapi_create', '_controller' => 'App\\Controller\\FreelancerApiController::create'], [], ['POST' => 0], null, true, false, null],
        ],
        799 => [[['_route' => '_api_/jobs/{id}{._format}_get', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Job', '_api_operation_name' => '_api_/jobs/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        825 => [
            [['_route' => '_api_/jobs{._format}_get_collection', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Job', '_api_operation_name' => '_api_/jobs{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/jobs{._format}_post', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Job', '_api_operation_name' => '_api_/jobs{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        866 => [
            [['_route' => '_api_/jobs/{id}{._format}_patch', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Job', '_api_operation_name' => '_api_/jobs/{id}{._format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/jobs/{id}{._format}_delete', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Job', '_api_operation_name' => '_api_/jobs/{id}{._format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        886 => [
            [['_route' => 'app_jobapi_show', '_controller' => 'App\\Controller\\JobApiController::show'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'app_jobapi_update', '_controller' => 'App\\Controller\\JobApiController::update'], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'app_jobapi_delete', '_controller' => 'App\\Controller\\JobApiController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        896 => [
            [['_route' => 'app_jobapi_index', '_controller' => 'App\\Controller\\JobApiController::index'], [], ['GET' => 0], null, true, false, null],
            [['_route' => 'app_jobapi_create', '_controller' => 'App\\Controller\\JobApiController::create'], [], ['POST' => 0], null, true, false, null],
        ],
        942 => [[['_route' => '_api_/profiles/{id}{._format}_get', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Profile', '_api_operation_name' => '_api_/profiles/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        968 => [
            [['_route' => '_api_/profiles{._format}_get_collection', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Profile', '_api_operation_name' => '_api_/profiles{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/profiles{._format}_post', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Profile', '_api_operation_name' => '_api_/profiles{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        1006 => [
            [['_route' => '_api_/profiles/{id}{._format}_patch', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Profile', '_api_operation_name' => '_api_/profiles/{id}{._format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/profiles/{id}{._format}_delete', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Profile', '_api_operation_name' => '_api_/profiles/{id}{._format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        1053 => [[['_route' => '_api_/reviews/{id}{._format}_get', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Review', '_api_operation_name' => '_api_/reviews/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        1080 => [
            [['_route' => '_api_/reviews{._format}_get_collection', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Review', '_api_operation_name' => '_api_/reviews{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/reviews{._format}_post', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Review', '_api_operation_name' => '_api_/reviews{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        1119 => [
            [['_route' => '_api_/reviews/{id}{._format}_patch', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Review', '_api_operation_name' => '_api_/reviews/{id}{._format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/reviews/{id}{._format}_delete', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Review', '_api_operation_name' => '_api_/reviews/{id}{._format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        1170 => [[['_route' => '_api_/services/{id}{._format}_get', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Service', '_api_operation_name' => '_api_/services/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        1197 => [
            [['_route' => '_api_/services{._format}_get_collection', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Service', '_api_operation_name' => '_api_/services{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/services{._format}_post', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Service', '_api_operation_name' => '_api_/services{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        1239 => [
            [['_route' => '_api_/services/{id}{._format}_patch', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Service', '_api_operation_name' => '_api_/services/{id}{._format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/services/{id}{._format}_delete', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Service', '_api_operation_name' => '_api_/services/{id}{._format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        1260 => [
            [['_route' => 'app_serviceapi_show', '_controller' => 'App\\Controller\\ServiceApiController::show'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'app_serviceapi_update', '_controller' => 'App\\Controller\\ServiceApiController::update'], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'app_serviceapi_delete', '_controller' => 'App\\Controller\\ServiceApiController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        1271 => [
            [['_route' => 'app_serviceapi_index', '_controller' => 'App\\Controller\\ServiceApiController::index'], [], ['GET' => 0], null, true, false, null],
            [['_route' => 'app_serviceapi_create', '_controller' => 'App\\Controller\\ServiceApiController::create'], [], ['POST' => 0], null, true, false, null],
        ],
        1315 => [[['_route' => '_api_/skills/{id}{._format}_get', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Skill', '_api_operation_name' => '_api_/skills/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        1342 => [
            [['_route' => '_api_/skills{._format}_get_collection', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Skill', '_api_operation_name' => '_api_/skills{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/skills{._format}_post', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Skill', '_api_operation_name' => '_api_/skills{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        1384 => [
            [['_route' => '_api_/skills/{id}{._format}_patch', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Skill', '_api_operation_name' => '_api_/skills/{id}{._format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/skills/{id}{._format}_delete', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Skill', '_api_operation_name' => '_api_/skills/{id}{._format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        1405 => [
            [['_route' => 'app_skillapi_show', '_controller' => 'App\\Controller\\SkillApiController::show'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'app_skillapi_update', '_controller' => 'App\\Controller\\SkillApiController::update'], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'app_skillapi_delete', '_controller' => 'App\\Controller\\SkillApiController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        1416 => [
            [['_route' => 'app_skillapi_index', '_controller' => 'App\\Controller\\SkillApiController::index'], [], ['GET' => 0], null, true, false, null],
            [['_route' => 'app_skillapi_create', '_controller' => 'App\\Controller\\SkillApiController::create'], [], ['POST' => 0], null, true, false, null],
        ],
        1461 => [[['_route' => '_api_/users/{id}{._format}_get', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        1488 => [
            [['_route' => '_api_/users{._format}_get_collection', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/users{._format}_post', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        1527 => [
            [['_route' => '_api_/users/{id}{._format}_patch', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users/{id}{._format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/users/{id}{._format}_delete', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users/{id}{._format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        1569 => [[['_route' => 'admin_delete_service', '_controller' => 'App\\Controller\\AdminController::deleteService'], ['id'], ['POST' => 0], null, false, true, null]],
        1607 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        1648 => [[['_route' => 'category_services', '_controller' => 'App\\Controller\\CategoryController::services'], ['id'], ['GET' => 0], null, false, false, null]],
        1671 => [[['_route' => 'client_detail', '_controller' => 'App\\Controller\\ClientController::show'], ['id'], null, null, false, true, null]],
        1701 => [[['_route' => 'freelancer_detail', '_controller' => 'App\\Controller\\FreelancerController::show'], ['id'], null, null, false, true, null]],
        1731 => [[['_route' => 'job_delete', '_controller' => 'App\\Controller\\JobController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1745 => [[['_route' => 'job_detail', '_controller' => 'App\\Controller\\JobController::detail'], ['id'], null, null, false, true, null]],
        1779 => [[['_route' => 'service_delete', '_controller' => 'App\\Controller\\ServiceController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1807 => [[['_route' => 'service_reserve', '_controller' => 'App\\Controller\\ServiceController::reserve'], ['id'], null, null, false, false, null]],
        1824 => [[['_route' => 'service_checkout', '_controller' => 'App\\Controller\\ServiceController::checkout'], ['id'], null, null, false, false, null]],
        1839 => [[['_route' => 'service_detail', '_controller' => 'App\\Controller\\ServiceDetailController::detail'], ['id'], null, null, false, true, null]],
        1858 => [
            [['_route' => 'service_edit', '_controller' => 'App\\Controller\\ServiceEditController::edit'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
