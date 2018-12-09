<?php

namespace App\DataStore\Repository;

use App\DataStore\Entity;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * Class UserApiRepository
 *
 * @package App\DataStore\Repository
 */
class UserRepository extends ServiceEntityRepository
{
    /**
     * UserApiRepository constructor.
     *
     * @param RegistryInterface $registry
     */
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Entity\User::class);
    }
}
