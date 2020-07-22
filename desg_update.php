<?php

require_once 'desg_Controller.php';

$connection = new desg_Controller();
$data = $connection->desg_edit();
$complied_data = mysqli_fetch_assoc($data);

if (isset($_POST['update'])) {
    $connection->desg_update();
}


?>

<html>
<head>
    <title>Designation Update</title>
    <p><a href="desg_index.php"><button>Designation Table</button></a></p>
    <p><a href="desg_create.php"><button>Inser New Designation</button></a></p>
    <p><a href="Project.html"><button>Home Page</button></a></p>

</head>
<hr>
<h1>Update Designation</h1>
<body>
<form action="" method="post">
    <p><input type="hidden" name="id" value="<?php echo $complied_data['id']?>"></p>
    <p><input type="text" name="desg_id" value="<?php echo $complied_data['desg_id']?>" placeholder="Enter Designation ID"></p>
    <p><input type="text" name="desg_name" value="<?php echo $complied_data['desg_name']?>" placeholder="Enter Designation Name"></p>

    <p><input type="submit" value="update" name="update"></p>
</form>
</body>
</html>
