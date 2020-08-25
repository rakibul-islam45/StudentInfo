<?php
$server = "127.0.0.1";
$dbname = "studentInfo";
$user = "rakib";
$pass = "rakibul";
//$DBCon = new PDO("mysql:host=$server;dbname=$dbname", $user, $pass);

try {
    $DBCon = new PDO("mysql:host=$server;dbname=$dbname;charset=utf8", $user, $pass);
    $DBCon->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
} catch (Throwable $t){
    echo 'Cannot Connect to Database';
    die;
}



var_dump($DBCon->query("SELECT VERSION()"));
