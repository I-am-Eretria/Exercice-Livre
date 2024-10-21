<?php

class Auteur {

    //attributs
    private string $prenom;
    private string $nom;
    private array $livres;


    public function __construct(string $prenom, string $nom){
        $this->prenom = $prenom;
        $this->nom = $nom;
        $this->livres = [];
    }


    //getter et setter
    
    public function getPrenom()
    {
        return $this->prenom;
    }

    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }



    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

   

    public function getLivres()
    {
        return $this->livres;
    }

    public function setLivres($livres)
    {
        $this->livres = $livres;

        return $this;
    }


    //toString

    public function __toString(){
        return $this->prenom." ".$this->nom;
    }







    public function addLivre(Livre $livre){   //singulier car c'est UN livre qu'on rajoute
        $this->livres[] = $livre; 
    }

    public function afficherBibliographie(){
        $result = "<h4>Livres de $this</h4><ul>";

        foreach ($this->livres as $livre) {
            $result .= "<li>$livre</li>";
        }

        $result .= "</ul>";

        return $result;
    }

}

