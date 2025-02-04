<?php

namespace App\DataFixtures;

use App\Entity\User;
use App\Entity\Freelancer;
use App\Entity\Client;
use App\Entity\Service;
use App\Entity\Job;
use App\Entity\Skill;
use App\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class AppFixtures extends Fixture
{
    private UserPasswordHasherInterface $passwordHasher;

    public function __construct(UserPasswordHasherInterface $passwordHasher)
    {
        $this->passwordHasher = $passwordHasher;
    }

    public function load(ObjectManager $manager): void
    {
        // Création des compétences
        $skills = [];
        $skillNames = ['PHP', 'Symfony', 'JavaScript', 'CSS', 'Design', 'Laravel', 'React', 'VueJS', 'Python', 'Java'];
        foreach ($skillNames as $name) {
            $skill = new Skill();
            $skill->setName($name);
            $manager->persist($skill);
            $skills[] = $skill;
        }

        // Création des catégories
        $categories = [];
        $categoryNames = ['Développement Web', 'Design', 'Marketing', 'Rédaction', 'SEO', 'Photographie', 'E-commerce'];
        foreach ($categoryNames as $name) {
            $category = new Category();
            $category->setName($name);
            $manager->persist($category);
            $categories[] = $category;
        }

        // Création des utilisateurs avec différents rôles
        $users = [
            ['email' => 'admin@example.com', 'roles' => ['ROLE_ADMIN'], 'password' => 'adminpass'],
            ['email' => 'user1@example.com', 'roles' => ['ROLE_USER'], 'password' => 'userpass1'],
            ['email' => 'user2@example.com', 'roles' => ['ROLE_USER'], 'password' => 'userpass2'],
        ];

        foreach ($users as $userData) {
            $user = new User();
            $user->setEmail($userData['email']);
            $user->setRoles($userData['roles']);
            $user->setPassword($this->passwordHasher->hashPassword($user, $userData['password']));
            $manager->persist($user);
        }

        // Création des freelancers
        $freelancers = [];
        for ($i = 1; $i <= 10; $i++) {
            $freelancer = new Freelancer();
            $freelancer->setEmail("freelancer$i@example.com");
            $freelancer->setPassword($this->passwordHasher->hashPassword($freelancer, 'password'));
            $freelancer->setRoles(['ROLE_FREELANCER']);
            $freelancer->setPortfolio("https://portfolio-freelancer$i.example.com");
            $freelancer->setAvailable(true);
            $manager->persist($freelancer);
            $freelancers[] = $freelancer;
        }

        // Création des clients
        $clients = [];
        for ($i = 1; $i <= 5; $i++) {
            $client = new Client();
            $client->setEmail("client$i@example.com");
            $client->setPassword($this->passwordHasher->hashPassword($client, 'password'));
            $client->setRoles(['ROLE_CLIENT']);
            $client->setVerified(true);
            $manager->persist($client);
            $clients[] = $client;
        }

        // Création des services
        $services = [];
        for ($i = 1; $i <= 20; $i++) {
            $service = new Service();
            $service->setTitle("Service $i");
            $service->setDescription("Description du service $i.");
            $service->setPrice(rand(50, 1000));
            $service->setDemoUrl("https://demo-service$i.example.com");
            $service->setUserService($freelancers[array_rand($freelancers)]);
            // Ajouter des catégories au service
            $assignedCategories = array_rand($categories, rand(1, 3)); // Assigner 1 à 3 catégories aléatoirement
            foreach ((array) $assignedCategories as $categoryIndex) {
                $service->addCategory($categories[$categoryIndex]);
            }
            $manager->persist($service);
            $services[] = $service;
        }

        // Création des jobs
        for ($i = 1; $i <= 10; $i++) {
            $job = new Job();
            $job->setTitle("Job $i");
            $job->setDescription("Description du job $i.");
            $job->setBudget(rand(100, 5000));
            $job->setUserJob($clients[array_rand($clients)]);
            $job->setServiceJob($services[array_rand($services)]);
            $manager->persist($job);
        }

        $manager->flush();
    }
}
