<?php
require_once('fonction.php');
print_r($_POST);
// on teste si nos variables sont définies et remplies
if (isset($_POST['nom']) && isset($_POST['password']) && !empty($_POST['nom'])&& !
    empty($_POST['password'])) {
    // on appele la fonction getAuthentification en lui passant en paramètre le nom et password
    //la fonction retourne les caractéristiques du salaries si il est connu sinon elle retourne false
    $result = Authentification($_POST['nom'],$_POST['password']);
    //print_r($result);
    // si le résulat n'est pas false
    if($result){
        // on la démarre la session
        session_start ();
        // on enregistre les paramètres de notre visiteur comme variables de session
        $_SESSION['nom'] = $result->nom;
        $_SESSION['password'] = $result->password;
        print_r($_SESSION);
        // on redirige notre visiteur vers une page de notre section membre
        header ('location: index.php');
    
    }
    //si le résultat est false on redirige vers la page d'authentification
    else{
        echo "oui";
        //header ('location: erreur.php');
        header ('location: authentification.php');
    }
}
//si nos variables ne sont pas renseignées on redirige vers la page d'authentification
else {
    //header ('location: erreur.php');
    header ('location: authentification.php');
}
?>