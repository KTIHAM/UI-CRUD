<?php


class Controller
{

    private $conn;

    public function __construct()
    {
        $this->conn = new mysqli();
        $this->conn->connect('localhost', 'root', '', 'php_crud');
        if (!$this->conn) {
            echo 'database is not connected' . $this->conn->connect_error;
        }
    }

    public function index()
    {
        $sql = "select * from employees";
        $result = $this->conn->query($sql);
        return $result;
    }

    /* data insert in database section */
    public function store()
    {
        $employee_name = $_POST['employee_name'];
        $employee_id = $_POST['employee_id'];
        $employee_address = $_POST['employee_address'];
        $departments = $_POST['departments'];
        $designations = $_POST['designations'];
        $sql = "insert into employees (employee_name,employee_id,employee_address,departments,designations) values ('$employee_name','$employee_id','$employee_address','$departments','$designations')";
        $this->conn->query($sql);
    }

    public function edit()
    {
        $id = $_GET['id'];
        $sql = "select * from employees where id = '$id'";
        $result = $this->conn->query($sql);
        return $result;
    }

    public function update()
    {
        $id = $_POST['id'];
        $employee_name = $_POST['employee_name'];
        $employee_id = $_POST['employee_id'];
        $employee_address = $_POST['employee_address'];
        $departments = $_POST['departments'];
        $designations = $_POST['designations'];
        $sql = "UPDATE employees SET employee_name ='$employee_name',employee_id='$employee_id',employee_address='$employee_address',departments='$departments',designations='$designations' WHERE id = '$id'";
        $result = $this->conn->query($sql);
        if ($result) {
            header('Location: index.php');
        }
    }

    public function delete()
    {
        $id = $_GET['id'];
        $sql = "delete from employees where id = '$id'";
        $result = $this->conn->query($sql);
        if ($result) {
            header('Location: index.php');
        }
    }
}