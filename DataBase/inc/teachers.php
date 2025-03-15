<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="../css/style.css"/>
    <title>Teachers</title>
</head>
<body>
    <h1>Teachers</h1>

    <label for=\"discipline_select\">Преподаваемая дисциплина</label>
	<select onchange="getTeachersForDiscipline(this.value)" name=\"discipline\" id=\"discipline_select\">
    <option value=0 style="text-align:center;">-- Все дисциплины --</option>
    <? require_once __DIR__ . '/get_disciplines.php'; ?>
    </select>

    <table id="table-teachers">
        <tr>
            <th>ID</th>
            <th>ФИО</th>
            <th>Дата рождения</th>
            <th>Опыт работы</th>
        </tr>
        <?php require_once __DIR__ . '/get_teachers.php'; ?>
    </table>
    <script>
        function getTeachersForDiscipline(id)
        {
            if(id>0){
                let request = new XMLHttpRequest();
                request.onreadystatechange = function () {
                    if(this.readyState == 4 && this.status == 200)
                        document.getElementById("table-teachers").innerHTML = this.responseText;
                };
                request.open("GET","get_teachers_for_discipline.php?id="+id,true);
                request.send();
            }
        }
    </script>
</body>
</html>