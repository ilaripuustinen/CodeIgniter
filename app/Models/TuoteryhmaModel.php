<?php namespace App\Models;

use CodeIgniter\Model;

class TuoteryhmaModel extends Model {
    protected $table = 'tuoteryhma';

    public function haeTuoteryhmat() {
        return $this->findAll();
        // sama asia kuin 'select * from tuoteryhma';
    }
}