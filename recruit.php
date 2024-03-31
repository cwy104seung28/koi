<!DOCTYPE html>
<html lang="en">

<head>
    <?php $now = 'RECRUIT';
    $menu = 'RECRUIT';
    $number = '06';
    ?>
    <?php include 'html_head.php'; ?>
</head>


<body class="is-orange">
    <?php include 'topmenu.php'; ?>
    <div class="recruitWrap">
        <div class="recruit-top">
            <div class="head-area">
                <div class="en top">We Want</div>
                <div class="en bottom">YOU!
                    <div class="note">RECRUIT</div>
                    <div class="bear"><img src="./images/recruit-bear.svg"></div>
                </div>
            </div>
            <div class="recruitList">
                <div class="title">
                    升迁透明化 · 薪资再跳升
                </div>
                <div class="article-area">
                    <div class="top flex-container">
                        <div>营运管理类型</div>
                        <div>职称</div>
                        <div>美加区基本薪资(USD)</div>
                        <div>亚太区基本薪资(USD)</div>
                    </div>
                    <div class="content flex-container">
                        <div class="name">单店管理</div>
                        <div>店经理</div>
                        <div>3,288</div>
                        <div>1,872</div>
                    </div>
                    <div class="content flex-container">
                        <div class="name">多店管理</div>
                        <div>区域经理</div>
                        <div>4,120</div>
                        <div>2,500</div>
                    </div>
                    <div class="content flex-container">
                        <div class="name">单国域管理</div>
                        <div>营运经理</div>
                        <div>5,680</div>
                        <div>3,500</div>
                    </div>
                    <div class="content flex-container">
                        <div class="name">多国域管理</div>
                        <div>营运总监/营运长</div>
                        <div>5,680 以上</div>
                        <div>3,500 以上</div>
                    </div>
                </div>
                <div class="note">
                    下表薪资级距数额为基本月薪(美金呈现)*，<br>
                    额外提供营运奖金、住宿津贴、地区津贴**、返乡津贴、税务补贴、健检补助、医疗保险、年节礼品…等<br>
                    *薪资以美金定价，以当地货币发薪<br>
                    **派驻下列区域享额外地区津贴+ USD 400: 港澳、日本、新加坡、阿联酋地区、澳洲、韩国
                </div>
            </div>
            <div class="recruit-otherList">
                <div class="title">
                    薪酬国际化 · 配套更完善
                </div>
                <ul class="articleList">
                    <li>● 国际化薪资</li>
                    <li>● 营运奖金</li>
                    <li>● 医疗保险</li>
                    <li>
                        ● 各式津贴
                        <div class="note">地区津贴 / 住宿津贴 / 返乡津贴 / 税务补贴 / 健检补助</div>
                    </li>
                    <li>
                        ● 假期福利
                        <div class="note">
                            特休假10-30天<br>
                            其他有薪假: 病假、婚假、产假、产检假、陪产假、丧假
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="recruit-middleList">
            <section data-where="0">
                <figure class="sec-bg show-for-large" style="background-image: url(./images/recruit-bg-1.jpg)">
                </figure>
                <div class="item-area">

                </div>
            </section>
            <section data-where="1">
                <figure class="sec-bg show-for-large" style="background-image: url(./images/recruit-bg-2.jpg)">
                </figure>
                <div class="item-area">

                </div>
            </section>
        </div>
        <div class="apply-area">
            <div class="head-area">
                <div class="en top">“Apply</div>
                <div class="en bottom">NOW!”
                    <div class="ch">
                        我们来自不同地方，我们激荡不同文化；<br>
                        茶饮是我们凝聚在此的共同语言
                    </div>
                </div>
            </div>
            <div class="apply-fancy">
                <div class="top-area">
                    <div class="title">履历投递 </div>
                    <div class="content">
                        为确保履历投递成功，下列应征管道请择一投递履历，<br>
                        切勿重复投递履历，谢谢。
                    </div>
                </div>
                <ul class="applyList">
                    <li>
                        <a href="javascript:;">
                            <div class="title">104招募连结</div>
                            <div class="arrow"><img src="./images/r-arrow.svg"></div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <div class="note">Email直接投递履历连结</div>
                            <div class="title">globalcareers@koicafe.com </div>
                            <div class="arrow"><img src="./images/r-arrow.svg"></div>
                        </a>
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
        trigger: '.apply-area',
        // toggleActions: "play none none none",
        start: "5% 25%",
        end: "80% 25%",
        // markers: true,
        onEnter: () => {
            $('.apply-fancy').addClass('is-show');
        },
        onLeave: () => {
            $('.apply-fancy').removeClass('is-show');
        },
        onEnterBack: () => {
            $('.apply-fancy').addClass('is-show');
        },
        onLeaveBack: () => {
            $('.apply-fancy').removeClass('is-show');
        }
    });
</script>