<?php 

 class Invoice extends CI_Controller{

 
 	
 	public function index() 
 	{
 		$data['title'] = 'Invoice';
		$data ['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
 		$data['invoice'] = $this->model_invoice->tampil_data();
 		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('admin/invoice', $data);
		$this->load->view('templates/footer');
 	}

 	public function detail($id_invoice)
 	{
 		$data['title'] = 'Detail Invoice';
		$data ['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
 		$data['invoice'] = $this->model_invoice->ambil_id_invoice($id_invoice);
 		$data['transaksi'] = $this->model_invoice->ambil_id_transaksi($id_invoice);

 		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('admin/detail_invoice', $data);
		$this->load->view('templates/footer');
 	}

 	public function Customer ()
 	{
 		$data['title'] = 'Data Costumer';
 		$data ['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
 		$data ['invoice'] = $this->model_invoice->tampil_data_cst()->result();
 			 		
 		$this->load->view('templates/header', $data);
 		$this->load->view('templates/sidebar', $data);
 		$this->load->view('templates/topbar', $data);
 		$this->load->view('admin/data_customer', $data);
 		$this->load->view('templates/footer');
 	}


 	public function hapusDataInvoice($id)
 	{
 			$this->model_invoice->hapusDataInvoice($id);
 			$this->session->set_flashdata('flash', 'Data Dihapus');
 			redirect('invoice/Customer');
 	}

 }