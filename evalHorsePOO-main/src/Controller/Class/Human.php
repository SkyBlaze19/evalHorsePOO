<?php
namespace App\Controller\Class;

abstract class Human
{   
    // Propriétés
    protected const ANONYME = "Inconnu";
    protected const AGE_INCONNU = 0;    

    protected string $name;
    protected int $age;
    protected string $adress;
    protected string $street;
    protected string $postCode;
    protected string $city;
    //private Category $Categorie; //TODO
    /*
    private float $height;
    private float $weight;
    */

    // Constructeur
    public function __construct
    (
        string $name = self::ANONYME,
        int $age = self:: AGE_INCONNU,
        string $adress,
        string $street,
        string $postCode,
        string $city
    )
    {
        $this->setName($name)
            ->setAge($age)
            ->setAdress($adress)
            ->setStreet($street)
            ->setPostCode($postCode)
            ->setCity($city);
    }

    public function __toString(): string
    {
        $str = "Bonjour, je m'appelle {$this->name} et j'ai {$this->age}\n"; 
        $str .= "Je vis à {$this->city} à l'adresse suivante :\n";
        $str .= "{$this->adress} {$this->street}, {$this->postCode}\n";
        return $str;      
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

    /**
     * Get the value of adress
     */ 
    public function getAdress(): string
    {
        return $this->adress;
    }

    /**
     * Set the value of adress
     *
     * @return  self
     */ 
    private function setAdress($adress): self
    {
        $this->adress = $adress;

        return $this;
    }

    /**
     * Get the value of street
     */ 
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * Set the value of street
     *
     * @return  self
     */ 
    public function setStreet($street)
    {
        $this->street = $street;

        return $this;
    }

    /**
     * Get the value of postCode
     */ 
    public function getPostCode()
    {
        return $this->postCode;
    }

    /**
     * Set the value of postCode
     *
     * @return  self
     */ 
    public function setPostCode($postCode)
    {
        $this->postCode = $postCode;

        return $this;
    }

    /**
     * Get the value of city
     */ 
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set the value of city
     *
     * @return  self
     */ 
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }
}