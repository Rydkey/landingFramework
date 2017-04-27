<?php
/**
 * Created by PhpStorm.
 * User: rrisser
 * Date: 27/04/17
 * Time: 09:25
 */

namespace landingBundle\Form\Type;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\OptionsResolver\OptionsResolver;


class adminType extends AbstractType {
  public function __construct() {
  }
  
  public function buildForm(FormBuilderInterface $builder, array $options) {
    global $field;
    $builder
      ->add('opt_mail',CheckboxType::class,array('required'=>false,'label'=>'E-mail','attr'=>['checked'=>$field['mail']]))
      ->add('opt_nom',CheckboxType::class,array('required'=>false,'label'=>'Nom','attr'=>['checked'=>$field['nom']]))
      ->add('opt_prenom',CheckboxType::class,array('required'=>false,'label'=>'Prénom','attr'=>['checked'=>$field['prenom']]))
      ->add('opt_numeroAdresse',CheckboxType::class,array('required'=>false,'label'=>'Numéro adresse','attr'=>['checked'=>$field['numeroAdresse']]))
      ->add('opt_voieAdresse',CheckboxType::class,array('required'=>false,'label'=>'Voie Adresse','attr'=>['checked'=>$field['voieAdresse']]))
      ->add('opt_codePostal',CheckboxType::class,array('required'=>false,'label'=>'Code postale','attr'=>['checked'=>$field['codePostal']]))
      ->add('opt_ville',CheckboxType::class,array('required'=>false,'label'=>'Ville','attr'=>['checked'=>$field['ville']]))
      ->add('opt_entreprise',CheckboxType::class,array('required'=>false,'label'=>'Entreprise','attr'=>['checked'=>$field['entreprise']]))
      ->add('opt_opt_in',CheckboxType::class,array('required'=>false,'label'=>'Optionnel','attr'=>['checked'=>$field['opt_in']]))
      ->getForm();
    ;
  }
  
  
  public function setDefaultOptions(OptionsResolver $resolver){
  
  }
  
  public function getName()
  {
    return 'adminFormType';
  }
}
