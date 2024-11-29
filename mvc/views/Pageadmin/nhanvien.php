<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge" charset="UTF-8" />
  <title>Nhân viên</title>
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

  <!-- End Logo Header -->



  <div class="container">
    <div class="page-inner">

      <div class="page-header">
        <h3 class="fw-bold mb-3">Thông tin nhân viên</h3>
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
            <a href="#">Nhân viên</a>
          </li>
          <li class="separator">
            <i class="icon-arrow-right"></i>
          </li>
          <li class="nav-item">
            <a href="#">Thông tin nhân viên</a>
          </li>
        </ul>



      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <div class="d-flex align-items-center">
                <h4 class="card-title">Danh sách nhân viên</h4>
                <button class="btn btn-primary  ms-auto" data-bs-toggle="modal" data-bs-target="#addRowModal">
                  <i class="fa fa-plus"></i>
                  Thêm nhân viên
                </button>
                <!-- modal thêm nhân viên mới -->
                <div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header border-0">
                        <h5 class="modal-title">
                          <span class="fw-mediumbold"> Nhân viên mới</span>

                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <p class="small">
                          Tạo một nhân viên mới bằng cách sử dụng biểu mẫu này, đảm bảo bạn
                          điền đầy đủ thông tin
                        </p>
                        <form action="/dacs2/Admin/themNV" method="POST">
                          <div class="row">
                            <div class="col-sm-12">
                              <div class="form-group form-group-default">
                                <label>Tên</label>
                                <input id="addName" name="addName" type="text" class="form-control" placeholder="Lương Thịnh" />
                              </div>
                              <div class="form-group form-group-default">
                                <label>Địa chỉ</label>
                                <input id="addDiachi" name="addDiachi" type="text" class="form-control"
                                  placeholder="123 Đường gì đó, Quận gì đó, TP gì đó" />
                              </div>
                            </div>
                            <div class="col-md-6 pe-0">
                              <div class="form-group form-group-default">
                                <label>Giới tính</label>
                                <select id="addGender" name="addGender" class="form-control">
                                  <option value="Nam" selected>Nam</option>
                                  <option value="Nữ">Nữ</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-md-6 pe-0">
                              <div class="form-group form-group-default">
                                <label>Gmail</label>
                                <input id="addGmail" name="addGmail" type="text" class="form-control"
                                  placeholder="lht@gmail.com" />
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group form-group-default">
                                <label>Số điện thoại</label>
                                <input id="addSDT" name="addSDT" type="text" class="form-control" placeholder="0987654321" />
                              </div>
                            </div>
                            <div class="col-md-6 pe-0">
                              <div class="form-group form-group-default">
                                <label>Chức vụ</label>
                                <select id="addPosition" name="addPosition" class="form-control">
                                  <option value="Nhân Viên" selected>Nhân viên</option>
                                  <option value="Quản lý">Quản lý</option>
                                  <option value="baove">Bảo vệ</option>

                                </select>
                              </div>
                            </div>

                            <div class="col-md-6 pe-0">
                              <div class="form-group form-group-default">
                                <label>Mức lương</label>
                                <input id="addSalary" name="addSalary" type="text" class="form-control" placeholder="8.000.000đ" />
                              </div>
                            </div>

                          </div>

                      </div>
                      <div class="modal-footer border-0">
                        <button type="submit" name="themnv" class="btn btn-primary">
                          Thêm
                        </button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">
                          Hủy
                        </button>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="card-body">
              <div class="table-responsive">
                <table id="basic-datatables" class="display table table-striped table-hover">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Tên</th>
                      <th>Chức vụ</th>
                      <th>Địa chỉ</th>
                      <th>SĐT</th>
                      <th>Mức lương</th>
                      <th>Gmail</th>
                      <th>Giới tính</th>

                    </tr>
                  </thead>

                  <tbody>
                    <?php while ($dong = mysqli_fetch_array($data['AllNV'])) { ?>
                      <tr>
                        <td><?php echo $dong['ID'] ?></td>
                        <td><?php echo $dong['TenNV'] ?></td>
                        <td><?php echo $dong['Chucvu'] ?></td>
                        <td><?php echo $dong['Diachi'] ?></td>
                        <td><?php echo $dong['SDT'] ?></td>
                        <td><?php echo $dong['Luong'] ?></td>
                        <td><?php echo $dong['Gmail'] ?></td>
                        <td><?php echo $dong['Gioitinh'] ?></td>
                        <td>
                          <!-- nút xem chi tiết -->
                          <div class="btn-group dropdown">
                            <button class="btn btn-black  btn-xs dropdown-toggle" type="button"
                              data-bs-toggle="dropdown" aria-expanded="false">
                              Xem thêm
                            </button>
                            <ul class="dropdown-menu" role="menu">
                              <li>
                                <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                  data-bs-target="#thongtinkhachhang"
                                  data-id="<?php echo $dong['ID'] ?>"
                                  data-name="<?php echo $dong['TenNV'] ?>"
                                  data-diachi="<?php echo $dong['Diachi'] ?>"
                                  data-gmail="<?php echo $dong['Gmail'] ?>"
                                  data-sdt="<?php echo $dong['SDT'] ?>"
                                  data-gioitinh="<?php echo $dong['Gioitinh'] ?>"
                                  data-luong="<?php echo $dong['Luong'] ?>"
                                  data-chucvu="<?php echo $dong['Chucvu'] ?>">

                                  Xem chi tiết
                                </a>

                                <a class="dropdown-item delete-nv" data-id="<?php echo $dong['ID'] ?>">Xóa</a>
                              </li>
                            </ul>
                            <!-- Modal thông tin khách hàng -->
                            <div class="modal fade" id="thongtinkhachhang" tabindex="-1"
                              aria-labelledby="thongtinkhachhang" aria-hidden="true">
                              <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="tieuDeTabModal"><span
                                        class="text-muted fw-light">Thông tin Nhân viên</span> </h5>
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
                                            <!-- <div class="d-flex align-items-start align-items-sm-center gap-4">
                                            <img src="/dacs2/public/assets/img/avatars/1.png" alt="anh-dai-dien"
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
                                          </div> -->
                                            <form action="/dacs2/Admin/updateNV" id="formCaiDatTaiKhoan" class="needs-validation" novalidate
                                              method="POST">
                                              <div class="row g-3">
                                                <input type="hidden" id="Id" name="Id">
                                                <div class="mb-3 col-md-6">
                                                  <label for="ten" class="form-label">Tên</label>
                                                  <input class="form-control" type="text" id="ten" name="ten"
                                                    required />

                                                </div>

                                                <div class="mb-3 col-md-6">
                                                  <label for="email" class="form-label">E-mail</label>
                                                  <input class="form-control" type="email" id="email" name="email"
                                                    placeholder="lht@vku.udn.vn"
                                                    required />

                                                </div>
                                                <div class="mb-3 col-md-6">
                                                  <label for="gioiTinh" class="form-label">Giới tính</label>
                                                  <select id="gioiTinh" name="gioiTinh" class="form-select" required>

                                                    <option value="Nam">Nam</option>
                                                    <option value="Nữ">Nữ</option>
                                                  </select>

                                                </div>

                                                <div class="mb-3 col-md-6">
                                                  <label>Chức vụ</label>
                                                  <select id="chucVu" name="chucVu" class="form-control">
                                                    <option value="Nhân Viên" selected>Nhân viên</option>
                                                    <option value="Quản lý">Quản lý</option>
                                                    <option value="Bảo vệ">Bảo vệ</option>

                                                  </select>
                                                </div>

                                                <div class="mb-3 col-md-6">
                                                  <label class="form-label" for="soDienThoai">Số Điện thoại</label>
                                                  <div class="input-group has-validation">
                                                    <span class="input-group-text">VN (+84)</span>
                                                    <input type="text" id="soDienThoai" name="soDienThoai"
                                                      class="form-control" placeholder="987654321" required />

                                                  </div>
                                                </div>
                                                <div class="mb-3 col-md-6">
                                                  <label for="diaChi" class="form-label">Địa chỉ</label>
                                                  <input type="text" class="form-control" id="diaChi" name="diaChi"
                                                    placeholder="123 Quang Trung, Nguyễn Huệ, Huế" required />

                                                </div>


                                                <div class="mb-3 col-md-6">
                                                  <label for="soThich" class="form-label">Mức lương</label>
                                                  <input type="text" class="form-control" id="luong" name="luong"
                                                    placeholder="8.000.000đ" maxlength="100" required />


                                                </div>
                                              </div>
                                              <div class="mt-2">
                                                <button type="submit" name="updatenv" class="btn btn-primary me-2">Lưu thay
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
                                                <button type="submit" name="updatePW" class="btn btn-success me-2">Lưu thay
                                                  đổi</button>
                                              </div>
                                            </form>
                                          </div>
                                        </div>

                                        <!-- Phần Xóa Tài Khoản -->

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

  </div>
  <!--   Core JS Files   -->
  <script src="/dacs2/public/assets/js/core/jquery-3.7.1.min.js"></script>
  <script src="/dacs2/public/assets/js/core/popper.min.js"></script>
  <script src="/dacs2/public/assets/js/core/bootstrap.min.js"></script>
  <script src="/dacs2/public/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
  <script src="/dacs2/public/assets/js/plugin/datatables/datatables.min.js"></script>
  <script src="/dacs2/public/assets/js/kaiadmin.min.js"></script>
  <script>
    $(document).ready(function() {
      $("#basic-datatables").DataTable({});

      $("#multi-filter-select").DataTable({
        pageLength: 5,
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
    $(document).on('click', 'a[data-bs-toggle="modal"]', function() {
      const id = $(this).data('id');
      const name = $(this).data('name');
      const diachi = $(this).data('diachi');
      const gmail = $(this).data('gmail');
      const sdt = $(this).data('sdt');
      const gioitinh = $(this).data('gioitinh');
      const luong = $(this).data('luong');
      const chucvu = $(this).data('chucvu');
      $('#Id').val(id);
      $('#ten').val(name);
      $('#email').val(gmail);
      $('#gioiTinh').val(gioitinh);
      $('#soDienThoai').val(sdt);
      $('#diaChi').val(diachi);
      $('#luong').val(luong);
      $('#chucVu').val(chucvu);

    });
    $(document).ready(function() {
      $(document).on('click', '.delete-nv', function(e) {
        e.preventDefault();
        const idnv = $(this).data('id');
        if (confirm('Bạn có chắc chắn muốn xóa nhân viên này?')) {
          $.ajax({
            url: '/dacs2/Admin/deleteNV',
            type: 'POST',
            data: {
              id: idnv
            },
            success: function(response) {

              alert('Nhân viên đã được xóa thành công!');
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
  </script>
</body>

</html>