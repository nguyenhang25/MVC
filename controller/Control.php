<?php

include_once("model/CBGV.php");


class Control
{
	public $model;

	public function __construct ()  
    {  
          $this->model = new CBGV();
    }

	public function index ()
	{
		$array = $this->model->list();
		include 'view/viewList.php';

	}

	public function search ()
	{
		if (isset($_POST['submit']))
		{
			if (!isset($_POST['name'])) {

			}
			else {
				$hoTen = $_POST['name'];
				$array = array();
				$array = $this->model->search($hoTen);
				include 'view/viewList.php';
			}
		}		
	}

	public function add ()
	{
		if (isset($_POST['submit']))
		{
			
			$hoTen = $_POST['hoTen'];
			$namSinh = $_POST['namSinh'];
			$queQuan = $_POST['queQuan'];
			$luongCung = $_POST['luongCung'];
			$thuong = $_POST['thuong'];
			$phat = $_POST['phat'];

			$this->model->add($hoTen, $namSinh, $queQuan, $luongCung, $thuong, $phat);
			header('location: ../MVC');
		}
	}

	public function callUpdateFile ()
	{
		$id = $_GET['id'];	
		$array = array();
		$array = $this->model->displayInforByID($id);
		include 'view/Sua.php';
	}

	public function update ()
	{
		if (isset($_POST['submit']))
		{
			$id = $_POST['id'];
			$hoTen = $_POST['hoTen'];
			$namSinh = $_POST['namSinh'];
			$queQuan = $_POST['queQuan'];
			$luongCung = $_POST['luongCung'];
			$thuong = $_POST['thuong'];
			$phat = $_POST['phat'];

			$this->model->update($id, $hoTen, $namSinh, $queQuan, $luongCung, $thuong, $phat);
			header('location: ../MVC');
		}
		if (isset($_POST['submitDelete'])) {
			$id = $_POST['id'];
			$this->model->delete($id);
			header('location: ../MVC');
		}
	}

}


?>