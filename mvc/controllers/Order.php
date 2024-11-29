<?php
class Order extends Controller
{
    private $orderModel;
    private $cartModel;

    public function __construct()
    {
        $this->orderModel = $this->model("OrderModel");
        $this->cartModel = $this->model("CartModel");
    }
   
  
}
?>