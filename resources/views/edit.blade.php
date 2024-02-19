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
                                required>
                        </div>
                        <div class="form-group my-3">
                            <input type="text" name="description" id="description" class="form-control"
                                placeholder="Descrizione" required>
                        </div>
                        <div class="form-group my-3">
                            <input type="text" name="thumb" id="thumb" class="form-control" placeholder="Copertina"
                                required>
                        </div>
                        <div class="form-group my-3">
                            <input type="text" name="price" id="price" class="form-control" placeholder="Prezzo"
                                required>
                        </div>
                        <div class="form-group my-3">
                            <input type="text" name="series" id="series" class="form-control"
                                placeholder="Serie del Comic" required>
                        </div>
                        <div class="form-group my-3">
                            <input type="text" name="sale_date" id="sale_date" class="form-control" placeholder="Data"
                                required>
                        </div>
                        <div class="form-group my-3">
                            <input type="text" name="type" id="type" class="form-control" placeholder="Tipo"
                                required>
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
