<?php
include("bouton.php");
if (isset($_GET['delete']) ){
    $id = $_GET['delete'];
    SupprimerBouton($id);
    header('Location: bouton.php');
  }
?>