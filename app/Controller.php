<?php
use landingBundle\Form\Type\adminType;

/**
 * Created by PhpStorm.
 * User: rrisser
 * Date: 27/04/17
 * Time: 16:00
 *
 * @param \Symfony\Component\HttpFoundation\Request $request
 * @param \Silex\Application $app
 *
 * @return
 */

function adminController(Symfony\Component\HttpFoundation\Request $request, Silex\Application $app){
  $formBuilder= $app['form.factory']->createBuilder(adminType::class);
  $form=$formBuilder->getForm();
  $form->handleRequest($request);
  if($form->isSubmitted()){
    if($form->isValid()){
      foreach (FIELD as $f){
        $sql='UPDATE admin SET opt_'.$f.'='.(int)$form['opt_'.$f]->getData().' WHERE id=1';
        $post=$app['db']->executeUpdate($sql);
      }
      $app['session']->getFlashBag()->add('notice','Modification effectué');
    }else{
      $app['session']->getFlashBag()->add('error','Le formulaire comporte des erreurs');
    }
  }
  return $app['twig']->render('admin/admin.html.twig',['DUMP'=>FIELD,'form'=>$form->createView()]);
}