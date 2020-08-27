<?php

if(isset($_POST["Id"]) && !empty($_POST["Id"])){
    // Include config file
   // include_once "./database.php";

    $server = "127.0.0.1";
    $dbname = "studentInfo";
    $user = "rakib";
    $pass = "rakibul";
    $pdo = new PDO("mysql:host=$server;dbname=$dbname", $user, $pass);

    try {
        $pdo = new PDO("mysql:host=$server;dbname=$dbname;charset=utf8", $user, $pass);
        $pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
    } catch (Throwable $t){
        echo 'Cannot Connect to Database';
        die;
    }


    $query = "DELETE FROM register WHERE Id = :Id";

    if($statement = $pdo->prepare($query)){
        // Bind variables to the prepared statement as parameters
        $statement->bindParam(":Id", $param_id);


        $param_id = trim($_POST["Id"]);

        // Attempt to execute the prepared statement
        if($statement->execute()){

            header("location: admin.php");
            exit();
        } else{
            echo "Oops! Something went wrong. Please try again later.";
        }
    }


    unset($stmt);


    unset($pdo);
} else{

    if(empty(trim($_GET["Id"]))){

        header("location: admin.php");
        exit();
    }
}
