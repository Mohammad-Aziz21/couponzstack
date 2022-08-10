@include('Website/Layouts/Header')

<style>
    .list li{
        list-style-type: disc;
    }
    .list{
        margin-left:4%;
    }
</style>
    <!-- About section start -->
    <section class="sitemap_categories_area">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="section-title wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
                        <h2 class="title" style="font-size: 29px;">About Us</h2>
                    </div> <!-- section title -->
                    <div class="about_txt_div">

                    <h4>WHO ARE WE?</h4>
                    <p> 
                        We at COUPONZSTACK.COM target to offer you the best discounts, promos, coupon codes and the likes and keep you aware of all (especially the best ones) the sales deals in your area to keep you on top of your retail game, all in one place.
                    </p>
                    <p> 
                        While you surf our website for exemplary saving opportunities, our team is zooming around the inter-webs to scour, assess and update the latest discounts, codes and deals for you to benefit from.
                    </p>

                    <h4>WHY COUPONZSTACK.COM?</h4>
                    <p>
                        Apart from saving a ton of money on the fantastic deals you find with us? Our team is dedicated, intuitive to the demand of the consumers and super-efficient in digging out and quickly bringing to you the deals & coupons your wallets deserve to counter the inflated retail market.
                    </p>
                    <p>We also send your way our newsletters, fresh & frequent, to keep you updated on the go from the finest brands in the business that you crave. Look no further if you’d like to see discounts and deals from:
                       <ul class="list">
                          <li>Brand A</li>
                          <li>Brand B</li>
                          <li>Retailer 1</li>
                          <li>Retailer 2</li>
                          <li>So on..</li>
                    
                        </ul>  
                    </p>
                    <p>
                        But hey, you can’t find all of the great discounts and deals on goods and services on COUPONZSTACK.COM, right? WRONG!! </br>
                        We deal in a large selection of categories too from Clothing, Household, Sports and Outdoors to Collectibles, Beauty & Health and Other Supplies.
                    </p>
                
                    <h4>MORE ABOUT COUPONZSTACK.COM</h4>
                    <p>Want to know more about Terms and conditions and policies?<br/>
                    Make sure to visit:
                    
                    <ul class="list">
                        <li>Our <a href="{{URL::to('/')}}/terms">Terms and Conditions</a> page for more information about our procedures.</li>
                        <li>Our <a href="{{URL::to('/')}}/privacy">Privacy Policy</a> page for our policies on safeguarding the information you share with us.</li>
                        <li>Our <a href="{{URL::to('/')}}/faq">FAQ</a> page to search for answers to frequently asked questions.</li>
                    </ul>
                    </p>

                </div>
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    <!-- About section end -->

    


@include('Website/Layouts/Footer')
