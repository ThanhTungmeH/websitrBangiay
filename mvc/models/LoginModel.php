<?php 
class LoginModel extends DB{
    public function checkLogin($username, $password) {
        $sql = "SELECT * FROM users WHERE TenDN = ? AND MatKhau = ?";
        $stmt = $this->con->prepare($sql);
        $stmt->bind_param("ss", $username, $password);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            return $result;
        } else {
            return false;
        }
}
}

?>