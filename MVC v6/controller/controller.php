<?php
namespace project\control;

use project\mod;
// use Twig\Environment;
// use Twig\Loader\FilesystemLoader;

class controller
{
    private $modelObject ;
    public $deleteQueryCall;
    public $showTableAfterDeletion;
    public $insertQuery;
    public $showTableAfterInsertion;
    public $loader;
    public $twig;

    public function __construct()
    {
        $this->modelObject = new mod\database();
        $this->loader = new \Twig\Loader\FilesystemLoader('view/templates');
        $this->twig = new \Twig\Environment($this->loader);
    }
    public function invoke()
    {
        //SELECT QUERY FOR DISPLAYING ALL USERS
        $returnedData = $this->modelObject->selectQueryWithRows("SELECT * FROM users");
        // echo "<pre>";
        // print_r($returnedData);
        //include 'view/allusersdetails.php';
        
        //return $this->twig->render('testuser.html', ['my_array' => $returnedData]);
        echo $this->twig->render('testuser.html', ['my_array' => $returnedData]);

        // echo $this->twig->render('testuser.html', array (
        //     'name' => 'dcjscjdsncsdnkc',
        //     'type' => 'jhgghfhfhfvh',
        //     'owner' => 'cccdsvsdxvsdsfwwf',
        
        //     'crew' => array (
        //         array('name' => 'Ellen', 'role' => 'officer', 'status' => 'alive'),
        //         array('name' => 'ash', 'role' => 'science', 'status' => 'not alive'),
        //         array('name' => 'parker', 'role' => 'engineer', 'status' => 'alive'),
        //     ),
        // ));

        
        // echo $twig->render('allusersdetails.php', array (
        //     'name' => 'dcjscjdsncsdnkc', ));


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

 




