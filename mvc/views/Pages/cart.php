<section class="bg-white py-5">
    <div class="container">
        <h2 class="text-center text-xl fw-semibold text-dark mb-4">Giỏ hàng</h2>
        <div class="d-flex justify-content-start mb-3">
            <input type="checkbox" id="select-all" class="form-check-input">
            <label for="select-all" class="ms-2">Chọn tất cả</label>
        </div>
        <div class="row g-4">
            <!-- Cart Items -->
            <div class="col-lg-8">
                <form id="cartForm" action="/dacs2/Order/Orderview" method="POST">
                    <input type="hidden" name="selected_items" id="selected_items">
                    <div class="list-group">

                        <?php if (!empty($data['cartItems'])): ?>
                            <?php
                            $total = 0;
                            while ($item = mysqli_fetch_array($data['cartItems'])):
                                $subtotal = $item['price'] * $item['quantity'];
                                $total += $subtotal;
                            ?>

                                <div class="list-group-item border rounded shadow-sm p-3 mb-3">
                                    <div class="row align-items-center">
                                        <!-- Checkbox -->
                                        <div class="col-md-1 text-center">
                                            <input type="checkbox" class="form-check-input select-product"
                                                data-product-id="<?php echo $item['product_id']; ?>"
                                                data-price="<?php echo $subtotal . '.000Đ'; ?>">

                                        </div>
                                        <!-- Cột hình ảnh -->
                                        <div class="col-md-2 text-center">
                                            <a href="#">
                                                <img class="img-fluid" src="/dacs2/public/img/<?php echo $item['hinh']; ?>" alt="<?php echo $item['tensp']; ?>" width="120">
                                            </a>
                                        </div>
                                        <!-- Cột thông tin sản phẩm -->
                                        <div class="col-md-6">
                                            <a href="#" class="d-block text-dark text-decoration-none fw-medium mb-2">
                                                <?php echo $item['tensp']; ?>
                                            </a>
                                            <div class="d-flex align-items-center gap-3">
                                                <a href="/dacs2/details/HienthiCTSP/<?php echo $item['product_id'] ?>" class="btn btn-outline-secondary btn-sm">Xem chi tiết sản phẩm</a>
                                                <a class="btn btn-outline-danger btn-sm delete-product" href="/dacs2/Cart/deleteItemCart/<?php echo $item['product_id']; ?>">Xóa</a>
                                            </div>
                                        </div>
                                        <!-- Cột số lượng và giá -->
                                        <div class="col-md-2 text-center">
                                            <div class="input-group">
                                                <button class="btn btn-outline-secondary btn-sm decrease-qty"
                                                    data-product-id="<?php echo $item['product_id']; ?>">-</button>
                                                <input type="text" class="form-control text-center w-50 product-qty"
                                                    value="<?php echo $item['quantity']; ?>"
                                                    data-product-id="<?php echo $item['product_id']; ?>" readonly>
                                                <button class="btn btn-outline-secondary btn-sm increase-qty"
                                                    data-product-id="<?php echo $item['product_id']; ?>">+</button>
                                            </div>
                                        </div>
                                        <!-- Cột giá -->
                                        <div class="col-md-2 text-end">
                                            <p class="fw-bold text-dark mt-2"><?php echo $item['price'] . '.000Đ'; ?></p>
                                        </div>
                                    </div>
                                </div>

                            <?php endwhile; ?>
                        <?php else: ?>
                            <p class="text-center">Giỏ hàng của bạn trống.</p>
                        <?php endif; ?>
                    </div>
                </form>
            </div>
            <!-- Order Summary -->
            <div class="col-lg-4">
                <div class="card shadow-sm border">
                    <div class="card-body">
                        <h5 class="card-title text-dark fw-semibold mb-3">Tổng đơn hàng</h5>
                        <div class="mb-3">

                            <div class="d-flex justify-content-between">
                                <p class="text-muted">Phí vận chuyển:</p>
                                <p class="text-success">Miễn Phí Nha</p>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between border-top pt-3">
                            <h5 class="fw-bold">Tổng:</h5>
                            <h5 class="fw-bold text"><?php echo "{$total}.000Đ"; ?></h5>
                        </div>
                        <button type="button" onclick="submitOrder()" class="btn btn-primary btn-block d-block mx-auto mt-4">Đặt hàng</button>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="/dacs2/public/js/script2.js"> </script>
