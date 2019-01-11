<?php
namespace Nguoi;

class Nguoi 
{
	public $hoTen;
	public $namSinh;
	public $queQuan;

	public function setHoTen ($hoTen)
	{
		$this->hoTen = $hoTen;
	}
	public function getHoTen ()
	{
		return $this->hoTen;
	}

	public function setNamSinh ($namSinh)
	{
		$this->namSinh = $namSinh;
	}
	public function getNamsinh(){
		return $this->namSinh;
	}

	public function setQueQuan ($queQuan)
	{
		$this->queQuan = $queQuan;
	}
	public function getQueQuan ()
	{
		return $this->queQuan;
	}


}
?>
