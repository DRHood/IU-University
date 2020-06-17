<!DOCTYPE html>
<html>
<head>
    <?php wp_head(); ?>
</head>
<body>
    <header class="site-header">
        <div class="container">
            <h1 class= "logo-text float-left"><a href="<?php echo site_url() ?>"><strong>Intoxi</strong>University</a></h1>
            
            <div class="site-header_menu">
                <nav class="main-navigation">
                    <ul>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Programs</a></li>
                        <li><a href="#">Events</a></li>
                        <li><a href="#">Blog</a></li>
                    </ul>
                </nav>
                <div class="site-header__util">
                    <a href="btn btn--small">Login</a>
                    <a href="btn btn--small">Sign Up</a>
                </div>
            </div>
        </div>
    </header>