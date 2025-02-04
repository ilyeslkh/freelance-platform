<?php

namespace App\Repository;

use App\Entity\Service;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\Tools\Pagination\Paginator;
use Doctrine\Persistence\ManagerRegistry;

class ServiceRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Service::class);
    }

    public function findPaginated(int $page, int $limit): array
    {
        $query = $this->createQueryBuilder('s')
            ->orderBy('s.createdAt', 'DESC')
            ->setFirstResult(($page - 1) * $limit)
            ->setMaxResults($limit)
            ->getQuery();
    
        $paginator = new Paginator($query);
    
        return [
            'data' => iterator_to_array($paginator->getIterator()), // Liste des services
            'currentPage' => $page,
            'totalPages' => ceil(count($paginator) / $limit),
            'previousPage' => $page > 1 ? $page - 1 : null,
            'nextPage' => $page < ceil(count($paginator) / $limit) ? $page + 1 : null,
        ];
    }
    
}
