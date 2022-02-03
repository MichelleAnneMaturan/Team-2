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

	public function Contact()
	{
		$this->load->view('Contact');
	}

	function Visit()
	{
		if($_SERVER['REQUEST_METHOD']=='POST')
		{
			$this->form_validation->set_rules('username', 'User Name', 'required');
			$this->form_validation->set_rules('email', 'Email', 'required');
			$this->form_validation->set_rules('phone', 'Phone', 'required');
			$this->form_validation->set_rules('date', 'Date', 'required');
			$this->form_validation->set_rules('time', 'Time', 'required');
			$this->form_validation->set_rules('orphan', 'Orphan', 'required');

			if($this->form_validation->run()==TRUE)
			{
				$username = $this->input->post('username');
				$email = $this->input->post('email');
				$phone = $this->input->post('phone');
				$date = $this->input->post('date');
				$time = $this->input->post('time');
				$orphan = $this->input->post('orphan');

				$data = array(
					'username'=>$username,
					'email'=>$email,
					'phone'=>($phone),
					'date'=>$date,
					'time'=>$time,
					'orphan'=>$orphan,
					'status'=>'1'
				);

				$this->load->model('visit_model');
				$this->visit_model->insertuser($data);
				$this->session->set_flashdata('success','REQUEST SUBMITTED SUCCESSFULLY');
				redirect(base_url('Welcome/Services#section1'));


			}
			else
			{
				$this->session->set_flashdata('error', 'Fill all the required fields');
				redirect(base_url('Welcome/Services#section1'));

			}

		}

	}






}
