<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Hóa Đơn</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="/Shop/css/lib.css" rel="stylesheet"> <!-- Sửa lỗi dấu ngoặc kép bị thiếu ở đây -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>





  <label>Kết quả:</label>
  <label>
    <?php
    if ($_GET['vnp_ResponseCode'] == '00') {
      $conn = mysqli_connect('localhost', 'root', '', 'shopbangiay');
      $sql = "UPDATE orders SET status = 'DaThanhToan' WHERE id = 1; ";
      $kq = mysqli_query($conn, $sql);
    } else {
      echo "<span style='color:red'>GD Khong thanh cong</span>";
    }

    ?>
  </label>

  <div class="container mt-5">
    <div class="row">
      <div class="col-md-8 mb-4">
        <h3>Cảm ơn bạn đã đặt hàng!</h3>
        <p>Đơn hàng của bạn sẽ được xử lý trong vòng 24 giờ trong ngày làm việc. Chúng tôi sẽ thông báo cho bạn qua email khi đơn hàng đã được gửi đi.</p>
        <dl class="row">
          <dt class="col-sm-4">Mã đơn hàng</dt>
          <dd class="col-sm-8" id="billNumber"></dd>
          <dt class="col-sm-4">Ngày mua</dt>
          <dd class="col-sm-8" id="purchaseDate"></dd>
          <dt class="col-sm-4">Tên người đặt</dt>
          <dd class="col-sm-8" id="customerName"></dd>
          <dt class="col-sm-4">Địa chỉ</dt>
          <dd class="col-sm-8" id="address">Thông tin chưa có</dd>
          <dt class="col-sm-4">Số điện thoại</dt>
          <dd class="col-sm-8" id="phone">Thông tin chưa có</dd>
        </dl>
        <button class="btn btn-primary me-2">Tiếp tục mua sắm</button>
      </div>
      <div class="col-md-4">
        <div class="card p-4">
          <div class="order-summary-title mb-3">Tóm tắt đơn hàng</div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item d-flex justify-content-between">
              <span class="col-8">Jordan 1</span>
              <span class="col-2">x1</span>
              <span class="col-2 text-end">2000đ</span>
            </li>
            <li class="list-group-item d-flex justify-content-between">
              <span class="col-8">Jordan 1</span>
              <span class="col-2">x1</span>
              <span class="col-2 text-end">2000đ</span>
            </li>
            <li class="list-group-item d-flex justify-content-between">
              <span class="col-8">Jordan 1</span>
              <span class="col-2">x1</span>
              <span class="col-2 text-end">2000đ</span>
            </li>
            <li class="list-group-item d-flex justify-content-between">
              <span class="col-8">Jordan 1</span>
              <span class="col-2">x1</span>
              <span class="col-2 text-end">2000đ</span>
            </li>
          </ul>
          <ul class="list-group list-group-flush mt-3">
            <li class="list-group-item d-flex justify-content-between align-items-center text-success">
              Phí vận chuyển <span>Miễn phí</span>
            </li>
          </ul>
          <div class="list-group-item d-flex justify-content-between align-items-center mt-3">
            <strong>Tổng cộng</strong> <strong><?php echo number_format($_GET['vnp_Amount'] / 100, 0, ',', '.'); ?> VND</strong>
          </div>
        </div>
      </div>
    </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>