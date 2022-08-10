@include('Website/Layouts/Header')

    <!-- Sign up Modal -->
    <div class="modal custom_modal fade" id="dealModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="modal_div text-center">
                                <div class="store_logo_modal_div">
                                    <img src="images/bestbuy_logo.jpg" alt="">
                                </div>
                                <h4 class="modal_title">20% Off One Cell Phone Accessory</h4>
                                <p>Copy and paste this code at <a href="#">Best Buy</a></p>
                                <div class="copy_input_div">
                                    <form>
                                        <span>20PERCENTOFF</span>
                                        <button type="button" class="copy_btn copied">Copied</button>
                                    </form>
                                </div>
                                <div class="newsletter_modal_div">
                                    <h4>Join to start earning cash back!</h4>
                                    <p>It's easy—just enter your email, or <a href="{{URL::to('/')}}/login">log in</a></p>
                                    <form action="" class="newsletter_form">
                                        <input type="text" class="nestletter_input" placeholder="Email address">
                                        <button class="join_btn">Subscribe</button>
                                    </form>
                                    <p>By joining, I agree to Couponzstack's <a href="{{URL::to('/')}}/privacy">Privacy Policy</a> and <a href="{{URL::to('/')}}/terms">Terms of Use</a>.</p>
                                </div>
                                <div class="feedback_help_div">
                                    <span class="feedback_thumb">
                                        <a href="javascript:void(0)" class="thumbup"><i class="fa fa-thumbs-o-up"></i></a>
                                        <a href="javascript:void(0)" class="thumbdown"><i class="fa fa-thumbs-o-down"></i></a>
                                    </span>
                                    <a href="#" class="needhelp_link">Need help?</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb start -->
    <div class="page_breadcrumb_wrpr">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page_breadcrumb">
                        <ul>
                            <li>
                                <a href="{{URL::to('/')}}/">
                                    <svg width="22" height="18" viewBox="0 0 22 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M21.6411 8.07323C21.2958 7.81425 20.9531 7.55527 20.6078 7.29628C20.1482 6.95097 19.6886 6.60566 19.229 6.25781C19.1859 6.2248 19.1402 6.19179 19.097 6.15878C18.772 5.91503 18.4495 5.67128 18.1245 5.42753C17.1242 4.67343 16.1238 3.92187 15.1234 3.16777C14.2601 2.51777 13.3943 1.86523 12.531 1.21523C12.1146 0.900384 11.7058 0.565228 11.2742 0.270697C11.2691 0.265619 11.2615 0.260541 11.2564 0.258002C11.1269 0.161517 10.873 0.161517 10.7435 0.258002C10.3982 0.516986 10.0554 0.77597 9.7101 1.03495C8.88236 1.65702 8.05463 2.28163 7.22689 2.9037C6.2265 3.65781 5.22611 4.40937 4.22572 5.16347C3.36244 5.81347 2.49662 6.46601 1.63334 7.11601C1.21439 7.43085 0.795449 7.7457 0.376504 8.06054C0.371426 8.06562 0.363808 8.07069 0.35873 8.07323C0.147988 8.2332 0.0159568 8.52011 0.175918 8.76894C0.310488 8.97714 0.645644 9.12187 0.871621 8.95175C1.21693 8.69277 1.55971 8.43378 1.90502 8.1748C2.14623 7.99452 2.38744 7.81171 2.62865 7.63144V16.5055C2.62865 16.5766 2.62611 16.6476 2.62865 16.7187C2.64389 17.3053 3.08061 17.7928 3.67728 17.808C4.09623 17.8182 4.51518 17.808 4.93158 17.808H8.77064C9.04486 17.808 9.27846 17.5744 9.27846 17.3002V10.4041C9.28861 10.4016 9.29877 10.399 9.30639 10.3965C9.30892 10.3965 9.31146 10.3965 9.31654 10.3965H10.6876C11.3478 10.3965 12.0105 10.3914 12.6706 10.3965H12.691C12.696 10.3965 12.7011 10.3965 12.7037 10.3965C12.7037 10.3965 12.7062 10.3965 12.7087 10.3965C12.7087 10.3965 12.7163 10.399 12.7265 10.4016V17.3002C12.7265 17.5744 12.9601 17.808 13.2343 17.808H18.2058C18.5333 17.808 18.8431 17.7344 19.0767 17.483C19.2925 17.2519 19.3788 16.9574 19.3788 16.6476V9.35038C19.3788 8.78163 19.3839 8.21034 19.3839 7.64159C19.5413 7.75839 19.6962 7.87773 19.8537 7.99452C20.2701 8.30937 20.6788 8.64452 21.1105 8.93905C21.1156 8.94413 21.1232 8.94921 21.1283 8.95175C21.3415 9.11171 21.7046 8.99237 21.824 8.76894C21.9662 8.50234 21.8697 8.24589 21.6411 8.07323ZM18.3632 16.7492C18.3632 16.7492 18.3632 16.7467 18.3607 16.7416C18.3581 16.7492 18.3556 16.7594 18.3556 16.767C18.3556 16.7695 18.3531 16.7721 18.3531 16.7746C18.348 16.7797 18.3454 16.7848 18.3378 16.7924C18.3378 16.7949 18.3353 16.7949 18.3328 16.7975H18.3201C17.8833 16.8025 17.4466 16.7975 17.0099 16.7975H13.7472V10.4219C13.7447 10.1603 13.6609 9.92929 13.4908 9.73124C13.2165 9.40624 12.8154 9.38339 12.4269 9.38339H11.3326C10.6648 9.38339 9.99701 9.37323 9.32924 9.38339C8.74018 9.39355 8.26791 9.82265 8.26283 10.4244C8.26029 10.5793 8.26283 10.7342 8.26283 10.8865V16.7975H3.6849C3.68236 16.7975 3.67728 16.7975 3.67475 16.7975C3.67221 16.7949 3.67221 16.7949 3.66967 16.7924C3.66713 16.7898 3.66713 16.7898 3.66459 16.7873C3.65951 16.7797 3.65697 16.7721 3.64936 16.7644C3.64682 16.7568 3.64428 16.7492 3.64174 16.7391C3.64174 16.734 3.64174 16.7289 3.64174 16.7213V9.28183C3.64174 8.47694 3.65189 7.66952 3.64428 6.8621C3.89057 6.67675 4.13939 6.4914 4.38568 6.30351C5.38607 5.54941 6.38646 4.79784 7.38686 4.04374C8.25014 3.39374 9.11596 2.7412 9.97924 2.0912C10.3169 1.83476 10.6673 1.59101 11.005 1.33202C11.2615 1.52499 11.5179 1.71796 11.7744 1.91093C12.6021 2.533 13.4298 3.15761 14.2576 3.77968C15.2579 4.53378 16.2583 5.28534 17.2587 6.03945C17.6269 6.3162 17.9925 6.59296 18.3607 6.86972V16.7187C18.3607 16.7238 18.3607 16.7289 18.3607 16.7314C18.3632 16.7416 18.3632 16.7467 18.3632 16.7492Z" fill="#929EF3"/>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="{{URL::to('/')}}/stores">Stores</a>
                            </li>
                            <li>
                                {{$data[0]->store_name}} Store
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb end -->

    <!-- Store detail start -->
    <section class="storedetail_area">
        <div class="store_header_div">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="store_logo_info_div">
                           <!--  <div class="store_logo_div">
                                <img src="{{$data[0]->store_images}}" alt="">
                            </div> -->
                            <div class="store_availableoffers_div">
                                <h2 class="h2_24px_title">{{$data[0]->store_name}} Coupon Codes</h2>
                                <h4 class="h4_18px_title">{{$data[0]->totaloffersall}} Offers Available</h4>
                            </div>
                            <div class="rating_submitcoupon_wrpr">
                                <div class="store_rating_div">
                                    <span>{{ \Illuminate\Support\Str::limit($data[0]->rating, 3,$start='..') }}

                                    </span>
                                    <div class="rating">
                                        <input type="radio" name="rating" value="f5" id="f5">
                                        <label for="f5">☆</label>
                                        <input type="radio" name="rating" value="f4" id="f4">
                                        <label for="f4">☆</label>
                                        <input type="radio" name="rating" value="f3" id="f3">
                                        <label for="f3">☆</label>
                                        <input type="radio" name="rating" value="f2" id="f2">
                                        <label for="f2">☆</label>
                                        <input type="radio" name="rating" value="f1" id="f1">
                                        <label for="f1">☆</label>
                                    </div>
                                    <span>({{$data[0]->votes}})</span>
                                </div>
                                <a href="#" class="primary_border_btn">Submit a Coupon</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="store_coupons_wrpr">
            <div class="container">
                <div class="row">
                    <div class="col-sm-5 col-md-5 col-lg-3">
                        <div class="filter_wrpr">
                            <h2 class="h2_24px_title">Filters</h2>
                            <div class="filter_checkbox_div">
                                <h6>Coupon Type</h6>
                                <div class="checkbox checkbox-primary">
                                    <input id="checkbox1" type="checkbox">
                                    <label for="checkbox1">Online Sales</label>
                                </div>
                                <div class="checkbox checkbox-primary">
                                    <input id="checkbox2" type="checkbox">
                                    <label for="checkbox2">Online Codes</label>
                                </div>
                                <div class="checkbox checkbox-primary">
                                    <input id="checkbox3" type="checkbox">
                                    <label for="checkbox3">In-Store Sales</label>
                                </div>
                                <div class="checkbox checkbox-primary">
                                    <input id="checkbox4" type="checkbox">
                                    <label for="checkbox4">Online Cash Back</label>
                                </div>
                                <div class="checkbox checkbox-primary">
                                    <input id="checkbox5" type="checkbox">
                                    <label for="checkbox5">In-Store Coupons</label>
                                </div>
                            </div>
                            <div class="filter_checkbox_div">
                                <h6>Top Categories</h6>
                                <div class="checkbox checkbox-primary">
                                    <input id="checkbox6" type="checkbox">
                                    <label for="checkbox6">Accessories</label>
                                </div>
                                <div class="checkbox checkbox-primary">
                                    <input id="checkbox7" type="checkbox">
                                    <label for="checkbox7">Automotive</label>
                                </div>
                                <div class="checkbox checkbox-primary">
                                    <input id="checkbox8" type="checkbox">
                                    <label for="checkbox8">Baby</label>
                                </div>
                                <div class="checkbox checkbox-primary">
                                    <input id="checkbox9" type="checkbox">
                                    <label for="checkbox9">Beauty</label>
                                </div>
                                <div class="checkbox checkbox-primary">
                                    <input id="checkbox10" type="checkbox">
                                    <label for="checkbox10">Books</label>
                                </div>
                                <div class="checkbox checkbox-primary">
                                    <input id="checkbox11" type="checkbox">
                                    <label for="checkbox11">Clothing</label>
                                </div>
                                <div class="checkbox checkbox-primary">
                                    <input id="checkbox12" type="checkbox">
                                    <label for="checkbox12">Computers & Electronics</label>
                                </div>
                                <div class="checkbox checkbox-primary">
                                    <input id="checkbox13" type="checkbox">
                                    <label for="checkbox13">Education</label>
                                </div>
                                <div class="checkbox checkbox-primary">
                                    <input id="checkbox14" type="checkbox">
                                    <label for="checkbox14">Entertainment</label>
                                </div>
                                <div class="checkbox checkbox-primary">
                                    <input id="checkbox15" type="checkbox">
                                    <label for="checkbox15">Events</label>
                                </div>
                                <div class="checkbox checkbox-primary">
                                    <input id="checkbox16" type="checkbox">
                                    <label for="checkbox16">Food</label>
                                </div>
                                <div class="checkbox checkbox-primary">
                                    <input id="checkbox17" type="checkbox">
                                    <label for="checkbox17">Furniture</label>
                                </div>
                                <div class="checkbox checkbox-primary">
                                    <input id="checkbox18" type="checkbox">
                                    <label for="checkbox18">Gifts</label>
                                </div>
                                <div class="checkbox checkbox-primary">
                                    <input id="checkbox19" type="checkbox">
                                    <label for="checkbox19">Health</label>
                                </div>
                                <div class="checkbox checkbox-primary">
                                    <input id="checkbox20" type="checkbox">
                                    <label for="checkbox20">Home & Garden</label>
                                </div>
                                <div class="checkbox checkbox-primary">
                                    <input id="checkbox21" type="checkbox">
                                    <label for="checkbox21">Jewellery</label>
                                </div>
                                <div class="checkbox checkbox-primary">
                                    <input id="checkbox22" type="checkbox">
                                    <label for="checkbox22">Instruments</label>
                                </div>
                                <div class="checkbox checkbox-primary">
                                    <input id="checkbox23" type="checkbox">
                                    <label for="checkbox23">Office Supplies</label>
                                </div>
                                <div class="checkbox checkbox-primary">
                                    <input id="checkbox24" type="checkbox">
                                    <label for="checkbox24">Others</label>
                                </div>
                            </div>
                            <div class="filter_checkbox_div">
                                <h6>Discount Type</h6>
                                <div class="checkbox checkbox-primary">
                                    <input id="checkbox25" type="checkbox">
                                    <label for="checkbox25">Free Shipping</label>
                                </div>
                                <div class="checkbox checkbox-primary">
                                    <input id="checkbox26" type="checkbox">
                                    <label for="checkbox26">Free Gift</label>
                                </div>
                                <div class="checkbox checkbox-primary">
                                    <input id="checkbox27" type="checkbox">
                                    <label for="checkbox27">% Off</label>
                                </div>
                                <div class="checkbox checkbox-primary">
                                    <input id="checkbox28" type="checkbox">
                                    <label for="checkbox28">Other</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-7 col-md-7 col-lg-9">
                        <div class="coupons_listing_wrpr">
                        @foreach($data as $value)
                            <div class="coupons_list_div">
                                <div class="coupon_percent_div">
                                    <div class="percent_count_wrpr">
                                        <span class="off_count_span">$150</span> 
                                        <span>OFF</span>
                                    </div>
                                </div>
                                <div class="coupon_content_div">
                                    <p>SALE</p>
                                    <h4 class="card_title"><a href="#">{{$value->offer_title}}</a></h4>
                                    <div class="btns_uses_div">
                                        <p>{{$value->uses}} uses today</p>
                                        <p>Verified</p>
                                        <p>Expiry: {{$value->offer_expiry}}</p>
                                        @if($value->is_deal == 1)
                                        <a href="#" class="primary_btn" data-toggle="modal">Get Deal</a>
                                            @else
                                            <a href="#" class="show_code_btn" data-toggle="modal" data-target="#dealModal"><span class="upper">Show Code</span><span class="lower">XXXXXX{{substr("$value->offer_code", -3)}}</span></a>
                                        @endif
                                    </div>
                                </div>
                            </div> <!-- coupon list end -->
                        @endforeach
                        </div>
                     <!--    <div class="pagination_wrpr pag-link">
                            <ul class="pagination_custom text-center">
                                <li class="pag-link"><a href=""></a>
                                   
                                </li>
                            </ul>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="about_store_wrpr">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="aboutstore_div">
                            <div class="title_rating_div">
                                <h2 class="h2_24px_title">About {{$data[0]->store_name}}</h2>
                                <div class="rating_div">
                                    <h6>Rate {{$data[0]->store_name}} Offers</h6>
                                    <div class="rating">
                                        <input type="radio" name="rating" value="5" id="5">
                                        <label for="5">☆</label>
                                        <input type="radio" name="rating" value="4" id="4">
                                        <label for="4">☆</label>
                                        <input type="radio" name="rating" value="3" id="3">
                                        <label for="3">☆</label>
                                        <input type="radio" name="rating" value="2" id="2">
                                        <label for="2">☆</label>
                                        <input type="radio" name="rating" value="1" id="1">
                                        <label for="1">☆</label>
                                    </div>
                                </div>
                            </div>@php $sd=str_replace('Couponjinn.com','Couponzstack.com',$data[0]->store_description);
                                         $sd=str_replace('couponjinn.com','Couponzstack.com',$sd);
                                         $sd=str_replace('Couponjinn','Couponzstack.com',$sd);
                                            $sd=str_replace('couponjinn','Couponzstack.com',$sd);


                                          @endphp
                            <p>{!!html_entity_decode($sd)!!}</p>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <div class="bullets_list_div">
                            <h4 class="h4_18px_title">{{$data[0]->store_name}} Special Offers</h4>
                            <ul>
                                <li>Free Gifts: Get free gifts on select purchases. Be sure to add the free item to your cart.</li>
                                <li>Bundle Savings: Purchase certain items together to get the bundle savings.</li>
                                <li>Quantity Discounts: Get discounts on select items when you buy more than one.</li>
                                <li>{{$data[0]->store_name}} Codes: During checkout, enter the promotional code in the payment method section to get the qualifying discount.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <div class="bullets_list_div">
                            <h4 class="h4_18px_title">Today's {{$data[0]->store_name}} Top Offers</h4>
                            <ul>
                                <li>8% Cash Back on Top Deals Products (Excludes Apple Products)</li>
                                <li>Free Shipping on Orders $35+</li>
                                <li>18 Month Appliance Financing With The My {{$data[0]->store_name}} Credit Card</li>
                                <li>10% Back In Rewards For New Cardmember & More</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <div class="bullets_list_div">
                            <h4 class="h4_18px_title">Related links</h4>
                            <ul>
                                <li><a href="#">{{$data[0]->store_name}} Black Friday Deals</a></li>
                                <li><a href="#">{{$data[0]->store_name}} Black Friday Ad Preview</a></li>
                                <li><a href="#">{{$data[0]->store_name}} 12 Days of Deals</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Store detail end -->
    
@include('Website/Layouts/Footer')
