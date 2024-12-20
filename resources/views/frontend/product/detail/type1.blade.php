@extends('frontend.layout.app')

@section('title')

{{ $product->name }} 

@endsection

@section('content')

<main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="{{ asset('index.html') }}" rel="nofollow"><i class="fi-rs-home mr-5"></i>Home</a>
                    <span></span> <a href="{{ asset('shop-grid-right.html') }}">Vegetables & tubers</a> <span></span> Seeds of Change Organic
                </div>
            </div>
        </div>
        <div class="container mb-30">
            <div class="row">
                <div class="col-xl-11 col-lg-12 m-auto">
                    <div class="row">
                        <div class="col-xl-9">
                            <div class="product-detail accordion-detail">
                                <div class="row mb-50 mt-30">
                                    <div class="col-md-6 col-sm-12 col-xs-12 mb-md-0 mb-sm-5">
                                        <div class="detail-gallery">
                                            <span class="zoom-icon"><i class="fi-rs-search"></i></span>
                                            <!-- MAIN SLIDES -->
                                            <div class="product-image-slider">
                                                <figure class="border-radius-10">
                                                    <img src="{{ asset('frontend/imgs/shop/product-16-2.jpg') }}" alt="product image" />
                                                </figure>
                                                <figure class="border-radius-10">
                                                    <img src="{{ asset('frontend/imgs/shop/product-16-1.jpg') }}" alt="product image" />
                                                </figure>
                                                <figure class="border-radius-10">
                                                    <img src="{{ asset('frontend/imgs/shop/product-16-3.jpg') }}" alt="product image" />
                                                </figure>
                                                <figure class="border-radius-10">
                                                    <img src="{{ asset('frontend/imgs/shop/product-16-4.jpg') }}" alt="product image" />
                                                </figure>
                                                <figure class="border-radius-10">
                                                    <img src="{{ asset('frontend/imgs/shop/product-16-5.jpg') }}" alt="product image" />
                                                </figure>
                                                <figure class="border-radius-10">
                                                    <img src="{{ asset('frontend/imgs/shop/product-16-6.jpg') }}" alt="product image" />
                                                </figure>
                                                <figure class="border-radius-10">
                                                    <img src="{{ asset('frontend/imgs/shop/product-16-7.jpg') }}" alt="product image" />
                                                </figure>
                                            </div>
                                            <!-- THUMBNAILS -->
                                            <div class="slider-nav-thumbnails">
                                                <div><img src="{{ asset('frontend/imgs/shop/thumbnail-3.jpg') }}" alt="product image" /></div>
                                                <div><img src="{{ asset('frontend/imgs/shop/thumbnail-4.jpg') }}" alt="product image" /></div>
                                                <div><img src="{{ asset('frontend/imgs/shop/thumbnail-5.jpg') }}" alt="product image" /></div>
                                                <div><img src="{{ asset('frontend/imgs/shop/thumbnail-6.jpg') }}" alt="product image" /></div>
                                                <div><img src="{{ asset('frontend/imgs/shop/thumbnail-7.jpg') }}" alt="product image" /></div>
                                                <div><img src="{{ asset('frontend/imgs/shop/thumbnail-8.jpg') }}" alt="product image" /></div>
                                                <div><img src="{{ asset('frontend/imgs/shop/thumbnail-9.jpg') }}" alt="product image" /></div>
                                            </div>
                                        </div>
                                        <!-- End Gallery -->
                                    </div>
                                    <div class="col-md-6 col-sm-12 col-xs-12">
                                        <div class="detail-info pr-30 pl-30">
                                            <span class="stock-status out-stock"> Sale Off </span>
                                            <h2 class="title-detail">{{ $product->name }}</h2>
                                            <div class="product-detail-rating">
                                                <div class="product-rate-cover text-end">
                                                    <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width: 90%"></div>
                                                    </div>
                                                    <span class="font-small ml-5 text-muted"> (32 reviews)</span>
                                                </div>
                                            </div>
                                            <div class="clearfix product-price-cover">
                                                <div class="product-price primary-color float-left">
                                                    <span class="current-price text-brand">{{ $product->price}}</span>
                                                    <span>
                                                        <span class="save-price font-md color3 ml-15">26% Off</span>
                                                        <span class="old-price font-md ml-15">$52</span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="short-desc mb-30">
                                                <p class="font-lg"> {{ $product->description }}</p>
                                            </div>
                                            <div class="attr-detail attr-size mb-30">
                                                <strong class="mr-10">Size / Weight: </strong>
                                                <ul class="list-filter size-filter font-small">
                                                    <li><a href="{{ asset('#') }}">50g</a></li>
                                                    <li class="active"><a href="{{ asset('#') }}">60g</a></li>
                                                    <li><a href="{{ asset('#') }}">80g</a></li>
                                                    <li><a href="{{ asset('#') }}">100g</a></li>
                                                    <li><a href="{{ asset('#') }}">150g</a></li>
                                                </ul>
                                            </div>
                                            <div class="detail-extralink mb-50">
                                                <div class="detail-qty border radius">
                                                    <a href="{{ asset('#') }}" class="qty-down"><i class="fi-rs-angle-small-down"></i></a>
                                                    <input type="text" name="quantity" class="qty-val" value="1" min="1">
                                                    <a href="{{ asset('#') }}" class="qty-up"><i class="fi-rs-angle-small-up"></i></a>
                                                </div>
                                                <div class="product-extra-link2">
                                                    <!-- Add to Cart Form -->
                                                    <form action="{{ route('cart.add_to_cart') }}" method="POST">
                                                        @csrf
                                                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                                                        <button type="submit" class="btn-sm button button-add-to-cart"><i class="fi-rs-shopping-cart"></i>Add to cart</button>
                                                    </form>
                                                    <a aria-label="Add To Wishlist" class="action-btn hover-up" href="{{ asset('shop-wishlist.html') }}"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn hover-up" href="{{ asset('shop-compare.html') }}"><i class="fi-rs-shuffle"></i></a>
                                                </div>
                                            </div>
                                            <div class="font-xs">
                                                <ul class="float-start">

                                                    <li class="mb-5">Tags: 

                                                        @foreach($product->productTag()->pluck('name') as $tag)
                                                        <a href="{{ asset('#') }}" rel="tag"> {{ $tag }}</a>, 
                                                        @endforeach

                                                    </li>
                                                    <li>Stock:<span class="in-stock text-brand ml-5">{{ $product->qty }} Items In Stock</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- Detail Info -->
                                    </div>
                                </div>
                                <div class="product-info">
                                    <div class="tab-style3">
                                        <ul class="nav nav-tabs text-uppercase">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="Description-tab" data-bs-toggle="tab" href="{{ asset('#Description') }}">Description</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="Additional-info-tab" data-bs-toggle="tab" href="{{ asset('#Additional-info') }}">Additional info</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="Vendor-info-tab" data-bs-toggle="tab" href="{{ asset('#Vendor-info') }}">Vendor</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="Reviews-tab" data-bs-toggle="tab" href="{{ asset('#Reviews') }}">Reviews (3)</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content shop_info_tab entry-main-content">
                                            <div class="tab-pane fade show active" id="Description">
                                                <div class="">
                                                    {!! $product->description !!}
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="Additional-info">
                                                <table class="font-md">
                                                    <tbody>
                                                        <tr class="stand-up">
                                                            <th>Stand Up</th>
                                                            <td>
                                                                <p>35″L x 24″W x 37-45″H(front to back wheel)</p>
                                                            </td>
                                                        </tr>
                                                        <tr class="folded-wo-wheels">
                                                            <th>Folded (w/o wheels)</th>
                                                            <td>
                                                                <p>32.5″L x 18.5″W x 16.5″H</p>
                                                            </td>
                                                        </tr>
                                                        <tr class="folded-w-wheels">
                                                            <th>Folded (w/ wheels)</th>
                                                            <td>
                                                                <p>32.5″L x 24″W x 18.5″H</p>
                                                            </td>
                                                        </tr>
                                                        <tr class="door-pass-through">
                                                            <th>Door Pass Through</th>
                                                            <td>
                                                                <p>24</p>
                                                            </td>
                                                        </tr>
                                                        <tr class="frame">
                                                            <th>Frame</th>
                                                            <td>
                                                                <p>Aluminum</p>
                                                            </td>
                                                        </tr>
                                                        <tr class="weight-wo-wheels">
                                                            <th>Weight (w/o wheels)</th>
                                                            <td>
                                                                <p>20 LBS</p>
                                                            </td>
                                                        </tr>
                                                        <tr class="weight-capacity">
                                                            <th>Weight Capacity</th>
                                                            <td>
                                                                <p>60 LBS</p>
                                                            </td>
                                                        </tr>
                                                        <tr class="width">
                                                            <th>Width</th>
                                                            <td>
                                                                <p>24″</p>
                                                            </td>
                                                        </tr>
                                                        <tr class="handle-height-ground-to-handle">
                                                            <th>Handle height (ground to handle)</th>
                                                            <td>
                                                                <p>37-45″</p>
                                                            </td>
                                                        </tr>
                                                        <tr class="wheels">
                                                            <th>Wheels</th>
                                                            <td>
                                                                <p>12″ air / wide track slick tread</p>
                                                            </td>
                                                        </tr>
                                                        <tr class="seat-back-height">
                                                            <th>Seat back height</th>
                                                            <td>
                                                                <p>21.5″</p>
                                                            </td>
                                                        </tr>
                                                        <tr class="head-room-inside-canopy">
                                                            <th>Head room (inside canopy)</th>
                                                            <td>
                                                                <p>25″</p>
                                                            </td>
                                                        </tr>
                                                        <tr class="pa_color">
                                                            <th>Color</th>
                                                            <td>
                                                                <p>Black, Blue, Red, White</p>
                                                            </td>
                                                        </tr>
                                                        <tr class="pa_size">
                                                            <th>Size</th>
                                                            <td>
                                                                <p>M, S</p>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="tab-pane fade" id="Vendor-info">
                                                <div class="vendor-logo d-flex mb-30">
                                                    <img src="{{ asset('frontend/imgs/vendor/vendor-18.svg') }}" alt="" />
                                                    <div class="vendor-name ml-15">
                                                        <h6>
                                                            <a href="{{ asset('vendor-details-2.html') }}">{{ $product->productCompany()->pluck('name')->implode(',') }}.</a>
                                                        </h6>
                                                        <div class="product-rate-cover text-end">
                                                            <div class="product-rate d-inline-block">
                                                                <div class="product-rating" style="width: 90%"></div>
                                                            </div>
                                                            <span class="font-small ml-5 text-muted"> (32 reviews)</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <ul class="contact-infor mb-50">
                                                    <li><img src="{{ asset('frontend/imgs/theme/icons/icon-location.svg') }}" alt="" /><strong>Address: </strong> <span>5171 W Campbell Ave undefined Kent, Utah 53127 United States</span></li>
                                                    <li><img src="{{ asset('frontend/imgs/theme/icons/icon-contact.svg') }}" alt="" /><strong>Contact Seller:</strong><span>(+91) - 540-025-553</span></li>
                                                </ul>
                                                <div class="d-flex mb-55">
                                                    <div class="mr-30">
                                                        <p class="text-brand font-xs">Rating</p>
                                                        <h4 class="mb-0">92%</h4>
                                                    </div>
                                                    <div class="mr-30">
                                                        <p class="text-brand font-xs">Ship on time</p>
                                                        <h4 class="mb-0">100%</h4>
                                                    </div>
                                                    <div>
                                                        <p class="text-brand font-xs">Chat response</p>
                                                        <h4 class="mb-0">89%</h4>
                                                    </div>
                                                </div>
                                                <p>
                                                    Noodles & Company is an American fast-casual restaurant that offers international and American noodle dishes and pasta in addition to soups and salads. Noodles & Company was founded in 1995 by Aaron Kennedy and is headquartered in Broomfield, Colorado. The company went public in 2013 and recorded a $457 million revenue in 2017.In late 2018, there were 460 Noodles & Company locations across 29 states and Washington, D.C.
                                                </p>
                                            </div>
                                            <div class="tab-pane fade" id="Reviews">
                                                <!--Comments-->
                                                <div class="comments-area">
                                                    <div class="row">
                                                        <div class="col-lg-8">
                                                            <h4 class="mb-30">Customer questions & answers</h4>
                                                            <div class="comment-list">
                                                                <div class="single-comment justify-content-between d-flex mb-30">
                                                                    <div class="user justify-content-between d-flex">
                                                                        <div class="thumb text-center">
                                                                            <img src="{{ asset('frontend/imgs/blog/author-2.png') }}" alt="" />
                                                                            <a href="{{ asset('#') }}" class="font-heading text-brand">Sienna</a>
                                                                        </div>
                                                                        <div class="desc">
                                                                            <div class="d-flex justify-content-between mb-10">
                                                                                <div class="d-flex align-items-center">
                                                                                    <span class="font-xs text-muted">December 4, 2022 at 3:12 pm </span>
                                                                                </div>
                                                                                <div class="product-rate d-inline-block">
                                                                                    <div class="product-rating" style="width: 100%"></div>
                                                                                </div>
                                                                            </div>
                                                                            <p class="mb-10">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus, suscipit exercitationem accusantium obcaecati quos voluptate nesciunt facilis itaque modi commodi dignissimos sequi repudiandae minus ab deleniti totam officia id incidunt? <a href="{{ asset('#') }}" class="reply">Reply</a></p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="single-comment justify-content-between d-flex mb-30 ml-30">
                                                                    <div class="user justify-content-between d-flex">
                                                                        <div class="thumb text-center">
                                                                            <img src="{{ asset('frontend/imgs/blog/author-3.png') }}" alt="" />
                                                                            <a href="{{ asset('#') }}" class="font-heading text-brand">Brenna</a>
                                                                        </div>
                                                                        <div class="desc">
                                                                            <div class="d-flex justify-content-between mb-10">
                                                                                <div class="d-flex align-items-center">
                                                                                    <span class="font-xs text-muted">December 4, 2022 at 3:12 pm </span>
                                                                                </div>
                                                                                <div class="product-rate d-inline-block">
                                                                                    <div class="product-rating" style="width: 80%"></div>
                                                                                </div>
                                                                            </div>
                                                                            <p class="mb-10">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus, suscipit exercitationem accusantium obcaecati quos voluptate nesciunt facilis itaque modi commodi dignissimos sequi repudiandae minus ab deleniti totam officia id incidunt? <a href="{{ asset('#') }}" class="reply">Reply</a></p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="single-comment justify-content-between d-flex">
                                                                    <div class="user justify-content-between d-flex">
                                                                        <div class="thumb text-center">
                                                                            <img src="{{ asset('frontend/imgs/blog/author-4.png') }}" alt="" />
                                                                            <a href="{{ asset('#') }}" class="font-heading text-brand">Gemma</a>
                                                                        </div>
                                                                        <div class="desc">
                                                                            <div class="d-flex justify-content-between mb-10">
                                                                                <div class="d-flex align-items-center">
                                                                                    <span class="font-xs text-muted">December 4, 2022 at 3:12 pm </span>
                                                                                </div>
                                                                                <div class="product-rate d-inline-block">
                                                                                    <div class="product-rating" style="width: 80%"></div>
                                                                                </div>
                                                                            </div>
                                                                            <p class="mb-10">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus, suscipit exercitationem accusantium obcaecati quos voluptate nesciunt facilis itaque modi commodi dignissimos sequi repudiandae minus ab deleniti totam officia id incidunt? <a href="{{ asset('#') }}" class="reply">Reply</a></p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <h4 class="mb-30">Customer reviews</h4>
                                                            <div class="d-flex mb-30">
                                                                <div class="product-rate d-inline-block mr-15">
                                                                    <div class="product-rating" style="width: 90%"></div>
                                                                </div>
                                                                <h6>4.8 out of 5</h6>
                                                            </div>
                                                            <div class="progress">
                                                                <span>5 star</span>
                                                                <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
                                                            </div>
                                                            <div class="progress">
                                                                <span>4 star</span>
                                                                <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                                                            </div>
                                                            <div class="progress">
                                                                <span>3 star</span>
                                                                <div class="progress-bar" role="progressbar" style="width: 45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100">45%</div>
                                                            </div>
                                                            <div class="progress">
                                                                <span>2 star</span>
                                                                <div class="progress-bar" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">65%</div>
                                                            </div>
                                                            <div class="progress mb-30">
                                                                <span>1 star</span>
                                                                <div class="progress-bar" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">85%</div>
                                                            </div>
                                                            <a href="{{ asset('#') }}" class="font-xs text-muted">How are ratings calculated?</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--comment form-->
                                                <div class="comment-form">
                                                    <h4 class="mb-15">Add a review</h4>
                                                    <div class="product-rate d-inline-block mb-30"></div>
                                                    <div class="row">
                                                        <div class="col-lg-8 col-md-12">
                                                            <form class="form-contact comment_form" action="#" id="commentForm">
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <div class="form-group">
                                                                            <textarea class="form-control w-100" name="comment" id="comment" cols="30" rows="9" placeholder="Write Comment"></textarea>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <div class="form-group">
                                                                            <input class="form-control" name="name" id="name" type="text" placeholder="Name" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <div class="form-group">
                                                                            <input class="form-control" name="email" id="email" type="email" placeholder="Email" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <div class="form-group">
                                                                            <input class="form-control" name="website" id="website" type="text" placeholder="Website" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <button type="submit" class="button button-contactForm">Submit Review</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-60">
                                    <div class="col-12">
                                        <h2 class="section-title style-1 mb-30">Related products</h2>
                                    </div>
                                    <div class="col-12">
                                        <div class="row related-products">
                                            <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                                                <div class="product-cart-wrap hover-up">
                                                    <div class="product-img-action-wrap">
                                                        <div class="product-img product-img-zoom">
                                                            <a href="{{ asset('shop-product-right.html') }}" tabindex="0">
                                                                <img class="default-img" src="{{ asset('frontend/imgs/shop/product-2-1.jpg') }}" alt="" />
                                                                <img class="hover-img" src="{{ asset('frontend/imgs/shop/product-2-2.jpg') }}" alt="" />
                                                            </a>
                                                        </div>
                                                        <div class="product-action-1">
                                                            <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-search"></i></a>
                                                            <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="{{ asset('shop-wishlist.html') }}" tabindex="0"><i class="fi-rs-heart"></i></a>
                                                            <a aria-label="Compare" class="action-btn small hover-up" href="{{ asset('shop-compare.html') }}" tabindex="0"><i class="fi-rs-shuffle"></i></a>
                                                        </div>
                                                        <div class="product-badges product-badges-position product-badges-mrg">
                                                            <span class="hot">Hot</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-content-wrap">
                                                        <h2><a href="{{ asset('shop-product-right.html') }}" tabindex="0">Ulstra Bass Headphone</a></h2>
                                                        <div class="rating-result" title="90%">
                                                            <span> </span>
                                                        </div>
                                                        <div class="product-price">
                                                            <span>$238.85 </span>
                                                            <span class="old-price">$245.8</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                                                <div class="product-cart-wrap hover-up">
                                                    <div class="product-img-action-wrap">
                                                        <div class="product-img product-img-zoom">
                                                            <a href="{{ asset('shop-product-right.html') }}" tabindex="0">
                                                                <img class="default-img" src="{{ asset('frontend/imgs/shop/product-3-1.jpg') }}" alt="" />
                                                                <img class="hover-img" src="{{ asset('frontend/imgs/shop/product-4-2.jpg') }}" alt="" />
                                                            </a>
                                                        </div>
                                                        <div class="product-action-1">
                                                            <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-search"></i></a>
                                                            <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="{{ asset('shop-wishlist.html') }}" tabindex="0"><i class="fi-rs-heart"></i></a>
                                                            <a aria-label="Compare" class="action-btn small hover-up" href="{{ asset('shop-compare.html') }}" tabindex="0"><i class="fi-rs-shuffle"></i></a>
                                                        </div>
                                                        <div class="product-badges product-badges-position product-badges-mrg">
                                                            <span class="sale">-12%</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-content-wrap">
                                                        <h2><a href="{{ asset('shop-product-right.html') }}" tabindex="0">Smart Bluetooth Speaker</a></h2>
                                                        <div class="rating-result" title="90%">
                                                            <span> </span>
                                                        </div>
                                                        <div class="product-price">
                                                            <span>$138.85 </span>
                                                            <span class="old-price">$145.8</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                                                <div class="product-cart-wrap hover-up">
                                                    <div class="product-img-action-wrap">
                                                        <div class="product-img product-img-zoom">
                                                            <a href="{{ asset('shop-product-right.html') }}" tabindex="0">
                                                                <img class="default-img" src="{{ asset('frontend/imgs/shop/product-4-1.jpg') }}" alt="" />
                                                                <img class="hover-img" src="{{ asset('frontend/imgs/shop/product-4-2.jpg') }}" alt="" />
                                                            </a>
                                                        </div>
                                                        <div class="product-action-1">
                                                            <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-search"></i></a>
                                                            <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="{{ asset('shop-wishlist.html') }}" tabindex="0"><i class="fi-rs-heart"></i></a>
                                                            <a aria-label="Compare" class="action-btn small hover-up" href="{{ asset('shop-compare.html') }}" tabindex="0"><i class="fi-rs-shuffle"></i></a>
                                                        </div>
                                                        <div class="product-badges product-badges-position product-badges-mrg">
                                                            <span class="new">New</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-content-wrap">
                                                        <h2><a href="{{ asset('shop-product-right.html') }}" tabindex="0">HomeSpeak 12UEA Goole</a></h2>
                                                        <div class="rating-result" title="90%">
                                                            <span> </span>
                                                        </div>
                                                        <div class="product-price">
                                                            <span>$738.85 </span>
                                                            <span class="old-price">$1245.8</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-4 col-12 col-sm-6 d-lg-block d-none">
                                                <div class="product-cart-wrap hover-up mb-0">
                                                    <div class="product-img-action-wrap">
                                                        <div class="product-img product-img-zoom">
                                                            <a href="{{ asset('shop-product-right.html') }}" tabindex="0">
                                                                <img class="default-img" src="{{ asset('frontend/imgs/shop/product-5-1.jpg') }}" alt="" />
                                                                <img class="hover-img" src="{{ asset('frontend/imgs/shop/product-3-2.jpg') }}" alt="" />
                                                            </a>
                                                        </div>
                                                        <div class="product-action-1">
                                                            <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-search"></i></a>
                                                            <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="{{ asset('shop-wishlist.html') }}" tabindex="0"><i class="fi-rs-heart"></i></a>
                                                            <a aria-label="Compare" class="action-btn small hover-up" href="{{ asset('shop-compare.html') }}" tabindex="0"><i class="fi-rs-shuffle"></i></a>
                                                        </div>
                                                        <div class="product-badges product-badges-position product-badges-mrg">
                                                            <span class="hot">Hot</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-content-wrap">
                                                        <h2><a href="{{ asset('shop-product-right.html') }}" tabindex="0">Dadua Camera 4K 2022EF</a></h2>
                                                        <div class="rating-result" title="90%">
                                                            <span> </span>
                                                        </div>
                                                        <div class="product-price">
                                                            <span>$89.8 </span>
                                                            <span class="old-price">$98.8</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 primary-sidebar sticky-sidebar mt-30">
                            <!-- Product sidebar Widget -->
                            <div class="sidebar-widget product-sidebar mb-30 p-30 bg-grey border-radius-10">
                                <h5 class="section-title style-1 mb-30">New products</h5>
                                <div class="single-post clearfix">
                                    <div class="image">
                                        <img src="{{ asset('frontend/imgs/shop/thumbnail-3.jpg') }}" alt="#" />
                                    </div>
                                    <div class="content pt-10">
                                        <h5><a href="{{ asset('shop-product-detail.html') }}">Chen Cardigan</a></h5>
                                        <p class="price mb-0 mt-5">$99.50</p>
                                        <div class="product-rate">
                                            <div class="product-rating" style="width: 90%"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-post clearfix">
                                    <div class="image">
                                        <img src="{{ asset('frontend/imgs/shop/thumbnail-4.jpg') }}" alt="#" />
                                    </div>
                                    <div class="content pt-10">
                                        <h6><a href="{{ asset('shop-product-detail.html') }}">Chen Sweater</a></h6>
                                        <p class="price mb-0 mt-5">$89.50</p>
                                        <div class="product-rate">
                                            <div class="product-rating" style="width: 80%"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-post clearfix">
                                    <div class="image">
                                        <img src="{{ asset('frontend/imgs/shop/thumbnail-5.jpg') }}" alt="#" />
                                    </div>
                                    <div class="content pt-10">
                                        <h6><a href="{{ asset('shop-product-detail.html') }}">Colorful Jacket</a></h6>
                                        <p class="price mb-0 mt-5">$25</p>
                                        <div class="product-rate">
                                            <div class="product-rating" style="width: 60%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="banner-img wow fadeIn mb-lg-0 animated d-lg-block d-none">
                                <img src="{{ asset('frontend/imgs/banner/banner-11.png') }}" alt="" />
                                <div class="banner-text">
                                    <span>Oganic</span>
                                    <h4>
                                        Save 17% <br />
                                        on <span class="text-brand">Oganic</span><br />
                                        Juice
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection