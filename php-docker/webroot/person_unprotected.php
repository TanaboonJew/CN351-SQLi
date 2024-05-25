<?php
require_once "db_model_unprotected.php";

if (isset($_POST["insert"])) {
    $name = $_POST["name"] ?? "";
    $surname = $_POST["surname"] ?? "";
    $email = $_POST["email"] ?? "";
    $phone = $_POST["phone"] ?? "";
    
    if (insert_data($name, $surname, $email, $phone)) {
        $message = "Data inserted successfully";
    } else {
        $message = "Error inserting data";
    }
}
?>
