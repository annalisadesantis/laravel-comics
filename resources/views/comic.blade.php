@extends("layouts.app")
{{-- titolo --}}
@section("page-title", "Comic-Detalis | DC")
{{-- contenuti --}}
@section("content")
    @include("partials.jumbtron")
    <section id="comic-thumb">
        <div class="small-container">
            <div class="comic-thumb-container">
                <div class="comic-thumb-wrapper">
                    <span class="comic-type uppercase">
                        {{ $comic['type'] }}
                    </span>
                    <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                    <span class="comic-gallery uppercase">
                        View Gallery
                    </span>
                </div>
            </div>
        </div>
    </section>
    <section id="comic-details">
        <div class="small-container">
            <div class="comic-details-box">
                <div class="info">
                    <div class="title">
                        <h1 class="uppercase">
                            {{ $comic['title'] }}
                        </h1>
                    </div>
                    <div class="details">
                        <div class="price">
                            <span>
                                U.S. Price: {{ $comic['price'] }}
                            </span>
                        </div>
                        <div class="available">
                            <span class="uppercase light">
                                Available
                            </span>
                        </div>
                        <div class="check">
                            <span>
                                Check Availability
                                <i class="fas fa-caret-down"></i>
                            </span>
                        </div>
                    </div>
                    <div class="description">
                        <p>
                            {{ $comic['description'] }}
                        </p>
                    </div>
                </div>
                <div class="adv">
                    <h5 class="uppercase">
                        Advertisement
                    </h5>
                    <img src="{{ asset('/images/adv.jpg') }}" alt="adv">
                </div>
            </div>
        </div>
    </section>
@endsection
