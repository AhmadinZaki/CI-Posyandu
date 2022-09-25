<?php

defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		is_logged_in();
		$this->load->model('menu_model');
	}
public function dashboard()
	{


		$data['title'] = 'Dashboard';
		$data['user'] = $this->db->get_where('user',['email'=> 
			$this->session->userdata('email')])->row_array();
		

		// echo 'selamat datang'. $data['user']['name'];	
		$this->load->view('templates/header',$data);
		$this->load->view('templates/sidebar',$data);
		$this->load->view('templates/topbar',$data);
		$this->load->view('user/dashboard',$data);
		$this->load->view('templates/footer');
	} 

	public function index()
	{


		$data['title'] = 'My Profile';
		$data['user'] = $this->db->get_where('user',['email'=> 
			$this->session->userdata('email')])->row_array();
		

		// echo 'selamat datang'. $data['user']['name'];	
		$this->load->view('templates/header',$data);
		$this->load->view('templates/sidebar',$data);
		$this->load->view('templates/topbar',$data);
		$this->load->view('user/index',$data);
		$this->load->view('templates/footer');
	}


	public function edit(){
		$data['title'] = 'Edit Profile';
		$data['user'] = $this->db->get_where('user',['email'=> 
			$this->session->userdata('email')])->row_array();


		$this->form_validation->set_rules('name','Full Name','required|trim');
		
		if ($this->form_validation->run()== false) {
			# code...
		
		// echo 'selamat datang'. $data['user']['name'];	
		$this->load->view('templates/header',$data);
		$this->load->view('templates/sidebar',$data);
		$this->load->view('templates/topbar',$data);
		$this->load->view('user/edit',$data);
		$this->load->view('templates/footer');
		}else{
			$name =$this->input->post('name');
			$email =$this->input->post('email');

			//cek jika ada gambar yang akan diupload
			$upload_image = $_FILES['image']['name'];

			if ($upload_image) {
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size']     = '2048';
				$config['upload_path'] = './assets/img/profile/';

				$this->load->library('upload',$config);
				if ($this->upload->do_upload('image')) {
					$old_image=$data['user']['image'];
					if($old_image != 'default.jpg'){
						unlink(FCPATH . 'assets/img/profile/' . $old_image); //untuk menghapus data
					}



					$new_image = $this->upload->data('file_name');
					$this->db->set('image',$new_image);
				}else{
					echo $this->upload->display_errors();
				}

			}



			$this->db->set('name',$name);
			$this->db->where('email',$email);
			$this->db->update('user');

			$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
			  Your Profille has been update
			</div>');
			redirect('user');

		}
	}


public function changePassword()
	{


		$data['title'] = 'change password';
		$data['user'] = $this->db->get_where('user',['email'=> 
		$this->session->userdata('email')])->row_array();
		



		$this->form_validation->set_rules('current_password','Current Password','required|trim');
		$this->form_validation->set_rules('new_password1','New Password','required|trim|min_length[3]|matches[new_password2]');
		$this->form_validation->set_rules('new_password2','New Password','required|trim|min_length[3]|matches[new_password1]');
		if ($this->form_validation->run()== false) {
		// echo 'selamat datang'. $data['user']['name'];	
		$this->load->view('templates/header',$data);
		$this->load->view('templates/sidebar',$data);
		$this->load->view('templates/topbar',$data);
		$this->load->view('user/changepassword',$data);
		$this->load->view('templates/footer');
	}else{
		$current_password = $this->input->post('current_password');
		$new_password = $this->input->post('new_password1');

		if(!password_verify($current_password,$data['user']['password'])){
			$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">
			  Wrong Current Password!
			</div>');
			redirect('user/changepassword');

		}else{
			if ($current_password == $new_password) {
				$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">
			  New Password cannot be same as current password!
			</div>');
			redirect('user/changepassword');
			}else{
				//password ok
				$password_hash = password_hash($new_password, PASSWORD_DEFAULT);

				$this->db->set('password',$password_hash);
				$this->db->where('email', $this->session->userdata('email'));
				$this->db->update('user');


				$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
			  Pasword Changed!

			</div>');

				redirect('user/changepassword');
			}
		}
	}

}





