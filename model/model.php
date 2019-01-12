<?php 
include_once("CBGV.php");

use CBGV\CBGV;

class model 
{
	public $giangVien;

	public function __construct()  
    {  
          $this->giangVien = new CBGV();
    }

    public function luong ()
	{
		$link = new mysqli('localhost', 'root','','giangvien') or die('Kết nối thất bại!');
		mysqli_query($link, "SET NAMES 'utf8'");
		$query = "SELECT * from CBGV" ;
		$result = mysqli_query($link, $query);

		$array = array();
		while($row = mysqli_fetch_assoc($result)) 
		{	
			$gv1 = new CBGV();
			$gv1->setID($row['ID']);
			$gv1->setHoTen($row['hoTen']);
			$gv1->setNamsinh($row['namSinh']);
			$gv1->setQueQuan($row['queQuan']);
			$gv1->setLuongCung($row['luongCung']);
			$gv1->setThuong($row['thuong']);
			$gv1->setPhat($row['phat']);

			$luongThuc = $gv1->tinhLuong();
			$gv1->setLuongThuc($luongThuc);

			$sql = "UPDATE CBGV SET luongThuc=".$luongThuc."WHERE id=".$row['ID'];
			
			array_push($array, $gv1);
		}

		return $array;
	}

	public function displayInfor ($ten)
	{
		$link = new mysqli('localhost', 'root','','giangvien') or die('Kết nối thất bại!');
		mysqli_query($link, "SET NAMES 'utf8'");
		$query = "SELECT * FROM CBGV  WHERE hoTen LIKE '%$ten%'";
    	$result = mysqli_query($link, $query);
    	$array = array();
		while($row = mysqli_fetch_assoc($result)) 
		{	
			$gv1 = new CBGV();
			$gv1->setID($row['ID']);
			$gv1->setHoTen($row['hoTen']);
			$gv1->setNamsinh($row['namSinh']);
			$gv1->setQueQuan($row['queQuan']);
			$gv1->setLuongCung($row['luongCung']);
			$gv1->setThuong($row['thuong']);
			$gv1->setPhat($row['phat']);

			$luongThuc = $gv1->tinhLuong();
			$gv1->setLuongThuc($luongThuc);

			$sql = "UPDATE CBGV SET luongThuc=".$luongThuc."WHERE id=".$row['ID'];
			
			array_push($array, $gv1);
		}

		return $array;
	}
}
?>