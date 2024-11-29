<?php
class Login extends Controller
{
    private $loginModel;
    private $sanphammodel;

    public function __construct()
    {
        $this->loginModel = $this->model("LoginModel");
        $this->sanphammodel = $this->model("SanphamModel");
    }

    function form_dangnhap()
    {
        $this->View('Login', []);
    }
    function Dangnhap()
    {
        if (isset($_POST['Dangnhap'])) {
            $username = $_POST['tdn'];
            $password = $_POST['pw'];
            $result = $this->loginModel->checkLogin($username, $password);
            if ($result) {
                $row = mysqli_fetch_assoc($result);
                $_SESSION['role'] = $row['role'];
                $_SESSION['user_id'] = $row['ID'];
                $_SESSION['username'] = $username;
                header("Location: /dacs2/Home");
                exit();
            } else {

                $error = "Sai tên đăng nhập hoặc mật khẩu";
                $this->View('Login', [
                    'error' => $error,

                ]);
            }
        }
    }
    function logout()
    {
        session_destroy();
        header("Location: /dacs2/Home");
        exit();
    }
}
