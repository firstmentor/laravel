@extends("layouts.html")

@section("title", "Home Page | Html Theme Conversion")


@section("home")

<!--Home Sections-->
            <section id="home" class="home">
                <div class="container">
                    <div class="row">
                        <div class="main_home">
                            <div class="col-md-6">
                                <div class="home_text">
                                    <h1 class="text-white">Get the most fun weather app</h1>
                                </div>

                                <div class="home_btns m-top-40">
                                    <a href="" class="btn btn-danger m-top-20">Download</a>
                                    <a href="" class="btn btn-primary m-top-20">Features</a>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="phone_one phone_attr1 text-center sm-m-top-50">
                                    <div class="attr_deg">9&deg;</div>
                                    <div class="attr_rio text-uppercase">Rio</div>
                                    <div class="attr_sun text-uppercase text-white">Sunny</div>
                                    <div class="attr_lon text-uppercase text-white">London</div>
                                    <img src="{{ URL::to('/') }}/public/images/phone01.png" alt="" />
                                </div>
                            </div>

                        </div>
                        <div class="scrooldown">
                            <a href="#features"><i class="fa fa-chevron-down"></i></a>
                        </div>

                    </div><!--End off row-->
                </div><!--End off container -->
            </section> <!--End off Home Sections-->


@endsection



@section("download")

             <!--App Download Section-->
            <section id="download" class="download m-top-100">
                <div class="download_overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="main_download ">
                            <div class="col-md-6">
                                <div class="download_item roomy-100">
                                    <h2 class="text-white">How Download the app?</h2>
                                    <h5 class="text-white m-top-20">Just download the app from the store.
                                        Simple, nice and user-friendly application of theweather.
                                        Only relevant and useful information.</h5>

                                    <div class="download_app m-top-30">
                                        <a href=""><img src="{{ URL::to('/') }}/public/images/appstor.png" alt="" /></a>
                                        <a href=""><img src="{{ URL::to('/') }}/public/images/googleplay.png" alt="" /></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="download_item m-top-70">
                                    <img class="app_right" src="{{ URL::to('/') }}/public/images/appdownload1.png" alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


@endsection