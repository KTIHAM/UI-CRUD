<?php

require_once 'dept_Controller.php';

$connection = new dept_Controller();
$data = $connection->dept_edit();
$complied_data = mysqli_fetch_assoc($data);

if (isset($_POST['update'])) {
    $connection->dept_update();
}


?>

<html>
<head>
    <title>Update Department</title>
    <P><a href="dept_index.php"><button>Department Table</button></a></P>
    <p><a href="dept_create.php"><button>Insert New Department</button></a></p>
    <p><a href="Project.html"><button>Home Page</button></a></p>

</head>
<hr>
<h1>Update Department</h1>
<body>
<form action="" method="post">
    <p><input type="hidden" name="id" value="<?php echo $complied_data['id']?>"></p>
    <p><input type="text" name="dept_id" value="<?php echo $complied_data['dept_id']?>" placeholder="Enter Department ID"></p>
    <p><input type="text" name="dept_name" value="<?php echo $complied_data['dept_name']?>" placeholder="Enter Department Name"></p>

    <p><input type="submit" value="update" name="update"></p>
</form>
</body>
</html>
