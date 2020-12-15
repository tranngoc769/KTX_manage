<?php
/* Smarty version 3.1.36, created on 2020-12-15 17:25:44
  from 'G:\QL_KTX\templates\sinhvien.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fd8e388596e51_73469170',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '29b4d7fd176d1963269cd596256d38a07c4af5ea' => 
    array (
      0 => 'G:\\QL_KTX\\templates\\sinhvien.tpl',
      1 => 1608049542,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:part/head.tpl' => 1,
    'file:part/nav.tpl' => 1,
    'file:part/header.tpl' => 1,
    'file:part/footer.tpl' => 1,
  ),
),false)) {
function content_5fd8e388596e51_73469170 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<?php $_smarty_tpl->_subTemplateRender("file:part/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->tpl_vars['title']->value), 0, false);
?>

<body class="">
      <?php $_smarty_tpl->_subTemplateRender("file:part/nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      <?php $_smarty_tpl->_subTemplateRender("file:part/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      <div class="pcoded-main-container">
            <div class="pcoded-content container">
                  <!-- [ Main Content ] start -->
                  <div class="row">
                        <!-- [ Dashboard ] start -->
                        <div class="col-sm-12">
                              <div class="row">
                                    <div class="col-sm-6 d-flex align-items-center mb-4">
                                          <h1 class="d-inline-block font-weight-normal mb-0">Quản lý sinh viên</h1>
                                    </div>
                              </div>
                              <div class="row">
                                    <div class="col-sm-12">
                                          <div class="card">
                                                <div class="card-body">
                                                      <div class="table-responsive">
                                                            <div id="usertable_wrapper"
                                                                  class="dataTables_wrapper dt-bootstrap4 no-footer">
                                                                  <div class="row">
                                                                        <div class="col-sm-12" style="
        overflow: hidden;
">
                                                                              <table id="usertable"
                                                                                    class="table table-center mb-0 dataTable no-footer"
                                                                                    role="grid"
                                                                                    aria-describedby="usertable_info">
                                                                                    <thead>
                                                                                          <tr role="row">
                                                                                                <th class="sorting_asc"
                                                                                                      tabindex="0"
                                                                                                      aria-controls="usertable"
                                                                                                      rowspan="1"
                                                                                                      colspan="1"
                                                                                                      style="width: 177.102px;">
                                                                                                      Tên</th>
                                                                                                <th class="sorting"
                                                                                                      tabindex="0"
                                                                                                      aria-controls="usertable"
                                                                                                      rowspan="1"
                                                                                                      colspan="1"
                                                                                                      style="width: 133.466px;">
                                                                                                      Phòng</th>
                                                                                                <th class="sorting"
                                                                                                      tabindex="0"
                                                                                                      aria-controls="usertable"
                                                                                                      rowspan="1"
                                                                                                      colspan="1"
                                                                                                      style="width: 179.83px;">
                                                                                                      MSSV</th>
                                                                                                <th class="sorting"
                                                                                                      tabindex="0"
                                                                                                      aria-controls="usertable"
                                                                                                      rowspan="1"
                                                                                                      colspan="1"
                                                                                                      style="width: 209.83px;">
                                                                                                      Ngày Sinh</th>
                                                                                                <th class="sorting"
                                                                                                      tabindex="0"
                                                                                                      aria-controls="usertable"
                                                                                                      rowspan="1"
                                                                                                      colspan="1"
                                                                                                      style="width: 209.83px;">
                                                                                                      Quê Quán</th>
                                                                                                <th class="sorting"
                                                                                                      tabindex="0"
                                                                                                      aria-controls="usertable"
                                                                                                      rowspan="1"
                                                                                                      colspan="1"
                                                                                                      style="width: 79.8295px;">
                                                                                                      SDT</th>
                                                                                                <th class="sorting"
                                                                                                      tabindex="0"
                                                                                                      aria-controls="usertable"
                                                                                                      rowspan="1"
                                                                                                      colspan="1"
                                                                                                      style="width: 79.8295px;">
                                                                                                      Mã Lớp</th>
                                                                                                <th class="sorting"
                                                                                                      tabindex="0"
                                                                                                      aria-controls="usertable"
                                                                                                      rowspan="1"
                                                                                                      colspan="1"
                                                                                                      style="width: 79.8295px;">
                                                                                                      Thao Tác</th>
                                                                                          </tr>
                                                                                    </thead>
                                                                                    <tbody>
                                                                                          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dsSinhVien']->value, 'sinhvien');
$_smarty_tpl->tpl_vars['sinhvien']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['sinhvien']->value) {
$_smarty_tpl->tpl_vars['sinhvien']->do_else = false;
?>
                                                                                                <tr role="row" class="odd">
                                                                                                      <td class="sorting_1">
                                                                                                            <div
                                                                                                                  class="media">
                                                                                                                  <div
                                                                                                                        class="media-body ml-3 align-self-center">
                                                                                                                        <p
                                                                                                                              class="mb-0">
                                                                                                                              <?php echo $_smarty_tpl->tpl_vars['sinhvien']->value->hoten;?>

                                                                                                                        </p>
                                                                                                                  </div>
                                                                                                            </div>
                                                                                                      </td>
                                                                                                      <td><?php echo $_smarty_tpl->tpl_vars['sinhvien']->value->phong;?>

                                                                                                      </td>
                                                                                                      <td><?php echo $_smarty_tpl->tpl_vars['sinhvien']->value->masv;?>

                                                                                                      </td>
                                                                                                      <td><?php echo $_smarty_tpl->tpl_vars['sinhvien']->value->ngaysinh;?>

                                                                                                      </td>
                                                                                                      <td><?php echo $_smarty_tpl->tpl_vars['sinhvien']->value->quequan;?>

                                                                                                      </td>
                                                                                                      <td><?php echo $_smarty_tpl->tpl_vars['sinhvien']->value->sdt;?>

                                                                                                      </td>
                                                                                                      <td><?php echo $_smarty_tpl->tpl_vars['sinhvien']->value->malop;?>

                                                                                                      </td>
                                                                                                      <td class="text-right">
                                                                                                            <div
                                                                                                                  class="btn-group card-option">
                                                                                                                  <button
                                                                                                                        type="button"
                                                                                                                        class="btn shadow-none "><i
                                                                                                                              class="feather icon-plus">Sửa</i></button>
                                                                                                                  <button
                                                                                                                        type="button"
                                                                                                                        class="btn shadow-none "><i
                                                                                                                              class="feather icon-trash">Xóa</i></button>
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
                                          <a href="#!" class="mb-0 text-body"><i
                                                      class="feather icon-plus mr-2"></i>Thêm</a>
                                    </div>
                              </div>
                        </div>
                  </div>
            </div>
      </div>
<?php $_smarty_tpl->_subTemplateRender("file:part/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</body>
</html><?php }
}
