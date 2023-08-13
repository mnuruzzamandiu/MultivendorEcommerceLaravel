@extends('backend.admin.layouts.admin_master')
@section('page_title', 'Admin Dashboard')
@section('admin_master')
    <div class="page-header-breadcrumb d-md-flex d-block align-items-center justify-content-between">
        <h4 class="fw-medium mb-0">Ecommerce-Dashboard</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="javascript:void(0);" class="text-white-50">Dashboards</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Ecommerce</li>
        </ol>
    </div>
    <!-- Page Header Close -->
    <!-- Start::app-content -->
    <div class="main-content app-content">
        <div class="container-fluid">


            <div class="row">
                <div class="col-xxl-3 col-lg-3 col-sm-6">
                    <div class="card custom-card">
                        <div class="card-body">
                            <div class="flex-1 border-bottom-dashed">
                                <div class="d-flex align-items-center justify-content-between"> <span
                                        class="mb-0 flex-1 text-muted fw-semibold">Total Projects</span>
                                    <div class="ms-2"> <span class="avatar bg-info-transparent text-info"><i
                                                class="bx bx-briefcase fs-20"></i></span> </div>
                                </div>
                                <h3 class="mb-0">676,90</h3>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-lg-3 col-sm-6">
                    <div class="card custom-card">
                        <div class="card-body">
                            <div class="flex-1 border-bottom-dashed">
                                <div class="d-flex align-items-center justify-content-between"> <span
                                        class="mb-0 flex-1 text-muted fw-semibold">Pending Projects</span>
                                    <div class="ms-2"> <span class="avatar bg-pink-transparent text-pink"><i
                                                class="bx bx-book-open fs-20"></i></span> </div>
                                </div>
                                <h3 class="mb-0">406,90</h3>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-lg-3 col-sm-6">
                    <div class="card custom-card">
                        <div class="card-body">
                            <div class="flex-1 border-bottom-dashed">
                                <div class="d-flex align-items-center justify-content-between"> <span
                                        class="mb-0 flex-1 text-muted fw-semibold">New Projects</span>
                                    <div class="ms-2"> <span class="avatar bg-warning-transparent text-warning"><i
                                                class="bx bx-folder-plus fs-20"></i></span> </div>
                                </div>
                                <h3 class="mb-0">716,80</h3>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-lg-3 col-sm-6">
                    <div class="card custom-card">
                        <div class="card-body">
                            <div class="flex-1 border-bottom-dashed">
                                <div class="d-flex align-items-center justify-content-between"> <span
                                        class="mb-0 flex-1 text-muted fw-semibold">Completed Projects</span>
                                    <div class="ms-2"> <span class="avatar bg-teal-transparent text-teal"><i
                                                class="bx bx-compass fs-20"></i></span> </div>
                                </div>
                                <h3 class="mb-0">536,80</h3>
                                <div class="flex-between"> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End::row-1 -->
            <!-- Start:: row-2 -->
            <div class="row">
                <div class="col-xl-12">
                    <div class="card custom-card">
                        <div class="card-header justify-content-between">
                            <div class="card-title">Order Summary</div>
                            <div class="d-flex">
                                <div class="me-3">
                                    <input class="form-control form-control-sm" type="text" placeholder="Search Here"
                                        aria-label=" example" />
                                </div>
                                <div class="dropdown">
                                    <a href="javascript:void(0);"
                                        class="btn btn-sm btn-primary btn-wave waves-effect waves-light"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        Sort By<i class="ri-arrow-down-s-line align-middle ms-1 d-inline-block"></i>
                                    </a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li>
                                            <a class="dropdown-item" href="javascript:void(0);">New</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="javascript:void(0);">Popular</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="javascript:void(0);">Relevant</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table text-nowrap table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">Product Name</th>
                                            <th scope="col">Transaction Id</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Payment method</th>
                                            <th scope="col">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="me-2 lh-1">
                                                        <span class="avatar avatar-sm">
                                                            <img src="{{ asset('contents/backend/admin') }}/assets/images/2.jpg"
                                                                alt="" class="rounded-1" />
                                                        </span>
                                                    </div>
                                                    <div class="fs-14">Black colored Headset</div>
                                                </div>
                                            </td>
                                            <td><span class="fw-semibold">#1234-4567</span></td>
                                            <td>$1,299.99</td>
                                            <td><span class="">02-03-2023</span></td>
                                            <td><span class="">Cash On Delivery</span></td>
                                            <td>
                                                <span class="badge bg-success-transparent">Delivered</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="me-2 lh-1">
                                                        <span class="avatar avatar-sm">
                                                            <img src="{{ asset('contents/backend/admin') }}/assets/images/2.jpg"
                                                                alt="" class="rounded-1" />
                                                        </span>
                                                    </div>
                                                    <div class="fs-14">Small alaram watch</div>
                                                </div>
                                            </td>
                                            <td><span class="fw-semibold">#1902-9883</span></td>
                                            <td>$99.99</td>
                                            <td><span class="">02-03-2023</span></td>
                                            <td><span class="">Cash On Delivery</span></td>
                                            <td>
                                                <span class="badge bg-danger-transparent">Canceld</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="me-2 lh-1">
                                                        <span class="avatar avatar-sm">
                                                            <img src="{{ asset('contents/backend/admin') }}/assets/images/2.jpg"
                                                                alt="" class="rounded-1" />
                                                        </span>
                                                    </div>
                                                    <div class="fs-14">Beautiful flower Frame</div>
                                                </div>
                                            </td>
                                            <td><span class="fw-semibold">#1962-9033</span></td>
                                            <td>$199.99</td>
                                            <td><span class="">03-02-2023</span></td>
                                            <td><span class="">Cash On Delivery</span></td>
                                            <td>
                                                <span class="badge bg-primary-transparent">Shipped</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="me-2 lh-1">
                                                        <span class="avatar avatar-sm">
                                                            <img src="{{ asset('contents/backend/admin') }}/assets/images/2.jpg"
                                                                alt="" class="rounded-1" />
                                                        </span>
                                                    </div>
                                                    <div class="fs-14">Black colord lens cemara</div>
                                                </div>
                                            </td>
                                            <td><span class="fw-semibold">#8745-1232</span></td>
                                            <td>$79.00</td>
                                            <td><span class=""> 01-03-2023</span></td>
                                            <td><span class="">Online</span></td>
                                            <td>
                                                <span class="badge bg-warning-transparent">Pending</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="me-2 lh-1">
                                                        <span class="avatar avatar-sm">
                                                            <img src="{{ asset('contents/backend/admin') }}/assets/images/2.jpg"
                                                                alt="" class="rounded-1" />
                                                        </span>
                                                    </div>
                                                    <div class="fs-14">
                                                        Black colord Smart mobile phone
                                                    </div>
                                                </div>
                                            </td>
                                            <td><span class="fw-semibold">#1734-9743</span></td>
                                            <td>$199.99</td>
                                            <td><span class="">03-03-2023</span></td>
                                            <td><span class="">Online</span></td>
                                            <td>
                                                <span class="badge bg-success-transparent">Delivered</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="me-2 lh-1">
                                                        <span class="avatar avatar-sm">
                                                            <img src="{{ asset('contents/backend/admin') }}/assets/images/2.jpg"
                                                                alt="" class="rounded-1" />
                                                        </span>
                                                    </div>
                                                    <div class="fs-14">Sports Shooes for men</div>
                                                </div>
                                            </td>
                                            <td><span class="fw-semibold">#1802-9883</span></td>
                                            <td>$39.99</td>
                                            <td><span class="">02-03-2023</span></td>
                                            <td><span class="">Cash On Delivery</span></td>
                                            <td>
                                                <span class="badge bg-danger-transparent">Canceld</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="d-flex align-items-center">
                                <div>
                                    Showing 5 Entries
                                    <i class="bi bi-arrow-right ms-2 fw-semibold"></i>
                                </div>
                                <div class="ms-auto">
                                    <nav aria-label="Page navigation" class="pagination-style-4">
                                        <ul class="pagination mb-0">
                                            <li class="page-item disabled">
                                                <a class="page-link" href="javascript:void(0);">
                                                    Prev
                                                </a>
                                            </li>
                                            <li class="page-item active">
                                                <a class="page-link" href="javascript:void(0);">1</a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="javascript:void(0);">2</a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link text-primary" href="javascript:void(0);">
                                                    next
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End:: row-2 -->
        </div>
    </div>

@endsection
