<?php
require_once 'Controller.php';

$connection = new Controller();
$data = $connection->index();




?>


<html>
<head>
    <title>HRMS CRUD</title>
    <style>
        table {
            border-collapse: collapse;
        }

        table thead tr th {
            border: 1px solid #ccc;
        }

        table tbody tr td {
            border: 1px solid #ccc;
        }
    </style>
</head>
<body>
<p><a href="create.php"><BUTTON>Insert New Employees</BUTTON></a></p>
<p><a href="Project.html"><button>Home Page</button></a></p>
<hr>

<h1>Employee Table</h1>
<table>
    <thead>
    <tr>
        <th>Employee Name</th>
        <th>Employee Id</th>
        <th>Employee Address</th>
        <th>Employee Departments</th>
        <th>Employee Designations</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
    <?php while ($row = mysqli_fetch_assoc($data)) { ?>
        <tr>
            <td><?php echo $row['employee_name'] ?></td>
            <td><?php echo $row['employee_id'] ?></td>
            <td><?php echo $row['employee_address'] ?></td>
            <td><?php echo $row['departments'] ?></td>
            <td><?php echo $row['designations'] ?></td>
            <td>
                <a href="update.php?id=<?php echo $row['id'] ?>"><button>Edit</button></a>
                <a href="delete.php?id=<?php echo $row['id'] ?>"><button>Delete</button></a>
            </td>
        </tr>
    <?php } ?>
    </tbody>
</table>
</body>
</html>
