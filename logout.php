<?php
   /*ouvrir une session */
   session_start();
   session_unset();
   /*fermer une session */
   session_destroy();
   header("location:home.php")

?>
