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
  if(is_array($dm_loaidm)) {
    extract($dm_loaidm) ;
  }
?>
<div class="row">
      <div class="row_header">
        <p>Cập nhật  loại hàng</p>
      </div>
      <div class="row">
        <form action="index.php?act=updatedm" method="post">
          <div class="row_mb20">
            Mã Loại <br>
            <input type="text" name="maloai" disabled>
          </div>
          <div class="row_mb20">
            Tên Loại <br>
            <input type="text" name="tenloai" value="<?php if(isset($Loai)&&($Loai!="")) echo $Loai; ?>">
          </div>
          <div>
            <!-- input hidden để lưu maloai -->
            <input class="button-12" type="hidden" name="maloai" value="<?php if(isset($MaLoai)&&($MaLoai > 0)) echo $MaLoai; ?>">
            <input class="button-12" type="submit" name="capnhat" value="Cập Nhật">
            <input class="button-12" type="reset" value="Nhập lại">
            <a href="index.php?act=listdm"><input class="button-12" type="button" value="Danh sách"></a>
            <?php
                if(isset($thongbao)&&($thongbao!=""))echo $thongbao;
               
            ?>
          </div>
        </form>
      </div>
    </div>
  </div>