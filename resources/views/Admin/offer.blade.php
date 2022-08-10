@include('Admin/Layouts/Header')
@include('Admin/Layouts/Sidebar')

<!-- ============================================================== -->
<!-- Start right Content here -->




<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">
       <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0 font-size-18">{{$store_name[0]->store_name}} Offers</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{URL::to('/')}}/admin/dashboard">Dashboard</a></li>
                                <li class="breadcrumb-item active">{{$store_name[0]->store_name}} Offers</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- start page title -->
<!-- \ -->
            <!-- end page title -->

            <div class="row">
    <div class="col-lg-12">
        <div class="">
            <div class="table-responsive">
                <table class="table project-list-table table-nowrap table-centered table-borderless">
                    <thead>
                    <tr>
                       
                        <th scope="col">Title</th>
                        <th scope="col">Expiry</th>
                        <th scope="col">Code</th>
                        <th scope="col">Website Status</th>
                        <th scope="col">Network Status</th>
                        <th scope="col"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($offers as $value)
                    <tr>
                        
                        <td>
                            <h5 class="text-truncate font-size-14"><a href="#" class="text-dark">{{$value->offer_title}}</a></h5>
                            <p class="text-muted mb-0"><a href="#" class="text-dark">OFF ID: {{$value->offer_id}}</a></p>
                            <p class="text-muted mb-0"><a href="#" class="text-dark">NET ID: {{$value->network_id}}</a></p>
                        </td>
                        <td>{{$value->offer_expiry}}</td>
                        <td>{{$value->offer_code}}</td>

                        @if( $value->offer_availability == 1)
                            <td><span class="badge badge-primary">ACTIVE</span></td>
                            @else
                            <td><span class="badge badge-danger">INACTIVE</span></td>
                        @endif
                        @if( $value->  offer_api_availability  == 1)
                            <td><span class="badge badge-primary">ACTIVE</span></td>
                        @else
                            <td><span class="badge badge-danger">INACTIVE</span></td>
                        @endif
                        @if( $value->  is_deal  == 1)
                            <td><span class="badge badge-danger">DEAL</span></td>
                        @else
                            <td><span class="badge badge-primary">COUPON</span></td>
                        @endif
                        <td>
                            <div class="dropdown">
                                <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown" aria-expanded="false">
                                    <i class="mdi mdi-dots-horizontal font-size-18"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#">Edit</a>
                                    <a class="dropdown-item" href="#">View Offer</a>
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

  <div class="row">
                <div class="col-lg-12">
                    <ul class="pagination pagination-rounded justify-content-center mt-2 mb-5">
                        {{$offers->links()}}
                    </ul>
                </div>
            </div>

      </div>
    </div>
  </div>

<!-- ============================================================== -->
@include('Admin/Layouts/Footer')
