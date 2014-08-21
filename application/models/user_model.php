<?php
/**
 * 用户类
 * 
 * @author Henry
 */
class User_model extends MY_Model {

    function __construct()
    {
        parent::__construct();
    }
    
    public function getUserByUserName($userName)
    {
        $this->loadCache();
        $user = $this->cache->get($userName);
        
        if (empty($user))
        {
            $this->db->where('username', $userName);
             
            $query = $this->db->get('users');
             
            $result = $query->row_array();
            $this->cache->save($userName, serialize($result));
            
            return $result;
        }
    	
        return unserialize($user);    	
    }
    
    function getUserById($userId)
    {
    	echo 'dd';
    }
}
?>