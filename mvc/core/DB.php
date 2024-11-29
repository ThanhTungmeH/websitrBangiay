<?php
class DB
{
  public $con;
  protected $servername = "localhost:3308";
  protected $username = "root";
  protected $passsword = " ";
  protected $dbname = "shopbangiay";
  function __construct()
  {
    $this->con = mysqli_connect($this->servername, $this->username, $this->passsword);
    mysqli_select_db($this->con, $this->dbname);
    mysqli_query($this->con, "SET NAMES 'utf8'");
  }
}
