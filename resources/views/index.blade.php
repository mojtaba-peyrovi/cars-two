@extends('master')
@section('main')
    @foreach ($cars as $car)

            <div class="container single-result" style="">

                <div class="row">
                    <div class="col-xs-4 col-md-4 col-lg-4">
                        <div class="vehicle-container">
                            <div class="vehicle-img">
                                <img src="/img/01.jpg" alt="">
                            </div>

                        </div>
                        <div class="btn-group col-md-7 col-md-offset-4" style="margin-top:30px;">

                              <a href="{{ route('car.delete',['car_id'=> $car->id]) }}" class="btn btn-success" id="delete-btn">Delete this car</a>



                        </div>

                    </div>
                    <div class="col-xs-8 col-md-8 col-lg-8">
                        <div class="vehicle-info">
                            <div class="info-top">
                                <a href="#">{{$car->year}} {{ $car->make }} {{ $car->model }}</a>
                                <span class="vehicle-trim"> - {{ $car->trim }}</span>
                            </div>
                            <div class="info-middle">
                                <div class="row">
                                    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                                        <ul class="vehicle-price-section">
                                            <li class="vehicle-price">{{ $car->price }} <span class="average-price"><span>$</span>57,342</span></li>
                                            <li class="analytics"><i class="fa fa-arrow-up"></i><span>$920</span><small>Above Average</small></li>
                                        </ul>
                                        <div class="vehicle-info-tigher">
                                            <ul class="condition">
                                                <li id="condition">Condition</li>
                                                <li id="condition-value">{{ $car->condition }}</li>
                                            </ul>
                                            <ul class="mileage">
                                                <li id="mileage">mileage</li>
                                                <li id="mileage-value">{{ $car->mileage }}</li>
                                            </ul>
                                            <div class="row">
                                                <div class="spec col-sm-6">
                                                    <span id="spec">Spec</span>
                                                    <ul id="spec-values">
                                                        <li>{{ $car->engine }} cc</li>
                                                        <li>{{ $car->transmission }}</li>
                                                        <li>{{ $car->consumptionCity }} city/{{ $car->consumptonHwy }} Hwy</li>
                                                        <li>{{ $car->fuel }}</li>
                                                    </ul>
                                                </div>
                                                <div class="highlights col-sm-6">
                                                    <span id="highlights">highlights</span>
                                                    <ul id="highlight-values">

                                                        <li>{{ $car->highlight1 }}</li>
                                                        <li>{{ $car->highlight2 }}</li>
                                                        <li>{{ $car->highlight3 }}</li>
                                                        <li>{{ $car->highlight4 }}</li>
                                                        <li>{{ $car->highlight5 }}</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                        <div class="text-center hidden-xs hidden-sm" id="loan-calculator">
                                            <div class="monthly-top">
                                                <span class="money">$785</span> /Mo
                                            </div>
                                            <span>Est. Monthly Payment</span>
                                            <div id="small">
                                                "Estimate - with good credit & 10% down"
                                            </div>
                                        </div>
                                        <div class="vehicle-stats text-center">
                                            <span class="btn-link">Platinum Motor Cars</span>
                                            <ul class="vehicle-location list-unstyled">
                                                <li class="btn-link hidden-xs vehicle-location-click">
                                                    <i class="fa fa-search"></i>
                                                    <span>{{ $car->location }}</span>
                                                    ,
                                                    <span>MI</span>
                                                </li>
                                            </ul>
                                            <ul class="stats-bar hidden-xs text-left">
                                                <li>
                                                    <i class="fa fa-calendar"></i>Listed 6 days
                                                </li>
                                                <li>
                                                    <i class="fa fa-eye"></i>2 views
                                                </li>
                                                <li>
                                                    <i class="fa fa-envelope-o"></i>1 Inquiry
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="apply-btn text-center">
                                            <a href="/cars/{{$car->id}}" class="btn btn-success">More Info</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="info-bottom hidden-xs">
                                <div id="desc-title">
                                    Description
                                </div>
                                <span class="desc">{{ $car->desc }}</span>
                            </div>
                        </div>
                    </div>
                </div>



            </div>






    @endforeach

@endsection
