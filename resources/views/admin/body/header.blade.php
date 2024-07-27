
<nav class="navbar">
				<a href="#" class="sidebar-toggler">
					<i data-feather="menu"></i>
				</a>
				<div class="navbar-content">
					<form class="search-form">
						<div class="input-group">
              <div class="input-group-text">
              </div>
						</div>
					</form>
					<ul class="navbar-nav">

            @php

            $id = Auth::user()->id;
            $profileData = App\User::find($id);
  
            @endphp

						<li class="nav-item dropdown">
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<img class="wd-30 ht-30 rounded-circle" src="{{ (!empty($profileData->photo)) ? url('images/admin_images/'.$profileData->photo) : url('images/no_image.jpg') }}" alt="profile">
							</a>
							<div class="dropdown-menu p-0" aria-labelledby="profileDropdown">
								<div class="d-flex flex-column align-items-center border-bottom px-5 py-3">
									<div class="mb-3">
                  <img class="wd-80 ht-80 rounded-circle" src="{{ (!empty($profileData->photo)) ? url('images/admin_images/'.$profileData->photo) : url('images/no_image.jpg') }}" alt="profile">
									</div>

                <ul class="list-unstyled p-1">
                  <li class="dropdown-item py-2">
                    <a href="{{ route('admin.profile')}}" class="text-body ms-0">
                      <i class="me-2 icon-md" data-feather="user"></i>
                      <span>View Profile</span>
                    </a>
                  </li>
                  <li class="dropdown-item py-2">
                    <a href="{{ route('admin.change.password')}}" class="text-body ms-0">
                      <i class="me-2 icon-md" data-feather="edit"></i>
                      <span>Change Password</span>
                    </a>
                  </li>
                  <li class="dropdown-item py-2">
                    <a class="text-body ms-0 " href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();"
                        {{ __('Logout') }} >
                      <i class="me-2 icon-md" data-feather="log-out"></i>
                      <span>Log Out</span>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                    </a>
                  </li>
                </ul>
							</div>
						</li>
					</ul>
				</div>
			</nav>
