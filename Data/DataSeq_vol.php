<?php
include "../Data/class.data.seq_vol.php";

class DataSeq_vol extends DataUtilisateur4
{
    private $num_seq;
    private $num_membre;
    private $num_instructeur;
    private $num_avion;
    private $date;
    private $temps;
    private $heures_forfait;
    private $prix_special;
    private $taux;
    private $reduction_semaine;
    private $motif;
    private $taux_instruceur;
    private $forfait_initiation;

    public function selectSeq_vol($id)
    {
        $prep = $this->pdo->prepare('SELECT * FROM seq_vol where num_seq = :id;');
        $prep->bindValue(':id', $id);
        $prep->execute();
        $article = $prep->fetch(PDO::FETCH_ASSOC);
        if (is_array($article)) foreach ($article as $clef => $data)
        {
            $this->$clef = $data;
        }
    }
    public function selectAllSeq_vol()
    {
        $prep = $this->pdo->prepare('SELECT * FROM seq_vol;');
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