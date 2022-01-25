<?php

require_once './Model/ContactModel.php';

class Controller
{
    private $model;

    public function __construct()
    {
        //Instantiation du modèle
        $this->model = new ContactModel();
    }

    public function add(bool $commit){

        
        if ($commit) {
            
            $name = $_GET['name'];
            $firstname = $_GET['firstname'];
            $mail = $_GET['mail'];
            $phoneNb = $_GET['phoneNb'];
            $message = $_GET['message'];

            $this->model->setName($name);
            $this->model->setFirstname($firstname);
            $this->model->setMail($mail);
            $this->model->setPhone($phoneNb);
            $this->model->setMessage($message);

            
            $this->model->add();

            require_once './views/contactDone.php';
            
            
        } else{
            require_once './views/contact.php';
        }
        
    }

    
}