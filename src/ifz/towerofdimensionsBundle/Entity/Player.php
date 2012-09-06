<?php
// src/ifz/towerofdimensionsBundle/Entity/Player.php
namespace ifz\towerofdimensionsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="player")
 */
class Player
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    protected $name;

    protected $urlAvatar;

    /**
     * @ORM\Column(type="integer")
     */
    protected $coins;

    /**
     * @ORM\Column(type="integer")
     */
    protected $money;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set coins
     *
     * @param integer $coins
     */
    public function setCoins($coins)
    {
        $this->coins = $coins;
    }

    /**
     * Get coins
     *
     * @return integer 
     */
    public function getCoins()
    {
        return $this->coins;
    }

    /**
     * Set money
     *
     * @param integer $money
     */
    public function setMoney($money)
    {
        $this->money = $money;
    }

    /**
     * Get money
     *
     * @return integer 
     */
    public function getMoney()
    {
        return $this->money;
    }
}