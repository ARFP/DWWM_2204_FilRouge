<?php 

/**
 * Data Source Name (connectionString)
 * - host = adresse du serveur de base de données
 * - port = port (si ce n'est pas le port par défaut)
 * - dbname = nom de la base de données
 * - charset = jeu de caractères
 */

$dsn = 'mysql:host=localhost;port=3306;dbname=db_2204_users;charset=utf8mb4';

$connexion = new PDO($dsn, 'users2204', 'azer');


