<?php
require_once('fonction.php');
$id = $_GET['id'];
$boutons = maskBoutons($id);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <title>Masquer l'id <?php echo $boutons->id ?></title>
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
  <button onclick="window.location.href = 'bouton.php';">Accueil</button>
  <h2>Masquer L'id <?php echo $boutons->id ?></h2>
</div>

<form method="post" action="bouton.php">
  
  <div>
      <label FOR="name">Actif:</label>
      <select id="name" name="actif">
        <option style="background-color: grey" name="actif" value="<?php echo $boutons->actif ?>"><?php echo $boutons->actif ?></option>
        <option name="actif" value="1">1</option>
        <option name="actif" value="0">0</option>
      </select>
    </div>
    <input type="hidden" name="id" value="<?php echo $boutons->id ?> "><br>
    
    <div>
      <button style="background-color: red" type="reset">Annuler</button>
      <button style="background-color: deepskyblue" type="submit" name="masquer" onclick="window.location.href = 'bouton.php';">Masquer</button>
    </div>
</form>