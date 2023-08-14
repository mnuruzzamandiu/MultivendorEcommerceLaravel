@extends('backend.admin.layouts.admin_master')
@section('page_title', 'Form Input')
@section('admin_master')
    <div class="d-sm-flex d-block align-items-center justify-content-between page-header-breadcrumb"> <span
            class="fs-semibold fs-18">Data Tables</span>
        <div class="ms-sm-1 ms-0">
            <nav>
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Tables</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Data Tables</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="main-content app-content">
        <div class="container-fluid"> <!-- Start::row-1 -->
            <div class="row">
                <div class="col-xl-12">
                    <div class="card custom-card">
                        <div class="card-header">
                            <div class="card-title"> Basic Datatable </div>
                        </div>
                        <div class="card-body">
                            <div id="datatable-basic_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <div class="dataTables_length" id="datatable-basic_length"><label>Show <select
                                                    name="datatable-basic_length" aria-controls="datatable-basic"
                                                    class="form-select form-select-sm">
                                                    <option value="10">10</option>
                                                    <option value="25">25</option>
                                                    <option value="50">50</option>
                                                    <option value="100">100</option>
                                                </select> entries</label></div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <div id="datatable-basic_filter" class="dataTables_filter"><label><input
                                                    type="search" class="form-control form-control-sm"
                                                    placeholder="Search..." aria-controls="datatable-basic"></label></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="dataTables_scroll">
                                            <div class="dataTables_scrollHead"
                                                style="overflow: hidden; position: relative; border: 0px; width: 100%;">
                                                <div class="dataTables_scrollHeadInner"
                                                    style="box-sizing: content-box; width: 1568px; padding-right: 0px;">
                                                    <table class="table table-bordered text-nowrap dataTable no-footer"
                                                        style="width: 1568px; margin-left: 0px;">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col" class="sorting sorting_asc"
                                                                    tabindex="0" aria-controls="datatable-basic"
                                                                    rowspan="1" colspan="1" style="width: 272.547px;"
                                                                    aria-sort="ascending"
                                                                    aria-label="Name: activate to sort column descending">
                                                                    Name</th>
                                                                <th scope="col" class="sorting" tabindex="0"
                                                                    aria-controls="datatable-basic" rowspan="1"
                                                                    colspan="1" style="width: 400.359px;"
                                                                    aria-label="Position: activate to sort column ascending">
                                                                    Position</th>
                                                                <th scope="col" class="sorting" tabindex="0"
                                                                    aria-controls="datatable-basic" rowspan="1"
                                                                    colspan="1" style="width: 203.703px;"
                                                                    aria-label="Office: activate to sort column ascending">
                                                                    Office</th>
                                                                <th scope="col" class="sorting" tabindex="0"
                                                                    aria-controls="datatable-basic" rowspan="1"
                                                                    colspan="1" style="width: 101.891px;"
                                                                    aria-label="Age: activate to sort column ascending">Age
                                                                </th>
                                                                <th scope="col" class="sorting" tabindex="0"
                                                                    aria-controls="datatable-basic" rowspan="1"
                                                                    colspan="1" style="width: 187.734px;"
                                                                    aria-label="Start date: activate to sort column ascending">
                                                                    Start date</th>
                                                                <th scope="col" class="sorting" tabindex="0"
                                                                    aria-controls="datatable-basic" rowspan="1"
                                                                    colspan="1" style="width: 167.797px;"
                                                                    aria-label="Salary: activate to sort column ascending">
                                                                    Salary</th>
                                                            </tr>
                                                        </thead>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="dataTables_scrollBody"
                                                style="position: relative; overflow: auto; width: 100%;">
                                                <table id="datatable-basic"
                                                    class="table table-bordered text-nowrap dataTable no-footer"
                                                    style="width: 100%;" aria-describedby="datatable-basic_info">
                                                    <thead>
                                                        <tr style="height: 0px;">
                                                            <th scope="col" class="sorting sorting_asc"
                                                                aria-controls="datatable-basic" rowspan="1"
                                                                colspan="1"
                                                                style="width: 272.547px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"
                                                                aria-sort="ascending"
                                                                aria-label="Name: activate to sort column descending">
                                                                <div class="dataTables_sizing"
                                                                    style="height: 0px; overflow: hidden;">Name</div>
                                                            </th>
                                                            <th scope="col" class="sorting"
                                                                aria-controls="datatable-basic" rowspan="1"
                                                                colspan="1"
                                                                style="width: 400.359px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"
                                                                aria-label="Position: activate to sort column ascending">
                                                                <div class="dataTables_sizing"
                                                                    style="height: 0px; overflow: hidden;">Position</div>
                                                            </th>
                                                            <th scope="col" class="sorting"
                                                                aria-controls="datatable-basic" rowspan="1"
                                                                colspan="1"
                                                                style="width: 203.703px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"
                                                                aria-label="Office: activate to sort column ascending">
                                                                <div class="dataTables_sizing"
                                                                    style="height: 0px; overflow: hidden;">Office</div>
                                                            </th>
                                                            <th scope="col" class="sorting"
                                                                aria-controls="datatable-basic" rowspan="1"
                                                                colspan="1"
                                                                style="width: 101.891px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"
                                                                aria-label="Age: activate to sort column ascending">
                                                                <div class="dataTables_sizing"
                                                                    style="height: 0px; overflow: hidden;">Age</div>
                                                            </th>
                                                            <th scope="col" class="sorting"
                                                                aria-controls="datatable-basic" rowspan="1"
                                                                colspan="1"
                                                                style="width: 187.734px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"
                                                                aria-label="Start date: activate to sort column ascending">
                                                                <div class="dataTables_sizing"
                                                                    style="height: 0px; overflow: hidden;">Start date</div>
                                                            </th>
                                                            <th scope="col" class="sorting"
                                                                aria-controls="datatable-basic" rowspan="1"
                                                                colspan="1"
                                                                style="width: 167.797px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"
                                                                aria-label="Salary: activate to sort column ascending">
                                                                <div class="dataTables_sizing"
                                                                    style="height: 0px; overflow: hidden;">Salary</div>
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="odd">
                                                            <td class="sorting_1">Airi Satou</td>
                                                            <td>Accountant</td>
                                                            <td>Tokyo</td>
                                                            <td>33</td>
                                                            <td>2008-11-28</td>
                                                            <td>$162,700</td>
                                                        </tr>
                                                        <tr class="even">
                                                            <td class="sorting_1">Angelica Ramos</td>
                                                            <td>Chief Executive Officer (CEO)</td>
                                                            <td>London</td>
                                                            <td>47</td>
                                                            <td>2009-10-09</td>
                                                            <td>$1,200,000</td>
                                                        </tr>
                                                        <tr class="odd">
                                                            <td class="sorting_1">Ashton Cox</td>
                                                            <td>Junior Technical Author</td>
                                                            <td>San Francisco</td>
                                                            <td>66</td>
                                                            <td>2009-01-12</td>
                                                            <td>$86,000</td>
                                                        </tr>
                                                        <tr class="even">
                                                            <td class="sorting_1">Bradley Greer</td>
                                                            <td>Software Engineer</td>
                                                            <td>London</td>
                                                            <td>41</td>
                                                            <td>2012-10-13</td>
                                                            <td>$132,000</td>
                                                        </tr>
                                                        <tr class="odd">
                                                            <td class="sorting_1">Brenden Wagner</td>
                                                            <td>Software Engineer</td>
                                                            <td>San Francisco</td>
                                                            <td>28</td>
                                                            <td>2011-06-07</td>
                                                            <td>$206,850</td>
                                                        </tr>
                                                        <tr class="even">
                                                            <td class="sorting_1">Brielle Williamson</td>
                                                            <td>Integration Specialist</td>
                                                            <td>New York</td>
                                                            <td>61</td>
                                                            <td>2012-12-02</td>
                                                            <td>$372,000</td>
                                                        </tr>
                                                        <tr class="odd">
                                                            <td class="sorting_1">Bruno Nash</td>
                                                            <td>Software Engineer</td>
                                                            <td>London</td>
                                                            <td>38</td>
                                                            <td>2011-05-03</td>
                                                            <td>$163,500</td>
                                                        </tr>
                                                        <tr class="even">
                                                            <td class="sorting_1">Caesar Vance</td>
                                                            <td>Pre-Sales Support</td>
                                                            <td>New York</td>
                                                            <td>21</td>
                                                            <td>2011-12-12</td>
                                                            <td>$106,450</td>
                                                        </tr>
                                                        <tr class="odd">
                                                            <td class="sorting_1">Cara Stevens</td>
                                                            <td>Sales Assistant</td>
                                                            <td>New York</td>
                                                            <td>46</td>
                                                            <td>2011-12-06</td>
                                                            <td>$145,600</td>
                                                        </tr>
                                                        <tr class="even">
                                                            <td class="sorting_1">Cedric Kelly</td>
                                                            <td>Senior Javascript Developer</td>
                                                            <td>Edinburgh</td>
                                                            <td>22</td>
                                                            <td>2012-03-29</td>
                                                            <td>$433,060</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 col-md-5">
                                        <div class="dataTables_info" id="datatable-basic_info" role="status"
                                            aria-live="polite">Showing 1 to 10 of 57 entries</div>
                                    </div>
                                    <div class="col-sm-12 col-md-7">
                                        <div class="dataTables_paginate paging_simple_numbers"
                                            id="datatable-basic_paginate">
                                            <ul class="pagination">
                                                <li class="paginate_button page-item previous disabled"
                                                    id="datatable-basic_previous"><a href="#"
                                                        aria-controls="datatable-basic" data-dt-idx="0" tabindex="0"
                                                        class="page-link">Previous</a></li>
                                                <li class="paginate_button page-item active"><a href="#"
                                                        aria-controls="datatable-basic" data-dt-idx="1" tabindex="0"
                                                        class="page-link">1</a></li>
                                                <li class="paginate_button page-item "><a href="#"
                                                        aria-controls="datatable-basic" data-dt-idx="2" tabindex="0"
                                                        class="page-link">2</a></li>
                                                <li class="paginate_button page-item "><a href="#"
                                                        aria-controls="datatable-basic" data-dt-idx="3" tabindex="0"
                                                        class="page-link">3</a></li>
                                                <li class="paginate_button page-item "><a href="#"
                                                        aria-controls="datatable-basic" data-dt-idx="4" tabindex="0"
                                                        class="page-link">4</a></li>
                                                <li class="paginate_button page-item "><a href="#"
                                                        aria-controls="datatable-basic" data-dt-idx="5" tabindex="0"
                                                        class="page-link">5</a></li>
                                                <li class="paginate_button page-item "><a href="#"
                                                        aria-controls="datatable-basic" data-dt-idx="6" tabindex="0"
                                                        class="page-link">6</a></li>
                                                <li class="paginate_button page-item next" id="datatable-basic_next"><a
                                                        href="#" aria-controls="datatable-basic" data-dt-idx="7"
                                                        tabindex="0" class="page-link">Next</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!--End::row-1 --> <!-- Start:: row-2 -->
            <div class="row">
                <div class="col-xl-12">
                    <div class="card custom-card">
                        <div class="card-header">
                            <div class="card-title"> Responsive Datatable </div>
                        </div>
                        <div class="card-body">
                            <div id="responsiveDataTable_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <div class="dataTables_length" id="responsiveDataTable_length"><label>Show <select
                                                    name="responsiveDataTable_length" aria-controls="responsiveDataTable"
                                                    class="form-select form-select-sm">
                                                    <option value="10">10</option>
                                                    <option value="25">25</option>
                                                    <option value="50">50</option>
                                                    <option value="100">100</option>
                                                </select> entries</label></div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <div id="responsiveDataTable_filter" class="dataTables_filter"><label><input
                                                    type="search" class="form-control form-control-sm"
                                                    placeholder="Search..." aria-controls="responsiveDataTable"></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table id="responsiveDataTable"
                                            class="table table-bordered text-nowrap dataTable no-footer dtr-inline"
                                            style="width: 100%;" aria-describedby="responsiveDataTable_info">
                                            <thead>
                                                <tr>
                                                    <th scope="col" class="sorting sorting_asc" tabindex="0"
                                                        aria-controls="responsiveDataTable" rowspan="1" colspan="1"
                                                        style="width: 171.16px;" aria-sort="ascending"
                                                        aria-label="First name: activate to sort column descending">First
                                                        name</th>
                                                    <th scope="col" class="sorting" tabindex="0"
                                                        aria-controls="responsiveDataTable" rowspan="1" colspan="1"
                                                        style="width: 167.16px;"
                                                        aria-label="Last name: activate to sort column ascending">Last name
                                                    </th>
                                                    <th scope="col" class="sorting" tabindex="0"
                                                        aria-controls="responsiveDataTable" rowspan="1" colspan="1"
                                                        style="width: 342.16px;"
                                                        aria-label="Position: activate to sort column ascending">Position
                                                    </th>
                                                    <th scope="col" class="sorting" tabindex="0"
                                                        aria-controls="responsiveDataTable" rowspan="1" colspan="1"
                                                        style="width: 163.16px;"
                                                        aria-label="Start date: activate to sort column ascending">Start
                                                        date</th>
                                                    <th scope="col" class="sorting" tabindex="0"
                                                        aria-controls="responsiveDataTable" rowspan="1" colspan="1"
                                                        style="width: 150.16px;"
                                                        aria-label="Salary: activate to sort column ascending">Salary</th>
                                                    <th scope="col" class="sorting" tabindex="0"
                                                        aria-controls="responsiveDataTable" rowspan="1" colspan="1"
                                                        style="width: 344.16px;"
                                                        aria-label="E-mail: activate to sort column ascending">E-mail</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="odd">
                                                    <td class="sorting_1 dtr-control">Adrian</td>
                                                    <td>Terry</td>
                                                    <td>Marketing Officer</td>
                                                    <td>2013/04/21</td>
                                                    <td>$543,769</td>
                                                    <td>a.terry@datatables.net</td>
                                                </tr>
                                                <tr class="even">
                                                    <td class="sorting_1 dtr-control">Angelica</td>
                                                    <td>Ramos</td>
                                                    <td>Chief Executive Officer</td>
                                                    <td>20017/10/15</td>
                                                    <td>$6,234,000</td>
                                                    <td>a.ramos@datatables.net</td>
                                                </tr>
                                                <tr class="odd">
                                                    <td class="dtr-control sorting_1" tabindex="0">Bella</td>
                                                    <td>Chloe</td>
                                                    <td>System Developer</td>
                                                    <td>2018/03/12</td>
                                                    <td>$654,765</td>
                                                    <td>b.Chloe@datatables.net</td>
                                                </tr>
                                                <tr class="even">
                                                    <td class="sorting_1 dtr-control">Brenden</td>
                                                    <td>Wagner</td>
                                                    <td>Software Engineer</td>
                                                    <td>2013/07/14</td>
                                                    <td>$206,850</td>
                                                    <td>b.wagner@datatables.net</td>
                                                </tr>
                                                <tr class="odd">
                                                    <td class="sorting_1 dtr-control">Bruno</td>
                                                    <td>Nash</td>
                                                    <td>Software Engineer</td>
                                                    <td>2015/05/03</td>
                                                    <td>$163,500</td>
                                                    <td>b.nash@datatables.net</td>
                                                </tr>
                                                <tr class="even">
                                                    <td class="sorting_1 dtr-control">Cameron</td>
                                                    <td>Watson</td>
                                                    <td>Sales Support</td>
                                                    <td>2013/9/7</td>
                                                    <td>$675,876</td>
                                                    <td>c.watson@datatables.net</td>
                                                </tr>
                                                <tr class="odd">
                                                    <td class="sorting_1 dtr-control">Connor</td>
                                                    <td>Johne</td>
                                                    <td>Web Developer</td>
                                                    <td>2011/1/25</td>
                                                    <td>$92,575</td>
                                                    <td>C.johne@datatables.net</td>
                                                </tr>
                                                <tr class="even">
                                                    <td class="dtr-control sorting_1" tabindex="0">Dominic</td>
                                                    <td>Hudson</td>
                                                    <td>Sales Assistant</td>
                                                    <td>2015/10/16</td>
                                                    <td>$654,300</td>
                                                    <td>d.hudson@datatables.net</td>
                                                </tr>
                                                <tr class="odd">
                                                    <td class="dtr-control sorting_1" tabindex="0">Donna</td>
                                                    <td>Bond</td>
                                                    <td>Account Manager</td>
                                                    <td>2012/02/21</td>
                                                    <td>$543,654</td>
                                                    <td>d.bond@datatables.net</td>
                                                </tr>
                                                <tr class="even">
                                                    <td class="sorting_1 dtr-control">Evan</td>
                                                    <td>Terry</td>
                                                    <td>Sales Manager</td>
                                                    <td>2013/10/26</td>
                                                    <td>$66,340</td>
                                                    <td>d.terry@datatables.net</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 col-md-5">
                                        <div class="dataTables_info" id="responsiveDataTable_info" role="status"
                                            aria-live="polite">Showing 1 to 10 of 50 entries</div>
                                    </div>
                                    <div class="col-sm-12 col-md-7">
                                        <div class="dataTables_paginate paging_simple_numbers"
                                            id="responsiveDataTable_paginate">
                                            <ul class="pagination">
                                                <li class="paginate_button page-item previous disabled"
                                                    id="responsiveDataTable_previous"><a href="#"
                                                        aria-controls="responsiveDataTable" data-dt-idx="0"
                                                        tabindex="0" class="page-link">Previous</a></li>
                                                <li class="paginate_button page-item active"><a href="#"
                                                        aria-controls="responsiveDataTable" data-dt-idx="1"
                                                        tabindex="0" class="page-link">1</a></li>
                                                <li class="paginate_button page-item "><a href="#"
                                                        aria-controls="responsiveDataTable" data-dt-idx="2"
                                                        tabindex="0" class="page-link">2</a></li>
                                                <li class="paginate_button page-item "><a href="#"
                                                        aria-controls="responsiveDataTable" data-dt-idx="3"
                                                        tabindex="0" class="page-link">3</a></li>
                                                <li class="paginate_button page-item "><a href="#"
                                                        aria-controls="responsiveDataTable" data-dt-idx="4"
                                                        tabindex="0" class="page-link">4</a></li>
                                                <li class="paginate_button page-item "><a href="#"
                                                        aria-controls="responsiveDataTable" data-dt-idx="5"
                                                        tabindex="0" class="page-link">5</a></li>
                                                <li class="paginate_button page-item next" id="responsiveDataTable_next">
                                                    <a href="#" aria-controls="responsiveDataTable" data-dt-idx="6"
                                                        tabindex="0" class="page-link">Next</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- End:: row-2 --> <!-- Start:: row-3 -->
            <div class="row">
                <div class="col-xl-12">
                    <div class="card custom-card">
                        <div class="card-header">
                            <div class="card-title"> Responisve Modal Datatable </div>
                        </div>
                        <div class="card-body">
                            <div id="responsivemodal-DataTable_wrapper"
                                class="dataTables_wrapper dt-bootstrap5 no-footer">
                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <div class="dataTables_length" id="responsivemodal-DataTable_length"><label>Show
                                                <select name="responsivemodal-DataTable_length"
                                                    aria-controls="responsivemodal-DataTable"
                                                    class="form-select form-select-sm">
                                                    <option value="10">10</option>
                                                    <option value="25">25</option>
                                                    <option value="50">50</option>
                                                    <option value="100">100</option>
                                                </select> entries</label></div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <div id="responsivemodal-DataTable_filter" class="dataTables_filter">
                                            <label>Search:<input type="search" class="form-control form-control-sm"
                                                    placeholder="" aria-controls="responsivemodal-DataTable"></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table id="responsivemodal-DataTable"
                                            class="table table-bordered text-nowrap dataTable no-footer dtr-inline"
                                            style="width: 100%;" aria-describedby="responsivemodal-DataTable_info">
                                            <thead>
                                                <tr>
                                                    <th scope="col" class="sorting sorting_asc" tabindex="0"
                                                        aria-controls="responsivemodal-DataTable" rowspan="1"
                                                        colspan="1" style="width: 273.16px;" aria-sort="ascending"
                                                        aria-label="Name: activate to sort column descending">Name</th>
                                                    <th scope="col" class="sorting" tabindex="0"
                                                        aria-controls="responsivemodal-DataTable" rowspan="1"
                                                        colspan="1" style="width: 401.16px;"
                                                        aria-label="Position: activate to sort column ascending">Position
                                                    </th>
                                                    <th scope="col" class="sorting" tabindex="0"
                                                        aria-controls="responsivemodal-DataTable" rowspan="1"
                                                        colspan="1" style="width: 204.16px;"
                                                        aria-label="Office: activate to sort column ascending">Office</th>
                                                    <th scope="col" class="sorting" tabindex="0"
                                                        aria-controls="responsivemodal-DataTable" rowspan="1"
                                                        colspan="1" style="width: 102.16px;"
                                                        aria-label="Age: activate to sort column ascending">Age</th>
                                                    <th scope="col" class="sorting" tabindex="0"
                                                        aria-controls="responsivemodal-DataTable" rowspan="1"
                                                        colspan="1" style="width: 188.16px;"
                                                        aria-label="Start date: activate to sort column ascending">Start
                                                        date</th>
                                                    <th scope="col" class="sorting" tabindex="0"
                                                        aria-controls="responsivemodal-DataTable" rowspan="1"
                                                        colspan="1" style="width: 168.16px;"
                                                        aria-label="Salary: activate to sort column ascending">Salary</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="odd">
                                                    <td class="dtr-control sorting_1" tabindex="0">Airi Satou</td>
                                                    <td>Accountant</td>
                                                    <td>Tokyo</td>
                                                    <td>33</td>
                                                    <td>2008/11/28</td>
                                                    <td>$162,700</td>
                                                </tr>
                                                <tr class="even">
                                                    <td class="sorting_1 dtr-control">Angelica Ramos</td>
                                                    <td>Chief Executive Officer (CEO)</td>
                                                    <td>London</td>
                                                    <td>47</td>
                                                    <td>2009/10/09</td>
                                                    <td>$1,200,000</td>
                                                </tr>
                                                <tr class="odd">
                                                    <td class="dtr-control sorting_1" tabindex="0">Ashton Cox</td>
                                                    <td>Junior Technical Author</td>
                                                    <td>San Francisco</td>
                                                    <td>66</td>
                                                    <td>2009/01/12</td>
                                                    <td>$86,000</td>
                                                </tr>
                                                <tr class="even">
                                                    <td class="sorting_1 dtr-control">Bradley Greer</td>
                                                    <td>Software Engineer</td>
                                                    <td>London</td>
                                                    <td>41</td>
                                                    <td>2012/10/13</td>
                                                    <td>$132,000</td>
                                                </tr>
                                                <tr class="odd">
                                                    <td class="sorting_1 dtr-control">Brenden Wagner</td>
                                                    <td>Software Engineer</td>
                                                    <td>San Francisco</td>
                                                    <td>28</td>
                                                    <td>2011/06/07</td>
                                                    <td>$206,850</td>
                                                </tr>
                                                <tr class="even">
                                                    <td class="dtr-control sorting_1" tabindex="0">Brielle Williamson
                                                    </td>
                                                    <td>Integration Specialist</td>
                                                    <td>New York</td>
                                                    <td>61</td>
                                                    <td>2012/12/02</td>
                                                    <td>$372,000</td>
                                                </tr>
                                                <tr class="odd">
                                                    <td class="sorting_1 dtr-control">Bruno Nash</td>
                                                    <td>Software Engineer</td>
                                                    <td>London</td>
                                                    <td>38</td>
                                                    <td>2011/05/03</td>
                                                    <td>$163,500</td>
                                                </tr>
                                                <tr class="even">
                                                    <td class="sorting_1 dtr-control">Caesar Vance</td>
                                                    <td>Pre-Sales Support</td>
                                                    <td>New York</td>
                                                    <td>21</td>
                                                    <td>2011/12/12</td>
                                                    <td>$106,450</td>
                                                </tr>
                                                <tr class="odd">
                                                    <td class="sorting_1 dtr-control">Cara Stevens</td>
                                                    <td>Sales Assistant</td>
                                                    <td>New York</td>
                                                    <td>46</td>
                                                    <td>2011/12/06</td>
                                                    <td>$145,600</td>
                                                </tr>
                                                <tr class="even">
                                                    <td class="dtr-control sorting_1" tabindex="0">Cedric Kelly</td>
                                                    <td>Senior Javascript Developer</td>
                                                    <td>Edinburgh</td>
                                                    <td>22</td>
                                                    <td>2012/03/29</td>
                                                    <td>$433,060</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 col-md-5">
                                        <div class="dataTables_info" id="responsivemodal-DataTable_info" role="status"
                                            aria-live="polite">Showing 1 to 10 of 57 entries</div>
                                    </div>
                                    <div class="col-sm-12 col-md-7">
                                        <div class="dataTables_paginate paging_simple_numbers"
                                            id="responsivemodal-DataTable_paginate">
                                            <ul class="pagination">
                                                <li class="paginate_button page-item previous disabled"
                                                    id="responsivemodal-DataTable_previous"><a href="#"
                                                        aria-controls="responsivemodal-DataTable" data-dt-idx="0"
                                                        tabindex="0" class="page-link">Previous</a></li>
                                                <li class="paginate_button page-item active"><a href="#"
                                                        aria-controls="responsivemodal-DataTable" data-dt-idx="1"
                                                        tabindex="0" class="page-link">1</a></li>
                                                <li class="paginate_button page-item "><a href="#"
                                                        aria-controls="responsivemodal-DataTable" data-dt-idx="2"
                                                        tabindex="0" class="page-link">2</a></li>
                                                <li class="paginate_button page-item "><a href="#"
                                                        aria-controls="responsivemodal-DataTable" data-dt-idx="3"
                                                        tabindex="0" class="page-link">3</a></li>
                                                <li class="paginate_button page-item "><a href="#"
                                                        aria-controls="responsivemodal-DataTable" data-dt-idx="4"
                                                        tabindex="0" class="page-link">4</a></li>
                                                <li class="paginate_button page-item "><a href="#"
                                                        aria-controls="responsivemodal-DataTable" data-dt-idx="5"
                                                        tabindex="0" class="page-link">5</a></li>
                                                <li class="paginate_button page-item "><a href="#"
                                                        aria-controls="responsivemodal-DataTable" data-dt-idx="6"
                                                        tabindex="0" class="page-link">6</a></li>
                                                <li class="paginate_button page-item next"
                                                    id="responsivemodal-DataTable_next"><a href="#"
                                                        aria-controls="responsivemodal-DataTable" data-dt-idx="7"
                                                        tabindex="0" class="page-link">Next</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- End:: row-3 --> <!-- Start:: row-4 -->
            <div class="row">
                <div class="col-xl-12">
                    <div class="card custom-card">
                        <div class="card-header">
                            <div class="card-title">File Export Datatable</div>
                        </div>
                        <div class="card-body">
                            <div id="file-export_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                                <div class="dt-buttons"> <button class="dt-button buttons-copy buttons-html5"
                                        tabindex="0" aria-controls="file-export"
                                        type="button"><span>Copy</span></button> <button
                                        class="dt-button buttons-csv buttons-html5" tabindex="0"
                                        aria-controls="file-export" type="button"><span>CSV</span></button> <button
                                        class="dt-button buttons-excel buttons-html5" tabindex="0"
                                        aria-controls="file-export" type="button"><span>Excel</span></button> <button
                                        class="dt-button buttons-pdf buttons-html5" tabindex="0"
                                        aria-controls="file-export" type="button"><span>PDF</span></button> <button
                                        class="dt-button buttons-print" tabindex="0" aria-controls="file-export"
                                        type="button"><span>Print</span></button> </div>
                                <div id="file-export_filter" class="dataTables_filter"><label>Search:<input
                                            type="search" class="form-control form-control-sm" placeholder=""
                                            aria-controls="file-export"></label></div>
                                <div class="dataTables_scroll">
                                    <div class="dataTables_scrollHead"
                                        style="overflow: hidden; position: relative; border: 0px; width: 100%;">
                                        <div class="dataTables_scrollHeadInner"
                                            style="box-sizing: content-box; width: 1568px; padding-right: 0px;">
                                            <table class="table table-bordered text-nowrap dataTable no-footer"
                                                style="width: 1568px; margin-left: 0px;">
                                                <thead>
                                                    <tr>
                                                        <th scope="col" class="sorting sorting_asc" tabindex="0"
                                                            aria-controls="file-export" rowspan="1" colspan="1"
                                                            style="width: 272.547px;" aria-sort="ascending"
                                                            aria-label="Name: activate to sort column descending">Name</th>
                                                        <th scope="col" class="sorting" tabindex="0"
                                                            aria-controls="file-export" rowspan="1" colspan="1"
                                                            style="width: 400.359px;"
                                                            aria-label="Position: activate to sort column ascending">
                                                            Position</th>
                                                        <th scope="col" class="sorting" tabindex="0"
                                                            aria-controls="file-export" rowspan="1" colspan="1"
                                                            style="width: 203.703px;"
                                                            aria-label="Office: activate to sort column ascending">Office
                                                        </th>
                                                        <th scope="col" class="sorting" tabindex="0"
                                                            aria-controls="file-export" rowspan="1" colspan="1"
                                                            style="width: 101.891px;"
                                                            aria-label="Age: activate to sort column ascending">Age</th>
                                                        <th scope="col" class="sorting" tabindex="0"
                                                            aria-controls="file-export" rowspan="1" colspan="1"
                                                            style="width: 187.734px;"
                                                            aria-label="Start date: activate to sort column ascending">
                                                            Start date</th>
                                                        <th scope="col" class="sorting" tabindex="0"
                                                            aria-controls="file-export" rowspan="1" colspan="1"
                                                            style="width: 167.797px;"
                                                            aria-label="Salary: activate to sort column ascending">Salary
                                                        </th>
                                                    </tr>
                                                </thead>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="dataTables_scrollBody"
                                        style="position: relative; overflow: auto; width: 100%;">
                                        <table id="file-export"
                                            class="table table-bordered text-nowrap dataTable no-footer"
                                            style="width: 100%;" aria-describedby="file-export_info">
                                            <thead>
                                                <tr style="height: 0px;">
                                                    <th scope="col" class="sorting sorting_asc"
                                                        aria-controls="file-export" rowspan="1" colspan="1"
                                                        style="width: 272.547px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"
                                                        aria-sort="ascending"
                                                        aria-label="Name: activate to sort column descending">
                                                        <div class="dataTables_sizing"
                                                            style="height: 0px; overflow: hidden;">Name</div>
                                                    </th>
                                                    <th scope="col" class="sorting" aria-controls="file-export"
                                                        rowspan="1" colspan="1"
                                                        style="width: 400.359px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"
                                                        aria-label="Position: activate to sort column ascending">
                                                        <div class="dataTables_sizing"
                                                            style="height: 0px; overflow: hidden;">Position</div>
                                                    </th>
                                                    <th scope="col" class="sorting" aria-controls="file-export"
                                                        rowspan="1" colspan="1"
                                                        style="width: 203.703px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"
                                                        aria-label="Office: activate to sort column ascending">
                                                        <div class="dataTables_sizing"
                                                            style="height: 0px; overflow: hidden;">Office</div>
                                                    </th>
                                                    <th scope="col" class="sorting" aria-controls="file-export"
                                                        rowspan="1" colspan="1"
                                                        style="width: 101.891px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"
                                                        aria-label="Age: activate to sort column ascending">
                                                        <div class="dataTables_sizing"
                                                            style="height: 0px; overflow: hidden;">Age</div>
                                                    </th>
                                                    <th scope="col" class="sorting" aria-controls="file-export"
                                                        rowspan="1" colspan="1"
                                                        style="width: 187.734px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"
                                                        aria-label="Start date: activate to sort column ascending">
                                                        <div class="dataTables_sizing"
                                                            style="height: 0px; overflow: hidden;">Start date</div>
                                                    </th>
                                                    <th scope="col" class="sorting" aria-controls="file-export"
                                                        rowspan="1" colspan="1"
                                                        style="width: 167.797px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"
                                                        aria-label="Salary: activate to sort column ascending">
                                                        <div class="dataTables_sizing"
                                                            style="height: 0px; overflow: hidden;">Salary</div>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="odd">
                                                    <td class="sorting_1">Airi Satou</td>
                                                    <td>Accountant</td>
                                                    <td>Tokyo</td>
                                                    <td>33</td>
                                                    <td>2008-11-28</td>
                                                    <td>$162,700</td>
                                                </tr>
                                                <tr class="even">
                                                    <td class="sorting_1">Angelica Ramos</td>
                                                    <td>Chief Executive Officer (CEO)</td>
                                                    <td>London</td>
                                                    <td>47</td>
                                                    <td>2009-10-09</td>
                                                    <td>$1,200,000</td>
                                                </tr>
                                                <tr class="odd">
                                                    <td class="sorting_1">Ashton Cox</td>
                                                    <td>Junior Technical Author</td>
                                                    <td>San Francisco</td>
                                                    <td>66</td>
                                                    <td>2009-01-12</td>
                                                    <td>$86,000</td>
                                                </tr>
                                                <tr class="even">
                                                    <td class="sorting_1">Bradley Greer</td>
                                                    <td>Software Engineer</td>
                                                    <td>London</td>
                                                    <td>41</td>
                                                    <td>2012-10-13</td>
                                                    <td>$132,000</td>
                                                </tr>
                                                <tr class="odd">
                                                    <td class="sorting_1">Brenden Wagner</td>
                                                    <td>Software Engineer</td>
                                                    <td>San Francisco</td>
                                                    <td>28</td>
                                                    <td>2011-06-07</td>
                                                    <td>$206,850</td>
                                                </tr>
                                                <tr class="even">
                                                    <td class="sorting_1">Brielle Williamson</td>
                                                    <td>Integration Specialist</td>
                                                    <td>New York</td>
                                                    <td>61</td>
                                                    <td>2012-12-02</td>
                                                    <td>$372,000</td>
                                                </tr>
                                                <tr class="odd">
                                                    <td class="sorting_1">Bruno Nash</td>
                                                    <td>Software Engineer</td>
                                                    <td>London</td>
                                                    <td>38</td>
                                                    <td>2011-05-03</td>
                                                    <td>$163,500</td>
                                                </tr>
                                                <tr class="even">
                                                    <td class="sorting_1">Caesar Vance</td>
                                                    <td>Pre-Sales Support</td>
                                                    <td>New York</td>
                                                    <td>21</td>
                                                    <td>2011-12-12</td>
                                                    <td>$106,450</td>
                                                </tr>
                                                <tr class="odd">
                                                    <td class="sorting_1">Cara Stevens</td>
                                                    <td>Sales Assistant</td>
                                                    <td>New York</td>
                                                    <td>46</td>
                                                    <td>2011-12-06</td>
                                                    <td>$145,600</td>
                                                </tr>
                                                <tr class="even">
                                                    <td class="sorting_1">Cedric Kelly</td>
                                                    <td>Senior Javascript Developer</td>
                                                    <td>Edinburgh</td>
                                                    <td>22</td>
                                                    <td>2012-03-29</td>
                                                    <td>$433,060</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="dataTables_info" id="file-export_info" role="status" aria-live="polite">
                                    Showing 1 to 10 of 57 entries</div>
                                <div class="dataTables_paginate paging_simple_numbers" id="file-export_paginate">
                                    <ul class="pagination">
                                        <li class="paginate_button page-item previous disabled" id="file-export_previous">
                                            <a href="#" aria-controls="file-export" data-dt-idx="0" tabindex="0"
                                                class="page-link">Previous</a></li>
                                        <li class="paginate_button page-item active"><a href="#"
                                                aria-controls="file-export" data-dt-idx="1" tabindex="0"
                                                class="page-link">1</a></li>
                                        <li class="paginate_button page-item "><a href="#"
                                                aria-controls="file-export" data-dt-idx="2" tabindex="0"
                                                class="page-link">2</a></li>
                                        <li class="paginate_button page-item "><a href="#"
                                                aria-controls="file-export" data-dt-idx="3" tabindex="0"
                                                class="page-link">3</a></li>
                                        <li class="paginate_button page-item "><a href="#"
                                                aria-controls="file-export" data-dt-idx="4" tabindex="0"
                                                class="page-link">4</a></li>
                                        <li class="paginate_button page-item "><a href="#"
                                                aria-controls="file-export" data-dt-idx="5" tabindex="0"
                                                class="page-link">5</a></li>
                                        <li class="paginate_button page-item "><a href="#"
                                                aria-controls="file-export" data-dt-idx="6" tabindex="0"
                                                class="page-link">6</a></li>
                                        <li class="paginate_button page-item next" id="file-export_next"><a
                                                href="#" aria-controls="file-export" data-dt-idx="7"
                                                tabindex="0" class="page-link">Next</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- End:: row-4 --> <!-- Start:: row-5 -->
            <div class="row">
                <div class="col-xl-12">
                    <div class="card custom-card">
                        <div class="card-header">
                            <div class="card-title"> Delete Row Datatable </div>
                        </div>
                        <div class="card-body">
                            <div class="deleted-table table-responsive">
                                <div class="text-center"> <button type="button" id="button"
                                        class="btn btn-primary btn-sm data-table-btn">Delete selected row</button> </div>
                                <div id="delete-datatable_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6">
                                            <div class="dataTables_length" id="delete-datatable_length"><label>Show
                                                    <select name="delete-datatable_length"
                                                        aria-controls="delete-datatable"
                                                        class="form-select form-select-sm">
                                                        <option value="10">10</option>
                                                        <option value="25">25</option>
                                                        <option value="50">50</option>
                                                        <option value="100">100</option>
                                                    </select> entries</label></div>
                                        </div>
                                        <div class="col-sm-12 col-md-6">
                                            <div id="delete-datatable_filter" class="dataTables_filter"><label><input
                                                        type="search" class="form-control form-control-sm"
                                                        placeholder="Search..." aria-controls="delete-datatable"></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <table id="delete-datatable"
                                                class="table table-bordered text-nowrap dataTable no-footer"
                                                aria-describedby="delete-datatable_info">
                                                <thead>
                                                    <tr>
                                                        <th scope="col" class="sorting sorting_asc" tabindex="0"
                                                            aria-controls="delete-datatable" rowspan="1"
                                                            colspan="1" aria-sort="ascending"
                                                            aria-label="Name: activate to sort column descending"
                                                            style="width: 268.078px;">Name</th>
                                                        <th scope="col" class="sorting" tabindex="0"
                                                            aria-controls="delete-datatable" rowspan="1"
                                                            colspan="1"
                                                            aria-label="Position: activate to sort column ascending"
                                                            style="width: 418.031px;">Position</th>
                                                        <th scope="col" class="sorting" tabindex="0"
                                                            aria-controls="delete-datatable" rowspan="1"
                                                            colspan="1"
                                                            aria-label="Office: activate to sort column ascending"
                                                            style="width: 199.938px;">Office</th>
                                                        <th scope="col" class="sorting" tabindex="0"
                                                            aria-controls="delete-datatable" rowspan="1"
                                                            colspan="1"
                                                            aria-label="Age: activate to sort column ascending"
                                                            style="width: 99.6875px;">Age</th>
                                                        <th scope="col" class="sorting" tabindex="0"
                                                            aria-controls="delete-datatable" rowspan="1"
                                                            colspan="1"
                                                            aria-label="Start date: activate to sort column ascending"
                                                            style="width: 183.859px;">Start date</th>
                                                        <th scope="col" class="sorting" tabindex="0"
                                                            aria-controls="delete-datatable" rowspan="1"
                                                            colspan="1"
                                                            aria-label="Salary: activate to sort column ascending"
                                                            style="width: 164.438px;">Salary</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="odd">
                                                        <td class="sorting_1">Airi Satou</td>
                                                        <td>Accountant</td>
                                                        <td>Tokyo</td>
                                                        <td>33</td>
                                                        <td>2008/11/28</td>
                                                        <td>$162,700</td>
                                                    </tr>
                                                    <tr class="even">
                                                        <td class="sorting_1">Angelica Ramos</td>
                                                        <td>Chief Executive Officer (CEO)</td>
                                                        <td>London</td>
                                                        <td>47</td>
                                                        <td>2009/10/09</td>
                                                        <td>$1,200,000</td>
                                                    </tr>
                                                    <tr class="odd">
                                                        <td class="sorting_1">Ashton Cox</td>
                                                        <td>Junior Technical Author</td>
                                                        <td>San Francisco</td>
                                                        <td>66</td>
                                                        <td>2009/01/12</td>
                                                        <td>$86,000</td>
                                                    </tr>
                                                    <tr class="even">
                                                        <td class="sorting_1">Bradley Greer</td>
                                                        <td>Software Engineer</td>
                                                        <td>London</td>
                                                        <td>41</td>
                                                        <td>2012/10/13</td>
                                                        <td>$132,000</td>
                                                    </tr>
                                                    <tr class="odd">
                                                        <td class="sorting_1">Brenden Wagner</td>
                                                        <td>Software Engineer</td>
                                                        <td>San Francisco</td>
                                                        <td>28</td>
                                                        <td>2011/06/07</td>
                                                        <td>$206,850</td>
                                                    </tr>
                                                    <tr class="even">
                                                        <td class="sorting_1">Brielle Williamson</td>
                                                        <td>Integration Specialist</td>
                                                        <td>New York</td>
                                                        <td>61</td>
                                                        <td>2012/12/02</td>
                                                        <td>$372,000</td>
                                                    </tr>
                                                    <tr class="odd">
                                                        <td class="sorting_1">Bruno Nash</td>
                                                        <td>Software Engineer</td>
                                                        <td>London</td>
                                                        <td>38</td>
                                                        <td>2011/05/03</td>
                                                        <td>$163,500</td>
                                                    </tr>
                                                    <tr class="even">
                                                        <td class="sorting_1">Caesar Vance</td>
                                                        <td>Pre-Sales Support</td>
                                                        <td>New York</td>
                                                        <td>21</td>
                                                        <td>2011/12/12</td>
                                                        <td>$106,450</td>
                                                    </tr>
                                                    <tr class="odd">
                                                        <td class="sorting_1">Cara Stevens</td>
                                                        <td>Sales Assistant</td>
                                                        <td>New York</td>
                                                        <td>46</td>
                                                        <td>2011/12/06</td>
                                                        <td>$145,600</td>
                                                    </tr>
                                                    <tr class="even">
                                                        <td class="sorting_1">Cedric Kelly</td>
                                                        <td>Senior Javascript Developer</td>
                                                        <td>Edinburgh</td>
                                                        <td>22</td>
                                                        <td>2012/03/29</td>
                                                        <td>$433,060</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 col-md-5">
                                            <div class="dataTables_info" id="delete-datatable_info" role="status"
                                                aria-live="polite">Showing 1 to 10 of 57 entries</div>
                                        </div>
                                        <div class="col-sm-12 col-md-7">
                                            <div class="dataTables_paginate paging_simple_numbers"
                                                id="delete-datatable_paginate">
                                                <ul class="pagination">
                                                    <li class="paginate_button page-item previous disabled"
                                                        id="delete-datatable_previous"><a href="#"
                                                            aria-controls="delete-datatable" data-dt-idx="0"
                                                            tabindex="0" class="page-link">Previous</a></li>
                                                    <li class="paginate_button page-item active"><a href="#"
                                                            aria-controls="delete-datatable" data-dt-idx="1"
                                                            tabindex="0" class="page-link">1</a></li>
                                                    <li class="paginate_button page-item "><a href="#"
                                                            aria-controls="delete-datatable" data-dt-idx="2"
                                                            tabindex="0" class="page-link">2</a></li>
                                                    <li class="paginate_button page-item "><a href="#"
                                                            aria-controls="delete-datatable" data-dt-idx="3"
                                                            tabindex="0" class="page-link">3</a></li>
                                                    <li class="paginate_button page-item "><a href="#"
                                                            aria-controls="delete-datatable" data-dt-idx="4"
                                                            tabindex="0" class="page-link">4</a></li>
                                                    <li class="paginate_button page-item "><a href="#"
                                                            aria-controls="delete-datatable" data-dt-idx="5"
                                                            tabindex="0" class="page-link">5</a></li>
                                                    <li class="paginate_button page-item "><a href="#"
                                                            aria-controls="delete-datatable" data-dt-idx="6"
                                                            tabindex="0" class="page-link">6</a></li>
                                                    <li class="paginate_button page-item next" id="delete-datatable_next">
                                                        <a href="#" aria-controls="delete-datatable"
                                                            data-dt-idx="7" tabindex="0" class="page-link">Next</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- End:: row-5 --> <!-- Start:: row-6 -->
            <div class="row">
                <div class="col-xl-12">
                    <div class="card custom-card">
                        <div class="card-header">
                            <div class="card-title"> Add New Row </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <div class="text-center"> <button type="button" id="addRow"
                                        class="btn btn-sm btn-primary mb-2 data-table-btn">Add new row</button> </div>
                                <div id="add-row_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6">
                                            <div class="dataTables_length" id="add-row_length"><label>Show <select
                                                        name="add-row_length" aria-controls="add-row"
                                                        class="form-select form-select-sm">
                                                        <option value="10">10</option>
                                                        <option value="25">25</option>
                                                        <option value="50">50</option>
                                                        <option value="100">100</option>
                                                    </select> entries</label></div>
                                        </div>
                                        <div class="col-sm-12 col-md-6">
                                            <div id="add-row_filter" class="dataTables_filter"><label>Search:<input
                                                        type="search" class="form-control form-control-sm"
                                                        placeholder="" aria-controls="add-row"></label></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <table id="add-row"
                                                class="table table-bordered text-nowrap dataTable no-footer"
                                                style="width: 100%;" aria-describedby="add-row_info">
                                                <thead>
                                                    <tr>
                                                        <th scope="col" class="sorting sorting_asc" tabindex="0"
                                                            aria-controls="add-row" rowspan="1" colspan="1"
                                                            aria-sort="ascending"
                                                            aria-label="Column 1: activate to sort column descending"
                                                            style="width: 271.16px;">Column 1</th>
                                                        <th scope="col" class="sorting" tabindex="0"
                                                            aria-controls="add-row" rowspan="1" colspan="1"
                                                            aria-label="Column 2: activate to sort column ascending"
                                                            style="width: 275.16px;">Column 2</th>
                                                        <th scope="col" class="sorting" tabindex="0"
                                                            aria-controls="add-row" rowspan="1" colspan="1"
                                                            aria-label="Column 3: activate to sort column ascending"
                                                            style="width: 276.16px;">Column 3</th>
                                                        <th scope="col" class="sorting" tabindex="0"
                                                            aria-controls="add-row" rowspan="1" colspan="1"
                                                            aria-label="Column 4: activate to sort column ascending"
                                                            style="width: 277.16px;">Column 4</th>
                                                        <th scope="col" class="sorting" tabindex="0"
                                                            aria-controls="add-row" rowspan="1" colspan="1"
                                                            aria-label="Column 5: activate to sort column ascending"
                                                            style="width: 275.16px;">Column 5</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="odd">
                                                        <td valign="top" colspan="5" class="dataTables_empty">No
                                                            data available in table</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 col-md-5">
                                            <div class="dataTables_info" id="add-row_info" role="status"
                                                aria-live="polite">Showing 0 to 0 of 0 entries</div>
                                        </div>
                                        <div class="col-sm-12 col-md-7">
                                            <div class="dataTables_paginate paging_simple_numbers"
                                                id="add-row_paginate">
                                                <ul class="pagination">
                                                    <li class="paginate_button page-item previous disabled"
                                                        id="add-row_previous"><a href="#"
                                                            aria-controls="add-row" data-dt-idx="0" tabindex="0"
                                                            class="page-link">Previous</a></li>
                                                    <li class="paginate_button page-item next disabled"
                                                        id="add-row_next"><a href="#" aria-controls="add-row"
                                                            data-dt-idx="1" tabindex="0" class="page-link">Next</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- End:: row-6 --> <!-- Start:: row-7 -->
            <div class="row">
                <div class="col-xl-12">
                    <div class="card custom-card">
                        <div class="card-header">
                            <div class="card-title"> Scroll Vertical </div>
                        </div>
                        <div class="card-body">
                            <div id="scroll-vertical_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                                <div class="row">
                                    <div class="col-sm-12 col-md-6"></div>
                                    <div class="col-sm-12 col-md-6">
                                        <div id="scroll-vertical_filter" class="dataTables_filter"><label>Search:<input
                                                    type="search" class="form-control form-control-sm" placeholder=""
                                                    aria-controls="scroll-vertical"></label></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="dataTables_scroll">
                                            <div class="dataTables_scrollHead"
                                                style="overflow: hidden; position: relative; border: 0px; width: 100%;">
                                                <div class="dataTables_scrollHeadInner"
                                                    style="box-sizing: content-box; width: 1564px; padding-right: 4px;">
                                                    <table class="table table-bordered text-nowrap dataTable no-footer"
                                                        style="width: 1564px; margin-left: 0px;">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col" class="sorting sorting_asc"
                                                                    tabindex="0" aria-controls="scroll-vertical"
                                                                    rowspan="1" colspan="1"
                                                                    style="width: 272.562px;" aria-sort="ascending"
                                                                    aria-label="Name: activate to sort column descending">
                                                                    Name</th>
                                                                <th scope="col" class="sorting" tabindex="0"
                                                                    aria-controls="scroll-vertical" rowspan="1"
                                                                    colspan="1" style="width: 399.359px;"
                                                                    aria-label="Position: activate to sort column ascending">
                                                                    Position</th>
                                                                <th scope="col" class="sorting" tabindex="0"
                                                                    aria-controls="scroll-vertical" rowspan="1"
                                                                    colspan="1" style="width: 202.688px;"
                                                                    aria-label="Office: activate to sort column ascending">
                                                                    Office</th>
                                                                <th scope="col" class="sorting" tabindex="0"
                                                                    aria-controls="scroll-vertical" rowspan="1"
                                                                    colspan="1" style="width: 101.875px;"
                                                                    aria-label="Age: activate to sort column ascending">
                                                                    Age</th>
                                                                <th scope="col" class="sorting" tabindex="0"
                                                                    aria-controls="scroll-vertical" rowspan="1"
                                                                    colspan="1" style="width: 186.719px;"
                                                                    aria-label="Start date: activate to sort column ascending">
                                                                    Start date</th>
                                                                <th scope="col" class="sorting" tabindex="0"
                                                                    aria-controls="scroll-vertical" rowspan="1"
                                                                    colspan="1" style="width: 166.828px;"
                                                                    aria-label="Salary: activate to sort column ascending">
                                                                    Salary</th>
                                                            </tr>
                                                        </thead>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="dataTables_scrollBody"
                                                style="position: relative; overflow: auto; width: 100%; max-height: 265px;">
                                                <table id="scroll-vertical"
                                                    class="table table-bordered text-nowrap dataTable no-footer"
                                                    style="width: 100%;" aria-describedby="scroll-vertical_info">
                                                    <thead>
                                                        <tr style="height: 0px;">
                                                            <th scope="col" class="sorting sorting_asc"
                                                                aria-controls="scroll-vertical" rowspan="1"
                                                                colspan="1"
                                                                style="width: 272.562px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"
                                                                aria-sort="ascending"
                                                                aria-label="Name: activate to sort column descending">
                                                                <div class="dataTables_sizing"
                                                                    style="height: 0px; overflow: hidden;">Name</div>
                                                            </th>
                                                            <th scope="col" class="sorting"
                                                                aria-controls="scroll-vertical" rowspan="1"
                                                                colspan="1"
                                                                style="width: 399.359px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"
                                                                aria-label="Position: activate to sort column ascending">
                                                                <div class="dataTables_sizing"
                                                                    style="height: 0px; overflow: hidden;">Position</div>
                                                            </th>
                                                            <th scope="col" class="sorting"
                                                                aria-controls="scroll-vertical" rowspan="1"
                                                                colspan="1"
                                                                style="width: 202.688px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"
                                                                aria-label="Office: activate to sort column ascending">
                                                                <div class="dataTables_sizing"
                                                                    style="height: 0px; overflow: hidden;">Office</div>
                                                            </th>
                                                            <th scope="col" class="sorting"
                                                                aria-controls="scroll-vertical" rowspan="1"
                                                                colspan="1"
                                                                style="width: 101.875px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"
                                                                aria-label="Age: activate to sort column ascending">
                                                                <div class="dataTables_sizing"
                                                                    style="height: 0px; overflow: hidden;">Age</div>
                                                            </th>
                                                            <th scope="col" class="sorting"
                                                                aria-controls="scroll-vertical" rowspan="1"
                                                                colspan="1"
                                                                style="width: 186.719px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"
                                                                aria-label="Start date: activate to sort column ascending">
                                                                <div class="dataTables_sizing"
                                                                    style="height: 0px; overflow: hidden;">Start date
                                                                </div>
                                                            </th>
                                                            <th scope="col" class="sorting"
                                                                aria-controls="scroll-vertical" rowspan="1"
                                                                colspan="1"
                                                                style="width: 166.828px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"
                                                                aria-label="Salary: activate to sort column ascending">
                                                                <div class="dataTables_sizing"
                                                                    style="height: 0px; overflow: hidden;">Salary</div>
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="odd">
                                                            <td class="sorting_1">Airi Satou</td>
                                                            <td>Accountant</td>
                                                            <td>Tokyo</td>
                                                            <td>33</td>
                                                            <td>2008-11-28</td>
                                                            <td>$162,700</td>
                                                        </tr>
                                                        <tr class="even">
                                                            <td class="sorting_1">Angelica Ramos</td>
                                                            <td>Chief Executive Officer (CEO)</td>
                                                            <td>London</td>
                                                            <td>47</td>
                                                            <td>2009-10-09</td>
                                                            <td>$1,200,000</td>
                                                        </tr>
                                                        <tr class="odd">
                                                            <td class="sorting_1">Ashton Cox</td>
                                                            <td>Junior Technical Author</td>
                                                            <td>San Francisco</td>
                                                            <td>66</td>
                                                            <td>2009-01-12</td>
                                                            <td>$86,000</td>
                                                        </tr>
                                                        <tr class="even">
                                                            <td class="sorting_1">Bradley Greer</td>
                                                            <td>Software Engineer</td>
                                                            <td>London</td>
                                                            <td>41</td>
                                                            <td>2012-10-13</td>
                                                            <td>$132,000</td>
                                                        </tr>
                                                        <tr class="odd">
                                                            <td class="sorting_1">Brenden Wagner</td>
                                                            <td>Software Engineer</td>
                                                            <td>San Francisco</td>
                                                            <td>28</td>
                                                            <td>2011-06-07</td>
                                                            <td>$206,850</td>
                                                        </tr>
                                                        <tr class="even">
                                                            <td class="sorting_1">Brielle Williamson</td>
                                                            <td>Integration Specialist</td>
                                                            <td>New York</td>
                                                            <td>61</td>
                                                            <td>2012-12-02</td>
                                                            <td>$372,000</td>
                                                        </tr>
                                                        <tr class="odd">
                                                            <td class="sorting_1">Bruno Nash</td>
                                                            <td>Software Engineer</td>
                                                            <td>London</td>
                                                            <td>38</td>
                                                            <td>2011-05-03</td>
                                                            <td>$163,500</td>
                                                        </tr>
                                                        <tr class="even">
                                                            <td class="sorting_1">Caesar Vance</td>
                                                            <td>Pre-Sales Support</td>
                                                            <td>New York</td>
                                                            <td>21</td>
                                                            <td>2011-12-12</td>
                                                            <td>$106,450</td>
                                                        </tr>
                                                        <tr class="odd">
                                                            <td class="sorting_1">Cara Stevens</td>
                                                            <td>Sales Assistant</td>
                                                            <td>New York</td>
                                                            <td>46</td>
                                                            <td>2011-12-06</td>
                                                            <td>$145,600</td>
                                                        </tr>
                                                        <tr class="even">
                                                            <td class="sorting_1">Cedric Kelly</td>
                                                            <td>Senior Javascript Developer</td>
                                                            <td>Edinburgh</td>
                                                            <td>22</td>
                                                            <td>2012-03-29</td>
                                                            <td>$433,060</td>
                                                        </tr>
                                                        <tr class="odd">
                                                            <td class="sorting_1">Charde Marshall</td>
                                                            <td>Regional Director</td>
                                                            <td>San Francisco</td>
                                                            <td>36</td>
                                                            <td>2008-10-16</td>
                                                            <td>$470,600</td>
                                                        </tr>
                                                        <tr class="even">
                                                            <td class="sorting_1">Colleen Hurst</td>
                                                            <td>Javascript Developer</td>
                                                            <td>San Francisco</td>
                                                            <td>39</td>
                                                            <td>2009-09-15</td>
                                                            <td>$205,500</td>
                                                        </tr>
                                                        <tr class="odd">
                                                            <td class="sorting_1">Dai Rios</td>
                                                            <td>Personnel Lead</td>
                                                            <td>Edinburgh</td>
                                                            <td>35</td>
                                                            <td>2012-09-26</td>
                                                            <td>$217,500</td>
                                                        </tr>
                                                        <tr class="even">
                                                            <td class="sorting_1">Donna Snider</td>
                                                            <td>Customer Support</td>
                                                            <td>New York</td>
                                                            <td>27</td>
                                                            <td>2011-01-25</td>
                                                            <td>$112,000</td>
                                                        </tr>
                                                        <tr class="odd">
                                                            <td class="sorting_1">Doris Wilder</td>
                                                            <td>Sales Assistant</td>
                                                            <td>Sydney</td>
                                                            <td>23</td>
                                                            <td>2010-09-20</td>
                                                            <td>$85,600</td>
                                                        </tr>
                                                        <tr class="even">
                                                            <td class="sorting_1">Finn Camacho</td>
                                                            <td>Support Engineer</td>
                                                            <td>San Francisco</td>
                                                            <td>47</td>
                                                            <td>2009-07-07</td>
                                                            <td>$87,500</td>
                                                        </tr>
                                                        <tr class="odd">
                                                            <td class="sorting_1">Fiona Green</td>
                                                            <td>Chief Operating Officer (COO)</td>
                                                            <td>San Francisco</td>
                                                            <td>48</td>
                                                            <td>2010-03-11</td>
                                                            <td>$850,000</td>
                                                        </tr>
                                                        <tr class="even">
                                                            <td class="sorting_1">Garrett Winters</td>
                                                            <td>Accountant</td>
                                                            <td>Tokyo</td>
                                                            <td>63</td>
                                                            <td>2011-07-25</td>
                                                            <td>$170,750</td>
                                                        </tr>
                                                        <tr class="odd">
                                                            <td class="sorting_1">Gavin Cortez</td>
                                                            <td>Team Leader</td>
                                                            <td>San Francisco</td>
                                                            <td>22</td>
                                                            <td>2008-10-26</td>
                                                            <td>$235,500</td>
                                                        </tr>
                                                        <tr class="even">
                                                            <td class="sorting_1">Gavin Joyce</td>
                                                            <td>Developer</td>
                                                            <td>Edinburgh</td>
                                                            <td>42</td>
                                                            <td>2010-12-22</td>
                                                            <td>$92,575</td>
                                                        </tr>
                                                        <tr class="odd">
                                                            <td class="sorting_1">Gloria Little</td>
                                                            <td>Systems Administrator</td>
                                                            <td>New York</td>
                                                            <td>59</td>
                                                            <td>2009-04-10</td>
                                                            <td>$237,500</td>
                                                        </tr>
                                                        <tr class="even">
                                                            <td class="sorting_1">Haley Kennedy</td>
                                                            <td>Senior Marketing Designer</td>
                                                            <td>London</td>
                                                            <td>43</td>
                                                            <td>2012-12-18</td>
                                                            <td>$313,500</td>
                                                        </tr>
                                                        <tr class="odd">
                                                            <td class="sorting_1">Hermione Butler</td>
                                                            <td>Regional Director</td>
                                                            <td>London</td>
                                                            <td>47</td>
                                                            <td>2011-03-21</td>
                                                            <td>$356,250</td>
                                                        </tr>
                                                        <tr class="even">
                                                            <td class="sorting_1">Herrod Chandler</td>
                                                            <td>Sales Assistant</td>
                                                            <td>San Francisco</td>
                                                            <td>59</td>
                                                            <td>2012-08-06</td>
                                                            <td>$137,500</td>
                                                        </tr>
                                                        <tr class="odd">
                                                            <td class="sorting_1">Hope Fuentes</td>
                                                            <td>Secretary</td>
                                                            <td>San Francisco</td>
                                                            <td>41</td>
                                                            <td>2010-02-12</td>
                                                            <td>$109,850</td>
                                                        </tr>
                                                        <tr class="even">
                                                            <td class="sorting_1">Howard Hatfield</td>
                                                            <td>Office Manager</td>
                                                            <td>San Francisco</td>
                                                            <td>51</td>
                                                            <td>2008-12-16</td>
                                                            <td>$164,500</td>
                                                        </tr>
                                                        <tr class="odd">
                                                            <td class="sorting_1">Jackson Bradshaw</td>
                                                            <td>Director</td>
                                                            <td>New York</td>
                                                            <td>65</td>
                                                            <td>2008-09-26</td>
                                                            <td>$645,750</td>
                                                        </tr>
                                                        <tr class="even">
                                                            <td class="sorting_1">Jena Gaines</td>
                                                            <td>Office Manager</td>
                                                            <td>London</td>
                                                            <td>30</td>
                                                            <td>2008-12-19</td>
                                                            <td>$90,560</td>
                                                        </tr>
                                                        <tr class="odd">
                                                            <td class="sorting_1">Jenette Caldwell</td>
                                                            <td>Development Lead</td>
                                                            <td>New York</td>
                                                            <td>30</td>
                                                            <td>2011-09-03</td>
                                                            <td>$345,000</td>
                                                        </tr>
                                                        <tr class="even">
                                                            <td class="sorting_1">Jennifer Acosta</td>
                                                            <td>Junior Javascript Developer</td>
                                                            <td>Edinburgh</td>
                                                            <td>43</td>
                                                            <td>2013-02-01</td>
                                                            <td>$75,650</td>
                                                        </tr>
                                                        <tr class="odd">
                                                            <td class="sorting_1">Jennifer Chang</td>
                                                            <td>Regional Director</td>
                                                            <td>Singapore</td>
                                                            <td>28</td>
                                                            <td>2010-11-14</td>
                                                            <td>$357,650</td>
                                                        </tr>
                                                        <tr class="even">
                                                            <td class="sorting_1">Jonas Alexander</td>
                                                            <td>Developer</td>
                                                            <td>San Francisco</td>
                                                            <td>30</td>
                                                            <td>2010-07-14</td>
                                                            <td>$86,500</td>
                                                        </tr>
                                                        <tr class="odd">
                                                            <td class="sorting_1">Lael Greer</td>
                                                            <td>Systems Administrator</td>
                                                            <td>London</td>
                                                            <td>21</td>
                                                            <td>2009-02-27</td>
                                                            <td>$103,500</td>
                                                        </tr>
                                                        <tr class="even">
                                                            <td class="sorting_1">Martena Mccray</td>
                                                            <td>Post-Sales support</td>
                                                            <td>Edinburgh</td>
                                                            <td>46</td>
                                                            <td>2011-03-09</td>
                                                            <td>$324,050</td>
                                                        </tr>
                                                        <tr class="odd">
                                                            <td class="sorting_1">Michael Bruce</td>
                                                            <td>Javascript Developer</td>
                                                            <td>Singapore</td>
                                                            <td>29</td>
                                                            <td>2011-06-27</td>
                                                            <td>$183,000</td>
                                                        </tr>
                                                        <tr class="even">
                                                            <td class="sorting_1">Michael Silva</td>
                                                            <td>Marketing Designer</td>
                                                            <td>London</td>
                                                            <td>66</td>
                                                            <td>2012-11-27</td>
                                                            <td>$198,500</td>
                                                        </tr>
                                                        <tr class="odd">
                                                            <td class="sorting_1">Michelle House</td>
                                                            <td>Integration Specialist</td>
                                                            <td>Sydney</td>
                                                            <td>37</td>
                                                            <td>2011-06-02</td>
                                                            <td>$95,400</td>
                                                        </tr>
                                                        <tr class="even">
                                                            <td class="sorting_1">Olivia Liang</td>
                                                            <td>Support Engineer</td>
                                                            <td>Singapore</td>
                                                            <td>64</td>
                                                            <td>2011-02-03</td>
                                                            <td>$234,500</td>
                                                        </tr>
                                                        <tr class="odd">
                                                            <td class="sorting_1">Paul Byrd</td>
                                                            <td>Chief Financial Officer (CFO)</td>
                                                            <td>New York</td>
                                                            <td>64</td>
                                                            <td>2010-06-09</td>
                                                            <td>$725,000</td>
                                                        </tr>
                                                        <tr class="even">
                                                            <td class="sorting_1">Prescott Bartlett</td>
                                                            <td>Technical Author</td>
                                                            <td>London</td>
                                                            <td>27</td>
                                                            <td>2011-05-07</td>
                                                            <td>$145,000</td>
                                                        </tr>
                                                        <tr class="odd">
                                                            <td class="sorting_1">Quinn Flynn</td>
                                                            <td>Support Lead</td>
                                                            <td>Edinburgh</td>
                                                            <td>22</td>
                                                            <td>2013-03-03</td>
                                                            <td>$342,000</td>
                                                        </tr>
                                                        <tr class="even">
                                                            <td class="sorting_1">Rhona Davidson</td>
                                                            <td>Integration Specialist</td>
                                                            <td>Tokyo</td>
                                                            <td>55</td>
                                                            <td>2010-10-14</td>
                                                            <td>$327,900</td>
                                                        </tr>
                                                        <tr class="odd">
                                                            <td class="sorting_1">Sakura Yamamoto</td>
                                                            <td>Support Engineer</td>
                                                            <td>Tokyo</td>
                                                            <td>37</td>
                                                            <td>2009-08-19</td>
                                                            <td>$139,575</td>
                                                        </tr>
                                                        <tr class="even">
                                                            <td class="sorting_1">Serge Baldwin</td>
                                                            <td>Data Coordinator</td>
                                                            <td>Singapore</td>
                                                            <td>64</td>
                                                            <td>2012-04-09</td>
                                                            <td>$138,575</td>
                                                        </tr>
                                                        <tr class="odd">
                                                            <td class="sorting_1">Shad Decker</td>
                                                            <td>Regional Director</td>
                                                            <td>Edinburgh</td>
                                                            <td>51</td>
                                                            <td>2008-11-13</td>
                                                            <td>$183,000</td>
                                                        </tr>
                                                        <tr class="even">
                                                            <td class="sorting_1">Shou Itou</td>
                                                            <td>Regional Marketing</td>
                                                            <td>Tokyo</td>
                                                            <td>20</td>
                                                            <td>2011-08-14</td>
                                                            <td>$163,000</td>
                                                        </tr>
                                                        <tr class="odd">
                                                            <td class="sorting_1">Sonya Frost</td>
                                                            <td>Software Engineer</td>
                                                            <td>Edinburgh</td>
                                                            <td>23</td>
                                                            <td>2008-12-13</td>
                                                            <td>$103,600</td>
                                                        </tr>
                                                        <tr class="even">
                                                            <td class="sorting_1">Suki Burks</td>
                                                            <td>Developer</td>
                                                            <td>London</td>
                                                            <td>53</td>
                                                            <td>2009-10-22</td>
                                                            <td>$114,500</td>
                                                        </tr>
                                                        <tr class="odd">
                                                            <td class="sorting_1">Tatyana Fitzpatrick</td>
                                                            <td>Regional Director</td>
                                                            <td>London</td>
                                                            <td>19</td>
                                                            <td>2010-03-17</td>
                                                            <td>$385,750</td>
                                                        </tr>
                                                        <tr class="even">
                                                            <td class="sorting_1">Thor Walton</td>
                                                            <td>Developer</td>
                                                            <td>New York</td>
                                                            <td>61</td>
                                                            <td>2013-08-11</td>
                                                            <td>$98,540</td>
                                                        </tr>
                                                        <tr class="odd">
                                                            <td class="sorting_1">Tiger Nixon</td>
                                                            <td>System Architect</td>
                                                            <td>Edinburgh</td>
                                                            <td>61</td>
                                                            <td>2011-04-25</td>
                                                            <td>$320,800</td>
                                                        </tr>
                                                        <tr class="even">
                                                            <td class="sorting_1">Timothy Mooney</td>
                                                            <td>Office Manager</td>
                                                            <td>London</td>
                                                            <td>37</td>
                                                            <td>2008-12-11</td>
                                                            <td>$136,200</td>
                                                        </tr>
                                                        <tr class="odd">
                                                            <td class="sorting_1">Unity Butler</td>
                                                            <td>Marketing Designer</td>
                                                            <td>San Francisco</td>
                                                            <td>47</td>
                                                            <td>2009-12-09</td>
                                                            <td>$85,675</td>
                                                        </tr>
                                                        <tr class="even">
                                                            <td class="sorting_1">Vivian Harrell</td>
                                                            <td>Financial Controller</td>
                                                            <td>San Francisco</td>
                                                            <td>62</td>
                                                            <td>2009-02-14</td>
                                                            <td>$452,500</td>
                                                        </tr>
                                                        <tr class="odd">
                                                            <td class="sorting_1">Yuri Berry</td>
                                                            <td>Chief Marketing Officer (CMO)</td>
                                                            <td>New York</td>
                                                            <td>40</td>
                                                            <td>2009-06-25</td>
                                                            <td>$675,000</td>
                                                        </tr>
                                                        <tr class="even">
                                                            <td class="sorting_1">Zenaida Frank</td>
                                                            <td>Software Engineer</td>
                                                            <td>New York</td>
                                                            <td>63</td>
                                                            <td>2010-01-04</td>
                                                            <td>$125,250</td>
                                                        </tr>
                                                        <tr class="odd">
                                                            <td class="sorting_1">Zorita Serrano</td>
                                                            <td>Software Engineer</td>
                                                            <td>San Francisco</td>
                                                            <td>56</td>
                                                            <td>2012-06-01</td>
                                                            <td>$115,000</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 col-md-5">
                                        <div class="dataTables_info" id="scroll-vertical_info" role="status"
                                            aria-live="polite">Showing 1 to 57 of 57 entries</div>
                                    </div>
                                    <div class="col-sm-12 col-md-7"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- End:: row-7 --> <!-- Start:: row-8 -->
            <div class="row">
                <div class="col-xl-12">
                    <div class="card custom-card">
                        <div class="card-header">
                            <div class="card-title"> Hidden Columns Datatable </div>
                        </div>
                        <div class="card-body">
                            <div id="hidden-columns_wrapper" class="dataTables_wrapper dt-bootstrap5">
                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <div class="dataTables_length" id="hidden-columns_length"><label>Show <select
                                                    name="hidden-columns_length" aria-controls="hidden-columns"
                                                    class="form-select form-select-sm">
                                                    <option value="10">10</option>
                                                    <option value="25">25</option>
                                                    <option value="50">50</option>
                                                    <option value="100">100</option>
                                                </select> entries</label></div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <div id="hidden-columns_filter" class="dataTables_filter"><label>Search:<input
                                                    type="search" class="form-control form-control-sm" placeholder=""
                                                    aria-controls="hidden-columns"></label></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="dataTables_scroll">
                                            <div class="dataTables_scrollHead"
                                                style="overflow: hidden; position: relative; border: 0px; width: 100%;">
                                                <div class="dataTables_scrollHeadInner"
                                                    style="box-sizing: content-box; width: 1568px; padding-right: 0px;">
                                                    <table class="table table-bordered text-nowrap dataTable"
                                                        style="width: 1568px; margin-left: 0px;">
                                                        <thead>
                                                            <tr>
                                                                <th class="sorting sorting_asc" tabindex="0"
                                                                    aria-controls="hidden-columns" rowspan="1"
                                                                    colspan="1" style="width: 374.344px;"
                                                                    aria-sort="ascending"
                                                                    aria-label="Name: activate to sort column descending">
                                                                    Name</th>
                                                                <th class="sorting" tabindex="0"
                                                                    aria-controls="hidden-columns" rowspan="1"
                                                                    colspan="1" style="width: 542.078px;"
                                                                    aria-label="Position: activate to sort column ascending">
                                                                    Position</th>
                                                                <th class="sorting" tabindex="0"
                                                                    aria-controls="hidden-columns" rowspan="1"
                                                                    colspan="1" style="width: 260.594px;"
                                                                    aria-label="Start date: activate to sort column ascending">
                                                                    Start date</th>
                                                                <th class="sorting" tabindex="0"
                                                                    aria-controls="hidden-columns" rowspan="1"
                                                                    colspan="1" style="width: 234.672px;"
                                                                    aria-label="Salary: activate to sort column ascending">
                                                                    Salary</th>
                                                            </tr>
                                                        </thead>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="dataTables_scrollBody"
                                                style="position: relative; overflow: auto; width: 100%;">
                                                <table id="hidden-columns"
                                                    class="table table-bordered text-nowrap dataTable"
                                                    style="width: 100%;" aria-describedby="hidden-columns_info">
                                                    <thead>
                                                        <tr style="height: 0px;">
                                                            <th class="sorting sorting_asc"
                                                                aria-controls="hidden-columns" rowspan="1"
                                                                colspan="1"
                                                                style="width: 374.344px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"
                                                                aria-sort="ascending"
                                                                aria-label="Name: activate to sort column descending">
                                                                <div class="dataTables_sizing"
                                                                    style="height: 0px; overflow: hidden;">Name</div>
                                                            </th>
                                                            <th class="sorting" aria-controls="hidden-columns"
                                                                rowspan="1" colspan="1"
                                                                style="width: 542.078px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"
                                                                aria-label="Position: activate to sort column ascending">
                                                                <div class="dataTables_sizing"
                                                                    style="height: 0px; overflow: hidden;">Position</div>
                                                            </th>
                                                            <th class="sorting" aria-controls="hidden-columns"
                                                                rowspan="1" colspan="1"
                                                                style="width: 260.594px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"
                                                                aria-label="Start date: activate to sort column ascending">
                                                                <div class="dataTables_sizing"
                                                                    style="height: 0px; overflow: hidden;">Start date
                                                                </div>
                                                            </th>
                                                            <th class="sorting" aria-controls="hidden-columns"
                                                                rowspan="1" colspan="1"
                                                                style="width: 234.672px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"
                                                                aria-label="Salary: activate to sort column ascending">
                                                                <div class="dataTables_sizing"
                                                                    style="height: 0px; overflow: hidden;">Salary</div>
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tfoot>
                                                        <tr style="height: 2px;">
                                                            <th rowspan="1" colspan="1"
                                                                style="padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px; width: 388.516px;">
                                                                <div class="dataTables_sizing"
                                                                    style="height: 0px; overflow: hidden;">Name</div>
                                                            </th>
                                                            <th rowspan="1" colspan="1"
                                                                style="padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px; width: 556.25px;">
                                                                <div class="dataTables_sizing"
                                                                    style="height: 0px; overflow: hidden;">Position</div>
                                                            </th>
                                                            <th rowspan="1" colspan="1"
                                                                style="padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px; width: 274.766px;">
                                                                <div class="dataTables_sizing"
                                                                    style="height: 0px; overflow: hidden;">Start date
                                                                </div>
                                                            </th>
                                                            <th rowspan="1" colspan="1"
                                                                style="padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px; width: 248.844px;">
                                                                <div class="dataTables_sizing"
                                                                    style="height: 0px; overflow: hidden;">Salary</div>
                                                            </th>
                                                        </tr>
                                                    </tfoot>
                                                    <tbody>
                                                        <tr class="odd">
                                                            <td class="sorting_1">Airi Satou</td>
                                                            <td>Accountant</td>
                                                            <td>2008-11-28</td>
                                                            <td>$162,700</td>
                                                        </tr>
                                                        <tr class="even">
                                                            <td class="sorting_1">Angelica Ramos</td>
                                                            <td>Chief Executive Officer (CEO)</td>
                                                            <td>2009-10-09</td>
                                                            <td>$1,200,000</td>
                                                        </tr>
                                                        <tr class="odd">
                                                            <td class="sorting_1">Ashton Cox</td>
                                                            <td>Junior Technical Author</td>
                                                            <td>2009-01-12</td>
                                                            <td>$86,000</td>
                                                        </tr>
                                                        <tr class="even">
                                                            <td class="sorting_1">Bradley Greer</td>
                                                            <td>Software Engineer</td>
                                                            <td>2012-10-13</td>
                                                            <td>$132,000</td>
                                                        </tr>
                                                        <tr class="odd">
                                                            <td class="sorting_1">Brenden Wagner</td>
                                                            <td>Software Engineer</td>
                                                            <td>2011-06-07</td>
                                                            <td>$206,850</td>
                                                        </tr>
                                                        <tr class="even">
                                                            <td class="sorting_1">Brielle Williamson</td>
                                                            <td>Integration Specialist</td>
                                                            <td>2012-12-02</td>
                                                            <td>$372,000</td>
                                                        </tr>
                                                        <tr class="odd">
                                                            <td class="sorting_1">Bruno Nash</td>
                                                            <td>Software Engineer</td>
                                                            <td>2011-05-03</td>
                                                            <td>$163,500</td>
                                                        </tr>
                                                        <tr class="even">
                                                            <td class="sorting_1">Caesar Vance</td>
                                                            <td>Pre-Sales Support</td>
                                                            <td>2011-12-12</td>
                                                            <td>$106,450</td>
                                                        </tr>
                                                        <tr class="odd">
                                                            <td class="sorting_1">Cara Stevens</td>
                                                            <td>Sales Assistant</td>
                                                            <td>2011-12-06</td>
                                                            <td>$145,600</td>
                                                        </tr>
                                                        <tr class="even">
                                                            <td class="sorting_1">Cedric Kelly</td>
                                                            <td>Senior Javascript Developer</td>
                                                            <td>2012-03-29</td>
                                                            <td>$433,060</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="dataTables_scrollFoot"
                                                style="overflow: hidden; border: 0px; width: 100%;">
                                                <div class="dataTables_scrollFootInner"
                                                    style="width: 1568px; padding-right: 0px;">
                                                    <table class="table table-bordered text-nowrap dataTable"
                                                        style="width: 1568px; margin-left: 0px;">
                                                        <tfoot>
                                                            <tr>
                                                                <th rowspan="1" colspan="1"
                                                                    style="width: 388.516px;">Name</th>
                                                                <th rowspan="1" colspan="1"
                                                                    style="width: 556.25px;">Position</th>
                                                                <th rowspan="1" colspan="1"
                                                                    style="width: 274.766px;">Start date</th>
                                                                <th rowspan="1" colspan="1"
                                                                    style="width: 248.844px;">Salary</th>
                                                            </tr>
                                                        </tfoot>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 col-md-5">
                                        <div class="dataTables_info" id="hidden-columns_info" role="status"
                                            aria-live="polite">Showing 1 to 10 of 57 entries</div>
                                    </div>
                                    <div class="col-sm-12 col-md-7">
                                        <div class="dataTables_paginate paging_simple_numbers"
                                            id="hidden-columns_paginate">
                                            <ul class="pagination">
                                                <li class="paginate_button page-item previous disabled"
                                                    id="hidden-columns_previous"><a href="#"
                                                        aria-controls="hidden-columns" data-dt-idx="0" tabindex="0"
                                                        class="page-link">Previous</a></li>
                                                <li class="paginate_button page-item active"><a href="#"
                                                        aria-controls="hidden-columns" data-dt-idx="1" tabindex="0"
                                                        class="page-link">1</a></li>
                                                <li class="paginate_button page-item "><a href="#"
                                                        aria-controls="hidden-columns" data-dt-idx="2" tabindex="0"
                                                        class="page-link">2</a></li>
                                                <li class="paginate_button page-item "><a href="#"
                                                        aria-controls="hidden-columns" data-dt-idx="3" tabindex="0"
                                                        class="page-link">3</a></li>
                                                <li class="paginate_button page-item "><a href="#"
                                                        aria-controls="hidden-columns" data-dt-idx="4" tabindex="0"
                                                        class="page-link">4</a></li>
                                                <li class="paginate_button page-item "><a href="#"
                                                        aria-controls="hidden-columns" data-dt-idx="5" tabindex="0"
                                                        class="page-link">5</a></li>
                                                <li class="paginate_button page-item "><a href="#"
                                                        aria-controls="hidden-columns" data-dt-idx="6" tabindex="0"
                                                        class="page-link">6</a></li>
                                                <li class="paginate_button page-item next" id="hidden-columns_next"><a
                                                        href="#" aria-controls="hidden-columns" data-dt-idx="7"
                                                        tabindex="0" class="page-link">Next</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- End:: row-8 -->
        </div>
    </div>
@endsection
