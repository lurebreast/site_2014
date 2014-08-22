<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

abstract class MY_Controller extends CI_Controller {
    
    function __construct()
    {
        parent::__construct();
        $this->load->helper(array('url', 'form'));
        date_default_timezone_set('UTC');
    }
}
?>