<?php

class DbConfig
{
    private $_host = 'localhost';
    private $_username = 'root';
    private $_password = '';
    private $_database = 'test';

    protected $connection;

    public function _construct()
    {
        if(!isset($this->connection))
        {
            $this->connection = new mysqlu($this->_host, $this->_usernme, $this->_password, $this->_database);

            if(!$this->connection)
            {
                echo "Cannot connect to database server";
                exit;
            }
            return $this->connection;
        }
    }
}