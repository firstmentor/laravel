@extends("layouts.html")

@section("title", "reviews Page | Html Theme Conversion")


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



@section("reviews")

          <!--People Section-->
            <section id="reviews" class="reviews m-top-100">
                <div class="container">
                    <div class="row">
                        <div class="main_reviews">
                            <div class="col-md-8 col-md-offset-2 col-sm-12">
                                <div class="head_title text-center">
                                    <h2>What reviews are saying</h2>
                                    <h5>Reviews</h5>
                                </div>
                            </div>

                            <div class="reviews_content">
                                <div class="col-md-6">
                                    <div class="reviews_item m-top-40">
                                        <div class="reviews_item_icon pull-left">“</div>
                                        <h3>What art offers is space - a certain breathing room for the spirit. </h3>
                                        <h5>John Updike</h5>
                                        <div class="reviews_item_icon1 pull-right text-right">“</div>
                                    </div>
                                </div><!-- End off col-md-6 -->

                                <div class="col-md-6">
                                    <div class="reviews_item m-top-40">
                                        <div class="reviews_item_icon pull-left">“</div>
                                        <h3>We do not see nature with our eyes,
                                            but with our understandings and our hearts.</h3>
                                        <h5>William Hazlitt</h5>
                                        <div class="reviews_item_icon1 pull-right text-right">“</div>
                                    </div>
                                </div><!-- End off col-md-6 -->
                                <div class="col-md-6">
                                    <div class="reviews_item m-top-40">
                                        <div class="reviews_item_icon pull-left">“</div>
                                        <h3>The only courage that matters is the kind 
                                            that gets you from one moment to the next.</h3>
                                        <h5>Mignon McLaughlin</h5>
                                        <div class="reviews_item_icon1 pull-right text-right">“</div>
                                    </div>
                                </div><!-- End off col-md-6 -->
                                <div class="col-md-6">
                                    <div class="reviews_item m-top-40">
                                        <div class="reviews_item_icon pull-left">“</div>
                                        <h3>No man has a good enough memory to be a successful liar. </h3>
                                        <h5>Abraham Lincoln</h5>
                                        <div class="reviews_item_icon1 pull-right text-right">“</div>
                                    </div>
                                </div><!-- End off col-md-6 -->

                            </div>
                        </div><!-- End off Main People -->
                    </div><!-- End off row -->
                </div><!-- End off container -->
            </section><!-- End off People Section-->


@endsection

