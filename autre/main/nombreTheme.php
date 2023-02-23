<?php
    require_once 'header.php';
    require_once 'fonction.php';
    $liste = "";
    $liste = CompterThemes($liste);

?>
<head><title>Portail Pilotage MSTS - Nombre themes</title></head>
<h3>Nombre de themes différents</h3>
<body>
    <table align="center">
        <thead class="thead-daark">
            <tr>
                <th>Theme</th>
                <th><a href="nombreThemeDesc.php">Nombre</a></th>
            </tr>
        </thead>
        <?php foreach ($liste as $the): ?>
            <tr>
                <td><?php echo $the->theme ?></td>
                <td><?php echo $the->nb ?> </td>
            </tr>
        <?php endforeach ?>
    </table>
</body>