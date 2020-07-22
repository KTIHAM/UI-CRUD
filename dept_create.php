<?php
require_once 'dept_Controller.php';

$connection = new dept_Controller();
if (isset($_POST['submit'])) {
    $connection->store();
}

?>


<html>

<head>
    <title>Department CRUD</title>
    <p><a href="dept_index.php"><button>Department Table</button></a></p>
    <p><a href="Project.html"><button>Home Page</button></a></p>
</head>
<hr>
<h1>Enter Department</h1>
<body>
<form action="" method="post">
    <p><input type="text" name="dept_id" value="" placeholder="Enter Dept. ID"></p>
    <p><input type="text" name="dept_name" value="" placeholder="Enter Dept. Name"></p>
    <p><input type="submit" value="submit" name="submit"></p>
</form>
</body>
</html>