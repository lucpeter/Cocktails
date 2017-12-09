<?php
include database_info.php;

class CockTailDAO {
    private $conn;

    public function __construct($servername, $username, $password, $dbname) {
        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 
    }
    
    public function is_valid_user($email, $pass) {
        $query = "select * from users where email = ? AND password = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("ss", $email, $pass);
        $stmt->execute();

        if ($stmt->num_rows == 1) {
          return TRUE;
        }
        return FALSE;
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
