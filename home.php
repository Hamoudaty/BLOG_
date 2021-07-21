<?php
/*inclut le fichier connect.php */
include "connect.php";
?>
<!DOCTYPE html>
<html>
   <head> 
      <title>Home</title> 
      <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
      <style>
        #header{
            background-color: #0B615E;
            text-align: center;
            color: #CED8F6;
            font-family: cursive;
            position: fixed;
            width: 1500px;
            margin-left:15%;
            border-radius:20px;
            padding-right:500px;
              
          }
          #list{
              height: 800px;
              position: fixed;
              margin-top: 120px;
              margin-left:5px;
              
          }
          #actualites{
              border: 1px solid #5882FA;
              border-radius: 15px;
              margin-left: 250px;
              position: inherit;
              position: static;
              margin-top: 120px;
              background-color:#CEF6D8;;
             
          }
          #img{
              margin-left: 200px;
          }
          .body{
              border: 1px solid #5882FA;
              padding: 20px;
              border-radius: 20px;
              background-color:white;
          }
          h3{
              border: 1px solid #5882FA;
              border-radius: 20px;
          }
          #imagee{
              position:fixed;
              border-radius:20px;
          }
          #propriete{
              border-radius:20px;
              border: 1px solid #5882FA;
              margin-right:40px;
              margin-top;1px;
          }
          .non{
              display:none;
              color:navy;
          }
          .comm{
              color:navy;
              text-align:right;
          }
          footer{
            position:fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            height:50px;
            background-color: #0B615E;
            color: white;
            text-align: center;
          }
         footer .contact{
             color:white;
             text-decoration:none;
          }  
          .supp{
              text-align:right;
              text-decoration:none;
          }                     
         </style>
         <!--importation du fichier jquery-->
         <script language="javascript" src="js/jquery-3.5.1.min"></script>
   </head> 
<body>
<!--container du header de la page-->
    <div class="container_fluid">
    <img src="css/logo.jpg" width="200px" height="100px" align="left" id="imagee">
        <div class="row col-sm-12" id="header">
            <h1>Inspiration Note</h1>
            <h4>Make Your Touch !!</h4>
        </div>
    </div>
    <!--container du propriete de la page-->
    <div class="container_fluid">
        <div class="row" id="list">
            <div class="panel panel-info panel-heading" id="propriete">
                <ul>
                        <li><strong class="show">Nom du Blog :</strong></li><br><div class="get_view non">Inspiration Note
                        </div><br><br>
                        <li><strong class="show1">Date de Création :</strong></li><br><div class="get_view1 non">20/12/2020</div><br><br>
                        <li><strong class="show2">Pseudo :</strong><br><div class="get_view2 non">Inspire-note</div></li><br><br>
                        <li><strong class="show3">Derniére Mise à jour :</strong><br><div class="get_view3 non">28/12/2020</div></li><br><br>
                        <li><strong class="show4">Statistique :</strong><br>
                        <?php 
                        /*Compter le nombre des articles */   
                        $req="SELECT count(*) FROM `article` where 1";
                        $res=mysqli_query($connect,$req);
                        $row=mysqli_fetch_array($res);
                        if($row!=0)
                        {
                            echo "<div class='get_view4 non'>$row[0] Articles </div>";
                        }else{
                            echo "<div class='get_view4 non'>0</div>";
                        }
                        $reqq="SELECT count(*) FROM `commentaire` where 1";
                        $ress=mysqli_query($connect,$reqq);
                        $roww=mysqli_fetch_array($ress);
                        if($roww!=0)
                        {
                            echo "<div class='get_view4 non'>$roww[0] Commentaires </div>";
                        }else{
                            echo "<div class='get_view4 non'>0</div>";
                        }
                        ?>
                        </div></li><br><br>
                        
            </ul>
        </div>
            </div>
            <div class="col-sm-9" id="actualites">
                <br>
                <br>
                <div class="panel panel-info panel-heading" id="btn">
                    <input type="button" value="Ajouter Un Article" name="B1" class="btn btn-success" onclick="window.document.location.href='form-connexion.php'">

                </div>
                <?php 
 
                   $requete = "SELECT * FROM article ORDER BY Date "; 
                   if ($resultat = mysqli_query($connect,$requete)) { 
                   /* fetch le tableau associatif */ 
                   while ($ligne = mysqli_fetch_assoc($resultat)) { 
                        $dt_debut = date_create_from_format('Y-m-d H:i:s', $ligne['Date']); 
                        echo "<div class='body'><h3 align=center>".$ligne['ida']."-".$ligne['Titre']."</h3>"; 
                        echo "<a href='form-connexion.php'><div class='supp'>Supprimer Article</div></a>"; 
                        echo "<div>".$ligne['commentaire']." </div>"; 
                        if ($ligne['Photo'] != "") { 
                            echo "<img src='photos/".$ligne['Photo']."' width='600px' height='400px' id='img'> ";
                            echo "<h5>Posté Le ".$dt_debut->format('d/m/Y')." à ".$dt_debut->format('H:i:s')."</h5>";
                            $reqq="SELECT count(*) FROM `commentaire` where ida='".$ligne['ida']."'";
                            $ress=mysqli_query($connect,$reqq);
                            $roww=mysqli_fetch_array($ress);
                            if($roww!=0)
                            {
                                echo "<div class='show5' align=right>[$roww[0]     Commentaires] </div>";
                            }else{
                                echo "<div class='show5'>0</div>";
                            }
                            echo "<hr>";
                            echo "<a href='form-connexion.php'>Ajouter un commentaire</a>";
                                echo "</div>";
                            
                            

                        
                        
                        echo "<hr />"; 
                        } 
                 }
                 } 
 
               ?>
                
            </div>
            
            
        </div>
 <script>
 /*les fonction jquery */
     $(document).ready(function(){
            $('.show').click(function(){
            $('.get_view').toggle(500);
            });
            $('.show1').click(function(){
            $('.get_view1').toggle(500);
            });
            $('.show2').click(function(){
            $('.get_view2').toggle(500);
            });
            $('.show3').click(function(){
            $('.get_view3').toggle(500);
            });
            $('.show4').click(function(){
            $('.get_view4').toggle(500);
            });
            $('.comm').click(function(){
            $('.com').toggle();
            });
            $('.show5').click(function(){
            $('.panel2').toggle(500);
            });
});
</script>
<!--footer de la page-->
    <footer><strong>By Med Ali and Nabil</strong><br>
        <div class="contact">
            <a href="contact.php" style="color:white;">Contacter-Nous</a>
        </div>
    </footer> 
</body> 
</html>