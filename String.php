<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Replacement Form</title>
</head>
<body>
    <h2> String Replacement Form </h2>
    <form method = "POST">
        <?php
        if ($_SERVER["REQUEST_METHOD"]=="POST")
        {
            $original = $_POST["originalString"];
            $search = $_POST["searchString"];
            $replace = $_POST["replaceString"];
            echo "<h3>Result:</h3>
            Original String : $original<br>
            String to Replace : $search<br>
            Replacement String : $replace<br>
            Result String : ".str_replace($search,$replace,$orginal);
        }
        ?>
        <br><br>
        Original String : <input type = "text" name = "originalString"required><br>
        String to Replace : <input type = "text" name = "searchString"required><br>
        Replacement String : <input type = "text" name = "replacelString"required><br>
        <input type = "submit" name = "submit" value = "replace">

    </form>
</body>
</html>