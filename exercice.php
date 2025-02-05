<?php
// lancement de la session en premier
session_start();

$_GET['first_name'];
$_POST['first_name'];

// on sauvegarde les noms récupérés en POST
$_SESSION['users_first_name'] .= "\n" . $_POST['first_name'];

// déclaration d'une variable $STOP_SESSION qui récupère la valeur 'stop' au clic du bouton en bas du form
$STOP_SESSION = $_POST['stop'];


if (!empty($_GET['first_name'])) {
    echo 'Hi ' . htmlspecialchars($_GET['first_name']) . '!';
} else if (empty($_GET['first_name']) && !empty($_POST['first_name'])) {     
    echo 'Hi ' . htmlspecialchars($_POST['first_name']) . '!';
} else if (empty($_GET['first_name']) && empty($_POST['first_name'])) {
    echo 'Hi anonymous !';
}

if (!empty ($_SESSION)) {
    echo  "\n<br />\n<br/> Saved : " . htmlspecialchars($_SESSION['users_first_name']);
}

// si on clique sur le bouton stop, $STOP_SESSION prend sa valeur
if ($STOP_SESSION) {
    // on appelle unset() sur $_SESSION pour lui retirer les variable qui lui ont été ajoutées
    unset($_SESSION['users_first_name']);
    // on affiche le contenu de $_SESSION pour vérifier qu'elle est vide
    echo 'Session clear '. htmlspecialchars($_SESSION['users_first_name']);
}

?>

<html>
    <form action='exercice.php' method='post'>
        <p>Your first name : <input type='text' name='first_name'/></p>
        <p><input type='submit' value='OK'></p>
        <!-- bouton stop session dans le form avec une méthode post pour pouvoir récupérer sa valeur en PHP -->
        <input type="submit" name="stop" value="STOP SESSION" />
    </form>
</html>