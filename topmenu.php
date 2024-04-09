<?php if ($now == 'INDEX') : ?>
    <div id="index-preload" class="index-preload flex-container align-center-middle">
        <div class="logo"><img src="./images/index-preload-logo.svg" alt=""></div>
    </div>
<?php else : ?>
    <div id="preload" style="z-index: 100; position: fixed; top: 0; right: 0; bottom: 0; left: 0; background-color: #fff;"></div>
<?php endif ?>
<?php if ($now == 'INDEX') : ?>
    <nav class="is-move flex-container align-justify">
    <?php else : ?>
        <nav class="flex-container align-justify">
        <?php endif ?>
        <div class="now-page flex-container align-middle">
            <div class="icon"><img src="./images/top-now.svg"></div>
            <div class="arrow"><img src="./images/now-arrow.svg"></div>
            <div class="name"><?php echo $menu; ?></div>
            <div class="page">(<span class="now"><?php echo $number; ?></span>/<span class="total">07</span>)</div>
        </div>
        <div class="logo"><img src="./images/logo.svg"></div>
        <div class="menuWrap" id="mouseTarget">
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
        <div class="bg-hover"></div>
        </nav>