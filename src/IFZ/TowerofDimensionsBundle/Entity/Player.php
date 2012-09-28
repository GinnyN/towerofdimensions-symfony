<?php
// src/IFZ/TowerofDimensionsBundle/Entity/Player.php
namespace IFZ\TowerofDimensionsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

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
     * @ORM\OneToMany(targetEntity="Mercenary", mappedBy="player", cascade={"persist", "remove"})
     */
    protected $mercenaries;

    public function __construct()
    {
        $this->mercenaries = new ArrayCollection();
    }

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

    /**
     * Add mercenaries
     *
     * @param IFZ\TowerofDimensionsBundle\Entity\Mercenary $mercenaries
     */
    public function addMercenary(\IFZ\TowerofDimensionsBundle\Entity\Mercenary $mercenaries)
    {
        $this->mercenaries[] = $mercenaries;
        $mercenaries->setPlayer($this);
    }

    /**
     * Get mercenaries
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getMercenaries()
    {
        return $this->mercenaries;
    }
}