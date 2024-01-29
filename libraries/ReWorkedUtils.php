<?php
class ReWorkedUtils
{
    public function removeHtmlComments($content = '')
    {
        return $this->Minify_Html(preg_replace('/<!--(.|\s)*?-->/', '', $content));
    }

    public function formatMoney($num, $currency = "")
    {
        return number_format($num, 0, '.', ',') . $currency;
    }

    public function slug($s)
    {
        $str = trim(strtolower($s));
        $str = preg_replace('/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/', 'a', $str);
        $str = preg_replace('/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/', 'e', $str);
        $str = preg_replace('/(ì|í|ị|ỉ|ĩ)/', 'i', $str);
        $str = preg_replace('/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/', 'o', $str);
        $str = preg_replace('/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/', 'u', $str);
        $str = preg_replace('/(ỳ|ý|ỵ|ỷ|ỹ)/', 'y', $str);
        $str = preg_replace('/(đ)/', 'd', $str);
        $str = preg_replace('/[^a-z0-9-\s]/', '', $str);
        $str = preg_replace('/([\s]+)/', '-', $str);
        return $str;
    }

    static function Minify_Html($Html)
    {

        $Search = array(

            '/(\n|^)(\x20+|\t)/',

            '/(\n|^)\/\/(.*?)(\n|$)/',

            '/\n/',

            '/\<\!--.*?-->/',

            '/(\x20+|\t)/',

            '/\>\s+\</',

            '/(\"|\')\s+\>/',

            '/=\s+(\"|\')/'

        );

        $Replace = array(

            "\n",

            "\n",

            " ",

            "",

            " ",

            "><",

            "$1>",

            "=$1"

        );

        $Html = preg_replace($Search, $Replace, $Html);

        return $Html;
    }
}
