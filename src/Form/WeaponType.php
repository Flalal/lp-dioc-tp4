<?php
/**
 * Created by PhpStorm.
 * User: florian.flahaut
 * Date: 22/11/17
 * Time: 08:58
 */

namespace App\Form;


use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class WeaponType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder
            ->add('name')
            ->add('damage')
            ->add('damageDistanceCoef')
            ->add('$fireRate')
            ->add('save', SubmitType::class, array('label' => 'Créer'));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        // FIXME: ajouter la configuration du form
        $resolver->setDefaults(['data_class' => User::class]);
    }
}