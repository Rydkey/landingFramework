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
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;


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
      if($post[FIELD['mail']]){
        $builder->add('mail',EmailType::class,array('attr'=>array('placeholder' => 'email'), 'label'=>'Email : '));
      }
      if($post[FIELD['nom']]){
        $builder->add('nom',TextType::class,array('attr'=> array('placeholder'=>'Nom'),'label'=> 'Nom :'));
      }
      if ($post[FIELD['prenom']]){
        $builder->add('prenom',TextType::class,array('attr'=> array('placeholder'=>'Prénom'),'label'=> 'Prénom :'));
      }
      if($post[FIELD['numeroAdresse']]){
        $builder->add('numeroAdresse',NumberType::class,array('attr'=> array('placeholder'=>'Numéro de rue'),'label'=> 'Numéro de voie :'));
      }
      if($post[FIELD['voieAdresse']]){
        $builder->add('voieAdresse',TextType::class,array('attr'=> array('placeholder'=>'Nom de la voie'),'label'=> 'Nom de la voie :'));
      }
      if ($post[FIELD['codePostal']]){
        $builder->add('codePostal',NumberType::class,array('attr'=> array('placeholder'=>'Code Postal'),'label'=> 'Code Postale :','constraints'=>[new Assert\Length(['min'=>5])]));
      }
      if ($post[FIELD['ville']]){
        $builder->add('ville',TextType::class,array('attr'=> array('placeholder'=>'Ville'),'label'=> 'Ville :'));
      }
      if ($post[FIELD['telephone']]){
        $builder->add('telephone',TextType::class,['attr'=>['placeholder'=>'N°téléphone','label'=>'Numéro de téléphone'],'constraints'=>[
          new Assert\Length(['min'=>10]),
          new Assert\Regex('/^(01|02|03|04|05|06|07|09)/'),
          new Assert\Type('numeric')
        ]]);
      }
      if ($post[FIELD['entreprise']]){
        $builder->add('entreprise',TextType::class,array('attr'=> array('placeholder'=>'Entreprise'),'label'=> 'Entreprise :'));
      }
      if ($post[FIELD['message']]){
        $builder->add('message',TextareaType::class,array('attr'=> array('placeholder'=>'Message'),'label'=> 'Message :','required'=>FALSE));
      }
      if ($post[FIELD['opt_in']]){
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