<?php

/**
* 
*/
class User extends CI_Controller
{
	
	function __construct()
	{
		parent:: __construct();
		$this->load->library('session');
		$this->load->helper('url');
		$this->load->helper('form');
		$data['error']='';

	}

	public function login()
	{
		
		$this->load->model('user_model');
		$data['error']='';
		if($this->session->userdata('uname'!=""))
		{
			$this->tcmain();
		}
		
		$session_set_value = $this->session->all_userdata();

		if (isset($session_set_value['remember_me']) && $session_set_value['remember_me'] == "1") 
		{			$data['error']='';
					$this->load->view('main');
		}
		else
		{

		if($this->input->post('login_sub'))
		{
			
		$this->load->library('form_validation');
		$this->form_validation->set_rules('email', 'Email',  'required|valid_email');
		$this->form_validation->set_rules('pwd', 'Password', 'required');

		if($this->form_validation->run()== FALSE)
		{
			$this->load->view('login',$data);
		}
		else
		{
		$email = $this->input->post('email');
		$pwd = $this->input->post('pwd');
		$res = $this->user_model->login_user($email,$pwd);
		if($res)
			{
				$remem = $this->input->post('remember_me');
				$this->session->set_userdata('remember_me', TRUE);
				$this->tcmain();
			}

			else
			{
				$data['error'] = "Error occured. Try logging in again! </br>";
				$this->load->view('login',$data);
			}
		}

		}

		else
		{
			$this->load->view('login',$data);

		}

	}

	}

	function logout()
	{
		$data = array(
			'user_id'=>'',
			'uname' => '',
			'email' => '',
			'logged_in' => FALSE,);
		$this->session->unset_userdata($data);
		$this->session->sess_destroy();
		$this->tcmain();

	}

	function question()
	{
		$this->load->model('user_model');

		if($this->input->post('topic_post'))
		{
			$this->load->library('form_validation');
			$this->form_validation->set_rules('sub', 'Title',  'required');
			$this->form_validation->set_rules('cont', 'Description', 'required');
			if($this->form_validation->run()== FALSE)
			{
				$this->load->view('question');
			}
			else
			{
				$this->load->helper('date');
				$this->user_model->new_topic();
				$this->tcmain();
			}
		}

		else
		{	
			if($this->session->userdata('logged_in'))
					$this->load->view('question');
			else{
				$this->login();
			}
		}
		 

				
	}

	function tcmain()
	{
		$this->load->model('user_model');
		$data['query'] = $this->user_model->getall();
		$this->load->view('main',$data);
	}

	function register()
	{
		
		$this->load->model('user_model');

		$this->load->database();
		
		if($this->session->userdata('logged_in'))
		{
			$this->tcmain();
		}
		else	
		{
		
		$data['error'] = '';

		if($this->input->post('submit'))
 		{
 		
			$this->load->library('form_validation');
			$this->form_validation->set_rules('fname', 'First Name', 'required');
			$this->form_validation->set_rules('lname', 'Last Name', 'required');
			$this->form_validation->set_rules('uname', 'Username', 'required');
			$this->form_validation->set_rules('email', 'Email',  'required|valid_email');
			$this->form_validation->set_rules('pwd', 'Password', 'required|matches[cpwd]');
			$this->form_validation->set_rules('cpwd', 'Confirm Password', 'required');	
			$this->form_validation->set_rules('batch', 'Batch', 'required');
			$this->form_validation->set_rules('grad', 'Year of Graduation', 'required');
			$this->form_validation->set_rules('gender', 'Gender', 'required');

		if($this->form_validation->run() == FALSE) 
		{
			 
				$this->load->view('register',$data);
		}

		else
		{
			
			$username = $this->input->post('uname');
			$email = $this->input->post('email');
			$check = "SELECT * FROM user where uname = '$username' OR email = '$email'";
			$query = $this->db->query($check);
			if($query->num_rows()>0)
			{
				$data['error'] = "The username or email address you entered is already in use <br/>";
				$this->load->view('register',$data);
			}
			else
			{
				$salt = $this->user_model->generate_salt();
				$new_pwd =$this->user_model->encrypt($salt,$this->input->post('pwd'));
				$this->user_model->new_user($salt,$new_pwd);
				$this->tcmain();
			}
		}

	}
		else	
			{$this->load->view('register',$data);
		}
	}
}

}

?>