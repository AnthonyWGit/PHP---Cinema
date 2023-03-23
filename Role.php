<?php
class Role 
{
    private string $_role;
    private array $_roles;
    private array $_castings;
    public function __construct(string $role)
    {
        $this->_castings = [];
        $this->_role = $role;
        $this->_roles = [];
    }
    // --------------------------------------GETTERS-----------------------------
    public function getRole() : string
    {
        return $this->_role;
    }
    // -------------------------------------SETTERS--------------------------
    public function setRole($role)
    {
        $this->_role = $role;
    }
    public function ajouterCasting(Casting $casting)
    {
        $this->_castings[] = $casting;
    }
    public function afficherActeurRole()
    {
        $result = "Ils ont joué le rôle de : ".$this->_role. "<br>";
        foreach ($this->_castings as $casting) //Pour parcourir tous les castings, ligne par ligne
        {
            $result .= $casting->getActeur()."<br>";
        }
        return $result;
    }
}
?>