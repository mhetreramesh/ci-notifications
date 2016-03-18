<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * User_model class.
 * 
 * @extends CI_Model
 */
class Notifications_model extends CI_Model {

	/**
	 * __construct function.
	 * 
	 * @access public
	 * @return void
	 */
	public function __construct() {
		
		parent::__construct();
		$this->load->database();
		
	}
	
	/**
	 * create_user function.
	 * 
	 * @access public
	 * @param int $user_id
	 * @param int $type_id
	 * @param string $content
	 * @return bool true on success, false on failure
	 */
	public function create_notification($user_id, $from, $content) {
		
		$data = array(
			'user_id'   => $user_id,
			'from'      => $from,
			'content'   => $content,
			'generated_on' => date('Y-m-j H:i:s'),
			'status' => 0
		);
		
		return $this->db->insert('notifications', $data);
	}


	/**
	 * get_unread_notifications function.
	 *
	 * @access public
	 * @param mixed $user_id
	 * @return object the notification object
	 */
	public function get_unread_notifications($user_id) {

		$this->db->where('user_id', $user_id);
		$this->db->where('status', 0);
        $this->db->order_by('id', 'desc');
		return $this->db->get('notifications', 5)->result();

	}

    /**
     * get_unread_notifications_count function.
     *
     * @access public
     * @param mixed $user_id
     * @return notifications count
     */
    public function get_unread_notifications_count($user_id) {

        $this->db->from('notifications');
        $this->db->where('user_id', $user_id);
        $this->db->where('status', 0);
        return $this->db->count_all_results();
    }

	/**
	 * mark_notification_as_read function.
	 *
	 * @access public
	 * @param int $notification_id
	 * @param int $user_id
	 * @return bool true on success, false on failure
	 */
	public function mark_notification_as_read($notification_id, $user_id) {

		$data = array(
			'status' => 1,
			'viewed_on' => date('Y-m-j H:i:s')
		);
		if($notification_id === 'all') {
			$this->db->where('user_id', $user_id);
			$this->db->where('status', 0);
		} else {
			$this->db->where('id', $notification_id);
		}
		return $this->db->update('notifications', $data);
	}
	
}
