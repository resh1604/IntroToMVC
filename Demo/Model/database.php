<?php
namespace Week5\DB;

class Database {

    private $conn = false ;
   
   
    public function __construct(string $server, string $username, string $password, string $db_name)
   {
        $this->conn = mysqli_connect($server,$username,$password,$db_name);

        if(!$this->conn){
            die("ERROR: Could not connect. " . mysqli_connect_error());
        }

   }
   public function selectWithRows(string $query){

        $result  = mysqli_query($this->conn,$query);

        if(mysqli_num_rows($result)){
               while($row  = mysqli_fetch_assoc($result)){
                   $data[] = $row;
               }
               return $data;
            
        } else {
            return [];
        }
    }
}
?>