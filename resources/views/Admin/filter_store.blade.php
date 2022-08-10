@include('Admin/Layouts/Header')
@include('Admin/Layouts/Sidebar')

<!-- ============================================================== -->
<!-- Start right Content here -->




<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0 font-size-18">{{$network_name[0]->network_name}} Stores</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{URL::to('/')}}/admin/dashboard">Dashboard</a></li>
                                <li class="breadcrumb-item active">{{$network_name[0]->network_name}} Stores</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="">
                        <!-- check -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card" style="position: relative; bottom: -23px;">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Filters</h4>

                                        <form action="{{URL::to('/')}}/admin/filter_store/{{$network_id}}" method="GET">
                                        {{csrf_field()}}

                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label for="formrow-inputState">Webstie Status</label>
                                                        <select id="formrow-inputState" name="website_status" class="form-control">

                                                        @if($filter_website == 1)
                                                        {
                                                            <option value="2">All</option>
                                                            <option selected value="1">Active</option>
                                                            <option value="0">Inactive</option>
                                                        }
                                                        @elseif($filter_website == 0)
                                                        {
                                                            <option value="2">All</option>
                                                            <option value="1">Active</option>
                                                            <option value="0" selected>Inactive</option>
                                                        }
                                                        @else
                                                        {
                                                            <option value="2">All</option>
                                                            <option value="1">Active</option>
                                                            <option value="0">Inactive</option>
                                                        }
                                                        @endif
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label for="formrow-inputState">Network Status</label>
                                                        <select id="formrow-inputState" name="network_status" class="form-control">
                                                        @if($filter_network == 1)
                                                        {
                                                            <option value="2">All</option>
                                                            <option selected value="1">Active</option>
                                                            <option value="0">Inactive</option>
                                                        }

                                                        @elseif($filter_network == 0)
                                                        {
                                                            <option value="2">All</option>
                                                            <option value="1">Active</option>
                                                            <option selected value="0">Inactive</option>
                                                        }
                                                        @else
                                                        {
                                                            <option value="2">All</option>
                                                            <option value="1">Active</option>
                                                            <option value="0">Inactive</option>
                                                        }
                                                        @endif
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label for="formrow-inputState">Delete Status</label>
                                                        <select id="formrow-inputState" name="delete_status" class="form-control">
                                                        @if($filter_delete == 1)
                                                        {
                                                            <option value="2">All</option>
                                                            <option value="0">Running</option>
                                                            <option selected value="1">Deleted</option>
                                                        }

                                                        @elseif($filter_delete == 0)
                                                        {
                                                            <option value="2">All</option>
                                                            <option selected value="0">Running</option>
                                                            <option value="1">Deleted</option>
                                                        }
                                                        @else
                                                        {
                                                            <option selected value="2">All</option>
                                                            <option value="0">Running</option>
                                                            <option value="1">Deleted</option>
                                                        }
                                                        @endif
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-1">
                                                    <div class="form-group">
                                                        <button type="submit" style="position: relative; top: 27px;" class="btn btn-primary w-md">Submit</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- check -->
                        <div class="table-responsive">
                            <table class="table project-list-table table-nowrap table-centered table-borderless">
                                <thead>
                                <tr>
                                    <th scope="col" style="width: 100px">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Active Offers</th>
                                    <th scope="col">Website Status</th>
                                    <th scope="col">Network Status</th>
                                    <th scope="col">Delete Status</th>
                                    <th scope="col"></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($store as $value)
                                <tr>
                                    <td><img src="assets/images/companies/img-1.png" alt="" class="avatar-sm"></td>
                                    <td>
                                        <h5 class="text-truncate font-size-14"><a href="#" class="text-dark">{{$value->store_name}}</a></h5>
                                        <p class="text-muted mb-0"><a href="#" class="text-dark">ADV ID: {{$value->advertiser_id}}</a></p>
                                        <p class="text-muted mb-0"><a href="#" class="text-dark">STORE ID: {{$value->store_id}}</a></p>
                                    </td>
                                    <td>{{$value->totaloffers}}</td>

                                    @if( $value->store_availability == 1)

                                        <td><span class="badge badge-primary">ACTIVE</span></td>

                                        @else

                                        <td><span class="badge badge-danger">INACTIVE</span></td>

                                    @endif
                                    @if( $value-> 	store_api_availability  == 1)

                                        <td><span class="badge badge-primary">ACTIVE</span></td>

                                    @else

                                        <td><span class="badge badge-danger">INACTIVE</span></td>

                                    @endif
                                    @if( $value-> 	delete_status  == 1)

                                        <td><span class="badge badge-danger">DELETED</span></td>

                                    @else

                                        <td><span class="badge badge-primary">RUNNING</span></td>

                                    @endif

                                    <td>
                                        <div class="dropdown">
                                            <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown" aria-expanded="false">
                                                <i class="mdi mdi-dots-horizontal font-size-18"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="{{URL::to('/')}}/admin/edit_storeform/{{$value->store_id}}">Edit</a>
                                                <a class="dropdown-item" href="{{URL::to('/')}}/admin/offers/{{$value->store_id}}">View Offers</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach

                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <div class="row">
                <div class="col-lg-12">
                    <ul class="pagination pagination-rounded justify-content-center mt-2 mb-5">
                        {{$store->appends(request()->query())->links()}}
                    </ul>
                </div>
            </div>
            <!-- end row -->

        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->


    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <script>document.write(new Date().getFullYear())</script> © Skote.
                </div>
                <div class="col-sm-6">
                    <div class="text-sm-right d-none d-sm-block">
                        Design & Develop by Themesbrand
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>






{{--@foreach($store as $value)--}}
{{--    <h1>{{$value->store_name}}</h1>--}}

{{--@endforeach--}}
<!-- ============================================================== -->

@include('Admin/Layouts/Footer')
