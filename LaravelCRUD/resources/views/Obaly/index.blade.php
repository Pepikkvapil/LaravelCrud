@extends('obaly.layout')
@section('content')
    <div class="col-12 col-md-10 col-lg-8 offset-md-1 offset-lg-2">
        <div class="card">
            <div class="card-header h3">Databáze obalů</div>
            <div class="card-body">
                @if (\Session::has('flash_message'))
                    <div class="alert alert-success">
                        {!! \Session::get('flash_message') !!}
                    </div>
                @endif
                <a href="{{ url('/obaly/create') }}" class="btn btn-success btn-sm mb-3" title="Přidat obal">
                    <i class="fa fa-plus" aria-hidden="true"></i> Přidat nový
                </a>
                <table class="table table-striped w-100">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Název</th>
                        <th>Materiál</th>
                        <th>Velikost</th>
                        <th style="text-align: right">Možnosti</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($obaly as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->material }}</td>
                            <td>{{ $item->size }}</td>

                            <td style="text-align: right">
                                <a href="{{ url('/obaly/' . $item->id) }}" title="Zobrazit Obal"><button class="btn btn-success btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Zobrazit</button></a>
                                <a href="{{ url('/obaly/' . $item->id . '/edit') }}" title="Upravit Obal"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Upravit</button></a>

                                <form method="POST" action="{{ url('/obaly/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                    {{ method_field('DELETE') }}
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-danger btn-sm" title="Smazat Obal" onclick="return confirm('Opravdu chcete obal smazat ?')"><i class="fa fa-trash-o" aria-hidden="true"></i> Smazat</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
