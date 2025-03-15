<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="../css/style.css"/>
    <title>Teachers</title>
</head>
<body>
    <h1>Teachers</h1>
    <? require_once __DIR__ . '/get_disciplines.php'; ?>
    <table>
        <tr>
            <th>ID</th>
            <th>ФИО</th>
            <th>Дата рождения</th>
            <th>Работает с</th>
        </tr>
        <?php require_once __DIR__ . '/get_teachers.php'; ?>
    </table>
</body>
</html>