<?php

class Manager extends Human
{
    // Propriétés 
    private const ANONYME = "Inconnu";

    private string $Name;
    private int $Age;

    // Constructeur

    public function __construct(string $Name = self::ANONYME, int $Age = 30)
    {
        $this->setName($Name)
            ->setAge($Age);
    }

    /**
     * Get the value of Name
     */ 
    public function getName(): string
    {
        return $this->Name;
    }

    /**
     * Set the value of Name
     *
     * @return  self
     */ 
    private function setName($Name): self
    {
        $this->Name = strtoupper($Name);

        return $this;
    }

    /**
     * Get the value of Age
     */ 
    public function getAge(): int
    {
        return $this->Age;
    }

    /**
     * Set the value of Age
     *
     * @return  self
     */ 
    private function setAge($Age): self
    {
        $this->Age = $Age;

        return $this;
    }

    public function __toString(): string
    {
        return "Le manager s'appelle {$this->Name} et il à {$this->Age}\n";   
    }
}