@extends('obaly.layout')
@section('content')
    <div class="col-12 col-md-6 col-lg-4 offset-md-3 offset-lg-4">
        <a href="{{ url('/obaly') }}" class="btn btn-dark btn-sm mb-3" title="Zpět">
            <i class="fa fa-arrow-left" aria-hidden="true"></i> Zpět
        </a>
        <div class="card">
            <div class="card-header h3">Detail obalu</div>
            <div class="card-body">
                <table class="table table-striped">
                    <tbody>
                        <tr>
                            <th>Jméno: </th>
                            <td>{{ $obaly->name }}</td>
                        </tr>
                        <tr>
                            <th>Materiál: </th>
                            <td>{{ $obaly->material }}</td>
                        </tr>
                        <tr>
                            <th>Velikost: </th>
                            <td>{{ $obaly->size }}</td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
@stop
