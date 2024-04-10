<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.2.1/flickity.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css" />

    <link rel="stylesheet" href="https://unpkg.com/flickity-fade@1/flickity-fade.css">
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">

    <style>
        .list {
            list-style: none;
        }

        li {
            width: 25%;
            height: 200px;
            transition: 1s all;
        }
    </style>
</head>

<body>
    <ul class="list">
        <li style="background-color:blueviolet;"></li>
        <li style="background-color:antiquewhite;"></li>
        <li style="background-color:cadetblue;"></li>
        <li style="background-color:thistle;"></li>
    </ul>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
<script src="https://unpkg.com/flickity-sync@2.0.0/flickity-sync.js"></script>
<script src="https://unpkg.com/flickity-fade@1/flickity-fade.js"></script>
<script>
    var $carousel = $('.list').flickity({
        // options
        cellAlign: 'left',
        // contain: true,
        wrapAround: true,
        prevNextButtons: false,
        pageDots: false
    });
</script>

</html>