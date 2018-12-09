<?php

namespace App\DataStore\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * eg. phan, phpstan, code sniffer, mess detector, phpunit, tlint 
 *
 * @ORM\Table(name="build_task")
 * @ORM\Entity(repositoryClass="App\DataStore\Repository\BuildTaskRepository")
 */
class BuildTask
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
     * @ORM\Column(name="status", type="integer", nullable=true)
     */
    private $status;


    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_login", type="datetime", nullable=true)
     */
    private $created;

}
