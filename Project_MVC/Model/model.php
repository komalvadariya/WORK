<?php

class model
{
    public $db = "";
    public function __construct()
    {
        $this->db = new mysqli("localhost", "root", "", "php");
    }

    function insert($tbl, $dt)
    {
        $key = implode(",", array_keys($dt));
        $val = implode("','", $dt);

        print_r($key);
        print_r($val);

        echo "<br>";
        $sql = "insert into $tbl($key) values('$val')";
        echo $sql;

        $sqlexe = $this->db->query($sql);

        return $sqlexe;
    }

    function select($table, $condition = "")
    {
        $sql = "select * from $table";
        if ($condition != "") {

            $sql .= " where id = $condition";
        }

        // echo $sql;
        $koipan = $this->db->query($sql);

        // print_r($koipan);
        if ($koipan->num_rows > 0) {
            while ($rows = $koipan->fetch_object()) {
                $data[] = $rows;
            }
        }

        return $data;
    }

    function delete($tbl, $where)
    {
        $sql = "delete from $tbl where id=$where";
        // echo $sql;
        $sqlexe = $this->db->query($sql);
        return $sqlexe;
    }

    function update($table, $data, $condition)
    {

        $sql = "update $table set ";
        foreach ($data as $key => $value) {
            $sql .= " $key='$value',";
        }
        $sql = rtrim($sql, ",");
        foreach ($condition as $key => $value) {
            $sql .= "where $key = $value";
        }

        $sqlexe = $this->db->query($sql);
        return $sqlexe;
    }
}
