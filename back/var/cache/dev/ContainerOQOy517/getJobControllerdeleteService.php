<?php

namespace ContainerOQOy517;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getJobControllerdeleteService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.wXxTKMw.App\Controller\JobController::delete()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.wXxTKMw.App\\Controller\\JobController::delete()'] = ($container->privates['.service_locator.wXxTKMw'] ?? $container->load('get_ServiceLocator_WXxTKMwService'))->withContext('App\\Controller\\JobController::delete()', $container);
    }
}
