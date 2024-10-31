
<?php
require_once '../Connections/connect2data.php';

if (!isset($_SESSION['checkPost'])) {
    header("Location: ./");
}

if ($_SESSION['checkPost'] == 1) {
    unset($_SESSION['checkPost']);
    header("Location: ./");
}

if (isset($_SESSION['checkPost']) && $_SESSION['checkPost'] == 0 && $_SERVER['REQUEST_METHOD'] === 'POST') {

    $_SESSION['checkPost'] = 1;


    // $m_family_name = $_POST['o_family_name'];
    $m_first_name = $_POST['o_first_name'];
    $m_email = $_POST['o_email'];
    $m_country = $_POST['o_country'];
    $m_ask = $_POST['o_ask'];

    $m_company = $_POST['o_company'];
    $m_c_address = $_POST['o_c_address'];
    $m_c_date = $_POST['o_c_date'];
    $m_c_website = $_POST['o_c_website'];
    $m_c_business = $_POST['o_c_business'];
    $m_c_job = $_POST['o_c_job'];
    $m_c_choose = $_POST['o_c_choose'];

    $m_experience = $_POST['o_experience'];
    $m_experience_detail = $_POST['o_experience_detail'];


    $m_experience2 = $_POST['o_experience2'];
    $m_experience2_detail = $_POST['o_experience2_detail'];

    $m_c_area = $_POST['o_c_area'];
    $m_cooperate = $_POST['o_cooperate'];
    $m_other = $_POST['o_other'];
    $m_in_person = $_POST['o_in_person'];
    $m_content = $_POST['o_content'];

    $insertSQl = $DB->query("INSERT INTO data_set (d_data1, d_data2, d_data3, d_data4, d_data5, d_data6, d_data7, d_data8, d_data9, d_data10, d_data11, d_data12, d_data13, d_data14, d_data15, d_data16, d_data17, d_data18, d_data19, d_data20, d_class1, d_date) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,'oversea', NOW())", [
        // $m_family_name,
        $m_first_name,
        $m_email,
        $m_country,
        $m_ask,
        $m_company,
        $m_c_address,
        $m_c_date,
        $m_c_website,
        $m_c_business,
        $m_c_job,
        $m_c_choose,
        $m_experience,
        $m_experience_detail,
        $m_experience2,
        $m_experience2_detail,
        $m_c_area,
        $m_cooperate,
        $m_other,
        $m_in_person,
        $m_content
    ]);


    require_once('PHPMailer/PHPMailerAutoload.php');
    include 'smtpsetting.php';
    /////////////////////////////////////////////////////////////////
    $phpmailer->SingleTo = true; //will send mail to each email address individually

    $phpmailer->SetFrom('sendmail@goods-design.com.tw', '海外合作');
    // $phpmailer->AddReplyTo('cwyadt107102@gmail.com', '海外合作'); //回覆至

    $phpmailer->AddAddress($m_email, '海外合作');
    // $phpmailer->AddAddress('wynchung@koicafe.com', '海外合作');
    //上線前要加上wynchung@koicafe.com
    $phpmailer->AddAddress('cwyadt107102@gmail.com', '海外合作');

    // $phpmailer->AddBCC('c3207054@gmail.com', '海外合作');

    $phpmailer->Subject = "海外合作 - $m_name";


    $mailContent = "<div style='max-width: 500px; letter-spacing: 1px;'>"

        . "【海外合作表單】<br><br>"

        . "==================================================<br><br>"

       . "姓： $m_family_name <br><br>"
        . "名： $m_first_name <br><br>"
        . "电子信箱： $m_email <br><br>"
        . "现居国家： $m_country <br><br>"
        . "准备在该项经营上投入多少钱？： $m_ask <br><br>"
        . "代表的公司名称：$m_company <br><br>"
        . "公司地址： $m_c_address <br><br>"
        . "公司設立日期： $m_c_date <br><br>"
        . "您的企業網站： $m_c_website <br><br>"
        . "公司業務類型： $m_c_business<br><br>"
        . "您於您代表的公司擔任的職位： $m_c_job <br><br>"
        . "為什麼選擇KOI：$m_c_choose<br><br>"
        . "是否有餐飲相關經驗：$m_experience, $m_experience_detail <br><br>"
        . "是否有連鎖管理經驗： $m_experience2, $m_experience2_detail <br><br>"
        . "想經營之城市／區域／國家： $m_c_area <br><br>"
        . "希望什麼形式與KOI合作來經營此城市／區域／國家： $m_cooperate <br><br>"
        . "是否有其它合夥人： $m_other <br><br>"
        . "將來是否親自參與管理運營？： $m_in_person <br><br>"
        . "其它您希望與KOI分享的訊息：$m_content <br><br>"
        . "==================================================<br><br>"

        . "<br><br>"

        . "<div style='color: red;'>此為系統發信，請勿直接回覆。</div>"

        . "</div>";


    $phpmailer->Body = $mailContent;
    $phpmailer->IsHTML(true);

    if (!$phpmailer->Send()) {
        echo "<div class='err'>傳送時失敗，請稍後再試，或連絡客服！</div>";
        echo $phpmailer->ErrorInfo;
    } else {
        echo "您已預約成功！謝謝。";
        echo $phpmailer->ErrorInfo;
    }

    $_SESSION['checkPost'] = 0;
    $_SESSION['checkPost_finish'] = 0;

    unset($_SESSION['checkPost']);
} else {
    unset($_SESSION['checkPost']);
    header("Location: ./");
}
