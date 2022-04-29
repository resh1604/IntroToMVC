<?php
include 'model/database.php';

class controller
{
    private $modelObject ;

    public function __construct()
    {
        $this->modelObject = new Database();
    }
    public function invoke()
    {
        $returnedData = $this->modelObject->selectQueryWithRows("SELECT * FROM users");
        include 'view/displayuserdata.php';
        
        // echo "<pre>";
        // print_r($returnedData);


        // $data = $this->modelObject->selectQueryWithRows("SELECT * FROM users");
        // echo "<pre>";
        // print_r($data);
        // exit;
       // $this->modelObject->displayallusers();
       // include 'view/displayuserdata.php';
        //die();
    }
   public function __destruct()
   {
       echo "destructor called";
   }


}
?>
