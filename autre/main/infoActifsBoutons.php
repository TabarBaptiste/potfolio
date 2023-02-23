<?php
    require_once 'header.php';
    require_once 'fonction.php';
    $liste = "";
    $liste = InfoActifBoutons($liste);
    $deroule = "";
    $deroule = ActifInfosBoutons($deroule);

?>
<head><title>Portail Pilotage MSTS - Nombre themes</title></head>
<h3>Nombre d'inactif: <?php foreach ($liste as $the): ?><?php echo $the->nb ?><?php endforeach ?></h3>
<body>
    <table align="center">
        <thead class="thead-daark">
            <tr>
                <th>id Inactif</th>
            </tr>
        </thead>
        <?php foreach ($deroule as $der): ?>
            <tr align="center">
                <td><?php echo $der->id ?></td>
            </tr>
        <?php endforeach ?>
    </table>
</body>