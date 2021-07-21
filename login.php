<?php 
     /*ouvrir une session */
     session_start();
     /*recuperer le fichier connect.php */
     require_once('connect.php');
      if (isset($_POST['connex'])){
          /*tester si les deux champs vide */
          if(empty($_POST['username']) || empty($_POST['pwd'])){
              header("location:form-connexion.php? empty=saisir les champs vides svp !!");
          } 
          else{
              /*affichage le username et mot de passe de la base */
              $query="select * from personne where username='".$_POST['username']."' and pwd='".$_POST['pwd'] ."'";
              $result=mysqli_query($connect,$query);
              if(mysqli_fetch_assoc($result)){
                  /*enregistrer le username dans cette session */
                  $_SESSION['user']=$_POST['username'];
                  header("location:Accueil.php");
              }
              else{
                  header("location:form-connexion.php? invalid=saisir les correctes infos svp !!");
              }
          }
      }
      

?>
