<?php  
 
defined('BASEPATH') or exit('No direct script access allowed');

class menu_model extends CI_model
{
	public function getsubmenu()
	{
		$query = "SELECT `user_sub_menu`.*,`user_menu`.`menu` FROM `user_sub_menu` JOIN `user_menu`
			ON 
			`user_sub_menu`.`menu_id` = `user_menu`.`id`";
		return $this->db->query($query)->result_array();
	}

	public function deleteDataMenu($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('user_menu');
	
		
	}

	public function editDataMenu($id)
	{
		$this->db->where('id',$id);
		$this->db->update('user_menu');
	
		
	}

	public function deleteDataSubMenu($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('user_sub_menu');
	
		
	}



	public function searchDataP(){
		$keyword= $this->input->post('keyword');
		//query builder
		$this->db->like('id_penimbangan' , $keyword);
		$this->db->or_like('nama_anak' , $keyword);
		$this->db->or_like('tgl_timbang' , $keyword);
		$this->db->or_like('usia' , $keyword);
		$this->db->or_like('berat_badan' , $keyword);
		$this->db->or_like('lingkar_perut' , $keyword);
		
		
		
		return $this->db->get('penimbangan')->result_array();

	}


public function searchDataB(){
		$keyword= $this->input->post('keyword');
		//query builder
		$this->db->like('id_balita' , $keyword);
		$this->db->or_like('nama_balita' , $keyword);
		$this->db->or_like('tanggal_lahir' , $keyword);
		$this->db->or_like('jenis_kelamin' , $keyword);
		$this->db->or_like('nama_ibu' , $keyword);
		$this->db->or_like('nama_ayah' , $keyword);
		$this->db->or_like('alamat' , $keyword);
		$this->db->or_like('panjang_badan' , $keyword);
		$this->db->or_like('berat_lahir' , $keyword);
		
		
		
		return $this->db->get('balita')->result_array();

	}


	public function searchDataI(){
		$keyword= $this->input->post('keyword');
		//query builder
		$this->db->like('id_balita' , $keyword);
		$this->db->or_like('nama_balita' , $keyword);
		$this->db->or_like('tanggal_imunisasi' , $keyword);
		$this->db->or_like('jenis_imunisasi' , $keyword);

		
		
		return $this->db->get('imunisasi')->result_array();

	}


public function getImunisasiById($id_balita){
		return $this->db->get_where('imunisasi', ['id_balita' => $id_balita ])->row_array();
	}


public function getBalitaById($id_balita){
		return $this->db->get_where('balita', ['id_balita' => $id_balita ])->row_array();
	}


public function getPenimbanganById($id_penimbangan){
		return $this->db->get_where('penimbangan', ['id_penimbangan' => $id_penimbangan ])->row_array();
	}





public function getSubMenuById($id){
return $this->db->get_where('user_sub_menu', ['id' => $id ])->row_array();
}

public function editDataSubMenu()
{
$data =
[
"title" => $this->input->post('title'),
"menu_id" => $this->input->post('menu_id'),
"url"=> $this->input->post('url'),
"icon"=> $this->input->post('icon'),
"is_active"=> $this->input->post('is_active')
];


$this->db->where('id',$this->input->post('id'));
$this->db->update('user_sub_menu',$data);



}




}//