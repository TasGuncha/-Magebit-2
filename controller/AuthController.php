<?php
    session_start();
    require 'model/User.php';
    require_once './config.php';
    class AuthController {
        function __construct() {
            $this->userobj =  new User("localhost","root","","magebit_test");
        }
        public function Operations() {
            $op = isset($_GET['op']) ? $_GET['op'] : NULL;
            switch ($op)
            {
                case 'register':
                    $this->register();
                    break;
                case 'logout':
                    $this->logout();
                    break;
                case NULL:
                    if (isset($_SESSION['id'])) {
                        $user = $this->userobj->GetUserByID($_SESSION['id']);
                        echo "<script>window.location.href='view/home.php';</script>";
                    }
                    else {
                        echo "<script>window.location.href='view/main.php';</script>";
                    }
                    break;
                default:
            }
        }
        public function logout() {
            session_destroy();
            header('Location: ./index.php');
        }
        public function register() {
            if (isset($_SESSION['id'])) {
                $user = $this->userobj->GetUserByID($_SESSION['id']);
                echo "<script>window.location.href='view/home.php';</script>";
            }
            elseif (isset($_POST['signupbtn'])) {
                $email = $_POST['email'];
                $user = $this->userobj->register($email);
                $_SESSION['id'] = $user;
                $user = $this->userobj->GetUserByID($_SESSION['id']);
                echo "<script>window.location.href='view/home.php';</script>";
            }
        }
    }
?>