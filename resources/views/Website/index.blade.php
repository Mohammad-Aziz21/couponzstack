@include('Website/Layouts/Header')

    <!-- Banner start -->
    <section class="banner_area">
        <div class="swiper-container slideshow">
          <div class="swiper-wrapper">
            <div class="swiper-slide slide">
              <div class="slide-image" style="background-image: url({{URL::to('/')}}/assets/website/images/clothing.jpg)"></div>
              <div class="container">
                  <div class="row">
                      <div class="col-sm-12 col-md-8 col-lg-7">
                        <h2 class="slide-title">Top coupons & deals for massive discounts!</h2>
                        <p class="slidertitle_para">Upto 50% off major popular brands.</p>
                      </div>
                  </div>
              </div>
            </div>
            <div class="swiper-slide slide">
              <div class="slide-image" style="background-image: url({{URL::to('/')}}/assets/website/images/food.jpg)"></div>
              <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-8 col-lg-7">
                    <h2 class="slide-title">Crunchy Zinger Burgers</h2>
                    <p class="slidertitle_para">20% Off your purchase</p>
                    </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide slide">
              <div class="slide-image" style="background-image: url(https://images.unsplash.com/photo-1558089687-f282ffcbc126?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MzZ8fHNwZWFrZXJ8ZW58MHx8MHw%3D&ixlib=rb-1.2.1&w=1000&q=80)"></div>
              <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-8 col-lg-7">
                        <h2 class="slide-title">Bluetooth Speakers</h2>
                        <p class="slidertitle_para">40% discount on accessories</p>
                        </div>
                    </div>
               </div>
            </div>
          </div>
          <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="slideshow-pagination"></div>
                </div>
                </div>
          </div>
          <div class="slideshow-navigation">
            <div class="slideshow-navigation-button prev"><i class="fa fa-angle-left"></i></div>
            <div class="slideshow-navigation-button next"><i class="fa fa-angle-right"></i></div>
          </div>
        </div>
      </section>
    <!-- Banner end -->

    <!-- Categories start -->
    <section class="category_area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-12 col-sm-12">
                    <div class="section-title text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
                        <h2 class="title">Categories</h2>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->

            <div class="row justify-content-center">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="category_div wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.4s; animation-name: fadeIn;">
                        <a href="category/Accessories"><svg width="74" height="70" viewBox="0 0 74 70" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M37 0.174988C16.7139 0.174988 0.25 17.4168 0.25 38.6249C0.25 44.8605 1.67436 50.7406 4.2 55.9499V60.225C4.20712 60.7668 4.51069 61.2956 4.975 61.575L12.3 65.975C12.5153 66.8981 13.0364 67.7114 13.675 68.3499C14.5264 69.2014 15.6667 69.825 17 69.825C18.3333 69.825 19.4736 69.2014 20.325 68.3499C21.1764 67.4985 21.8 66.3583 21.8 65.025V37.8249C21.8 36.4916 21.1764 35.3264 20.325 34.4749C19.4736 33.6235 18.3334 33.0249 17 33.025C15.6666 33.0249 14.5264 33.6235 13.675 34.4749C13.0595 35.0905 12.5529 35.8615 12.325 36.7499L5.075 40.3749C4.54469 40.6445 4.19126 41.2301 4.2 41.8249V46.4C3.66155 43.9005 3.35 41.2962 3.35 38.6249C3.35 19.1851 18.4053 3.44994 37 3.44994C55.5947 3.44994 70.65 19.1851 70.65 38.6249C70.65 41.2962 70.3384 43.9006 69.8 46.4V41.8249C69.8087 41.2301 69.4553 40.6445 68.925 40.3749L61.675 36.7499C61.4471 35.8615 60.9405 35.0905 60.325 34.4749C59.4736 33.6235 58.3334 33.0249 57 33.025C55.6666 33.0249 54.5264 33.6235 53.675 34.4749C52.8236 35.3264 52.2 36.4916 52.2 37.8249V65.025C52.2 66.3583 52.8236 67.4985 53.675 68.3499C54.5264 69.2014 55.6667 69.825 57 69.825C58.3333 69.825 59.4736 69.2014 60.325 68.3499C60.9636 67.7114 61.4847 66.8981 61.7 65.975L69.025 61.575C69.4893 61.2956 69.7929 60.7668 69.8 60.225V55.9499C72.3256 50.7407 73.75 44.8605 73.75 38.6249C73.75 17.4168 57.2861 0.174988 37 0.174988ZM12.2 40.4249V62.2L7.4 59.325V42.8249L12.2 40.4249ZM61.8 40.4249L66.6 42.8249V59.325L61.8 62.2V40.4249Z"></path>
                            </svg>
                            

                            



                            <h5>Accessories</h5>

                        </a>
                    </div> <!-- Category -->
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="category_div wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.4s; animation-name: fadeIn;">
                        <a href="category/Automotive">
                            <svg width="100" height="66" viewBox="0 0 100 66" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15.524,55.357c-4.213,0-7.629,3.418-7.629,7.631s3.416,7.63,7.629,7.63c4.215,0,7.63-3.417,7.63-7.63   S19.738,55.357,15.524,55.357z M15.524,66.189c-1.778,0-3.219-1.441-3.219-3.22s1.441-3.221,3.219-3.221   c1.777,0,3.219,1.442,3.219,3.221C18.742,64.748,17.301,66.189,15.524,66.189z"></path><path d="M82.53,55.355c-4.215,0-7.632,3.417-7.632,7.629c0,4.214,3.417,7.631,7.632,7.631c4.212,0,7.63-3.417,7.63-7.631   C90.16,58.772,86.742,55.355,82.53,55.355z M82.53,66.189c-1.778,0-3.222-1.441-3.222-3.22s1.443-3.221,3.222-3.221   s3.223,1.442,3.223,3.221S84.309,66.189,82.53,66.189z"></path><path d="M78.23,44.515c0,0-18.764-8.75-24.754-10.018c-5.987-1.268-26.597-0.115-28.554,1.151l-11.515,5.64L2.125,46.815   L0.298,57.465c0,0-0.05,6.318,0.388,7.773h5.527l0.071-2.25c0-5.103,4.138-9.24,9.243-9.24c5.103,0,9.238,4.138,9.238,9.24   l0.158,2.25h48.359l0.007-2.83c0-5.103,3.856-8.87,8.959-8.87s9.523,3.768,9.523,8.87l0.19,2.616c0,0,5.845,0.33,7.688-0.361   c0,0,0.69-9.787-2.878-13.357C93.603,48.308,87.213,46.44,78.23,44.515z M25.956,45.896c0,0,2.363-5.01,4.943-6.924   c1.911-1.627,12.446-1.583,12.446-1.583l0.389,9.715L25.956,45.896z M71.613,48.198l-24.698-0.978l-0.577-9.846   c9.154-0.344,19.576,4.549,25.563,8.06C77.89,48.946,71.613,48.198,71.613,48.198z"></path>
                            </svg>

                            


                            <h5>Automotive</h5>
                        </a>
                    </div> <!-- Category -->
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="category_div wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.4s; animation-name: fadeIn;">
                        <a href="category/Beauty"><svg width="74" height="70" viewBox="0 0 90 105" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M61.5,53H61V41.5c0-0.9,0-1.7-1-2.1V12.8c0-1.8-1.1-3.5-2.7-4.2c-1.7-0.7-3.6-0.3-4.9,1L41.4,20.4c-0.9,0.9-1.4,2-1.4,3.2  v15.6c0,0.4-1,1.3-1,2.3V53h-0.5c-1.4,0-2.5,1.1-2.5,2.5v32.1c0,1.4,1.1,2.4,2.5,2.4h23c1.4,0,2.5-1,2.5-2.4V55.5  C64,54.1,62.9,53,61.5,53z M55,53v-9h1v9H55z M55,14v25H45V23.8L55,14z M44,44h8v9h-8V44z M41,58c0,0,0.1,0,0.2,0H54v27H41V58z   M57,85V58h1.8c0.1,0,0.2,0,0.2,0v27H57z"></path>
                            </svg>

                            

                            


                            <h5>Beauty</h5>
                        </a>
                    </div> <!-- Category -->
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="category_div wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.4s; animation-name: fadeIn;">
                        <a href="category/Clothing"><svg width="105" height="63" viewBox="0 4 100 92" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M38.9317589,10.7574272h-6.3779564c-1.368927,0.0725946-12.5277557,1.0681782-14.0729828,14.1559486L13.150301,50.4666786  l8.8150597,2.6652603l4.7808743-13.7100105c0.528904-1.5141182,2.5511818-1.8356056,3.5052814-0.4977913  c7.5705814,10.4639931,4.6564274,38.9314537,0.5911293,50.3184319h38.3195877  c-4.0549316-11.3558655-7.0001984-40.1137047,0.6014938-50.3495445c0.9748459-1.3067017,2.9763794-0.9541016,3.4845428,0.528904  l4.7808762,13.7100105l8.8150558-2.6652603l-5.3201447-25.5533028c-1.5867157-13.419632-13.2848129-14.124836-14.1663208-14.1663189  v0.0103703h-6.2846184c0,4.3556767,0.2800064,7.7676239-3.2460175,11.3455009  c-7.0313072,7.1350136-18.89534,1.9393139-18.89534-7.8920717V10.7574272z M32.6367683,6.754353h34.7209663v0.0103707h0.0518494  c0.051857,0,15.9811859,0.3007493,18.0656891,17.6093788l5.6208954,26.9429722  c0.3007507,1.0474358-0.3007431,2.1363564-1.3481827,2.4474754l-12.3929367,3.7541771V57.508358  c-1.0163269,0.3111191-2.1052475-0.2385254-2.4578476-1.2444801l-3.8682556-11.0966034  c-3.9512177,11.5321693-1.3896637,37.4899292,2.831192,45.0190277c0.8711319,1.5555954-0.2903824,3.0593414-1.7007904,3.0593414  H27.8351536v-0.0103683c-1.4518929,0-2.4578457-1.5555954-1.7733822-2.9037857  c4.3453064-8.4935684,6.8964882-33.4972267,2.9037838-45.1642151L25.1387825,56.180912  c-0.3214912,1.0578079-1.4415226,1.6593056-2.4993286,1.3378143l-12.3929377-3.7541771l0,0  c-0.9852123-0.2903786-1.5867109-1.2963333-1.3792973-2.3126564l5.652009-27.0777912  C16.4792824,8.1958752,30.5211544,6.8788009,32.3775024,6.7750945C32.4708366,6.7647238,32.5538025,6.754353,32.6367683,6.754353z   M57.0700417,14.2108564v-3.4534292H42.9348335c0,3.3186111-0.4044571,6.0253525,2.0845032,8.5557938  C49.48909,23.8451996,57.0700417,20.5576992,57.0700417,14.2108564z"></path>
                                
                            </svg>
                            

                            


                            <h5>Clothing</h5>
                        </a>
                    </div> <!-- Category -->
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="category_div wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.4s; animation-name: fadeIn;">
                        <a href="category/Computers-and-Electronics">
                            <svg width="86" height="72" viewBox="0 0 86 72" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M78.5714 4.00002V39.7143H64.2857V43.2857H78.5714C80.5464 43.2857 82.1429 41.6893 82.1429 39.7143V4.00002C82.1429 2.02502 80.5464 0.428589 78.5714 0.428589H28.5714C26.5964 0.428589 25 2.02502 25 4.00002V14.7143H28.5714V4.00002H78.5714Z"></path>
                                <path d="M82.1428 46.8572H64.2856V54H82.1428C84.1178 54 85.7142 52.4036 85.7142 50.4286C85.7142 48.4536 84.1178 46.8572 82.1428 46.8572Z"></path>
                                <path d="M7.14272 18.2858C5.16772 18.2858 3.57129 19.8822 3.57129 21.8572V57.5715C3.57129 59.5465 5.16772 61.1429 7.14272 61.1429H57.1427C59.1177 61.1429 60.7141 59.5465 60.7141 57.5715V21.8572C60.7141 19.8822 59.1177 18.2858 57.1427 18.2858H7.14272ZM57.1427 57.5715H7.14272V21.8572H57.1427V57.5715Z"></path>
                                <path d="M3.57143 71.8572H60.7143C62.6893 71.8572 64.2857 70.2608 64.2857 68.2858C64.2857 66.3108 62.6893 64.7144 60.7143 64.7144H3.57143C1.59643 64.7144 0 66.3108 0 68.2858C0 70.2608 1.59643 71.8572 3.57143 71.8572Z"></path>
                            </svg>



                            <h5>Computers &amp; Electronics</h5>
                        </a>
                    </div> <!-- Category -->
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="category_div wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.4s; animation-name: fadeIn;">
                        <a href="category/Gifts">
                            <svg width="100" height="66" viewBox="0 0 63 63" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M22.6858 11.745C21.6817 12.7491 21.6419 14.568 22.8862 15.8122C23.158 16.084 23.923 16.5229 25.151 17.0332C26.3017 17.5114 27.6434 17.9678 28.8499 18.3453C28.9481 18.376 29.0187 18.3708 29.068 18.3581C29.1218 18.3443 29.1726 18.3156 29.2145 18.2737C29.2564 18.2318 29.2852 18.181 29.299 18.1272C29.3116 18.0779 29.3168 18.0073 29.2861 17.9091C28.9086 16.7025 28.4522 15.3609 27.974 14.2102C27.4637 12.9822 27.0248 12.2171 26.7531 11.9454C25.5088 10.7011 23.6899 10.7408 22.6858 11.745ZM20.7649 17.9336C18.4806 15.6493 18.2614 11.9267 20.5645 9.62364C22.8675 7.32058 26.5901 7.53977 28.8744 9.82405C29.6191 10.5687 30.2486 11.8659 30.7443 13.059C31.1306 13.9884 31.4951 15.0078 31.8155 15.9759C32.136 15.0078 32.5005 13.9884 32.8867 13.059C33.3825 11.8659 34.012 10.5687 34.7567 9.82405C37.0409 7.53977 40.7635 7.32058 43.0666 9.62364C45.3696 11.9267 45.1504 15.6493 42.8662 17.9336C42.1727 18.6271 41 19.2207 39.8785 19.6994H54C55.1046 19.6994 56 20.5948 56 21.6994V30.6994C56 31.804 55.1046 32.6994 54 32.6994H52V53.6994C52 54.804 51.1046 55.6994 50 55.6994H14C12.8954 55.6994 12 54.804 12 53.6994V32.6994H10C8.89543 32.6994 8 31.804 8 30.6994V21.6994C8 20.5948 8.89543 19.6994 10 19.6994H23.7525C22.631 19.2207 21.4584 18.6271 20.7649 17.9336ZM11 22.6994V29.6994H14H30.5V22.6994H11ZM33.5 22.6994V29.6994H50H53V22.6994H33.5ZM30.5 32.6994H15V52.6994H30.5V32.6994ZM33.5 52.6994V32.6994H49V52.6994H33.5ZM40.7448 15.8122C41.9891 14.568 41.9494 12.7491 40.9452 11.745C39.9411 10.7408 38.1222 10.7011 36.878 11.9454C36.6062 12.2171 36.1673 12.9822 35.657 14.2102C35.1789 15.3609 34.7224 16.7025 34.3449 17.9091C34.3142 18.0073 34.3194 18.0779 34.3321 18.1272C34.3459 18.181 34.3746 18.2318 34.4165 18.2737C34.4584 18.3156 34.5092 18.3443 34.563 18.3581C34.6123 18.3708 34.6829 18.376 34.7811 18.3453C35.9877 17.9678 37.3293 17.5114 38.48 17.0332C39.708 16.5229 40.4731 16.084 40.7448 15.8122Z"></path>
                            </svg>

                            


                            <h5>Gifts</h5>
                        </a>
                    </div> <!-- Category -->
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="category_div wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.4s; animation-name: fadeIn;">
                        <a href="category/Services">
                            <svg width="74" height="70" viewBox="0 0 90 105" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M60.89,53.07a21,21,0,0,0,20.66-5.41h0A20.87,20.87,0,0,0,84.93,22.6L83,19.11,72.28,29.83l-2.92-.12-.12-2.92L80,16.07l-3.49-1.93c-8.18-4.51-17.56-3-24.5,3.94a21,21,0,0,0-4.85,22.35L12.34,75.2,25.55,88.41Zm-6.54-11.4-1-1.94a15,15,0,0,1,2.84-17.41c3.93-3.93,8.75-5.46,13.44-4.42L63.13,24.4l.46,11.07,11.07.46,6.55-6.55a14.55,14.55,0,0,1-3.9,14,15,15,0,0,1-16.12,3.42l-1.83-.72-33.8,33.8L20.83,75.2Z"></path>
                            </svg>

                            





                            <h5>Services</h5>
                        </a>
                    </div> <!-- Category -->
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="category_div wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.4s; animation-name: fadeIn;">
                        <a href="category/Travel"><svg width="74" height="70" viewBox="0 0 90 105" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M69.3,28.3H61V13.5h1c0.4,0,0.7-0.3,0.7-0.7v-7c0-1.9-1.5-3.4-3.4-3.4H40.7c-1.9,0-3.4,1.5-3.4,3.4v7     c0,0.4,0.3,0.7,0.7,0.7h1v14.7h-8.4c-3.1,0-5.6,2.5-5.6,5.6v52.3c0,3.1,2.5,5.6,5.6,5.6h1.3v3.3c0,1.3,1.1,2.4,2.4,2.4h5.3     c1.3,0,2.4-1.1,2.4-2.4v-3.3h16.1v3.3c0,1.3,1.1,2.4,2.4,2.4h5.3c1.3,0,2.4-1.1,2.4-2.4v-3.3h1.3c3.1,0,5.6-2.5,5.6-5.6V33.9     C74.9,30.8,72.4,28.3,69.3,28.3z M63.5,36.9c0-1,0.8-1.8,1.8-1.8s1.8,0.8,1.8,1.8v46.2c0,1-0.8,1.8-1.8,1.8s-1.8-0.8-1.8-1.8     V36.9z M42.4,13.5h1c0.4,0,0.7-0.3,0.7-0.7V9.2h11.9v3.6c0,0.4,0.3,0.7,0.7,0.7h1v14.7H42.4V13.5z M32.9,36.9     c0-1,0.8-1.8,1.8-1.8c1,0,1.8,0.8,1.8,1.8v46.2c0,1-0.8,1.8-1.8,1.8c-1,0-1.8-0.8-1.8-1.8V36.9z M46.7,83.2c0,1-0.8,1.8-1.8,1.8     c-1,0-1.8-0.8-1.8-1.8V36.9c0-1,0.8-1.8,1.8-1.8c1,0,1.8,0.8,1.8,1.8V83.2z M56.9,83.2c0,1-0.8,1.8-1.8,1.8c-1,0-1.8-0.8-1.8-1.8     V36.9c0-1,0.8-1.8,1.8-1.8c1,0,1.8,0.8,1.8,1.8V83.2z"></path>
                            </svg>
                            

                            



                            <h5>Travel</h5>
                        </a>
                    </div> <!-- Category -->
                </div>
            </div>
        </div> <!-- container -->
    </section>
    <!-- Categories end -->

    <!-- Deals start -->
    <section class="deals_area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-12 col-sm-12">
                    <div class="section-title text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
                        <h2 class="title">Shop Today's Trending Deals and Save Big</h2>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row justify-content-center">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="deal_content_div wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
                        <div class="store_logo_div"><img src="{{URL::to('/')}}/assets/website/images/bestbuy_logo.jpg" alt=""></div>
                        <div class="deal_contnt">
                            <p>SALE</p>
                            <h5 class="card_title"><a href="#">Over 50% Off Select Clearance Electronics</a></h5>
                            <p>17 uses today</p>
                            <a href="coupons.html" class="primary_btn">Get Deal</a>
                        </div>
                    </div> <!-- Deal -->
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="deal_content_div wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
                        <div class="store_logo_div"><img src="{{URL::to('/')}}/assets/website/images/Walmart_logo.jpg" alt=""></div>
                        <div class="deal_contnt">
                            <p>SALE</p>
                            <h5 class="card_title"><a href="#">Up to 86% Off Select Electronics</a></h5>
                            <p>17 uses today</p>
                            <a href="#" class="primary_btn">Get Deal</a>
                        </div>
                    </div> <!-- Deal -->
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="deal_content_div wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
                        <div class="store_logo_div"><img src="{{URL::to('/')}}/assets/website/images/Amazon_logo.jpg" alt=""></div>
                        <div class="deal_contnt">
                            <p>SALE</p>
                            <h5 class="card_title"><a href="#">Up to 50% Off Select Items With Popular Amazon</a></h5>
                            <p>17 uses today</p>
                            <a href="#" class="primary_btn">Get Deal</a>
                        </div>
                    </div> <!-- Deal -->
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="deal_content_div wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
                        <div class="store_logo_div"><img src="{{URL::to('/')}}/assets/website/images/expedia_logo.jpg" alt=""></div>
                        <div class="deal_contnt">
                            <p>SALE</p>
                            <h5 class="card_title"><a href="#">20% Off Select Cancun Hotels Bookings</a></h5>
                            <p>17 uses today</p>
                            <a href="#" class="primary_btn">Get Deal</a>
                        </div>
                    </div> <!-- Deal -->
                </div>
            </div> <!-- row -->
            <div class="row justify-content-center">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="deal_content_div wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
                        <div class="store_logo_div"><img src="{{URL::to('/')}}/assets/website/images/bestbuy_logo.jpg" alt=""></div>
                        <div class="deal_contnt">
                            <p>SALE</p>
                            <h5 class="card_title"><a href="#">Over 50% Off Select Clearance Electronics</a></h5>
                            <p>17 uses today</p>
                            <a href="#" class="primary_btn">Get Deal</a>
                        </div>
                    </div> <!-- Deal -->
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="deal_content_div wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
                        <div class="store_logo_div"><img src="{{URL::to('/')}}/assets/website/images/Walmart_logo.jpg" alt=""></div>
                        <div class="deal_contnt">
                            <p>SALE</p>
                            <h5 class="card_title"><a href="#">Up to 86% Off Select Electronics</a></h5>
                            <p>17 uses today</p>
                            <a href="#" class="primary_btn">Get Deal</a>
                        </div>
                    </div> <!-- Deal -->
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="deal_content_div wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
                        <div class="store_logo_div"><img src="{{URL::to('/')}}/assets/website/images/Amazon_logo.jpg" alt=""></div>
                        <div class="deal_contnt">
                            <p>SALE</p>
                            <h5 class="card_title"><a href="#">Up to 50% Off Select Items With Popular Amazon</a></h5>
                            <p>17 uses today</p>
                            <a href="#" class="primary_btn">Get Deal</a>
                        </div>
                    </div> <!-- Deal -->
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="deal_content_div wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
                        <div class="store_logo_div"><img src="{{URL::to('/')}}/assets/website/images/expedia_logo.jpg" alt=""></div>
                        <div class="deal_contnt">
                            <p>SALE</p>
                            <h5 class="card_title"><a href="#">20% Off Select Cancun Hotels Bookings</a></h5>
                            <p>17 uses today</p>
                            <a href="#" class="primary_btn">Get Deal</a>
                        </div>
                    </div> <!-- Deal -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    <!-- Deals end -->

    <!-- Deal banner start -->
    <div class="deal_banner_area">
        <img src="{{URL::to('/')}}/assets/website/images/deal_banner.png" alt="">
    </div>
    <!-- Deal banner end -->

    <!-- Stores start -->
    <section class="stores_area wow fadeIn">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-12 col-sm-12">
                    <div class="section-title text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
                        <h2 class="title">Top Stores</h2>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row">
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="store_div wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                        <a href=""><img src="{{URL::to('/')}}/assets/website/images/1645428.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="store_div wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                        <a href=""><img src="{{URL::to('/')}}/assets/website/images/5102351.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="store_div wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                        <a href=""><img src="{{URL::to('/')}}/assets/website/images/4575680.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="store_div wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                        <a href=""><img src="{{URL::to('/')}}/assets/website/images/4723933.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="store_div wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                        <a href=""><img src="{{URL::to('/')}}/assets/website/images/5032667.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="store_div wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                        <a href=""><img src="{{URL::to('/')}}/assets/website/images/4010097.png" alt=""></a>
                    </div>
                </div>
            </div> <!-- row -->
            <div class="row">
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="store_div wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                        <a href=""><img src="{{URL::to('/')}}/assets/website/images/5011770.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="store_div wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                        <a href=""><img src="{{URL::to('/')}}/assets/website/images/2942540.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="store_div wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                        <a href=""><img src="{{URL::to('/')}}/assets/website/images/1702763.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="store_div wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                        <a href=""><img src="{{URL::to('/')}}/assets/website/images/2007719.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="store_div wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                        <a href=""><img src="{{URL::to('/')}}/assets/website/images/4837117.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="store_div wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                        <a href=""><img src="{{URL::to('/')}}/assets/website/images/4186290.png" alt=""></a>
                    </div>
                </div>
            </div> <!-- row -->
            <div class="row">
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="store_div wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                        <a href=""><img src="{{URL::to('/')}}/assets/website/images/2568723.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="store_div wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                        <a href=""><img src="{{URL::to('/')}}/assets/website/images/2110809.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="store_div wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                        <a href=""><img src="{{URL::to('/')}}/assets/website/images/2720728.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="store_div wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                        <a href=""><img src="{{URL::to('/')}}/assets/website/images/4529306.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="store_div wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                        <a href=""><img src="{{URL::to('/')}}/assets/website/images/4859615.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="store_div wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                        <a href=""><img src="{{URL::to('/')}}/assets/website/images/1463221.png" alt=""></a>
                    </div>
                </div>
            </div> <!-- row -->
        </div>
    </section>
    <!-- Stores end -->


@include('Website/Layouts/Footer')
