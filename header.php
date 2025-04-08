<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>sauna nagoya</title>
    <meta name="description" content="テキストテキストテキストテキストテキストテキストテキストテキス">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex" />
    <?php wp_head(); ?>
</head>
<body>
    <div class="loading">
        <p class="loading-text">Loading...</p>
        <div class="spinner"></div>
    </div>

    <header id="header">
        <h1 class="site-title">
            <a href="<?php echo esc_url( home_url() ); ?>">
                <img src="<?php echo esc_url( get_template_directory_uri() . '/img/logo-b.png'); ?>" alt="">
            </a>
        </h1>

        <ul class="header-menu">
            <li><a href="#about">SAUNA NAGOYAとは</a></li>
            <li><a href="#facility">設備紹介</a></li>
            <li><a href="#price">料金</a></li>
            <li><a href="#information">営業情報</a></li>
        </ul>

        <ul class="sns">
            <li>
                <a href="<?php echo esc_url("https://www.instagram.com/"); ?>" target="_blank">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/img/instagram-b.png'); ?>" alt="">
                </a>
            </li>
            <li>
                <a href="<?php echo esc_url("https://www.x.com/"); ?>" target="_blank">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/img/x-b.png'); ?>" alt="">
                </a>
            </li>
            <li>
                <a href="<?php echo esc_url( home_url() ); ?>" target="_blank">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/img/onlineshop-b.png'); ?>" alt="">
                </a>
            </li>
        </ul>

        <nav id="nav">
            <h1 class="site-title">
                <a href="index.html">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/img/logo-w.png'); ?>" alt="">
                </a>
            </h1>
            <ul class="nav-menu">
                <li><a href="#about">SAUNA NAGOYAとは</a></li>
                <li><a href="#facility">設備紹介</a></li>
                <li><a href="#price">料金</a></li>
                <li><a href="#information">営業情報</a></li>
            </ul>
              <ul class="nav-sns">
                <li>
                    <a href="https://www.instagram.com/" target="_blank">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/img/instagram-w.png'); ?>" alt="">
                    </a>
                </li>
                <li>
                    <a href="https://www.x.com/" target="_blank">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/img/x-w.png'); ?>" alt="">
                    </a>
                </li>
                <li>
                    <a href="index.html" target="_blank">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/img/onlineshop-w.png'); ?>" alt="">
                    </a>
                </li>
              </ul>
        </nav>

        <div class="toggle_btn">
            <span></span>
            <span></span>
            <span></span>
        </div>

        <div id="mask"></div>

    </header>
