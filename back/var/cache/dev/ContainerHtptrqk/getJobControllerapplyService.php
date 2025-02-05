<?php

namespace ContainerHtptrqk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getJobControllerapplyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.qZVw0LA.App\Controller\JobController::apply()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.qZVw0LA.App\\Controller\\JobController::apply()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'job' => ['privates', 'App\\Entity\\Job', 'getJobService', true],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'emailService' => ['privates', 'App\\Services\\EmailService', 'getEmailServiceService', true],
        ], [
            'job' => 'App\\Entity\\Job',
            'entityManager' => '?',
            'emailService' => 'App\\Services\\EmailService',
        ]))->withContext('App\\Controller\\JobController::apply()', $container);
    }
}
