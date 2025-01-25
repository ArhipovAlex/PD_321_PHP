<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    
    <meta charset="utf-8" />
	<title><?php echo $title;?></title>
</head>
<body>
    <h1><?php echo 'Hello PHP on IIS' ?></h1>
    <h2><?php echo $for;?></h2>
    <p>Содержимое страницы</p>
    <?php 

        //for($i=0;$i<10;$i++)
        //{
        //    echo '<div style="display:flex;justify-content:space-between;">';
        //    echo 'div style="width:50px">';
        //    echo $i;
        //    echo '</div';
        //    echo '</div';
        //}
        if(true)
        {
            define('PI', '3.14');
            echo NAME;
            echo '<br>';
            echo PI;
            echo '<br>';
            define(PREFIX . '_1', '1');
            define(PREFIX . '_2', '2');
            define(PREFIX . '_3', '3');

            echo OPTION_1;
        }
        echo '<br>';
        echo var_dump('3.14');
        echo '<br>';
        echo 'PHP_FLOAT_MAX: ',PHP_FLOAT_MAX;
        echo '<br>';
        echo 'PHP_FLOAT_MIN: ',PHP_FLOAT_MIN;
        echo '<br>';
        echo 'PHP_FLOAT_DIG: ',PHP_FLOAT_DIG;
        echo '<br>';
        echo 'PHP_FLOAT_EPSILON: ',PHP_FLOAT_EPSILON;
        echo '<br>';
        $str="123";
        $num=123;
        echo var_dump($str+(string)$num);
    ?>
    <h3>Heredoc-строка:</h3>
    <?php 
    echo $heredoc_string;
    echo '<br>';
    echo $nowdoc_string;
    echo '<br>';
    echo $escape_sequences;
    ?>
</body>
</html>