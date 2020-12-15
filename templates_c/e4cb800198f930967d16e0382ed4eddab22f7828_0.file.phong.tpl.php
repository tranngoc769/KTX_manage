<?php
/* Smarty version 3.1.36, created on 2020-12-15 14:18:26
  from 'G:\QL_KTX\templates\phong.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fd8b7a2296305_32662363',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e4cb800198f930967d16e0382ed4eddab22f7828' => 
    array (
      0 => 'G:\\QL_KTX\\templates\\phong.tpl',
      1 => 1608038266,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fd8b7a2296305_32662363 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">


<!-- Mirrored from codedthemes.com/demos/admin-templates/treva/bootstrap/adm-users-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 12 Dec 2020 16:15:05 GMT -->

<head>
    <title>Quản lí phòng</title>
    <link rel="icon" href="assets/images/favicon.png" type="image/x-icon">
    <!-- data tables css -->
    <link rel="stylesheet" href="assets/css/plugins/dataTables.bootstrap4.min.css">
    <!-- vendor css -->
    <link rel="stylesheet" href="assets/css/style.css">
    <?php echo '<script'; ?>
 src="assets/js/vendor-all.min.js"><?php echo '</script'; ?>
>
</head>

<body class="">




    <nav class="pcoded-navbar dashboard-nav menupos-fixed navbar-collapsed">
        <div class="navbar-wrapper  ">
            <div class="navbar-content scroll-div ps">
                <ul class="nav pcoded-inner-navbar ">
                    <li class="nav-item pcoded-menu-caption">
                        <label>Quản lý</label>
                    </li>
                    <li class="nav-item"><a href="/index.php?controller=canbo&action=index" class="nav-link "><span class="pcoded-micon"><i
                  class="fas fa-tachometer-alt"></i></span><span class="pcoded-mtext">Cán bộ</span></a></li>

                    <li class="nav-item"><a href="/index.php?controller=sinhvien&action=index" class="nav-link "><span class="pcoded-micon"><i
                  class="fas fa-users"></i></span><span class="pcoded-mtext">CSVC</span></a></li>

                    <li class="nav-item"><a href="/index.php?controller=sinhvien&action=index" class="nav-link "><span class="pcoded-micon"><i
                  class="fas fa-user-circle"></i></span><span class="pcoded-mtext">Sinh Viên</span></a></li>

                    <li class="nav-item"><a href="/index.php?controller=phong&action=index" class="nav-link "><span class="pcoded-micon"><i
                  class="fas fa-gift"></i></span><span class="pcoded-mtext">Tài khoản</span></a></li>

                    <li class="nav-item"><a href="/index.php?controller=phong&action=index" class="nav-link "><span class="pcoded-micon"><i
                  class="fas fa-sitemap"></i></span><span class="pcoded-mtext">Lớp</span></a></li>

                    <li class="nav-item"><a href="/index.php?controller=phong&action=index" class="nav-link "><span class="pcoded-micon"><i
                  class="fas fa-file-invoice"></i></span><span class="pcoded-mtext">Phòng</span></a></li>
                </ul>
                <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                    <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                </div>
                <div class="ps__rail-y" style="top: 0px; right: 0px;">
                    <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                </div>
            </div>
        </div>
    </nav>
    <!-- [ navigation menu ] end -->
    <!-- [ Header ] start -->
    <header class="navbar pcoded-header navbar-expand-lg navbar-light headerpos-fixed brand-dark ">


        <div class="m-header">
            <a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a>
            <a href="index.html" class="b-brand">
                <!-- ========   change your logo hear   ============ -->


                <img src="assets/images/logo.svg" alt="" class="logo">

            </a>
            <a href="#!" class="mob-toggler">
                <i class="feather icon-more-vertical"></i>
            </a>
        </div>
        <div class="collapse navbar-collapse">
             </button>
                    </div>
                </li>
                <li class="nav-item h-auto d-none d-md-inline-block">
                    <div class="input-group search-form">
                        <div class="nav-search">
                            <div class="filter-block">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-transparent"><i class="feather icon-search"></i></span>
                                </div>
                                <input type="text" class="form-control input nav-search" placeholder="Search" tabindex="-1" data-search="menu-list">
                                <ul class="link-list dropdown-menu"></ul>
                            </div>
                        </div>
                    </div>
                </li>

            </ul>
            <ul class="navbar-nav ml-auto">
                <li>
                    <div class="dropdown drp-user">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="assets/images/user/avatar-2.jpg" class="img-radius" alt="User-Profile-Image">
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-notification">
                            <ul class="pro-body">
                                <li><a href="adm-profile-public.html" class="dropdown-item"><i class="feather icon-user"></i>
                    Profile</a></li>
                                <li><a href="adm-profile-conversations.html" class="dropdown-item"><i class="feather icon-mail"></i> My
                    Messages</a></li>
                                <li><a href="auth-login4.html" class="dropdown-item"><i class="feather icon-lock"></i> Lock Screen</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </header>
    <div class="pcoded-main-container">
        <div class="pcoded-content container">
            <!-- [ Main Content ] start -->
            <div class="row">
                <!-- [ Dashboard ] start -->
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-sm-6 d-flex align-items-center mb-4">
                            <h1 class="d-inline-block font-weight-normal mb-0">Quản lý phòng</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <div id="usertable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                            <div class="row">
                                                <div class="col-sm-12" style="
        overflow: hidden;
">
                                                    <table id="usertable" class="table table-center mb-0 dataTable no-footer" role="grid" aria-describedby="usertable_info">
                                                        <thead>
                                                            <tr role="row">
                                                                <th class="sorting_asc" tabindex="0" aria-controls="usertable" rowspan="1" colspan="1" style="width: 177.102px;">Mã phòng</th>
                                                                <th class="sorting" tabindex="0" aria-controls="usertable" rowspan="1" colspan="1" style="width: 133.466px;">Tên phòng</th>
                                                                <th class="sorting" tabindex="0" aria-controls="usertable" rowspan="1" colspan="1" style="width: 179.83px;">Số người</th>
                                                                <th class="sorting" tabindex="0" aria-controls="usertable" rowspan="1" colspan="1" style="width: 79.8295px;">Thao Tác</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dsPhong']->value, 'canbo');
$_smarty_tpl->tpl_vars['canbo']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['canbo']->value) {
$_smarty_tpl->tpl_vars['canbo']->do_else = false;
?>
                                                            <tr role="row" class="odd">
                                                                <td class="sorting_1">
                                                                    <div class="media">
                                                                        <div class="media-body ml-3 align-self-center">
                                                                            <p class="mb-0"><?php echo $_smarty_tpl->tpl_vars['canbo']->value->maphong;?>
</p>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td><?php echo $_smarty_tpl->tpl_vars['canbo']->value->tenphong;?>
</td>
                                                                <td><?php echo $_smarty_tpl->tpl_vars['canbo']->value->songuoi;?>
</td>
                                                                <td class="text-right">
                                                                    <div class="btn-group card-option">
                                                                        <button type="button" class="btn shadow-none "><i class="feather icon-plus">Sửa</i></button>
                                                                        <button type="button" class="btn shadow-none "><i class="feather icon-trash">Xóa</i></button>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <a href="#!" class="mb-0 text-body"><i class="feather icon-plus mr-2"></i>Thêm</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php echo '<script'; ?>
 src="assets/js/plugins/bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="assets/js/pcoded.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="assets/js/menu-setting.js"><?php echo '</script'; ?>
>

    <!-- datatable Js -->
    <?php echo '<script'; ?>
 src="assets/js/plugins/jquery.dataTables.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="assets/js/plugins/dataTables.bootstrap4.min.js"><?php echo '</script'; ?>
>
    <div id="styleSelector" class="menu-styler">
        <div class="style-toggler">
            <a href="#!"></a>
        </div>
        <div class="style-block">
            <h5 class="mb-2">Treva Live Customizer</h5>
            <hr class="">
            <div class="m-style-scroller">
                <h6 class="mt-2">Layouts</h6>
                <div class="theme-color layout-type"><a href="#!" class="active" data-value="menu-dark" title="Default Layout"><span></span><span></span></a><a href="#!" class="" data-value="menu-light" title="Light"><span></span><span></span></a><a href="#!" class="" data-value="reset"
                        title="Reset">Reset</a>
                </div>
                <h6>Header background color</h6>
                <div class="theme-color header-color"><a href="#!" class="active" data-value="header-default"><span></span><span></span></a><a href="#!" class="" data-value="header-blue"><span></span><span></span></a><a href="#!" class="" data-value="header-red"><span></span><span></span></a>
                    <a href="#!" class="" data-value="header-purple"><span></span><span></span></a><a href="#!" class="" data-value="header-info"><span></span><span></span></a><a href="#!" class="" data-value="header-dark"><span></span><span></span></a>
                </div>
                <h6>Menu brand Color</h6>
                <div class="theme-color brand-color"><a href="#!" class="active" data-value="brand-blue"><span></span><span></span></a><a href="#!" class="" data-value="brand-red"><span></span><span></span></a><a href="#!" class="" data-value="brand-purple"><span></span><span></span></a>
                    <a href="#!" class="" data-value="brand-info"><span></span><span></span></a><a href="#!" class="" data-value="brand-dark"><span></span><span></span></a>
                </div>
                <h6>Menu Sidebar Color</h6>
                <div class="theme-color navbar-color"><a href="#!" class="" data-value="navbar-dark"><span></span><span></span></a><a href="#!" class="" data-value="navbar-blue"><span></span><span></span></a><a href="#!" class="" data-value="navbar-red"><span></span><span></span></a><a href="#!"
                        class="" data-value="navbar-purple"><span></span><span></span></a><a href="#!" class="" data-value="navbar-info"><span></span><span></span></a></div>
            </div>
        </div>
    </div>
</body>


<!-- Mirrored from codedthemes.com/demos/admin-templates/treva/bootstrap/adm-users-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 12 Dec 2020 16:15:05 GMT -->

</html><?php }
}
