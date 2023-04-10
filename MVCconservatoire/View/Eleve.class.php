<?php

class Eleve extends Personne{
    private $id;
    private $bourse;
    private $nom;
    private $prenom;
    private $tel;
    private $mail;
    private $adresse;






	/**
	 * @return mixed
	 */
	public function getId() {
		return $this->id;
	}
	
	/**
	 * @param mixed $id 
	 * @return self
	 */
	public function setPrix($prix): self {
		$this->prix = $prix;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getPhoto() {
		return $this->photo;
	}
	
	/**
	 * @param mixed $photo 
	 * @return self
	 */
	public function setPhoto($photo): self {
		$this->photo = $photo;
		return $this;
	}


	
	
	public function setId($id): self {
		$this->id = $id;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getNom() {
		return $this->nom;
	}

	/**
	 * @param mixed $nom 
	 * @return self
	 */
	public function setNom($nom): self {
		$this->nom = $nom;
		return $this;
	}

    public static function afficherTous(){
        $req = MonPdo::getInstance()->prepare("select * from eleve");
        $req -> setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'eleve');
        $req->execute();
        $lesResultats = $req->fetchAll();
        return $lesResultats;
    }
}