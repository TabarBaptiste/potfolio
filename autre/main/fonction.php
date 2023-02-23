<?php

require_once 'connexion.php';

/** Afficher **/

//Afficher pages
function AfficheUtil($listeUtil){
    global $pdo;
    $query = "SELECT * FROM msts_pages";
    $prep = $pdo->prepare($query);
    $prep->bindValue(':util', $listeUtil, PDO::PARAM_STR);
    $prep->execute();
    return $prep->fetchAll();
}
//Afficher boutons
function AfficheBoutons($listeBoutons){
    global $pdo;
    $query = "SELECT * FROM msts_boutons";
    $prep = $pdo->prepare($query);
    $prep->bindValue(':boutons', $listeBoutons, PDO::PARAM_STR);
    $prep->execute();
    return $prep->fetchAll();
}

/** Ajouter **/

//Ajouter page
function AjoutPage($param){
    global $pdo;
    $query = "INSERT INTO msts_pages (theme, titre, logo, libelleg1, libelleg2, libelleg3, flagCol, linkRetour, linkDoc, idGabarit, commentaire, actif) values (:theme, :titre, :logo, :libelleg1, :libelleg2, :libelleg3, :flagCol, :linkRetour, :linkDoc, :idGabarit, :commentaire, :actif)";
    $prep = $pdo->prepare($query);
    $prep->bindValue(':theme', $param['theme']);
    $prep->bindValue(':titre', $param['titre']);
    $prep->bindValue(':logo', $param['logo']);
    $prep->bindValue(':libelleg1', $param['libelleg1']);
    $prep->bindValue(':libelleg2', $param['libelleg2']);
    $prep->bindValue(':libelleg3', $param['libelleg3']);
    $prep->bindValue(':flagCol', $param['flagCol']);
    $prep->bindValue(':linkRetour', $param['linkRetour']);
    $prep->bindValue(':linkDoc', $param['linkDoc']);
    $prep->bindValue(':idGabarit', $param['idGabarit']);
    $prep->bindValue(':commentaire', $param['commentaire']);
    $prep->bindValue(':actif', $param['actif']);
    $prep->execute();
}
//Ajouter Bouton
function AjoutBouton($param){
    global $pdo;
    $query = "INSERT INTO msts_boutons (libelle, ligne, col, picto, reduction, idPage, url, actif) values (:libelle, :ligne, :col, :picto, :reduction, :idPage, :url, :actif)";
    $prep = $pdo->prepare($query);
    $prep->bindValue(':libelle', $param['libelle']);
    $prep->bindValue(':ligne', $param['ligne']);
    $prep->bindValue(':col', $param['col']);
    $prep->bindValue(':picto', $param['picto']);
    $prep->bindValue(':reduction', $param['reduction']);
    $prep->bindValue(':idPage', $param['idPage']);
    $prep->bindValue(':url', $param['url']);
    $prep->bindValue(':actif', $param['actif']);
    $prep->execute();
}

/** Mise à jour **/

//MAJ Page
function UpdateUtil($param){
    global $pdo;
    $query = "UPDATE msts_pages set theme=:theme, titre=:titre, logo=:logo, libelleg1=:libelleg1, libelleg2=:libelleg2, libelleg3=:libelleg3, flagCol=:flagCol, linkRetour=:linkRetour, linkDoc=:linkDoc, idGabarit=:idGabarit, actif=:actif WHERE id=:id";
    $prep = $pdo->prepare($query);
    $prep->bindValue(':id', $param['id']);
    $prep->bindValue(':theme', $param['theme']);
    $prep->bindValue(':titre', $param['titre']);
    $prep->bindValue(':logo', $param['logo']);
    $prep->bindValue(':libelleg1', $param['libelleg1']);
    $prep->bindValue(':libelleg2', $param['libelleg2']);
    $prep->bindValue(':libelleg3', $param['libelleg3']);
    $prep->bindValue(':flagCol', $param['flagCol']);
    $prep->bindValue(':linkRetour', $param['linkRetour']);
    $prep->bindValue(':linkDoc', $param['linkDoc']);
    $prep->bindValue(':idGabarit', $param['idGabarit']);
    $prep->bindValue(':actif', $param['actif']);
    $prep->execute();
}
function Util($id){
    global $pdo;
    $query = 'SELECT * FROM msts_pages WHERE id=:id;';
    $prep = $pdo->prepare($query);
    $prep->bindValue(':id', $id);
    $prep->execute();
    $result = $prep->fetch();
    return $result;
}

