<?php
class database {
    // private static ?\PDO $instance = null;
    
    private $host = DB_HOST;
    private $user = DB_USER;
    private $password = DB_PASS;
    private $dbname = DB_NAME;

    private $pdo;
    private $stmt;
    
    public function __construct()
    {
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbname;
        
        $options = array(

            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        );
        try{
            $this->pdo = new PDO($dsn,$this->user,$this->password);
        }catch(PDOException $e){
            die("there is an issue: " . $e->getMessage());
        }
    }

    public function query($sql)
    {
      return  $this->stmt = $this->pdo->prepare($sql);
    }

    public function bind($param, $value, $type=null)
    {
        if(is_null($type))
        {
            switch(true)
            {
                case is_int($value);
                $type = pdo::PARAM_INT;
                break;

                case is_bool($value);
                $type = pdo::PARAM_BOOL;
                break;

                case is_null($value);
                $type = pdo::PARAM_NULL;
                break;
                default:
                $type = pdo::PARAM_STR;
            }
        }
            $this->stmt->bindValue($param,$value,$type);
    }

        public function execute()
        {
            return $this->stmt->execute();
        }

        public function fetchAll()
        {
            $this->stmt->execute();
            return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
        }
    
        public function fetch()
        {
            $this->stmt->execute();
            return $this->stmt->fetch(PDO::FETCH_ASSOC);
        }
        public function fetchcolumn()
        {
            return $this->stmt->fetchcolumn();
        }
        //row count
        public function rowCount()
        {
            return $this->stmt->rowCount();
        }
}