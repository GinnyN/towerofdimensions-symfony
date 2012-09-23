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
     * Set name
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set idBase
     *
     * @param integer $idBase
     */
    public function setIdBase($idBase)
    {
        $this->idBase = $idBase;
    }

    /**
     * Get idBase
     *
     * @return integer 
     */
    public function getIdBase()
    {
        return $this->idBase;
    }

    /**
     * Set nivel
     *
     * @param integer $nivel
     */
    public function setNivel($nivel)
    {
        $this->nivel = $nivel;
    }

    /**
     * Get nivel
     *
     * @return integer 
     */
    public function getNivel()
    {
        return $this->nivel;
    }

    /**
     * Set exp
     *
     * @param integer $exp
     */
    public function setExp($exp)
    {
        $this->exp = $exp;
    }

    /**
     * Get exp
     *
     * @return integer 
     */
    public function getExp()
    {
        return $this->exp;
    }

    /**
     * Set agilidad
     *
     * @param integer $agilidad
     */
    public function setAgilidad($agilidad)
    {
        $this->agilidad = $agilidad;
    }

    /**
     * Get agilidad
     *
     * @return integer 
     */
    public function getAgilidad()
    {
        return $this->agilidad;
    }

    /**
     * Set destreza
     *
     * @param integer $destreza
     */
    public function setDestreza($destreza)
    {
        $this->destreza = $destreza;
    }

    /**
     * Get destreza
     *
     * @return integer 
     */
    public function getDestreza()
    {
        return $this->destreza;
    }

    /**
     * Set constitucion
     *
     * @param integer $constitucion
     */
    public function setConstitucion($constitucion)
    {
        $this->constitucion = $constitucion;
    }

    /**
     * Get constitucion
     *
     * @return integer 
     */
    public function getConstitucion()
    {
        return $this->constitucion;
    }

    /**
     * Set fuerza
     *
     * @param integer $fuerza
     */
    public function setFuerza($fuerza)
    {
        $this->fuerza = $fuerza;
    }

    /**
     * Get fuerza
     *
     * @return integer 
     */
    public function getFuerza()
    {
        return $this->fuerza;
    }

    /**
     * Set inteligencia
     *
     * @param integer $inteligencia
     */
    public function setInteligencia($inteligencia)
    {
        $this->inteligencia = $inteligencia;
    }

    /**
     * Get inteligencia
     *
     * @return integer 
     */
    public function getInteligencia()
    {
        return $this->inteligencia;
    }

    /**
     * Set sabiduria
     *
     * @param integer $sabiduria
     */
    public function setSabiduria($sabiduria)
    {
        $this->sabiduria = $sabiduria;
    }

    /**
     * Get sabiduria
     *
     * @return integer 
     */
    public function getSabiduria()
    {
        return $this->sabiduria;
    }

    /**
     * Set carisma
     *
     * @param integer $carisma
     */
    public function setCarisma($carisma)
    {
        $this->carisma = $carisma;
    }

    /**
     * Get carisma
     *
     * @return integer 
     */
    public function getCarisma()
    {
        return $this->carisma;
    }

    /**
     * Set poder
     *
     * @param integer $poder
     */
    public function setPoder($poder)
    {
        $this->poder = $poder;
    }

    /**
     * Get poder
     *
     * @return integer 
     */
    public function getPoder()
    {
        return $this->poder;
    }

    /**
     * Set marcial
     *
     * @param integer $marcial
     */
    public function setMarcial($marcial)
    {
        $this->marcial = $marcial;
    }

    /**
     * Get marcial
     *
     * @return integer 
     */
    public function getMarcial()
    {
        return $this->marcial;
    }

    /**
     * Set stealth
     *
     * @param integer $stealth
     */
    public function setStealth($stealth)
    {
        $this->stealth = $stealth;
    }

    /**
     * Get stealth
     *
     * @return integer 
     */
    public function getStealth()
    {
        return $this->stealth;
    }

    /**
     * Set magia
     *
     * @param integer $magia
     */
    public function setMagia($magia)
    {
        $this->magia = $magia;
    }

    /**
     * Get magia
     *
     * @return integer 
     */
    public function getMagia()
    {
        return $this->magia;
    }

    /**
     * Set tecnologia
     *
     * @param integer $tecnologia
     */
    public function setTecnologia($tecnologia)
    {
        $this->tecnologia = $tecnologia;
    }

    /**
     * Get tecnologia
     *
     * @return integer 
     */
    public function getTecnologia()
    {
        return $this->tecnologia;
    }

    /**
     * Set crecimientoAgilidad
     *
     * @param integer $crecimientoAgilidad
     */
    public function setCrecimientoAgilidad($crecimientoAgilidad)
    {
        $this->crecimientoAgilidad = $crecimientoAgilidad;
    }

    /**
     * Get crecimientoAgilidad
     *
     * @return integer 
     */
    public function getCrecimientoAgilidad()
    {
        return $this->crecimientoAgilidad;
    }

    /**
     * Set crecimientoDestreza
     *
     * @param integer $crecimientoDestreza
     */
    public function setCrecimientoDestreza($crecimientoDestreza)
    {
        $this->crecimientoDestreza = $crecimientoDestreza;
    }

    /**
     * Get crecimientoDestreza
     *
     * @return integer 
     */
    public function getCrecimientoDestreza()
    {
        return $this->crecimientoDestreza;
    }

    /**
     * Set crecimientoConstitucion
     *
     * @param integer $crecimientoConstitucion
     */
    public function setCrecimientoConstitucion($crecimientoConstitucion)
    {
        $this->crecimientoConstitucion = $crecimientoConstitucion;
    }

    /**
     * Get crecimientoConstitucion
     *
     * @return integer 
     */
    public function getCrecimientoConstitucion()
    {
        return $this->crecimientoConstitucion;
    }

    /**
     * Set crecimientoFuerza
     *
     * @param integer $crecimientoFuerza
     */
    public function setCrecimientoFuerza($crecimientoFuerza)
    {
        $this->crecimientoFuerza = $crecimientoFuerza;
    }

    /**
     * Get crecimientoFuerza
     *
     * @return integer 
     */
    public function getCrecimientoFuerza()
    {
        return $this->crecimientoFuerza;
    }

    /**
     * Set crecimientoInteligencia
     *
     * @param integer $crecimientoInteligencia
     */
    public function setCrecimientoInteligencia($crecimientoInteligencia)
    {
        $this->crecimientoInteligencia = $crecimientoInteligencia;
    }

    /**
     * Get crecimientoInteligencia
     *
     * @return integer 
     */
    public function getCrecimientoInteligencia()
    {
        return $this->crecimientoInteligencia;
    }

    /**
     * Set crecimientoSabiduria
     *
     * @param integer $crecimientoSabiduria
     */
    public function setCrecimientoSabiduria($crecimientoSabiduria)
    {
        $this->crecimientoSabiduria = $crecimientoSabiduria;
    }

    /**
     * Get crecimientoSabiduria
     *
     * @return integer 
     */
    public function getCrecimientoSabiduria()
    {
        return $this->crecimientoSabiduria;
    }

    /**
     * Set crecimientoCarisma
     *
     * @param integer $crecimientoCarisma
     */
    public function setCrecimientoCarisma($crecimientoCarisma)
    {
        $this->crecimientoCarisma = $crecimientoCarisma;
    }

    /**
     * Get crecimientoCarisma
     *
     * @return integer 
     */
    public function getCrecimientoCarisma()
    {
        return $this->crecimientoCarisma;
    }

    /**
     * Set crecimientoPoder
     *
     * @param integer $crecimientoPoder
     */
    public function setCrecimientoPoder($crecimientoPoder)
    {
        $this->crecimientoPoder = $crecimientoPoder;
    }

    /**
     * Get crecimientoPoder
     *
     * @return integer 
     */
    public function getCrecimientoPoder()
    {
        return $this->crecimientoPoder;
    }

    /**
     * Set crecimientoMarcial
     *
     * @param integer $crecimientoMarcial
     */
    public function setCrecimientoMarcial($crecimientoMarcial)
    {
        $this->crecimientoMarcial = $crecimientoMarcial;
    }

    /**
     * Get crecimientoMarcial
     *
     * @return integer 
     */
    public function getCrecimientoMarcial()
    {
        return $this->crecimientoMarcial;
    }

    /**
     * Set crecimientoStealth
     *
     * @param integer $crecimientoStealth
     */
    public function setCrecimientoStealth($crecimientoStealth)
    {
        $this->crecimientoStealth = $crecimientoStealth;
    }

    /**
     * Get crecimientoStealth
     *
     * @return integer 
     */
    public function getCrecimientoStealth()
    {
        return $this->crecimientoStealth;
    }

    /**
     * Set crecimientoMagia
     *
     * @param integer $crecimientoMagia
     */
    public function setCrecimientoMagia($crecimientoMagia)
    {
        $this->crecimientoMagia = $crecimientoMagia;
    }

    /**
     * Get crecimientoMagia
     *
     * @return integer 
     */
    public function getCrecimientoMagia()
    {
        return $this->crecimientoMagia;
    }

    /**
     * Set crecimientoTecnologia
     *
     * @param integer $crecimientoTecnologia
     */
    public function setCrecimientoTecnologia($crecimientoTecnologia)
    {
        $this->crecimientoTecnologia = $crecimientoTecnologia;
    }

    /**
     * Get crecimientoTecnologia
     *
     * @return integer 
     */
    public function getCrecimientoTecnologia()
    {
        return $this->crecimientoTecnologia;
    }

    /**
     * Set hpCalculo
     *
     * @param string $hpCalculo
     */
    public function setHpCalculo($hpCalculo)
    {
        $this->hpCalculo = $hpCalculo;
    }

    /**
     * Get hpCalculo
     *
     * @return string 
     */
    public function getHpCalculo()
    {
        return $this->hpCalculo;
    }

    /**
     * Set item1
     *
     * @param integer $item1
     */
    public function setItem1($item1)
    {
        $this->item1 = $item1;
    }

    /**
     * Get item1
     *
     * @return integer 
     */
    public function getItem1()
    {
        return $this->item1;
    }

    /**
     * Set item2
     *
     * @param integer $item2
     */
    public function setItem2($item2)
    {
        $this->item2 = $item2;
    }

    /**
     * Get item2
     *
     * @return integer 
     */
    public function getItem2()
    {
        return $this->item2;
    }

    /**
     * Set item3
     *
     * @param integer $item3
     */
    public function setItem3($item3)
    {
        $this->item3 = $item3;
    }

    /**
     * Get item3
     *
     * @return integer 
     */
    public function getItem3()
    {
        return $this->item3;
    }

    /**
     * Set item4
     *
     * @param integer $item4
     */
    public function setItem4($item4)
    {
        $this->item4 = $item4;
    }

    /**
     * Get item4
     *
     * @return integer 
     */
    public function getItem4()
    {
        return $this->item4;
    }

    /**
     * Set item5
     *
     * @param integer $item5
     */
    public function setItem5($item5)
    {
        $this->item5 = $item5;
    }

    /**
     * Get item5
     *
     * @return integer 
     */
    public function getItem5()
    {
        return $this->item5;
    }

    /**
     * Set item6
     *
     * @param integer $item6
     */
    public function setItem6($item6)
    {
        $this->item6 = $item6;
    }

    /**
     * Get item6
     *
     * @return integer 
     */
    public function getItem6()
    {
        return $this->item6;
    }

    /**
     * Set hpMax
     *
     * @param integer $hpMax
     */
    public function setHpMax($hpMax)
    {
        $this->hpMax = $hpMax;
    }

    /**
     * Get hpMax
     *
     * @return integer 
     */
    public function getHpMax()
    {
        return $this->hpMax;
    }

    /**
     * Set hpActual
     *
     * @param integer $hpActual
     */
    public function setHpActual($hpActual)
    {
        $this->hpActual = $hpActual;
    }

    /**
     * Get hpActual
     *
     * @return integer 
     */
    public function getHpActual()
    {
        return $this->hpActual;
    }

    /**
     * Set misionActual
     *
     * @param integer $misionActual
     */
    public function setMisionActual($misionActual)
    {
        $this->misionActual = $misionActual;
    }

    /**
     * Get misionActual
     *
     * @return integer 
     */
    public function getMisionActual()
    {
        return $this->misionActual;
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