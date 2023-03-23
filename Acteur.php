<?php
class Acteur extends Personne
{
  protected Role $_role;
  protected array $_castings; // $_castingS : c'est tout l'ensemble des casting donc tous les films dans lesquels l'acteur a joué
  public function __construct(string $nom, string $prenom, string $sexe, string $dateNaissance, Role $role) 
  {
    parent::__construct($nom, $prenom, $sexe, $dateNaissance);
    $this->_castings = [];
  }  
  public function ajouterCasting(Casting $casting) 
  {
    $this->_castings[] = $casting;
  }
  public function getCasting() : array
  {
    return $this->_castings;
  }
  public function afficherFilmoActeur() : string
  {
    $result = $this->getPrenom()." ".$this->getNom(). " a joué dans ";
    foreach ($this->_castings as $casting)
    {
      $result.=$casting->getFilm()."<br>";
    }
    return $result;
  }
}
?>