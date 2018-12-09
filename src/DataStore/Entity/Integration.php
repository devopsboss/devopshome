<?php

namespace App\DataStore\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Integrate with github, bitbucket, aws, slack etc
 * 
 * @ORM\Table(name="integration")
 * @ORM\Entity(repositoryClass="App\DataStore\Repository\IntegrationRepository")
 */
class Integration
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


    /**
     * @var string
     *
     * @ORM\Column(name="internal_display", type="string", length=100)
     */
    private $title;



    /**
     * @var integer
     *
     * @ORM\Column(name="type", type="integer", nullable=true)
     */
    private $status;


    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_login", type="datetime", nullable=true)
     */
    private $created;

}
