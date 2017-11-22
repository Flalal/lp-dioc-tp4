<?php
/**
 * Created by PhpStorm.
 * User: florian.flahaut
 * Date: 22/11/17
 * Time: 09:14
 */

namespace App\Form;


use App\Entity\User;
use App\Fight\Fight;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Tests\Fixtures\Entity;

class FightType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder
            ->add(
                'player',
                EntityType::class,
                [
                    'class' => User::class,
                    'choice_label' => function (User $user){
                    return $user->getName() ." - " . $user->getCurrentWeapon()->getName();
                    },
                    'multiple' => false,  // La modif de false par true change les box
                    'expanded' => false,
                ])
            ->add(
                'distance',
                IntegerType::class
            )
            ->add('target',
                EntityType::class,
                [
                    'class' => User::class,
                    'choice_label' => function (User $user){
                    return $user->getName() . " - " . $user->getHealthPoint();
                    },
                    'multiple' => false,  // La modif de false par true change les box
                    'expanded' => false,
                ])
            ->add(
                'save',
                SubmitType::class,
                array('label' => 'Créer')
            );
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        // FIXME: ajouter la configuration du form
        $resolver->setDefaults(['data_class' => Fight::class]);
    }
}