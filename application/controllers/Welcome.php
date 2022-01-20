<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('Front');
		
	}

	public function Front()
	{
		$this->load->view('Front');
		$this->load->view('Donate');
	}

	public function Login()
	{
		$this->load->view('Login');
	}

	public function loginnow()
	{
		if($_SERVER['REQUEST_METHOD']=='POST')
		{
			$this->form_validation->set_rules('email', 'Email','required');
			$this->form_validation->set_rules('password', 'Password','required');

			if($this->form_validation->run()==TRUE)
			{
				$email = $this->input->post('email');
				$password = $this->input->post('password');
				$password = sha1($password);

				$this->load->model('user_model');
				$status = $this->user_model->checkPassword($password, $email);
				if($status!=false)
				{
					$username = $status->username;
					$email = $status->email;

					$session_data = array(
						'username' => $username,
						'email' =>$email,
					);
					$this->session->set_userdata('UserLoginSession', $session_data);
					redirect(base_url('Welcome/Home'));
				}
				else
				{
					
					$this->load->view('Errorlog');

				}

			}
			else
			{
				$this->session->set_flashdata('error', 'Fill all the required fields');
				redirect(base_url('Welcome/login'));

			}

		}
	}


	function Registernow()
	{
		if($_SERVER['REQUEST_METHOD']=='POST')
		{
			$this->form_validation->set_rules('username', 'User Name', 'required');
			$this->form_validation->set_rules('email', 'Email', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');

			if($this->form_validation->run()==TRUE)
			{
				$username = $this->input->post('username');
				$email = $this->input->post('email');
				$password = $this->input->post('password');

				$data = array(
					'username'=>$username,
					'email'=>$email,
					'password'=>sha1($password),
					'status'=>'1'
				);

				$this->load->model('user_model');
				$this->user_model->insertuser($data);
				$this->session->set_flashdata('success','Successfully User Created');
				redirect(base_url('Welcome/Login'));


			}
			else
			{
				$this->session->set_flashdata('error', 'Fill all the required fields');
				redirect(base_url('Welcome/Login'));

			}

		}

	}

	public function Donate()
	{
		$this->load->view('Donate');
	}

	public function Errorlog()
	{
		$this->load->view('Errorlog');
	}

	public function Home()
	{
		$this->load->view('Home');
	}

	public function Services()
	{
		$this->load->view('Services');
	}

	public function About()
	{
		$this->load->view('About');
	}





}
