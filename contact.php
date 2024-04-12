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
                <form action="javascript:;" method="POST" id="contactForm1" :class="[{'is-show': cat == 1}]" key="form1">
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
                        <svg id="b" data-name="圖層 2" xmlns="http://www.w3.org/2000/svg" width="97.35" height="76.5" viewBox="0 0 97.35 76.5">
                            <g id="c" data-name="設計">
                                <g>
                                    <g class="arrow">
                                        <line class="e" x1="3.14" y1="15.09" x2="34.21" y2="15.09" />
                                        <path class="d" d="M13.7,29.49c-.45-.7-.24-1.63,.46-2.07l19.36-12.33L14.17,2.76c-.7-.45-.91-1.37-.46-2.07s1.38-.9,2.07-.46l21.34,13.59c.43,.28,.69,.75,.69,1.27s-.26,.99-.69,1.27L15.78,29.95c-.25,.16-.53,.23-.81,.23-.5,0-.98-.25-1.27-.69Z" />
                                    </g>
                                    <g>
                                        <path class="d" d="M0,60.02c0-2.41,.32-4.69,.97-6.85,.65-2.16,1.59-4.09,2.84-5.8s2.57-2.9,3.97-3.59l.75,2.22c-1.47,1.12-2.66,2.82-3.57,5.1-.91,2.29-1.41,4.9-1.49,7.85l-.02,1.34c0,3.16,.45,5.97,1.34,8.45s2.14,4.36,3.74,5.65l-.75,2.11c-1.4-.69-2.72-1.89-3.98-3.6-1.26-1.71-2.2-3.65-2.84-5.8-.64-2.15-.96-4.51-.96-7.09Z" />
                                        <path class="d" d="M24.72,61.68v6.73c0,1.2-.23,1.85-.91,2.21-.7,.39-1.74,.47-3.38,.47-.05-.57-.34-1.61-.65-2.24,1.04,.03,2,.03,2.29,.03,.31,0,.44-.1,.44-.47v-6.03l-2.73,.83-.55-2.34c.91-.23,2.05-.55,3.28-.88v-5.23h-3.02v-2.24h3.02v-5.02h2.21v5.02h2.76v2.24h-2.76v4.58l2.5-.73,.34,2.18-2.83,.88Zm11.62,7.05c.7,.1,1.4,.13,2.16,.13s4.13,0,5.1-.03c-.29,.52-.6,1.53-.68,2.13h-4.47c-3.61,0-6.32-.65-8.01-4.08-.7,1.82-1.66,3.3-2.94,4.45-.36-.39-1.27-1.14-1.82-1.46,2.26-1.79,3.38-4.71,3.8-8.37l2.18,.26c-.13,.96-.29,1.87-.49,2.73,.68,1.87,1.66,2.99,2.91,3.59v-7.59h-6.24v-1.98h15v1.98h-6.5v2.7h5.2v1.92h-5.2v3.61Zm5.15-11.8h-12.43v-8.63h12.43v8.63Zm-2.31-6.86h-7.9v1.72h7.9v-1.72Zm0,3.35h-7.9v1.72h7.9v-1.72Z" />
                                        <path class="d" d="M72.36,58.95c-1.04,2.55-2.44,4.63-4.21,6.34,2.6,1.82,5.88,3.07,9.88,3.72-.52,.49-1.17,1.48-1.48,2.16-4.21-.78-7.57-2.21-10.24-4.32-2.81,2.11-6.27,3.51-10.27,4.5-.26-.57-.99-1.64-1.46-2.18,3.95-.78,7.31-2.03,9.93-3.9-1.64-1.74-2.96-3.8-4-6.24l2.18-.68c.83,2.08,2.05,3.9,3.64,5.41,1.56-1.51,2.76-3.33,3.59-5.54l2.44,.73Zm-8.66-4.21c-1.79,2.21-4.55,4.55-6.81,5.98-.42-.47-1.35-1.38-1.9-1.77,2.29-1.25,4.84-3.2,6.34-5.12l2.37,.91Zm13.73-1.48h-22.41v-2.34h10.48c-.39-.88-.99-2.03-1.53-2.94l2.29-.78c.7,1.07,1.53,2.52,1.9,3.43l-.75,.29h10.04v2.34Zm-6.5,.49c2.31,1.53,5.25,3.87,6.66,5.49l-2.03,1.59c-1.3-1.61-4.16-4.06-6.53-5.69l1.9-1.38Z" />
                                        <path class="d" d="M97.35,60.27c0,2.31-.32,4.54-.95,6.7-.64,2.15-1.6,4.11-2.89,5.88-1.29,1.77-2.64,2.99-4.05,3.66l-.75-2.11c1.56-1.21,2.8-3.05,3.71-5.54,.91-2.48,1.37-5.32,1.37-8.51v-.36c0-2.9-.4-5.53-1.19-7.91-.79-2.38-1.93-4.29-3.41-5.73l-.48-.44,.75-2.12c1.33,.65,2.62,1.79,3.88,3.44,1.25,1.65,2.21,3.49,2.88,5.52,.67,2.04,1.04,4.14,1.12,6.3l.02,1.22Z" />
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </div>
                </form>
                <form action="javascript:;" method="POST" id="contactForm2" :class="[{'is-show': cat == 2}]" key="form2">
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
                        <svg id="b" data-name="圖層 2" xmlns="http://www.w3.org/2000/svg" width="97.35" height="76.5" viewBox="0 0 97.35 76.5">
                            <g id="c" data-name="設計">
                                <g>
                                    <g class="arrow">
                                        <line class="e" x1="3.14" y1="15.09" x2="34.21" y2="15.09" />
                                        <path class="d" d="M13.7,29.49c-.45-.7-.24-1.63,.46-2.07l19.36-12.33L14.17,2.76c-.7-.45-.91-1.37-.46-2.07s1.38-.9,2.07-.46l21.34,13.59c.43,.28,.69,.75,.69,1.27s-.26,.99-.69,1.27L15.78,29.95c-.25,.16-.53,.23-.81,.23-.5,0-.98-.25-1.27-.69Z" />
                                    </g>
                                    <g>
                                        <path class="d" d="M0,60.02c0-2.41,.32-4.69,.97-6.85,.65-2.16,1.59-4.09,2.84-5.8s2.57-2.9,3.97-3.59l.75,2.22c-1.47,1.12-2.66,2.82-3.57,5.1-.91,2.29-1.41,4.9-1.49,7.85l-.02,1.34c0,3.16,.45,5.97,1.34,8.45s2.14,4.36,3.74,5.65l-.75,2.11c-1.4-.69-2.72-1.89-3.98-3.6-1.26-1.71-2.2-3.65-2.84-5.8-.64-2.15-.96-4.51-.96-7.09Z" />
                                        <path class="d" d="M24.72,61.68v6.73c0,1.2-.23,1.85-.91,2.21-.7,.39-1.74,.47-3.38,.47-.05-.57-.34-1.61-.65-2.24,1.04,.03,2,.03,2.29,.03,.31,0,.44-.1,.44-.47v-6.03l-2.73,.83-.55-2.34c.91-.23,2.05-.55,3.28-.88v-5.23h-3.02v-2.24h3.02v-5.02h2.21v5.02h2.76v2.24h-2.76v4.58l2.5-.73,.34,2.18-2.83,.88Zm11.62,7.05c.7,.1,1.4,.13,2.16,.13s4.13,0,5.1-.03c-.29,.52-.6,1.53-.68,2.13h-4.47c-3.61,0-6.32-.65-8.01-4.08-.7,1.82-1.66,3.3-2.94,4.45-.36-.39-1.27-1.14-1.82-1.46,2.26-1.79,3.38-4.71,3.8-8.37l2.18,.26c-.13,.96-.29,1.87-.49,2.73,.68,1.87,1.66,2.99,2.91,3.59v-7.59h-6.24v-1.98h15v1.98h-6.5v2.7h5.2v1.92h-5.2v3.61Zm5.15-11.8h-12.43v-8.63h12.43v8.63Zm-2.31-6.86h-7.9v1.72h7.9v-1.72Zm0,3.35h-7.9v1.72h7.9v-1.72Z" />
                                        <path class="d" d="M72.36,58.95c-1.04,2.55-2.44,4.63-4.21,6.34,2.6,1.82,5.88,3.07,9.88,3.72-.52,.49-1.17,1.48-1.48,2.16-4.21-.78-7.57-2.21-10.24-4.32-2.81,2.11-6.27,3.51-10.27,4.5-.26-.57-.99-1.64-1.46-2.18,3.95-.78,7.31-2.03,9.93-3.9-1.64-1.74-2.96-3.8-4-6.24l2.18-.68c.83,2.08,2.05,3.9,3.64,5.41,1.56-1.51,2.76-3.33,3.59-5.54l2.44,.73Zm-8.66-4.21c-1.79,2.21-4.55,4.55-6.81,5.98-.42-.47-1.35-1.38-1.9-1.77,2.29-1.25,4.84-3.2,6.34-5.12l2.37,.91Zm13.73-1.48h-22.41v-2.34h10.48c-.39-.88-.99-2.03-1.53-2.94l2.29-.78c.7,1.07,1.53,2.52,1.9,3.43l-.75,.29h10.04v2.34Zm-6.5,.49c2.31,1.53,5.25,3.87,6.66,5.49l-2.03,1.59c-1.3-1.61-4.16-4.06-6.53-5.69l1.9-1.38Z" />
                                        <path class="d" d="M97.35,60.27c0,2.31-.32,4.54-.95,6.7-.64,2.15-1.6,4.11-2.89,5.88-1.29,1.77-2.64,2.99-4.05,3.66l-.75-2.11c1.56-1.21,2.8-3.05,3.71-5.54,.91-2.48,1.37-5.32,1.37-8.51v-.36c0-2.9-.4-5.53-1.19-7.91-.79-2.38-1.93-4.29-3.41-5.73l-.48-.44,.75-2.12c1.33,.65,2.62,1.79,3.88,3.44,1.25,1.65,2.21,3.49,2.88,5.52,.67,2.04,1.04,4.14,1.12,6.3l.02,1.22Z" />
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </div>
                </form>
            </div>
        </div>
        <div class="menu-link">
            <div class="circle">
                <div class="menu"><img src="./images/m-menu.svg" alt=""></div>
                <div class="store"><img src="./images/m-store.svg" alt=""></div>
            </div>
            <div class="hover-link">
                <div class="menu"><a href="./menu.php"><img src="./images/m-hover-menu.svg" alt=""></a></div>
                <div class="store"><a href="./store.php"><img src="./images/m-hover-store.svg" alt=""></a></div>
            </div>
            <div class="bear">
                <div class="drink"><img src="./images/b-drink-menu.svg" alt=""></div>
                <div class="big-body"><img src="./images/b-big-body.svg" alt=""></div>
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

            ScrollTrigger.create({
                toggleActions: "play pause resume reverse", //重覆觸發
                trigger: ".menu-link",
                endTrigger: ".contactWrap",
                start: "top 78.5%",
                end: "100% 78.5%",
                scrub: 1,
                pin: true,
                // markers: true,
            });
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


            // gsap.delayedCall(1, function() {
            //     $tl_content.play();
            // });

            // $('.formList li').each(function(i, el) {
            //     $(el).on('click', function() {
            //         var _list = $(this).data('list');
            //         gsap.delayedCall(0.5, function() {
            //             $(`#contactForm${_list} .ask-select`).niceSelect();
            //         });
            //     })
            // })
        },
        updated() {},
    })
</script>