@extends('layout.yeild')


@section('create')
    <div class="container p-4">
        <div class="row">
            <div class="col-12">
                <div class="form-container">
                    <h3>CREA UN NUOVO COMIC</h3>
                    <form action="{{ route('comics.store') }}" method="post">
                        @csrf

                        <div class="form-group my-3">
                            <input type="text" name="title" id="title" class="form-control" placeholder="Titolo Comic"
                                required value="{{ old('title') }}">
                            @error('title')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group my-3">
                            <input type="text" name="description" id="description" class="form-control"
                                placeholder="Descrizione" required value="{{ old('description') }}">
                            @error('description')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group my-3">
                            <input type="text" name="thumb" id="thumb" class="form-control" placeholder="Copertina"
                                required value="{{ old('thumb') }}">
                            @error('thumb')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group my-3">
                            <input type="text" name="price" id="price" class="form-control" placeholder="Prezzo"
                                required value="{{ old('price') }}">
                            @error('price')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group my-3">
                            <input type="text" name="series" id="series" class="form-control"
                                placeholder="Serie del Comic" required value="{{ old('series') }}">
                            @error('series')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group my-3">
                            <input type="text" name="sale_date" id="sale_date" class="form-control" placeholder="Data"
                                required value="{{ old('sale_date') }}">
                            @error('sale_date')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group my-3">
                            <input type="text" name="type" id="type" class="form-control" placeholder="Tipo"
                                required value="{{ old('type') }}">
                            @error('type')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group my-3">
                            <input type="submit" class="btn btn-success" value="INVIA">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
