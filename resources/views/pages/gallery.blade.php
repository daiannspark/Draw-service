@extends('layout')

@section('content')
    <div id="carousel">
        <div class="cascade-slider_container" id="cascade-slider">
        <div class="cascade-slider_slides">
            <div class="cascade-slider_item">
            <img src="images\small\nature\blueLandscape.jpg" alt="">
            </div>
            <div class="cascade-slider_item">
            <img src="images\small\nature\foggyForest.jpg" alt="">
            </div>
            <div class="cascade-slider_item">
            <img src="images\small\nature\leaves.jpg" alt="">
            </div>
            <div class="cascade-slider_item">
            <img src="images\small\space\asteroids.jpg" alt="">
            </div>
            <div class="cascade-slider_item">
            <img src="images\small\urban\hongKong.jpg" alt="">
            </div>
        </div>
        
        <span class="cascade-slider_arrow cascade-slider_arrow-left" data-action="prev">Prev</span>
        <span class="cascade-slider_arrow cascade-slider_arrow-right" data-action="next">Next</span>
        </div>                  
    </div>
    <div class="row" id="navBar">
        <div class="col-lg-12" id="navigation" style="text-align: center">
            <a id="all" href="#">ALL WORKS</a>
            <a id="nature" href="#">NATURE SHOTS</a>
            <a id="space" href="#">SPACE CREATE</a>
            <a id="urban" href="#">URBAN VIEW</a>
        </div>
    </div>
    <div class="row no-gutters">
        <div class="col-lg-12" id="gallery">
            <div class="nature">
                <a data-fancybox="gallery" href="images\large\nature\blueLandscape.jpg">
                    <img src="images\small\nature\blueLandscape.jpg" alt="image" class="img-fluid" title="landscape"
                        style="height: 281px;">
                    <p>LANDSCAPE</p>
                </a>
            </div>
            <div class="nature">
                <a data-fancybox="gallery" href="images\large\nature\foggyForest.jpg">
                    <img src="images\small\nature\foggyForest.jpg" alt="image" class="img-fluid" title="foggy forest"
                        style="height: 281px;">
                    <p>FOGGY FOREST</p>
                </a>
            </div>
            <div class="nature">
                <a data-fancybox="gallery" href="images\large\nature\forest.jpg">
                    <img src="images\small\nature\forest.jpg" alt="image" class="img-fluid" title="forest" style="height: 281px;">
                    <p>FOREST</p>
                </a>
            </div>
            <div class="nature">
                <a data-fancybox="gallery" href="images\large\nature\island.jpg">
                    <img src="images\small\nature\island.jpg" alt="image" class="img-fluid" title="loneIsland" style="height: 281px;">
                    <p>LONE ISLAND</p>
                </a>
            </div>
            <div class="nature">
                <a data-fancybox="gallery" href="images\large\nature\leaves.jpg">
                    <img src="images\small\nature\leaves.jpg" alt="image" class="img-fluid" title="greenLeaves" style="height: 281px;">
                    <p>GREEN LEAVES</p>
                </a>
            </div>
            <div class="nature">
                <a data-fancybox="gallery" href="images\large\nature\milkyWay.jpg">
                    <img src="images\small\nature\milkyWay.jpg" alt="image" class="img-fluid" title="milkyWay" style="height: 281px;">
                    <p>MILKY WAY</p>
                </a>
            </div>
            <div class="nature">
                <a data-fancybox="gallery" href="images\large\nature\mountainLake.jpg">
                    <img src="images\small\nature\mountainLake.jpg" alt="image" class="img-fluid" title="mountainLake"
                        style="height: 281px;">
                    <p>MOUNTAIN LAKE</p>
                </a>
            </div>
            <div class="nature">
                <a data-fancybox="gallery" href="images\large\nature\mountainView.jpg">
                    <img src="images\small\nature\mountainView.jpg" alt="image" class="img-fluid" title="mountainView"
                        style="height: 281px;">
                    <p>MOUNTAIN VIEW</p>
                </a>
            </div>
            <div class="nature">
                <a data-fancybox="gallery" href="images\large\nature\starrySky.jpg">
                    <img src="images\small\nature\starrySky.jpg" alt="image" class="img-fluid" title="starrySky" style="height: 281px;">
                    <p>STARRY SKY</p>
                </a>
            </div>
            <div class="space">
                <a data-fancybox="gallery" href="images\large\space\asteroids.jpg">
                    <img src="images\small\space\asteroids.jpg" alt="image" class="img-fluid" title="asteroids" style="height: 281px;">
                    <p>ASTEROIDS</p>
                </a>
            </div>
            <div class="space">
                <a data-fancybox="gallery" href="images\large\space\mars.jpg">
                    <img src="images\small\space\mars.jpg" alt="image" class="img-fluid" title="mars" style="height: 281px;">
                    <p>MARS</p>
                </a>
            </div>
            <div class="space">
                <a data-fancybox="gallery" href="images\large\space\nebula.jpg">
                    <img src="images\small\space\nebula.jpg" alt="image" class="img-fluid" title="nebula" style="height: 281px;">
                    <p>NEBULA</p>
                </a>
            </div>
            <div class="space">
                <a data-fancybox="gallery" href="images\large\space\planetEarth.jpg">
                    <img src="images\small\space\planetEarth.jpg" alt="image" class="img-fluid" title="planetEarth"
                        style="height: 281px;">
                    <p>PLANET EARTH</p>
                </a>
            </div>
            <div class="space">
                <a data-fancybox="gallery" href="images\large\space\radiation.jpg">
                    <img src="images\small\space\radiation.jpg" alt="image" class="img-fluid" title="radiation" style="height: 281px;">
                    <p>RADIATION</p>
                </a>
            </div>
            <div class="space">
                <a data-fancybox="gallery" href="images\large\space\shadowSpace.jpg">
                    <img src="images\small\space\shadowSpace.jpg" alt="image" class="img-fluid" title="shadowSpace"
                        style="height: 281px;">
                    <p>SHADOW SPACE</p>
                </a>
            </div>
            <div class="space">
                <a data-fancybox="gallery" href="images\large\space\spaceTree.jpg">
                    <img src="images\small\space\spaceTree.jpg" alt="image" class="img-fluid" title="spaceTree" style="height: 281px;">
                    <p>SPACE TREE</p>
                </a>
            </div>
            <div class="space">
                <a data-fancybox="gallery" href="images\large\space\stars.jpg">
                    <img src="images\small\space\stars.jpg" alt="image" class="img-fluid" title="stars" style="height: 281px;">
                    <p>STARS</p>
                </a>
            </div>
            <div class="space">
                <a data-fancybox="gallery" href="images\large\space\surface.jpg">
                    <img src="images\small\space\surface.jpg" alt="image" class="img-fluid" title="surface" style="height: 281px;">
                    <p>SURFACE</p>
                </a>
            </div>
            <div class="urban">
                <a data-fancybox="gallery" href="images\large\urban\argentina.jpg">
                    <img src="images\small\urban\argentina.jpg" alt="image" class="img-fluid" title="argentina" style="height: 281px;">
                    <p>ARGENTINA</p>
                </a>
            </div>
            <div class="urban">
                <a data-fancybox="gallery" href="images\large\urban\hongKong.jpg">
                    <img src="images\small\urban\hongKong.jpg" alt="image" class="img-fluid" title="hongKong" style="height: 281px;">
                    <p>HONG KONG</p>
                </a>
            </div>
            <div class="urban">
                <a data-fancybox="gallery" href="images\large\urban\hongKong2.jpg">
                    <img src="images\small\urban\hongKong2.jpg" alt="image" class="img-fluid" title="hongKongAtNight"
                        style="height: 281px;">
                    <p>HONG KONG AT NIGHT</p>
                </a>
            </div>
            <div class="urban">
                <a data-fancybox="gallery" href="images\large\urban\newzeland.jpg">
                    <img src="images\small\urban\newzeland.jpg" alt="image" class="img-fluid" title="newZeland" style="height: 281px;">
                    <p>NEW ZELAND</p>
                </a>
            </div>
            <div class="urban">
                <a data-fancybox="gallery" href="images\large\urban\night.jpg">
                    <img src="images\small\urban\night.jpg" alt="image" class="img-fluid" title="night" style="height: 281px;">
                    <p>NIGHT</p>
                </a>
            </div>
            <div class="urban">
                <a data-fancybox="gallery" href="images\large\urban\panorama.jpg">
                    <img src="images\small\urban\panorama.jpg" alt="image" class="img-fluid" title="panoramaView" style="height: 281px;">
                    <p>PANORAMA VIEW</p>
                </a>
            </div>
            <div class="urban">
                <a data-fancybox="gallery" href="images\large\urban\sanFrancisko.jpg">
                    <img src="images\small\urban\sanFrancisko.jpg" alt="image" class="img-fluid" title="sanFrancisko"
                        style="height: 281px;">
                    <p>SAN FRANCISKO</p>
                </a>
            </div>
            <div class="urban">
                <a data-fancybox="gallery" href="images\large\urban\turkey.jpg">
                    <img src="images\small\urban\turkey.jpg" alt="image" class="img-fluid" title="turkey" style="height: 281px;">
                    <p>TURKEY</p>
                </a>
            </div>
            <div class="urban">
                <a data-fancybox="gallery" href="images\large\urban\usa.jpg">
                    <img src="images\small\urban\usa.jpg" alt="image" class="img-fluid" title="usa" style="height: 281px;">
                    <p>USA</p>
                </a>
            </div>
        </div>
    </div>
    @stop