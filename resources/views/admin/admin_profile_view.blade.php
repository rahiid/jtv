@extends('admin.admin_dashboard')

@section('adminprofileview')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<div class="page-content">


<div class="row profile-body">
<div class="d-none d-md-block col-md-4 col-xl-4 left-wrapper">
<div class="card rounded">
<div class="card-body">
<div class="d-flex align-items-center justify-content-between mb-2">

<div>
<img class="wd-100 rounded-circle" src="{{ (!empty($profileData->photo)) ? url('images/admin_images/'.$profileData->photo) : url('images/no_image.jpg') }}" alt="profile">
<span class="h4 ms-3">{{ $profileData->name }}</span>
</div>
</div>

<div class="mt-3">
<label class="tx-11 fw-bolder mb-0 text-uppercase">USER NAME:</label>
<p class="text-muted">{{ $profileData->username }}</p>
</div>

<div class="mt-3">
<label class="tx-11 fw-bolder mb-0 text-uppercase">EMAIL:</label>
<p class="text-muted">{{ $profileData->email }}</p>
</div>

<div class="mt-3">
<label class="tx-11 fw-bolder mb-0 text-uppercase">PHONE:</label>
<p class="text-muted">{{ $profileData->phone }}</p>
</div>
</div>
</div>
</div>


<div class="col-md-8 col-xl-8 middle-wrapper">
<div class="row">
<div class="card">
<div class="card-body">

<h6 class="card-title">UPTADE YOUR PROFILE</h6>

<form class="forms-sample" method="POST" action="{{ route('admin.profile.store') }}" enctype="multipart/form-data">

@csrf

<div class="mb-3">
<label for="exampleInputUsername1" class="form-label">Username</label>
<input type="text" class="form-control" name="username" id="exampleInputUsername1" autocomplete="off" value="{{ $profileData->username}}">
</div>

<div class="mb-3">
<label for="exampleInputEmail1" class="form-label">Email address</label>
<input type="email" class="form-control" name="email" id="exampleInputUsername1" autocomplete="off" value="{{ $profileData->email}}">
</div>

<div class="mb-3">
<label for="exampleInputEmail1" class="form-label">Phone Number</label>
<input type="number" class="form-control" name="phone" id="exampleInputUsername1" autocomplete="off" value="{{ $profileData->phone}}">
</div>

<div class="mb-3">
<label for="exampleInputEmail1" class="form-label">Profile Photo</label>
<input type="file" class="form-control" name="photo" id="image">
</div>

<div class="mb-3">
<label for="exampleInputEmail1" class="form-label"></label>
<img id="showImage" class="wd-90 rounded-circle" src="{{ (!empty($profileData->photo)) ? url('images/admin_images/'.$profileData->photo) : url('images/no_image.jpg') }}" alt="profile">
</div>

<button type="submit" class="btn btn-primary me-2">SAVE CHANGES</button>

</form>

</div>
</div>
</div>
</div>
</div>
</div>

<script type="text/javascript">

$(document).ready(function(){
    $('#image').change(function(e){
        var reader = new FileReader();
        reader.onload = function(e){
            $('#showImage').attribute('src'.e.target.result);
        }
        reader.readAsDataURL(e.target.files['0']);
    });
});

</script>

@endsection
