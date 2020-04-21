<?php

try{
    $db = new PDO("mysql:host=localhost;dbname=newsfeed", "root", "");
} catch (Exception $e){
    echo $e->getMessage();
}

?>