<script>
    // Tạo file cart.js
    $(document).ready(function() {
        $('.increase-qty, .decrease-qty').click(function(e) {
            e.preventDefault();
            let productId = $(this).data('product-id');
            let action = $(this).hasClass('increase-qty') ? 'increase' : 'decrease';

            $.ajax({
                url: '/dacs2/Cart/updateQuantity',
                type: 'POST',
                data: {
                    product_id: productId,
                    action: action
                },
                dataType: 'json',
                success: function(response) {
                    if (response.success) {
                        location.reload();
                    } else {
                        alert(response.message || 'Có lỗi xảy ra');
                    }
                },
                error: function() {
                    alert('Có lỗi xảy ra');
                }
            });
        });
    });

    function submitOrder() {
        let selectedItems = document.querySelectorAll('.select-product:checked');
        if (selectedItems.length === 0) {
            alert('Vui lòng chọn sản phẩm để đặt hàng');
            return;
        }
        // Lấy danh sách các ID sản phẩm đã chọn
        let selectedIds = Array.from(selectedItems).map(checkbox =>
            checkbox.getAttribute('data-product-id')
        );
        // Gán danh sách ID sản phẩm đã chọn vào input hidden
        document.getElementById('selected_items').value = JSON.stringify(selectedIds);
// Gửi form
        document.getElementById('cartForm').submit();
    }

    // Cập nhật tổng tiền khi chọn sản phẩm
    document.querySelectorAll('.select-product').forEach(checkbox => {
        checkbox.addEventListener('change', updateTotal);
    });

    function updateTotal() {
        let total = 0;
        document.querySelectorAll('.select-product:checked').forEach(item => {
            total += parseFloat(item.getAttribute('data-price'));
        });
        document.querySelector('.fw-bold.text').innerHTML = total + '.000Đ';
    }

    function tinhTongTien() {
        let tongTien = 0;
        $('.select-product:checked').each(function() {
            tongTien += parseFloat($(this).data('price'));
        });
        // Cập nhật hiển thị tổng tiền
        $('.text-dark:contains("Tổng:")').next().text(tongTien);
        // Cập nhật tổng tiền cuối cùng
        $('.fw-bold:contains("Tổng:")').next().text(tongTien);
    }

    $('#select-all').change(function() {
        let isChecked = $(this).is(':checked');
        $('.select-product').prop('checked', isChecked);
        tinhTongTien();
        let tongTien = parseFloat($('.fw-bold:contains("Tổng:")').next().text());
        $('.fw-bold:contains("Tổng:")').next().text(tongTien + '.000Đ');
    });

    // Chọn từng sản phẩm
    $('.select-product').change(function() {
        let totalCheckboxes = $('.select-product').length;
        let checkedCheckboxes = $('.select-product:checked').length;

        // Cập nhật trạng thái checkbox "Chọn tất cả"
        $('#select-all').prop('checked', totalCheckboxes === checkedCheckboxes);
        tinhTongTien();
        let tongTien = parseFloat($('.fw-bold:contains("Tổng:")').next().text());
        $('.fw-bold:contains("Tổng:")').next().text(tongTien + '.000Đ');
    });
    tinhTongTien();
    let tongTien = parseFloat($('.fw-bold:contains("Tổng:")').next().text());
    $('.fw-bold:contains("Tổng:")').next().text(tongTien + '.000Đ');
</script>