public function balita()
	{
		$data['title'] = 'Balita';
		$data['user'] = $this->db->get_where('user',['email'=> 
		$this->session->userdata('email')])->row_array();
		
		$data['balita'] = $this->db->get('balita')->result_array();
		

		
		$this->form_validation->set_rules('nama_balita','Nama Balita','required');
		$this->form_validation->set_rules('tanggal_lahir','Tanggal Lahir','required');
		$this->form_validation->set_rules('jenis_kelamin','Tanggal Lahir','required');
		$this->form_validation->set_rules('nama_ibu','Nama Ibu','required');
		$this->form_validation->set_rules('nama_ayah','Nama Ayah','required');
		$this->form_validation->set_rules('alamat','Alamat','required'); 
		$this->form_validation->set_rules('panjang_badan','Tinggi Badan','required');
		$this->form_validation->set_rules('berat_lahir','Berat Bayi','required');//mengatur eror agar tidak kosong
		if ($this->input->post('keyword')) {
			$data['balita'] =  $this->menu_model->searchDataB();
		}	
		if ($this->form_validation->run() == false) 
		{
		//
		
		$this->load->view('templates/header',$data);
		$this->load->view('templates/sidebar',$data);
		$this->load->view('templates/topbar',$data);
		$this->load->view('user/balita',$data);
		$this->load->view('templates/footer');

		}else{
			$data =
		[
			'nama_balita' => $this->input->post('nama_balita'),

			'tanggal_lahir' => $this->input->post('tanggal_lahir'),
			'jenis_kelamin'=> $this->input->post('jenis_kelamin'),
			'nama_ibu'=> $this->input->post('nama_ibu'),
			'nama_ayah'=> $this->input->post('nama_ayah'),
			'alamat'=> $this->input->post('alamat'),
			'panjang_badan'=> $this->input->post('panjang_badan'),
			'berat_lahir'=> $this->input->post('berat_lahir'),
		];

		$this->db->insert('balita', $data);
		$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
			Data Balita berhasil di Tambahkan!!
			</div>');
			redirect('user/balita');
		}
	}


		public function deleteBalita($id_balita)
		{	
			$this->db->where('id_balita',$id_balita);
			$this->db->delete('balita');
			$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
			Data Deleted!
			</div>');
			redirect('user/balita');
		}

		public function editMenu($id)
		{	
			$this->load->model('menu_model');
			$this->menu_model->editDataMenu($id);
			$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
			Data Deleted!
			</div>');
			redirect('menu');
		}




public function imunisasi()
	{
		$data['title'] = 'Imunisasi';
		$data['user'] = $this->db->get_where('user',['email'=> 
		$this->session->userdata('email')])->row_array();
		
		$data['imunisasi'] = $this->db->get('imunisasi')->result_array();
		

		
		$this->form_validation->set_rules('nama_balita','Nama Balita','required');
		$this->form_validation->set_rules('tanggal_imunisasi','Tanggal Imunisasi','required');
		$this->form_validation->set_rules('jenis_imunisasi','Tanggal Imunisasi','required');
//mengatur eror agar tidak kosong

		
		if ($this->form_validation->run() == false) 
		{
		if ($this->input->post('keyword')) {
			$data['imunisasi'] =  $this->menu_model->searchDataI();
		}	//
		
		$this->load->view('templates/header',$data);
		$this->load->view('templates/sidebar',$data);
		$this->load->view('templates/topbar',$data);
		$this->load->view('user/imunisasi',$data);
		$this->load->view('templates/footer');

		}else{
			$data =
		[
			'nama_balita' => $this->input->post('nama_balita'),

			'tanggal_imunisasi' => $this->input->post('tanggal_imunisasi'),
			'jenis_imunisasi'=> $this->input->post('jenis_imunisasi'),

		];

		$this->db->insert('imunisasi', $data);
		$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
			Data Imunisasi berhasil di Tambahkan!!
			</div>');
			redirect('user/imunisasi');
		}
	}


		public function deleteImunisasi($id_balita)
		{	
			$this->db->where('id_balita',$id_balita);
			$this->db->delete('imunisasi');
			$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
			Data Deleted!
			</div>');
			redirect('user/imunisasi');
		}

	


