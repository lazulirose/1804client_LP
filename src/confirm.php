<?php
mb_language('ja');
mb_internal_encoding("UTF-8");

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $tel = $_POST["tel"];
        $contact  = $_POST["contact"];
    }

    if (isset($_POST["submit"])) {
    $header = null;
	$auto_reply_subject = null;
	$auto_reply_text = null;
    $admin_reply_subject = null;
	$admin_reply_text = null;
	date_default_timezone_set('Asia/Tokyo');
    	// ヘッダー情報を設定
	$header = "MIME-Version: 1.0\n";
	$header .= "From: KOKOKARA <lily9rin@gmail.com>\n";
	$header .= "Reply-To: KOKOKARA <lily9rin@gmail.com>\n";

	// 申し込み者用件名
	$auto_reply_subject = 'お問い合わせありがとうございます。';

	// 申し込み者用本文
	$auto_reply_text = "この度は、お問い合わせ頂き誠にありがとうございます。下記の内容でお問い合わせを受け付けました。\n\n";
	$auto_reply_text .= "お問い合わせ日時：" . date("Y-m-d H:i") . "\n";
	$auto_reply_text .= "氏名：" . $_POST['name'] . "\n";
	$auto_reply_text .= "メールアドレス：" . $_POST['email'] . "\n\n";
	$auto_reply_text .= "電話番号：" . $_POST['tel'] . "\n\n";

	$auto_reply_text .= "お問い合わせ内容：" . nl2br($_POST['contact']) . "\n\n";
	$auto_reply_text .= "KOKOKARA 事務局";

	// メール送信
	mb_send_mail( $_POST['email'], $auto_reply_subject, $auto_reply_text, $header);
    // 運営用メール件名
	$admin_reply_subject = "お問い合わせを受け付けました";

	// 運営用本文
	$admin_reply_text = "下記の内容でお問い合わせがありました。\n\n";
	$admin_reply_text .= "お問い合わせ日時：" . date("Y-m-d H:i") . "\n";
	$admin_reply_text .= "氏名：" . $_POST['name'] . "\n";
	$admin_reply_text .= "メールアドレス：" . $_POST['email'] . "\n\n";
    $auto_reply_text .= "電話番号：" . $_POST['tel'] . "\n\n";

	$admin_reply_text .= "お問い合わせ内容：" . nl2br($_POST['contact']) . "\n\n";
	mb_send_mail( 'lily9rin@gmail.com', $admin_reply_subject, $admin_reply_text, $header);

        header("Location: ./thanks.php");
        exit;
    }
