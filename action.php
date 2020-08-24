<?php
  if(strtoupper($_SERVER['REQUEST_METHOD'])  != 'P0ST' ) {
      throw new Exception('Not a post method');
  }

  $name = $_POST['name'];
  $id = $_POST['id'];
  $session = $_POST['session'];
  $dept = $_POST['dept'];
  $phoneNo = $_POST['phoneNo'];
  $homeTown = $_POST['homeTown'];
  $Bday = $_POST['Bday'];
  $image = $_POST['image'];
  $email = $_POST['email'];
  $password = $_POST['password'];
