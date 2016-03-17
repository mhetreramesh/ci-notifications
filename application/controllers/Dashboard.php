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
        $notifications                  = $this->notifications_model->get_unread_notifications($this->session->user_id);
        $notifications_count            = $this->notifications_model->get_unread_notifications_count($this->session->user_id);
        $data['title']                  = 'Dashboard';
        $data['notifications']          = $notifications;
        $data['notifications_count']    = $notifications_count;
        $data['template_name']          = 'dashboard/my_dashboard.php';
        $this->load->view('layout/master_layout.php', $data);
    }
}