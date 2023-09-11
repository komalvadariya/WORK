<?php

date_default_timezone_set('Asia/Kolkata');


class Model
{
    public $connection = "";
    
    public function __construct() {
        
        try {
           
            $this->connection = new mysqli("localhost","root","","PHP");
        } catch (\Throwable $th) {
            
            if (!file_exists("log")) {
                mkdir("log");
            }
            $ErrorMsg =  PHP_EOL."Error Msg >>> ". $th->getMessage().PHP_EOL;
            $ErrorMsg .=  "Error dateTime >>> ". date("d-m-Y H:i:s A").PHP_EOL;
            $fileName = date('d_m_Y')."_Error_log.txt";
            file_put_contents("log/".$fileName,$ErrorMsg,FILE_APPEND);
            echo "<h1>".$th->getMessage()."</h1>";
            exit;
        }
      
    }
    function login()
    {
        $SQL = "";
    }
    function select()
    {
        $SQL = "";
    }
    function insert($tbl, $data)
    {
      
        $clms = implode(",",array_keys($data)) ;
        $vals = implode("','",$data) ;
       
      echo  $SQL = "INSERT INTO $tbl($clms) VALUES('$vals')";
      
        $SQLEx = $this->connection->query($SQL) ;
        
        if ($SQLEx > 0) {
            $Res['Code'] =1 ;
            $Res['Date'] =1 ;
            $Res['Msg'] ="Success" ;
        } else {
            $Res['Code'] =0 ;
            $Res['Date'] =0 ;
            $Res['Msg'] ="Try again" ;
        }
        return $Res;
    }
    function update()
    {
        $SQL = "";
    }
    function delete()
    {
        $SQL = "";
    }
}
