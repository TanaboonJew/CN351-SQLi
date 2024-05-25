<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo "Welcome to my website"?></title>
</head>
<body>
<!-- HTML Coment -->

<?php if (true): ?>
Hello!<br>
<?php elseif (false): ?>
Hi!<br>
<?php endif?>


<?php
    //Comment1
    #Comment2
    /* Comment
    long
    */

    //var

    $a1 = array('red', 'green', 'blue');
    $a1[] = 'a';

    $var1 = 1;
    $var2 = 'Text';
    $var_3 = 1.5;
    $Var_4 = 2.5;

    $a2[] = 1;
    $a2[] = 2;

    $a = 1;
    $a += 1;
    $a .= 2;


    $a4 = array(
      'id' => '6410615055',
      'name' => 'Tanaboon',
      'surname' => 'Jewriyavetch'
    );

    echo '<pre>';
    var_dump($a4);
    echo '</pre>';

    print_r($a4);

    echo $a4['id'].', '.$a4['name'].', '.$a4['surname'].'.<br>';

    echo $a2[0] + $a2[1]. "<br>\n";

    echo "$a1[0], $a1[1], $a1[2], $a1[3], <br>\n";
    echo "\$var1 = $var1";

    echo "This is my first php Website.<br>\n";
    echo 'Hello, World!<br>';

    echo 'true<br>';
    if (1==1)
        echo "true<br>\n";
    $i = 0;
    switch ($i) {
        case 0:
            echo "$i<br>\n";
            break;
        case 1:
            echo "$i<br>\n";
    }
?>
</body>
</html>