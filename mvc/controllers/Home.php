<?php
class Home extends Controller
{
    private $sanphammodel;
    public function __construct()
    {
        $this->sanphammodel = $this->model("SanphamModel");
    }

    function HienthiSP()
    {
        $this->View('layout1', [
            'page' => 'Home',
            'sanpham1' => $this->sanphammodel->getSanPhamTheoLoai1(),
            'sanpham2' => $this->sanphammodel->getSanPhamTheoLoai2(),


        ]);
    }
    function search()
    {
        if (isset($_POST['searchsp'])) {
            $name = $_POST['searchsp'];
            $this->View('layout1', [
                'page' => 'Home',
                'sanpham1' => $this->sanphammodel->search($name),
                'sanpham2' => $this->sanphammodel->search($name),
                'query' => $name,

            ]);
        }
        else {
            $this->HienthiSP();
        }
    }
}
