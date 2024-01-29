<style>
.switcher {
    font-family: Arial;
    font-size: 12pt;
    text-align: left;
    cursor: pointer;
    width: 100%;
    line-height: 17px;
}

.switcher a {
    text-decoration: none;
    display: block;
    font-size: 10pt;
    -webkit-box-sizing: content-box;
    -moz-box-sizing: content-box;
    box-sizing: content-box;
}

.switcher a img {
    vertical-align: middle;
    display: inline;
    border: 0;
    padding: 0;
    margin: 0;
    opacity: 0.8;
    width: 24px;
}

.switcher a:hover img {
    opacity: 1;
}

.multilang .switcher .option {
    position: absolute !important;
}

.switcher .selected {
    position: relative;
    z-index: 9999;
}

.switcher .selected a {
    color: #fff;
    padding: 3px 5px;
    display: flex;
    align-items: center;
    gap: 10px
}

/*.switcher .selected a:after {height:24px;display:inline-block;position:absolute;right:10px;width:15px;background-position:50%;background-size:11px;background-image:url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' viewBox='0 0 285 285'><path d='M282 76.5l-14.2-14.3a9 9 0 0 0-13.1 0L142.5 174.4 30.3 62.2a9 9 0 0 0-13.2 0L3 76.5a9 9 0 0 0 0 13.1l133 133a9 9 0 0 0 13.1 0l133-133a9 9 0 0 0 0-13z' style='fill:%23666'/></svg>");background-repeat:no-repeat;content:""!important;transition:all .2s;}

*/
/*.switcher .selected a.open:after {-webkit-transform: rotate(-180deg);transform:rotate(-180deg);}*/

.switcher .option {

    position: relative;
    z-index: 9998;
    background-color: #fff;
    width: 100%;
    max-height: 198px;
    -webkit-box-sizing: content-box;
    -moz-box-sizing: content-box;
    box-sizing: content-box;
    overflow-y: auto;
    overflow-x: hidden;
    visibility: hidden;
    opacity: 0;
    transition: all 0.1s;
    box-shadow: 2px 2px 7px #ccc;

}

.switcher .option a {
    background: transparent;
    color: #525252;
    padding: 3px 5px;
}

/* 
.switcher .option a:hover {background-color: rgba(242,242,242,0.3);} */

/* .switcher .option a.selected {background:#fff;} */

#selected_lang_name {
    float: none;
}

.l_name {
    float: none !important;
    margin: 0;
}

/* .switcher .option::-webkit-scrollbar-track{-webkit-box-shadow:inset 0 0 3px rgba(0,0,0,0.3);border-radius:5px;background-color:#f5f5f5;}

.switcher .option::-webkit-scrollbar {width:5px;}

.switcher .option::-webkit-scrollbar-thumb {border-radius:5px;-webkit-box-shadow: inset 0 0 3px rgba(0,0,0,.3);background-color:#888;} */

.selected {
    transition: all 0.1s;
}

.selected:hover .option {
    visibility: visible;
    opacity: 1;
}

.selected:hover {
    background: transparent;
    border-top-left-radius: 0.5rem;
    border-top-right-radius: 0.5rem;
    border-bottom-left-radius: 0rem;
    border-bottom-right-radius: 0rem;
}

/* .selected:hover .flag-main{
  color:#000;
} */
.flag-main>i {
    transition: all 0.1s;
}

.selected:hover .flag-main>i {
    transform: rotate(180deg);
}
</style>

