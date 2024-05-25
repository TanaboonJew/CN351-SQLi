<!DOCTYPE html>
<html>
<head>
    <title>Add Person (Prepared Statement)</title>
    <script>
        function validateForm() {
            var name = document.getElementById("name").value;
            var surname = document.getElementById("surname").value;
            var email = document.getElementById("email").value;
            var phone = document.getElementById("phone").value;

            if (name === '' || surname === '' || email === '' || phone === '') {
                alert("Please fill out all fields.");
                return false; // Prevent form submission
            }
        }
    </script>
</head>
<body>
<h2>Add Person</h2>
<form method="POST" action="" onsubmit="return validateForm()">
    <label for="name">Name:</label><br>
    <input type="text" id="name" name="name"><br>
    <label for="surname">Surname:</label><br>
    <input type="text" id="surname" name="surname"><br>
    <label for="email">Email:</label><br>
    <input type="text" id="email" name="email"><br>
    <label for="phone">Phone:</label><br>
    <input type="text" id="phone" name="phone"><br>
    <input type="submit" value="Add Person" name="submit">
</form>

<?php
if(isset($_POST['submit'])) {
    $server = 'mariadb';
    $username = 'root';
    $password = 'secret';
    $database = 'my_db';

    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $link = mysqli_connect($server, $username, $password, $database);

    $query = "INSERT INTO persons (name, surname, email, phone) VALUES (?, ?, ?, ?)";
    $stmt = mysqli_prepare($link, $query);
    mysqli_stmt_bind_param($stmt, "ssss", $name, $surname, $email, $phone);
    $result = mysqli_stmt_execute($stmt);

    if($result) {
        echo "<p>Person added successfully.</p>";
        echo "<p>Person added successfully.</p>";
    } else {
        echo "<p>Error: " . mysqli_error($link) . "</p>";
    }

    mysqli_close($link);
}
?>
</body>
</html>
