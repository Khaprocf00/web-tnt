<?php 

    $des_dangky = $func->OneDataDes('des-dangky',"array");

    $bg_dangky = $func->OneDataPhoto("",'bg-dangky','limit 0,1',"array");

?>
<section class="section--register" <?=$func->getBackground($bg_dangky)?>>
    <div class="grid wide">
        <div class="row">
            <div class="col l-12 m-12 c-12">
                <div class="res--box--register">
                    <div class="d-flex justify-content-between align-items-center flex-wrap">
                        <div class="col l-3 m-5 c-12">
                            <div class="res--title--register">
                                <span><?=$des_dangky["ten"]?></span>
                            </div>
                            <div class="res--desc--register mt20">
                                <?=htmlspecialchars_decode($des_dangky["mota"])?>
                            </div>
                        </div>
                        <div class="col l-8 m-7 c-12">
                            <div class="form__group">
                                <div class="res--grid--template gap15">
                                    <div class="res--span--5 res--sm--12">
                                        <div class="form__input mb15">
                                            <input type="text" class="input" name="fullname" value=""
                                                placeholder="Nhập họ và tên">
                                        </div>
                                        <div class="form__input">
                                            <input type="text" class="input" name="phone" value=""
                                                placeholder="Số điện thoại">
                                        </div>
                                    </div>
                                    <div class="res--span--5 res--sm--12">
                                        <div class="form__input">
                                            <textarea class="area input" name="content"
                                                placeholder="Nhập nội dung"></textarea>
                                        </div>
                                    </div>
                                    <div class="res--span--2 res--sm--12 d-flex align-items-center">
                                        <div class="form__input c-12">
                                            <button id="submit_register" class="btn--primary btn--register">
                                                <span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="15"
                                                        viewBox="0 0 14 15" fill="none">
                                                        <g clip-path="url(#clip0_83_21)">
                                                            <path
                                                                d="M12.6019 7.49976V13.4998H1.40189V1.49976H7.00189V-0.000244141H0.00189209V14.9998H14.0019V7.49976H12.6019Z"
                                                                fill="white" />
                                                            <path
                                                                d="M8.40114 -0.000244141L10.4171 2.15976L6.44861 6.41176L8.01661 8.09176L11.9851 3.83976L14.0011 5.99976V-0.000244141H8.40114Z"
                                                                fill="white" />
                                                        </g>
                                                        <defs>
                                                            <clipPath id="clip0_83_21">
                                                                <rect width="14" height="15" fill="white" />
                                                            </clipPath>
                                                        </defs>
                                                    </svg>
                                                </span>
                                                <span>
                                                    Nhận báo giá
                                                </span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>