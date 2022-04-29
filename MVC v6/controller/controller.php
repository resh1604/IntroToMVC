<?php
include 'model/database.php';

class controller
{
    private $modelObject ;
    public $deleteQueryCall;
    public $showTableAfterDeletion;
    public $insertQuery;
    public $showTableAfterInsertion;

    public function __construct()
    {
        $this->modelObject = new Database();
    }
    public function invoke()
    {
        //SELECT QUERY FOR DISPLAYING ALL USERS
        $returnedData = $this->modelObject->selectQueryWithRows("SELECT * FROM users");
        include 'view/allusersdetails.php';
        die();

        //DELETE QUERY
        // $deleteQueryCall= $this->modelObject->DeleteQueryWithUserNo("DELETE FROM `users` WHERE name = 'pqr'");
        // $showTableAfterDeletion = $this->modelObject->selectQueryWithRows("SELECT * FROM users");
        // include 'view/displayuserdata.php';

        
        // $insertQuery= $this->modelObject->DeleteQueryWithUserNo("INSERT into users VALUES ('6','stu','stu@stu','stu','6789012345')");
        // $showTableAfterInsertion = $this->modelObject->selectQueryWithRows("SELECT * FROM users");
        // include 'view/displayuserdata.php';
    }
   public function __destruct()
   {
        mysqli_close($this->modelObject->conn);
   }


}
?>
