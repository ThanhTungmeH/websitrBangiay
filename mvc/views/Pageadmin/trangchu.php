<div class="container">
    <div class="page-inner">
        <div
            class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
            <div>
                <h3 class="fw-bold mb-3">Trang chủ</h3>
                <h6 class="op-7 mb-2"><?php echo strftime("Ngày %d, tháng %m, năm %Y"); ?></h6>
            </div>
        </div>
        <!-- Card 4 cái -->
        <div class="row">
            <!-- Card 4 cái -->
            <div class="col-sm-6 col-md-3">
                <div class="card card-stats card-round">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-icon">
                                <div
                                    class="icon-big text-center icon-primary bubble-shadow-small">
                                    <i class="fas fa-users"></i>
                                </div>
                            </div>
                            <div class="col col-stats ms-3 ms-sm-0">
                                <div class="numbers">
                                    <p class="card-category">Nhân viên</p>
                                    <h4 class="card-title">1234</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-3">
                <div class="card card-stats card-round">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-icon">
                                <div
                                    class="icon-big text-center icon-info bubble-shadow-small">
                                    <i class="fas fa-user-check"></i>
                                </div>
                            </div>
                            <div class="col col-stats ms-3 ms-sm-0">
                                <div class="numbers">
                                    <p class="card-category">Khách Hàng</p>
                                    <h4 class="card-title">123456789</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-3">
                <div class="card card-stats card-round">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-icon">
                                <div
                                    class="icon-big text-center icon-success bubble-shadow-small">
                                    <i class="fas fa-luggage-cart"></i>
                                </div>
                            </div>
                            <div class="col col-stats ms-3 ms-sm-0">
                                <div class="numbers">
                                    <p class="card-category">Sản phẩm</p>
                                    <h4 class="card-title"><?php echo $data['AllSP'] ?></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-3">
                <div class="card card-stats card-round">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-icon">
                                <div
                                    class="icon-big text-center icon-secondary bubble-shadow-small">
                                    <i class="far fa-check-circle"></i>
                                </div>
                            </div>
                            <div class="col col-stats ms-3 ms-sm-0">
                                <div class="numbers">
                                    <p class="card-category">Đã bán</p>
                                    <h4 class="card-title">576</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Thống kê và doanh thu -->
        <div class="row">
            <div class="col-md-8">
                <div class="card card-round">
                    <div class="card-header">
                        <div class="card-head-row">
                            <div class="card-title">Thống kê</div>
                            <div class="card-tools">
                                <a
                                    href="#"
                                    class="btn btn-label-success btn-round btn-sm me-2">
                                    <span class="btn-label">
                                        <i class="fa fa-pencil"></i>
                                    </span>
                                    Xuất
                                </a>
                                <a href="#" class="btn btn-label-info btn-round btn-sm">
                                    <span class="btn-label">
                                        <i class="fa fa-print"></i>
                                    </span>
                                    In
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="chart-container" style="min-height: 375px">
                            <canvas id="statisticsChart"></canvas>
                        </div>
                        <div id="myChartLegend"></div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card card-primary card-round">
                    <div class="card-header">
                        <div class="card-head-row">
                            <div class="card-title">Doanh thu</div>
                            <div class="card-tools">
                                <div class="dropdown">
                                    <button
                                        class="btn btn-sm btn-label-light dropdown-toggle"
                                        type="button"
                                        id="dropdownMenuButton"
                                        data-bs-toggle="dropdown"
                                        aria-haspopup="true"
                                        aria-expanded="false">
                                        Export
                                    </button>
                                    <div
                                        class="dropdown-menu"
                                        aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#">Xem chi tiết</a>
                                        <a class="dropdown-item" href="#">In</a>
                                        <a class="dropdown-item" href="#">Xuất</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-category">Tháng 1 - Tháng 11</div>
                    </div>
                    <div class="card-body pb-0">
                        <div class="mb-4 mt-2">
                            <h1>5,555,555,000đ</h1>
                        </div>
                        <div class="pull-in">
                            <canvas id="dailySalesChart"></canvas>
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
