<?php
include("../model/model.php");



class searchControl
{
	public $model;

	public function __construct()  
    {  
          $this->model = new model();
    }

	
	public function search ()
	{
		
		if (isset($_POST['submit']))
		{
			if (!isset($_POST['name'])) {

			}
			else {
				$hoTen = $_POST['name'];

				$list = $this->model->displayInfor($hoTen);
				include '../view/Infor.php';
			}
		}
	}

}


?>