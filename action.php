<?php



   include_once './Register.php';



  //if(strtoupper($_SERVER['REQUEST_METHOD'])  != 'P0ST' ) {
//      throw new Exception('Not a post method');
//  }
// var_dump($_SERVER['REQUEST_METHOD']);
    $_SERVER['REQUEST_METHOD'];

  $name = $_POST['name'];
  $id = $_POST['id'];
  $session = $_POST['session'];
  $department = $_POST['department'];
  $bgroup = $_POST['bgroup'];
  $phoneNo = $_POST['phoneNo'];
  $homeTown = $_POST['homeTown'];
  $birthday = $_POST['birthday'];
  $image = $_POST['image'];
  $email = $_POST['email'];
  $password = $_POST['password'];

    $register = new Register($name, $id, $session, $department, $bgroup, $phoneNo, $homeTown, $birthday, $image, $email, $password);

  $server = "127.0.0.1";
  $dbname = "studentinfo";
  $user = "root";
  $pass = "";
  $DBCon = new PDO("mysql:host=$server;dbname=$dbname;charset=utf8", $user, $pass);

try {
    $DBCon->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
} catch (Throwable $t){
    echo 'Cannot Connect to Database';
    die;
}

   $quary = 'insert into register (name, id, session, department, bgroup, phoneNo, homeTown, birthday, image, email, password)  values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';

    $statement = $DBCon->prepare($quary);
    $statement->bindValue(1, $name);
    $statement->bindValue(2, $id);
    $statement->bindValue(3, $session);
    $statement->bindValue(4, $department);
    $statement->bindValue(5, $bgroup);
    $statement->bindValue(6, $phoneNo);
    $statement->bindValue(7, $homeTown);
    $statement->bindValue(8, $birthday);
    $statement->bindValue(9, $image);
    $statement->bindValue(10, $email);
    $statement->bindValue(11, $password);

    if($statement->execute()) {
        echo 'Inserted into DB';
    } else {
        echo 'Could not insert';
    }




