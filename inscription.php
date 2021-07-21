<?php
include "connect.php";
?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Inscription</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <style>
       
                    #accueil{
                        margin-left: 50px;
                        margin-right: 200px;
                    }
                    #headera{
                        background-color: #0B615E;
                        text-align: center;
                        color: #CED8F6;
                        font-family: cursive;
                        /*pour fixer la barre en haute */
                        position: fixed;
                        width: 1500px;
                        margin-left:15%;
                       
                        padding-right:650px;
                        
                       
                        }
                        #imagee{
                            position:fixed;
                        }
                
                        
                        footer{
                                position:fixed;
                                left: 0;
                                bottom: 0;
                                width: 100%;
                                background-color: #0B615E;
                                color: white;
                                text-align: center;
                                }
                            #body{
                                margin-top:150px;
                            }
                        
          </style>
    </head>
    <body> 
    <div class="container_fluid">
                <a href="Home.php"><img src="css/logo.jpg" width="200px" height="100px" align="left" id="imagee"></a>
                    <div class="row col-sm-12" id="headera">
                        <h1>Inspiration Note</h1>
                        <h4>Make Your Touch !!</h4>
                    </div>
            </div>
        <div class="container_fluid">
         
        
        <div class="container col-md-5 col-md-offset-3" id="body">
            
        <div class="panel panel-info" id="form">
                <div class="panel-heading">
                    <h1 align="center">S'inscrire</h1>
                </div>
        <div class="panel-body">
        <form method="POST" action="insertion-personne.php" enctype="multipart/form-data">
        
                <div class="form-group row">
                        <div class="col-sm-12">
                            <input type="text" name="nom" class="form-control" placeholder="Nom">
                        </div>

                </div>
                <div class="form-group row">
                                <div class="col-sm-12">
                                <input type="text" name="prenom" class="form-control" placeholder="prénom">
                </div>
                 </div>
                <div class="form-group row">
                                <div class="col-sm-12">
                                    <input type="text" name="username" class="form-control" placeholder="User Name">
                                </div>
                </div>
                <div class="form-group row">
                        <div class="col-sm-12">
                            <!--pattern c pour le contenu de zone de text il faut que le mot de passe contient que de Number Et alphabet
                        avec un longeur minimum 6 -->
                            <input type="password" name="pwd" class="form-control" placeholder="Mot De Passe" pattern=[a-z0-9]{6,24}>
                        </div>
                </div>
                <div class="form-group row">
                        <div class="col-sm-12">
                            Date de Naissance:
                            <input type="date" class="form-control" name="Date_naiss">
                        </div>

                </div>
               
                    <label class="col-sm-6"></label>
                    <input type="submit" name="btnAjout" value="S'inscrire" class="btn btn-primary">
                    <label class="col-sm-2"></label>
                    <input type="reset" name="btnRes" value="Annuler" class="btn btn-danger">
            <br><br>
            <strong>Vous etes deja membre !<br><a href="form-connexion.php">Connectez-vous</a></strong>
                
        </form>

            
            <footer><strong>By Med Ali and Nabil</strong></footer> 
</body>
</html>

