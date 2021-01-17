<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\Karyawan_model;
 
class Karyawan extends Controller
{
    public function index()
    {
        $model = new Karyawan_model();
        $data['karyawan'] = $model->getKaryawan();
        echo view('karyawan',$data);
    }
}