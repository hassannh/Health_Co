<?php

class AdminController extends Controller
{
    private $AdminModel;
    function __construct()
    {
        $this->AdminModel = $this->model('Admin');
    }




    public function register()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            // die('heyyyyyy');

            $_POST = filter_input_array(INPUT_POST);

            //init data
            $data = [
                'name' => $_POST['name'],
                'email' => $_POST['email'],
                'password' => $_POST['password']
            ];


            $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

            // Register User
            if ($this->AdminModel->register($data)) {
                header("location:" . URLROOT . "AdminController/login");
            } else {
                die('Something went wrong');
            }
        } else {
            $this->view("register");
        }
    }


    public function login()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $_POST = filter_input_array(INPUT_POST);
            $data = [
                'email' => $_POST['email'],
                'password' => $_POST['password']

            ];
            $check = $this->AdminModel->getUserByEmail($data['email']);

          
            if ($check == 1) {
                // user found
                $loggedInUser = $this->AdminModel->login($data['email'], $data['password']);
                
                if ($loggedInUser) {
                    // Create session
                    $this->createUserSession($loggedInUser);
                    header("location:" . URLROOT . "dashboardController/dashboard");
                } else {
                    $this->view("login");
                }
            } else {

                // Load view
                $this->view('login');
            }
        } else {

            // Load view
            $this->view('login');
        }
    }
    public function createUserSession($Admin)
    {
        $_SESSION['Id'] = $Admin['ID'];
        $_SESSION['email'] = $Admin['email'];
        $_SESSION['name'] = $Admin['name'];
    }


    public function logout()
    {
        session_destroy();
        header("location: " . URLROOT . "AdminController/login");
    }
    public static function isLogged()
    {
        return $_SESSION['Id'] ?? false;
    }
}
