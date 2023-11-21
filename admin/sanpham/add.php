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
        <p>Thêm mới sản phẩm</p>
      </div>
      <div class="row">
        <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
          <div class="row_mb20">
            Mã SP <br>
            <input type="text" name="masp" placeholder="Mã SP">
          </div>
          <div class="row_mb20">
            Tên SP <br>
            <input type="text" name="tensp"  placeholder="Tên SP">
          </div>
          <div class="row_mb20">
            Mã Hãng SX <br>
            <input type="text" name="hangsx"  placeholder="Tên SP">
          </div>
          <div class="row_mb20">
            Mã Loại <br>
            <input type="text" name="maloai"  placeholder="Mã Loại">
          </div>
          <div class="row_mb20">
            Ảnh SP <br>
            <input type="file" name="hinh"  placeholder="Hình SP">
          </div>
          <div class="row_mb20">
            Giá SP <br>
            <input type="text" name="giasp"  placeholder="Giá SP">
          </div>
          
          <div>
            <input class="button-12" type="submit" name="themmoi" value="Thêm mới ">
            <input class="button-12" type="reset" value="Nhập lại">
            <a href="index.php?act=listsp"><input class="button-12" type="button" value="Danh sách"></a>
            <?php
                if(isset($thongbao)&&($thongbao!=""))echo $thongbao;
               
            ?>
          </div>
        </form>
      </div>
    </div>
  </div>