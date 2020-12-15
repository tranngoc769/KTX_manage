<?php
require_once('controllers/base_controller.php');
require_once('models/SinhVien.php');
require_once './core/smarty/libs/Smarty.class.php';
$smarty = new Smarty;
$smarty ->debugging = false;
$smarty ->setTemplateDir('./templates/');
class SinhVienController extends BaseController
{
  function __construct()
  {
  }

  public function index()
  {
    global $smarty;
    $SinhVien = SinhVien::all();
    
    $smarty->assign('dsSinhVien', $SinhVien);
    $smarty->display('sinhvien.tpl');
  }
}
