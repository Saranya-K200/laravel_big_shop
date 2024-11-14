<!-- Quick view -->
<div class="modal fade custom-modal" id="quickViewModal" tabindex="-1" aria-labelledby="quickViewModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-body">
                    <div class="row">
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
                                <h3 class="title-detail"><a href="{{ asset('shop-product-right.html') }}" class="text-heading">Seeds of Change Organic Quinoa, Brown</a></h3>
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
                                        <span class="current-price text-brand">$38</span>
                                        <span>
                                            <span class="save-price font-md color3 ml-15">26% Off</span>
                                            <span class="old-price font-md ml-15">$52</span>
                                        </span>
                                    </div>
                                </div>
                                <div class="detail-extralink mb-30">
                                    <div class="detail-qty border radius">
                                        <a href="{{ asset('#') }}" class="qty-down"><i class="fi-rs-angle-small-down"></i></a>
                                        <input type="text" name="quantity" class="qty-val" value="1" min="1">
                                        <a href="{{ asset('#') }}" class="qty-up"><i class="fi-rs-angle-small-up"></i></a>
                                    </div>
                                    <div class="product-extra-link2">
                                        <button type="submit" class="button button-add-to-cart"><i class="fi-rs-shopping-cart"></i>Add to cart</button>
                                    </div>
                                </div>
                                <div class="font-xs">
                                    <ul>
                                        <li class="mb-5">Vendor: <span class="text-brand">Nest</span></li>
                                        <li class="mb-5">MFG:<span class="text-brand"> Jun 4.2022</span></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Detail Info -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <header class="header-area header-style-1 header-height-2">
        <div class="mobile-promotion">
            <span>Grand opening, <strong>up to 15%</strong> off all items. Only <strong>3 days</strong> left</span>
        </div>
        <div class="header-top header-top-ptb-1 d-none d-lg-block">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-3 col-lg-4">
                        <div class="header-info">
                            <ul>
                                <li><a href="{{ asset('page-about.htlm') }}">About Us</a></li>
                                <li><a href="{{ asset('page-account.html') }}">My Account</a></li>
                                <li><a href="{{ asset('shop-wishlist.html') }}">Wishlist</a></li>
                                <li><a href="{{ asset('shop-order.html') }}">Order Tracking</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-4">
                        <div class="text-center">
                            <div id="news-flash" class="d-inline-block">
                                <ul>
                                    <li>100% Secure delivery without contacting the courier</li>
                                    <li>Supper Value Deals - Save more with coupons</li>
                                    <li>Trendy 25silver jewelry, save up 35% off today</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4">
                        <div class="header-info header-info-right">
                            <ul>
                                <li>Need help? Call Us: <strong class="text-brand"> + 1800 900</strong></li>
                                <li>
                                    <a class="language-dropdown-active" href="{{ asset('#') }}">English <i class="fi-rs-angle-small-down"></i></a>
                                    <ul class="language-dropdown">
                                        <li>
                                            <a href="{{ asset('#') }}"><img src="{{ asset('frontend/imgs/theme/flag-fr.png') }}" alt="" />Français</a>
                                        </li>
                                        <li>
                                            <a href="{{ asset('#') }}"><img src="{{ asset('frontend/imgs/theme/flag-dt.png') }}" alt="" />Deutsch</a>
                                        </li>
                                        <li>
                                            <a href="{{ asset('#') }}"><img src="{{ asset('frontend/imgs/theme/flag-ru.png') }}" alt="" />Pусский</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="language-dropdown-active" href="{{ asset('#') }}">USD <i class="fi-rs-angle-small-down"></i></a>
                                    <ul class="language-dropdown">
                                        <li>
                                            <a href="{{ asset('#') }}"><img src="{{ asset('frontend/imgs/theme/flag-fr.png') }}" alt="" />INR</a>
                                        </li>
                                        <li>
                                            <a href="{{ asset('#') }}"><img src="{{ asset('frontend/imgs/theme/flag-dt.png') }}" alt="" />MBP</a>
                                        </li>
                                        <li>
                                            <a href="{{ asset('#') }}"><img src="{{ asset('frontend/imgs/theme/flag-ru.png') }}" alt="" />EU</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-middle header-middle-ptb-1 d-none d-lg-block">
            <div class="container">
                <div class="header-wrap">
                    <div class="logo logo-width-1">
                        <a href="{{ asset('index.html') }}"><img src="{{ asset('frontend/imgs/theme/logo.svg') }}" alt="logo" /></a>
                    </div>
                    <div class="header-right">
                        <div class="search-style-2">
                            <form method="GET" action="{{ route('home.index') }}">
                                <select class="select-active" name="category" id="category">
                                    <option value="All" {{ request()->input('category') == 'All' ? 'selected' : '' }}>All Categories</option> 
                                    @foreach($categories as $row)
                                    <option value="{{ $row->id }}" {{request()->input('category') == $row->id ? 'selected' : ''}}>
                                        {{ $row->name }}
                                    </option>
                                    @endforeach
                                </select>
                                <input type="text" placeholder="Search for items..." />
                            </form>
                        </div>
                        <div class="header-action-right">
                            <div class="header-action-2">
                                <div class="search-location">
                                    <form action="#">
                                        <select class="select-active">
                                            <option>Your Location</option>
                                            @foreach($cities as $row)
                                            <option value="{{ $row->id }}" {{ request()->input('row') == $row->name ? 'selected' : '' }}>
                                                {{ $row->name }}
                                            </option>
                                            @endforeach
                                        </select>
                                    </form>
                                </div>
                                <div class="header-action-icon-2">
                                    <a href="{{ asset('shop-compare.html') }}">
                                        <img class="svgInject" alt="Nest" src="{{ asset('frontend/imgs/theme/icons/icon-compare.svg') }}" />
                                        <span class="pro-count blue">3</span>
                                    </a>
                                    <a href="{{ asset('shop-compare.html') }}"><span class="lable ml-0">Compare</span></a>
                                </div>
                                <div class="header-action-icon-2">
                                    <a href="{{ asset('shop-wishlist.html') }}">
                                        <img class="svgInject" alt="Nest" src="{{ asset('frontend/imgs/theme/icons/icon-heart.svg') }}" />
                                        <span class="pro-count blue">6</span>
                                    </a>
                                    <a href="{{ asset('shop-wishlist.html') }}"><span class="lable">Wishlist</span></a>
                                </div>
                                <div class="header-action-icon-2">
                                    <a class="mini-cart-icon" href="{{ asset('shop-cart.html') }}">
                                        <img alt="Nest" src="{{ asset('frontend/imgs/theme/icons/icon-cart.svg') }}" />
                                        <span class="pro-count blue">{{ $cart_count }}</span>
                                    </a>
                                    <a href="{{ asset('shop-cart.html') }}"><span class="lable">Cart</span></a>
                                    <div class="cart-dropdown-wrap cart-dropdown-hm2">
                                        <ul>
                                            @foreach($carts as $row)
                                            <li>
                                                <div class="shopping-cart-img">
                                                    <a href="{{ asset('shop-product-right.html') }}"><img alt="Nest" src="{{ asset('frontend/imgs/shop/thumbnail-3.jpg') }}" /></a>
                                                </div>
                                                <div class="shopping-cart-title">
                                                    <h4><a href="{{ asset('shop-product-right.html') }}">{{$row->product->name}}</a></h4>
                                                    <h4><span> {{ $row->qty }} × </span>{{ $row->product->price }}</h4>
                                                    <!-- OR -->
                                                    <h4><span> {{ $row->qty }} × </span>{{ $cart_sub_total }}</h4>
                                                </div>
                                                <div class="shopping-cart-delete">
                                                    <a href="{{ asset('#') }}"><i class="fi-rs-cross-small"></i></a>
                                                </div>
                                            </li>
                                            @endforeach
                                        </ul>
                                        <div class="shopping-cart-footer">
                                            <div class="shopping-cart-total">
                                                <h4>Total <span>₹ {{ $cart_grand_total }}</span></h4>
                                            </div>
                                            <div class="shopping-cart-button">
                                                <a href="{{ asset('shop-cart.html') }}" class="outline">View cart</a>
                                                <a href="{{ asset('shop-checkout.html') }}">Checkout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="header-action-icon-2">
                                    <a href="{{ asset('page-account.html') }}">
                                        <img class="svgInject" alt="Nest" src="{{ asset('frontend/imgs/theme/icons/icon-user.svg') }}" />
                                    </a>
                                    <a href="{{ asset('page-account.html') }}"><span class="lable ml-0">Account</span></a>
                                    <div class="cart-dropdown-wrap cart-dropdown-hm2 account-dropdown">
                                        <ul>
                                            <li>
                                                <a href="{{ asset('page-account.html') }}"><i class="fi fi-rs-user mr-10"></i>My Account</a>
                                            </li>
                                            <li>
                                                <a href="{{ asset('page-account.html') }}"><i class="fi fi-rs-location-alt mr-10"></i>Order Tracking</a>
                                            </li>
                                            <li>
                                                <a href="{{ asset('page-account.html') }}"><i class="fi fi-rs-label mr-10"></i>My Voucher</a>
                                            </li>
                                            <li>
                                                <a href="{{ asset('shop-wishlist.html') }}"><i class="fi fi-rs-heart mr-10"></i>My Wishlist</a>
                                            </li>
                                            <li>
                                                <a href="{{ asset('page-account.html') }}"><i class="fi fi-rs-settings-sliders mr-10"></i>Setting</a>
                                            </li>
                                            <li>
                                                <a href="{{ asset('page-login.html') }}"><i class="fi fi-rs-sign-out mr-10"></i>Sign out</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom header-bottom-bg-color sticky-bar">
            <div class="container">
                <div class="header-wrap header-space-between position-relative">
                    <div class="logo logo-width-1 d-block d-lg-none">
                        <a href="{{ asset('index.html') }}"><img src="{{ asset('frontend/imgs/theme/logo.svg') }}" alt="logo" /></a>
                    </div>
                    <div class="header-nav d-none d-lg-flex">
                        <div class="main-categori-wrap d-none d-lg-block">
                            <a class="categories-button-active" href="{{ asset('#') }}">
                                <span class="fi-rs-apps"></span> <span class="et">Browse</span> All Categories
                                <i class="fi-rs-angle-down"></i>
                            </a>
                            <div class="categories-dropdown-wrap categories-dropdown-active-large font-heading">
                                <div class="d-flex categori-dropdown-inner">
                                    <ul>
                                        <li>
                                            <a href="{{ asset('shop-grid-right.html') }}"> <img src="{{ asset('frontend/imgs/theme/icons/category-1.svg') }}" alt="" />Milks and Dairies</a>
                                        </li>
                                        <li>
                                            <a href="{{ asset('shop-grid-right.html') }}"> <img src="{{ asset('frontend/imgs/theme/icons/category-2.svg') }}" alt="" />Clothing & beauty</a>
                                        </li>
                                        <li>
                                            <a href="{{ asset('shop-grid-right.html') }}"> <img src="{{ asset('frontend/imgs/theme/icons/category-3.svg') }}" alt="" />Pet Foods & Toy</a>
                                        </li>
                                        <li>
                                            <a href="{{ asset('shop-grid-right.html') }}"> <img src="{{ asset('frontend/imgs/theme/icons/category-4.svg') }}" alt="" />Baking material</a>
                                        </li>
                                        <li>
                                            <a href="{{ asset('shop-grid-right.html') }}"> <img src="{{ asset('frontend/imgs/theme/icons/category-5.svg') }}" alt="" />Fresh Fruit</a>
                                        </li>
                                    </ul>
                                    <ul class="end">
                                        <li>
                                            <a href="{{ asset('shop-grid-right.html') }}"> <img src="{{ asset('frontend/imgs/theme/icons/category-6.svg') }}" alt="" />Wines & Drinks</a>
                                        </li>
                                        <li>
                                            <a href="{{ asset('shop-grid-right.html') }}"> <img src="{{ asset('frontend/imgs/theme/icons/category-7.svg') }}" alt="" />Fresh Seafood</a>
                                        </li>
                                        <li>
                                            <a href="{{ asset('shop-grid-right.html') }}"> <img src="{{ asset('frontend/imgs/theme/icons/category-8.svg') }}" alt="" />Fast food</a>
                                        </li>
                                        <li>
                                            <a href="{{ asset('shop-grid-right.html') }}"> <img src="{{ asset('frontend/imgs/theme/icons/category-9.svg') }}" alt="" />Vegetables</a>
                                        </li>
                                        <li>
                                            <a href="{{ asset('shop-grid-right.html') }}"> <img src="{{ asset('frontend/imgs/theme/icons/category-10.svg') }}" alt="" />Bread and Juice</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="more_slide_open" style="display: none">
                                    <div class="d-flex categori-dropdown-inner">
                                        <ul>
                                            <li>
                                                <a href="{{ asset('shop-grid-right.html') }}"> <img src="{{ asset('frontend/imgs/theme/icons/icon-1.svg') }}" alt="" />Milks and Dairies</a>
                                            </li>
                                            <li>
                                                <a href="{{ asset('shop-grid-right.html') }}"> <img src="{{ asset('frontend/imgs/theme/icons/icon-2.svg') }}" alt="" />Clothing & beauty</a>
                                            </li>
                                        </ul>
                                        <ul class="end">
                                            <li>
                                                <a href="{{ asset('shop-grid-right.html') }}"> <img src="{{ asset('frontend/imgs/theme/icons/icon-3.svg') }}" alt="" />Wines & Drinks</a>
                                            </li>
                                            <li>
                                                <a href="{{ asset('shop-grid-right.html') }}"> <img src="{{ asset('frontend/imgs/theme/icons/icon-4.svg') }}" alt="" />Fresh Seafood</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="more_categories"><span class="icon"></span> <span class="heading-sm-1">Show more...</span></div>
                            </div>
                        </div>
                        <div class="main-menu main-menu-padding-1 main-menu-lh-2 d-none d-lg-block font-heading">
                            <nav>
                                <ul>
                                    <li class="hot-deals"><img src="{{ asset('frontend/imgs/theme/icons/icon-hot.svg') }}" alt="hot deals" /><a href="{{ asset('shop-grid-right.html') }}">Deals</a></li>
                                    <li>
                                        <a class="active" href="{{ asset('index.html') }}">Home <i class="fi-rs-angle-down"></i></a>
                                        <ul class="sub-menu">
                                            <li><a href="{{ asset('index.html') }}">Home 1</a></li>
                                            <li><a href="{{ asset('index-2.html') }}">Home 2</a></li>
                                            <li><a href="{{ asset('index-3.html') }}">Home 3</a></li>
                                            <li><a href="{{ asset('index-4.html') }}">Home 4</a></li>
                                            <li><a href="{{ asset('index-5.html') }}">Home 5</a></li>
                                            <li><a href="{{ asset('index-6.html') }}">Home 6</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="{{ asset('page-about.html') }}">About</a>
                                    </li>
                                    <li>
                                        <a href="{{ asset('shop-grid-right.html') }}">Shop <i class="fi-rs-angle-down"></i></a>
                                        <ul class="sub-menu">
                                            <li><a href="{{ asset('shop-grid-right.html') }}">Shop Grid – Right Sidebar</a></li>
                                            <li><a href="{{ asset('shop-grid-left.html') }}">Shop Grid – Left Sidebar</a></li>
                                            <li><a href="{{ asset('shop-list-right.html') }}">Shop List – Right Sidebar</a></li>
                                            <li><a href="{{ asset('shop-list-left.html') }}">Shop List – Left Sidebar</a></li>
                                            <li><a href="{{ asset('shop-fullwidth.html') }}">Shop - Wide</a></li>
                                            <li>
                                                <a href="{{ asset('#') }}">Single Product <i class="fi-rs-angle-right"></i></a>
                                                <ul class="level-menu">
                                                    <li><a href="{{ asset('shop-product-right.html') }}">Product – Right Sidebar</a></li>
                                                    <li><a href="{{ asset('shop-product-left.html') }}">Product – Left Sidebar</a></li>
                                                    <li><a href="{{ asset('shop-product-full.html') }}">Product – No sidebar</a></li>
                                                    <li><a href="{{ asset('shop-product-vendor.html') }}">Product – Vendor Info</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="{{ asset('shop-filter.html') }}">Shop – Filter</a></li>
                                            <li><a href="{{ asset('shop-wishlist.html') }}">Shop – Wishlist</a></li>
                                            <li><a href="{{ asset('shop-cart.html') }}">Shop – Cart</a></li>
                                            <li><a href="{{ asset('shop-checkout.html') }}">Shop – Checkout</a></li>
                                            <li><a href="{{ asset('shop-compare.html') }}">Shop – Compare</a></li>
                                            <li>
                                                <a href="{{ asset('#') }}">Shop Invoice<i class="fi-rs-angle-right"></i></a>
                                                <ul class="level-menu">
                                                    <li><a href="{{ asset('shop-invoice-1.html') }}">Shop Invoice 1</a></li>
                                                    <li><a href="{{ asset('shop-invoice-2.html') }}">Shop Invoice 2</a></li>
                                                    <li><a href="{{ asset('shop-invoice-3.html') }}">Shop Invoice 3</a></li>
                                                    <li><a href="{{ asset('shop-invoice-4.html') }}">Shop Invoice 4</a></li>
                                                    <li><a href="{{ asset('shop-invoice-5.html') }}">Shop Invoice 5</a></li>
                                                    <li><a href="{{ asset('shop-invoice-6.html') }}">Shop Invoice 6</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="{{ asset('#') }}">Vendors <i class="fi-rs-angle-down"></i></a>
                                        <ul class="sub-menu">
                                            <li><a href="{{ asset('vendors-grid.html') }}">Vendors Grid</a></li>
                                            <li><a href="{{ asset('vendors-list.html') }}">Vendors List</a></li>
                                            <li><a href="{{ asset('vendor-details-1.html') }}">Vendor Details 01</a></li>
                                            <li><a href="{{ asset('vendor-details-2.html') }}">Vendor Details 02</a></li>
                                            <li><a href="{{ asset('vendor-dashboard.html') }}">Vendor Dashboard</a></li>
                                            <li><a href="{{ asset('vendor-guide.html') }}">Vendor Guide</a></li>
                                        </ul>
                                    </li>
                                    <li class="position-static">
                                        <a href="{{ asset('#') }}">Mega menu <i class="fi-rs-angle-down"></i></a>
                                        <ul class="mega-menu">
                                            <li class="sub-mega-menu sub-mega-menu-width-22">
                                                <a class="menu-title" href="{{ asset('#') }}">Fruit & Vegetables</a>
                                                <ul>
                                                    <li><a href="{{ asset('shop-product-right.html') }}">Meat & Poultry</a></li>
                                                    <li><a href="{{ asset('shop-product-right.html') }}">Fresh Vegetables</a></li>
                                                    <li><a href="{{ asset('shop-product-right.html') }}">Herbs & Seasonings</a></li>
                                                    <li><a href="{{ asset('shop-product-right.html') }}">Cuts & Sprouts</a></li>
                                                    <li><a href="{{ asset('shop-product-right.html') }}">Exotic Fruits & Veggies</a></li>
                                                    <li><a href="{{ asset('shop-product-right.html') }}">Packaged Produce</a></li>
                                                </ul>
                                            </li>
                                            <li class="sub-mega-menu sub-mega-menu-width-22">
                                                <a class="menu-title" href="{{ asset('#') }}">Breakfast & Dairy</a>
                                                <ul>
                                                    <li><a href="{{ asset('shop-product-right.html') }}">Milk & Flavoured Milk</a></li>
                                                    <li><a href="{{ asset('shop-product-right.html') }}">Butter and Margarine</a></li>
                                                    <li><a href="{{ asset('shop-product-right.html') }}">Eggs Substitutes</a></li>
                                                    <li><a href="{{ asset('shop-product-right.html') }}">Marmalades</a></li>
                                                    <li><a href="{{ asset('shop-product-right.html') }}">Sour Cream</a></li>
                                                    <li><a href="{{ asset('shop-product-right.html') }}">Cheese</a></li>
                                                </ul>
                                            </li>
                                            <li class="sub-mega-menu sub-mega-menu-width-22">
                                                <a class="menu-title" href="{{ asset('#') }}">Meat & Seafood</a>
                                                <ul>
                                                    <li><a href="{{ asset('shop-product-right.html') }}">Breakfast Sausage</a></li>
                                                    <li><a href="{{ asset('shop-product-right.html') }}">Dinner Sausage</a></li>
                                                    <li><a href="{{ asset('shop-product-right.html') }}">Chicken</a></li>
                                                    <li><a href="{{ asset('shop-product-right.html') }}">Sliced Deli Meat</a></li>
                                                    <li><a href="{{ asset('shop-product-right.html') }}">Wild Caught Fillets</a></li>
                                                    <li><a href="{{ asset('shop-product-right.html') }}">Crab and Shellfish</a></li>
                                                </ul>
                                            </li>
                                            <li class="sub-mega-menu sub-mega-menu-width-34">
                                                <div class="menu-banner-wrap">
                                                    <a href="{{ asset('shop-product-right.html') }}"><img src="{{ asset('frontend/imgs/banner/banner-menu.png') }}" alt="Nest" /></a>
                                                    <div class="menu-banner-content">
                                                        <h4>Hot deals</h4>
                                                        <h3>
                                                            Don't miss<br />
                                                            Trending
                                                        </h3>
                                                        <div class="menu-banner-price">
                                                            <span class="new-price text-success">Save to 50%</span>
                                                        </div>
                                                        <div class="menu-banner-btn">
                                                            <a href="{{ asset('shop-product-right.html') }}">Shop now</a>
                                                        </div>
                                                    </div>
                                                    <div class="menu-banner-discount">
                                                        <h3>
                                                            <span>25%</span>
                                                            off
                                                        </h3>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="{{ asset('blog-category-grid.html') }}">Blog <i class="fi-rs-angle-down"></i></a>
                                        <ul class="sub-menu">
                                            <li><a href="{{ asset('blog-category-grid.html') }}">Blog Category Grid</a></li>
                                            <li><a href="{{ asset('blog-category-list.html') }}">Blog Category List</a></li>
                                            <li><a href="{{ asset('blog-category-big.html') }}">Blog Category Big</a></li>
                                            <li><a href="{{ asset('blog-category-fullwidth.html') }}">Blog Category Wide</a></li>
                                            <li>
                                                <a href="{{ asset('#') }}">Single Post <i class="fi-rs-angle-right"></i></a>
                                                <ul class="level-menu level-menu-modify">
                                                    <li><a href="{{ asset('blog-post-left.html') }}">Left Sidebar</a></li>
                                                    <li><a href="{{ asset('blog-post-right.html') }}">Right Sidebar</a></li>
                                                    <li><a href="{{ asset('blog-post-fullwidth.html') }}">No Sidebar</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="{{ asset('#') }}">Pages <i class="fi-rs-angle-down"></i></a>
                                        <ul class="sub-menu">
                                            <li><a href="{{ asset('page-about.html') }}">About Us</a></li>
                                            <li><a href="{{ asset('page-contact.html') }}">Contact</a></li>
                                            <li><a href="{{ asset('page-account.html') }}">My Account</a></li>
                                            <li><a href="{{ asset('page-login.html') }}">Login</a></li>
                                            <li><a href="{{ asset('page-register.html') }}">Register</a></li>
                                            <li><a href="{{ asset('page-forgot-password.html') }}">Forgot password</a></li>
                                            <li><a href="{{ asset('page-reset-password.html') }}">Reset password</a></li>
                                            <li><a href="{{ asset('page-purchase-guide.html') }}">Purchase Guide</a></li>
                                            <li><a href="{{ asset('page-privacy-policy.html') }}">Privacy Policy</a></li>
                                            <li><a href="{{ asset('page-terms.html') }}">Terms of Service</a></li>
                                            <li><a href="{{ asset('page-404.html') }}">404 Page</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="{{ asset('page-contact.html') }}">Contact</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="hotline d-none d-lg-flex">
                        <img src="{{ asset('frontend/imgs/theme/icons/icon-headphone.svg') }}" alt="hotline" />
                        <p>1900 - 888<span>24/7 Support Center</span></p>
                    </div>
                    <div class="header-action-icon-2 d-block d-lg-none">
                        <div class="burger-icon burger-icon-white">
                            <span class="burger-icon-top"></span>
                            <span class="burger-icon-mid"></span>
                            <span class="burger-icon-bottom"></span>
                        </div>
                    </div>
                    <div class="header-action-right d-block d-lg-none">
                        <div class="header-action-2">
                            <div class="header-action-icon-2">
                                <a href="{{ asset('shop-wishlist.html') }}">
                                    <img alt="Nest" src="{{ asset('frontend/imgs/theme/icons/icon-heart.svg') }}" />
                                    <span class="pro-count white">4</span>
                                </a>
                            </div>
                            <div class="header-action-icon-2">
                                <a class="mini-cart-icon" href="{{ asset('#') }}">
                                    <img alt="Nest" src="{{ asset('frontend/imgs/theme/icons/icon-cart.svg') }}" />
                                    <span class="pro-count white">2</span>
                                </a>
                                <div class="cart-dropdown-wrap cart-dropdown-hm2">
                                    <ul>
                                        <li>
                                            <div class="shopping-cart-img">
                                                <a href="{{ asset('shop-product-right.html') }}"><img alt="Nest" src="{{ asset('frontend/imgs/shop/thumbnail-3.jpg') }}" /></a>
                                            </div>
                                            <div class="shopping-cart-title">
                                                <h4><a href="{{ asset('shop-product-right.html') }}">Plain Striola Shirts</a></h4>
                                                <h3><span>1 × </span>$800.00</h3>
                                            </div>
                                            <div class="shopping-cart-delete">
                                                <a href="{{ asset('#') }}"><i class="fi-rs-cross-small"></i></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="shopping-cart-img">
                                                <a href="{{ asset('shop-product-right.html') }}"><img alt="Nest" src="{{ asset('frontend/imgs/shop/thumbnail-4.jpg') }}" /></a>
                                            </div>
                                            <div class="shopping-cart-title">
                                                <h4><a href="{{ asset('shop-product-right.html') }}">Macbook Pro 2022</a></h4>
                                                <h3><span>1 × </span>$3500.00</h3>
                                            </div>
                                            <div class="shopping-cart-delete">
                                                <a href="{{ asset('#') }}"><i class="fi-rs-cross-small"></i></a>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="shopping-cart-footer">
                                        <div class="shopping-cart-total">
                                            <h4>Total <span>$383.00</span></h4>
                                        </div>
                                        <div class="shopping-cart-button">
                                            <a href="{{ asset('shop-cart.html') }}">View cart</a>
                                            <a href="{{ asset('shop-checkout.html') }}">Checkout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>