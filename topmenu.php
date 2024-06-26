<?php if ($now == 'INDEX') : ?>
    <div id="index-preload" class="index-preload flex-container align-center-middle">
        <!-- <div class="logo"><img src="./images/index-preload-logo.svg" alt=""></div> -->
        <video src="https://player.vimeo.com/progressive_redirect/playback/940757470/rendition/1080p/file.mp4?loc=external&log_user=0&signature=8363d25095ebe3d9e11cee2fd5bafacb67f7fde712eea951eb59d425a2b6bd1f" autoplay muted playsinline></video>
    </div>

<?php else : ?>
    <div id="preload" style="z-index: 100; position: fixed; top: 0; right: 0; bottom: 0; left: 0; background-color: #fff;"></div>
<?php endif ?>

<nav class="<?php if ($now == 'INDEX') : ?>is-clip <?php endif ?>flex-container align-justify">

    <div class="<?php if ($now == 'INDEX') : ?>is-move <?php endif ?>bg hide-for-large">
        <svg id="b" data-name="圖層 2" xmlns="http://www.w3.org/2000/svg" width="1024" height="167.48" viewBox="0 0 1024 167.48">
            <defs>
                <style>
                    .d {
                        fill: #ea5504;
                    }
                </style>
            </defs>
            <g id="c" data-name="menu">
                <path class="d" d="M1024,0V84.39c-122.99,50.82-306.44,83.09-511.34,83.09S122.99,134.99,0,83.84V0H1024Z" />
            </g>
        </svg>
    </div>
    <div class="now-page flex-container align-middle">
        <div class="icon show-for-large"><img src="./images/top-now.svg"></div>
        <div class="arrow show-for-large"><img src="./images/now-arrow.svg"></div>
        <div class="arrow hide-for-large"><img src="./images/now-arrow-mobile.svg"></div>
        <div class="name"><?php echo $menu; ?></div>
        <div class="page">(<span class="now"><?php echo $number; ?></span>/<span class="total">07</span>)</div>
    </div>
    <div class="logo">
        <a href="./main.php">
            <img src="./images/logo.svg" class="show-for-large">
            <img src="./images/logo-mobile.svg" class="hide-for-large">
        </a>
    </div>
    <div class="menuWrap show-for-large" id="mouseTarget">
        <div class="menu">
            <div class="circle"><img src="./images/menu.svg"></div>
            <ul class="menuList">
                <li>
                    <a href="javascript:;">INDEX</a>
                </li>
                <li>
                    <a href="javascript:;">ABOUT</a>
                </li>
                <li>
                    <a href="javascript:;">OUR TEA</a>
                </li>
                <li>
                    <a href="javascript:;">NEWS</a>
                </li>
                <li>
                    <a href="javascript:;">STORE</a>
                </li>
                <li>
                    <a href="javascript:;">RECRUIT</a>
                </li>
                <li>
                    <a href="javascript:;">CONTACT</a>
                </li>
            </ul>
        </div>
        <div class="menu-hover">
            <div class="circle-hover">
                <img src="./images/menu-hover.svg">
                <div class="copyright"><img src="./images/menu-copyright.svg" alt=""></div>
            </div>
            <ul class="menuList-hover">
                <li>
                    <a href="./main.php">首页</a>
                </li>
                <li>
                    <a href="./about.php">关于KOI</a>
                </li>
                <li>
                    <a href="./ourtea.php">饮品列表</a>
                </li>
                <li>
                    <a href="./news.php">最新消息</a>
                </li>
                <li>
                    <a href="./store.php">全球据点</a>
                </li>
                <li>
                    <a href="./recruit.php">伙伴招募</a>
                </li>
                <li>
                    <a href="./contact.php">联络我们</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="hamburger hide-for-large">
        <img src="./images/hamburger.svg">
    </div>
    <div class="menu-mobileWrap hide-for-large">
        <div class="menu">
            <div class="circle">
                <img class="show-for-medium" src="./images/menu-bg-ipad.svg">
                <img class="hide-for-medium" src="./images/menu-bg.svg">
                <!-- <div class="copyright"><img src="./images/menu-copyright.svg" alt=""></div> -->
                <div class="close"><img src="./images/menu-close-mobile.svg"></div>
            </div>
            <ul class="menuList">
                <li class="index">
                    <a href="./main.php">首页</a>
                </li>
                <li class="about">
                    <a href="./about.php">关于KOI</a>
                </li>
                <li class="ourtea">
                    <a href="./ourtea.php">饮品列表</a>
                </li>
                <li class="news">
                    <a href="./news.php">最新消息</a>
                </li>
                <li class="store">
                    <a href="./store.php">全球据点</a>
                </li>
                <li class="recruit">
                    <a href="./recruit.php">伙伴招募</a>
                </li>
                <li class="contact">
                    <a href="./contact.php">联络我们</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="bg-hover"></div>
</nav>