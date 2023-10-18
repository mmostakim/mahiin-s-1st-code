<?php
// PHP OOP class for database CRUD operations

class Database {
    // Database connection parameters
    private $db_host = "localhost";
    private $db_username = "root";
    private $db_pass = "";
    private $db_name = "student";
    private $mysqli = " ";
    private $result = array();
    private $conn = false;

    // Constructor to establish a database connection
    public function __construct() {
        if (!$this->conn) {
            $this->mysqli = new mysqli($this->db_host, $this->db_username, $this->db_pass, $this->db_name);
            $this->conn = true;

            // Check for connection errors
            if ($this->mysqli->connect_error) {
                array_push($this->result, $this->mysqli->connect_error);
            }
        } else {
            // Connection already established
        }
    }

    // Insert data into a table
    public function insert($table, $params = array()) {
        if ($this->tableExists($table)) {
            $table_col = implode(' ,', array_keys($params));
            $table_val = implode("' ,'", $params);
            $sql = "INSERT INTO $table ( $table_col) VALUE (' $table_val')";

            if ($this->mysqli->query($sql)) {
                array_push($this->result, $this->mysqli->insert_id);
                return true;
            } else {
                array_push($this->result, $this->mysqli->error);
                return false;
            }
        } else {
            return false;
        }
    }
// ...

// Fetch data from a table
public function fetchData($table) {
    if ($this->tableExists($table)) {
        $sql = "SELECT * FROM $table";
        $query = $this->mysqli->query($sql);
        
        if ($query) {
            $result = $query->fetch_all(MYSQLI_ASSOC);
            return $result;
        } else {
            array_push($this->result, $this->mysqli->error);
            return false;
        }
    } else {
        return false;
    }
}

// ...

    // Update data in a table
    public function update($table, $params = array(), $where = null) {
        if ($this->tableExists($table)) {
            $argum = array();
            foreach ($params as $key => $value) {
                $argum[] = "$key='$value'";
            }
            $set = implode(',', $argum);
            $sql = "UPDATE $table SET " . $set;
            if ($where != null) {
                $sql .= " WHERE $where";
            }
            if ($this->mysqli->query($sql)) {
                array_push($this->result, $this->mysqli->affected_rows);
                return true;
            } else {
                array_push($this->result, $this->mysqli->error);
            }
        } else {
            return false;
        }
    }

    // Delete data from a table
    public function delete($table, $where = null) {
        if ($this->tableExists($table)) {
            $sql = "DELETE FROM $table";
            if ($where != null) {
                $sql .= " WHERE $where";
            }
            if ($this->mysqli->query($sql)) {
                array_push($this->result, $this->mysqli->affected_rows);
                return true;
            } else {
                array_push($this->result, $this->mysqli->error);
                return false;
            }
        } else {
            return false;
        }
    }

    // Select data from a table
    public function select($table, $rows = "*", $join = null, $where = null, $order = null, $limit = null) {
        if ($this->tableExists($table)) {
            $sql = "SELECT $rows FROM $table";
            if ($join != null) {
                $sql .= " JOIN $join";
            }
            if ($where != null) {
                $sql .= " WHERE $where";
            }
            if ($order != null) {
                $sql .= " ORDER BY $order";
            }
            if ($limit != null) {
                $sql .= " LIMIT 0, $limit";
            }

            $query = $this->mysqli->query($sql);
            if ($query) {
                $this->result = $query->fetch_all(MYSQLI_ASSOC);
                return true;
            } else {
                array_push($this->result, $this->mysqli->error);
                return false;
            }
        } else {
            return false;
        }
    }

    // Execute a custom SQL query
    public function sql($sql) {
        $query = $this->mysqli->query($sql);
        if ($query) {
            $this->result = $query->fetch_all(MYSQLI_ASSOC);
            return true;
        } else {
            array_push($this->result, $this->mysqli->error);
            return false;
        }
    }
// This method fetches user data from the 'user' table

 // Function to check if a table exists in the database
private function tableExists($table) {
        $sql = "SHOW TABLES FROM $this->db_name LIKE '$table' ";
        $tableIN_db = $this->mysqli->query($sql);
        if ($tableIN_db) {
            if ($tableIN_db->num_rows == 1) {
                return true;
            } else {
                array_push($this->result, $table . " Does Not Exist In The Database");
                return false;
            }
        }
    }

    // Function to get the result of the last query
    public function getResult() {
        $val = $this->result;
        $this->result = array();
        return $val;
    }

    // Destructor to close the database connection
    public function __destruct() {
        if ($this->conn) {
            if ($this->mysqli->close()) {
                $this->conn = false;
            }
        } else {
            // Connection already closed
        }
    }
}
