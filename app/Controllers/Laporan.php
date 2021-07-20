<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Laporan_model;

class Laporan extends Controller
{
    public function index()
    {
        $model = new Laporan_model;
        $data['title'] = 'Laporan Iuran';
        $data['getLaporanTahun'] = $model->getLaporanTahun();

        $data['getListBulan'] = $model->getListBulan();
        $data['getListTahun'] = $model->getListTahun();

        echo view('header_view', $data);
        echo view('iuran/laporan_view', $data);
        echo view('footer_view', $data);
	}

    public function total()
    {
        $model = new Laporan_model;
        $data['title'] = 'Laporan Iuran Bulan dan Tahun';
        $db = \Config\Database::connect();
        $bulan = $this->request->getPost('bulan');
        $tahun = $this->request->getPost('tahun');
        $builder1 = $db->query("(SELECT sum(jumlah),bulan,tahun FROM iuran WHERE bulan='$bulan' and tahun='$tahun')", false);
        $data['total'] = $builder1->getResultArray();

        $builder2 = $db->query("(SELECT nama FROM warga WHERE NOT EXISTS (SELECT warga_nik FROM iuran where warga.nik = iuran.warga_nik and bulan= '$bulan' and tahun= '$tahun' ))", false);
        $data['belumbayar'] = $builder2->getResultArray();

        echo view('header_view', $data);
        echo view('iuran/total_view', $data);
        echo view('footer_view', $data);
    }

}