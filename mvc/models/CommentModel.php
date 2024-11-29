<?php
class CommentModel extends DB
{
    public function addcomment($ndbl, $idus, $idsp)
    {
        $stmt = $this->con->prepare("INSERT INTO binhluan (ndbl, idus, idsp, ngaybinhluan) VALUES (?, ?, ?, ?)");
        $date = date('Y-m-d');
        $stmt->bind_param("siis", $ndbl, $idus, $idsp, $date);
        return $stmt->execute();
    }


    public function getcomment($idsp)
    {
        $stmt = $this->con->prepare("
        SELECT binhluan.*, users.TenDN 
        FROM binhluan 
        INNER JOIN users ON binhluan.idus = users.ID
        WHERE binhluan.idsp = ?
    ");
        $stmt->bind_param("i", $idsp);
        $stmt->execute();
        return $stmt->get_result();
    }
}
