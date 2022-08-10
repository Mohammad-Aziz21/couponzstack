@include('Admin/Layouts/Header')
@include('Admin/Layouts/Sidebar')

<!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                    <h4 class="mb-0 font-size-18">Dashboard</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Networks</a></li>
                                            <li class="breadcrumb-item active">Details</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <!-- end row -->


                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Networks</h4>
                                        <div class="table-responsive">
                                            <table class="table table-centered table-nowrap mb-0">
                                                <thead class="thead-light">
                                                    <tr>
                                                        <th>Network ID</th>
                                                        <th>Network Name</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($data as $value)
                                                    <tr>
                                                        <td><a href="javascript: void(0);" class="text-body font-weight-bold">{{$value->nid}}</a> </td>
                                                        <td>{{$value->network_name}}</td>
                                                        <!-- <td> -->
                                                            <!-- Button trigger modal -->
                                                            <!-- <button type="button" class="btn btn-primary btn-sm btn-rounded waves-effect waves-light" data-toggle="modal" data-target=".exampleModal">
                                                                Delete
                                                            </button> -->
                                                        <!-- </td> -->
                                                        <td>
                                                            <!-- Button trigger modal -->
                                                            <a href="{{ URL::to('/') }}/admin/edit_networkform/{{$value->nid}}"><button type="button" class="btn btn-primary btn-sm btn-rounded waves-effect waves-light" data-toggle="modal" data-target=".exampleModal" >Edit
                                                                </button> </a>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- end table-responsive -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

@include('Admin/Layouts/Footer')
