@extends("layouts.app")
{{-- titolo --}}
@section("page-title", "Comic-Detalis | DC")
{{-- contenuti --}}
@section("content")
    @include("partials.jumbtron")
    <section class="comic-thumb">
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

    </section>
@endsection
