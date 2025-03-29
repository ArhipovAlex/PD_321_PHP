<?php
    require_once __DIR__."/connection.php";
    $query = "SELECT * FROM Teachers WHERE teacher_id={$_REQUEST['id']}";
    $result = sqlsrv_query($connection, $query);
    if($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC))
    {
    echo "<h1>Update Teacher</h1>";
    echo "<form method=\"post\" action=\"teacher_update.php\">";
        echo "<input type=\"text\" hidden id=\"teacher_id\" name=\"teacher_id\" value=\"{$row['teacher_id']}\">";
        echo "<input type=\"text\" disabled id=\"teacher_last_name\" name=\"teacher_last_name\" placeholder=\"Фамилия\" value=\"{$row['last_name']}\">";
        echo "<input type=\"text\" disabled id=\"teacher_first_name\" name=\"teacher_first_name\" placeholder=\"Имя\" value=\"{$row['first_name']}\">";
        echo "<input type=\"text\" disabled id=\"teacher_middle_name\" name=\"teacher_middle_name\" placeholder=\"Отчество\" value=\"{$row['middle_name']}\">";
        echo "<input type=\"date\" disabled id=\"birth_date\" name=\"birth_date\" placeholder=\"Дата рождения\" value=\"{$row['birth_date']->format('Y-m-d')}\">";
        echo "<input type=\"date\" required id=\"work_since\" name=\"work_since\" placeholder=\"Work Experience\" value=\"{$row['work_since']->format('Y-m-d')}\">";
    echo "<input type=\"submit\" value=\"Submit\">";
    echo '</form>';
    echo '<pre>';
    print_r($row);    
    echo '</pre>';
    }
    sqlsrv_close($connection);
?>