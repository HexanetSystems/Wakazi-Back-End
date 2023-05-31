@extends('front.master')

@section('content')
 <!-- Start Main Banner Area -->
 <section class="banner-wrapper">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12">
                <div class="banner-wrapper-content">
                    <h1 style="color:#ffffff">
                        Find your best
                        <a style="color:#ffffff" href="#" class="typewrite" data-period="2000" data-type='[ "Handmade Bags", "Crafted Furniture", "Wallpapers", "Handmade Scalpcher", "Arts & Decors", "Clay Pots", "Woven Baskets" ]'>
                            <span class="wrap"></span>
                        </a>
                    {{-- here --}}
                    </h1>
                    <p style="color:#ffffff">Find directories around the country. Add your business to Wakazi Industries Limited and make sure customers always find the right information about your business.</p>

                    <form>
                        <input type="text" class="input-search" placeholder="Search products, brands, categories and Artisans">
                        <button type="button">Search</button>
                    </form>
                </div>
            </div>

            <div class="col-lg-6 col-md-12">
                <div class="banner-listing-category">
                    <ul>
                        <li>
                            <a href="listing-3.html">
                                <i class='bx bx-shopping-bag'></i>
                                Bags
                            </a>
                        </li>

                        <li>
                            <a href="listing-3.html">
                                <i class='bx bx-bed'></i>
                                Furniture
                            </a>
                        </li>

                        <li>
                            <a href="listing-3.html">
                                <i class='bx bx-car'></i>
                                Car Repair
                            </a>
                        </li>

                        <li>
                            <a href="listing-3.html">
                                <i class='bx bx-droplet'></i>
                                Washing
                            </a>
                        </li>

                        <li>
                            <a href="listing-3.html">
                                <i class='bx bx-paint'></i>
                                Painter
                            </a>
                        </li>

                        <li>
                            <a href="listing-3.html">
                                <i class='bx bx-walk'></i>
                                Services
                            </a>
                        </li>

                        <li>
                            <a href="listing-3.html">
                                <i class='bx bx-building-house'></i>
                                Masonry
                            </a>
                        </li>

                        <li>
                            <a href="listing-3.html">
                                <i class='bx bx-buildings'></i>
                                Glass Works
                            </a>
                        </li>

                        <li>
                            <a href="listing-3.html">
                                <i class='bx bx-cog'></i>
                                Others
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Main Banner Area -->

