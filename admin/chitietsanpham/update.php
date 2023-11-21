<style>
  
input[type=text] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
}
  .button-12 {
   margin-top: 12px;

  padding: 6px 14px;
  font-family: -apple-system, BlinkMacSystemFont, 'Roboto', sans-serif;
  border-radius: 6px;
  border: none;

  background: #6E6D70;
  box-shadow: 0px 0.5px 1px rgba(0, 0, 0, 0.1), inset 0px 0.5px 0.5px rgba(255, 255, 255, 0.5), 0px 0px 0px 0.5px rgba(0, 0, 0, 0.12);
  color: #DFDEDF;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
}

.button-12:focus {
  box-shadow: inset 0px 0.8px 0px -0.25px rgba(255, 255, 255, 0.2), 0px 0.5px 1px rgba(0, 0, 0, 0.1), 0px 0px 0px 3.5px rgba(58, 108, 217, 0.5);
  outline: 0;
}

</style>
<?php 
  if(is_array($sanpham)) {
    extract($sanpham) ;
  }
  $hinhpath = "../Upload/".$AnhDaiDien;
  if(is_file($hinhpath)) {
    $hinh = "<img src='".$hinhpath."' height='80'>";
   }else{
    $hinh ="no photo" ;
   }
?>
<div class="row">
      <div class="row_header">
        <p>Cập nhật  sản phẩm</p>
      </div>
      <div class="row">
      <form action="index.php?act=updatectsp" method="post" enctype="multipart/form-data">
          <div class="row_mb20">
            Mã SP <br>
            <input type="text" name="masp" value="<?=$MaSP?>">
          </div>
          <div class="row_mb20">
           Mã Khối Lượng <br>
            <input type="text" name="makl"  value="<?=$MaKhoiLuong?>">
          </div>
          <div class="row_mb20">
            Mã Màu Sắc <br>
            <input type="text" name="mamausac"  value="<?=$MaMauSac?>">
          </div>
          <div class="row_mb20">
            Ảnh Sản Phẩm <br>
            <input type="file" name="hinh">
            <?=$hinh?>
          </div>
          <div class="row_mb20">
            Ngày Sản Xuất <br>
            <input type="date" name="NSX"  value="<?=$NSX?>">
          </div>
          <div class="row_mb20">
            Hạn Sử Dụng <br>
            <input type="date" name="HSD"  value="<?=$HSD?>">
          </div>
          <div class="row_mb20">
            Số Lượng <br>
            <input type="text" name="SL"  value="<?=$SoLuong?>">
          </div>
          <div class="row_mb20">
            Số Lượng Tồn <br>
            <input type="text" name="SLTon" value="<?=$SoLuongTon?>">
          </div>
          
          <div>
            <input class="button-12" type="hidden" name="mactsp" value="<?php if(isset($MaChiTietSP)&&($MaChiTietSP > 0)) echo $MaChiTietSP; ?>">
            <input class="button-12" type="submit" name="capnhat" value="Cập Nhật">
            <input class="button-12" type="reset" value="Nhập lại">
            <a href="index.php?act=listctsp"><input class="button-12" type="button" value="Danh sách"></a>
            <?php
                if(isset($thongbao)&&($thongbao!=""))echo $thongbao;
               
            ?>
          </div>
        </form>
     </div>
    </div>
  </div>