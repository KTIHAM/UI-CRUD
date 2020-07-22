<?php

require_once 'Controller.php';

$connection = new Controller();
$data = $connection->edit();
$complied_data = mysqli_fetch_assoc($data);

if (isset($_POST['update'])) {
    $connection->update();
}

$mysqli= new mysqli('localhost','root','','php_crud');

$result_set=$mysqli->query("Select dept_name from department");

$res_set=$mysqli->query("Select desg_name from designation");


?>

<html>
<head>
    <title>Update CRUD</title>
    <p><a href="index.php"><button>Employee Table</button></a></p>
    <a href="create.php"><button>Insert New Employee</button></a>
    <p><a href="Project.html"><button>Home Page</button></a></p>
</head>
<hr>
<h1>Update Your Information</h1>
<body>
<form action="" method="post">
    <input type="hidden" name="id" value="<?php echo $complied_data['id']?>">
    <p><input type="text" name="employee_name" value="<?php echo $complied_data['employee_name']?>" placeholder="Enter Employee Name"></p>
    <p><input type="text" name="employee_id" value="<?php echo $complied_data['employee_id']?>" placeholder="Enter Employee ID"></p>
    <p><textarea name="employee_address" placeholder="Enter Employee Address"><?php echo $complied_data['employee_address']?></textarea></p>
    <p>
        <select name="departments">
            <?php
            while($rows=$result_set->fetch_assoc()){
                $dept_name=$rows['dept_name'];
                echo "<option value='$dept_name'>$dept_name</option>";
            }
            ?>
        </select>
    </p>
    <p><select name="designations" input type="text">
            <?php
            while($rows=$res_set->fetch_assoc()){
                $desg_name=$rows['desg_name'];
                echo "<option value='$desg_name'>$desg_name</option>";
            }
            ?>
        </select>
    </p>
    <p><input type="submit" value="update" name="update"></p>
</form>
</body>
</html>
