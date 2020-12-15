<?php
class Phong
{
      public $maphong;
      public $tenphong;
      public $songuoi;

      function __construct($maphong, $tenphong, $songuoi)
      {
            $this->maphong = $maphong;
            $this->tenphong = $tenphong;
            $this->songuoi = $songuoi;
      }
      static function all()
      {
            $list = [];
            $db = DB::getInstance();
            $req = $db->query('SELECT * FROM phong');
            foreach ($req->fetchAll() as $item) {
                  $list[] = new Phong($item['maphong'], $item['tenphong'],$item['songuoi']);
            }
            return $list;
      }
}
