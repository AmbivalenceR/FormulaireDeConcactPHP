<?php

$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$mail = $_POST["mail"];
$tel = $_POST["tel"];
$pass = $_POST["pass"];

if ($nom == "teapot") {
    http_response_code(404);
}

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    <p>Vos informations ont bien étés envoyées.</p>
    <br>
    <p><?php echo $nom ?>
    </p>
    <p><?php echo $prenom ?>
    </p>
    <p><?php echo $mail ?>
    </p>
    <p><?php echo $tel ?>
    </p>
    <p><?php echo password_hash($pass, PASSWORD_BCRYPT) ?>
    </p>

</body>

</html>