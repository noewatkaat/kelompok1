<?php

namespace App\Models;

use CodeIgniter\Model;
class UsersModel extends Model
{
    protected $table = "dbkecamatan";
    protected $primarykey = "ID";
    protected $usesoftDeletes= true;
    protected $deleteField ='deleted_at';
    protected $allowedFields = ['Nama_kecamatan','Kodepos_kecamatan' , 'Alamat_kantor_kecamatan'	];

    public function getUsers($id = false)
    {
        if ($id === false){
            return $this->findAll();
        }else{
            return $this->where(['ID' => $id])->first();
        }
    }
}