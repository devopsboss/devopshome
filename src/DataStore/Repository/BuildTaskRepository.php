<?php

namespace App\DataStore\Repository;

use App\DataStore\Entity;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * Class BuildTaskRepository
 *
 * @package App\DataStore\Repository
 */
class BuildTaskRepository extends ServiceEntityRepository
{
    /**
     * BuildTaskApiRepository constructor.
     *
     * @param RegistryInterface $registry
     */
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Entity\BuildTask::class);
    }
}
