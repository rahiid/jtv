@extends('admin.admin_dashboard')

@section('uploadribbon')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<div class="page-content">


<div class="row profile-body">


    <div class="col-md-12 col-xl-12 middle-wrapper">
<div class="row">
<div class="card">
<div class="card-body">

<h6 class="card-title">Ribbon</h6>
<form class="forms-sample" method="POST" action="{{ route('action.ribbon.upload') }}" enctype="multipart/form-data">

@csrf



<div class="mb-3">
<label for="latest_news" class="form-label">LATEST NEWS</label>
<input type="text" class="form-control" name="latest_news" id="latest_news" autocomplete="off">
</div>

<button type="submit" class="btn btn-primary me-2">UPLOAD</button>

</form>

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif

</div>
</div>
</div>
</div>
</div>
</div>


@endsection
