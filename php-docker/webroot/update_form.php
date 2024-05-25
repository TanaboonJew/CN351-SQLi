<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>update form</title>
</head>
<body>

<form action="person2.php" method="post">
    <label for="name">Name</label>
    <input type="text" name="name" id="name" value="<?= $person['name']; ?>" required><br>
    <label for="surname">Surname</label>
    <input type="text" name="surname" id="surname" value="<?= $person['surname']; ?>" required><br>
    <label for="email">Email</label>
    <input type="email" name="email" id="email" value="<?= $person['email']; ?>" required><br>
    <label for="phone">Phone: </label>
    <input type="tel" name="phone" id="phone" value="<?= $person['phone']; ?>" required><br>

    <input type="hidden" name="id" value="<?= $person['id']; ?>">
    <input type="hidden" name="update" value="1">

    <input type="submit" value="Update">
    <input type="reset" value="Reset">
</form>

</body>
</html>