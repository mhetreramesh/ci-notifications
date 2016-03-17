<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * User class.
 * 
 * @extends CI_Controller
 */
class User extends CI_Controller {

	/**
	 * __construct function.
	 * 
	 * @access public
	 * @return void
	 */
	public function __construct() {
		
		parent::__construct();
	}
	
	/**
	 * register function.
	 * 
	 * @access public
	 * @return void
	 */
	public function register() {
		$data = new stdClass();
		$this->load->helper('form');
		$this->load->library('form_validation');
		// set validation rules
        $this->form_validation->set_rules('name', 'Name', 'trim|required');
		$this->form_validation->set_rules('username', 'Username', 'trim|required|alpha_numeric|min_length[4]|is_unique[users.username]', array('is_unique' => 'This username already exists. Please choose another one.'));
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[users.email]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]');
		$this->form_validation->set_rules('password_confirm', 'Confirm Password', 'trim|required|min_length[6]|matches[password]');
		
		if ($this->form_validation->run() === false) {

			$this->load->view('user/register/register', $data);
		} else {
			// set variables from the form
			$name     = $this->input->post('name');
			$username = $this->input->post('username');
			$email    = $this->input->post('email');
			$password = $this->input->post('password');
			
			if ($user_id = $this->user_model->create_user($name, $username, $email, $password)) {
                $this->notifications_model->create_notification((int)$user_id, 'System', 'Welcome to the amazing notifications system!');
				redirect('login');
			} else {
				// user creation failed, this should never happen
				$data->error = 'There was a problem creating your new account. Please try again.';
				$this->load->view('user/register/register', $data);
			}
		}
	}
		
	/**
	 * login function.
	 * 
	 * @access public
	 * @return void
	 */
	public function login() {
		
		// create the data object
		$data = new stdClass();
		// load form helper and validation library
		$this->load->helper('form');
		$this->load->library('form_validation');
		// set validation rules
		$this->form_validation->set_rules('username', 'Username', 'required|alpha_numeric');
		$this->form_validation->set_rules('password', 'Password', 'required');
		
		if ($this->form_validation->run() == false) {
			// validation not ok, send validation errors to the view
			$this->load->view('user/login/login');
		} else {
			// set variables from the form
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			
			if ($this->user_model->resolve_user_login($username, $password)) {
				
				$user_id = $this->user_model->get_user_id_from_username($username);
				$user    = $this->user_model->get_user($user_id);
				// set session user datas
				$session_data['user_id']      = (int)$user->id;
				$session_data['username']     = (string)$user->username;
				$session_data['name']         = (string)$user->name;
				$session_data['logged_in']    = (bool)true;
				$session_data['is_confirmed'] = (bool)$user->is_confirmed;
				$session_data['is_admin']     = (bool)$user->is_admin;

				$this->session->set_userdata($session_data);
				$this->notifications_model->create_notification((int)$user->id, 'Authenticator', 'Welcome back <b>' . $user->name . '</b> to admin panel!');
				$this->notifications_model->create_notification((int)$user->id, 'Lead Management', '<b>'.rand(5, 15).'</b> new leads generated in our system.');
				$this->notifications_model->create_notification((int)$user->id, 'Twitter', '<b>' . get_random_name() . '</b> & ' . rand(2, 4) . ' others follows us on twiter.');
				$this->notifications_model->create_notification((int)$user->id, 'Facebook', '<b>' . get_random_name() . '</b> & ' . rand(5, 15) . ' others commented on our latest facebbok post.');
				redirect('dashboard');
			} else {
				// login failed
				$data->error = 'Wrong username or password.';
				$this->load->view('user/login/login', $data);
			}
		}
	}
	
	/**
	 * logout function.
	 * 
	 * @access public
	 * @return void
	 */
	public function logout() {
		
		// create the data object
		$data = new stdClass();
		
		if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
			
			// remove session datas
			foreach ($_SESSION as $key => $value) {
				unset($_SESSION[$key]);
			}
			
			// user logout ok
			redirect('login');
			
		} else {
			
			// there user was not logged in, we cannot logged him out,
			// redirect him to site root
			redirect('dashboard');
			
		}
	}
}
