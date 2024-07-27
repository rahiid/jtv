@extends('admin.admin_dashboard')

@section('uploadnews')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<div class="page-content">

<div class="row profile-body">


<div class="col-md-12 col-xl-12 middle-wrapper">
<div class="row">
<div class="card">
<div class="card-body">

<h6 class="card-title">News</h6>
<form class="forms-sample" method="POST" action="{{ route('action.news.upload') }}" enctype="multipart/form-data">

@csrf


<div class="mb-3">
<label for="exampleInputEmail1" class="form-label">PHOTO</label>
<input type="file" class="form-control" name="photo" id="photo">
</div>

<div class="mb-3">
<label for="headline" class="form-label">HEADLINE</label>
<input type="text" class="form-control" name="headline" id="headline" autocomplete="off">
</div>

<div class="mb-3">
<label for="article" class="form-label">ARTICLE</label>
<input type="text" class="form-control" name="article" id="article" autocomplete="off">
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
