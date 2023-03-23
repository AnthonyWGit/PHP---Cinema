<?php
class Personne 
{
    //Protected pour que d'autres classes puissent hériter de Personne
    protected string $_nom;
    protected string $_prenom;
    protected string $_sexe;
    protected string $_dateNaissance;
    public function __construct($nom, $prenom, $sexe, $dateNaissance)
    {
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        $this->_sexe = $sexe;
        $this->_dateNaissance = $dateNaissance;
    }
// GETTERS 
    public function getNom() : string 
    {
        return $this->_nom;
    }
    public function getPrenom() : string
    {
        return $this->_prenom;
    }  
    public function getSexe() : string
    {
        return $this->_sexe;
    }
    public function getDateNaissance() : string
    {
        return $this->_dateNaissance;
    }
}
?>