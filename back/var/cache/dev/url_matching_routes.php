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
        '/jobs/new' => [[['_route' => 'job_create', '_controller' => 'App\\Controller\\JobController::create'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                        .'|(*:430)'
                                    .')'
                                .')'
                            .')'
                            .'|validation_errors/([^/]++)(?'
                                .'|(*:470)'
                            .')'
                            .'|badges(?'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(*:514)'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:540)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:578)'
                                .')'
                            .')'
                            .'|freelancers(?'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(*:628)'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:654)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:692)'
                                .')'
                            .')'
                            .'|jobs(?'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(*:735)'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:761)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:799)'
                                .')'
                            .')'
                            .'|profiles(?'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(*:846)'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:872)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:910)'
                                .')'
                            .')'
                            .'|reviews(?'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(*:956)'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:982)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:1020)'
                                .')'
                            .')'
                            .'|s(?'
                                .'|ervices(?'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(*:1071)'
                                    .'|(?:\\.([^/]++))?(?'
                                        .'|(*:1098)'
                                    .')'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                        .'|(*:1137)'
                                    .')'
                                .')'
                                .'|kills(?'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(*:1182)'
                                    .'|(?:\\.([^/]++))?(?'
                                        .'|(*:1209)'
                                    .')'
                                    .'|/(?'
                                        .'|([^/\\.]++)(?:\\.([^/]++))?(?'
                                            .'|(*:1251)'
                                        .')'
                                        .'|([^/]++)(?'
                                            .'|(*:1272)'
                                        .')'
                                    .')'
                                    .'|(*:1283)'
                                .')'
                            .')'
                            .'|users(?'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(*:1328)'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:1355)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:1394)'
                                .')'
                            .')'
                        .')'
                    .')'
                    .'|dmin/services/delete/([^/]++)(*:1436)'
                .')'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:1474)'
                .'|/c(?'
                    .'|ategories/([^/]++)/services(*:1515)'
                    .'|lient/([^/]++)(*:1538)'
                .')'
                .'|/reservation/([^/]++)/(?'
                    .'|accept(*:1579)'
                    .'|reject(*:1594)'
                .')'
                .'|/freelancer/([^/]++)(*:1624)'
                .'|/jobs/(?'
                    .'|(\\d+)/delete(*:1654)'
                    .'|(\\d+)(*:1668)'
                    .'|([^/]++)/apply(*:1691)'
                    .'|application/([^/]++)/(?'
                        .'|accept(*:1730)'
                        .'|reject(*:1745)'
                    .')'
                .')'
                .'|/service/(?'
                    .'|delete/(\\d+)(*:1780)'
                    .'|([^/]++)/(?'
                        .'|reserve(*:1808)'
                        .'|checkout(*:1825)'
                    .')'
                    .'|(\\d+)(*:1840)'
                    .'|edit/(\\d+)(*:1859)'
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
        430 => [
            [['_route' => '_api_/clients/{id}{._format}_patch', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Client', '_api_operation_name' => '_api_/clients/{id}{._format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/clients/{id}{._format}_delete', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Client', '_api_operation_name' => '_api_/clients/{id}{._format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        470 => [
            [['_route' => '_api_validation_errors_problem', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => null, '_api_resource_class' => 'ApiPlatform\\Validator\\Exception\\ValidationException', '_api_operation_name' => '_api_validation_errors_problem'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_validation_errors_hydra', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => null, '_api_resource_class' => 'ApiPlatform\\Validator\\Exception\\ValidationException', '_api_operation_name' => '_api_validation_errors_hydra'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_validation_errors_jsonapi', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => null, '_api_resource_class' => 'ApiPlatform\\Validator\\Exception\\ValidationException', '_api_operation_name' => '_api_validation_errors_jsonapi'], ['id'], ['GET' => 0], null, false, true, null],
        ],
        514 => [[['_route' => '_api_/badges/{id}{._format}_get', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Badge', '_api_operation_name' => '_api_/badges/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        540 => [
            [['_route' => '_api_/badges{._format}_get_collection', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Badge', '_api_operation_name' => '_api_/badges{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/badges{._format}_post', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Badge', '_api_operation_name' => '_api_/badges{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        578 => [
            [['_route' => '_api_/badges/{id}{._format}_patch', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Badge', '_api_operation_name' => '_api_/badges/{id}{._format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/badges/{id}{._format}_delete', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Badge', '_api_operation_name' => '_api_/badges/{id}{._format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        628 => [[['_route' => '_api_/freelancers/{id}{._format}_get', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Freelancer', '_api_operation_name' => '_api_/freelancers/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        654 => [
            [['_route' => '_api_/freelancers{._format}_get_collection', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Freelancer', '_api_operation_name' => '_api_/freelancers{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/freelancers{._format}_post', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Freelancer', '_api_operation_name' => '_api_/freelancers{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        692 => [
            [['_route' => '_api_/freelancers/{id}{._format}_patch', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Freelancer', '_api_operation_name' => '_api_/freelancers/{id}{._format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/freelancers/{id}{._format}_delete', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Freelancer', '_api_operation_name' => '_api_/freelancers/{id}{._format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        735 => [[['_route' => '_api_/jobs/{id}{._format}_get', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Job', '_api_operation_name' => '_api_/jobs/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        761 => [
            [['_route' => '_api_/jobs{._format}_get_collection', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Job', '_api_operation_name' => '_api_/jobs{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/jobs{._format}_post', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Job', '_api_operation_name' => '_api_/jobs{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        799 => [
            [['_route' => '_api_/jobs/{id}{._format}_patch', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Job', '_api_operation_name' => '_api_/jobs/{id}{._format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/jobs/{id}{._format}_delete', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Job', '_api_operation_name' => '_api_/jobs/{id}{._format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        846 => [[['_route' => '_api_/profiles/{id}{._format}_get', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Profile', '_api_operation_name' => '_api_/profiles/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        872 => [
            [['_route' => '_api_/profiles{._format}_get_collection', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Profile', '_api_operation_name' => '_api_/profiles{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/profiles{._format}_post', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Profile', '_api_operation_name' => '_api_/profiles{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        910 => [
            [['_route' => '_api_/profiles/{id}{._format}_patch', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Profile', '_api_operation_name' => '_api_/profiles/{id}{._format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/profiles/{id}{._format}_delete', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Profile', '_api_operation_name' => '_api_/profiles/{id}{._format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        956 => [[['_route' => '_api_/reviews/{id}{._format}_get', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Review', '_api_operation_name' => '_api_/reviews/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        982 => [
            [['_route' => '_api_/reviews{._format}_get_collection', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Review', '_api_operation_name' => '_api_/reviews{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/reviews{._format}_post', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Review', '_api_operation_name' => '_api_/reviews{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        1020 => [
            [['_route' => '_api_/reviews/{id}{._format}_patch', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Review', '_api_operation_name' => '_api_/reviews/{id}{._format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/reviews/{id}{._format}_delete', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Review', '_api_operation_name' => '_api_/reviews/{id}{._format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        1071 => [[['_route' => '_api_/services/{id}{._format}_get', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Service', '_api_operation_name' => '_api_/services/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        1098 => [
            [['_route' => '_api_/services{._format}_get_collection', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Service', '_api_operation_name' => '_api_/services{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/services{._format}_post', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Service', '_api_operation_name' => '_api_/services{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        1137 => [
            [['_route' => '_api_/services/{id}{._format}_patch', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Service', '_api_operation_name' => '_api_/services/{id}{._format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/services/{id}{._format}_delete', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Service', '_api_operation_name' => '_api_/services/{id}{._format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        1182 => [[['_route' => '_api_/skills/{id}{._format}_get', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Skill', '_api_operation_name' => '_api_/skills/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        1209 => [
            [['_route' => '_api_/skills{._format}_get_collection', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Skill', '_api_operation_name' => '_api_/skills{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/skills{._format}_post', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Skill', '_api_operation_name' => '_api_/skills{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        1251 => [
            [['_route' => '_api_/skills/{id}{._format}_patch', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Skill', '_api_operation_name' => '_api_/skills/{id}{._format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/skills/{id}{._format}_delete', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Skill', '_api_operation_name' => '_api_/skills/{id}{._format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        1272 => [
            [['_route' => 'app_skillapi_show', '_controller' => 'App\\Controller\\SkillApiController::show'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'app_skillapi_update', '_controller' => 'App\\Controller\\SkillApiController::update'], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'app_skillapi_delete', '_controller' => 'App\\Controller\\SkillApiController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        1283 => [
            [['_route' => 'app_skillapi_index', '_controller' => 'App\\Controller\\SkillApiController::index'], [], ['GET' => 0], null, true, false, null],
            [['_route' => 'app_skillapi_create', '_controller' => 'App\\Controller\\SkillApiController::create'], [], ['POST' => 0], null, true, false, null],
        ],
        1328 => [[['_route' => '_api_/users/{id}{._format}_get', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        1355 => [
            [['_route' => '_api_/users{._format}_get_collection', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/users{._format}_post', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        1394 => [
            [['_route' => '_api_/users/{id}{._format}_patch', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users/{id}{._format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/users/{id}{._format}_delete', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users/{id}{._format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        1436 => [[['_route' => 'admin_delete_service', '_controller' => 'App\\Controller\\AdminController::deleteService'], ['id'], ['POST' => 0], null, false, true, null]],
        1474 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        1515 => [[['_route' => 'category_services', '_controller' => 'App\\Controller\\CategoryController::services'], ['id'], ['GET' => 0], null, false, false, null]],
        1538 => [[['_route' => 'client_detail', '_controller' => 'App\\Controller\\ClientController::show'], ['id'], null, null, false, true, null]],
        1579 => [[['_route' => 'reservation_accept', '_controller' => 'App\\Controller\\DashboardController::acceptReservation'], ['id'], ['POST' => 0], null, false, false, null]],
        1594 => [[['_route' => 'reservation_reject', '_controller' => 'App\\Controller\\DashboardController::rejectReservation'], ['id'], ['POST' => 0], null, false, false, null]],
        1624 => [[['_route' => 'freelancer_detail', '_controller' => 'App\\Controller\\FreelancerController::show'], ['id'], null, null, false, true, null]],
        1654 => [[['_route' => 'job_delete', '_controller' => 'App\\Controller\\JobController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        1668 => [[['_route' => 'job_detail', '_controller' => 'App\\Controller\\JobController::detail'], ['id'], null, null, false, true, null]],
        1691 => [[['_route' => 'job_apply', '_controller' => 'App\\Controller\\JobController::apply'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1730 => [[['_route' => 'job_application_accept', '_controller' => 'App\\Controller\\JobController::acceptApplication'], ['id'], ['POST' => 0], null, false, false, null]],
        1745 => [[['_route' => 'job_application_reject', '_controller' => 'App\\Controller\\JobController::rejectApplication'], ['id'], ['POST' => 0], null, false, false, null]],
        1780 => [[['_route' => 'service_delete', '_controller' => 'App\\Controller\\ServiceController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1808 => [[['_route' => 'service_reserve', '_controller' => 'App\\Controller\\ServiceController::reserve'], ['id'], null, null, false, false, null]],
        1825 => [[['_route' => 'service_checkout', '_controller' => 'App\\Controller\\ServiceController::checkout'], ['id'], null, null, false, false, null]],
        1840 => [[['_route' => 'service_detail', '_controller' => 'App\\Controller\\ServiceDetailController::detail'], ['id'], null, null, false, true, null]],
        1859 => [
            [['_route' => 'service_edit', '_controller' => 'App\\Controller\\ServiceEditController::edit'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
