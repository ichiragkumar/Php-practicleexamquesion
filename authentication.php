<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN SYSTEM IN PHP</title>
</head>
<body>
    <h3>PHP Program to give authentication for Users</h3>
    <form method="POST">
        <label>username</label><br>
        <input type="text"name="username"><br>
        <label>password</label><br>
        <input type="text"name="password"><br>
        <input type="submit"name="submit">
    </form>
    <?php
    $connection=mysqli_connect("localhost"<"root","");
    $db=mysqli_select_db($connection,'database_name');
    if(isset($_POST['submit']))
    {
        $name=$_POST['username'];
        $pswd=$_POST['PASSWORD'];
        $query=mysqli_query($connection,"SELECT username,password FROM usertable WHERE username='$name'and password='$pswd'");
        if($query)
        {
            if(mysqli_num_rows($query)>0)
            {
            echo"Login Successfull";
            }
            else{
            echo"Login failed";
            }
        }
        
    }
    ?>
</body>
</html>