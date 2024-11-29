<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge" charset="UTF-8" />
  <title>Sản phẩm</title>
  <meta content="width=device-width, initial-scale=1.0, shrink-to-fit=no" name="viewport" />
  <link rel="icon" href="/dacs2/public/assets/img/kaiadmin/favicon.ico" type="image/x-icon" />

  <!-- Fonts and icons -->
  <script src="/dacs2/public/assets/js/plugin/webfont/webfont.min.js"></script>
  <script>
    WebFont.load({
      google: {
        families: ["Public Sans:300,400,500,600,700"]
      },
      custom: {
        families: [
          "Font Awesome 5 Solid",
          "Font Awesome 5 Regular",
          "Font Awesome 5 Brands",
          "simple-line-icons",
        ],
        urls: ["/dacs2/public/assets/css/fonts.min.css"],
      },
      active: function() {
        sessionStorage.fonts = true;
      },
    });
  </script>

  <!-- CSS Files -->
  <link rel="stylesheet" href="/dacs2/public/assets/css/bootstrap.min.css" />
  <link rel="stylesheet" href="/dacs2/public/assets/css/plugins.min.css" />
  <link rel="stylesheet" href="/dacs2/public/assets/css/kaiadmin.min.css" />

</head>

<body>



  <div class="container">
    <div class="page-inner">

      <div class="page-header">
        <h3 class="fw-bold mb-3">Danh sách sản phẩm</h3>
        <ul class="breadcrumbs mb-3">
          <li class="nav-home">
            <a href="#">
              <i class="icon-home"></i>
            </a>
          </li>
          <li class="separator">
            <i class="icon-arrow-right"></i>
          </li>
          <li class="nav-item">
            <a href="#">Quản lý</a>
          </li>
          <li class="separator">
            <i class="icon-arrow-right"></i>
          </li>
          <li class="nav-item">
            <a href="#">Sản phẩm</a>
          </li>
        </ul>
      </div>

      <div class="row">
        <div class="col-md-12 ">
          <div class="card">

            <div class="card-header">

              <div class="d-flex align-items-center">

                <h4 class="card-title">Danh sách sản phẩm</h4>
                <button class="btn btn-secondary ms-auto" data-bs-toggle="modal"
                  data-bs-target="#themsanpham">
                  <i class="fa fa-plus"></i>
                  Thêm sản phẩm
                </button>
              </div>
            </div>
            <!-- modal thêm sản phẩm -->
            <div class="card-body ">
              <div class="card-body ">
                <div class="modal fade" id="themsanpham" tabindex="-1" aria-labelledby="themsanpham" aria-hidden="true">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="tieuDeTabModal">
                          <span class="text-muted fw-light">Thông tin sản phẩm</span>
                        </h5>
                      </div>
                      <form action="/dacs2/Admin/themSP" method="POST" id="formThongTinSanPham" enctype="multipart/form-data">
                        <div class="modal-body">
                          <div class="container-xl flex-grow-1 container-p-y">
                            <!-- Thông tin sản phẩm -->
                            <div class="card mb-4">
                              <h5 class="card-header">Thông tin Sản phẩm</h5>
                              <div class="card-body">
                                <div class="d-flex align-items-start align-items-sm-center gap-4">
                                  <img id="previewImage" src="#" alt="Ảnh đã chọn" class="d-block rounded" height="100" width="100" style="display: none;" />
                                  <div class="button-wrapper">
                                    <label for="taiAnh" class="btn btn-info me-2 mb-4" tabindex="0">
                                      <span class="d-none d-sm-block">Ảnh mới</span>
                                      <input type="file" id='anh' name="taiAnh" class="account-file-input">
                                    </label>

                                    <p class="text-muted mb-0">Định dạng JPG, GIF hoặc PNG. Kích thước tối đa 1MB</p>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-12 mb-3">
                                    <div class="form-group form-group-default">
                                      <label>Tên sản phẩm</label>
                                      <input name="tenSanPham" type="text" class="form-control" placeholder="Jordan 1" />
                                    </div>
                                  </div>
                                  <div class="col-md-6 mb-3">
                                    <div class="form-group form-group-default">
                                      <label>Mô tả sản phẩm</label>
                                      <input name="mota" type="text" class="form-control" />
                                    </div>
                                  </div>
                                  <div class="col-md-6 mb-3">
                                    <div class="form-group form-group-default">
                                      <label>Danh mục</label>
                                      <select name="danhMuc" class="form-control">
                                        <option value="1" selected>Giày</option>
                                        <option value="2">Dép</option>
                                      </select>
                                    </div>
                                  </div>
                                  <div class="col-md-6 mb-3">
                                    <div class="form-group form-group-default">
                                      <label>Giá</label>
                                      <input name="giaSanPham" type="text" class="form-control" placeholder="1000000 VND" />
                                    </div>
                                  </div>
                                  <div class="col-md-6 mb-3">
                                    <div class="form-group form-group-default">
                                      <label>Số lượng</label>
                                      <input name="soLuong" type="number" class="form-control" placeholder="10" />
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Đóng</button>
                          <button type="submit" name="themsp" class="btn btn-success">Thêm</button>
                        </div>
                      </form>
                      <?php if (!empty($data['message'])): ?>
                        <div class="alert alert-<?php echo $data['message_type']; ?> alert-dismissible fade show" role="alert">
                          <?php echo $data['message']; ?>
                          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                      <?php endif; ?>
                    </div>
                  </div>
                </div>
                <!-- Table và các thành phần khác không thay đổi -->
              </div>

              <div class="table-responsive ">
                <table id="basic-datatables" class="display table table-striped table-hover ">
                  <thead>
                    <tr>
                      <td>ID</td>
                      <td>Hình ảnh</td>
                      <td>Tên sản phẩm</td>
                      <td>Giá</td>
                      <td>Số lượng</td>
                      <td>Mô tả</td>
                      <td>ID danh mục</td>
                      <th></th>
                    </tr>
                  </thead>

                  <tbody>
                    <?php
                    while ($dong = mysqli_fetch_array($data['sanpham'])) {
                    ?>
                      <tr>

                        <td><?php echo $dong['ID']; ?></td>
                        <td><img style="border-radius: 10px;" width="50%" src="/dacs2/public/img/<?php echo $dong['hinh']  ?>"></td>
                        <td><?php echo $dong['tensp']; ?></td>
                        <td><?php echo $dong['gia']; ?></td>
                        <td><?php echo $dong['soluong']; ?></td>
                        <td><?php echo $dong['motasp']; ?></td>
                        <td><?php echo $dong['iddm']; ?></td>

                        <td>
                          <!-- nút xem chi tiết -->
                          <div class="btn-group dropdown">
                            <button class="btn btn-black  btn-xs dropdown-toggle" type="button"
                              data-bs-toggle="dropdown" aria-expanded="false">
                              Xem thêm
                            </button>
                            <ul class="dropdown-menu" role="menu">
                              <li>
                                <a
                                  class="dropdown-item"
                                  href="#"
                                  data-bs-toggle="modal"
                                  data-bs-target="#thongtinsanpham"
                                  data-id="<?php echo $dong['ID']; ?>"
                                  data-tensp="<?php echo $dong['tensp']; ?>"
                                  data-gia="<?php echo $dong['gia']; ?>"
                                  data-soluong="<?php echo $dong['soluong']; ?>"
                                  data-motasp="<?php echo $dong['motasp']; ?>"
                                  data-danhmuc="<?php echo $dong['iddm']; ?>"
                                  data-hinh="/dacs2/public/img/<?php echo $dong['hinh']; ?>">

                                  Xem chi tiết
                                </a>

                                <a class="dropdown-item delete-product " data-id="<?php echo $dong['ID'] ?>">Xóa</a>
                              </li>
                            </ul>
                            <!-- Modal thông tin khách hàng -->
                            <div class="modal fade" id="thongtinsanpham" tabindex="-1" aria-labelledby="thongtinsanpham" aria-hidden="true">
                              <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="tieuDeTabModal">
                                      <span class="text-muted fw-light">Thông tin sản phẩm</span>
                                    </h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Đóng"></button>
                                  </div>
                                  <form action="/dacs2/Admin/updateSP" method="POST" enctype="multipart/form-data">
                                    <div class="modal-body">
                                      <div class="container-xl flex-grow-1 container-p-y">
                                        <!-- Thông tin sản phẩm -->
                                        <div class="card mb-4">
                                          <h5 class="card-header">Thông tin Sản phẩm</h5>
                                          <div class="card-body">
                                            <div class="d-flex align-items-start align-items-sm-center gap-4">

                                              <img src="/dacs2/public/assets/img/avatars/1.png" alt="anh-dai-dien" class="d-block rounded" height="100" width="100" id="anhDaiDien" />

                                              <div class="button-wrapper">

                                                <label for="taiAnh" class="btn btn-primary me-2 mb-4" tabindex="0">
                                                  <span class="d-none d-sm-block">Ảnh mới</span>
                                                  <input type="file" id="taiAnh" name="anhPR" class="account-file-input" hidden accept="image/png, image/jpeg" />
                                                </label>

                                                <p class="text-muted mb-0">Định dạng JPG, GIF hoặc PNG. Kích thước tối đa 800K</p>
                                              </div>
                                            </div>
                                            <div class="row">
                                              <input type="hidden" id="Id" name="idPR">
                                              <div class="col-md-12 mb-3">
                                                <div class="form-group form-group-default">
                                                  <label>Tên sản phẩm</label>
                                                  <input id="tenSanPham" name="tenPR" type="text" class="form-control" />
                                                </div>
                                              </div>
                                              <div class="col-md-6 mb-3">
                                                <div class="form-group form-group-default">
                                                  <label>Mô tả sản phẩm</label>
                                                  <input id="motasp" name="motaPR" type="text" class="form-control" />
                                                </div>
                                              </div>
                                              <div class="col-md-6 mb-3">
                                                <div class="form-group form-group-default">
                                                  <label>Danh mục</label>
                                                  <select id="danhMuc" name="danhmucPR" class="form-control">
                                                    <option value="1" selected>Giày</option>
                                                    <option value="2">Dép</option>
                                                  </select>
                                                </div>
                                              </div>
                                              <div class="col-md-6 mb-3">
                                                <div class="form-group form-group-default">
                                                  <label>Giá</label>
                                                  <input id="giaSanPham" name="giaPR" type="text" class="form-control" placeholder="1000000 VND" />
                                                </div>
                                              </div>
                                              <div class="col-md-6 mb-3">
                                                <div class="form-group form-group-default">
                                                  <label>Số lượng</label>
                                                  <input id="soLuong" name="soluongPR" type="number" class="form-control" placeholder="10" />
                                                </div>
                                              </div>
                                            </div>

                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                                      <button type="submit" name="updatesp" class="btn btn-success">Cập nhật</button>
                                    </div>
                                  </form>
                                  <?php if (!empty($data['message'])): ?>
                                    <div class="alert alert-<?php echo $data['message_type']; ?> alert-dismissible fade show" role="alert">
                                      <?php echo $data['message']; ?>
                                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                  <?php endif; ?>

                                </div>
                              </div>
                            </div>
                          </div>

                        </td>
                      </tr>
                    <?php } ?>

                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  </div>

  </div>
  <!--   Core JS Files   -->



  <script src="/dacs2/public/js/script.js"></script>
  <script src="/dacs2/public/assets/js/core/jquery-3.7.1.min.js"></script>
  <script src="/dacs2/public/assets/js/core/popper.min.js"></script>
  <script src="/dacs2/public/assets/js/core/bootstrap.min.js"></script>
  <script src="/dacs2/public/assets/js/plugin/datatables/datatables.min.js"></script>
  <script src="/dacs2/public/assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>
  <script src="/dacs2/public/assets/js/plugin/sweetalert/sweetalert.min.js"></script>
  <script src="/dacs2/public/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
  <script src="/dacs2/public/assets/js/kaiadmin.min.js"></script>


  <script>
    (function() {
      'use strict';

      // Hàm khởi tạo kiểm tra form
      function initializeFormValidation() {
        var forms = document.querySelectorAll('.needs-validation');
        Array.prototype.slice.call(forms).forEach(function(form) {
          form.addEventListener('submit', function(event) {
            if (!form.checkValidity()) {
              event.preventDefault();
              event.stopPropagation();
            }
            form.classList.add('was-validated');
          }, false);
        });
      }

      // Gọi hàm khi DOM được tải xong
      document.addEventListener('DOMContentLoaded', function() {
        initializeFormValidation();
      });

    })();
  </script>

  <script>
    $(document).ready(function() {
      $("#basic-datatables").DataTable({});
      $("#multi-filter-select").DataTable({
        pageLength: 10,
        initComplete: function() {
          this.api()
            .columns()
            .every(function() {
              var column = this;
              var select = $(
                  '<select class="form-select"><option value=""></option></select>'
                )
                .appendTo($(column.footer()).empty())
                .on("change", function() {
                  var val = $.fn.dataTable.util.escapeRegex($(this).val());

                  column
                    .search(val ? "^" + val + "$" : "", true, false)
                    .draw();
                });

              column
                .data()
                .unique()
                .sort()
                .each(function(d, j) {
                  select.append(
                    '<option value="' + d + '">' + d + "</option>"
                  );
                });
            });
        },
      });
    });
  </script>
  <script>
