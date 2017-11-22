<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Entity
 */
class User
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column()
     */
    private $name;

    /**
     * @ORM\Column(type="integer")
     */
    private $healthPoint=100;

    /**
     * @ORM\ManyToOne(targetEntity="Weapon")
     */
    private $currentWeapon;

    /**
     * User constructor.
     * @param $name
     * @param int $healthPoint
     * @param $currentWeapon
     */


    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }


    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getHealthPoint()
    {
        return $this->healthPoint;
    }

    /**
     * @param mixed $healthPoint
     */
    public function setHealthPoint($healthPoint)
    {
        $this->healthPoint = $healthPoint;
    }

    /**
     * @return mixed
     */
    public function getCurrentWeapon()
    {
        return $this->currentWeapon;
    }

    /**
     * @param mixed $currentWeapon
     */
    public function setCurrentWeapon($currentWeapon)
    {
        $this->currentWeapon = $currentWeapon;
    }






}
