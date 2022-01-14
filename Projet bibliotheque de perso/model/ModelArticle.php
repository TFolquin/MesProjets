<?php

require_once './utils/PDOUtils.php';

class ModelArticle {

    private $id;

    //Titre de l'article
    private $nom;

    private $region;

    //Contenu
    private $image;


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












    //Méthode du CRUD

    public function getAllChampions(){

        $prepared_sql = "SELECT id, nom, region, image, hist FROM champions";
        $array_values = [];

        return PDOUtils::query($prepared_sql, $array_values, true);
    }


    public function add(){

        $prepared_sql = "INSERT INTO offres (nom, region, image) VALUES (?, ?, ?)";
        $array_values = [$this->titre, $this->contenu];

        return PDOUtils::query($prepared_sql, $array_values, false);
        
        
    }

    public function details(){
        
        $prepared_sql = "SELECT nom, region, image, hist FROM champions WHERE id = ?";
        $array_values = [$this->id];
        
        return PDOUtils::query($prepared_sql, $array_values, true);
    }

    public function comments(){
        $prepared_sql = "SELECT commentaires.com_contenu, commentaires.com_date, auteurs.nom, auteurs.prenom FROM commentaires INNER JOIN auteurs ON commentaires.id_com_auteur = auteurs.id WHERE commentaires.id_article = ?";
        $array_values = [$this->id];
        
        return PDOUtils::query($prepared_sql, $array_values, true);
    }

    public function search(){
        
        $prepared_sql = "SELECT id, nom, region, image, hist FROM champions WHERE nom LIKE '%$this->nom%'";
        $array_values = [];
        // var_dump($prepared_sql);
        
        return PDOUtils::query($prepared_sql, $array_values, true);
    }
}