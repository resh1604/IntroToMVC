<?php
include 'book.php';

class model
{
    public function getBookDetails()
    {
        return array(
            "xyz" => new book('xyz','A','Classic'),
            "mno" => new book('mno','B','Suspicious'),
        );
    }
    public function getBook($title)
    {
        $allbooks = $this->getBookDetails();
        return $allbooks[$title];
    }
}
?>