<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * 数据库初始化
 * 
 * @author Henry
 */
class MY_Model extends CI_Model  {
    
	public  function __construct() 
	{
		parent::__construct();
		$this->load->database();
	}
	
	/**
	 * 载入缓存
	 * 
	 * @return Redis
	 */
	public function loadCache()
	{
	    $this->load->driver('cache', array('adapter' => 'redis'));
	}
}
?>