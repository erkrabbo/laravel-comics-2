@extends('guest.layouts.home')

@section('main')
    <main>
        <div class="single-header">
            <div class="container">
                <div class="card">
                    <img src="{{$sel['thumb']}}" alt="">
                    <div class="overlay">
                        <span class="top">{{ strtoupper($sel['type']) }}</span>
                        <span class="bottom">VIEW GALLERY</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="single-main">
            <div class="container">
                <div class="overview">
                    <h2>{{ $sel['title'] }}</h2>
                    <div class="table">
                        <div class="info">
                            <div class="over">
                                <span>U.S. Price: <span class="white">{{ $sel['price'] }}</span></span>
                                <span>AVAILABLE</span>
                            </div>
                            <div class="check-ava">
                                <span class="white">Check availability</span><div class="multi"></div>
                            </div>
                        </div>
                        <p>{{ $sel['description'] }}</p>
                    </div>
                </div>
                <div class="adv">
                    <span>ADVERTISMENT</span>
                    <img src="{{ asset('images/adv.jpg') }}" alt="adv">
                </div>
            </div>
        </div>
    </main>
@endsection
