<?php 

class Rental_model extends CI_model {

	public function getAllData($table)
		{
			return $this->db->get($table);
		}

	public function insert_data($data,$table)
		{
			$this->db->insert($table ,$data);
		}

		public function tambah_sewa_mobil($data,$table)
			{
				$this->db->insert($table ,$data);
			}

	public function edit_mobil($where,$table)
	{
		return $this->db->get_where($table, $where);

	}

	public function update_mobil($where,$data,$table)
	{
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	public function hapusDataMobil($id_mobil)
	{
		$this->db->where('id_mobil', $id_mobil);
		$this->db->delete('mobil');
		
	}

	public function detail_mobil($id_mobil)
	{
		$result = $this->db->where('id_mobil', $id_mobil)->get('mobil');
		if($result->num_rows() >0){
			return $result->result();			
		} else {
			return false;
		}
	}

	public function detail_mobil_user($id_mobil)
	{
		$result = $this->db->where('id_mobil', $id_mobil)->get('mobil');
		if($result->num_rows() >0){
			return $result->result();			
		} else {
			return false;
		}
	}

	public function tampil_data()
	{
		return $this->db->get('mobil');
	}

	public function find($id_mobil)
	{
		$result = $this->db->where('id_mobil', $id_mobil)
						->limit(1)
						->get('mobil');
		if($result->num_rows() > 0){
		return $result->row();
		}else{
		return array();
		}
	}
	
}