<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8" />
	<div class="form-body">
	<div class="row">
	<div class="form-holder">
	<div class="form-content">
	<div class="form-items">
    <link rel="stylesheet" href="css\styleForm.css" />
</head>

<div style="text-align:center">
    <button onclick="window.location.href = 'bouton.php';">Accueil</button>
    <h2>Création d'un bouton</h2>
</div>
<form method="post" action="bouton.php">

    <div>
		<label FOR="name">Libelle:</label>
		<select id="name" name="libelle">
			<option name="libelle" value="La Performance">La Performance</option>
			<option name="libelle" value="La Communication">La Communication</option>
			<option name="libelle" value="L'Humain">L'Humain</option>
            <option name="libelle" value="Mon Agenda">Mon Agenda</option>
			<option name="libelle" value="Ma Synthèse">Ma Synthèse</option>
			<option name="libelle" value="Revue Portefeuille">Revue Portefeuille</option>
            <option name="libelle" value="R.E.C">R.E.C</option>
			<option name="libelle" value="LTDB Agence">LTDB Agence</option>
			<option name="libelle" value="A.A.C">A.A.C</option>
            <option name="libelle" value="F.Q.R">F.Q.R</option>
			<option name="libelle" value="E.M.I">E.M.I</option>
            <option name="libelle" value="S.I.R.H">S.I.R.H</option>
			<option name="libelle" value="La Performance">La Performance</option>
			<option name="libelle" value="La Communication">La Communication</option>
            <option name="libelle" value="Synthèse M.S.">Synthèse M.S.</option>
			<option name="libelle" value="TDB M.S.">TDB M.S.</option>
			<option name="libelle" value="Siège">Siège</option>
            <option name="libelle" value="NBQ">NBQ</option>
			<option name="libelle" value="Cartes">Cartes</option>
			<option name="libelle" value="Ouverture DAV">Ouverture DAV</option>
            <option name="libelle" value="Taux de contact">Taux de contact</option>
			<option name="libelle" value="Couverture du PTF">Couverture du PTF</option>
			<option name="libelle" value="Téléphonie">Téléphonie</option>
		</select>
	</div>
	<div>
		<label FOR="name">Ligne:</label>
		<select id="name" name="ligne">
			<option name="ligne" value="1">1</option>
			<option name="ligne" value="2">2</option>
		</select>
	</div>
	<div>
		<label FOR="name">col:</label>
		<select id="name" name="col">
			<option name="col" value="1">1</option>
			<option name="col" value="2">2</option>
			<option name="col" value="3">3</option>
		</select>
	</div>
	<div>
		<label FOR="name">Picto:</label>
		<select id="name" name="picto">
			<option name="picto" value="performance.png">performance.png</option>
			<option name="picto" value="communication.png">communication.png</option>
			<option name="picto" value="humain.png">humain.png</option>
		</select>
	</div>
	<div>
		<label FOR="name">Reduction:</label>
		<select id="name" name="reduction">
			<option name="reduction" value="60">60</option>
			<option name="reduction" value="61">61</option>
		</select>
	</div>
	<div>
		<label FOR="name">idPage:</label>
		<select id="name" name="idPage">
			<option name="idPage" value="1">1</option>
			<option name="idPage" value="2">2</option>
			<option name="idPage" value="3">3</option>
		</select>
	</div>
	<div>
		<label FOR="name">url:</label>
		<select id="name" name="url">
			<option name="url" value="index.php?idp=2">index.php?idp=2</option>
			<option name="url" value="index.php?idp=3">index.php?idp=3</option>
			<option name="url" value="index.php?idp=4">index.php?idp=4</option>
			<option name="url" value="index.php?idp=5">index.php?idp=5</option>
            <option name="url" value="#">#</option>
		</select>
	</div>
	<div>
		<label FOR="name">Actif:</label>
		<select id="name" name="actif">
			<option name="actif" value="1">1</option>
		</select>
	</div>
    <div>
		<button style="background-color: red" type="reset">Annuler</button>
		<button style="background-color: deepskyblue" type="submit" name="ajout" onclick="window.location.href = 'bouton.php';">Valider</button>
	</div>
</form>