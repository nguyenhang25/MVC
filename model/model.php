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

    public function ketnoi(){
    	$link = new mysqli('localhost', 'root','','giangvien') or die('Kết nối thất bại!');
		mysqli_query($link, "SET NAMES 'utf8'");
		return $link;
    }

    public function returnArray($result){
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

    public function luong ()
	{
		$link = $this->ketnoi();
		$query = "SELECT * from CBGV" ;
		$result = mysqli_query($link, $query);
		return $this->returnArray($result);
		
	}

	public function displayInfor ($ten)
	{
		$link = $this->ketnoi();
		$query = "SELECT * FROM CBGV  WHERE hoTen LIKE '%$ten%'";
    	$result = mysqli_query($link, $query);
    	return $this->returnArray($result);
	}

	public function displayInforByID ($id)
	{
		$link = $this->ketnoi();
		$query = "SELECT * FROM CBGV  WHERE ID = $id ";
    	$result = mysqli_query($link, $query);
    	return $this->returnArray($result);
	}


	public function add ($hoTen, $namSinh, $queQuan, $luongCung, $thuong, $phat){
		$link = $this->ketnoi();
		$sql = "INSERT INTO CBGV(ID, hoTen, namSinh, queQuan, luongCung, thuong, phat, luongThuc) 
                VALUES (NULL, '$hoten', $namSinh, '$queQuan', $luongCung, $thuong, $phat, NULL)";
        $query = mysqli_query($link, $sql);
        
	}

	public function update ($id, $hoTen, $namSinh, $queQuan, $luongCung, $thuong, $phat){
		$link = $this->ketnoi();
		$sql = "UPDATE CBGV SET hoTen = '$hoTen', namSinh = $namSinh, queQuan='$queQuan', luongCung = $luongCung, thuong = $thuong, phat = $phat WHERE ID = $id";
        $query = mysqli_query($link, $sql);
        
	}

	public function delete($id){
		$link = $this->ketnoi();
		$sql = "DELETE FROM CBGV WHERE ID = $id";
		$query = mysqli_query($link, $sql);
	}

}

?>