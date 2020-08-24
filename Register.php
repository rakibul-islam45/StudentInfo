<?php


class Register
{
    public $name;
    public   $id, $session, $dept, $phoneNo, $homeTown, $Bday, $image, $email, $password;

    public function __construct($name, $id, $session, $dept, $phoneNo, $homeTown, $Bday, $image, $email, $password){
        $this->name = $name;
        $this->id = $id;
        $this->session = $session;
        $this->dept = $dept;
        $this->phoneNo = $phoneNo;
        $this->homeTown = $homeTown;
        $this->Bday= $Bday;
        $this->image = $image;
        $this->email= $email;
        $this->password = $password;

    }
}