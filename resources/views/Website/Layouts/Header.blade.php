<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <title>Coupons</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    


    <!-- Favicon Icon -->
    <link rel="shortcut icon" href="{{URL::to('/')}}/assets/website/images/favicon.png" type="image/png">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="{{URL::to('/')}}/assets/website/css/magnific-popup.css">
    <!-- Slick CSS -->
    <link rel="stylesheet" href="{{URL::to('/')}}/assets/website/css/slick.css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="{{URL::to('/')}}/assets/website/css/font-awesome.min.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{URL::to('/')}}/assets/website/css/animate.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{URL::to('/')}}/assets/website/css/bootstrap.min.css">
    <!-- Build CSS -->
    <link rel="stylesheet" href="{{URL::to('/')}}/assets/website/css/build.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{URL::to('/')}}/assets/website/css/style.css">


<style>
.cookies a {
    text-decoration: none;
    color: #000;
    margin-top: 8px
}
.cookies a:hover {  
    text-decoration: none;
    color: blue;
    margin-top: 8px
}
.cookies .btn:hover{
    color:white;
}
button.close{
    float: right !important;
    margin-left:93% !important;
}
div.cookies{
    font-size: 13px;
    margin-bottom: 10px;
    
}
.popup.custom .cookies {
    width:50%;
    position:fixed;
    bottom:1%;
    left:1%;
    margin:0;
}
.popup
{
    overflow-y: auto !important;
}
.modal-backdrop {
  display: none !important;
}
.modal-open .popup{
    width: 300px;
    margin: 0 auto;
}
.modal-open
{
   overflow:auto !important;
   overflow-x:hidden !important;
   padding-right: 0 !important;
}
    </style>
</head>
<body>
<!-- Preloader start -->
<div class="preloader">
    <div class="loader">
        <div class="ytp-spinner">
            <div class="ytp-spinner-container">
                <div class="ytp-spinner-rotator">
                    <div class="ytp-spinner-left">
                        <div class="ytp-spinner-circle"></div>
                    </div>
                    <div class="ytp-spinner-right">
                        <div class="ytp-spinner-circle"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Preloader end -->

