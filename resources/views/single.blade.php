@extends('layouts.single-layout')

@section('content')
    <div class="col-md-9 page-content col-thin-right">
        <div class="inner inner-box ads-details-wrapper">
            <h1 class="auto-heading"><span class="auto-title left">2011 Mercedes-Benz SLS AMG </span> <span
                class="auto-price pull-right"> $204,990</span></h1>

            <div style="clear:both;"></div>
            <span class="info-row"> <span class="date"><i class=" icon-clock"> </i> Today 1:21 pm </span> - <span class="category"> Cars </span>- <span class="item-location"><i
                class="fa fa-map-marker"></i> New York </span> </span>

            <div class="row ">
                <div class="col-sm-9 automobile-left-col">

                    <div class="ads-image">
                        <ul class="bxslider">
                            <li><img src="{{ asset('frontend/images/auto/2012-mercedes-benz-sls-amg.jpg') }}" alt="img" />
                            </li>
                            <li><img src="{{ asset('frontend/images/auto/2.jpg') }}" alt="img" />
                            </li>
                            <li><img src="{{ asset('frontend/images/auto/3.jpg') }}" alt="img" />
                            </li>
                        </ul>
                        <div id="bx-pager">
                            <a class="thumb-item-link" data-slide-index="0" href=""><img src="{{ asset('frontend/images/auto/2012-mercedes-benz-sls-amg.jpg') }}" alt="img" />
                            </a>
                            <a class="thumb-item-link" data-slide-index="1" href=""><img src="{{ asset('frontend/images/auto/2.jpg') }}" alt="img" />
                            </a>
                            <a class="thumb-item-link" data-slide-index="2" href=""><img src="{{ asset('frontend/images/auto/2.jpg') }}" alt="img" />
                            </a>
                        </div>
                    </div>
                    <!--ads-image-->
                </div>
                <!-- /.automobile-left-col-->

                <div class="col-sm-3 automobile-right-col">
                    <div class="inner">

                        <div class="key-features">
                            <div class="media">

                                <div class="media-body">
                                    <span class="media-heading">8,187 km</span>
                                    <span class="data-type">Mileage</span>
                                </div>
                            </div>

                            <div class="media">

                                <div class="media-body">
                                    <span class="media-heading">2011</span>
                                    <span class="data-type">YEAR</span>
                                </div>
                            </div>

                            <div class="media">

                                <div class="media-body">
                                    <span class="media-heading">New</span>
                                    <span class="data-type">Condition</span>
                                </div>
                            </div>

                            <div class="media">

                                <div class="media-body">
                                    <span class="media-heading">Automatic</span>
                                    <span class="data-type">TRANSMISSION</span>
                                </div>
                            </div>
                            <div class="media">
                                <div class="media-body">
                                    <span class="media-heading">CAR</span>
                                    <span class="data-type">TYPE</span>
                                </div>
                            </div>


                            <div class="media">
                                <div class="media-body">
                                    <span class="media-heading">Personal</span>
                                    <span class="data-type">Class</span>
                                </div>
                            </div>


                        </div>
                    </div>

                </div>
            </div>
            <!--/.row-->


            <div class="Ads-Details">
                <h5 class="list-title"><strong>Car Details</strong></h5>

                <div class="row">
                    <div class="ads-details-info col-md-8">
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper
                            suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et
                            accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor. </p>
                        <h4 class="text-uppercase">Features</h4>
                        <ul class="list-circle">

                            <li>Brand-new model</li>
                            <li>47/53 front-to-rear weight distribution</li>
                            <li>563-hp V-8</li>
                            <li>Seven-speed dual-clutch transmission</li>
                            <li>7-speed dual-clutch automated manual</li>
                            <li>Zero to 60 mph: 3.5 sec</li>
                            <li>Top speed (governor limited): 196 mph</li>
                            <li>EPA city/highway driving: 13/20 mpg</li>

                        </ul>
                        <h4 class="text-uppercase">DIMENSIONS</h4>
                        <ul class="list-circle">
                            <li><strong>Wheelbase:</strong> 105.5 in Length: 182.6 in /li>
                                <li><strong>Width:</strong> 76.3 in Height: 49.7 in (3G)</li>
                                <li><strong>Curb weight</strong> (C/D est): 3600 lb</li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <aside class="panel panel-body panel-details">
                            <ul>
                                <li>
                                    <p class=" no-margin "><strong>Price:</strong> $204,990</p>
                                </li>

                                <li>
                                    <p class="no-margin"><strong>Type:</strong> Car</p>
                                </li>
                                <li>
                                    <p class="no-margin"><strong>Location:</strong> New York </p>
                                </li>
                                <li>
                                    <p class=" no-margin "><strong>Condition:</strong> New</p>
                                </li>
                                <li>
                                    <p class="no-margin"><strong>Brand:</strong> Mercedes-Benz</p>
                                </li>
                            </ul>
                        </aside>
                        <div class="ads-action">
                            <ul class="list-border">
                                <li>
                                    <a href="#"> <i class=" fa fa-user"></i> More ads by User </a>
                                </li>
                                <li>
                                    <a href="#"> <i class=" fa fa-heart"></i> Save ad </a>
                                </li>
                                <li>
                                    <a href="#"> <i class="fa fa-share-alt"></i> Share ad </a>
                                </li>
                                <li>
                                    <a href="#reportAdvertiser" data-toggle="modal"> <i class="fa icon-info-circled-alt"></i> Report abuse </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="content-footer text-left"><a class="btn  btn-default" data-toggle="modal" href="#contactAdvertiser"><i
                    class=" icon-mail-2"></i> Send a message </a> <a class="btn  btn-info"><i
                    class=" icon-phone-1"></i> 01680 531 352 </a>
                </div>
            </div>
        </div>
        <!--/.ads-details-wrapper-->
    </div>
    <!--/.page-content-->
@endsection