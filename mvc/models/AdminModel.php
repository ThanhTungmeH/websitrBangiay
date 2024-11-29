<?php
class AdminModel extends DB
{
  function getSanpham()
  {
    $stmt = $this->con->prepare("SELECT * FROM sanpham");
    $stmt->execute();
    return $stmt->get_result();
  }
  function themSanPham($tenSanPham, $gia, $soluong, $hinh, $iddm, $motasp)
  {
    $stmt = $this->con->prepare("INSERT INTO sanpham(tensp,gia,soluong,hinh,iddm,motasp) VALUES(?,?,?,?,?,?)");
    $stmt->bind_param("sdisis", $tenSanPham, $gia, $soluong, $hinh, $iddm, $motasp);
    if ($stmt->execute()) {
      return true;
    } else {
      return false;
    }
  }
  function updateSP($tenSanPham, $gia, $soluong, $hinh, $iddm, $motasp, $id)
  {
    $stmt = $this->con->prepare("UPDATE sanpham SET tensp = ?, gia = ?, soluong = ?, hinh = ?, iddm = ?, motasp = ? WHERE id = ?");
    $stmt->bind_param("sdisisi", $tenSanPham, $gia, $soluong, $hinh, $iddm, $motasp, $id);
    if ($stmt->execute()) {
      return true;
    } else {
      return false;
    }
  }
  function deleteSP($id)
  {
    $stmt = $this->con->prepare("DELETE FROM sanpham WHERE id = ?");
    $stmt->bind_param("i", $id);
    if ($stmt->execute()) {
      return true;
    } else {
      return false;
    }
  }
  function getCurrentImg($id)
  {
    $stmt = $this->con->prepare("SELECT hinh FROM sanpham WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    return $row['hinh']; // Trả về đường dẫn ảnh
  }
  function getTongsanpham()
  {
    $stmt = $this->con->prepare("SELECT COUNT(id) as total FROM sanpham");
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    return $row['total'];
  }
  function getNV()
  {
    $stmt = $this->con->prepare("SELECT * FROM nhanvien");
    $stmt->execute();
    return $stmt->get_result();
  }
  function themNV($tenNV, $chucvu, $diachi, $sdt, $luong, $email, $gender)
  {
    $stmt = $this->con->prepare("INSERT INTO nhanvien(TenNV,Chucvu,Diachi,SDT,Luong,Gmail,Gioitinh) VALUES(?,?,?,?,?,?,?)");
    $stmt->bind_param("sssssss", $tenNV, $chucvu, $diachi, $sdt, $luong, $email, $gender);
    if ($stmt->execute()) {
      return true;
    } else {
      return false;
    }
  }
  function updateNV($tenNV, $chucvu, $diachi, $sdt, $luong, $email, $gender, $id)
  {
    $stmt = $this->con->prepare("UPDATE nhanvien SET TenNV = ?, Chucvu = ?, Diachi = ?, SDT = ?, Luong = ?, Gmail = ?, Gioitinh = ? WHERE ID = ?");
    $stmt->bind_param("sssssssi", $tenNV, $chucvu, $diachi, $sdt, $luong, $email, $gender, $id);
    if ($stmt->execute()) {
      return true;
    } else {
      return false;
    }
  }
  function deleteNV($id)
  {
    $stmt = $this->con->prepare("DELETE FROM nhanvien WHERE ID = ?");
    $stmt->bind_param("i", $id);
    if ($stmt->execute()) {
      return true;
    } else {
      return false;
    }
  }
}
