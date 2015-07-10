<?php
/**
* 
*/
class user_model extends CI_Model
{
	
	function user_model()
	{
		# code...
		parent:: __construct();
	}

	function generate_salt()
	{
		$salt='';
		$chars = "abcdefghijkmnpqrstuvwxyzABCDEFGHJKLMNPQRSTUVWXYZ23456789!?=/&+,.";

		for($i=0;$i<8;$i++)
		{
			$c= mt_rand(0,strlen($chars)-1);
			$salt.=$chars{$c};
		}

		return $salt;
	}

	function encrypt($salt,$pwd)
	{
		return sha1(md5($pwd).$salt);

	}

	function login_user($email,$pwd)
	{
		$this->load->library('session');
		$this->load->database();
		$nquery = $this->db->get_where('user',array('email' => $email ));
		if($nquery->num_rows() == 1)
		{
			$rows = $nquery->row();

				$salt = $rows->salt;
				$enc_pass = $rows->pwd;
				if($this->encrypt($salt,$pwd)==$enc_pass)
				{

				$logdata = array(
					'user_id'=>$rows->user_id,
					'uname' => $rows->uname,
					'email' => $rows->email,
					'logged_in' => TRUE,);

				$this->session->set_userdata($logdata);
				return TRUE;
				}
		}

		return FALSE;

	}

	function new_user($salt,$new_pwd)
	{
		$this->load->database();
		$data = array( 'fname' => $this->input->post('fname'),
						'lname' => $this->input->post('lname'),
						'uname' => $this->input->post('uname'),
						'email' => $this->input->post('email'),
						'batch' => $this->input->post('batch'),
						'grad' => $this->input->post('grad'),
						'gender' => $this->input->post('gender'),
						'pwd' => $new_pwd,
						'salt' => $salt,
						);
		$this->db->insert('user',$data);
	}

	function new_topic()
	{
		$this->load->database();
		$topic_date = date('Y-m-d H:i:s');
		$data = array( 'topic_sub' => $this->input->post('sub'),
						'topic_content' => $this->input->post('cont'),
						'topic_date' => date('Y-m-d', strtotime($topic_date)),
						'topic_by' => $this->session->userdata('user_id'),
						);
		$this->db->insert('topic',$data);

	}

	function getall()
	{
		$this->load->database();
		$this->db->select('*');
		$this->db->from('topic');
		$this->db->join('user','user.user_id = topic.topic_by','inner');
		$query = $this->db->get();
		return $query->result();

	}

}


?>
