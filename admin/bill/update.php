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
  if(is_array($bill)) {
    extract($bill) ;
  }
  ?>
<div class="row">
      <div class="row_header">
        <p>Cập Nhật Đơn Hàng</p>
      </div>
      <div class="row">
        <form action="index.php?act=updatebill" method="post">
          <div class="row_mb20">
            Tên Người Đặt <br>
            <input type="text" name="tennguoidat" value="<?=$TenNguoiDat?>">
          </div>
          <div class="row_mb20">
            Địa Chỉ GH <br>
            <input type="text" name="address" value="<?=$DiaChiGH?>">
          </div>
          <div class="row_mb20">
            Số Điện Thoại <br>
            <input type="text" name="sdt" value="<?=$SoDienThoaiGH?>">
          </div>
          <div class="row_mb20">
            Ngày Đặt Hàng <br>
            <input type="datatime" name="ngaydathang" value="<?=$NgayHoaDon?>">
          </div>
          <div class="row_mb20">
            Tổng Đơn Hàng <br>
            <input type="text" name="tongdonhang" value="<?=$TongDonHang?>">
         <div class="row_mb20">
           <label for="trangThai">Trạng Thái Đơn Hàng:</label>
           <select id="trangThai" name="trangthai">
           <option value="Đang Xử Lý">Đang xử lý</option>
           <option value="Đang Vận Chuyển">Đang vận chuyển</option>
           <option value="Hoàn Thành">Hoàn thành</option>
           </select>
         </div>

          </div>
          <div>
            <input class="button-12" type="hidden" name="mahoadon" value="<?php if(isset($MaHoaDon)&&($MaHoaDon > 0)) echo $MaHoaDon; ?>">
            <input class="button-12" type="submit" name="capnhat" value="Cập Nhật ">
            <input class="button-12" type="reset" value="Nhập lại">
            <a href="index.php?act=listbill"><input class="button-12" type="button" value="Danh sách"></a>
            <?php
                if(isset($thongbao)&&($thongbao!=""))echo $thongbao;
            ?>
          </div>
        </form>
      </div>
    </div>
  </div>