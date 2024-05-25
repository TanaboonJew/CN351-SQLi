<!DOCTYPE html>
<html>
<head>
    <title>Output</title>
</head>
<body>
<h2>Output</h2>

<?php

$month = array(
    1 => "ม.ค.",
    2 => "ก.พ.",
    3 => "มี.ค.",
    4 => "เม.ย.",
    5 => "พ.ค.",
    6 => "มิ.ย.",
    7 => "ก.ค.",
    8 => "ส.ค.",
    9 => "ก.ย.",
    10 => "ต.ค.",
    11 => "พ.ย.",
    12 => "ธ.ค."
);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<p><strong>ชื่อ:</strong> " . $_POST["fname"] . "</p>";
    echo "<p><strong>นามสกุล:</strong> " . $_POST["lname"] . "</p>";
    echo "<p><strong>เพศ:</strong> " . $_POST["gender"] . "</p>";
    echo "<p><strong>วัน/เดือน/ปีเกิด:</strong> " . $_POST["birth_day"] . "/" . $month[$_POST["birth_month"][1]] . "/" . $_POST["birth_year"] . "</p>";
    echo "<p><strong>อาชีพ:</strong> " . $_POST["occupation"] . "</p>";
    echo "<p><strong>ที่อยู่ (ตามบัตรประชาชน):</strong> " . $_POST["address"] . "</p>";
    echo "<p><strong>จังหวัด:</strong> " . $_POST["province"] . "</p>";
    echo "<p><strong>เบอร์โทร:</strong> " . $_POST["tel"] . "</p>";
} else {
    echo "<p>No data submitted.</p>";
}
?>

</body>
</html>
