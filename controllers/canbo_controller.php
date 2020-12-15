<?php
require_once('controllers/base_controller.php');
require_once('models/CanBo.php');
require_once './core/smarty/libs/Smarty.class.php';
$smarty = new Smarty;
$smarty ->debugging = false;
$smarty ->setTemplateDir('./templates/');
class CanBoController extends BaseController
{
  function __construct()
  {
  }

  public function index()
  {
    global $smarty;
    $Canbo = CanBo::all();
    
    $smarty->assign('dsCanBo', $Canbo);
    $smarty->display('canbo.tpl');
  }
}
