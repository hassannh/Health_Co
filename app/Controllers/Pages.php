<?php


class Pages extends Controller
{
    public $Admin;
    public $productsModel;
    public function __construct()
    {
        //  $this->postmodel = $this->model('Post');
        $this->Admin = $this->model('Admin');
        $this->productsModel = $this->model('products');
    }

    public function home()
    {

        $data = [
            'title' => 'HomePage'
        ];

        $this->view('home', $data);
    }

    public function login()
    {

        $data = [
            'title' => 'login'
        ];

        $this->view('login', $data);
    }

    public function dashboard()
    {

        $data = [
            'title' => 'dashboard'
        ];

        $this->view('dashboard', $data);
    }

    public function gallery()
    {

        $data = [
            'title' => 'gallery'
        ];

        $this->view('gallery', $data);
    }

    public function add_product()
    {

        $data = [
            'title' => 'add_product'
        ];

        $this->view('add_product', $data);
    }

    public function register()
    {

        $data = [
            'title' => 'register'
        ];

        $this->view('register', $data);
    }

    public function statistics()
    {

        $data = [
            'title' => 'statistics'
        ];

        $this->view('statistics', $data);
    }

    public function updat_product()
    {

        $data = [
            'title' => 'updat_product'
        ];

        $this->view('updat_product', $data);
    }
    
}
