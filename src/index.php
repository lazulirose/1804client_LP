<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                    <svg class="logo" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 245.82 37.31"><defs><style>.cls-1{fill:#fff;}</style></defs><title>kokokara-logo</title><path class="cls-1" d="M7.5,20.92,5.14,24.46V36.64H0V.67H5.14V16.29L7.5,12.08,14.7.67h6.06L10.48,16.34l11.77,20.3h-6Z"/><path class="cls-1" d="M31,25.23V12.08C31,4.57,35.1,0,42,0S53,4.57,53,12.08V25.23c0,7.51-4.11,12.08-11,12.08S31,32.74,31,25.23Zm16.65,0V12.08c0-4.53-2-7-5.65-7s-5.65,2.46-5.65,7V25.23c0,4.52,1.9,7,5.65,7S47.64,29.75,47.64,25.23Z"/><path class="cls-1" d="M72.83,20.92l-2.37,3.54V36.64H65.32V.67h5.14V16.29l2.37-4.21L80,.67h6.07L75.81,16.34l11.77,20.3h-6Z"/><path class="cls-1" d="M96.31,25.23V12.08c0-7.51,4.12-12.08,11-12.08s11,4.57,11,12.08V25.23c0,7.51-4.11,12.08-11,12.08S96.31,32.74,96.31,25.23Zm16.66,0V12.08c0-4.53-2-7-5.66-7s-5.65,2.46-5.65,7V25.23c0,4.52,1.9,7,5.65,7S113,29.75,113,25.23Z"/><path class="cls-1" d="M138.15,20.92l-2.36,3.54V36.64h-5.14V.67h5.14V16.29l2.36-4.21L145.35.67h6.06L141.13,16.34l11.77,20.3h-6Z"/><path class="cls-1" d="M176,29.4h-9.51l-1.64,7.24h-5.45l9-36h5.61l9,36h-5.4ZM175,24.56l-2.26-9.66c-.52-2.36-1.08-5.8-1.34-7.71h-.15c-.26,1.91-.77,5.35-1.34,7.71l-2.21,9.66Z"/><path class="cls-1" d="M201.73,23.59h-3.24V36.64H193.3V.67h9.3c6.89,0,10.79,4.11,10.79,11.25,0,5.6-2.36,9.46-6.47,11l7.81,13.77H209Zm-3.24-4.94h4c3.65,0,5.55-2.36,5.55-6.62s-1.9-6.43-5.5-6.43h-4.06Z"/><path class="cls-1" d="M238.73,29.4h-9.51l-1.64,7.24h-5.45l9.05-36h5.6l9,36h-5.39Zm-1.08-4.84-2.26-9.66c-.51-2.36-1.08-5.8-1.34-7.71h-.15c-.26,1.91-.77,5.35-1.34,7.71l-2.21,9.66Z"/></svg>
                </h1>
                <div class="c-nav__toggle" id="is-menuclose">
                    <p class="menu__tag">MENU</p><button class="menu__button" onclick="navigationTrigger()"></button></div>
                <div class="c-menu" id="is-open">
                    <ul class="c-menu__body">
                        <li>
                            <a class="menu__link" onclick="jumpToLinks()" href="#about"><span class="">ABOUT</span>KOKOKARAについて</a>
                        </li>
                        <li>
                            <a class="menu__link" onclick="jumpToLinks()" href="#contents"><span class="">CONTENTS</span>KOKOKARでできること</a>
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
                <div id="loader-text" class="p-loading tagline"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 607.1 79.5" style="enable-background:new 0 0 607.1 79.5;" xml:space="preserve"><g><g><path d="M407.7,40.6c-0.3-1.1-0.8-1.4-1.2-1.4c-0.7,0-0.5-0.2-2.1,0.1c0,0,0-0.8,0-1.3c-0.1-2.4-0.1-2.4-0.2-6.2
			c0-5.7-1.7-8-7.3-6.9c-8.1,1.6-7.2,0.9-21,6.3c-0.5,0.2-1,0.1-1.5-0.4c-0.6-0.5-0.3-1.4,0.6-2.5c4.1-5,6.3-8.9,10.9-12.2
			c1-0.7,8.3-1.4,9.6-1.8c0.9-0.3,2.5-0.5,2.1-2.1c-0.3-1.4-1.6-1.8-2.8-1.8c-0.5,0-1-0.1-1.4,0.1c-6.1,1.6-17.1,3.1-23.1,5.4
			c-3.5,1.3-7.2,2-10.3,4.3c-1.2,0.9-2.1,2.1-0.9,3.6c1.1,1.4,2.3,0.7,3.5-0.1c0.3-0.2,0.5-0.5,0.8-0.7c4.7-3.2,8.6-3.7,14.6-5.2
			c-2.4,2.8-1.3,1.5-3.9,4.8c-2.1,2.8-2.1,2.3-4.1,4.7c-1.6,1.9-3,2.4-2.7,5.4c0.1,1.4,0.1,3.2,0.2,4.6c0.3,5.1,1.3,9.7,1.6,14.8
			c0.1,1.4,0.6,2.5,1.9,3.2c1.5,0.7,2.2-0.3,3-1.3c0.5-0.5,4.6-2,5.3-2.3c4.5-2,2.5-1.1,6.1-2.3c2.1-0.7,6.1-1.9,7.2-2.2
			c5.8-1.7,5.8-1.7,5.8-1.7s2-0.8,4.7-1.5c1.3-0.3,2.7-0.6,3.8-1.1C407.7,42.5,408,41.7,407.7,40.6z M380.9,44.3
			c0,1.4-0.1,1.5-1.2,2.3c-1.4,1-2.3,1-3.1,1.2c-0.9,0.2-2.9,0.9-3-1c0,0-0.2-1.6-0.3-3.4c-0.1-1-0.1-5.2-0.1-6
			c-0.1-2.4,3.9-3,5.9-3.3c1.4-0.2,1.3,1.1,1.5,2.7C380.9,40.9,381,42.1,380.9,44.3z M384.9,35.8c-0.1-0.3-0.4-1.9-0.2-2.3
			c0.8-1.6,5.1-2.1,5.1-2.1c0.8-0.1,1.1,1.1,1,2.2c0,1.2-0.4,0.9-2.4,1.6c-1.1,0.4-1.6,0.8-2.7,1.1C385.5,36.3,385,36.2,384.9,35.8z
			 M391.2,42.2c-1.3,0.5-2.8,0.8-4.2,1.3c-1.6,0.6-1.3-0.1-1.6-1.1c-0.3-0.9,0-1.5,1-1.7c1.7-0.4,4-1.9,5.5-1.4
			c0.2,0.1,0.7,1.8,0.7,2.1C392.6,42,391.6,42.1,391.2,42.2z M399.3,39.7c-0.1,1.3,0,0.9-3,1.5c-0.2,0-0.3,0.1-0.6,0.1
			c-0.2,0-0.4-0.2-0.4-0.5c-0.1-1.8-0.5-3.2-0.7-4.2c-0.2-1.6-0.2-1.6-0.4-3.8c-0.1-1.3-0.3-2.5,0.4-2.7c1.5-0.5,2-0.5,3.4-0.9
			c0.8-0.2,0.7,1.3,0.8,2.2C399.2,35.2,399.5,36,399.3,39.7z"/>
		<path d="M446.5,24.2c-0.3-4-2.5-5.2-6.3-4.1c-3.3,1-6.2,2.6-9.1,4.2c-2,1.1-2.7,0.3-3.1-1.6c-0.3-1.5,1-2.1,2.2-3.1
			c2.8-2.5,3.1-3.4,9-6.6c1.1-0.6,1.5-0.3,1.7-1.5c0.2-0.9-0.2-1.7-1-2.1c-1.1-0.7-2.1-0.5-3.1,0.3c-4,2.9-8,5.8-12.1,8.7
			c-1.1,0.8-1.8,1.8-1.4,3.1c1.6,4.8,1,9.8,1.4,14.4c0,2.9-0.1,5.4,0,7.9c0.1,2.6,1.5,3.5,4,2.6c1.7-0.6,4.7-1.1,6.5-1.6
			c2.1-0.6,5.7-0.9,8.4-1.5c2.7-0.6,4.4,0.4,4.7-1C449.7,36.9,447,32,446.5,24.2z M429.8,29.3c2.8-2.3,6-3.1,9.6-4.1
			c1.9-0.5,2.9,0.2,2.8,2c-0.1,1.9,0.8,2.8-2.5,3.3c-2.9,0.4-5.9,1.3-8.8,1.7c-0.8,0.1-0.8,0.3-1.2-0.5
			C429.5,31.3,429.4,29.6,429.8,29.3z M440.1,39.8c-2.5,0.4-5.1,0.8-8.1,1.8c-3,1-2.2-1.3-2.4-2.8c-0.3-1.9,0.2-1.9,2.4-2.4
			c3-0.7,3.7-1.3,5.6-1.7c3.1-0.7,5.7-1.2,5.9,0.2C443.8,37.9,444.6,39.1,440.1,39.8z"/>
	</g>
	<path d="M578.3,25.6c-0.6,0-0.9-0.1-1.8-0.1c-2.5,0.2-2.3,0.4-2.1-1.8c0.3-4.3-2.9-6.8-6.8-6.5c-1.9,0.2-1.7-1.2-1.1-2.1
		c1.5-2.1,2.4-4.2,3.1-6.5c1.1-3.2-0.4-5.1-4.3-5.1c-2.1,0.2-4.2,0.8-6.8,1.9c-1.9,0.8-3.5,1.6-4.8,3.1c-1,1.2-0.8,2.6,0.2,3.6
		c1.1,1,2,0,2.8-0.8c1.6-1.5,3-2.3,4.8-3c1.7-0.7,2.5-1.2,3.4-0.3c1,1.1-0.2,2.3-0.9,3.3c-2.9,4.4-5.7,7.9-9,11.5
		c-1.2,1.4-2.5,2.9-1,4.5c1.6,1.7,3.2,0.3,4.4-1c1.8-2,4-3.5,6.5-4.4c2.3-0.8,4.3-0.3,5,2c0.5,1.6-0.7,3-2.4,3.8
		c-4.7,2.1-7.6,5.7-9,10.5c-0.5,1.6-1.1,3.6,0.7,4.7c1.6,1.1,3.1,0,4.3-1.2c2.2-2.3,4.6-4.7,6.5-7.2c1.5-1.9,2.6-4.8,8.2-4.7
		c1.3,0,3.2-0.3,3.1-2.2C581.3,26,579.7,25.7,578.3,25.6z M565.7,35.2c-1.3,1.5-2.8,2.5-3.3,2.1c-0.5-0.3,0.1-1.8,1.4-3.3
		s2.8-2.5,3.3-2.1C567.6,32.3,567,33.7,565.7,35.2z"/>
	<path d="M55.4,63.9c-6.5-1.3-11-4-13.8-5.7c-4.5-2.6-7.9-6.8-11.3-10.6c-4.4-4.9-3.5-7.9-2.3-14.1c0.8-4.1,2.1-5.8,3.2-9.2
		c1.7-2.6-0.2-3.3-2.9-4c-2-0.4-2.6,1.1-3,2.7c-0.3,1.3-0.5,2.6-0.8,3.9c-0.4,2.3-1.3,4.5-2.1,6.7c-4.6,12.8-9.4,21.1-18.1,32.6
		c-0.6,0.8-5,6.1-4.4,6.9c0.7,1,4,0.7,5.1,0.4c1.2-0.4,2-1.6,2.7-2.5c6.4-7.7,10-13.7,14.3-21c1.4-2.4,2.2-2.2,3.3-0.6
		c2.2,3,2.6,3.3,3.8,4.6c5.4,6.2,17.1,14.5,25.2,15.2c0.5,0,2.9,0,3.4-0.1c1.3-0.3,1-2.3-0.1-4C56.8,63.9,56.5,64.1,55.4,63.9z"/>
	<path d="M297.5,24.1c-0.8,0-1.7,0-2.6,0c-2,0-4.2,0.3-2.5-3c0.7-1.3-0.1-2.5-1.4-3.2c-1.5-0.8-2.4,0.1-3.2,1.2
		c-0.7,1.1-1.3,2.2-1.8,3.4c-1.1,2.5-2.6,4.2-5.5,4.7c-2.6,0.5-5,1.9-7.2,3.3c-1.4,0.9-1.8,2.2-0.9,3.5c0.9,1.3,2.2,1.1,3.4,0.5
		c0.8-0.4,1.5-1.1,2.3-1.6c0.6-0.4,2.2-1.7,2.9-1.2c0.8,0.6-0.8,2.1-1.1,2.8c-1.5,3.3-3,6.6-4.6,9.8c-0.7,1.4-1.1,2.8-0.3,4.2
		c0.3,0.6,0.9,0.9,1.6,0.8c1.7-0.4,2.2-1.9,2.7-3.3c0.1-0.4,0.1-0.8,0.3-1.2c1.4-4,3.5-7.6,6.1-11.7c0.8,3.3,1.3,6,2.4,8.5
		c0.7,1.6,1.5,2.9,3.4,2.9c1.8,0,2.9-1,3.6-2.6c2.1-4.4,3.7-9,5.2-13.7C301.4,25.4,300.4,24.2,297.5,24.1z M294.9,31.1
		c-0.4,2.4-1.5,4.6-2.6,6.8c-0.8,1.6-1.6,0.7-1.9-0.4c-0.8-2.5-0.6-5.1-0.2-7.5c0.3-1.6,1.7-1.7,3-1.4
		C294.7,28.8,295.2,29.7,294.9,31.1z"/>
	<path d="M338.3,21.1c-0.2-0.9-1.6-1.2-2.8-1.3c-1.4-0.2-5.4,1-7,1.3c-5.7,1.2-10.9,3.5-14.8,8.1c-1,1.1-0.9,2.4,0.4,3.3
		c1.1,0.8,2.3,0.7,3.1-0.5c2.9-4.1,7.3-5.3,11.7-6.6c2.7-0.8,3.6,0.1,3,2.9c-1,4.3-2.9,8.2-4.7,12.2c-5.8,12.5-14,23.6-20.7,35.6
		c-0.5,0.9-2.1,1.9-0.5,2.9c1.2,0.8,2.4-0.1,3.3-1.2c0.6-0.8,1.2-1.7,1.8-2.6c1.8-2.9,3.5-5.8,5.4-8.7c8.6-12.7,16.2-26,21.2-40.7
		C338.1,24.6,338.8,23.7,338.3,21.1z"/>
	<path d="M258.8,40.9c0,0-0.8-2.2-0.8-4.4c-0.1-2-0.3-3-0.4-6.6c-0.2-4.7-2-6.7-6.6-5.1c-4.1,1.5-8.2,3-12.2,4.7
		c-2.2,0.9-4.5,2-6.4,3.6c-0.9,0.7-1.4,1.7-0.7,2.8c0.6,1.1,1.6,1.4,2.8,1c0.8-0.3,1.5-0.8,2.2-1.2c5.4-3.3,8-4.3,12.3-5.8
		c2.9-1,3.6,0,3.7,3c0,1.7,0.3,3.2,0.4,4.8c0.2,4,1.5,3.7-6,6.4c-2.8,1-5.4,2.5-8,3.8c-1.1,0.6-2.2,1.6-1.6,3.1
		c0.7,1.8,1.9,1.3,3.2,1.1c1.5-0.2,1.7-0.6,3.4-1.2c2.4-0.9,3.7-1,5.6-2c2.7-1.4,2.6-1.5,4.1-2.4c3.4-2,4.1-1.9,5.8-3.4
		C259.4,43.1,259.2,41.7,258.8,40.9z"/>
	<path d="M217.4,44c0,0-0.8-2.2-0.8-4.4c-0.1-2-0.3-3-0.4-6.6c-0.2-4.7-2-6.7-6.6-5.1c-4.1,1.5-8.2,3-12.2,4.7
		c-2.2,0.9-4.5,2-6.4,3.6c-0.9,0.7-1.4,1.7-0.7,2.8c0.6,1.1,1.6,1.4,2.8,1c0.8-0.3,1.5-0.8,2.2-1.2c5.4-3.3,8-4.3,12.3-5.8
		c2.9-1,3.6,0,3.7,3c0,1.7,0.3,3.2,0.4,4.8c0.2,4,1.5,3.7-6,6.4c-2.8,1-5.4,2.5-8,3.8c-1.1,0.6-2.2,1.6-1.6,3.1
		c0.7,1.8,1.9,1.3,3.2,1.1c1.5-0.2,1.7-0.6,3.4-1.2c2.4-0.9,3.7-1,5.6-2c2.7-1.4,2.6-1.5,4.1-2.4c3.4-2,4.1-1.9,5.8-3.4
		C218,46.2,217.7,44.8,217.4,44z"/>
	<path d="M517.7,15.5c-0.8-0.3-10.7,4.7-3.7-2.6c0.6-0.6-0.4-1.1-0.4-1.1c-0.6-0.3-1.2-0.4-1.7-0.4c-1.1,0.1-1.3,0.3-2.1,1.8
		c-2.7,4.9-4.2,4.8-8.2,4.7c-1.1,0-2.9,0.2-3.2,1.4c-0.5,1.8,1.1,2.2,2.2,2.1c5.1-0.4,1.1,3.8,0.2,5.1c-2.6,3.7-4.2,7.9-4.7,12.4
		c-0.2,1.9-0.7,4.5,1.7,4.8c2.5,0.3,1.8-2.5,2.3-4.1c2.6-8.8,7.1-19.3,15.3-20.7C516.7,18.5,519.3,16.2,517.7,15.5z"/>
	<path d="M535.8,27.3c-0.9,0.1-1.8,0.2-2.7,0.3c-1.9,0.1-4.1,0.9-5.7,0.2c-2.3-1-0.6-3.7-1.2-5.5c-0.1-0.4-0.2-0.8-0.4-1.1
		c-0.4-0.8-1.1-1.2-2-1c-0.8,0.1-1.3,0.7-1.4,1.4c-0.1,0.8-0.2,1.6-0.2,2.4c0,3-0.6,4.6-4.1,6c-1.4,0.6-2.9,1.6-2.8,4
		c0,2.3,0.9,3.7,2.9,4.7c1.7,0.8,2.9-0.2,4.1-1.2c0.7-0.6,1.2-1.4,1.7-2.2c1.1-2,2.7-3.2,5-3.6c2.5-0.4,5-0.8,7.5-1.5
		c1-0.2,2.5-0.7,2.2-2.1C538.3,26.7,536.9,27.2,535.8,27.3z M520.9,34.6c-0.7,0.4-2,0.1-2.2-0.6s0.6-1.6,1.3-2
		c0.7-0.4,2.1-0.4,2.3,0.3S521.7,34.2,520.9,34.6z"/>
	<path d="M477.3,19c-4,2.6-7.5,4.7-11,7.9c-1.9,1.8-1.8,6.2,0.2,7.8c3.3,2.7,4.6,2.6,10.9,5.3c1.7,0.5,2.9,0.2,3.3-1.5
		c0.4-1.7-1.3-1.8-2.4-2.2c-1.1-0.4-2.4-0.5-3.5-0.9c-2.2-0.8-4.4-2-4.9-4.5c-0.5-2.2,1.5-3.6,2.9-4.6c2.3-1.5,4.8-2.8,6.5-3.5
		c1.3-0.5,2.6-1.3,1.8-2.9C480.3,18.1,478.7,18.1,477.3,19z"/>
	<path d="M600.1,23.1c-2.3-0.1-4.3,3.1-4.4,7c0,3.6,1.8,6,4.7,5.9c3.1,0,6.8-3.5,6.7-6.4C607.1,26.9,603.2,23.2,600.1,23.1z
		 M601.2,31.2c-0.7,0-1.2-0.6-1.2-1.5c0-1,0.5-1.8,1.1-1.8c0.8,0,1.7,0.9,1.8,1.7C602.8,30.3,601.9,31.2,601.2,31.2z"/>
	<path d="M135.9,32.9c-2.1-0.4-2.8,1.2-3.1,2.9c-0.8,4.1-2.4,11.1-1.7,15.9c0,2.1,0.4,1.8,0.7,4.4c0.2,1.8,1.8,3,3.5,2.6
		c1.9-0.5,1-2.1,0.7-3.3c-0.8-2.4-0.9-4.8-0.5-7.2c0.5-3.8,0.7-7.7,2.1-11.3C138.1,35.3,138.2,33.3,135.9,32.9z"/>
	<path d="M331.4,0c-6,1.1-11.6,3.4-16.5,7.2c-0.8,0.6-1.2,1.5-0.6,2.5c0.6,1,1.5,1.5,2.7,1.3c1-0.1,1.7-0.8,2.4-1.4
		c4.1-3.2,8.2-6.1,13.9-5c0.8,0.2,1.8-0.1,2.1-1c0.3-0.9-0.1-1.7-0.7-2.3C333.8,0.2,332.6,0.1,331.4,0z"/>
	<path d="M525.3,11.5c3,0.2,5.6,1.6,8.2,2.9c0.9,0.5,2,0.5,2.7-0.6c0.6-1,0.2-2-0.6-2.7c-2.6-2.3-5.8-3.2-8.9-4.1
		c-1.5,0-2.6,0.5-2.9,1.9C523.6,10.1,524,11.4,525.3,11.5z"/>
	<path d="M172.4,40.6c-1.8,0.1-3.6,0.3-5.5,0.5c-1.9,0.2-2.9-0.5-2.6-2.6c0.1-0.7,0.2-1.5,0.2-2.2c0.1-0.8,0-1.7,0.7-1.8
		c1.2-0.6,2.4-1.2,3.6-1.7c2.9-1.4,0.4-5.7-2.5-4.3c-0.7,0.3-1.7,0.8-2.3,1.1c-0.2-0.4-0.2-0.4-0.4-1.3c-0.2-1-0.5-2.1-0.6-3.2
		c-0.2-1.3-1-2.5-2.5-2.5c-1.2,0-2.7,1.2-2.5,2.5c0.3,2,0.8,4.6,1.3,6.5c-3.4,2.2-3.3,1.8-5.1,2.8c-1.3,0.6-2.7,1.3-4,1.9
		c-2.7,1.2-0.8,4.9,1.8,4.5c2.2-1,0.7-0.3,2.6-1.1c1.6-0.7,3.2-1.5,4.7-2.2c0.9,1.2,0.9,3-0.1,4.4c-0.3,0.5-0.9,0.8-1.4,1.2
		c-1.1,0.9-2.3,1.7-3.4,2.6c-1.9,1.7-2,5.2-0.3,6.9c1.6,1.6,3.8,1.5,6.3-0.1c1-0.6,2.2-2.1,2.7-2.5c3.6-3.5-0.4-6.1,8-5.5
		c0.5,0,1,0,1.5-0.1c1.1-0.1,2.5-0.3,2.5-1.7C175,40.9,173.7,40.6,172.4,40.6z M158.9,48.7c-1.3,0.6-1.5,0.3-1.8-0.3
		c-0.3-0.6-0.3-1,0.9-1.6c1.3-0.6,2.4-0.9,2.7-0.3C161,47.1,160.2,48.1,158.9,48.7z"/>
	<path d="M75.8,38.9c-0.8,1.9-1.8,3.7-2.9,5.5c-1.9,2.9,2.3,6.3,4.2,3.4c1.4-2.1,2.6-4.3,3.6-6.6c2.1,0.2,4.5-0.3,6.4-0.9
		c1.8-0.6,2.3,0.8,2.1,2.2c-0.3,1.3-0.3,2.3-1.4,2.7c-1.3,0.5-2.7,0.8-4.1,1.1c-1.8,0.5-4,1-3.4,3.6c0.6,2.5,2.5,1.8,4.5,1.4
		c1.9-0.4,3.1-0.9,3.5,0.7c0.6,2.1,0.7,5.7-5.3,7c-2.6,0.6-5.1,1.5-7.7,1.7c-1.6,0.2-2.6,1.3-2.3,3c0.2,1.7,1.6,2,3,1.9
		c1.2-0.1,2.4-0.4,3.5-0.8c10-3.3,20-7,30.6-7.7c1.3-0.1,3.2-0.5,2.8-2.5c-0.3-1.8-1.9-1.5-3.2-1.4c-5.2,0.2-8.1,1.7-15.2,2.6
		c-1,0.1-1-1.3-0.9-3.1c0.2-3.3,0.8-2.9,4.5-3.3c4-0.4,5.4-1.7,4.8-3.9c-0.5-2-3.7-1.6-5.3-1.2c-4.2,1.1-3.7-0.9-2.6-5
		c0.8-3,2.8-2.1,6.2-2.5c1.6-0.2,2.4-1.1,2.2-2.7c-0.1-1.5-1.3-2-2.5-2.1c-1.7-0.1,0,0-5.4,0.8c0.1-0.9,0.3-2.9,0.4-3.9
		c0.3-3.5-5-4.3-5.4-0.8c-0.2,2.3-0.3,3.5-0.4,5.8c-1.6,0.9-3.7,1.3-5.6,1.5c-0.7,0.1-1.4,0.3-2,0.4c0.7-2.5,1.2-5.1,1.5-7.7
		c0.3-3.5-5-4.3-5.4-0.8c-0.1,1.6-0.7,3.7-1,5.2c-0.4,1.6-1.1,3.8-1.3,4.9"/>
