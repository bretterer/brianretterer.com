<?php
/**
 * Displays top navigation
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>
<!--<ul class="navbar-nav ml-auto">-->
<!--    <li class="nav-item">-->
<!--        <a href="#header" data-value="header" class="active-nav">-->
<!--            <i class="manisa-home" hidden></i>-->
<!--            <span class="name-menu">Home</span>-->
<!--        </a>-->
<!--    </li>-->
<!--    <li class="nav-item">-->
<!--        <a href="#about" data-value="about">-->
<!--            <i class="manisa-male-user" hidden></i>-->
<!--            <span class="name-menu">About</span>-->
<!--        </a>-->
<!--    </li>-->
<!--    <li class="nav-item">-->
<!--        <a href="#serv" data-value="serv">-->
<!--            <i class="manisa-layers" hidden></i>-->
<!--            <span class="name-menu">Services</span>-->
<!--        </a>-->
<!--    </li>-->
<!--    <li class="nav-item">-->
<!--        <a href="#portfolio" data-value="portfolio">-->
<!--            <i class="manisa-picture" hidden></i>-->
<!--            <span class="name-menu">Portfolio</span>-->
<!--        </a>-->
<!--    </li>-->
<!--    <li class="nav-item">-->
<!--        <a href="#blog" data-value="blog">-->
<!--            <i class="manisa-note" hidden></i>-->
<!--            <span class="name-menu">Blog</span>-->
<!--        </a>-->
<!--    </li>-->
<!--    <li class="nav-item">-->
<!--        <a href="#contact" data-value="contact">-->
<!--            <i class="manisa-envelope" hidden></i>-->
<!--            <span class="name-menu">Contact</span>-->
<!--        </a>-->
<!--    </li>-->
<!--    <li class="nav-item collapse-menu" hidden>-->
<!--        <span class="collapse-icon closed-menu"></span>-->
<!--        <span class="collapse-name">Collapse Menu</span>-->
<!--    </li>-->
<!--</ul>-->

<?php wp_nav_menu( array(
    'theme_location' => 'main',
    'menu_id'        => 'main-menu',
) ); ?>

