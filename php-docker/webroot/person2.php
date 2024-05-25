<!DOCTYPE html>
<html>
<head>
    <style>
        html {
            font-family: 'Helvetica', 'Arial', sans-serif;
        }
        table {
            font-size: larger;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }

    </style>
</head>
<body>


<!-- Controller -->
<?php
require_once "db_model.php";

if (isset($_POST["insert"]) ) { //check if insert data
    $name = $_POST["name"] ?? "";
    $surname = $_POST["surname"] ?? "";
    $email = $_POST["email"] ?? "";
    $phone = $_POST["phone"] ?? "";
    if (insert_data_secure($name, $surname, $email,$phone)) {
        $message = "Data inserted successfully";
    } else {
        $message = "Error inserting data";
    }
} elseif (isset($_POST["update"])) {
    $id = $_POST['id'];
    $name = $_POST["name"];
    $surname = $_POST["surname"] ?? "";
    $email = $_POST["email"] ?? "";
    $phone = $_POST["phone"] ?? "";
    if (update_data($id, $name, $surname, $email,$phone)) {
        $message = "Data update successfully";
    } else {
        $message = "Error updating data";
    }
} elseif (isset($_GET['update'])) {
    $id = $_GET['update'];
    $person = get_data($id);
    require_once 'update_form.php';
} elseif (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    if (delete_data($id)) {
        $message = "Data deleted successfully";
    } else {
        $message = "Error deleting data";
    }
} elseif(isset($_GET['search_query'])) {
    $search_query = $_GET['search_query'];
    $persons = get_filtered_data($search_query);
    require_once 'data.view.php';
} else {
    // If no search query, proceed as usual
    $persons = get_all_data();
    require_once 'data.view.php';
}


?>
