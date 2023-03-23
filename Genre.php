<?php
Class Genre
{
    protected string $_nomGenre;
    protected array $_films;
    public function __construct(string $nomGenre)
    {
        $this->_nomGenre = $nomGenre;
        $this->_films = [];
    }
    //-------------------SETTERS---------------

    public function setNomGenre(string $nomGenre)
    {
        $this->_nomGenre = $nomGenre;
    }

    //__________________GETTERS______________________
    public function getNomGenre() : string
    {
        return $this->_nomGenre;
    }
        ////////______________METHODES_______________________
    public function ajouterFilm(Film $film)
    {
        $this->_films[] = $film;
    }

    public function FilmGenre() : string //fonction d'affichage
    {
        $result .= "Voici la liste des films classés dans le genre".$this->_nomGenre." <br>";
        foreach ($this->_films as $films)
        {
            $result .= $films->getTitre()." <br>";
        }
        return $result;
    }
}
