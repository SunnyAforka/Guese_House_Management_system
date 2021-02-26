@extends('layouts.app')

    @section('content')
    <div class="row justify-content-center">
        <div class="col-lg-6 col-sm-6 col-xs-12">
            <div class="white-box analytics-info">
                <h3 class="box-title">Total No. of Guests</h3>
                <ul class="list-inline two-part d-flex align-items-center mb-0">
                    <li>
                        <div id="sparklinedash"><canvas width="67" height="30"
                                style="display: inline-block; width: 67px; height: 30px; vertical-align: top;"></canvas>
                        </div>
                    </li>
                    <li class="ml-auto"><span class="counter text-success">{{ $guest_count }}</span></li>
                </ul>
            </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-xs-12">
            <div class="white-box analytics-info">
                <h3 class="box-title">Rooms</h3>
                <ul class="list-inline two-part d-flex align-items-center mb-0">
                    <li>
                        <div id="sparklinedash2"><canvas width="67" height="30"
                                style="display: inline-block; width: 67px; height: 30px; vertical-align: top;"></canvas>
                        </div>
                    </li>
                    <li class="ml-auto"><span class="counter text-purple">{{ $getlastRoom }}</span></li>
                </ul>
            </div>
        </div>

        <div class="col-lg-6 col-sm-6 col-xs-12">
            <div class="white-box analytics-info">
                <h3 class="box-title">Remaining Rooms</h3>
                <ul class="list-inline two-part d-flex align-items-center mb-0">
                    <li>
                        <div id="sparklinedash2"><canvas width="67" height="30"
                                style="display: inline-block; width: 67px; height: 30px; vertical-align: top;"></canvas>
                        </div>
                    </li>
                    <li class="ml-auto"><span class="counter text-purple">{{ $available_room }}</span></li>
                </ul>
            </div>
        </div>

    </div>


    @endsection
