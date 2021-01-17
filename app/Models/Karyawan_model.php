<?php namespace App\Models;
use CodeIgniter\Model;
 
class Karyawan_model extends Model
{
    protected $table = 'karyawan';
     
    public function getKaryawan($id = false)
    {
        if($id === false){
            return $this->findAll();
        }else{
            return $this->getWhere(['id' => $id]);
        }   
    }
 
}