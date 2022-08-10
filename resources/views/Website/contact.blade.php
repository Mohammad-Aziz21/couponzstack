@include('Website/Layouts/Header')

    <!-- About section start -->
    <section class="sitemap_categories_area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-12 col-md-12 col-lg-8">
                    <div class="section-title text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
                        <h2 class="title">Send us a Message</h2>
                    </div> <!-- section title -->
                    <div class="contact_form_wrpr wow fadeInUpBig" data-wow-duration="1s" data-wow-delay="0.9s">
                        <form id="contact_form" action="" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="contact_form">
                                        <label for="">Name*</label>
                                        <input type="text" name="name" placeholder="Enter here" required>
                                    </div> <!-- contact_form -->
                                </div>
                                <div class="col-md-6">
                                    <div class="contact_form">
                                        <label for="">Email Address*</label>
                                        <input type="email" name="email" placeholder="Enter here" required>
                                    </div> <!-- contact_form -->
                                </div>
                                <div class="col-md-12">
                                    <div class="contact_form">
                                        <label for="">Phone Number</label>
                                        <input type="tel" name="phone" placeholder="Enter here">
                                    </div> <!-- contact_form -->
                                    <div class="contact_form">
                                        <label for="">Message</label>
                                        <textarea name="message" rows="6" placeholder="Enter here"></textarea>
                                    </div> <!-- contact_form -->
                                </div>
                                <div class="col-sm-12">
                                    <p class="form-message">Please type a valid email address.</p>
                                </div>
                                <div class="col-md-12">
                                    <div class="contact_form">
                                        <button type="submit" class="primary_btn">Send Message</button>
                                    </div> <!-- contact_form -->
                                </div>
                            </div> <!-- row -->
                        </form>
                    </div> <!-- contact wrapper form -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    <!-- About section end -->

    


@include('Website/Layouts/Footer')