//MAJ Bouton
function UpdateBouton($param){
    global $pdo;
    $query = "UPDATE msts_boutons set libelle=:libelle, ligne=:ligne, col=:col, picto=:picto, reduction=:reduction, idPage=:idPage, url=:url, actif=:actif WHERE id=:id";
    $prep = $pdo->prepare($query);
    $prep->bindValue(':id', $param['id']);
    $prep->bindValue(':libelle', $param['libelle']);
    $prep->bindValue(':ligne', $param['ligne']);
    $prep->bindValue(':col', $param['col']);
    $prep->bindValue(':picto', $param['picto']);
    $prep->bindValue(':reduction', $param['reduction']);
    $prep->bindValue(':idPage', $param['idPage']);
    $prep->bindValue(':url', $param['url']);
    $prep->bindValue(':actif', $param['actif']);
    $prep->execute();
    /*print_r($query);
    exit;*/
}
function Bouton($id){
    global $pdo;
    $query = 'SELECT * FROM msts_boutons WHERE id=:id;';
    $prep = $pdo->prepare($query);
    $prep->bindValue(':id', $id);
    $prep->execute();
    $result = $prep->fetch();
    return $result;
}

/** Supprimer **/

//Supprimer Page
function SupprimerPage($id){
    global $pdo;
    $query = "DELETE FROM msts_pages WHERE id=$id;";
    $rowCount = $pdo->exec($query);
}
//Supprimer Bouton
function SupprimerBouton($id){
    global $pdo;
    $query = "DELETE FROM msts_boutons WHERE id=$id;";
    $rowCount = $pdo->exec($query);
}

/** Masquer **/

//Masquer page
function MasquerActifPage($param){
    global $pdo;
    $query = "UPDATE msts_pages set actif=:actif WHERE id=:id";
    $prep = $pdo->prepare($query);
    $prep->bindValue(':id', $param['id']);
    $prep->bindValue(':actif', $param['actif']);
    $prep->execute();
}
function maskPage($id){
    global $pdo;
    $query = 'SELECT * FROM msts_pages WHERE id=:id;';
    $prep = $pdo->prepare($query);
    $prep->bindValue(':id', $id);
    $prep->execute();
    $result = $prep->fetch();
    return $result;
}

//Masquer Bouton
function MasquerActifBouton($param){
    global $pdo;
    $query = "UPDATE msts_boutons set actif=:actif WHERE id=:id";
    $prep = $pdo->prepare($query);
    $prep->bindValue(':id', $param['id']);
    $prep->bindValue(':actif', $param['actif']);
    $prep->execute();
}
function maskBoutons($id){
    global $pdo;
    $query = 'SELECT * FROM msts_boutons WHERE id=:id;';
    $prep = $pdo->prepare($query);
    $prep->bindValue(':id', $id);
    $prep->execute();
    $result = $prep->fetch();
    return $result;
}

/** Compter **/

//Compte Libelle Boutons
function CompterLibelle($listeLibelle){
    global $pdo;
    $query = "SELECT libelle,count(*) as nb from msts_boutons group by libelle;";
    $prep = $pdo->prepare($query);
    $prep->bindValue(':libelle', $listeLibelle, PDO::PARAM_STR);
    $prep->execute();
    return $prep->fetchAll();
}
//Compte Picto Boutons
function CompterPicto($liste){
    global $pdo;
    $query = "SELECT picto,count(*) as nb from msts_boutons group by picto;";
    $prep = $pdo->prepare($query);
    $prep->bindValue(':picto', $liste, PDO::PARAM_STR);
    $prep->execute();
    return $prep->fetchAll();
}

//Compte Themes Pages
function CompterThemes($liste){
    global $pdo;
    $query = "SELECT theme,count(*) as nb from msts_pages group by theme;";
    $prep = $pdo->prepare($query);
    $prep->bindValue(':theme', $liste, PDO::PARAM_STR);
    $prep->execute();
    return $prep->fetchAll();
}
//Compte titre Pages
function CompterTitres($liste){
    global $pdo;
    $query = "SELECT titre,count(*) as nb from msts_pages group by titre;";
    $prep = $pdo->prepare($query);
    $prep->bindValue(':titre', $liste, PDO::PARAM_STR);
    $prep->execute();
    return $prep->fetchAll();
}
/** Ordre Décroissant **/

