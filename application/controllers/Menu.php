<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Menu extends CI_Controller
 {
 	public function __construct()
  	{
  		parent::__construct();
  		
  		$this->load->library('form_validation');
  		}
 	

 	public function index ()
 		{
 		$data['title'] = 'Menu Management';
 		$data ['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
 		$data['menu'] = $this->db->get('user_menu')->result_array();
 		$this->form_validation->set_rules('menu', 'Menu', 'required',['required'=> 'Kolom nama menu wajib diisi.']);
 		if($this->form_validation->run() == false) {
 		$this->load->view('templates/header', $data);
 		$this->load->view('templates/sidebar', $data);
 		$this->load->view('templates/topbar', $data);
 		$this->load->view('menu/index', $data);
 		$this->load->view('templates/footer');
 		}

 		else {
 			$this->db->insert('user_menu', ['menu' => $this->input->post('menu')]);
 			$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Menu Ditambah!</div>');
 			redirect('menu');
 			}
 		}

 	public function submenu()
 		{
	 		$data['title'] = 'Submenu Management';
	 		$data ['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
	 		$this->load->model('Menu_model', 'menu');
	 		$data['subMenu'] = $this->menu->getSubMenu();
	 		$data['menu'] = $this->db->get('user_menu')->result_array();
	 		$data['icon'] = $this->db->get('user_sub_menu')->result_array();

	 		$this->form_validation->set_rules('title', 'Title', 'required', ['required' => 'Title harus diisi.']);
	 		$this->form_validation->set_rules('menu_id', 'Menu', 'required', ['required' => 'Menu harus diisi.']);
	 		$this->form_validation->set_rules('url', 'Url', 'required', ['required' => 'Url harus diisi.']);
	 		$this->form_validation->set_rules('icon', 'icon', 'required', ['required' => 'Icon harus diisi.']);

	 		if ($this->form_validation->run() == false){
	 		$this->load->view('templates/header', $data);
	 		$this->load->view('templates/sidebar', $data);
	 		$this->load->view('templates/topbar', $data);
	 		$this->load->view('menu/submenu', $data);
	 		$this->load->view('templates/footer');
 		}
	 	 	else {

			 		$data = [
			 			'title' => $this->input->post('title'),
			 			'menu_id' => $this->input->post('menu_id'),
			 			'url' => $this->input->post('url'),
			 			'icon' => $this->input->post('icon'),
			 			'is_active' => $this->input->post('is_active')
							];
			 		$this->db->insert('user_sub_menu', $data);
			 		$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Menu Ditambakan!</div>');
			 			redirect('menu/submenu');
	 			}
	 	}


		 public function hapus($id)
			 {
			 	$this->load->model('Menu_model', 'user_menu');
			 	$data['user_menu'] = $this->user_menu->hapusDataMenu($id);
			 	$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Data Dihapus!</div>');
			 	redirect('Menu/index');
		 	}


		 public function SubHapus($id)
			 {
				 	$this->load->model('Menu_model', 'user_sub_menu');
				 	$data['user_sub_menu'] = $this->user_sub_menu->hapusDataSubMenu($id);
				 	$this->session->set_flashdata('flash', 'Data Dihapus');
				 	redirect('Menu/submenu');
				 }

				 public function tambah_role()
				 {
					 $data['title'] = 'Tambah Role';
					 $data ['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
					 $data['role'] = $this->db->get('user_role')->result_array();
					 $this->form_validation->set_rules('role', 'role', 'required',['required'=> 'Kolom nama menu wajib diisi.']);
					 if($this->form_validation->run() == false) {
					 $this->load->view('templates/header', $data);
					 $this->load->view('templates/sidebar', $data);
					 $this->load->view('templates/topbar', $data);
					 $this->load->view('admin/role', $data);
					 $this->load->view('templates/footer');
					 }

					 else {
					 	$this->db->insert('user_role', ['role' => $this->input->post('role')]);
					 	$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Menu Ditambah!</div>');
					 	redirect('admin/role');
					 	}
				 
			 }

}