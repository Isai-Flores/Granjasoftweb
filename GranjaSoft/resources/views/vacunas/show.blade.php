@extends('adminlte::layouts.app')

@section('main-content')
    <div class="container">
        <div class="row">

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Vacuna {{ $vacuna->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/vacunas') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/vacunas/' . $vacuna->id . '/edit') }}" title="Edit Vacuna"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('vacunas' . '/' . $vacuna->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Vacuna" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $vacuna->id }}</td>
                                    </tr>
                                    <tr><th> Animal Id </th><td> {{ $vacuna->animal_id }} </td></tr><tr><th> Nombre </th><td> {{ $vacuna->nombre }} </td></tr><tr><th> Tipo </th><td> {{ $vacuna->tipo }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
