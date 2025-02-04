<?php

namespace ContainerZgc3wTK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDashboardControllerdashboardService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.NAsPpDp.App\Controller\DashboardController::dashboard()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.NAsPpDp.App\\Controller\\DashboardController::dashboard()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'reservationRepository' => ['privates', 'App\\Repository\\ReservationRepository', 'getReservationRepositoryService', true],
            'serviceRepository' => ['privates', 'App\\Repository\\ServiceRepository', 'getServiceRepositoryService', true],
        ], [
            'reservationRepository' => 'App\\Repository\\ReservationRepository',
            'serviceRepository' => 'App\\Repository\\ServiceRepository',
        ]))->withContext('App\\Controller\\DashboardController::dashboard()', $container);
    }
}
