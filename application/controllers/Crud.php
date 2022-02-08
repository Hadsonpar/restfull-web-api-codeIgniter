<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('crud_model');
    }

    public function index()
    {
    	//$this->load->view('welcome_message');
        $this->load->view("theme/head");
        $this->load->view("crud/home");
        $this->load->view("theme/footer");
    }

    public function create(){
    	$this->load->view("theme/head");
        $this->load->view("crud/create");
        $this->load->view("theme/footer");
    }

    public function create_post(){

        $first_name = $this->input->post('fname');
        $last_name = $this->input->post('lname');
        $email = $this->input->post('email');
        $gender = $this->input->post('gender');
        $age = $this->input->post('age');

        $res = $this->crud_model->create($first_name,$last_name,$email,$gender,$age);
		if($res == "success"){
			redirect(site_url('crud/read'));
		}else{
			redirect(site_url('crud/create_failed'));
		}
    }

    public function create_failed(){
        echo "create operation failed";
    }

    public function read(){
        $data['res_id'] = $this->crud_model->read();
        $this->load->view('crud/view',$data);
    }

    public function update($id){
        $data['crud_data'] = $this->crud_model->get_record_byID($id);
        if(!empty($data['crud_data'])){
            $this->load->view('crud/update',$data);
        }else{
            redirect(site_url());
        }
    }

    public function update_post(){
		$first_name = $this->input->post('fname');
		$last_name = $this->input->post('lname');
		$email = $this->input->post('email');
		$gender = $this->input->post('gender');
		$age = $this->input->post('age');
		$id = $this->input->post('id');
		$res = $this->crud_model->update($first_name,$last_name,$email,$gender,$age,$id);
		if($res == "success"){
			redirect(site_url('crud/read'));
		}else{
			redirect(site_url('crud/update_failed'));
		}
	}

    public function update_failed(){
        echo "Update operation failed";
    }       

    public function delete($id){
        $res = $this->crud_model->delete($id);
        if($res == "success"){
            redirect(site_url('crud/read'));
        }else{
            redirect(site_url('crud/delete_failed'));
        }
    }

    public function delete_failed(){
        echo "Delete operation failed";
    }
}