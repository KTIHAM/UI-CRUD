<?php
require_once 'dept_Controller.php';

$connection = new dept_Controller();
$data = $connection->dept_index();




?>


<html>
<head>
    <title>Department  Table</title>
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
<p><a href="dept_create.php"><button>Insert New Department</button></a></p>
<p><a href="Project.html"><button>Home Page</button></a></p>
<hr>

<h1>Department Table</h1>
<table>
    <thead>
    <tr>
        <th>Department ID</th>
        <th>Department Name</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
    <?php while ($row = mysqli_fetch_assoc($data)) { ?>
        <tr>
            <td><?php echo $row['dept_id'] ?></td>
            <td><?php echo $row['dept_name'] ?></td>
            <td>
                <a href="dept_update.php?id=<?php echo $row['id'] ?>"><button>Edit</button></a>
                <a href="dept_delete.php?id=<?php echo $row['id'] ?>"><button>Delete</button></a>
            </td>
        </tr>
    <?php } ?>
    </tbody>
</table>
</body>
</html>
