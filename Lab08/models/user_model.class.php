<?php

/**
 * Description of user_model
 *
 * @author jacobbryant
 */
class UserModel {
    
    // attributes
    private $db; // database object
    private $dbConnect; // database connect object
    
    // constructor
    public function __construct() {
        $this->db = Database::getInstance();
        $this->dbConnect = $this->db->getConnection();
    }
    
    // public methods 
    public function add_user() {
        
        // get form field values 
        $username    = $_POST["username"];
        $password    = password_hash($_POST["password"], PASSWORD_DEFAULT);
        $email       = $_POST["email"];
        $firstName   = $_POST["first-name"];
        $lastName    = $_POST["last-name"];
        
        // build SQL statement
        // might have to add '' around variables
        $sql = "INSERT INTO users (username, password, email, firstname, lastname) VALUES ('" . $username . 
                "','" . $password . "','" . $email . "','" . $firstName . "','" . $lastName . "')"; 
        
        // insert into table and return true/false depending on success
        if ($this->dbConnect->query($sql) === TRUE) {
            return true;
        } else {
            return false;
        }
        
    }
    
    public function verify_user() {
        
        // Need to verify hashed password
        
        // retrieve values from form
        $username = $_POST["username"];
        $password = $_POST["password"];
        
        $sql = "SELECT * FROM users WHERE (username = '" . $username . "')";
        $result = mysqli_query($this->dbConnect,$sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $hash = $row['password'];
        
        
        
        // build SQL statement
//        $sql = "SELECT * WHERE (username = '" . $username . "') AND ( password = '" . $password . "' )";
//        $result = mysqli_query($this->dbConnect,$sql);
        
        if (password_verify($password, $hash )) {
            setcookie("user", $username);
            return true;
        } else {
            echo $hash;
            return false;
        }
         
        
        
        // run query and return true or false depending on success
//        if ($result->num_rows > 0) {
//            setcookie($user, $username);
//            return true;
//        } else {
//            
//            return false;
//        }
        
    }
    
    public function logout() {
        unset($_COOKIE['user']);
        return true;
    }
    
    public function reset_password() {
        $username = $_POST["username"];
        $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
        
        $sql = "UPDATE users SET password='" . $password . "' WHERE username='" . $username . "'";
        
        if ($this->dbConnect->query($sql) === TRUE) {
            return true;
        } else {
            return false;
        }
        
        
    }
}
