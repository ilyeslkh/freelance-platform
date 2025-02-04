<?php

namespace App\Services;

use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

class EmailService
{
    private $mailer;

    public function __construct(MailerInterface $mailer)
    {
        $this->mailer = $mailer;
    }

    public function sendEmail(string $to, string $subject, string $content): void
    {
        $email = (new Email())
            ->from('your-email@gmail.com') // Adresse Gmail configurée
            ->to($to)
            ->subject($subject)
            ->text(strip_tags($content))
            ->html($content);

        $this->mailer->send($email);
    }
}
