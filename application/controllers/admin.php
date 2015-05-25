<?php
    class Admin extends CI_Controller{
    	public function __construct(){
    		parent::__construct();
            $this->load->model('mArticle');
    	}
        /*===============    DASHBOARD    ====================*/
    	public function index(){

    		$data['template'] = 'backend/admin/index';
    		$data['active'] = 'Admin';
    		$data['meta_title'] = 'Administrator';
    		$this->load->view("backend/layouts/index",isset($data)?$data:NULL);
    	} 
        /*===============    ARTICLE    ====================*/
        public function viewArticle(){


                
                if ($this->input->post('submit') == 'Delete all' ) {

                    if(!empty($this->input->post('checkbox'))){
                        $flag = $this->mArticle->delArticles($this->input->post('checkbox'));
                        $this->session->set_flashdata('message_flash', $flag);
                        redirect('admin/viewArticle'); 
                    }else{
                        $flag= array(
                                'type'=>'error',
                                'message'=>'Ban phai chon du lieu truoc khi xoa'
                                );
                        $this->session->set_flashdata('message_flash', $flag); 
                    }
                   
                        
                }
                    
                
            $data['template'] = 'backend/admin/viewArticle';
            $data['active'] = 'viewArticle';
            $data['meta_title'] = 'viewArticle';
            $data['list_article'] = $this->mArticle->viewArticle();
            
            $this->load->view("backend/layouts/index",isset($data)?$data:NULL);
        }

        public function editArticle(){

            $data['template'] = 'backend/admin/editArticle';
            $data['active'] = 'editArticle';
            $data['meta_title'] = 'editArticle';
            $this->load->view("backend/layouts/index",isset($data)?$data:NULL);
        }
    	
        public function addArticle(){
            $this->load->library('form_validation');

            if ($this->input->post('submit')) {
                      $this->form_validation->set_rules('title', 'tieu de', 'trim|required');
                      $this->form_validation->set_rules('description', 'mo ta', 'trim|required');
                      $this->form_validation->set_error_delimiters('<div class="alert alert-danger alert-dismissable">
                                                <i class="fa fa-ban"></i>
                                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>', '</div>');
                      if ($this->form_validation->run() == true) {
                        $flag = $this->mArticle->addArticle();
                        $this->session->set_flashdata('message_flash', $flag);
                        redirect('admin/viewArticle');
                      }
            }
            $data['template'] = 'backend/admin/addArticle';
            $data['active'] = 'addArticle';
            $data['meta_title'] = 'addArticle';
            $this->load->view("backend/layouts/index",isset($data)?$data:NULL);
            
        }

         public function delArticle($id = 0){

            //Kiem tra danh muc co ton tai hay khong 
            $article_cat = $this->mArticle->get($id);
            if(!isset($article_cat) && empty($article_cat)){
                /*$newdata = array(
                            'type'=>'error',
                            'message'=>'Id Khong Ton tai'
                         );
                $this->session->set_userdata('message_error',$newdata);*/
               redirect('admin/viewArticle');

                
            }else{
                //Xac nhan xoa
                if($this->input->post('submit')){
                   $flag = $this->mArticle->delArticle($article_cat['type_id']);
                   $this->session->set_flashdata('message_flash', $flag);
                    redirect('admin/viewArticle');

                }
                
            }

            $data['article_cat'] = $article_cat;
            $data['template'] = 'backend/admin/delArticle';
            $data['active'] = 'delArticle';
            $data['meta_title'] = 'delArticle';
            $this->load->view("backend/layouts/index",isset($data)?$data:NULL);
            
        }

    	

    }

?> 

