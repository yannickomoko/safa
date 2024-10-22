@extends('frontend.page-layout')

@section('title', 'SAFA MARWARENTAL | Qui sommes-nous?')
@section('content')

<!-- content begin -->
<div class="no-bottom no-top zebra" id="content">
    <div id="top"></div>
    
    <!-- section begin -->
    <section id="subheader" class="jarallax text-light">
        <img src="{{ url('') }}/frontend/images/background/subheader.jpg" class="jarallax-img" alt="">
            <div class="center-y relative text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h1>About Us</h1>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
    </section>
    <!-- section close -->

    <section>
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInRight">
                    <h2>We offer customers a wide range of <span class="id-color">commercial cars</span> and <span class="id-color">luxury cars</span> for any occasion.</h2>
                </div>
                <div class="col-lg-6 wow fadeInRight" data-wow-delay=".25s">
                    At Rentaly, we are dedicated to providing exceptional car rental services to our valued customers. With a commitment to quality, convenience, and customer satisfaction, we strive to make every rental experience a seamless and enjoyable one. We understand that every customer has unique needs and preferences when it comes to renting a car. That's why we maintain a diverse fleet of well-maintained vehicles to cater to various requirements. From compact cars for solo travelers to spacious SUVs for families, we have a wide range of options to choose from.
                </div>
            </div>
            <div class="spacer-double"></div>
            <div class="row text-center">
                <div class="col-md-3 col-sm-6 mb-sm-30">
                    <div class="de_count wow fadeInUp" data-bgcolor="#f5f5f5">
                        <h3 class="timer" data-to="15425" data-speed="3000">0</h3>
                        Completed Orders
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-sm-30">
                    <div class="de_count wow fadeInUp" data-bgcolor="#f5f5f5">
                        <h3 class="timer" data-to="8745" data-speed="3000">0</h3>
                        Happy Customers
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-sm-30">
                    <div class="de_count wow fadeInUp" data-bgcolor="#f5f5f5">
                        <h3 class="timer" data-to="235" data-speed="3000">0</h3>
                        Vehicles Fleet
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-sm-30">
                    <div class="de_count wow fadeInUp" data-bgcolor="#f5f5f5">
                        <h3 class="timer" data-to="15" data-speed="3000">0</h3>
                        Years Experience
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section aria-label="section" class="jarallax text-light">
        <img src="{{ url('') }}/frontend/images/background/8.jpg" class="jarallax-img" alt="">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2>Board of Directors</h2>
                    <div class="spacer-20"></div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6 mb30">
                    <div class="f-profile text-center">
                        <div class="fp-wrap f-invert">
                            <div class="fpw-overlay">
                                <div class="fpwo-wrap">
                                    <div class="fpwow-icons">
                                        <a href="#"><i class="fa fa-facebook fa-lg"></i></a>
                                        <a href="#"><i class="fa fa-twitter fa-lg"></i></a>
                                        <a href="#"><i class="fa fa-linkedin fa-lg"></i></a>
                                        <a href="#"><i class="fa fa-pinterest fa-lg"></i></a>
                                    </div>
                                </div>
                            </div>                                  
                            <div class="fpw-overlay-btm"></div>
                            <img src="{{ url('') }}/frontend/images/team/1.jpg" class="fp-image img-fluid" alt="">
                        </div>

                        <h4>Fynley Wilkinson</h4>
                        Chief Creative Officer
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6 col-sm-6 mb30">
                    <div class="f-profile text-center">
                        <div class="fp-wrap f-invert">
                            <div class="fpw-overlay">
                                <div class="fpwo-wrap">
                                    <div class="fpwow-icons">
                                        <a href="#"><i class="fa fa-facebook fa-lg"></i></a>
                                        <a href="#"><i class="fa fa-twitter fa-lg"></i></a>
                                        <a href="#"><i class="fa fa-linkedin fa-lg"></i></a>
                                        <a href="#"><i class="fa fa-pinterest fa-lg"></i></a>
                                    </div>
                                </div>
                            </div>                                  
                            <div class="fpw-overlay-btm"></div>
                            <img src="{{ url('') }}/frontend/images/team/2.jpg" class="fp-image img-fluid" alt="">
                        </div>

                        <h4>Peter Welsh</h4>
                        Chief Technology Officer
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6 col-sm-6 mb30">
                    <div class="f-profile text-center">
                        <div class="fp-wrap f-invert">
                            <div class="fpw-overlay">
                                <div class="fpwo-wrap">
                                    <div class="fpwow-icons">
                                        <a href="#"><i class="fa fa-facebook fa-lg"></i></a>
                                        <a href="#"><i class="fa fa-twitter fa-lg"></i></a>
                                        <a href="#"><i class="fa fa-linkedin fa-lg"></i></a>
                                        <a href="#"><i class="fa fa-pinterest fa-lg"></i></a>
                                    </div>
                                </div>
                            </div>                                  
                            <div class="fpw-overlay-btm"></div>
                            <img src="{{ url('') }}/frontend/images/team/3.jpg" class="fp-image img-fluid" alt="">
                        </div>

                        <h4>John Shepard</h4>
                        Chief Executive Officer
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6 col-sm-6 mb30">
                    <div class="f-profile text-center">
                        <div class="fp-wrap f-invert">
                            <div class="fpw-overlay">
                                <div class="fpwo-wrap">
                                    <div class="fpwow-icons">
                                        <a href="#"><i class="fa fa-facebook fa-lg"></i></a>
                                        <a href="#"><i class="fa fa-twitter fa-lg"></i></a>
                                        <a href="#"><i class="fa fa-linkedin fa-lg"></i></a>
                                        <a href="#"><i class="fa fa-pinterest fa-lg"></i></a>
                                    </div>
                                </div>
                            </div>                                  
                            <div class="fpw-overlay-btm"></div>
                            <img src="{{ url('') }}/frontend/images/team/4.jpg" class="fp-image img-fluid" alt="">
                        </div>

                        <h4>Robyn Peel</h4>
                        Director of Finance
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section aria-label="section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 offset-lg-3 text-center">
                    <h2>Features Hilight</h2>
                    <div class="spacer-20"></div>
                </div>
                <div class="clearfix"></div>
                <div class="col-lg-3">
                    <div class="box-icon s2 p-small mb20 wow fadeInRight" data-wow-delay=".5s">
                        <i class="fa bg-color fa-trophy"></i>
                        <div class="d-inner">
                            <h4>First class services</h4>
                            Where luxury meets exceptional care, creating unforgettable moments and exceeding your every expectation.
                        </div>
                    </div>
                    <div class="box-icon s2 p-small mb20 wow fadeInL fadeInRight" data-wow-delay=".75s">
                        <i class="fa bg-color fa-road"></i>
                        <div class="d-inner">
                            <h4>24/7 road assistance</h4>
                             Reliable support when you need it most, keeping you on the move with confidence and peace of mind.
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <img src="{{ url('') }}/frontend/images/misc/car.png" alt="" class="img-fluid wow fadeInUp">
                </div>

                <div class="col-lg-3">
                    <div class="box-icon s2 d-invert p-small mb20 wow fadeInL fadeInLeft" data-wow-delay="1s">
                        <i class="fa bg-color fa-tag"></i>
                        <div class="d-inner">
                            <h4>Quality at Minimum Expense</h4>
                             Unlocking affordable brilliance with elevating quality while minimizing costs for maximum value.
                        </div>
                    </div>
                    <div class="box-icon s2 d-invert p-small mb20 wow fadeInL fadeInLeft" data-wow-delay="1.25s">
                        <i class="fa bg-color fa-map-pin"></i>
                        <div class="d-inner">
                            <h4>Free Pick-Up & Drop-Off</h4>
                             Enjoy free pickup and drop-off services, adding an extra layer of ease to your car rental experience.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="section-img-with-tab">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 offset-lg-7">
                    
                    <h2>Only Quality For Clients</h2>
                    <div class="spacer-20"></div>
                    
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                      <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Luxury</button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Comfort</button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Prestige</button>
                      </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                      <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab"><p>We offer a meticulously curated collection of the most sought-after luxury vehicles on the market. Whether you prefer the sporty allure of a high-performance sports car, the sophistication of a sleek and luxurious sedan, or the versatility of a premium SUV, we have the perfect car to match your discerning taste.</p></div>
                      <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab"><p>We prioritize your comfort and convenience throughout your journey. We understand that a comfortable ride can make a world of difference, whether you're embarking on a business trip or enjoying a leisurely vacation. That's why we offer a wide range of well-maintained, comfortable cars that cater to your specific needs.</p></div>
                      <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab"><p>We understand that prestige goes beyond luxury. It's about making a statement, embracing sophistication, and indulging in the finer things in life. That's why we offer an exclusive selection of prestigious cars that exude elegance, style, and status.</p></div>
                    </div>
                    
                </div>
            </div>
        </div>

        <div class="image-container col-md-6 pull-right" data-bgimage="url(images/background/5.jpg) center"></div>
    </section>

    <section id="section-call-to-action" class="bg-color-2 pt60 pb60 text-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h2 class="s2">Call us for further information. Rentaly customer care is here to help you anytime.</h2>
                </div>

                <div class="col-lg-4 text-lg-center text-sm-center">
                    <div class="phone-num-big">
                        <i class="fa fa-phone"></i>
                        <span class="pnb-text">
                            Call Us Now
                        </span>
                        <span class="pnb-num">
                            1 200 333 800
                        </span>
                    </div>
                    <a href="#" class="btn-main">Contact Us</a>
                </div>
            </div>
        </div>
    </section>
    
</div>
<!-- content close -->


@endsection