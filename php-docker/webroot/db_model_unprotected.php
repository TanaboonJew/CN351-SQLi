<?php

// Replace these credentials with your actual database credentials
$server = "mariadb";
$username = "root";
$password = "secret";
$dbname = "my_db";

// Create connection
$conn = new mysqli($server, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to insert data into the database using prepared statements
function insert_data($name, $surname, $email, $phone)
{
    global $conn;

    // Prepare a prepared statement
    $stmt = $conn->prepare("INSERT INTO persons (name, surname, email, phone) VALUES (?, ?, ?, ?)");
    
    // Bind parameters to the prepared statement
    $stmt->bind_param("ssss", $name, $surname, $email, $phone);
    
    // Execute the prepared statement
    if ($stmt->execute()) {
        return true;
    } else {
        return false;
    }
}

// Function to retrieve all data from the database
function get_all_data()
{
    global $conn;

    $sql = "SELECT * FROM persons";
    $result = $conn->query($sql);

    $data = [];

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
    }

    return $data;
}

// Function to close the database connection
function close_connection()
{
    global $conn;
    $conn->close();
}

?>
