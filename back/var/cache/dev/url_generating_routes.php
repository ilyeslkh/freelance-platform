<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'api_genid' => [['id'], ['_controller' => 'api_platform.action.not_exposed', '_api_respond' => 'true'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/.well-known/genid']], [], [], []],
    'api_errors' => [['status'], ['_controller' => 'api_platform.action.error_page'], ['status' => '\\d+'], [['variable', '/', '\\d+', 'status', true], ['text', '/api/errors']], [], [], []],
    'api_validation_errors' => [['id'], ['_controller' => 'api_platform.action.not_exposed'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/validation_errors']], [], [], []],
    'api_entrypoint' => [['index', '_format'], ['_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index' => 'index'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', 'index', 'index', true], ['text', '/api']], [], [], []],
    'api_doc' => [['_format'], ['_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/docs']], [], [], []],
    'api_jsonld_context' => [['shortName', '_format'], ['_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName' => '[^.]+', '_format' => 'jsonld'], [['variable', '.', 'jsonld', '_format', true], ['variable', '/', '[^.]+', 'shortName', true], ['text', '/api/contexts']], [], [], []],
    '_api_validation_errors_problem' => [['id'], ['_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => null, '_api_resource_class' => 'ApiPlatform\\Validator\\Exception\\ValidationException', '_api_operation_name' => '_api_validation_errors_problem'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/validation_errors']], [], [], []],
    '_api_validation_errors_hydra' => [['id'], ['_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => null, '_api_resource_class' => 'ApiPlatform\\Validator\\Exception\\ValidationException', '_api_operation_name' => '_api_validation_errors_hydra'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/validation_errors']], [], [], []],
    '_api_validation_errors_jsonapi' => [['id'], ['_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => null, '_api_resource_class' => 'ApiPlatform\\Validator\\Exception\\ValidationException', '_api_operation_name' => '_api_validation_errors_jsonapi'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/validation_errors']], [], [], []],
    '_api_/badges/{id}{._format}_get' => [['id', '_format'], ['_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Badge', '_api_operation_name' => '_api_/badges/{id}{._format}_get'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/badges']], [], [], []],
    '_api_/badges{._format}_get_collection' => [['_format'], ['_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Badge', '_api_operation_name' => '_api_/badges{._format}_get_collection'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/badges']], [], [], []],
    '_api_/badges{._format}_post' => [['_format'], ['_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Badge', '_api_operation_name' => '_api_/badges{._format}_post'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/badges']], [], [], []],
    '_api_/badges/{id}{._format}_patch' => [['id', '_format'], ['_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Badge', '_api_operation_name' => '_api_/badges/{id}{._format}_patch'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/badges']], [], [], []],
    '_api_/badges/{id}{._format}_delete' => [['id', '_format'], ['_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Badge', '_api_operation_name' => '_api_/badges/{id}{._format}_delete'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/badges']], [], [], []],
    '_api_/categories/{id}{._format}_get' => [['id', '_format'], ['_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Category', '_api_operation_name' => '_api_/categories/{id}{._format}_get'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/categories']], [], [], []],
    '_api_/categories{._format}_get_collection' => [['_format'], ['_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Category', '_api_operation_name' => '_api_/categories{._format}_get_collection'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/categories']], [], [], []],
    '_api_/categories{._format}_post' => [['_format'], ['_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Category', '_api_operation_name' => '_api_/categories{._format}_post'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/categories']], [], [], []],
    '_api_/categories/{id}{._format}_patch' => [['id', '_format'], ['_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Category', '_api_operation_name' => '_api_/categories/{id}{._format}_patch'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/categories']], [], [], []],
    '_api_/categories/{id}{._format}_delete' => [['id', '_format'], ['_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Category', '_api_operation_name' => '_api_/categories/{id}{._format}_delete'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/categories']], [], [], []],
    '_api_/clients/{id}{._format}_get' => [['id', '_format'], ['_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Client', '_api_operation_name' => '_api_/clients/{id}{._format}_get'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/clients']], [], [], []],
    '_api_/clients{._format}_get_collection' => [['_format'], ['_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Client', '_api_operation_name' => '_api_/clients{._format}_get_collection'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/clients']], [], [], []],
    '_api_/clients{._format}_post' => [['_format'], ['_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Client', '_api_operation_name' => '_api_/clients{._format}_post'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/clients']], [], [], []],
    '_api_/clients/{id}{._format}_patch' => [['id', '_format'], ['_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Client', '_api_operation_name' => '_api_/clients/{id}{._format}_patch'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/clients']], [], [], []],
    '_api_/clients/{id}{._format}_delete' => [['id', '_format'], ['_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Client', '_api_operation_name' => '_api_/clients/{id}{._format}_delete'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/clients']], [], [], []],
    '_api_/freelancers/{id}{._format}_get' => [['id', '_format'], ['_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Freelancer', '_api_operation_name' => '_api_/freelancers/{id}{._format}_get'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/freelancers']], [], [], []],
    '_api_/freelancers{._format}_get_collection' => [['_format'], ['_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Freelancer', '_api_operation_name' => '_api_/freelancers{._format}_get_collection'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/freelancers']], [], [], []],
    '_api_/freelancers{._format}_post' => [['_format'], ['_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Freelancer', '_api_operation_name' => '_api_/freelancers{._format}_post'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/freelancers']], [], [], []],
    '_api_/freelancers/{id}{._format}_patch' => [['id', '_format'], ['_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Freelancer', '_api_operation_name' => '_api_/freelancers/{id}{._format}_patch'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/freelancers']], [], [], []],
    '_api_/freelancers/{id}{._format}_delete' => [['id', '_format'], ['_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Freelancer', '_api_operation_name' => '_api_/freelancers/{id}{._format}_delete'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/freelancers']], [], [], []],
    '_api_/jobs/{id}{._format}_get' => [['id', '_format'], ['_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Job', '_api_operation_name' => '_api_/jobs/{id}{._format}_get'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/jobs']], [], [], []],
    '_api_/jobs{._format}_get_collection' => [['_format'], ['_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Job', '_api_operation_name' => '_api_/jobs{._format}_get_collection'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/jobs']], [], [], []],
    '_api_/jobs{._format}_post' => [['_format'], ['_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Job', '_api_operation_name' => '_api_/jobs{._format}_post'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/jobs']], [], [], []],
    '_api_/jobs/{id}{._format}_patch' => [['id', '_format'], ['_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Job', '_api_operation_name' => '_api_/jobs/{id}{._format}_patch'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/jobs']], [], [], []],
    '_api_/jobs/{id}{._format}_delete' => [['id', '_format'], ['_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Job', '_api_operation_name' => '_api_/jobs/{id}{._format}_delete'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/jobs']], [], [], []],
    '_api_/profiles/{id}{._format}_get' => [['id', '_format'], ['_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Profile', '_api_operation_name' => '_api_/profiles/{id}{._format}_get'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/profiles']], [], [], []],
    '_api_/profiles{._format}_get_collection' => [['_format'], ['_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Profile', '_api_operation_name' => '_api_/profiles{._format}_get_collection'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/profiles']], [], [], []],
    '_api_/profiles{._format}_post' => [['_format'], ['_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Profile', '_api_operation_name' => '_api_/profiles{._format}_post'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/profiles']], [], [], []],
    '_api_/profiles/{id}{._format}_patch' => [['id', '_format'], ['_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Profile', '_api_operation_name' => '_api_/profiles/{id}{._format}_patch'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/profiles']], [], [], []],
    '_api_/profiles/{id}{._format}_delete' => [['id', '_format'], ['_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Profile', '_api_operation_name' => '_api_/profiles/{id}{._format}_delete'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/profiles']], [], [], []],
    '_api_/reviews/{id}{._format}_get' => [['id', '_format'], ['_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Review', '_api_operation_name' => '_api_/reviews/{id}{._format}_get'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/reviews']], [], [], []],
    '_api_/reviews{._format}_get_collection' => [['_format'], ['_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Review', '_api_operation_name' => '_api_/reviews{._format}_get_collection'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/reviews']], [], [], []],
    '_api_/reviews{._format}_post' => [['_format'], ['_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Review', '_api_operation_name' => '_api_/reviews{._format}_post'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/reviews']], [], [], []],
    '_api_/reviews/{id}{._format}_patch' => [['id', '_format'], ['_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Review', '_api_operation_name' => '_api_/reviews/{id}{._format}_patch'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/reviews']], [], [], []],
    '_api_/reviews/{id}{._format}_delete' => [['id', '_format'], ['_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Review', '_api_operation_name' => '_api_/reviews/{id}{._format}_delete'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/reviews']], [], [], []],
    '_api_/services/{id}{._format}_get' => [['id', '_format'], ['_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Service', '_api_operation_name' => '_api_/services/{id}{._format}_get'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/services']], [], [], []],
    '_api_/services{._format}_get_collection' => [['_format'], ['_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Service', '_api_operation_name' => '_api_/services{._format}_get_collection'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/services']], [], [], []],
    '_api_/services{._format}_post' => [['_format'], ['_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Service', '_api_operation_name' => '_api_/services{._format}_post'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/services']], [], [], []],
    '_api_/services/{id}{._format}_patch' => [['id', '_format'], ['_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Service', '_api_operation_name' => '_api_/services/{id}{._format}_patch'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/services']], [], [], []],
    '_api_/services/{id}{._format}_delete' => [['id', '_format'], ['_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Service', '_api_operation_name' => '_api_/services/{id}{._format}_delete'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/services']], [], [], []],
    '_api_/skills/{id}{._format}_get' => [['id', '_format'], ['_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Skill', '_api_operation_name' => '_api_/skills/{id}{._format}_get'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/skills']], [], [], []],
    '_api_/skills{._format}_get_collection' => [['_format'], ['_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Skill', '_api_operation_name' => '_api_/skills{._format}_get_collection'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/skills']], [], [], []],
    '_api_/skills{._format}_post' => [['_format'], ['_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Skill', '_api_operation_name' => '_api_/skills{._format}_post'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/skills']], [], [], []],
    '_api_/skills/{id}{._format}_patch' => [['id', '_format'], ['_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Skill', '_api_operation_name' => '_api_/skills/{id}{._format}_patch'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/skills']], [], [], []],
    '_api_/skills/{id}{._format}_delete' => [['id', '_format'], ['_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Skill', '_api_operation_name' => '_api_/skills/{id}{._format}_delete'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/skills']], [], [], []],
    '_api_/users/{id}{._format}_get' => [['id', '_format'], ['_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users/{id}{._format}_get'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/users']], [], [], []],
    '_api_/users{._format}_get_collection' => [['_format'], ['_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users{._format}_get_collection'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/users']], [], [], []],
    '_api_/users{._format}_post' => [['_format'], ['_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users{._format}_post'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/users']], [], [], []],
    '_api_/users/{id}{._format}_patch' => [['id', '_format'], ['_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users/{id}{._format}_patch'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/users']], [], [], []],
    '_api_/users/{id}{._format}_delete' => [['id', '_format'], ['_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users/{id}{._format}_delete'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/users']], [], [], []],
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    'admin_dashboard' => [[], ['_controller' => 'App\\Controller\\AdminController::index'], [], [['text', '/admin']], [], [], []],
    'admin_manage_users' => [[], ['_controller' => 'App\\Controller\\AdminController::manageUsers'], [], [['text', '/admin/users']], [], [], []],
    'admin_manage_services' => [[], ['_controller' => 'App\\Controller\\AdminController::manageServices'], [], [['text', '/admin/services']], [], [], []],
    'admin_manage_jobs' => [[], ['_controller' => 'App\\Controller\\AdminController::manageJobs'], [], [['text', '/admin/jobs']], [], [], []],
    'admin_delete_service' => [['id'], ['_controller' => 'App\\Controller\\AdminController::deleteService'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/services/delete']], [], [], []],
    'category_list' => [[], ['_controller' => 'App\\Controller\\CategoryController::index'], [], [['text', '/categories']], [], [], []],
    'category_services' => [['id'], ['_controller' => 'App\\Controller\\CategoryController::services'], [], [['text', '/services'], ['variable', '/', '[^/]++', 'id', true], ['text', '/categories']], [], [], []],
    'client_list' => [[], ['_controller' => 'App\\Controller\\ClientController::index'], [], [['text', '/clients']], [], [], []],
    'client_detail' => [['id'], ['_controller' => 'App\\Controller\\ClientController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/client']], [], [], []],
    'dashboard' => [[], ['_controller' => 'App\\Controller\\DashboardController::dashboard'], [], [['text', '/dashboard']], [], [], []],
    'reservation_accept' => [['id'], ['_controller' => 'App\\Controller\\DashboardController::acceptReservation'], [], [['text', '/accept'], ['variable', '/', '[^/]++', 'id', true], ['text', '/reservation']], [], [], []],
    'reservation_reject' => [['id'], ['_controller' => 'App\\Controller\\DashboardController::rejectReservation'], [], [['text', '/reject'], ['variable', '/', '[^/]++', 'id', true], ['text', '/reservation']], [], [], []],
    'freelancer_list' => [[], ['_controller' => 'App\\Controller\\FreelancerController::index'], [], [['text', '/freelancers']], [], [], []],
    'freelancer_detail' => [['id'], ['_controller' => 'App\\Controller\\FreelancerController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/freelancer']], [], [], []],
    'home' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/']], [], [], []],
    'banned_page' => [[], ['_controller' => 'App\\Controller\\HomeController::bannedPage'], [], [['text', '/banned']], [], [], []],
    'job_list' => [[], ['_controller' => 'App\\Controller\\JobController::list'], [], [['text', '/jobs']], [], [], []],
    'job_create' => [[], ['_controller' => 'App\\Controller\\JobController::create'], [], [['text', '/jobs/new']], [], [], []],
    'job_delete' => [['id'], ['_controller' => 'App\\Controller\\JobController::delete'], ['id' => '\\d+'], [['text', '/delete'], ['variable', '/', '\\d+', 'id', true], ['text', '/jobs']], [], [], []],
    'job_detail' => [['id'], ['_controller' => 'App\\Controller\\JobController::detail'], ['id' => '\\d+'], [['variable', '/', '\\d+', 'id', true], ['text', '/jobs']], [], [], []],
    'job_apply' => [['id'], ['_controller' => 'App\\Controller\\JobController::apply'], [], [['text', '/apply'], ['variable', '/', '[^/]++', 'id', true], ['text', '/jobs']], [], [], []],
    'job_application_accept' => [['id'], ['_controller' => 'App\\Controller\\JobController::acceptApplication'], [], [['text', '/accept'], ['variable', '/', '[^/]++', 'id', true], ['text', '/jobs/application']], [], [], []],
    'job_application_reject' => [['id'], ['_controller' => 'App\\Controller\\JobController::rejectApplication'], [], [['text', '/reject'], ['variable', '/', '[^/]++', 'id', true], ['text', '/jobs/application']], [], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\LoginController::login'], [], [['text', '/login']], [], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\LoginController::logout'], [], [['text', '/logout']], [], [], []],
    'create_checkout_session' => [[], ['_controller' => 'App\\Controller\\PaymentController::createCheckoutSession'], [], [['text', '/create-checkout-session']], [], [], []],
    'profile' => [[], ['_controller' => 'App\\Controller\\ProfileController::view'], [], [['text', '/profile']], [], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], [], []],
    'service_list' => [[], ['_controller' => 'App\\Controller\\ServiceController::list'], [], [['text', '/services']], [], [], []],
    'service_new' => [[], ['_controller' => 'App\\Controller\\ServiceController::new'], [], [['text', '/service/new']], [], [], []],
    'service_delete' => [['id'], ['_controller' => 'App\\Controller\\ServiceController::delete'], ['id' => '\\d+'], [['variable', '/', '\\d+', 'id', true], ['text', '/service/delete']], [], [], []],
    'service_reserve' => [['id'], ['_controller' => 'App\\Controller\\ServiceController::reserve'], [], [['text', '/reserve'], ['variable', '/', '[^/]++', 'id', true], ['text', '/service']], [], [], []],
    'service_checkout' => [['id'], ['_controller' => 'App\\Controller\\ServiceController::checkout'], [], [['text', '/checkout'], ['variable', '/', '[^/]++', 'id', true], ['text', '/service']], [], [], []],
    'payment_success' => [[], ['_controller' => 'App\\Controller\\ServiceController::paymentSuccess'], [], [['text', '/payment-success']], [], [], []],
    'payment_cancel' => [[], ['_controller' => 'App\\Controller\\ServiceController::paymentCancel'], [], [['text', '/payment-cancel']], [], [], []],
    'service_detail' => [['id'], ['_controller' => 'App\\Controller\\ServiceDetailController::detail'], ['id' => '\\d+'], [['variable', '/', '\\d+', 'id', true], ['text', '/service']], [], [], []],
    'service_edit' => [['id'], ['_controller' => 'App\\Controller\\ServiceEditController::edit'], ['id' => '\\d+'], [['variable', '/', '\\d+', 'id', true], ['text', '/service/edit']], [], [], []],
    'app_skillapi_index' => [[], ['_controller' => 'App\\Controller\\SkillApiController::index'], [], [['text', '/api/skills/']], [], [], []],
    'app_skillapi_show' => [['id'], ['_controller' => 'App\\Controller\\SkillApiController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/skills']], [], [], []],
    'app_skillapi_create' => [[], ['_controller' => 'App\\Controller\\SkillApiController::create'], [], [['text', '/api/skills/']], [], [], []],
    'app_skillapi_update' => [['id'], ['_controller' => 'App\\Controller\\SkillApiController::update'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/skills']], [], [], []],
    'app_skillapi_delete' => [['id'], ['_controller' => 'App\\Controller\\SkillApiController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/skills']], [], [], []],
    'connect_google_start' => [[], ['_controller' => 'App\\Controller\\GoogleController::connect'], [], [['text', '/connect/google']], [], [], []],
    'connect_google_check' => [[], [], [], [['text', '/connect/google/check']], [], [], []],
    'App\Controller\AdminController::index' => [[], ['_controller' => 'App\\Controller\\AdminController::index'], [], [['text', '/admin']], [], [], []],
    'App\Controller\AdminController::manageUsers' => [[], ['_controller' => 'App\\Controller\\AdminController::manageUsers'], [], [['text', '/admin/users']], [], [], []],
    'App\Controller\AdminController::manageServices' => [[], ['_controller' => 'App\\Controller\\AdminController::manageServices'], [], [['text', '/admin/services']], [], [], []],
    'App\Controller\AdminController::manageJobs' => [[], ['_controller' => 'App\\Controller\\AdminController::manageJobs'], [], [['text', '/admin/jobs']], [], [], []],
    'App\Controller\AdminController::deleteService' => [['id'], ['_controller' => 'App\\Controller\\AdminController::deleteService'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/services/delete']], [], [], []],
    'App\Controller\CategoryController::index' => [[], ['_controller' => 'App\\Controller\\CategoryController::index'], [], [['text', '/categories']], [], [], []],
    'App\Controller\CategoryController::services' => [['id'], ['_controller' => 'App\\Controller\\CategoryController::services'], [], [['text', '/services'], ['variable', '/', '[^/]++', 'id', true], ['text', '/categories']], [], [], []],
    'App\Controller\ClientController::index' => [[], ['_controller' => 'App\\Controller\\ClientController::index'], [], [['text', '/clients']], [], [], []],
    'App\Controller\ClientController::show' => [['id'], ['_controller' => 'App\\Controller\\ClientController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/client']], [], [], []],
    'App\Controller\DashboardController::dashboard' => [[], ['_controller' => 'App\\Controller\\DashboardController::dashboard'], [], [['text', '/dashboard']], [], [], []],
    'App\Controller\DashboardController::acceptReservation' => [['id'], ['_controller' => 'App\\Controller\\DashboardController::acceptReservation'], [], [['text', '/accept'], ['variable', '/', '[^/]++', 'id', true], ['text', '/reservation']], [], [], []],
    'App\Controller\DashboardController::rejectReservation' => [['id'], ['_controller' => 'App\\Controller\\DashboardController::rejectReservation'], [], [['text', '/reject'], ['variable', '/', '[^/]++', 'id', true], ['text', '/reservation']], [], [], []],
    'App\Controller\FreelancerController::index' => [[], ['_controller' => 'App\\Controller\\FreelancerController::index'], [], [['text', '/freelancers']], [], [], []],
    'App\Controller\FreelancerController::show' => [['id'], ['_controller' => 'App\\Controller\\FreelancerController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/freelancer']], [], [], []],
    'App\Controller\GoogleController::connect' => [[], ['_controller' => 'App\\Controller\\GoogleController::connect'], [], [['text', '/connect/google']], [], [], []],
    'App\Controller\GoogleController::connectCheck' => [[], [], [], [['text', '/connect/google/check']], [], [], []],
    'App\Controller\HomeController::index' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/']], [], [], []],
    'App\Controller\HomeController::bannedPage' => [[], ['_controller' => 'App\\Controller\\HomeController::bannedPage'], [], [['text', '/banned']], [], [], []],
    'App\Controller\JobController::list' => [[], ['_controller' => 'App\\Controller\\JobController::list'], [], [['text', '/jobs']], [], [], []],
    'App\Controller\JobController::create' => [[], ['_controller' => 'App\\Controller\\JobController::create'], [], [['text', '/jobs/new']], [], [], []],
    'App\Controller\JobController::delete' => [['id'], ['_controller' => 'App\\Controller\\JobController::delete'], ['id' => '\\d+'], [['text', '/delete'], ['variable', '/', '\\d+', 'id', true], ['text', '/jobs']], [], [], []],
    'App\Controller\JobController::detail' => [['id'], ['_controller' => 'App\\Controller\\JobController::detail'], ['id' => '\\d+'], [['variable', '/', '\\d+', 'id', true], ['text', '/jobs']], [], [], []],
    'App\Controller\JobController::apply' => [['id'], ['_controller' => 'App\\Controller\\JobController::apply'], [], [['text', '/apply'], ['variable', '/', '[^/]++', 'id', true], ['text', '/jobs']], [], [], []],
    'App\Controller\JobController::acceptApplication' => [['id'], ['_controller' => 'App\\Controller\\JobController::acceptApplication'], [], [['text', '/accept'], ['variable', '/', '[^/]++', 'id', true], ['text', '/jobs/application']], [], [], []],
    'App\Controller\JobController::rejectApplication' => [['id'], ['_controller' => 'App\\Controller\\JobController::rejectApplication'], [], [['text', '/reject'], ['variable', '/', '[^/]++', 'id', true], ['text', '/jobs/application']], [], [], []],
    'App\Controller\LoginController::login' => [[], ['_controller' => 'App\\Controller\\LoginController::login'], [], [['text', '/login']], [], [], []],
    'App\Controller\LoginController::logout' => [[], ['_controller' => 'App\\Controller\\LoginController::logout'], [], [['text', '/logout']], [], [], []],
    'App\Controller\PaymentController::createCheckoutSession' => [[], ['_controller' => 'App\\Controller\\PaymentController::createCheckoutSession'], [], [['text', '/create-checkout-session']], [], [], []],
    'App\Controller\PaymentController::paymentSuccess' => [[], ['_controller' => 'App\\Controller\\ServiceController::paymentSuccess'], [], [['text', '/payment-success']], [], [], []],
    'App\Controller\PaymentController::paymentCancel' => [[], ['_controller' => 'App\\Controller\\ServiceController::paymentCancel'], [], [['text', '/payment-cancel']], [], [], []],
    'App\Controller\ProfileController::view' => [[], ['_controller' => 'App\\Controller\\ProfileController::view'], [], [['text', '/profile']], [], [], []],
    'App\Controller\RegistrationController::register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], [], []],
    'App\Controller\ServiceController::list' => [[], ['_controller' => 'App\\Controller\\ServiceController::list'], [], [['text', '/services']], [], [], []],
    'App\Controller\ServiceController::new' => [[], ['_controller' => 'App\\Controller\\ServiceController::new'], [], [['text', '/service/new']], [], [], []],
    'App\Controller\ServiceController::delete' => [['id'], ['_controller' => 'App\\Controller\\ServiceController::delete'], ['id' => '\\d+'], [['variable', '/', '\\d+', 'id', true], ['text', '/service/delete']], [], [], []],
    'App\Controller\ServiceController::detail' => [['id'], ['_controller' => 'App\\Controller\\ServiceDetailController::detail'], ['id' => '\\d+'], [['variable', '/', '\\d+', 'id', true], ['text', '/service']], [], [], []],
    'App\Controller\ServiceController::reserve' => [['id'], ['_controller' => 'App\\Controller\\ServiceController::reserve'], [], [['text', '/reserve'], ['variable', '/', '[^/]++', 'id', true], ['text', '/service']], [], [], []],
    'App\Controller\ServiceController::checkout' => [['id'], ['_controller' => 'App\\Controller\\ServiceController::checkout'], [], [['text', '/checkout'], ['variable', '/', '[^/]++', 'id', true], ['text', '/service']], [], [], []],
    'App\Controller\ServiceController::paymentSuccess' => [[], ['_controller' => 'App\\Controller\\ServiceController::paymentSuccess'], [], [['text', '/payment-success']], [], [], []],
    'App\Controller\ServiceController::paymentCancel' => [[], ['_controller' => 'App\\Controller\\ServiceController::paymentCancel'], [], [['text', '/payment-cancel']], [], [], []],
    'App\Controller\ServiceDetailController::detail' => [['id'], ['_controller' => 'App\\Controller\\ServiceDetailController::detail'], ['id' => '\\d+'], [['variable', '/', '\\d+', 'id', true], ['text', '/service']], [], [], []],
    'App\Controller\ServiceEditController::edit' => [['id'], ['_controller' => 'App\\Controller\\ServiceEditController::edit'], ['id' => '\\d+'], [['variable', '/', '\\d+', 'id', true], ['text', '/service/edit']], [], [], []],
    'App\Controller\SkillApiController::index' => [[], ['_controller' => 'App\\Controller\\SkillApiController::index'], [], [['text', '/api/skills/']], [], [], []],
    'App\Controller\SkillApiController::show' => [['id'], ['_controller' => 'App\\Controller\\SkillApiController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/skills']], [], [], []],
    'App\Controller\SkillApiController::create' => [[], ['_controller' => 'App\\Controller\\SkillApiController::create'], [], [['text', '/api/skills/']], [], [], []],
    'App\Controller\SkillApiController::update' => [['id'], ['_controller' => 'App\\Controller\\SkillApiController::update'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/skills']], [], [], []],
    'App\Controller\SkillApiController::delete' => [['id'], ['_controller' => 'App\\Controller\\SkillApiController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/skills']], [], [], []],
];
