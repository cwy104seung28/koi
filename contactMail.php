<?php
require_once 'Connections/connect2data.php';

if (!ini_get('display_errors')) {
    ini_set('display_errors', '1');
}
// // Ignore user aborts and allow the script to run forever
// ignore_user_abort(true); //使用者就算關閉了也沒關係

// // disable php time limit
// set_time_limit(0); //沒有時間限制

if (!isset($_SESSION['checkPost'])) {
    header("Location: ./");
}

if ($_SESSION['checkPost'] == 1) {
    unset($_SESSION['checkPost']);
    header("Location: ./");
}

if (isset($_SESSION['checkPost']) && $_SESSION['checkPost'] == 0 && $_SERVER['REQUEST_METHOD'] === 'POST') {

    $_SESSION['checkPost'] = 1;

    $m_name = $_POST['name'];
    $m_area = $_POST['area'];
    $m_phone = $_POST['phone'];
    $m_email = $_POST['email'];
    $m_ask = $_POST['ask'];
    $m_content = $_POST['content'];


    $insertSQl = $DB->query("INSERT INTO data_set (d_title, d_data1, d_data2, d_data3, d_data4, d_data5, d_class1, d_date) VALUES (?, ?, ?, ?, ?, 'contact', NOW())", [
        $m_name,
        $m_area,
        $m_phone,
        $m_email,
        $m_ask,
        $m_content
    ]);

    require_once('PHPMailer/PHPMailerAutoload.php');
    include 'smtpsetting.php';
    /////////////////////////////////////////////////////////////////
    $insertStoreC = $DB->row("SELECT * FROM class_set WHERE c_title LIKE '" . $m_area . "' AND c_parent='storeC' AND c_level = 1 AND c_active=1");
    $phpmailer->SingleTo = true; //will send mail to each email address individually

    $phpmailer->SetFrom('sendmail@goods-design.com.tw', '聯絡我們');
    // $phpmailer->AddReplyTo('cwyadt107102@gmail.com', '聯絡我們'); //回覆至

    $phpmailer->AddAddress($m_email, '聯絡我們');
    $phpmailer->AddAddress($insertStoreC['c_data1'], '聯絡我們');
    // $phpmailer->AddAddress('c3207054@gmail.com', '聯絡我們');
    // $phpmailer->AddAddress('c3207054@gmail.com', '聯絡我們'); //確認一下是不是data1
    // $phpmailer->AddBCC('c3207054@gmail.com', '聯絡我們');

    $phpmailer->Subject = "聯絡我們 - $m_name";


    $mailContent = "<div style='max-width: 500px; letter-spacing: 1px;'>"

        . "【聯絡我們表單】<br><br>"

        . "==================================================<br><br>"

        . "姓名： $m_name <br><br>"
        . "地区： $m_area <br><br>"
        . "联络电话： $m_phone <br><br>"
        . "电子信箱： $m_email <br><br>"
        . "询问类别： $m_ask <br><br>"
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
} 
else {
    unset($_SESSION['checkPost']);
    header("Location: ./");
}
