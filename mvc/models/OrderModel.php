<?php
class OrderModel extends DB
{
    public function createOrder($cartItems, $userId)
    {
        // Tính tổng giá trị đơn hàng
        $totalPrice = array_reduce($cartItems, function($sum, $item) {
            return $sum + $item['price'];
        }, 0);

        // Tạo câu truy vấn để chèn đơn hàng vào bảng orders
        $sql = "INSERT INTO orders (user_id, total_price, status, created_at, updated_at) VALUES (?, ?, ?, NOW(), NOW())";

        // Chuẩn bị và thực thi câu truy vấn
        $stmt = $this->con->prepare($sql);
        $status = 'Chưa thanh toán'; // Trạng thái đơn hàng ban đầu
        $stmt->bind_param("ids", $userId, $totalPrice, $status);

        if ($stmt->execute()) {
            // Lấy ID của đơn hàng vừa chèn
            $orderId = $stmt->insert_id;

            // Chèn chi tiết đơn hàng vào bảng order_items
            foreach ($cartItems as $item) {
                $sql = "INSERT INTO order_items (order_id, product_id, quantity, price) VALUES (?, ?, ?, ?)";
                $stmt = $this->con->prepare($sql);
                $quantity = 1; // Giả sử mỗi sản phẩm có số lượng là 1
                $stmt->bind_param("iiid", $orderId, $item['id'], $quantity, $item['price']);
                $stmt->execute();
            }

            return $orderId;
        } else {
            return false;
        }
    }
    function getOrder($orderId)
    {
        $sql = "SELECT * FROM orders WHERE ID = ?";
        $stmt = $this->con->prepare($sql);
        $stmt->bind_param("i", $orderId);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }
}
?>