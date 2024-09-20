<?php if ($now == 'INDEX') : ?>

    <div id="index-preload" class="index-preload flex-container align-center-middle">
        <!-- <div class="logo"><img src="./images/index-preload-logo.svg" alt=""></div> -->
        <!-- <video src="https://player.vimeo.com/progressive_redirect/playback/991515014/rendition/1080p/file.mp4?loc=external&log_user=0&signature=f9060f8dabe3c6d8e5675bbc22b946d7c80e8612893fa39a4487e13ca4275155" autoplay muted playsinline></video> -->
        <video data-dashjs-player="" src="https://customer-2m570twtvas9nf5x.cloudflarestream.com/0934b4f6eab03ebf46984761fabc6a1a/manifest/video.mpd" autoplay muted playsinline></video>

        <div class="skip" id="skip">
            <svg id="b" data-name="圖層 2" xmlns="http://www.w3.org/2000/svg" width="47.22" height="36.96" viewBox="0 0 47.22 36.96">
                <g id="c" data-name="圖層 1">
                    <g class="arrow">
                        <line class="e" x1="21.22" y1="6.98" x2="35.59" y2="6.98" />
                        <path class="d" d="M26.11,13.64c-.21-.32-.11-.75,.21-.96l8.95-5.7L26.32,1.28c-.32-.21-.42-.64-.21-.96,.21-.32,.64-.42,.96-.21l9.87,6.29c.2,.13,.32,.35,.32,.59s-.12,.46-.32,.59l-9.87,6.29c-.12,.07-.25,.11-.37,.11-.23,0-.45-.11-.59-.32Z" />
                    </g>
                    <g>
                        <path class="d" d="M3.56,36.96c-1.15-.67-2.03-1.56-2.64-2.67s-.92-2.38-.92-3.81,.31-2.7,.92-3.82,1.49-2,2.64-2.67l.76,.9c-.96,.58-1.7,1.35-2.21,2.31-.51,.96-.77,2.05-.77,3.28s.26,2.3,.77,3.27,1.25,1.73,2.21,2.3l-.76,.91Z" />
                        <path class="d" d="M13.24,34.09c-.78,0-1.54-.15-2.27-.46-.73-.31-1.37-.74-1.93-1.3l.9-1.04c.53,.52,1.08,.91,1.63,1.16,.56,.25,1.14,.38,1.74,.38,.48,0,.89-.07,1.25-.2,.36-.13,.64-.33,.83-.58,.2-.25,.29-.54,.29-.85,0-.44-.15-.77-.46-1.01-.31-.23-.82-.41-1.53-.53l-1.64-.27c-.9-.16-1.57-.45-2.01-.87s-.67-.98-.67-1.68c0-.56,.15-1.05,.45-1.48s.72-.75,1.27-.99,1.18-.35,1.9-.35,1.41,.11,2.09,.34,1.3,.56,1.86,.99l-.81,1.12c-1.05-.8-2.12-1.2-3.21-1.2-.43,0-.8,.06-1.12,.18s-.56,.29-.74,.51c-.18,.22-.27,.47-.27,.76,0,.4,.13,.71,.41,.92,.27,.21,.72,.36,1.34,.46l1.58,.27c1.04,.17,1.8,.47,2.28,.91s.73,1.04,.73,1.81c0,.6-.16,1.12-.49,1.58-.33,.45-.78,.8-1.37,1.06-.59,.25-1.27,.38-2.04,.38Z" />
                        <path class="d" d="M18.97,33.95v-9.8l1.4-.27v6.06l3.46-3.12h1.64l-3.68,3.33,3.88,3.79h-1.85l-3.44-3.35v3.35h-1.4Z" />
                        <path class="d" d="M27.64,25.68c-.23,0-.43-.09-.6-.26s-.25-.38-.25-.61,.08-.45,.25-.61,.37-.25,.6-.25,.45,.08,.62,.25,.25,.37,.25,.61-.08,.44-.25,.61-.37,.26-.62,.26Zm-.7,8.27v-7.13h1.4v7.13h-1.4Z" />
                        <path class="d" d="M30.62,36.81v-9.98h1.39v.69c.6-.53,1.33-.8,2.18-.8,.67,0,1.28,.16,1.83,.49,.55,.33,.98,.77,1.29,1.32s.48,1.17,.48,1.86-.16,1.31-.48,1.87c-.32,.56-.76,1-1.3,1.32s-1.16,.49-1.84,.49c-.39,0-.77-.06-1.13-.19-.36-.13-.7-.31-1.01-.54v3.47h-1.4Zm3.39-3.96c.46,0,.87-.11,1.23-.32,.36-.21,.65-.51,.86-.88,.21-.37,.32-.79,.32-1.25s-.11-.89-.32-1.26c-.21-.37-.5-.67-.86-.88-.36-.21-.77-.32-1.23-.32-.4,0-.77,.07-1.12,.22-.34,.15-.63,.36-.87,.63v3.22c.23,.26,.53,.47,.88,.62,.35,.15,.72,.22,1.11,.22Z" />
                        <path class="d" d="M43.67,23.94c1.15,.67,2.03,1.56,2.64,2.67s.92,2.38,.92,3.81-.31,2.7-.92,3.82-1.49,2-2.64,2.67l-.76-.9c.96-.58,1.7-1.35,2.21-2.31,.51-.96,.77-2.05,.77-3.28s-.26-2.3-.77-3.27c-.51-.97-1.25-1.73-2.21-2.3l.76-.91Z" />
                    </g>
                </g>
            </svg>
        </div>
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
    <div class="now-page flex-container align-middle <?php if (isset($now) && ($now == 'INDEX' && $ran == 1)) : ?>is-light <?php endif ?>">
        <div class="icon show-for-large"><img src="./images/top-now.svg"></div>
        <div class="arrow show-for-large"><img src="./images/now-arrow.svg"></div>
        <div class="arrow hide-for-large"><img src="./images/now-arrow-mobile.svg"></div>
        <div class="name"><?php echo $menu; ?></div>
        <div class="page">(<span class="now"><?php echo $number; ?></span>/<span class="total">07</span>)</div>
    </div>
    <div class="logo">
        <a href="./main.php">
            <svg class="show-for-large" id="c" data-name="圖層 2" xmlns="http://www.w3.org/2000/svg" width="183.88" height="38.69" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 183.88 38.69">
                <defs>
                    <symbol id="a" viewBox="0 0 238.8 50.25">
                        <g>
                            <path class="e" d="M116.37,50.25" />
                            <g>
                                <path class="f" d="M35.28,37.6c-.75-.12-1.87-.27-2.46-.34-.16-.02-.28-.14-.31-.3L27.66,6.89c-.02-.15,.12-.28,.27-.24,.85,.21,1.79,.5,2.54,.76,.12,.04,.21,.15,.23,.28l4.82,29.66c.02,.15-.1,.27-.25,.25h.01Z" />
                                <path class="f" d="M22.75,33.33c-3.23,0-5.87-2.63-5.87-5.87s2.63-5.87,5.87-5.87,5.87,2.63,5.87,5.87-2.63,5.87-5.87,5.87Zm0-9.03c-1.74,0-3.16,1.42-3.16,3.16s1.42,3.16,3.16,3.16,3.16-1.42,3.16-3.16-1.42-3.16-3.16-3.16Z" />
                                <path class="f" d="M29.87,4.55c-3.37-1.09-7.41-1.68-11.65-1.68s-8.27,.57-11.63,1.68c-.15,.05-.31-.08-.28-.24l.41-2.47c.02-.14,.12-.25,.25-.29,3.28-1.01,7.21-1.55,11.26-1.55s7.98,.54,11.26,1.55c.13,.04,.23,.15,.25,.29l.41,2.46c.03,.16-.12,.29-.28,.24h0Z" />
                                <path class="f" d="M36.18,43.13c-3.71-.64-8.64-1.08-14.16-1.21-.11,0-.19,.12-.13,.22l4.43,7.45c.09,.14-.02,.33-.19,.33h-2.99c-.13,0-.25-.07-.31-.18l-4.55-7.68c-.07-.11-.19-.18-.31-.18-6.98,.02-13.27,.52-17.72,1.31-.15,.03-.27-.1-.25-.25l.38-2.33c.02-.15,.14-.27,.29-.3,4.05-.68,9.52-1.13,15.6-1.22,.11,0,.18-.12,.12-.22l-7.4-12.49c-.07-.12-.21-.17-.33-.13-.95,.3-1.93,.54-2.92,.7-.12,.02-.22,.12-.24,.24l-1.58,9.81c-.03,.16-.15,.28-.31,.3-.7,.09-1.71,.23-2.47,.35-.15,.02-.27-.1-.25-.25L5.73,7.69c.02-.13,.11-.24,.24-.28,.7-.25,1.8-.58,2.53-.76,.15-.04,.29,.09,.27,.25l-2.7,16.75c-.02,.1,.08,.19,.18,.17,3.78-.86,7.26-2.9,9.87-5.82,2.98-3.33,4.68-7.65,4.81-12.12,0-.16,.14-.29,.3-.28,.66,.04,1.89,.16,2.43,.22,.15,.02,.26,.14,.25,.29-.17,5.29-2.25,10.36-5.88,14.23-1.75,1.87-3.81,3.4-6.06,4.55-.15,.08-.2,.26-.12,.4l8.11,13.62c.06,.11,.18,.17,.31,.18,6.05,.08,11.43,.51,15.48,1.17,.15,.03,.27,.15,.3,.3l.38,2.33c.02,.15-.1,.27-.25,.25h0Z" />
                            </g>
                            <g>
                                <polygon class="f" points="156.01 31.76 165.7 31.76 165.7 7.25 172.7 7.25 172.7 31.76 182.38 31.76 182.38 37.46 156.01 37.46 156.01 31.76" />
                                <path class="f" d="M117.61,33.64c-1.5,1.42-3.26,2.51-5.27,3.28-2.01,.77-4.22,1.15-6.62,1.15s-4.61-.39-6.62-1.17-3.77-1.88-5.27-3.3-2.67-3.07-3.49-4.97-1.24-3.99-1.24-6.27,.41-4.34,1.24-6.25c.82-1.91,1.99-3.57,3.49-4.99s3.27-2.52,5.29-3.3c2.02-.78,4.24-1.17,6.64-1.17s4.56,.38,6.57,1.15,3.77,1.86,5.27,3.28,2.67,3.09,3.49,5.01,1.24,4.01,1.24,6.27-.41,4.38-1.24,6.29c-.82,1.91-1.99,3.57-3.49,4.99h.01Zm-3.1-15.21c-.48-1.17-1.15-2.2-2.02-3.08-.87-.88-1.87-1.56-3.02-2.04-1.14-.48-2.39-.72-3.75-.72s-2.62,.24-3.77,.72c-1.16,.48-2.16,1.16-3.02,2.04-.85,.88-1.52,1.91-2,3.08s-.72,2.48-.72,3.93,.24,2.76,.72,3.93,1.14,2.2,2,3.08c.85,.88,1.86,1.56,3.02,2.04,1.16,.48,2.41,.72,3.77,.72s2.61-.24,3.75-.72,2.15-1.16,3.02-2.04c.87-.88,1.54-1.91,2.02-3.08,.48-1.17,.72-2.48,.72-3.93s-.24-2.76-.72-3.93Z" />
                                <rect class="f" x="127.83" y="7.24" width="7.04" height="30.22" />
                                <path class="f" d="M199.63,30.93c-2.32,0-4.47-.74-6.23-1.99v8.52h-6.74V7.24h6.74v12.94c0,2.84,2.3,5.14,5.14,5.14s5.14-2.3,5.14-5.14v-.07h0V7.23h6.74v12.88c0,5.97-4.84,10.8-10.8,10.8v.02Z" />
                                <path class="f" d="M76.63,24.2l9.53,13.27h-8.04l-8.09-11.26c-1.16,.16-2.4,.25-3.72,.25-.64,0-1.25-.03-1.85-.06v11.06h-6.95V7.24h6.95v13.45c.6,.07,1.22,.11,1.85,.11,7.14,0,12.61-4.46,12.61-13.56h7.07c0,5.88-2.32,13.29-9.37,16.95h.01Z" />
                                <path class="f" d="M238.77,22.54c-.4,4.51-4.23,8.76-12.21,8.36-7.81-.39-12.35-5.43-12.35-12.13,0-.66,.05-1.3,.14-1.93,.23-1.57,.73-3.01,1.52-4.31,1.11-1.82,2.67-3.26,4.68-4.31,2.01-1.05,4.36-1.58,7.04-1.58,2.13,0,4.01,.33,5.64,.99s2.99,1.6,4.07,2.82l-3.63,3.94c-.79-.76-1.66-1.33-2.6-1.71-.95-.38-2.03-.57-3.26-.57-1.43,0-2.65,.26-3.67,.77-1.02,.51-1.82,1.25-2.41,2.21-.32,.53-.54,1.12-.69,1.76h12.61c3.95,0,5.39,2.56,5.12,5.69h0Zm-7.16-1.45l-10.61-.02s.79,4.43,5.9,4.78c4.01,.28,5.83-1.46,6.19-2.62,.32-1.01,.09-2.15-1.49-2.15h.01Z" />
                                <path class="f" d="M223.21,34.98s-.12-.11-.14-.15c-.04-.07-.08-.15-.02-.18,.05-.03,.18-.04,.28-.05,.08,0,.18,.05,.26,.06,.09,0,.17,.02,.26,.03,.09,.01,.17,.04,.25,.05,.09,.01,.18,.01,.26,.03,.09,.02,.18,.01,.26,.02,.09,.01,.17,.03,.26,.04,.07,0,.14,.11,.23,.14,.08,.03,.21-.01,.24-.12,.02-.05-.05-.12-.04-.18,0-.06,.02-.09-.02-.15-.03-.05-.05-.08-.14-.12-.05-.02-.12-.05-.19-.06s-.13-.04-.09-.12c.06-.1,.14-.09,.21-.08,.08,.02,.18,.03,.26,.04s.13,.1,.21,.11c.08,.01,.16,.01,.24,.03s.17-.02,.25,0c.08,.01,.15,.07,.23,.08s.16,0,.24,.01c.08,0,.17-.03,.25-.02s.16,0,.24,0,.16,.06,.24,.07c.08,0,.16,.02,.24,.03,.08,0,.16,.03,.24,.04,.08,0,.16,0,.24,.01,.08,0,.16,.02,.24,.03,.08,0,.16-.04,.25-.03,.08,0,.16,.01,.24,.02,.08,0,.16-.05,.24-.05s.16,.01,.24,.01,.16,.06,.24,.06,.16-.04,.24-.04h.25c.08,0,.16,.05,.25,.06h.25c.08,0,.16,.08,.24,.09s.16,.02,.24,.04l.24,.06c.08,.02,.16,.03,.24,.05s.16,.05,.24,.08c.08,.02,.15,.06,.23,.09s.18,0,.25,.03c.08,.03,.15,.08,.22,.11,.08,.03,.18,.01,.25,.04,.08,.03,.14,.09,.22,.13s.14,.09,.22,.13c.07,.04,.16,.06,.23,.1,.07,.04,.16,.07,.23,.11,.07,.04,.09,.18,.16,.23,.07,.05,.21-.02,.29,.03,.08,.04,.15,.08,.23,.12s.14,.12,.21,.16c.08,.04,.13,.14,.2,.18,.08,.05,.16,.09,.23,.14,.07,.05,.18,.06,.25,.13,.07,.06,.07,.19,.13,.26,.06,.07,.09,.15,.14,.23,.05,.09,.1,.17,.15,.25,.05,.09,.15,.15,.19,.24,.04,.09-.02,.2,0,.3s.08,.17,.07,.24c0,.09-.04,.16-.08,.21-.04,.06-.12,.08-.18,.11-.06,.04-.13,.05-.2,.08-.07,.03-.12,.09-.18,.13-.1,.06-.18,.08-.23,.03s-.13-.14-.17-.23c-.03-.09-.03-.16-.09-.21-.06-.04-.07-.18-.14-.23-.06-.04-.21-.01-.21,0,0,0,0,.13,.05,.21,.03,.08,.03,.17,.06,.25,.04,.08,.16,.13,.19,.21s0,.17-.02,.25c0,.08-.03,.13-.08,.2-.04,.05-.08,.09-.15,.14-.05,.04-.09,.12-.16,.15-.08,.03-.02,.07,0,.15,.03,.07,.06,.15,.08,.22,.03,.06-.04,.15-.08,.23-.03,.06-.03,.16-.08,.22-.04,.06-.08,.14-.13,.19-.05,.06-.17,.04-.22,.08-.07,.06-.12,.13-.15,.15-.09,.07-.16,.06-.2,0-.04-.07-.03-.2-.09-.23-.09-.03-.18-.03-.26-.07s-.15-.13-.23-.18-.16-.08-.24-.13-.16-.09-.24-.14-.12-.15-.19-.21-.19-.05-.26-.11c-.07-.06-.15-.11-.22-.17s-.09-.18-.16-.24c-.07-.06-.16-.09-.23-.15-.07-.05-.13-.13-.2-.18-.06-.04-.18,0-.26-.03-.07-.03-.14-.07-.21-.1-.07-.03-.15-.03-.23-.05s-.15-.08-.22-.1c-.09-.03-.19-.07-.27-.11-.09-.04-.15-.13-.24-.18-.08-.04-.2-.02-.29-.06s-.14-.17-.24-.2c-.08-.02-.17-.02-.25-.05-.08-.02-.17-.02-.25-.04-.08-.02-.16-.06-.24-.08-.08-.02-.18,0-.26-.02s-.15-.13-.23-.15c-.08-.02-.18,.01-.26-.01s-.16-.07-.24-.1c-.08-.02-.17-.03-.25-.06-.08-.02-.16-.07-.24-.09s-.16-.04-.25-.06c-.08-.02-.16-.08-.24-.1s-.17,0-.25-.03c-.08-.02-.16-.07-.24-.09s-.16-.05-.25-.07c-.08-.02-.17-.02-.25-.04-.08-.02-.18,0-.26-.02s-.17-.04-.25-.06-.15-.08-.23-.11-.14-.09-.22-.12-.18-.02-.26-.05-.15-.07-.23-.1c-.08-.03-.14-.08-.21-.12-.08-.03-.18-.03-.26-.06-.07-.03-.17-.05-.24-.09s-.1-.11-.17-.15c-.07-.04-.11-.09-.17-.13s-.15-.06-.21-.11c-.05-.04-.13-.06-.2-.09-.07-.02-.15-.03-.21-.06-.06-.03-.07-.06-.1-.12-.03-.05,0-.08,0-.13s0-.08,.03-.13c.02-.04,0-.09,.05-.13,.04-.04,.06-.09,.11-.12s.11-.06,.17-.09,.17,0,.24-.03c.07-.02,.11-.06,.19-.07,.07-.02,.24-.05,.24-.05l.05,.04Z" />
                            </g>
                        </g>
                    </symbol>
                </defs>
                <g id="d" data-name="c">
                    <use width="238.8" height="50.25" transform="translate(0 38.69) scale(.77 -.77)" xlink:href="#a" />
                </g>
            </svg>
            <img src="./images/logo-mobile.svg" class="hide-for-large">
        </a>
    </div>
    <div class="menuWrap show-for-large <?php if (isset($now) && ($now == 'INDEX' && $ran == 1)) : ?>is-light <?php endif ?>" id="mouseTarget">
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
                    <a href="./home.php">INDEX</a>
                </li>
                <li>
                    <a href="./about.php">ABOUT</a>
                </li>
                <li>
                    <a href="./ourtea.php">OUR TEA</a>
                </li>
                <li>
                    <a href="./news.php">NEWS</a>
                </li>
                <li>
                    <a href="./store.php">STORE</a>
                </li>
                <li>
                    <a href="./recruit.php">RECRUIT</a>
                </li>
                <li>
                    <a href="./contact.php">CONTACT</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="hamburger hide-for-large <?php if ($now != 'INDEX') : ?>is-click <?php endif ?>">
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
                    <a href="./main.php">INDEX</a>
                </li>
                <li class="about">
                    <a href="./about.php">ABOUT</a>
                </li>
                <li class="ourtea">
                    <a href="./ourtea.php">OUR TEA</a>
                </li>
                <li class="news">
                    <a href="./news.php">NEWS</a>
                </li>
                <li class="store">
                    <a href="./store.php">STORE</a>
                </li>
                <li class="recruit">
                    <a href="./recruit.php">RECRUIT</a>
                </li>
                <li class="contact">
                    <a href="./contact.php">CONTACT</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="bg-hover"></div>
</nav>