<?php
class Connection{
    protected $host;
    protected $username;
    protected $password;
    protected $database;
    public $conn;

    public function __construct(){
        $this->host = "localhost:3306";  // Replace with your server name
        $this->username = "admin";  // Replace with your MySQL username
        $this->password = "admin";  // Replace with your MySQL password
        $this->database = "db_tagakaulo";  // Replace with your database name
        $this->connect();
    }
    public function connect(){
        $this->conn = mysqli_connect($this->host, $this->username, $this->password, $this->database);
        if (!$this->conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
    }
    //This will close the Connection
    public function close(){
        if($this->conn){
            $this->conn->close();
        }
    }
    //This will be used to get connection once $conn is set to protected
    public function getConnection(){
        return $this->conn;
    }
}
?>