<?php
class Database{

    // specify your own database credentials
    private $host = "localhost";
    private $db_name = "eqdatabase";
    private $username = "root";
    private $password = "";
    public $conn;

    // get the database connection
    public function getConnection(){ $this->conn = null;

      $conn = mysqli_connect($this->host,$this->username,$this->password,$this->db_name);

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
    return $conn;
}
}

?>
