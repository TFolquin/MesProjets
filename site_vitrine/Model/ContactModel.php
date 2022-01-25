<?php

require_once 'utils/PDOUtils.php';

class ContactModel {

    private $name;

    private $firstname;

    private $mail;

    private $phoneNb;

    private $message;


    //GETTERS

    public function getName() : string{
        return $this->name;
    }
    public function getFirstname() : string{
        return $this->firstname;
    }
    public function getMail() : string{
        return $this->mail;
    }
    public function getPhone() : int{
        return $this->phoneNb;
    }
    public function getMessage() : string{
        return $this->message;
    }


    //SETTERS

    public function setName(string $name){
        return $this->name = $name;
    }

    public function setFirstname(string $firstname){
        return $this->firstname = $firstname;
    }

    public function setMail(string $mail){
        return $this->mail = $mail;
    }

    public function setPhone(int $phoneNb){
        return $this->phoneNb = $phoneNb;
    }

    public function setMessage(string $message){
        return $this->message = $message;
    }



    public function add(){

        $prepared_sql = "INSERT INTO contacts (name, firstname, mail, phoneNb, message) VALUES (?, ?, ?, ?, ?)";
        $array_values = [$this->name, $this->firstname, $this->mail, $this->phoneNb, $this->message];

        return PDOUtils::query($prepared_sql, $array_values, false);
        
        
    }


}