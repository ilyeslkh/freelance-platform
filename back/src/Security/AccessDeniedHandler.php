<?php
namespace App\Security;

use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\Security\Http\Authorization\AccessDeniedHandlerInterface;

class AccessDeniedHandler implements AccessDeniedHandlerInterface
{
    private $router;

    public function __construct(RouterInterface $router)
    {
        $this->router = $router;
    }

    public function handle(Request $request, AccessDeniedException $accessDeniedException): RedirectResponse
    {
        // Redirigez les utilisateurs bannis vers une page dédiée
        if ($request->getUser() && in_array('ROLE_BANNED', $request->getUser()->getRoles())) {
            return new RedirectResponse($this->router->generate('banned_page'));
        }

        // Sinon, redirigez vers la page de login
        return new RedirectResponse($this->router->generate('app_login'));
    }
}
