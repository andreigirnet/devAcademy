
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    <link rel="icon" href="photos/logo.png" type="image/icon type">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" integrity="sha512-wnea99uKIC3TJF7v4eKk4Y+lMz2Mklv18+r4na2Gn1abDRPPOeef95xTzdwGD9e6zXJBteMIhZ1+68QC5byJZw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="css/swiper.css"/>
    <link rel="stylesheet" href="css/preloader.css"/>
    <link rel="stylesheet" href="css/dashboard.css"/>
</head>
<body>
<div id="preloader">
    <div id="loader"><img src="photos/loader/loader.gif" alt=""></div>
</div>
<div id="app">
    <home></home>
</div>
</body>
<script src="{{ mix('/js/app.js') }}"></script>
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vue@2.6.14"></script>
<script src="/js/swiper.js"></script>
<script src="/js/swiper2.js"></script>
<script src="/js/loader.js"></script>
</html>
