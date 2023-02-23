<?php
    require_once 'header.php';
    require_once 'fonction.php';
    $liste = "";
    $liste = DécroisTitres($liste);

?>
<head><title>Portail Pilotage MSTS - Nombre titres</title></head>
<h3>Nombre de titres différents</h3>
<body>
    <table align="center">
        <thead class="thead-daark">
            <tr>
                <th>Titre</th>
                <th><a href="nombreTitre.php">Nombre</a></th>
            </tr>
        </thead>
        <?php foreach ($liste as $the): ?>
            <tr>
                <td><?php echo $the->titre ?></td>
                <td><?php echo $the->nb ?> </td>
            </tr>
        <?php endforeach ?>
    </table>
</body>