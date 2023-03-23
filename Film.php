<?php
class Film
{
    private string $_titre;
    private string $_dateSortie;
    private int $_duree;
    private Realisateur $_realisateur;
    private string $_synopsis;
    private Genre $_genre;
    private $_castings =[];
    public function __construct(string $titre, string $dateSortie, int $duree, string $synopsis, genre $genre, Realisateur $realisateur) 
    {
        $this->_realisateur = $realisateur;
        $this->_titre = $titre;
        $this->_dateSortie = $dateSortie;
        $this->_duree = $duree;
        $this->_synopsis = $synopsis;
        $this->_genre = $genre;
        $this->_genre->ajouterFilm($this);
        $this->_realisateur->ajouterFilmRealise($this);

    }
    /*-----------------SeTTERS-------------------*/
    public function setTitre(string $titre)
    {
        $this->_titre = $titre;
    }
    public function setDateSortie(string $dateSortie)
    {
        $this->_dateSortie = $dateSortie;
    }
    public function setDuree(int $duree)
    {
        $this->_duree = $duree;
    }
    public function setGenre(Genre $genre)
    {
        $this->_genre = $genre;
    }
    public function setSynopsis(string $synopsis)
    {
        $this->_synopsis = $synopsis;
    }
    /*------------GETTERS -----------------*/
    public function getTitre() : string
    {
        return $this->_titre;
    }
    public function getDateSortie() : string
    {
        return $this->_dateSortie;
    }
    public function getDuree() : int
    {
        return $this->_duree;
    }
    public function getSynopsis() : string
    {
        return $this->_duree;
    }
// ______________________________________________________METHODES____________________________________________
      public function ajouterCasting(Casting $casting)
    {
        $this->_castings[] = $casting;
    }
    public function afficherReal() : string
    {
        $result = $this->_realisateur->getPrenom();
        return $result;
    }
    public function afficherCasting() : string
    {
        $result = "Film : " . $this->_titre . "<br>";
        foreach($this->_castings as $casting)
        {
        $result .= $casting->getRole() . " a été incarné par " . $casting->getActeur() . "<br>";
        }
    return $result;
    }       
}
?>