public function penimbangan()
	{
		$data['title'] = 'Penimbangan';
		$data['user'] = $this->db->get_where('user',['email'=> 
		$this->session->userdata('email')])->row_array();
		
		$data['penimbangan'] = $this->db->get('penimbangan')->result_array();
		

		
		$this->form_validation->set_rules('nama_anak','Nama Anak','required');
		$this->form_validation->set_rules('tgl_timbang','Tanggal Penimbangan','required');
		$this->form_validation->set_rules('usia','Usia','required');
		$this->form_validation->set_rules('berat_badan','Berat Badan','required');
		$this->form_validation->set_rules('lingkar_perut','Lingkar Perut','required');
//mengatur eror agar tidak kosong
		
		if ($this->form_validation->run() == false) 
		{
		if ($this->input->post('keyword')) {
			$data['penimbangan'] =  $this->menu_model->searchDataP();
		}	//
		
		$this->load->view('templates/header',$data);
		$this->load->view('templates/sidebar',$data);
		$this->load->view('templates/topbar',$data);
		$this->load->view('user/penimbangan',$data);
		$this->load->view('templates/footer');

		}else{
			$data =
		[
			'nama_anak' => $this->input->post('nama_anak'),
			'tgl_timbang' => $this->input->post('tgl_timbang'),

			'usia' => $this->input->post('usia'),
			'berat_badan'=> $this->input->post('berat_badan'),
			'lingkar_perut'=> $this->input->post('lingkar_perut'),

		];

		$this->db->insert('penimbangan', $data);
		$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
			Data Penimbangan berhasil di Tambahkan!!
			</div>');
			redirect('user/penimbangan');
		}
	}


		public function deletePenimbangan($id_penimbangan)
		{	
			$this->db->where('id_penimbangan',$id_penimbangan);
			$this->db->delete('penimbangan');
			$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
			Data Deleted!
			</div>');
			redirect('user/penimbangan');
		}



//Edit Data

			public function editImunisasi($id_balita)
	{
		$data['title'] = 'Imunisasi';
		$data['user'] = $this->db->get_where('user',['email'=> 
		$this->session->userdata('email')])->row_array();
		
		$data['imunisasi'] = $this->db->get('imunisasi')->result_array();
			
		$data['edit'] = $this->menu_model->getImunisasibyId($id_balita);

		$this->form_validation->set_rules('nama_balita','Nama Balita','required');
		$this->form_validation->set_rules('tanggal_imunisasi','Tanggal Imunisasi','required');
		$this->form_validation->set_rules('jenis_imunisasi','Tanggal Imunisasi','required');
//mengatur eror agar tidak kosong
		
		if ($this->form_validation->run() == false) 
		{
	
		$this->load->view('templates/header',$data);
		$this->load->view('templates/sidebar',$data);
		$this->load->view('templates/topbar',$data);
		$this->load->view('user/editImunisasi',$data);
		$this->load->view('templates/footer');

		}else{

			$data =
		[	

			'nama_balita' => $this->input->post('nama_balita'),

			'tanggal_imunisasi' => $this->input->post('tanggal_imunisasi'),
			'jenis_imunisasi'=> $this->input->post('jenis_imunisasi')
		
		];
			$this->db->where('id_balita',$this->input->post('id_balita'));
			$this->db->update('imunisasi',$data);

			$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
			Data Updated!
			</div>');
			redirect('user/imunisasi');
		}
	}
  




	    public function editBalita($id_balita)
	{
		$data['title'] = 'Balita';
		$data['user'] = $this->db->get_where('user',['email'=> 
		$this->session->userdata('email')])->row_array();
		
		$data['balita'] = $this->db->get('balita')->result_array();
			
		$data['edit'] = $this->menu_model->getBalitabyId($id_balita);

		$this->form_validation->set_rules('nama_balita','Nama Balita','required');
		$this->form_validation->set_rules('tanggal_lahir','Tanggal Lahir','required');
		$this->form_validation->set_rules('jenis_kelamin','Tanggal Lahir','required');
		$this->form_validation->set_rules('nama_ibu','Nama Ibu','required');
		$this->form_validation->set_rules('nama_ayah','Nama Ayah','required');
		$this->form_validation->set_rules('alamat','Alamat','required'); 
		$this->form_validation->set_rules('panjang_badan','Panjang Badan','required');
		$this->form_validation->set_rules('berat_lahir','Berat Lahir','required');
		if ($this->form_validation->run() == false) 
		{
	
		$this->load->view('templates/header',$data);
		$this->load->view('templates/sidebar',$data);
		$this->load->view('templates/topbar',$data);
		$this->load->view('user/editBalita',$data);
		$this->load->view('templates/footer');

		}else{

			$data =
		[	

			'nama_balita' => $this->input->post('nama_balita'),

			'tanggal_lahir' => $this->input->post('tanggal_lahir'),
			'jenis_kelamin'=> $this->input->post('jenis_kelamin'),
			'nama_ibu'=> $this->input->post('nama_ibu'),
			'nama_ayah'=> $this->input->post('nama_ayah'),
			'alamat'=> $this->input->post('alamat'),
			'panjang_badan'=> $this->input->post('panjang_badan'),
			'berat_lahir'=> $this->input->post('berat_lahir')
		
		];
			$this->db->where('id_balita',$this->input->post('id_balita'));
			$this->db->update('balita',$data);

			$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
			Data Updated!
			</div>');
			redirect('user/balita');
		}
	}



	    public function editPenimbangan($id_penimbangan)
	{
		$data['title'] = 'Penimbangan';
		$data['user'] = $this->db->get_where('user',['email'=> 
		$this->session->userdata('email')])->row_array();
		
		$data['penimbangan'] = $this->db->get('penimbangan')->result_array();
			
		$data['edit'] = $this->menu_model->getPenimbanganbyId($id_penimbangan);

		$this->form_validation->set_rules('nama_anak','Nama Anak','required');
		$this->form_validation->set_rules('tgl_timbang','Tanggal Penimbangan','required');
		$this->form_validation->set_rules('usia','Usia','required');
		$this->form_validation->set_rules('berat_badan','Berat Badan','required');
		$this->form_validation->set_rules('lingkar_perut','Lingkar Perut','required');
		if ($this->form_validation->run() == false) 
		{
	
		$this->load->view('templates/header',$data);
		$this->load->view('templates/sidebar',$data);
		$this->load->view('templates/topbar',$data);
		$this->load->view('user/editPenimbangan',$data);
		$this->load->view('templates/footer');

		}else{

			$data =
		[	
			'nama_anak' => $this->input->post('nama_anak'),
			'tgl_timbang' => $this->input->post('tgl_timbang'),

			'usia' => $this->input->post('usia'),
			'berat_badan'=> $this->input->post('berat_badan'),
			'lingkar_perut'=> $this->input->post('lingkar_perut'),
		
		];
			$this->db->where('id_penimbangan',$this->input->post('id_penimbangan'));
			$this->db->update('penimbangan',$data);

			$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
			Data Updated!
			</div>');
			redirect('user/penimbangan');
		}
	}
  



