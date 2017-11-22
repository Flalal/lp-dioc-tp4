<?php

namespace App\DataFixtures\ORM;


class LoadWeapon extends \Doctrine\Bundle\FixturesBundle\Fixture
{
    public function load(\Doctrine\Common\Persistence\ObjectManager $manager){

        $weapons = [
            ['shotgun', 100, 5, 3],
            ['sniper', 100, 0.3, 5],
            ['m4', 20, 0.2, 10],
            ['handgun', 25, 1, 3],
        ];

        foreach ($weapons as $weaponData){
            $weapon = new \App\Entity\Weapon($weaponData[0],$weaponData[1],$weaponData[2],$weaponData[3]);

            $this->addReference($weapon->getName(),$weapon);
            $manager->persist($weapon);
        }

        $manager->flush();
    }
}