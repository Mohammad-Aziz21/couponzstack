 <div class="vertical-menu">

                <div data-simplebar class="h-100">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">
                            <li class="menu-title" key="t-menu">Menu</li>
                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="bx bx-layout"></i>
                                    <span key="t-layouts">Networks</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{URL::to('/')}}/admin/networks" key="t-horizontal">View Network</a></li>
                                    <li><a href="{{URL::to('/')}}/admin/add_networkform" key="t-horizontal">Add Network</a></li>

                                </ul>
                            </li>
                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="bx bx-layout"></i>
                                    <span key="t-layouts">Stores</span>
                                </a>
                                @php
                                    $networks = DB::select("select * from networks");
                                @endphp


                                 <ul class="sub-menu" aria-expanded="false">
                                @foreach($networks as $value)
                               
                                    <li><a href="{{URL::to('/')}}/admin/stores/{{$value->nid}}" key="t-horizontal">View {{$value->network_name}} Stores</a></li>

                                
                                @endforeach
                                </ul>
                            </li>
                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="bx bx-layout"></i>
                                    <span key="t-layouts">Categories</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="layouts-horizontal.html" key="t-horizontal">View Categories</a></li>
                                    <li><a href="layouts-horizontal.html" key="t-horizontal">Add Categories</a></li>

                                </ul>
                            </li>
                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="bx bx-layout"></i>
                                    <span key="t-layouts">Users & Roles</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="layouts-horizontal.html" key="t-horizontal">View Roles</a></li>
                                    <li><a href="layouts-horizontal.html" key="t-horizontal">Add Roles</a></li>
                                    <li><a href="layouts-horizontal.html" key="t-horizontal">View Users</a></li>
                                    <li><a href="layouts-horizontal.html" key="t-horizontal">Add Users</a></li>

                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- Sidebar -->
                </div>
            </div>
            <!-- Left Sidebar End -->



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->




            <!-- end main content-->

        </div>