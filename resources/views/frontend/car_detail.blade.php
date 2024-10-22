@extends('frontend.page-layout')

@section('title', 'SAFA MARWARENTAL | Car Détail')
@section('content')


 <!-- content begin -->
 <div class="no-bottom no-top zebra" id="content">
    <div id="top"></div>
    
    <!-- section begin -->
    <section id="subheader" class="jarallax text-light">
        <img src="{{ url('') }}/frontend/images/background/2.jpg" class="jarallax-img" alt="">
            <div class="center-y relative text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h1>{{$car_detail->name}}</h1>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
    </section>
    <!-- section close -->

    <section id="section-car-details">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6">
                    <div id="slider-carousel" class="owl-carousel">
                        @php
                            $photo = explode(',', $car_detail->image);
                            //dd($photo);
                        @endphp
                        <div class="item">
                            @foreach ($photo as $data)
                                @if (!empty($data))
                                    <img src="{{$data}}" class="img-fluid" alt="{{$data}}">
                                @else   
                                     <img src="{{asset('admin/assets/images/maintenance.svg')}}" class="img-fluid" alt="">
                                @endif
                            @endforeach
                        </div> 
                    </div>
                </div>

                <div class="col-lg-3">
                    <h3>{{ $car_detail->name }}</h3>
                    <p>{{ $car_detail->description }}</p>

                    <div class="spacer-10"></div>

                    <h4>Specifications</h4>
                    <div class="de-spec">
                        <div class="d-row">
                            <span class="d-title">Body</span>
                            <spam class="d-value">{{ $car_detail->model }}</spam>
                        </div>
                        <div class="d-row">
                            <span class="d-title">Seats</span>
                            <spam class="d-value">{{$car_detail->seats}} seats</spam>
                        </div>
                        <div class="d-row">
                            <span class="d-title">Doors</span>
                            <spam class="d-value">{{$car_detail->doors}} doors</spam>
                        </div> 
                        <div class="d-row">
                            <span class="d-title">Fuel Type</span>
                            <spam class="d-value">{{ $car_detail->fueltype }}</spam>
                        </div>
                        <div class="d-row">
                            <span class="d-title">Engine</span>
                            <spam class="d-value">{{ $car_detail->engine }}</spam>
                        </div>
                        <div class="d-row">
                            <span class="d-title">Year</span>
                            <spam class="d-value">{{ $car_detail->years }}</spam>
                        </div>
                        <div class="d-row">
                            <span class="d-title">Mileage</span>
                            <spam class="d-value">{{ $car_detail->mileage }}</spam>
                        </div>
                        <div class="d-row">
                            <span class="d-title">Transmission</span>
                            <spam class="d-value">{{ $car_detail->trans }}</spam>
                        </div>
                        <div class="d-row">
                            <span class="d-title">Model</span>
                            <spam class="d-value">{{$car_detail->model}}</spam>
                        </div> 
                        <div class="d-row">
                            <span class="d-title">Exterior Color</span>
                            <spam class="d-value">{{ $car_detail->exterior }}</spam>
                        </div>
                        <div class="d-row">
                            <span class="d-title">Interior Color</span>
                            <spam class="d-value">{{ $car_detail->interior }}</spam>
                        </div>
                    </div>

                    <div class="spacer-single"></div>

                    <h4>Features</h4>
                    <ul class="ul-style-2">
                        <li>Bluetooth</li>
                        <li>Multimedia Player</li>
                        <li>Central Lock</li>
                        <li>Sunroof</li>
                    </ul>
                </div>

                <div class="col-lg-3">
                    <div class="de-price text-center">
                        Daily rate
                        <h3>{{ $car_detail->price }} XAf</h3>
                    </div>
                    <div class="spacer-30"></div>
                    <div class="de-box mb25">
                        <form name="contactForm" id='contact_form' method="post">
                            <h4>Booking this car</h4>

                            <div class="spacer-20"></div>

                            <div class="row">
                                <div class="col-lg-12 mb20">
                                    <h5>Type d'accompagnement</h5>
                                    <select name="Chauff" id="chauff" class="form-control">
                                        <option selected disabled value="chauff">Avec Chauffeur</option> 
                                        <option value="chauff">Avec Chauffeur</option> 
                                    </select>
                                </div> 
                            </div>

                            <input type='submit' id='send_message' value='Demander une quotation' class="btn-main btn-fullwidth">

                            <div class="clearfix"></div>
                            
                        </form>
                    </div>

                    <div class="de-box">
                        <h4>Partager</h4>
                        <div class="de-color-icons">
                            <span><i class="fa fa-twitter fa-lg"></i></span>
                            <span><i class="fa fa-facebook fa-lg"></i></span> 
                            <span><i class="fa fa-linkedin fa-lg"></i></span> 
                        </div>
                    </div>
                </div>                
            </div>
        </div>
    </section>
    
    
</div>
<!-- content close -->
    
@endsection