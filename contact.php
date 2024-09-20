<?php

require_once 'Connections/connect2data.php';
$_SESSION['checkPost'] = 0;

$storeCat = $DB->query("SELECT * FROM class_set WHERE c_parent='storeC' AND c_level=1 AND c_active=1 ORDER BY c_sort ASC");

?>
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

    <div class="contactWrap menu-pin" id="contact">
        <div class="head-area">
            <div class="en">CONTACT</div>
        </div>
        <transition @before-enter="beforeEnter" @enter="enter" @before-leave="beforeLeave" @leave="leave" mode="out-in" :css="false">
            <div class="overseas show-for-large" v-if="cat == 2" key="img">
                <img src="./images/overseas.svg">
            </div>
        </transition>
        <div class="contact-area flex-container align-justify">
            <ul class="formList flex-container align-justify hide-for-large">
                <li class="flex-container align-middle" data-list="1" @click='catHandler(1)'>
                    <input type="radio" name="contact-m" id="option-m1" checked>
                    <label for="option-m1" class="flex-container align-middle">
                        <div class="radio"></div>
                        <div class="title">联络我们</div>
                    </label>
                </li>
                <li class="flex-container align-middle" data-list="2" @click='catHandler(2)'>
                    <input type="radio" name="contact-m" id="option-m2">
                    <label for="option-m2" class="flex-container align-middle">
                        <div class="radio"></div>
                        <div class="title">海外合作申请表单</div>
                    </label>
                </li>
            </ul>
            <div class="article-area">
                <transition @before-enter="beforeEnter" @enter="enter" @before-leave="beforeLeave" @leave="leave" mode="out-in" :css="false">

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
                            <li class="inner">F<span class="orange">O</span>R K<span class="orange">O</span>I Thé</li>
                        </ul>
                        <div class="note">感谢您对KOI的喜爱，欲了解海外合作信息，请完整填写以下表格提供相关信息帮助我们进行合作评估。</div>
                        <div class="other flex-container">
                            <div class="dot show-for-large">＊</div>
                            <div class="text">
                                现阶段下列地区暂不开放合作：<br class="hide-for-large">新加坡、马来西亚、柬埔寨、越南
                            </div>
                        </div>
                    </div>
                </transition>
            </div>
            <div class="form-area">
                <ul class="formList flex-container align-justify show-for-large">
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
                <!-- <transition @before-enter="beforeEnter" @enter="enter" @before-leave="beforeLeave" @leave="leave" mode="out-in" :css="false"> -->
                <form action="javascript:;" method="POST" id="contactForm1" :class="[{'is-show':cat == 1}]" key="form1">
                    <div class="item required">
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
                            <!-- <input type="text" name="area" id="area"> -->
                            <select name="area" id="area" class="ask-select">
                                <?php foreach ($storeCat as $storeC) : ?>
                                    <option value="<?= $storeC['c_title'] ?>">
                                        <span class="ch"><?= $storeC['c_title'] ?></span>
                                    </option>
                                <?php endforeach ?>
                            </select>
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
                    <div class="item required">
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
                    <div class="item re">
                        <div class="title">
                            意见内容
                        </div>
                        <div>
                            <textarea name="content" id="content"></textarea>
                        </div>
                    </div>
                    <div class="submit" id="submit1">
                        <svg class="show-for-large" id="b" data-name="圖層 2" xmlns="http://www.w3.org/2000/svg" width="97.35" height="76.5" viewBox="0 0 97.35 76.5">
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
                        <svg class="hide-for-large" id="b" data-name="圖層 2" xmlns="http://www.w3.org/2000/svg" width="40.45" height="36.95" viewBox="0 0 40.45 36.95">>
                            <g id="c" data-name="設計">
                                <g>
                                    <g>
                                        <path d="M3.33,36.95c-1.07-.62-1.88-1.45-2.45-2.48-.57-1.03-.85-2.21-.85-3.54s.28-2.51,.85-3.54c.57-1.04,1.38-1.86,2.45-2.48l.7,.83c-.89,.54-1.58,1.25-2.05,2.15s-.71,1.91-.71,3.04,.24,2.14,.71,3.04,1.16,1.61,2.05,2.14l-.7,.84Z" />
                                        <path d="M10.74,29.82c-.47,.17-.95,.31-1.43,.48v3.64c0,.53-.12,.78-.44,.94-.3,.16-.79,.19-1.61,.18-.04-.23-.16-.62-.29-.9,.56,.01,1.07,.01,1.21,.01,.17,0,.23-.05,.23-.25v-3.34c-.53,.18-1.04,.34-1.51,.48l-.23-.94c.48-.12,1.08-.3,1.74-.51v-2.85h-1.6v-.9h1.6v-2.59h.9v2.59h1.43v.9h-1.43v2.56l1.31-.4,.12,.88Zm4.33,4.2c.38,.05,.79,.08,1.22,.08,.31,0,2.08,0,2.51-.01-.13,.21-.25,.61-.29,.86h-2.26c-1.87,0-3.24-.35-4.08-2.17-.36,.97-.87,1.77-1.56,2.38-.14-.16-.51-.46-.71-.58,1.16-.91,1.73-2.37,1.94-4.29l.9,.1c-.07,.48-.14,.96-.26,1.39,.38,1.09,.95,1.69,1.69,2v-4.11h-3.17v-.82h7.41v.82h-3.33v1.52h2.69v.79h-2.69v2.04Zm2.61-6.1h-6.1v-4.21h6.1v4.21Zm-.92-3.48h-4.29v1.03h4.29v-1.03Zm0,1.7h-4.29v1.04h4.29v-1.04Z" />
                                        <path d="M30.68,28.87c-.53,1.33-1.26,2.42-2.17,3.29,1.34,1.01,3.05,1.7,5.13,2.03-.21,.21-.47,.6-.6,.87-2.15-.42-3.89-1.16-5.27-2.28-1.43,1.13-3.21,1.86-5.3,2.39-.1-.23-.39-.66-.58-.87,2.08-.43,3.83-1.12,5.19-2.16-.9-.87-1.59-1.95-2.11-3.21l.86-.26c.44,1.11,1.11,2.08,1.95,2.87,.83-.79,1.48-1.77,1.91-2.95l.99,.27Zm2.63-2.86h-11.15v-.95h5.4c-.18-.46-.55-1.09-.86-1.6l.9-.31c.36,.52,.78,1.23,.96,1.68l-.58,.23h5.34v.95Zm-6.98,.77c-.87,1.1-2.24,2.26-3.38,3-.17-.2-.53-.56-.74-.73,1.14-.65,2.42-1.65,3.2-2.64l.92,.36Zm3.69-.39c1.18,.81,2.64,1.98,3.34,2.81l-.79,.62c-.65-.82-2.09-2.05-3.29-2.87l.74-.56Z" />
                                        <path d="M37.15,24.86c1.07,.62,1.88,1.45,2.45,2.48,.57,1.03,.85,2.21,.85,3.54s-.28,2.51-.85,3.54c-.57,1.04-1.38,1.86-2.45,2.48l-.7-.83c.89-.54,1.58-1.25,2.05-2.15s.71-1.91,.71-3.04-.24-2.14-.71-3.04-1.16-1.61-2.05-2.14l.7-.84Z" />
                                    </g>
                                    <g class="arrow">
                                        <line class="e" y1="9.31" x2="19.18" y2="9.31" />
                                        <path class="d" d="M6.52,18.2c-.27-.43-.15-1,.29-1.28l11.95-7.61L6.81,1.71c-.43-.27-.56-.85-.29-1.28C6.8,0,7.37-.13,7.8,.14l13.17,8.39c.27,.17,.43,.46,.43,.78s-.16,.61-.43,.78L7.8,18.49c-.16,.1-.33,.14-.5,.14-.31,0-.61-.15-.78-.43Z" />
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </div>
                </form>
                <form action="javascript:;" method="POST" id="contactForm2" :class="[{'is-show':cat == 2}]" key="form2">
                    <div class="title-area flex-container">
                        <div class="line"></div>
                        <div class="head">
                            <div class="en">Your Contact Details</div>
                            <div class="ch">联系方式</div>
                        </div>
                    </div>
                    <div class="item required">
                        <div class="title">
                            姓名
                        </div>
                        <div>
                            <input type="text" name="o_name" id="o_name">
                        </div>
                    </div>
                    <div class="item required">
                        <div class="title">
                            电子信箱
                        </div>
                        <div>
                            <input type="text" name="o_email" id="o_email">
                        </div>
                    </div>

                    <div class="item required">
                        <div class="title">
                            现居国家
                        </div>
                        <div>
                            <select name="o_country" id="o_country" class="ask-select">
                                <?php foreach ($storeCat as $storeC) : ?>
                                    <option value="<?= $storeC['c_title'] ?>">
                                        <span class="ch"><?= $storeC['c_title'] ?></span>
                                    </option>
                                <?php endforeach ?>
                            </select>
                        </div>
                    </div>

                    <div class="item">
                        <div class="title">
                            您准备在该项经营上投入多少钱？
                        </div>
                        <div>
                            <select name="o_ask" id="o_ask" class="ask-select">
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
                    <div class="item required">
                        <div class="title">
                            您代表的公司名称
                        </div>
                        <div>
                            <input type="text" name="o_company" id="o_company">
                        </div>
                    </div>
                    <div class="submit" id="submit2">
                        <svg class="show-for-large" id="b" data-name="圖層 2" xmlns="http://www.w3.org/2000/svg" width="97.35" height="76.5" viewBox="0 0 97.35 76.5">
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
                        <svg class="hide-for-large" id="b" data-name="圖層 2" xmlns="http://www.w3.org/2000/svg" width="40.45" height="36.95" viewBox="0 0 40.45 36.95">
                            <g id="c" data-name="設計">
                                <g>
                                    <g>
                                        <path d="M3.33,36.95c-1.07-.62-1.88-1.45-2.45-2.48-.57-1.03-.85-2.21-.85-3.54s.28-2.51,.85-3.54c.57-1.04,1.38-1.86,2.45-2.48l.7,.83c-.89,.54-1.58,1.25-2.05,2.15s-.71,1.91-.71,3.04,.24,2.14,.71,3.04,1.16,1.61,2.05,2.14l-.7,.84Z" />
                                        <path d="M10.74,29.82c-.47,.17-.95,.31-1.43,.48v3.64c0,.53-.12,.78-.44,.94-.3,.16-.79,.19-1.61,.18-.04-.23-.16-.62-.29-.9,.56,.01,1.07,.01,1.21,.01,.17,0,.23-.05,.23-.25v-3.34c-.53,.18-1.04,.34-1.51,.48l-.23-.94c.48-.12,1.08-.3,1.74-.51v-2.85h-1.6v-.9h1.6v-2.59h.9v2.59h1.43v.9h-1.43v2.56l1.31-.4,.12,.88Zm4.33,4.2c.38,.05,.79,.08,1.22,.08,.31,0,2.08,0,2.51-.01-.13,.21-.25,.61-.29,.86h-2.26c-1.87,0-3.24-.35-4.08-2.17-.36,.97-.87,1.77-1.56,2.38-.14-.16-.51-.46-.71-.58,1.16-.91,1.73-2.37,1.94-4.29l.9,.1c-.07,.48-.14,.96-.26,1.39,.38,1.09,.95,1.69,1.69,2v-4.11h-3.17v-.82h7.41v.82h-3.33v1.52h2.69v.79h-2.69v2.04Zm2.61-6.1h-6.1v-4.21h6.1v4.21Zm-.92-3.48h-4.29v1.03h4.29v-1.03Zm0,1.7h-4.29v1.04h4.29v-1.04Z" />
                                        <path d="M30.68,28.87c-.53,1.33-1.26,2.42-2.17,3.29,1.34,1.01,3.05,1.7,5.13,2.03-.21,.21-.47,.6-.6,.87-2.15-.42-3.89-1.16-5.27-2.28-1.43,1.13-3.21,1.86-5.3,2.39-.1-.23-.39-.66-.58-.87,2.08-.43,3.83-1.12,5.19-2.16-.9-.87-1.59-1.95-2.11-3.21l.86-.26c.44,1.11,1.11,2.08,1.95,2.87,.83-.79,1.48-1.77,1.91-2.95l.99,.27Zm2.63-2.86h-11.15v-.95h5.4c-.18-.46-.55-1.09-.86-1.6l.9-.31c.36,.52,.78,1.23,.96,1.68l-.58,.23h5.34v.95Zm-6.98,.77c-.87,1.1-2.24,2.26-3.38,3-.17-.2-.53-.56-.74-.73,1.14-.65,2.42-1.65,3.2-2.64l.92,.36Zm3.69-.39c1.18,.81,2.64,1.98,3.34,2.81l-.79,.62c-.65-.82-2.09-2.05-3.29-2.87l.74-.56Z" />
                                        <path d="M37.15,24.86c1.07,.62,1.88,1.45,2.45,2.48,.57,1.03,.85,2.21,.85,3.54s-.28,2.51-.85,3.54c-.57,1.04-1.38,1.86-2.45,2.48l-.7-.83c.89-.54,1.58-1.25,2.05-2.15s.71-1.91,.71-3.04-.24-2.14-.71-3.04-1.16-1.61-2.05-2.14l.7-.84Z" />
                                    </g>
                                    <g class="arrow">
                                        <line class="e" y1="9.31" x2="19.18" y2="9.31" />
                                        <path class="d" d="M6.52,18.2c-.27-.43-.15-1,.29-1.28l11.95-7.61L6.81,1.71c-.43-.27-.56-.85-.29-1.28C6.8,0,7.37-.13,7.8,.14l13.17,8.39c.27,.17,.43,.46,.43,.78s-.16,.61-.43,.78L7.8,18.49c-.16,.1-.33,.14-.5,.14-.31,0-.61-.15-.78-.43Z" />
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </div>
                </form>
                <!-- </transition> -->
            </div>
        </div>
        <?php include 'menu-link.php'; ?>
        <div class="contact-finish flex-container align-center-middle">
            <div class="inner flex-container align-center-middle">
                <div class="ch">提交成功!</div>
                <div class="en">SUBMITTED SUCCESSFULLY</div>
                <div class="close"><img src="./images/finish-close.svg" alt=""></div>
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
            },
            beforeEnter(el) {
                gsap.set(el, {
                    opacity: 0
                });
            },
            enter(el, done) {
                gsap.to(el, .25, {
                    opacity: 1,
                    onComplete: () => {
                        done()
                        // this.initHandler()
                        // this.enterHandler()
                    }
                });
            },
            beforeLeave(el) {
                gsap.set(el, {
                    opacity: 1
                });
            },
            leave(el, done) {
                gsap.to(el, .25, {
                    opacity: 0,
                    onComplete: done
                });
            },
        },
        filters: {},
        mounted() {
            $('.ask-select').niceSelect();
            ScrollTrigger.create({
                trigger: ".menu-pin",
                toggleActions: "play pause resume reverse", //重覆觸發
                start: "top 80%",
                end: "bottom 80%",
                // markers: true,
                onEnter() {
                    $(".menu-link").addClass("is-show");
                },
                onLeave() {
                    $('.menu-link').removeClass('is-show');
                },
                onEnterBack() {
                    $(".menu-link").addClass("is-show");
                },
                onLeaveBack() {
                    $(".menu-link").removeClass("is-show");
                },
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


            $("#contactForm1").validate({
                ignore: [],
                rules: {
                    name: {
                        required: true,
                    },
                    area: {
                        required: false,
                    },
                    phone: {
                        required: false,
                    },
                    email: {
                        required: true,
                    },
                    ask: {
                        required: false,
                    },
                    content: {
                        required: false,
                    },
                },

                messages: {
                    name: {
                        required: "必填欄位"
                    },
                    // area: {
                    //     required: "必填欄位"
                    // },
                    // phone: {
                    //     required: "必填欄位",
                    // },
                    // email: {
                    //     required: "必填欄位",
                    // },
                    ask: {
                        required: "必填欄位"
                    },
                    // content: {
                    //     required: "必填欄位"
                    // },

                },

                // errorPlacement: function(label, element) {
                //     label.addClass('contact-form-error');
                //     label.insertAfter(element);
                // },
                // wrapper: 'div'
            })

            $("#submit1").click(function() {
                if ($("#contactForm1").valid() == true) {
                    var answer = confirm("您確認要送出您所填寫的資訊嗎？");
                    if (answer) {
                        $.ajax({
                            type: "POST",
                            url: "./contactMail.php",
                            data: $("#contactForm1").serialize(),
                            beforeSend: function() {},
                            success: function(data) {
                                // console.log("data: ", data)
                                $(".contact-finish").addClass("is-finish");
                            }
                        });
                    }
                }
            })


            $("#contactForm2").validate({
                ignore: [],
                rules: {
                    o_name: {
                        required: true,
                    },
                    o_email: {
                        required: true,
                    },
                    o_country: {
                        required: true,
                    },
                    o_ask: {
                        required: false,
                    },
                    o_company: {
                        required: true,
                    },


                },

                messages: {
                    o_name: {
                        required: "必填欄位"
                    },
                    o_email: {
                        required: "必填欄位"
                    },
                    o_country: {
                        required: "必填欄位"
                    },
                    // o_ask: {
                    //     required: false,
                    // },
                    o_company: {
                        required: "必填欄位"
                    },

                },

                // errorPlacement: function(label, element) {
                //     label.addClass('contact-form-error');
                //     label.insertAfter(element);
                // },
                // wrapper: 'div'
            })

            $("#submit2").click(function() {
                if ($("#contactForm2").valid() == true) {
                    var answer = confirm("您確認要送出您所填寫的資訊嗎？");
                    if (answer) {
                        $.ajax({
                            type: "POST",
                            url: "./overseaMail.php",
                            data: $("#contactForm2").serialize(),
                            beforeSend: function() {},
                            success: function(data) {
                                // console.log("data: ", data)
                                $(".contact-finish").addClass("is-finish");
                            }
                        });
                    }
                }
            })
            $(".contact-finish .close").click(function() {
                $(".contact-finish").removeClass("is-finish");
            })

            // $('.formList li').click(function() {
            //     $('.ask-select').niceSelect();

            // })

        },
        updated() {},
    })
    $('html').addClass('is-lock-x');
    $('body').addClass('is-lock-x');

    $('.menu-mobileWrap .contact').addClass('current');
</script>