<?php
$_SERVER['REQUEST_METHOD'];
$email = $_REQUEST['email'];
$password = $_REQUEST['password'];
 //var_dump($email);
if($email && $password != null) {
    $server = "127.0.0.1";
    $dbname = "studentInfo";
    $user = "rakib";
    $pass = "rakibul";
    $pdo = new PDO("mysql:host=$server;dbname=$dbname", $user, $pass);

    try {
        $pdo = new PDO("mysql:host=$server;dbname=$dbname;charset=utf8", $user, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (Throwable $t) {
        echo 'Cannot Connect to Database';
        die;
    }
    $query = $pdo->prepare("SELECT * FROM register WHERE Email= :email AND Password = :password LIMIT 1");
    $query->bindValue(':email', $email);
    $query->bindValue(':password', $password);

    $query->execute();
    $result = $query->fetchAll(PDO::FETCH_ASSOC); //make the select

    // var_dump($result[0]['Id']);
    $userEmail = $result[0]['Email'];
    $userPassword = $result[0]['Password'];
//    session_start();
//    $_SESSION['id'] = $result[0]['Id'];
    // var_dump($_SESSION['id']);


    if($email == 'admin@gmail.com'&& $password == 'secret'){
        header("location: admin.php");
    }elseif($email == $userEmail && $password == $userPassword){

        session_start();
        $_SESSION['id'] = $result[0]['Id'];

       header("location: profile.php");

    }
    else{
        echo 'Wrong password or Email!';
        //header("location: registerForm.php");
    }

}else{
    // Check existence of id parameter
    if(empty($email && $password)){
        echo 'Insert Email and Password!';
        exit();
    }
}

