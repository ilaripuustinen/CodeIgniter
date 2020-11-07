<?php namespace App\Models;

use CodeIgniter\Model;

class LoginModel extends Model {
    protected $table = 'user';

    protected $allowedFields = ['username','password', 'firstname', 'lastname'];

    public function getUser() {
        return $this->findAll();
    }

    public function check($username, $password) {
        $this->where('username', $username); // Create where part to select.
        $query = $this->get(); // Execute select (with where part defined).
        // print $this->getLastQuery(); Might be used for debuggin.
        $row = $query->getRow(); // Get row.
        if ($row) { // If row was returned based on username... 
            // Check if secured password is equal with password entered by the user.
            if (password_verify($password,$row->password)) {
                return $row; // Return row (user object)
            }
        }
        return null; // Return null, because username and/or password is incorrect.
    }
}