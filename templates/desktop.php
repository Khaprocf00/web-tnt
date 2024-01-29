<!DOCTYPE html>

<html lang="<?= $lang ?>" itemscope itemtype="http://schema.org/WebSite">

<head>

    <?php include _source . 'meta.php' ?>

    <?php include _layouts . "css.php"; ?>

    <?php if (!$func->isGoogleSpeed()) { ?>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Nunito:ital,wght@0,200;0,400;0,500;0,600;0,700;0,800;0,900;0,1000;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900;1,1000&family=Roboto:wght@500&display=swap" rel="stylesheet">
    <?php } ?>

    <script src="assets/js/all.js"></script>
    <script src="./assets/plugins/lightgallery/dist/lightgallery.min.js"></script>
</head>

<body itemscope itemtype="https://schema.org/WebPage">

    <?php if (!$func->isGoogleSpeed()) { ?>

        <?= $row_setting["code_body"] ?>

    <?php } ?>

    <?php include _layouts . "seo.php"; ?>

    <div id="bg" class="p-relative" style="padding-top: 90px;">

        <!-- <?php include_once _layouts . "topmobile.php"; ?> -->

        <?php include_once _layouts . "header.php"; ?>


        <?php if ($source == 'index') { ?>

            <?php include _layouts . "slider_full.php"; ?>

            <?php include _layouts . "main_home.php"; ?>

        <?php } ?>

        <?php if ($com != 'carts' && $template != 'products/product_detail') { ?>

            <?php if ($source != 'index') { ?>

                <div class="d-none-m">

                    <div class="grid wide">

                        <div class="row">

                            <div class="col l-12 m-12 c-12">

                                <div class="breadcumb mt30">

                                    <?= $str_breadcrumbs ?>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            <?php } ?>

        <?php }
        ?>

        <?php include _template . $template . "_tpl.php"; ?>
        <?php include _layouts . "sectionCall.php"; ?>


        <?php include _layouts . "popup_form.php"; ?>
        <?php include _layouts . "footer.php"; ?>



    </div>

    <script>
        $(function() {

            $('img').each(function() {
                var alter = $(this).attr('alt');
                if (alter == "" || alter == null || alter == undefined) {
                    $(this).attr('alt', "<?= $row_setting["name_$lang"] ?>");
                }
            });

        })
    </script>


    <?php include _layouts . "js.php"; ?>

</body>

</html>