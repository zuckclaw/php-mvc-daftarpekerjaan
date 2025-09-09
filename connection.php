<?php

class Connection {
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "daftarpekerjaan";

    public function connect(){
        return new mysqli($this->host, $this->username, $this->password, $this->database);
    }
}

?>