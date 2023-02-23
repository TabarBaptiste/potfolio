<?php
require_once('fonction.php');
$id = $_GET['id'];
$utilisateur = Util($id);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Update Page id <?php echo $utilisateur->id ?></title>
	<link rel="shortcut icon" href="images/logoCA.png" />
	<meta charset="utf-8" />
	<div class="form-body">
	<div class="row">
	<div class="form-holder">
	<div class="form-content">
	<div class="form-items">
    <link rel="stylesheet" type="text/css" href="css\formPage.css">

   <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
	<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
	<link rel="stylesheet" href="datepicker.css" />
</head>

<div style="text-align:center">
	<button onclick="window.location.href = 'page.php';">Accueil</button>
	<h2>Mettre à jour id: <?php echo $utilisateur->id ?></h2>
</div>

<form method="post" action="page.php">
	<div class="gauche">

		<div value="<?php echo $utilisateur->theme ?> ">
			<label FOR="name">Theme:</label>
			<select id="name" name="theme">
				<option name="theme" value="PILOTER">PILOTER</option>
				<option name="theme" value="ANALYSER">ANALYSER</option>
				<option name="theme" value="BENCHMARKER">BENCHMARKER</option>
			</select>
		</div>
		<div value="<?php echo $utilisateur->titre ?> ">
			<label FOR="name">Titre:</label>
			<select id="name" name="titre">
				<option name="titre" value="Accueil Réseau d'Agence">Accueil Réseau d'Agence</option>
				<option name="titre" value="La Performance">La Performance</option>
				<option name="titre" value="La Communication">La Communication</option>
				<option name="titre" value="L'Humain">L'Humain</option>
				<option name="titre" value="Accueil Réseaux Spécialisés">Accueil Réseau Spécialisés</option>
				<option name="titre" value="Mon activité">Mon activité</option>
				<option name="titre" value="Financier">Financier</option>
				<option name="titre" value="Protéger">Protéger</option>
				<option name="titre" value="Risques">Risques</option>
				<option name="titre" value="Conquérir">Conquérir</option>
				<option name="titre" value="Accompagner">Accompagner</option>
				<option name="titre" value="Fidéliser">Fidéliser</option>
				<option name="titre" value="Autres">Autres</option>
				<option name="titre" value="Hulk">Hulk</option>
				<option name="titre" value="Résultats Financiers">Résultats Financiers</option>
				<option name="titre" value="Use APP">Use APP</option>
				<option name="titre" value="Divers">Divers</option>
			</select>
		</div>
		<div value="<?php echo $utilisateur->logo ?> ">
			<label FOR="name">Logo:</label>
			<select id="name" name="logo">
				<option name="logo" value="performance.png">performance.png</option>
				<option name="logo" value="communication.png">communication.png</option>
				<option name="logo" value="humain.png">humain.png</option>
			</select>
		</div>
		<div value="<?php echo $utilisateur->libelleg1 ?> ">
			<label FOR="name">Libelleg 1:</label>
			<select id="name" name="libelleg1">
				<option name="libelleg1" value="PILOTER">PILOTER</option>
				<option name="libelleg1" value="Vision Agences">Vision Agences</option>
				<option name="libelleg1" value="Vision Marchés Spécialisés">Vision Marchés Spécialisés</option>
			</select>
		</div>
		<div value="<?php echo $utilisateur->libelleg2 ?> ">
			<label FOR="name">Libelleg 2:</label>
			<select id="name" name="libelleg2">
				<option name="libelleg2" value="ANALYSER">ANALYSER</option>
				<option name="libelleg2" value="">NULL</option>
			</select>
		</div>

	</div>
	<div class="droite">

		<div value="<?php echo $utilisateur->libelleg3 ?> ">
			<label FOR="name">Libelleg 3:</label>
			<select id="name" name="libelleg3">
				<option name="libelleg3" value="BENCHMARKER">BENCHMARKER</option>
				<option name="libelleg3" value="">NULL</option>
			</select>
		</div>
		<div value="<?php echo $utilisateur->flagCol ?> ">
			<label FOR="name">flagCol:</label>
			<select id="name" name="flagCol">
				<option name="flagCol" value="0">0</option>
				<option name="flagCol" value="1">1</option>
			</select>
		</div>
		<div value="<?php echo $utilisateur->linkRetour ?> ">
			<label FOR="name">linkRetour:</label>
			<select id="name" name="linkRetour">
				<option name="linkRetour" value="page.php?idp=1">page.php?idp=1</option>
				<option name="linkRetour" value="page.php?idp=5">page.php?idp=5</option>
				<option name="linkRetour" value="page.php?idp=9">page.php?idp=9</option>
				<option name="linkRetour" value="page.php?idp=21">page.php?idp=21</option>
				<option name="linkRetour" value="page.php?idp=33">page.php?idp=33</option>
			</select>
		</div>
		<div value="<?php echo $utilisateur->linkDoc ?> ">
		<!-- Rajouter une option pour écrire le lien -->
			<label FOR="name">LinkDoc:</label>
			<select id="name" name="linkDoc">
				<option name="linkDoc" value="documents/lexique.pdf">documents/lexique.pdf</option>
				<option name="linkDoc" value="">NULL</option>
			</select>
		</div>
		<div value="<?php echo $utilisateur->idGabarit ?> ">
			<label FOR="name">idGabarit:</label>
			<select id="name" name="idGabarit">
				<option name="idGabarit" value="1">1</option>
				<option name="idGabarit" value="2">2</option>
				<option name="idGabarit" value="3">3</option>
				<option name="idGabarit" value="4">4</option>
				<option name="idGabarit" value="5">5</option>
				<option name="idGabarit" value="6">6</option>
				<option name="idGabarit" value="7">7</option>
				<option name="idGabarit" value="8">8</option>
				<option name="idGabarit" value="9">9</option>
				<option name="idGabarit" value="10">10</option>
			</select>
		</div>
		<!--Mettre valeur par défaut?-->
		<div value="<?php echo $utilisateur->actif ?> ">
			<label FOR="name">Actif:</label>
			<select id="name" name="actif">
				<option name="actif" value="1">1</option>
				<option name="actif" value="0">0</option>
			</select>
		</div>

	</div>

	<input type="hidden" name="id" value="<?php echo $utilisateur->id ?> "><br>
	<!--<input type="submit" name="update" value="Mettre à jour">-->
	<div class="bas">
		<div>
			<button style="background-color: red" type="reset">Annuler</button>
			<button style="background-color: deepskyblue" type="submit" name="update" onclick="window.location.href = 'page.php';">Valider</button>
		</div>
	</div>
</form>
<!-- linkDoc : <input type="text" name="linkDoc" value="<?php echo $utilisateur->linkDoc  ?> "><br>-->