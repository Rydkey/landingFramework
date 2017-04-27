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
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\OptionsResolver\OptionsResolver;


class landingType extends AbstractType
{
    public function __construct()
    {
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
      global $app;
      $sql='SELECT * FROM admin WHERE id=1';
      $post=$app['db']->fetchAssoc($sql);
      if($post['opt_mail']){
        $builder->add('mail',EmailType::class,array('attr'=>array('placeholder' => 'email'), 'label'=>'Email : '));
      }
      if($post['opt_nom']){
        $builder->add('nom',TextType::class,array('attr'=> array('placeholder'=>'Nom'),'label'=> 'Nom :'));
      }
      if ($post['opt_prenom']){
        $builder->add('prenom',TextType::class,array('attr'=> array('placeholder'=>'Prénom'),'label'=> 'Prénom :'));
      }
      if($post['opt_numeroAdresse']){
        $builder->add('numeroAdresse',NumberType::class,array('attr'=> array('placeholder'=>'Numéro de rue'),'label'=> 'Numéro de voie :'));
      }
      if($post['opt_voieAdresse']){
        $builder->add('voieAdresse',TextType::class,array('attr'=> array('placeholder'=>'Nom de la voie'),'label'=> 'Nom de la voie :'));
      }
      if ($post['opt_codePostal']){
        $builder->add('codePostal',NumberType::class,array('attr'=> array('placeholder'=>'Code Postal'),'label'=> 'Code Postale :'));
      }
      if ($post['opt_ville']){
        $builder->add('ville',TextType::class,array('attr'=> array('placeholder'=>'Ville'),'label'=> 'Ville :'));
      }
      if ($post['opt_entreprise']){
        $builder->add('entreprise',TextType::class,array('attr'=> array('placeholder'=>'Entreprise'),'label'=> 'Entreprise :'));
      }
      if ($post['opt_opt_in']){
        $builder->add('opt_in',CheckboxType::class,array('required'=>false));
      }
        $builder->getForm()
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