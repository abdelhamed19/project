<?php
namespace core\database;
use PDO;
class QueryBuilder
{
    public function __construct($pdo)
    {
        $this->pdo=$pdo;
    }
    public function insert ($table,$params)
    {
        $sql=sprintf("INSERT INTO ? (?) VALUES (?)",
        $table,implode(",",array_keys($params)),implode(",",array_values($params)));
        //var_dump($sql);

        try
        {
            $stmt=$this->pdo->prepare($sql);
            $stmt->execute($params);
        }
        catch (PDOException $e)
        {
            die($e->getMessage());
        }

    }
    public function selectall($table)
    {
        $sql=sprintf("SELECT * FROM %s",$table);
        try {
            $stmt=$this->pdo->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_CLASS);
        }
        catch (PDOException $e)
        {
            die($e->getMessage());
        }
    }
    public function select($table)
    {
        $sql=sprintf("SELECT * FROM %s",$table);
        try {
            $stmt=$this->pdo->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_CLASS);
        }
        catch (PDOException $e)
        {
            die($e->getMessage());
        }
    }
}
