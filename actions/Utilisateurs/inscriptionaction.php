<?php require('database.php'); ?>
<?php 
// Validation du formulaire
if(isset($_POST['validate'])){

    // Vérifier si l'utilisateur a complété tous les champs
    if(!empty($_POST['pseudo']) AND !empty($_POST['mail']) AND !empty($_POST['password'])){

        // Les données de l'utilisateur
        $user_pseudo = htmlspecialchars($_POST['pseudo']);
        $user_mail = htmlspecialchars($_POST['mail']);
        $user_password = password_hash($_POST['password'], PASSWORD_DEFAULT);

        // Vérification si l'utilisateur existe déjà
        $checkIfUserAlreadyExists = $bdd->prepare('SELECT pseudo FROM users WHERE pseudo = ? ');
        $checkIfUserAlreadyExists->execute(array($user_pseudo));
        
        if($checkIfUserAlreadyExists->rowCount() == 0){

            // Inserer l'utilisateur dans la bdd
            $insertUserOnWebsite = $bdd->prepare('INSERT INTO users(pseudo, mail, password)VALUES(?, ?, ?)');
            $insertUserOnWebsite->execute(array($user_pseudo, $user_mail, $user_password));
            
            // Récupérer les informations de l'utilisateur
            $getInfosOfThisUserReq = $bdd->prepare('SELECT id, pseudo, mail FROM users WHERE mail = ? AND pseudo = ?');
            $getInfosOfThisUserReq->execute(array($user_mail, $user_pseudo ));

            $usersInfos = $getInfosOfThisUserReq->fetch();

            // Authentification de l'utilisateur sur le site et récupération de données
            $_SESSION['auth'] = true;
            $_SESSION['id'] = $usersInfos['id'];
            $_SESSION['mail'] = $usersInfos['mail'];
            $_SESSION['pseudo'] = $usersInfos['pseudo'];

            // Rediriger l'utilisateur vers la page 
            header('Location:/wp-setforme/index.php');
            exit();

        } else {
            $errorMsg = "L'utilisateur existe déjà sur le site";
        }

    } else {
        $errorMsg = "Veuillez compléter tous les champs...";
    }
}
?>

