<nav class="navbar  navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid bg-black">
        <a class="navbar-brand" href="#">
            <img src="/dacs2/public/img/logo.png" class="imglogo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto bg-black">
                <?php if (isset($_SESSION['username'])): ?>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Xin chào <?php echo $_SESSION['username']; ?></a>
                    </li>
                <?php else: ?>
                    <li class="nav-item">
                        <a class="nav-link" href="/dacs2/Login/form_dangnhap">Đăng nhập</a>
                    </li>
                <?php endif; ?>
                <li class="nav-item">
                    <a class="nav-link " href="/dacs2/Home">Trang chủ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">Giày nam</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Giày nữ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/dacs2/Cart/viewCart/">Giỏ hàng</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Giới thiệu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Liên hệ</a>
                </li>
                <?php if (isset($_SESSION['role']) && $_SESSION['role'] == 'admin'): ?>
                    <li class="nav-item">
                        <a class="nav-link" href="/dacs2/Admin/dashboard">Quản lý</a>
                    </li>
                <?php endif; ?>
                <?php if (isset($_SESSION['username'])): ?>
                    <li class="nav-item">
                        <a class="nav-link" href="/dacs2/Login/logout">Đăng xuất</a>
                    </li>
                <?php endif; ?>
               
            </ul>
            <form class="d-flex ms-auto" action="/dacs2/Home/search" method="POST">
                <input class="form-control me-2" type="search" name="searchsp" placeholder="Tìm kiếm sản phẩm" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Tìm kiếm</button>
            </form>
        </div>
    </div>
</nav>
