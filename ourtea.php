<!DOCTYPE html>
<html lang="en">

<head>
    <?php $now = 'OUR TEA';
    $menu = 'OUR TEA';
    $number = '03';
    ?>
    <?php include 'html_head.php'; ?>
</head>


<body>
    <?php include 'topmenu.php'; ?>
    <div class="our-teaWrap">
        <div class="head-area">
            <div class="title">OUR TEA</div>
            <div class="drinkWrap">
                <ul class="drink">
                    <li>
                        <div class="name">
                            <div class="en">BUBBLE GREEN TEA</div>
                            <div class="ch">珍珠绿茶</div>
                        </div>
                        <img src="./images/drink-1.png" alt="">
                    </li>
                    <li>
                        <div class="name">
                            <div class="en">BUBBLE GREEN TEA</div>
                            <div class="ch">珍珠绿茶</div>
                        </div>
                        <img src="./images/drink-2.png" alt="">
                    </li>
                    <li>
                        <div class="name">
                            <div class="en">BUBBLE GREEN TEA</div>
                            <div class="ch">珍珠绿茶</div>
                        </div>
                        <img src="./images/drink-3.png" alt="">
                    </li>
                    <li>
                        <div class="name">
                            <div class="en">BUBBLE GREEN TEA</div>
                            <div class="ch">珍珠绿茶</div>
                        </div>
                        <img src="./images/drink-4.png" alt="">
                    </li>
                    <li>
                        <div class="name">
                            <div class="en">BUBBLE GREEN TEA</div>
                            <div class="ch">珍珠绿茶</div>
                        </div>
                        <img src="./images/drink-5.png" alt="">
                    </li>
                    <li>
                        <div class="name">
                            <div class="en">BUBBLE GREEN TEA</div>
                            <div class="ch">珍珠绿茶</div>
                        </div>
                        <img src="./images/drink-6.png" alt="">
                    </li>
                    <li>
                        <div class="name">
                            <div class="en">BUBBLE GREEN TEA</div>
                            <div class="ch">珍珠绿茶</div>
                        </div>
                        <img src="./images/drink-1.png" alt="">
                    </li>
                    <li>
                        <div class="name">
                            <div class="en">BUBBLE GREEN TEA</div>
                            <div class="ch">珍珠绿茶</div>
                        </div>
                        <img src="./images/drink-2.png" alt="">
                    </li>
                    <li>
                        <div class="name">
                            <div class="en">BUBBLE GREEN TEA</div>
                            <div class="ch">珍珠绿茶</div>
                        </div>
                        <img src="./images/drink-3.png" alt="">
                    </li>
                    <li>
                        <div class="name">
                            <div class="en">BUBBLE GREEN TEA</div>
                            <div class="ch">珍珠绿茶</div>
                        </div>
                        <img src="./images/drink-4.png" alt="">
                    </li>
                    <li>
                        <div class="name">
                            <div class="en">BUBBLE GREEN TEA</div>
                            <div class="ch">珍珠绿茶</div>
                        </div>
                        <img src="./images/drink-5.png" alt="">
                    </li>
                    <li>
                        <div class="name">
                            <div class="en">BUBBLE GREEN TEA</div>
                            <div class="ch">珍珠绿茶</div>
                        </div>
                        <img src="./images/drink-6.png" alt="">
                    </li>
                </ul>
                <div class="scroll-down">
                    <img src="./images/t-scroll.svg" alt="">
                </div>
            </div>
        </div>
        <div class="new-drinkWrap flex-container align-center" style="background: url('./images/t-new-drink-bg.jpg') no-repeat center/cover;">
            <div class="title">
                <div class="ch">最新饮品</div>
                <div class="en">
                    NEW<br>
                    DRINKS
                </div>
            </div>
            <div class="pic">
                <img src="./images/t-new-drink-center.png" alt="">
            </div>
            <ul class="new-drink">
                <li>
                    <div class="region">/ CHINA</div>
                    <div class="ch">香栗波霸奶茶</div>
                    <div class="en">Jumbo Chestnut Milk Tea</div>
                </li>
                <li>
                    <div class="region">/ CHINA</div>
                    <div class="ch">荞麦茶拿铁</div>
                    <div class="en">Buckwheat Tea Latte</div>
                </li>
                <li>
                    <div class="region">/ CHINA</div>
                    <div class="ch">芋泥米香奶茶</div>
                    <div class="en">Taro Ricey Milk Tea</div>
                </li>
            </ul>
        </div>
        <div class="drinkWrap">
            <ul class="drinkList">
                <li>
                    <div class="title">
                        <div class="ch">地区限定</div>
                        <div class="en">
                            AREA<br>
                            EXCLUSIVE
                        </div>
                    </div>
                </li>
                <li>

                </li>
                <li>

                </li>
                <li>

                </li>
            </ul>
            <div class="menu-drinkList">
                <div class="menu">
                    <a href="./menu.php">
                        <img src="./images/t-menu.svg" alt="">
                    </a>
                </div>
                <ul class="drink-fixedList">
                    <li class="flex-container align-middle">
                        <div class="dot"></div>
                        <div class="title">地区限定</div>
                    </li>
                    <li class="flex-container align-middle">
                        <div class="dot"></div>
                        <div class="title">原茶系列</div>
                    </li>
                    <li class="flex-container align-middle">
                        <div class="dot"></div>
                        <div class="title">奶茶系列</div>
                    </li>
                    <li class="flex-container align-middle">
                        <div class="dot"></div>
                        <div class="title">果汁系列</div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <?php include 'footer.php'; ?>
</body>
<?php include 'script.php'; ?>

</html>

<script>
    ScrollTrigger.create({
        toggleActions: "play pause resume reverse", //重覆觸發
        trigger: ".menu-drinkList",
        endTrigger: ".footer",
        start: "top 15%",
        end: "bottom 90%",
        scrub: 1,
        pin: true,
        // markers: true,
    });
</script>