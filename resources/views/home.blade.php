@extends('layout.yeild')
@section('main')
    <div class="main">
        <div class="container ">
            <div class="row">
                <div class="mid text-center">
                    <div class="col-2 text-center ">
                        <h4 class="btn-blue">CURRENT COMIC</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="cont-main">
                    @foreach ($comics as $comic)
                        <div class="col-2 p-4">
                            <img src="{{ $comic['thumb'] }}" alt="">
                            <a href="{{ route('comics.show', ['comic' => $comic->id]) }}">
                                <p class="text-white">{{ $comic['title'] }}</p>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class=" d-flex bottone text-center">
            <a href="{{ route('comics.create') }}">
                <h4 class="btn-blue">LOAD MORE</h4>
            </a>
        </div>
    </div>
    </main>
@endsection