</g>
</svg>
                </div>
            </div>
            <div class="l-keyviasual">
                <div class="p-keyviasual">
                    <img class="p-keyviasual__bg" src="./images/top-pc.png" alt="">
                    <p class="p-keyviasual__bg"></p>
                    <!--

<video class="p-keyviasual__bg" poster="" autoplay loop muted>
            <source src="https://t.pimg.jp/mp4/005/734/849/1/5734849.mp4">

                </video>
-->
                </div>
                <div class="p-keyviasual__tagline">
                    <img src="./images/tagline.png" alt="">
                </div>
                <p class="p-keyviasual__text">18歳〜26歳限定「変わりたい」を実現する、<br> 半年集中型社会人インターン<br class="sp-only">「KOKOKARA（ココカラ）」</p>
                <div class="p-keyviasual__scroll">
                    <p class="p-keyviasual__scroll__text">SCROLL DOWN</p>
                    <svg class="p-keyviasual__scroll__arrow" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1000 1000" enable-background="new 0 0 1000 1000" xml:space="preserve"><g><path d="M887.2,209.2L499.7,589.1L112.8,209.7L10,310.5l489.7,480.3L990,310L887.2,209.2z"/></g></svg>
                </div>
            </div>
            <div class="l-about" id="about">
                <h2 class="c-sectiontitel is-show">About</h2>
                <p class="c-sectiontext is-show">KOKOKARAについて</p>
                <div class="p-about">
                    <img class="p-about__viasual is-show" src="./images/about.png" alt="">
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
                        <img class="c-card__media" src="./images/contents-1.jpg" alt="">
                        <div class="c-card__body">
                            <p class="c-card__body--copy"><span>半年間</span><br><span>給与ありで</span><br><span>学べる</span></p>
                            <p class="c-card__text">成果報酬型の営業実務を通してお金を稼ぎながら成長と半年後のネクストアップを見つけられます。</p>
                        </div>
                    </div>
                    <div class="c-card is-show">
                        <span class="c-bach">FEATURE</span>
                        <img class="c-card__media" src="./images/contents-2.jpg" alt="">
                        <div class="c-card__body">
                            <p class="c-card__body--copy"><span>各業界の</span><br><span>メンター・</span><br><span>講師の存在</span></p>
                            <p class="c-card__text">起業家、活躍している社会人、フリーランス、旅人etcジャンルが違うメンターからのサポートがあります。ロールモデルから直接話を聞ける体験は貴重です。</p>
                        </div>
                    </div>
                    <div class="c-card is-show">
                        <span class="c-bach">FEATURE</span>
                        <img class="c-card__media" src="./images/contents-3.jpg" alt="">
                        <div class="c-card__body">
                            <p class="c-card__body--copy"><span>定期的な</span><br><span>キャリア</span><br><span>面談</span></p>
                            <p class="c-card__text">半年終了後のネクストステップをメンターと共に考える時間です。希望の業界への就職（転職）、海外留学、企業etc 未来を共に描きます。</p>
                        </div>
                    </div>
                    <div class="c-card is-show">
                        <span class="c-bach">FEATURE</span>
                        <img class="c-card__media" src="./images/contents-4.jpg" alt="">
                        <div class="c-card__body">
                            <p class="c-card__body--copy">
                                <span>実務・</span><br><span>研修での</span><br><span>成果</span></p>
                            <p class="c-card__text">日々の営業実績・各種研修を行うことで思考力・コミュニケーション能力etc　様々なスキルが身につきます。</p>
                        </div>
                    </div>
                    <div class="c-card is-show">
                        <span class="c-bach">FEATURE</span>
                        <img class="c-card__media" src="./images/contents-5.jpg" alt="">
                        <div class="c-card__body">
                            <p class="c-card__body--copy">
                                <span>人生レベルの</span><br><span>仲間が</span><br><span>できる</span>
                            </p>
                            <p class="c-card__text">日々の営業実績・各種研修を行うことで思考力・コミュニケーション能力etc　様々なスキルが身につきます。</p>
                        </div>
                    </div>
                    <div class="c-card is-show">
                        <span class="c-bach">FEATURE</span>
                        <img class="c-card__media" src="./images/contents-6.jpg" alt="">
                        <div class="c-card__body">
                            <p class="c-card__body--copy">
                                <span>半年</span><br><span>終了後の</span><br><span>奨学金</span></p>
                            <p class="c-card__text">半年終了後に、ネクストステップ（転職、留学、企業etc）に映る際、半年間の成果に応じて新たなチャレンジを応援する奨学金を支給します。（数万〜数十万）</p>
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
                        <img class="c-card__media" src="./images/schedule-1.jpg" alt="">
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
                        <img class="c-card__media" src="./images/schedule-2.jpg" alt="">
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
                        <img class="c-card__media" src="./images/schedule-3.jpg" alt="">
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
                        <img class="c-card__media" src="./images/schedule-4.jpg" alt="">
                        <div class="c-card__body">
                            <span class="c-bach">STEP4</span>
                            <h3 class="c-card__title">望んだキャリアで実績を残す方法 を学ぶ</h3>
                            <input id="4" type="checkbox">
                            <div class="contains">
                                <p class="c-card__text">どのキャリアを選んでもサポートさせていただきますが、どのキャリアを選んだとしても望んだライフスタイル・ワークスタイルを実現させるためには仕事は切っても切り離せない関係にあります。ここでは商材選定から、提案、契約後のフォローまで、リアルなビジネスを実体験することで、高いビシネススキルを学ぶことができます。セールス、マネジメント、人事を通して倫理的思考やコミュニケーション能力などのビジネススキルを包括的に習得することで、どの進路に進んでも十分な実績が積める環境を日々創り続けています。</p>
                            </div>
                            <label class="c-card__arrow" for="4"></label>
                        </div>
                    </div>
                    <div class="c-card is-show">
                        <img class="c-card__media" src="./images/schedule-5.jpg" alt="">
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
                        <img class="c-card__media" src="./images/schedule-6.jpg" alt="">
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
                <p class="c-sectiontext is-show">多様な生きる道で活躍する推薦者（アンバサダー）の声</p>
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
                                                    <img class="p-slides__media" src="./images/slider-3.png" alt="">
                                                    <div class="p-slides__body">
                                                        <div class="p-slides__body--title">KOKOKARA 第1期卒業生</div>
                                                        <div class="p-slides__body--name"><span>村川 昂功</span>MURAKAWA TAKANORI</div>
                                                        <div class="p-slides__body--text">ここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入ります</div>
                                                    </div>
                                                </div>
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
                                            </div>
                                            <div class="slides--pc">
                                                <div class="slide">
                                                    <img class="p-slides__media" src="./images/slider-3.png" alt="">
                                                    <div class="p-slides__body">
                                                        <div class="p-slides__body--title">KOKOKARA 第1期卒業生</div>
                                                        <div class="p-slides__body--name"><span>村川 昂功</span>MURAKAWA TAKANORI</div>
                                                        <div class="p-slides__body--text">ここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入ります</div>
                                                    </div>
                                                </div>
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
                                            </div>
                                            <div class="slides--pc">
                                                <div class="slide">
                                                    <img class="p-slides__media" src="./images/slider-3.png" alt="">
                                                    <div class="p-slides__body">
                                                        <div class="p-slides__body--title">KOKOKARA 第1期卒業生</div>
                                                        <div class="p-slides__body--name"><span>村川 昂功</span>MURAKAWA TAKANORI</div>
                                                        <div class="p-slides__body--text">ここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入ります</div>
                                                    </div>
                                                </div>
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
                                            </div>
                                            <div class="slides--pc">
                                                <div class="slide">
                                                    <img class="p-slides__media" src="./images/slider-3.png" alt="">
                                                    <div class="p-slides__body">
                                                        <div class="p-slides__body--title">KOKOKARA 第1期卒業生</div>
                                                        <div class="p-slides__body--name"><span>村川 昂功</span>MURAKAWA TAKANORI</div>
                                                        <div class="p-slides__body--text">ここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入ります</div>
                                                    </div>
                                                </div>
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
                                            </div>
                                            <div class="slides--pc">
                                                <div class="slide">
                                                    <img class="p-slides__media" src="./images/slider-3.png" alt="">
                                                    <div class="p-slides__body">
                                                        <div class="p-slides__body--title">KOKOKARA 第1期卒業生</div>
                                                        <div class="p-slides__body--name"><span>村川 昂功</span>MURAKAWA TAKANORI</div>
                                                        <div class="p-slides__body--text">ここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入りますここに100文字程で感想が入りますここに100文字程度で感想が入りますここに100文字程度で感想が入ります</div>
                                                    </div>
                                                </div>
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
                        <p>東京在住ではないのですが参加は可能ですか？</p>
                        </label>
                        <div class="p-qa__container--a">
                            <span>A.</span>
                            <p>可能です。当サービスは、そのような方のために始まったサービスです。</p>
                        </div>
                    </div>
                    <div class="c-accordion is-show">
                        <input id="qa2" type="checkbox">
                        <label class="p-qa__container--q" for="qa2">
                       <span>Q.</span>
                       <p>今すぐに参加が難しいのですが大丈夫でしょうか？</p>
                    </label>
                        <div class="p-qa__container--a">
                            <span>A.</span>
                            <p>可能です。当サービスは、そのような方のために始まったサービスです。</p>
                        </div>
                    </div>
                    <div class="c-accordion is-show">
                        <input id="qa3" type="checkbox">
                        <label class="p-qa__container--q" for="qa3">
                       <span>Q.</span>
                       <p>働いたことがほとんどありませんが大丈夫でしょうか？</p>
                    </label>
                        <div class="p-qa__container--a">
                            <span>A.</span>
                            <p>可能です。当サービスは、そのような方のために始まったサービスです。</p>
                        </div>
                    </div>
                    <div class="c-accordion is-show">
                        <input id="qa4" type="checkbox">
                        <label class="p-qa__container--q" for="qa4">
                       <span>Q.</span>
                       <p>今年で25歳になりますがまだ参加できますか？</p>
                    </label>
                        <div class="p-qa__container--a">
                            <span>A.</span>
                            <p>可能です。当サービスは、そのような方のために始まったサービスです。</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.l-qa -->
            <div class="l-partner">
                <h2 class="c-sectiontitel--sub is-show">Partner</h2>
                <div class="c-sectiontext is-show">コンテンツ提供企業様・進路先企業様など</div>
                <img class="sp-only is-show" src="images/partner.png" alt="">
                <img class="pc-only is-show" src="images/partner-pc.png" alt="">
            </div>
            <!-- /.l-partner -->
            <div class="l-messege">
                <div class="p-bg--blur">
                    <h2 class="c-sectiontitel is-show">Messege</h2>
                    <p class="c-sectiontext is-show">メッセージ</p>
                </div>
                <div class="p-messege is-show">
                    <h3 class="p-messege--title">創り出そう自分の未来。</h3>
                    <p class="p-messege--text">後悔のない人生を歩める人を増やす。そう思ってKOKOKARAを立ち上げました。自分が本当にやりたいことに向き合い、果敢にチャレンジする。そんな人を増やすことがKOKOKARAの目的です。半年終了後は自分の理想に向き合い就職しても良し、起業してもよし、フリーランスになっても良し、海外に留学してワーキングホリデーしてもよし、共にKOKOKARAを創り上げる運営メンバーになるもよし、あなたにしか描けない人生がそこにはあります。 「変わりたい、チャレンジしたい。でも、どうしたらいいかわからない、何から始めればいいかわからない」そんな18歳〜26歳の社会人の補助翼になれることを目指しています。
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
                            <input type="text" name="name" value="<?php if( !empty($_POST['name']) ){ echo $_POST['your_name']; } ?>" required>
                        </div>
                        <div class="element_wrap is-show">
                            <label>メールアドレス<span class="c-bach--entry">必須</span></label>
                            <input type="email" name="email" value="<?php if( !empty($_POST['email']) ){ echo $_POST['email']; } ?>" required>
                        </div>
                        <div class="element_wrap is-show">
                            <label>電話番号<span class="c-bach--entry">必須</span></label>
                            <input type="tel" name="tel" value="<?php if( !empty($_POST['tel']) ){ echo $_POST['tel']; } ?>" required>
                        </div>
                        <div class="element_wrap is-show">
                            <label>お問い合わせ内容</label>
                            <textarea name="contact"><?php if( !empty($_POST['contact']) ){ echo $_POST['contact']; } ?></textarea>
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
            <small class="p-copyright">ここにコピーが入ります</small>
        </footer>
        <!-- /.l-footer -->
    </div>

    <script src="./js/smooth-scroll.js"></script>
    <script src="./js/scrollreveal.min.js"></script>
    <script src="./js/contact.js"></script>
    <script>
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

    </script>
</body>

</html>
