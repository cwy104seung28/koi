
<?php
require_once 'Connections/connect2data.php';

if (!isset($_SESSION['checkPost'])) {
    header("Location: ./");
}

if ($_SESSION['checkPost'] == 1) {
    unset($_SESSION['checkPost']);
    header("Location: ./");
}

if (isset($_SESSION['checkPost']) && $_SESSION['checkPost'] == 0 && $_SERVER['REQUEST_METHOD'] === 'POST') {

    $_SESSION['checkPost'] = 1;


    $m_name = $_POST['o-name'];
    $m_email = $_POST['o-email'];
    $m_country = $_POST['o-country'];
    $m_ask = $_POST['o-ask'];
    $m_company = $_POST['o-company'];


    $insertSQl = $DB->query("INSERT INTO data_set (d_title, d_data1, d_data2, d_data3, d_data4, d_class1, d_date) VALUES (?, ?, ?, ?, ?, 'oversea', NOW())", [
        $m_name,
        $m_email,
        $m_country,
        $m_ask,
        $m_company
    ]);

    require_once('PHPMailer/PHPMailerAutoload.php');
    include 'smtpsetting.php';
    /////////////////////////////////////////////////////////////////
    $phpmailer->SingleTo = true; //will send mail to each email address individually

    $phpmailer->SetFrom('sendmail@goods-design.com.tw', '海外合作');
    // $phpmailer->AddReplyTo('cwyadt107102@gmail.com', '海外合作'); //回覆至

    $phpmailer->AddAddress($m_email, '海外合作');
    //上線前要加上wynchung@koicafe.com
    // $phpmailer->AddAddress('c3207054@gmail.com', '海外合作');
    // $phpmailer->AddAddress('c3207054@gmail.com', '海外合作'); //確認一下是不是data1
    // $phpmailer->AddBCC('c3207054@gmail.com', '海外合作');

    $phpmailer->Subject = "海外合作 - $m_name";


    $mailContent = "<div style='max-width: 500px; letter-spacing: 1px;'>"

        . "【海外合作表單】<br><br>"

        . "==================================================<br><br>"

        . "姓名： $m_name <br><br>"
        . "电子信箱： $m_email <br><br>"
        . "现居国家： $m_country <br><br>"
        . "准备在该项经营上投入多少钱？： $m_ask <br><br>"
        . "代表的公司名称：$m_company <br><br>"
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
