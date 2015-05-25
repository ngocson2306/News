<?php 
   if ( ! defined('BASEPATH')) exit('No direct script access allowed');
   
   class mArticle extends CI_Model {
   
	   	public $variable;
	   
	   	public function __construct()
	   	{
	   		parent::__construct();
	   	}

	   	public function get($id = 0){
	   			return $this->db->select('type_id, type_name')->from('types')->where('type_id',(int)$id)->get()->row_array();
	   			
	   	}

	   	public function addArticle(){
	   		$this->load->helper('date');
			$date = date('Y-m-d H:m:s');

	   		$this->db->insert('types', array(
	   			'type_name'=> $this->input->post('title'),
	   			'type_des'=> $this->input->post('description'),
	   			'type_date'=> $date
	   		));
	   		$flag = $this->db->affected_rows();
	   		if ($flag >0) {
	   			return array(
	   				'type'=>'successfull',
	   				'message'=>'them du lieu thanh cong'
	   				);
	   		}else{
	   			return array(
	   				'type'=>'error',
	   				'message'=>'khong co du lieu them vao'
	   				);
	   		}
	   	}

	   	public function viewArticle(){
	   		return $this->db->select('type_id, type_name, type_des, type_date')->from('types')->order_by('type_id ASC')->get()->result_array();
	   	}

	   	public function delArticle($id = 0){
	   		
	   		
	   		$this->db->delete('types', array('type_id' => (int)$id)); 
	   		$flag = $this->db->affected_rows();
	   		
	   		if ($flag > 0) {
	   			return array(
	   				'type'=>'successfull',
	   				'message'=>'Xoa du lieu thanh cong'
	   				);
	   		}else{
	   			return array(
	   				'type'=>'error',
	   				'message'=>'Khong co du lieu nao dc xoa'
	   				);
	   		}
	   	}

	   	public function delArticles($id = null ){

	   		 $this->db->where_in('type_id', $id)->delete('types');
	   		

	   		
	   		$flag = $this->db->affected_rows();
	   		if ($flag >0) {
	   			return array(
	   				'type'=>'successfull',
	   				'message'=>'Da xoa '.count($id).'du lieu thanh cong'
	   				);
	   		}else{
	   			return array(
	   				'type'=>'error',
	   				'message'=>'Ban phai chon du lieu truoc khi xoa'
	   				);
	   		}
	   	}
   
   }
   
   /* End of file mArticle.php */
   /* Location: ./application/models/mArticle.php */
?>