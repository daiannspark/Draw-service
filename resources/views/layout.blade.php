<!DOCTYPE html>
<html lang="en">

<head>
    <title>Portraits</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.2/dist/jquery.fancybox.min.css" />
    {{-- <link rel="stylesheet" type="text/css" href="/css/carousel.css"/> --}}
    <link rel="stylesheet" type="text/css" href="/css/styles.css"/>
</head>

<body>
    <div id="header">
        <div id="headerImg">
                <div id="portfolio">
                        <div class="row">
                            <div class="col-lg-12 col-sm-12" id="mainTitle" style="text-align: center">
                                    <a href="/" style="text-decoration: none"><h1>_umbraya_erze_</h1></a>
                            </div>
                        </div>
                    </div>
            <div class="row">
                <div class="col-lg-12 col-sm-12" id="mainNavBar">
                    <div id="navMenu">
                        <a href="/">Gallery</a>
                        <a href="/blog">What's new?</a>
                        <a href="/order">Upload your photo</a>
                        <a href="/contacts">Contacts</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="Top"><a href="#" class="ToTop">
        <img src="\images\backgrounds\circle_up.png" alt="circleUp">
    </a>
    </div>
    @yield('content')

    <div id="footer">
        <div id="footerImg"> 
            <div class="row"> 
                <div class="col-lg-12 col-sm-12">
                    {{-- <p> Developed by ME </p> --}}
                    <p class="allrightreserved"> 
                        <span> Developed by ME </span> <br/>
                        All Rights Reserved. <?php echo date("Y"); ?> Copyright. </p>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.2/dist/jquery.fancybox.min.js"></script>
    <script type="text/javascript" src="/js/cascade-slider.js"></script>
    <script type="text/javascript" src="/js/script.js"></script>
</body>

</html>