<?php
    require_once 'header.php';
    require_once 'fonction.php';
    $liste = "";
    $liste = CompterPicto($liste);

?>
<head><title>Portail Pilotage MSTS - Nombre pictos</title></head>
<h3>Nombre de pictos différents</h3>
<body>
    <table align="center">
        <thead class="thead-daark">
            <tr>
                <th>Picto</th>
                <th><a href="nombrePictoDesc.php">Nombre</a></th>
            </tr>
        </thead>
        <?php foreach ($liste as $the): ?>
            <tr>
                <td><?php echo $the->picto ?></td>
                <td><?php echo $the->nb ?> </td>
            </tr>
        <?php endforeach ?>
    </table>
</body>