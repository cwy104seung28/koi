<?php

require_once '../Connections/connect2data.php';
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
        <transition name="fade" mode="out-in">
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
                        <div class="title">CONTACT</div>
                    </label>
                </li>
                <li class="flex-container align-middle" data-list="2" @click='catHandler(2)'>
                    <input type="radio" name="contact-m" id="option-m2">
                    <label for="option-m2" class="flex-container align-middle">
                        <div class="radio"></div>
                        <div class="title">Overseas <br>Collaboration</div>
                    </label>
                </li>
            </ul>
            <div class="article-area">
                <transition name="fade" mode="out-in">
                    <div class="content content-1" v-if="cat == 1" key="content1">
                        <ul class="change">
                            <li class="inner">ANY QUESTI<span class="orange">O</span>NS?</li>
                            <li class="inner">PLEASE FEEL</li>
                            <li class="inner">FREE T<span class="orange">O</span></li>
                            <li class="inner">C<span class="orange">O</span>NTACT US</li>
                            <li class="inner">HERE.</li>
                        </ul>
                        <div class="note">Thank you for contacting us.<br>We will be in touch with you as soon as possible.</div>
                    </div>
                    <div class="content content-2" v-if="cat == 2" key="content2">
                        <ul class="change">
                            <li class="inner">THANK Y<span class="orange">O</span>U</li>
                            <li class="inner">F<span class="orange">O</span>R YOUR L<span class="orange">O</span>VE</li>
                            <li class="inner">F<span class="orange">O</span>R K<span class="orange">O</span>I Thé</li>
                        </ul>
                        <div class="note">Thank you for your love for KOI. <br>
                            Please complete the following form and provide the relevant details to help us evaluate the collaboration and learn more about our overseas partnership opportunities.</div>
                        <div class="other flex-container">
                            <div class="dot show-for-large">＊</div>
                            <div class="text">
                                Collaboration is currently not open for the following regions: <br class="hide-for-large">Singapore, Malaysia, Cambodia, Vietnam
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
                            <div class="title">CONTACT</div>
                        </label>
                    </li>
                    <li class="flex-container align-middle" data-list="2" @click='catHandler(2)'>
                        <input type="radio" name="contact" id="option2">
                        <label for="option2" class="flex-container align-middle">
                            <div class="radio"></div>
                            <div class="title">OVERSEAS<br>COLLABORATION</div>
                        </label>
                    </li>
                </ul>
                <transition name="fade" mode="out-in">
                    <form action="javascript:;" method="POST" id="contactForm1" v-if="cat == 1" key="form1">
                        <div class="item required">
                            <div class="title">
                                Name
                            </div>
                            <div>
                                <input type="text" name="name" id="name">
                            </div>
                        </div>
                        <div class="item">
                            <div class="title">
                                Area
                            </div>
                            <div>
                                <!-- <input type="text" name="area" id="area"> -->
                                <select name="area" id="area" class="ask-select">
                                    <?php foreach ($storeCat as $storeC) : ?>
                                        <option value="<?= $storeC['c_title_en'] ?>">
                                            <span class="ch"><?= $storeC['c_title_en'] ?></span>
                                        </option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                        </div>
                        <div class="item">
                            <div class="title">
                                Phone number
                            </div>
                            <div>
                                <input type="text" name="phone" id="phone">
                            </div>
                        </div>
                        <div class="item">
                            <div class="title">
                                Mail
                            </div>
                            <div>
                                <input type="text" name="email" id="email">
                            </div>
                        </div>
                        <div class="item required">
                            <div class="title">
                                Type Of Inquiry
                            </div>
                            <div>
                                <select name="ask" id="ask" class="ask-select">
                                    <option value="After sales service">
                                        <span class="ch">After sales service</span>
                                    </option>
                                    <option value="Business cooperation">
                                        <span class="ch">Business cooperation</span>
                                    </option>
                                    <option value="Customer Complaint">
                                        <span class="ch">Customer Complaint</span>
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="item required">
                            <div class="title">
                                Message
                            </div>
                            <div>
                                <textarea name="content" id="content"></textarea>
                            </div>
                        </div>
                        <div class="submit" id="submit1" @click="submit1()">
                            <svg class="show-for-large" id="b" data-name="圖層 2" xmlns="http://www.w3.org/2000/svg" width="113.33" height="71.38" viewBox="0 0 113.33 71.38">
                                <g id="c" data-name="b">
                                    <g class="arrow">
                                        <line class="e" x1="3.66" y1="16.32" x2="37.27" y2="16.32" />
                                        <path class="d" d="M15.09,31.9c-.48-.75-.26-1.76,.5-2.24l20.94-13.33L15.59,2.99c-.76-.48-.98-1.49-.5-2.24,.48-.75,1.49-.97,2.24-.5l23.09,14.7c.47,.3,.75,.81,.75,1.37s-.29,1.07-.75,1.37l-23.09,14.7c-.27,.17-.57,.25-.87,.25-.54,0-1.06-.27-1.37-.75Z" />
                                    </g>
                                    <g>
                                        <path class="d" d="M0,58.21c0-1.92,.26-3.75,.77-5.47,.52-1.73,1.27-3.27,2.27-4.63,1-1.36,2.05-2.32,3.17-2.87l.6,1.77c-1.17,.89-2.12,2.25-2.85,4.07-.73,1.83-1.13,3.92-1.19,6.27v1.07c-.01,2.52,.34,4.77,1.05,6.75,.71,1.97,1.71,3.48,2.99,4.51l-.6,1.69c-1.12-.55-2.17-1.51-3.18-2.88-1-1.37-1.76-2.91-2.27-4.63-.51-1.72-.77-3.6-.77-5.66Z" />
                                        <path class="d" d="M26.05,60.92c0-.8-.28-1.41-.84-1.85-.56-.43-1.57-.87-3.04-1.31s-2.63-.93-3.49-1.47c-1.66-1.04-2.48-2.4-2.48-4.07,0-1.46,.6-2.67,1.79-3.62,1.19-.95,2.74-1.42,4.65-1.42,1.26,0,2.39,.23,3.38,.7s1.77,1.13,2.33,1.99c.57,.86,.85,1.82,.85,2.86h-3.15c0-.95-.3-1.69-.89-2.23-.6-.54-1.45-.8-2.55-.8-1.03,0-1.83,.22-2.4,.66s-.85,1.06-.85,1.85c0,.66,.31,1.22,.92,1.67s1.63,.88,3.05,1.3c1.41,.42,2.55,.9,3.41,1.44,.86,.54,1.48,1.15,1.88,1.85s.6,1.51,.6,2.44c0,1.51-.58,2.72-1.74,3.61-1.16,.89-2.73,1.34-4.72,1.34-1.31,0-2.52-.24-3.63-.73-1.1-.49-1.96-1.16-2.57-2.01-.61-.86-.92-1.86-.92-3h3.16c0,1.03,.34,1.83,1.02,2.4,.68,.57,1.66,.85,2.93,.85,1.1,0,1.92-.22,2.48-.67s.83-1.03,.83-1.77Z" />
                                        <path class="d" d="M40.37,64.28c-.89,1.05-2.15,1.57-3.79,1.57-1.46,0-2.57-.43-3.33-1.29-.75-.86-1.13-2.1-1.13-3.72v-8.75h3.03v8.71c0,1.71,.71,2.57,2.13,2.57s2.47-.53,2.98-1.59v-9.7h3.03v13.5h-2.86l-.07-1.32Z" />
                                        <path class="d" d="M58.76,58.98c0,2.1-.47,3.76-1.4,5-.94,1.24-2.22,1.86-3.86,1.86s-2.81-.57-3.69-1.71l-.15,1.46h-2.75v-19.17h3.03v6.97c.87-1.03,2.05-1.55,3.53-1.55,1.65,0,2.94,.61,3.88,1.84,.94,1.22,1.41,2.93,1.41,5.13v.18Zm-3.03-.26c0-1.46-.26-2.56-.77-3.29-.52-.73-1.26-1.1-2.25-1.1-1.31,0-2.24,.58-2.77,1.72v5.57c.54,1.17,1.47,1.76,2.8,1.76,.95,0,1.68-.36,2.2-1.06,.52-.71,.78-1.78,.8-3.21v-.39Z" />
                                        <path class="d" d="M64.66,52.09l.09,1.41c.95-1.11,2.25-1.66,3.89-1.66,1.81,0,3.04,.69,3.71,2.07,.98-1.38,2.36-2.07,4.14-2.07,1.49,0,2.6,.41,3.33,1.24,.73,.82,1.1,2.04,1.12,3.64v8.87h-3.03v-8.79c0-.86-.19-1.49-.56-1.89-.37-.4-.99-.6-1.86-.6-.69,0-1.25,.19-1.69,.56-.44,.37-.74,.85-.92,1.45v9.26h-3.02v-8.89c-.04-1.59-.85-2.38-2.43-2.38-1.22,0-2.08,.5-2.58,1.49v9.78h-3.03v-13.5h2.86Z" />
                                        <path class="d" d="M84.57,48.59c0-.47,.15-.85,.44-1.16s.72-.46,1.27-.46,.97,.15,1.27,.46,.45,.69,.45,1.16-.15,.84-.45,1.14-.72,.46-1.27,.46-.97-.15-1.27-.46-.44-.68-.44-1.14Zm3.22,17.01h-3.03v-13.5h3.03v13.5Z" />
                                        <path class="d" d="M95.4,48.81v3.28h2.38v2.24h-2.38v7.54c0,.52,.1,.89,.31,1.12,.2,.23,.57,.34,1.09,.34,.35,0,.7-.04,1.06-.13v2.35c-.69,.19-1.36,.29-2,.29-2.33,0-3.49-1.29-3.49-3.86v-7.65h-2.22v-2.24h2.22v-3.28h3.03Z" />
                                        <path class="d" d="M113.33,58.41c0,1.85-.25,3.63-.76,5.35-.51,1.72-1.28,3.28-2.31,4.69-1.03,1.41-2.11,2.39-3.23,2.93l-.6-1.69c1.25-.96,2.24-2.44,2.96-4.43,.73-1.98,1.09-4.25,1.09-6.8v-.29c0-2.31-.32-4.42-.95-6.32-.63-1.9-1.54-3.43-2.72-4.57l-.39-.35,.6-1.7c1.07,.52,2.1,1.43,3.1,2.75,1,1.32,1.76,2.79,2.3,4.41,.53,1.63,.83,3.3,.9,5.03v.97Z" />
                                    </g>
                                </g>
                            </svg>
                            <svg class="hide-for-large" id="b" data-name="圖層 2" xmlns="http://www.w3.org/2000/svg" width="70.8" height="39.2" viewBox="0 0 70.8 39.2">
                                <g id="c" data-name="設計">
                                    <g>
                                        <rect x=".22" y="8.39" width="19.18" height="1.85" />
                                        <path d="M6.74,18.2c-.27-.43-.15-1,.29-1.28l11.95-7.61L7.03,1.71c-.43-.27-.56-.85-.29-1.28s.85-.56,1.28-.28l13.17,8.39c.27,.17,.43,.46,.43,.78s-.16,.61-.43,.78l-13.17,8.39c-.16,.1-.33,.14-.5,.14-.31,0-.61-.15-.78-.43Z" />
                                    </g>
                                    <g>
                                        <path d="M0,30.97c0-1.2,.17-2.34,.49-3.42,.32-1.07,.79-2.04,1.42-2.89,.63-.86,1.28-1.44,1.98-1.79l.37,1.11c-.73,.56-1.33,1.41-1.78,2.54-.46,1.14-.7,2.45-.74,3.92v.66c0,1.57,.22,2.98,.66,4.22,.45,1.24,1.07,2.17,1.87,2.82l-.37,1.05c-.7-.34-1.35-.95-1.98-1.8s-1.1-1.81-1.42-2.89S.01,32.26,.01,30.97h-.01Z" />
                                        <path d="M16.28,32.66c0-.5-.18-.88-.52-1.15-.34-.27-.98-.54-1.9-.82s-1.65-.59-2.18-.92c-1.03-.65-1.55-1.49-1.55-2.54,0-.92,.37-1.67,1.12-2.26,.74-.59,1.71-.89,2.9-.89,.79,0,1.49,.14,2.11,.43s1.1,.7,1.46,1.24c.36,.54,.54,1.14,.54,1.79h-1.97c0-.59-.19-1.06-.56-1.39s-.91-.5-1.6-.5c-.64,0-1.15,.14-1.49,.41s-.54,.66-.54,1.15c0,.42,.19,.77,.57,1.03s1.02,.55,1.9,.8c.88,.27,1.6,.56,2.13,.89s.93,.72,1.18,1.15,.37,.95,.37,1.52c0,.95-.36,1.7-1.09,2.26-.73,.56-1.71,.84-2.95,.84-.82,0-1.57-.15-2.26-.46-.69-.31-1.23-.73-1.61-1.26-.38-.54-.57-1.16-.57-1.87h1.97c0,.64,.22,1.15,.64,1.49,.42,.36,1.03,.54,1.83,.54,.69,0,1.2-.14,1.55-.42s.52-.65,.52-1.1v.03Z" />
                                        <path d="M25.22,34.75c-.56,.65-1.34,.98-2.38,.98-.92,0-1.61-.27-2.08-.8-.47-.54-.7-1.32-.7-2.33v-5.47h1.89v5.44c0,1.07,.45,1.61,1.33,1.61s1.55-.33,1.87-1v-6.06h1.89v8.43h-1.79l-.05-.83h.03Z" />
                                        <path d="M36.7,31.46c0,1.32-.29,2.35-.88,3.13-.59,.78-1.39,1.16-2.41,1.16s-1.76-.36-2.31-1.07l-.09,.91h-1.71v-11.98h1.89v4.36c.55-.64,1.28-.97,2.21-.97,1.03,0,1.84,.38,2.43,1.15s.88,1.83,.88,3.21v.11Zm-1.89-.17c0-.92-.17-1.6-.49-2.06s-.79-.69-1.41-.69c-.82,0-1.39,.36-1.72,1.07v3.47c.33,.73,.92,1.1,1.75,1.1,.59,0,1.05-.22,1.37-.66,.32-.45,.49-1.11,.5-2.01v-.24h0Z" />
                                        <path d="M40.4,27.15l.05,.88c.59-.69,1.41-1.03,2.43-1.03,1.12,0,1.9,.43,2.31,1.29,.61-.87,1.48-1.29,2.59-1.29,.93,0,1.62,.26,2.08,.77s.69,1.28,.7,2.27v5.54h-1.89v-5.49c0-.54-.11-.93-.34-1.18-.23-.26-.63-.37-1.16-.37-.43,0-.78,.11-1.06,.34-.27,.23-.46,.54-.57,.91v5.79h-1.89v-5.56c-.03-1-.54-1.49-1.52-1.49-.75,0-1.3,.31-1.61,.93v6.12h-1.89v-8.43h1.78Z" />
                                        <path d="M52.84,24.95c0-.29,.09-.54,.28-.73s.45-.29,.79-.29,.61,.1,.79,.29,.28,.43,.28,.73-.09,.52-.28,.72-.45,.28-.79,.28-.61-.09-.79-.28-.28-.42-.28-.72Zm2.02,10.63h-1.89v-8.43h1.89v8.43Z" />
                                        <path d="M59.6,25.09v2.06h1.49v1.41h-1.49v4.71c0,.32,.06,.55,.19,.7,.13,.14,.36,.22,.68,.22,.22,0,.43-.03,.66-.08v1.47c-.43,.11-.84,.18-1.25,.18-1.46,0-2.18-.8-2.18-2.41v-4.78h-1.39v-1.41h1.39v-2.06h1.9Z" />
                                        <path d="M70.8,31.09c0,1.15-.15,2.27-.47,3.35s-.79,2.06-1.44,2.93c-.64,.88-1.32,1.49-2.02,1.83l-.37-1.05c.78-.6,1.39-1.52,1.85-2.76s.68-2.66,.68-4.24v-.18c0-1.44-.19-2.76-.59-3.95-.4-1.19-.96-2.15-1.7-2.86l-.24-.22,.37-1.06c.66,.32,1.32,.89,1.93,1.71,.63,.82,1.1,1.74,1.43,2.76,.33,1.01,.52,2.07,.56,3.14v.61h.01Z" />
                                    </g>
                                </g>
                            </svg>
                        </div>
                    </form>
                    <form action="javascript:;" method="POST" id="contactForm2" v-if="cat == 2" key="form2">
                        <div class="title-area flex-container">
                            <div class="line"></div>
                            <div class="head">
                                <div class="en">YOUR CONTACT DETAILS</div>
                                <!-- <div class="ch">联系方式</div> -->
                            </div>
                        </div>
                        <div class="item required">
                            <div class="title">
                                Family Name (Last Name)
                            </div>
                            <div>
                                <input type="text" name="o_family_name" id="o_family_name">
                            </div>
                        </div>
                        <div class="item required">
                            <div class="title">
                                First Name
                            </div>
                            <div>
                                <input type="text" name="o_first_name" id="o_first_name">
                            </div>
                        </div>
                        <div class="item required">
                            <div class="title">
                                E-mail
                            </div>
                            <div>
                                <input type="text" name="o_email" id="o_email">
                            </div>
                        </div>

                        <div class="item required">
                            <div class="title">
                                Country of Residence
                            </div>
                            <div>
                                <select name="o_country" id="o_country" class="ask-select">
                                    <?php foreach ($storeCat as $storeC) : ?>
                                        <option value="<?= $storeC['c_title_en'] ?>">
                                            <span class="ch"><?= $storeC['c_title_en'] ?></span>
                                        </option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                        </div>

                        <div class="item">
                            <div class="title">
                                What is the amount of funding you are willing to invest?
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
                                <div>
                                    Based on our past experience, the total initial investment is approximately USD 300,000.<br>
                                    Therefore, the starting amount in the dropdown menu is set at USD 300,000
                                </div>
                            </div>
                        </div>

                        <div class="title-area flex-container">
                            <div class="line"></div>
                            <div class="head">
                                <div class="en">Your Company Profile</div>
                                <!-- <div class="ch">您的商业数据</div> -->
                            </div>
                        </div>
                        <div class="item required">
                            <div class="title">
                                Company Name
                            </div>
                            <div>
                                <input type="text" name="o_company" id="o_company">
                            </div>
                        </div>
                        <div class="item">
                            <div class="title">
                                Where are you incorporated? Registered office?
                            </div>
                            <div>
                                <input type="text" name="o_c_address" id="o_c_address" placeholder="please indicate the appropriate state, province, territory of country">
                            </div>
                        </div>
                        <div class="item date">
                            <div class="title">
                                Incorporation Date
                            </div>
                            <div>
                                <input type="date" name="o_c_date" id="o_c_date" placeholder="yyyy/mm/dd" lang="en">
                            </div>
                        </div>
                        <div class="item">
                            <div class="title">
                                Company Website
                            </div>
                            <div>
                                <input type="text" name="o_c_website" id="o_c_website">
                            </div>
                        </div>
                        <div class="item">
                            <div class="title">
                                Business Activities Description
                            </div>
                            <div>
                                <input type="text" name="o_c_business" id="o_c_business">
                            </div>
                        </div>
                        <div class="item">
                            <div class="title">
                                Job Title
                            </div>
                            <div>
                                <input type="text" name="o_c_job" id="o_c_job">
                            </div>
                        </div>
                        <div class="item">
                            <div class="title">
                                Reason why are you interested in KOI over other brands?
                            </div>
                            <div>
                                <input type="text" name="o_c_choose" id="o_c_choose">
                            </div>
                        </div>
                        <div class="item">
                            <div class="title">
                                Have you ever owned or managed a retail F&B business?
                            </div>
                            <div class="flex-container experience">
                                <div>
                                    <input type="radio" id="yes" name="o_experience" value="yes" />
                                    <label for="yes" class="left flex-container align-middle">
                                        <div class="radio"></div>Yes
                                    </label>
                                </div>

                                <div>
                                    <input type="radio" id="no" name="o_experience" value="no" />
                                    <label for="no" class="flex-container align-middle">
                                        <div class="radio"></div>No
                                    </label>
                                </div>
                            </div>
                            <div>
                                <textarea name="o_experience_detail" id="o_experience_detail" placeholder="please briefly describe"></textarea>
                            </div>
                        </div>
                        <div class="item">
                            <div class="title">
                                Do you have the experience in running a chain store?
                            </div>
                            <div class="flex-container experience">
                                <div>
                                    <input type="radio" id="yes2" name="o_experience2" value="yes" />
                                    <label for="yes2" class="left flex-container align-middle">
                                        <div class="radio"></div>Yes
                                    </label>
                                </div>

                                <div>
                                    <input type="radio" id="no2" name="o_experience2" value="no" />
                                    <label for="no2" class="flex-container align-middle">
                                        <div class="radio"></div>No
                                    </label>
                                </div>
                            </div>
                            <div>
                                <textarea name="o_experience2_detail" id="o_experience2_detail" placeholder="please briefly describe"></textarea>
                            </div>
                        </div>
                        <div class="item">
                            <div class="title">
                                Proposed Business Site / Preferred Business Location
                            </div>
                            <div>
                                <input type="text" name="o_c_area" id="o_c_area">
                            </div>
                        </div>
                        <div class="item">
                            <div class="title">
                                What type of collaboration would you like to have with KOI in this city/region/country?
                            </div>
                            <div>
                                <select name="o_cooperate" id="o_cooperate" class="ask-select">
                                    <option value="New Country Partnership">
                                        New Country Partnership
                                    </option>
                                    <option value="Franchise Requests">
                                        Franchise Requests
                                    </option>
                                    <option value="Brand Collaboration">
                                        Brand Collaboration
                                    </option>
                                    <option value="Job Seeking">
                                        Job Seeking
                                    </option>
                                    <option value="Sponsorship">
                                        Sponsorship
                                    </option>
                                </select>

                            </div>
                        </div>
                        <div class="item">
                            <div class="title">
                                Will there be any partners or sponsors involved
                            </div>
                            <div class="flex-container">
                                <div>
                                    <input type="radio" id="yes3" name="o_other" value="yes" />
                                    <label for="yes3" class="left flex-container align-middle">
                                        <div class="radio"></div>Yes
                                    </label>
                                </div>

                                <div>
                                    <input type="radio" id="no3" name="o_other" value="no" />
                                    <label for="no3" class="flex-container align-middle">
                                        <div class="radio"></div>No
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="title">
                                Will you take an active role in managing the business?
                            </div>
                            <div class="flex-container">
                                <div>
                                    <input type="radio" id="yes4" name="o_in_person" value="yes" />
                                    <label for="yes4" class="left flex-container align-middle">
                                        <div class="radio"></div>Yes
                                    </label>
                                </div>

                                <div>
                                    <input type="radio" id="no4" name="o_in_person" value="no" />
                                    <label for="no4" class="flex-container align-middle">
                                        <div class="radio"></div>No
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="title">
                                Comments Please state any relevant experience you believe will help enable you to succeed with KOI given the Business Arrangement (s) you have mentioned in previous section.
                            </div>
                            <div>
                                <textarea name="o_content" id="o_content"></textarea>
                            </div>
                        </div>
                        <div class="submit" id="submit2" @click="submit2()">
                            <svg class=" show-for-large" id="b" data-name="圖層 2" xmlns="http://www.w3.org/2000/svg" width="113.33" height="71.38" viewBox="0 0 113.33 71.38">
                                <g id="c" data-name="b">
                                    <g class="arrow">
                                        <line class="e" x1="3.66" y1="16.32" x2="37.27" y2="16.32" />
                                        <path class="d" d="M15.09,31.9c-.48-.75-.26-1.76,.5-2.24l20.94-13.33L15.59,2.99c-.76-.48-.98-1.49-.5-2.24,.48-.75,1.49-.97,2.24-.5l23.09,14.7c.47,.3,.75,.81,.75,1.37s-.29,1.07-.75,1.37l-23.09,14.7c-.27,.17-.57,.25-.87,.25-.54,0-1.06-.27-1.37-.75Z" />
                                    </g>
                                    <g>
                                        <path class="d" d="M0,58.21c0-1.92,.26-3.75,.77-5.47,.52-1.73,1.27-3.27,2.27-4.63,1-1.36,2.05-2.32,3.17-2.87l.6,1.77c-1.17,.89-2.12,2.25-2.85,4.07-.73,1.83-1.13,3.92-1.19,6.27v1.07c-.01,2.52,.34,4.77,1.05,6.75,.71,1.97,1.71,3.48,2.99,4.51l-.6,1.69c-1.12-.55-2.17-1.51-3.18-2.88-1-1.37-1.76-2.91-2.27-4.63-.51-1.72-.77-3.6-.77-5.66Z" />
                                        <path class="d" d="M26.05,60.92c0-.8-.28-1.41-.84-1.85-.56-.43-1.57-.87-3.04-1.31s-2.63-.93-3.49-1.47c-1.66-1.04-2.48-2.4-2.48-4.07,0-1.46,.6-2.67,1.79-3.62,1.19-.95,2.74-1.42,4.65-1.42,1.26,0,2.39,.23,3.38,.7s1.77,1.13,2.33,1.99c.57,.86,.85,1.82,.85,2.86h-3.15c0-.95-.3-1.69-.89-2.23-.6-.54-1.45-.8-2.55-.8-1.03,0-1.83,.22-2.4,.66s-.85,1.06-.85,1.85c0,.66,.31,1.22,.92,1.67s1.63,.88,3.05,1.3c1.41,.42,2.55,.9,3.41,1.44,.86,.54,1.48,1.15,1.88,1.85s.6,1.51,.6,2.44c0,1.51-.58,2.72-1.74,3.61-1.16,.89-2.73,1.34-4.72,1.34-1.31,0-2.52-.24-3.63-.73-1.1-.49-1.96-1.16-2.57-2.01-.61-.86-.92-1.86-.92-3h3.16c0,1.03,.34,1.83,1.02,2.4,.68,.57,1.66,.85,2.93,.85,1.1,0,1.92-.22,2.48-.67s.83-1.03,.83-1.77Z" />
                                        <path class="d" d="M40.37,64.28c-.89,1.05-2.15,1.57-3.79,1.57-1.46,0-2.57-.43-3.33-1.29-.75-.86-1.13-2.1-1.13-3.72v-8.75h3.03v8.71c0,1.71,.71,2.57,2.13,2.57s2.47-.53,2.98-1.59v-9.7h3.03v13.5h-2.86l-.07-1.32Z" />
                                        <path class="d" d="M58.76,58.98c0,2.1-.47,3.76-1.4,5-.94,1.24-2.22,1.86-3.86,1.86s-2.81-.57-3.69-1.71l-.15,1.46h-2.75v-19.17h3.03v6.97c.87-1.03,2.05-1.55,3.53-1.55,1.65,0,2.94,.61,3.88,1.84,.94,1.22,1.41,2.93,1.41,5.13v.18Zm-3.03-.26c0-1.46-.26-2.56-.77-3.29-.52-.73-1.26-1.1-2.25-1.1-1.31,0-2.24,.58-2.77,1.72v5.57c.54,1.17,1.47,1.76,2.8,1.76,.95,0,1.68-.36,2.2-1.06,.52-.71,.78-1.78,.8-3.21v-.39Z" />
                                        <path class="d" d="M64.66,52.09l.09,1.41c.95-1.11,2.25-1.66,3.89-1.66,1.81,0,3.04,.69,3.71,2.07,.98-1.38,2.36-2.07,4.14-2.07,1.49,0,2.6,.41,3.33,1.24,.73,.82,1.1,2.04,1.12,3.64v8.87h-3.03v-8.79c0-.86-.19-1.49-.56-1.89-.37-.4-.99-.6-1.86-.6-.69,0-1.25,.19-1.69,.56-.44,.37-.74,.85-.92,1.45v9.26h-3.02v-8.89c-.04-1.59-.85-2.38-2.43-2.38-1.22,0-2.08,.5-2.58,1.49v9.78h-3.03v-13.5h2.86Z" />
                                        <path class="d" d="M84.57,48.59c0-.47,.15-.85,.44-1.16s.72-.46,1.27-.46,.97,.15,1.27,.46,.45,.69,.45,1.16-.15,.84-.45,1.14-.72,.46-1.27,.46-.97-.15-1.27-.46-.44-.68-.44-1.14Zm3.22,17.01h-3.03v-13.5h3.03v13.5Z" />
                                        <path class="d" d="M95.4,48.81v3.28h2.38v2.24h-2.38v7.54c0,.52,.1,.89,.31,1.12,.2,.23,.57,.34,1.09,.34,.35,0,.7-.04,1.06-.13v2.35c-.69,.19-1.36,.29-2,.29-2.33,0-3.49-1.29-3.49-3.86v-7.65h-2.22v-2.24h2.22v-3.28h3.03Z" />
                                        <path class="d" d="M113.33,58.41c0,1.85-.25,3.63-.76,5.35-.51,1.72-1.28,3.28-2.31,4.69-1.03,1.41-2.11,2.39-3.23,2.93l-.6-1.69c1.25-.96,2.24-2.44,2.96-4.43,.73-1.98,1.09-4.25,1.09-6.8v-.29c0-2.31-.32-4.42-.95-6.32-.63-1.9-1.54-3.43-2.72-4.57l-.39-.35,.6-1.7c1.07,.52,2.1,1.43,3.1,2.75,1,1.32,1.76,2.79,2.3,4.41,.53,1.63,.83,3.3,.9,5.03v.97Z" />
                                    </g>
                                </g>
                            </svg>
                            <svg class="hide-for-large" id="b" data-name="圖層 2" xmlns="http://www.w3.org/2000/svg" width="55.42" height="37.42" viewBox="0 0 55.42 37.42">
                                <g id="c" data-name="設計">
                                    <g>
                                        <line class="e" x1=".22" y1="9.31" x2="19.4" y2="9.31" />
                                        <path class="d" d="M6.74,18.2c-.27-.43-.15-1,.29-1.28l11.95-7.61L7.03,1.71c-.43-.27-.56-.85-.29-1.28C7.02,0,7.59-.13,8.02,.14l13.17,8.39c.27,.17,.43,.46,.43,.78s-.16,.61-.43,.78l-13.17,8.39c-.16,.1-.33,.14-.5,.14-.31,0-.61-.15-.78-.43Z" />
                                    </g>
                                    <g>
                                        <path class="d" d="M0,30.98c0-.94,.13-1.83,.38-2.68,.25-.84,.62-1.6,1.11-2.26,.49-.67,1-1.13,1.55-1.4l.29,.87c-.57,.44-1.04,1.1-1.39,1.99-.36,.89-.55,1.92-.58,3.07v.52c0,1.23,.17,2.33,.52,3.3,.35,.97,.84,1.7,1.46,2.21l-.29,.82c-.55-.27-1.06-.74-1.55-1.41-.49-.67-.86-1.42-1.11-2.26-.25-.84-.38-1.76-.38-2.77Z" />
                                        <path class="d" d="M12.74,32.3c0-.39-.14-.69-.41-.9-.27-.21-.77-.42-1.49-.64s-1.29-.46-1.71-.72c-.81-.51-1.21-1.17-1.21-1.99,0-.72,.29-1.31,.88-1.77,.58-.46,1.34-.7,2.27-.7,.62,0,1.17,.11,1.65,.34s.86,.55,1.14,.97c.28,.42,.42,.89,.42,1.4h-1.54c0-.46-.15-.83-.44-1.09-.29-.26-.71-.39-1.25-.39-.5,0-.9,.11-1.17,.32s-.42,.52-.42,.9c0,.33,.15,.6,.45,.81s.8,.43,1.49,.63c.69,.21,1.25,.44,1.67,.7,.42,.26,.73,.56,.92,.9s.29,.74,.29,1.19c0,.74-.28,1.33-.85,1.77-.57,.44-1.34,.66-2.31,.66-.64,0-1.23-.12-1.77-.36-.54-.24-.96-.57-1.26-.99-.3-.42-.45-.91-.45-1.46h1.54c0,.5,.17,.9,.5,1.17,.33,.28,.81,.42,1.43,.42,.54,0,.94-.11,1.21-.33s.41-.51,.41-.86Z" />
                                        <path class="d" d="M19.74,33.94c-.44,.51-1.05,.77-1.86,.77-.72,0-1.26-.21-1.63-.63-.37-.42-.55-1.03-.55-1.82v-4.28h1.48v4.26c0,.84,.35,1.26,1.04,1.26s1.21-.26,1.46-.78v-4.74h1.48v6.6h-1.4l-.04-.65Z" />
                                        <path class="d" d="M28.73,31.36c0,1.03-.23,1.84-.69,2.45-.46,.61-1.09,.91-1.89,.91s-1.38-.28-1.81-.84l-.07,.71h-1.34v-9.38h1.48v3.41c.43-.5,1-.76,1.73-.76,.81,0,1.44,.3,1.9,.9,.46,.6,.69,1.43,.69,2.51v.09Zm-1.48-.13c0-.72-.13-1.25-.38-1.61-.25-.36-.62-.54-1.1-.54-.64,0-1.09,.28-1.35,.84v2.72c.26,.57,.72,.86,1.37,.86,.46,0,.82-.17,1.07-.52,.25-.35,.38-.87,.39-1.57v-.19Z" />
                                        <path class="d" d="M31.62,27.99l.04,.69c.46-.54,1.1-.81,1.9-.81,.88,0,1.49,.34,1.81,1.01,.48-.68,1.16-1.01,2.03-1.01,.73,0,1.27,.2,1.63,.6,.36,.4,.54,1,.55,1.78v4.34h-1.48v-4.3c0-.42-.09-.73-.27-.92-.18-.2-.49-.29-.91-.29-.34,0-.61,.09-.83,.27-.21,.18-.36,.42-.45,.71v4.53h-1.48v-4.35c-.02-.78-.42-1.17-1.19-1.17-.59,0-1.02,.24-1.26,.73v4.79h-1.48v-6.6h1.4Z" />
                                        <path class="d" d="M41.36,26.27c0-.23,.07-.42,.22-.57s.35-.23,.62-.23,.48,.08,.62,.23,.22,.34,.22,.57-.07,.41-.22,.56-.35,.22-.62,.22-.48-.07-.62-.22-.22-.33-.22-.56Zm1.58,8.32h-1.48v-6.6h1.48v6.6Z" />
                                        <path class="d" d="M46.65,26.38v1.61h1.17v1.1h-1.17v3.69c0,.25,.05,.43,.15,.55,.1,.11,.28,.17,.53,.17,.17,0,.34-.02,.52-.06v1.15c-.34,.09-.66,.14-.98,.14-1.14,0-1.71-.63-1.71-1.89v-3.74h-1.09v-1.1h1.09v-1.61h1.48Z" />
                                        <path class="d" d="M55.42,31.07c0,.9-.12,1.78-.37,2.62-.25,.84-.62,1.61-1.13,2.29-.5,.69-1.03,1.17-1.58,1.43l-.29-.82c.61-.47,1.09-1.19,1.45-2.16,.36-.97,.53-2.08,.53-3.32v-.14c0-1.13-.15-2.16-.46-3.09-.31-.93-.75-1.68-1.33-2.24l-.19-.17,.29-.83c.52,.25,1.03,.7,1.51,1.34,.49,.64,.86,1.36,1.12,2.16,.26,.79,.41,1.62,.44,2.46v.48Z" />
                                    </g>
                                </g>
                            </svg>
                        </div>
                    </form>
                </transition>
            </div>
        </div>
        <?php include 'menu-link.php'; ?>
        <div class="contact-finish flex-container align-center-middle">
            <div class="inner flex-container align-center-middle">
                <!-- <div class="ch">提交成功!</div> -->
                <div class="en">SUBMITTED <br class="hide-for-large">SUCCESSFULLY</div>
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
            // initNiceSelect() {
            //     $('.ask-select').niceSelect('destroy'); // 先銷毀舊的實例
            //     $('.ask-select').niceSelect(); // 再重新初始化
            // },
            catHandler(i) {
                this.cat = i;
            },
            submit1() {
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
                            required: false,
                        },
                        ask: {
                            required: true,
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

                })
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
            },
            submit2() {
                $("#contactForm2").validate({
                    ignore: [],
                    rules: {
                        // o_name: {
                        //     required: true,
                        // },
                        // o_email: {
                        //     required: true,
                        // },
                        // o_country: {
                        //     required: true,
                        // },
                        // o_ask: {
                        //     required: false,
                        // },
                        // o_company: {
                        //     required: true,
                        // },


                    },

                    messages: {
                        // o_name: {
                        //     required: "必填欄位"
                        // },
                        // o_email: {
                        //     required: "必填欄位"
                        // },
                        // o_country: {
                        //     required: "必填欄位"
                        // },
                        // // o_ask: {
                        // //     required: false,
                        // // },
                        // o_company: {
                        //     required: "必填欄位"
                        // },

                    },

                    // errorPlacement: function(label, element) {
                    //     label.addClass('contact-form-error');
                    //     label.insertAfter(element);
                    // },
                    // wrapper: 'div'
                })
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
            }
        },
        filters: {},
        // watch: {
        //     cat() {
        //         nextTick(() => {
        //             $('.ask-select').niceSelect('update'); // 確保更新時正確重啟
        //         });
        //     }
        // },
        mounted() {
            $('.ask-select').niceSelect();
            flatpickr("#o_c_date", {
                dateFormat: "Y/m/d",
                locale: "en"
            });
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
                .to(".contactWrap .article-area .change .inner::before", {
                    duration: 0.5,
                    transformOrigin: 'left',
                    cssRule: {
                        scaleX: 1
                    },
                    // stagger: 0.2,
                    ease: Power2.easeOut,
                }, 'start')
                .to(".contactWrap .article-area .change .inner::after", {
                    duration: 0.5,
                    transformOrigin: 'right',
                    cssRule: {
                        scaleX: 0
                    },
                    // stagger: 0.2,
                    ease: Power2.easeOut,
                }, 'start')
                .to(".contactWrap .article-area .change .inner::before", {
                    duration: 0.5,
                    transformOrigin: 'right',
                    cssRule: {
                        scaleX: 0
                    },
                    // scale: -1,
                    // stagger: 0.2,
                    ease: Power2.easeOut,
                })


            // $("#contactForm1").validate({
            //     ignore: [],
            //     rules: {
            //         name: {
            //             required: true,
            //         },
            //         area: {
            //             required: false,
            //         },
            //         phone: {
            //             required: false,
            //         },
            //         email: {
            //             required: false,
            //         },
            //         ask: {
            //             required: true,
            //         },
            //         content: {
            //             required: false,
            //         },
            //     },

            //     messages: {
            //         name: {
            //             required: "必填欄位"
            //         },
            //         // area: {
            //         //     required: "必填欄位"
            //         // },
            //         // phone: {
            //         //     required: "必填欄位",
            //         // },
            //         // email: {
            //         //     required: "必填欄位",
            //         // },
            //         ask: {
            //             required: "必填欄位"
            //         },
            //         // content: {
            //         //     required: "必填欄位"
            //         // },

            //     },

            //     // errorPlacement: function(label, element) {
            //     //     label.addClass('contact-form-error');
            //     //     label.insertAfter(element);
            //     // },
            //     // wrapper: 'div'
            // })

            // $("#submit1").click(function() {
            //     if ($("#contactForm1").valid() == true) {
            //         var answer = confirm("您確認要送出您所填寫的資訊嗎？");
            //         if (answer) {
            //             $.ajax({
            //                 type: "POST",
            //                 url: "./contactMail.php",
            //                 data: $("#contactForm1").serialize(),
            //                 beforeSend: function() {},
            //                 success: function(data) {
            //                     // console.log("data: ", data)
            //                     $(".contact-finish").addClass("is-finish");
            //                 }
            //             });
            //         }
            //     }
            // })


            // $("#contactForm2").validate({
            //     ignore: [],
            //     rules: {
            //         o_name: {
            //             required: true,
            //         },
            //         o_email: {
            //             required: true,
            //         },
            //         o_country: {
            //             required: true,
            //         },
            //         o_ask: {
            //             required: false,
            //         },
            //         o_company: {
            //             required: true,
            //         },


            //     },

            //     messages: {
            //         o_name: {
            //             required: "必填欄位"
            //         },
            //         o_email: {
            //             required: "必填欄位"
            //         },
            //         o_country: {
            //             required: "必填欄位"
            //         },
            //         // o_ask: {
            //         //     required: false,
            //         // },
            //         o_company: {
            //             required: "必填欄位"
            //         },

            //     },

            //     // errorPlacement: function(label, element) {
            //     //     label.addClass('contact-form-error');
            //     //     label.insertAfter(element);
            //     // },
            //     // wrapper: 'div'
            // })

            // $("#submit2").click(function() {
            //     if ($("#contactForm2").valid() == true) {
            //         var answer = confirm("您確認要送出您所填寫的資訊嗎？");
            //         if (answer) {
            //             $.ajax({
            //                 type: "POST",
            //                 url: "./overseaMail.php",
            //                 data: $("#contactForm2").serialize(),
            //                 beforeSend: function() {},
            //                 success: function(data) {
            //                     // console.log("data: ", data)
            //                     $(".contact-finish").addClass("is-finish");
            //                 }
            //             });
            //         }
            //     }
            // })

            $(".contact-finish .close").click(function() {
                $(".contact-finish").removeClass("is-finish");
            })

            // $('.formList li').click(function() {
            //     $('.ask-select').niceSelect();

            // })

        },
        updated() {
            // $('.ask-select').niceSelect('destroy'); // 先銷毀舊的實例

            gsap.delayedCall(0.65, function() {
                $('.ask-select').niceSelect(); // 再重新初始化
                flatpickr("#o_c_date", {
                    dateFormat: "Y/m/d",
                    locale: "en"
                });
            });


        }

    })
    $('html').addClass('is-lock-x');
    $('body').addClass('is-lock-x');

    $('.menu-mobileWrap .contact').addClass('current');
</script>