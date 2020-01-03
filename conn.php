<?php
class db_handle{

    private $host       = 'localhost',
            $user       = 'root',
            $password   = 'root',
            $db_name    = 'polling';
    protected $con;

    public function __construct(){
        return $this->con = new mysqli($this->host, $this->user, $this->password, $this->db_name);
    }

    public function test($data){
        return mysqli_real_escape_string($this->con, $data);
        
    }
    public function query($data){
        return $this->con->query($data);
    }
    public function fetch_pass($data){
        $sql = $this->query("SELECT * FROM adm00n WHERE passwd='$data' ");
        $fetch = $sql->fetch_assoc();
        return $fetch['passwd'];
    }
    public function valid_pass($pass){
        return password_verify($pass, $this->fetch_pass());
    }
}

class login extends db_handle{
    public $pesan = '';

    public function __construct(){
        return $this->pesan = 'Login Required';
    }

    public function pass_v2($pass){
        $pasv2 = parent :: valid_pass($pass);
        return $passv2;
    }

}

class getData extends db_handle{
    public  $grtDta,
            $rowFtech,
            $strRoot;
    protected $arv;

    public function dataPasien($data, $param1, $param2){
        $data = $this->getDta;
        $strTCP = $this->strRoot;
    }

    public function dataGwe(){

        $datagtr = $this->rowFetch;
    }
}


$db = new db_handle();
$str = 'inipasswd';
$valid = $db->valid_pass($str);