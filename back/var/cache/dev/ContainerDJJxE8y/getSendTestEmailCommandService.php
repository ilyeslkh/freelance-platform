<?php

namespace ContainerDJJxE8y;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSendTestEmailCommandService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Command\SendTestEmailCommand' shared autowired service.
     *
     * @return \App\Command\SendTestEmailCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/src/Command/SendTestEmailCommand.php';

        $container->privates['App\\Command\\SendTestEmailCommand'] = $instance = new \App\Command\SendTestEmailCommand(($container->privates['App\\Services\\EmailService'] ?? $container->load('getEmailServiceService')));

        $instance->setName('app:send-test-email');
        $instance->setDescription('Envoie un email de test à une adresse spécifiée.');

        return $instance;
    }
}
