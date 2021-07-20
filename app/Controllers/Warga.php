<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Warga_model;

class Warga extends Controller
{
    public function index()
    {
        $model = new Warga_model;
        $data['title'] = 'Data Warga';
        $data['getWarga'] = $model->getWarga();
        echo view('header_view', $data);
        echo view('warga_view', $data);
        echo view('footer_view', $data);
    }

    public function tambah()
    {
        $data['title'] = 'Tambah Data Warga';
        echo view('header_view', $data);
        echo view('tambah_view', $data);
        echo view('footer_view', $data);
    }

    public function add()
    {
        $model = new Warga_model;
        $data = array(
            'id'  => $this->request->getPost('id'),
            'nik' => $this->request->getPost('nik'),
            'nama' => $this->request->getPost('nama'),
            'kelamin' => $this->request->getPost('kelamin'),
            'alamat' => $this->request->getPost('alamat'),
            'no_rumah' => $this->request->getPost('no_rumah'),
        );
        $model->saveWarga($data);
        echo '<script>
                alert("Sukses Tambah Data Warga");
                window.location="'.base_url('warga').'"
            </script>';

    }

    public function edit($id)
    {
        $model = new Warga_model;
        $getWarga = $model->getWarga($id)->getRow();
        if(isset($getWarga))
        {
            $data['warga'] = $getWarga;
            $data['title']  = 'Edit '.$getWarga->id;

            echo view('header_view', $data);
            echo view('edit_view', $data);
            echo view('footer_view', $data);

        }else{

            echo '<script>
                    alert("ID '.$id.' Tidak ditemukan");
                    window.location="'.base_url('warga').'"
                </script>';
        }
    }

    public function update()
    {
        $model = new Warga_model;
        $id = $this->request->getPost('id');
        $data = array(
            'id' => $this->request->getPost('id'),
            'nik' => $this->request->getPost('nik'),
            'nama'         => $this->request->getPost('nama'),
            'kelamin'  => $this->request->getPost('kelamin'),
            'alamat'  => $this->request->getPost('alamat'),
            'no_rumah'  => $this->request->getPost('no_rumah'),
        );
        $model->editWarga($data,$id);
        echo '<script>
                alert("Sukses Edit Data Warga");
                window.location="'.base_url('warga').'"
            </script>';

    }

    public function hapus($id)
    {
        $model = new Warga_model;
        $getWarga = $model->getWarga($id)->getRow();
        if(isset($getWarga))
        {
            $model->hapusWarga($id);
            echo '<script>
                    alert("Hapus Data Warga Sukses");
                    window.location="'.base_url('warga').'"
                </script>';

        }else{

            echo '<script>
                    alert("Hapus Gagal !, ID Warga '.$id.' Tidak ditemukan");
                    window.location="'.base_url('warga').'"
                </script>';
        }
    }

}