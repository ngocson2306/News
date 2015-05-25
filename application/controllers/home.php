<?php
    class Home extends CI_Controller{
    	public function __construct(){
    		parent::__construct();
    	}

    	public function index(){

    		$data['template'] = 'frontend/home/index';
    		$data['active'] = 'homepage';
    		$data['meta_title'] = 'homepage';
    		$this->load->view("frontend/layouts/index",isset($data)?$data:NULL);
    	}

    	public function fullwidth(){
    		$data['template'] = 'frontend/home/fullwidth';
    		$data['active'] = 'fullwidth';
    		$data['meta_title'] = 'fullwidth';
    		$this->load->view("frontend/layouts/index",isset($data)?$data:NULL);
    	}

    	public function demostyle(){
    		$data['template'] = 'frontend/home/demostyle';
    		$data['active'] = 'demostyle';
    		$data['meta_title'] = 'demostyle';
    		$this->load->view("frontend/layouts/index",isset($data)?$data:NULL);
    	}

    	

    }

?> 

