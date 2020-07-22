<?php


class desg_Controller
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

    public function desg_index()
    {
        $sql = "select * from designation";
        $result = $this->conn->query($sql);
        return $result;
    }

    /* data insert in database section */
    public function store()
    {
        $desg_id = $_POST['desg_id'];
        $desg_name = $_POST['desg_name'];
        $sql = "insert into designation (desg_id,desg_name) values ('$desg_id','$desg_name')";
        $this->conn->query($sql);
    }

    public function desg_edit()
    {
        $id = $_GET['id'];
        $sql = "select * from designation where id = '$id'";
        $result = $this->conn->query($sql);
        return $result;
    }

    public function desg_update()
    {
        $id = $_POST['id'];
        $desg_id = $_POST['desg_id'];
        $desg_name = $_POST['desg_name'];
        $sql = "UPDATE designation SET desg_id ='$desg_id',desg_name='$desg_name' WHERE id = '$id'";
        $result = $this->conn->query($sql);
        if ($result) {
            header('Location: desg_index.php');
        }
    }

    public function desg_delete()
    {
        $id = $_GET['id'];
        $sql = "delete from designation where id = '$id'";
        $result = $this->conn->query($sql);
        if ($result) {
            header('Location: desg_index.php');
        }
    }
}