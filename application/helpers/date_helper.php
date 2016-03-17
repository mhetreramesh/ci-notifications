<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if( !function_exists('get_day_name') ) {

    function get_day_name($datetime) {

        if (strtotime($datetime) >= strtotime("today"))
            $datetime = "Today " . date('h:s:i', strtotime($datetime));
        else if (strtotime($datetime) >= strtotime("yesterday"))
            $datetime = "Yesterday " . date('h:s:i', strtotime($datetime));
        return $datetime;
    }

}

?>