<?php
error_reporting(0);

class Model
{
        public function __construct(public $connection = null)
        {


                $this->connection = new mysqli("localhost", "root", "", "php");
                // if ($this->connection) {
                //         echo "connection success";
                // }
        }




        function login($uname, $pass)
        {
                $SQL = "SELECT * FROM users WHERE password='$pass' AND (username='$uname' OR mobileno='$uname' OR email='$uname')";
                $SQLEx = $this->connection->query($SQL);
                // echo "<pre>";
                // print_r($SQLEx);

                if ($SQLEx->num_rows > 0) {
                        $row = $SQLEx->fetch_object();
                        // echo "<pre>";
                        // print_r($row);
                        $Res['Code'] = 1;
                        $Res['Data'] = $row;
                        $Res['Msg'] = "Success";
                } else {
                        $Res['Code'] = 0;
                        $Res['Data'] = 0;
                        $Res['Msg'] = "try again";
                }
                return $Res;
        }




        function select($users, $whr = "")
        {
                $SQL = "SELECT * FROM $users";
                if ($whr != "") {
                        $SQL .= " WHERE ";
                        foreach ($whr as $key => $value) {
                                $SQL .= " $key = '$value' AND";
                        }
                        $SQL = rtrim($SQL, "AND");
                }
                $SQLEx = $this->connection->query($SQL);

                if ($SQLEx->num_rows > 0) {
                        while ($row = $SQLEx->fetch_object()) {
                                $data[] = $row;
                        }

                        $Res['Code'] = 1;
                        $Res['Data'] = $data;
                        $Res['Msg'] = "Success";
                } else {
                        $Res['Code'] = 0;
                        $Res['Data'] = 0;
                        $Res['Msg'] = "try again";
                }
                return $Res;
        }



        function insert($users, $data)
        {
                // echo "<pre>";
                //     print_r(  $data);
                //     $clms = array_keys ($data);
                //     print_r($clms);
                //     print_r($data);
                $clms = implode(",", array_keys($data));
                $vals = implode("','", $data);
                //     print_r($clms);
                $SQL = " INSERT INTO $users($clms) VALUES('$vals')";
                // echo $SQL;
                $SQLEx = $this->connection->query($SQL);
                // print_r($SQLEx);
                if ($SQLEx > 0) {
                        $Res['Data'] = 1;
                        $Res['Code'] = 1;
                        $Res['Msg'] = "Success";
                } else {
                        $Res['Data'] = 0;
                        $Res['Code'] = 0;
                        $Res['Msg'] = "Try Again";
                }
                return $Res;
        }

        function update($users, $data, $where)
        {
                $SQL = "update $users set  ";
                foreach ($data as $key => $value) {
                        $SQL .= "key = '$value' ,";
                }
                echo $SQL;
                $SQL = rtrim($SQL, ",");
                $SQL .= " WHERE";
                foreach ($where as $key => $value) {
                        $SQL .= " $key = '$value ' AND";
                }
                $SQL = rtrim($SQL, "AND");
                echo $SQL;
                $sqlex = $this->connection->query($SQL);
                if ($sqlex > 0) {
                        $Res['Data'] = 1;
                        $Res['Code'] = 1;
                        $Res['Msg'] = "Success";
                } else {
                        $Res['Data'] = 0;
                        $Res['Code'] = 0;
                        $Res['Msg'] = "Try Again";
                }
                return $Res;
        }




        function delete($users, $whr = "")
        {
                $SQL = "DELETE FROM $users ";
                if ($whr !== "") {
                        // echo "called";
                        $SQL .= " WHERE ";
                        foreach ($whr as $key => $value) {
                                $SQL .= " $key = '$value' AND";
                        }
                        $SQL = rtrim($SQL, "AND");
                        // echo $SQL;
                        $SQLEx = $this->connection->query($SQL);
                        // echo "$SQLEx";


                        if ($SQLEx > 0) {
                                $Res['Data'] = "1";
                                $Res['Code'] = "1";
                                $Res['Msg'] = "Success";
                        } else {
                                $Res['Data'] = "0";
                                $Res['Code '] = "0";
                                $Res['Msg'] = "Try Again";
                        }
                        return $Res;
                }
        }
}
