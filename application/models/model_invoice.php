<?php 

class Model_invoice extends CI_Model
{
	
	public function index()

	{
				date_default_timezone_set('Asia/Jakarta');
				$nama 			= $this->input->post('nama');
				$alamat			= $this->input->post('alamat');
				$tanggal_pinjam = $this->input->post('tanggal_pinjam');
				$bank 			= $this->input->post('bank');
				$durasi 		= $this->input->post('durasi');
				$no_telpon		= $this->input->post('no_telpon');
				$no_ktp 		= $this->input->post('no_ktp');
				$email 			= $this->input->post('email');
				$photo_ktp   	= ['photo_ktp'];
		 		if($photo_ktp	='') {}else{
		 				$config['upload_path']   = './assets/upload/ktp';
		 				$config['allowed_types'] = 'jpg|jpeg|png|tiff|jfif';

		 				$this->load->library('upload', $config);
		 				if(!$this->upload->do_upload('photo_ktp')){
		 					echo "Gambar Gagal DiUpload";
		 				} else{
		 				$photo_ktp=$this->upload->data('file_name');
		 				}
		 			}

				$invoice 		= array (
					'nama' 			 => $nama,
					'alamat'		 => $alamat,
					'bank' 			 => $bank,
					'durasi' 		 => $durasi,
					'email' 	 	 => $email,
					'photo_ktp' 	 => $photo_ktp,
					'no_telpon' 	 => $no_telpon,
					'no_ktp' 		 => $no_ktp,
					'tgl_pesan'		 => date('Y-m-d H:i:s'),
					'batas_bayar' 	 => date('Y-m-d H:i:s', mktime(date('H'),date('i'),date('s'),date('m'),date('d') + 1,date ('Y'))),
					'tanggal_pinjam' => date('Y-m-d'),
					
				);
				$this->db->insert('invoice', $invoice);
				$id_invoice = $this->db->insert_id();

				foreach ($this->cart->contents() as $item){
					$data = array(
						'id_invoice' => $id_invoice,
						'id_mobil' 	 => $item['id'],
						'merk' 		 => $item['name'],
						'durasi'	 => $durasi,
						'harga'		 => $item['price'],
					);
					$this->db->insert('transaksi', $data);
				}
				return TRUE;
	}

	public function tampil_data()
	{
		$result = $this->db->get('invoice');
		if($result->num_rows() > 0){
			return $result->result();

		}else {
			return false;
		}
	}

	public function ambil_id_invoice($id_invoice)
	{
		$result = $this->db->where('id', $id_invoice)->limit(1)->get('invoice');
		if($result->num_rows() > 0){
			return $result->row();
		}else{
			return false;
		}
	}

	public function ambil_id_transaksi($id_invoice)
	{
		$result = $this->db->where('id_invoice', $id_invoice)->get('transaksi');
		if($result->num_rows() >0){
			return $result->result();
		}else{
			return false;
		}
	}


	public function hapusDataInvoice($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('invoice');
		
	}

	public function tampil_data_cst()
	{
	return $this->db->get('invoice');
	}

}