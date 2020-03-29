<?php 

class Sql extends PDO {
    // Atributes
    private $conn;

    // Methods
    public function query($rawQuery, $params = array()) {
        $stmt = $this->conn->prepare($rawQuery);
        $this->setParams($stmt, $params);
        $stmt->execute();
        return $stmt;
    }

    private function setParams($statement, $parameters = array()) {
        foreach ($parameters as $key => $value) {
            $this->setParam($key, $value);
        }
    }

    private function setParam($statement, $key, $value) {
        $statement->bindParam($key, $value);
    }

    public function select($rawQuery, $params = array()):array {
        $stmt = $this->query($rawQuery, $params);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Getters, Setters and Construct
    public function __construct() {
        $this->conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");
    }
}

?>