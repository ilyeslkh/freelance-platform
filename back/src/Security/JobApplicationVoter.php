<?php

namespace App\Security;

use App\Entity\JobApplication;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\Security\Core\Authorization\Voter\Voter;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;

class JobApplicationVoter extends Voter
{
    public const ACCEPT = 'JOB_APPLICATION_ACCEPT';
    public const REJECT = 'JOB_APPLICATION_REJECT';

    private Security $security;

    public function __construct(Security $security)
    {
        $this->security = $security;
    }

    protected function supports(string $attribute, $subject): bool
    {
        return in_array($attribute, [self::ACCEPT, self::REJECT])
            && $subject instanceof JobApplication;
    }

    protected function voteOnAttribute(string $attribute, $subject, TokenInterface $token): bool
    {
        $user = $token->getUser();

        // Si l'utilisateur n'est pas connecté, il ne peut pas effectuer d'action
        if (!$user) {
            return false;
        }

        /** @var JobApplication $jobApplication */
        $jobApplication = $subject;

        // Vérifiez si l'utilisateur est le créateur de l'annonce
        if ($attribute === self::ACCEPT || $attribute === self::REJECT) {
            return $jobApplication->getJob()->getUserJob() === $user;
        }

        return false;
    }
}
