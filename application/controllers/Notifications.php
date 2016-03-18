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
     * generate function.
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

    /**
     * read function.
     *
     * @access public
     * @return void
     */
    public function read($id)
    {
        $this->notifications_model->mark_notification_as_read($id, $this->session->user_id);
        $data['notifications']          = $this->notifications_model->get_unread_notifications($this->session->user_id);
        $data['notifications_count']    = $this->notifications_model->get_unread_notifications_count($this->session->user_id);
        $this->load->view('partials/notifications.php', $data);
    }
}