<?php
include "../Data/class.data.qualif.php";

class DataQualif extends DataUtilisateur3
{
    private $num_qualif;
    private $qualif;

    public function selectQualif($id)
    {
        $prep = $this->pdo->prepare('SELECT * FROM qualif where num_qualif = :id;');
        $prep->bindValue(':id', $id);
        $prep->execute();
        $article = $prep->fetch(PDO::FETCH_ASSOC);
        if (is_array($article)) foreach ($article as $clef => $data)
        {
            $this->$clef = $data;
        }
    }
    public function selectAllQualif()
    {
        $prep = $this->pdo->prepare('SELECT * FROM qualif;');
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