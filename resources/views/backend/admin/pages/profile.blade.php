@extends('backend.admin.layouts.admin_master')
@section('page_title', 'Admin Dashboard')
@section('admin_master')
    {{-- <div class="page-header-breadcrumb d-md-flex d-block align-items-center justify-content-between">
        <h4 class="fw-medium mb-0">User Profile</h4>

    </div> --}}
    <div class="main-content app-content">
        <div class="container-fluid"> <!-- Start::row-1 -->
           <div class="row" style="margin-top: 80px">
            <div class="col-xxl-12 col-lg-12">
                <div class="card custom-card overflow-hidden">
                    <div class="card-body d-sm-flex align-items-top p-4   main-profile-cover">
                        <p class="avatar avatar-xxl avatar-rounded online me-3 my-auto"> <img
                                src="{{ asset('contents/backend/admin') }}/assets/images/faces/5.jpg" alt=""> </p>
                        <div class="flex-fill main-profile-info my-auto">
                            <h5 class="fw-semibold mb-1 ">Json Taylor</h5>
                            <div>
                                <p class="mb-1 text-muted">Chief Executive Officer (C.E.O)</p>
                                <div class="fs-12 op-7 mb-0 d-flex">
                                    <p class="me-3 mb-0"><i
                                            class="ri-building-line me-1 align-middle d-inline-flex"></i>Georgia</p>
                                    <p class="mb-0"><i
                                            class="ri-map-pin-line me-1 align-middle d-inline-flex"></i>Washington D.C
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="main-profile-info ms-auto">
                            <div class="">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex mb-0 ms-auto">
                                        <div class="me-4">
                                            <p class="fw-bold fs-20  text-shadow mb-0">113</p>
                                            <p class="mb-0 fs-12 text-muted ">Projects</p>
                                        </div>
                                        <div class="me-4">
                                            <p class="fw-bold fs-20  text-shadow mb-0">12.2k</p>
                                            <p class="mb-0 fs-12 text-muted ">Followers</p>
                                        </div>
                                        <div class="">
                                            <p class="fw-bold fs-20  text-shadow mb-0">128</p>
                                            <p class="mb-0 fs-12 text-muted ">Following</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-0  mt-2 text-end"> <button type="button"
                                    class="btn btn-secondary btn-sm btn-wave waves-effect waves-light"><i
                                        class="ri-add-line me-1 align-middle"></i>Follow</button> </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-lg-4">
                <div class="card custom-card">
                    <div class="">
                        <div class="p-4 border-bottom border-block-end-dashed">
                            <div>
                                <p class="fs-15 mb-2 fw-semibold">Profile Status :</p>
                                <p class="fw-semibold mb-2">Profile 60% completed - <a href="javscript:void(0);"
                                        class="text-primary fs-12">Finish now</a></p>
                                <div class="progress progress-sm progress-animate ">
                                    <div class="progress-bar bg-primary  ronded-1" role="progressbar" aria-valuenow="60"
                                        aria-valuemin="0" aria-valuemax="100" style="width: 60%"></div>
                                </div>
                            </div>
                        </div>
                        <div class="p-4 border-bottom border-block-end-dashed">
                            <div class="">
                                <p class="fs-15 mb-2 fw-semibold">Professional Bio :</p>
                                <p class="fs-12 text-muted op-7 mb-0"> I am <b class="text-default">Sonya Taylor,</b>
                                    here by conclude that,i am the founder and managing director of the prestigeous
                                    company name laugh at all and acts as the cheif executieve officer of the company.
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae, repellendus
                                    rem rerum excepturi aperiam ipsam. </p>
                            </div>
                        </div>
                        <div class="p-4  border-bottom border-block-end-dashed">
                            <p class="fs-15 mb-2 me-4 fw-semibold">Personal Info :</p>
                            <ul class="list-group">
                                <li class="list-group-item border-0">
                                    <div class="d-flex flex-wrap align-items-center">
                                        <div class="me-2 fw-semibold"> Name : </div> <span
                                            class="fs-12 text-muted">Sonya Taylor</span>
                                    </div>
                                </li>
                                <li class="list-group-item border-0">
                                    <div class="d-flex flex-wrap align-items-center">
                                        <div class="me-2 fw-semibold"> Email : </div> <span
                                            class="fs-12 text-muted">sonyataylor231@gmail.com</span>
                                    </div>
                                </li>
                                <li class="list-group-item border-0">
                                    <div class="d-flex flex-wrap align-items-center">
                                        <div class="me-2 fw-semibold"> Phone : </div> <span
                                            class="fs-12 text-muted">+(555) 555-1234</span>
                                    </div>
                                </li>
                                <li class="list-group-item border-0">
                                    <div class="d-flex flex-wrap align-items-center">
                                        <div class="me-2 fw-semibold"> Designation : </div> <span
                                            class="fs-12 text-muted">C.E.O</span>
                                    </div>
                                </li>
                                <li class="list-group-item border-0">
                                    <div class="d-flex flex-wrap align-items-center">
                                        <div class="me-2 fw-semibold"> Age : </div> <span
                                            class="fs-12 text-muted">28</span>
                                    </div>
                                </li>
                                <li class="list-group-item border-0">
                                    <div class="d-flex flex-wrap align-items-center">
                                        <div class="me-2 fw-semibold"> Experience : </div> <span
                                            class="fs-12 text-muted">10 Years</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="p-4 border-bottom border-block-end-dashed">
                            <p class="fs-15 mb-2 me-4 fw-semibold">Contact Information :</p>
                            <div class="text-muted">
                                <p class="mb-3"> <span
                                        class="avatar avatar-sm avatar-rounded me-2 bg-info-transparent"> <i
                                            class="ri-mail-line align-middle fs-14"></i> </span>
                                    sonyataylor2531@gmail.com </p>
                                <p class="mb-3"> <span
                                        class="avatar avatar-sm avatar-rounded me-2 bg-warning-transparent"> <i
                                            class="ri-phone-line align-middle fs-14"></i> </span> +(555) 555-1234 </p>
                                <div class="d-flex">
                                    <p class="mb-0"> <span
                                            class="avatar avatar-sm avatar-rounded me-2 bg-success-transparent"> <i
                                                class="ri-map-pin-line align-middle fs-14"></i> </span> </p>
                                    <p class="mb-0"> MIG-1-11, Monroe Street, Georgetown, Washington D.C, USA,20071
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="p-4 border-bottom border-block-end-dashed">
                            <p class="fs-15 mb-2 me-4 fw-semibold">Skills :</p>
                            <div> <a href="javascript:void(0);"> <span class="badge bg-light text-muted m-1">Cloud
                                        computing</span> </a> <a href="javascript:void(0);"> <span
                                        class="badge bg-light text-muted m-1">Data analysis</span> </a> <a
                                    href="javascript:void(0);"> <span
                                        class="badge bg-light text-muted m-1">DevOps</span> </a> <a
                                    href="javascript:void(0);"> <span class="badge bg-light text-muted m-1">Machine
                                        learning</span> </a> <a href="javascript:void(0);"> <span
                                        class="badge bg-light text-muted m-1">Programming</span> </a> <a
                                    href="javascript:void(0);"> <span
                                        class="badge bg-light text-muted m-1">Security</span> </a> <a
                                    href="javascript:void(0);"> <span
                                        class="badge bg-light text-muted m-1">Python</span> </a> <a
                                    href="javascript:void(0);"> <span
                                        class="badge bg-light text-muted m-1">JavaScript</span> </a> <a
                                    href="javascript:void(0);"> <span
                                        class="badge bg-light text-muted m-1">Ruby</span> </a> <a
                                    href="javascript:void(0);"> <span
                                        class="badge bg-light text-muted m-1">PowerShell</span> </a> <a
                                    href="javascript:void(0);"> <span
                                        class="badge bg-light text-muted m-1">Statistics</span> </a> <a
                                    href="javascript:void(0);"> <span class="badge bg-light text-muted m-1">SQL</span>
                                </a> </div>
                        </div>
                        <div class="p-4 border-bottom border-block-end-dashed d-flex align-items-center">
                            <p class="fs-15 mb-2 me-4 fw-semibold">Social Networks :</p>
                            <div class="btn-list mb-0"> <button type="button" aria-label="button"
                                    class="btn btn-sm btn-icon btn-info-light btn-wave waves-effect waves-light"> <i
                                        class="ri-facebook-line"></i> </button> <button type="button"
                                    aria-label="button"
                                    class="btn btn-sm btn-icon btn-secondary-light btn-wave waves-effect waves-light">
                                    <i class="ri-twitter-line"></i> </button> <button type="button"
                                    aria-label="button"
                                    class="btn btn-sm btn-icon btn-warning-light btn-wave waves-effect waves-light"> <i
                                        class="ri-instagram-line"></i> </button> <button type="button"
                                    aria-label="button"
                                    class="btn btn-sm btn-icon btn-success-light btn-wave waves-effect waves-light"> <i
                                        class="ri-github-line"></i> </button> <button type="button"
                                    aria-label="button"
                                    class="btn btn-sm btn-icon btn-danger-light btn-wave waves-effect waves-light"> <i
                                        class="ri-youtube-line"></i> </button> </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-8 col-lg-8">
                <div class="card custom-card">
                    <div class="card-header">
                        <div class="card-title">User Profile </div>
                    </div>
                    <div class="card-body">


                                <div class="p-sm-3">
                                    <form action="{{ route('admin.profile.update') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('put')
                                        <div class="mb-4 d-sm-flex ">
                                            <div class="mb-0 me-sm-5 d-sm-flex"> <span class="avatar avatar-xxl "> <img
                                                        src="{{ !empty($adminData->photo) ? url('uploads/admin/' . $adminData->photo) : url('uploads/avatar.png') }}"
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
                                                <input type="text" class="form-control" value="{{ $adminData->userName }}"
                                                    name="userName" id="user-name"
                                                    placeholder="User
                                                        Name"
                                                    readonly>
                                            </div>
                                            <div class="col-xl-6">
                                                <label for="full-name" class="form-label">Full
                                                    Name</label>
                                                <input type="text" class="form-control" value="{{ $adminData->name }}"
                                                    id="full-name" placeholder="full-name" name="name">
                                            </div>
                                            <div class="col-xl-6">
                                                <label for="email" class="form-label">Email
                                                </label>
                                                <input type="email" value="{{ $adminData->email }}" class="form-control"
                                                    id="email" placeholder="Email" name="email">
                                            </div>
                                            <div class="col-xl-6">
                                                <label for="Phone" class="form-label">Phone
                                                </label>
                                                <input type="text" value="{{ $adminData->phone }}" class="form-control"
                                                    id="Phone" placeholder="Phone" name="phone">
                                            </div>
                                            <div class="col-xl-12">
                                                <label for="address" class="form-label">Address
                                                </label>
                                                <textarea class="form-control" name="address" id="address" rows="2">{{ $adminData->address }}</textarea>
                                            </div>
                                            <div class="col-xl-6">
                                                <button class="btn btn-primary" type="submit">Update</button>
                                            </div>

                                        </div>
                                    </form>
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
        $('#image').change(function() {

            let reader = new FileReader();
            reader.onload = (e) => {
                $('#preview-image').attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0]);


        });
    </script>
@endpush
