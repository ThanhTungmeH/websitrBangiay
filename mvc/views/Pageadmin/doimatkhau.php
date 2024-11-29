<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" charset="UTF-8"/>
    <title>Trang chủ</title>
    <meta
      content="width=device-width, initial-scale=1.0, shrink-to-fit=no"
      name="viewport"
    />
    <link
      rel="icon"
      href="/dacs2/public/assets/img/kaiadmin/favicon.ico"
      type="image/x-icon"
    />
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
    <link rel="stylesheet" href="/dacs2/public/assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/dacs2/public/assets/css/plugins.min.css" />
    <link rel="stylesheet" href="/dacs2/public/assets/css/kaiadmin.min.css" />
  </head>
  <body>
    <div class="wrapper">
      <!-- Sidebar -->
      <div class="sidebar sidebar-style-2" data-background-color="dark">
        <div class="sidebar-logo">
          <!-- Logo Header -->
          <div class="logo-header" data-background-color="dark">
            <a href="index.html" class="logo">
              <img
                src="/dacs2/public/assets/img/kaiadmin/logo_light.svg"
                alt="navbar brand"
                class="navbar-brand"
                height="20"
              />
            </a>
            <div class="nav-toggle">
              <button class="btn btn-toggle toggle-sidebar">
                <i class="gg-menu-right"></i>
              </button>
              <button class="btn btn-toggle sidenav-toggler">
                <i class="gg-menu-left"></i>
              </button>
            </div>
            <button class="topbar-toggler more">
              <i class="gg-more-vertical-alt"></i>
            </button>
          </div>
          <!-- End Logo Header -->
        </div>
        <div class="sidebar-wrapper scrollbar scrollbar-inner">
          <div class="sidebar-content">
            <ul class="nav nav-secondary">
              <li class="nav-item">
                <a href="../index.html">
                  <i class="fas fa-home"></i>
                  <p>Trang chủ</p>
                </a>
              </li>
              <li class="nav-section">
                <span class="sidebar-mini-icon">
                  <i class="fa fa-ellipsis-h"></i>
                </span>
                <h4 class="text-section">Quản lý</h4>
              </li>
            
              <li class="nav-item  submenu">
                <a data-bs-toggle="collapse" href="#sidebarLayouts">
                  <i class="
                  fas fa-shopping-bag"></i>
                  <p>Đơn hàng</p>
                  <span class="caret"></span>
                </a>
                <div class="collapse " id="sidebarLayouts">
                  <ul class="nav nav-collapse">
                    <li class="">
                      <a href="donhang.html">
                        <span class="sub-item">Lịch sử đơn hàng</span>
                      </a>
                    </li>
                    <li>
                      <a href="">
                        <span class="sub-item">Bán hàng</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="nav-item">
                <a href="sanpham.html">
                  <i class="fas fa-desktop"></i>
                  <p>Sản phẩm</p>
                </a>
              </li>
  
              <li class="nav-item">
                <a href="nhanvien.html">
                  <i class="fas fa-address-book"></i>
                  <p>Nhân viên</p>
                </a>
              </li>
  
               <li class="nav-item">
                <a href="khachhang.html">
                  <i class="
                  fas fa-users"></i>
                  <p>Khách hàng</p>
                </a>
              </li>
  
  
              <li class="nav-item active">
                <a data-bs-toggle="collapse" href="#charts">
                  <i class="
                  fas fa-lock"></i>
                  <p>Bảo mật</p>
                  <span class="caret"></span>
                </a>
                <div class="collapse show" id="charts">
                  <ul class="nav nav-collapse  ">
                    <li class="active">
                      <a href="doimatkhau.html">
                        <span class="sub-item active ">Tài khoản của tôi</span>
                      </a>
                    </li>
                    <li>
                      <a href="thongtincanhan.html">
                        <span class="sub-item">Thông tin cá nhân</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
  
  
              <li class="nav-item">
                <a href="">
                  <i class="fas fa-desktop"></i>
                  <p>Chương trình khuyến mãi</p>
              
                </a>
              </li>
              <li class="nav-item">
                <a href="">
                  <i class="fas fa-sign-out-alt"></i>
                  <p>Đăng xuất</p>
                </a>
              </li>
           
            </ul>
          </div>
        </div>
      </div>
      <!-- End Sidebar -->
  
      <div class="main-panel">
        <div class="main-header">
          <div class="main-header-logo">
            <!-- Logo Header -->
            <div class="logo-header" data-background-color="dark">
              <a href="index.html" class="logo">
                <img
                  src="assets/img/kaiadmin/logo_light.svg"
                  alt="navbar brand"
                  class="navbar-brand"
                  height="20"
                />
              </a>
              <div class="nav-toggle">
                <button class="btn btn-toggle toggle-sidebar">
                  <i class="gg-menu-right"></i>
                </button>
                <button class="btn btn-toggle sidenav-toggler">
                  <i class="gg-menu-left"></i>
                </button>
              </div>
              <button class="topbar-toggler more">
                <i class="gg-more-vertical-alt"></i>
              </button>
            </div>
            <!-- End Logo Header -->
          </div>
          <!-- Navbar Header -->
          <nav
            class="navbar navbar-header navbar-header-transparent navbar-expand-lg border-bottom"
          >
            <div class="container-fluid">
              <nav
                class="navbar navbar-header-left navbar-expand-lg navbar-form nav-search p-0 d-none d-lg-flex"
              >
                <div class="input-group">
                  <div class="input-group-prepend">
                    <button type="submit" class="btn btn-search pe-1">
                      <i class="fa fa-search search-icon"></i>
                    </button>
                  </div>
                  <input
                    type="text"
                    placeholder="Tìm kiếm ..."
                    class="form-control"
                  />
                </div>
              </nav>
  
              <ul class="navbar-nav topbar-nav ms-md-auto align-items-center">
                <li
                  class="nav-item topbar-icon dropdown hidden-caret d-flex d-lg-none"
                >
                  <a
                    class="nav-link dropdown-toggle"
                    data-bs-toggle="dropdown"
                    href="#"
                    role="button"
                    aria-expanded="false"
                    aria-haspopup="true"
                  >
                    <i class="fa fa-search"></i>
                  </a>
                  <ul class="dropdown-menu dropdown-search animated fadeIn">
                    <form class="navbar-left navbar-form nav-search">
                      <div class="input-group">
                        <input
                          type="text"
                          placeholder="Tìm kiếm"
                          class="form-control"
                        />
                      </div>
                    </form>
                  </ul>
                </li>
               
            
  
                <li class="nav-item topbar-user dropdown hidden-caret">
                  <a
                    class="dropdown-toggle profile-pic"
                    data-bs-toggle="dropdown"
                    href="#"
                    aria-expanded="false"
                  >
                    <div class="avatar-sm">
                      <img
                        src="/dacs2/public/assets/img/profile.jpg"
                        alt="..."
                        class="avatar-img rounded-circle"
                      />
                    </div>
                    <span class="profile-username">
                      <span class="op-7">Xin chào,</span>
                      <span class="fw-bold">Thịnh</span>
                    </span>
                  </a>
                  <ul class="dropdown-menu dropdown-user animated fadeIn">
                    <div class="dropdown-user-scroll scrollbar-outer">
                      <li>
                        <div class="user-box">
                          <div class="avatar-lg">
                            <img
                              src="/dacs2/public/assets/img/profile.jpg"
                              alt="image profile"
                              class="avatar-img rounded"
                            />
                          </div>
                          <div class="u-text">
                            <h4>LUONG THINH</h4>
                            <p class="text-muted">lht@gmail.com</p>
                          
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Thông tin cá nhân</a>
                        <a class="dropdown-item" href="#">Đổi mật khẩu</a>
                        <a class="dropdown-item" href="#">Đăng xuất</a>
                      </li>
                    </div>
                  </ul>
                </li>
              </ul>
            </div>
          </nav>
          <!-- End Navbar -->
        </div>



        <div class="container">
          <div class="page-inner">
            <div class="page-header">
              <h3 class="fw-bold mb-3">Đổi mật khẩu</h3>
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
                    <h5 class="card-header">Đổi mật khẩu</h5>
                    <div class="card-body">
                      <form id="formDoiMatKhau" class="needs-validation" novalidate method="POST" onsubmit="return false">
                        <div class="row g-3">
                          <!-- Mật khẩu cũ -->
                          <div class="mb-3 col-md-6">
                            <label for="matKhauCu" class="form-label">Mật khẩu cũ</label>
                            <input class="form-control" type="password" id="matKhauCu" name="matKhauCu" required />
                            <div class="valid-feedback">Trông tốt!</div>
                            <div class="invalid-feedback">Vui lòng nhập mật khẩu cũ.</div>
                          </div>
        
                          <!-- Mật khẩu mới -->
                          <div class="mb-3 col-md-6">
                            <label for="matKhauMoi" class="form-label">Mật khẩu mới</label>
                            <input class="form-control" type="password" name="matKhauMoi" id="matKhauMoi" required />
                            <div class="valid-feedback">Trông tốt!</div>
                            <div class="invalid-feedback">Vui lòng nhập mật khẩu mới.</div>
                          </div>
        
                          <!-- Mã xác nhận -->
                          <div class="mb-3 col-md-6 d-flex align-items-end">
                            <div class="flex-grow-1 me-2">
                              <label for="maXacNhan" class="form-label">Mã xác nhận</label>
                              <input class="form-control" type="text" id="maXacNhan" name="maXacNhan" placeholder="Nhập mã xác nhận" required />
                              <div class="valid-feedback">Trông tốt!</div>
                              <div class="invalid-feedback">Vui lòng nhập mã xác nhận.</div>
                            </div>
                            <button type="button" class="btn btn-primary">Gửi mã xác nhận</button>
                          </div>
                        </div>
        
                        <!-- Nút Lưu thay đổi -->
                        <div class="mt-2">
                          <button type="submit" class="btn btn-success me-2">Lưu thay đổi</button>
                        </div>
                      </form>
                    </div>
                  </div>
        
                  <!-- Xóa tài khoản -->
                  <div class="card">
                    <h5 class="card-header">Xóa tài khoản</h5>
                    <div class="card-body">
                      <div class="mb-3 col-12 mb-0">
                        <div class="alert alert-warning">
                          <h6 class="alert-heading fw-bold mb-1">Bạn có chắc chắn muốn xóa tài khoản không?</h6>
                          <p class="mb-0">Khi bạn xóa tài khoản, hành động này không thể khôi phục. Hãy chắc chắn trước khi thực hiện.</p>
                        </div>
                      </div>
                      <form id="formAccountDeactivation" onsubmit="return false">
                        <div class="form-check mb-3">
                          <input class="form-check-input" type="checkbox" name="accountActivation" id="accountActivation" required />
                          <label class="form-check-label" for="accountActivation">Tôi xác nhận việc hủy kích hoạt tài khoản</label>
                          <div class="invalid-feedback">Vui lòng xác nhận hủy kích hoạt tài khoản.</div>
                        </div>
                        <button type="submit" class="btn btn-danger deactivate-account">Xác nhận</button>
                      </form>
                    </div>
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
    <script src="/dacs2/public/assets/js/plugin/jsvectormap/jsvectormap.min.js"></script>
    <script src="/dacs2/public/assets/js/plugin/jsvectormap/world.js"></script>
    <script src="/dacs2/public/assets/js/plugin/sweetalert/sweetalert.min.js"></script>
    <script src="/dacs2/public/assets/js/kaiadmin.min.js"></script>
  </body>
</html>
