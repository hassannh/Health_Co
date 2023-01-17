<?php

class AdminController extends Controller
{
    private $AdminModel;
    function __construct()
    {
        $this->AdminModel = $this->model('Admin');
    }


    public function login()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $_POST = filter_input_array(INPUT_POST);
            $data = [
                'email' => trim($_POST['email']),
                'password' => trim($_POST['password']),
                'email_error' => '',
                'password_error' => ''
            ];

            

            if (empty($data['email'])) {
                $data['email_error'] = 'please enter your email';
            }
        
            if (empty($data['password'])) {
                $data['password_error'] = 'please enter your password';
            }
        
            if ($this->AdminModel->getUserByEmail($data['email'])) {
                // user found
                
            } else {
                // User not found
                $data['email_error'] = 'No user found';
            }
        
            if (empty($data['email_error']) && empty($data['password_error'])) {
                // Validated
                // Check and set logged in user
                $loggedInUser = $this->AdminModel->login($data['email'], $data['password']);
        
                if ($loggedInUser) {
                    // Create session
                      $this->createUserSession($loggedInUser);
                      $this->view('home');
                } else {
                    $data['password_error'] = 'Incorrect password';
                    $this->view('login', $data);
                }
            } else {
                // Load view with errors
                $this->view('login', $data);
            }
        
            $email = $data['email'];
            $password = $data['password'];
      
        } else {
        
            // Load view
            $this->view('login');
        }
        
    }
    public function createUserSession($Admin){
        $_SESSION['Id'] = $Admin->ID;
        $_SESSION['email'] = $Admin->email;
        $_SESSION['name'] = $Admin->name;
        
       
      }
}