<?php 
require '../vendor/autoload.php';
/**
 * Data Source Name (connectionString)
 * - host = adresse du serveur de base de données
 * - port = port (si ce n'est pas le port par défaut)
 * - dbname = nom de la base de données
 * - charset = jeu de caractères
 *
 * $dsn = 'mysql:host=localhost;port=3306;dbname=db_2204_users;charset=utf8mb4';
 *
 *$connexion = new PDO($dsn, 'users2204', 'azer');
*/

//echo '<pre>'.var_export($_GET,true);

// opérateur de coalescence



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/ind.css" media="all" />
</head>
<body>

     <?php require "header.php" ?>
    <main>
        <?php
        $page = $_GET['page'] ?? 'home';
            switch($page)
        {
            case 'home':
                $controller= new Users\Controllers\HomesController();
                $controller->index();
                break;
            case 'profile':
                $controller=new Users\Controllers\ProfilesController();
                $controller->index();
                break;
            case 'group':
                $controller=new Users\Controllers\GroupsController();
                $controller->index();
                break;
            case 'createUser':
                $controller=new Users\Controllers\CreateUserController();
                $controller->index();
                break;
            default:
                $controller=new Users\Controllers\UnderController();
                $controller->index();
                break;
        }
        ?>
    </main>

    <?php require "footer.php"?>
</body>
</html>
