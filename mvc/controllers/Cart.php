<?php
class Cart extends Controller
{
    private $cartModel;

    public function __construct()
    {
        $this->cartModel = $this->model("CartModel");
    }

    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (isset($_SESSION['user_id'])) {
                $userId = $_SESSION['user_id'];
                $productId = $_POST['product_id'];
                $quantity = 1; // Bạn có thể thay đổi số lượng tùy theo yêu cầu

                // Thêm sản phẩm vào giỏ hàng
                $result = $this->cartModel->addToCart($userId, $productId, $quantity);

                if ($result) {
                    echo json_encode(['success' => true]);
                } else {
                    echo json_encode(['success' => false]);
                }
            } else {
                echo json_encode(['success' => false, 'message' => 'User not logged in']);
            }
        }
    }

    public function viewCart()
    {
        if (isset($_SESSION['user_id'])) {
            $userId = $_SESSION['user_id']; 
            $cartItems = $this->cartModel->getCartItems($userId);

            $this->View('layout1', [
                'page' => 'cart',
                'cartItems' => $cartItems,
            ]);
        } else {

            header("Location: /dacs2/Login/form_dangnhap");
            exit();
        }
    }
    public function deleteItemCart($productId)
    {
        
            if (isset($_SESSION['user_id'])) {
                $userId = $_SESSION['user_id'];
                $result = $this->cartModel->deleteItemCart($userId, $productId);

                if ($result) {
                    header("Location: /dacs2/Cart/viewCart");
                    exit();
                } else {
                    echo "Xóa sản phẩm không thành công";
                }
            } else {
                echo "User not logged in";
            }
        
    }
    public function updateQuantity()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (!isset($_SESSION['user_id'])) {
                echo json_encode(['success' => false, 'message' => 'User not logged in']);
                return;
            }
            
            if (!isset($_POST['product_id']) || !isset($_POST['action'])) {
                echo json_encode(['success' => false, 'message' => 'Missing required parameters']);
                return;
            }

            $userId = $_SESSION['user_id'];
            $productId = $_POST['product_id'];
            $action = $_POST['action'];

            $result = $this->cartModel->updateQuantity($userId, $productId, $action);

            echo json_encode([
                'success' => $result,
                'message' => $result ? 'Quantity updated' : 'Update failed'
            ]);
        }
    }
}

?>