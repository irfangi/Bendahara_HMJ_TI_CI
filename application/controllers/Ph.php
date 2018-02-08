<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ph extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->model('PhModel','modelPH');
    }
	public function index()
	{
			$res = array(
				'tampilKasPH' => $this->modelPH->tampil("bendahara_kasPH")
			);

			$data=array(
				'isi'=>$this->load->view('kasPH',$res,true)
			);
			$this->load->view('index',$data,$res,true);
	}
	public function laporan(){
		$res = array(
			'tampilLapKasPH' => $this->modelPH->tampilRows("bendahara_lap_kasPH")
		);
		$data=array(
			'isi'=>$this->load->view('viewLapKasPh',$res,true)
		);
		$this->load->view('index',$data,$res,true);
	}
	public function editTabPH($idTabPH=""){
			$cek= array(
				'tampil'=> $this->modelPH->editTabPH($idTabPH,'bendahara_tabunganPH')
			);
			$data= array(
				'isi'=> $this->load->view('editKasPH',$cek,true)
			);
			$this->load->view('index',$data,$cek,true);
	}
	public function doEditTabPH(){
			$id=$_POST['id_TabPH'];
			$tabungan = $_POST['tabungan'];
			$dataUpdateTabPH = array(
				'tabungan' => $tabungan
			);
			$idEdit=array('idTabPH'=>$id);
			$res=$this->modelPH->editTabPH($idEdit,"bendahara_tabunganPH",$dataUpdateTabPH);
			if ($res>=1) {
				$this->session->set_flashdata('pesan','Berhasil Update Tabungan PH');
				redirect('ph');
			}else {
				$this->session->set_flashdata('pesan','Gagal Update Tabungan PH');
				redirect('ph');
			}
	}
	public function tambahTabPh($idTabPH=""){
		if (empty($idTabPH)) {
			redirect('Home/ph');
		}else {;
			$page= array(
				'isi'=> $this->load->view('tambahKasPH',array(),true)
			);
			$this->load->view('index',$page);
		}
	}
	public function tambahPh(){
		$data= array(
			'isi'=> $this->load->view('tambahPH',array(),true)
		);
		$this->load->view('index',$data);
	}
	public function doTambahPh(){
		$npk = $_POST['npk'];
		$nama = $_POST['namaPH'];
		$tabungan = $_POST['tabungan'];
		$data = array(
			"npk"=>$npk,
			"namaPH"=>$nama,
			"tabungan"=>$tabungan
		);
		$res = $this->modelPH->tambahPH("bendahara_tabunganPH",$data);
		if ($res>=1) {
			$this->session->set_flashdata('pesan','Berhasil Tambah PH');
			redirect('ph');
		}else {
			$this->session->set_flashdata('pesan','Gagal tambah PH');
			redirect('ph');
		}
	}
	public function hapusTabPH($id){
		$res = $this->modelPH->hapusTabPH("bendahara_tabunganPH",array("idTabPH"=>$id));
		if ($res>=1) {
			$this->session->set_flashdata('pesan','Berhasil hapus Tabungan PH');
			redirect('ph');
		}else {
			$this->session->set_flashdata('pesan','Gagal hapus Tabungan PH');
			redirect('ph');
		}
	}
	public function kurangKasPh(){
		$kurang=$_POST['kurang'];
		$res = $this->modelPH->kurangKasPh("bendahara_tabunganPH",$kurang);
		if ($res>=1) {
			$this->session->set_flashdata('pesan','Berhasil Convert Kas PH');
			redirect('ph');
		}else {
			$this->session->set_flashdata('pesan','Berhasil Convert Kas PH');
			redirect('ph');
		}
	}
	public function gunakanKasPh(){
		$totKeluar=$_POST['totKeluar'];
		$guna=$_POST['guna'];
		$data=array(
			'jumPengeluaranKasPh' =>$totKeluar ,
			'keperluanPengeluaranKasPh'=>$guna,
			'tglKasDigunakan'=>date("Y-m-d G:i:s") 
		);
		$res = $this->modelPH->gunakanKasPH("bendahara_lap_kasPH",$data,$totKeluar);
		if ($res>=1) {
			$this->session->set_flashdata('pesan','Berhasil tambah ke laporan Kas PH');
			redirect('ph');
		}else {
			$this->session->set_flashdata('pesan','Berhasil tambah ke laporan Kas PH');
			redirect('ph');
		}
	}
	// data tables
	public function ajax_list()
    {
        $list = $this->modelPH->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $modelPH) {
            $no++;
						$del=
            $row = array();
            $row[] = $no;
            $row[] = $modelPH->npk;
            $row[] = $modelPH->namaPH;
            $row[] = $modelPH->tabungan;
						$row[] = '<a href="ph/editTabPH/'.$modelPH->idTabPH.'" class="btn btn-xs btn-warning">
													<span class="glyphicon glyphicon-edit"></span> edit
												</a> ||
												<a href="ph/hapusTabPH/'.$modelPH->idTabPH.'" class="btn btn-xs btn-danger">
													<span class="glyphicon glyphicon-remove"></span> hapus
												</a> ||
												<a href="ph/tambahTabPH/'.$modelPH->idTabPH.'" class="btn btn-xs btn-success">
													<span class="glyphicon glyphicon-remove"></span> tambah
												</a>';

            $data[] = $row;
        }

        $output = array(
                        "draw" => $_POST['draw'],
                        "recordsTotal" => $this->modelPH->count_all(),
                        "recordsFiltered" => $this->modelPH->count_filtered(),
                        "data" => $data,
                );
        //output to json format
        echo json_encode($output);
    }
}
