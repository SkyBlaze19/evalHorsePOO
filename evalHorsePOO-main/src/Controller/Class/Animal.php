<?php
namespace App\Controller\Class;

abstract class Animal
{
    // Propriétés
    protected string $name;

    // Constructeur
    public function __construct(string $name = "Inconnu")
    {
        $this->setName($name);
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
}