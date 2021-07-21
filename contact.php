<?php
/*inclut du fichier connect.php*/
include "connect.php";


?>
<!DOCTYPE html> 
<html>
   <head> 
      <!--Le Titre Du Page-->
      <title>Contact</title>
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
            height:20px;
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
        <!--Le container du header de la page-->
        <div class="container_fluid">
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
                    <h1 align="center">Contacter-Nous</h1>
                </div>
                
                <div class="panel-body">
                   <!--formulaire d'insertion article dans la base--> 
                    <form method="post" action="">
                        
                        <div class="form-group row">
                            
                            <div class="col-sm-12">
                                <!-- minlength pour la longeur du contenu doit étre >4-->
                                <input type="text" name="usernamee" class="form-control" placeholder="Username !!" minlength="4">
                            </div>
                            
                        </div>
                        
                        <div class="form-group row">
                            
                            <div class="col-sm-12">
                                <!-- min length c la longeur du commentaires il doit étre minimum 10-->
                                <textarea type="text" name="description" class="form-control" placeholder="Quelle Est votre Probléme !!"  minlength="10"></textarea>
                            </div>
                        </div>
               
                        <label class="col-sm-2"></label>
                        <input type="submit" name="btnAjoute" value="Publier" class="btn btn-primary">
                    </form>
                </div> 
                <br /> 
            </div>
        </div>
    </div>
    <?php
            /*isset pour verifier s'il existe ou non*/
            if (isset($_POST['btnAjoute'])){
                /*empty pour verifier si le champ vide*/
                if(empty($_POST['usernamee']) || empty($_POST['description'])){
                    /*header location pour l'envoyer a un autre page*/
                    header("location:contact.php? empty=saisir les champs vides svp !!");
                } 
                else{
                    /*affichage des personne a un username existe dans le table personne*/
                    $query="select * from personne where username='".$_POST['usernamee']."'";
                    $result=mysqli_query($connect,$query);
                    if(mysqli_fetch_assoc($result)){
                        /*inserer la description ou le probléme dans le table contact*/
                        $sql="INSERT INTO contact(`username`,`description`) VALUES('".$_POST['usernamee']."','".$_POST['description']."')";
                        $req=mysqli_query($connect,$sql);
                    }
                    else{
                        header("location:contact.php? invalid=username invalid !!");
                    }
                }
            }
    ?>
    <footer><strong>By Med Ali and Nabil</strong></footer>
</body> 
</html>