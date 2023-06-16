@extends('obaly.layout')
@section('content')
    <div class="col-12 col-md-6 col-lg-4 offset-md-3 offset-lg-4">
        <a href="{{ url('/obaly') }}" class="btn btn-dark btn-sm mb-3" title="Zpět">
            <i class="fa fa-arrow-left" aria-hidden="true"></i> Zpět
        </a>
        <div class="card">
            <div class="card-header h3">Upravit obal</div>
            <div class="card-body">
                <form action="{{ url('obaly/' .$obaly->id) }}" method="post">
                    {!! csrf_field() !!}
                    @method("PATCH")
                    <div class="form-group mb-3">
                        <label for="name">Jméno</label>
                        <input type="text" name="name" id="name" value="{{$obaly->name}}" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label for="material">Material</label>
                        <input type="text" name="material" id="material" value="{{$obaly->material}}" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label for="size">Velikost</label>
                        <input type="text" name="size" id="size" value="{{$obaly->size}}" class="form-control">
                    </div>
                    <div class="text-center">
                        <input type="submit" value="Uložit" class="btn btn-success">
                    </div>
                    <input type="hidden" name="id" id="id" value="{{$obaly->id}}" />
                </form>
            </div>
        </div>
    </div>

@stop
