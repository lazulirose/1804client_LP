<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <title>KOKOKARA</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <meta content="" property="og:title">
    <meta content="" property="og:description">
    <meta content="" property="og:image">
    <meta content="" property="og:url">
    <meta content="" property="og:type">
    <meta content="ja_JP" property="og:locale">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div id="index">
        <header class="l-header" id="is-scrolled">
            <nav class="c-nav">
                <h1 class="c-nav__logo">
                    <a href="#index">
                        <svg class="logo" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 245.82 37.31"><defs><style>.cls-1{fill:#fff;}</style></defs><title>kokokara-logo</title><path class="cls-1" d="M7.5,20.92,5.14,24.46V36.64H0V.67H5.14V16.29L7.5,12.08,14.7.67h6.06L10.48,16.34l11.77,20.3h-6Z"/><path class="cls-1" d="M31,25.23V12.08C31,4.57,35.1,0,42,0S53,4.57,53,12.08V25.23c0,7.51-4.11,12.08-11,12.08S31,32.74,31,25.23Zm16.65,0V12.08c0-4.53-2-7-5.65-7s-5.65,2.46-5.65,7V25.23c0,4.52,1.9,7,5.65,7S47.64,29.75,47.64,25.23Z"/><path class="cls-1" d="M72.83,20.92l-2.37,3.54V36.64H65.32V.67h5.14V16.29l2.37-4.21L80,.67h6.07L75.81,16.34l11.77,20.3h-6Z"/><path class="cls-1" d="M96.31,25.23V12.08c0-7.51,4.12-12.08,11-12.08s11,4.57,11,12.08V25.23c0,7.51-4.11,12.08-11,12.08S96.31,32.74,96.31,25.23Zm16.66,0V12.08c0-4.53-2-7-5.66-7s-5.65,2.46-5.65,7V25.23c0,4.52,1.9,7,5.65,7S113,29.75,113,25.23Z"/><path class="cls-1" d="M138.15,20.92l-2.36,3.54V36.64h-5.14V.67h5.14V16.29l2.36-4.21L145.35.67h6.06L141.13,16.34l11.77,20.3h-6Z"/><path class="cls-1" d="M176,29.4h-9.51l-1.64,7.24h-5.45l9-36h5.61l9,36h-5.4ZM175,24.56l-2.26-9.66c-.52-2.36-1.08-5.8-1.34-7.71h-.15c-.26,1.91-.77,5.35-1.34,7.71l-2.21,9.66Z"/><path class="cls-1" d="M201.73,23.59h-3.24V36.64H193.3V.67h9.3c6.89,0,10.79,4.11,10.79,11.25,0,5.6-2.36,9.46-6.47,11l7.81,13.77H209Zm-3.24-4.94h4c3.65,0,5.55-2.36,5.55-6.62s-1.9-6.43-5.5-6.43h-4.06Z"/><path class="cls-1" d="M238.73,29.4h-9.51l-1.64,7.24h-5.45l9.05-36h5.6l9,36h-5.39Zm-1.08-4.84-2.26-9.66c-.51-2.36-1.08-5.8-1.34-7.71h-.15c-.26,1.91-.77,5.35-1.34,7.71l-2.21,9.66Z"/></svg>
                    </a>
                </h1>
                <div class="c-nav__toggle" id="is-menuclose">
                    <p class="menu__tag">MENU</p><button class="menu__button" onclick="navigationTrigger()"></button></div>
                <div class="c-menu" id="is-open">
                    <ul class="c-menu__body">
                        <li>
                            <a class="menu__link" onclick="jumpToLinks()" href="#about"><span class="">ABOUT</span>KOKOKARAについて</a>
                        </li>
                        <li>
                            <a class="menu__link" onclick="jumpToLinks()" href="#contents"><span class="">CONTENTS</span>KOKOKARAでできること</a>
                        </li>
                        <li>
                            <a class="menu__link" onclick="jumpToLinks()" href="#schedule"><span class="">SCHEDULE</span>スケジュール</a>
                        </li>
                        <li><a class="menu__entry" onclick="jumpToLinks()" href="#entry">ENTRY</a></li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- /.l-header -->
        <main>

            <div id="loader" class="l-loading">

                <div id="loader-text" class="p-loading tagline">
                    <img src="./images/tagline-black.png" alt="人生はココカラ始まる">
                </div>
            </div>
            <div class="l-keyviasual">
                <div class="p-keyviasual">
                    <video class="p-keyviasual__bg" id="js-autoplay" poster="./images/firstview-bg.gif" preload="none" autoplay loop muted playsinline>
                    <source src="./images/firstview-bg.mp4">
                </video>
                </div>
                <div class="p-keyviasual__tagline">
                    <img src="./images/tagline.png" alt="人生はココカラ始まる">
                </div>
                <p class="p-keyviasual__text">18歳〜26歳(関西在住・非大卒)限定<br>「変わりたい」を実現する、半年インターン<br class="sp-only">「KOKOKARA（ココカラ）」</p>
                <div class="p-keyviasual__scroll">
                    <p class="p-keyviasual__scroll__text">SCROLL DOWN</p>
                    <svg class="p-keyviasual__scroll__arrow" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1000 1000" enable-background="new 0 0 1000 1000" xml:space="preserve"><g><path d="M887.2,209.2L499.7,589.1L112.8,209.7L10,310.5l489.7,480.3L990,310L887.2,209.2z"/></g></svg>
                </div>
            </div>
            <div class="l-about" id="about">
                <h2 class="c-sectiontitel is-show">About</h2>
                <p class="c-sectiontext is-show">KOKOKARAについて</p>
                <div class="p-about">
                    <img class="p-about__viasual is-show" src="./images/about.png" alt="KOKOKARAについて、Aboutイメージ">
                    <div class="p-about__body is-show">
                        <p class="p-about__body__copy"><span>自分を見つける</span><br><span>半年集中型、社会人インターン</span></p>
                        <p class="p-about__body__text">“漠然と今の自分を変えたい”、”こういう風になりたい”と思っていても何から始めれば良いのか、どうしたら良いのかわからない18歳〜26歳の社会人が自分がなりたい像を見つけ、実現する力と新たな環境へステップアップするための、半年集中型、社会人インターンです。</p>
                    </div>
                </div>
            </div>
            <!-- /.l-about -->
            <div class="l-contents" id="contents">
                <h2 class="c-sectiontitel is-show">Contents</h2>
                <p class="c-sectiontext is-show">KOKOKARAでできること</p>
                <div class="p-contents__cards">
                    <div class="c-card is-show">
                        <span class="c-bach">FEATURE</span>
                        <img class="c-card__media" src="./images/contents-1.jpg" alt="半年間給料ありで学べる">
                        <div class="c-card__body">
                            <p class="c-card__body--copy"><span>半年間</span><br><span>給与ありで</span><br><span>学べる</span></p>
                            <p class="c-card__text">成果報酬型の営業実務を通してお金を稼ぎながら成長と半年後のネクストアップを見つけられます。</p>
                        </div>
                    </div>
                    <div class="c-card is-show">
                        <span class="c-bach">FEATURE</span>
                        <img class="c-card__media" src="./images/contents-2.jpg" alt="各業界のメンター・講師の存在">
                        <div class="c-card__body">
                            <p class="c-card__body--copy"><span>各業界の</span><br><span>メンター・</span><br><span>講師の存在</span></p>
                            <p class="c-card__text">起業家、活躍している社会人、フリーランス、旅人etcジャンルが違うメンターからのサポートがあります。ロールモデルから直接話を聞ける体験は貴重です。</p>
                        </div>
                    </div>
                    <div class="c-card is-show">
                        <span class="c-bach">FEATURE</span>
                        <img class="c-card__media" src="./images/contents-3.jpg" alt="定期的なキャリア面談">
                        <div class="c-card__body">
                            <p class="c-card__body--copy"><span>定期的な</span><br><span>キャリア</span><br><span>面談</span></p>
                            <p class="c-card__text">半年終了後のネクストステップをメンターと共に考える時間です。希望の業界への就職（転職）、海外留学、企業etc 未来を共に描きます。</p>
                        </div>
                    </div>
                    <div class="c-card is-show">
                        <span class="c-bach">FEATURE</span>
                        <img class="c-card__media" src="./images/contents-4.jpg" alt="実務・研修での成果">
                        <div class="c-card__body">
                            <p class="c-card__body--copy">
                                <span>実務・</span><br><span>研修での</span><br><span>成果</span></p>
                            <p class="c-card__text">日々の営業実績・各種研修を行うことで思考力・コミュニケーション能力etc　様々なスキルが身につきます。</p>
                        </div>
                    </div>
                    <div class="c-card is-show">
                        <span class="c-bach">FEATURE</span>
                        <img class="c-card__media" src="./images/contents-5.jpg" alt="人生レベルの仲間ができる">
                        <div class="c-card__body">
                            <p class="c-card__body--copy">
                                <span>人生レベルの</span><br><span>仲間が</span><br><span>できる</span>
                            </p>
                            <p class="c-card__text">同世代・近い価値観の仲間と出会い、切磋琢磨することで、人生レベルの仲間ができます。共に高め合う同志との出会いがあります。</p>
                        </div>
                    </div>
                    <div class="c-card is-show">
                        <span class="c-bach">FEATURE</span>
                        <img class="c-card__media" src="./images/contents-6.jpg" alt="半年終了後の奨学金">
                        <div class="c-card__body">
                            <p class="c-card__body--copy">
                                <span>半年</span><br><span>終了後の</span><br><span>奨学金</span></p>
                            <p class="c-card__text">半年終了後に、ネクストステップ（転職、留学、企業etc）に移る際、半年間の成果に応じて新たなチャレンジを応援する奨学金を支給します。（数万〜数十万）</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.l-contents -->
            <div class="l-schedule" id="schedule">
                <div class="p-bg--blur">
                    <h2 class="c-sectiontitel is-show">Schedule</h2>
                    <p class="c-sectiontext is-show">参加から卒業後までのスケジュール</p>
                </div>
                <div class="p-schedule__cards">
                    <div class="c-card is-show">
                        <img class="c-card__media" src="./images/schedule-1.jpg" alt="面談">
                        <div class="c-card__body">
                            <span class="c-bach">STEP1</span>
                            <h3 class="c-card__title">面談</h3>
                            <input id="1" type="checkbox">
                            <div class="contains">
                                <p class="c-card__text">エントリーフォームからご応募いただけましたら担当者より連絡させていただきます。ご希望の日程にて調整していただいたのちに面談を実施させていただきます。現状の課題や将来どうなりたいのか？など人生経験豊富な面談担当者に今ご自身がもつ思いをお伝えくださいませ。入学後に何を学び、どういったキャリアを形成していくのかを一緒に考える時間としてご活用ください。</p>
                            </div>
                            <label class="c-card__arrow" for="1"></label>
                        </div>
                    </div>
                    <div class="c-card is-show">
                        <img class="c-card__media" src="./images/schedule-2.jpg" alt="入学（キャリア設計）">
                        <div class="c-card__body">
                            <span class="c-bach">STEP2</span>
                            <h3 class="c-card__title">入学（キャリア設計）</h3>
                            <input id="2" type="checkbox">
                            <div class="contains">
                                <p class="c-card__text">参加が決まりましたら、研修日などを調整させていただきます。 シェアハウスにての生活をご希望の方は面接時にお伝えください。シェアハウス利用有無は各参加者の思いに合わせて、決めていただけるスタイルをとっております。その他もご希望がありましたらお伝えください。
                                </p>
                            </div>
                            <label class="c-card__arrow" for="2"></label>
                        </div>
                    </div>
                    <div class="c-card is-show">
                        <img class="c-card__media" src="./images/schedule-3.jpg" alt="様々な価値観に触れる">
                        <div class="c-card__body">
                            <span class="c-bach">STEP3</span>
                            <h3 class="c-card__title">様々な価値観に触れる</h3>
                            <input id="3" type="checkbox">
                            <div class="contains">
                                <p class="c-card__text">事業を通して自らの適性のある仕事やポジション、意欲的に取り組める仕事やポジションを把握。所属することで密に関わる多くの同僚・講師・経営者層と時間を過ごす中、キャンペーンなどを通して触れる新たな価値観によって形成される自らの価値観を元に月に一度のキャリア面談などを通して、それぞれが目指したいキャリアビジョン形成を把握します。</p>
                            </div>
                            <label class="c-card__arrow" for="3"></label>
                        </div>
                    </div>
                    <div class="c-card is-show">
                        <img class="c-card__media" src="./images/schedule-4.jpg" alt="望んだキャリアで実績を残す方法を学ぶ">
                        <div class="c-card__body">
                            <span class="c-bach">STEP4</span>
                            <h3 class="c-card__title">望んだキャリアで実績を残す方法を学ぶ</h3>
                            <input id="4" type="checkbox">
                            <div class="contains">
                                <p class="c-card__text">どのキャリアを選んでもサポートさせていただきますが、どのキャリアを選んだとしても望んだライフスタイル・ワークスタイルを実現させるためには仕事は切っても切り離せない関係にあります。ここでは商材選定から、提案、契約後のフォローまで、リアルなビジネスを実体験することで、高いビシネススキルを学ぶことができます。セールス、マネジメント、人事を通して倫理的思考やコミュニケーション能力などのビジネススキルを包括的に習得することで、どの進路に進んでも十分な実績が積める環境を日々創り続けています。</p>
                            </div>
                            <label class="c-card__arrow" for="4"></label>
                        </div>
                    </div>
                    <div class="c-card is-show">
                        <img class="c-card__media" src="./images/schedule-5.jpg" alt="卒業（キャリア選択）">
                        <div class="c-card__body">
                            <span class="c-bach">STEP5</span>
                            <h3 class="c-card__title">卒業（キャリア選択）</h3>
                            <input id="5" type="checkbox">
                            <div class="contains">
                                <p class="c-card__text">6ヶ月のインターンを終え、身についた経験をもとに、正社員として就職しても良し、進学しても良し、自分で会社を作っても良し。新しい環境への挑戦を徹底サポートします。 実務経験を通して身につけた実績を残せる実力、日々過ごす時間や面談を通して形成された確かなキャリアビジョンによって自らの意思でキャリアを選択し、自らの実力でそのキャリアを成功に導けるようなキャリアプログラムを設計しております。
                                </p>
                            </div>
                            <label class="c-card__arrow" for="5"></label>
                        </div>
                    </div>
                    <div class="c-card is-show">
                        <img class="c-card__media" src="./images/schedule-6.jpg" alt="奨学金制度">
                        <div class="c-card__body">
                            <span class="c-bach">STEP6</span>
                            <h3 class="c-card__title">奨学金制度</h3>
                            <input id="6" type="checkbox">
                            <div class="contains">
                                <p class="c-card__text">6ヶ月のインターン経験者の中から一定の基準をクリアした参加者が選んだキャリアの実現度合いを高めるために設けられた制度です。選択するキャリアにより支援内容・支援基準も異なります。6ヶ月間のインターンを終えた後も、奨学金水準をクリアするためにインターンを続けるも良し、6ヶ月のインターンの中でクリアして支援を受けるもよし。インターン生の「こうしたい」という意思の実現をサポートする制度です。</p>
                            </div>
                            <label class="c-card__arrow" for="6"></label>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.l-schedule -->
            <div class="l-member">
                <h3 class="c-sectiontitel is-show" id="member">Member</h3>
                <p class="c-sectiontext is-show">KOKOKARAで変わった第１期性の声</p>
                <div class="p-slideconter">
                    <div class="c-slider is-show">
                        <input type="radio" id="slide-1" name="slider" checked>
                        <input type="radio" id="slide-2" name="slider">
                        <input type="radio" id="slide-3" name="slider">
                        <input type="radio" id="slide-4" name="slider">
                        <input type="radio" id="slide-5" name="slider">
                        <div class="c-slider__slides">
                            <div class="overflow">
                                <div class="slides__inner">
                                    <div class="slides--sp">
                                        <div class="slide">
                                            <img class="p-slides__media" src="./images/slider-1.png" alt="">
                                            <div class="p-slides__body">
                                                <div class="p-slides__body--title">KOKOKARA 第1期卒業生</div>
                                                <div class="p-slides__body--name"><span>村川 昂功</span>MURAKAWA TAKANORI</div>
                                                <div class="p-slides__body--text">ここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入ります</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slides--sp">
                                        <div class="slide">
                                            <img class="p-slides__media" src="./images/slider-2.png" alt="">
                                            <div class="p-slides__body">
                                                <div class="p-slides__body--title">KOKOKARA 第1期卒業生</div>
                                                <div class="p-slides__body--name"><span>村川 昂功</span>MURAKAWA TAKANORI</div>
                                                <div class="p-slides__body--text">ここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入ります</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slides--sp">
                                        <div class="slide">
                                            <img class="p-slides__media" src="./images/slider-3.png" alt="">
                                            <div class="p-slides__body">
                                                <div class="p-slides__body--title">KOKOKARA 第1期卒業生</div>
                                                <div class="p-slides__body--name"><span>村川 昂功</span>MURAKAWA TAKANORI</div>
                                                <div class="p-slides__body--text">ここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入ります</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slides--sp">
                                        <div class="slide">
                                            <img class="p-slides__media" src="./images/slider-1.png" alt="">
                                            <div class="p-slides__body">
                                                <div class="p-slides__body--title">KOKOKARA 第1期卒業生</div>
                                                <div class="p-slides__body--name"><span>村川 昂功</span>MURAKAWA TAKANORI</div>
                                                <div class="p-slides__body--text">ここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入ります</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slides--sp">
                                        <div class="slide">
                                            <img class="p-slides__media" src="./images/slider-2.png" alt="">
                                            <div class="p-slides__body">
                                                <div class="p-slides__body--title">KOKOKARA 第1期卒業生</div>
                                                <div class="p-slides__body--name"><span>村川 昂功</span>MURAKAWA TAKANORI</div>
                                                <div class="p-slides__body--text">ここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入ります</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slides--pc">
                                        <div class="slide">
                                            <img class="p-slides__media" src="./images/slider-1.png" alt="">
                                            <div class="p-slides__body">
                                                <div class="p-slides__body--title">KOKOKARA 第1期卒業生</div>
                                                <div class="p-slides__body--name"><span>村川 昂功</span>MURAKAWA TAKANORI</div>
                                                <div class="p-slides__body--text">ここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入ります</div>
                                            </div>
                                        </div>
                                        <div class="slide">
                                            <img class="p-slides__media" src="./images/slider-2.png" alt="">
                                            <div class="p-slides__body">
                                                <div class="p-slides__body--title">KOKOKARA 第1期卒業生</div>
                                                <div class="p-slides__body--name"><span>村川 昂功</span>MURAKAWA TAKANORI</div>
                                                <div class="p-slides__body--text">ここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入ります</div>
                                            </div>
                                        </div>
                                        <div class="slide">
                                            <img class="p-slides__media" src="./images/slider-3.png" alt="">
                                            <div class="p-slides__body">
                                                <div class="p-slides__body--title">KOKOKARA 第1期卒業生</div>
                                                <div class="p-slides__body--name"><span>村川 昂功</span>MURAKAWA TAKANORI</div>
                                                <div class="p-slides__body--text">ここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入ります</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slides--pc">
                                        <div class="slide">
                                            <img class="p-slides__media" src="./images/slider-1.png" alt="">
                                            <div class="p-slides__body">
                                                <div class="p-slides__body--title">KOKOKARA 第1期卒業生</div>
                                                <div class="p-slides__body--name"><span>村川 昂功</span>MURAKAWA TAKANORI</div>
                                                <div class="p-slides__body--text">ここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入ります</div>
                                            </div>
                                        </div>
                                        <div class="slide">
                                            <img class="p-slides__media" src="./images/slider-2.png" alt="">
                                            <div class="p-slides__body">
                                                <div class="p-slides__body--title">KOKOKARA 第1期卒業生</div>
                                                <div class="p-slides__body--name"><span>村川 昂功</span>MURAKAWA TAKANORI</div>
                                                <div class="p-slides__body--text">ここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入ります</div>
                                            </div>
                                        </div>
                                        <div class="slide">
                                            <img class="p-slides__media" src="./images/slider-3.png" alt="">
                                            <div class="p-slides__body">
                                                <div class="p-slides__body--title">KOKOKARA 第1期卒業生</div>
                                                <div class="p-slides__body--name"><span>村川 昂功</span>MURAKAWA TAKANORI</div>
                                                <div class="p-slides__body--text">ここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入ります</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slides--pc">
                                        <div class="slide">
                                            <img class="p-slides__media" src="./images/slider-1.png" alt="">
                                            <div class="p-slides__body">
                                                <div class="p-slides__body--title">KOKOKARA 第1期卒業生</div>
                                                <div class="p-slides__body--name"><span>村川 昂功</span>MURAKAWA TAKANORI</div>
                                                <div class="p-slides__body--text">ここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入ります</div>
                                            </div>
                                        </div>
                                        <div class="slide">
                                            <img class="p-slides__media" src="./images/slider-2.png" alt="">
                                            <div class="p-slides__body">
                                                <div class="p-slides__body--title">KOKOKARA 第1期卒業生</div>
                                                <div class="p-slides__body--name"><span>村川 昂功</span>MURAKAWA TAKANORI</div>
                                                <div class="p-slides__body--text">ここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入ります</div>
                                            </div>
                                        </div>
                                        <div class="slide">
                                            <img class="p-slides__media" src="./images/slider-3.png" alt="">
                                            <div class="p-slides__body">
                                                <div class="p-slides__body--title">KOKOKARA 第1期卒業生</div>
                                                <div class="p-slides__body--name"><span>村川 昂功</span>MURAKAWA TAKANORI</div>
                                                <div class="p-slides__body--text">ここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入ります</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slides--pc">
                                        <div class="slide">
                                            <img class="p-slides__media" src="./images/slider-1.png" alt="">
                                            <div class="p-slides__body">
                                                <div class="p-slides__body--title">KOKOKARA 第1期卒業生</div>
                                                <div class="p-slides__body--name"><span>村川 昂功</span>MURAKAWA TAKANORI</div>
                                                <div class="p-slides__body--text">ここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入ります</div>
                                            </div>
                                        </div>
                                        <div class="slide">
                                            <img class="p-slides__media" src="./images/slider-2.png" alt="">
                                            <div class="p-slides__body">
                                                <div class="p-slides__body--title">KOKOKARA 第1期卒業生</div>
                                                <div class="p-slides__body--name"><span>村川 昂功</span>MURAKAWA TAKANORI</div>
                                                <div class="p-slides__body--text">ここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入ります</div>
                                            </div>
                                        </div>
                                        <div class="slide">
                                            <img class="p-slides__media" src="./images/slider-3.png" alt="">
                                            <div class="p-slides__body">
                                                <div class="p-slides__body--title">KOKOKARA 第1期卒業生</div>
                                                <div class="p-slides__body--name"><span>村川 昂功</span>MURAKAWA TAKANORI</div>
                                                <div class="p-slides__body--text">ここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入ります</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slides--pc">
                                        <div class="slide">
                                            <img class="p-slides__media" src="./images/slider-1.png" alt="">
                                            <div class="p-slides__body">
                                                <div class="p-slides__body--title">KOKOKARA 第1期卒業生</div>
                                                <div class="p-slides__body--name"><span>村川 昂功</span>MURAKAWA TAKANORI</div>
                                                <div class="p-slides__body--text">ここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入ります</div>
                                            </div>
                                        </div>
                                        <div class="slide">
                                            <img class="p-slides__media" src="./images/slider-2.png" alt="">
                                            <div class="p-slides__body">
                                                <div class="p-slides__body--title">KOKOKARA 第1期卒業生</div>
                                                <div class="p-slides__body--name"><span>村川 昂功</span>MURAKAWA TAKANORI</div>
                                                <div class="p-slides__body--text">ここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入ります</div>
                                            </div>
                                        </div>
                                        <div class="slide">
                                            <img class="p-slides__media" src="./images/slider-3.png" alt="">
                                            <div class="p-slides__body">
                                                <div class="p-slides__body--title">KOKOKARA 第1期卒業生</div>
                                                <div class="p-slides__body--name"><span>村川 昂功</span>MURAKAWA TAKANORI</div>
                                                <div class="p-slides__body--text">ここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入ります</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="c-slider__controls">
                            <label for="slide-1"></label>
                            <label for="slide-2"></label>
                            <label for="slide-3"></label>
                            <label for="slide-4"></label>
                            <label for="slide-5"></label>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.l-member -->
            <div class="l-ambassador">
                <h3 class="c-sectiontitel is-show">Ambassador</h3>
                <p class="c-sectiontext is-show">多様な生きる道で活躍する<br class="sp-only">推薦者（アンバサダー）の声</p>
                <div class="p-slideconter">
                    <div class="p-tab">
                        <input id="tab1" type="radio" name="tabs" checked>
                        <label class="p-tab__head is-show" for="tab1">起業家</label>
                        <input id="tab2" type="radio" name="tabs">
                        <label class="p-tab__head is-show" for="tab2">企業人</label>
                        <input id="tab3" type="radio" name="tabs">
                        <label class="p-tab__head is-show" for="tab3">フリーランス</label>
                        <section class="p-tab__content is-tabopen1">
                            <div class="c-slider is-show">
                                <input type="radio" id="slide1-1" name="slider2" checked>
                                <input type="radio" id="slide1-2" name="slider2">
                                <input type="radio" id="slide1-3" name="slider2">
                                <input type="radio" id="slide1-4" name="slider2">
                                <input type="radio" id="slide1-5" name="slider2">
                                <div class="c-slider__slides">
                                    <div class="overflow">
                                        <div class="slides__inner">
                                            <div class="slides--sp">
                                                <div class="slide">
                                                    <img class="p-slides__media" src="./images/slider-1.png" alt="">
                                                    <div class="p-slides__body">
                                                        <div class="p-slides__body--title">KOKOKARA 第1期卒業生</div>
                                                        <div class="p-slides__body--name"><span>村川 昂功</span>MURAKAWA TAKANORI</div>
                                                        <div class="p-slides__body--text">ここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入ります</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="slides--sp">
                                                <div class="slide">
                                                    <img class="p-slides__media" src="./images/slider-2.png" alt="">
                                                    <div class="p-slides__body">
                                                        <div class="p-slides__body--title">KOKOKARA 第1期卒業生</div>
                                                        <div class="p-slides__body--name"><span>村川 昂功</span>MURAKAWA TAKANORI</div>
                                                        <div class="p-slides__body--text">ここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入ります</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="slides--sp">
                                                <div class="slide">
                                                    <img class="p-slides__media" src="./images/slider-3.png" alt="">
                                                    <div class="p-slides__body">
                                                        <div class="p-slides__body--title">KOKOKARA 第1期卒業生</div>
                                                        <div class="p-slides__body--name"><span>村川 昂功</span>MURAKAWA TAKANORI</div>
                                                        <div class="p-slides__body--text">ここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入ります</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="slides--sp">
                                                <div class="slide">
                                                    <img class="p-slides__media" src="./images/slider-1.png" alt="">
                                                    <div class="p-slides__body">
                                                        <div class="p-slides__body--title">KOKOKARA 第1期卒業生</div>
                                                        <div class="p-slides__body--name"><span>村川 昂功</span>MURAKAWA TAKANORI</div>
                                                        <div class="p-slides__body--text">ここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入ります</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="slides--sp">
                                                <div class="slide">
                                                    <img class="p-slides__media" src="./images/slider-2.png" alt="">
                                                    <div class="p-slides__body">
                                                        <div class="p-slides__body--title">KOKOKARA 第1期卒業生</div>
                                                        <div class="p-slides__body--name"><span>村川 昂功</span>MURAKAWA TAKANORI</div>
                                                        <div class="p-slides__body--text">ここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入ります</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="slides--pc">
                                                <div class="slide">
                                                    <img class="p-slides__media" src="./images/slider-1.png" alt="">
                                                    <div class="p-slides__body">
                                                        <div class="p-slides__body--title">KOKOKARA 第1期卒業生</div>
                                                        <div class="p-slides__body--name"><span>村川 昂功</span>MURAKAWA TAKANORI</div>
                                                        <div class="p-slides__body--text">ここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入ります</div>
                                                    </div>
                                                </div>
                                                <div class="slide">
                                                    <img class="p-slides__media" src="./images/slider-2.png" alt="">
                                                    <div class="p-slides__body">
                                                        <div class="p-slides__body--title">KOKOKARA 第1期卒業生</div>
                                                        <div class="p-slides__body--name"><span>村川 昂功</span>MURAKAWA TAKANORI</div>
                                                        <div class="p-slides__body--text">ここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入ります</div>
                                                    </div>
                                                </div>
                                                <div class="slide">
                                                    <img class="p-slides__media" src="./images/slider-3.png" alt="">
                                                    <div class="p-slides__body">
                                                        <div class="p-slides__body--title">KOKOKARA 第1期卒業生</div>
                                                        <div class="p-slides__body--name"><span>村川 昂功</span>MURAKAWA TAKANORI</div>
                                                        <div class="p-slides__body--text">ここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入ります</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="slides--pc">
                                                <div class="slide">
                                                    <img class="p-slides__media" src="./images/slider-1.png" alt="">
                                                    <div class="p-slides__body">
                                                        <div class="p-slides__body--title">KOKOKARA 第1期卒業生</div>
                                                        <div class="p-slides__body--name"><span>村川 昂功</span>MURAKAWA TAKANORI</div>
                                                        <div class="p-slides__body--text">ここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入ります</div>
                                                    </div>
                                                </div>
                                                <div class="slide">
                                                    <img class="p-slides__media" src="./images/slider-2.png" alt="">
                                                    <div class="p-slides__body">
                                                        <div class="p-slides__body--title">KOKOKARA 第1期卒業生</div>
                                                        <div class="p-slides__body--name"><span>村川 昂功</span>MURAKAWA TAKANORI</div>
                                                        <div class="p-slides__body--text">ここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入ります</div>
                                                    </div>
                                                </div>
                                                <div class="slide">
                                                    <img class="p-slides__media" src="./images/slider-3.png" alt="">
                                                    <div class="p-slides__body">
                                                        <div class="p-slides__body--title">KOKOKARA 第1期卒業生</div>
                                                        <div class="p-slides__body--name"><span>村川 昂功</span>MURAKAWA TAKANORI</div>
                                                        <div class="p-slides__body--text">ここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入ります</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="slides--pc">
                                                <div class="slide">
                                                    <img class="p-slides__media" src="./images/slider-1.png" alt="">
                                                    <div class="p-slides__body">
                                                        <div class="p-slides__body--title">KOKOKARA 第1期卒業生</div>
                                                        <div class="p-slides__body--name"><span>村川 昂功</span>MURAKAWA TAKANORI</div>
                                                        <div class="p-slides__body--text">ここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入ります</div>
                                                    </div>
                                                </div>
                                                <div class="slide">
                                                    <img class="p-slides__media" src="./images/slider-2.png" alt="">
                                                    <div class="p-slides__body">
                                                        <div class="p-slides__body--title">KOKOKARA 第1期卒業生</div>
                                                        <div class="p-slides__body--name"><span>村川 昂功</span>MURAKAWA TAKANORI</div>
                                                        <div class="p-slides__body--text">ここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入ります</div>
                                                    </div>
                                                </div>
                                                <div class="slide">
                                                    <img class="p-slides__media" src="./images/slider-3.png" alt="">
                                                    <div class="p-slides__body">
                                                        <div class="p-slides__body--title">KOKOKARA 第1期卒業生</div>
                                                        <div class="p-slides__body--name"><span>村川 昂功</span>MURAKAWA TAKANORI</div>
                                                        <div class="p-slides__body--text">ここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入ります</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="slides--pc">
                                                <div class="slide">
                                                    <img class="p-slides__media" src="./images/slider-1.png" alt="">
                                                    <div class="p-slides__body">
                                                        <div class="p-slides__body--title">KOKOKARA 第1期卒業生</div>
                                                        <div class="p-slides__body--name"><span>村川 昂功</span>MURAKAWA TAKANORI</div>
                                                        <div class="p-slides__body--text">ここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入ります</div>
                                                    </div>
                                                </div>
                                                <div class="slide">
                                                    <img class="p-slides__media" src="./images/slider-2.png" alt="">
                                                    <div class="p-slides__body">
                                                        <div class="p-slides__body--title">KOKOKARA 第1期卒業生</div>
                                                        <div class="p-slides__body--name"><span>村川 昂功</span>MURAKAWA TAKANORI</div>
                                                        <div class="p-slides__body--text">ここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入ります</div>
                                                    </div>
                                                </div>
                                                <div class="slide">
                                                    <img class="p-slides__media" src="./images/slider-3.png" alt="">
                                                    <div class="p-slides__body">
                                                        <div class="p-slides__body--title">KOKOKARA 第1期卒業生</div>
                                                        <div class="p-slides__body--name"><span>村川 昂功</span>MURAKAWA TAKANORI</div>
                                                        <div class="p-slides__body--text">ここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入ります</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="slides--pc">
                                                <div class="slide">
                                                    <img class="p-slides__media" src="./images/slider-1.png" alt="">
                                                    <div class="p-slides__body">
                                                        <div class="p-slides__body--title">KOKOKARA 第1期卒業生</div>
                                                        <div class="p-slides__body--name"><span>村川 昂功</span>MURAKAWA TAKANORI</div>
                                                        <div class="p-slides__body--text">ここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入ります</div>
                                                    </div>
                                                </div>
                                                <div class="slide">
                                                    <img class="p-slides__media" src="./images/slider-2.png" alt="">
                                                    <div class="p-slides__body">
                                                        <div class="p-slides__body--title">KOKOKARA 第1期卒業生</div>
                                                        <div class="p-slides__body--name"><span>村川 昂功</span>MURAKAWA TAKANORI</div>
                                                        <div class="p-slides__body--text">ここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入ります</div>
                                                    </div>
                                                </div>
                                                <div class="slide">
                                                    <img class="p-slides__media" src="./images/slider-3.png" alt="">
                                                    <div class="p-slides__body">
                                                        <div class="p-slides__body--title">KOKOKARA 第1期卒業生</div>
                                                        <div class="p-slides__body--name"><span>村川 昂功</span>MURAKAWA TAKANORI</div>
                                                        <div class="p-slides__body--text">ここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入ります</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="c-slider__controls">
                                    <label for="slide1-1"></label>
                                    <label for="slide1-2"></label>
                                    <label for="slide1-3"></label>
                                    <label for="slide1-4"></label>
                                    <label for="slide1-5"></label>
                                </div>
                            </div>
                        </section>
                        <section class="p-tab__content is-tabopen2">
                            <div class="c-slider">
                                <input type="radio" id="slide2-1" name="slider3" checked>
                                <input type="radio" id="slide2-2" name="slider3">
                                <input type="radio" id="slide2-3" name="slider3">
                                <input type="radio" id="slide2-4" name="slider3">
                                <input type="radio" id="slide2-5" name="slider3">
                                <div class="c-slider__slides">
                                    <div class="overflow">
                                        <div class="slides__inner">
                                            <div class="slides--sp">
                                                <div class="slide">
                                                    <img class="p-slides__media" src="./images/slider-1.png" alt="">
                                                    <div class="p-slides__body">
                                                        <div class="p-slides__body--title">KOKOKARA 第1期卒業生</div>
                                                        <div class="p-slides__body--name"><span>村川 昂功</span>MURAKAWA TAKANORI</div>
                                                        <div class="p-slides__body--text">ここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入ります</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="slides--sp">
                                                <div class="slide">
                                                    <img class="p-slides__media" src="./images/slider-2.png" alt="">
                                                    <div class="p-slides__body">
                                                        <div class="p-slides__body--title">KOKOKARA 第1期卒業生</div>
                                                        <div class="p-slides__body--name"><span>村川 昂功</span>MURAKAWA TAKANORI</div>
                                                        <div class="p-slides__body--text">ここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入ります</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="slides--sp">
                                                <div class="slide">
                                                    <img class="p-slides__media" src="./images/slider-3.png" alt="">
                                                    <div class="p-slides__body">
                                                        <div class="p-slides__body--title">KOKOKARA 第1期卒業生</div>
                                                        <div class="p-slides__body--name"><span>村川 昂功</span>MURAKAWA TAKANORI</div>
                                                        <div class="p-slides__body--text">ここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入ります</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="slides--sp">
                                                <div class="slide">
                                                    <img class="p-slides__media" src="./images/slider-1.png" alt="">
                                                    <div class="p-slides__body">
                                                        <div class="p-slides__body--title">KOKOKARA 第1期卒業生</div>
                                                        <div class="p-slides__body--name"><span>村川 昂功</span>MURAKAWA TAKANORI</div>
                                                        <div class="p-slides__body--text">ここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入ります</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="slides--sp">
                                                <div class="slide">
                                                    <img class="p-slides__media" src="./images/slider-2.png" alt="">
                                                    <div class="p-slides__body">
                                                        <div class="p-slides__body--title">KOKOKARA 第1期卒業生</div>
                                                        <div class="p-slides__body--name"><span>村川 昂功</span>MURAKAWA TAKANORI</div>
                                                        <div class="p-slides__body--text">ここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入ります</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="slides--pc">
                                                <div class="slide">
                                                    <img class="p-slides__media" src="./images/slider-1.png" alt="">
                                                    <div class="p-slides__body">
                                                        <div class="p-slides__body--title">KOKOKARA 第1期卒業生</div>
                                                        <div class="p-slides__body--name"><span>村川 昂功</span>MURAKAWA TAKANORI</div>
                                                        <div class="p-slides__body--text">ここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入ります</div>
                                                    </div>
                                                </div>
                                                <div class="slide">
                                                    <img class="p-slides__media" src="./images/slider-2.png" alt="">
                                                    <div class="p-slides__body">
                                                        <div class="p-slides__body--title">KOKOKARA 第1期卒業生</div>
                                                        <div class="p-slides__body--name"><span>村川 昂功</span>MURAKAWA TAKANORI</div>
                                                        <div class="p-slides__body--text">ここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入ります</div>
                                                    </div>
                                                </div>
                                                <div class="slide">
                                                    <img class="p-slides__media" src="./images/slider-3.png" alt="">
                                                    <div class="p-slides__body">
                                                        <div class="p-slides__body--title">KOKOKARA 第1期卒業生</div>
                                                        <div class="p-slides__body--name"><span>村川 昂功</span>MURAKAWA TAKANORI</div>
                                                        <div class="p-slides__body--text">ここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入ります</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="slides--pc">
                                                <div class="slide">
                                                    <img class="p-slides__media" src="./images/slider-1.png" alt="">
                                                    <div class="p-slides__body">
                                                        <div class="p-slides__body--title">KOKOKARA 第1期卒業生</div>
                                                        <div class="p-slides__body--name"><span>村川 昂功</span>MURAKAWA TAKANORI</div>
                                                        <div class="p-slides__body--text">ここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入ります</div>
                                                    </div>
                                                </div>
                                                <div class="slide">
                                                    <img class="p-slides__media" src="./images/slider-2.png" alt="">
                                                    <div class="p-slides__body">
                                                        <div class="p-slides__body--title">KOKOKARA 第1期卒業生</div>
                                                        <div class="p-slides__body--name"><span>村川 昂功</span>MURAKAWA TAKANORI</div>
                                                        <div class="p-slides__body--text">ここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入ります</div>
                                                    </div>
                                                </div>
                                                <div class="slide">
                                                    <img class="p-slides__media" src="./images/slider-3.png" alt="">
                                                    <div class="p-slides__body">
                                                        <div class="p-slides__body--title">KOKOKARA 第1期卒業生</div>
                                                        <div class="p-slides__body--name"><span>村川 昂功</span>MURAKAWA TAKANORI</div>
                                                        <div class="p-slides__body--text">ここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入ります</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="slides--pc">
                                                <div class="slide">
                                                    <img class="p-slides__media" src="./images/slider-1.png" alt="">
                                                    <div class="p-slides__body">
                                                        <div class="p-slides__body--title">KOKOKARA 第1期卒業生</div>
                                                        <div class="p-slides__body--name"><span>村川 昂功</span>MURAKAWA TAKANORI</div>
                                                        <div class="p-slides__body--text">ここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入ります</div>
                                                    </div>
                                                </div>
                                                <div class="slide">
                                                    <img class="p-slides__media" src="./images/slider-2.png" alt="">
                                                    <div class="p-slides__body">
                                                        <div class="p-slides__body--title">KOKOKARA 第1期卒業生</div>
                                                        <div class="p-slides__body--name"><span>村川 昂功</span>MURAKAWA TAKANORI</div>
                                                        <div class="p-slides__body--text">ここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入ります</div>
                                                    </div>
                                                </div>
                                                <div class="slide">
                                                    <img class="p-slides__media" src="./images/slider-3.png" alt="">
                                                    <div class="p-slides__body">
                                                        <div class="p-slides__body--title">KOKOKARA 第1期卒業生</div>
                                                        <div class="p-slides__body--name"><span>村川 昂功</span>MURAKAWA TAKANORI</div>
                                                        <div class="p-slides__body--text">ここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入ります</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="slides--pc">
                                                <div class="slide">
                                                    <img class="p-slides__media" src="./images/slider-1.png" alt="">
                                                    <div class="p-slides__body">
                                                        <div class="p-slides__body--title">KOKOKARA 第1期卒業生</div>
                                                        <div class="p-slides__body--name"><span>村川 昂功</span>MURAKAWA TAKANORI</div>
                                                        <div class="p-slides__body--text">ここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入ります</div>
                                                    </div>
                                                </div>
                                                <div class="slide">
                                                    <img class="p-slides__media" src="./images/slider-2.png" alt="">
                                                    <div class="p-slides__body">
                                                        <div class="p-slides__body--title">KOKOKARA 第1期卒業生</div>
                                                        <div class="p-slides__body--name"><span>村川 昂功</span>MURAKAWA TAKANORI</div>
                                                        <div class="p-slides__body--text">ここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入ります</div>
                                                    </div>
                                                </div>
                                                <div class="slide">
                                                    <img class="p-slides__media" src="./images/slider-3.png" alt="">
                                                    <div class="p-slides__body">
                                                        <div class="p-slides__body--title">KOKOKARA 第1期卒業生</div>
                                                        <div class="p-slides__body--name"><span>村川 昂功</span>MURAKAWA TAKANORI</div>
                                                        <div class="p-slides__body--text">ここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入ります</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="slides--pc">
                                                <div class="slide">
                                                    <img class="p-slides__media" src="./images/slider-1.png" alt="">
                                                    <div class="p-slides__body">
                                                        <div class="p-slides__body--title">KOKOKARA 第1期卒業生</div>
                                                        <div class="p-slides__body--name"><span>村川 昂功</span>MURAKAWA TAKANORI</div>
                                                        <div class="p-slides__body--text">ここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入ります</div>
                                                    </div>
                                                </div>
                                                <div class="slide">
                                                    <img class="p-slides__media" src="./images/slider-2.png" alt="">
                                                    <div class="p-slides__body">
                                                        <div class="p-slides__body--title">KOKOKARA 第1期卒業生</div>
                                                        <div class="p-slides__body--name"><span>村川 昂功</span>MURAKAWA TAKANORI</div>
                                                        <div class="p-slides__body--text">ここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入ります</div>
                                                    </div>
                                                </div>
                                                <div class="slide">
                                                    <img class="p-slides__media" src="./images/slider-3.png" alt="">
                                                    <div class="p-slides__body">
                                                        <div class="p-slides__body--title">KOKOKARA 第1期卒業生</div>
                                                        <div class="p-slides__body--name"><span>村川 昂功</span>MURAKAWA TAKANORI</div>
                                                        <div class="p-slides__body--text">ここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入ります</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="c-slider__controls">
                                    <label for="slide2-1"></label>
                                    <label for="slide2-2"></label>
                                    <label for="slide2-3"></label>
                                    <label for="slide2-4"></label>
                                    <label for="slide2-5"></label>
                                </div>
                            </div>
                        </section>
                        <section class="p-tab__content is-tabopen3">
                            <div class="c-slider">
                                <input type="radio" id="slide3-1" name="slider4" checked>
                                <input type="radio" id="slide3-2" name="slider4">
                                <input type="radio" id="slide3-3" name="slider4">
                                <input type="radio" id="slide3-4" name="slider4">
                                <input type="radio" id="slide3-5" name="slider4">
                                <div class="c-slider__slides">
                                    <div class="overflow">
                                        <div class="slides__inner">
                                            <div class="slides--sp">
                                                <div class="slide">
                                                    <img class="p-slides__media" src="./images/slider-1.png" alt="">
                                                    <div class="p-slides__body">
                                                        <div class="p-slides__body--title">KOKOKARA 第1期卒業生</div>
                                                        <div class="p-slides__body--name"><span>村川 昂功</span>MURAKAWA TAKANORI</div>
                                                        <div class="p-slides__body--text">ここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入ります</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="slides--sp">
                                                <div class="slide">
                                                    <img class="p-slides__media" src="./images/slider-2.png" alt="">
                                                    <div class="p-slides__body">
                                                        <div class="p-slides__body--title">KOKOKARA 第1期卒業生</div>
                                                        <div class="p-slides__body--name"><span>村川 昂功</span>MURAKAWA TAKANORI</div>
                                                        <div class="p-slides__body--text">ここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入ります</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="slides--sp">
                                                <div class="slide">
                                                    <img class="p-slides__media" src="./images/slider-3.png" alt="">
                                                    <div class="p-slides__body">
                                                        <div class="p-slides__body--title">KOKOKARA 第1期卒業生</div>
                                                        <div class="p-slides__body--name"><span>村川 昂功</span>MURAKAWA TAKANORI</div>
                                                        <div class="p-slides__body--text">ここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入ります</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="slides--sp">
                                                <div class="slide">
                                                    <img class="p-slides__media" src="./images/slider-1.png" alt="">
                                                    <div class="p-slides__body">
                                                        <div class="p-slides__body--title">KOKOKARA 第1期卒業生</div>
                                                        <div class="p-slides__body--name"><span>村川 昂功</span>MURAKAWA TAKANORI</div>
                                                        <div class="p-slides__body--text">ここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入ります</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="slides--sp">
                                                <div class="slide">
                                                    <img class="p-slides__media" src="./images/slider-2.png" alt="">
                                                    <div class="p-slides__body">
                                                        <div class="p-slides__body--title">KOKOKARA 第1期卒業生</div>
                                                        <div class="p-slides__body--name"><span>村川 昂功</span>MURAKAWA TAKANORI</div>
                                                        <div class="p-slides__body--text">ここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入ります</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="slides--pc">
                                                <div class="slide">
                                                    <img class="p-slides__media" src="./images/slider-1.png" alt="">
                                                    <div class="p-slides__body">
                                                        <div class="p-slides__body--title">KOKOKARA 第1期卒業生</div>
                                                        <div class="p-slides__body--name"><span>村川 昂功</span>MURAKAWA TAKANORI</div>
                                                        <div class="p-slides__body--text">ここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入ります</div>
                                                    </div>
                                                </div>
                                                <div class="slide">
                                                    <img class="p-slides__media" src="./images/slider-2.png" alt="">
                                                    <div class="p-slides__body">
                                                        <div class="p-slides__body--title">KOKOKARA 第1期卒業生</div>
                                                        <div class="p-slides__body--name"><span>村川 昂功</span>MURAKAWA TAKANORI</div>
                                                        <div class="p-slides__body--text">ここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入ります</div>
                                                    </div>
                                                </div>
                                                <div class="slide">
                                                    <img class="p-slides__media" src="./images/slider-3.png" alt="">
                                                    <div class="p-slides__body">
                                                        <div class="p-slides__body--title">KOKOKARA 第1期卒業生</div>
                                                        <div class="p-slides__body--name"><span>村川 昂功</span>MURAKAWA TAKANORI</div>
                                                        <div class="p-slides__body--text">ここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入ります</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="slides--pc">
                                                <div class="slide">
                                                    <img class="p-slides__media" src="./images/slider-1.png" alt="">
                                                    <div class="p-slides__body">
                                                        <div class="p-slides__body--title">KOKOKARA 第1期卒業生</div>
                                                        <div class="p-slides__body--name"><span>村川 昂功</span>MURAKAWA TAKANORI</div>
                                                        <div class="p-slides__body--text">ここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入ります</div>
                                                    </div>
                                                </div>
                                                <div class="slide">
                                                    <img class="p-slides__media" src="./images/slider-2.png" alt="">
                                                    <div class="p-slides__body">
                                                        <div class="p-slides__body--title">KOKOKARA 第1期卒業生</div>
                                                        <div class="p-slides__body--name"><span>村川 昂功</span>MURAKAWA TAKANORI</div>
                                                        <div class="p-slides__body--text">ここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入ります</div>
                                                    </div>
                                                </div>
                                                <div class="slide">
                                                    <img class="p-slides__media" src="./images/slider-3.png" alt="">
                                                    <div class="p-slides__body">
                                                        <div class="p-slides__body--title">KOKOKARA 第1期卒業生</div>
                                                        <div class="p-slides__body--name"><span>村川 昂功</span>MURAKAWA TAKANORI</div>
                                                        <div class="p-slides__body--text">ここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入ります</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="slides--pc">
                                                <div class="slide">
                                                    <img class="p-slides__media" src="./images/slider-1.png" alt="">
                                                    <div class="p-slides__body">
                                                        <div class="p-slides__body--title">KOKOKARA 第1期卒業生</div>
                                                        <div class="p-slides__body--name"><span>村川 昂功</span>MURAKAWA TAKANORI</div>
                                                        <div class="p-slides__body--text">ここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入ります</div>
                                                    </div>
                                                </div>
                                                <div class="slide">
                                                    <img class="p-slides__media" src="./images/slider-2.png" alt="">
                                                    <div class="p-slides__body">
                                                        <div class="p-slides__body--title">KOKOKARA 第1期卒業生</div>
                                                        <div class="p-slides__body--name"><span>村川 昂功</span>MURAKAWA TAKANORI</div>
                                                        <div class="p-slides__body--text">ここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入ります</div>
                                                    </div>
                                                </div>
                                                <div class="slide">
                                                    <img class="p-slides__media" src="./images/slider-3.png" alt="">
                                                    <div class="p-slides__body">
                                                        <div class="p-slides__body--title">KOKOKARA 第1期卒業生</div>
                                                        <div class="p-slides__body--name"><span>村川 昂功</span>MURAKAWA TAKANORI</div>
                                                        <div class="p-slides__body--text">ここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入ります</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="slides--pc">
                                                <div class="slide">
                                                    <img class="p-slides__media" src="./images/slider-1.png" alt="">
                                                    <div class="p-slides__body">
                                                        <div class="p-slides__body--title">KOKOKARA 第1期卒業生</div>
                                                        <div class="p-slides__body--name"><span>村川 昂功</span>MURAKAWA TAKANORI</div>
                                                        <div class="p-slides__body--text">ここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入ります</div>
                                                    </div>
                                                </div>
                                                <div class="slide">
                                                    <img class="p-slides__media" src="./images/slider-2.png" alt="">
                                                    <div class="p-slides__body">
                                                        <div class="p-slides__body--title">KOKOKARA 第1期卒業生</div>
                                                        <div class="p-slides__body--name"><span>村川 昂功</span>MURAKAWA TAKANORI</div>
                                                        <div class="p-slides__body--text">ここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入ります</div>
                                                    </div>
                                                </div>
                                                <div class="slide">
                                                    <img class="p-slides__media" src="./images/slider-3.png" alt="">
                                                    <div class="p-slides__body">
                                                        <div class="p-slides__body--title">KOKOKARA 第1期卒業生</div>
                                                        <div class="p-slides__body--name"><span>村川 昂功</span>MURAKAWA TAKANORI</div>
                                                        <div class="p-slides__body--text">ここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入ります</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="slides--pc">
                                                <div class="slide">
                                                    <img class="p-slides__media" src="./images/slider-1.png" alt="">
                                                    <div class="p-slides__body">
                                                        <div class="p-slides__body--title">KOKOKARA 第1期卒業生</div>
                                                        <div class="p-slides__body--name"><span>村川 昂功</span>MURAKAWA TAKANORI</div>
                                                        <div class="p-slides__body--text">ここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入ります</div>
                                                    </div>
                                                </div>
                                                <div class="slide">
                                                    <img class="p-slides__media" src="./images/slider-2.png" alt="">
                                                    <div class="p-slides__body">
                                                        <div class="p-slides__body--title">KOKOKARA 第1期卒業生</div>
                                                        <div class="p-slides__body--name"><span>村川 昂功</span>MURAKAWA TAKANORI</div>
                                                        <div class="p-slides__body--text">ここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入ります</div>
                                                    </div>
                                                </div>
                                                <div class="slide">
                                                    <img class="p-slides__media" src="./images/slider-3.png" alt="">
                                                    <div class="p-slides__body">
                                                        <div class="p-slides__body--title">KOKOKARA 第1期卒業生</div>
                                                        <div class="p-slides__body--name"><span>村川 昂功</span>MURAKAWA TAKANORI</div>
                                                        <div class="p-slides__body--text">ここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入ります</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="c-slider__controls">
                                    <label for="slide3-1"></label>
                                    <label for="slide3-2"></label>
                                    <label for="slide3-3"></label>
                                    <label for="slide3-4"></label>
                                    <label for="slide3-5"></label>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
            <!-- /.l-ambassador -->
            <div class="l-qa">
                <h2 class="c-sectiontitel--sub qa is-show">QA</h2>
                <div class="c-sectiontext is-show">よくあるご質問</div>
                <div class="p-qa__container">
                    <div class="c-accordion is-show">
                        <input id="qa1" type="checkbox">
                        <label class="p-qa__container--q" for="qa1">
                        <span>Q.</span>
                        <p>開催場所はどこでしょうか？また全国どこからでも参加可能でしょうか？</p>
                        </label>
                        <div class="p-qa__container--a">
                            <span>A.</span>
                            <p>大阪梅田が拠点となります。現在は関西圏(大阪/京都/兵庫/滋賀)からのみご参加受付中です。
                            </p>
                        </div>
                    </div>
                    <div class="c-accordion is-show">
                        <input id="qa2" type="checkbox">
                        <label class="p-qa__container--q" for="qa2">
                       <span>Q.</span>
                       <p>今すぐの参加が難しいのですが大丈夫ですか？</p>
                    </label>
                        <div class="p-qa__container--a">
                            <span>A.</span>
                            <p>大丈夫です。皆様、ご自身のご都合に合わせて参加日を決定されています。</p>
                        </div>
                    </div>
                    <div class="c-accordion is-show">
                        <input id="qa3" type="checkbox">
                        <label class="p-qa__container--q" for="qa3">
                       <span>Q.</span>
                       <p>アルバイトしかしたことがないor職業体験をしたことがないのですが大丈夫ですか？</p>
                    </label>
                        <div class="p-qa__container--a">
                            <span>A.</span>
                            <p>大丈夫です。未経験の方もたくさん参加されておりますのでご安心ください。</p>
                        </div>
                    </div>
                    <div class="c-accordion is-show">
                        <input id="qa4" type="checkbox">
                        <label class="p-qa__container--q" for="qa4">
                       <span>Q.</span>
                       <p>未成年ですが親の同意は必要でしょうか？</p>
                    </label>
                        <div class="p-qa__container--a">
                            <span>A.</span>
                            <p>必要です。親御様のご理解の元、参加をお願い致します。</p>
                        </div>
                    </div>
                    <div class="c-accordion is-show">
                        <input id="qa5" type="checkbox">
                        <label class="p-qa__container--q" for="qa5">
                       <span>Q.</span>
                       <p>参加中どうしても休まないといけない日があった場合大丈夫でしょうか？</p>
                    </label>
                        <div class="p-qa__container--a">
                            <span>A.</span>
                            <p>大丈夫です。担当のメンターにご相談ください。</p>
                        </div>
                    </div>
                    <div class="c-accordion is-show">
                        <input id="qa6" type="checkbox">
                        <label class="p-qa__container--q" for="qa6">
                       <span>Q.</span>
                       <p>服装はどのようなものが良いでしょうか？</p>
                    </label>
                        <div class="p-qa__container--a">
                            <span>A.</span>
                            <p>スーツでもジャケパンスタイルでも大丈夫です。第一印象の良い身だしなみであれば問題ないです。</p>
                        </div>
                    </div>
                    <div class="c-accordion is-show">
                        <input id="qa7" type="checkbox">
                        <label class="p-qa__container--q" for="qa7">
                       <span>Q.</span>
                       <p>どのようなことをするのでしょうか？</p>
                    </label>
                        <div class="p-qa__container--a">
                            <span>A.</span>
                            <p>実地研修を行うことでビジネスマナー・コミュニケーションスキルなどの実務スキルの育成、キャリア面談やキャンペーンを通して様々な価値観に触れ自らのキャリアビジョンの形成ができる環境を提供しております。</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.l-qa -->
            <div class="l-partner">
                <h2 class="c-sectiontitel--sub is-show">Partner</h2>
                <div class="c-sectiontext is-show">コンテンツ提供企業様・進路先企業様など</div>
                <div class="p-partner">
                    <ul class="p-partner--banners">
                        <li><img src="./images/partner-logo.png" alt=""></li>
                        <li><img src="./images/partner-logo.png" alt=""></li>
                        <li><img src="./images/partner-logo.png" alt=""></li>
                        <li><img src="./images/partner-logo.png" alt=""></li>
                        <li><img src="./images/partner-logo.png" alt=""></li>
                        <li><img src="./images/partner-logo.png" alt=""></li>
                    </ul>
                </div>
            </div>
            <!-- /.l-partner -->
            <div class="l-messege">
                <div class="p-bg--blur">
                    <h2 class="c-sectiontitel is-show">Messege</h2>
                    <p class="c-sectiontext is-show">メッセージ</p>
                </div>
                <div class="p-messege is-show">
                    <h3 class="p-messege--title">創り出そう自分の未来。</h3>
                    <p class="p-messege--text">自分が本当にやりたいことに向き合い、果敢にチャレンジする。そんな人を増やすことがKOKOKARAの目的です。 半年修了後は、KOKOKARAの徹底的なサポートを元に、自分の理想に向き合い就職しても良し、起業しても良し、フリーランスになっても良し、海外に留学・ワーキングホリデーしても良し、共にKOKOKARAを創り上げる運営メンバーになるも良し、あなたにしか描けない人生がそこにはあります。「変わりたい、チャレンジしたい。でも、どうしたらいいかわからない、何から始めればいいかわからない」そんな18歳〜26歳が輝ける環境を提供します。
                    </p>
                </div>
            </div>
            <!-- /.l-messege -->
            <div class="l-wantedly">
                <div class="p-wantedly__inner">
                    <p class="is-show">こんな人をお待ちしております</p>
                    <div class="p-wantedly__inner__bachs">
                        <span class="p-bach--circle is-show">同じ思いを持った仲間に出会いたい</span>
                        <span class="p-bach--circle is-show">将来が不安</span>
                        <span class="p-bach--circle is-show">したいことがあるけどお金がない</span>
                        <span class="p-bach--circle is-show">もっと自分らしく生きたい</span>
                        <span class="p-bach--circle is-show">集中できるものが欲しい</span>
                        <span class="p-bach--circle is-show">将来起業したい</span>
                        <span class="p-bach--circle is-show">海外へ留学してみたい</span>
                        <span class="p-bach--circle is-show">今の自分を変えたい</span>
                    </div>
                </div>

            </div>
            <!-- /.l-wantedly -->
            <div class="l-entry" id="entry">
                <h2 class="c-sectiontitel--sub is-show">Entry</h2>
                <div class="p-entryform">
                    <p class="p-entryform__text is-show">話を聞くだけでもOK！<br class="sp-only">お申し込みはこちらから</p>
                    <form action="confirm.php" method="post" name="form" onsubmit="return validate()">
                        <div class="element_wrap is-show">
                            <label>お名前<span class="c-bach--entry">必須</span></label>
                            <input type="text" name="name" value="<?php if( !empty($_POST['name']) ){ echo $_POST['your_name']; } ?>" placeholder="山本太郎" required>
                        </div>
                        <div class="element_wrap is-show">
                            <label>メールアドレス<span class="c-bach--entry">必須</span></label>
                            <input type="email" name="email" value="<?php if( !empty($_POST['email']) ){ echo $_POST['email']; } ?>" placeholder="taro@kokokara.jp" required>
                        </div>
                        <div class="element_wrap is-show">
                            <label>電話番号<span class="c-bach--entry">必須</span></label>
                            <input type="tel" name="tel" value="<?php if( !empty($_POST['tel']) ){ echo $_POST['tel']; } ?>" placeholder="090-0000-0000" required>
                        </div>
                        <div class="element_wrap is-show">
                            <label>お問い合わせ内容</label>
                            <textarea name="contact" placeholder="簡単な自己紹介をご記入ください。"><?php if( !empty($_POST['contact']) ){ echo $_POST['contact']; } ?></textarea>
                        </div>
                        <input class="is-show" type="submit" name="btn_confirm" value="話を聞いてみる（確認画面へ）">
                    </form>
                </div>
                <div class="p-linelink">
                    <p class="p-linelink__text is-show">もしくは</p>
                    <a class="p-linelink__button is-show" href="">LINE@でカンタン相談！</a>
                </div>
            </div>
            <!-- /.l-entry -->
        </main>
        <footer class="l-footer">
            <h1 class="p-footer__logo">
                <a href="#index">
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
    <script src="./js/kokokara.js"></script>
    <script>
        let video = document.getElementById("js-autoplay");
        let play = video.play();
        if (play instanceof Promise) {
            play.catch(error => {
                console.error('自動再生できません');
            });
        }
        window.onload = function() {
            var lastWidget = document.getElementById("about");
            var distanceFromTheTop = lastWidget.getBoundingClientRect().top + window.pageYOffset;
            window.onscroll = function() {
                if (window.pageYOffset > distanceFromTheTop) {
                    document.getElementById("is-scrolled").classList.add("hradder-scrolled");
                } else {
                    document.getElementById("is-scrolled").classList.remove("hradder-scrolled");
                }
            }
        }

        function navigationTrigger() {
            const x = document.getElementById("is-open");
            const y = document.getElementById("is-menuclose");
            if (x.style.display === "block") {
                x.style.display = "none";
                y.classList.remove("close-anime");
                y.classList.add("open-anime");

            } else {
                x.style.display = "block";
                y.classList.remove("open-anime");
                y.classList.add("close-anime");
            }
        }

        function jumpToLinks() {
            const x = document.getElementById("is-open");
            const y = document.getElementById("is-menuclose");
            const viewToggle = document.defaultView.getComputedStyle(y, null).display;
            if (viewToggle === "block") {
                x.style.display = "none";
                y.classList.remove("close-anime");
                y.classList.add("open-anime");
            } else {
                x.style.display = "block";
                y.classList.remove("open-anime");
                y.classList.add("close-anime");
            }
        }

        function fadeOut(node, duration) {
            node.style.opacity = 1;
            const start = performance.now();
            requestAnimationFrame(function tick(timestamp) {
                const easing = (timestamp - start) / duration;
                node.style.opacity = Math.max(1 - easing, 0);
                if (easing < 1) {
                    requestAnimationFrame(tick);
                } else {
                    node.style.opacity = "";
                    node.style.display = "none";
                }
            });
        }
        //Use to the library setting
        window.sr = ScrollReveal({
            reset: false,
            mobile: true
        });
        sr.reveal(".is-show", {
            scale: 0.6,
            duration: 1500,
            opacity: 0,
        });
        var scroll = new SmoothScroll('a[href*="#"]');

        const loading = document.getElementById("loader-text");
        const bg = document.getElementById("loader");
        loading.addEventListener("animationend", function() {
            fadeOut(bg, 00);
            document.getElementById("index").style.position = "relative";
            if (document.location.hash == "#about") {
                window.location.href = "#about"
            } else if (document.location.hash == "#contents") {
                window.location.href = "#contents"
            } else if (document.location.hash == "#schedule") {
                window.location.href = "#schedule"
            } else if (document.location.hash == "#entry") {
                window.location.href = "#entry"
            } else {
                return;
            }
        });

    </script>
</body>

</html>
