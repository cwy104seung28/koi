<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">

<link rel="shortcut icon" href="images/fav.png" type="image/x-icon">
<link rel="apple-touch-icon" href="images/fav.png">
<link rel="apple-touch-icon" sizes="76x76" href="images/fav.png">
<link rel="apple-touch-icon" sizes="120x120" href="images/fav.png">
<link rel="apple-touch-icon" sizes="152x152" href="images/fav.png">

<meta property="og:title" content="KOI" />

<meta name="description" content="Happiness is to share special moments with friends.
A celebration, a date or just a relaxing break in the day, there is always a reason to get together around a cup of KOI tea. KOI brings joy to the world. Freshly brewed tea and flavorful ingredients, prepared with passion are the key to KOI’s authentic taste and the reason why people come back again and again.">

<meta property="og:image" content="images/html_share.jpg">
</meta>

<meta name="viewport" content="width=device-width, minimum-scale=1.0">

<meta name="format-detection" content="telephone=no">

<link rel="stylesheet" href="./stylesheets/style.css?t=<?php echo rand(1000, 9999) ?>">

<?php if (isset($now) && ($now == 'INDEX' || $now == 'HOME')) { ?>
    <title>KOI</title>
<?php } else if (isset($now)) { ?>
    <title><?php echo $now; ?> | KOI</title>
<?php }; ?>