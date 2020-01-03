<?php

class Data_mobil extends CI_Controller
 {
 	

 	public function index ()
		 	{
		 		$data['title'] = 'Data Mobil';
		 		$data ['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		 		$data['mobil'] = $this->rental_model->getAllData('mobil')->result();
		 		$data['type'] = $this->rental_model->getAllData('type')->result();

		 		$this->load->view('templates/header', $data);
		 		$this->load->view('templates/sidebar', $data);
		 		$this->load->view('templates/topbar', $data);
		 		$this->load->view('admin/data_mobil', $data);
		 		$this->load->view('templates/footer');
		 	}

 	public function tambah_mobil()
		 	{

		 		$data['title'] = 'Tambah Data Mobil';
		 		$data ['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		 		$data['type'] = $this->rental_model->getAllData('type')->result();

		 		$this->load->view('templates/header', $data);
		 		$this->load->view('templates/sidebar', $data);
		 		$this->load->view('templates/topbar', $data);
		 		$this->load->view('admin/form_tambah_mobil', $data);
		 		$this->load->view('templates/footer');
		 	}

 	public function tambah_mobil_aksi()
		 	{


		 		$this->_rules();
		 		if ($this->form_validation->run() ==FALSE) {
		 			$this->tambah_mobil();
		 		}else{
		 			$kode_type   	= $this->input->post('kode_type');
		 			$merk  			= $this->input->post('merk');
		 			$no_plat   		= $this->input->post('no_plat');
		 			$warna   		= $this->input->post('warna');
		 			$tahun   		= $this->input->post('tahun');
		 			$status   		= $this->input->post('status');
		 			$harga   		= $this->input->post('harga');
		 			$gambar   		= $FILES['gambar']['name'];
		 			if($gambar='') {}else{
		 				$config['upload_path']   = './assets/upload';
		 				$config['allowed_types'] = 'jpg|jpeg|png|tiff|jfif';

		 				$this->load->library('upload', $config);
		 				if(!$this->upload->do_upload('gambar')){
		 					echo "Gambar Mobil Gagal DiUpload";
		 				} else{
		 				$gambar=$this->upload->data('file_name');
		 				}
		 			}
		 			$data = array(
		 				'kode_type' => $kode_type,
		 				'merk' 		=> $merk,
		 				'no_plat' 	=> $no_plat,
		 				'tahun' 	=> $tahun,
		 				'warna' 	=> $warna,
		 				'status' 	=> $status,
		 				'harga' 	=> $harga,
		 				'gambar'	=> $gambar
		 			);

		 			$this->rental_model->insert_data($data,'mobil');
		 			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
							  <strong>Data Mobil Berhasil Ditambahkan.
							  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
							    <span aria-hidden="true">&times;</span>
							  </button>
							</div>');
		 			redirect('data_mobil');

		 		}
		 	}

 	public function _rules()
		 	{
		 		$this->form_validation->set_rules('kode_type','Kode_type', 'required',['required' => 'Kode Type Tidak Boleh Kosong.']);
		 		$this->form_validation->set_rules('merk','Merk', 'required',['required' 		=> 'Merk Tidak Boleh Kosong.']);
		 		$this->form_validation->set_rules('no_plat','No Plat', 'required',['required'   => 'No Plat Tidak Boleh Kosong.']);
		 		$this->form_validation->set_rules('tahun','tahun', 'required',['required'       => 'Tahun Tidak Boleh Kosong.']);
		 		$this->form_validation->set_rules('warna','Warna', 'required',['required' 		=> 'Warna Tidak Boleh Kosong.']);
		 		$this->form_validation->set_rules('status','Status', 'required',['required'     => 'Status Tidak Boleh Kosong.']);
		 	}
 

 	public function detail ($id_mobil)
 	{
 		$data['title'] = 'Detail Mobil';
 		$data ['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
 		$data ['mobil'] = $this->rental_model->detail_mobil($id_mobil);
 		
 		

 		$this->load->view('templates/header', $data);
 		$this->load->view('templates/sidebar', $data);
 		$this->load->view('templates/topbar', $data);
 		$this->load->view('admin/detail_mobil', $data);
 		$this->load->view('templates/footer');

 	}

 	public function detail_mobil_user ($id_mobil)
 	{
 		$data['title'] = 'Detail Mobil';
 		$data ['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
 		$data ['mobil'] = $this->rental_model->detail_mobil_user($id_mobil);
 		
 		

 		$this->load->view('templates/header', $data);
 		$this->load->view('templates/sidebar', $data);
 		$this->load->view('templates/topbar_user', $data);
 		$this->load->view('admin/detail_mobil_user', $data);
 		$this->load->view('templates/footer');

 	}


	public function hapus($id_mobil)
	{
		$this->rental_model->hapusDataMobil($id_mobil);
		$this->session->set_flashdata('flash', 'Data Dihapus');
		redirect('Data_mobil');

	}


	public function edit($id_mobil)
	{
		$data['title'] = 'EDIT MOBIL';
		$data ['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$where = array('id_mobil' => $id_mobil);
		$data['mobil'] = $this->rental_model->edit_mobil($where,'mobil')->result();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('admin/edit_mobil', $data);
		$this->load->view('templates/footer');
	}

	public function update()
	{
		
		$id_mobil	 = $this->input->post('id_mobil');
		$kode_type   = $this->input->post('kode_type');
		$merk 		 = $this->input->post('merk');
		$no_plat 	 = $this->input->post('no_plat');
		$warna 		 = $this->input->post('warna');
		$tahun 		 = $this->input->post('tahun');
		$status 	 = $this->input->post('status');

		$data = array(
			'kode_type' => $kode_type,
			'merk' => $merk,
			'no_plat' => $no_plat,
			'warna' => $warna,
			'tahun' => $tahun,
			'status' => $status

		);
		$where = array(
			'id_mobil' => $id_mobil
		);
		$this->rental_model->update_mobil($where, $data, 'mobil');
		redirect ('Data_mobil');
	}

	public function sewa_mobil($id_mobil)
	{
		$data['title'] = 'Detail Mobil';
		$data ['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		
		$keranjang = $this->rental_model->find($id_mobil);
			$data = array(
		        'id'      => $keranjang->id_mobil,
		        'qty'     => 1,
		        'price'   => $keranjang->harga,
		        'name'    => $keranjang->merk
		);

		$this->cart->insert($data);
		redirect ('user/home');
	}

	public function detail_sewa()
	{
		$data['title'] = 'Detail Sewa';
		$data ['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar_user', $data);
		$this->load->view('user/keranjang', $data);
		$this->load->view('templates/footer');
	}

	public function hapus_sewa()
	{
		$this->cart->destroy();
		redirect('user/home');
	}

	public function pembayaran_sewa()
	{
		$data['title'] = 'Pembayaran Sewa';
		$data ['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar_user', $data);
		$this->load->view('user/pembayaran_sewa', $data);
		$this->load->view('templates/footer');
	}

	public function proses_sewa_mobil()
	{

			$data['title'] = 'Pembayaran Sewa';
			$data ['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

			$is_processed = $this->model_invoice->index();
			if ($is_processed){
			$this->cart->destroy();
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar_user', $data);
			$this->load->view('user/proses_sewa_mobil', $data);
			$this->load->view('templates/footer');
		}else {
			echo "Ma'af Proses Sewa Anda Gagal.";
		}	
	}
 }
