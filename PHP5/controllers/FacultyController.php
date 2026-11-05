<?php

require_once 'models/Faculty.php';

class FacultyController {
    private $facultyModel;

    public function __construct($db) {
        $this->facultyModel = new Faculty($db);
    }

    public function index() {
        $faculties = $this->facultyModel->getAll();
        require 'views/index.php';
    }

    public function create() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $this->facultyModel->create(
                $_POST['fname'], $_POST['mname'], $_POST['lname'], 
                (int)$_POST['age'], $_POST['gender'], $_POST['address'], 
                $_POST['position'], (float)$_POST['salary']
            );
            header("Location: index.php?action=index");
            exit;
        }
        require 'views/create.php';
    }

    public function edit() {
        $id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $this->facultyModel->update(
                $id, $_POST['fname'], $_POST['mname'], $_POST['lname'], 
                (int)$_POST['age'], $_POST['gender'], $_POST['address'], 
                $_POST['position'], (float)$_POST['salary']
            );
            header("Location: index.php?action=index");
            exit;
        }
        $faculty = $this->facultyModel->getById($id);
        require 'views/edit.php';
    }

    public function delete() {
        $id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
        $this->facultyModel->delete($id);
        header("Location: index.php?action=index");
        exit;
    }
}
?>