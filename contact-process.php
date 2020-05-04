<?php

$firstName = $_POST["firstname"];
$lastName = $_POST["lastname"];
$phone = $_POST["phone"];
$message = $_POST["message"];

include $_SERVER['DOCUMENT_ROOT'].'/db-connection.php';
if ($db == NULL){}
else{
    if ($_SERVER["REQUEST_METHOD"] == "POST"){

        //Error Checking
        $firstName = test_input($_POST["firstname"]);
        if (!preg_match("/^[a-zA-Z]*$/", $firstName)){
            header("Location: ../contact.php?valid=firstError");
            exit();
        }

        $lastName = test_input($_POST["lastname"]);
        if (!preg_match("/^[a-zA-Z]*$/", $lastName)){
            header("Location: ../contact.php?valid=lastError");
            exit();
        }

        $phone = test_input($_POST["phone"]);
        if (!preg_match("/^[0-9]*$/", $phone)){
            header("Location: ../contact.php?valid=phoneError");
            exit();
        }

        $message = test_input($_POST["message"]);
        if (!preg_match("/^[a-zA-Z0-9\. \-]*$/", $message)){
            header("Location: ../contact.php?valid=messageError");
            exit();
        }

        if (empty($_POST["phone"])){
            $phone = 0;
        }

        //Success
        $statement = $db->prepare("INSERT INTO submissions (First, Last, Phone, Message) VALUES (?, ?, ?, ?)");
        $statement->bindParam(1, $firstName);
        $statement->bindParam(2, $lastName);
        $statement->bindParam(3, $phone);
        $statement->bindParam(4, $message);
        $statement->execute();
        header("Location: ../contact.php?valid=success");
        exit();

    }
}
function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}










?>