{{--  --}}
   <!-- Start Latest Listing Area -->
   <section class="listing-area pt-100 pb-70">
    <div class="container">
        <div class="section-title">
            <span class="sub-title">Recent Searches</span>
            <h2>The Latest Listing</h2>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4">
                <div class="single-listing-box">
                    <a href="single-listing.html" class="listing-image">
                        <img src="{{url('/')}}/uploads/images/bicycles-cottonbro-studio-10505932.jpg" alt="image">
                    </a>

                    <div class="listing-badge">Open Now</div>

                    <div class="listing-content">
                        <div class="content">
                            <div class="author">
                                {{-- <img src="{{asset('theme/assets/img/user1.jpg')}}" alt="image"> --}}
                                <span>Nick Muthumbi</span>
                            </div>

                            <h3><a href="single-listing.html">Bicycles Repairs</a></h3>
                            <span class="location"><i class='bx bx-map'></i> 3571 Riverside Downs, Gitaru Road</span>

                            <div class="rating">
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <span class="rating-count">30 reviews</span>
                            </div>
                        </div>

                        <div class="footer-content">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="listing-option-list">
                                    <a href="#" data-bs-toggle="tooltip" data-placement="top" title="Find Directions"><i class='bx bx-directions'></i></a>
                                    <a href="#" data-bs-toggle="tooltip" data-placement="top" title="Save"><i class='bx bx-heart'></i></a>
                                    <a href="#" data-bs-toggle="tooltip" data-placement="top" title="On the Map"><i class='bx bx-map'></i></a>
                                </div>



                                <div class="listing-category">
                                    <a href="#" data-bs-toggle="tooltip" data-placement="top" title="Category">
                                        <i class="bx bx-user"></i>
                                        View Profile
                                    </a>
                                    <a href="#" data-bs-toggle="tooltip" data-placement="top" title="Category">
                                        <i class="bx bx-shopping-bag"></i>
                                        Shop Products
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="single-listing-box">
                    <a href="single-listing.html" class="listing-image">
                        <img src="{{url('/')}}/uploads/images/furniture.jpg" alt="image">
                    </a>

                    <div class="listing-badge">Open Now</div>

                    <div class="listing-content">
                        <div class="content">
                            <div class="author">
                                {{-- <img src="{{asset('theme/assets/img/user2.jpg')}}" alt="image"> --}}
                                <span>Sarah Chebet</span>
                            </div>

                            <h3><a href="single-listing.html">Elegant Furnitures</a></h3>
                            <span class="location"><i class='bx bx-map'></i> 2178 Ruaka Lowers, Ruaka</span>

                            <div class="rating">
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <span class="rating-count">2 reviews</span>
                            </div>
                        </div>

                        <div class="footer-content">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="listing-option-list">
                                    <a href="#" data-bs-toggle="tooltip" data-placement="top" title="Find Directions"><i class='bx bx-directions'></i></a>
                                    <a href="#" data-bs-toggle="tooltip" data-placement="top" title="Save"><i class='bx bx-heart'></i></a>
                                    <a href="#" data-bs-toggle="tooltip" data-placement="top" title="On the Map"><i class='bx bx-map'></i></a>
                                </div>



                                <div class="listing-category">
                                    <a href="#" data-bs-toggle="tooltip" data-placement="top" title="Category">
                                        <i class="bx bx-user"></i>
                                        View Profile
                                    </a>
                                    <a href="#" data-bs-toggle="tooltip" data-placement="top" title="Category">
                                        <i class="bx bx-shopping-bag"></i>
                                        Shop Products
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="single-listing-box">
                    <a href="single-listing.html" class="listing-image">
                        <img src="{{url('/')}}/uploads/images/shoe.jpg" alt="image">
                    </a>

                    <div class="listing-badge closed">Closed Now</div>

                    <div class="listing-content">
                        <div class="content">
                            <div class="author">
                                {{-- <img src="{{asset('theme/assets/img/user3.jpg')}}" alt="image"> --}}
                                <span>James Andy</span>
                            </div>

                            <h3><a href="single-listing.html">Shoe Makers</a></h3>
                            <span class="location"><i class='bx bx-map'></i> 6825 Kabete Heights, Lower Kabete</span>

                            <div class="rating">
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <span class="rating-count">12 reviews</span>
                            </div>
                        </div>

                        <div class="footer-content">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="listing-option-list">
                                    <a href="#" data-bs-toggle="tooltip" data-placement="top" title="Find Directions"><i class='bx bx-directions'></i></a>
                                    <a href="#" data-bs-toggle="tooltip" data-placement="top" title="Save"><i class='bx bx-heart'></i></a>
                                    <a href="#" data-bs-toggle="tooltip" data-placement="top" title="On the Map"><i class='bx bx-map'></i></a>
                                </div>



                                <div class="listing-category">
                                    <a href="#" data-bs-toggle="tooltip" data-placement="top" title="Category">
                                        <i class="bx bx-user"></i>
                                        View Profile
                                    </a>
                                    <a href="#" data-bs-toggle="tooltip" data-placement="top" title="Category">
                                        <i class="bx bx-shopping-bag"></i>
                                        Shop Products
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="single-listing-box">
                    <a href="single-listing.html" class="listing-image">
                        <img src="{{url('/')}}/uploads/images/car-mechanicpexels-andrea-piacquadio-3806249.jpg" alt="image">
                    </a>

                    <div class="listing-badge">Open Now</div>

                    <div class="listing-content">
                        <div class="content">
                            <div class="author">
                                {{-- <img src="{{asset('theme/assets/img/user4.jpg')}}" alt="image"> --}}
                                <span>David Magari</span>
                            </div>

                            <h3><a href="single-listing.html">The Lounge & Bar</a></h3>
                            <span class="location"><i class='bx bx-map'></i> 2367 Pale Grogon, Nairobi, Kenya</span>

                            <div class="rating">
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <span class="rating-count">2 reviews</span>
                            </div>
                        </div>

                        <div class="footer-content">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="listing-option-list">
                                    <a href="#" data-bs-toggle="tooltip" data-placement="top" title="Find Directions"><i class='bx bx-directions'></i></a>
                                    <a href="#" data-bs-toggle="tooltip" data-placement="top" title="Save"><i class='bx bx-heart'></i></a>
                                    <a href="#" data-bs-toggle="tooltip" data-placement="top" title="On the Map"><i class='bx bx-map'></i></a>
                                </div>



                                <div class="listing-category">
                                    <a href="#" data-bs-toggle="tooltip" data-placement="top" title="Category">
                                        <i class="bx bx-user"></i>
                                        View Profile
                                    </a>
                                    <a href="#" data-bs-toggle="tooltip" data-placement="top" title="Category">
                                        <i class="bx bx-shopping-bag"></i>
                                        Shop Products
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="single-listing-box">
                    <a href="single-listing.html" class="listing-image">
                        <img src="{{url('/')}}/uploads/images/plumber-anıl-karakaya-6419128.jpg" alt="image">
                    </a>

                    <div class="listing-badge">Open Now</div>

                    <div class="listing-content">
                        <div class="content">
                            <div class="author">
                                {{-- <img src="{{asset('theme/assets/img/user1.jpg')}}" alt="image"> --}}
                                <span>John Smith</span>
                            </div>

                            <h3><a href="single-listing.html">Reliable Plumbing Service</a></h3>
                            <span class="location"><i class='bx bx-map'></i> 40 Kenyatta Ave, Kimathi Street</span>

                            <div class="rating">
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <span class="rating-count">24 reviews</span>
                            </div>
                        </div>

                        <div class="footer-content">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="listing-option-list">
                                    <a href="#" data-bs-toggle="tooltip" data-placement="top" title="Find Directions"><i class='bx bx-directions'></i></a>
                                    <a href="#" data-bs-toggle="tooltip" data-placement="top" title="Save"><i class='bx bx-heart'></i></a>
                                    <a href="#" data-bs-toggle="tooltip" data-placement="top" title="On the Map"><i class='bx bx-map'></i></a>
                                </div>



                                <div class="listing-category">
                                    <a href="#" data-bs-toggle="tooltip" data-placement="top" title="Category">
                                        <i class="bx bx-user"></i>
                                        View Profile
                                    </a>
                                    <a href="#" data-bs-toggle="tooltip" data-placement="top" title="Category">
                                        <i class="bx bx-shopping-bag"></i>
                                        Shop Products
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="single-listing-box">
                    <a href="single-listing.html" class="listing-image">
                        <img src="{{url('/')}}/uploads/images/electrician-emmanuel-ikwuegbu-8005397.jpg" alt="image">
                    </a>

                    <div class="listing-badge">Open Now</div>

                    <div class="listing-content">
                        <div class="content">
                            <div class="author">
                                {{-- <img src="{{asset('theme/assets/img/user2.jpg')}}" alt="image"> --}}
                                <span>Gilbert Kinyamozi</span>
                            </div>

                            <h3><a href="single-listing.html">Electrical Installation Service</a></h3>
                            <span class="location"><i class='bx bx-map'></i> 55 Riverside , Westlands</span>

                            <div class="rating">
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <span class="rating-count">2 reviews</span>
                            </div>
                        </div>

                        <div class="footer-content">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="listing-option-list">
                                    <a href="#" data-bs-toggle="tooltip" data-placement="top" title="Find Directions"><i class='bx bx-directions'></i></a>
                                    <a href="#" data-bs-toggle="tooltip" data-placement="top" title="Save"><i class='bx bx-heart'></i></a>
                                    <a href="#" data-bs-toggle="tooltip" data-placement="top" title="On the Map"><i class='bx bx-map'></i></a>
                                </div>



                                <div class="listing-category">
                                    <a href="#" data-bs-toggle="tooltip" data-placement="top" title="Category">
                                        <i class="bx bx-user"></i>
                                        View Profile
                                    </a>
                                    <a href="#" data-bs-toggle="tooltip" data-placement="top" title="Category">
                                        <i class="bx bx-shopping-bag"></i>
                                        Shop Products
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Latest Listing Area -->
{{--  --}}

