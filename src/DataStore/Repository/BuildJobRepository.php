<?php

namespace App\DataStore\Repository;

use App\DataStore\Entity;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * Class BuildJobRepository
 *
 * @package App\DataStore\Repository
 */
class BuildJobRepository extends ServiceEntityRepository
{
    /**
     * BuildJobApiRepository constructor.
     *
     * @param RegistryInterface $registry
     */
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Entity\BuildJob::class);
    }
}
