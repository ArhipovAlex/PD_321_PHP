<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="https://www.phptutorial.net/app/css/style.css">
    <title>Upload Multiple Files</title>
</head>
<body>
    <main>
        <form enctype="multipart/form-data" action="upload.php" method="post">
            <div>
                <label for="files">Выберите файлы для загрузки:</label>
                <input type="file" name="files[]" id="files" multiple required/>
            </div>
            <div>
                <input type="submit" value="Upload"/>
            </div>
        </form>
    </main>
</body>
</html>