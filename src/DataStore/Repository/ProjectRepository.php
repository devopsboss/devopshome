<?php

namespace App\DataStore\Repository;

use App\DataStore\Entity;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * Class ProjectRepository
 *
 * @package App\DataStore\Repository
 */
class ProjectRepository extends ServiceEntityRepository
{
    /**
     * ProjectApiRepository constructor.
     *
     * @param RegistryInterface $registry
     */
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Entity\Project::class);
    }
}