<div class="multilang res--border-lang">

    <div class="switcher notranslate">

        <div class="selected">

            <a href="javascript:void(0)" class="flag-main" onclick="return false;"><img
                    src="./assets/images/language/flag_vi.png" height="30" width="24" alt="Vn" /> Vn <i
                    class="fa-regular fa-chevron-down"></i></a>

            <div class="option">
                <a href="javascript:void(0)" onclick="let HtmlCurrent2 = $(this).html() + `<i class='fa-regular fa-chevron-down'></i>`;
                doGTranslate('vi|vi');$('div.switcher div.selected a.flag-main').html(HtmlCurrent2);
                  return false;" title="Vietnamese" class="nturl selected">
                    <img data-gt-lazy-src="./assets/images/language/flag_vi.png"
                        src="./assets/images/language/flag_vi.png" height="30" width="24" alt="Vn" /> Vn
                </a>

                <a href="javascript:void(0)" onclick="let HtmlCurrent2 = $(this).html() + `<i class='fa-regular fa-chevron-down'></i>`;
                doGTranslate('vi|en');$('div.switcher div.selected a.flag-main').html(HtmlCurrent2);
                  return false;" title="Vietnamese" class="nturl selected">
                    <img data-gt-lazy-src="./assets/images/language/flag_en.png"
                        src="./assets/images/language/flag_en.png" height="30" width="24" alt="En" /> En
                </a>
                <a href="javascript:void(0)" onclick="let HtmlCurrent = $(this).html() + `<i class='fa-regular fa-chevron-down'></i>`;
                doGTranslate('vi|zh-CN');
                $('div.switcher div.selected a.flag-main').html(HtmlCurrent);console.log($(this).html());
                  return false;" title="Cn" class="nturl" class="flag-change">
                    <img data-gt-lazy-src="./assets/images/language/flag_cn.png"
                        src="./assets/images/language/flag_cn.png" height="30" width="24" alt="en" /> CN
                </a>
                <a href="javascript:void(0)" onclick="let HtmlCurrent = $(this).html() + `<i class='fa-regular fa-chevron-down'></i>`;
                doGTranslate('vi|ko');
                $('div.switcher div.selected a.flag-main').html(HtmlCurrent);console.log($(this).html());
                  return false;" title="English" class="nturl" class="flag-change">
                    <img data-gt-lazy-src="./assets/images/language/flag_ko.png"
                        src="./assets/images/language/flag_ko.png" height="30" width="24" alt="Ko" /> Ko
                </a>
                <a href="javascript:void(0)" onclick="let HtmlCurrent = $(this).html() + `<i class='fa-regular fa-chevron-down'></i>`;
                doGTranslate('vi|ja');
                $('div.switcher div.selected a.flag-main').html(HtmlCurrent);console.log($(this).html());
                  return false;" title="English" class="nturl" class="flag-change">
                    <img data-gt-lazy-src="./assets/images/language/flag_ja.png"
                        src="./assets/images/language/flag_ja.png" height="30" width="24" alt="en" /> Ja
                </a>
            </div>

        </div>

    </div>

    <script>
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({
            pageLanguage: 'vi',
            autoDisplay: false
        }, 'google_translate_element2');
    }
    </script>

    <script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

    <script>
    $('.switcher .selected').click(function() {
        $('.switcher .option a.flag-change img').each(function() {

            if (!$(this)[0].hasAttribute('src')) $(this).attr('src', $(this).attr('data-gt-lazy-src'))
        });

        if (!($('.switcher .option').is(':visible'))) {

            $('.switcher .option').stop(true, true).delay(100).slideDown(500);

        }
    });

    // if(!($('.switcher .option').is(':visible'))) {
    //   $('.switcher .option').stop(true,true).delay(100).slideDown(500);
    //   $('.switcher .selected a').toggleClass('open')
    // }});

    $('.switcher .option').bind('mousewheel', function(e) {
        var options = $('.switcher .option');
        if (options.is(':visible')) options.scrollTop(options.scrollTop() - e.originalEvent.wheelDelta);
        return false;
    });

    // $('body').not('.switcher').click(function(e) {if($('.switcher .option').is(':visible') && e.target != $('.switcher .option').get(0)) {$('.switcher .option').stop(true,true).delay(100).slideUp(500);$('.switcher .selected a').toggleClass('open')}});

    function GTranslateGetCurrentLang() {

        var keyValue = document['cookie'].match('(^|;) ?googtrans=([^;]*)(;|$)');
        return keyValue ? keyValue[2].split('/')[2] : null;

    }

    function GTranslateFireEvent(element, event) {
        try {
            if (document.createEventObject) {
                var evt = document.createEventObject();
                element.fireEvent('on' + event, evt)
            } else {
                var evt = document.createEvent('HTMLEvents');
                evt.initEvent(event, true, true);
                element.dispatchEvent(evt)
            }
        } catch (e) {}
    }

    function doGTranslate(lang_pair) {

        if (lang_pair.value) lang_pair = lang_pair.value;
        if (lang_pair == '') return;
        var lang = lang_pair.split('|')[1];
        if (GTranslateGetCurrentLang() == null && lang == lang_pair.split('|')[0]) return;
        var teCombo;
        var sel = document.getElementsByTagName('select');
        for (var i = 0; i < sel.length; i++)
            if (sel[i].className.indexOf('goog-te-combo') != -1) {
                teCombo = sel[i];
                break;
            }
        if (document.getElementById('google_translate_element2') == null || document.getElementById(
                'google_translate_element2').innerHTML.length == 0 || teCombo.length == 0 || teCombo.innerHTML.length ==
            0) {
            setTimeout(function() {
                doGTranslate(lang_pair)
            }, 500)
        } else {
            teCombo.value = lang;
            GTranslateFireEvent(teCombo, 'change');
            GTranslateFireEvent(teCombo, 'change')
        }

    }

    if (GTranslateGetCurrentLang() != null) $(document).ready(function() {
        var lang_html = $('div.switcher div.option').find('img[alt="' + GTranslateGetCurrentLang() + '"]')
            .parent().html();
        if (typeof lang_html != 'undefined') $('div.switcher div.selected a.flag-main').html(lang_html.replace(
            'data-gt-lazy-', '') + `<i class='fa-regular fa-chevron-down'></i>`);
    });
    </script>

    <style>
    #goog-gt-tt {
        display: none !important;
    }

    .goog-te-banner-frame {
        display: none !important;
    }

    .goog-te-menu-value:hover {
        text-decoration: none !important;
    }

    .goog-text-highlight {
        background-color: transparent !important;
        box-shadow: none !important;
    }

    body {
        top: 0 !important;
    }

    #google_translate_element2 {
        display: none !important;
    }
    </style>

    <div id="google_translate_element2"></div>

</div>