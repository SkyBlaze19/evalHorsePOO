<?php

use App\Controller\Class\Equine;
use App\Controller\Class\Human;
use Error;

class Rider extends Human
{
    // Propriétés 
    private Equine $Equine;

    // Constructeurs
    public function __construct
    (
        $name, 
        $age,
        $adress,
        $street,
        $postCode,
        $city, 
        Equine $equine)
    {
        parent::__construct
        (
        $name, 
        $age,
        $adress,
        $street,
        $postCode,
        $city
        );
        $this->setEquine($equine);
    }

    /**
     * Get the value of Equine
     */ 
    public function getEquine(): Equine
    {
        return $this->Equine;
    }

    /**
     * Set the value of Equine
     *
     * @return  self
     */ 
    private function setEquine($Equine): self
    {
        $this->Equine = $Equine;

        return $this;
    }
}