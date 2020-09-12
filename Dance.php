<?php
namespace Core\Data;

class Dance{
    public $Name = null;
    public $Email = null;
    public $Mobile_no = null;
    public $Age = null;
    public $Gender = null;
    public $Performance= null;
    public $No_of_members = null;
    public $Type = null;
    public $Comment = null;

    private $table_name = null;
    private $conn = null;

    public function __construct($conn) {
        $this->conn = $conn;
        $this->table_name = participants;
    }

    public function getRecords() {
        $sql = "SELECT * FROM {$this->table_name} ";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();

        return $stmt;
    }

    public function insert() {
        $sql = "INSERT INTO {$this->table_name} ('Name', 'Email', 'Mobile_no', 'Age', 'Gender', 'Performance', 'No_of_members', 'Type', 'Comment') VALUES (?,?,?,?,?,?,?,?,?) ";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        
        return $stmt->rowCount();
        
    }

}

?>