<?php

class Model
{
    const TABLE = '';

    // to use select query in mySQL here
    static function all($limit = 0)
    {

        $table =  static::TABLE;
        $qry = "SELECT * FROM $table ORDER BY `id` DESC";

        if ($limit > 0) {
            $qry .= " LIMIT $limit";
        }

        global $db;
        $result = $db->query($qry);
        $table = $result->fetch_all(MYSQLI_ASSOC);
        return $table;

    }

    static function show(int $id)
    {

        $table =  static::TABLE;
        $qry = "SELECT * FROM $table WHERE `id` = '$id';";


        global $db;
        $result = $db->query($qry);
        $table = $result->fetch_assoc();
        return $table;
    }

    static function count()
    {
        $table =  static::TABLE;

        global $db;
        $qry = "SELECT COUNT(*) as total FROM $table";
        $result = $db->query($qry);
        $row = $result->fetch_assoc();
        return $row['total'];
    }
}
