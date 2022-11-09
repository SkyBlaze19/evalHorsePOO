<?php
namespace App\Controller\Class;

class Poney extends Equine
{
    // Propriétés
    private int $age;
    // Propriétaire ? // A définir si utile ou non

    // Constructeur
    public function __construct(int $age, $name, $sexe, $id, $water)
    {
        parent::__construct($name, $sexe, $id, $water);
        $this->setNom($age);
    }

    public function __toString(): string
    {
        $str = "Ce poney s'appelle : {$this->name}\n";
        $str .= $this->sexe == "male" ? "C'est un male\n" : "C'est une femelle\n";
        $str .= "C'est le numéro : {substr($this->id, -1)}\n";
        $str .= "Son identifiant complet est : $this->id}\n";
        if ($this->getAge() == 1)
            $str .= "Il a {$this->age} an\n";
        elseif ($this->getAge() == 0)
        $str .= "Il a moins d'un an\n";
        else
            $str .= "Il a {$this->age} ans\n";
        $str .= "Il a besoin de {$this->water} litres d'eau.\n";
        return $str;
    }

    /**
     * Get the value of nom
     */ 
    public function getNom(): string
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    private function setNom($nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of age
     */ 
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * Set the value of age
     *
     * @return  self
     */ 
    private function setAge($age): self
    {
        $this->age = $age;

        return $this;
    }
}