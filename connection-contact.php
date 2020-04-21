<?php

try{
    $db = new PDO("mysql:host=localhost;dbname=contact", "root", "");
} catch (Exception $e){
    echo $e->getMessage();
}

?>