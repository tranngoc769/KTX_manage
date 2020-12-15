<?php
class CanBo
{
      public $macb;
      public $dienthoai;
      public $tencb;
      public $quequan;
      public $gioitinh;

      function __construct($macb, $tencb, $quequan, $gioitinh, $dienthoai)
      {
            $this->macb = $macb;
            $this->tencb = $tencb;
            $this->quequan = $quequan;
            $this->gioitinh  = $gioitinh;
            $this->dienthoai = $dienthoai;
      }
      static function all()
      {
            $list = [];
            $db = DB::getInstance();
            $req = $db->query('SELECT * FROM canbo');
            foreach ($req->fetchAll() as $item) {
                  $list[] = new CanBo($item['macb'], $item['tencb'],$item['quequan'], $item['gioitinh'], $item['dienthoai']);
            }
            return $list;
      }
}
