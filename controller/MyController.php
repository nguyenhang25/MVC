<?php

include_once("model/CBGV.php");

class MyController
{
	public $model;

	public function __construct()  
    {  
          $this->model = new CBGV();
    }

	public function showList ()
	{
		$array = $this->model->list();
		include 'view/viewList.php';

	}

}


?>