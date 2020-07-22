<?php
require_once 'desg_Controller.php';

$connection = new desg_Controller();
$data = $connection->desg_index();




?>


<html>
<head>
    <title>Desg. Disp. CRUD</title>
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
<p><a href="desg_create.php"><button>Inser New Designation</button></a></p>
<p><a href="Project.html"><button>Home Page</button></a></p>
<hr>

<h1>Designation Table</h1>
<table>
    <thead>
    <tr>
        <th>Designation ID</th>
        <th>Designation Name</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
    <?php while ($row = mysqli_fetch_assoc($data)) { ?>
        <tr>
            <td><?php echo $row['desg_id'] ?></td>
            <td><?php echo $row['desg_name'] ?></td>
            <td>
                <a href="desg_update.php?id=<?php echo $row['id'] ?>"><button>Edit</button></a>
                <a href="desg_delete.php?id=<?php echo $row['id'] ?>"><button>Delete</button></a>
            </td>
        </tr>
    <?php } ?>
    </tbody>
</table>
</body>
</html>
