<?php
include 'model/database.php';

class controller
{
    private $modelObject ;
    public $deleteQueryCall;
    public $showTableAfterDeletion;

    public function __construct()
    {
        $this->modelObject = new Database();
    }
    public function invoke()
    {
        //select query
        // $returnedData = $this->modelObject->selectQueryWithRows("SELECT * FROM users");
        // include 'view/displayuserdata.php';
        // die();
        
        //DELETE QUERY
        echo "o";
        $deleteQueryCall= $this->modelObject->DeleteQueryWithUserNo("DELETE FROM `users` WHERE name = 'pqr'");
        $showTableAfterDeletion = $this->modelObject->selectQueryWithRows("SELECT * FROM users");
        include 'view/displayuserdata.php';
         
    }
   public function __destruct()
   {
        mysqli_close($this->modelObject->conn);
   }


}
?>
