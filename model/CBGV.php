<?php
namespace CBGV;

include 'Nguoi.php';

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
	public function setLuongThuc ($luongThuc)
	{
		$this->luongThuc = $luongThuc;
	}

	public function tinhLuong ()
	{
		return $this->luongCung + $this->thuong - $this->phat;
	}

	
}
?>