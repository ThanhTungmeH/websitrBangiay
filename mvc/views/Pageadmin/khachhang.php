<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge" charset="UTF-8" />
  <title>Khách hàng</title>
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
        <h3 class="fw-bold mb-3">Danh sách khách hàng</h3>
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
            <a href="#">Khách hàng</a>
          </li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12 ">
          <div class="card">
            <div class="card-header">

              <div class="d-flex align-items-center">

                <h4 class="card-title">Danh sách khách hàng</h4>

              </div>
            </div><br>
            <div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header border-0">
                    <h5 class="modal-title">
                      <span class="fw-mediumbold"> Khách hàng</span>
                      <span class="fw-light"> Mới </span>
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <p class="small">
                      Tạo một kh hàng mới bằng cách sử dụng biểu mẫu này, đảm bảo bạn
                      điền đầy đủ thông tin
                    </p>
                    <form id="formThemKhachHang" class="needs-validation" novalidate method="POST"
                      onsubmit="return false">
                      <div class="row g-3">
                        <!-- Tên -->
                        <div class="mb-3 col-md-12">
                          <label for="addName" class="form-label">Tên</label>
                          <input id="addName" type="text" class="form-control" placeholder="Lương Thịnh"
                            name="name" required />
                          <div class="valid-feedback">Trông tốt!</div>
                          <div class="invalid-feedback">Vui lòng nhập tên khách hàng.</div>
                        </div>

                        <!-- Địa chỉ -->
                        <div class="mb-3 col-md-12">
                          <label for="addAddress" class="form-label">Địa chỉ</label>
                          <input id="addAddress" type="text" class="form-control"
                            placeholder="123 Đường gì đó, Quận gì đó, TP gì đó" name="address" required />
                          <div class="valid-feedback">Trông tốt!</div>
                          <div class="invalid-feedback">Vui lòng nhập địa chỉ.</div>
                        </div>

                        <!-- Giới tính -->
                        <div class="mb-3 col-md-6">
                          <label for="addGender" class="form-label">Giới tính</label>
                          <select id="addGender" class="form-select" name="gender" required>
                            <option value="" selected disabled>Chọn giới tính</option>
                            <option value="nam">Nam</option>
                            <option value="nu">Nữ</option>
                          </select>
                          <div class="valid-feedback">Trông tốt!</div>
                          <div class="invalid-feedback">Vui lòng chọn giới tính.</div>
                        </div>

                        <!-- Ngày sinh -->
                        <div class="mb-3 col-md-6">
                          <label for="addBirthDate" class="form-label">Ngày sinh</label>
                          <input id="addBirthDate" type="date" class="form-control" name="birthDate" required />
                          <div class="valid-feedback">Trông tốt!</div>
                          <div class="invalid-feedback">Vui lòng chọn ngày sinh.</div>
                        </div>

                        <!-- Gmail -->
                        <div class="mb-3 col-md-6">
                          <label for="addEmail" class="form-label">Gmail</label>
                          <input id="addEmail" type="email" class="form-control" placeholder="lht@gmail.com"
                            name="email" required />
                          <div class="valid-feedback">Trông tốt!</div>
                          <div class="invalid-feedback">Vui lòng nhập email hợp lệ.</div>
                        </div>

                        <!-- Số điện thoại -->
                        <div class="mb-3 col-md-6">
                          <label for="addPhone" class="form-label">Số điện thoại</label>
                          <input id="addPhone" type="text" class="form-control" placeholder="0987654321"
                            name="phone" required />
                          <div class="valid-feedback">Trông tốt!</div>
                          <div class="invalid-feedback">Vui lòng nhập số điện thoại hợp lệ.</div>
                        </div>
                      </div>

                      <!-- Nút Thêm Khách Hàng và Hủy -->
                      <div class="modal-footer">
                        <button type="submit" id="addRowButton" class="btn btn-primary me-2">Thêm</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Hủy</button>
                      </div>
                    </form>


                  </div>
                </div>
              </div>
            </div>
            <div class="table-responsive ">
              <table id="basic-datatables" class="display table table-striped table-hover ">
                <thead>
                  <tr>
                    <th>Tên</th>
                    <th>Giới tính</th>
                    <th>Gmail</th>
                    <th>Địa chỉ</th>
                    <th>Số điện thoại</th>
                    <th>Ngày sinh</th>
                    <th></th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>Tên</th>
                    <th>Giới tính</th>
                    <th>Gmail</th>
                    <th>Địa chỉ</th>
                    <th>Số điện thoại</th>
                    <th>Ngày sinh</th>
                    <th></th>

                  </tr>
                </tfoot>
                <tbody>
                  <tr>
                    <td>Tiger Nixon</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                    <td>61</td>
                    <td>2011/04/25</td>
                    <td>2011/04/25</td>

                    <td>
                      <!-- nút xem chi tiết -->
                      <div class="btn-group dropdown">
                        <button class="btn btn-black  btn-xs dropdown-toggle" type="button"
                          data-bs-toggle="dropdown" aria-expanded="false">
                          Xem thêm
                        </button>
                        <ul class="dropdown-menu" role="menu" style="">
                          <li>
                            <a class="dropdown-item" href="#" data-bs-toggle="modal"
                              data-bs-target="#thongtinkhachhang">
                              Xem chi tiết
                            </a>

                            <a class="dropdown-item " href="#">Xóa</a>
                          </li>
                        </ul>
                        <!-- Modal thông tin khách hàng -->
                        <div class="modal fade" id="thongtinkhachhang" tabindex="-1"
                          aria-labelledby="thongtinkhachhang" aria-hidden="true">
                          <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="tieuDeTabModal"><span
                                    class="text-muted fw-light">Thông tin khách hàng</span> </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                  aria-label="Đóng"></button>
                              </div>
                              <div class="modal-body">
                                <div class="container-xxl flex-grow-1 container-p-y">
                                  <!-- Thông tin cá nhân -->
                                  <div class="tab-pane fade show active" id="thong-tin" role="tabpanel"
                                    aria-labelledby="tab-thong-tin">
                                    <div class="card mb-4">
                                      <h5 class="card-header">Thông tin cá nhân</h5>
                                      <div class="card-body">
                                        <div class="d-flex align-items-start align-items-sm-center gap-4">
                                          <img src="../assets/img/avatars/1.png" alt="anh-dai-dien"
                                            class="d-block rounded" height="100" width="100" id="anhDaiDien" />
                                          <div class="button-wrapper">
                                            <label for="taiAnh" class="btn btn-primary me-2 mb-4" tabindex="0">
                                              <span class="d-none d-sm-block">Ảnh đại diện mới</span>
                                              <input type="file" id="taiAnh" class="account-file-input" hidden
                                                accept="image/png, image/jpeg" />
                                            </label>
                                            <button type="button"
                                              class="btn btn-outline-secondary dat-lai-anh mb-4">
                                              <span class="d-none d-sm-block">Đặt lại</span>
                                            </button>
                                            <p class="text-muted mb-0">Định dạng JPG, GIF hoặc PNG. Kích thước tối
                                              đa 800K</p>
                                          </div>
                                        </div>
                                        <form id="formCaiDatTaiKhoan" class="needs-validation" novalidate
                                          method="POST" onsubmit="return false">
                                          <div class="row g-3">
                                            <div class="mb-3 col-md-6">
                                              <label for="ten" class="form-label">Tên</label>
                                              <input class="form-control" type="text" id="ten" name="ten"
                                                value="Luong Thinh" required />
                                              <div class="valid-feedback">Trông tốt!</div>
                                              <div class="invalid-feedback">Vui lòng nhập tên.</div>
                                            </div>
                                            <div class="mb-3 col-md-6">
                                              <label for="tenDangNhap" class="form-label">Username</label>
                                              <input class="form-control" type="text" name="tenDangNhap"
                                                id="tenDangNhap" value="TanhuD" required />
                                              <div class="valid-feedback">Trông tốt!</div>
                                              <div class="invalid-feedback">Vui lòng nhập tên đăng nhập.</div>
                                            </div>
                                            <div class="mb-3 col-md-6">
                                              <label for="email" class="form-label">E-mail</label>
                                              <input class="form-control" type="email" id="email" name="email"
                                                value="john.doe@example.com" placeholder="lht@vku.udn.vn"
                                                required />
                                              <div class="valid-feedback">Trông tốt!</div>
                                              <div class="invalid-feedback">Vui lòng nhập email hợp lệ.</div>
                                            </div>
                                            <div class="mb-3 col-md-6">
                                              <label for="gioiTinh" class="form-label">Giới tính</label>
                                              <select id="gioiTinh" name="gioiTinh" class="form-select" required>
                                                <option selected disabled value="">Chọn...</option>
                                                <option value="male">Nam</option>
                                                <option value="female">Nữ</option>
                                              </select>
                                              <div class="valid-feedback">Trông tốt!</div>
                                              <div class="invalid-feedback">Vui lòng chọn giới tính.</div>
                                            </div>
                                            <div class="mb-3 col-md-6">
                                              <label class="form-label" for="soDienThoai">Số Điện thoại</label>
                                              <div class="input-group has-validation">
                                                <span class="input-group-text">VN (+84)</span>
                                                <input type="text" id="soDienThoai" name="soDienThoai"
                                                  class="form-control" placeholder="987654321" required />
                                                <div class="invalid-feedback">Vui lòng nhập số điện thoại.</div>
                                              </div>
                                            </div>
                                            <div class="mb-3 col-md-6">
                                              <label for="diaChi" class="form-label">Địa chỉ</label>
                                              <input type="text" class="form-control" id="diaChi" name="diaChi"
                                                placeholder="123 Quang Trung, Nguyễn Huệ, Huế" required />
                                              <div class="valid-feedback">Trông tốt!</div>
                                              <div class="invalid-feedback">Vui lòng nhập địa chỉ.</div>
                                            </div>
                                            <div class="mb-3 col-md-6">
                                              <label for="ngaySinh" class="form-label">Ngày sinh</label>
                                              <input class="form-control" type="date" id="ngaySinh"
                                                name="ngaySinh" required />
                                              <div class="valid-feedback">Trông tốt!</div>
                                              <div class="invalid-feedback">Vui lòng chọn ngày sinh.</div>
                                            </div>
                                            <div class="mb-3 col-md-6">
                                              <label for="soThich" class="form-label">Sở thích</label>
                                              <input type="text" class="form-control" id="soThich" name="soThich"
                                                placeholder="Giày" maxlength="100" required />
                                              <div class="valid-feedback">Trông tốt!</div>
                                              <div class="invalid-feedback">Vui lòng nhập sở thích.</div>
                                            </div>
                                          </div>
                                          <div class="mt-2">
                                            <button type="submit" class="btn btn-primary me-2">Lưu thay
                                              đổi</button>
                                          </div>
                                        </form>
                                      </div>
                                    </div>

                                    <!-- Đổi Mật Khẩu -->

                                    <div class="card mb-4">
                                      <h5 class="card-header">Đổi mật khẩu</h5>
                                      <div class="card-body">
                                        <form id="formDoiMatKhau" class="needs-validation" novalidate
                                          method="POST" onsubmit="return false">
                                          <div class="row g-3">
                                            <div class="mb-3 col-md-6">
                                              <label for="matKhauCu" class="form-label">Mật khẩu cũ</label>
                                              <input class="form-control" type="password" id="matKhauCu"
                                                name="matKhauCu" required />
                                              <div class="invalid-feedback">Vui lòng nhập mật khẩu cũ.</div>
                                            </div>
                                            <div class="mb-3 col-md-6">
                                              <label for="matKhauMoi" class="form-label">Mật khẩu mới</label>
                                              <input class="form-control" type="password" name="matKhauMoi"
                                                id="matKhauMoi" required />
                                              <div class="invalid-feedback">Vui lòng nhập mật khẩu mới.</div>
                                            </div>

                                          </div>
                                          <div class="mt-2">
                                            <button type="submit" class="btn btn-success me-2">Lưu thay
                                              đổi</button>
                                          </div>
                                        </form>
                                      </div>
                                    </div>

                                    <!-- Phần Xóa Tài Khoản -->
                                    <div class="card">
                                      <h5 class="card-header">Xóa Tài Khoản</h5>
                                      <div class="card-body">
                                        <div class="mb-3 col-12 mb-0">
                                          <div class="alert alert-warning">
                                            <h6 class="alert-heading fw-bold mb-1">Bạn có chắc chắn muốn xóa tài
                                              khoản không?</h6>
                                            <p class="mb-0">Sau khi xóa tài khoản, bạn sẽ không thể phục hồi. Hãy
                                              chắc chắn trước khi tiếp tục.</p>
                                          </div>
                                        </div>
                                        <form id="formXoaTaiKhoan" class="needs-validation" novalidate
                                          onsubmit="return false">
                                          <div class="form-check mb-3">
                                            <input class="form-check-input" type="checkbox" name="xacNhanXoa"
                                              id="xacNhanXoa" required />
                                            <label class="form-check-label" for="xacNhanXoa">Tôi xác nhận muốn xóa
                                              tài khoản</label>
                                            <div class="invalid-feedback">Bạn phải đồng ý trước khi xác nhận.
                                            </div>
                                          </div>
                                          <button type="submit" class="btn btn-danger xoa-tai-khoan">Xóa tài
                                            khoản</button>
                                        </form>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary"
                                  data-bs-dismiss="modal">Đóng</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                    </td>
                  </tr>


                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>







      <!--   Core JS Files   -->
      <script src="/dacs2/public/assets/js/core/jquery-3.7.1.min.js"></script>
      <script src="/dacs2/public/assets/js/core/popper.min.js"></script>
      <script src="/dacs2/public/assets/js/core/bootstrap.min.js"></script>
      <script src="/dacs2/public/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
      <script src="/dacs2/public/assets/js/plugin/datatables/datatables.min.js"></script>
      <script src="/dacs2/public/assets/js/kaiadmin.min.js"></script>


      <!-- Cái này là của modal xem chi tiết khi submit nó kiểm tra đúng hay chưa để hiện mấy ô đỏ xanh ấy -->
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
</body>

</html>