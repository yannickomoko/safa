@extends('frontend.page-layout')

@section('title', 'Location des voitures')
@section('content')

 <!-- content begin -->
 <div class="no-bottom no-top" id="content">
    <div id="top"></div> 
    <section id="section-hero" aria-label="section" class="jarallax">
        <img src="{{ url('') }}/frontend/images/background/1.jpg" class="jarallax-img" alt="">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 text-light">
                    <div class="spacer-double"></div>
                    <div class="spacer-double"></div>
                    <h1 class="mb-2">Vous recherchez une <span class="id-color">voiture</span>? Vous êtes au bon endroit.</h1>
                    <div class="spacer-single"></div>
                </div>

                <div class="col-lg-12">
                    <div class="spacer-single sm-hide"></div>
                    <div class="p-4 rounded-3 shadow-soft" data-bgcolor="#ffffff">
                        

                        <form name="contactForm" id='contact_form' method="post">
                            <div id="step-1" class="row">
                                <div class="col-lg-6 mb30">
                                    <h5>Quel est votre type de voiture?</h5>

                                    <div class="de_form de_radio row g-3">
                                        <div class="radio-img col-lg-3 col-sm-3 col-6">
                                            <input id="radio-1a" name="Car_Type" type="radio" value="Residential" checked="checked">
                                            <label for="radio-1a"><img src="{{ url('') }}/frontend/images/select-form/car.png" alt="">Car</label>
                                        </div>

                                        <div class="radio-img col-lg-3 col-sm-3 col-6">
                                            <input id="radio-1b" name="Car_Type" type="radio" value="Office">
                                            <label for="radio-1b"><img src="{{ url('') }}/frontend/images/select-form/van.png" alt="">Van</label>
                                        </div>

                                        <div class="radio-img col-lg-3 col-sm-3 col-6">
                                            <input id="radio-1c" name="Car_Type" type="radio" value="Commercial">
                                            <label for="radio-1c"><img src="{{ url('') }}/frontend/images/select-form/minibus.png" alt="">Minibus</label>
                                        </div>

                                        <div class="radio-img col-lg-3 col-sm-3 col-6">
                                            <input id="radio-1d" name="Car_Type" type="radio" value="Retail">
                                            <label for="radio-1d"><img src="{{ url('') }}/frontend/images/select-form/sportscar.png" alt="">Prestige</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="row">
                                        <div class="col-lg-6 mb20">
                                            <h5>Lieu de départ</h5>
                                            <input type="text" name="PickupLocation" onfocus="geolocate()" placeholder="Enter your pickup location" id="autocomplete" autocomplete="off" class="form-control">

                                            <div class="jls-address-preview jls-address-preview--hidden">
                                                <div class="jls-address-preview__header">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 mb20">
                                            <h5>Lieu d'arrivée</h5>
                                            <input type="text" name="DropoffLocation" onfocus="geolocate()" placeholder="Enter your dropoff location" id="autocomplete2" autocomplete="off" class="form-control">

                                            <div class="jls-address-preview jls-address-preview--hidden">
                                                <div class="jls-address-preview__header">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 mb20">
                                            <h5>Date et heure de restitution de départ</h5>
                                            <div class="date-time-field">
                                                <input type="text" id="date-picker" name="Pick Up Date" value="">
                                                <select name="Pick Up Time" id="pickup-time">
                                                    <option selected disabled value="Select time">Time</option>
                                                    <option value="00:00">00:00</option>
                                                    <option value="00:30">00:30</option>
                                                    <option value="01:00">01:00</option>
                                                    <option value="01:30">01:30</option>
                                                    <option value="02:00">02:00</option>
                                                    <option value="02:30">02:30</option>
                                                    <option value="03:00">03:00</option>
                                                    <option value="03:30">03:30</option>
                                                    <option value="04:00">04:00</option>
                                                    <option value="04:30">04:30</option>
                                                    <option value="05:00">05:00</option>
                                                    <option value="05:30">05:30</option>
                                                    <option value="06:00">06:00</option>
                                                    <option value="06:30">06:30</option>
                                                    <option value="07:00">07:00</option>
                                                    <option value="07:30">07:30</option>
                                                    <option value="08:00">08:00</option>
                                                    <option value="08:30">08:30</option>
                                                    <option value="09:00">09:00</option>
                                                    <option value="09:30">09:30</option>
                                                    <option value="10:00">10:00</option>
                                                    <option value="10:30">10:30</option>
                                                    <option value="11:00">11:00</option>
                                                    <option value="11:30">11:30</option>
                                                    <option value="12:00">12:00</option>
                                                    <option value="12:30">12:30</option>
                                                    <option value="13:00">13:00</option>
                                                    <option value="13:30">13:30</option>
                                                    <option value="14:00">14:00</option>
                                                    <option value="14:30">14:30</option>
                                                    <option value="15:00">15:00</option>
                                                    <option value="15:30">15:30</option>
                                                    <option value="16:00">16:00</option>
                                                    <option value="16:30">16:30</option>
                                                    <option value="17:00">17:00</option>
                                                    <option value="17:30">17:30</option>
                                                    <option value="18:00">18:00</option>
                                                    <option value="18:30">18:30</option>
                                                    <option value="19:00">19:00</option>
                                                    <option value="19:30">19:30</option>
                                                    <option value="20:00">20:00</option>
                                                    <option value="20:30">20:30</option>
                                                    <option value="21:00">21:00</option>
                                                    <option value="21:30">21:30</option>
                                                    <option value="22:00">22:00</option>
                                                    <option value="22:30">22:30</option>
                                                    <option value="23:00">23:00</option>
                                                    <option value="23:30">23:30</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 mb20">
                                            <h5>Date et heure de restitution d'arrivée</h5>
                                            <div class="date-time-field">
                                                <input type="text" id="date-picker-2" name="Collection Date" value="">
                                                <select name="Collection Time" id="collection-time">
                                                    <option selected disabled value="Select time">Time</option>
                                                    <option value="00:00">00:00</option>
                                                    <option value="00:30">00:30</option>
                                                    <option value="01:00">01:00</option>
                                                    <option value="01:30">01:30</option>
                                                    <option value="02:00">02:00</option>
                                                    <option value="02:30">02:30</option>
                                                    <option value="03:00">03:00</option>
                                                    <option value="03:30">03:30</option>
                                                    <option value="04:00">04:00</option>
                                                    <option value="04:30">04:30</option>
                                                    <option value="05:00">05:00</option>
                                                    <option value="05:30">05:30</option>
                                                    <option value="06:00">06:00</option>
                                                    <option value="06:30">06:30</option>
                                                    <option value="07:00">07:00</option>
                                                    <option value="07:30">07:30</option>
                                                    <option value="08:00">08:00</option>
                                                    <option value="08:30">08:30</option>
                                                    <option value="09:00">09:00</option>
                                                    <option value="09:30">09:30</option>
                                                    <option value="10:00">10:00</option>
                                                    <option value="10:30">10:30</option>
                                                    <option value="11:00">11:00</option>
                                                    <option value="11:30">11:30</option>
                                                    <option value="12:00">12:00</option>
                                                    <option value="12:30">12:30</option>
                                                    <option value="13:00">13:00</option>
                                                    <option value="13:30">13:30</option>
                                                    <option value="14:00">14:00</option>
                                                    <option value="14:30">14:30</option>
                                                    <option value="15:00">15:00</option>
                                                    <option value="15:30">15:30</option>
                                                    <option value="16:00">16:00</option>
                                                    <option value="16:30">16:30</option>
                                                    <option value="17:00">17:00</option>
                                                    <option value="17:30">17:30</option>
                                                    <option value="18:00">18:00</option>
                                                    <option value="18:30">18:30</option>
                                                    <option value="19:00">19:00</option>
                                                    <option value="19:30">19:30</option>
                                                    <option value="20:00">20:00</option>
                                                    <option value="20:30">20:30</option>
                                                    <option value="21:00">21:00</option>
                                                    <option value="21:30">21:30</option>
                                                    <option value="22:00">22:00</option>
                                                    <option value="22:30">22:30</option>
                                                    <option value="23:00">23:00</option>
                                                    <option value="23:30">23:30</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <input type='submit' id='send_message' value='Rechercher' class="btn-main pull-right">
                                </div>
                            </div>
                            
                        </form>
                    </div>
                </div>

                <div class="spacer-double"></div> 
            </div>
        </div>
    </section>

    <section aria-label="section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 offset-lg-3 text-center"> 
                    <h2>Our Features</h2>
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


    <section id="section-cars" class="" data-bgcolor="#f8f8f8">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 offset-lg-3 text-center">
                    <h2>Location de voitures pas chères</h2> 
                    <div class="spacer-20"></div>
                </div>
                <div class="clearfix"></div>
                <div id="items-carousel" class="owl-carousel wow fadeIn">
                    <div class="col-lg-12">
                        <div class="de-item mb30">
                            <div class="d-img">
                                <img src="{{ url('') }}/frontend/images/cars/7.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="d-info">
                                <div class="d-text">
                                    <h4>Prado</h4>
                                    <div class="d-item_like">
                                        <i class="fa fa-heart"></i><span>74</span>
                                    </div>
                                    <div class="d-atr-group">
                                        <span class="d-atr"><img src="{{ url('') }}/frontend/images/icons/1-green.svg" alt="">5</span>
                                        <span class="d-atr"><img src="{{ url('') }}/frontend/images/icons/2-green.svg" alt="">2</span>
                                        <span class="d-atr"><img src="{{ url('') }}/frontend/images/icons/3-green.svg" alt="">4</span>
                                        <span class="d-atr"><img src="{{ url('') }}/frontend/images/icons/4-green.svg" alt="">SUV</span>
                                    </div>
                                    <div class="d-price">
                                        Tarif journalier <span>2600/jour</span>
                                        <a class="btn-main" href="{{ url('location-des-voitures/1') }}">Voir</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="de-item mb30">
                            <div class="d-img">
                                <img src="{{ url('') }}/frontend/images/cars/10.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="d-info">
                                <div class="d-text">
                                    <h4>Toyota Hilux</h4>
                                    <div class="d-item_like">
                                        <i class="fa fa-heart"></i><span>36</span>
                                    </div>
                                    <div class="d-atr-group">
                                        <span class="d-atr"><img src="{{ url('') }}/frontend/images/icons/1-green.svg" alt="">5</span>
                                        <span class="d-atr"><img src="{{ url('') }}/frontend/images/icons/2-green.svg" alt="">2</span>
                                        <span class="d-atr"><img src="{{ url('') }}/frontend/images/icons/3-green.svg" alt="">4</span>
                                        <span class="d-atr"><img src="{{ url('') }}/frontend/images/icons/4-green.svg" alt="">Sedan</span>
                                    </div>
                                    <div class="d-price">
                                        Tarif journalier <span>2400/jour</span>
                                        <a class="btn-main" href="{{ url('location-des-voitures/1') }}">Voir</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="de-item mb30">
                            <div class="d-img">
                                <img src="{{ url('') }}/frontend/images/cars/8.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="d-info">
                                <div class="d-text">
                                    <h4>Toyota</h4>
                                    <div class="d-item_like">
                                        <i class="fa fa-heart"></i><span>85</span>
                                    </div>
                                    <div class="d-atr-group">
                                        <span class="d-atr"><img src="{{ url('') }}/frontend/images/icons/1-green.svg" alt="">5</span>
                                        <span class="d-atr"><img src="{{ url('') }}/frontend/images/icons/2-green.svg" alt="">2</span>
                                        <span class="d-atr"><img src="{{ url('') }}/frontend/images/icons/3-green.svg" alt="">4</span>
                                        <span class="d-atr"><img src="{{ url('') }}/frontend/images/icons/4-green.svg" alt="">Exotic Car</span>
                                    </div>
                                    <div class="d-price">
                                        Tarif journalier <span>1600/jour</span>
                                        <a class="btn-main" href="{{ url('location-des-voitures/1') }}">Voir</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="de-item mb30">
                            <div class="d-img">
                                <img src="{{ url('') }}/frontend/images/cars/11.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="d-info">
                                <div class="d-text">
                                    <h4>Hyundai</h4>
                                    <div class="d-item_like">
                                        <i class="fa fa-heart"></i><span>59</span>
                                    </div>
                                    <div class="d-atr-group">
                                        <span class="d-atr"><img src="{{ url('') }}/frontend/images/icons/1-green.svg" alt="">5</span>
                                        <span class="d-atr"><img src="{{ url('') }}/frontend/images/icons/2-green.svg" alt="">2</span>
                                        <span class="d-atr"><img src="{{ url('') }}/frontend/images/icons/3-green.svg" alt="">4</span>
                                        <span class="d-atr"><img src="{{ url('') }}/frontend/images/icons/4-green.svg" alt="">Truck</span>
                                    </div>
                                    <div class="d-price">
                                        Tarif journalier <span>1700/jour</span>
                                        <a class="btn-main" href="{{ url('location-des-voitures/1') }}">Voir</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="de-item mb30">
                            <div class="d-img">
                                <img src="{{ url('') }}/frontend/images/cars/hyundai2.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="d-info">
                                <div class="d-text">
                                    <h4>Hyundai</h4>
                                    <div class="d-item_like">
                                        <i class="fa fa-heart"></i><span>19</span>
                                    </div>
                                    <div class="d-atr-group">
                                        <span class="d-atr"><img src="{{ url('') }}/frontend/images/icons/1-green.svg" alt="">5</span>
                                        <span class="d-atr"><img src="{{ url('') }}/frontend/images/icons/2-green.svg" alt="">2</span>
                                        <span class="d-atr"><img src="{{ url('') }}/frontend/images/icons/3-green.svg" alt="">4</span>
                                        <span class="d-atr"><img src="{{ url('') }}/frontend/images/icons/4-green.svg" alt="">Hatchback</span>
                                    </div>
                                    <div class="d-price">
                                        Tarif journalier <span>2300/jour</span>
                                        <a class="btn-main" href="{{ url('location-des-voitures/1') }}">Voir</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="de-item mb30">
                            <div class="d-img">
                                <img src="{{ url('') }}/frontend/images/cars/9.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="d-info">
                                <div class="d-text">
                                    <h4>Toyota pick</h4>
                                    <div class="d-item_like">
                                        <i class="fa fa-heart"></i><span>79</span>
                                    </div>
                                    <div class="d-atr-group">
                                        <span class="d-atr"><img src="{{ url('') }}/frontend/images/icons/1-green.svg" alt="">5</span>
                                        <span class="d-atr"><img src="{{ url('') }}/frontend/images/icons/2-green.svg" alt="">2</span>
                                        <span class="d-atr"><img src="{{ url('') }}/frontend/images/icons/3-green.svg" alt="">4</span>
                                        <span class="d-atr"><img src="{{ url('') }}/frontend/images/icons/4-green.svg" alt="">Hatchback</span>
                                    </div>
                                    <div class="d-price">
                                        Tarif journalier <span>1000/jour</span>
                                        <a class="btn-main" href="{{ url('location-des-voitures/1') }}">Voir</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>
  
    <section id="section-news">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 offset-lg-3 text-center">
                    <h2>Bons plans et conseils sur la location de voiture</h2>
                    <div class="spacer-20"></div>
                </div>
                
                <div class="col-lg-4 mb10">
                            <div class="bloglist s2 item">
                                    <div class="post-content">
                                        <div class="post-image"> 
                                            <img alt="" src="{{ url('') }}/frontend/images/news/pic-blog-1.jpg" class="lazy">
                                        </div>
                                        <div class="post-text">                                                    
                                            <h4><a href="news-single.html">Enjoy Best Travel Experience<span></span></a></h4>
                                            <p>Dolore officia sint incididunt non excepteur ea mollit commodo ut enim reprehenderit cupidatat labore ad laborum consectetur.</p>
                                            <a class="btn-main" href="#">En savoir plus                </a>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        
                        <div class="col-lg-4 mb10">
                            <div class="bloglist s2 item">
                                    <div class="post-content">
                                        <div class="post-image"> 
                                            <img alt="" src="{{ url('') }}/frontend/images/news/pic-blog-2.jpg" class="lazy">
                                        </div>
                                        <div class="post-text">                                                    
                                            <h4><a href="news-single.html">The Future of Car Rent<span></span></a></h4>
                                            <p>Dolore officia sint incididunt non excepteur ea mollit commodo ut enim reprehenderit cupidatat labore ad laborum consectetur.</p>
                                            <a class="btn-main" href="#">En savoir plus                </a>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        
                <div class="col-lg-4 mb10">
                <div class="bloglist s2 item">
                        <div class="post-content">
                            <div class="post-image"> 
                                <img alt="" src="{{ url('') }}/frontend/images/news/pic-blog-3.jpg" class="lazy">
                            </div>
                            <div class="post-text">                                                    
                                <h4><a href="news-single.html">Holiday Tips For Backpacker<span></span></a></h4>
                                <p>Dolore officia sint incididunt non excepteur ea mollit commodo ut enim reprehenderit cupidatat labore ad laborum consectetur.</p>
                                <a class="btn-main" href="#">En savoir plus                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="section-call-to-action" class="bg-color-2 pt60 pb60 text-light">
        <div class="container"> 
            <div class="row align-items-center">
                <div class="col-lg-8"> 
                    <h2 class="s2">Le service client de SAFA & MARWA RENTAL est là pour vous aider à tout moment.</h2>
                </div>

                <div class="col-lg-4 text-lg-center text-sm-center">
                    <div class="phone-num-big">
                        <i class="fa fa-phone"></i>
                        <span class="pnb-text">
                            Appelez maintenant
                        </span>
                        <span class="pnb-num">
                           +235 98 98 55 79
                        </span>
                    </div>
                    <a href="{{ url('contact') }}" class="btn-main">Contact Us</a>
                </div>
            </div> 
        </div>
    </section>
 
</div>
<!-- content close --> 

@endsection