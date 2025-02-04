<?php
namespace App\EventSubscriber;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Event\ControllerEvent;
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Bundle\SecurityBundle\Security;

class RedirectBannedSubscriber implements EventSubscriberInterface
{
    private Security $security;
    private UrlGeneratorInterface $urlGenerator;

    public function __construct(Security $security, UrlGeneratorInterface $urlGenerator)
    {
        $this->security = $security;
        $this->urlGenerator = $urlGenerator;
    }

    public static function getSubscribedEvents(): array
    {
        return [
            KernelEvents::CONTROLLER => 'onKernelController',
        ];
    }

    public function onKernelController(ControllerEvent $event): void
    {
        $user = $this->security->getUser();

        // Vérifiez si l'utilisateur est connecté et possède le rôle BANNED
        if ($user && in_array('ROLE_BANNED', $user->getRoles(), true)) {
            $currentRoute = $event->getRequest()->attributes->get('_route');

            // Évitez une boucle infinie si la route actuelle est déjà "banned_page"
            if ($currentRoute !== 'banned_page') {
                $url = $this->urlGenerator->generate('banned_page');
                $event->setController(fn() => new RedirectResponse($url));
            }
        }
    }
}
