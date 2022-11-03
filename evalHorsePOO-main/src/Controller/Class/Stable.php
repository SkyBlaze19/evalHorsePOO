<?php
namespace App\Controller\Class;

class Stable
{
    // Propriétés 
    private const ANONYME = "Inconnu";

    private string $Name;
    private string $Adress;
    private string $Street;
    private string $PostCode;
    private string $City;
    private Manager $Manager;
    //To do : propriété manager (objet)
    
    
    // Constructeur
    public function __construct
    (
        string $Name = self::ANONYME,
        string $Adress = self::ANONYME,
        string $Street = self::ANONYME,
        string $PostCode = self::ANONYME,
        string $City = self::ANONYME,
        )
    {
        $this->setName($Name)
            ->setAdress($Adress)
            ->setStreet($Street)
            ->setPostCode($PostCode)
            ->setCity($City);
    }
    
    public function __toString(): string
    {
        $str = "Voici l'écurie : {$this->Name}\n";
        $str .= "Elle se trouve à l'adresse suivante :\n";
        $str .= "Numéro de rue : {$this->Adress}\n";
        $str .= "Nom de la rue : {$this->Street}\n";
        $str .= "Code Postal : {$this->PostCode}\n";
        $str .= "A : {$this->City}\n\n";
        return $str;
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
        $this->Name = $Name;

        return $this;
    }

    /**
     * Get the value of Adress
     */ 
    public function getAdress(): string
    {
        return $this->Adress;
    }

    /**
     * Set the value of Adress
     *
     * @return  self
     */ 
    private function setAdress($Adress): self
    {
        $this->Adress = $Adress;

        return $this;
    }

    /**
     * Get the value of Street
     */ 
    public function getStreet(): string
    {
        return $this->Street;
    }

    /**
     * Set the value of Street
     *
     * @return  self
     */ 
    private function setStreet($Street): self
    {
        $this->Street = $Street;

        return $this;
    }

    /**
     * Get the value of PostCode
     */ 
    public function getPostCode(): string
    {
        return $this->PostCode;
    }

    /**
     * Set the value of PostCode
     *
     * @return  self
     */ 
    private function setPostCode($PostCode): self
    {
        $this->PostCode = $PostCode;

        return $this;
    }

    /**
     * Get the value of City
     */ 
    public function getCity(): string
    {
        return $this->City;
    }

    /**
     * Set the value of City
     *
     * @return  self
     */ 
    private function setCity($City): self
    {
        $this->City = $City;

        return $this;
    }

}