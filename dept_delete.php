<?php
require_once 'dept_Controller.php';
$connection = new dept_Controller();
$data = $connection->dept_delete();
?>