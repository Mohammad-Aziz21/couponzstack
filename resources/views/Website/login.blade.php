@include('Website/Layouts/Header')

 <!-- Login start -->
    <section class="login_area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="login_div wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">

                        <div class="main_tabs">
                            <!-- Tab Content -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade active show signin_tab" id="signin_tab">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <!-- Sign In -->
                                            <div class="signin_form_div">
                                                <h4 class="modal_title" id="exampleModalLabel">Login</h4>
                                                <form id="contact_form" action="#" method="GET">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="contact_form">
                                                                <label for="">Email Address</label>
                                                                <input type="email" name="email" placeholder="john@company.com" required>
                                                            </div> <!-- contact_form -->
                                                            <div class="contact_form">
                                                                <label for="">Password</label>
                                                                <input type="password" name="pass" placeholder="********" required>
                                                                
                                                            </div> <!-- contact_form -->
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="contact_form text-center">
                                                                <button type="button" class="primary_btn">Login</button>
                                                            </div> <!-- contact_form -->
                                                            <p class="forgot_password_para"><a href="#" aria-controls="resetpass" role="tab" data-toggle="tab">Forgot Password ?</a></p>
                                                        </div>
                                                      
                                                        <div class="col-md-12">
                                                            <p class="donthaveaccount_para">Don’t have an account? <a href="{{URL::to('/')}}/signup">
                                                            Sign Up</a></p>
                                                        </div>
                                                    </div> <!-- row -->
                                                </form>
                                            </div> <!-- Sign In end -->
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade show resetpassword_tab" id="resetpassword_tab">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <!-- Reset Password -->
                                            <div class="signin_form_div">
                                                <h4 class="modal_title" id="exampleModalLabel">Forgot Password</h4>
                                                <form id="contact_form" action="" method="post">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="contact_form_para">
                                                                <p class="black_16_para">Please Enter your email address which you registered here !</p>
                                                            </div>
                                                            <div class="contact_form">
                                                                <label for="">Email Address*</label>
                                                                <input type="email" name="email" placeholder="Enter here" required>
                                                            </div> <!-- contact_form -->
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="text-center">
                                                                <button type="submit" class="primary_btn">Send</button>
                                                            </div> <!-- contact_form -->
                                                        </div>
                                                        <!-- <p class="donthaveaccount_para">Go back to <a href=".signin_tab" aria-controls="signin" role="tab" data-toggle="tab">Sign-In</a></p> -->
                                                    </div> <!-- row -->
                                                </form>
                                            </div> <!-- Reset Password end -->
            
                                            <!-- Password Sent content -->
                                            <div class="signin_form_div">
                                                <h4 class="modal_title" id="exampleModalLabel">Password Sent !</h4>
                                                <form id="contact_form" action="" method="post">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="success_check_icon">
                                                                <svg xmlns="http://www.w3.org/2000/svg" height="50px" width="50px" version="1.1" viewBox="0 0 1024 1024" x="0px" y="0px"><path d="M685.1 381.9c-7.8-7.8-18.3-12.2-29.3-12.2s-21.5 4.3-29.3 12.2l-173.3 172.4-55.5-55.9c-16-16-42.3-16.2-58.5-0.3-16.3 15.9-16.5 42.2-0.5 58.6l84.8 85.4c7.8 7.8 18.3 12.2 29.4 12.2 11 0 21.4-4.3 29.2-12.1l202.8-201.6c16-16 16.2-42.3 0.3-58.5l-0.1-0.2z"/><path d="M973.9 317c-25.3-59.7-61.5-113.3-107.5-159.4-46.1-46-99.7-82.2-159.4-107.5-61.8-26.2-127.4-39.5-195-39.5-276.4 0.1-501.3 225-501.3 501.4s224.9 501.3 501.3 501.3c276.4 0 501.3-224.9 501.3-501.3 0-67.6-13.2-133.2-39.4-195zM512 930.4c-230.7 0-418.4-187.7-418.4-418.4s187.7-418.4 418.4-418.4 418.4 187.7 418.4 418.4-187.7 418.4-418.4 418.4z"/></svg>
                                                            </div>
                                                            <div class="contact_form_para">
                                                                <p class="black_16_para text-center">A reset password link has been sent to you, Please check your account !</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="text-center">
                                                                <button type="submit" class="primary_btn">Done</button>
                                                            </div> <!-- contact_form -->
                                                        </div>
                                                        <!-- <p class="donthaveaccount_para">I already have an account? <a href=".signin_tab" aria-controls="signin" role="tab" data-toggle="tab">Sign-In</a></p> -->
                                                    </div> <!-- row -->
                                                </form>
                                            </div> <!-- Password Sent content end -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- Deal -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    <!-- Login end -->


@include('Website/Layouts/Footer')
