<?php
    require_once 'header.php';
    require_once 'fonction.php';
    $listeLibelle = '';
    $compter = CompterLibelle($listeLibelle);

?>
<head><title>Portail Pilotage MSTS - Nombre libelles</title></head>
<h3>Nombre de libelles différents</h3>
<body>
    <table align="center">
        <thead class="thead-dark">
            <tr>
                <th>Libelle</th>
                <th><a href="nombreLibelleDesc.php">Nombre</a></th>
            </tr>
        </thead>
        <?php foreach ($compter as $bout): ?>
            <tr>
                <td><?php echo $bout->libelle ?></td>
                <td><?php echo $bout->nb ?> </td>
            </tr>
        <?php endforeach ?>
    </table>
</body>