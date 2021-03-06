<?php

/**
 * Created by PhpStorm.
 * User: rrisser
 * Date: 07/04/17
 * Time: 10:19
 */

namespace landingBundle\Form\Type;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormError;


class landingType extends AbstractType
{
    public function __construct()
    {
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('mail',EmailType::class,array(
                'attr'        =>array('placeholder' => 'email'),
                'label'        =>'Email : '
            ))
            ->add('nom',TextType::class,array('attr'=> array('placeholder'=>'Nom','label'=> 'Nom :')))
            ->add('prenom',TextType::class,array('attr'=> array('placeholder'=>'Prenom'),'label'=> 'Prénom :'))
            ->add('numeroAdresse',NumberType::class,array('attr'=> array('placeholder'=>'Numéro de rue'),'label'=> 'Numéro de voie :'))
            ->add('voieAdresse',TextType::class,array('attr'=> array('placeholder'=>'nom de la voie'),'label'=> 'Nom de la voie :'))
            ->add('codePostal',NumberType::class,array('attr'=> array('placeholder'=>'Code Postal'),'label'=> 'Code Postale :'))
            ->add('ville',TextType::class,array('attr'=> array('placeholder'=>'Ville'),'label'=> 'Ville :'))
            ->add('entreprise',TextType::class,array('attr'=> array('placeholder'=>'Entreprise'),'label'=> 'Entreprise :'))
            ->add('opt_in',CheckboxType::class,array('required'=>false))
            ->getForm()
        ;
    }

    public function setDefaultOptions(OptionsResolver $resolver){
        $resolver->setDefaults(array(
            'data_class' => 'Entity\landing'
        ));
    }

    public function getName()
    {
        return 'landingFormType';
    }
}