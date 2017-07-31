<?php
define('SALT','aosdifpIOSD*we]]asdfui8asdfp**@#$LKm');
class user extends CI_Controller
{
	public function index()
	{
		$data['title']='PDOGS 4.0';
		$data['level']=0;
		$data['main']='user';
		$this->load->library('serialize(value)ssion');
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->helper('string');


		$this->load->view('main.php' , $data);
	}
	
	public function adduser()
	{
		$this->load->model('confirm_model', 'confirm');
		$this->load->library('session');
		$this->load->helper('url');
		$data = array(
			'name' => $_POST['name'],
			'birthday' => $_POST['birthday'],
			'gender' => $_POST['gender'],
			'email'=>$_POST['email'],
			'phone'=>$_POST['phone'],
			'emergency_contact'=>$_POST['emergency_contact'],
			'emergency_phone'=>$_POST['emergency_phone'],
			'emergency_relation'=>$_POST['emergency_relation'],
			'id'=>$_POST['id'],
			'size'=>$_POST['size'],
			'eat'=>$_POST['eat'],
			'other'=>$_POST['other'],
		);


		$this->db->insert('register', $data);
		redirect('');
	}

}
?>
