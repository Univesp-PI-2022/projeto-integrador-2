<?php

namespace src\database;


use src\model\User;
use \PDO, PDOException;


class DatabaseCon
{

    const Host = getenv("db_host");
    const DBname = getenv("db_name");
    const DBuser = getenv("db_user");
    const DBpassword = getenv("db_password");;


    private $table;
    private $connection;


    public function __construct($table = null)
    {
        $this->table = $table;
        $this->setConnection();
    }

    private function setConnection()
    {
        try {
            $this->connection = new PDO("mysql:host=" . self::Host . ";dbname=" . self::DBname, self::DBuser, self::DBpassword);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            //Apenas para dev;
            die("Erro: " . $e->getMessage());
        }
    }


    public function execute($query, $params = [])
    {
        try {
            $statement = $this->connection->prepare($query);
            $statement->execute($params);
            return $statement;
        } catch (PDOException $e) {
            //Apenas para dev;
            die("Erro: " . $e->getMessage());
        }
    }

    public function insert($values)
    {
        $fields = array_keys($values);
        $binds = array_pad([], count($fields), "?");
        $query = "INSERT INTO " . $this->table . " (" . implode(",", $fields) . ") VALUES (" . implode(",", $binds) . ")";

        $this->execute($query, array_values($values));
        return $this->connection->lastInsertId();
    }

    public function select($where = null, $order = null, $limit = null, $fields = "*")
    {
        $where = strlen($where) ? "WHERE " . $where : "";
        $order = strlen($order) ? "ORDER BY " . $order : "";
        $limit = strlen($limit) ? "LIMIT " . $limit : "";

        $query = "SELECT " . $fields . " FROM " . $this->table . " " . $where . " " . $order . " " . $limit;
        return $this->execute($query);
    }

    public function update($where, $values)
    {
        $fields = array_keys($values);
        $query = "UPDATE " . $this->table . " SET " . implode("=?,", $fields) . "=? WHERE " . $where;
        $this->execute($query, array_values($values));
        return true;
    }

    public function delete($where)
    {
        $query = "DELETE FROM " . $this->table . " WHERE " . $where;
        return $this->execute($query);
        return true;
    }


    public static function getAll($where = null, $order = null, $limit = null)
    {
        return (new DatabaseCon("users"))->select($where, $order, $limit, "*")->fetchAll(PDO::FETCH_CLASS);
    }

    public static function getOne($id)
    {
        $user = (new DatabaseCon("users"))->select("ID = $id")->fetchObject();
        if (!$user) {
            return null;
        }

        return $user;
    }
}
