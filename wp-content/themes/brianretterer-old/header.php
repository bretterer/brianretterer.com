<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
    <!-- meta Data -->
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>
<nav class="navbar fixed-top navbar-expand-lg navbar-light">

    <div class="container">
        <a href="<?php echo home_url(); ?>">
            <span class="bg_logo"><?php bloginfo('title'); ?></span>
            <!-- You Can Edit the image on main.css file just search ( bg_logo ) -->
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <div class="menu">
                <span class="line1"></span>
                <span class="line2"></span>
                <span class="line3"></span>
            </div>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="#header" data-value="header" class="active-nav">
                        <i class="manisa-home" hidden></i>
                        <span class="name-menu">Home</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="nav-toggle">
    <div class="menu">
        <span class="line1"></span>
        <span class="line2"></span>
        <span class="line3"></span>
    </div>
</div>
