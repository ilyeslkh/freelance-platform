<?php

namespace ContainerDJJxE8y;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAdminControllerdeleteServiceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.jCFkGIe.App\Controller\AdminController::deleteService()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.jCFkGIe.App\\Controller\\AdminController::deleteService()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'service' => ['privates', 'App\\Entity\\Service', 'getServiceService', true],
            'em' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'request' => ['privates', '.errored.E9g0h7e', NULL, 'Cannot determine controller argument for "App\\Controller\\AdminController::deleteService()": the $request argument is type-hinted with the non-existent class or interface: "App\\Controller\\Request". Did you forget to add a use statement?'],
        ], [
            'service' => 'App\\Entity\\Service',
            'em' => '?',
            'request' => '?',
        ]))->withContext('App\\Controller\\AdminController::deleteService()', $container);
    }
}