<!-- Header start -->
<header class="header-area">
    <div class="navbar-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-12 col-sm-12">
                    <div class="logo_div">
                        <a class="navbar-brand" href="{{URL::to('/')}}">
                            <svg width="126" height="35" viewBox="0 0 126 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M21.572 25.128C21.284 25.344 20.876 25.584 20.348 25.848C19.844 26.088 19.244 26.316 18.548 26.532C17.852 26.748 17.072 26.928 16.208 27.072C15.368 27.216 14.468 27.288 13.508 27.288C11.468 27.288 9.632 26.94 8 26.244C6.392 25.524 5.024 24.564 3.896 23.364C2.768 22.164 1.904 20.772 1.304 19.188C0.704 17.604 0.404 15.924 0.404 14.148C0.404 12.18 0.752 10.368 1.448 8.712C2.168 7.056 3.14 5.628 4.364 4.428C5.588 3.228 7.016 2.292 8.648 1.62C10.304 0.947999 12.056 0.611999 13.904 0.611999C14.6 0.611999 15.308 0.659999 16.028 0.755999C16.748 0.851999 17.42 0.983999 18.044 1.152C18.692 1.32 19.256 1.524 19.736 1.764C20.24 1.98 20.624 2.208 20.888 2.448C20.696 2.736 20.54 2.976 20.42 3.168C20.324 3.36 20.216 3.564 20.096 3.78C19.976 3.972 19.844 4.2 19.7 4.464C19.556 4.728 19.364 5.076 19.124 5.508C18.812 5.292 18.44 5.112 18.008 4.968C17.6 4.824 17.168 4.704 16.712 4.608C16.256 4.512 15.788 4.44 15.308 4.392C14.852 4.344 14.432 4.32 14.048 4.32C12.656 4.32 11.36 4.584 10.16 5.112C8.984 5.616 7.964 6.312 7.1 7.2C6.236 8.064 5.552 9.072 5.048 10.224C4.568 11.376 4.328 12.576 4.328 13.824C4.328 15.048 4.556 16.224 5.012 17.352C5.492 18.48 6.14 19.488 6.956 20.376C7.796 21.264 8.792 21.972 9.944 22.5C11.12 23.028 12.404 23.292 13.796 23.292C14.54 23.292 15.26 23.22 15.956 23.076C16.652 22.932 17.276 22.764 17.828 22.572C18.404 22.38 18.872 22.188 19.232 21.996C19.616 21.804 19.844 21.66 19.916 21.564L21.572 25.128ZM22.6863 19.44C22.6863 18.36 22.8903 17.34 23.2983 16.38C23.7303 15.42 24.3063 14.592 25.0263 13.896C25.7463 13.176 26.5863 12.612 27.5463 12.204C28.5303 11.772 29.5863 11.556 30.7143 11.556C31.8423 11.556 32.8863 11.772 33.8463 12.204C34.8303 12.612 35.6703 13.176 36.3663 13.896C37.0863 14.592 37.6383 15.42 38.0223 16.38C38.4303 17.34 38.6343 18.36 38.6343 19.44C38.6343 20.52 38.4303 21.54 38.0223 22.5C37.6383 23.46 37.0863 24.3 36.3663 25.02C35.6703 25.74 34.8303 26.316 33.8463 26.748C32.8863 27.156 31.8303 27.36 30.6783 27.36C29.5743 27.36 28.5303 27.168 27.5463 26.784C26.5863 26.4 25.7463 25.86 25.0263 25.164C24.3063 24.468 23.7303 23.64 23.2983 22.68C22.8903 21.696 22.6863 20.616 22.6863 19.44ZM25.7463 19.476C25.7463 20.148 25.8663 20.784 26.1063 21.384C26.3703 21.96 26.7183 22.476 27.1503 22.932C27.6063 23.364 28.1223 23.712 28.6983 23.976C29.2983 24.216 29.9343 24.336 30.6063 24.336C31.2783 24.336 31.9143 24.216 32.5143 23.976C33.1143 23.712 33.6303 23.364 34.0623 22.932C34.5183 22.476 34.8783 21.96 35.1423 21.384C35.4063 20.784 35.5383 20.148 35.5383 19.476C35.5383 18.804 35.4063 18.168 35.1423 17.568C34.8783 16.968 34.5183 16.452 34.0623 16.02C33.6303 15.564 33.1143 15.216 32.5143 14.976C31.9143 14.712 31.2783 14.58 30.6063 14.58C29.9343 14.58 29.2983 14.712 28.6983 14.976C28.1223 15.216 27.6063 15.564 27.1503 16.02C26.7183 16.452 26.3703 16.968 26.1063 17.568C25.8663 18.168 25.7463 18.804 25.7463 19.476ZM55.9101 27.324H53.3181L52.9581 23.148C52.4061 24.372 51.6261 25.38 50.6181 26.172C49.6341 26.964 48.3741 27.36 46.8381 27.36C45.3021 27.36 44.0781 26.952 43.1661 26.136C42.2781 25.296 41.8101 24.204 41.7621 22.86V11.952H44.8221V21.492C44.8701 22.236 45.1341 22.872 45.6141 23.4C46.1181 23.928 46.8861 24.228 47.9181 24.3C48.6381 24.3 49.2981 24.18 49.8981 23.94C50.4981 23.676 51.0141 23.328 51.4461 22.896C51.8781 22.464 52.2141 21.948 52.4541 21.348C52.6941 20.748 52.8141 20.088 52.8141 19.368V11.952H55.9101V27.324ZM72.9665 19.44C72.9665 18.744 72.8585 18.108 72.6425 17.532C72.4265 16.932 72.1145 16.416 71.7065 15.984C71.2985 15.552 70.8065 15.216 70.2305 14.976C69.6545 14.712 69.0065 14.58 68.2865 14.58C67.5665 14.58 66.8945 14.712 66.2705 14.976C65.6705 15.216 65.1545 15.552 64.7225 15.984C64.2905 16.416 63.9425 16.932 63.6785 17.532C63.4385 18.108 63.3185 18.744 63.3185 19.44C63.3185 20.136 63.4385 20.784 63.6785 21.384C63.9425 21.984 64.2905 22.5 64.7225 22.932C65.1545 23.364 65.6705 23.712 66.2705 23.976C66.8945 24.216 67.5665 24.336 68.2865 24.336C69.0065 24.336 69.6545 24.216 70.2305 23.976C70.8065 23.712 71.2985 23.364 71.7065 22.932C72.1145 22.476 72.4265 21.96 72.6425 21.384C72.8585 20.784 72.9665 20.136 72.9665 19.44ZM76.3145 19.512C76.3145 20.64 76.1225 21.684 75.7385 22.644C75.3545 23.604 74.8145 24.432 74.1185 25.128C73.4225 25.824 72.5825 26.376 71.5985 26.784C70.6385 27.168 69.5825 27.36 68.4305 27.36C67.8305 27.36 67.2545 27.288 66.7025 27.144C66.1745 27.024 65.6825 26.856 65.2265 26.64C64.7705 26.4 64.3745 26.148 64.0385 25.884C63.7025 25.596 63.4505 25.308 63.2825 25.02C63.2825 25.14 63.2825 25.272 63.2825 25.416C63.3065 25.536 63.3185 25.656 63.3185 25.776V34.236H60.2225V11.952H63.2105C63.2105 12.24 63.2225 12.6 63.2465 13.032C63.2945 13.44 63.3185 13.812 63.3185 14.148C63.5105 13.86 63.7625 13.572 64.0745 13.284C64.4105 12.972 64.7945 12.696 65.2265 12.456C65.6825 12.192 66.1865 11.976 66.7385 11.808C67.2905 11.64 67.9025 11.556 68.5745 11.556C69.7265 11.556 70.7705 11.748 71.7065 12.132C72.6665 12.492 73.4825 13.02 74.1545 13.716C74.8505 14.388 75.3785 15.216 75.7385 16.2C76.1225 17.184 76.3145 18.288 76.3145 19.512ZM78.6199 19.44C78.6199 18.36 78.8239 17.34 79.2319 16.38C79.6639 15.42 80.2399 14.592 80.9599 13.896C81.6799 13.176 82.5199 12.612 83.4799 12.204C84.4639 11.772 85.5199 11.556 86.6479 11.556C87.7759 11.556 88.8199 11.772 89.7799 12.204C90.7639 12.612 91.6039 13.176 92.2999 13.896C93.0199 14.592 93.5719 15.42 93.9559 16.38C94.3639 17.34 94.5679 18.36 94.5679 19.44C94.5679 20.52 94.3639 21.54 93.9559 22.5C93.5719 23.46 93.0199 24.3 92.2999 25.02C91.6039 25.74 90.7639 26.316 89.7799 26.748C88.8199 27.156 87.7639 27.36 86.6119 27.36C85.5079 27.36 84.4639 27.168 83.4799 26.784C82.5199 26.4 81.6799 25.86 80.9599 25.164C80.2399 24.468 79.6639 23.64 79.2319 22.68C78.8239 21.696 78.6199 20.616 78.6199 19.44ZM81.6799 19.476C81.6799 20.148 81.7999 20.784 82.0399 21.384C82.3039 21.96 82.6519 22.476 83.0839 22.932C83.5399 23.364 84.0559 23.712 84.6319 23.976C85.2319 24.216 85.8679 24.336 86.5399 24.336C87.2119 24.336 87.8479 24.216 88.4479 23.976C89.0479 23.712 89.5639 23.364 89.9959 22.932C90.4519 22.476 90.8119 21.96 91.0759 21.384C91.3399 20.784 91.4719 20.148 91.4719 19.476C91.4719 18.804 91.3399 18.168 91.0759 17.568C90.8119 16.968 90.4519 16.452 89.9959 16.02C89.5639 15.564 89.0479 15.216 88.4479 14.976C87.8479 14.712 87.2119 14.58 86.5399 14.58C85.8679 14.58 85.2319 14.712 84.6319 14.976C84.0559 15.216 83.5399 15.564 83.0839 16.02C82.6519 16.452 82.3039 16.968 82.0399 17.568C81.7999 18.168 81.6799 18.804 81.6799 19.476ZM97.8397 11.952H100.54C100.588 12.696 100.624 13.38 100.648 14.004C100.696 14.604 100.744 15.204 100.792 15.804C101.344 14.508 102.124 13.476 103.132 12.708C104.164 11.94 105.424 11.556 106.912 11.556C108.424 11.556 109.636 11.976 110.548 12.816C111.46 13.656 111.94 14.736 111.988 16.056V27H108.892V17.46C108.844 16.692 108.58 16.044 108.1 15.516C107.62 14.964 106.864 14.664 105.832 14.616C105.112 14.616 104.452 14.748 103.852 15.012C103.252 15.252 102.736 15.588 102.304 16.02C101.872 16.452 101.524 16.968 101.26 17.568C101.02 18.168 100.9 18.828 100.9 19.548V27H97.8397V11.952ZM124.544 13.284L122.924 15.444C122.9 15.42 122.816 15.36 122.672 15.264C122.528 15.168 122.336 15.072 122.096 14.976C121.88 14.88 121.616 14.796 121.304 14.724C121.016 14.628 120.716 14.58 120.404 14.58C119.996 14.58 119.588 14.676 119.18 14.868C118.796 15.06 118.604 15.42 118.604 15.948C118.604 16.404 118.76 16.776 119.072 17.064C119.408 17.352 119.816 17.616 120.296 17.856C120.776 18.072 121.292 18.3 121.844 18.54C122.42 18.78 122.948 19.08 123.428 19.44C123.908 19.776 124.304 20.208 124.616 20.736C124.952 21.24 125.12 21.888 125.12 22.68C125.12 24.024 124.652 25.14 123.716 26.028C122.804 26.892 121.544 27.324 119.936 27.324C119 27.324 118.076 27.168 117.164 26.856C116.276 26.52 115.556 26.04 115.004 25.416C115.172 25.248 115.352 25.032 115.544 24.768C115.76 24.504 115.964 24.252 116.156 24.012C116.372 23.772 116.54 23.58 116.66 23.436C116.804 23.268 116.888 23.184 116.912 23.184C116.912 23.208 116.996 23.28 117.164 23.4C117.356 23.52 117.596 23.652 117.884 23.796C118.172 23.916 118.496 24.036 118.856 24.156C119.216 24.252 119.576 24.3 119.936 24.3C120.512 24.3 121.004 24.156 121.412 23.868C121.82 23.58 122.024 23.196 122.024 22.716C122.024 22.284 121.856 21.948 121.52 21.708C121.208 21.444 120.812 21.204 120.332 20.988C119.852 20.772 119.324 20.556 118.748 20.34C118.172 20.1 117.644 19.8 117.164 19.44C116.684 19.08 116.276 18.636 115.94 18.108C115.628 17.556 115.472 16.848 115.472 15.984C115.472 15.168 115.616 14.484 115.904 13.932C116.216 13.38 116.6 12.936 117.056 12.6C117.536 12.24 118.064 11.988 118.64 11.844C119.216 11.676 119.768 11.592 120.296 11.592C120.992 11.592 121.736 11.736 122.528 12.024C123.32 12.312 123.992 12.732 124.544 13.284Z" fill="white"/>
                            </svg>
                        </a><!-- Logo -->
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="searchform_div">
                        <form action="{{URL::to('/')}}/search_result" method="POST" class="search-box">
                            {{ csrf_field() }}

                            <svg xmlns="http://www.w3.org/2000/svg" class="search_icon" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" fill="#0883c7" version="1.1" x="0px" y="0px" viewBox="0 0 16 16" xml:space="preserve"><g><path d="M13.85,13.15l-2.69-2.69c0.74-0.9,1.2-2.03,1.2-3.28C12.37,4.33,10.04,2,7.18,2S2,4.33,2,7.18s2.33,5.18,5.18,5.18   c1.25,0,2.38-0.46,3.28-1.2l2.69,2.69c0.1,0.1,0.23,0.15,0.35,0.15s0.26-0.05,0.35-0.15C14.05,13.66,14.05,13.34,13.85,13.15z    M3,7.18C3,4.88,4.88,3,7.18,3s4.18,1.88,4.18,4.18s-1.88,4.18-4.18,4.18S3,9.49,3,7.18z"></path></g></svg>
                            <input type="text" class="text search-input" name="searchData" placeholder="Type here to search...">
                        </form>
                    </div>
                </div>
                <div class="col-lg-3 col-md-12 col-sm-12">
                    <div class="header_right_content_div">
                        <div class="navbar-btn d-lg-inline-block">
                            <a href="{{URL::to('/')}}">Home</a>
                            <a href="{{URL::to('/')}}/login">Login</a>
                            <a href="{{URL::to('/')}}/signup">Sign Up</a>
                        </div><!-- Sign in button -->
                    </div>
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div> <!-- navbar area -->
    <div class="second_nav_div">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <nav class="navbar navbar-expand-sm">
                        <p class="text-right">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>
                        </p>
                        <div class="collapse navbar-collapse sub-menu-bar" id="navbarNavDropdown">
                            <ul class="navbar-nav">
                                <!-- Megamenu-->
                                <li class="nav-item dropdown megamenu">
                                    <a id="megamneu" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle dropdown_arrow">Categories</a>
                                    <div aria-labelledby="megamneu" class="dropdown-menu border-0 p-0 m-0">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-lg-7 col-xl-7">
                                                    <div class="row">
                                                        
                                                                @php use App\WebsiteModel; $categories=WebsiteModel::get_category_list(); $stores=WebsiteModel::get_store_list(); $catcount=0; $storecount=0;  @endphp
                                                               
                                                                @foreach($categories as $cats)
                                                                @if($catcount==0)
                                                                <div class="col-sm-6 col-md-6 col-lg-6">
                                                                 <ul class="list-unstyled dropdown_ul_ul">

                                                                @endif
                                                                  <li class="nav-item"><a href="{{URL::to('/')}}/category/{{$cats->slug}}" class="nav-link text-small pb-0">{{$cats->cat_name}}</a></li>
                                                                  @php $catcount++; @endphp
                                                                  @if($catcount==9)

                                                                  @php $catcount=0; @endphp
                                                                     </ul>
                                                                    </div>

                                                                    @endif

                                                                @endforeach

                                                         
                                                        
                                                    </div>
                                                </div>
                                                <div class="col-lg-5 col-xl-5 px-0 d-none d-lg-block" style="background: center center url({{URL::to('/')}}/assets/images/website_images/loyalty-to-the-discount-0x0.jpg)no-repeat; background-size: cover;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="nav-item dropdown megamenu">
                                    <a id="megamneu" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle dropdown_arrow">Stores</a>
                                    <div aria-labelledby="megamneu" class="dropdown-menu border-0 p-0 m-0">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-lg-12 col-xl-12">
                                                    <div class="row">
                                                            @foreach($stores as $sts)
                                                                @if($storecount==0)
                                                                <div class="col-sm-3 col-md-3 col-lg-3">
                                                                 <ul class="list-unstyled dropdown_ul_ul">

                                                                @endif
                                                                  <li class="nav-item"><a href="{{URL::to('/')}}/stores/{{$sts->slug}}" class="nav-link text-small pb-0">{{$sts->store_name}}</a></li>
                                                                  @php $storecount++; @endphp
                                                                  @if($storecount==9)

                                                                  @php $storecount=0; @endphp
                                                                     </ul>
                                                                    </div>

                                                                    @endif

                                                                @endforeach
                                                   

                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a href="{{URL::to('/')}}/special-events">Events</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{URL::to('/')}}/Blog">Blog</a>
                                </li>
{{--                                <li class="nav-item">--}}
{{--                                    <a href="#">Promo Codes</a>--}}
{{--                                </li>--}}
                            </ul>
                        </div> <!-- navbar collapse -->
                    </nav> <!-- navbar -->
                </div>
            </div>
        </div>
    </div>
    </header>
<!-- Header end -->

<!-- Cookie popup -->
<div class="modal custom hide popup" id="myModal" tabindex="-1" aria-labelledby="cookie" aria-hidden="true" data-keyboard="false" data-backdrop="static;" >
    <div class="align-items-center align-self-center modal-dialog  text-center cookies" >
        <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true"> &times;</span>
                </button>
            <img src="https://i.imgur.com/Tl8ZBUe.png" style="width:37px; margin-top:-4%; margin:auto;">
            <span class="mt-2" style="margin:auto;">We use third party cookies to personalize content, ads and analyze site traffic.</span>
            <a class="d-flex align-items-center" style="margin:auto;" href="{{URL::to('/')}}/cookie-policy"><span style="text-decoration:underline;">Learn more</span><i class="fa fa-angle-right ml-2"></i></a>
            <div class="p-3">
              <button class="btn btn-dark mt-2" data-dismiss="modal" style="font-size:small;" type="button">Accept</button>
              <button class="btn btn-dark mt-2" data-dismiss="modal" style="font-size:small;" type="button">Decline</button>
            </div> 
        </div>
    </div>
</div>







