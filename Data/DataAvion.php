<?php
include "../Data/class.data.avion.php";

class DataAvion extends DataUtilisateur
{
    private $num_avion;
    private $type_avion;
    private $taux;
    private $forfait1;
    private $forfait2;
    private $forfait3;
    private $heures_forfait1;
    private $heures_forfait2;
    private $heures_forfait3;
    private $reduction_semaine;
    private $immatriculation;

    public function selectAvion($id)
    {
        $prep = $this->pdo->prepare('SELECT * FROM avions where num_avion = :id;');
        $prep->bindValue(':id', $id);
        $prep->execute();
        $article = $prep->fetch(PDO::FETCH_ASSOC);
        if (is_array($article)) foreach ($article as $clef => $data)
        {
            $this->$clef = $data;
        }
    }
    public function selectAllAvion()
    {
        $prep = $this->pdo->prepare('SELECT * FROM avions;');
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