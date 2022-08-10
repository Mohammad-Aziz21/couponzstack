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
                                    <h4 class="mb-0 font-size-18"></h4>

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
                                        <h5 class="card-title mb-4">Add Network</h5>

                                        <form action="{{URL::to('/')}}/admin/add_networkform" method="POST">
                                            {{csrf_field()}}
                                            <div class="row">                                                
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="formrow-input">Network Name</label>
                                                        <input type="text" class="form-control" id="formrow-email-input"
                                                            name="network_name">
                                                    </div>
                                                </div>
                                            </div>
                                           <div>
                                                <button type="submit" class="btn btn-primary w-md">Submit</button>
                                            </div>
                                        </form>
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
