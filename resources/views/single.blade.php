@extends('layout.yeild')
@section('single')
    <div class="cont">
        <div class="container">
            <div class="row ">
                <div class="col-4">
                    <img src="{{ $comics['thumb'] }}" alt="">
                </div>
                <div class="col-6 p-3 ">
                    <h4 class="text-primary">TITLE:</h4>
                    <p class="text-white">{{ $comics['title'] }}</p>
                    <h4 class="text-primary">STORY:</h4>
                    <p class="text-white">{{ $comics['description'] }}</p>
                    <h4 class="text-primary">SERIES:</h4>
                    <p class="text-white">{{ $comics['series'] }}</p>
                    <h4 class="text-primary">SALES DATE:</h4>
                    <p class="text-white">{{ $comics['sale_date'] }}</p>
                </div>
                <div class="col-1 p-5">
                    <a href="{{ route('comics.index') }}">
                        <button class="btn btn-primary">HOME</button>
                    </a>
                </div>
                <div class="col-1 p-5">
                    <a href="{{ route('comics.edit', ['comic' => $comics->id]) }}">
                        <button class="btn btn-danger">EDIT</button>
                    </a>
                </div>
                <div class="col-1 p-5">
                    <form action="{{ route('comics.destroy', ['comic' => $comics->id]) }}" method="post"
                        onsubmit="return confirm('Confermi di voler eliminare questo comic')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-secondary">DELETE</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
