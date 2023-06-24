<?php
namespace core\database;
use mysql_xdevapi\Exception;
use PDO;
class connection
{
    public static function make($config)
    {
        try {
            return new PDO
            (
                $config['connection']. ";dbname=".$config['dbname'],
                $config['username'],
                $config['password'],
                $config['options']
            );
        }
        catch (PDOException $e)
        {
            die($e->getMessage("Database Not Founded"));
        }
    }
}
//connection::make();
