<?php
interface CBGVAction
{
	public function add ($hoTen, $namSinh, $queQuan, $luongCung, $thuong, $phat);
	public function update ($id, $hoTen, $namSinh, $queQuan, $luongCung, $thuong, $phat);
	public function delete ($id);
	public function list ();
	public function search ($hoTen);
}
?>