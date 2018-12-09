<?php

namespace App\DataStore\Repository;

use App\DataStore\Entity;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * Class IntegrationRepository
 *
 * @package App\DataStore\Repository
 */
class IntegrationRepository extends ServiceEntityRepository
{
    /**
     * IntegrationApiRepository constructor.
     *
     * @param RegistryInterface $registry
     */
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Entity\Integration::class);
    }
}
