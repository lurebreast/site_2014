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
	
	public function test()
	{
	    
		exit('dd');
	}
}
?>