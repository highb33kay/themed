<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <?php wp_head(); ?>
    <!-- fevicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Raleway:400,700,800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

</head>

<body>
    <!-- header section start -->
    <div class="header_section header_bg">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <?php if (function_exists('the_custom_logo')) {
                $custom_logo_id = get_theme_mod('custom_logo');
                $logo = wp_get_attachment_image_src($custom_logo_id);
            } ?>
            <a href="index.html" class="logo"><img src="<?php echo $logo[0]; ?>"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                
            <?php wp_nav_menu([
                'menu' => 'primary',
                'container' => '',
                'theme_location' => 'primary',
                'items_wrap' => '<ul
                id="" class="navbar-nav mr-auto">%3$s</ul>',
            ]); ?>
                
                <!-- <form class="form-inline my-2 my-lg-0">
                    <div class="login_menu">
                        <ul>
                            <li><a href="#">Login</a></li>
                            <li><a href="#"><img src="images/trolly-icon.png"></a></li>
                            <li><a href="#"><img src="images/search-icon.png"></a></li>
                        </ul>
                    </div>
                    <div></div>
                </form> -->
            </div>
            <div id="main">
                <span style="font-size:36px;cursor:pointer; color: #fff" onclick="openNav()"><img
                        src="\theme\wp-content\themes\themed\assets\images\toggle-icon.png" style="height: 30px;"></span>
            </div>
        </nav>
     </div>
     </div>