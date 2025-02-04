<?php

namespace ContainerDJJxE8y;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getJobRepositoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Repository\JobRepository' shared autowired service.
     *
     * @return \App\Repository\JobRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Repository/JobRepository.php';

        return $container->privates['App\\Repository\\JobRepository'] = new \App\Repository\JobRepository(($container->services['doctrine'] ?? self::getDoctrineService($container)));
    }
}
