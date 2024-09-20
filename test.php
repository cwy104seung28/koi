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
        .fisheye-img {
            width: 300px;
            height: 300px;
            filter: url(#fisheye);
            /* 應用SVG濾鏡 */
        }
    </style>
</head>

<body>
    <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
        <defs>
            <filter id="fisheye">
                <!-- 減少 baseFrequency 並調整 scale 來減輕扭曲 -->
                <feTurbulence type="turbulence" baseFrequency="0.01" numOctaves="1" result="turbulence" />
                <feDisplacementMap in2="turbulence" in="SourceGraphic" scale="10" /> <!-- 將 scale 減少到 10 或更低 -->
            </filter>
        </defs>
    </svg>
    <img src="./images/a-event-6.jpg" class="fisheye-img">
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
<script src="https://unpkg.com/flickity-sync@2.0.0/flickity-sync.js"></script>
<script src="https://unpkg.com/flickity-fade@1/flickity-fade.js"></script>
<script>

</script>

</html>