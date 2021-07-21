<?php
  /* inclut le fichier connect.php dans ce fichier*/
     include "connect.php";

  ?>
  <?php 
     if ((isset($_FILES['photo']['name']))) {  
        /*déplacement du fichier du répertoire temporaire dans le répertoire de destination*/ 
        move_uploaded_file($_FILES['photo']['tmp_name'],'photos/'.$_FILES['photo']['name']); 
  
   
  $requete = "INSERT INTO article(ida,Titre, Date, commentaire, Photo,username) VALUES('".$_POST['ida']."','".$_POST['titre']."','".date("Y-m-d H:i:s")."','".$_POST['commentaire']."', '".$_FILES['photo']['name']."','".$_POST['username']."')"; 
  $resultat = mysqli_query($connect,$requete); 
  $identifiant = mysqli_fetch_assoc($resultat); 
  /* Fermeture de la connexion */ 
  mysqli_close($connect); 
   
  if ($identifiant) { 
     header("location:Accueil.php?Ajout du commentaire réussi."); 
  } 
  else {
   header("location:Accueil.php?Le commentaire n'a pas pu être ajouté.");  
  } }
  ?> 