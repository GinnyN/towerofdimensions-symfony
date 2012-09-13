<?php
// src/ifz/towerofdimensionsBundle/Entity/Player.php
namespace ifz\towerofdimensionsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name=”player”)
 */
class Player
{
    /**
     * @ORM\Id
     * @ORM\Column(type=”integer”)
     * @ORM\GeneratedValue(strategy=”AUTO”)
     */
    protected $id;

    protected $name;

    protected $urlAvatar;

    /**
     * @ORM\Column(type=”integer”)
     */
    protected $coins;

    /**
     * @ORM\Column(type=”integer”)
     */
    protected $money;
}