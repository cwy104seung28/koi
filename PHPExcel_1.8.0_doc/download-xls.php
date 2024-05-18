<?php require_once '../Connections/connect2data.php';?>
<?php
/**
 * PHPExcel
 *
 * Copyright (C) 2006 - 2014 PHPExcel
 *
 * This library is free software; you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation; either
 * version 2.1 of the License, or (at your option) any later version.
 *
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this library; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301  USA
 *
 * @category   PHPExcel
 * @package    PHPExcel
 * @copyright  Copyright (c) 2006 - 2014 PHPExcel (http://www.codeplex.com/PHPExcel)
 * @license    http://www.gnu.org/licenses/old-licenses/lgpl-2.1.txt    LGPL
 * @version    1.8.0, 2014-03-02
 */

header('Content-Type: text/html; charset=utf-8');

if (isset($_REQUEST['outexcel']) && ($_REQUEST['outexcel'] == "1")) {

    ini_set("gd.jpeg_ignore_warning", 1);


    $date = "";
    $dateSQL = '';
    if (isset($_REQUEST['start']) && isset($_REQUEST['end'])) {

        $start = $_REQUEST['start'];
        $end = $_REQUEST['end'];

        if ($start != '' && $end != '') {
            //$dateSQL = " AND (`d_date`>='".$start." 00:00:00' AND `d_date`<='".$end." 23:59:59')";
            $dateSQL = " AND (`d_date` BETWEEN '" . $start . " 00:00:00' AND '" . $end . " 23:59:59')";
        }

        //echo "以日期查詢<br>";
    }


    //$query_RecOrder = "SELECT * FROM order_set AS O WHERE O.o_number!='' $numSQL $dateSQL $fulltxtSQL $statusSQL ORDER BY `datetime` DESC";
    $query_Recfranchisee = "SELECT * FROM data_set WHERE d_class1 = 'franchisee' $dateSQL ORDER BY d_date DESC";
    $Recfranchisee = $conn->query($query_Recfranchisee);
    $row_Recfranchisee = $Recfranchisee->fetch();
    $totalRows_Recfranchisee = $Recfranchisee->rowCount();

    //echo $query_RecOrder.'<br>';

    if ($totalRows_Recfranchisee > 0) {

        /** Error reporting */
        error_reporting(E_ALL);
        ini_set('display_errors', TRUE);
        ini_set('display_startup_errors', TRUE);
        date_default_timezone_set('Asia/Taipei');

        //define('EOL',(PHP_SAPI == 'cli') ? PHP_EOL : '<br \>');

        if (PHP_SAPI == 'cli') {
            die('This example should only be run from a Web Browser');
        }

        /** Include PHPExcel */
        require_once dirname(__FILE__) . '/Classes/PHPExcel.php';

        // Create new PHPExcel object
        $objPHPExcel = new PHPExcel();

        // Set document properties
        $objPHPExcel->getProperties()->setCreator("Maarten Balliauw")
            ->setLastModifiedBy("Maarten Balliauw")
            ->setTitle("Office 2007 XLSX Test Document")
            ->setSubject("Office 2007 XLSX Test Document")
            ->setDescription("Test document for Office 2007 XLSX, generated using PHP classes.")
            ->setKeywords("office 2007 openxml php")
            ->setCategory("Test result file");

        // Add some data
        // $objPHPExcel->setActiveSheetIndex(0)
        //             ->setCellValue('A1', '名稱')
        //             ->setCellValue('B1', '分類')
        //             ->setCellValue('C1', '圖片')
        //             ->setCellValue('A2', $row_Recaward['d_title'])
        //             ->setCellValue('B2', $row_Recaward['d_tag'])
        //             ->setCellValue('C2', $row_Recaward['d_id']);

        //訂單編號 訂單日期 客戶 訂單總額 付款方式
        //设置表头


        // 01 申請人資料 
        $k1 = "姓名";
        $k2 = "電話";
        $k3 = "信箱";

        $k4 = "戶籍地址-縣市";
        $k5 = "戶籍地址-地區";
        $k6 = "戶籍地址-地址";

        $k7 = "通訊地址-縣市";
        $k8 = "通訊地址-地區";
        $k9 = "通訊地址-地址";

        // 02 家庭狀況
        $k10 = "性別";
        $k11 = "生日";
        $k12 = "婚姻狀況";
        $k13 = "子女人數";
        $k14 = "配偶名";
        $k15 = "配偶職業";
        $k16 = "父名";
        $k17 = "父職業";
        $k18 = "母名";
        $k19 = "母職業";

        // 03 學歷
        $k20 = "學歷";
        $k21 = "學校";
        $k22 = "科系";
        $k23 = "擁有證照";
        $k24 = "專長";

        // 04 經歷
        $k25 = "目前工作行業";
        $k26 = "職稱";
        $k27 = "月收入";
        $k28 = "店面管理經驗";
        $k29 = "店名";
        $k30 = "經營時間";
        $k31 = "餐飲管理經驗";
        $k32 = "店名";
        $k33 = "職稱";
        $k34 = "經營時間";

        // 05 您對於麻古的印象
        $k35 = "您是否飲用過本店商品?";
        $k36 = "最喜歡的商品為?";
        $k37 = "您之前是否有經商或販賣之經驗?";
        $k37_else = "經營內容為";
        $k38 = "您認為麻古與其他同業最大的差異為何? (可複選)";
        $k38_else = "其他";
        $k39 = "請問一杯飲料您可以接受的消費金額為多少?";
        $k40 = "如果您想購買飲料，您所想到會前往購買的三大品牌為何?";

        // 06 經歷
        $k41 = "請問您預計何時加盟創業?";
        $k42 = "請問您預計開店的的地點為何?";
        $k43 = "請問您會投入多少資本在麻古茶坊茶飲事業?";
        $k44 = "請問您的資金來源為何?";
        $k45 = "請問您選擇加盟創業的原因為何?";
        $k45_else = "其他";
        $k46 = "請問您為何想加盟麻古茶坊?";
        $k46_else = "其他";
        $k47 = "請問您預計合作創業的夥伴為何?";
        $k47_else = "其他";
        $k48 = "請問您開店後由誰來管理店面?";
        $k48_else = "其他";
        $k49 = "請問您是否參加過其他說明會或加盟展?";
        $k50 = "品牌名稱";
        $k51 = "請問您是從何處得知麻古茶坊的加盟訊息?";
        $k51_else = "其他";

        // 07 其他
        $k52 = "您是否做好創業的準備： (長時間的投入與經營管理的風險)";
        $k53 = "您是否相信總部的各項訓練輔導?";
        $k54 = "是否參與過麻古茶坊的工作?";
        $k55 = "是否在面談前已經認識麻古茶坊的加盟店長?";
        $k56 = "請選擇";

        $style = array(
            'alignment' => array(
                'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER,
                'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
            ),
            'font' => array(
                'name' => '新細明體',
            ),
        );

        $objPHPExcel->getDefaultStyle()->applyFromArray($style);

        $objPHPExcel->getActiveSheet()->freezePane('B1');

        // -------------------------------------------------------------------

        $objPHPExcel->getActiveSheet()->getColumnDimension("A")->setWidth(20);
        $objPHPExcel->getActiveSheet()->getColumnDimension("B")->setWidth(25);
        $objPHPExcel->getActiveSheet()->getColumnDimension("C")->setWidth(25);
        $objPHPExcel->getActiveSheet()->getColumnDimension("D")->setWidth(20);
        $objPHPExcel->getActiveSheet()->getColumnDimension("E")->setWidth(20);
        $objPHPExcel->getActiveSheet()->getColumnDimension("F")->setWidth(45);
        $objPHPExcel->getActiveSheet()->getColumnDimension("G")->setWidth(20);
        $objPHPExcel->getActiveSheet()->getColumnDimension("H")->setWidth(20);
        $objPHPExcel->getActiveSheet()->getColumnDimension("I")->setWidth(45);
        $objPHPExcel->getActiveSheet()->getColumnDimension("J")->setWidth(20);
        $objPHPExcel->getActiveSheet()->getColumnDimension("K")->setWidth(20);
        $objPHPExcel->getActiveSheet()->getColumnDimension("L")->setWidth(20);
        $objPHPExcel->getActiveSheet()->getColumnDimension("M")->setWidth(20);
        $objPHPExcel->getActiveSheet()->getColumnDimension("N")->setWidth(20);
        $objPHPExcel->getActiveSheet()->getColumnDimension("O")->setWidth(20);
        $objPHPExcel->getActiveSheet()->getColumnDimension("P")->setWidth(20);
        $objPHPExcel->getActiveSheet()->getColumnDimension("Q")->setWidth(20);
        $objPHPExcel->getActiveSheet()->getColumnDimension("R")->setWidth(20);
        $objPHPExcel->getActiveSheet()->getColumnDimension("S")->setWidth(20);
        $objPHPExcel->getActiveSheet()->getColumnDimension("T")->setWidth(20);
        $objPHPExcel->getActiveSheet()->getColumnDimension("U")->setWidth(20);
        $objPHPExcel->getActiveSheet()->getColumnDimension("V")->setWidth(20);
        $objPHPExcel->getActiveSheet()->getColumnDimension("W")->setWidth(20);
        $objPHPExcel->getActiveSheet()->getColumnDimension("X")->setWidth(20);
        $objPHPExcel->getActiveSheet()->getColumnDimension("Y")->setWidth(20);
        $objPHPExcel->getActiveSheet()->getColumnDimension("Z")->setWidth(20);

        $objPHPExcel->getActiveSheet()->getColumnDimension("AA")->setWidth(20);
        $objPHPExcel->getActiveSheet()->getColumnDimension("AB")->setWidth(20);
        $objPHPExcel->getActiveSheet()->getColumnDimension("AC")->setWidth(20);
        $objPHPExcel->getActiveSheet()->getColumnDimension("AD")->setWidth(20);
        $objPHPExcel->getActiveSheet()->getColumnDimension("AE")->setWidth(20);
        $objPHPExcel->getActiveSheet()->getColumnDimension("AF")->setWidth(20);
        $objPHPExcel->getActiveSheet()->getColumnDimension("AG")->setWidth(20);
        $objPHPExcel->getActiveSheet()->getColumnDimension("AH")->setWidth(20);
        $objPHPExcel->getActiveSheet()->getColumnDimension("AI")->setWidth(25);
        $objPHPExcel->getActiveSheet()->getColumnDimension("AJ")->setWidth(20);
        $objPHPExcel->getActiveSheet()->getColumnDimension("AK")->setWidth(35);
        $objPHPExcel->getActiveSheet()->getColumnDimension("AL")->setWidth(20);
        $objPHPExcel->getActiveSheet()->getColumnDimension("AM")->setWidth(50);
        $objPHPExcel->getActiveSheet()->getColumnDimension("AN")->setWidth(20);
        $objPHPExcel->getActiveSheet()->getColumnDimension("AO")->setWidth(45);
        $objPHPExcel->getActiveSheet()->getColumnDimension("AP")->setWidth(55);
        $objPHPExcel->getActiveSheet()->getColumnDimension("AQ")->setWidth(25);
        $objPHPExcel->getActiveSheet()->getColumnDimension("AR")->setWidth(30);
        $objPHPExcel->getActiveSheet()->getColumnDimension("AS")->setWidth(45);
        $objPHPExcel->getActiveSheet()->getColumnDimension("AT")->setWidth(25);
        $objPHPExcel->getActiveSheet()->getColumnDimension("AU")->setWidth(35);
        $objPHPExcel->getActiveSheet()->getColumnDimension("AV")->setWidth(20);
        $objPHPExcel->getActiveSheet()->getColumnDimension("AW")->setWidth(30);
        $objPHPExcel->getActiveSheet()->getColumnDimension("AX")->setWidth(40);
        $objPHPExcel->getActiveSheet()->getColumnDimension("AY")->setWidth(30);
        $objPHPExcel->getActiveSheet()->getColumnDimension("AZ")->setWidth(20);

        $objPHPExcel->getActiveSheet()->getColumnDimension("BA")->setWidth(30);
        $objPHPExcel->getActiveSheet()->getColumnDimension("BB")->setWidth(20);
        $objPHPExcel->getActiveSheet()->getColumnDimension("BC")->setWidth(40);
        $objPHPExcel->getActiveSheet()->getColumnDimension("BD")->setWidth(20);
        $objPHPExcel->getActiveSheet()->getColumnDimension("BE")->setWidth(40);
        $objPHPExcel->getActiveSheet()->getColumnDimension("BF")->setWidth(20);
        $objPHPExcel->getActiveSheet()->getColumnDimension("BG")->setWidth(55);
        $objPHPExcel->getActiveSheet()->getColumnDimension("BH")->setWidth(30);
        $objPHPExcel->getActiveSheet()->getColumnDimension("BI")->setWidth(25);
        $objPHPExcel->getActiveSheet()->getColumnDimension("BJ")->setWidth(40);
        $objPHPExcel->getActiveSheet()->getColumnDimension("BK")->setWidth(20);
        $objPHPExcel->getActiveSheet()->getColumnDimension("BL")->setWidth(20);

        // $objPHPExcel->getActiveSheet()->getColumnDimension("BM")->setWidth(20);
        // $objPHPExcel->getActiveSheet()->getColumnDimension("BN")->setWidth(20);
        // $objPHPExcel->getActiveSheet()->getColumnDimension("BO")->setWidth(20);
        // $objPHPExcel->getActiveSheet()->getColumnDimension("BP")->setWidth(20);
        // $objPHPExcel->getActiveSheet()->getColumnDimension("BQ")->setWidth(20);
        // $objPHPExcel->getActiveSheet()->getColumnDimension("BR")->setWidth(20);
        // $objPHPExcel->getActiveSheet()->getColumnDimension("BS")->setWidth(20);
        // $objPHPExcel->getActiveSheet()->getColumnDimension("BT")->setWidth(20);
        // $objPHPExcel->getActiveSheet()->getColumnDimension("BU")->setWidth(20);
        // $objPHPExcel->getActiveSheet()->getColumnDimension("BV")->setWidth(20);
        // $objPHPExcel->getActiveSheet()->getColumnDimension("BW")->setWidth(20);
        // $objPHPExcel->getActiveSheet()->getColumnDimension("BX")->setWidth(20);
        // $objPHPExcel->getActiveSheet()->getColumnDimension("BY")->setWidth(20);
        // $objPHPExcel->getActiveSheet()->getColumnDimension("BZ")->setWidth(20);

        // --------------------------------------------------------------------

        // --------------------------------------------------------------------

        $objPHPExcel->getActiveSheet()->getRowDimension('1')->setRowHeight(20);
        $objPHPExcel->getActiveSheet()->getRowDimension('2')->setRowHeight(40);

        $objPHPExcel->getActiveSheet()->setCellValue('A2', "$k1");
        $objPHPExcel->getActiveSheet()->setCellValue('B2', "$k2");
        $objPHPExcel->getActiveSheet()->setCellValue('C2', "$k3");
        $objPHPExcel->getActiveSheet()->setCellValue('D2', "$k4");
        $objPHPExcel->getActiveSheet()->setCellValue('E2', "$k5");
        $objPHPExcel->getActiveSheet()->setCellValue('F2', "$k6");
        $objPHPExcel->getActiveSheet()->setCellValue('G2', "$k7");
        $objPHPExcel->getActiveSheet()->setCellValue('H2', "$k8");
        $objPHPExcel->getActiveSheet()->setCellValue('I2', "$k9");
        $objPHPExcel->getActiveSheet()->setCellValue('J2', "$k10");
        $objPHPExcel->getActiveSheet()->setCellValue('K2', "$k11");
        $objPHPExcel->getActiveSheet()->setCellValue('L2', "$k12");
        $objPHPExcel->getActiveSheet()->setCellValue('M2', "$k13");
        $objPHPExcel->getActiveSheet()->setCellValue('N2', "$k14");
        $objPHPExcel->getActiveSheet()->setCellValue('O2', "$k15");
        $objPHPExcel->getActiveSheet()->setCellValue('P2', "$k16");
        $objPHPExcel->getActiveSheet()->setCellValue('Q2', "$k17");
        $objPHPExcel->getActiveSheet()->setCellValue('R2', "$k18");
        $objPHPExcel->getActiveSheet()->setCellValue('S2', "$k19");
        $objPHPExcel->getActiveSheet()->setCellValue('T2', "$k20");
        $objPHPExcel->getActiveSheet()->setCellValue('U2', "$k21");
        $objPHPExcel->getActiveSheet()->setCellValue('V2', "$k22");
        $objPHPExcel->getActiveSheet()->setCellValue('W2', "$k23");
        $objPHPExcel->getActiveSheet()->setCellValue('X2', "$k24");
        $objPHPExcel->getActiveSheet()->setCellValue('Y2', "$k25");
        $objPHPExcel->getActiveSheet()->setCellValue('Z2', "$k26");

        $objPHPExcel->getActiveSheet()->setCellValue('AA2', "$k27");
        $objPHPExcel->getActiveSheet()->setCellValue('AB2', "$k28");
        $objPHPExcel->getActiveSheet()->setCellValue('AC2', "$k29");
        $objPHPExcel->getActiveSheet()->setCellValue('AD2', "$k30");
        $objPHPExcel->getActiveSheet()->setCellValue('AE2', "$k31");
        $objPHPExcel->getActiveSheet()->setCellValue('AF2', "$k32");
        $objPHPExcel->getActiveSheet()->setCellValue('AG2', "$k33");
        $objPHPExcel->getActiveSheet()->setCellValue('AH2', "$k34");
        $objPHPExcel->getActiveSheet()->setCellValue('AI2', "$k35");
        $objPHPExcel->getActiveSheet()->setCellValue('AJ2', "$k36");
        $objPHPExcel->getActiveSheet()->setCellValue('AK2', "$k37");
        $objPHPExcel->getActiveSheet()->setCellValue('AL2', "$k37_else");
        $objPHPExcel->getActiveSheet()->setCellValue('AM2', "$k38");
        $objPHPExcel->getActiveSheet()->setCellValue('AN2', "$k38_else");
        $objPHPExcel->getActiveSheet()->setCellValue('AO2', "$k39");
        $objPHPExcel->getActiveSheet()->setCellValue('AP2', "$k40");
        $objPHPExcel->getActiveSheet()->setCellValue('AQ2', "$k41");
        $objPHPExcel->getActiveSheet()->setCellValue('AR2', "$k42");
        $objPHPExcel->getActiveSheet()->setCellValue('AS2', "$k43");
        $objPHPExcel->getActiveSheet()->setCellValue('AT2', "$k44");
        $objPHPExcel->getActiveSheet()->setCellValue('AU2', "$k45");
        $objPHPExcel->getActiveSheet()->setCellValue('AV2', "$k45_else");
        $objPHPExcel->getActiveSheet()->setCellValue('AW2', "$k46");
        $objPHPExcel->getActiveSheet()->setCellValue('AX2', "$k46_else");
        $objPHPExcel->getActiveSheet()->setCellValue('AY2', "$k47");
        $objPHPExcel->getActiveSheet()->setCellValue('AZ2', "$k47_else");

        $objPHPExcel->getActiveSheet()->setCellValue('BA2', "$k48");
        $objPHPExcel->getActiveSheet()->setCellValue('BB2', "$k48_else");
        $objPHPExcel->getActiveSheet()->setCellValue('BC2', "$k49");
        $objPHPExcel->getActiveSheet()->setCellValue('BD2', "$k50");
        $objPHPExcel->getActiveSheet()->setCellValue('BE2', "$k51");
        $objPHPExcel->getActiveSheet()->setCellValue('BF2', "$k51_else");
        $objPHPExcel->getActiveSheet()->setCellValue('BG2', "$k52");
        $objPHPExcel->getActiveSheet()->setCellValue('BH2', "$k53");
        $objPHPExcel->getActiveSheet()->setCellValue('BI2', "$k54");
        $objPHPExcel->getActiveSheet()->setCellValue('BJ2', "$k55");
        $objPHPExcel->getActiveSheet()->setCellValue('BK2', "$k56");



        // $objPHPExcel->getActiveSheet()->setCellValue('BL2', "$k11");
        // $objPHPExcel->getActiveSheet()->setCellValue('BM2', "$k12");
        // $objPHPExcel->getActiveSheet()->setCellValue('BN2', "$k13");
        // $objPHPExcel->getActiveSheet()->setCellValue('BO2', "$k14");
        // $objPHPExcel->getActiveSheet()->setCellValue('BP2', "$k15");
        // $objPHPExcel->getActiveSheet()->setCellValue('BQ2', "$k16");
        // $objPHPExcel->getActiveSheet()->setCellValue('BR2', "$k17");
        // $objPHPExcel->getActiveSheet()->setCellValue('BS2', "$k18");
        // $objPHPExcel->getActiveSheet()->setCellValue('BT2', "$k19");
        // $objPHPExcel->getActiveSheet()->setCellValue('BU2', "$k20");
        // $objPHPExcel->getActiveSheet()->setCellValue('BV2', "$k21");
        // $objPHPExcel->getActiveSheet()->setCellValue('BW2', "$k22");
        // $objPHPExcel->getActiveSheet()->setCellValue('BX2', "$k23");
        // $objPHPExcel->getActiveSheet()->setCellValue('BY2', "$k24");
        // $objPHPExcel->getActiveSheet()->setCellValue('BZ2', "$k24");

        // ----------------------------------------------------------------


        $ii = 3;
        $sheet = $objPHPExcel->getActiveSheet();

        do {

            $objPHPExcel->getActiveSheet()->getRowDimension($ii)->setRowHeight(20);

            $sheet->setCellValue('A' . $ii, $row_Recfranchisee['d_data1']);
            $sheet->setCellValue('B' . $ii, "\t".(string) $row_Recfranchisee['d_data2'], PHPExcel_Cell_DataType::TYPE_STRING);
            $sheet->setCellValue('C' . $ii, $row_Recfranchisee['d_data3']);
            $sheet->setCellValue('D' . $ii, $row_Recfranchisee['d_data4']);
            $sheet->setCellValue('E' . $ii, $row_Recfranchisee['d_data5']);
            $sheet->setCellValue('F' . $ii, $row_Recfranchisee['d_data6']);
            $sheet->setCellValue('G' . $ii, $row_Recfranchisee['d_data7']);
            $sheet->setCellValue('H' . $ii, $row_Recfranchisee['d_data8']);
            $sheet->setCellValue('I' . $ii, $row_Recfranchisee['d_data9']);
            $sheet->setCellValue('J' . $ii, $row_Recfranchisee['d_data10']);
            $sheet->setCellValue('K' . $ii, $row_Recfranchisee['d_data11']);
            $sheet->setCellValue('L' . $ii, $row_Recfranchisee['d_data12']);
            $sheet->setCellValue('M' . $ii, $row_Recfranchisee['d_data13']);
            $sheet->setCellValue('N' . $ii, $row_Recfranchisee['d_data14']);
            $sheet->setCellValue('O' . $ii, $row_Recfranchisee['d_data15']);
            $sheet->setCellValue('P' . $ii, $row_Recfranchisee['d_data16']);
            $sheet->setCellValue('Q' . $ii, $row_Recfranchisee['d_data17']);
            $sheet->setCellValue('R' . $ii, $row_Recfranchisee['d_data18']);
            $sheet->setCellValue('S' . $ii, $row_Recfranchisee['d_data19']);
            $sheet->setCellValue('T' . $ii, $row_Recfranchisee['d_data20']);
            $sheet->setCellValue('U' . $ii, $row_Recfranchisee['d_data21']);
            $sheet->setCellValue('V' . $ii, $row_Recfranchisee['d_data22']);
            $sheet->setCellValue('W' . $ii, $row_Recfranchisee['d_data23']);
            $sheet->setCellValue('X' . $ii, $row_Recfranchisee['d_data24']);
            $sheet->setCellValue('Y' . $ii, $row_Recfranchisee['d_data25']);
            $sheet->setCellValue('Z' . $ii, $row_Recfranchisee['d_data26']);

            $sheet->setCellValue('AA' . $ii, $row_Recfranchisee['d_data27']);
            $sheet->setCellValue('AB' . $ii, $row_Recfranchisee['d_data28']);
            $sheet->setCellValue('AC' . $ii, $row_Recfranchisee['d_data29']);
            $sheet->setCellValue('AD' . $ii, $row_Recfranchisee['d_data30']);
            $sheet->setCellValue('AE' . $ii, $row_Recfranchisee['d_data31']);
            $sheet->setCellValue('AF' . $ii, $row_Recfranchisee['d_data32']);
            $sheet->setCellValue('AG' . $ii, $row_Recfranchisee['d_data33']);
            $sheet->setCellValue('AH' . $ii, $row_Recfranchisee['d_data34']);
            $sheet->setCellValue('AI' . $ii, $row_Recfranchisee['d_data35']);
            $sheet->setCellValue('AJ' . $ii, $row_Recfranchisee['d_data36']);
            $sheet->setCellValue('AK' . $ii, $row_Recfranchisee['d_data37']);
            $sheet->setCellValue('AL' . $ii, $row_Recfranchisee['d_data37_else']);
            $sheet->setCellValue('AM' . $ii, $row_Recfranchisee['d_data38']);
            $sheet->setCellValue('AN' . $ii, $row_Recfranchisee['d_data38_else']);
            $sheet->setCellValue('AO' . $ii, $row_Recfranchisee['d_data39']);
            $sheet->setCellValue('AP' . $ii, $row_Recfranchisee['d_data40']);
            $sheet->setCellValue('AQ' . $ii, $row_Recfranchisee['d_data41']);
            $sheet->setCellValue('AR' . $ii, $row_Recfranchisee['d_data42']);
            $sheet->setCellValue('AS' . $ii, $row_Recfranchisee['d_data43']);
            $sheet->setCellValue('AT' . $ii, $row_Recfranchisee['d_data44']);
            $sheet->setCellValue('AU' . $ii, $row_Recfranchisee['d_data45']);
            $sheet->setCellValue('AV' . $ii, $row_Recfranchisee['d_data45_else']);
            $sheet->setCellValue('AW' . $ii, $row_Recfranchisee['d_data46']);
            $sheet->setCellValue('AX' . $ii, $row_Recfranchisee['d_data46_else']);
            $sheet->setCellValue('AY' . $ii, $row_Recfranchisee['d_data47']);
            $sheet->setCellValue('AZ' . $ii, $row_Recfranchisee['d_data47_else']);

            $sheet->setCellValue('BA' . $ii, $row_Recfranchisee['d_data48']);
            $sheet->setCellValue('BB' . $ii, $row_Recfranchisee['d_data48_else']);
            $sheet->setCellValue('BC' . $ii, $row_Recfranchisee['d_data49']);
            $sheet->setCellValue('BD' . $ii, $row_Recfranchisee['d_data50']);
            $sheet->setCellValue('BE' . $ii, $row_Recfranchisee['d_data51']);
            $sheet->setCellValue('BF' . $ii, $row_Recfranchisee['d_data51_else']);
            $sheet->setCellValue('BG' . $ii, $row_Recfranchisee['d_data52']);
            $sheet->setCellValue('BH' . $ii, $row_Recfranchisee['d_data53']);
            $sheet->setCellValue('BI' . $ii, $row_Recfranchisee['d_data54']);
            $sheet->setCellValue('BJ' . $ii, $row_Recfranchisee['d_data55']);
            $sheet->setCellValue('BK' . $ii, $row_Recfranchisee['d_data56']);

            // $sheet->setCellValue('BL' . $ii, $row_Recfranchisee['d_data1']);
            // $sheet->setCellValue('BM' . $ii, $row_Recfranchisee['d_data1']);
            // $sheet->setCellValue('BN' . $ii, $row_Recfranchisee['d_data1']);
            // $sheet->setCellValue('BO' . $ii, $row_Recfranchisee['d_data1']);
            // $sheet->setCellValue('BP' . $ii, $row_Recfranchisee['d_data1']);
            // $sheet->setCellValue('BQ' . $ii, $row_Recfranchisee['d_data1']);
            // $sheet->setCellValue('BR' . $ii, $row_Recfranchisee['d_data1']);
            // $sheet->setCellValue('BS' . $ii, $row_Recfranchisee['d_data1']);
            // $sheet->setCellValue('BT' . $ii, $row_Recfranchisee['d_data1']);
            // $sheet->setCellValue('BU' . $ii, $row_Recfranchisee['d_data1']);
            // $sheet->setCellValue('BV' . $ii, $row_Recfranchisee['d_data1']);
            // $sheet->setCellValue('BW' . $ii, $row_Recfranchisee['d_data1']);
            // $sheet->setCellValue('BX' . $ii, $row_Recfranchisee['d_data1']);
            // $sheet->setCellValue('BY' . $ii, $row_Recfranchisee['d_data1']);
            // $sheet->setCellValue('BZ' . $ii, $row_Recfranchisee['d_data1']);

            $ii = $ii + 1;

            // Rename worksheet
            $objPHPExcel->getActiveSheet()->setTitle(date('Ymd') . '-全訂單');

        } while ($row_Recfranchisee = $Recfranchisee->fetch());


        // Set active sheet index to the first sheet, so Excel opens this as the first sheet
        $objPHPExcel->setActiveSheetIndex(0);

        // Redirect output to a client’s web browser (Excel5)
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="' . date('Ymd') . '-macutea.xls"');
        header('Cache-Control: max-age=0');
        // If you're serving to IE 9, then the following may be needed
        header('Cache-Control: max-age=1');

        // If you're serving to IE over SSL, then the following may be needed
        header('Expires: ' . gmdate('D, d M Y H:i:s') . ' GMT'); // Date in the past
        header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT'); // always modified
        header('Cache-Control: cache, must-revalidate'); // HTTP/1.1
        header('Pragma: public'); // HTTP/1.0

        $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
        $objWriter->save('php://output');

        /*
        $callEndTime = microtime(true);
        $callTime = $callEndTime - $callStartTime;

        echo date('H:i:s') , " File written to " , str_replace('.php', '.xls', pathinfo(__FILE__, PATHINFO_BASENAME)) , EOL;
        echo 'Call time to write Workbook was ' , sprintf('%.4f',$callTime) , " seconds" , EOL;
        // Echo memory usage
        echo date('H:i:s') , ' Current memory usage: ' , (memory_get_usage(true) / 1024 / 1024) , " MB" , EOL;

        // Echo memory peak usage
        echo date('H:i:s') , " Peak memory usage: " , (memory_get_peak_usage(true) / 1024 / 1024) , " MB" , EOL;

        // Echo done
        echo date('H:i:s') , " Done writing files" , EOL;
        echo 'Files have been created in ' , getcwd() , EOL;*/

        exit;

    } else {
        echo '<script type="text/javascript">
            alert("搜尋不到符合的資料，所以不會匯出表單");
            window.location.href = "../cms/franchisee_list.php";
         </script>';
        //header("Location:orders_list.php");
    }

}