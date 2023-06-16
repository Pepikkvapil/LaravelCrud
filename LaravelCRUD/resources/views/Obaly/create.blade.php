@extends('obaly.layout')
@section('content')
    <div class="col-12 col-md-6 col-lg-4 offset-md-3 offset-lg-4">
        <a href="{{ url('/obaly') }}" class="btn btn-dark btn-sm mb-3" title="Zpět">
            <i class="fa fa-arrow-left" aria-hidden="true"></i> Zpět
        </a>
        <div class="card">
            <div class="card-header h3">Přidání obalu</div>
            <div class="card-body">
                <form action="{{ url('obaly') }}" method="post">
                    {!! csrf_field() !!}
                    <div class="form-group mb-3">
                        <label for="name">Jméno</label>
                        <input type="text" name="name" id="name" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label for="material">Material</label>
                        <input type="text" name="material" id="material" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label for="size">Velikost</label>
                        <input type="text" name="size" id="size" class="form-control">
                    </div>
                    <div class="text-center">
                        <input type="submit" value="Uložit" class="btn btn-success">
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop
