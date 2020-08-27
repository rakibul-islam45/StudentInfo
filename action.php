<?php
    //require_once "database.php";






//  if(strtoupper($_SERVER['REQUEST_METHOD'])  != 'P0ST' ) {
//      throw new Exception('Not a post method');
//  }
 //var_dump($_SERVER['REQUEST_METHOD']);
   $_SERVER['REQUEST_METHOD'];

  $name = $_REQUEST['name'];
  $id = $_REQUEST['id'];
  $session = $_REQUEST['session'];
  $department = $_REQUEST['department'];
  $bloodgroup = $_REQUEST['bloodgroup'];
  $phoneNo = $_REQUEST['phoneNo'];
  $homeTown = $_REQUEST['homeTown'];
  $birthday = $_REQUEST['birthday'];
  $image = $_FILES['image']['tmp_name'];
   // $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
//$img = file_get_contents($image);
//  $tmp_name = $image["tmp_name"];
//  $name = str_replace(' ', '-', $name). '.png';
//  $upload_dir = '.';
//  move_uploaded_file($tmp_name,"$upload_dir/$name");
  $email = $_REQUEST['email'];
  $password = $_REQUEST['password'];
    include_once './Register.php';
   $register = new Register($name, $id, $session, $department, $bloodgroup, $phoneNo, $homeTown, $birthday, $image, $email, $password);

    $server = "127.0.0.1";
    $dbname = "studentInfo";
    $user = "rakib";
    $pass = "rakibul";
    $DBCon = new PDO("mysql:host=$server;dbname=$dbname", $user, $pass);

try {
    $DBCon = new PDO("mysql:host=$server;dbname=$dbname;charset=utf8", $user, $pass);
    $DBCon->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
} catch (Throwable $t){
    echo 'Cannot Connect to Database';
    die;
}




// var_dump($DBCon->query("SELECT VERSION()"));
   $query = "insert into register(name, id, session, department, bloodgroup, phoneNo, homeTown, birthday, image, email, password)  values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $statement = $DBCon->prepare($query);
    $statement->bindValue(1, $name);
    $statement->bindValue(2, $id);
    $statement->bindValue(3, $session);
    $statement->bindValue(4, $department);
    $statement->bindValue(5, $bloodgroup);
    $statement->bindValue(6, $phoneNo);
    $statement->bindValue(7, $homeTown);
    $statement->bindValue(8, $birthday);
    $statement->bindValue(9, $image);
    $statement->bindValue(10, $email);
    $statement->bindValue(11, $password);

    if($statement->execute()) {
        header("location: login.php");
    } else {
        echo 'Could not insert';
    }




