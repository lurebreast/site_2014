<?php
class myRedis extends Redis
{
	public function get(){
		echo 'dddss';
	}
}

$redis = new myRedis();

$redis->get();

echo 'ddddddsssg';