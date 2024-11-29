<?php
class CartModel extends DB
{
    public function addToCart($userId, $productId, $quantity)
    {
        // Kiểm tra xem giỏ hàng đã tồn tại cho người dùng chưa
        $stmt = $this->con->prepare("SELECT ID FROM carts WHERE user_id = ?");
        $stmt->bind_param("i", $userId);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            // Giỏ hàng đã tồn tại
            $cart = $result->fetch_assoc();
            $cartId = $cart['ID'];
        } else {
            // Tạo giỏ hàng mới
            $stmt = $this->con->prepare("INSERT INTO carts (user_id) VALUES (?)");
            $stmt->bind_param("i", $userId);
            $stmt->execute();
            $cartId = $stmt->insert_id;
        }

        // Kiểm tra xem sản phẩm đã tồn tại trong giỏ hàng chưa
        $stmt = $this->con->prepare("SELECT ID, quantity FROM cart_items WHERE cart_id = ? AND product_id = ?");
        $stmt->bind_param("ii", $cartId, $productId);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            // Sản phẩm đã tồn tại trong giỏ hàng, cập nhật số lượng
            $cartItem = $result->fetch_assoc();
            $newQuantity = $cartItem['quantity'] + $quantity;
            $stmt = $this->con->prepare("UPDATE cart_items SET quantity = ? WHERE ID = ?");
            $stmt->bind_param("ii", $newQuantity, $cartItem['ID']);
        } else {
            // Thêm sản phẩm mới vào giỏ hàng
            $stmt = $this->con->prepare("INSERT INTO cart_items (cart_id, product_id, quantity, price) VALUES (?, ?, ?, (SELECT gia FROM sanpham WHERE ID = ?))");
            $stmt->bind_param("iiid", $cartId, $productId, $quantity, $productId);
        }

        return $stmt->execute();
    }

    public function getCartItems($userId)
    {
        $stmt = $this->con->prepare("SELECT ci.*, sp.tensp, sp.hinh FROM cart_items ci JOIN carts c ON ci.cart_id = c.ID JOIN sanpham sp ON ci.product_id = sp.ID WHERE c.user_id = ?");
        $stmt->bind_param("i", $userId);
        $stmt->execute();
        return $stmt->get_result();
    }
    
    public function deleteItemCart($userId, $productId)
    {
        $stmt = $this->con->prepare("SELECT ID FROM carts WHERE user_id = ?");
        $stmt->bind_param("i", $userId);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $cart = $result->fetch_assoc();
            $cartId = $cart['ID'];

            $stmt = $this->con->prepare("DELETE FROM cart_items WHERE cart_id = ? AND product_id = ?");
            $stmt->bind_param("ii", $cartId, $productId);
            return $stmt->execute();
        }

        return false;
    }
    public function updateQuantity($userId, $productId, $action) {
        // Lấy cart ID
        $stmt = $this->con->prepare("SELECT ID FROM carts WHERE user_id = ?");
        $stmt->bind_param("i", $userId);
        $stmt->execute();
        $result = $stmt->get_result();
        
        if ($result->num_rows > 0) {
            $cart = $result->fetch_assoc();
            $cartId = $cart['ID'];
            
            // Lấy số lượng hiện tại
            $stmt = $this->con->prepare("SELECT quantity FROM cart_items WHERE cart_id = ? AND product_id = ?");
            $stmt->bind_param("ii", $cartId, $productId);
            $stmt->execute();
            $result = $stmt->get_result();
            $currentQty = $result->fetch_assoc()['quantity'];
            
            // Tính số lượng mới
            $newQty = ($action === 'increase') ? $currentQty + 1 : $currentQty - 1;
            
            // Đảm bảo số lượng không nhỏ hơn 1
            if ($newQty < 1) $newQty = 1;
            
            // Cập nhật số lượng mới
            $stmt = $this->con->prepare("UPDATE cart_items SET quantity = ? WHERE cart_id = ? AND product_id = ?");
            $stmt->bind_param("iii", $newQty, $cartId, $productId);
            return $stmt->execute();
        }
        return false;
    }
    public function getItemsByIds($ids)
    {
        // Chuyển mảng ID thành chuỗi để sử dụng trong câu truy vấn SQL
        $idsString = implode(',', array_map('intval', $ids));

        // Truy vấn cơ sở dữ liệu để lấy thông tin chi tiết sản phẩm
        $sql = "SELECT * FROM sanpham WHERE ID IN ($idsString)";
        $result = $this->con->query($sql);

        // Kiểm tra nếu có kết quả
        if ($result->num_rows > 0) {
            $items = [];
            while ($row = $result->fetch_assoc()) {
                $items[] = $row;
            }
            return $items;
        } else {
            return [];
        }
    }

}
?>