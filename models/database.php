<?php

class Database{
    protected $db;
    
    public function __construct(){
        $servername = "localhost";
        $dbname= "tiendaonline";
        $username = "root";
        $password = "root";

        //creem una nova connexió instancinat l'objecte PDO
		$this->db = new PDO("mysql:host=$servername;dbname=$dbname",$username, $password);
		// establim el mode PDO error a exception per poder
		// recuperar les excepccions
		$this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        // Caracteres utf8
        $this->db->exec("SET CHARACTER SET utf8");
    }
    
    
    
    
    
}

