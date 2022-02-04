<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('UserModel');
	}
	public function index()
	{
		$data = $this->UserModel->getUser();
		// print_r($this->db->last_query()); die;
		$this->load->view('user/index', ['data'=>$data]);
	}

	public function error()
	{
		$this->load->view('user/error');
	}

	public function tambah()
	{
	$this->load->view('user/tambah');
	}
	public function action_tambah()
	{
		if($this->UserModel->simpan()){
			redirect(base_url('index.php/user/index'));
		}else{
			redirect(base_url('index.php/user/error/'));
		}
	}

	public function edit($id)
    {
        $data = $this->UserModel->getData($id);
        $this->load->view('user/edit',['data'=>$data]);
    }
    public function action_edit($id)
    {
        if($this->UserModel->edit($id)){
            redirect(base_url('index.php/user/index/'.$id));
        }else{
            redirect(base_url('index.php/user/error/'));
        }
	}
	public function delete($id)
	{
		if($this->UserModel->delete($id)){
			redirect(base_url('index.php/user/'));
		}
	}
}
