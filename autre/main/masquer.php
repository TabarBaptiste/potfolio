<?php
/*
include("page.php");
if (isset($_GET['masquer'])){
    $id = $_GET['masquer'];
    masquerActifPage($id);
    //header("Location: index.php");
  }
*/
?>

<?php
require_once('fonction.php');
$id = $_GET['id'];
$utilisateur = maskPage($id);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <title>Masquer l'id <?php echo $utilisateur->id ?></title>
	<link rel="shortcut icon" href="images/logoCA.png" />
	<meta charset="utf-8" />
	<div class="form-body">
	<div class="row">
	<div class="form-holder">
	<div class="form-content">
	<div class="form-items">
  <link rel="stylesheet" type="text/css" href="css\styleForm.css">

   <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
	<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
	<link rel="stylesheet" href="datepicker.css" />
</head>
<div style="text-align:center">
  <button onclick="window.location.href = 'page.php';">Accueil</button>
  <h2>Masquer L'id <?php echo $utilisateur->id ?></h2>
</div>

<form method="post" action="page.php">
  
  <div value="<?php echo $utilisateur->actif ?> ">
      <label FOR="name">Actif:</label>
      <select id="name" name="actif">
        <option name="actif" value="1">1</option>
        <option name="actif" value="0">0</option>
      </select>
    </div>
    <input type="hidden" name="id" value="<?php echo $utilisateur->id ?> "><br>
    
    <div>
      <button style="background-color: red" type="reset">Annuler</button>
      <button style="background-color: deepskyblue" type="submit" name="masquer" onclick="window.location.href = 'page.php';">Masquer</button>
    </div>
    <?php //print_r($utilisateur->actif); ?>
</form>