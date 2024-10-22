@extends('frontend.page-layout')

@section('title', 'SAFA MARWARENTAL | Locations des voitures en cours')
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
                            <h1>Location des voitures</h1>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
    </section>
    <!-- section close -->

    <section id="section-cars">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="item_filter_group">
                        <h4>Vehicle Type</h4>
                        <div class="de_form">
                            @if ($getTypeCars->isNotEmpty())
                                @foreach ($getTypeCars as $type)
                                <div class="de_checkbox">
                                    <input id="type {{$type->id}}" class="form-check-input typecar" name="type[]" type="checkbox" value="{{$type->id}}">
                                    <label>{{$type->name}}</label>
                                </div> 
                                @endforeach
                            @endif
                        </div>
                    </div>

                    <div class="item_filter_group">
                        <h4>Car Body Type</h4>
                        <div class="de_form">
                            <div class="de_checkbox">
                                <input id="car_body_type_1" name="car_body_type_1" type="checkbox" value="car_body_type_1">
                                <label for="car_body_type_1">Convertible</label>
                            </div>

                            <div class="de_checkbox">
                                <input id="car_body_type_2" name="car_body_type_2" type="checkbox" value="car_body_type_2">
                                <label for="car_body_type_2">Coupe</label>
                            </div>

                            <div class="de_checkbox">
                                <input id="car_body_type_4" name="car_body_type_4" type="checkbox" value="car_body_type_4">
                                <label for="car_body_type_4">Hatchback</label>
                            </div>

                            <div class="de_checkbox">
                                <input id="car_body_type_6" name="car_body_type_6" type="checkbox" value="car_body_type_6">
                                <label for="car_body_type_6">Truck</label>
                            </div>

                            <div class="de_checkbox">
                                <input id="car_body_type_7" name="car_body_type_7" type="checkbox" value="car_body_type_7">
                                <label for="car_body_type_7">Sedan</label>
                            </div>

                            <div class="de_checkbox">
                                <input id="car_body_type_8" name="car_body_type_8" type="checkbox" value="car_body_type_8">
                                <label for="car_body_type_8">Sports Car</label>
                            </div> 

                        </div>
                    </div>

                    <div class="item_filter_group">
                        <h4>Car Seats</h4>
                        <div class="de_form">
                            <div class="de_checkbox">
                                <input id="car_seat_1" name="car_seat_1" type="checkbox" value="car_seat_1">
                                <label for="car_seat_1">2 seats</label>
                            </div>

                            <div class="de_checkbox">
                                <input id="car_seat_2" name="car_seat_2" type="checkbox" value="car_seat_2">
                                <label for="car_seat_2">4 seats</label>
                            </div>

                            <div class="de_checkbox">
                                <input id="car_seat_3" name="car_seat_3" type="checkbox" value="car_seat_3">
                                <label for="car_seat_3">6 seats</label>
                            </div>

                            <div class="de_checkbox">
                                <input id="car_seat_4" name="car_seat_4" type="checkbox" value="car_seat_4">
                                <label for="car_seat_4">6+ seats</label>
                            </div>

                        </div>
                    </div>

                    <div class="item_filter_group">
                        <h4>Car Engine Capacity (cc)</h4>
                        <div class="de_form">
                            <div class="de_checkbox">
                                <input id="car_engine_1" name="car_engine_1" type="checkbox" value="car_engine_1">
                                <label for="car_engine_1">1000 - 2000</label>
                            </div>

                            <div class="de_checkbox">
                                <input id="car_engine_2" name="car_engine_2" type="checkbox" value="car_engine_2">
                                <label for="car_engine_2">2000 - 4000</label>
                            </div>

                            <div class="de_checkbox">
                                <input id="car_engine_3" name="car_engine_3" type="checkbox" value="car_engine_3">
                                <label for="car_engine_3">4000 - 6000</label>
                            </div>

                            <div class="de_checkbox">
                                <input id="car_engine_4" name="car_engine_4" type="checkbox" value="car_engine_4">
                                <label for="car_engine_4">6000 - 8000</label>
                            </div>

                        </div>
                    </div>

                    <div class="item_filter_group">
                        <h4>Price ($)</h4>
                          <div class="price-input"> 
                            <div class="field">
                              <span>Min</span>
                              <input type="number" class="input-min" value="0">
                            </div>
                            <div class="field">
                              <span>Max</span>
                              <input type="number" class="input-max" value="100000">
                            </div>
                          </div>
                          <div class="slider">
                            <div class="progress"></div>
                          </div>
                          <div class="range-input">
                            <input type="range" class="range-min" min="0" max="100000" value="0" step="1">
                            <input type="range" class="range-max" min="0" max="100000" value="100000" step="1">
                          </div>
                    </div> 
                </div>

                <div class="col-lg-9">
                    <div class="row">
                        @foreach ($getCars as $car)
                        <div class="col-xl-12">
                            <div class="de-item-list mb30">
                                <div class="d-img">
                                    <img src="{{ $car->image }}" class="img-fluid" alt="">
                                </div>
                                <div class="d-info">
                                    <div class="d-text">
                                        <h4>{{ $car->name }}</h4> 
                                        <div class="d-atr-group">
                                            <ul class="d-atr">
                                                <li><span>Seats:</span>{{$car->seats}}</li> 
                                                <li><span>Doors:</span>{{$car->doors}}</li>
                                                <li><span>Fuel:</span>{{$car->fueltype}}</li>
                                                <li><span>Years:</span>{{$car->years}}</li>
                                                <li><span>Engine:</span>{{$car->engine}}</li>
                                                <li><span>Mileage:</span>{{$car->mileage}}</li>
                                                <li><span>Type:</span>{{$car->bodytype}}</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-price">
                                    Tarif journalier <span>{{ $car->price }} xaf /Jour</span>
                                    <a class="btn-main" href="{{ url('car-detail',$car->name) }}">En savoir plus</a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div> 
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    
</div>
<!-- content close -->                                   
    
@endsection

@section('scripts')
    <script>
        $(".typecar").change(function(){
            apply_filter();
        })

        function apply_filter()
        {
            var types = [];
            $(".typecar").each(function(){
                
                if($(this).is(":checked") == true){
                    
                    types.push($(this).val());
                }
            })

            console.log(types);
            
        }
    </script>
@endsection