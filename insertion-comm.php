<?php
    /*inclut le fichier connect.php */
    include "connect.php";
    if(isset($_POST['btncom']))
    {       /*$req="SELECT * FROM article WHERE ida='".$_POST['idar']."'";
            $ress=mysqli_query($connect,$req);
            $resul=mysqli_num_rows($ress);
            $row=mysqli_num_rows($resul);
            if($row !=0){*/
            $reqete="INSERT INTO commentaire(ida,commentaires,username) VALUES('".$_POST['idar']."','".$_POST['commentaires']."','".$_POST['usernam']."')";
            $res=mysqli_query($connect,$reqete);
            $identif = mysqli_insert_id($connect); 
                    if ($identif != 0) { 
                        header("location:Accueil.php?Ajout avec reussit!!!"); 
                    }
                
      
    }else{
        echo "llllaaaaaaaaaaaaa";
    }
?>
