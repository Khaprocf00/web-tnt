<?php

$des_detail = $func->OneDataDes('des-detail', 'array');

?>

<div class="item col-3 d-none-m d-none-tablet">

    <div class="aside_sidebar-detail">

        <div class="header-sidebar">

            <span>HỖ TRỢ KHÁCH HÀNG</span>

        </div>

        <div class="header-sidebar--titlesmall t-center mt10">Yêu Cầu Gọi Lại</div>

        <div class="body-sidebar p-relative">

            <div class="box-under">

                <div class="des">

                    <?= htmlspecialchars_decode($des_detail["mota"]) ?>

                </div>

                <div class="letter-form mb30">

                    <input type="number" autocomplete="off" name="txt-phone-detail" class="input-txt txt-input-number" placeholder="Nhập số điện thoại" />

                    <button type="button" class="btn-newsletter call-back__detail mt15">Liên Hệ Với Chúng Tôi</button>

                </div>

                <div class="letter-form-chat">

                    <a href="https://zalo.me/<?= str_replace(' ', '', str_replace('.', '', $row_setting["sozalo"])) ?>" target="_blank" title="Chat zalo" rel="nofollow" role="link" class="letter-form-chat-message">Chat zalo</a>

                    <a href="tel:<?= str_replace(' ', '', str_replace('.', '', $row_setting["hotline"])) ?>" title="<?= $row_setting["hotline"] ?>" aria-lable="<?= $row_setting["hotline"] ?>" role="link" rel="nofollow"><?= $row_setting["hotline"] ?></a>

                </div>

            </div>


        </div>

    </div>

</div>