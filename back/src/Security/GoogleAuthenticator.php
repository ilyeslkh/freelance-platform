<?php

namespace App\Security;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use KnpU\OAuth2ClientBundle\Client\ClientRegistry;
use KnpU\OAuth2ClientBundle\Client\Provider\GoogleClient;
use League\OAuth2\Client\Provider\GoogleUser;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\Security\Http\Authenticator\AbstractAuthenticator;
use Symfony\Component\Security\Http\Authenticator\Passport\Badge\UserBadge;
use Symfony\Component\Security\Http\Authenticator\Passport\Credentials\CustomCredentials;
use Symfony\Component\Security\Http\Authenticator\Passport\Passport;

class GoogleAuthenticator extends AbstractAuthenticator
{
    private ClientRegistry $clientRegistry;
    private RouterInterface $router;
    private EntityManagerInterface $em;

    public function __construct(ClientRegistry $clientRegistry, RouterInterface $router, EntityManagerInterface $em)
    {
        $this->clientRegistry = $clientRegistry;
        $this->router = $router;
        $this->em = $em;
    }

    public function supports(Request $request): ?bool
    {
        return $request->attributes->get('_route') === 'connect_google_check';
    }

    public function authenticate(Request $request): Passport
    {
        $client = $this->getGoogleClient();
        $accessToken = $client->getAccessToken();
        $googleUser = $client->fetchUserFromToken($accessToken);

        return new Passport(
            new UserBadge($googleUser->getEmail(), function () use ($googleUser) {
                return $this->loadUserFromGoogleUser($googleUser);
            }),
            new CustomCredentials(
                fn () => true,
                $accessToken
            )
        );
    }

    public function onAuthenticationSuccess(Request $request, $token, string $firewallName): ?Response
    {
        return new RedirectResponse($this->router->generate('home'));
    }

    public function onAuthenticationFailure(Request $request, AuthenticationException $exception): Response
    {
        return new RedirectResponse($this->router->generate('app_login') . '?error=' . $exception->getMessageKey());
    }

    private function loadUserFromGoogleUser(GoogleUser $googleUser): User
    {
        $email = $googleUser->getEmail();
        $user = $this->em->getRepository(User::class)->findOneBy(['email' => $email]);

        if (!$user) {
            $user = new User();
            $user->setEmail($email);
            $user->setUsername($googleUser->getName());
            $user->setPassword(''); // Pas de mot de passe car OAuth gère l'authentification
            $user->setRoles(['ROLE_USER']);

            $this->em->persist($user);
            $this->em->flush();
        }

        return $user;
    }

    private function getGoogleClient(): GoogleClient
    {
        return $this->clientRegistry->getClient('google');
    }
}
