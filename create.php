<?php
require_once 'Controller.php';

$connection = new Controller();
if (isset($_POST['submit'])) {
    $connection->store();
}

$mysqli= new mysqli('localhost','root','','php_crud');

$result_set=$mysqli->query("Select dept_name from department");

$res_set=$mysqli->query("Select desg_name from designation");

?>


<html>

<head>
    <title>HRMS CRUD</title>
    <p><a href="index.php"><button>Employee Table</button></a></p>
    <p><a href="Project.html"><button>Home Page</button></a></p>
</head>
<hr>
<h1>Enter Your Information</h1>
<body>
<form action="" method="post">
    <div><input type="text" name="employee_name" value="" placeholder="Enter Employee Name"></div><br>
    <div><input type="text" name="employee_id" value="" placeholder="Enter Employee ID"></div><br>
    <div><textarea name="employee_address" value="" placeholder="Enter Employee Address"></textarea></div><br>
   <div>
       <select name="departments">
           <?php
           while($rows=$result_set->fetch_assoc()){
               $dept_name=$rows['dept_name'];
               echo "<option value='$dept_name'>$dept_name</option>";
           }
           ?>
       </select>
   </div><br>
   <div>
       <select name="designations">
       <?php
       while($rows=$res_set->fetch_assoc()){
           $desg_name=$rows['desg_name'];
           echo "<option value='$desg_name'>$desg_name</option>";
       }
       ?>
       </select>
   </div><br>
    <div><input type="submit" value="submit" name="submit"></div>
</form>
</body>
</html>