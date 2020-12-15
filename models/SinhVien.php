<?php
class SinhVien
{
      public $masv;
      public $hoten;
      public $phong;
      public $ngaysinh;
      public $quequan;
      public $gioitinh;
      public $sdt;
      public $malop;
      function __construct($masv, $hoten, $phong, $ngaysinh, $quequan, $gioitinh, $sdt,$malop)
      {
            $this->masv = $masv;
            $this->hoten = $hoten;
            $this->phong =  $phong;
            $this->ngaysinh = $ngaysinh;
            $this->quequan = $quequan;
            $this->gioitinh  = $gioitinh;
            $this->sdt = $sdt;
            $this->malop = $malop;
      }
      static function all()
      {
            $list = [];
            $db = DB::getInstance();
            $req = $db->query('SELECT * FROM sinhvien');
            foreach ($req->fetchAll() as $item) {
                  $list[] = new SinhVien($item['masv'], $item['hoten'], $item['phong'], $item['ngaysinh'], $item['quequan'], $item['gioitinh'], $item['sdt'],$item['malop']);
            }
            return $list;
      }
}
