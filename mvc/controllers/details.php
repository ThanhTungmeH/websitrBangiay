<?php
class details extends Controller
{
    private $sanphammodel;
    private $CommentModel;
    public function __construct()
    {
        // echo "Details Controller has been called";
        $this->sanphammodel = $this->model("SanphamModel");
        $this->CommentModel = $this->model("CommentModel");
    }

    function HienthiCTSP($id)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (isset($_POST['iduser']) && isset($_POST['idsp']) && isset($_POST['ndbl'])) {
                $userId = $_POST['iduser'];
                $productId = $_POST['idsp'];
                $content = $_POST['ndbl'];
                $this->CommentModel->addcomment($content, $userId, $productId);
            }
        }

        $this->View('layout1', [
            'page' => 'details',
            'sanpham' => $this->sanphammodel->getSanpham($id),
            'comments' => $this->CommentModel->getcomment($id)
        ]);
    }
}
?>
