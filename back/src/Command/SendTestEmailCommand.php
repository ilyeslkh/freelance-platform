<?php

namespace App\Command;

use App\Services\EmailService;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Attribute\AsCommand;

#[AsCommand(
    name: 'app:send-test-email',
    description: 'Envoie un email de test à une adresse spécifiée.',
)]
class SendTestEmailCommand extends Command
{
    private EmailService $emailService;

    public function __construct(EmailService $emailService)
    {
        parent::__construct();
        $this->emailService = $emailService;
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        // Changez l'adresse email de test ici
        $to = 'ilyes.depercin@gmail.com';
        $subject = 'Test Email Symfony';
        $content = '<p>Ceci est un email de test envoyé via Symfony Mailer.</p>';

        try {
            $this->emailService->sendEmail($to, $subject, $content);
            $output->writeln('<info>Email envoyé avec succès à ' . $to . '</info>');
            return Command::SUCCESS;
        } catch (\Exception $e) {
            $output->writeln('<error>Erreur lors de l\'envoi de l\'email : ' . $e->getMessage() . '</error>');
            return Command::FAILURE;
        }
    }
}
