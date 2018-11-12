@extends('layouts.app')

@section('title', $title)

@section('content')
@include('components.banner',['pagename' => $pagename, 'imgurl' => $imgurl, 'page' => $title])
<!-- Work Detail Section -->
<section class="pt pt-sm-80">
    <div class="container">

        <div class="row mb-60 mb-xs-30">
            <div class="col-md-6">
                <h4>Aque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</h4>
            </div>
            <div class="col-md-6">
                <p class="lead">
                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
                </p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <video class="video" style="width: 100%;" width="" height="" id="player2" preload="auto" poster="media/echo-hereweare.jpg" controls="controls">
                    <!-- MP4 source must come first for iOS -->
                    <source type="video/mp4" src="media/video1.mp4" />
                    <!-- WebM for Firefox 4 and Opera -->
                    <source type="video/webm" src="media/video1.webm" />
                    <!-- OGG for Firefox 3 -->
                    <source type="video/ogg" src="media/video1.ogv" />
                </video>
            </div>
        </div>

        <div class="row mtb-60 mtb-xs-30">
            <div class="col-md-4 mb-30">
                <div class="project-detail-block">
                    <p>
                        <strong class="dark-color">Categories:</strong>Graphic, Webdesign
                    </p>

                    <p>
                        <strong class="dark-color">Released :</strong>16 Dec 2014
                    </p>
                    <p>
                        <strong class="dark-color">Link :</strong><a>www.nileforest.com</a>
                    </p>
                    <p>
                        <strong class="dark-color">User :</strong>John Doe
                    </p>
                </div>
            </div>
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-6 mb-30">
                        <h5>Fully responsive</h5>
                        <p>Nam libero tempore cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere.</p>
                    </div>
                    <div class="col-md-6 mb-30">
                        <h5>Flexible & Customizable</h5>
                        <p>Nam libero tempore cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere.</p>
                    </div>
                    <div class="col-md-6 mb-30">
                        <h5>html 5 video & Audio</h5>
                        <p>Nam libero tempore cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere.</p>
                    </div>
                    <div class="col-md-6 mb-30">
                        <h5>Clean code & design</h5>
                        <p>Nam libero tempore cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<hr />

<section class="ptb ptb-sm-80">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2 text-center">
                <h3 class="">architecto beatae vitae</h3>
                <p class="mt-15">But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system.</p>
                <br />
                <a class="btn btn-lg btn-black">Download now</a>
            </div>
        </div>
    </div>
</section>

<hr />

<section class="ptb ptb-sm-80">
    <div class="container text-center">
        <h4>Related Project</h4>
        <div class="row">

            <div class="col-lg-4 spacing-grid">
                <div class="item-box">
                    <a>
                        <img alt="1" src="img/portfolio/1.jpg" class="item-container">
                        <div class="item-mask">
                            <div class="item-caption">
                                <h5 class="white">Consequat massa quis</h5>
                                <p class="white">Branding, Design, Coffee</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-lg-4 spacing-grid">
                <div class="item-box">
                    <a>
                        <img alt="1" src="img/portfolio/3.jpg" class="item-container">
                        <div class="item-mask">
                            <div class="item-caption">
                                <h5 class="white">Consequat massa quis</h5>
                                <p class="white">Branding, Design, Coffee</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-lg-4 spacing-grid">
                <div class="item-box">
                    <a>
                        <img alt="1" src="img/portfolio/5.jpg" class="item-container">
                        <div class="item-mask">
                            <div class="item-caption">
                                <h5 class="white">Consequat massa quis</h5>
                                <p class="white">Branding, Design, Coffee</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- End Work Detail Section -->

@endsection