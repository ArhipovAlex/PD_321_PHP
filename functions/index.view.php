<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title><?=$title;?></title>
</head>
<body>
    <h1><?=$title;?></h1>

    <?php
        [$a,$b]=[2,3];
        print_values($a,$b);
        exchange($a,$b);
        print_values($a,$b);

        echo sum_values(3,5,8,13,21);
        echo '<br />';
        for($i = 1;$i<10;$i++) {
          echo Fibonacci($i),'<br />';
        }
        echo dec_to_bin(7);
        echo '<br />';
        echo dec_to_hex(26);
    ?>
</body>
</html>