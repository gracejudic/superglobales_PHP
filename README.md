# superglobales_PHP

Enoncé

Cet exercice vise à s'initier au PHP ainsi qu'aux principes clés des super-globales. Dans cet exercice, nous allons nous concentrer sur les suivantes : $_GET, $_POST et $_SESSION.

Étape 0: Setup

Utilisation de MAMP pour macOS.

Étape 1: GET

Appel de la page avec le paramètre first_name dans l'url : localhost/{...}/exercice.php?first_name=Ada. Sur la page HTML, on affiche "Hi" suivi du nom indiqué en paramètre (ici "Hi Ada"). Si aucun nom n'est fourni, on affiche "Hi anonymous".

Étape 2: POST

On modifie la page pour y ajouter un formulaire et un champ de saisie comme suit:

`````
<form action="exercice.php" method="post">
   <p>Your first name : <input type="text" name="first_name" /></p>
   <p><input type="submit" value="OK"></p>
</form>
`````

Une fois validé, le formulaire recharge cette page mais avec une variable $_POST qui contient first_name. On change les règles relatives au nom à afficher.

Si un nom est donnée dans l'url, en GET, on l'affiche. Sinon, si un nom est donnée en POST, on affiche celui-ci. Autrement, on affiche "anonymous".

Étape 3: SESSION

On ajoute une manière de récupérer le nom à afficher : la session. Si un nom est donné dans l'url en GET, on l'affiche. Si un nom est trouvée dans la session, on l'affiche. Sinon, si un nom est donné en POST, on l'affiche et on le sauvegarde dans la session.
Autrement, on affiche "anonymous".

Étape 4: Reset de la session

On ajoute un bouton "stop" pour mettre fin à la session et réinitialiser la valeur qu’elle contient.
