<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Thông tin cá nhân</title>
    <meta
      content="width=device-width, initial-scale=1.0, shrink-to-fit=no"
      name="viewport" charset="UTF-8"
    />
    <link
      rel="icon"
      href="/dacs2/public/assets/img/kaiadmin/favicon.ico"
      type="image/x-icon"
    />

    <!-- Fonts and icons -->
    <script src="/dacs2/public/assets/js/plugin/webfont/webfont.min.js"></script>
    <script>
      WebFont.load({
        google: { families: ["Public Sans:300,400,500,600,700"] },
        custom: {
          families: [
            "Font Awesome 5 Solid",
            "Font Awesome 5 Regular",
            "Font Awesome 5 Brands",
            "simple-line-icons",
          ],
          urls: ["/dacs2/public/assets/css/fonts.min.css"],
        },
        active: function () {
          sessionStorage.fonts = true;
        },
      });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="/dacs2/public/assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/dacs2/public/assets/css/plugins.min.css" />
    <link rel="stylesheet" href="/dacs2/public/assets/css/kaiadmin.min.css" />

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="/dacs2/public/assets/css/demo.css" />
  </head>
  <body>
   
        <!-- End Logo Header -->
      

            
         
      <div class="container">
        <div class="page-inner">
          <div class="page-header">
            <h3 class="fw-bold mb-3">Thông tin cá nhân</h3>
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
                <a href="#">Bảo mật</a>
              </li>
            </ul>
          </div>
          <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row">
              <div class="col-md-12">
                <div class="card mb-4">
                  <h5 class="card-header">Thông tin cá nhân</h5>
                  <!-- Account -->
                  <div class="card-body">
                    <div class="d-flex align-items-start align-items-sm-center gap-4">
                      <img
                        src="/dacs2/public/assets/img/avatars/1.png"
                        alt="user-avatar"
                        class="d-block rounded"
                        height="100"
                        width="100"
                        id="uploadedAvatar" />
                      <div class="button-wrapper">
                        <label for="upload" class="btn btn-black me-2 mb-4" tabindex="0">
                          <span class="d-none d-sm-block">Thêm ảnh mới</span>
                          <i class="bx bx-upload d-block d-sm-none"></i>
                          <input
                            type="file"
                            id="upload"
                            class="account-file-input"
                            hidden
                            accept="image/png, image/jpeg" />
                        </label>
                        <button type="button" class="btn btn-outline-secondary account-image-reset mb-4">
                          <i class="bx bx-reset d-block d-sm-none"></i>
                          <span class="d-none d-sm-block">Đặt lại</span>
                        </button>

                        <p class="text-muted mb-0">Cho phép JPG, GIF hoặc PNG. kích thước tối đa là 800K</p>
                      </div>
                    </div>
                  </div>
                  <hr class="my-0" />
                  <div class="card-body">
                    <form id="formAccountSettings" method="POST" onsubmit="return false" class="needs-validation" novalidate>
                      <div class="row">
                        <!-- Họ và Tên -->
                        <div class="mb-3 col-md-6">
                          <label for="firstName" class="form-label">Họ và Tên</label>
                          <input
                            class="form-control"
                            type="text"
                            id="firstName"
                            name="firstName"
                            value="Nguyễn Văn A"
                            autofocus
                            required />
                          <div class="invalid-feedback">Vui lòng nhập họ và tên.</div>
                        </div>
                    
                        <!-- Username -->
                        <div class="mb-3 col-md-6">
                          <label for="lastName" class="form-label">Username</label>
                          <input
                            class="form-control"
                            type="text"
                            name="username"
                            id="lastName"
                            value="TanhuD"
                            required />
                          <div class="invalid-feedback">Vui lòng nhập username.</div>
                        </div>
                    
                        <!-- Giới tính -->
                        <div class="mb-3 col-md-6">
                          <label for="language" class="form-label">Giới tính</label>
                          <select id="language" class="select2 form-select" required>
                            <option value="">Chọn</option>
                            <option value="Nam">Nam</option>
                            <option value="Nữ">Nữ</option>
                          </select>
                          <div class="invalid-feedback">Vui lòng chọn giới tính.</div>
                        </div>
                    
                        <!-- Ngày sinh -->
                        <div class="mb-3 col-md-6">
                          <label for="organization" class="form-label">Ngày sinh</label>
                          <input
                            type="date"
                            class="form-control"
                            id="organization"
                            required />
                          <div class="invalid-feedback">Vui lòng chọn ngày sinh.</div>
                        </div>
                    
                        <!-- Số Diện thoại -->
                        <div class="mb-3 col-md-6">
                          <label class="form-label" for="phoneNumber">Số Diện thoại</label>
                          <div class="input-group input-group-merge">
                            <span class="input-group-text">VN (+84)</span>
                            <input
                              type="text"
                              id="phoneNumber"
                              name="phoneNumber"
                              class="form-control"
                              placeholder="987654321"
                              pattern="^\d{9,10}$"
                              required />
                          </div>
                          <div class="invalid-feedback">Vui lòng nhập số điện thoại hợp lệ.</div>
                        </div>
                    
                        <!-- Gmail -->
                        <div class="mb-3 col-md-6">
                          <label for="organization" class="form-label">Gmail</label>
                          <input
                            type="email"
                            class="form-control"
                            id="organization"
                            placeholder="example@gmail.com"
                            value="lht@gmail.com"
                            required />
                          <div class="invalid-feedback">Vui lòng nhập email hợp lệ.</div>
                        </div>
                    
                        <!-- Chức vụ -->
                        <div class="mb-3 col-md-6">
                          <label for="language" class="form-label">Chức vụ</label>
                          <select id="language" class="select2 form-select" required>
                            <option value="">Chọn chức vụ</option>
                            <option value="en">Chủ</option>
                            <option value="fr">Nhân viên</option>
                            <option value="de">Cũng nhân viên nhưng phèn hơn</option>
                          </select>
                          <div class="invalid-feedback">Vui lòng chọn chức vụ.</div>
                        </div>
                    
                        <!-- Địa chỉ -->
                        <div class="mb-3 col-md-6">
                          <label for="lastName" class="form-label">Địa chỉ</label>
                          <input
                            class="form-control"
                            type="text"
                            name="lastName"
                            id="lastName"
                            value="123 Đường gì đó, ở đâu đó"
                            required />
                          <div class="invalid-feedback">Vui lòng nhập địa chỉ.</div>
                        </div>
                      </div>
                    
                      <!-- Nút Lưu và Hủy -->
                      <div class="mt-2">
                        <button type="submit" class="btn btn-primary me-2">Lưu</button>
                        <button type="reset" class="btn btn-outline-secondary">Hủy</button>
                      </div>
                    </form>
                  </div>
                  <!-- /Account -->
                </div>
               
              </div>
            </div>
          </div>
        </div>
      </div>

      </div>





      <script>
        (function () {
          'use strict';
      
          // Hàm khởi tạo kiểm tra form
          function initializeFormValidation() {
            var forms = document.querySelectorAll('.needs-validation');
            Array.prototype.slice.call(forms).forEach(function (form) {
              form.addEventListener('submit', function (event) {
                if (!form.checkValidity()) {
                  event.preventDefault();
                  event.stopPropagation();
                }
                form.classList.add('was-validated');
              }, false);
            });
          }
      
          // Gọi hàm khi DOM được tải xong
          document.addEventListener('DOMContentLoaded', function () {
            initializeFormValidation();
          });
      
        })();
      </script>





<script src="/dacs2/public/assets/js/core/jquery-3.7.1.min.js"></script>
<script src="/dacs2/public/assets/js/core/popper.min.js"></script>
<script src="/dacs2/public/assets/js/core/bootstrap.min.js"></script>
<script src="/dacs2/public/assets/js/plugin/datatables/datatables.min.js"></script>
<script src="/dacs2/public/assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>
<script src="/dacs2/public/assets/js/plugin/sweetalert/sweetalert.min.js"></script>
<script src="/dacs2/public/assets/js/kaiadmin.min.js"></script>
  </body>
</html>
