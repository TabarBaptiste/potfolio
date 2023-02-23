<?php
include("page.php");
if (isset($_GET['masquer']) ){
    $id = $_GET['masquer'];
    MasquerActifPage($id);
    header('Location: page.php');
  }
?>