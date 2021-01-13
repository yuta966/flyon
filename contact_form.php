<?php

session_start();

$err = $_SESSION;

$_SESSION = array();
session_destroy();

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <title>ふらいおん</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kosugi+Maru&family=Noto+Sans+JP:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
</head>

<body>
    <header>
        <i class="material-icons hamburger">reorder</i>
        <a class="scroll-btn logo" href="#top"><img class="logo" src="image/flyon_top_logo.png"></a>

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

        <div class="menu">
            <ul>
                <li><a href="index.php">トップへ</a></li>
                <li><a class="left" href="contact_form.php">お問い合わせ</a></li>
            </ul>
        </div>
    </header>

    <main>
        <div id="contact-form" class="contact-form">
            <h2><img class="flyon_logo" src="image/flyon_logo.png" alt="">お問い合わせ</h2>
            <form method="post" action="send_email.php">
                <p>お名前</p>
                <?php if (isset($err['name'])) : ?>
                    <p class="err"><?php echo $err['name']?></p>
                <?php endif ; ?>
                <input type="text" name="name">
                <p>メールアドレス</p>
                <?php if (isset($err['email'])) : ?>
                    <p class="err"><?php echo $err['email']?></p>
                <?php endif ; ?>
                <input type="text" name="email">
                <p>お問い合わせ内容</p>
                <?php if (isset($err['text'])) : ?>
                    <p class="err"><?php echo $err['text']?></p>
                <?php endif ; ?>
                <textarea name="text" rows="15" cols="40"></textarea><br>
                <input type="submit" value="送信する">
            </form>
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
