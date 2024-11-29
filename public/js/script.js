$(document).ready(function() {
    // Khi nhấn vào nút "Xem chi tiết"
    $('a[data-bs-toggle="modal"]').on('click', function() {
      // Lấy thông tin từ các thuộc tính `data`
      const id = $(this).data('id');
      const tensp = $(this).data('tensp');
      const gia = $(this).data('gia');
      const soluong = $(this).data('soluong');
      const motasp = $(this).data('motasp');
      const danhmuc = $(this).data('danhmuc');
      const hinh = $(this).data('hinh');  // Lấy URL của hình ảnh
  
      // Gán dữ liệu vào các trường trong modal
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
  });