<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//后台控制器扩展，如果您不了解其作用，请不要随意更改此处
abstract class Admin_Controller extends MY_Controller
{
    var $data= '';
    function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->library('form_validation');

        $this->_check_login();

    }

    function _check_login()
    {
        if(! $this->session->userdata('uid'))
        {
            redirect('admin/login');
        }
        else
        {
            $id = $this->session->userdata('uid');
            $this->load->database();
            $this->load->model('admin/user_mdl');
            $this->data['admin'] = $this->user_mdl->find_by_id($id);
        }
    }
}
?>