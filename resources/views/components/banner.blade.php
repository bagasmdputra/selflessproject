   <!-- Intro Section -->
   <section class="inner-intro bg-image overlay-light parallax parallax-background1" data-background-img="{{ asset($imgurl) }}">
    <div class="container">
        <div class="row title">
            <h2 class="h2">{{ $pagename }}</h2>
            <div class="page-breadcrumb">
                <a href="{{ route('home') }}">Home</a>/@isset($midpage)
                    
                <a href="{{ route($midurl) }}">{{ $midpage }}</a>/@endisset
                <span>{{ $page }}</span>
            </div>
        </div>
    </div>
</section>
<!-- End Intro Section -->