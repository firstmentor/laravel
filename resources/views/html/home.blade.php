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

@section("featured")
           <!--Featured Section-->
            @include("html.templets.featured")

@endsection

@section("reviews")

          <!--People Section-->
          @include("html.templets.reviews")
           


@endsection

@section("dewnload")

             <!--App Download Section-->
             @include("html.templets.download")
           


@endsection