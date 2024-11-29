<?php
class Admin extends Controller
{
    private $adminModel;
    public function __construct()
    {
        $this->adminModel = $this->model("AdminModel");
    }
    public function dashboard()
    {
        $this->View('Viewadmin', [
            'page' => 'trangchu',
            'AllSP' => $this->adminModel->getTongsanpham(),
        ]);
    }
    public function orders()
    {
        $orders = $this->adminModel->getOrders();
        $this->View('layout1', [
            'page' => 'orders',
            'orders' => $orders,
        ]);
    }
    public function orderDetail($orderId)
    {
        $order = $this->adminModel->getOrder($orderId);
        $orderItems = $this->adminModel->getOrderItems($orderId);
        $this->View('layout1', [
            'page' => 'order',
            'order' => $order,
            'orderItems' => $orderItems,
        ]);
    }
    public function showSanpham()
    {
        $sanpham = $this->adminModel->getSanpham();
        $message = isset($_SESSION['message']) ? $_SESSION['message'] : '';
        $message_type = isset($_SESSION['message_type']) ? $_SESSION['message_type'] : '';
        unset($_SESSION['message']);
        unset($_SESSION['message_type']);
        $this->View('Viewadmin', [
            'page' => 'sanpham',
            'sanpham' => $sanpham,
            'message' => $message,
            'message_type' => $message_type,
        ]);
    }
    public function themSP()
    {
        if (isset($_POST['themsp'])) {
            $tenSanPham = $_POST['tenSanPham'];
            $mota = $_POST['mota'];
            $danhMuc = $_POST['danhMuc'];
            $giaSanPham = $_POST['giaSanPham'];
            $soLuong = $_POST['soLuong'];
            $hinh = $_FILES['taiAnh']['name'];
            $target_dir = "./public/img/";
            $target_file = $target_dir . basename($hinh);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
            if (empty($tenSanPham) || empty($mota) || empty($danhMuc) || empty($giaSanPham) || empty($soLuong) || !isset($_FILES['taiAnh'])) {
                $_SESSION['message'] = "Vui lòng điền đầy đủ thông tin sản phẩm.";
                $_SESSION['message_type'] = "danger";
                header("Location: /dacs2/Admin/showSanpham");
                exit();
            }
            // Kiểm tra xem file có phải là hình ảnh không
            $check = getimagesize($_FILES["taiAnh"]["tmp_name"]);
            if ($check !== false) {
                echo "File is an image - " . $check["mime"] . ".";
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }

            // Kiểm tra nếu file đã tồn tại
            if (file_exists($target_file)) {
                echo "Sorry, file already exists.";
                $uploadOk = 0;
            }

            // Kiểm tra kích thước file
            if ($_FILES["taiAnh"]["size"] > 1000000) {
                echo "Sorry, your file is too large.";
                $uploadOk = 0;
            }

            // Kiểm tra định dạng file
            if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
                echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                $uploadOk = 0;
            }

            // Kiểm tra nếu $uploadOk bằng 0 do lỗi
            if ($uploadOk == 0) {
                echo "Sorry, your file was not uploaded.";
                $_SESSION['message'] = "Lỗi khi tải ảnh lên";
                $_SESSION['message_type'] = "danger";
            } else {
                if (move_uploaded_file($_FILES["taiAnh"]["tmp_name"], $target_file)) {
                    // Gọi phương thức themSanPham từ adminModel
                    if ($this->adminModel->themSanPham($tenSanPham, $giaSanPham, $soLuong, $hinh, $danhMuc, $mota)) {
                        $_SESSION['message'] = "Thêm sản phẩm thành công";
                        $_SESSION['message_type'] = "success";
                    } else {
                        $_SESSION['message'] = "Lỗi khi thêm sản phẩm";
                        $_SESSION['message_type'] = "danger";
                    }
                } else {
                    $_SESSION['message'] = "Lỗi khi tải ảnh lên";
                    $_SESSION['message_type'] = "danger";
                }
            }

            header("Location: /dacs2/Admin/showSanpham");
            exit();
        }
    }
    public function updateSP()
    {
        if (isset($_POST['updatesp'])) {
            $tensp = $_POST['tenPR'];
            $gia = $_POST['giaPR'];
            $soluong = $_POST['soluongPR'];
            $hinh = $_FILES['anhPR']['name'];
            $iddm = $_POST['danhmucPR'];
            $motasp = $_POST['motaPR'];
            $id = $_POST['idPR'];
            $target_dir = "./public/img/";
            $target_file = $target_dir . basename($hinh);
            $currentImage = $this->adminModel->getCurrentImg($id);

            if (!empty($hinh)) {
                $target_dir = "./public/img/";
                $target_file = $target_dir . basename($hinh);
                $uploadOk = 1;
                $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
                $check = getimagesize($_FILES["anhPR"]["tmp_name"]);
                if (empty($tensp) || empty($motasp) || empty($iddm) || empty($gia) || empty($soluong) || !isset($_FILES['anhPR'])) {
                    $_SESSION['message'] = "Vui lòng điền đầy đủ thông tin sản phẩm.";
                    $_SESSION['message_type'] = "danger";
                }
                if ($check !== false) {
                    echo "File is an image - " . $check["mime"] . ".";
                } else {
                    $uploadOk = 0;
                }
                if (file_exists($target_file)) {
                    $uploadOk = 0;
                }
                if ($_FILES["anhPR"]["size"] > 1000000) {
                    $uploadOk = 0;
                }
                if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
                    $uploadOk = 0;
                }
                if ($uploadOk == 0) {
                    $_SESSION['message'] = "Lỗi khi tải ảnh lên";
                    $_SESSION['message_type'] = "danger";
                } else {
                    if (move_uploaded_file($_FILES["anhPR"]["tmp_name"], $target_file)) {
                        $hinh = basename($hinh); // Đường dẫn ảnh mới
                    } else {
                        $_SESSION['message'] = "Lỗi khi tải ảnh lên";
                        $_SESSION['message_type'] = "danger";
                    }
                }
            } else {
                // Nếu không có ảnh mới, giữ lại đường dẫn ảnh cũ
                $hinh = $currentImage;
            }
    
            // Gọi phương thức updateSanPham từ adminModel
            if ($this->adminModel->updateSP($tensp, $gia, $soluong, $hinh, $iddm, $motasp, $id)) {
                $_SESSION['message'] = "Cập nhật sản phẩm thành công";
                $_SESSION['message_type'] = "success";
            } else {
                $_SESSION['message'] = "Lỗi khi cập nhật sản phẩm";
                $_SESSION['message_type'] = "danger";
            }
        }
        header("Location:/dacs2/Admin/showSanpham");
        exit();
    }
    public function xoaSP(){
        $this->adminModel->deleteSP($_POST['id']);      
    }
    public function showAccount()
    {
        $this->View('Viewadmin', [
            'page' => 'thongtincanhan',
        ]);
    }
    public function showClient()
    {
        $this->View('Viewadmin', [
            'page' => 'khachhang',
        ]);
    }
    public function showNV()
    {
        $message_type = isset($_SESSION['message_type']) ? $_SESSION['message_type'] : '';
        $message = isset($_SESSION['message']) ? $_SESSION['message'] : '';
        $this->View('Viewadmin', [
            'page' => 'nhanvien',
            'AllNV' => $this->adminModel->getNV(),
            'message' => $message,
            'message_type' => $message_type,
        ]);
    }
    public function themNV(){
        if(isset($_POST['themnv'])){
            $tenNV = $_POST['addName'];
            $email = $_POST['addGmail'];
            $sdt = $_POST['addSDT'];
            $diachi = $_POST['addDiachi'];
            $gender = $_POST['addGender'];
            $chucvu= $_POST['addPosition'];
            $luong= $_POST['addSalary'];

            if(empty($tenNV) || empty($email) || empty($sdt) || empty($diachi) || empty($gender) || empty($chucvu) || empty($luong)){
                $_SESSION['message'] = "Vui lòng điền đầy đủ thông tin nhân viên.";
                $_SESSION['message_type'] = "danger";
            }
            else {
                if ($this->adminModel->themNV($tenNV, $chucvu, $diachi, $sdt, $luong, $email, $gender)) {
                    $_SESSION['message'] = "Thêm nhân viên thành công";
                    $_SESSION['message_type'] = "success";
                }
            }
           
    }
    header("Location:/dacs2/Admin/showNV");
}
public function updateNV(){
    if(isset($_POST['updatenv'])){
        $tenNV = $_POST['ten'];
        $email = $_POST['email'];
        $sdt = $_POST['soDienThoai'];
        $diachi = $_POST['diaChi'];
        $gender = $_POST['gioiTinh'];
        $chucvu= $_POST['chucVu'];
        $luong= $_POST['luong'];
        $id = $_POST['Id'];

        if(empty($tenNV) || empty($email) || empty($sdt) || empty($diachi) || empty($gender) || empty($chucvu) || empty($luong)){
            $_SESSION['message'] = "Vui lòng điền đầy đủ thông tin nhân viên.";
            $_SESSION['message_type'] = "danger";
        }
        else {
            if ($this->adminModel->updateNV($tenNV, $chucvu, $diachi, $sdt, $luong, $email, $gender, $id)) {
                $_SESSION['message'] = "Cập nhật nhân viên thành công";
                $_SESSION['message_type'] = "success";
            }
        }
    }
    header("Location:/dacs2/Admin/showNV");

}
public function deleteNV(){
    $this->adminModel->deleteNV($_POST['id']);      
}
}
?>