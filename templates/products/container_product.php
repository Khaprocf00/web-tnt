<div id="container-product">
    <div class="width">
        <h1> <span>

                <?php if ($seo->getSeo('h1') != "") { ?>
                <?= $seo->getSeo('h1') ?>
                <?php } else {
    echo $title_seo;
} ?>

            </span></h1>
        <ul>
            <?php
            foreach ($data as $k => $v) {
            ?>
            <li>
                <div class="d-flex flex-column justify-content-between">
                    <div class="image position-relative">
                        <a href=""><img src="assets/image/Rectangle 5666.png" alt=""></a>
                        <div class="date position-absolute d-flex flex-column justify-content-between">
                            <div class="day">26</div>
                            <div class="month">06</div>
                        </div>
                    </div>
                    <div class="content">
                        <a href="">khởi công xây dựng nhà phố hóc môn, thành phố hồ chí minh</a>
                        <p class="split split-3">Chúng ta đều đã quen thuộc với lối trang trí nội thất nhà
                            ở theo
                            tiêu chuẩn: tông
                            màu trung tính, kệ gỗ sẫm màu, sàn đổ bê tông và những bộ sofa thông thường.
                            Cách bố trí này Chúng ta đều đã quen thuộc với lối trang trí nội thất nhà ở theo
                            tiêu chuẩn: tông màu trung tính, kệ gỗ sẫm màu, sàn đổ bê tông và những bộ sofa
                            thông thường. Cách bố trí này Chúng ta đều đã quen thuộc với lối trang trí nội
                            thất nhà ở theo tiêu chuẩn: tông màu trung tính, kệ gỗ sẫm màu, sàn đổ bê tông
                            và những bộ sofa thông thường. Cách bố trí này</p>
                        <button>
                            Xem thêm
                        </button>
                    </div>
                </div>
            </li>


            <?php
            }
            ?>
        </ul>
    </div>

</div>