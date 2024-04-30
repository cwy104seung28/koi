
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

    unset($_SESSION['checkPost']);
} else {
    unset($_SESSION['checkPost']);
    header("Location: ./");
}
