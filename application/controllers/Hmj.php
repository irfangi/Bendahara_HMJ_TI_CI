<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hmj extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
    }
	public function index()
	{
			$data=array(
				'isi'=>$this->load->view('kasHMJ',array(),true)
			);
			$this->load->view('index',$data);
	}
}
