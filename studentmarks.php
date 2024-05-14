<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Studnt Markscard</title>
    <style>
        table{
            width : 50%;
            border-collapse : collapse;
            margin : 20px;
        }
        th,td{
            border : 1px solid #f4f4f4f4;
            padding : 8px;
            text-align : left;
        }
        th{
            background-color : #333;
        }
    </style>
</head>
<body>
    <?php
    $servername="localhost";
    $username= "root";
    $password="";
    $dbname="Aachal";
    $connection=new mysqli($servername,$username,$password,$dbname);
    if($connection->connect_error)
    {
        die("Connection failed:".$Connection->connect_error);
    }
    $sql="select * from Gupta";
    $result=$connection->query($sql);
    if($result->num_rows>0)
    {
        echo"<table>";
          echo"<tr><th>roll_number</th><th>name</th><th>suject</th><th>marks</th></tr>";
          while($row=$result->fetch_assoc())
          {
            echo"<tr>";
            echo"<td>".$row["roll_number"]."</td>";
            echo"<td>".$row["name"]."</td>";
            echo"<td>".$row["subject"]."</td>";
            echo"<td>".$row["marks"]."</td>";
          }
        echo"</table>";  
    }
    else
    {
        echo"No record found";
    }
    ?>
</body>
</html>