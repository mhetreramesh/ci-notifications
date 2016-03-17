<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Notifications class.
 *
 * @extends CI_Controller
 */
class Notifications extends CI_Controller
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
    public function generate()
    {
        $this->notifications_model->create_notification((int)$this->session->user_id, 'Lead Management', '<b>'.rand(5, 15).'</b> new leads generated in our system.');
        $this->notifications_model->create_notification((int)$this->session->user_id, 'Twitter', '<b>' . get_random_name() . '</b> & ' . rand(2, 4) . ' others follows us on twiter.');
        $this->notifications_model->create_notification((int)$this->session->user_id, 'Facebook', '<b>' . get_random_name() . '</b> & ' . rand(5, 15) . ' others liked our latest facebbok post.');
        redirect('dashboard');
    }
}