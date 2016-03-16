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
        $data['title']          = 'Dashboard';
        $data['template_name']  = 'dashboard/my_dashboard.php';
        $this->load->view('layout/master_layout.php', $data);
    }
}