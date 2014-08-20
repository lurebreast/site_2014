<?php
class myRedis extends Redis
{
	public function get(){
		echo 'ddd';
	}
}

$redis = new myRedis();

$redis->get();