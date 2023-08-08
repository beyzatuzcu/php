<?php
try {
    $dp=new PDO("mysql:host=localhost; dbname=udemy; charset=utf8", "root","");
    
}
catch (PDOExpception $e){
    echo $e->getMessage();
}
?>