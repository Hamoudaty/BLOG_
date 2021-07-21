<?php
/*inclut connect et inscription */
include "connect.php";
include "login.php";
?>
<!DOCTYPE html>  
   <head> 
      <title>Blog</title> 
   </head> 
    <?php
    //declaration variables
    if (isset ($_POST['btnAjout']))
    { 
      if(empty($_POST['nom']) || empty($_POST['prenom'])|| empty($_POST['Date_naiss'])|| empty($_POST['pwd'])|| empty($_POST['username'])){
         header("location:inscription.php? empty=saisir les champs vides svp !!");
     } else{
        //On prépare la commande sql d'insertion_
        $sql = "INSERT INTO personne (`nom`,`prenom`,`Date_naiss`,`pwd`,`username`) VALUES('".$_POST["nom"]."','".$_POST["prenom"]."','".$_POST["Date_naiss"]."','".$_POST["pwd"]."','".$_POST["username"]."')"; 
        $res=mysqli_query($connect,$sql);
           $_SESSION['user']=$_POST["username"];
           header("location:Accueil.php?Insertion Avec Success");}
           
        
        }?>
    
<?php
//fermer la connexion
mysqli_close($connect);

?>
