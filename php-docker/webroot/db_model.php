<?php
// Model

$server = "mariadb"; //localhost
$username = "root";
$password = "secret";
$database = "my_db";

function db_connect($server, $username, $password, $database)
{
    $link = mysqli_connect($server, $username, $password, $database);
    if ( ! $link) {
        die("Connection failed: " . mysqli_connect_error());
    }
    return $link;
}
$link = db_connect($server, $username, $password, $database);

function get_all_data()
{
    global $link;
    $query = "select * from persons order by id desc";
    $result = mysqli_query($link, $query);
    if (! $result) {
        die("Query failed: " . mysqli_error($link));
    }
    $persons = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $persons;
}

function insert_data_secure($name, $surname, $email, $phone){
    global $link;
    //Create a parameters statement
    $stmt = mysqli_stmt_init($link);
    $query = "INSERT INTO persons (name, surname, email, phone) VALUE(?,?,?,?)";
    mysqli_stmt_prepare($stmt, $query);
    //bind parameters for makers
    mysqli_stmt_bind_param($stmt, "ssss", $name, $surname, $email, $phone);
    //execute query
    return mysqli_stmt_execute($stmt);

}

function insert_data($name, $surname, $email, $phone)
{
    global $link;
    $query = "INSERT INTO persons (name, surname, email, phone) VALUES ('$name','$surname', '$email', '$phone')";
    $result = mysqli_query($link, $query);
    if(! $result) {
        die("Query failed: " . mysqli_error($link));
    }
    return $result;
}

function get_data($id)
{
    global $link;
    //Create a parameters statement
    $stmt = mysqli_stmt_init($link);
    $query = "SELECT * FROM persons WHERE id = ?";
    mysqli_stmt_prepare($stmt, $query);
    mysqli_stmt_bind_param($stmt, 'i', $id);

    // exe query
    if ( ! mysqli_stmt_execute($stmt) ) {
        die("Query failed: " . mysqli_error($link));
    }

    //get result
    $result = mysqli_stmt_get_result($stmt);
    $person = mysqli_fetch_assoc($result);
    mysqli_stmt_close($stmt);
    return $person;
}

function update_data($id, $name, $surname, $email, $phone)
{
    global $link;
    $stmt = mysqli_stmt_init($link);
    $query = "UPDATE persons SET name=?, surname=?, email=?, phone=? WHERE id=?";
    mysqli_stmt_prepare($stmt, $query);
    mysqli_stmt_bind_param($stmt, 'ssssi', $name, $surname, $email, $phone, $id);
    return mysqli_stmt_execute($stmt);
}

function delete_data($id) {
    global $link;
    $query = "DELETE FROM persons WHERE id = ?";
    $stmt = mysqli_stmt_init($link);
    mysqli_stmt_prepare($stmt, $query);
    mysqli_stmt_bind_param($stmt, "i", $id);
    return mysqli_stmt_execute($stmt);
}

function get_filtered_data($search_query) {
    global $link;
    $query = "SELECT * FROM persons WHERE name LIKE '%$search_query%' OR surname LIKE '%$search_query%' OR email LIKE '%$search_query%' OR phone LIKE '%$search_query%' ORDER BY id DESC";
    $result = mysqli_query($link, $query);
    if (! $result) {
        die("Query failed: " . mysqli_error($link));
    }
    $persons = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $persons;
}


?>