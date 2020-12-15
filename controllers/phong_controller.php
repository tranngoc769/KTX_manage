<?php
require_once('controllers/base_controller.php');
require_once('models/Phong.php');
require_once './core/smarty/libs/Smarty.class.php';
$smarty = new Smarty;
$smarty ->debugging = false;
$smarty ->setTemplateDir('./templates/');
class PhongController extends BaseController
{
  function __construct()
  {
  }

  public function index()
  {
    global $smarty;
    $Canbo = Phong::all();
    
    $smarty->assign('dsPhong', $Canbo);
    $smarty->display('phong.tpl');
  }
}
