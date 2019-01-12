<?php
include("model/model.php");


class MyController
{
	public $model;

	public function __construct()  
    {  
          $this->model = new model();
    }

	public function showList ()
	{
		$list = $this->model->luong();
		include 'view/viewList.php';

	}

}


?>