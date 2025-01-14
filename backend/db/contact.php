<?php

    class contact_users {
        public $firstname;
        public $lastname;
        public $email;
        public $company;
        public $mobilenumber;
        public $password;

        public function insert_user($conn, $name, $email, $password) {
            $sql = "insert into users (name, email, password) 
            VALUES ('". $name ."','". $email ."','". $password ."')";
            try {
                $conn->exec($sql);
                return 1;
            } catch(PDOException $e) {
                echo "error". $e->getMessage();
            }
            return 0;
        }

        public function retrieve_user($conn, $email, $password) {
            try {
                $sql = $conn->prepare("SELECT * FROM users where email = '". $email. "'");
                $sql->execute();
                $result = $sql->fetchAll(PDO::FETCH_NUM);
                foreach ($result as $row) {
                    $hashpass = $row[3];
                }
                $verify = password_verify($password, $hashpass);
                if($verify) {
                    echo 1;
                }
                // echo json_encode($result);
            } catch(PDOException $e) {
                echo "error". $e->getMessage();
            }
            return 0;
        }

        public function retrieve_contact($conn, $email) {
            try {
                $sql = $conn->prepare("SELECT * FROM contact where user_id = '". $email. "' ");
                $sql->execute();
                $result = $sql->fetchAll(PDO::FETCH_NUM);
                if($result) {
                    echo json_encode($result);
                }
            } catch(PDOException $e) {
                echo "error". $e->getMessage();
            }
            return 0;
        }

        public function get_individual_contact($conn, $id) {
            try {
                $sql = $conn->prepare("SELECT * FROM contact where id = '". $id. "' ");
                $sql->execute();
                $result = $sql->fetchAll(PDO::FETCH_NUM);
                if($result) {
                    echo json_encode($result);
                }
            } catch(PDOException $e) {
                echo "error". $e->getMessage();
            }
            return 0;
        }


        public function add_contact($conn, $contactname,$contactemail, $contactphone, $contactcompany, $loggedEmail) {
            $sql = "insert into contact (name, email,company, phone, user_id) 
            VALUES ('". $contactname ."','". $contactemail ."','". $contactcompany ."','". $contactphone ."','". $loggedEmail ."')";
            
            try {
                $conn->exec($sql);
                echo 1;
            } catch(PDOException $e) {
                echo "error". $e->getMessage();
            }
            return 0;
        }

        public function edit_contact($conn,$names,$company,$email,$mobilenumber, $id) {
            $sql = "UPDATE contact SET name = '". $names . "', company = '". $company . "', phone = '". $mobilenumber . "', email = '". $email . "' where id = '". $id ."'";
            try {
                $conn->exec($sql);
                echo 1;
            } catch(PDOException $e) {
                echo "error". $e->getMessage();
            }
            return 0;
        }

        public function delete_contact($conn, $phone) {
            $sql = "DELETE FROM contact WHERE phone= '". $phone . "'";
            try {
                $conn->exec($sql);
                echo 1;
            } catch(PDOException $e) {
                echo "error". $e->getMessage();
            }
            return 0;
        }
    }

?>