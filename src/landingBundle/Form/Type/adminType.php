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
    global $app;
    $sql='SELECT * FROM admin WHERE id=1';
    $post=$app['db']->fetchAssoc($sql);
    foreach (FIELD as $f){
      if($post[$f]){
        $builder->add($f,CheckboxType::class,array('required'=>false,'label'=>$f,'attr'=>['checked'=>'']));
      }else{
        $builder->add($f,CheckboxType::class,array('required'=>false,'label'=>$f));
      }
    }
    $builder->getForm();
    ;
  }
  
  
  public function setDefaultOptions(OptionsResolver $resolver){

  }
  
  public function getName()
  {
    return 'adminFormType';
  }
}
