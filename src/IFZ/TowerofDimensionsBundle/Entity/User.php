<?php
// src/ifz/towerofdimensionsBundle/Entity/Player.php
namespace ifz\towerofdimensionsBundle\Entity;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContext;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="User")
 */
class User implements UserInterface {
    /**
     * @var integer
     *
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;


    /**
     * @ORM\Column(name="nameFirst", type="string")
     */
    protected $nameFirst;

    /**
     * @ORM\Column(name="nameLast", type="string")
     */
    protected $nameLast;

    /**
     * @ORM\Column(name="emailAddress", type="string")
     */
    protected $emailAddress;

    /**
     * @ORM\Column(name="User_created", type="datetime")
     */
    protected $createdDate;

    /**
     * @ORM\Column(name="User_modified", type="datetime")
     */
    protected $modifiedDate;

    public function __construct() {
        $now = new \DateTime();
        $this->createdDate = $now;
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
     * Set nameFirst
     *
     * @param string $nameFirst
     */
    public function setNameFirst($nameFirst)
    {
        $this->nameFirst = $nameFirst;
    }

    /**
     * Get nameFirst
     *
     * @return string
     */
    public function getNameFirst()
    {
        return $this->nameFirst;
    }

    /**
     * Set nameLast
     *
     * @param string $nameLast
     */
    public function setNameLast($nameLast)
    {
        $this->nameLast = $nameLast;
    }

    /**
     * Get nameLast
     *
     * @return string
     */
    public function getNameLast()
    {
        return $this->nameLast;
    }

    /**
     * Set emailAddress
     *
     * @param string $emailAddress
     */
    public function setEmailAddress($emailAddress)
    {
        $this->emailAddress = $emailAddress;
    }

    /**
     * Get emailAddress
     *
     * @return string
     */
    public function getEmailAddress()
    {
        return $this->emailAddress;
    }

    /**
     * Set createdDate
     *
     * @param datetime $createdDate
     */
    public function setCreatedDate($createdDate) { }

    /**
     * Get createdDate
     *
     * @return datetime
     */
    public function getCreatedDate()
    {
        return $this->createdDate;
    }

    /**
     * Set modifiedDate
     *
     * @param datetime $modifiedDate
     */
    public function setModifiedDate($modifiedDate) { }

    /**
     * Get modifiedDate
     *
     * @return datetime
     */
    public function getModifiedDate()
    {
        return $this->modifiedDate;
    }

    public function getRoles() {
        return array('ROLE_USER');
    }

    public function getPassword() {
        return 'UNKNOWN';
    }

    public function getSalt() {
        return '';
    }

    public function getUsername() {
        return $this->getNameFirst() . ' ' . $this->getNameLast();
    }

    public function eraseCredentials() { }

    public function equals(UserInterface $user) {
        if(! $user instanceof User) {
            return false;
        }
        return $user->getEmailAddress() == $this->getEmailAddress();
    }

}
