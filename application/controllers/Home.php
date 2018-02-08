<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('PhModel','tampilPH');
    }

	public function index()
	{
		$page= array(
			'isi'=> $this->load->view('home',array(),true),
			'menu'=> $this->pageMenu()
		);
		$this->load->view('index',$page);
	}

	public function pageMenu($pg=""){
		$data= array();
		return $this->load->view('menu',$data,true);
	}

	public function PH(){
		$page= array(
			'isi'=> $this->load->view('kasPH',array(),true),
			'menu'=> $this->pageMenu()
		);
		$this->load->view('index',$page);
	}
	


	public function HMJ(){
		$page= array(
			'isi'=> $this->load->view('kasHMJ',array(),true),
			'menu'=> $this->pageMenu()
		);
		$this->load->view('index',$page);
	}



}
