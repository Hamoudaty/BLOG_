<?php
/*inclut le fichier connect et login */
include "connect.php";
include "login.php"; 
 ?>
<html>
   <head> 
      <!--Le Titre Du Page-->
      <title>Connexion</title>
      <!--Importation Du Fichier bootstrap.css--> 
      <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
      <!--la balise style pour le style de la page--> 
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
                        position: fixed;
                        width: 1500px;
                        margin-left:15%;
                        border-radius:20px;
                        padding-right:650px;
                        
                       
                        }
                        #imagee{
                            position:fixed;
                            border-radius:20px;

                        }
                
                        
                        footer{
                                position:fixed;
                                left: 0;
                                bottom: 0;
                                width: 75%;
                                background-color: #0B615E;
                                color: white;
                                text-align: center;
                        }
                            #body{
                                margin-top:150px;
                        }
                            footer .contact{
                            color:white;
                            text-decoration:none;
                        }
                        
          </style>
   </head> 
   <body>
            <!--container du header de la page-->
            <div class="container_fluid">
            <!--image lien vers accueil.php-->
                <a href ="Home.php"> <img src="css/logo.jpg" width="200px" height="100px" align="left" id="imagee"></a>
                    <div class="row col-sm-12" id="headera">
                        <h1>Inspiration Note</h1>
                        <h4>Make Your Touch !!</h4>
                    </div>
            </div>
                <div class="container_fluid">
                <div class="container col-md-5 col-md-offset-3" id="body">
                            <div class="panel panel-info">
                                <div class="panel-heading">
                                    <h1 align="center">Connectez-vous</h1>
                                </div>
                            <?php 
                                if(@$_GET['empty']==true){
                            ?>
                            <div class="alert-light text-danger text-center" style="background-color:#0B4C5F;height:50px;"><?php echo $_GET['empty'];?></div>
                            <?php
                                }
                            ?>
                            
                            <?php 
                                if(@$_GET['invalid']==true){
                            ?>
                            <div class="alert-light text-danger text-center" style="background-color:#0B4C5F;height:50px;"><?php echo $_GET['invalid'];?></div>
                            <?php
                                }
                            ?> 
                            </div>
                        
             <div class="panel-body">
                <!--formulaire de connexion-->
                <form method="POST" action="form-connexion.php">
                        <br><br>
                        <div class="form-group row">      
                                        <div class="col-sm-12">
                                            <input type="text" name="username" class="form-control" placeholder="Nom Utilisateur">
                                        </div>
                                </div>
                        <div class="form-group row">
                                <div class="col-sm-12">
                                    <!--pattern c pour le contenu de zone de text il faut que le mot de passe contient que de Number Et alphabet
                                    avec un longeur minimum 6 -->
                                    <input type="password" name="pwd" class="form-control" placeholder="Mot De Passe" pattern=[a-z0-9]{6,}>
                                </div>
                        </div>
                        <br><br>
                            <input type="submit" name="connex" value="Connexion" class="btn btn-primary btn-block ">
                            </div>
                        <strong>Vous n'avez pas encore un compte !<br><a href="inscription.php">Inscrivez-vous</a></strong>
                </form>
                    </div>
                    <br>
                    </div> </div><br><br><br><br><br><br>
                    <!--footer de la page-->
                    <footer><strong>By Med Ali and Nabil</strong><br>
                        <div class="contact">
                            <a href="contact.php" style="color:white;">Réclamation</a>
                        </div>
                    </footer>        
</body> 
</html>