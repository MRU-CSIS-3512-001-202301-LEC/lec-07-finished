<?php

class Database
{
    public $connection;

    public function __construct($config, $username, $password)
    {
        $dsn = "mysql:host={$config['host']};port={$config['port']};dbname={$config['db']};charset={$config['charset']}";
        $this->connection = new PDO($dsn, $username, $password);
    }

    public function query($query)
    {
        $statement = $this->connection->prepare($query);

        $statement->execute();

        return $statement;
    }
}