<!-- Start Listing Categories Area -->
{{-- @include('front.browse-category') --}}
<!-- End Listing Categories Area -->



<!-- Start Process Area -->
<section class="process-area ptb-100">
    <div class="container">
        <div class="section-title">
            <span class="sub-title">Process</span>
            <h2>See How It Works</h2>
        </div>

        <div class="row">
            <div class="col-lg-4 col-sm-6 col-md-6">
                <div class="single-process-box">
                    <div class="icon">
                        <i class="flaticon-tap"></i>
                    </div>
                    <div class="content">
                        <h3>Choose A Category</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                        <div class="number">1</div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6 col-md-6">
                <div class="single-process-box">
                    <div class="icon">
                        <i class="flaticon-find"></i>
                    </div>
                    <div class="content">
                        <h3>Find What You Want</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                        <div class="number">2</div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6 col-md-6 offset-lg-0 offset-md-3 offset-sm-3">
                <div class="single-process-box">
                    <div class="icon">
                        <i class="flaticon-explore"></i>
                    </div>
                    <div class="content">
                        <h3>Go Out & Explore</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                        <div class="number">3</div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 col-sm-12 col-md-12">
                <div class="process-arrow-icon">
                    <img src="{{asset('theme/assets/img/arrow.png')}}" alt="image">
                </div>
            </div>
        </div>
    </div>

    <div class="lines">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
    </div>
