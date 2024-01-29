<div class="res-popup-info-over opacity">
    <div class="res-popup-info-form" id="popup--form">
        <div class="res-popup-header-info">
            <span class="name-send">Đăng ký đặt hàng</span>
            <span class="close-send">
                <svg viewBox="0 0 16 16" width="15" stroke="#EE4D2D" class="home-popup__close-button">

                    <path stroke-linecap="round" d="M1.1,1.1L15.2,15.2"></path>

                    <path stroke-linecap="round" d="M15,1L0.9,15.1"></path>

                </svg>
            </span>
        </div>
        <div class="res-popup-content-info">
            <form method="post" id="frm_booking" name="frm_booking" action="">
                <input type="hidden" name="id_product" id="id_product" value="" />
                <div class="res--form--booking mb10">
                    <label>Họ tên (<span>*</span>)</label>
                    <input name="hoten" type="text" class="input" id="hoten" size="50" value=""
                        placeholder="Vui lòng nhập họ và tên....">
                    <p class="error-text cl-red"></p>
                </div>
                <div class="res--form--booking mb10">
                    <label>Email (<span>*</span>)</label>
                    <input name="email" type="text" class="input" id="email" size="50" value=""
                        placeholder="Vui lòng nhập địa chỉ email...">
                    <p class="error-text cl-red"></p>
                </div>
                <div class="res--form--booking mb10">
                    <label>Điện thoại (<span>*</span>)</label>
                    <input name="dienthoai" type="text" class="input" id="dienthoai" size="50" value=""
                        placeholder="Vui lòng nhập số điện thoại...">
                    <p class="error-text cl-red"></p>
                </div>

                <div class="res--form--booking mb10">
                <label>Sản phẩm chọn (<span>*</span>)</label>
                    <input name="product" type="text" class="input" readonly id="product" size="50" value=""
                        placeholder="Tên sản phẩm...">
                </div>
                <div class="res--form--booking">
                    <button type="button" class="res--btn--booking js--booking">Đặt hàng ngay</button>
                </div>
            </form>
        </div>
    </div>
</div>