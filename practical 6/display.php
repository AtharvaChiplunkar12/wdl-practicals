<html>

<head>

    <title>display</title>
    

    </head>

    <body>
        <?php
            $mysql_host = "localhost";
            $mysql_username = "root";
            $mysql_password = "";
            $mysql_database = "emp";
            $conn =mysqli_connect($mysql_host, $mysql_username, $mysql_password,
            $mysql_database);
            echo "<h1>The Data of Employee Table</h1>";
            echo "<h4>SrNo EmpID Name Salary</h4><br>";
            $sql="SELECT * FROM employee";
            $result=mysqli_query($conn,$sql);
            $result1=mysqli_num_rows($result);
            if($result1>0)
            {
            while($i=mysqli_fetch_assoc($result)){
            foreach ($i as $value) {
            echo $value." | ";
            }
            echo "<br>";
            }
            }
        ?>
    </body>

</html>