<?php

namespace ContainerZgc3wTK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getServiceControllercheckoutService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.LXavkRP.App\Controller\ServiceController::checkout()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.LXavkRP.App\\Controller\\ServiceController::checkout()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'service' => ['privates', 'App\\Entity\\Service', 'getServiceService', true],
        ], [
            'service' => 'App\\Entity\\Service',
        ]))->withContext('App\\Controller\\ServiceController::checkout()', $container);
    }
}
