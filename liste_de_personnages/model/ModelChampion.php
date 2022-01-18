<?php

require_once './utils/PDOUtils.php';

class ModelChampion {

    private $id;

    //Nom du personnage
    private $nom;

    //Sa région
    private $region;

    //Lien de l'image du perso
    private $image;

    //Son histoire
    private $histoire;

    //String de la recherche
    private $recherche;



    //GETTERS
    public function getId() : int{
        return $this->id;
    }

    public function getNom() : string{
        return $this->nom;
    }

    public function getRegion() : string{
        return $this->region;
    }

    public function getImage() : string{
        return $this->image;
    }

    public function getHistoire() : string{
        return $this->histoire;
    }

    public function getRecherche() : string{
        return $this->recherche;
    }


    //SETTERS
    public function setId(int $id){
        return $this->id = $id;
    }

    public function setNom(string $nom){
        return $this->nom = $nom;
    }

    public function setRegion(string $region){
        return $this->region = $region;
    }

    public function setImage(string $image){
        return $this->image = $image;
    }

    public function setHistoire(string $histoire){
        return $this->histoire = $histoire;
    }

    public function setRecherche(string $recherche){
        return $this->recherche = $recherche;
    }












    //Méthode du CRUD

    public function getAllChampions(){

        $prepared_sql = "SELECT id, nom, region, image, hist FROM champions";
        $array_values = [];

        return PDOUtils::query($prepared_sql, $array_values, true);
    }


    public function add(){

        $prepared_sql = "INSERT INTO champions (nom, region, image, hist) VALUES (?, ?, ?, ?)";
        $array_values = [$this->nom, $this->region, $this->image, $this->histoire];

        return PDOUtils::query($prepared_sql, $array_values, false);
        
        
    }

    public function details(){
        
        $prepared_sql = "SELECT nom, region, image, hist FROM champions WHERE id = ?";
        $array_values = [$this->id];
        
        return PDOUtils::query($prepared_sql, $array_values, true);
    }

    public function search(){
        
        //Code que je ne reproduirai pas en situation réelle, trop dangereux, peut subir des attaques de types injection sql. Je cherche une solution à ça.
        
        $prepared_sql = "SELECT id, nom, region, image, hist FROM champions WHERE nom LIKE '%$this->recherche%'";
        $array_values = [];
        
        return PDOUtils::query($prepared_sql, $array_values, true);
    }
}