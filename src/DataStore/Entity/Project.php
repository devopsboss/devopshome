<?php

namespace App\DataStore\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * eg. github/bitbucket repo, branch?
 *
 * @ORM\Table(name="project")
 * @ORM\Entity(repositoryClass="App\DataStore\Repository\ProjectRepository")
 */
class Project
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
     * public const TYPE_THIS_SERVER   = 1;
     * public const TYPE_REMOTE_SERVER = 2;
     * public const TYPE_VAGRANT_SHARE = 3;
     *
     * @var integer
     *
     * @ORM\Column(name="type", type="integer", nullable=true)
     */
    private $type;

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
