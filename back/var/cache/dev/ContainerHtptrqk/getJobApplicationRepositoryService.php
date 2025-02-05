<?php

namespace ContainerHtptrqk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getJobApplicationRepositoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Repository\JobApplicationRepository' shared autowired service.
     *
     * @return \App\Repository\JobApplicationRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Repository/JobApplicationRepository.php';

        return $container->privates['App\\Repository\\JobApplicationRepository'] = new \App\Repository\JobApplicationRepository(($container->services['doctrine'] ?? self::getDoctrineService($container)));
    }
}
