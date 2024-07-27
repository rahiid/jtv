@extends('admin.admin_dashboard')

@section('aboutdataview')

<div class="page-content">


    <div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
    <div class="card-body">
    <h1>ABOUT DATA</h1>
    <div class="table-responsive pt-3">
    <table class="table table-dark">

    <!-- DEMO DATA  -->
    <thead>
        <tr>
            <th>ID</th>
            <th>IMAGE</th>
            <th>HEADLINE</th>
            <th>DESCRIPTION</th>
            <th>OPTION</th>
        </tr>
    </thead>
    <tbody>

        @foreach ($about as $about)
        <tr>
            <td>{{$about->id}}</td>
            <td><img src="{{ (!empty($about->photo)) ? url('images/about_images/'.$about->photo) : url('images/no_image.jpg') }}" alt="image"></td>
            <td>{{ $about->headline }}</td>
            <td>{{ $about->description }}</td>
            <td><a href="{{ route('admin.about.delete', ['id' => $about->id]) }}" type="button" class="btn btn-danger">DELETE</a></td>
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
