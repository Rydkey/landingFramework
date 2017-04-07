<?php
/**
 * Created by PhpStorm.
 * User: rrisser
 * Date: 06/04/17
 * Time: 14:39
 */

// Doctrine (db)
$app['db.options'] = array(
    'driver'   => 'pdo_mysql', //définit le driver pour la BDD
    'charset'  => 'utf8', //définit le charset pour la BDD
    'host'     => 'localhost',  //serveur pour la BDD
    'port'     => '3306',  //port du serveur
    'dbname'   => 'landingFramework',  //nom de la BDD
    'user'     => 'root', //Utilisateur
    'password' => 'remy9097*', //mot de passe
);

$app['orm.proxies_dir'] = __DIR__.'/../cache/doctrine/proxies';
$app['orm.default_cache'] = 'array';
$app['orm.em.options'] = array(
    'mappings' => array(
        array(
            'type' => 'annotation',
            'path' => __DIR__.'/../../src',
            'namespace' => 'landingPage\Entity',
        ),
    ),
);