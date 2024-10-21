<?php

class Livre {

    //attributs
    private string $titre;
    private int $dateParution;
    private int $nombrePages;
    private float $prix;
    private Auteur $auteur;

    public function __construct(string $titre, int $dateParution, int $nombrePages, float $prix, Auteur $auteur){
        $this->titre = $titre;
        $this->dateParution = $dateParution;
        $this->nombrePages = $nombrePages;
        $this->prix = $prix;
        $this->auteur = $auteur;
        $this->auteur->addLivre($this);
    }


    //getter et setter

    public function getTitre()
    {
        return $this->titre;
    }

    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }



    public function getDateParution()
    {
        return $this->dateParution;
    }

    public function setDateParution($dateParution)
    {
        $this->dateParution = $dateParution;

        return $this;
    }



    public function getNombrePages()
    {
        return $this->nombrePages;
    }

    public function setNombrePages($nombrePages)
    {
        $this->nombrePages = $nombrePages;

        return $this;
    }


    
    public function getPrix()
    {
        return $this->prix;
    }

    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    

    public function getAuteur() : Livre
    {
        return $this->auteur;
    }

    public function setAuteur($auteur)
    {
        $this->auteur = $auteur;

        return $this;
    }

    
    //toString

    public function __toString(){
        return $this->titre." (".$this->dateParution.") : ".$this->nombrePages." pages / ".$this->prix."€ <br>";
    }
    
}