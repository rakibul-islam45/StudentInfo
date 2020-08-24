<?php

    include_once ('./Register.php');
//  if(strtoupper($_SERVER['REQUEST_METHOD'])  != 'P0ST' ) {
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