//cetak data

public function cetakimunisasi() {
	// $a = $this->input->post('tgl_a');
	// $b = $this->input->post('tgl_b');
	// $data['count'] = $this->menu_model->get_count();
	$data['posyandu'] = $this->db->get('imunisasi')->result_array();
		
		// if ($this->input->post('cetak_rm')) {

		// $data['medis'] = $this->db->query("SELECT * FROM rekam_medis WHERE tgl_periksa BETWEEN '$a' AND '$b'")->result_array();
			
		// }
		$this->load->view('templates/header',$data);
		$this->load->view('cetak/cetakimunisasi',$data);

	// $query=$this->db->query("SELECT * FROM rekam_medis WHERE tgl_periksa BETWEEN '$a' AND '$b'")->result_array();
	
	// echo "<pre>";
	// print_r($query);
	// echo "</pre>";

}

public function cetakbalita() {
	// $a = $this->input->post('tgl_a');
	// $b = $this->input->post('tgl_b');
	// $data['count'] = $this->menu_model->get_count();
	$data['posyandu'] = $this->db->get('balita')->result_array();
		
		// if ($this->input->post('cetak_rm')) {

		// $data['medis'] = $this->db->query("SELECT * FROM rekam_medis WHERE tgl_periksa BETWEEN '$a' AND '$b'")->result_array();
			
		// }
		$this->load->view('templates/header',$data);
		$this->load->view('cetak/cetakbalita',$data);

	// $query=$this->db->query("SELECT * FROM rekam_medis WHERE tgl_periksa BETWEEN '$a' AND '$b'")->result_array();
	
	// echo "<pre>";
	// print_r($query);
	// echo "</pre>";

}

public function cetakpenimbangan() {
	// $a = $this->input->post('tgl_a');
	// $b = $this->input->post('tgl_b');
	// $data['count'] = $this->menu_model->get_count();
	$data['posyandu'] = $this->db->get('penimbangan')->result_array();
		
		// if ($this->input->post('cetak_rm')) {

		// $data['medis'] = $this->db->query("SELECT * FROM rekam_medis WHERE tgl_periksa BETWEEN '$a' AND '$b'")->result_array();
			
		// }
		$this->load->view('templates/header',$data);
		$this->load->view('cetak/cetakpenimbangan',$data);

	// $query=$this->db->query("SELECT * FROM rekam_medis WHERE tgl_periksa BETWEEN '$a' AND '$b'")->result_array();
	
	// echo "<pre>";
	// print_r($query);
	// echo "</pre>";

}
}