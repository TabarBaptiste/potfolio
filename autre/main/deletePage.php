<?php
include("page.php");
if (isset($_GET['delete']) ){
    $id = $_GET['delete'];
    SupprimerPage($id);
    header('Location: page.php');
  }
?>