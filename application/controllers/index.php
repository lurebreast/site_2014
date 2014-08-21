<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Index extends CI_Controller {

    function __construct()
    {
        parent::__construct();
    }
    
    /**
     * 网站首页
     */
	public function index()
	{
		$this->load->view('index');
	}
	
	/**
	 * 表单提交后跳转
	 */
	public function redirect()
	{
		
	}
	
	public function test()
	{
// 	    $con = mysql_connect('127.0.0.1:3306', 'root', '');
// 	    mysql_query('set names \'UTF-8\'');
// 	    mysql_select_db('site');
	    
// 	    $result = mysql_query('select * from users where username=\'lurebreast\'');
// 	    var_dump(mysql_fetch_array($result));exit;
	    
	    $this->load->model('user_model');
	    
	    $result = $this->user_model->getUserByUserName('lurebreast');
	    
	    
	    var_dump($result);
	}
}
?>