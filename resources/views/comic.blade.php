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
    <section id="comic-info">
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
    <section id="comic-details">
        <div class="small-container">
            <div class="comic-details-box">
                <div class="talent">
                    <h3>
                        Talent
                    </h3>
                    <ul>
                    <li>
                        <span class="detail-label">
                            Art by:
                        </span>
                        <span class="detail-data">
                            @foreach ($comic['artists'] as $artist_name)
                                <a href="#">
                                    {{ $artist_name }}
                                </a>
                                {{ !$loop->last ? ',' : '' }}
                            @endforeach
                        </span>
                    </li>
                    <li>
                        <span class="detail-label">
                            Written by:
                        </span>
                        <span class="detail-data">
                            @foreach ($comic['writers'] as $writer_name)
                                <a href="#">
                                    {{ $writer_name }}
                                </a>
                                {{ !$loop->last ? ',' : '' }}
                            @endforeach
                        </span>
                    </li>
                </ul>
                </div>
                <div class="specs">
                    <h3>
                        Specs
                    </h3>
                    <ul>
                    <li>
                        <span class="detail-label">
                            Series:
                        </span>
                        <span class="detail-data">
                            <a href="#" class="uppercase">
                                {{ $comic['series'] }}
                            </a>
                        </span>
                    </li>
                    <li>
                        <span class="detail-label">
                            Price:
                        </span>
                        <span class="detail-data">
                            {{ $comic['price'] }}
                        </span>
                    </li>
                    <li>
                        <span class="detail-label">
                            On Sale Date:
                        </span>
                        <span class="detail-data">
                            {{ DateTime::createFromFormat('Y-m-d', $comic['sale_date'])->format('M d Y') }}
                        </span>
                    </li>
                </ul>
                </div>
            </div>
        </div>
    </section>
@endsection
