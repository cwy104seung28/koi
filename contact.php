<!DOCTYPE html>
<html lang="en">

<head>
    <?php $now = 'CONTACT';
    $menu = 'CONTACT';
    $number = '07';
    ?>
    <?php include 'html_head.php'; ?>
</head>


<body>
    <?php include 'topmenu.php'; ?>

    <div class="contactWrap" id="contact">
        <div class="head-area">
            <div class="en">CONTACT</div>
        </div>
        <transition name="fade" mode="out-in">
            <div class="overseas" v-if="cat == 2" key="img">
                <img src="./images/overseas.svg">
            </div>
        </transition>
        <div class="contact-area flex-container align-justify">
            <div class="article-area">
                <!-- <transition name="fade" mode="out-in">
                   
                </transition> -->
                <div class="content content-1" v-if="cat == 1" key="content1">
                    <ul class="change">
                        <li class="inner">ANY QUESTI<span class="orange">O</span>NS?</li>
                        <li class="inner">PLEASE FEEL</li>
                        <li class="inner">FREE T<span class="orange">O</span></li>
                        <li class="inner">C<span class="orange">O</span>NTACT US</li>
                        <li class="inner">HERE.</li>
                    </ul>
                    <div class="note">感谢您的来信，我们将尽快回覆您</div>
                </div>
                <div class="content content-2" v-if="cat == 2" key="content2">
                    <ul class="change">
                        <li class="inner">THANK Y<span class="orange">O</span>U</li>
                        <li class="inner">F<span class="orange">O</span>R YOUR L<span class="orange">O</span>VE</li>
                        <li class="inner">F<span class="orange">O</span>R K<span class="orange">O</span>I THÉ</li>
                    </ul>
                    <div class="note">感谢您对KOI的喜爱，欲了解海外合作信息，请完整填写以下表格提供相关信息帮助我们进行合作评估。</div>
                    <div class="other flex-container">
                        <div class="dot">＊</div>
                        <div class="text">
                            现阶段下列地区暂不开放合作：新加坡、马来西亚、
                            柬埔寨、越南
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-area">
                <ul class="formList flex-container align-justify">
                    <li class="flex-container align-middle" data-list="1" @click='catHandler(1)'>
                        <input type="radio" name="contact" id="option1" checked>
                        <label for="option1" class="flex-container align-middle">
                            <div class="radio"></div>
                            <div class="title">联络我们</div>
                        </label>
                    </li>
                    <li class="flex-container align-middle" data-list="2" @click='catHandler(2)'>
                        <input type="radio" name="contact" id="option2">
                        <label for="option2" class="flex-container align-middle">
                            <div class="radio"></div>
                            <div class="title">海外合作申请表单</div>
                        </label>
                    </li>
                </ul>
                <transition name="fade" mode="out-in">
                    <form action="javascript:;" method="POST" id="contactForm1" v-if="cat == 1" key="form1">
                        <div class="item">
                            <div class="title">
                                姓名
                            </div>
                            <div>
                                <input type="text" name="name" id="name">
                            </div>
                        </div>
                        <div class="item">
                            <div class="title">
                                地 区
                            </div>
                            <div>
                                <input type="text" name="address" id="address">
                            </div>
                        </div>
                        <div class="item">
                            <div class="title">
                                联络电话
                            </div>
                            <div>
                                <input type="text" name="phone" id="phone">
                            </div>
                        </div>
                        <div class="item">
                            <div class="title">
                                电子信箱
                            </div>
                            <div>
                                <input type="text" name="email" id="email">
                            </div>
                        </div>
                        <div class="item">
                            <div class="title">
                                询问类别
                            </div>
                            <div>
                                <select name="ask" id="ask" class="ask-select">
                                    <option value="售后服务">
                                        <span class="ch">售后服务</span>
                                    </option>
                                    <option value="业务合作">
                                        <span class="ch">业务合作</span>
                                    </option>
                                    <option value="客 诉">
                                        <span class="ch">客 诉</span>
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="submit">
                            <a href="javascript:;">
                                <img src="./images/submit.svg">
                            </a>
                        </div>
                    </form>
                    <form action="javascript:;" method="POST" id="contactForm2" v-if="cat == 2" key="form2">
                        <div class="title-area flex-container">
                            <div class="line"></div>
                            <div class="head">
                                <div class="en">Your Contact Details</div>
                                <div class="ch">联系方式</div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="title">
                                姓名
                            </div>
                            <div>
                                <input type="text" name="name" id="name">
                            </div>
                        </div>
                        <div class="item">
                            <div class="title">
                                电子信箱
                            </div>
                            <div>
                                <input type="text" name="email" id="email">
                            </div>
                        </div>

                        <div class="item">
                            <div class="title">
                                现居国家
                            </div>
                            <div>
                                <input type="text" name="country" id="country">
                            </div>
                        </div>

                        <div class="item">
                            <div class="title">
                                您准备在该项经营上投入多少钱？
                            </div>
                            <div>
                                <select name="ask" id="ask" class="ask-select">
                                    <option value="USD 300,000">
                                        <span class="ch">USD 300,000</span>
                                    </option>
                                    <option value="USD 400,000">
                                        <span class="ch">USD 400,000</span>
                                    </option>
                                    <option value="USD 500,000">
                                        <span class="ch">USD 500,000</span>
                                    </option>
                                </select>
                            </div>
                            <div class="note flex-container">
                                <div>＊</div>
                                <div>根据过往经验，初始投资金额约需 USD300,000，
                                    <br>故下拉式选单起始点以USD300,000为起跳金额。
                                </div>
                            </div>
                        </div>

                        <div class="title-area flex-container">
                            <div class="line"></div>
                            <div class="head">
                                <div class="en">Your Company Profile</div>
                                <div class="ch">您的商业数据</div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="title">
                                您代表的公司名称
                            </div>
                            <div>
                                <input type="text" name="company" id="company">
                            </div>
                        </div>
                        <div class="submit">
                            <a href="javascript:;">
                                <img src="./images/submit.svg">
                            </a>
                        </div>
                    </form>
                </transition>
            </div>
        </div>
    </div>
    <?php include 'footer.php'; ?>
