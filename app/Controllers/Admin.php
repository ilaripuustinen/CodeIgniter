<?php namespace App\Controllers;

use App\Models\TuoteryhmaModel;

class Admin extends BaseController
{
	public function index()
	{
        $tuoteryhmaModel = new TuoteryhmaModel();
        $data['tuoteryhmat'] = $tuoteryhmaModel->haeTuoteryhmat();
        $data['otsikko'] = 'Tuoteryhmät';
		echo view('admin/tuoteryhma.php',$data);
	}

    public function tallenna () {
        echo view('admin/tuoteryhma_lomake.php');
    }
	//--------------------------------------------------------------------

}
