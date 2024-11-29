<link rel="stylesheet" type="text/css" href="/dacs2/public/css/ctsp.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<style>
</style>
<div class="container">
    <div class="row product-details">
        <?php

        $dong = mysqli_fetch_assoc($data['sanpham']);

        ?>
        <div class="col-md-6 ">
            <img class="product-image " src="/dacs2/public/img/<?php echo $dong['hinh'] ?>">
        </div>
        <div class="col-md-6 product-info">
            <div class="product-title"><?php echo $dong['tensp']; ?></div>
            <div class="product-price"><?php echo $dong['gia'] . '.000đ' ?></div>
            <div class="product-description">
                <p><?php echo $dong['motasp'] ?></p>
            </div>
            <button class="btn tw-bg-cyan-400 tw-transition tw-ease-in-out tw-delay-75 tw-transform hover:tw-scale-110 hover:tw-bg-cyan-500 tw-duration-200 btn-buy">Mua hàng</button>
            <button class="btn tw-bg-teal-400 tw-transition  tw-ease-in-out tw-delay-75 tw-transform  hover:tw-scale-110 hover:tw-bg-teal-500 tw-duration-200   btn-cart" id="addToCart" data-id="<?php echo $dong['ID']; ?>">Thêm vào giỏ hàng</button>
        </div>

    </div>
    <div class="tw-w-full tw-mt-8 tw-p-6 tw-bg-white tw-shadow-md tw-rounded-lg">
     
        <h2 class="tw-text-2xl tw-font-semibold tw-mb-4">Bình luận sản phẩm</h2>
        <!-- Form gửi bình luận -->
        <form action="" method="POST" id="commentForm" class="tw-mb-6">
            <div class="tw-mb-3">
                <textarea
                    id="txtnd"
                  
                    rows="3"
                    class="tw-w-full tw-p-4 tw-border tw-border-gray-300 tw-rounded-lg tw-focus:tw-outline-none tw-focus:tw-ring-2 tw-focus:tw-ring-cyan-400"
                    placeholder="Viết bình luận của bạn..."
                    required></textarea>
            </div>
            <button class="tw-bg-cyan-500 tw-text-white tw-px-4 tw-py-2 tw-rounded-lg tw-transform hover:tw-bg-cyan-600 hover:tw-scale-110 tw-transition tw-duration-200 tw-ease-in-out"
               
                id="btnPost"
                data-idsp="<?php echo $dong['ID']; ?>">
                Đăng bình luận
            </button>
        </form>
        <div>
            <ul class="tw-list-group tw-space-y-4 tw-mt-4" id="uldsbl">
                <?php
                if (isset($data['comments'])) {
                    while ($row = mysqli_fetch_array($data['comments'])) {
                ?>
                        <li class="tw-list-group-item tw-p-4 tw-bg-gray-50 tw-border tw-border-gray-200 tw-rounded-lg tw-shadow">
                            <h1 class="tw-text-lg tw-font-semibold tw-text-cyan-700"><?php echo $row['TenDN'] ?></h1>
                            <p class="tw-text-gray-700"><?php echo $row['ndbl']; ?></p>
                        </li>
                <?php
                    }
                } else {
                    echo "<p class='tw-text-gray-500'>Sản phẩm này chưa có bình luận nào.</p>";
                }
                ?>
            </ul>
        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    // Xử lý việc thêm sản phẩm vào giỏ hàng bằng AJAX
    $('#addToCart').on('click', function() {
        var productId = $(this).data('id');
        $.ajax({
            type: 'POST',
            url:'/dacs2/Cart/add',
            data: {
                product_id: productId
            },
            success: function(response) {
                alert('Sản phẩm đã được thêm vào giỏ hàng.');
            }
        });
    });
    $(document).on('click', '#btnPost', function(e) {
        e.preventDefault();
        var userId = "<?php echo $_SESSION['user_id']  ?>";
        var username = "<?php echo $_SESSION['username'] ?>";
        var productId = $(this).data('idsp');
        var comment = $('#txtnd').val();
       
        if (comment.trim() !== "") {
            $.ajax({
                    url:'details/HienthiCTSP',
                    method: 'POST',
                    data: {
                        'iduser': userId,
                        'idsp': productId,
                        'ndbl': comment,
                    }
                })
                .done(function(data) {
                    var htmlbinhluan = `
        <li class="tw-p-4 tw-bg-gray-50 tw-border tw-border-gray-200 tw-rounded-lg tw-shadow tw-mb-4">
            <h1 class="tw-text-lg tw-font-semibold tw-text-cyan-700">${username}</h1>
            <p class="tw-text-gray-700">${$('#txtnd').val()}</p>
        </li>`;

                    $('#uldsbl').prepend(htmlbinhluan); // Thêm bình luận mới vào đầu danh sách
                    $('#txtnd').val(''); // Xóa nội dung trong ô nhập liệu
                })
                .fail(function() {
                    alert('Có lỗi xảy ra, vui lòng thử lại.');
                });
        }
    });
</script>