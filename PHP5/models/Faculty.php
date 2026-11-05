<?php

class Faculty {
    private $db;

    public function __construct($dbConnection) {
        $this->db = $dbConnection;
    }


    public function create($fname, $mname, $lname, $age, $gender, $address, $position, $salary) {
        $sql = "INSERT INTO faculty (first_name, middle_name, last_name, age, gender, address, position, salary) 
                VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $this->db->prepare($sql);
        $stmt->bind_param("sssisssd", $fname, $mname, $lname, $age, $gender, $address, $position, $salary);
        return $stmt->execute();
    }

    public function getAll() {
        $result = $this->db->query("SELECT * FROM faculty ORDER BY id DESC");
        return $result->fetch_all(MYSQLI_ASSOC);
    }


    public function getById($id) {
        $stmt = $this->db->prepare("SELECT * FROM faculty WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }


    public function update($id, $fname, $mname, $lname, $age, $gender, $address, $position, $salary) {
        $sql = "UPDATE faculty SET first_name=?, middle_name=?, last_name=?, age=?, gender=?, address=?, position=?, salary=? WHERE id=?";
        $stmt = $this->db->prepare($sql);
        $stmt->bind_param("sssisssdi", $fname, $mname, $lname, $age, $gender, $address, $position, $salary, $id);
        return $stmt->execute();
    }

    public function delete($id) {
        $stmt = $this->db->prepare("DELETE FROM faculty WHERE id = ?");
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }
}
?>