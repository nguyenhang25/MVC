<?php

class Connect
{
	protected $link = null;
	protected $sql = null;
	protected $result = null;

	public function conn(){
    	$this->link = new mysqli('localhost', 'root','','giangvien') or die('Kết nối thất bại!');
		mysqli_query($this->link, "SET NAMES 'utf8'");
    }

    public function query($sql){
    	$this->sql = $sql;
    	$this->result = mysqli_query($this->link, $sql);
    }

    public function getArray(){
    	if ($this->result) {
	    	$array = array();
	    	while($row = mysqli_fetch_assoc($this->result)) 
	    	{
	    		array_push($array, $row);
				
	    	}
	    	return $array;
    	}
    }
}
?>