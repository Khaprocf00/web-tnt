<?php

class layouts
{

    public function __construct()
    {
    }

    public function getLayoutProduct($args = array(), $seoHeading, $column = "res--span--4 res--sm--5")
    {

        global $func, $lang;
        $html = "";
        if (is_array($args)) {
            foreach ($args as $k => $v) {
                $list_icon = $func->getListOne("ten_$lang as ten,icon", $v['id_list']);
                $hrefImage = $func->getHrefImg($v);
                $url = $func->getUrl($v);
                $name = $func->getNameLang($v);
                $icon_list = _upload_baiviet_l . $list_icon['icon'];
                $name_list = $func->getNameLang($list_icon);
                $id = $v['id'];
                $day = date('d', $v['ngaytao']);
                $month = date('m', $v['ngaytao']);
                $year = date('Y', $v['ngaytao']);
                $seoH = $func->getHrefHeading($v, $seoHeading);
                $html .= "
                    <div class='{$column}'>
                        <div class='res--item__modifier bg-white'>
                            <div class='res--thumb__product o-hidden p-relative'>
                                {$hrefImage}
                               <div id='container-product'>
                               <div class='date p-absolute d-flex flex-column justify-content-between'>
                               <div class='day'>{$day}</div>
                               <div class='month'>{$month}</div>
                           </div>
                               </div>
                         
                            </div>
                            <div class='res--desc__product pd10'  >
                                <div class='res--name__product pb5 ' style='height:50px;'>
                                    {$seoH}
                                </div>
                                <div class='line-3 section-news__box-detail-des' style='margin-top:20px;'>" . htmlspecialchars_decode($v['mota_vi']) . "</div>
                                <div class='res--popup__modifier pt15 mb10'>
                                    <a class='d-flex align-items-center justify-content-center gap10 js--popup' href='$url' data-id='$id'
                                        data-package='{$name}' title='{$name}' aria-lable='{$name}' role='link' rel='dofollow'>
                                        <span>Xem thêm</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    ";
            }
        }

        return $html;
    }

    public function getLoadMore($total, $options = array(), $title = "sản phẩm")
    {

        global $row_setting;

        $html = "";

        if ($total > 0) {
            $per_page = $row_setting['page_in'];
            $idl = $options['idl'];
            $idc = $options['idc'];
            $type = $options['type'];
            $page = $options['page'];
            $html .= "
<a href='javascript:void(0)' data-idl='{$idl}' data-idc='{$idc}' data-type='{$type}' data-page='$page'
    data-item='{$per_page}' class='res--view--load js--load' title='Xem thêm'>
    <span class='d-flex'>
        <svg xmlns='http://www.w3.org/2000/svg' width='14' height='13' viewBox='0 0 14 13' fill='none'>
            <g clip-path='url(#clip0_0_900)'>
                <path
                    d='M12.2381 6.31349V11.1948H1.66182V1.43213H6.94995V0.211792H0.339783V12.4152H13.5601V6.31349H12.2381Z'
                    fill='white' />
                <path
                    d='M8.27116 0.211792L10.1749 1.96908L6.42737 5.42833L7.90805 6.79511L11.6556 3.33586L13.5593 5.09315V0.211792H8.27116Z'
                    fill='white' />
            </g>
            <defs>
                <clipPath id='clip0_0_900'>
                    <rect width='13.2203' height='12.2034' fill='white' transform='translate(0.337891 0.211914)' />
                </clipPath>
            </defs>
        </svg>
    </span>
    <span>
        Hiển thị thêm <span>{$total}</span> {$title}
    </span>
</a>
";
        }

        return $html;
    }

    public function getLoadMoreInPage($total, $per_page, $page, $title)
    {
        $html = '';

        if ($total > 0) {

            $html .= "<a class='box_see-more see_more_product_text view__load view__more__page btn-view-index'
    data-item='{$per_page}' data-page='{$page}'>
    Xem thêm ({$total}) {$title} <i class='fa-light fa-chevrons-down ml5'></i>
</a>";
        }

        return $html;
    }
}
