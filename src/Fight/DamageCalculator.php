<?php
/**
 * Created by PhpStorm.
 * User: florian.flahaut
 * Date: 22/11/17
 * Time: 10:26
 */

namespace App\Fight;


use App\Entity\User;
use App\Entity\Weapon;
use App\Form\FightType;

class DamageCalculator
{

    public function calculator(Weapon $weapon, int $range)
    {

        $damage = $weapon->getDamage() - ($weapon->getDamageDistanceCoef() * $range);

        return $damage < 0 ? 0 : round($damage);

    }
}