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
                                            @if (session('status'))
                                                <div class="alert alert-success" role="alert">
                                                    {{ sesion('status') }}
                                                </div>
                                            @elseif (session('error'))
                                                <div class="alert alert-danger" role="alert">
                                                    {{ session('error') }}
                                                </div>
                                            @endif

                                            <div class=" align-items-top justify-content-between">
                                                <div>
                                                    <form action="{{ route('admin.change_password.update') }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('put')
                                                        <div class="mb-2">
                                                            <label for="current-password" class="form-label">Current
                                                                Password</label>
                                                            <input type="password"
                                                                class="form-control @error('current_password') is-invalid @enderror"
                                                                name="current_password" id="current_password">
                                                            @error('current_password')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                        <div class="mb-2">
                                                            <label for="new-password" class="form-label">New
                                                                Password</label>
                                                            <input type="password" name="new_password"
                                                                class="form-control @error('new_password') is-invalid @enderror"
                                                                id="new_password" placeholder="New Password">
                                                            @error('new_password')
                                                                <span class="text-danger"> {{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                        <div class="mb-0">
                                                            <label for="confirm-password" class="form-label">Confirm
                                                                Password</label>
                                                            <input type="password" class="form-control"
                                                                name="new_password_confirmation"
                                                                id="new_password_confirmation"
                                                                placeholder="Confirm PAssword">
                                                        </div>
                                                        <div class="col-xl-6 mt-3">
                                                            <button class="btn btn-primary" type="submit">Update</button>
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
                </div>
            </div>
        </div>
    </div>
@endsection
