@extends('admin.admin_dashboard')

@section('teamdataview')

<div class="page-content">


    <div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
    <div class="card-body">
    <h1>TEAM DATA</h1>
    <div class="table-responsive pt-3">

    <a href="{{ route('admin.team') }}" type="button" class="btn btn-success">ADD NEW TEAM MEMBER</a>
    <br><br>

    <table class="table table-dark">

    <!-- DEMO DATA  -->
    <thead>
        <tr>
            <th>IMAGE</th>
            <th>NAME</th>
            <th>POSITION</th>
            <th>STATUS</th>
            <th>OPTION</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($team as $team)
        <tr>
            <td><img src="{{ (!empty($team->photo)) ? url('images/team_images/'.$team->photo) : url('images/no_image.jpg') }}" alt="image"></td>
            <td>{{ $team->name }}</td>
            <td>{{ $team->position }}</td>
            <td>{{ $team->status }}</td>
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
