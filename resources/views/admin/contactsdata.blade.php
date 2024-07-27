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
            <th>OPTION</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($contacts as $contact)
        <tr>
            <td>{{$contact->name}}</td>
            <td>{{$contact->email}}</td>
            <td>{{$contact->number}}</td>
            <td>{{$contact->message}}</td>
            <td><a href="{{ route('admin.contactsdata.delete', ['id' => $contact->id]) }}" type="button" class="btn btn-danger">DELETE</a></td>
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
