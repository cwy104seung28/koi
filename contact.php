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

    <div class="contactWrap">
        <div class="head-area">
            <div class="en">CONTACT</div>
        </div>
        <div class="overseas">
            <img src="./images/overseas.svg">
        </div>
        <div class="contact-area flex-container align-justify">
            <div class="article-area">
                <div class="content">
                    ANY QUESTI<span class="orange">O</span>NS?<br>
                    PLEASE FEEL<br>
                    FREE T<span class="orange">O</span><br>
                    C<span class="orange">O</span>NTACT US<br>
                    HERE.
                    <div class="note">感谢您的来信，我们将尽快回覆您</div>
                </div>
            </div>
            <div class="form-area">
                <ul class="formList flex-container align-justify">
                    <li class="flex-container align-middle">
                        <input type="radio" name="contact" id="option1" checked>
                        <label for="option1" class="flex-container align-middle">
                            <div class="radio"></div>
                            <div class="title">联络我们</div>
                        </label>
                    </li>
                    <li class="flex-container align-middle">
                        <input type="radio" name="contact" id="option2">
                        <label for="option2" class="flex-container align-middle">
                            <div class="radio"></div>
                            <div class="title">海外合作申请表单</div>
                        </label>
                    </li>
                </ul>
                <!-- <form action="javascript:;" method="POST" id="contactForm">
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
                </form> -->
                <form action="javascript:;" method="POST" id="contactForm">
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
            </div>
        </div>
    </div>
    <?php include 'footer.php'; ?>
</body>
<?php include 'script.php'; ?>


</html>

<script>
    $('.ask-select').niceSelect();
</script>