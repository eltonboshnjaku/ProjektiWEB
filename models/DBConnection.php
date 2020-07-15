<?php

class dataBaseConnection{
    private $servername="MSI\SQLEXPRESS";
    private $databaseName="ProjektiWeb";
    private $username="Elton";
    private $password="lfc";

    

    public function startConnection(){
        try {
            $conn = new PDO("sqlsrv:Server=$this->servername;Database=$this->databaseName", $this->username, $this->password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            return $conn;
            echo "Connected successfully";
          } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
            return null;
    }
}
}