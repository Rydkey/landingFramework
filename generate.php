<?php
/**
 * Created by PhpStorm.
 * User: rrisser
 * Date: 27/04/17
 * Time: 17:44
 */

?>

<!doctype html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Génération</title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body style="background-color: darkgrey">


<div class="container">
    <div id="signupbox" style=" margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="panel-title">Generate</div>
            </div>
            <div class="panel-body" >
                <form method="post" action=".">
                    <input type='hidden' name='csrfmiddlewaretoken' value='XFe2rTYl9WOpV8U6X5CfbIuOZOELJ97S' />

<!--                    'dbname'   => 'landingFramework',  //nom de la BDD-->
<!--                    'user'     => 'root', //Utilisateur-->
<!--                    'password' => 'remy9097*', //mot de passe-->
                    <form  class="form-horizontal" method="post" >
                        <h4>base de donnée</h4>
                        <div id="div_id_driver" class="form-group required">
                            <label class="mr-sm-2" for="inlineFormCustomSelect">Driver</label>
                            <select class="custom-select form-control controls" id="inlineFormCustomSelect">
                                <option selected>Choose...</option>
                                <option value="pdo_mysql">MySQL</option>
                                <option value="pdo_sqlite">SQL Lite</option>
                                <option value="pdo_pgsql">PostGres SQL</option>
                            </select>
                        </div>
                        <div id="div_id_charset" class="form-group required">
                            <label class="mr-sm-2" for="inlineFormCustomSelect">charset</label>
                            <select class="custom-select form-control controls" id="inlineFormCustomSelect">
                                <option selected>Choose...</option>
                                <option value="utf8">utf-8</option>
                                <option value="utf16">utf-16</option>
                                <option value="utf32">utf-32</option>
                                <option value="latin1">latin 1</option>
                            </select>
                        </div>
                        <div id="div_id_username" class="form-group required">
                            <label for="id_username" class="control-label col-md-4  requiredField"> utilisateur<span class="asteriskField">*</span> </label>
                            <div class="controls col-md-8 ">
                                <input class="input-md  textinput textInput form-control" id="id_username" maxlength="30" name="username" placeholder="utilisateur de la base de donnée" style="margin-bottom: 10px" type="text" />
                            </div>
                        </div>
                        <div id="div_id_password1" class="form-group required">
                            <label for="id_password1" class="control-label col-md-4  requiredField">mot de passe<span class="asteriskField">*</span> </label>
                            <div class="controls col-md-8 ">
                                <input class="input-md textinput textInput form-control" id="id_password1" name="password1" placeholder="mdp base de donnée" style="margin-bottom: 10px" type="password" />
                            </div>
                        </div>
                        <div id="div_id_host" class="form-group required">
                            <label for="id_host" class="control-label col-md-4  requiredField">host<span class="asteriskField">*</span> </label>
                            <div class="controls col-md-8 ">
                                <input class="input-md textinput textInput form-control" id="id_host" name="host" placeholder="host de la base de donnée" style="margin-bottom: 10px" type="text" />
                            </div>
                        </div>
                        <div id="div_id_port" class="form-group required">
                            <label for="id_port" class="control-label col-md-4  requiredField">port<span class="asteriskField">*</span> </label>
                            <div class="controls col-md-8 ">
                                <input class="input-md textinput textInput form-control" id="id_port" name="port" placeholder="port de la base de donnée" style="margin-bottom: 10px" type="text" />
                            </div>
                        </div>
                        <div id="div_id_nameBDD" class="form-group required">
                            <label for="id_nameBDD" class="control-label col-md-4  requiredField">Nom de la base<span class="asteriskField">*</span> </label>
                            <div class="controls col-md-8 ">
                                <input class="input-md textinput textInput form-control" id="id_nameBDD" name="nameBDD" placeholder="Nom de la base de donnée" style="margin-bottom: 10px" type="text" />
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="aab controls col-md-4 "></div>
                            <div class="controls col-md-8 ">
                                <input type="submit" name="Signup" value="Generate" class="btn btn-primary btn btn-info" id="submit-id-signup" />
                            </div>
                        </div>

                    </form>

                </form>
            </div>
        </div>
    </div>
</div>

</body>
</html>
