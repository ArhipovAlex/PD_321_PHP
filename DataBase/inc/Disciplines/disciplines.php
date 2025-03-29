<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="../../css/style.css"/>
    <title>Disciplines</title>
</head>
<body>
    <h1>Disciplines</h1>

    <label for=\"discipline_select\">Преподаватели</label>
	<select onchange="getDisciplinesForTeacher(this.value)" name=\"discipline\" id=\"discipline_select\">
    <option value=0 style="text-align:center;">-- Все преподаватели --</option>
    <? require_once __DIR__ . '/get_select_teacher.php'; ?>
    </select>

    <table>
        <thead>
        <tr>
            <th>ID</th>
            <th>Наименование</th>
            <th>Количество часов</th>
        </tr>
        </thead>
        <tbody id="table-disciplines">
        <?php require_once __DIR__ . '/get_disciplines_for_table.php'; ?>
        <tr>
            <td align="center">
                @Model.Count()
            </td>
        </tr>
        </tbody>
    </table>

    <script>
        function getDisciplinesForTeacher(id)
        {
            //if(id>0){
                let request = new XMLHttpRequest();
                request.onreadystatechange = function () {
                    if(this.readyState == 4 && this.status == 200)
                        document.getElementById("table-disciplines").innerHTML = this.responseText;
                };
                request.open("GET","../Teachers/get_disciplines_for_teacher.php?id="+id,true);
                request.send();
            //}
        }

    </script>
</body>
</html>