@extends('layout')

@section('content')
<div class="container-fluid">    
<div class="row" id="navBar">
        <div class="col-lg-12 col-sm-12" id="navigation" style="text-align: center">
            <a id="all" href="#">ALL WORKS</a>
            <a id="fantasy" href="#">FANTASY PORTRAITS</a>
            <a id="classic" href="#">CLASSIC PORTRAITS</a>
        </div>
    </div>
    <br/>
    <div class="row no-gutters">
        <div class="col-lg-12 col-sm-12" id="gallery">
            <div class="fantasy" id="dfgff">
                <a data-fancybox="gallery" href="images\large\fantasy\fantasy (1).jpg">
                    <img src="images\large\fantasy\fantasy (1).jpg" alt="image" class="img-fluid" title="landscape"
                        style="height: 281px;">
                    <p></p>
                </a>
            </div>
            <div class="fantasy">
                <a data-fancybox="gallery" href="images\large\fantasy\fantasy (2).jpg">
                    <img src="images\large\fantasy\fantasy (2).jpg" alt="image" class="img-fluid" title="foggy forest"
                        style="height: 281px;">
                    <p></p>
                </a>
            </div>
            <div class="fantasy">
                <a data-fancybox="gallery" href="images\large\fantasy\fantasy (3).jpg">
                    <img src="images\large\fantasy\fantasy (3).jpg" alt="image" class="img-fluid" title="forest" style="height: 281px;">
                    <p></p>
                </a>
            </div>
            <div class="fantasy">
                <a data-fancybox="gallery" href="images\large\fantasy\fantasy (4).jpg">
                    <img src="images\large\fantasy\fantasy (4).jpg" alt="image" class="img-fluid" title="loneIsland" style="height: 281px;">
                    <p></p>
                </a>
            </div>
            <div class="fantasy">
                <a data-fancybox="gallery" href="images\large\fantasy\fantasy (5).jpg">
                    <img src="images\large\fantasy\fantasy (5).jpg" alt="image" class="img-fluid" title="greenLeaves" style="height: 281px;">
                    <p></p>
                </a>
            </div>
            <div class="classic">
                <a data-fancybox="gallery" href="images\large\classic\classic (1).jpg">
                    <img src="images\large\classic\classic (1).jpg" alt="image" class="img-fluid" title="asteroids" style="height: 281px;">
                    <p></p>
                </a>
            </div>
            <div class="classic">
                <a data-fancybox="gallery" href="images\large\classic\classic (2).jpg">
                    <img src="images\large\classic\classic (2).jpg" alt="image" class="img-fluid" title="mars" style="height: 281px;">
                    <p></p>
                </a>
            </div>
            <div class="classic">
                <a data-fancybox="gallery" href="images\large\classic\classic (3).jpg">
                    <img src="images\large\classic\classic (3).jpg" alt="image" class="img-fluid" title="nebula" style="height: 281px;">
                    <p></p>
                </a>
            </div>
            <div class="classic">
                <a data-fancybox="gallery" href="images\large\classic\classic (4).jpg">
                    <img src="images\large\classic\classic (4).jpg" alt="image" class="img-fluid" title="planetEarth"
                        style="height: 281px;">
                    <p></p>
                </a>
            </div>
            <div class="classic">
                <a data-fancybox="gallery" href="images\large\classic\classic (5).jpg">
                    <img src="images\large\classic\classic (5).jpg" alt="image" class="img-fluid" title="radiation" style="height: 281px;">
                    <p></p>
                </a>
            </div>
        </div>
    </div>
</div>
    @stop