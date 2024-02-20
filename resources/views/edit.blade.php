@extends('layout.yeild')


@section('edit')
    <div class="container p-4">
        <div class="row">
            <div class="col-12">
                <div class="form-container">
                    <h3>MODIFICA IL COMIC</h3>
                    <form action="{{ route('comics.update', $comics->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="form-group my-3">
                            <input type="text" name="title" id="title" class="form-control" placeholder="Titolo Comic"
                                required value="{{ old('title') ?? $comics->title }}">
                            @error('title')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror

                        </div>
                        <div class="form-group my-3">
                            <input type="text" name="description" id="description" class="form-control"
                                placeholder="Descrizione" value="{{ old('description') ?? $comics->description }}" required>
                            @error('description')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group my-3">
                            <input type="text" name="thumb" id="thumb" class="form-control" placeholder="Copertina"
                                value="{{ old('thumb') ?? $comics->thumb }}" required>
                            @error('thumb')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group my-3">
                            <input type="text" name="price" id="price" class="form-control" placeholder="Prezzo"
                                value="{{ old('price') ?? $comics->price }}" required>
                            @error('price')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group my-3">
                            <input type="text" name="series" id="series" class="form-control"
                                value="{{ old('series') ?? $comics->series }}" placeholder="Serie del Comic" required>
                            @error('series')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group my-3">
                            <input type="text" name="sale_date" id="sale_date" class="form-control" placeholder="Data"
                                value="{{ old('sale_date') ?? $comics->sale_date }}" required>
                            @error('sale_date')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group my-3">
                            <input type="text" name="type" id="type" class="form-control" placeholder="Tipo"
                                value="{{ old('type') ?? $comics->type }}" required>
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
