<?php
namespace CBGV;

include 'Nguoi.php'

use Nguoi\Nguoi;

class CBGV extends Nguoi
{
	public $luongThuc;
	public $luongCung;
	public $thuong;
	public $phat;

	public function setLuongCung ($luongCung)
	{
		$this->luongCung = $luongCung;
	}
	public function getLuongCung ()
	{
		return $this->luongCung;
	}

	public function setThuong ($thuong)
	{
		$this->thuong = $thuong;
	}
	public function getThuong ()
	{
		return $this->thuong;
	}

	public function setPhat ($phat)
	{
		$this->phat = $phat;
	}
	public function getPhat ($phat)
	{
		$this->phat = $phat;
	}

	public function tinhLuong ()
	{
		return $this->luongCung + $this->thuong - $this->phat;
	}

	public function luong ()
	{
		$link = new mysqli('localhost', 'root','','giangvien') or die('Kết nối thất bại!');
		mysqli_query($link, "SET NAMES 'utf8'");
		$query = "SELECT * from CBGV" ;
		$result = mysqli_query($link, $query);

		while($row = mysqli_fetch_array($result)) 
		{
			
		}

		
	}
}
?>