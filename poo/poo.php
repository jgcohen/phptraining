<?php
class Personnage {

//Attribut

private $_force = 40;
private $_classe = "Plombier";
private $_couleurCasquette = "Rouge";
private $_vie = 100;
private $nom ="unknown";


//Constructeur

public function __construct($nom,$force,$couleur){
    $this->_nom=$nom;
    $this->setForce($force);
    $this->setCouleurCasquette($couleur);
}
//Methodes
public function getForce(){
    return $this->_force;
}
public function setForce($force){
    return $this->_force=$force; 
}
public function getCouleurCasquette(){
    return $this->_couleurCasquette;
}
public function setCouleurCasquette($couleur){
    return $this->_couleurCasquette=$couleur; 
}
public function getClasse(){
    return $this->_classe;
}
public function getInfo(){
    return "<p>".$this->_nom." a une force de ".$this->_force.", est de classe ".$this->_classe." et a une casquette de couleur ".$this->_couleurCasquette.".</p>";
}
public function frapper(Personnage $personnage){
return $personnage->recevoirDegats($this->_force);
}
public function recevoirDegats($force){
    $this->_vie = $this->_vie - $force;
if($this->_vie <=0){
    echo "<p>".$this->_nom." a perdu ".$force." points de vie, il succombe à ses blessures.</p>";
}else{

    echo $this->_nom." a perdu ".$force." points de vie, il lui reste ".$this->_vie." points.</p>"; 
}
}}

$mario = new Personnage("Mario",45,"rouge");
$luigi = new Personnage("Luigi",55,"verte");
echo $mario->getInfo();
echo $luigi->getInfo();

$luigi->frapper($mario);
$luigi->frapper($mario);

