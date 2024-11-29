<?php 
class SanphamModel extends DB{
public function getAllSanpham(){
    $qr="SELECT * FROM sanpham ";
    return mysqli_query($this->con,$qr);
}
public function getSanpham($ID){
    $qr="SELECT * FROM sanpham WHERE ID = $ID";
    return mysqli_query($this->con,$qr);
}
public function search($name){
    $qr="SELECT * FROM sanpham WHERE tensp LIKE '%$name%'";
    return mysqli_query($this->con,$qr);
}
public function getSanphamTheoLoai1(){
    $qr="SELECT * FROM sanpham LIMIT 0,10";
    return mysqli_query($this->con,$qr);
}
public function getSanphamTheoLoai2(){
    $qr="SELECT * FROM sanpham LIMIT 10,10";
    return mysqli_query($this->con,$qr);
}
}
?>