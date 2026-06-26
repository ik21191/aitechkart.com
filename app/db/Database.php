<?php
class Database
{
    protected PDO|null $connection = null;
    public function __construct()
    {
        try {
            $options = [PDO::ATTR_PERSISTENT => true];
            $charset = 'utf8mb4';
            $DSN = 'mysql:host=' . DB_HOST . ';dbname=' . DB_DATABASE_NAME . ';charset=' . $charset;
            $this->connection = new PDO($DSN, DB_USERNAME, DB_PASSWORD, $options);
            //$this->connection = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE_NAME);
    	
        } catch (PDOException $e) {
            throw new Exception($e->getMessage());   
        }			
    }
    public function getConnection() {
        return $this->connection;
    }
}