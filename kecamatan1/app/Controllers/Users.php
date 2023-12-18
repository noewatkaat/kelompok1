<?php

namespace App\Controllers;
use App\Models\UsersModel;

class Users extends BaseController
{
    public function __construct()
    {
        $this->UsersModel = new UsersModel();
    }
    public function index(): string
    {
        $data['users'] = $this->UsersModel->getUsers();
        return view('users/index', $data);
    }
    public function tambah()
    {
        return view('users/tambah'); 
    }
    public function simpan()
    {
        $nama =$this->request->getVar('namaKecamatan');
        $kodepos =$this->request->getVar('kodeposKecamatan');
        $alamat =$this->request->getVar('alamatKantorKecamatan');
        $data=[
            'Nama_kecamatan'=>$nama,
            'Kodepos_kecamatan'=>$kodepos,
            'Alamat_kantor_kecamatan'=>$alamat,
        ];
        $this->UsersModel->save($data);
       return redirect()->to('/users');
       
    }
    public function ubah($id){
        $data['users']=$this->UsersModel->getUsers($id);
        return view('users/ubah',$data);

    }
    public function update()
    {
        $id = $this->request->getVar('kode');
        $nama = $this->request->getVar('namaKecamatan');
        $kodepos = $this->request->getVar('kodeposKecamatan');
        $alamat = $this->request->getVar('alamatKantorKecamatan');

        $data = [
            'ID'=> $id,
            'Nama_kecamatan'=> $nama,
            'Kodepos_kecamatan'=> $kodepos,
            'Alamat_kantor_kecamatan'=> $alamat
        ];
        $this->UsersModel->save($data);
        return redirect()->to('/users');
    }
    
    public function delete($id){
        $this->UsersModel->delete($id);
        return redirect()->to('/users');
    }
}
