<?php


class Register
{
    public $name;
    public   $id, $session, $department, $bloodgroup, $phoneNo, $homeTown, $birthday, $image, $email, $password;

    public function __construct($name, $id, $session, $department, $bloodgroup, $phoneNo, $homeTown, $birthday, $image, $email, $password){
        $this->name = $name;
        $this->id = $id;
        $this->session = $session;
        $this->department = $department;
        $this->bloodgroup = $bloodgroup;
        $this->phoneNo = $phoneNo;
        $this->homeTown = $homeTown;
        $this->birthday= $birthday;
        $this->image = $image;
        $this->email= $email;
        $this->password = $password;

    }
}

