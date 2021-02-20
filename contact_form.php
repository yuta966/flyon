<?php

session_start();

$err = $_SESSION;

$_SESSION = array();
session_destroy();

?>

<!DOCTYPE html>
<?php include("inc/header.php")?>

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
            <div class="container">
                <div class="title">
                    <h2><img class="flyon_logo" src="image/flyon_logo.png" alt="">お問い合わせ</h2>
                </div>
                <form method="post" action="send_email.php">
                    <div class="Form-item">
                        <div class="Form-item-Label">
                            <p>お名前：</p>
                            <?php if (isset($err['name'])) : ?>
                                <p class="err"><?php echo $err['name'] ?></p>
                            <?php endif ; ?>
                        </div>
                        <div class="Form-item-Input">
                            <input type="text" name="name">
                        </div>
                    </div>
                    <div class="Form-item">
                        <div class="Form-item-Label">
                            <p>メールアドレス：</p>
                            <?php if (isset($err['email'])) : ?>
                                <p class="err"><?php echo $err['email'] ?></p>
                            <?php endif ; ?>
                        </div>
                        <div class="Form-item-Input">
                            <input type="text" name="email">
                        </div>
                    </div>
                    <div class="Form-item">
                        <div class="Form-item-Label">
                            <p>お問い合わせ内容：</p>
                            <?php if (isset($err['text'])) : ?>
                                <p class="err"><?php echo $err['text'] ?></p>
                            <?php endif ; ?>
                        </div>
                        <div class="Form-item-Input">
                            <textarea name="text" style="margin-bottom: 10px;"></textarea>
                        </div>
                        <input class="submit" type="submit" value="送信する">
                    </div>
                </form>
            </div>
        </div>
    </main>

<?php include("inc/footer.php")?>

</body>
</html>
