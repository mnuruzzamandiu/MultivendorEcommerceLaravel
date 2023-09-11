@extends('backend.admin.layouts.admin_master')
@section('page_title', 'Admin Change Password')
@section('admin_master')
    {{-- <div class="page-header-breadcrumb d-md-flex d-block align-items-center justify-content-between">
        <h4 class="fw-medium mb-0">User Profile</h4>

    </div> --}}
    <div class="main-content app-content">
        <div class="container"> <!-- Start::row-1 -->
            <div class="card custom-card">
                <div class="card-header">
                    <div class="card-title">Change Password </div>
                </div>
                <div class="card-body">
                    <div class="row">

                        <div class="col-xl-9 col-lg-8">


                            <div class="row">
                                <div class="col-xl-7 col-lg-7">
                                    <div class="card custom-card shadow-none mb-xl-0">
                                        <div class="card-body">


                                            <div class=" align-items-top justify-content-between">
                                                <div>

                                                    <div class="mb-2"> <label for="current-password"
                                                            class="form-label">Current Password</label> <input
                                                            type="text" class="form-control" id="current-password"
                                                            placeholder="Current Password">
                                                    </div>
                                                    <div class="mb-2"> <label for="new-password" class="form-label">New
                                                            Password</label> <input type="text" class="form-control"
                                                            id="new-password" placeholder="New Password"> </div>
                                                    <div class="mb-0"> <label for="confirm-password"
                                                            class="form-label">Confirm Password</label> <input
                                                            type="text" class="form-control" id="confirm-password"
                                                            placeholder="Confirm PAssword">
                                                    </div>
                                                    <div class="col-xl-6 mt-3">
                                                        <button class="btn btn-primary" type="submit">Update</button>
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
