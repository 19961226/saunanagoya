<?php
// cssの読み込み
add_action('wp_enqueue_scripts', 'add_styles');
function add_styles()
{
    // google fonts
    wp_register_style(
        'google-fonts_style',
        'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&display=swap',
        array(),
        '1.0'
    );

    // reset styleを登録
    wp_register_style(
        'reset_style',
        'https://unpkg.com/ress/dist/ress.min.css',
        array(),
        '1.0'
    );

    // slick.min.cssを登録
    wp_register_style(
        'slick.min.css',
        'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css',
        array(),
        '1.0'
    );

    // slick-theme.cssを登録
    wp_register_style(
        'slick-theme.css',
        'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css',
        array(),
        '1.0'
    );

    // main.cssを最後に実行
    wp_enqueue_style(
        'main_style',
        get_template_directory_uri() . '/css/main.css',
        array('reset_style', 'slick.min.css', 'slick-theme.css'),
        '1.0'
    );
}

// jsの読み込み
add_action('wp_enqueue_scripts', 'add_scripts');
function add_scripts() {
  // デフォルトのjQueryを削除
  wp_deregister_script('jquery');

  // jQueryを読み込む
  wp_register_script(
    'jquery_script',
    'https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js',
    array(),
    '1.0',
    true
  );

      //slick.min.jsを登録
      wp_register_script(
        'slick-script',
        'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js',
        array(),
        '1.0',
        true
    );

  // メインのスクリプトを読み込む
  wp_enqueue_script(
    'main_script',
    get_template_directory_uri() . '/js/main.js',
    array('jquery_script', 'slick-script'),
    '1.0',
    true
  );
}
?>

