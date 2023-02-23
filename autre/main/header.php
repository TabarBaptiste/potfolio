<html>
<head>
	<meta charset ="UTF-8">
    <link href="css\style.css" rel="stylesheet">
    <script src="menu.js"></script>
    <!-- <title>Portail pilotage MSTS</title> -->
    <link rel="shortcut icon" href="images/logoCA.png" />
</head>
<div class="header">
        <a href="https://www.credit-agricole.fr/"><img id="logo" src="images\logoCA.PNG" alt="Logo Crédit Agricole"></a>
        <h1>Portail pilotage MSTS</h1>
        <!--<button class="btn btn-outline-primary mb-2" type="button">Ajouter</button>-->
    <div class="but">
        <button class="app" style="color: black" onclick="window.location.href='index.php'">Accès application</button>
        <button class="pag" style="color: black" onclick="window.location.href='page.php'">Gestion pages</button>
        <button class="but" style="color: black" onclick="window.location.href='bouton.php'">Gestion boutons</button>
    </div>
    <!-- <div class="login">
        <?php 
        global $pdo;
        require_once('fonction.php');
        session_start();
        if (isset($_SESSION['nom']) && isset($_SESSION['password'])){
            echo "<h3> Bienvenue: ".$_SESSION['nom']."</h3>";
            echo '<h3><a href="logout.php">Déconnexion</a></h5>';
        }
        ?>
    </div> -->
</div>
</html>