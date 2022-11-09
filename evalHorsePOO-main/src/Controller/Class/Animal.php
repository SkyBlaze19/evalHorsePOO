<?php
namespace App\Controller\Class;

abstract class Animal
{
    // Propriétés
    protected string $name;
    protected string $sexe;

    // Constructeur
    public function __construct(string $name = "Inconnu", string $sexe = "Inconnu")
    {
        $this->setName($name)
            ->setSexe($sexe);
    }


    /**
     * Get the value of name
     */ 
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    private function setName($name): self 
    {
        $this->name = $name;

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