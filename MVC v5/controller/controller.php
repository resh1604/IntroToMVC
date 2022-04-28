<?php

include 'model/model.php';

class controller
{
    public $model;
    public function __construct()
    {
        $this->model = new model();
    }    
    public function invoke()
    {
        if(!isset($_GET['book']))
        {
            $books = $this->model->getBookDetails();
            include 'view/booklist.php';
            
        }
        else
        {
            $book = $this->model->getBook($_GET['book']);
            include 'view/viewbook.php';

        }
    }

}



?>