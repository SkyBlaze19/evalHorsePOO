<?php
namespace App\Controller\Class;

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
        string $domaine,
        string $sexe
    )
    {
        parent::__construct($name, $age, $adress, $street, $postCode, $city);
        $this->setDomaine($domaine)
            ->setSexe($sexe);
    }

    public function __toString(): string
    {
        if($this->getSexe() == "Male" || $this->getSexe() == "Homme")
            return "Le manager s'appelle {$this->name} et il a {$this->age} ans\n";
        else 
            return "La manageuse s'appelle {$this->name} et elle a {$this->age} ans\n";  
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

    /**
        * Get the value of sexe
    */ 
    public function getSexe(): string
    {
        return $this->sexe;
    }

    /**
        * Set the value of sexe
        *
        * @return  self
    */ 
    private function setSexe($sexe): self
    {
        $this->sexe = $sexe;
        return $this;
    }
}