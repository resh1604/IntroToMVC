<?php
$page = 'home';
if(isset($_GET['page']))
{
    $page = $_GET['page'];
}
//echo $page;
include 'Model/Mtest.php';

if($page == 'home')
{
    include 'View/Vtest1.php';
}
elseif($page == 'about')
{
    include 'View/Vtest2.php';
}
else
{
    include 'View/Vtest3.php';
}
?>