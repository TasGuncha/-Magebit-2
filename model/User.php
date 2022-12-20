<?php
    class User {
        function __construct($servername,$username,$password,$database) {
            $this->localhost = $servername;
            $this->username = $username;
            $this->password =  $password;
            $this->database = $database;
        }
        public function openDb() {
            $this->db = new mysqli($this->localhost, $this->username, $this->password, $this->database);
            if ($this->db->connect_error) {
                die("Kļūda: Nevar izveidot savienojumu ar datubāzi!");
            }
        }
        public function closeDb() {
            $this->db->close();
        }
        public function register($email) {
            try {
                $this->openDb();
                $stmt=$this->db->prepare("INSERT INTO subscribings (email) VALUES (?)");
                $stmt->bind_param("s", $email);
                $stmt->execute();
                $res= $stmt->get_result();
                $last_id=$this->db->insert_id;
                $stmt->close();
                $this->closeDb();
                return $last_id;
            }
            catch (Exception $e) {
                $this->closeDb();
                throw $e;
            }
        }
        public function GetUserByID($id) {
            try {
                $this->openDb();
                $stmt=$this->db->prepare("SELECT * FROM subscribings WHERE id=?");
                $stmt->bind_param("i", $id);
                $stmt->execute();
                $res=$stmt->get_result();
                $stmt->close();
                $this->closeDb();
                return $res->fetch_object();
            }
            catch(Exception $e) {
                $this->closeDb();
                throw $e;
            }
        }
    }
?>