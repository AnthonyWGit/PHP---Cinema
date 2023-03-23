<?php
class Casting
{
    public Role $_role;
    public Film $_film;
    public Acteur $_acteur;
    
    function __construct(Role $role, Film $film, Acteur $acteur)
    {
        $this->_role = $role;
        $this->_film = $film;
        $this->_acteur = $acteur;
        $this->_acteur->ajouterCasting($this);
        $this->_film->ajouterCasting($this);
        $this->_role->ajouterCasting($this);
    }
// GETTERS 

    public function getRole() : string
    {
        return $this->_role->getRole();
    }
    public function getFilm() : string
    {   
        return $this->_film->getTitre();
    }
    public function getActeur() : string
    {
        return $this->_acteur->getNom()." ".$this->_acteur->getPrenom();
    }
}
?>