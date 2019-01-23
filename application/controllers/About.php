<?php 
class About extends CI_Controller{
	function __construct(){
		parent::__construct();
	}

	function index(){
		$this->load->view('about');
	}

	function visimisi(){
		$this->load->view('visimisi');
	}

	function lokasi(){
		$this->load->view('lokasi');
	}

	function nilaibudaya(){
		$this->load->view('v_nilaibudaya');
	}



}