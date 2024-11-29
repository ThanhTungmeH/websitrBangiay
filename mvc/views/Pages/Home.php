<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="/dacs2/public/img/l1.png" class="d-block w-100" alt="Slide 1">
    </div>
    <div class="carousel-item">
      <img src="/dacs2/public/img/l4.jpeg" class="d-block w-100" alt="Slide 2">
    </div>
    <div class="carousel-item">
      <img src="/dacs2/public/img/l3.png" class="d-block w-100" alt="Slide 3">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div><br>
<section id="feature" class="section-p1">
  <div class="fe-box">
    <img src="/dacs2/public/img/features/f1.png" alt="">
    <h6>Đặt hàng online</h6>
  </div>
  <div class="fe-box">
    <img src="/dacs2/public/img/features/f2.png" alt="">
    <h6>Miễn phí vận chuyển</h6>
  </div>
  <div class="fe-box">
    <img src="/dacs2/public/img/features/f3.png" alt="">
    <h6>Tiết kiệm tiền</h6>
  </div>
  <div class="fe-box">
    <img src="/dacs2/public/img/features/f4.png" alt="">
    <h6>Khuyến mãi</h6>
  </div>
  <div class="fe-box">
    <img src="/dacs2/public/img/features/f5.png" alt="">
    <h6>Mua sắm </h6>
  </div>
  <div class="fe-box">
    <img src="/dacs2/public/img/features/f6.png" alt="">
    <h6>Hỗ trợ 24/7</h6>
  </div>
</section>
<section id="product1" class="section-p1">

  <h2 style="color: #6A0DAD; font-size:40px;">Sản phẩm nổi bật</h2>
  <p style="color: #333333; font-size:20px;">Bộ sưu tập Mùa hè Thiết kế Norden mới</p>
  <div class="tw-grid tw-grid-cols-1 sm:tw-grid-cols-3 lg:tw-grid-cols-5 tw-gap-4 ">

    <?php while ($dong = mysqli_fetch_array($data['sanpham1'])) { ?>
      <div class="pro-container">
        <div class="pro">
          <a href="/dacs2/details/HienthiCTSP/<?php echo $dong['ID'] ?>">
            <img src="/dacs2/public/img/<?php echo $dong['hinh'] ?>" alt="products">
          </a>
          <div class="des">
            <span>adidas</span>
            <h5><b> <?php echo $dong['tensp']  ?></b></h5>
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half-alt"></i>
            </div>
            <h4><?php echo $dong['gia'] . ".000Đ" ?></h4>
          </div>
          <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
        </div>
      </div>
    <?php } ?>
  </div>
</section>
<section id="banner" class="section-m1">
  <h2>Giảm Giá Lên Đến <span>70% - Tất cả</span> Giày & Phụ Kiện</h2>
  <a href="shop.html"><button class="normal">Khám Phá Thêm</button></a>
</section>
<section id="product1" class="section-p1">
  <h2 style="color: #DD4160; font-size: 40px;">Sản phẩm đang giảm giá</h2>
  <p style="font-size: 20px;">Bộ Sưu Tập Mùa Hè Thiết Kế Mới từ Norden</p>
  <div class="tw-grid tw-grid-cols-1 sm:tw-grid-cols-3 lg:tw-grid-cols-5 tw-gap-4 ">

    <?php while ($dong = mysqli_fetch_array($data['sanpham2'])) { ?>
      <div class="pro-container">
        <div class="pro">
          <a href="/dacs2/details/HienthiCTSP/<?php echo $dong['ID'] ?>">
            <img src="/dacs2/public/img/<?php echo $dong['hinh'] ?>" alt="products">
          
          <div class="des">
            <span>adidas</span>
            <h5><b> <?php echo $dong['tensp']  ?></b></h5>
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half-alt"></i>
            </div>
            <h4 style="color: red;" class="me-2"><del>499.000đ</del></h4>
            <h4><?php echo $dong['gia'] . ".000Đ" ?></h4>
          </div>
          </a>
          <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
        </div>
      </div>
    <?php } ?>
  </div>
</section>