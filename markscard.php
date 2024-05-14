<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Marks Card</title>
    <style>
        table{
            width : 50%;
            border-collapse : collapse;
            margin : 20px;
        }
        th,td{
            border : 1px solid #ddd;
            padding : 8px;
            text-align: left;
        }
        th{
            background-color:#f2f2f2;
        }
    </style>
</head>
<body>
    <?php
    $sername="localhost";
    $username="root";
    $password=" ";
    $dbname="student";
    $connection=new mysqli($sername,$username,$password,$dbname);
    if($connection->connect_error)
    {
        die("connction failed : ".$connection->connect_error);
    }
    $sql="select * from student_marks";
    $result=$connction->query($sql);
    if($result->num_rows>0)
    {
        echo"<table>";
            echo"<td><th>roll number</th><th>name</th><th>subject</th><th>marks</th></td>";
            while($row=$result->fetch_assoc())
            {
                echo"<tr>";
                echo"<td>".$row["roll_number"]."</td>";
                echo"<td>".$row["name"]."</td>";
                echo"<td>".$row["subject"]."</td>";
                echo"<td>".$row["marks"]."</td>";
                echo"</tr>";
            }
            
        echo"</table>";

    }
    else{
        echo"No records found";
    }
    $connection->close();
    ?>
</body>
</html>