//Décroissant titres
function DécroisTitres($liste){
    global $pdo;
    $query = "SELECT titre,count(*) as nb from msts_pages group by titre ORDER BY nb DESC;";
    $prep = $pdo->prepare($query);
    $prep->bindValue(':titre', $liste, PDO::PARAM_STR);
    $prep->execute();
    return $prep->fetchAll();
}
//Décroissant Thème
function DécroisTheme($liste){
    global $pdo;
    $query = "SELECT theme,count(*) as nb from msts_pages group by theme ORDER BY nb DESC;";
    $prep = $pdo->prepare($query);
    $prep->bindValue(':theme', $liste, PDO::PARAM_STR);
    $prep->execute();
    return $prep->fetchAll();
}
//Décroissant libelle
function DécroisLibelle($liste){
    global $pdo;
    $query = "SELECT libelle,count(*) as nb from msts_boutons group by libelle ORDER BY nb DESC;";
    $prep = $pdo->prepare($query);
    $prep->bindValue(':libelle', $liste, PDO::PARAM_STR);
    $prep->execute();
    return $prep->fetchAll();
}
//Décroissant Picto
function DécroisPicto($liste){
    global $pdo;
    $query = "SELECT picto,count(*) as nb from msts_boutons group by picto ORDER BY nb DESC;";
    $prep = $pdo->prepare($query);
    $prep->bindValue(':picto', $liste, PDO::PARAM_STR);
    $prep->execute();
    return $prep->fetchAll();
}

//Authentification
function Authentification($nom,$password){
    global $pdo;
    $query = "SELECT * FROM utilisateur where nom=:nom and password=:password";
    $prep = $pdo->prepare($query);
    $prep->bindValue(':nom', $nom);
    $prep->bindValue(':password', $password);
    $prep->execute();
    // on vérifie que la requête ne retourne qu'une seule ligne
    if($prep->rowCount() == 1){
    $result = $prep->fetch();
    return $result;
    }
    else
    return false;
}

/** Nombre **/

//Nombre Actifs Pages
function NombreActifPages($liste){
    global $pdo;
    $query = "SELECT actif,COUNT(*) as nb from msts_pages WHERE actif=1 group by actif;";
    $prep = $pdo->prepare($query);
    $prep->bindValue(':actif', $liste, PDO::PARAM_STR);
    $prep->execute();
    return $prep->fetchAll();
}
function SurActifPages($liste){
    global $pdo;
    $query = "SELECT COUNT(actif) AS sur FROM msts_pages;";
    $prep = $pdo->prepare($query);
    $prep->bindValue(':actif', $liste, PDO::PARAM_STR);
    $prep->execute();
    return $prep->fetchAll();
}

//Nombre Actifs Boutons
function NombreActifBoutons($liste){
    global $pdo;
    $query = "SELECT actif,COUNT(*) as nb from msts_boutons WHERE actif=1 group by actif;";
    $prep = $pdo->prepare($query);
    $prep->bindValue(':actif', $liste, PDO::PARAM_STR);
    $prep->execute();
    return $prep->fetchAll();
}
function SurActifBoutons($liste){
    global $pdo;
    $query = "SELECT COUNT(actif) AS sur FROM msts_boutons;";
    $prep = $pdo->prepare($query);
    $prep->bindValue(':actif', $liste, PDO::PARAM_STR);
    $prep->execute();
    return $prep->fetchAll();
}

/** Informations **/

//Information Actifs Boutons
function InfoActifBoutons($liste){
    global $pdo;
    $query = "SELECT actif,COUNT(*) as nb from msts_boutons WHERE actif=0 group by actif;";
    $prep = $pdo->prepare($query);
    $prep->bindValue(':actif', $liste, PDO::PARAM_STR);
    $prep->execute();
    return $prep->fetchAll();
}
function ActifInfosBoutons($deroule){
    global $pdo;
    $query = "SELECT id,COUNT(*) as nb from msts_boutons WHERE actif=0 group by id;";
    $prep = $pdo->prepare($query);
    $prep->bindValue(':actif', $deroule, PDO::PARAM_STR);
    $prep->execute();
    return $prep->fetchAll();
}

//Information Actifs Pages
function InfoActifPages($liste){
    global $pdo;
    $query = "SELECT actif,COUNT(*) as nb from msts_pages WHERE actif=0 group by actif;";
    $prep = $pdo->prepare($query);
    $prep->bindValue(':actif', $liste, PDO::PARAM_STR);
    $prep->execute();
    return $prep->fetchAll();
}
function ActifInfosPages($deroule){
    global $pdo;
    $query = "SELECT id,COUNT(*) as nb from msts_pages WHERE actif=0 group by id;";
    $prep = $pdo->prepare($query);
    $prep->bindValue(':actif', $deroule, PDO::PARAM_STR);
    $prep->execute();
    return $prep->fetchAll();
}
?>