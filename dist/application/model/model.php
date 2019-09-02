<?php

class Model {
    public $dbhandle;
    
    /*public function __construct() {
        $dsn = 'sqlite:./db/Monopoly.sqlite';

        try {
            $this->dbhandle = new PDO($dsn, 'user','password',array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES => false,
            ));
            // $this->dbhandle->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			// echo 'Database connection created</br></br>';
        } catch (PDOException $e) {
            echo "Cannot connect to the database";
            print new Exception($e->getMessage());
        }
    }*/

    public function dbGetJson() {
        return json_decode(file_get_contents('./db/monopoly.json'));
    }

}
?>