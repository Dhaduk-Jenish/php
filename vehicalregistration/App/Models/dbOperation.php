<?php

namespace App\Models;
use PDO;

class dbOperation extends \Core\Model
{    
    public static function getAll($tableName)
    {

        try {
            $db = static::getDB();

            $stmt = $db->query("SELECT * FROM
                     $tableName ");

            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $results;

        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
    public static function getData($tableName, $columnId, $id)
    {
        $db = static::getDB();
        $query = "SELECT * FROM $tableName WHERE $columnId=$id";
        // echo $query.'<br>';
        $stmt = $db->query($query);


    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $results;

    }

    public static function insert($array, $tableName)
    {
        $db = static::getDB();
        
        $query = "INSERT INTO $tableName (";
        foreach ($array as $key => $value) {
            $query .= "$key, ";
        }
        $query = substr($query, 0, -2);
        $query .= ") VALUES (";
        foreach ($array as $key => $value) {
            $query .= "'$value', ";
        }
        $query = substr($query, 0, -2);
        $query .= ")";

        if($stmt = $db->exec($query)){

        }
        else{
            echo "<script>alert('dublicate Entry')</script>";
        }
        $lastId = $db->lastInsertId();
        return $lastId;
        // return $stmt;
    }

    public static function delete($tableName, $columnId, $id)     
    {
        $db = static::getDB();

        $query = "DELETE FROM $tableName WHERE $columnId = $id ";
        // echo $query;
        $stmt = $db->exec($query);

        return $stmt;
        
    }

    public static function update($tableName, $columnId, $id, $array)  
    {
        $db = static::getDB();
        
        $query = "UPDATE $tableName SET ";
        foreach ($array as $key => $value) {
            $query .= "$key = '$value', ";
        }
        $query = substr($query, 0, -2);

        $query .= " WHERE $columnId=$id";
        // echo $query;
        // die();
        $stmt = $db->exec($query);

        return $stmt;
    }
    public static function getJoinData($query)
    {
        try{
            $db = static::getDB();
            $stmt = $db->query($query);
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $results;
        }
        catch (PDOException $e){
            echo $e->getMessage();
        }
    }
}
?>