<?php
include "../Data/class.data.membre.php";

class DataMembre extends DataUtilisateur2
{
    private $num_membre;
    private $nom;
    private $prenom;
    private $adresse;
    private $code_postal;
    private $ville;
    private $num_civil;
    private $tel;
    private $portable;
    private $email;
    private $commentaire;
    private $date_vm;
    private $validite_vm;
    private $date_sep;
    private $validite_sep;
    private $num_badge;
    private $num_qualif;
    private $profession;
    private $date_naissance;
    private $lieu_naissance;
    private $carte_federal;
    private $date_attestation;
    private $date_theorique_bb;
    private $date_theorique_ppla;
    private $date_bb;
    private $date_ppla;
    private $numero_bb;
    private $numero_ppla;
    private $date_entree;
    private $membre_actif;
    private $membre_inscrit;    
    

    public function selectMembre($id)
    {
        $prep = $this->pdo->prepare('SELECT * FROM membres where num_membre = :id;');
        $prep->bindValue(':id', $id);
        $prep->execute();
        $article = $prep->fetch(PDO::FETCH_ASSOC);
        if (is_array($article)) foreach ($article as $clef => $data)
        {
            $this->$clef = $data;
        }
        return $article;
    }
    public function selectAllMembre()
    {
        $prep = $this->pdo->prepare('SELECT * FROM membres;');
        $prep->execute();
        $article = $prep->fetchAll(PDO::FETCH_ASSOC);
        return $article;
    }
    public function __get($name)
    {
        if (isset($this->$name))
        {
            return $this->$name;
        }
        else
        {
            return false;
        }
    }
    public function __set($name, $value)
    {
       if (isset($this->$name) || $this->$name === null) $this->$name = $value;
    }
}   