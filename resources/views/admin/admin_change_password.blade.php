@extends('admin.admin_dashboard')

@section('adminchangepassword')

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
        

<div class="mt-3 d-flex social-links">
<a href="javascript:;" class="btn btn-icon border btn-xs me-2"><i data-feather="github"></i></a>

<a href="javascript:;" class="btn btn-icon border btn-xs me-2"><i data-feather="twitter"></i></a>
          
<a href="javascript:;" class="btn btn-icon border btn-xs me-2"><i data-feather="instagram"></i></a>
        
</div>
</div>
</div>
</div>


<div class="col-md-8 col-xl-8 middle-wrapper">
<div class="row">
<div class="card">
<div class="card-body">

<h6 class="card-title">UPTADE ADMIN PASSWORD</h6>

<form class="forms-sample" method="POST" action="{{ route('admin.update.password') }}" enctype="multipart/form-data">
    
@csrf

<div class="mb-3">
<label for="exampleInputPassword1" class="form-label">Current Password</label>
<input type="password" class="form-control @error('old_password') is-invalid @enderror" name="old_password" id="old_password" autocomplete="off">
@error('old_password')
<span class="text-danger">{{ $message }}</spann>
@enderror
</div>

<div class="mb-3">
<label for="exampleInputPassword1" class="form-label">New Password</label>
<input type="password" class="form-control @error('new_password') is-invalid @enderror" name="new_password" id="new_password" autocomplete="off">
@error('new_password')
<span class="text-danger">{{ $message }}</spann>
@enderror
</div>

<div class="mb-3">
<label for="exampleInputPassword1" class="form-label">Confirm New Password</label>
<input type="password" name="new_password_confirmation" class="form-control"  id="new_password_confirmation" autocomplete="off">
</div>
									
<button type="submit" class="btn btn-primary me-2">SAVE CHANGES</button>

</form>

</div>
</div>
</div>
</div> 
</div>
</div>

@endsection