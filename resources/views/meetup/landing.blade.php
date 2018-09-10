<header class="header header-inverse bg-contain bg-center-bottom bg-grey-lighter pb-0 pt-0 h-fullscreen" style="background-image: url(images/bg/india.png);">
    <!-- assets/img/15.jpg -->
    <div class="header-overlay header-bg-alt" style="opacity: .30;"></div>
    <div class="container">
        <div class="row h-full">
            <div class="col-12 text-center align-self-center">
                <h1 class="fw-100 lh-15 brand-name" style="color: #636b6f;font-size: 5em">Laravel<span class="laravel-brand-text fw-600">Live</span> </h1>
                <p class="fs-30 fw-100 text-grey-darker" style="">
                    Meetup
                </p>
                <p class="fw-600 text-grey-darker" style="font-size: 40px;">
                    @if($city == 'Delhi')
                        New {{ $city }}, <span class="laravel-brand-text fw-600">India</span>
                    @else
                        {{ $city }}, <span class="laravel-brand-text fw-600">India</span>
                    @endif
                </p>
                <p class="fw-600 text-grey-darker text-lg" >
                    16 September 2018
                </p>

                {{-- <a href="https://in.explara.com/e/laravelliveindia" class="btn btn-round btn-danger mt-40 btn-xl">
                 Buy your tickets now <i class="fa fa-arrow-right"></i>
                 </a> --}}
                {{-- <signup></signup> --}}
            </div>
        </div>
    </div>
</header>
