<?php
namespace Cicles;
final class Cicle{
    private $id;
    private $nom;
    private $sigles;
   
    public function __construct($id, $nom, $sigles) {
        $this->id = $id;
        $this->nom = $nom;
        $this->sigles =$sigles;
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of sigles
     */ 
    public function getSigles()
    {
        return $this->sigles;
    }

    /**
     * Set the value of sigles
     *
     * @return  self
     */ 
    public function setSigles($sigles)
    {
        $this->sigles = $sigles;

        return $this;
    }
}
?>