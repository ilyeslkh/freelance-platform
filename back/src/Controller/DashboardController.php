<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ReservationRepository;
use App\Repository\ServiceRepository;

class DashboardController extends AbstractController {

    #[Route('/dashboard', name: 'dashboard')]
    public function dashboard(
        ReservationRepository $reservationRepository,
        ServiceRepository $serviceRepository
    ): Response {
        $user = $this->getUser();

        // Réservations des services créés par l'utilisateur
        $reservations = $reservationRepository->createQueryBuilder('r')
            ->join('r.service', 's')
            ->where('s.userService = :user')
            ->setParameter('user', $user)
            ->getQuery()
            ->getResult();

        // Services créés par l'utilisateur
        $createdServices = $serviceRepository->findBy(['userService' => $user]);

        // Réservations effectuées par l'utilisateur
        $userReservations = $reservationRepository->findBy(['reservedBy' => $user]);

        return $this->render('dashboard/index.html.twig', [
            'user' => $user,
            'reservations' => $reservations,
            'createdServices' => $createdServices,
            'userReservations' => $userReservations,
        ]);
    }
}
