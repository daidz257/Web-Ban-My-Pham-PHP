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
<div class="row">
      <div class="row_header">
        <p>Thêm mới Chi Tiết sản phẩm</p>
      </div>
      <div class="row">
        <form action="index.php?act=addctsp" method="post" enctype="multipart/form-data">
        <div class="row_mb20">
            Mã Chi Tiết SP <br>
            <input type="text" name="mactsp">
          </div>
          <div class="row_mb20">
            Mã SP <br>
            <input type="text" name="masp">
          </div>
          <div class="row_mb20">
           Mã Khối Lượng <br>
            <input type="text" name="makl"  placeholder="Tên SP">
          </div>
          <div class="row_mb20">
            Mã Màu Sắc <br>
            <input type="text" name="mamausac"  placeholder="Tên SP">
          </div>
          <div class="row_mb20">
            Ảnh Sản Phẩm <br>
            <input type="file" name="hinh"  placeholder="Tên SP">
          </div>
          <div class="row_mb20">
            Ngày Sản Xuất <br>
            <input type="date" name="NSX"  placeholder="Mã Loại">
          </div>
          <div class="row_mb20">
            Hạn Sử Dụng <br>
            <input type="date" name="HSD"  placeholder="Hình SP">
          </div>
          <div class="row_mb20">
            Số Lượng <br>
            <input type="text" name="SL"  placeholder="Giá SP">
          </div>
          <div class="row_mb20">
            Số Lượng Tồn <br>
            <input type="text" name="SLTon">
          </div>
          
          <div>
            <input class="button-12" type="submit" name="themmoi" value="Thêm mới ">
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