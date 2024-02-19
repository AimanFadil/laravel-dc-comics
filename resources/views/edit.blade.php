@extends('layout.yeild')


@section('edit')
    <div class="container p-4">
        <div class="row">
            <div class="col-12">
                <div class="form-container">
                    <h3>MODIFICA IL COMIC</h3>
                    <form action="{{ route('comics.store') }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="form-group my-3">
                            <input type="text" name="title" id="title" class="form-control" placeholder="Titolo Comic"
                                required value="{{ $comics->title }}">
                        </div>
                        <div class="form-group my-3">
                            <input type="text" name="description" id="description" class="form-control"
                                placeholder="Descrizione" value="{{ $comics->description }}" required>
                        </div>
                        <div class="form-group my-3">
                            <input type="text" name="thumb" id="thumb" class="form-control" placeholder="Copertina"
                                value="{{ $comics->thumb }}" required>
                        </div>
                        <div class="form-group my-3">
                            <input type="text" name="price" id="price" class="form-control" placeholder="Prezzo"
                                value="{{ $comics->price }}" required>
                        </div>
                        <div class="form-group my-3">
                            <input type="text" name="series" id="series" class="form-control"
                                value="{{ $comics->series }}" placeholder="Serie del Comic" required>
                        </div>
                        <div class="form-group my-3">
                            <input type="text" name="sale_date" id="sale_date" class="form-control" placeholder="Data"
                                value="{{ $comics->sale_date }}" required>
                        </div>
                        <div class="form-group my-3">
                            <input type="text" name="type" id="type" class="form-control" placeholder="Tipo"
                                value="{{ $comics->type }}" required>
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
