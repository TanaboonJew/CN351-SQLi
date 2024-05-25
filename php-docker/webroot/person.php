<!DOCTYPE html>
<html>
<head>
    <style>
        table {
            font-family: font-family: 'Helvetica', 'Arial', sans-serif;
            font-size: larger ;
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

<?php

include 'data.inc.php';

global $persons;

echo "<table>\n";
echo "<tr>\n";
echo "<th>ID</th>\n";
echo "<th>Name</th>\n";
echo "<th>EMAIL</th>\n";
echo "<th>PHONE</th>\n";
echo "</tr>\n";

foreach ($persons as $person) {
    echo "<tr>\n";
    echo "<td>" . $person['id'] . "</td>\n";
    echo "<td>" . $person['name'] . " ";
    echo $person['surname'] . "</td>\n";
    echo "<td>" . $person['email'] . "</td>\n";
    echo "<td>" . $person['phone'] . "</td>\n";
    echo "</tr>\n";
}

echo "</table>\n";
?>


</body>
</html>
