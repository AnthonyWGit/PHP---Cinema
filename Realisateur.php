<?php
class Realisateur extends Personne
{
  private array $_filmsRealises; 
  public function __construct(string $nom, string $prenom, string $sexe, string $dateNaissance) 
  {
    parent::__construct($nom, $prenom, $sexe, $dateNaissance);
    $this->_filmsRealises = array();
  } 
  // ----------------SETTERS -------------------
  public function setFilmRealises($filmsRealises)
  {
    $this->_filmsRealises = $filmsRealises;
  }
  //--------------------GETTERS--------------------
   public function getFilmsRealises()
  {
    return $this->_filmsRealises;
  }
  public function ajouterFilmRealise($film) 
  {
    $this->_filmsRealises[] = $film;
  }
//-----------------------METHODES-----------------------------
  public function afficherFilmo()
  {
  $result = "<p>". $this->getNom() . " " . $this->getPrenom() . " a réalisé :</p>";
  foreach($this->_filmsRealises as $film)
  {
      $result .= $film->getTitre() . "<br>";
  }
  return $result;
  }
}
?>