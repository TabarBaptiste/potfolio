<html>
<head>

    <?php 
    /* global $pdo;
    require_once('fonction.php');
    session_start();
    if (isset($_SESSION['nom']) && isset($_SESSION['password'])){
        echo "<h3> Bienvenue: ".$_SESSION['nom']."</h3>";
        echo '<button style="color: red" onclick="window.location.href="index.php"">Déconnexion</button>';
    } */
    ?>

	<meta charset ="UTF-8">
    <link href="css\styleIndex.css" rel="stylesheet">
    <!-- <script src="menu.js"></script> -->
    <title>Portail pilotage MSTS</title>
    <link rel="shortcut icon" href="images/logoCA.png" />
    <div class="form-content">
	<div class="form-items">
</head>
<div class="header">
        <a href="https://www.credit-agricole.fr/"><img id="logo" src="images\logoCA.PNG" alt="Logo Crédit Agricole"></a>
        <h1>Portail pilotage MSTS</h1>
        <!--<button class="btn btn-outline-primary mb-2" type="button">Ajouter</button>-->
    </div>
    <div class="but">
        <button style="color: black" onclick="window.location.href='index.php'">Accès application</button>
        <button style="color: black" onclick="window.location.href='page.php'">Gestion pages</button>
        <button style="color: black" onclick="window.location.href='bouton.php'">Gestion boutons</button>
    </div>
</div>
<style>
    button:hover{
    -webkit-transition: 1s linear 0s;
    -moz-transition: 1s linear 0s;
    -o-transition: 1s linear 0s;
    transition: 1s linear 0s;
    outline: 0 none;
    text-decoration: none;
    border-radius: 60px;
}
</style>
</html>