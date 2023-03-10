<?php
ini_set('display errors ',1);
ini_set('display_startup_errors',1);
error_reporting(E_All );
class db_connect{
    private $db_host ="localhost";
    private $db_name = "gdsc";
    private $db_user = 'root';
    private $db_password = '';

    protected $connection = null;
    public function connect(){
        if($this->connection ==null){
            try {
                $this -> connection = new PDO("mysql:host= $thid->db_host;dbname =$this->db_name,$this ->db_user,$this->db_password");

            };
            catch(PDOException $e) {
                die($e->getMessage());

            };
            $this ->connection -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        };
    };

}
?>
