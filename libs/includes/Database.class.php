<?php

class Database{
    public static $conn = Null;
    
    public static function getConnection(){
            if($conn == Null){
                
                $servername = "mysql.selfmade.ninja";
                $usernamee = "cubher";
                $passworde = "mendoza@";
                $dbname = "cubher_first";
        
                // Create connection
                $conn = new mysqli($servername, $usernamee, $passworde, $dbname);
                // Check connection
                if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error); // exception handelling
                }
                else{
                    Database::$conn = $conn;
                }
            }
            else{
                return Database::$conn;
            }
    }

}