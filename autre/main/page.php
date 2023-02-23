<?php
    require_once 'header.php';
    require_once 'fonction.php';
    $listeUtil = '';
    $utilisateur = AfficheUtil($listeUtil);
    $liste = "";
    $liste = NombreActifPages($liste);
    $quantite = "";
    $quantite = SurActifPages($quantite);

    if (isset($_POST['update'])){
        UpdateUtil($_POST);
    }
    if (isset($_POST['ajout'])){
        AjoutPage($_POST);
    }
    if (isset($_POST['masquer'])){
        MasquerActifPage($_POST);
    }
    if ( (isset($_POST['update'])) || (isset($_POST['ajout'])) || (isset($_POST['masquer'])) ){
        //print_r($_POST);
        header ('Location: page.php');
    }
    
?>
<head><title>Portail Pilotage MSTS - Pages</title></head>
<!-- <style>#scrollUp{position: fixed; bottom : 10px; right: -100px; opacity: 0.5; width: 500px; height: 500px;}</style>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script> -->
<style> a{color: black;}</style>
<br><button style="color: black; background-color: deepskyblue;" onclick="window.location.href='ajoutPage.php'">Ajouter page</button>
<h3>Configuration application</h3>
<body>
    <div>
        <table align="center">
            <thead class="thead-dark">
                <tr>
                    <th>id</th>
                    <th><a href="nombreTheme.php" title="Liste des themes">Theme</a></th>
                    <th><a href="nombreTitre.php" title="Liste des titres" name="title">Titre</a></th>
                    <th>Logo</th>
                    <th>libelleg 1</th>
                    <th>libelleg 2</th>
                    <th>libelleg 3</th>
                    <th>FlagCol</th>
                    <th>LinkRetour</th>
                    <th>LinkDoc</th>
                    <th>idGabarit</th>
                    <th><a href="infoActifsPages.php" title="Informations Inactifs">Actif</a> = <?php foreach ($liste as $util): ?><?php echo $util->nb ?><?php endforeach ?>/<?php foreach ($quantite as $util): ?><?php echo $util->sur ?><?php endforeach ?></th>
                    <th>Action</th>
                </tr>
            </thead>
            <?php foreach ($utilisateur as $util): ?>
            <tr>
                <td><?php echo $util->id ?></td>
                <td><?php echo $util->theme ?></td>
                <td><?php echo $util->titre?></td>
                <td><?php echo $util->logo ?></td>
                <td><?php echo $util->libelleg1 ?></td>
                <td><?php echo $util->libelleg2 ?></td>
                <td><?php echo $util->libelleg3 ?></td>
                <td><?php echo $util->flagCol ?></td>
                <td><?php echo $util->linkRetour ?></td>
                <td><?php echo $util->linkDoc ?></td>
                <td><?php echo $util->idGabarit ?></td>
                <td><img class="coche" src="images\<?php echo $util->actif ?>.png"></td>
                
                <td>
                            <!-- Supprimer -->
                    <a href="updatePage.php?id=<?php echo $util->id?>"><button style="background-color: green;" class="vert" type="button">Modifier</button></a>
                    
                            <!-- Modifier -->
                    <a href="deletePage.php?delete=<?php echo $util->id?>"
                    onClick="return(confirm('Êtes-vous sûr de vouloir supprimer l'id <?php echo $util->id ?> ?'));"><button style="background-color: red;" class="rouge" type="button">Supprimer</button></a>

                            <!-- Masquer -->
                    <a href="masquer.php?id=<?php echo $util->id?>"
                    onClick="return(confirm('Êtes-vous sûr de vouloir masquer l'id <?php echo $util->id ?> ?'));"><button style="background-color: grey;" type="button">Masquer</button></a>
                </td>
            </tr>
            <?php endforeach ?>
            </table>
    </div>
    
    <?php require_once 'footer.php'; ?>
</body>
<style>
    .coche{
        height: 40px;
        width: 40px;
    }
    .pag{
        border-radius: 60px;
        border-top-color: black;
        border-bottom-color: blue;
        border-left-color: black;
        border-right-color: black;
    }
</style>
</html>