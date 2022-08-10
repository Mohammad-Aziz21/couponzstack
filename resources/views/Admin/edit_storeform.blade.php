@include('Admin/Layouts/Header')
@include('Admin/Layouts/Sidebar')


<link href="assets/libs/summernote/summernote-bs4.min.css" rel="stylesheet" type="text/css" />
<!-- include libraries(jQuery, bootstrap) -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>



<div class="main-content">
            <div class="page-content">

            
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">

                                @foreach($storedetail as $value)
                                        <form action="{{URL::to('/')}}/admin/edit_storeform/{{$value->store_id}}" method="POST" id="view_box">
                                        {{csrf_field()}}
                                        <h4 class="card-title mb-4">{{$value->store_name}}</h4>
                                    


                                            <div class="row">

                                                <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="formrow-firstname-input">Store ID</label>
                                                    <input type="text" class="form-control" id="formrow-firstname-input" name="store_id" Value={{$value->store_id}} readonly>
                                                </div>
                                                </div>
                                                <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="formrow-firstname-input">Adv ID</label>
                                                    <input type="text" class="form-control" id="formrow-firstname-input" name="advertiser_id" Value={{$value->advertiser_id}} readonly>
                                                </div>
                                                </div>
                                                <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="formrow-firstname-input">Network ID</label>
                                                    <input type="text" class="form-control" id="formrow-firstname-input" name="network_id" Value={{$value->network_id}} readonly>
                                                </div>
                                                </div>

                                                <div class="col-md-3">
                                                <div class="form-group">


                                                @if( $value-> 	store_api_availability  == 1)

                                                    <label for="formrow-firstname-input">Network Status</label>
                                                    <input type="text" class="form-control" id="formrow-firstname-input" name="store_api_availabilit" Value="Active" readonly>

                                                @else

                                                    <label for="formrow-firstname-input">Network Status</label>
                                                    <input type="text" class="form-control" id="formrow-firstname-input" name="store_api_availabilit" Value="In Active" readonly>

                                                @endif

                                                
                                                
                                                </div>
                                                </div>
                                            </div>

                                            <div class="row">

                                                <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="formrow-firstname-inpu">Name </label>
                                                    <input  class="form-control" type="text" id="formrow-firstname-input" name="store_name" value="{{$value->store_name}}">
                                                </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="card-body">
                                                        <div class="form-group">
                                                            <label for="formrow-firstname-input">Description</label>
                                                            <textarea class="form-control" name="store_description" id="summernote1" form="view_box" wrap="soft">{{$value->store_description}}</textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="card-body">
                                                        <div class="form-group">
                                                        <label for="formrow-firstname-input">About</label>
                                                        <textarea class="form-control" name="store_about" id="summernote" form="view_box" wrap="soft">{{$value->store_about}}</textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                            
                                                    <div class="col-lg-4">
                                                        <div class="form-group">

                                                
                                                            @if( $value-> 	store_availability  == 1)

                                                                <label for="formrow-inputState">Website Status</label>
                                                                    <select id="formrow-inputState" class="form-control" name="website_status">
                                                                            <option selected value="1">Active</option>
                                                                            <option value="0">In Active</option>
                                                                        </select>
                                                            @else

                                                                <label for="formrow-inputState">Website Status</label>
                                                                    <select id="formrow-inputState" class="form-control" name="website_status">
                                                                            <option value="1">Active</option>
                                                                            <option selected value="0">In Active</option>
                                                                        </select>
                                                            @endif
                                                        
                                                                
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col-lg-4">
                                                        <div class="form-group">

                                                            @if( $value-> 	is_featured  == 1)

                                                                <label for="formrow-inputState">Featured</label>
                                                                    <select id="formrow-inputState" class="form-control" name="featured">
                                                                            <option selected value="1">Active</option>
                                                                            <option value="0">In Active</option>
                                                                        </select>
                                                            @else

                                                                <label for="formrow-inputState">Featured</label>
                                                                    <select id="formrow-inputState" class="form-control" name="featured">
                                                                            <option value="1">Active</option>
                                                                            <option selected value="0">In Active</option>
                                                                        </select>
                                                            @endif
                                                    
                                                            
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-4">
                                                        <div class="form-group">
                                                            @if( $value-> 	delete_status  == 1)

                                                            <label for="formrow-inputState">Delete Status</label>
                                                            <select id="formrow-inputState" class="form-control" name="delete">
                                                                    <option selected value="1">Deleted </option>
                                                                    <option value="0">Not Deleted</option>
                                                                </select>
                                                            @else

                                                            <label for="formrow-inputState">Delete Status</label>
                                                            <select id="formrow-inputState" class="form-control" name="delete">
                                                                    <option value="1">Deleted </option>
                                                                    <option selected value="0">Not Deleted</option>
                                                                </select>
                                                            @endif
                                                            
                                                        </div>
                                                    </div>

                                                
                                            </div>

                                            <input type="hidden" name="concatinate" value="{{$value->network_id}}">
                                    @endforeach

                                        <div>
                                            <button type="submit" class="btn btn-primary w-md">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                       
                    </div>
                    <!-- end row -->

                    <!-- end row -->

                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->


            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <script>
                                document.write(new Date().getFullYear())
                            </script> © Skote.
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






<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>

<script type="text/javascript">
     $('#summernote').summernote(
        {
            height: 400
        });
    $('#summernote1').summernote(
        {
            height: 400
        });

</script>






@include('Admin/Layouts/Footer')