?>
    <html lang="ja">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="format-detection" content="telephone=no">
        <title>お問い合わせ内容の確認｜KOKOKARA</title>
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body>
        <div id="confirm">
            <header class="l-header hradder-scrolled" id="is-scrolled">
                <nav class="c-nav">
                    <h1 class="c-nav__logo">
                        <a href="./"><svg class="logo" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 245.82 37.31"><defs><style>.cls-1{fill:#fff;}</style></defs><title>kokokara-logo</title><path class="cls-1" d="M7.5,20.92,5.14,24.46V36.64H0V.67H5.14V16.29L7.5,12.08,14.7.67h6.06L10.48,16.34l11.77,20.3h-6Z"/><path class="cls-1" d="M31,25.23V12.08C31,4.57,35.1,0,42,0S53,4.57,53,12.08V25.23c0,7.51-4.11,12.08-11,12.08S31,32.74,31,25.23Zm16.65,0V12.08c0-4.53-2-7-5.65-7s-5.65,2.46-5.65,7V25.23c0,4.52,1.9,7,5.65,7S47.64,29.75,47.64,25.23Z"/><path class="cls-1" d="M72.83,20.92l-2.37,3.54V36.64H65.32V.67h5.14V16.29l2.37-4.21L80,.67h6.07L75.81,16.34l11.77,20.3h-6Z"/><path class="cls-1" d="M96.31,25.23V12.08c0-7.51,4.12-12.08,11-12.08s11,4.57,11,12.08V25.23c0,7.51-4.11,12.08-11,12.08S96.31,32.74,96.31,25.23Zm16.66,0V12.08c0-4.53-2-7-5.66-7s-5.65,2.46-5.65,7V25.23c0,4.52,1.9,7,5.65,7S113,29.75,113,25.23Z"/><path class="cls-1" d="M138.15,20.92l-2.36,3.54V36.64h-5.14V.67h5.14V16.29l2.36-4.21L145.35.67h6.06L141.13,16.34l11.77,20.3h-6Z"/><path class="cls-1" d="M176,29.4h-9.51l-1.64,7.24h-5.45l9-36h5.61l9,36h-5.4ZM175,24.56l-2.26-9.66c-.52-2.36-1.08-5.8-1.34-7.71h-.15c-.26,1.91-.77,5.35-1.34,7.71l-2.21,9.66Z"/><path class="cls-1" d="M201.73,23.59h-3.24V36.64H193.3V.67h9.3c6.89,0,10.79,4.11,10.79,11.25,0,5.6-2.36,9.46-6.47,11l7.81,13.77H209Zm-3.24-4.94h4c3.65,0,5.55-2.36,5.55-6.62s-1.9-6.43-5.5-6.43h-4.06Z"/><path class="cls-1" d="M238.73,29.4h-9.51l-1.64,7.24h-5.45l9.05-36h5.6l9,36h-5.39Zm-1.08-4.84-2.26-9.66c-.51-2.36-1.08-5.8-1.34-7.71h-.15c-.26,1.91-.77,5.35-1.34,7.71l-2.21,9.66Z"/></svg></a>
                    </h1>
                    <div class="c-nav__toggle" id="is-menuclose">
                        <p class="menu__tag">MENU</p><button class="menu__button" onclick="navigationTrigger()"></button></div>
                    <div class="c-menu" id="is-open">
                        <ul class="c-menu__body">
                            <li>
                                <a class="menu__link" href="./#about"><span class="">ABOUT</span>KOKOKARAについて</a>
                            </li>
                            <li>
                                <a class="menu__link" href="./#contents"><span class="">CONTENTS</span>KOKOKARでできること</a>
                            </li>
                            <li>
                                <a class="menu__link" href="./#schedule"><span class="">SCHEDULE</span>スケジュール</a>
                            </li>
                            <li><a class="menu__entry" href="./#entry">ENTRY</a></li>
                        </ul>
                    </div>
                </nav>
            </header>
            <!-- /.l-header -->
            <main>
                <div class="l-entry" id="entry">
                    <h2 class="c-sectiontitel--sub">Entry</h2>
                    <div class="p-entryform">
                        <p class="p-entryform__text">以下の内容で間違いがなければ、<br class="sp-only">「送信する」ボタンを押してください。</p>
                        <form method="post" action="confirm.php">
                            <input type="hidden" name="name" value="<?php echo $name; ?>">
                            <input type="hidden" name="email" value="<?php echo $email; ?>">
                            <input type="hidden" name="tel" value="<?php echo $tel; ?>">
                            <input type="hidden" name="contact" value="<?php echo $contact; ?>">
                            <div class="element_wrap">
                                <label>お名前<span class="c-bach--entry">必須</span></label>
                                <p>
                                    <?php echo $name; ?>
                                </p>
                            </div>
                            <div class="element_wrap">
                                <label>メールアドレス<span class="c-bach--entry">必須</span></label>
                                <p>
                                    <?php echo $email; ?>
                                </p>
                            </div>
                            <div class="element_wrap">
                                <label>電話番号<span class="c-bach--entry">必須</span></label>
                                <p>
                                    <?php echo $tel; ?>
                                </p>
                            </div>
                            <div class="element_wrap">
                                <label>お問い合わせ内容</label>
                                <p>
                                    <?php echo $contact; ?>
                                </p>
                            </div>
                            <button type="submit" name="submit">送信する</button>
                        </form>
                    </div>
                </div>
                <!-- /.l-entry -->
            </main>
            <footer class="l-footer">
                <h1 class="p-footer__logo">
                    <a href="./">
                        <svg class="logo" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 245.82 37.31"><defs><style>.cls-1{fill:#fff;}</style></defs><title>kokokara-logo</title><path class="cls-1" d="M7.5,20.92,5.14,24.46V36.64H0V.67H5.14V16.29L7.5,12.08,14.7.67h6.06L10.48,16.34l11.77,20.3h-6Z"/><path class="cls-1" d="M31,25.23V12.08C31,4.57,35.1,0,42,0S53,4.57,53,12.08V25.23c0,7.51-4.11,12.08-11,12.08S31,32.74,31,25.23Zm16.65,0V12.08c0-4.53-2-7-5.65-7s-5.65,2.46-5.65,7V25.23c0,4.52,1.9,7,5.65,7S47.64,29.75,47.64,25.23Z"/><path class="cls-1" d="M72.83,20.92l-2.37,3.54V36.64H65.32V.67h5.14V16.29l2.37-4.21L80,.67h6.07L75.81,16.34l11.77,20.3h-6Z"/><path class="cls-1" d="M96.31,25.23V12.08c0-7.51,4.12-12.08,11-12.08s11,4.57,11,12.08V25.23c0,7.51-4.11,12.08-11,12.08S96.31,32.74,96.31,25.23Zm16.66,0V12.08c0-4.53-2-7-5.66-7s-5.65,2.46-5.65,7V25.23c0,4.52,1.9,7,5.65,7S113,29.75,113,25.23Z"/><path class="cls-1" d="M138.15,20.92l-2.36,3.54V36.64h-5.14V.67h5.14V16.29l2.36-4.21L145.35.67h6.06L141.13,16.34l11.77,20.3h-6Z"/><path class="cls-1" d="M176,29.4h-9.51l-1.64,7.24h-5.45l9-36h5.61l9,36h-5.4ZM175,24.56l-2.26-9.66c-.52-2.36-1.08-5.8-1.34-7.71h-.15c-.26,1.91-.77,5.35-1.34,7.71l-2.21,9.66Z"/><path class="cls-1" d="M201.73,23.59h-3.24V36.64H193.3V.67h9.3c6.89,0,10.79,4.11,10.79,11.25,0,5.6-2.36,9.46-6.47,11l7.81,13.77H209Zm-3.24-4.94h4c3.65,0,5.55-2.36,5.55-6.62s-1.9-6.43-5.5-6.43h-4.06Z"/><path class="cls-1" d="M238.73,29.4h-9.51l-1.64,7.24h-5.45l9.05-36h5.6l9,36h-5.39Zm-1.08-4.84-2.26-9.66c-.51-2.36-1.08-5.8-1.34-7.71h-.15c-.26,1.91-.77,5.35-1.34,7.71l-2.21,9.66Z"/></svg>
                    </a>
                </h1>
                <nav class="p-footer__nav">
                    <ul>
                        <li>
                            <a onclick="jumpToLinks()" href="#about">KOKOKARAについて</a>
                        </li>
                        <li>
                            <a onclick="jumpToLinks()" href="#contents">KOKOKARAでできること</a>
                        </li>
                        <li>
                            <a onclick="jumpToLinks()" href="#schedule">スケジュール</a>
                        </li>
                        <li>
                            <a onclick="jumpToLinks()" href="#entry">お申し込み</a>
                        </li>
                        <li>
                            <a onclick="jumpToLinks()" href="#">会社概要</a>
                        </li>
                    </ul>
                </nav>
                <small class="p-copyright">Copyright by KOKOKARA</small>
            </footer>
            <!-- /.l-footer -->
        </div>
    </body>

    </html>
