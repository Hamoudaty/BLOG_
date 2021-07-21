<?php
$connect=mysqli_connect("localhost","root","",'blog');
if($connect===False)
{
    die("erreur de la connexion");
}else{
   // echo "true";
}
?>