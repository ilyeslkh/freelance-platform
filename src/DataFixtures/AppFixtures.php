<?php

namespace App\DataFixtures;

use App\Entity\User;
use App\Entity\Freelancer;
use App\Entity\Client;
use App\Entity\Profile;
use App\Entity\Service;
use App\Entity\Job;
use App\Entity\Skill;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class AppFixtures extends Fixture {
    private UserPasswordHasherInterface $passwordHasher;

    public function __construct(UserPasswordHasherInterface $passwordHasher) {
        $this->passwordHasher = $passwordHasher;
    }

    public function load(ObjectManager $manager): void {
        // Création des compétences
        $skills = [];
        $skillNames = ['PHP', 'Symfony', 'JavaScript', 'CSS', 'Design', 'Laravel', 'React', 'VueJS'];
        foreach ($skillNames as $name) {
            $skill = new Skill();
            $skill->setName($name);
            $manager->persist($skill);
            $skills[] = $skill;
        }

        // Création des Freelancers
        for ($i = 1; $i <= 5; $i++) {
            $freelancer = new Freelancer();
            $freelancer->setEmail("freelancer$i@example.com");
            $freelancer->setPassword($this->passwordHasher->hashPassword($freelancer, 'password'));
            $freelancer->setRoles(['ROLE_FREELANCER']);
            $freelancer->setPortfolio("https://portfolio-freelancer$i.example.com");
            $freelancer->setAvailable(true);

            // Profil du Freelancer
            $profile = new Profile();
            $profile->setBio("Je suis Freelancer $i avec des compétences variées.");
            $profile->setUserProfile($freelancer);
            $manager->persist($profile);

            // Ajout de compétences
            foreach (array_slice($skills, 0, rand(2, 4)) as $skill) {
                $freelancer->addSkill($skill);
            }

            // Création des services
            for ($j = 1; $j <= 3; $j++) {
                $service = new Service();
                $service->setTitle("Service $j par Freelancer $i");
                $service->setDescription("Description du service $j par Freelancer $i.");
                $service->setPrice(rand(50, 500));
                $service->setUserService($freelancer);
                $manager->persist($service);
            }

            $manager->persist($freelancer);
        }


        // Création des Clients
        for ($i = 1; $i <= 5; $i++) {
            $client = new Client();
            $client->setEmail("client$i@example.com");
            $client->setPassword($this->passwordHasher->hashPassword($client, 'password'));
            $client->setRoles(['ROLE_CLIENT']);
            $client->setVerified(true);

            // Profil du Client
            $profile = new Profile();
            $profile->setBio("Je suis Client $i à la recherche de services.");
            $profile->setUserProfile($client);
            $manager->persist($profile);

            // Création des annonces
            for ($j = 1; $j <= 2; $j++) {
                $job = new Job();
                $job->setTitle("Annonce $j par Client $i");
                $job->setDescription("Description de l'annonce $j par Client $i.");
                $job->setBudget(rand(100, 1000));
                $job->setUserJob($client);
                $manager->persist($job);
            }

            $manager->persist($client);
        }
            }
}
