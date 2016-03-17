<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Dashboard class.
 *
 * @extends CI_Controller
 */
class Dashboard extends CI_Controller
{
    /**
     * __construct function.
     *
     * @access public
     * @return void
     */
    public function __construct() {

        parent::__construct();
        $this->load->library(array('session'));
        $this->load->helper(array('url'));
        $this->load->model('user_model');
        $this->load->model('notifications_model');
        if (!$this->session->user_id) {
            redirect( 'login' );
        }
    }

    /**
     * index function.
     *
     * @access public
     * @return void
     */
    public function index()
    {
        $test = $this->notifications_model->get_unread_notifications($this->session->user_id);
        print_r($test); die;
        $data['title']          = 'Dashboard';
        $data['template_name']  = 'dashboard/my_dashboard.php';
        $this->load->view('layout/master_layout.php', $data);
    }
}