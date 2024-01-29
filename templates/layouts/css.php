<?php if (!$func->isGoogleSpeed()) { ?>

    <link rel="stylesheet" href="./assets/plugins/fontawesome/css/all.min.css">

<?php } ?>

<?php

$css->setCache("cached");

if (!$func->isGoogleSpeed()) {

    $css->setCss("./assets/css/all.css");

    $css->setCss("./assets/css/fonts.css");

    $css->setCss("./assets/css/normalize.css");
}

$css->setCss("./assets/css/jssor.css");

$css->setCss("./assets/css/reset.css");

$css->setCss("./assets/plugins/wow/animate.css");

$css->setCss("./assets/css/keyframes.css");

$css->setCss("./assets/css/tools.css");

$css->setCss("./assets/css/detail.css");

$css->setCss("./assets/css/base.css");

$css->setCss("./assets/css/style.css");

$css->setCss("./assets/css/res.css");

$css->setCss("./assets/css/popup.css");

$css->setCss("./assets/css/grid.css?v=" . filemtime("./assets/css/grid.css"));

$css->setCss("./assets/css/index.css?v=" . filemtime("./assets/css/index.css"));

$css->setCss("./assets/css/responsive.css?v=" . filemtime("./assets/css/responsive.css"));

echo $css->getCss();

?>

<style>
    <?php if (!$func->isGoogleSpeed()) {
    ?>@font-face {

        font-family: 'Inter-Regular';

        src: url('assets/fonts/Inter/Inter-Regular.ttf') format('truetype');

    }

    @font-face {

        font-family: 'Inter-Black';

        src: url('assets/fonts/Inter/Inter-Black.ttf') format('truetype');

    }

    @font-face {

        font-family: 'Inter-Bold';

        src: url('assets/fonts/Inter/Inter-Bold.ttf') format('truetype');

    }

    @font-face {

        font-family: 'Inter-Light';

        src: url('assets/fonts/Inter/Inter-Light.ttf') format('truetype');

    }

    @font-face {

        font-family: 'Inter-Medium';

        src: url('assets/fonts/Inter/Inter-Medium.ttf') format('truetype');

    }

    @font-face {

        font-family: 'Inter-Semibold';

        src: url('assets/fonts/Inter/Inter-SemiBold.ttf') format('truetype');

    }


    <?php
    }

    ?>:root {

        --html-bg-website: <?= $row_setting['color_page'] ?>;

        --html-cl-website: <?= $row_setting['color_text'] ?>;

        --html-sc-website: <?= $row_setting['color_secondary'] ?>;

        --color-star: #FEAC2B;

        --inter-rg: 'Inter-Regular';

        --inter-black: 'Inter-Black';

        --inter-bold: 'Inter-Bold';

        --inter-light: 'Inter-Light';

        --inter-medium: 'Inter-Medium';

        --inter-semibold: 'Inter-Semibold';
    }
</style>