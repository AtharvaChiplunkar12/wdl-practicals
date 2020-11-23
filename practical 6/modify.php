<!DOCTYPE html>
<html>
<head>
<style>
input[type=text] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 3px solid #ccc;
  -webkit-transition: 0.5s;
  transition: 0.5s;
  outline: none;
}

input[type=text]:focus {
  border: 3px solid #555;
}
input[type=button], input[type=submit], input[type=reset] {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
}
</style>
</head>

<body>
    <h3 id="title">Update a record</h3>
    <div class="container">
        <form method="post">
            <label for="empid">Employee id</label>
            <input type="text" id="empid" name="empid" placeholder="employee id.."><br><br>
            <label for="empname">Employee name</label>
            <input type="text" id="empname" name="empname" placeholder="employee name.."><br><br>
            <label for="designation">Employee designation</label>
            <input type="text" id="designation" name="designation" placeholder="employee designation."><br><br>
            <label for="salary">Employee salary</label>
            <input type="text" id="salary" name="salary" placeholder="employee salary."><br><br>
            <input type="submit" name="submit" value="Submit">
        </form>
    </div>
    <?php
    if(isset($_POST['submit'])){
        $mysql_host = "localhost";
        $mysql_username = "root";
        $mysql_password = "";
        $mysql_database = "emp";
        $empid = $_POST['empid'];
        $empname = $_POST['empname'];
        $designation = $_POST['designation'];
        $salary= $_POST['salary'];
        $conn=new mysqli($mysql_host, $mysql_username, $mysql_password, $mysql_database);   
        $sql = ("UPDATE employee SET empname=\"$empname\", designation=\"$designation\", salary=\"$salary\" WHERE empid =\"$empid\";");
        mysqli_query($conn, $sql);
        mysqli_close($conn);
    }
    ?>
</body>

</html>