<?php
include "../Data/class.data.compte.php";

class DataCompte extends DataUtilisateurs
{
    private $numero;
    private $num_seq;
    private $num_membre;
    private $date;
    private $credit;
    private $debit;
    private $comment;
    private $autocreation;

    public function selectCompte($id)
    {
        $prep = $this->pdo->prepare('SELECT * FROM comptes where num_membre= :id;');
        $prep->bindValue(':id', $id);
        $prep->execute();
        $compte = $prep->fetch(PDO::FETCH_ASSOC);
        if (is_array($compte)) foreach ($compte as $clef => $data)
        {
            $this->$clef = $data;
        }
        return $compte;
    }
    public function selectAllCompte()
    {
        $prep = $this->pdo->prepare('SELECT * FROM comptes;');
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
    /*
    public function selectCommentairesFromPubli($id)
    {
        $prep = $this->pdo->prepare('SELECT * FROM `membres` INNER JOIN commentaires ON membres.id=commentaires.id_membre where `id_article`= :id;');
        $prep->bindValue(':id', $id);
        $prep->execute();
        $commentaire = $prep->fetch(PDO::FETCH_ASSOC);
        if (is_array($commentaire)) foreach ($commentaire as $clef => $data)
        {
            $this->$clef = $data;
        }
    }
    */
}





























