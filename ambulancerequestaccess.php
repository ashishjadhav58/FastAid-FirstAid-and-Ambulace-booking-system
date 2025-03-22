<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>adminaccess-contact</title>
    <link rel="icon" type="image/jpg" href="logo.jpg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        table {
            border:2px solid black;
            collapse:collapse;
            box-shadow:2px 2px 16px 2px black;
        }
        th {
            border: 2px solid #666;
            padding:10px;
            color:black;
            background-color:rgba(22, 151, 108, 0.656);
        }
        td{
            border: 2px solid #666;
            padding:10px;
            background-color:#9736168d;
        }
        .col-sm-3{
            text-align:center;
        }
        a{
            text-decoration:none;
            color:white;
            background-color:green;
            padding:15px;
            border-radius:15px;
        }
        a:hover{
            color:green;
            border:1px solid green;
            background-color:white;
        }
        .updatedelete{
            padding: 10px;
            border:1px solid rgba(43, 43, 203, 0.863);
            color:white;
            background-color:rgba(43, 43, 203, 0.863);
        }
        .updatedelete:hover{
            padding:10px;
            border:1px solid rgba(43, 43, 203, 0.863);
            color:blue;
            background-color:white;
        }
    </style>
</head>
<body>
    <div class="container"><br>
    <h1 style="text-align:center;color:green;">DATA IS DISPLAYED FROM DATABASE</h1><br>
        <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-10">
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "ambulance requests";

        $conn = mysqli_connect($servername, $username, $password, $dbname);

        $sqlget = "SELECT * FROM request";
        $sqldata = mysqli_query($conn , $sqlget) or die('error');

        echo "<table>";
        echo "<tr><th>ID</th><th>PATIENT NAME</th><th>PATIENT AGE</th><th>MOBILE NO.</th><th>PICKUP HOSPITAL</th><th>DROP HOSPITAL</th><th>AMULANCE TYPE</th><th>REGISTER TIME</th><th>EDIT</th><th>DELETE</th>";

        while($row = mysqli_fetch_array($sqldata,MYSQLI_ASSOC)){
            echo "<tr><td>";
            $id = $row['id'];
            echo $row['id'];
            echo "</td><td>";
            echo $row['patientname'];
            echo "</td><td>";
            echo $row['age'];
            echo "</td><td>";
            echo $row['mobileno'];
            echo "</td><td>";
            echo $row['pickuplocation'];
            echo "</td><td>";
            echo $row['droplocation'];
            echo "</td><td>";
            echo $row['ambulancetype'];
            echo "</td><td>";
            echo $row['reg_time'];
            echo "</td>";
            echo ' <td>
            <a class="updatedelete" href="update.php? updateid='.$id.'"><b>Update</b></a>
            </td>';
            echo ' <td>
            <a class="updatedelete" href="delete.php? deleteid='.$id.'"><b>Delete</b></a>
            </td>';
            echo '</tr>';
        }

        
        
    ?>
       
       
    </table>
        </div>
        <div class="col-sm-2"></div>
        </div><br><br>
        <div class="container">
            <div class="row">
            <div class="col-sm-3"></div>
                <div class="col-sm-3"><a href="http://localhost/phpmyadmin/index.php?route=/sql&pos=0&db=ambulance+requests&table=request"><b>STRUCTURER CHANGE OR UPDATE</b></a></div>
                <div class="col-sm-3"><a href="index.html" ><b>GO BACK</b></a></div>
                <div class="col-sm-3"></div>
            </div>
        </div>
        <br><br>
    </div>
</body>
</html>