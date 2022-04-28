@extends('guest.layouts.home')
{{-- @dd(Route::current()) --}}
{{-- @dd(url())) --}}
{{-- @dd(Route::current()->Uri()) --}}

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
        <div class="single-data">
            <div class="container">
                <table>
                    <thead>
                        <tr>
                            <th>TALENT</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="inte">Art By:</td>
                            <td>
                                @foreach ($sel['artists'] as $artist)
                                    @if ($loop->last)
                                        <span><a href="#">{{ $artist }}</a></span>
                                    @else
                                    <span><a href="#">{{ $artist }}</a>,</span>
                                    @endif
                                @endforeach
                            </td>
                        </tr>
                        <tr>
                            <td class="inte">Written By:</td>
                            <td>
                                @foreach ($sel['writers'] as $writer)
                                    @if ($loop->last)
                                        <span><a href="#">{{ $writer }}</a></span>
                                    @else
                                    <span><a href="#">{{ $writer }}</a>,</span>
                                    @endif
                                @endforeach
                            </td>
                        </tr>
                    </tbody>
                </table>
                <table>
                    <thead>
                        <tr>
                            <th>SPECS</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="inte">Series:</td>
                            <td>{{ strtoupper($sel['series']) }}</td>
                        </tr>
                        <tr>
                            <td class="inte">U.S. Price:</td>
                            <td>{{ $sel['price'] }}</td>
                        </tr>
                        <tr>
                            <td class="inte">On Sale Date:</td>
                            <td>{{ $sel['sale_date'] }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
    @include('guest.statics.greybanner')
@endsection
