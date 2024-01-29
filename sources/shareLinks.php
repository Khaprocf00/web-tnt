<style>
.socialmediaicons .fa:hover { color: white; opacity: 0.8; }
.socialmediaicons .fa {padding: 10px;font-size: 17px;width: 100%;text-align: center;text-decoration: none;margin: 5px 2px;}
.socialmediaicons2 .fa { padding: 20px; font-size: 30px; width: 100%; border-radius: 50%; text-decoration: none; margin: 5px 2px; }
.socialmediaicons .fa-facebook { background: #3B5998; color: white; }
.socialmediaicons .fa-twitter { background: #55ACEE; color: white; }
.socialmediaicons .fa-google { background: #dd4b39; color: white; }
.socialmediaicons .fa-linkedin { background: #007bb5; color: white; }
.socialmediaicons .fa-youtube { background: #bb0000; color: white; }
.socialmediaicons .fa-instagram { background: #125688; color: white; }
.socialmediaicons .fa-pinterest { background: #cb2027; color: white; }
.socialmediaicons .fa-snapchat-ghost { background: #fffc00; color: white; text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black; }
.socialmediaicons .fa-skype { background: #00aff0; color: white; }
.socialmediaicons .fa-android { background: #a4c639; color: white; }
.socialmediaicons .fa-dribbble { background: #ea4c89; color: white; }
.socialmediaicons .fa-vimeo { background: #45bbff; color: white; }
.socialmediaicons .fa-tumblr { background: #2c4762; color: white; }
.socialmediaicons .fa-vine { background: #00b489; color: white; }
.socialmediaicons .fa-foursquare { background: #45bbff; color: white; }
.socialmediaicons .fa-stumbleupon { background: #eb4924; color: white; }
.socialmediaicons .fa-flickr { background: #f40083; color: white; }
.socialmediaicons .fa-yahoo { background: #430297; color: white; }
.socialmediaicons .fa-soundcloud { background: #ff5500; color: white; }
.socialmediaicons .fa-reddit { background: #ff5700; color: white; }
.socialmediaicons .fa-rss { background: #ff6600; color: white; }
.socialmediaicons .fa-envelope { background: #777777; color: white; }
.socialmediaicons .fa-print { background: #67c700; color: white; }
</style>
<div style="display:flex;width: 100%;margin-bottom: 10px;margin-top:10px;">
    <script type="text/javascript">
    var addthis_config = {
        "data_track_addressbar": true
    };
    </script>
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-51d3c996345f1d03"
        async="async"></script>
    <script type="text/javascript">
    var addthis_config = {
        data_track_clickback: false,
    }
    var addthis_share = {
        templates: {
            twitter: "{{title}} {{url}} via @YourTwitterName"
        }
    }
    </script>
    <div class="zalo-share-button" data-href="<?=$func->getCurrentPageURL()?>" data-oaid="579745863508352884"
        data-layout="1" data-color="blue" data-customize=false></div>&nbsp;
    <script src="https://sp.zalo.me/plugins/sdk.js"></script>
    <script>
    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) {
            return;
        }
        js = d.createElement(s);
        js.id = id;
        js.onload = function() {};
        js.src = "https://sp.zalo.me/plugins/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'zalo-jssdk'));
    </script>
    <div class="addthis_native_toolbox"></div>
</div>
<div class="socialmediaicons d-flex align-items-center t-center">
    <a href="https://twitter.com/share?url=<?=$func->getCurrentPageURL()?>" target="_blank" rel="nofollow"
        class="fa fa-twitter"></a>
    <a href="https://www.facebook.com/sharer.php?u=<?=$func->getCurrentPageURL()?>" target="_blank" rel="nofollow"
        class="fa fa-facebook"></a>
    <a href="https://www.linkedin.com/shareArticle?mini=true&amp;url=<?=$func->getCurrentPageURL()?>" target="_blank"
        rel="nofollow" class="fa fa-linkedin"></a>
    <a href="mailto:?Subject=<?=$row_detail['email']?> <?=$func->getCurrentPageURL()?>" rel="nofollow"
        class="fa fa-envelope"></a>
    <a href="javascript:;" onclick="window.print()" rel="nofollow" class="fa fa-print"></a>
</div>