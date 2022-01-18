<?php
require('connect.php');
$id     = $_GET['id'];
$result = $database->delete($id);
if($result){
    header('location : view.php');
}else{
    echo 'failed delete';
}
?>