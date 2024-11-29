<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge" charset="UTF-8"/>
  <title>Lịch sử đơn hàng</title>
  <meta content="width=device-width, initial-scale=1.0, shrink-to-fit=no" name="viewport" />
  <link rel="icon" href="/dacs2/public/assets/img/kaiadmin/favicon.ico" type="image/x-icon" />

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
</head>

<body>
  

      <div class="container">
        <div class="page-inner">

          <div class="page-header">
            <h3 class="fw-bold mb-3">Lịch sử đơn đặt hàng</h3>
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
                <a href="#">Đơn hàng</a>
              </li>
              <li class="separator">
                <i class="icon-arrow-right"></i>
              </li>
              <li class="nav-item">
                <a href="#">Lịch sử đơn hàng</a>
              </li>
            </ul>
          </div>

          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <div class="card-head-row card-tools-still-right">
                    <div class="card-title">Lịch sử đơn đặt hàng</div>
                    <div class="card-tools">
                      <div class="dropdown">
                        <button class="btn btn-icon btn-clean me-0" type="button" id="dropdownMenuButton"
                          data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fas fa-ellipsis-h"></i>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                          <a class="dropdown-item" href="#">In</a>
                          <a class="dropdown-item" href="#">Xuất</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-body p-0">
                  <div class="table-responsive">
                    <!-- Projects table -->
                    <table class="table align-items-center mb-0" id="transactionTable">
                      <thead class="thead-light">
                        <tr>
                          <th scope="col">Mã đơn hàng</th>
                          <th scope="col" class="text-end">Người mua</th>
                          <th scope="col" class="text-end">Ngày đặt</th>
                          <th scope="col" class="text-end">Tổng</th>
                          <th scope="col" class="text-end">Trạng thái</th>
                          <th scope="col" class="text-end"></th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">
                            <button class="btn btn-icon btn-round btn-success btn-sm me-2">
                              <i class="fa fa-check"></i>
                            </button>
                            Đơn hàng số #10231
                          </th>
                          <td class="text-end">luongthinh123</td>
                          <td class="text-end">20-12-2022</td>
                          <td class="text-end">123.456đ</td>
                          <td class="text-end">
                            <span class="badge badge-success">Hoàn thành</span>
                          </td>
                          <td>
                            <button type="button" class="btn btn-black btn-sm btn-border dropdown-toggle"
                              data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Xem thêm
                            </button>
                            <ul class="dropdown-menu" role="menu" style="">
                              <li>
                                <a class="dropdown-item text-center" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">Xem chi tiết</a>
                                <a class="dropdown-item text-center" href="#">Sửa</a>
                                <a class="dropdown-item text-center" href="#">Xóa</a>
                              </li>
                            </ul>

                            <!-- modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                              aria-hidden="true">
                              <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Chi tiết đơn hàng #10231</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                      aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">
                                    <div class="mb-4">
                                      <div class="row">
                                        <div class="col-md-6 mb-2">
                                          <strong>Tên người đặt:</strong> <span id="tenNguoiDat">Nguyễn Văn A</span>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                          <strong>ID User:</strong> <span id="idUser">123456</span>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                          <strong>Ngày đặt:</strong> <span id="ngayDat">18/11/2024</span>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                          <strong>Địa chỉ:</strong> <span id="diaChi">123 Đường ABC, TP HCM</span>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                          <strong>SĐT:</strong> <span id="sdt">0901234567</span>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                          <strong>Tổng:</strong> <span id="tong">500,000 VND</span>
                                        </div>
                                      </div>
                                    </div>
                                    <!-- Bảng trong Modal -->
                                    <table class="table align-items-center mb-0">
                                      <thead class="thead-black">
                                        <tr>
                                          <th scope="col">STT</th>
                                          <th scope="col">Hình</th>
                                          <th scope="col">Tên sản phẩm</th>
                                          <th scope="col">Số lượng</th>
                                          <th scope="col">Giá</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <tr>
                                          <td>1</td>
                                          <td><img src="https://via.placeholder.com/50" alt="Hình"
                                              class="img-thumbnail"></td>
                                          <td>Sản phẩm A</td>
                                          <td>10</td>
                                          <td>100,000 VND</td>
                                        </tr>
                                        <tr>
                                          <td>2</td>
                                          <td><img src="https://via.placeholder.com/50" alt="Hình"
                                              class="img-thumbnail"></td>
                                          <td>Sản phẩm B</td>
                                          <td>5</td>
                                          <td>200,000 VND</td>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                      data-bs-dismiss="modal">Đóng</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <!-- end modal -->
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">
                            <button class="btn btn-icon btn-round btn-warning btn-sm me-2">
                              <i class="fa fa-circle"></i>
                            </button>
                            Đơn hàng số #10233
                          </th>
                          <td class="text-end">luongthinh12345</td>
                          <td class="text-end">20-12-2022</td>
                          <td class="text-end">123.456đ</td>
                          <td class="text-end">
                            <span class="badge badge-warning">Chưa nhận hàng</span>
                          </td>
                          <td>
                            <button type="button" class="btn btn-black btn-sm btn-border dropdown-toggle"
                              data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Xem thêm
                            </button>
                            <ul class="dropdown-menu" role="menu" style="">
                              <li>
                                <a class="dropdown-item text-center" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">Xem chi tiết</a>
                                <a class="dropdown-item text-center" href="#">Sửa</a>
                                <a class="dropdown-item text-center" href="#">Xóa</a>
                              </li>
                            </ul>

                            <!-- modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                              aria-hidden="true">
                              <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Chi tiết đơn hàng #10231</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                      aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">
                                    <div class="mb-4">
                                      <div class="row">
                                        <div class="col-md-6 mb-2">
                                          <strong>Tên người đặt:</strong> <span id="tenNguoiDat">Nguyễn Văn A</span>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                          <strong>ID User:</strong> <span id="idUser">123456</span>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                          <strong>Ngày đặt:</strong> <span id="ngayDat">18/11/2024</span>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                          <strong>Địa chỉ:</strong> <span id="diaChi">123 Đường ABC, TP HCM</span>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                          <strong>SĐT:</strong> <span id="sdt">0901234567</span>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                          <strong>Tổng:</strong> <span id="tong">500,000 VND</span>
                                        </div>
                                      </div>
                                    </div>
                                    <!-- Bảng trong Modal -->
                                    <table class="table align-items-center mb-0">
                                      <thead class="thead-black">
                                        <tr>
                                          <th scope="col">STT</th>
                                          <th scope="col">Hình</th>
                                          <th scope="col">Tên sản phẩm</th>
                                          <th scope="col">Số lượng</th>
                                          <th scope="col">Giá</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <tr>
                                          <td>1</td>
                                          <td><img src="https://via.placeholder.com/50" alt="Hình"
                                              class="img-thumbnail"></td>
                                          <td>Sản phẩm A</td>
                                          <td>10</td>
                                          <td>100,000 VND</td>
                                        </tr>
                                        <tr>
                                          <td>2</td>
                                          <td><img src="https://via.placeholder.com/50" alt="Hình"
                                              class="img-thumbnail"></td>
                                          <td>Sản phẩm B</td>
                                          <td>5</td>
                                          <td>200,000 VND</td>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                      data-bs-dismiss="modal">Đóng</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <!-- end modal -->
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">
                            <button class="btn btn-icon btn-round btn-danger btn-sm me-2">
                              <i class="fa fa-times"></i>
                            </button>
                            Đơn hàng số #10232
                          </th>
                          <td class="text-end">luongthinh1234</td>
                          <td class="text-end">20-12-2022</td>
                          <td class="text-end">123.456đ</td>
                          <td class="text-end">
                            <span class="badge badge-danger">Hủy đơn </span>
                          </td>
                          <td>
                            <button type="button" class="btn btn-black btn-sm btn-border dropdown-toggle"
                              data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Xem thêm
                            </button>
                            <ul class="dropdown-menu" role="menu" style="">
                              <li>
                                <a class="dropdown-item text-center" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">Xem chi tiết</a>
                                <a class="dropdown-item text-center" href="#">Sửa</a>
                                <a class="dropdown-item text-center" href="#">Xóa</a>
                              </li>
                            </ul>

                            <!-- modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                              aria-hidden="true">
                              <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Chi tiết đơn hàng #10231</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                      aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">
                                    <div class="mb-4">
                                      <div class="row">
                                        <div class="col-md-6 mb-2">
                                          <strong>Tên người đặt:</strong> <span id="tenNguoiDat">Nguyễn Văn A</span>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                          <strong>ID User:</strong> <span id="idUser">123456</span>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                          <strong>Ngày đặt:</strong> <span id="ngayDat">18/11/2024</span>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                          <strong>Địa chỉ:</strong> <span id="diaChi">123 Đường ABC, TP HCM</span>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                          <strong>SĐT:</strong> <span id="sdt">0901234567</span>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                          <strong>Tổng:</strong> <span id="tong">500,000 VND</span>
                                        </div>
                                      </div>
                                    </div>
                                    <!-- Bảng trong Modal -->
                                    <table class="table align-items-center mb-0">
                                      <thead class="thead-black">
                                        <tr>
                                          <th scope="col">STT</th>
                                          <th scope="col">Hình</th>
                                          <th scope="col">Tên sản phẩm</th>
                                          <th scope="col">Số lượng</th>
                                          <th scope="col">Giá</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <tr>
                                          <td>1</td>
                                          <td><img src="https://via.placeholder.com/50" alt="Hình"
                                              class="img-thumbnail"></td>
                                          <td>Sản phẩm A</td>
                                          <td>10</td>
                                          <td>100,000 VND</td>
                                        </tr>
                                        <tr>
                                          <td>2</td>
                                          <td><img src="https://via.placeholder.com/50" alt="Hình"
                                              class="img-thumbnail"></td>
                                          <td>Sản phẩm B</td>
                                          <td>5</td>
                                          <td>200,000 VND</td>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                      data-bs-dismiss="modal">Đóng</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <!-- end modal -->
                          </td>
                        </tr>
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

    <script src="/dacs2/public/assets/js/core/jquery-3.7.1.min.js"></script>
    <script src="/dacs2/public/assets/js/core/popper.min.js"></script>
    <script src="/dacs2/public/assets/js/core/bootstrap.min.js"></script>


    <script src="/dacs2/public/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>

    <script src="/dacs2/public/assets/js/plugin/datatables/datatables.min.js"></script>

    <script src="/dacs2/public/assets/js/kaiadmin.min.js"></script>

    <script>$(document).ready(function () {
        // Áp dụng DataTables cho bảng có id "transactionTable"
        $('#transactionTable').DataTable({
          "paging": true,      // Bật phân trang
          "searching": true,   // Bật tìm kiếm
          "ordering": true,    // Bật sắp xếp
          "info": true,        // Hiển thị thông tin bảng
          "pageLength": 5      // Số dòng hiển thị trên mỗi trang
        });
      });</script>
</body>

</html>