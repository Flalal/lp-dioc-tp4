<?php
/**
 * Created by PhpStorm.
 * User: florian.flahaut
 * Date: 22/11/17
 * Time: 11:11
 */

namespace App\Fight;

use App\Entity\User;
class FightHandler
{
    private $damageCalculator;

    /**
     * FightHandler constructor.
     * @param damageCalculator
     */
    public function __construct(DamageCalculator $damageCalculator)
    {
        $this->damageCalculator = new DamageCalculator();
    }

    public function FightHandle(Fight $fight){
        $damage = $this->damageCalculator->calculator($fight->player->getCurrentWeapon(), $fight->distance);
        $fight->target->setHealthPoint($fight->target->getHealthPoint() - $damage);
    }


}