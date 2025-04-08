<footer id="footer">
        <ul class="sns">
            <li>
                <a href="<?php echo esc_url("https://www.instagram.com/"); ?>" target="_blank">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/img/instagram-w.png'); ?>" alt="">
                </a>
            </li>
            <li>
                <a href="<?php echo esc_url("https://www.x.com/"); ?>" target="_blank">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/img/x-w.png'); ?>" alt="">
                </a>
            </li>
            <li>
                <a href="<?php echo esc_url( home_url() ); ?>" target="_blank">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/img/onlineshop-w.png'); ?>" alt="">
                </a>
            </li>
        </ul>
        <p class="copyright">© sauna nagoya</p>
    </footer>
    <?php wp_footer(); ?>
</body>

</html>
