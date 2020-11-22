<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class jnsgolongan extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->model('jnsgolmodel','model');
		$this->load->helper('form');
		$this->load->helper('url');
	}

	public function index()
	{
		// $this->load->library('xajax');
		// $this->xajax->register(XAJAX_FUNCTION, array('simpanjnsgol',&$this,'simpanjnsgol'));   
  //       // $this->xajax->register(XAJAX_FUNCTION, array('editakun',&$this,'editakun'));   
  //       // $this->xajax->register(XAJAX_FUNCTION, array('updateakun',&$this,'updateakun'));   
  //       // $this->xajax->register(XAJAX_FUNCTION, array('hapusakun',&$this,'hapusakun'));   
  //       // $this->xajax->register(XAJAX_FUNCTION, array('deleteakun',&$this,'deleteakun'));   
  //       // $this->xajax->register(XAJAX_FUNCTION, array('cariakun',&$this,'cariakun'));                
  //       $this->xajax->processRequest();
  //       // $data['akun'] = $this->akun_m->getdataakun(''); 
  //       $data['xajax_js'] = $this->xajax->getJavascript();
		// $this->load->view('Utama/utama_view');
		// $data['daftargolongan']=$this->jnsgolmodel->tampil_golongan();

		$this->load->view('partial/header');
		$this->load->view('partial/sidebar');
		$this->load->view('golongan/bcjnsgol');
		$this->load->view('golongan/jnsgolview');
		$this->load->view('partial/footer');

	}

	function ambildata(){
		$datagolongan = $this->model->ambildata();
		// $datagolongan = $this->model->ambildata('golongan')->result();
		echo json_encode($datagolongan);
	}

	function tambahdata(){
		$nama_gol=$this->input->post('nama_gol');
		$gapok	 =$this->input->post('gapok');

		if ($nama_gol=='') {
			$result['pesan']="Nama Golongan Belum Di Isi !";
		}elseif ($gapok=='') {
			$result['pesan']="Gaji Poko Belum Di Isi !";
		}else{
			$result['pesan']="";

			$data = array(	
							'nama_gol'=>$nama_gol,
							'gapok'	  =>$gapok
						 );

			$this->model->tambahdata($data,'golongan');
		}
		echo json_encode($result);
	}

	function update(){
		$data=$this->model->updatejnsgol();
		echo json_encode($data);
	}

	function delete(){
		$data=$this->model->deletejnsgol();
		echo json_encode($data);
	}

	// function ambilid(){
	// 	$idgolongan=$this->input->post('idgolongan');
	// 	$where=array('idgolongan' =>$idgolongan , );
	// 	$datagolongan=$this->model->ambilid('golongan',$where)->result();
	// 	echo json_encode($datagolongan);
	// }

	// function simpanjnsgol($nama_gol,$gapok){
 //        $objResponse = new xajaxResponse();
        
 //            $data = $this->jnsgolmodel->simpanjnsgol($nama_gol,$gapok);
 //            if ($data>0) {
 //                $objResponse->script("alert('Simpan Berhasil')");
 //                // $objResponse->Assign("alert","innerHTML", succ_msg("akun ".$namaakun." Berhasil Disimpan"));
 //                // $objResponse->script("$('#tambah').modal('hide')");
 //                // $objResponse->Assign("kelompok","value","");
 //                // $objResponse->Assign("subkelompok","value","");
 //                // $objResponse->Assign("urutsubkelompok","value","");
 //                // $objResponse->Assign("kodeakun","value","");
 //                // $objResponse->Assign("namaakun","value","");
 //                // $html = '';
 //                // $data = $this->akun_m->getdataakun(''); 
 //                // foreach ($data as $row) {
 //                //     $html = $html."<tr>
 //                //                     <td>".$row->kelompok."</td>
 //                //                     <td>".$row->subkelompok."</td>
 //                //                     <td>".$row->urutsubkelompok."</td>
 //                //                     <td>".$row->kodeakun."</td>
 //                //                     <td>".$row->namaakun."</td>
 //                //                     <td><a class='btn mini yellow sbold' data-toggle='modal' href='#edit' onClick='editakun(".$row->noindex.")'><i class='icon-edit'></i> Edit </a>
 //                //                         <a class='btn mini red' data-toggle='modal' href='#delete' onClick='hapusakun(".$row->noindex.")'><i class='icon-trash'></i> Hapus </a>
 //                //                     </td>
 //                //                 </tr>";
 //                // }
 //                // $objResponse->Assign("akun","innerHTML",$html);
 //            } else {
 //                $objResponse->script("alert('Data Gagal Disimpan')");
	// 		}
 //        return $objResponse;
 //    }
}
