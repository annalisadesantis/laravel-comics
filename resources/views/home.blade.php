@extends("layouts.app")
{{-- titolo --}}
@section("page-title", "Comics | DC")
{{-- contenuti --}}
@section("content")
    <section id="home">
        <div class="jumbtron">

        </div>
        <div class="comics">
            <div class="container">
                <small class="uppercase">
                    Current Series
                </small>
                <div class="comics-container">
                    @foreach ($comics as $comic)
                        <div class="comic">
                            <div class="comic-image">
                                <a href="#">
                                    <img src="{{ $comic['thumb']}}" alt="{{ $comic['series']}}">
                                </a>
                            </div>
                            <div class="comis-title">
                                <span class="uppercase">
                                    {{ $comic['series']}}
                                </span>
                            </div>
                        </div>
                    @endforeach
                    <button type="button" name="button" class="uppercase">
                        Load more
                    </button>
                </div>
            </div>
        </div>
    </section>
@endsection
