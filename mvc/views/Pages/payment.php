<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    

</head>

<body>

 

    <div class="container mt-5">
        <form action="/dacs2/Order/xulythanhtoan" id="frmOrderInfo" method="post">
            <div class="row">
                <!-- Form thông tin người đặt hàng -->
                <div class="col-md-7">
                    <div class="card p-4">
                        <h5 class="card-title"><span class="fw-mediumbold">Thông tin</span> <span class="fw-light">Người Đặt Hàng</span></h5>
                        <p class="small">
                            Điền thông tin đặt hàng online của bạn vào biểu mẫu dưới đây.
                        </p>


                        <div class="row g-3">
                            <!-- Họ và Tên -->
                            <div class="mb-3 col-md-6">
                                <label for="customerName" class="form-label">Tên người nhận</label>
                                <input id="customerName" type="text" class="form-control" placeholder="Lương Thịnh" name="customerName" required />
                            </div>

                            <!-- Số điện thoại -->
                            <div class="mb-3 col-md-6">
                                <label for="customerPhone" class="form-label">Số điện thoại</label>
                                <input id="customerPhone" type="text" class="form-control" placeholder="0987654321" name="customerPhone" required />
                            </div>

                            <!-- Địa chỉ giao hàng -->
                            <div class="mb-3 col-md-12">
                                <label for="customerAddress" class="form-label">Địa chỉ giao hàng</label>
                                <input id="customerAddress" type="text" class="form-control" placeholder="123 Đường gì đó, Quận gì đó, TP gì đó" name="customerAddress" required />
                            </div>

                            <!-- Phương thức thanh toán -->
                            <div class="mb-3 col-md-6">
                                <label for="addEmail" class="form-label">Phương thức thanh toán</label>
                                <input type="text" class="form-control" placeholder="Thanh toán qua thẻ ATM/Tài khoản nội địa" readonly />
                            </div>

                            <!-- Số tiền -->
                            <div class="mb-3 col-md-6">
                                <label for="amount" class="form-label">Số tiền</label>
                                <input class="form-control" id="amount" name="amount" type="number" value="<?php echo $_tong ?>" readonly />
                            </div>

                            <!-- Hidden Input for Language -->
                            <input type="hidden" id="language" name="language" value="vn">

                            <div class="d-flex justify-content-between mt-4">
                                <button type="submit" name="redirect" id="redirect" class="btn btn-success">Thanh toán</button>
                                <button type="button" class="btn btn-outline-secondary">Quay lại</button>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Tóm tắt đơn hàng -->
                <div class="col-md-5">
                    <div class="card p-4">
                        <div class="order-summary-title mb-3">
                            <h3>Tóm tắt đơn hàng</h3>
                        </div>
                        <ul class="list-group list-group-flush">
                            
                        </ul>
                        <ul class="list-group list-group-flush mt-3">
                            <li class="list-group-item d-flex justify-content-between align-items-center text-success">
                                Phí vận chuyển <span>Miễn phí</span>
                            </li>
                        </ul>
                        <div class="list-group-item d-flex justify-content-between align-items-center mt-3 card-body">
                            <strong>Tổng cộng</strong> <strong><?php echo $_tong ?>đ</strong>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

</body>

</html>