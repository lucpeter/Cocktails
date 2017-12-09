<?php
require_once 'database_info.php';

class CockTailDAO {
    private $conn;

    public function __construct($servername, $username, $password, $dbname) {
        $this->conn = new mysqli($servername, $username, $password, $dbname);

        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        } 
    }
    
    public function is_valid_user($email, $pass) {
        $query = "select * from users where email = ? AND password = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("ss", $email, $pass);
        $stmt->execute();

        $valid = $stmt->get_result()->num_rows == 1;
        $stmt->close();

        return $valid;
    }

    function insert_user($email, $pass) {
        $query = 'insert into users (email, password) values (?, ?)';
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param('ss', $email, $pass);

        $stmt->execute();
        $stmt->close();
    }

    function get_cocktails() {
        $data = [];
        $sql = "SELECT * FROM cocktails";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                $data[] = $row; 
            }
        }
        return $data;
    }

    function insert_cocktail($name, $creator, $category, $description, $ingredients) {
        $query = "insert into cocktails(name, creator, category, description, ingredients) VALUES (?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("sssss", $name, $creator, $category, $desciption, $ingredients);
        $stmt->execute();
        $stmt->close();
    }
}

$db = new CockTailDAO($servername, $username, $password, $dbname); 
?>
