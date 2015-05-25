<?php 
     if (!defined('BASEPATH')) exit('No direct script access allowed');
     
     class Testdb extends CI_Controller {
     
         function __construct() {
             parent::__construct();
         }
     
         function index() {
            //$this->load->database();
            $query = $this->db->get('articles');
            $result = $query->result();

            foreach ($result as $row) {
            	echo $row->content;
            }
        }
     }

 ?>