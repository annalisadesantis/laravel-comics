@extends("layouts.app")
{{-- titolo --}}
@section("page-title", "Comics | DC")
{{-- contenuti --}}
@section("content")
    <section id="home">
        @include("partials.jumbtron")
        <div class="comics">
            <div class="container">
                <small class="uppercase">
                    Current Series
                </small>
                <div class="comics-container">
                    @foreach ($comics as $indice => $comic)
                        <div class="comic">
                            <a href="{{ route('comic-details', ['id' => $indice]) }}">
                                <div class="comic-image">
                                    <img src="{{ $comic['thumb']}}" alt="{{ $comic['series']}}">
                                </div>
                                <div class="comis-title">
                                    <span class="uppercase">
                                        {{ $comic['series']}}
                                    </span>
                                </div>
                            </a>
                        </div>
                    @endforeach
                    <button type="button" name="button" class="uppercase">
                        Load more
                    </button>
                </div>
            </div>
        </div>
        <div class="iconlink">
            <div class="container">
                <div class="iconlink-box">
                    <a href="#">
                        <div class="img-box">
                            <img src="https://www.dccomics.com/sites/all/themes/dc_comics_bp/images/buy-comics-digital-comics.png" alt="buy-comics-digital-comics">
                        </div>
                        <span class="uppercase">
                            Digital Comics
                        </span>
                    </a>
                    <a href="#">
                        <div class="img-box">
                            <img src="https://www.dccomics.com/sites/all/themes/dc_comics_bp/images/buy-comics-merchandise.png" alt="buy-comics-merchandise">
                        </div>
                        <span class="uppercase">
                            DC Merchandise
                        </span>
                    </a>
                    <a href="#">
                        <div class="img-box">
                            <img src="https://www.dccomics.com/sites/all/themes/dc_comics_bp/images/buy-comics-subscriptions.png" alt="buy-comics-subscriptions">
                        </div>
                        <span class="uppercase">
                            Subscriptions
                        </span>
                    </a>
                    <a href="#">
                        <div class="img-box">
                            <img src="https://www.dccomics.com/sites/all/themes/dc_comics_bp/images/buy-comics-shop-locator.png" alt="buy-comics-shop-locator">
                        </div>
                        <span class="uppercase">
                            Comic Shop Locator
                        </span>
                    </a>
                    <a href="#">
                        <div class="img-box">
                            <img src="https://www.dccomics.com/sites/all/themes/dc_comics_bp/images/buy-dc-power-visa.svg" alt="buy-dc-power-visa">
                        </div>
                        <span class="uppercase">
                            Dc power visa
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
