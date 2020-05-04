<?php

try{
    $db = new PDO("mysql:host=localhost;dbname=Netmatters", "root", "");
} catch (Exception $e){
    echo $e->getMessage();
}

?>