$(document).ready(function() {
  // Xử lý sự kiện click nút xóa sản phẩm
  $(document).on('click', '.delete-product', function(e) {
    e.preventDefault();
    var productId = $(this).data('id');
    if (confirm('Bạn có chắc chắn muốn xóa sản phẩm này?')) {
      $.ajax({
        url: '/dacs2/Admin/xoaSP',
        type: 'POST',
        data: { id: productId },
        success: function(response) {
         
          alert('Sản phẩm đã được xóa thành công!');
          location.reload(); // Tải lại trang để cập nhật danh sách sản phẩm
        },
        error: function(xhr, status, error) {
          // Xử lý lỗi
          alert('Có lỗi xảy ra: ' + error);
        }
      });
    }
  });
});

    $(document).on('click', 'a[data-bs-toggle="modal"]', function() {
      // Lấy thông tin từ các thuộc tính `data`
      const id = $(this).data('id');
      const tensp = $(this).data('tensp');
      const gia = $(this).data('gia');
      const soluong = $(this).data('soluong');
      const motasp = $(this).data('motasp');
      const danhmuc = $(this).data('danhmuc');
      const hinh = $(this).data('hinh'); // Lấy URL của hình ảnh

      // Gán dữ liệu vào các trường trong modal
      $('#Id').val(id);
      $('#tenSanPham').val(tensp);
      $('#giaSanPham').val(gia);
      $('#soLuong').val(soluong);
      $('#motasp').val(motasp);
      $('#danhMuc').val(danhmuc);

      // Hiển thị hình ảnh trong modal
      $('#anhDaiDien').attr('src', hinh);

      // Hiển thị ảnh nếu đang bị ẩn
      $('#anhDaiDien').show();

    });

    document.addEventListener('DOMContentLoaded', function() {
      const fileInput = document.getElementById('anh');
      const previewImage = document.getElementById('previewImage');

      fileInput.addEventListener('change', function(event) {
        const file = event.target.files[0];

        if (file && file.type.startsWith('image/')) { // Kiểm tra xem file có phải là ảnh không
          const reader = new FileReader();

          reader.onload = function(e) {
            previewImage.src = e.target.result; // Đặt ảnh vào thẻ img
            previewImage.style.display = 'block'; // Hiển thị thẻ img
          };

          reader.readAsDataURL(file); // Đọc nội dung của file ảnh
        } else {
          previewImage.style.display = 'none'; // Ẩn thẻ img nếu không phải là ảnh
        }
      });
    });
  </script>
</body>

</html>