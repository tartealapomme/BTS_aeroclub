<?php
class DataUtilisateur
{
    protected $pdo;
    
    public function __construct()
    {
        include '../Config/connect.php';
            try
            {
                $host = "pgsql:host=$server;dbname=$BDname";
                $this->pdo = new PDO($host, $login, $password);
                $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
            catch (Exception $e)
            {
                die ($e->getMessage()) ;
                print("Erreur de connexion");
            }
        }
    public function __sleep()
    {
        unset($this->pdo);
        return array();
    }
    public function __wakeup() 
    {
        $this->__construct();
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
       if (isset($this->$name) || $this->$name === nul) $this->$name = $value;
    }
}
?>