
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

    $m_name = $_POST['name'];
    $m_area = $_POST['area'];
    $m_phone = $_POST['phone'];
    $m_email = $_POST['email'];
    $m_ask = $_POST['ask'];


    $insertSQl = $DB->query("INSERT INTO data_set (d_title, d_data1, d_data2, d_data3, d_data4, d_class1, d_date) VALUES (?, ?, ?, ?, ?, 'contact', NOW())", [
        $m_name,
        $m_area,
        $m_phone,
        $m_email,
        $m_ask
    ]);

    unset($_SESSION['checkPost']);
} else {
    unset($_SESSION['checkPost']);
    header("Location: ./");
}
