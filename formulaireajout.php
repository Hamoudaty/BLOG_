<?php
include "connect.php";
?>
<!DOCTYPE html> 
<html>
   <head> 
      <!--Le Titre Du Page-->
      <title>Ajout article</title>
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
           /*pour fixer la barre en haute */
           position: fixed;
           width: 1500px;
           margin-left:15%;
           padding-right:650px;
           border-radius:20px;
           }
           #imagee{
               position:fixed;
               border-radius:20px;
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
            <a href="Accueil.php"><img src="css/logo.jpg" width="200px" height="100px" align="left" id="imagee"></a>
                <div class="row col-sm-12" id="headera">
                    <h1>Inspiration Note</h1>
                    <h4>Make Your Touch !!</h4>
                </div>
        </div>
    <div class="container_fluid">
        <div class="container col-md-5 col-md-offset-3" id="body">
            <div class="panel panel-info" >
                <div class="panel-heading">
                    <h1 align="center">Ajouter Article</h1>
                </div>
                
                <div class="panel-body">
                   <!--formulaire d'insertion article dans la base--> 
                    <form method="post" action="insertion-article.php" enctype="multipart/form-data">
                    <div class="form-group row">
                            
                            <div class="col-sm-12">
                                <!-- minlength pour la longeur du contenu doit étre >4-->
                                <input type="text" name="ida" class="form-control" placeholder="Id De L'article">
                            </div>
                            
                        </div>
                        <div class="form-group row">
                            
                            <div class="col-sm-12">
                                <!-- minlength pour la longeur du contenu doit étre >4-->
                                <input type="text" name="titre" class="form-control" placeholder="Titre De L'article" minlength="4">
                            </div>
                            
                        </div>
                        
                        <div class="form-group row">
                            
                            <div class="col-sm-12">
                                <!-- min length c la longeur du commentaires il doit étre minimum 10-->
                                <textarea type="text" name="commentaire" class="form-control" placeholder="Commentaires"  minlength="10"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            
                            <div class="col-sm-12">
                                <!-- minlength pour la longeur du contenu doit étre >4-->
                                <input type="text" name="username" class="form-control" placeholder="Username">
                            </div>
                            
                        </div>
                        <div class="form-group row">
                            
                            <div class="col-sm-12">
                                <!--type filepour importer un fichier ou photo ou video... -->
                                <input type="file" name="photo" class="form-control">
                                
                            </div>
                        </div>
               
                        <label class="col-sm-2"></label>
                        <input type="submit" name="btnAjout" value="Publier" class="btn btn-primary">
                    </form>
                </div> 
                <br /> 
            </div>
        </div>
    </div>
    <footer><strong>By Med Ali and Nabil</strong><br>
        <div class="contact">
            <a href="contact.php" style="color:white;">Réclamation</a>
        </div>
    </footer> 
</body> 
</html>