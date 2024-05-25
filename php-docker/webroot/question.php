<!DOCTYPE html>
<html>
<head>
    <title>Question</title>
</head>
<body>
<h2>Question</h2>
<form method="POST" action="output.php">
    <label for="fname">ชื่อ:</label><br>
    <input type="text" id="fname" name="fname"><br><br>

    <label for="lname">นามสกุล:</label><br>
    <input type="text" id="lname" name="lname"><br><br>

    <label>เพศ:</label><br>
    <input type="radio" id="male" name="gender" value="male">
    <label for="male">Male</label><br>
    <input type="radio" id="female" name="gender" value="female">
    <label for="female">Female</label><br><br>

    <label for="birthdate">วัน/เดือน/ปีเกิด:</label><br>
    <select id="birth_day" name="birth_day">
        <?php
        $maxDays = 31;
        for ($day = 1; $day <= $maxDays; $day++) {
            echo "<option value='$day'>$day</option>";
        }
        ?>
    </select>
    <select id="birth_month" name="birth_month">
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
            for ($i = 1; $i <= 12; $i++) {
                echo "<option value=$1>$month[$i]</option>";
            }

        ?>
    </select>
    <select id="birth_year" name="birth_year">
        <?php
        $currentYear = date("Y") + 543;
        for ($year = $currentYear; $year >= $currentYear - 50; $year--) {
            echo "<option value='$year'>$year</option>";
        }
        ?>
    </select><br><br>

    <label for="occupation">อาชีพ:</label><br>
    <select id="occupation" name="occupation">
        <option value="นักศึกษา">นักศึกษา</option>
        <option value="พนักงานบริษัท">พนักงานบริษัท</option>
        <option value="รับราชการ">รับราชการ</option>
        <option value="ธุรกิจส่วนตัว">ธุรกิจส่วนตัว</option>
        <option value="อื่นๆ">อื่นๆ</option>
    </select><br><br>

    <label for="address">ที่อยู่ (ตามบัตรประชาชน):</label><br>
    <textarea id="address" name="address" rows="4" cols="50"></textarea><br><br>

    <label for="province">จังหวัด:</label><br>
    <input type="text" id="province" name="province"><br><br>

    <label for="tel">เบอร์โทร:</label><br>
    <input type="text" id="tel" name="tel"><br><br>

    <input type="submit" value="ส่งข้อมูล" name="submit">
    <input type="reset" value="Reset">
</form>
</body>
</html>
