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
    "mainteaCenterCover" => [
        'IW' => 725,
        'IH' => 725,
        'note' => "圖片請上傳寬 725pixel、高 725pixel之圖檔。 $maxFileSize",
    ],
    "mainteaCover" => [
        'IW' => 1920,
        'IH' => 980,
        'note' => "圖片請上傳寬 1920pixel、高 980pixel之圖檔。 $maxFileSize",
    ],
    "ourteaCover" => [
        'IW' => 400,
        'IH' => 566,
        'note' => "圖片請上傳寬 400pixel、高 566pixel之圖檔。 $maxFileSize",
    ],
    "storeCover" => [
        'IW' => 466,
        'IH' => 466,
        'note' => "圖片請上傳寬 466pixel、高 466pixel之圖檔。 $maxFileSize",
    ],
];
?>