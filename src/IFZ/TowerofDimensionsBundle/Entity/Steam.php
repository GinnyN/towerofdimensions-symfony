<?php
// src/IFZ/TowerofDimensionsBundle/Entity/Steam.php
namespace IFZ\TowerofDimensionsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="steam")
 */
class Steam 
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\OneToOne(targetEntity="Player", mappedBy="player")
     * @ORM\JoinColumn(name="player_id", referencedColumnName="id")
     */
    protected $player;

    /**
    * @ORM\Column(type="integer")
    */
    protected $steamId;

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
     * Set steamId
     *
     * @param integer $steamId
     */
    public function setSteamId($steamId)
    {
        $this->steamId = $steamId;
    }

    /**
     * Get steamId
     *
     * @return integer 
     */
    public function getSteamId()
    {
        return $this->steamId;
    }

    /**
     * Set player
     *
     * @param IFZ\TowerofDimensionsBundle\Entity\Player $player
     */
    public function setPlayer(\IFZ\TowerofDimensionsBundle\Entity\Player $player)
    {
        $this->player = $player;
    }

    /**
     * Get player
     *
     * @return IFZ\TowerofDimensionsBundle\Entity\Player 
     */
    public function getPlayer()
    {
        return $this->player;
    }
}