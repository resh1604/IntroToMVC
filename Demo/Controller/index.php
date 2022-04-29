<?php

namespace Week5\Controller;

use Week5\DB\Database;

require '../Model/database.php';

class AppController {

    public function index(){
        $Db  = new Database("localhost",'root','','fault_reporting');
        $result =$Db->selectWithRows("SELECT * FROM  users");

        foreach ($result as $key=>$value) {
            $data[] = $value['username'].' Singh';
        }

        return $data;
     }
}



    

?>