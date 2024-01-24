<?php

namespace App\Controllers;
use CodeIgniter\Controllers;
use App\Models\M_model;
use Dompdf\Dompdf;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
class Home extends BaseController
{
	public function index()
	{

        $model= new M_model();

        $where=array('id_user' => session()->get('id'));
        $kui['user']=$model->getRow('user',$where); 

        echo view ('header', $kui);
        echo view ('menu');
        echo view ('dashboard');
        echo view ('footer');
	}



}
