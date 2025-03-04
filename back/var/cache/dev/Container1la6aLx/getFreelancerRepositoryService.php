<?php

namespace Container1la6aLx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFreelancerRepositoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Repository\FreelancerRepository' shared autowired service.
     *
     * @return \App\Repository\FreelancerRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Repository/FreelancerRepository.php';

        return $container->privates['App\\Repository\\FreelancerRepository'] = new \App\Repository\FreelancerRepository(($container->services['doctrine'] ?? self::getDoctrineService($container)));
    }
}
