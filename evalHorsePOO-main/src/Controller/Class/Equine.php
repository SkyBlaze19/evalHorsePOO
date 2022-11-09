<?php
namespace App\Controller\Class;

abstract class Equine extends Animal
{
    // Propriétés

    protected string $id;
    protected string $color;
    protected int $water;

    private array $equides = [];

    //private Rider $Rider; //TODO
    
    // Constructeur
    public function __construct($name, $sexe, string $id, int $water)
    {
        parent::__construct($name, $sexe);
        $this->setId($this->idGenerator())
            ->setWater($water);
    }

    public function idGenerator()
    {
        return '000-' . substr($this->getName(), 0, 1) . "-" . substr($this->getColor(), 0, 1) . "-" . count($this->getEquines())."\n";
    }

    public function setCategory(string $var = null)
    {
        # code...
    }

    public function getCategory(int $category = "inconnue")
    {
        return $this->category;
    }

    public function setRider(string $var = null)
    {
        # code...
    }

    public function __toString(): string
    {
        $str = "Cet equidé est un : {$this->getCategory()}\n";
        $str .= "C'est le numéro : {substr($this->id, -1)}\n";
        $str .= "Il a besoin de {$this->water} L d'eau\n";
        /* Dès que Rider sera créer (A ajuster si besoin)
        if($Rider != null)
            $str.= "Il possède un rider qui est : {$this->getRider()}\n";
        else
            $str.= "Il ne possède pas de rider\n";
        */
        return $str;
    }

    public function getEquines()
    {
        return $this->equides;
    }

    /**
     * Get the value of id
     */ 
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    private function setId($id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of color
     */ 
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * Set the value of color
     *
     * @return  self
     */ 
    private function setColor($color): self
    {
        $this->color = $color;

        return $this;
    }

    /**
     * Get the value of water
     */ 
    public function getWater(): int
    {
        return $this->water;
    }

    /**
     * Set the value of water
     *
     * @return  self
     */ 
    private function setWater($water): self
    {
        $this->water = $water;

        return $this;
    }
}