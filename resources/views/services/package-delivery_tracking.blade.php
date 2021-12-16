<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="{{ asset('css/package-delivery_tracking.css') }}" >

@extends('layouts.app-alt')
@section('content')

    <div class="container">

        <div class="head">
            <div class="head-title">
                TRACK YOUR PACKAGE
            </div>
            <img src="{{ URL ('img/package-delivery.png') }}" alt="">
        </div>

        <hr class="divider">


            <div class="input-container">
                <input class="textField" type="search" name="tracking" id="tracking" placeholder="ENTER TRACKING NUMBER">
                <div class="search">
                    <button>SEARCH</button>
                </div>
            </div>

        <div class="display">

        <!-- STATUS CHECKS -->
            <ol class="tracker" data-tracker-steps="1">
                <li class="tracker-todo">PICKED UP</li>
                <li class="tracker-done">IN TRANSIT</li>
                <li class="tracker-todo">DELIVERED</li>
            </ol>

            <div class="whitebox">
                <div class="details-container">

                    <div class="box">
                        <div class="detail-title">
                            RECIPIENT NAME:
                        </div>
                        <div class="description">
                            NAME
                        </div>
                    </div>

                    <div class="box">
                        <div class="detail-title">
                            TRACKING NUMBER:
                        </div>
                        <div class="description">
                            XSM000003456108
                        </div>
                    </div>

                    <div class="box">
                        <div class="detail-title">
                            DESTINATION:
                        </div>
                        <div class="description">
                            RECIPIENT ADDRESS
                        </div>
                    </div>

                    <div class="box">
                        <div class="detail-title">
                            CURRENT STATUE:
                        </div>
                        <div class="description">
                            STATUS
                        </div>
                    </div>

                </div>
            </div>

            <div class="status-details">
                <div class="date">
                    DATE
                </div>
                <div class="status-container">
                    <div class="current-status">
                        <div class="status">
                            STATUS
                        </div>
                        <div class="details">
                            DETAILS
                        </div>
                    </div>
                    <div class="time">
                        TIME
                    </div>
                </div>
            </div>

        </div>

    </div>

@endsection


                    