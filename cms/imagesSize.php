<?php

$uploadFileSize = "每次上傳之檔案大小總計請勿超過2M。";
$maxFileSize = "<br />$uploadFileSize";

$imagesSize = [
    "newsCover" => [
        'IW' => 144,
        'IH' => 180,
        'note' => "圖片請上傳寬 144pixel、高 180pixel之圖檔。 $maxFileSize",
    ],
    "newsTopCover" => [
        'IW' => 716,
        'IH' => 402,
        'note' => "圖片請上傳寬 716pixel、高 402pixel之圖檔。 $maxFileSize",
    ],
    "newsInnerCover" => [
        'IW' => 1724,
        'IH' => 970,
        'note' => "圖片請上傳寬 1724pixel、高 970pixel之圖檔。 $maxFileSize",
    ],
    // "doctorCover" => [
    //     'IW' => 1066,
    //     'IH' => 696,
    //     'note' => "圖片請上傳寬 1066pixel、高 696pixel之圖檔。 $maxFileSize",
    // ],
    // "caseCover" => [
    //     'IW' => 1066,
    //     'IH' => 696,
    //     'note' => "圖片請上傳寬 1066pixel、高 696pixel之圖檔。 $maxFileSize",
    // ],
    // "clinicCover" => [
    //     'IW' => 1600,
    //     'IH' => 872,
    //     'note' => "圖片請上傳寬 1600pixel、高 872pixel之圖檔。 $maxFileSize",
    // ],
    // "serviceListCover" => [
    //     'IW' => 1920,
    //     'IH' => 600,
    //     'note' => "圖片請上傳寬 1920pixel、高 600pixel之圖檔。 $maxFileSize",
    // ],
    // "serviceCover" => [
    //     'IW' => 1920,
    //     'IH' => 600,
    //     'note' => "圖片請上傳寬 1920pixel、高 600pixel之圖檔。 $maxFileSize",
    // ],
    // "serviceQACover" => [
    //     'IW' => 424,
    //     'IH' => 546,
    //     'note' => "圖片請上傳寬 424pixel、高 546pixel之圖檔。 $maxFileSize",
    // ],
    // "teamCover" => [
    //     'IW' => 444,
    //     'IH' => 400,
    //     'note' => "圖片請上傳寬 444pixel、高 400pixel之圖檔。 $maxFileSize",
    // ],
    // "gallery" => [
    //     'IW' => 1170,
    //     'IH' => 640,
    //     'note' => "圖片請上傳寬 1170pixel、高 640pixel之圖檔。 $maxFileSize",
    // ],
    // "sampleCover" => [
    //     'IW' => 150,
    //     'IH' => 120,
    //     'note' => "圖片請上傳寬 150pixel、高 120pixel之圖檔。 $maxFileSize",
    // ],
    // "sample" => [
    //     'IW' => 700,
    //     'IH' => 700,
    //     'note' => "圖片請上傳寬 700pixel、高 700pixel之圖檔。 $maxFileSize",
    // ],
    // "productCatCover" => [
    //     'IW' => 100,
    //     'IH' => 100,
    //     'note' => "圖片請上傳寬不超過 100pixel、高不超過 100pixel之圖檔。 $maxFileSize",
    // ],
    // "productCover" => [
    //     'IW' => 200,
    //     'IH' => 200,
    //     'note' => "圖片請上傳寬不超過 200pixel、高不超過 200pixel之圖檔。 $maxFileSize",
    // ],
    // "product" => [
    //     'IW' => 920,
    //     'IH' => 920,
    //     'note' => "圖片請上傳寬不超過 460pixel、高不超過 460pixel之圖檔。 $maxFileSize",
    // ],
    // "centerlockCover" => [
    //     'IW' => 945,
    //     'IH' => 540,
    //     'note' => "圖片請上傳寬不超過 945pixel、高不超過 540pixel之圖檔。 $maxFileSize",
    // ],
    // "centerlock" => [
    //     'IW' => 920,
    //     'IH' => 920,
    //     'note' => "圖片請上傳寬 460pixel、高 460pixel之圖檔。 $maxFileSize",
    // ],
    // "sampleHiddenCover" => [
    //     'IW' => 150,
    //     'IH' => 120,
    //     'note' => "圖片請上傳寬 150pixel、高 120pixel之圖檔。 $maxFileSize",
    // ],
    // "sampleHidden" => [
    //     'IW' => 700,
    //     'IH' => 700,
    //     'note' => "圖片請上傳寬 700pixel、高 700pixel之圖檔。 $maxFileSize",
    // ],
    // "productHiddenCatCover" => [
    //     'IW' => 100,
    //     'IH' => 100,
    //     'note' => "圖片請上傳寬不超過 100pixel、高不超過 100pixel之圖檔。 $maxFileSize",
    // ],
    // "productHiddenCover" => [
    //     'IW' => 200,
    //     'IH' => 200,
    //     'note' => "圖片請上傳寬不超過 200pixel、高不超過 200pixel之圖檔。 $maxFileSize",
    // ],
    // "productHidden" => [
    //     'IW' => 920,
    //     'IH' => 920,
    //     'note' => "圖片請上傳寬不超過 460pixel、高不超過 460pixel之圖檔。 $maxFileSize",
    // ],
    // "centerlockHiddenCover" => [
    //     'IW' => 945,
    //     'IH' => 540,
    //     'note' => "圖片請上傳寬不超過 945pixel、高不超過 540pixel之圖檔。 $maxFileSize",
    // ],
    // "centerlockHidden" => [
    //     'IW' => 920,
    //     'IH' => 920,
    //     'note' => "圖片請上傳寬 460pixel、高 460pixel之圖檔。 $maxFileSize",
    // ],
    // "sampleExposedCover" => [
    //     'IW' => 150,
    //     'IH' => 120,
    //     'note' => "圖片請上傳寬 150pixel、高 120pixel之圖檔。 $maxFileSize",
    // ],
    // "sampleExposed" => [
    //     'IW' => 700,
    //     'IH' => 700,
    //     'note' => "圖片請上傳寬 700pixel、高 700pixel之圖檔。 $maxFileSize",
    // ],
    // "productExposedCatCover" => [
    //     'IW' => 100,
    //     'IH' => 100,
    //     'note' => "圖片請上傳寬不超過 100pixel、高不超過 100pixel之圖檔。 $maxFileSize",
    // ],
    // "productExposedCover" => [
    //     'IW' => 200,
    //     'IH' => 200,
    //     'note' => "圖片請上傳寬不超過 200pixel、高不超過 200pixel之圖檔。 $maxFileSize",
    // ],
    // "productExposed" => [
    //     'IW' => 920,
    //     'IH' => 920,
    //     'note' => "圖片請上傳寬不超過 460pixel、高不超過 460pixel之圖檔。 $maxFileSize",
    // ],
    // "centerlockExposedCover" => [
    //     'IW' => 945,
    //     'IH' => 540,
    //     'note' => "圖片請上傳寬不超過 945pixel、高不超過 540pixel之圖檔。 $maxFileSize",
    // ],
    // "centerlockExposed" => [
    //     'IW' => 920,
    //     'IH' => 920,
    //     'note' => "圖片請上傳寬 460pixel、高 460pixel之圖檔。 $maxFileSize",
    // ],
    // "polishingHiddenCover" => [
    //     'IW' => 150,
    //     'IH' => 120,
    //     'note' => "圖片請上傳寬 150pixel、高 120pixel之圖檔。 $maxFileSize",
    // ],
    // "polishingHidden" => [
    //     'IW' => 700,
    //     'IH' => 700,
    //     'note' => "圖片請上傳寬 700pixel、高 700pixel之圖檔。 $maxFileSize",
    // ],
    // "polishingExposedCover" => [
    //     'IW' => 150,
    //     'IH' => 120,
    //     'note' => "圖片請上傳寬 150pixel、高 120pixel之圖檔。 $maxFileSize",
    // ],
    // "polishingExposed" => [
    //     'IW' => 700,
    //     'IH' => 700,
    //     'note' => "圖片請上傳寬 700pixel、高 700pixel之圖檔。 $maxFileSize",
    // ],
    // "eventCover" => [
    //     'IW' => 1920,
    //     'IH' => 720,
    //     'note' => "圖片請上傳寬不超過 1920pixel、高不超過 720pixel之圖檔。 $maxFileSize",
    // ],
    // "event" => [
    //     'IW' => 0,
    //     'IH' => 0,
    //     'note' => "圖片請上傳寬不超過 1920pixel、高不超過 980pixel之圖檔。 $maxFileSize",
    // ],
];
?>