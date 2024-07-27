@extends('admin.admin_dashboard')

@section('newsdataview')

<div class="page-content">


    <div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
    <div class="card-body">
    <h1>NEWS DATA</h1>
    <div class="table-responsive pt-3">

    <a href="{{ route('admin.news') }}" type="button" class="btn btn-success">UPLOAD NEWS</a>
    <br><br>

    <table class="table table-dark">

    <!-- DEMO DATA  -->
    <thead>
        <tr>
            <th>IMAGE</th>
            <th>HEADLINE</th>
            <th>DESCRIPTION</th>
            <th>OPTION</th>
        </tr>
    </thead>
    <tbody>

        @foreach ($news as $news)
        <tr>
            <td><img src="{{ (!empty($news->photo)) ? url('images/news_images/'.$news->photo) : url('images/no_image.jpg') }}" alt="image"></td>
            <td>{{ $news->headline }}</td>
            <td>{{ $news->article }}</td>
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
