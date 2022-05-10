<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
  public function __construct()
  {
  	parent::__construct();
    $this->load->model('M_datadiri','mself');
  }

  public function index()
  {
  	$data=[
  		'data'=>$this->mself->getdatadiri(),
  		'dataorganisasi'=>$this->mself->getdataorganisasi()->result(),
  		'datakeahlian'=>$this->mself->getdatakeahlian()->result()
  	];

  	// echo json_encode($data);
  	// echo $data['data']->nama; //mengambil data dikolom nama
  	$this->load->view('utama',$data);

  }
  public function home_dua()
  {
 $this->load->view('template/header');
 $this->load->view('template/content');
 $this->load->view('template/footer');
}
  public function comment()
{
	echo "look at this!";
}
}