<?php
namespace App\Controllers;

use CodeIgniter\Controller;

class Hello extends Controller {
    public function index() {
        echo view("frontpage.php");
    }
    public function testi() {
        echo "Hello again!";
    }

    public function save() {
        //luetaan mitä käyttäjä kirjoitti
        $message = $this->request->getVar('message');
    }
}
?>