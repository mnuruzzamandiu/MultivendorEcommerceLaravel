@extends('backend.admin.layouts.admin_master')
@section('page_title', 'Form Input')
@section('admin_master')

    <div class="main-content app-content">
        <div class="container-fluid"> <!-- Start::row-1 -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="row ">
                        <div class="col-lg-3 card-background">
                            <div class="card custom-card">
                                <div class="card-body">
                                    <div class="d-flex">
                                        <div>
                                            <p class="fw-medium mb-1 text-muted">Total Sales</p>
                                            <h3 class="mb-0">$18,645</h3>
                                        </div>
                                        <div class="avatar avatar-md br-4 bg-primary-transparent ms-auto"> <i
                                                class="bi bi-cart-check fs-20"></i> </div>
                                    </div>
                                    <div class="d-flex mt-2"> <span class="badge bg-primary-transparent rounded-pill">+24%
                                            <i class="fe fe-arrow-down"></i></span> <a href="javascript:void(0);"
                                            class="text-muted fs-11 ms-auto text-decoration-underline mt-auto">view more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 card-background">
                            <div class="card custom-card">
                                <div class="card-body">
                                    <div class="d-flex">
                                        <div>
                                            <p class="fw-medium mb-1 text-muted">Total Revenue</p>
                                            <h3 class="mb-0">$34,876</h3>
                                        </div>
                                        <div class="avatar avatar-md br-4 bg-secondary-transparent ms-auto"> <i
                                                class="bi bi-archive fs-20"></i> </div>
                                    </div>
                                    <div class="d-flex mt-2"> <span class="badge bg-success-transparent rounded-pill">+0.26%
                                            <i class="fe fe-arrow-down"></i></span> <a href="javascript:void(0);"
                                            class="text-muted fs-11 ms-auto text-decoration-underline mt-auto">view more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 card-background">
                            <div class="card custom-card">
                                <div class="card-body">
                                    <div class="d-flex">
                                        <div>
                                            <p class="fw-medium text-muted mb-1">Total Products</p>
                                            <h3 class="mb-0">26,231</h3>
                                        </div>
                                        <div class="avatar avatar-md br-4 bg-info-transparent ms-auto"> <i
                                                class="bi bi-handbag fs-20"></i> </div>
                                    </div>
                                    <div class="d-flex mt-2"> <span class="badge bg-danger-transparent rounded-pill">+06% <i
                                                class="fe fe-arrow-down"></i></span> <a href="javascript:void(0);"
                                            class="text-muted fs-11 ms-auto text-decoration-underline mt-auto">view more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 card-background">
                            <div class="card custom-card">
                                <div class="card-body">
                                    <div class="d-flex">
                                        <div>
                                            <p class="fw-medium mb-1 text-muted">Total Expenses</p>
                                            <h3 class="mb-0">$73,579</h3>
                                        </div>
                                        <div class="avatar avatar-md br-4 bg-warning-transparent ms-auto"> <i
                                                class="bi bi-currency-dollar fs-20"></i> </div>
                                    </div>
                                    <div class="d-flex mt-2"> <span class="badge bg-success-transparent rounded-pill">+10%
                                            <i class="fe fe-arrow-up"></i></span> <a href="javascript:void(0);"
                                            class="text-muted fs-11 ms-auto text-decoration-underline mt-auto">view more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div> <!-- ROW-1 -->
            <div class="row">
                <div class="col-xxl-3 col-xl-12">
                    <div class="row">
                        <div class="col-xxl-12 col-xl-6 col-lg-6">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">Recent Activity</div>
                                </div>
                                <div class="card-body">
                                    <ul class="task-list mb-0">
                                        <li class="">
                                            <div class=""> <i class="task-icon bg-primary"></i>
                                                <h6 class="fw-semibold mb-0">Task Finished</h6>
                                                <div class="flex-grow-1 d-flex align-items-center justify-content-between">
                                                    <div> <span class="fs-12 text-muted">Adam Berry finished task on <a
                                                                href="javascript:void(0)" class="fw-semibold text-primary">
                                                                AngularJS Template</a></span> </div>
                                                    <div class="min-w-fit-content ms-2 text-end">
                                                        <p class="mb-0 text-muted fs-11">09 July 2021</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="">
                                            <div class=""> <i class="task-icon bg-info"></i>
                                                <h6 class="fw-semibold mb-0">Task Overdue</h6>
                                                <div class="flex-grow-1 d-flex align-items-center justify-content-between">
                                                    <div> <span class="fs-12 text-muted">Petey Cruiser finished</span> <a
                                                            href="javascript:void(0)" class="fw-semibold text-info">
                                                            Integrated management</a> </div>
                                                    <div class="min-w-fit-content ms-2 text-end">
                                                        <p class="mb-0 text-muted fs-11">29 June 2021</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="">
                                            <div class=""> <i class="task-icon bg-warning"></i>
                                                <h6 class="fw-semibold mb-0">Task Finished</h6>
                                                <div class="flex-grow-1 d-flex align-items-center justify-content-between">
                                                    <div> <span class="fs-12 text-muted">Adam Berry finished task on</span>
                                                        <a href="javascript:void(0)" class="fw-semibold text-warning">
                                                            AngularJS Template</a> </div>
                                                    <div class="min-w-fit-content ms-2 text-end">
                                                        <p class="mb-0 text-muted fs-11">09 July 2021</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="">
                                            <div class=""> <i class="task-icon bg-success"></i>
                                                <h6 class="fw-semibold mb-0">Task Finished</h6>
                                                <div class="flex-grow-1 d-flex align-items-center justify-content-between">
                                                    <div> <span class="fs-12 text-muted">Adam Berry finished task on</span>
                                                        <a href="javascript:void(0)" class="fw-semibold text-success">
                                                            AngularJS Template</a> </div>
                                                    <div class="min-w-fit-content ms-2 text-end">
                                                        <p class="mb-0 text-muted fs-11">09 July 2021</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="mb-0">
                                            <div class=""> <i class="task-icon bg-secondary"></i>
                                                <h6 class="fw-semibold mb-0">New Comment</h6>
                                                <div class="flex-grow-1 d-flex align-items-center justify-content-between">
                                                    <div> <span class="fs-12 text-muted">Adam Berry finished task on</span>
                                                        <a href="javascript:void(0)" class="fw-semibold text-secondary">
                                                            Project Management</a> </div>
                                                    <div class="min-w-fit-content ms-2 text-end">
                                                        <p class="mb-0 text-muted fs-11">25 Aug 2021</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-12 col-xl-6 col-lg-6">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title"> Sales by Country </div>
                                    <div> <button type="button" class="btn btn-outline-light btn-sm">View All</button>
                                    </div>
                                </div>
                                <div class="card-body p-0">
                                    <div class="table-responsive">
                                        <table class="table text-nowrap mb-0">
                                            <thead>
                                                <tr>
                                                    <th scope="row" class="fw-semibold ps-4">Country</th>
                                                    <th scope="row" class="fw-semibold">Sales</th>
                                                    <th scope="row" class="fw-semibold">Bounce</th>
                                                </tr>
                                            </thead>
                                            <tbody class="top-selling">
                                                <tr>
                                                    <td class=" ps-4">
                                                        <div class="d-flex align-items-center"> <span
                                                                class="avatar avatar-md p-2 bg-light avatar-rounded"> <img
                                                                    src="../assets/images/flags/canada_flag.jpg"
                                                                    class="rounded-circle" alt=""> </span>
                                                            <div class="ms-2">
                                                                <p class="mb-0 fw-semibold">Canada</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td> <span class="fw-semibold">2500</span> </td>
                                                    <td><span
                                                            class="badge badge-sm bg-success-transparent text-success">24.4%</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class=" ps-4">
                                                        <div class="d-flex align-items-center"> <span
                                                                class="avatar avatar-md p-2 bg-light avatar-rounded"> <img
                                                                    src="../assets/images/flags/germany_flag.jpg"
                                                                    class="rounded-circle" alt=""> </span>
                                                            <div class="ms-2">
                                                                <p class="mb-0 fw-semibold">Germany</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td> <span class="fw-semibold">846</span> </td>
                                                    <td><span
                                                            class="badge badge-sm bg-danger-transparent text-danger">22.33%</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class=" ps-4">
                                                        <div class="d-flex align-items-center"> <span
                                                                class="avatar avatar-md p-2 bg-light avatar-rounded"> <img
                                                                    src="../assets/images/flags/mexico_flag.jpg"
                                                                    class="rounded-circle" alt=""> </span>
                                                            <div class="ms-2">
                                                                <p class="mb-0 fw-semibold">Mexico</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td> <span class="fw-semibold">1,024</span> </td>
                                                    <td><span
                                                            class="badge badge-sm bg-danger-transparent text-danger">14.8%</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class=" ps-4">
                                                        <div class="d-flex align-items-center"> <span
                                                                class="avatar avatar-md p-2 bg-light avatar-rounded"> <img
                                                                    src="../assets/images/flags/russia_flag.jpg"
                                                                    class="rounded-circle" alt=""> </span>
                                                            <div class="ms-2">
                                                                <p class="mb-0 fw-semibold">Russia</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td> <span class="fw-semibold">482</span> </td>
                                                    <td><span
                                                            class="badge badge-sm bg-success-transparent text-success">05.8%</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class=" ps-4 border-bottom-0">
                                                        <div class="d-flex align-items-center"> <span
                                                                class="avatar avatar-md p-2 bg-light avatar-rounded"> <img
                                                                    src="../assets/images/flags/us_flag.jpg"
                                                                    class="rounded-circle" alt=""> </span>
                                                            <div class="ms-2">
                                                                <p class="mb-0 fw-semibold">USA</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="border-bottom-0"> <span class="fw-semibold">1,410</span>
                                                    </td>
                                                    <td class="border-bottom-0"><span
                                                            class="badge badge-sm bg-danger-transparent text-danger">13.08%</span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-6  col-xl-12">
                    <div class="row">

                        <div class="col-xxl-12 col-xl-12">
                            <div class="card custom-card overflow-hidden">
                                <div class="card-header justify-content-between">
                                    <div class="card-title"> Top Selling Products </div>
                                    <div class="dropdown"> <a aria-label="anchor" href="javascript:void(0);"
                                            class="btn btn-outline-light btn-icons btn-sm text-muted my-1"
                                            data-bs-toggle="dropdown"> <i class="fe fe-more-vertical"></i> </a>
                                        <ul class="dropdown-menu mb-0">
                                            <li class="border-bottom"><a class="dropdown-item"
                                                    href="javascript:void(0);">Action</a></li>
                                            <li class="border-bottom"><a class="dropdown-item"
                                                    href="javascript:void(0);">Another action</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Something else
                                                    here</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="card-body p-0">
                                            <div class="table-responsive">
                                                <table class="table text-nowrap table-hover rounded-3 overflow-hidden">
                                                    <thead>
                                                        <tr>
                                                            <th scope="row" class="ps-4">Product Name</th>
                                                            <th scope="row">stock</th>
                                                            <th scope="row">Price</th>
                                                            <th scope="row">Sold</th>
                                                            <th scope="row">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class=" ps-4">
                                                                <div class="d-flex align-items-center">
                                                                    <div class="avatar avatar-sm me-2"> <img
                                                                            src="../assets/images/ecommerce/jpg/6.jpg"
                                                                            alt="avatar" class="rounded-1"> </div> <a
                                                                        href="product-details.html">Sports Shoes For
                                                                        Men</a>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="mt-sm-1 d-block"> <span
                                                                        class="badge bg-success-transparent text-success">In
                                                                        Stock</span> </div>
                                                            </td>
                                                            <td> $73.800</td>
                                                            <td>1,534</td>
                                                            <td>
                                                                <div class="g-2"> <a aria-label="anchor"
                                                                        class="btn  btn-primary-light btn-sm"
                                                                        data-bs-toggle="tooltip"
                                                                        data-bs-original-title="Edit"> <span
                                                                            class="ri-pencil-line fs-14"></span> </a> <a
                                                                        aria-label="anchor"
                                                                        class="btn btn-danger-light btn-sm ms-2"
                                                                        data-bs-toggle="tooltip"
                                                                        data-bs-original-title="Delete"> <span
                                                                            class="ri-delete-bin-7-line fs-14"></span>
                                                                    </a> </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class=" ps-4">
                                                                <div class="d-flex align-items-center">
                                                                    <div class="avatar avatar-sm me-2"> <img
                                                                            src="../assets/images/ecommerce/jpg/5.jpg"
                                                                            alt="avatar" class="rounded-1"> </div> <a
                                                                        href="product-details.html">Beautiful flower
                                                                        Frame</a>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="mt-sm-1 d-block"> <span
                                                                        class="badge bg-info-transparent text-info">Few-left</span>
                                                                </div>
                                                            </td>
                                                            <td> $73.800</td>
                                                            <td>4,987</td>
                                                            <td>
                                                                <div class="g-2"> <a aria-label="anchor"
                                                                        class="btn  btn-primary-light btn-sm"
                                                                        data-bs-toggle="tooltip"
                                                                        data-bs-original-title="Edit"> <span
                                                                            class="ri-pencil-line fs-14"></span> </a> <a
                                                                        aria-label="anchor"
                                                                        class="btn btn-danger-light btn-sm ms-2"
                                                                        data-bs-toggle="tooltip"
                                                                        data-bs-original-title="Delete"> <span
                                                                            class="ri-delete-bin-7-line fs-14"></span>
                                                                    </a> </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class=" ps-4">
                                                                <div class="d-flex align-items-center">
                                                                    <div class="avatar avatar-sm me-2"> <img
                                                                            src="../assets/images/ecommerce/jpg/3.jpg"
                                                                            alt="avatar" class="rounded-1"> </div> <a
                                                                        href="product-details.html">Small Alaram Watch</a>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="mt-sm-1 d-block"> <span
                                                                        class="badge bg-danger-transparent text-danger">Out
                                                                        Of Stock</span> </div>
                                                            </td>
                                                            <td> $13.800</td>
                                                            <td>87,875</td>
                                                            <td>
                                                                <div class="g-2"> <a aria-label="anchor"
                                                                        class="btn  btn-primary-light btn-sm"
                                                                        data-bs-toggle="tooltip"
                                                                        data-bs-original-title="Edit"> <span
                                                                            class="ri-pencil-line fs-14"></span> </a> <a
                                                                        aria-label="anchor"
                                                                        class="btn btn-danger-light btn-sm ms-2"
                                                                        data-bs-toggle="tooltip"
                                                                        data-bs-original-title="Delete"> <span
                                                                            class="ri-delete-bin-7-line fs-14"></span>
                                                                    </a> </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class=" ps-4">
                                                                <div class="d-flex align-items-center">
                                                                    <div class="avatar avatar-sm me-2"> <img
                                                                            src="../assets/images/ecommerce/jpg/4.jpg"
                                                                            alt="avatar" class="rounded-1"> </div> <a
                                                                        href="product-details.html">Black colord lens
                                                                        cemara</a>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="mt-sm-1 d-block"> <span
                                                                        class="badge bg-success-transparent text-success">In
                                                                        Stock</span> </div>
                                                            </td>
                                                            <td> $14.600</td>
                                                            <td>98,876</td>
                                                            <td>
                                                                <div class="g-2"> <a aria-label="anchor"
                                                                        class="btn  btn-primary-light btn-sm"
                                                                        data-bs-toggle="tooltip"
                                                                        data-bs-original-title="Edit"> <span
                                                                            class="ri-pencil-line fs-14"></span> </a> <a
                                                                        aria-label="anchor"
                                                                        class="btn btn-danger-light btn-sm ms-2"
                                                                        data-bs-toggle="tooltip"
                                                                        data-bs-original-title="Delete"> <span
                                                                            class="ri-delete-bin-7-line fs-14"></span>
                                                                    </a> </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class=" ps-4">
                                                                <div class="d-flex align-items-center">
                                                                    <div class="avatar avatar-sm me-2"> <img
                                                                            src="../assets/images/ecommerce/jpg/1.jpg"
                                                                            alt="avatar" class="rounded-1"> </div> <a
                                                                        href="product-details.html">Smart Phone</a>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="mt-sm-1 d-block"> <span
                                                                        class="badge bg-danger-transparent text-danger">Out
                                                                        Of Stock</span> </div>
                                                            </td>
                                                            <td> $13.800</td>
                                                            <td>87,875</td>
                                                            <td>
                                                                <div class="g-2"> <a aria-label="anchor"
                                                                        class="btn  btn-primary-light btn-sm"
                                                                        data-bs-toggle="tooltip"
                                                                        data-bs-original-title="Edit"> <span
                                                                            class="ri-pencil-line fs-14"></span> </a> <a
                                                                        aria-label="anchor"
                                                                        class="btn btn-danger-light btn-sm ms-2"
                                                                        data-bs-toggle="tooltip"
                                                                        data-bs-original-title="Delete"> <span
                                                                            class="ri-delete-bin-7-line fs-14"></span>
                                                                    </a> </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class=" ps-4">
                                                                <div class="d-flex align-items-center">
                                                                    <div class="avatar avatar-sm me-2"> <img
                                                                            src="../assets/images/ecommerce/jpg/2.jpg"
                                                                            alt="avatar" class="rounded-1"> </div> <a
                                                                        href="product-details.html"> Black colored
                                                                        Headset</a>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="mt-sm-1 d-block"> <span
                                                                        class="badge bg-info-transparent text-info">Few-left</span>
                                                                </div>
                                                            </td>
                                                            <td> $23.800</td>
                                                            <td>1,987</td>
                                                            <td>
                                                                <div class="g-2"> <a aria-label="anchor"
                                                                        class="btn  btn-primary-light btn-sm"
                                                                        data-bs-toggle="tooltip"
                                                                        data-bs-original-title="Edit"> <span
                                                                            class="ri-pencil-line fs-14"></span> </a> <a
                                                                        aria-label="anchor"
                                                                        class="btn btn-danger-light btn-sm ms-2"
                                                                        data-bs-toggle="tooltip"
                                                                        data-bs-original-title="Delete"> <span
                                                                            class="ri-delete-bin-7-line fs-14"></span>
                                                                    </a> </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-12">
                    <div class="row">
                        <div class="col-xxl-12 col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title"> Sales Value </div>
                                    <div class="dropdown"> <a href="javascript:void(0);"
                                            class="btn-outline-light btn btn-sm text-muted" data-bs-toggle="dropdown"
                                            aria-expanded="false"> View All<i
                                                class="ri-arrow-down-s-line align-middle ms-1"></i> </a>
                                        <ul class="dropdown-menu mb-0" role="menu">
                                            <li class="border-bottom"><a class="dropdown-item"
                                                    href="javascript:void(0);">Today</a></li>
                                            <li class="border-bottom"><a class="dropdown-item"
                                                    href="javascript:void(0);">This Week</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Last Week</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-body p-0">
                                    <div class="">
                                        <div class=" border-bottom">
                                            <div id="avgsales" style="min-height: 273.7px;">
                                                <div id="apexcharts5dw89ase"
                                                    class="apexcharts-canvas apexcharts5dw89ase apexcharts-theme-light"
                                                    style="width: 384px; height: 273.7px;"><svg id="SvgjsSvg1774"
                                                        width="384" height="273.70000000000005"
                                                        xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                        xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg"
                                                        xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                                        style="background: transparent;">
                                                        <g id="SvgjsG1776" class="apexcharts-inner apexcharts-graphical"
                                                            transform="translate(57.5, 0)">
                                                            <defs id="SvgjsDefs1775">
                                                                <clipPath id="gridRectMask5dw89ase">
                                                                    <rect id="SvgjsRect1778" width="277"
                                                                        height="295" x="-3" y="-1"
                                                                        rx="0" ry="0" opacity="1"
                                                                        stroke-width="0" stroke="none"
                                                                        stroke-dasharray="0" fill="#fff"></rect>
                                                                </clipPath>
                                                                <clipPath id="forecastMask5dw89ase"></clipPath>
                                                                <clipPath id="nonForecastMask5dw89ase"></clipPath>
                                                                <clipPath id="gridRectMarkerMask5dw89ase">
                                                                    <rect id="SvgjsRect1779" width="275"
                                                                        height="297" x="-2" y="-2"
                                                                        rx="0" ry="0" opacity="1"
                                                                        stroke-width="0" stroke="none"
                                                                        stroke-dasharray="0" fill="#fff"></rect>
                                                                </clipPath>
                                                            </defs>
                                                            <g id="SvgjsG1780" class="apexcharts-radialbar">
                                                                <g id="SvgjsG1781">
                                                                    <g id="SvgjsG1782" class="apexcharts-tracks">
                                                                        <g id="SvgjsG1783"
                                                                            class="apexcharts-radialbar-track apexcharts-track"
                                                                            rel="1">
                                                                            <path id="apexcharts-radialbarTrack-0"
                                                                                d="M 135.5 39.9310975609756 A 95.5689024390244 95.5689024390244 0 1 1 135.48332007998388 39.931099016573214"
                                                                                fill="none" fill-opacity="1"
                                                                                stroke="rgba(242,242,242,0.85)"
                                                                                stroke-opacity="1" stroke-linecap="butt"
                                                                                stroke-width="16.571621951219516"
                                                                                stroke-dasharray="0"
                                                                                class="apexcharts-radialbar-area"
                                                                                data:pathOrig="M 135.5 39.9310975609756 A 95.5689024390244 95.5689024390244 0 1 1 135.48332007998388 39.931099016573214">
                                                                            </path>
                                                                        </g>
                                                                    </g>
                                                                    <g id="SvgjsG1785">
                                                                        <g id="SvgjsG1790"
                                                                            class="apexcharts-series apexcharts-radial-series"
                                                                            seriesName="TotalxSales" rel="1"
                                                                            data:realIndex="0">
                                                                            <path id="SvgjsPath1791"
                                                                                d="M 135.5 39.9310975609756 A 95.5689024390244 95.5689024390244 0 1 1 44.60857258019006 165.0324149874199"
                                                                                fill="none" fill-opacity="0.85"
                                                                                stroke="rgba(142, 84, 233, 0.95)"
                                                                                stroke-opacity="1" stroke-linecap="butt"
                                                                                stroke-width="17.08414634146342"
                                                                                stroke-dasharray="0"
                                                                                class="apexcharts-radialbar-area apexcharts-radialbar-slice-0"
                                                                                data:angle="252" data:value="70"
                                                                                index="0" j="0"
                                                                                data:pathOrig="M 135.5 39.9310975609756 A 95.5689024390244 95.5689024390244 0 1 1 44.60857258019006 165.0324149874199">
                                                                            </path>
                                                                        </g>
                                                                        <circle id="SvgjsCircle1786"
                                                                            r="82.28309146341464" cx="135.5"
                                                                            cy="135.5"
                                                                            class="apexcharts-radialbar-hollow"
                                                                            fill="transparent"></circle>
                                                                        <g id="SvgjsG1787"
                                                                            class="apexcharts-datalabels-group"
                                                                            transform="translate(0, 0) scale(1)"
                                                                            style="opacity: 1;"><text id="SvgjsText1788"
                                                                                font-family="Helvetica, Arial, sans-serif"
                                                                                x="135.5" y="135.5"
                                                                                text-anchor="middle"
                                                                                dominant-baseline="auto"
                                                                                font-size="16px" font-weight="600"
                                                                                fill="rgba(142, 84, 233, 0.95)"
                                                                                class="apexcharts-text apexcharts-datalabel-label"
                                                                                style="font-family: Helvetica, Arial, sans-serif;">Total
                                                                                Sales</text><text id="SvgjsText1789"
                                                                                font-family="Helvetica, Arial, sans-serif"
                                                                                x="135.5" y="167.5"
                                                                                text-anchor="middle"
                                                                                dominant-baseline="auto"
                                                                                font-size="14px" font-weight="400"
                                                                                fill="#373d3f"
                                                                                class="apexcharts-text apexcharts-datalabel-value"
                                                                                style="font-family: Helvetica, Arial, sans-serif;">70%</text>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                            <line id="SvgjsLine1792" x1="0" y1="0"
                                                                x2="271" y2="0" stroke="#b6b6b6"
                                                                stroke-dasharray="0" stroke-width="1"
                                                                stroke-linecap="butt" class="apexcharts-ycrosshairs">
                                                            </line>
                                                            <line id="SvgjsLine1793" x1="0" y1="0"
                                                                x2="271" y2="0" stroke-dasharray="0"
                                                                stroke-width="0" stroke-linecap="butt"
                                                                class="apexcharts-ycrosshairs-hidden"></line>
                                                        </g>
                                                        <g id="SvgjsG1777" class="apexcharts-annotations"></g>
                                                    </svg>
                                                    <div class="apexcharts-legend"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-center">
                                            <div class="d-flex p-4 border-end">
                                                <div class="text-center">
                                                    <p class="mb-1 text-muted"> <i
                                                            class="bx bxs-circle text-primary fs-13  me-1"></i>Sale Items
                                                    </p>
                                                    <h5 class="mb-0">186,75.00 </h5>
                                                </div>
                                            </div>
                                            <div class="d-flex p-4">
                                                <div class="text-center">
                                                    <p class="mb-1 text-muted"> <i
                                                            class="bx bxs-circle text-primary text-opacity-25 fs-13  me-1"></i>Sale
                                                        Revenue</p>
                                                    <h5 class=" mb-0">$122,39 </h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-12 col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title"> Monthly Profits </div>
                                    <div class="dropdown"> <a href="javascript:void(0);"
                                            class="btn-outline-light btn btn-sm text-muted" data-bs-toggle="dropdown"
                                            aria-expanded="false"> View All<i
                                                class="ri-arrow-down-s-line align-middle ms-1"></i> </a>
                                        <ul class="dropdown-menu mb-0" role="menu">
                                            <li class="border-bottom"><a class="dropdown-item"
                                                    href="javascript:void(0);">Today</a></li>
                                            <li class="border-bottom"><a class="dropdown-item"
                                                    href="javascript:void(0);">This Week</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Last Week</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-body p-0">
                                    <div class="d-flex flex-wrap px-3 py-4 border-bottom">
                                        <div>
                                            <h4 class="mb-1 text-xl">$78,344</h4>
                                            <p class="text-muted mb-0">Total Profit Growth Of 85%</p>
                                        </div>
                                        <div class="ms-sm-auto">
                                            <div class="mt-2"> <span id="sparkline8" style="min-height: 50px;">
                                                    <div id="apexchartshpencidl"
                                                        class="apexcharts-canvas apexchartshpencidl apexcharts-theme-light"
                                                        style="width: 150px; height: 50px;"><svg id="SvgjsSvg2130"
                                                            width="150" height="50"
                                                            xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                                            xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg"
                                                            xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                                            style="background: transparent;">
                                                            <g id="SvgjsG2132"
                                                                class="apexcharts-inner apexcharts-graphical"
                                                                transform="translate(0, 0)">
                                                                <defs id="SvgjsDefs2131">
                                                                    <clipPath id="gridRectMaskhpencidl">
                                                                        <rect id="SvgjsRect2137" width="156"
                                                                            height="52" x="-3"
                                                                            y="-1" rx="0"
                                                                            ry="0" opacity="1"
                                                                            stroke-width="0" stroke="none"
                                                                            stroke-dasharray="0" fill="#fff"></rect>
                                                                    </clipPath>
                                                                    <clipPath id="forecastMaskhpencidl"></clipPath>
                                                                    <clipPath id="nonForecastMaskhpencidl"></clipPath>
                                                                    <clipPath id="gridRectMarkerMaskhpencidl">
                                                                        <rect id="SvgjsRect2138" width="154"
                                                                            height="54" x="-2"
                                                                            y="-2" rx="0"
                                                                            ry="0" opacity="1"
                                                                            stroke-width="0" stroke="none"
                                                                            stroke-dasharray="0" fill="#fff"></rect>
                                                                    </clipPath>
                                                                </defs>
                                                                <line id="SvgjsLine2136" x1="0" y1="0"
                                                                    x2="0" y2="50" stroke="#b6b6b6"
                                                                    stroke-dasharray="3" stroke-linecap="butt"
                                                                    class="apexcharts-xcrosshairs" x="0"
                                                                    y="0" width="1" height="50"
                                                                    fill="#b1b9c4" filter="none" fill-opacity="0.9"
                                                                    stroke-width="1"></line>
                                                                <g id="SvgjsG2144" class="apexcharts-grid">
                                                                    <g id="SvgjsG2145"
                                                                        class="apexcharts-gridlines-horizontal"
                                                                        style="display: none;">
                                                                        <line id="SvgjsLine2158" x1="0"
                                                                            y1="5" x2="150"
                                                                            y2="5" stroke="#e0e0e0"
                                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                                            class="apexcharts-gridline"></line>
                                                                        <line id="SvgjsLine2159" x1="0"
                                                                            y1="10" x2="150"
                                                                            y2="10" stroke="#e0e0e0"
                                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                                            class="apexcharts-gridline"></line>
                                                                        <line id="SvgjsLine2160" x1="0"
                                                                            y1="15" x2="150"
                                                                            y2="15" stroke="#e0e0e0"
                                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                                            class="apexcharts-gridline"></line>
                                                                        <line id="SvgjsLine2161" x1="0"
                                                                            y1="20" x2="150"
                                                                            y2="20" stroke="#e0e0e0"
                                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                                            class="apexcharts-gridline"></line>
                                                                        <line id="SvgjsLine2162" x1="0"
                                                                            y1="25" x2="150"
                                                                            y2="25" stroke="#e0e0e0"
                                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                                            class="apexcharts-gridline"></line>
                                                                        <line id="SvgjsLine2163" x1="0"
                                                                            y1="30" x2="150"
                                                                            y2="30" stroke="#e0e0e0"
                                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                                            class="apexcharts-gridline"></line>
                                                                        <line id="SvgjsLine2164" x1="0"
                                                                            y1="35" x2="150"
                                                                            y2="35" stroke="#e0e0e0"
                                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                                            class="apexcharts-gridline"></line>
                                                                        <line id="SvgjsLine2165" x1="0"
                                                                            y1="40" x2="150"
                                                                            y2="40" stroke="#e0e0e0"
                                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                                            class="apexcharts-gridline"></line>
                                                                        <line id="SvgjsLine2166" x1="0"
                                                                            y1="45" x2="150"
                                                                            y2="45" stroke="#e0e0e0"
                                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                                            class="apexcharts-gridline"></line>
                                                                    </g>
                                                                    <g id="SvgjsG2146"
                                                                        class="apexcharts-gridlines-vertical"
                                                                        style="display: none;">
                                                                        <line id="SvgjsLine2148" x1="0"
                                                                            y1="0" x2="0"
                                                                            y2="50" stroke="#e0e0e0"
                                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                                            class="apexcharts-gridline"></line>
                                                                        <line id="SvgjsLine2149" x1="18.75"
                                                                            y1="0" x2="18.75"
                                                                            y2="50" stroke="#e0e0e0"
                                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                                            class="apexcharts-gridline"></line>
                                                                        <line id="SvgjsLine2150" x1="37.5"
                                                                            y1="0" x2="37.5"
                                                                            y2="50" stroke="#e0e0e0"
                                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                                            class="apexcharts-gridline"></line>
                                                                        <line id="SvgjsLine2151" x1="56.25"
                                                                            y1="0" x2="56.25"
                                                                            y2="50" stroke="#e0e0e0"
                                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                                            class="apexcharts-gridline"></line>
                                                                        <line id="SvgjsLine2152" x1="75"
                                                                            y1="0" x2="75"
                                                                            y2="50" stroke="#e0e0e0"
                                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                                            class="apexcharts-gridline"></line>
                                                                        <line id="SvgjsLine2153" x1="93.75"
                                                                            y1="0" x2="93.75"
                                                                            y2="50" stroke="#e0e0e0"
                                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                                            class="apexcharts-gridline"></line>
                                                                        <line id="SvgjsLine2154" x1="112.5"
                                                                            y1="0" x2="112.5"
                                                                            y2="50" stroke="#e0e0e0"
                                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                                            class="apexcharts-gridline"></line>
                                                                        <line id="SvgjsLine2155" x1="131.25"
                                                                            y1="0" x2="131.25"
                                                                            y2="50" stroke="#e0e0e0"
                                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                                            class="apexcharts-gridline"></line>
                                                                        <line id="SvgjsLine2156" x1="150"
                                                                            y1="0" x2="150"
                                                                            y2="50" stroke="#e0e0e0"
                                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                                            class="apexcharts-gridline"></line>
                                                                    </g>
                                                                    <line id="SvgjsLine2169" x1="0"
                                                                        y1="50" x2="150" y2="50"
                                                                        stroke="transparent" stroke-dasharray="0"
                                                                        stroke-linecap="butt"></line>
                                                                    <line id="SvgjsLine2168" x1="0"
                                                                        y1="1" x2="0" y2="50"
                                                                        stroke="transparent" stroke-dasharray="0"
                                                                        stroke-linecap="butt"></line>
                                                                </g>
                                                                <g id="SvgjsG2147" class="apexcharts-grid-borders"
                                                                    style="display: none;">
                                                                    <line id="SvgjsLine2157" x1="0"
                                                                        y1="0" x2="150" y2="0"
                                                                        stroke="#e0e0e0" stroke-dasharray="0"
                                                                        stroke-linecap="butt"
                                                                        class="apexcharts-gridline"></line>
                                                                    <line id="SvgjsLine2167" x1="0"
                                                                        y1="50" x2="150" y2="50"
                                                                        stroke="#e0e0e0" stroke-dasharray="0"
                                                                        stroke-linecap="butt"
                                                                        class="apexcharts-gridline"></line>
                                                                </g>
                                                                <g id="SvgjsG2139"
                                                                    class="apexcharts-line-series apexcharts-plot-series">
                                                                    <g id="SvgjsG2140" class="apexcharts-series"
                                                                        seriesName="Value" data:longestSeries="true"
                                                                        rel="1" data:realIndex="0">
                                                                        <path id="SvgjsPath2143"
                                                                            d="M 0 44.11764705882353C 6.5625 44.11764705882353 12.1875 20.588235294117638 18.75 20.588235294117638C 25.3125 20.588235294117638 30.9375 26.470588235294112 37.5 26.470588235294112C 44.0625 26.470588235294112 49.68749999999999 -1.4210854715202004e-14 56.24999999999999 -1.4210854715202004e-14C 62.81249999999999 -1.4210854715202004e-14 68.4375 11.764705882352935 75 11.764705882352935C 81.5625 11.764705882352935 87.1875 20.588235294117638 93.75 20.588235294117638C 100.3125 20.588235294117638 105.93749999999999 2.941176470588225 112.49999999999999 2.941176470588225C 119.06249999999999 2.941176470588225 124.6875 20.588235294117638 131.25 20.588235294117638C 137.8125 20.588235294117638 143.4375 5.882352941176457 150 5.882352941176457"
                                                                            fill="none" fill-opacity="1"
                                                                            stroke="#8e54e9" stroke-opacity="1"
                                                                            stroke-linecap="butt" stroke-width="2"
                                                                            stroke-dasharray="0" class="apexcharts-line"
                                                                            index="0"
                                                                            clip-path="url(#gridRectMaskhpencidl)"
                                                                            pathTo="M 0 44.11764705882353C 6.5625 44.11764705882353 12.1875 20.588235294117638 18.75 20.588235294117638C 25.3125 20.588235294117638 30.9375 26.470588235294112 37.5 26.470588235294112C 44.0625 26.470588235294112 49.68749999999999 -1.4210854715202004e-14 56.24999999999999 -1.4210854715202004e-14C 62.81249999999999 -1.4210854715202004e-14 68.4375 11.764705882352935 75 11.764705882352935C 81.5625 11.764705882352935 87.1875 20.588235294117638 93.75 20.588235294117638C 100.3125 20.588235294117638 105.93749999999999 2.941176470588225 112.49999999999999 2.941176470588225C 119.06249999999999 2.941176470588225 124.6875 20.588235294117638 131.25 20.588235294117638C 137.8125 20.588235294117638 143.4375 5.882352941176457 150 5.882352941176457"
                                                                            pathFrom="M -1 50 L -1 50 L 18.75 50 L 37.5 50 L 56.24999999999999 50 L 75 50 L 93.75 50 L 112.49999999999999 50 L 131.25 50 L 150 50"
                                                                            fill-rule="evenodd"></path>
                                                                        <g id="SvgjsG2141"
                                                                            class="apexcharts-series-markers-wrap"
                                                                            data:realIndex="0">
                                                                            <g class="apexcharts-series-markers">
                                                                                <circle id="SvgjsCircle2187"
                                                                                    r="0" cx="0"
                                                                                    cy="0"
                                                                                    class="apexcharts-marker w9ircb1hy no-pointer-events"
                                                                                    stroke="#ffffff" fill="#8e54e9"
                                                                                    fill-opacity="1" stroke-width="2"
                                                                                    stroke-opacity="0.9"
                                                                                    default-marker-size="0"></circle>
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                    <g id="SvgjsG2142" class="apexcharts-datalabels"
                                                                        data:realIndex="0"></g>
                                                                </g>
                                                                <line id="SvgjsLine2170" x1="0" y1="0"
                                                                    x2="150" y2="0" stroke="#b6b6b6"
                                                                    stroke-dasharray="0" stroke-width="1"
                                                                    stroke-linecap="butt"
                                                                    class="apexcharts-ycrosshairs"></line>
                                                                <line id="SvgjsLine2171" x1="0" y1="0"
                                                                    x2="150" y2="0" stroke-dasharray="0"
                                                                    stroke-width="0" stroke-linecap="butt"
                                                                    class="apexcharts-ycrosshairs-hidden"></line>
                                                                <g id="SvgjsG2172" class="apexcharts-yaxis-annotations">
                                                                </g>
                                                                <g id="SvgjsG2173" class="apexcharts-xaxis-annotations">
                                                                </g>
                                                                <g id="SvgjsG2174" class="apexcharts-point-annotations">
                                                                </g>
                                                                <g id="SvgjsG2175" class="apexcharts-xaxis"
                                                                    transform="translate(0, 0)">
                                                                    <g id="SvgjsG2176" class="apexcharts-xaxis-texts-g"
                                                                        transform="translate(0, -4)"></g>
                                                                </g>
                                                            </g>
                                                            <g id="SvgjsG2133" class="apexcharts-annotations"></g>
                                                            <g id="SvgjsG2186" class="apexcharts-yaxis" rel="0"
                                                                transform="translate(-18, 0)"></g>
                                                            <rect id="SvgjsRect2135" width="0" height="0"
                                                                x="0" y="0" rx="0"
                                                                ry="0" opacity="1" stroke-width="0"
                                                                stroke="none" stroke-dasharray="0" fill="#fefefe">
                                                            </rect>
                                                        </svg>
                                                        <div class="apexcharts-legend" style="max-height: 25px;"></div>
                                                        <div class="apexcharts-tooltip apexcharts-theme-light">
                                                            <div class="apexcharts-tooltip-title"
                                                                style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                            </div>
                                                            <div class="apexcharts-tooltip-series-group"
                                                                style="order: 1;"><span
                                                                    class="apexcharts-tooltip-marker"
                                                                    style="background-color: rgb(142, 84, 233);"></span>
                                                                <div class="apexcharts-tooltip-text"
                                                                    style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                                    <div class="apexcharts-tooltip-y-group"><span
                                                                            class="apexcharts-tooltip-text-y-label"></span><span
                                                                            class="apexcharts-tooltip-text-y-value"></span>
                                                                    </div>
                                                                    <div class="apexcharts-tooltip-goals-group"><span
                                                                            class="apexcharts-tooltip-text-goals-label"></span><span
                                                                            class="apexcharts-tooltip-text-goals-value"></span>
                                                                    </div>
                                                                    <div class="apexcharts-tooltip-z-group"><span
                                                                            class="apexcharts-tooltip-text-z-label"></span><span
                                                                            class="apexcharts-tooltip-text-z-value"></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                                            <div class="apexcharts-yaxistooltip-text"></div>
                                                        </div>
                                                    </div>
                                                </span> </div>
                                        </div>
                                    </div>
                                    <div class="p-3 ">
                                        <ul class="mb-0 mt-1 monthly-profit">
                                            <li>
                                                <div class="d-flex align-items-center">
                                                    <div class="me-3"> <span
                                                            class="avatar avatar-md br-5 bg-warning-transparent text-warning"><i
                                                                class="fe fe-box"></i></span> </div>
                                                    <div class="flex-fill">
                                                        <div class="d-flex justify-content-between">
                                                            <h6 class="fw-semibold"> Fashion </h6>
                                                            <div>
                                                                <p class="mb-0 fs-13 text-muted"> <i
                                                                        class="fe fe-arrow-up-right me-1 text-success brround"></i>93.0%
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning"
                                                                style="width: 90%;"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex align-items-center">
                                                    <div class="me-3"> <span
                                                            class="avatar avatar-md br-5 bg-primary-transparent text-primary"><i
                                                                class="fe fe-home"></i></span> </div>
                                                    <div class="flex-fill">
                                                        <div class="d-flex justify-content-between">
                                                            <h6 class="fw-semibold"> Home Furniture </h6>
                                                            <div>
                                                                <p class="mb-0 fs-13 text-muted"> <i
                                                                        class="fe fe-arrow-up-right me-1 text-success brround"></i>97.0%
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary"
                                                                style="width: 80%;"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex align-items-center">
                                                    <div class="me-3"> <span
                                                            class="avatar avatar-md br-5 bg-secondary-transparent text-secondary"><i
                                                                class="fe fe-tv"></i></span> </div>
                                                    <div class="flex-fill">
                                                        <div class="d-flex justify-content-between">
                                                            <h6 class="fw-semibold"> Electronics </h6>
                                                            <div>
                                                                <p class="mb-0 fs-13 text-muted"> <i
                                                                        class="fe fe-arrow-up-right me-1 text-success brround"></i>80.0%
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-secondary"
                                                                style="width: 80%;"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex align-items-center">
                                                    <div class="me-3"> <span
                                                            class="avatar avatar-md br-5 bg-info-transparent text-info"><i
                                                                class="fe fe-zap"></i></span> </div>
                                                    <div class="flex-fill">
                                                        <div class="d-flex justify-content-between">
                                                            <h6 class="fw-semibold"> Groceries </h6>
                                                            <div>
                                                                <p class="mb-0 fs-13 text-muted"> <i
                                                                        class="fe fe-arrow-up-right me-1 text-success brround"></i>80.0%
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-info"
                                                                style="width: 80%;"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- ROW-1 END -->
            <div class="row">
                <div class="col-xxl-3 col-xl-5">
                    <div class="card custom-card">
                        <div class="card-header justify-content-between">
                            <div class="card-title"> Transactions History </div>
                            <div class="dropdown"> <a href="javascript:void(0);"
                                    class="btn-outline-light btn btn-sm text-muted" data-bs-toggle="dropdown"
                                    aria-expanded="false"> View All<i
                                        class="ri-arrow-down-s-line align-middle ms-1"></i> </a>
                                <ul class="dropdown-menu" role="menu">
                                    <li class="border-bottom"><a class="dropdown-item"
                                            href="javascript:void(0);">Today</a></li>
                                    <li class="border-bottom"><a class="dropdown-item" href="javascript:void(0);">This
                                            Week</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0);">Last Week</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body">
                            <ul class="mb-0 sales-transaction-history-list">
                                <li>
                                    <div class="d-flex"> <a aria-label="anchor" href="javascript:void(0);"><span
                                                class="avatar avatar-md rounded-circle br-5 bg-success-transparent text-success border-success border-opacity-25 border me-3"><i
                                                    class="fe fe-credit-card"></i></span></a>
                                        <div class="w-100"> <a href="javascript:void(0);"> <span
                                                    class="mb-1 fs-14 fw-semibold text-default me-3">ATM Withdrawl</span>
                                            </a>
                                            <p class="fs-12 text-muted me-3 mb-0">Just now</p>
                                        </div>
                                        <div class=" my-auto">
                                            <h6 class="mb-0 text-success"> $2,45,000 </h6>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex"> <a aria-label="anchor" href="javascript:void(0);"><span
                                                class="avatar avatar-md rounded-circle br-5 bg-danger-transparent text-danger border-danger border-opacity-25 me-3 border"><i
                                                    class="fe fe-smartphone"></i></span></a>
                                        <div class="w-100"> <a href="javascript:void(0);"> <span
                                                    class="mb-1 fs-14 fw-semibold text-default me-3">Movies
                                                    Subscription</span> </a>
                                            <p class="fs-12 text-muted me-3 mb-0">Yesterday</p>
                                        </div>
                                        <div class=" my-auto">
                                            <h6 class="mb-0 text-danger"> -$100.00 </h6>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex"> <a aria-label="anchor" href="javascript:void(0);"><span
                                                class="avatar avatar-md rounded-circle br-5 bg-success-transparent text-success border-success border-opacity-25 border me-3"><i
                                                    class="fe fe-arrow-down"></i></span></a>
                                        <div class="w-100"> <a href="javascript:void(0);"> <span
                                                    class="mb-1 fs-14 fw-semibold text-default me-3">Recieved from
                                                    John</span> </a>
                                            <p class="fs-12 text-muted me-3 mb-0">17-04-2022</p>
                                        </div>
                                        <div class=" my-auto">
                                            <h6 class="mb-0 text-success"> $1,50,000 </h6>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex"> <a aria-label="anchor" href="javascript:void(0);"><span
                                                class="avatar avatar-md rounded-circle br-5 bg-danger-transparent text-danger border-danger border-opacity-25 me-3 border"><i
                                                    class="fe fe-credit-card"></i></span></a>
                                        <div class="w-100"> <a href="javascript:void(0);"> <span
                                                    class="mb-1 fs-14 fw-semibold text-default me-3">Credit Card</span>
                                            </a>
                                            <p class="fs-12 text-muted me-3 mb-0">25-04-2022</p>
                                        </div>
                                        <div class=" my-auto">
                                            <h6 class="mb-0 text-danger"> -$3,000 </h6>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex"> <a aria-label="anchor" href="javascript:void(0);"><span
                                                class="avatar avatar-md rounded-circle br-5 bg-success-transparent text-success border-success border-opacity-25 border me-3"><i
                                                    class="fe fe-repeat"></i></span></a>
                                        <div class="w-100"> <a href="javascript:void(0);"> <span
                                                    class="mb-1 fs-14 fw-semibold text-default me-3">Transfer to XYZ
                                                    Card</span> </a>
                                            <p class="fs-12 text-muted me-3 mb-0">30-04-2022</p>
                                        </div>
                                        <div class=" my-auto">
                                            <h6 class="mb-0 text-success"> $15,000 </h6>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex"> <a aria-label="anchor" href="javascript:void(0);"><span
                                                class="avatar avatar-md rounded-circle br-5 bg-danger-transparent text-danger border-danger border-opacity-25 me-3 border"><i
                                                    class="fe fe-repeat"></i></span></a>
                                        <div class="w-100"> <a href="javascript:void(0);"> <span
                                                    class="mb-1 fs-14 fw-semibold text-default me-3">Transfer to XYZ
                                                    Card</span> </a>
                                            <p class="fs-12 text-muted me-3 mb-0">30-04-2022</p>
                                        </div>
                                        <div class=" my-auto">
                                            <h6 class="mb-0 text-success"> $15,000 </h6>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-9 col-xl-7">
                    <div class="card custom-card">
                        <div class="card-header">
                            <div>
                                <h5 class="card-title mb-0">Recent Orders</h5>
                            </div>
                            <div class="ms-auto"> <a aria-label="anchor" href="javascript:void(0)"
                                    class="btn btn-outline-light btn-icons btn-sm text-muted" data-bs-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false"> <i class="fe fe-more-vertical"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-start"> <a
                                        class="d-flex dropdown-item border-bottom" href="javascript:void(0)"> <i
                                            class="ri-share-forward-line me-2"></i>Share </a> <a
                                        class="d-flex dropdown-item border-bottom" href="javascript:void(0)"> <i
                                            class="ri-download-2-line me-2"></i>Download </a> <a
                                        class="d-flex dropdown-item" href="javascript:void(0)"> <i
                                            class="ri-delete-bin-7-line me-2"></i>Delete </a> </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table text-nowrap table-hover border table-bordered">
                                    <thead class="border-top">
                                        <tr>
                                            <th scope="row" class="border-bottom-0 text-center">S.NO</th>
                                            <th scope="row" class="border-bottom-0">Customer Name</th>
                                            <th scope="row" class="border-bottom-0">Order ID</th>
                                            <th scope="row" class="border-bottom-0">Order Date</th>
                                            <th scope="row" class="border-bottom-0">Price</th>
                                            <th scope="row" class="border-bottom-0">Status</th>
                                            <th scope="row" class="border-bottom-0">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="border-bottom">
                                            <td class="text-center">01</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar avatar-md me-2 avatar-rounded lh-1"> <img
                                                            src="../assets/images/faces/1.jpg" alt="avatar"> </div>
                                                    <div class="lh-1"> <a href="product-details.html">Patty
                                                            Furniture</a>
                                                        <p class="text-muted fs-11 mb-0 mt-1">patty@spruko.com</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><span class="text-decoration-underline text-primary">#123SP90</span></td>
                                            <td>01 Apr 2022</td>
                                            <td> $73.800</td>
                                            <td>
                                                <div class="mt-sm-1 d-block"> <span
                                                        class="badge bg-success-transparent text-success">Delivered</span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="g-2"> <a aria-label="anchor"
                                                        class="btn  btn-primary-light btn-sm" data-bs-toggle="tooltip"
                                                        data-bs-original-title="Edit"> <span
                                                            class="ri-pencil-line fs-14"></span> </a> <a
                                                        aria-label="anchor" class="btn btn-danger-light btn-sm ms-2"
                                                        data-bs-toggle="tooltip" data-bs-original-title="Delete"> <span
                                                            class="ri-delete-bin-7-line fs-14"></span> </a> </div>
                                            </td>
                                        </tr>
                                        <tr class="border-bottom">
                                            <td class="text-center">02</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar avatar-md me-2 avatar-rounded lh-1"> <img
                                                            src="../assets/images/faces/2.jpg" alt="avatar"> </div>
                                                    <div class="lh-1"> <a href="product-details.html">Allie Grate</a>
                                                        <p class="fs-11 text-muted mb-0 mt-1">allie@spruko.com</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><span class="text-decoration-underline text-primary">#123SP91</span></td>
                                            <td>02 Apr 2022</td>
                                            <td> $73.800</td>
                                            <td>
                                                <div class="mt-sm-1 d-block"> <span
                                                        class="badge bg-success-transparent text-success">Delivered</span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="g-2"> <a aria-label="anchor"
                                                        class="btn  btn-primary-light btn-sm" data-bs-toggle="tooltip"
                                                        data-bs-original-title="Edit"> <span
                                                            class="ri-pencil-line fs-14"></span> </a> <a
                                                        aria-label="anchor" class="btn btn-danger-light btn-sm ms-2"
                                                        data-bs-toggle="tooltip" data-bs-original-title="Delete"> <span
                                                            class="ri-delete-bin-7-line fs-14"></span> </a> </div>
                                            </td>
                                        </tr>
                                        <tr class="border-bottom">
                                            <td class="text-center">03</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar avatar-md me-2 avatar-rounded lh-1"> <img
                                                            src="../assets/images/faces/3.jpg" alt="avatar"> </div>
                                                    <div class="lh-1"> <a href="product-details.html">Peg Legge</a>
                                                        <p class="fs-11 text-muted mb-0 mt-1">peg@spruko.com</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><span class="text-decoration-underline text-primary">#123SP92</span></td>
                                            <td>24 Mar 2022</td>
                                            <td> $13.800</td>
                                            <td>
                                                <div class="mt-sm-1 d-block"> <span
                                                        class="badge bg-danger-transparent text-danger">Cancelled</span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="g-2"> <a aria-label="anchor"
                                                        class="btn  btn-primary-light btn-sm" data-bs-toggle="tooltip"
                                                        data-bs-original-title="Edit"> <span
                                                            class="ri-pencil-line fs-14"></span> </a> <a
                                                        aria-label="anchor" class="btn btn-danger-light btn-sm ms-2"
                                                        data-bs-toggle="tooltip" data-bs-original-title="Delete"> <span
                                                            class="ri-delete-bin-7-line fs-14"></span> </a> </div>
                                            </td>
                                        </tr>
                                        <tr class="border-bottom">
                                            <td class="text-center">04</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar avatar-md me-2 avatar-rounded lh-1"> <img
                                                            src="../assets/images/faces/4.jpg" alt="avatar"> </div>
                                                    <div class="lh-1"> <a href="product-details.html">Maureen
                                                            Biologist</a>
                                                        <p class="fs-11 text-muted mb-0 mt-1">maureen@spruko.com</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><span class="text-decoration-underline text-primary">#123SP93</span></td>
                                            <td>22 Mar 2022</td>
                                            <td> $14.600</td>
                                            <td>
                                                <div class="mt-sm-1 d-block"> <span
                                                        class="badge bg-info-transparent text-info">Pending</span> </div>
                                            </td>
                                            <td>
                                                <div class="g-2"> <a aria-label="anchor"
                                                        class="btn  btn-primary-light btn-sm" data-bs-toggle="tooltip"
                                                        data-bs-original-title="Edit"> <span
                                                            class="ri-pencil-line fs-14"></span> </a> <a
                                                        aria-label="anchor" class="btn btn-danger-light btn-sm ms-2"
                                                        data-bs-toggle="tooltip" data-bs-original-title="Delete"> <span
                                                            class="ri-delete-bin-7-line fs-14"></span> </a> </div>
                                            </td>
                                        </tr>
                                        <tr class="border-bottom">
                                            <td class="text-center">05</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar avatar-md me-2 avatar-rounded lh-1"> <img
                                                            src="../assets/images/faces/5.jpg" alt="avatar"> </div>
                                                    <div class="lh-1"> <a href="product-details.html">Olive Yew</a>
                                                        <p class="text-muted mb-0 mt-1 fs-11">olive@spruko.com</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><span class="text-decoration-underline text-primary">#123SP94</span></td>
                                            <td>20 Mar 2022</td>
                                            <td> $74.965</td>
                                            <td>
                                                <div class="mt-sm-1 d-block"> <span
                                                        class="badge bg-warning-transparent text-warning">Shipped</span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="g-2"> <a aria-label="anchor"
                                                        class="btn  btn-primary-light btn-sm" data-bs-toggle="tooltip"
                                                        data-bs-original-title="Edit"> <span
                                                            class="ri-pencil-line fs-14"></span> </a> <a
                                                        aria-label="anchor" class="btn btn-danger-light btn-sm ms-2"
                                                        data-bs-toggle="tooltip" data-bs-original-title="Delete"> <span
                                                            class="ri-delete-bin-7-line fs-14"></span> </a> </div>
                                            </td>
                                        </tr> <!-- <tr class="border-bottom">
                                                            <td class="text-center">06</td>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                   <div class="avatar avatar-md me-2">
                    <img src="../assets/images/faces/25.png" alt="avatar" class="rounded-1">
                   </div>
                   <div class="lh-1">
                                                                    <a href="product-details.html">Paddy O'Furnitur</a>
                                                                    <p class="text-muted mb-0 mt-1 fs-11">paddy@spruko.com</p>
                                                                </div>
                  </div>
                                                            </td>
                                                            <td><span class="text-decoration-underline text-primary">#123SP95</span></td>
                                                            <td>02 Mar 2022</td>
                                                            <td> $90.965</td>
                                                            <td>
                                                                <div class="mt-sm-1 d-block">
                                                                    <span
                                                                        class="badge bg-danger-transparent text-danger">Cancelled</span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="g-2">
                                                                    <a aria-label="anchor" class="btn  btn-primary-light btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Edit">
                                                                        <span class="ri-pencil-line fs-14"></span>
                                                                    </a>
                                                                    <a aria-label="anchor" class="btn btn-danger-light btn-sm ms-2" data-bs-toggle="tooltip" data-bs-original-title="Delete">
                                                                        <span class="ri-delete-bin-7-line fs-14"></span>
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr> -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- End::row-1 -->
        </div>
    </div>
@endsection
