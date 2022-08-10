@include('Website/Layouts/Header')

 <!-- Signup start -->
    <section class="login_area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="login_div wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- Sign up -->
                                <div class="signin_form_div">
                                    <h4 class="modal_title" id="exampleModalLabel">Sign Up</h4>
                                    <form id="contact_form" action="#" method="GET">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="contact_form">
                                                    <label for="">Full Name</label>
                                                    <input type="email" name="email" placeholder="First and last name" required>
                                                </div> <!-- contact_form -->
                                                <div class="contact_form">
                                                    <label for="">Email Address</label>
                                                    <input type="email" name="email" placeholder="john@company.com" required>
                                                </div> <!-- contact_form -->
                                                <div class="contact_form">
                                                    <label for="">Password</label>
                                                    <input type="Password" name="email" placeholder="********">
                                                    
                                                </div> <!-- contact_form -->
                                            </div>
                                            <div class="col-md-12">
                                                <div class="contact_form text-center">
                                                    <button type="button" class="primary_btn">Register</button>
                                                </div> <!-- contact_form -->
                                                <div class="contact_form">
                                                    <p class="terms_agree_para">By continuing, I agree to Couponzstack <a href="{{URL::to('/')}}/privacy">Privacy Policy</a> and <a href="{{URL::to('/')}}/terms">Terms of Use</a>.</p>
                                                </div> <!-- contact_form -->
                                                <p class="donthaveaccount_para">Already have an account? <a href="{{URL::to('/')}}/login">Login</a></p>
                                            </div>
                                        </div> <!-- row -->
                                    </form>
                                </div> <!-- Sign up end -->
                            </div>
                        </div>
                    </div> <!-- Deal -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    <!-- Signup end -->



@include('Website/Layouts/Footer')
