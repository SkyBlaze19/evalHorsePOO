<?php

class Manager extends Human
{
    // Propriétés 
    /*private string $secteur;*/ // 
    private string $domaine; // (Ecurie, Animaux, Rider, ...)

    // Constructeur

    public function __construct
    (
        string $name = parent::ANONYME,
        int $age = parent:: AGE_INCONNU,
        string $adress,
        string $street,
        string $postCode,
        string $city,
        string $domaine
    )
    {
        parent::__construct($name, $age, $adress, $street, $postCode, $city);
        $this->setDomaine($domaine);
    }

    public function __toString(): string
    {
        return "Le manager s'appelle {$this->name} et il a {$this->age}\n";   
    }

    /**
     * Get the value of domaine
     */ 
    public function getDomaine(): string
    {
        return $this->domaine;
    }

    /**
     * Set the value of domaine
     *
     * @return  self
     */ 
    private function setDomaine($domaine): self
    {
        $this->domaine = $domaine;
        return $this;
    }
}