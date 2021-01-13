<?php

session_start();

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>無料学習塾ふらいおん（公式HP）</title>
    <meta name="description" content="大阪市にある『無料学習塾ふらいおん』の公式ホームページです。">
    <meta name="keywords" content="無料学習塾,ふらいおん,flyon,学習塾,小学生,塾,くもん,公文,大阪市,天王寺区,生野区,寺田町,大阪教育大学,大学生,NPO,大阪,おおさか,学生,無料,つばめ学習塾,関西つばめ,八王子つばめ,無料塾舎利寺小学校,生野小学校,西生野小学校,林寺小学校,勝山小学校,東桃谷小学校,舎利寺小学校,生野小学校,西生野小学校,林寺小学校,勝山小学校,東桃谷小学校,大阪教育大学天王寺キャンパス,塾代助成事業,教師,教員,貧困,経済格差,是正,学生団体,学生,タダ,安い,子ども,子供">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kosugi+Maru&family=Noto+Sans+JP:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-QRRSP407PD"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-QRRSP407PD');
    </script>
</head>


<body>
    <header>
        <i class="material-icons hamburger">reorder</i>
        <a class="scroll-btn logo" href="#top"><img class="logo" src="image/flyon_top_logo.png"></a>

        <div class="advertiser-fadeOut">
            <h1>無料学習塾プロジェクト<br>ふらいおん</h1>
            <p>伸ばせる子どもへ、教育の翼を</p>
            <div id="advertiser" class="advertiser">
                <h2>ご支援いただいている皆様</h2>
            </div>
        </div>

        <div class="hamburger_list hide">
            <ul>
                <li><a href="index.php">トップへ</a></li>
                <li><a class="scroll-btn" href="#activities">私たちの活動</a></li>
                <li><a class="scroll-btn" href="#gallery">ギャラリー</a></li>
                <li><a class="scroll-btn" href="#access">アクセス</a></li>
                <li><a class="scroll-btn" href="#SNS">SNS</a></li>
                <li><a class="scroll-btn" href="#advertiser">ご支援いただいている皆様</a></li>
                <li><a class="scroll-btn" href="#announcement">連絡</a></li>
                <li><a class="scroll-btn" href="#calendar">活動日</a></li>
                <li><a href="contact_form.php">お問い合わせ</a></li>
            </ul>
        </div>

    </header>

    <main>
        <div class="menu">
            <ul>
                <li><a href="index.php">トップへ</a></li>
                <li id="right"><a href="contact_form.php">お問い合わせ</a></li>
            </ul>
        </div>

        <div id="top" class="top">
            <div class="top_slider">
                <ul class="top_slider slider">
                    <li><img src="image/top_slider1.jpg" alt=""></li>
                    <li><img src="image/top_slider2.jpg" alt=""></li>
                    <li><img src="image/top_slider3.jpg" alt=""></li>
                    <li><img src="image/top_slider4.jpg" alt=""></li>
                </ul>
            </div>
        </div>

        <div id="activities" class="activities">
            <h2><img class="flyon_logo" src="image/flyon_logo.png" alt="">私たちの活動</h2>
            <div class="text about">
                <small>
                    　私たちは<b>週に2~3回（水曜日・金曜日、不定期で土曜日）</b>、
                    大阪市の<b>JR寺田町駅近く</b>で無料学習塾を開いています。<br>
                    　活動時間は<b>午後2時から午後6時まで</b>で、<b>小学校全学年</b>を対象にしています。
                    学校の宿題から発展的な内容の学習まで、子どもの学力に合わせて幅広くサポートします！
                </small>
            </div>

            <ul class="content">
                <li class="text">
                    <h3>・なぜこのような活動を始めたのか?</h3>
                    <small>
                        　私たちは、大阪市内の小学校で授業補助スタッフとして学校に入ったり、放課後のいきいき活動では指導員としてお昼の時間帯に働いています。
                        それらを経験する中で、学校の授業に加えて放課後に子どもが学習する機会があれば、より子どもの力が伸びると考えるようになりました。
                        けれども、「様々な事情で学習塾に行けず、やりたい勉強ができない」、「ご家庭での子どもの学習へのサポートが不十分で、周りの子どもよりも勉強が遅れてしまった」という子どもを何人も見てきました。
                        そのような子どもたちのために、無料学習塾を開いて子どもの学習を私たちがサポートする必要があると感じたことが、この活動を始めた理由になります。
                    </small>
                </li>
                <li><img src="image/activities.jpg" alt=""></li>
            </ul>
        </div>

        <div id="gallery" class="gallery">
            <h2><img class="flyon_logo" src="image/flyon_logo.png" alt="">ギャラリー</h2>
            <div class="gallery_slider slider">
                <div><img src="image/image1.jpg" alt=""></div>
                <div><img src="image/image1.jpg" alt=""></div>
                <div><img src="image/image1.jpg" alt=""></div>
                <div><img src="image/image1.jpg" alt=""></div>
                <div><img src="image/image1.jpg" alt=""></div>
                <div><img src="image/image1.jpg" alt=""></div>
            </div>
        </div>

        <div id="access" class="access">
            <h2><img class="flyon_logo" src="image/flyon_logo.png" alt="">アクセス</h2>
            <ul class="content">
                <li class="text">
                    <h3>寺田町駅前校</h3>
                    <p>
                        〒543-0052<br>
                        大阪府大阪市天王寺区大道５丁目７ー４
                    </p>
                    <p>
                        最寄駅：寺田町駅［JR環状線］<br>
                        JR環状線　寺田町駅　徒歩１分<br>
                        JR環状線寺田町駅南口を出て右に曲がる。<br>
                        寿司屋の先の、ガラス張りのビル。
                        <a href="https://www.city.osaka.lg.jp/kensetsu/page/0000109375.html">駐輪場</a></p>
                </li>
                <li><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3282.281913618874!2d135.52025461523087!3d34.647582680448075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000dde3045039c9%3A0x46e8155fc0f8880d!2z44CSNTQzLTAwNTIg5aSn6Ziq5bqc5aSn6Ziq5biC5aSp546L5a-65Yy65aSn6YGT77yV5LiB55uu77yX4oiS77yU!5e0!3m2!1sja!2sjp!4v1604643242040!5m2!1sja!2sjp" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></li>
            </ul>
        </div>

        <div id="SNS" class="SNS">
            <h2><img class="flyon_logo" src="image/flyon_logo.png" alt="">SNS</h2>
            <p class="line">LINE</p>
            <img class="Line_QR" src="image/Line_QR.png" alt="">
            <p>YouTube</p>
            <iframe src="https://www.youtube.com/embed/gQfU6iYgbKo" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <p>Podcasts</p>
            <iframe class="Podcasts" frameborder="0" style="width:100%;max-width:660px;overflow:hidden;background:transparent;" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-storage-access-by-user-activation allow-top-navigation-by-user-activation" src="https://embed.podcasts.apple.com/us/podcast/%E6%95%99%E8%82%B2%E5%A4%A7%E7%94%9F%E3%81%AE%E3%81%A4%E3%81%B6%E3%82%84%E3%81%8D%E3%83%88%E3%83%BC%E3%83%BC%E3%82%AF/id1542363940"></iframe>
        </div>

        <div id="advertiser" class="advertiser">
            <h2><img class="flyon_logo" src="image/flyon_logo.png" alt="">ご支援いただいている皆様</h2>
        </div>

        <?php if($_SESSION['login'] == "login") : ?>
            <div id="announcement" class="announcement">
                <h2><img class="flyon_logo" src="image/flyon_logo.png" alt="">連絡</h2>
                <p>連絡内容</p>
            </div>
        <?php endif ; ?>

        <div id="calendar" class="calendar">
            <h2><img class="flyon_logo" src="image/flyon_logo.png" alt="">活動日</h2>
            <iframe src="https://calendar.google.com/calendar/embed?src=fldm2egbp57noi45rh5dsaf79k%40group.calendar.google.com&ctz=Asia%2FTokyo" style="border: 0" width="800" height="600" frameborder="0" scrolling="no"></iframe>        </div>
        </div>
    </main>

    <footer>
        <a href="index.php"><p>サイトマップ</p></a>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="script.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
</body>
</html>
