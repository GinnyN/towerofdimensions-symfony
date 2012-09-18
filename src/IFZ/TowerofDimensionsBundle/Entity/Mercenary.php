<?php
// src/IFZ/TowerofDimensionsBundle/Entity/Mercenary.php
namespace IFZ\TowerofDimensionsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="mercenary")
 */
class Mercenary
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\ManyToOne(targetEntity="Player", inversedBy="mercenaries")
     * @ORM\JoinColumn(name="player_id", referencedColumnName="id")
     */
    protected $player;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $name;

    /**
     * @ORM\Column(type="integer")
     */
    protected $idBase;

    /**
     * @ORM\Column(type="integer")
     */
    protected $nivel;

    /**
     * @ORM\Column(type="integer")
     */
    protected $exp;
    
    /**
     * @ORM\Column(type="integer")
     */
    protected $agilidad;
    
    /**
     * @ORM\Column(type="integer")
     */
    protected $destreza;
    
    /**
     * @ORM\Column(type="integer")
     */
    protected $constitucion;
    
    /**
     * @ORM\Column(type="integer")
     */
    protected $fuerza;
    
    /**
     * @ORM\Column(type="integer")
     */
    protected $inteligencia;
    
    /**
     * @ORM\Column(type="integer")
     */
    protected $sabiduria;
    
    /**
     * @ORM\Column(type="integer")
     */
    protected $carisma;
    
    /**
     * @ORM\Column(type="integer")
     */
    protected $poder;
    
    /**
     * @ORM\Column(type="integer")
     */
    protected $marcial; 
    
    /**
     * @ORM\Column(type="integer")
     */
    protected $stealth;
    
    /**
     * @ORM\Column(type="integer")
     */
    protected $magia;
    
    /**
     * @ORM\Column(type="integer")
     */
    protected $tecnologia;
    
    /**
     * @ORM\Column(type="integer")
     */
    protected $crecimientoAgilidad;
    
    /**
     * @ORM\Column(type="integer")
     */
    protected $crecimientoDestreza;
    
    /**
     * @ORM\Column(type="integer")
     */
    protected $crecimientoConstitucion;
    
    /**
     * @ORM\Column(type="integer")
     */
    protected $crecimientoFuerza;
    
    /**
     * @ORM\Column(type="integer")
     */
    protected $crecimientoInteligencia;
    
    /**
     * @ORM\Column(type="integer")
     */
    protected $crecimientoSabiduria;
    
    /**
     * @ORM\Column(type="integer")
     */
    protected $crecimientoCarisma;
    
    /**
     * @ORM\Column(type="integer")
     */
    protected $crecimientoPoder;
    
    /**
     * @ORM\Column(type="integer")
     */
    protected $crecimientoMarcial;
    
    /**
     * @ORM\Column(type="integer")
     */
    protected $crecimientoStealth;
    
    /**
     * @ORM\Column(type="integer")
     */
    protected $crecimientoMagia;
    
    /**
     * @ORM\Column(type="integer")
     */
    protected $crecimientoTecnologia;
    
    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $hpCalculo;
    
    /**
     * @ORM\Column(type="integer")
     */
    protected $item1;
    
    /**
     * @ORM\Column(type="integer")
     */
    protected $item2;
    
    /**
     * @ORM\Column(type="integer")
     */
    protected $item3;
    
    /**
     * @ORM\Column(type="integer")
     */
    protected $item4;
    
    /**
     * @ORM\Column(type="integer")
     */
    protected $item5;
    
    /**
     * @ORM\Column(type="integer")
     */
    protected $item6;
    
    /**
     * @ORM\Column(type="integer")
     */
    protected $hpMax;
    
    /**
     * @ORM\Column(type="integer")
     */
    protected $hpActual;
    
    /**
     * @ORM\Column(type="integer")
     */
    protected $misionActual;
}