</section>
<!-- End Process Area -->

<!-- Start Feedback Area -->
<section class="feedback-area ptb-100">
    <div class="container">
        <div class="feedback-slides owl-carousel owl-theme">
            <div class="single-feedback-item">
                <p>“Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.”</p>

                <div class="info">
                    <h3>James Anderson</h3>
                    <span>Nanyuki</span>
                    <img src="{{asset('theme/assets/img/3215488.png')}}" class="shadow rounded-circle" alt="image">
                </div>
            </div>

            <div class="single-feedback-item">
                <p>“Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.”</p>

                <div class="info">
                    <h3>Lina D'Souza</h3>
                    <span>Magnoria</span>
                    <img src="{{asset('theme/assets/img/3215488.png')}}" class="shadow rounded-circle" alt="image">
                </div>
            </div>

            <div class="single-feedback-item">
                <p>“Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.”</p>

                <div class="info">
                    <h3>David Warner</h3>
                    <span>Muthaiga</span>
                    <img src="{{asset('theme/assets/img/3215488.png')}}" class="shadow rounded-circle" alt="image">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Feedback Area -->

<!-- Start Partner Area -->
<div class="partner-area ptb-100">
    <div class="container">
        <div class="section-title">
            <h2>Our Partners</h2>
        </div>

        <div class="partner-slides owl-carousel owl-theme">
            <div class="partner-item">
                <a href="#"><img src="{{asset('theme/assets/img/partner/img1.png')}}" alt="image"></a>
            </div>

            <div class="partner-item">
                <a href="#"><img src="{{asset('theme/assets/img/partner/img2.png')}}" alt="image"></a>
            </div>

            <div class="partner-item">
                <a href="#"><img src="{{asset('theme/assets/img/partner/img3.png')}}" alt="image"></a>
            </div>

            <div class="partner-item">
                <a href="#"><img src="{{asset('theme/assets/img/partner/img4.png')}}" alt="image"></a>
            </div>

            <div class="partner-item">
                <a href="#"><img src="{{asset('theme/assets/img/partner/img5.png')}}" alt="image"></a>
            </div>

            <div class="partner-item">
                <a href="#"><img src="{{asset('theme/assets/img/partner/img6.png')}}" alt="image"></a>
            </div>
        </div>
    </div>
</div>
<!-- End Partner Area -->

<!-- Start Blog Area -->
<section class="blog-area pt-100 pb-70">
    <div class="container">
        <div class="section-title text-start">
            <span class="sub-title">Recent Story</span>
            <h2>From The Wakazi Industries Limited Blog</h2>
            <a href="#" class="section-title-btn">See All <i class='bx bx-chevrons-right'></i></a>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="single-blog-post">
                    <div class="post-image">
                        <a href="single-blog-1.html">
                            <img src="{{asset('theme/assets/img/blog/img1.jpg')}}" alt="image">
                        </a>
                        <div class="date">
                            <span>January 29, 2023</span>
                        </div>
                    </div>

                    <div class="post-content">
                        <span class="category">Ideas</span>
                        <h3><a href="single-blog-1.html">Top 50 places to eat in Mirembe</a></h3>
                        <a href="single-blog-1.html" class="details-btn">Read Story</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="single-blog-post">
                    <div class="post-image">
                        <a href="single-blog-1.html">
                            <img src="{{asset('theme/assets/img/blog/img2.jpg')}}" alt="image">
                        </a>
                        <div class="date">
                            <span>January 24, 2023</span>
                        </div>
                    </div>

                    <div class="post-content">
                        <span class="category">Advice</span>
                        <h3><a href="single-blog-1.html">28 places to visit in the Nakuru</a></h3>
                        <a href="single-blog-1.html" class="details-btn">Read Story</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
                <div class="single-blog-post">
                    <div class="post-image">
                        <a href="single-blog-1.html">
                            <img src="{{asset('theme/assets/img/blog/img3.jpg')}}" alt="image">
                        </a>
                        <div class="date">
                            <span>January 29, 2021</span>
                        </div>
                    </div>

                    <div class="post-content">
                        <span class="category">Social</span>
                        <h3><a href="single-blog-1.html">08 things to remember in Morning</a></h3>
                        <a href="single-blog-1.html" class="details-btn">Read Story</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Blog Area -->
@endsection
