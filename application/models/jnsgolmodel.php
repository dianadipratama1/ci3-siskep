<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class jnsgolmodel extends CI_Model {

	public function __construct(){
		parent::__construct();
	}


	function ambildata(){//$table
		$this->db->from('golongan');
		$this->db->order_by('idgolongan','DESC');
		$query=$this->db->get('');
		return $query->result();
		// return $this->db->get($table);
	}

	function tambahdata($data,$table){
		$this->db->insert($table,$data);
	}

	function updatejnsgol(){
		$idgolongan	=	$this->input->post('idgolongan');
		$nama_gol	=	$this->input->post('nama_gol');
		$gapok		=	$this->input->post('gapok');

		$this->db->set('nama_gol',$nama_gol);
		$this->db->set('gapok',$gapok);
		$this->db->where('idgolongan',$idgolongan);
		$result = $this->db->update('golongan');
		return $result;
	
	}

	function deletejnsgol(){
		$idgolongan	= $this->input->post('idgolongan');
		$this->db->where('idgolongan',$idgolongan);
		$result=$this->db->delete('golongan');
		return $result;
	}

	// function searchdata($query){
	// 	$this->db->select("*");
	// 	$this->db->from("golongan");
	// 	if ($query!='') {
	// 		$this->db->like('nama_gol',$query);
	// 		$this->db->or_like('gapok',$query);
	// 	}
	// 	$this->db->order_by('idgolongan','DESC');
	// 	return $this->db->get();
	// }
	// function ambilid($table,$where){
	// 	$this->db->get_where($table,$where);
	// }

	// function simpanjnsgol($nama_gol,$gapok){
 //    // $today=date('Y-m-d');

 //    $data = array(
 //        			'nama_gol'  => $nama_gol,
 //        			'gapok'		=> $gapok
 //    			);
 //    $this->db->insert('golongan', $data);  
 //    $value = $this->db->affected_rows();
 //    return $value;
 //  }  

	// public function tampil_golongan(){
	// 	$this->db->select('*');
	// 	$this->db->from('golongan');
	// 	$data=$this->db->get();
	// 	if ($data->num_rows()>0) {
	// 		return $data->result();
	// 	}
	// }

	// public function simpan($golongan,$data){
	// 	return $this->db->insert($golongan,$data);
	// }

	// public function hapus($table,$data){
	// 	return $this->db->delete($table,$data);
	// }

}