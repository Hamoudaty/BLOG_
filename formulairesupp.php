<?php
/*inclut le fichier connect.php */
include "connect.php";
/*$req="SELECT * from article WHERE ida='".$_GET['ida']."'";
$res=mysqli_query($connect,$req);
$reqete=mysqli_fetch_assoc($res);
$row=mysqli_num_rows($reqete);
if($row !=0)
{*/
    $sup="DELETE FROM article where ida='".$_GET['ida']."'";
    $supr=mysqli_query($connect,$sup);
    $tab=mysqli_fetch_array($supr);
    $rows=mysqli_num_rows($tab);
    if($rows =!0)
    {
        header("location:Accueil.php?suppression avec success");
    }else{
        header("location:Accueil.php?suppression Echoué");

    }