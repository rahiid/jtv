@extends('admin.admin_dashboard')

@section('contactsdataview')

<div class="page-content">


    <div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
    <div class="card-body">
    <h1>CONTACT DATA</h1>
    <div class="table-responsive pt-3">

    <table class="table table-dark">

    <!-- DEMO DATA  -->
    <thead>
        <tr>
            <th>NAME</th>
            <th>EMAIL</th>
            <th>PHONE</th>
            <th>MESSAGE</th>
        </tr>
    </thead>
    <tbody>

        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td><a href="#" type="button" class="btn btn-danger">DELETE</a></td>
        </tr>

    </tbody>

    </table>

    </div>
    </div>
    </div>
    </div>
    </div>



    </div>



@endsection
