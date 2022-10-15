<?php
require_once 'db_config.php';

    try {

        $conn = new PDO("mysql:host=$servername;port=3306;dbname=$dbname",
        $username,
        $password,
        array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

        // Initialise table for testing
        // $table = "users";
        // $sql = "CREATE TABLE IF NOT EXISTS users (
        //   `user_id` INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
        //   `created` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
        //   `name` varchar(127) NOT NULL,
        //   `email` varchar(127) NOT NULL,
        //   `username` varchar(127) NOT NULL,
        //   `password` varchar(127) NOT NULL
        //   );";

    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
?>
