<?php
require_once 'desg_Controller.php';

$connection = new desg_Controller();
if (isset($_POST['submit'])) {
    $connection->store();
}

?>


<html>

<head>
    <title>New Designation</title>
    <p><a href="desg_index.php"><button>Designation Table</button></a></p>
    <p><a href="Project.html"><button>Home Page</button></a></p>
</head>
<hr>
<h1>Enter Designation</h1>
<body>
<form action="" method="post">
    <p><input type="text" name="desg_id" value="" placeholder="Enter Designation ID"></p>
    <p><input type="text" name="desg_name" value="" placeholder="Enter Designation Name"></p>

    <p><input type="submit" value="submit" name="submit"></p>
</form>
</body>
</html>