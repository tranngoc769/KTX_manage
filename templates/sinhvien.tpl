<!DOCTYPE html>
<html lang="en">
{include file="part/head.tpl" title=$title}
<body class="">
    {include file="part/nav.tpl"} {include file="part/header.tpl"}
    <div class="pcoded-main-container">
        <div class="pcoded-content container">
            <div class="row">
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
                                        <div id="usertable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                            <div class="row">
                                                <div class="col-sm-12" style="overflow: hidden;">
                                                    <table id="usertable" class="table table-center mb-0 dataTable no-footer" role="grid" aria-describedby="usertable_info">
                                                        <thead>
                                                            <tr role="row">
                                                                <th class="sorting_asc" tabindex="0" aria-controls="usertable" rowspan="1" colspan="1" style="width: 177.102px;">
                                                                    Tên</th>
                                                                <th class="sorting" tabindex="0" aria-controls="usertable" rowspan="1" colspan="1" style="width: 133.466px;">
                                                                    Phòng</th>
                                                                <th class="sorting" tabindex="0" aria-controls="usertable" rowspan="1" colspan="1" style="width: 179.83px;">
                                                                    MSSV</th>
                                                                <th class="sorting" tabindex="0" aria-controls="usertable" rowspan="1" colspan="1" style="width: 209.83px;">
                                                                    Ngày Sinh</th>
                                                                <th class="sorting" tabindex="0" aria-controls="usertable" rowspan="1" colspan="1" style="width: 209.83px;">
                                                                    Quê Quán</th>
                                                                <th class="sorting" tabindex="0" aria-controls="usertable" rowspan="1" colspan="1" style="width: 79.8295px;">
                                                                    SDT</th>
                                                                <th class="sorting" tabindex="0" aria-controls="usertable" rowspan="1" colspan="1" style="width: 79.8295px;">
                                                                    Mã Lớp</th>
                                                                <th class="sorting" tabindex="0" aria-controls="usertable" rowspan="1" colspan="1" style="width: 79.8295px;">
                                                                    Thao Tác</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            {foreach $dsSinhVien as $sinhvien}
                                                            <tr role="row" class="odd">
                                                                <td class="sorting_1">
                                                                    <div class="media">
                                                                        <div class="media-body ml-3 align-self-center">
                                                                            <p class="mb-0">
                                                                                {$sinhvien->hoten}
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>{$sinhvien->phong}
                                                                </td>
                                                                <td>{$sinhvien->masv}
                                                                </td>
                                                                <td>{$sinhvien->ngaysinh}
                                                                </td>
                                                                <td>{$sinhvien->quequan}
                                                                </td>
                                                                <td>{$sinhvien->sdt}
                                                                </td>
                                                                <td>{$sinhvien->malop}
                                                                </td>
                                                                <td class="text-right">
                                                                    <div class="btn-group card-option">
                                                                        <button type="button" class="btn shadow-none "><i
                                                                                class="feather icon-plus">Sửa</i></button>
                                                                        <button type="button" class="btn shadow-none "><i
                                                                                class="feather icon-trash">Xóa</i></button>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            {/foreach}
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
    {include file="part/footer.tpl"}
</body>

</html>