<?php

include_once("model/CBGV.php");


class Control
{
	public $model;

	public function __construct ()  
    {  
          $this->model = new CBGV();
    }

	
	public function search ()
	{
		
		$this->model->search();
	}

	public function add ()
	{

		$this->model->add();
	}

	public function callUpdateFile ()
	{
		$this->model->displayInforByID();
	}

	public function update ()
	{
		if (isset($_POST['submit']))
		{
			$this->model->update();
			
		}
		if (isset($_POST['submitDelete'])) {
			$this->model->delete();
		}
	}

}


?>