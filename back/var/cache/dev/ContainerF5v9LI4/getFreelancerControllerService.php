<?php

namespace ContainerF5v9LI4;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFreelancerControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\FreelancerController' shared autowired service.
     *
     * @return \App\Controller\FreelancerController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/FreelancerController.php';

        $container->services['App\\Controller\\FreelancerController'] = $instance = new \App\Controller\FreelancerController();

        $instance->setContainer(($container->privates['.service_locator.ZyP9f7K'] ?? $container->load('get_ServiceLocator_ZyP9f7KService'))->withContext('App\\Controller\\FreelancerController', $container));

        return $instance;
    }
}
