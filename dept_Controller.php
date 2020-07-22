<?php


class dept_Controller
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

    public function dept_index()
    {
        $sql = "select * from department";
        $result = $this->conn->query($sql);
        return $result;
    }

    /* data insert in database section */
    public function store()
    {
        $dept_id = $_POST['dept_id'];
        $dept_name = $_POST['dept_name'];
        $sql = "insert into department (dept_id,dept_name) values ('$dept_id','$dept_name')";
        $this->conn->query($sql);
    }

    public function dept_edit()
    {
        $id = $_GET['id'];
        $sql = "select * from department where id = '$id'";
        $result = $this->conn->query($sql);
        return $result;
    }

    public function dept_update()
    {
        $id = $_POST['id'];
        $dept_id = $_POST['dept_id'];
        $dept_name = $_POST['dept_name'];
        $sql = "UPDATE department SET dept_id ='$dept_id',dept_name='$dept_name' WHERE id = '$id'";
        $result = $this->conn->query($sql);
        if ($result) {
            header('Location: dept_index.php');
        }
    }

    public function dept_delete()
    {
        $id = $_GET['id'];
        $sql = "delete from department where id = '$id'";
        $result = $this->conn->query($sql);
        if ($result) {
            header('Location: dept_index.php');
        }
    }
}