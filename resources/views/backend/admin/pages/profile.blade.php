@extends('backend.admin.layouts.admin_master')
@section('page_title', 'Admin Dashboard')
@section('admin_master')
    {{-- <div class="page-header-breadcrumb d-md-flex d-block align-items-center justify-content-between">
        <h4 class="fw-medium mb-0">User Profile</h4>

    </div> --}}
    <div class="main-content app-content">
        <div class="container"> <!-- Start::row-1 -->
            <div class="card custom-card">
                <div class="card-header">
                    <div class="card-title">User Profile </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-xl-3 col-lg-4">
                            <nav class="nav nav-tabs flex-column nav-style-5" role="tablist"> <a class="nav-link active"
                                    data-bs-toggle="tab" role="tab" aria-current="page" href="#personal-info"
                                    aria-selected="true"><i class="bx bx-cog me-2 fs-18 align-middle"></i>
                                    Account Settings</a> <a class="nav-link mt-3" data-bs-toggle="tab" role="tab"
                                    aria-current="page" href="#account-settings" aria-selected="false" tabindex="-1"><i
                                        class="bx bx-coin-stack me-2 fs-18 align-middle"></i>Change Password</a> </nav>
                        </div>
                        <div class="col-xl-9 col-lg-8">
                            <div class="tab-content mt-4 mt-lg-0">
                                <div class="tab-pane text-muted active show" id="personal-info" role="tabpanel">
                                    <div class="p-sm-3">

                                        <div class="mb-4 d-sm-flex align-items-center">
                                            <div class="mb-0 me-sm-5 d-sm-flex align-items-center"> <span
                                                    class="avatar avatar-xxl "> <img
                                                        src="{{ (!empty($adminData->photo) ? url('uploads/admin/'.$adminData->photo) : url('uploads/avatar.png'))  }}"
                                                        alt="" id="preview-image">
                                                    <a href="javascript:void(0);"
                                                        class="badge rounded-pill bg-primary avatar-badge"> <input
                                                            type="file" name="photo"
                                                            class="position-absolute w-100 h-100 op-0" id="image">
                                                        <i class="fe fe-camera"></i> </a>
                                                </span>
                                                <div class="ms-sm-3">
                                                    <h5 class="text-dark mb-1">{{ $adminData->name }}</h5>
                                                    <p class="text-muted mb-0"> <span
                                                            class=" me-2">Email:</span><span>{{ $adminData->email }}</span>
                                                    </p>
                                                    <p class="text-muted mb-0"> <span
                                                            class="">Address:</span><span>{{ $adminData->address }}</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row gy-4 mb-4">
                                            <div class="col-xl-6">
                                                <label for="user-name" class="form-label">User
                                                    Name</label>
                                                <input type="text" class="form-control"
                                                    value="{{ $adminData->userName }}" id="user-name"
                                                    placeholder="User
                                                    Name"
                                                    disabled>
                                            </div>
                                            <div class="col-xl-6">
                                                <label for="full-name" class="form-label">Full
                                                    Name</label>
                                                <input type="text" class="form-control"
                                                    value="{{ $adminData->userName }}" id="full-name"
                                                    placeholder="full-name">
                                            </div>
                                            <div class="col-xl-6">
                                                <label for="email" class="form-label">Email
                                                </label>
                                                <input type="email" value="{{ $adminData->email }}" class="form-control"
                                                    id="email" placeholder="Email">
                                            </div>
                                            <div class="col-xl-6">
                                                <label for="Phone" class="form-label">Phone
                                                </label>
                                                <input type="text" value="{{ $adminData->phone }}" class="form-control"
                                                    id="Phone" placeholder="Phone">
                                            </div>
                                            <div class="col-xl-12">
                                                <label for="address" class="form-label">Address
                                                </label>
                                                <textarea class="form-control" name="" id="address" rows="2">{{ $adminData->address }}</textarea>
                                            </div>
                                            <div class="col-xl-6">
                                                <button class="btn btn-primary" type="submit">Update</button>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                                <div class="tab-pane" id="account-settings" role="tabpanel">
                                    <div class="row">
                                        <div class="col-xl-7 col-lg-7">
                                            <div class="card custom-card shadow-none mb-xl-0">
                                                <div class="card-body">


                                                    <div class=" align-items-top justify-content-between">
                                                        <div>

                                                            <div class="mb-2"> <label for="current-password"
                                                                    class="form-label">Current Password</label> <input
                                                                    type="text" class="form-control"
                                                                    id="current-password" placeholder="Current Password">
                                                            </div>
                                                            <div class="mb-2"> <label for="new-password"
                                                                    class="form-label">New Password</label> <input
                                                                    type="text" class="form-control" id="new-password"
                                                                    placeholder="New Password"> </div>
                                                            <div class="mb-0"> <label for="confirm-password"
                                                                    class="form-label">Confirm Password</label> <input
                                                                    type="text" class="form-control"
                                                                    id="confirm-password" placeholder="Confirm PAssword">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
<script type="text/javascript">
    $('#image').change(function(){

    let reader = new FileReader();
    reader.onload = (e) => {
      $('#preview-image').attr('src', e.target.result);
    }
    reader.readAsDataURL(this.files[0]);
  

   });
  </script>
@endpush