</body>
<?php include 'script.php'; ?>


</html>

<script>
    new Vue({
        el: '#contact',
        data: {
            cat: 1,
        },
        computed: {},
        methods: {
            catHandler(i) {
                this.cat = i;
            }
        },
        filters: {},
        mounted() {
            $('.ask-select').niceSelect();
            gsap.registerPlugin(ScrollTrigger);
            let $tl_title = gsap.timeline({
                    paused: true,
                })
                .to(".head-area .en", {
                    duration: 1,
                    y: 0,
                    rotation: 0,
                    ease: Power2.easeOut,
                })

            gsap.delayedCall(1, function() {
                $tl_title.play();
            });
            let $tl_content = gsap.timeline({
                    paused: true,
                })
                // .from(CSSRulePlugin.getRule(".contactWrap .article-area .change .inner::before"), {
                //     duration: 0.5,
                //     cssRule: {
                //         scaleX: 0
                //     },
                //     // scaleY: 1,
                //     stagger: 0.2,
                //     transformOrigin: 'left',
                //     ease: Power2.easeOut,
                // })
                .add('start')
                .to(CSSRulePlugin.getRule(".contactWrap .article-area .change .inner::before"), {
                    duration: 0.5,
                    transformOrigin: 'left',
                    cssRule: {
                        scaleX: 1
                    },
                    // stagger: 0.2,
                    ease: Power2.easeOut,
                }, 'start')
                .to(CSSRulePlugin.getRule(".contactWrap .article-area .change .inner::after"), {
                    duration: 0.5,
                    transformOrigin: 'right',
                    cssRule: {
                        scaleX: 0
                    },
                    // stagger: 0.2,
                    ease: Power2.easeOut,
                }, 'start')
                .to(CSSRulePlugin.getRule(".contactWrap .article-area .change .inner::before"), {
                    duration: 0.5,
                    transformOrigin: 'right',
                    cssRule: {
                        scaleX: 0
                    },
                    // scale: -1,
                    // stagger: 0.2,
                    ease: Power2.easeOut,
                })


            gsap.delayedCall(1, function() {
                $tl_content.play();
            });

            $('.formList li').click(function() {
                $tl_content.restart();
            })
        },
        updated() {},
    })
</script>