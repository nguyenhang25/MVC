<?php

include 'Nguoi.php';
include ("CBGVAction.php");
include ("Connect.php");

use Nguoi\Nguoi;

class CBGV extends Nguoi implements CBGVAction
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
	public function getPhat ()
	{
		return $this->phat;
	}

	public function setLuongThuc ($luongThuc)
	{
		$this->luongThuc = $luongThuc;
	}
	public function getLuongThuc ()
	{
		return $this->luongThuc;
	}

	public function tinhLuong ()
	{
		return $this->luongCung + $this->thuong - $this->phat;
	}


	public function add ($hoTen, $namSinh, $queQuan, $luongCung, $thuong, $phat)
    {
		$con = new Connect();
		$con->conn();
		$sql = "INSERT INTO CBGV(ID, hoTen, namSinh, queQuan, luongCung, thuong, phat, luongThuc) 
            VALUES (NULL, '$hoTen', $namSinh, '$queQuan', $luongCung, $thuong, $phat, NULL)";
        $con->query($sql);
    }
    public function update ($id, $hoTen, $namSinh, $queQuan, $luongCung, $thuong, $phat)
	{
		$con = new Connect();
		$con->conn();
		$sql = "UPDATE CBGV SET hoTen = '$hoTen', namSinh = $namSinh, queQuan='$queQuan', luongCung = $luongCung, thuong = $thuong, phat = $phat WHERE ID = $id";
		$con->query($sql);		
	}

	public function delete ($id)
	{		
		$con = new Connect();
		$con->conn();
		$sql = "DELETE FROM CBGV WHERE ID = $id";
		$con->query($sql);
	}

	public function list ()
	{
		$con = new Connect();
		$con->conn();
		$sql = "SELECT * from CBGV" ;
		$con->query($sql);
		$array = array();
		$array = $con->getArray();
	
		foreach ($array as $key => $value) {
			$this->setID($value['ID']);
			$this->setHoTen($value['hoTen']);
			$this->setNamsinh($value['namSinh']);
			$this->setQueQuan($value['queQuan']);
			$this->setLuongCung($value['luongCung']);
			$this->setThuong($value['thuong']);
			$this->setPhat($value['phat']);

			$luongThuc = $this->tinhLuong();
			$array[$key]['luongThuc'] = $luongThuc;
			$this->setLuongThuc($luongThuc);

			$query = "UPDATE CBGV SET luongThuc=".$luongThuc." WHERE id=".$value['ID'];
			$con->query($query);
		}
		return $array;		
	}


	public function search ($hoTen)
	{
		$con = new Connect();
		$con->conn();
		$sql = "SELECT * FROM CBGV  WHERE hoTen LIKE '%$hoTen%'" ;
		$con->query($sql);
		$array = array();
		$array = $con->getArray();

		return $array;		
	}

	public function displayInforByID ($id)
	{	
		$con = new Connect();
		$con->conn();
		$sql = "SELECT * FROM CBGV  WHERE ID = $id ";
		$con->query($sql);
    	$array = array();
		$array = $con->getArray();
		return $array;
		
	}
	
}
?>