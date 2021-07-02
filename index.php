<?php

// $host = "localhost";
// $database = "test";
// $login = "root";
// $password = "root";

// try{
//     $pdo = new PDO('mysql:host='.$host.';port=3306; dbname='.$database.';charset=utf8', $login, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
// }
// catch(Exception $e){
//     die('Erreur : '.$e->getMessage());
// }

// $getInfo = $pdo->query('SELECT * from personne');
// $getInfo->execute();
// $data = $getInfo->fetchall();

// var_dump($data);

?>

<html>
    <head>
        <meta charset="utf-8">
        <title>Test Heroku</title>
        <link rel="stylesheet" href="style.css">
    </head>

    <table>
        <thead>
            <tr>
                <th colspan="2">Données de la base de données</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td><?php echo $data[0]['nom']?></td>
                <td><?php echo $data[0]['prenom']?></td>
            </tr>
            <tr>
                <td><?php echo $data[1]['nom']?></td>
                <td><?php echo $data[1]['prenom']?></td>
            </tr>
            <tr>
                <td><?php echo $data[2]['nom']?></td>
                <td><?php echo $data[2]['prenom']?></td>
            </tr>
            <tr>
                <td><?php echo $data[3]['nom']?></td>
                <td><?php echo $data[3]['prenom']?></td>
            </tr>
        </tbody>
    </table>


</html>
