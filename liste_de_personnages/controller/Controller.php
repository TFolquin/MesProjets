<?php

require_once './model/ModelChampion.php';

class Controller
{
    private $model;

    public function __construct()
    {
        //Instantiation du modèle
        $this->model = new ModelChampion();
    }

    //Ajouter un article
    public function add(bool $commit){
        if ($commit) {
            
            $nom = $_GET['nom'];
            $region = $_GET['region'];
            $image = $_GET['image'];
            $histoire = $_GET['histoire'];

            $this->model->setNom($nom);
            $this->model->setRegion($region);
            $this->model->setImage($image);
            $this->model->setHistoire($histoire);

            $this->model->add();

            require_once './views/ajout-confirm.php';
            

            

            
        } else{

            require_once './views/ajout.php';
        }
    }

    public function list(){

        $champions = $this->model->getAllChampions();
        require_once './views/home.php';
    }

    public function details(){

        $id = $_GET["id"];
        $this->model->setId($id);


        $championDetails = $this->model->details();
        require_once './views/details.php';
    }

    public function searchChamp(){
        $result = $_GET["s"];
        $this->model->setRecherche($result);

        $champions = $this->model->search();
        require_once './views/home.php';

    }
}