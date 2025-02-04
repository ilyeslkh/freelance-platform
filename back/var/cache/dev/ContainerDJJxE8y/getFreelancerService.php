<?php

namespace ContainerDJJxE8y;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFreelancerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Entity\Freelancer' shared service.
     *
     * @return \App\Entity\Freelancer
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/User/UserInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/User/PasswordAuthenticatedUserInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Entity/User.php';
        include_once \dirname(__DIR__, 4).'/src/Entity/Freelancer.php';

        return $container->privates['App\\Entity\\Freelancer'] = new \App\Entity\Freelancer();
    }
}
