<?php get_header(); ?>
    <main id="main">
        <section id="fv">
            <h2 class="fv-title text-animation-trigger">
                <span class="text-animation-trigger-inner">
                    NAGOYAで味わう至福のひととき
                </span>
            </h2>
        </section>

        <section id="news" class="wrapper">
            <h2 class="sec-title">
                <div class="ja">お知らせ</div>
                <div class="en">News</div>
            </h2>
            <ul class="news-list">
                <li>
                    <a href="">
                        <div class="date">2025年2月1日</div>
                        <div href="" class="label">お知らせ</div>
                        <div class="title">3月の営業日について</div>    
                    </a>
                </li>
                <li>
                    <a href="">
                        <div class="date">2025年1月20日</div>
                        <div href="" class="label">イベント</div>
                        <div class="title">2月14日（金）有名熱波師によるイベント決定！！</div>    
                    </a>
                </li>
                <li>
                    <a href="">
                        <div class="date">2025年1月10日</div>
                        <div href="" class="label">お知らせ</div>
                        <div class="title">2月14日（金）新グッズの発売が決定！！</div>    
                    </a>
                </li>
                <li>
                    <a href="">
                        <div class="date">2025年1月10日</div>
                        <div href="" class="label">お知らせ</div>
                        <div class="title">2月2日（木）臨時休業のお知らせ</div>    
                    </a>
                </li>
            </ul>
            <a href="#" class="btn">MORE</a>
        </section>

        <section id="about" class="wrapper">
            <h2 class="sec-title">
                <div class="ja">SAUNA NAGOYAとは</div>
                <div class="en">About</div>
            </h2>

            <h3>
                サウナ激戦区の<span>名古屋</span>に<span><br>東海地区最大級</span>のサウナ施設OPEN!!
            </h3>
            <p>2024年9月、サウナ激戦区名古屋で東海地区最大級の「SAUNA NAGOYA」が誕生しました。
                1階には40名入浴可能な大型サウナ、水風呂、整いスペース、
                2階には10部屋の個室サウナと水風呂、整いスペースを有する2フロアにわたって楽しめるサウナ施設。
            </p>

            <ul class="slick-area">
                <li>
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/img/about1.jpg'); ?>" alt="">
                </li>
                <li>
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/img/about2.jpg'); ?>" alt="">
                </li>
                <li>
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/img/about3.jpg'); ?>" alt="">
                </li>
                <li>
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/img/about4.jpg'); ?>" alt="">
                </li>
            </ul>
        </section>

        <section id="facility" class="wrapper">
            <h2 class="sec-title">
                <div class="ja">設備紹介</div>
                <div class="en">Facility</div>
            </h2>
            <div class="container">
                <div class="explanation slide explanation-slide-left">
                    <h3 class="facility-title">
                        Loyly Sauna
                    </h3>
                    <p>最大40人以上が着席可能な東海地区最大のサウナ室。
                        サウナ室には、サウンド、照明、オートロウリュを完備。
                        サウンドと照明を用いたアウフグースショーも不定期にて開催します。
                    </p>    
                </div>
                <div class="image image-balloon">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/img/facility1.jpg'); ?>" alt="">
                </div>
            </div>
            <div class="private container">
                <div class="explanation slide explanation-slide-right">
                    <h3 class="facility-title">
                        Private Sauna
                    </h3>
                    <p>プライベートサウナは10部屋を用意。
                        1名様でのご利用はもちろん、最大4名様までのご利用が可能。
                        プライベートサウナでは、さまざまな香りのロウリュウをお楽しみいただけます。
                    </p>
                </div>
                <div class="image image-balloon">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/img/facility2.jpg'); ?>" alt="">
                </div>
            </div>
            <div class="water">
                <div class="explanation slide explanation-slide-bottom">
                    <h3 class="facility-title">
                        Water Bath
                    </h3>
                    <p>水風呂は2種類をご用意。</p>
                </div>
                <div class="container">
                    <div class="inner">
                        <div class="explanation slide explanation-slide-bottom">
                            <h4 class="water-title">
                                −涼−
                            </h4>
                            <p>22度設定の水風呂で初心者の方でも安心して入浴可能な水風呂です。</p>
                        </div>
                        <div class="image image-balloon">
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/img/facility3.jpg'); ?>" alt="">
                        </div>
                    </div>
                    <div class="inner">
                        <div class="explanation slide explanation-slide-bottom">
                            <h4 class="water-title">
                                −冷−
                            </h4>
                            <p>15度前後の水風呂でジェットバブルの泡が心地よい水風呂です。</p>
                        </div>
                        <div class="image image-balloon">
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/img/facility4.jpg'); ?>" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="rest">
                <div class="explanation slide explanation-slide-bottom">
                    <h3 class="facility-title">
                        Rest Space
                    </h3>
                    <p>整いスペースには60人以上が座れるスペースをご用意。<br>
                       また、カウンターでドリンクオーダーも可能です。
                       ポカリやデトックスウォーターなど多種ドリンクをご用意。
                    </p>
                </div>
                <div class="fade-img image-balloon">
                    <img class="image" src="<?php echo esc_url( get_template_directory_uri() . '/img/rest1.jpg'); ?>" alt="">
                    <img class="image" src="<?php echo esc_url( get_template_directory_uri() . '/img/rest2.jpg'); ?>" alt="">
                    <img class="image" src="<?php echo esc_url( get_template_directory_uri() . '/img/rest3.jpg'); ?>" alt="">
                </div>
            </div>
        </section>

        <section id="price" class="wrapper">
            <h2 class="sec-title">
                <div class="ja">料金</div>
                <div class="en">Price</div>
            </h2>
            <div class="container">
                <div class="bathing-title">
                    <h3>入浴料</h3>
                    <p>※税込料金</p>
                </div>
                <ul class="bathing-list">
                    <li class="weekdays">
                        <div class="title">一般入湯</div>
                        <div class="label">平日</div>
                        <div class="price">1,600円</div>
                    </li>
                    <li class="holiday">
                        <div class="title">&emsp;&emsp;&emsp;&emsp;</div>
                        <div class="label">休日</div>
                        <div class="price">2,000円</div>
                    </li>
                </ul>
            </div>
            <div class="container">
                <div class="drink-title">
                    <h3>お飲み物</h3>
                    <p>※税込料金</p>
                </div>
                <ul class="drink-list">
                    <li>
                        <div class="title">オロポ</div>
                        <div class="price">500円</div>    
                    </li>
                    <li>
                        <div class="title">レモンスカッシュ</div>
                        <div class="price">500円</div>
                    </li>
                    <li>
                        <div class="title">レモネード</div>
                        <div class="price">500円</div>    
                    </li>
                    <li>
                        <div class="title">ポカリスエット</div>
                        <div class="price">300円</div>
                    </li>
                    <li>
                        <div class="title">デトックスウォーター</div>
                        <div class="price">300円</div>
                    </li>
                </ul>
            </div>
        </section>

        <section id="information" class="wrapper">
            <h2 class="sec-title">
                <div class="ja">営業情報</div>
                <div class="en">Information</div>
            </h2>
            <dl class="information-list">
                <dt class="title">営業時間</dt>
                <dd class="content">10:00〜24:00</dd>
                <dt class="title">電話番号</dt>
                <dd class="content">052-XXXX-XXXX</dd>
                <dt class="title">住所</dt>
                <dd class="content">〒460-XXXX&nbsp;&nbsp;<br>愛知県名古屋市中区栄X-X-X</dd>
                <dt class="title">駐車場</dt>
                <dd class="content">ご来店の際、ご利用駐車場の駐車券をご提示ください。</dd>
                <dt class="title">支払い方法</dt>
                <dd class="content">現金・各種クレジットカード・電子決済</dd>
            </dl>
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26093.365242310203!2d136.89028673120131!3d35.16483360649603!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x600370cfa5b2e875%3A0xa07b528628e6dae!2z5oSb55-l55yM5ZCN5Y-k5bGL5biC5Lit5Yy6!5e0!3m2!1sja!2sjp!4v1740310573872!5m2!1sja!2sjp" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </section>
    </main>
    <div class="go-top">
        <a href="#">TOP</a>
    </div>
<?php get_footer(); ?>

