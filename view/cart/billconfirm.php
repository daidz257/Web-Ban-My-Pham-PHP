                    <?php
                    if (isset($bill) && is_array($bill)) {
                        extract($bill);
                    }
                    ?>
                                <section class="shopping-checkout-wrap section-space">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <!--== Start Billing Accordion ==-->
                            <div class="checkout-billing-details-wrap">
                                <h2 class="title">THÔNG TIN ĐƠN HÀNG</h2>
                                <div class="billing-form-wrap">
                                    <form action="#" method="post">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="com_name">Mã đơn hàng</label>
                                                    <input id="com_name" type="text" class="form-control" value="<?= $bill['MaHoaDon'] ?>" readonly>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="com_name">Ngày đặt hàng</label>
                                                    <input id="com_name" type="text" class="form-control" value="<?= $bill['NgayHoaDon'] ?>" readonly>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="com_name">Tổng hóa đơn</label>
                                                    <input id="com_name" type="text" class="form-control" value="<?= $bill['TongTienHD'] ?>" readonly>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="com_name">Phương thức thanh toán</label>
                                                    <input id="com_name" type="text" class="form-control" value="<?= $bill['PhuongThucThanhToan'] ?>" readonly>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="checkout-billing-details-wrap">
                                <h2 class="title">THÔNG TIN ĐẶT HÀNG</h2>
                                <div class="billing-form-wrap">
                                    <form action="#" method="post">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="com_name">Người đặt hàng</label>
                                                    <input id="com_name" type="text" class="form-control" value="<?= $bill['TenNguoiDat'] ?>" readonly>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="com_name">Địa chỉ</label>
                                                    <input id="com_name" type="text" class="form-control" value="<?= $bill['DiaChiGH'] ?>" readonly>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="com_name">Email</label>
                                                    <input id="com_name" type="text" class="form-control" value="<?= $bill['EmailGH'] ?>" readonly>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="com_name">Số điện thoại</label>
                                                    <input id="com_name" type="text" class="form-control" value="<?= $bill['SoDienThoaiGH'] ?>" readonly>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group mb-0">
                                                    <label for="order-notes">Ghi chú</label>
                                                    <textarea id="order-notes" class="form-control" placeholder="Notes about your order, e.g. special notes for delivery." readonly></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!--== End Billing Accordion ==-->
                        </div>
                        <div class="col-lg-6">
                            <!--== Start Order Details Accordion ==-->
                            <div class="checkout-order-details-wrap">
                                <div class="order-details-table-wrap table-responsive">
                                    <h2 class="title mb-25">Your order</h2>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th class="product-name">Product</th>
                                                <th class="product-total">Total</th>
                                            </tr>
                                        </thead>
                                        <?php
                                                bill_chi_tiet($billct);
                                        ?>
                                    </table>
                                </div>
                            </div>
                            <!--== End Order Details Accordion ==-->
                        </div>
                    </div>
                    </div>
            </section>