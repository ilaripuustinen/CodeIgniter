<?php namespace App\Controllers;

class Login extends BaseController {

    public function index() {

        $data['title'] = 'Todo - login';
        echo view('templates/header', $data);
        echo view('login/login', $data);
        echo view('templates/footer', $data);
    }

        //---------------------------

}