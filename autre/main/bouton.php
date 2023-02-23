<?php
    require_once 'header.php';
    require_once 'fonction.php';
    $listeBoutons = '';
    $boutons = AfficheBoutons($listeBoutons);
    $liste = "";
    $liste = NombreActifBoutons($liste);
    $quantite = "";
    $quantite = SurActifBoutons($quantite);

    if (isset($_POST['update'])){
        UpdateBouton($_POST);
    } 
    if (isset($_POST['ajout'])){
        AjoutBouton($_POST);
    }
    if (isset($_POST['masquer'])){
        MasquerActifBouton($_POST);
    }
    if ( (isset($_POST['update'])) || (isset($_POST['ajout'])) || (isset($_POST['masquer'])) ){
        header('Location: bouton.php');
        //print_r($_POST);
    }
    
?>
<head><title>Portail Pilotage MSTS - Boutons</title></head>
<!-- <style>#scrollUp{position: fixed; bottom : 10px; right: -100px; opacity: 0.5; width: 500px; height: 500px;}</style>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script> -->
<br><button style="color: black; background-color: deepskyblue;" onclick="window.location.href='ajoutBouton.php'">Ajouter bouton</button>
<h3>Configuration bouton</h3>
<body>
    <div>
        <div>
            <table align="center">
                <thead class="thead-dark">
                    <tr>
                        <th>id</th>
                        <th><a href="nombreLibelle.php" title="Liste des libelles">Libelle</a></th>
                        <th>Ligne</th>
                        <th>col</th>
                        <th><a href="nombrePicto.php" title="Liste des pictos">Picto</a></th>
                        <th>Reduction</th>
                        <th>idPage</th>
                        <th>URL</th>
                        <th><a href="infoActifsBoutons.php" title="Informations Inactifs">Actif</a> = <br><?php foreach ($liste as $util): ?><?php echo $util->nb ?><?php endforeach ?>/<?php foreach ($quantite as $util): ?><?php echo $util->sur ?><?php endforeach ?></th>
                        <th>Action</th>
                    </tr>
                </thead>
                <?php foreach ($boutons as $bout): ?>
                <tr>
                    <td><?php echo $bout->id ?></td>
                    <td><?php echo $bout->libelle ?></td>
                    <td><?php echo $bout->ligne ?></td>
                    <td><?php echo $bout->col ?></td>
                    <td><?php echo $bout->picto ?></td>
                    <td><?php echo $bout->reduction ?></td>
                    <td><?php echo $bout->idPage ?></td>
                    <td><?php echo $bout->url ?></td>
                    <td><img class="coche" src="images\<?php echo $bout->actif ?>.png"></td>
                    
                    <td>
                            <!-- Supprimer -->
                        <a href="updateBouton.php?id=<?php echo $bout->id?>"><button class="vert" type="button">Modifier</button></a>
                            
                            <!-- Modifier -->
                        <a href="deleteBouton.php?delete=<?php echo $bout->id?>"
                        onClick="return(confirm('Êtes-vous sûr de vouloir supprimer l'id <?php echo $bout->id ?> ?'));"><button class="rouge" type="button">Supprimer</button></a>
                            
                            <!-- Masquer -->
                        <a href="masquerBouton.php?id=<?php echo $bout->id?>"><button class="gris"type="button">Masquer</button></a>
                    </td>
                </tr>
                <?php endforeach ?>
            </table>
        </div>
    </div>
    <!-- <div id="scrollUp">
        <a href="#top"><img src="images\to_top.png"/></a>
    </div> -->
    <?php require_once 'footer.php'; ?>
</body>
<style>
    .coche{
        height: 35px;
        width: 35px;
    }
    .but{
        border-radius: 60px;
        border-top-color: black;
        border-bottom-color: black;
        border-left-color: blue;
        border-right-color: black;
    }
</style>
</html>