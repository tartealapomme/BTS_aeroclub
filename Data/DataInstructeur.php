<?php
include "../Data/class.data.instructeur.php";

class DataInstructeur extends DataUtilisateures
{
    private $num_instructeur;
    private $nom;
    private $prenom;
    private $num_civilite;
    private $taux_instructeur;
    private $adresse;
    private $code_postal;
    private $ville;
    private $tel;
    private $portable;
    private $fax;
    private $commentaire;
    private $num_badge;
    private $email;
    

    
    public function selectInstructeur($id)
    {
        $prep = $this->pdo->prepare('SELECT * FROM instructeurs where num_instructeur= :id;');
        $prep->bindValue(':id', $id);
        $prep->execute();
        $article = $prep->fetch(PDO::FETCH_ASSOC);
        if (is_array($article)) foreach ($article as $clef => $data)
        {
            $this->$clef = $data;
        }
    }
    public function selectAllInstructeur()
    {
        $prep = $this->pdo->prepare('SELECT * FROM instructeurs;');
        $prep->execute();
        $article = $prep->fetchAll(PDO::FETCH_ASSOC);
        return $article;
    }
    public function __get($name)
    {
        if (isset($this->$name))
        {
            return $name;
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
