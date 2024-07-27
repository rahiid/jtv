@extends('admin.admin_dashboard')

@section('ribbondataview')

<div class="page-content">


    <div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
    <div class="card-body">
    <h1>RIBBON DATA</h1>
    <div class="table-responsive pt-3">
    <table class="table table-dark">

    <!-- DEMO DATA  -->
    <thead>
        <tr>
            <th>ID</th>
            <th>LATEST NEWS</th>            
            <th>OPTION</th>
        </tr>
    </thead>
    
    <tbody>
        @foreach ($ribbon as $ribbon)
        <tr>
            <td>{{ $ribbon->id }}</td>
            <td>{{ $ribbon->latest_news }}</td>
            <td><a href="#" type="button" class="btn btn-danger">DELETE</a></td>
        </tr>
        @endforeach
    </tbody>

    </table>

    </div>
    </div>
    </div>
    </div>
    </div>



    </div>


@endsection
