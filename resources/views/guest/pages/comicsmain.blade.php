@extends('guest.layouts.home')

@section('main')
    <main>
        <div class="container">
            <div>
                <span class="label">CURRENT SERIES</span>
            </div>
            <div class="series-view flex">
                @foreach ($series as $serie)
                    <div class="card">
                        <div class="body">
                            <img src="{{ $serie['thumb']}}" alt="">
                            <div class="overlay">
                                <span>{{ $serie['series'] }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
                <button>LOAD MORE</button>
            </div>
        </div>
    </main>
    @include('guest.statics.bluebanner')
@endsection
