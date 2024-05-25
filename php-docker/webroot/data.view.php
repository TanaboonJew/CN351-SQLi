<?php
global $persons;

?>

<!doctype html>
<!-- View -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        table {
            margin-left: auto;
            margin-right: auto;
        }
        table, td, th {
            border: 1px solid black;
            border-collapse: collapse;
            padding: .5em;
            margin: auto; /* Changed 'margin auto' to 'margin: auto' */
        }
        .menu {
            text-align: center;
            margin-bottom: 20px;
        }

        .menu a {
            text-decoration: none;
            color: blue;
            margin: 0 10px;
        }

        .search-container {
            text-align: center;
            margin-bottom: 20px;
        }

        .search-container input[type=text] {
            padding: 10px;
            margin-top: 8px;
            font-size: 17px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            width: 50%;
        }

        .search-container button {
            padding: 10px 20px;
            margin-top: 8px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 17px;
        }

        .search-container button:hover {
            background-color: #0056b3;
        }

    </style>
    <title>Document</title>
</head>
<body>
<div class="menu">
    <h3><a href="person2.php">Home</a> | <a href="person_form.php">Add Person</a></h3>
</div>
<div class="search-container">
    <form method="GET" action="person2.php">
        <input type="text" name="search_query" placeholder="Search...">
        <button type="submit">Search</button>
    </form>
</div>

<?php
if (isset($_POST["message"])){
    $message = ""; // Add your message here
    echo "<p class=\"text-center\">$message</p>"; // Corrected closing tag for paragraph
}
?>

<table>
    <tr>
        <th>ID</th>
        <th>Full name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Update</th>
        <th>Delete</th>
    </tr>
    <?php
    foreach ($persons as $person) {
        echo
            "<tr>
                <td>" . $person["id"] . "</td>
                <td>" . $person["name"] . " " . $person["surname"] . "</td>
                <td>" . $person["email"] . "</td>
                <td>" . $person["phone"] . "</td>
                <td><a href='person2.php?update=" . $person['id'] . "'>Update</a></td>
                <td><a href='person2.php?delete=" . $person['id'] . "' onclick=\"return confirm('Are you sure you want to delete this record?')\">Delete</a></td>
            </tr>";
    }
    ?>
</table>

</body>
</html>
