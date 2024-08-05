@extends('layout.master')

@section('content')
<div class="breadcumb-wrapper " data-bg-src="assets/img/bg/breadcumb-bg.jpg">
    <div class="container">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">Shop</h1>
            <ul class="breadcumb-menu">
                <li><a href="/home_Esports">Home</a></li>
                <li>Shop</li>
            </ul>
        </div>
    </div>
</div>
<!--==============================
Product Area
==============================-->
<section class="space-top space-extra2-bottom">
    <div class="container">
        <div class="th-sort-bar">
            <div class="row justify-content-between align-items-center">
                <div class="col-md">
                    <p class="woocommerce-result-count">Showing 1–12 of 16 results</p>
                </div>

                <div class="col-md-auto">
                    <form class="woocommerce-ordering" method="get">
                        <select name="orderby" class="orderby" aria-label="Shop order">
                            <option value="menu_order" selected="selected">Default Sorting</option>
                            <option value="popularity">Sort by popularity</option>
                            <option value="rating">Sort by average rating</option>
                            <option value="date">Sort by latest</option>
                            <option value="price">Sort by price: low to high</option>
                            <option value="price-desc">Sort by price: high to low</option>
                        </select>
                    </form>
                </div>
            </div>
        </div>
        <div class="row gy-40">

            <div class="col-xl-3 col-lg-4 col-sm-6">
                <div class="th-product product-grid">
                    <div class="product-img">
                        <img src="assets/img/product/product_1_1.png" alt="Product Image">
                        <div class="overlay gradient-border"></div>
                        <div class="actions">
                            <a href="/cart" class="icon-btn"><i class="far fa-cart-plus"></i></a>
                            <a href="/wishlist" class="icon-btn"><i class="fas fa-heart"></i></a>
                            <a href="#QuickView" class="icon-btn popup-content"><i class="fas fa-eye"></i></a>
                        </div>
                    </div>
                    <div class="product-content">
                        <h3 class="product-title"><a href="/shop_Details">Gaming Headphone</a></h3>
                        <span class="price">$177.85</span>
                        <!-- <div class="woocommerce-product-rating">
                    <span class="count">(120 Reviews)</span>
                    <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                        <span>Rated <strong class="rating">5.00</strong> out of 5 based on <span class="rating">1</span> customer rating</span>
                    </div>
                </div> -->
                    </div>
                </div>
            </div>


            <div class="col-xl-3 col-lg-4 col-sm-6">
                <div class="th-product product-grid">
                    <div class="product-img">
                        <img src="assets/img/product/product_1_2.png" alt="Product Image">
                        <div class="overlay gradient-border"></div>
                        <div class="actions">
                            <a href="/cart" class="icon-btn"><i class="far fa-cart-plus"></i></a>
                            <a href="/wishlist" class="icon-btn"><i class="fas fa-heart"></i></a>
                            <a href="#QuickView" class="icon-btn popup-content"><i class="fas fa-eye"></i></a>
                        </div>
                    </div>
                    <div class="product-content">
                        <h3 class="product-title"><a href="/shop_Details">Gaming Mouse</a></h3>
                        <span class="price">$120.00</span>
                        <!-- <div class="woocommerce-product-rating">
                    <span class="count">(120 Reviews)</span>
                    <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                        <span>Rated <strong class="rating">5.00</strong> out of 5 based on <span class="rating">1</span> customer rating</span>
                    </div>
                </div> -->
                    </div>
                </div>
            </div>


            <div class="col-xl-3 col-lg-4 col-sm-6">
                <div class="th-product product-grid">
                    <div class="product-img">
                        <img src="assets/img/product/product_1_3.png" alt="Product Image">
                        <div class="overlay gradient-border"></div>
                        <div class="actions">
                            <a href="/cart" class="icon-btn"><i class="far fa-cart-plus"></i></a>
                            <a href="/wishlist" class="icon-btn"><i class="fas fa-heart"></i></a>
                            <a href="#QuickView" class="icon-btn popup-content"><i class="fas fa-eye"></i></a>
                        </div>
                    </div>
                    <div class="product-content">
                        <h3 class="product-title"><a href="/shop_Details">Gaming Keyboard</a></h3>
                        <span class="price">$96.85</span>
                        <!-- <div class="woocommerce-product-rating">
                    <span class="count">(120 Reviews)</span>
                    <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                        <span>Rated <strong class="rating">5.00</strong> out of 5 based on <span class="rating">1</span> customer rating</span>
                    </div>
                </div> -->
                    </div>
                </div>
            </div>


            <div class="col-xl-3 col-lg-4 col-sm-6">
                <div class="th-product product-grid">
                    <div class="product-img">
                        <img src="assets/img/product/product_1_4.png" alt="Product Image">
                        <div class="overlay gradient-border"></div>
                        <div class="actions">
                            <a href="/cart" class="icon-btn"><i class="far fa-cart-plus"></i></a>
                            <a href="/wishlist" class="icon-btn"><i class="fas fa-heart"></i></a>
                            <a href="#QuickView" class="icon-btn popup-content"><i class="fas fa-eye"></i></a>
                        </div>
                    </div>
                    <div class="product-content">
                        <h3 class="product-title"><a href="/shop_Details">Gaming Chair</a></h3>
                        <span class="price">$08.85<del>$06.99</del></span>
                        <!-- <div class="woocommerce-product-rating">
                    <span class="count">(120 Reviews)</span>
                    <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                        <span>Rated <strong class="rating">5.00</strong> out of 5 based on <span class="rating">1</span> customer rating</span>
                    </div>
                </div> -->
                    </div>
                </div>
            </div>


            <div class="col-xl-3 col-lg-4 col-sm-6">
                <div class="th-product product-grid">
                    <div class="product-img">
                        <img src="assets/img/product/product_1_5.png" alt="Product Image">
                        <div class="overlay gradient-border"></div>
                        <div class="actions">
                            <a href="/cart" class="icon-btn"><i class="far fa-cart-plus"></i></a>
                            <a href="/wishlist" class="icon-btn"><i class="fas fa-heart"></i></a>
                            <a href="#QuickView" class="icon-btn popup-content"><i class="fas fa-eye"></i></a>
                        </div>
                    </div>
                    <div class="product-content">
                        <h3 class="product-title"><a href="/shop_Details">Microphone G9000</a></h3>
                        <span class="price">$32.85</span>
                        <!-- <div class="woocommerce-product-rating">
                    <span class="count">(120 Reviews)</span>
                    <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                        <span>Rated <strong class="rating">5.00</strong> out of 5 based on <span class="rating">1</span> customer rating</span>
                    </div>
                </div> -->
                    </div>
                </div>
            </div>


            <div class="col-xl-3 col-lg-4 col-sm-6">
                <div class="th-product product-grid">
                    <div class="product-img">
                        <img src="assets/img/product/product_1_6.png" alt="Product Image">
                        <div class="overlay gradient-border"></div>
                        <div class="actions">
                            <a href="/cart" class="icon-btn"><i class="far fa-cart-plus"></i></a>
                            <a href="/wishlist" class="icon-btn"><i class="fas fa-heart"></i></a>
                            <a href="#QuickView" class="icon-btn popup-content"><i class="fas fa-eye"></i></a>
                        </div>
                    </div>
                    <div class="product-content">
                        <h3 class="product-title"><a href="/shop_Details">Play Station Controller</a></h3>
                        <span class="price">$30.85</span>
                        <!-- <div class="woocommerce-product-rating">
                    <span class="count">(120 Reviews)</span>
                    <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                        <span>Rated <strong class="rating">5.00</strong> out of 5 based on <span class="rating">1</span> customer rating</span>
                    </div>
                </div> -->
                    </div>
                </div>
            </div>


            <div class="col-xl-3 col-lg-4 col-sm-6">
                <div class="th-product product-grid">
                    <div class="product-img">
                        <img src="assets/img/product/product_1_7.png" alt="Product Image">
                        <div class="overlay gradient-border"></div>
                        <div class="actions">
                            <a href="/cart" class="icon-btn"><i class="far fa-cart-plus"></i></a>
                            <a href="/wishlist" class="icon-btn"><i class="fas fa-heart"></i></a>
                            <a href="#QuickView" class="icon-btn popup-content"><i class="fas fa-eye"></i></a>
                        </div>
                    </div>
                    <div class="product-content">
                        <h3 class="product-title"><a href="/shop_Details">PlayStation VR</a></h3>
                        <span class="price">$232.85</span>
                        <!-- <div class="woocommerce-product-rating">
                    <span class="count">(120 Reviews)</span>
                    <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                        <span>Rated <strong class="rating">5.00</strong> out of 5 based on <span class="rating">1</span> customer rating</span>
                    </div>
                </div> -->
                    </div>
                </div>
            </div>


            <div class="col-xl-3 col-lg-4 col-sm-6">
                <div class="th-product product-grid">
                    <div class="product-img">
                        <img src="assets/img/product/product_1_8.png" alt="Product Image">
                        <div class="overlay gradient-border"></div>
                        <div class="actions">
                            <a href="/cart" class="icon-btn"><i class="far fa-cart-plus"></i></a>
                            <a href="/wishlist" class="icon-btn"><i class="fas fa-heart"></i></a>
                            <a href="#QuickView" class="icon-btn popup-content"><i class="fas fa-eye"></i></a>
                        </div>
                    </div>
                    <div class="product-content">
                        <h3 class="product-title"><a href="/shop_Details">Wireless speaker</a></h3>
                        <span class="price">$30.85</span>
                        <!-- <div class="woocommerce-product-rating">
                    <span class="count">(120 Reviews)</span>
                    <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                        <span>Rated <strong class="rating">5.00</strong> out of 5 based on <span class="rating">1</span> customer rating</span>
                    </div>
                </div> -->
                    </div>
                </div>
            </div>


            <div class="col-xl-3 col-lg-4 col-sm-6">
                <div class="th-product product-grid">
                    <div class="product-img">
                        <img src="assets/img/product/product_1_9.png" alt="Product Image">
                        <div class="overlay gradient-border"></div>
                        <div class="actions">
                            <a href="/cart" class="icon-btn"><i class="far fa-cart-plus"></i></a>
                            <a href="/wishlist" class="icon-btn"><i class="fas fa-heart"></i></a>
                            <a href="#QuickView" class="icon-btn popup-content"><i class="fas fa-eye"></i></a>
                        </div>
                    </div>
                    <div class="product-content">
                        <h3 class="product-title"><a href="/shop_Details">PlayStation 4 Pro</a></h3>
                        <span class="price">$32.85</span>
                        <!-- <div class="woocommerce-product-rating">
                    <span class="count">(120 Reviews)</span>
                    <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                        <span>Rated <strong class="rating">5.00</strong> out of 5 based on <span class="rating">1</span> customer rating</span>
                    </div>
                </div> -->
                    </div>
                </div>
            </div>


            <div class="col-xl-3 col-lg-4 col-sm-6">
                <div class="th-product product-grid">
                    <div class="product-img">
                        <img src="assets/img/product/product_1_10.png" alt="Product Image">
                        <div class="overlay gradient-border"></div>
                        <div class="actions">
                            <a href="/cart" class="icon-btn"><i class="far fa-cart-plus"></i></a>
                            <a href="/wishlist" class="icon-btn"><i class="fas fa-heart"></i></a>
                            <a href="#QuickView" class="icon-btn popup-content"><i class="fas fa-eye"></i></a>
                        </div>
                    </div>
                    <div class="product-content">
                        <h3 class="product-title"><a href="/shop_Details">Gaming Controller</a></h3>
                        <span class="price">$30.85</span>
                        <!-- <div class="woocommerce-product-rating">
                    <span class="count">(120 Reviews)</span>
                    <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                        <span>Rated <strong class="rating">5.00</strong> out of 5 based on <span class="rating">1</span> customer rating</span>
                    </div>
                </div> -->
                    </div>
                </div>
            </div>


            <div class="col-xl-3 col-lg-4 col-sm-6">
                <div class="th-product product-grid">
                    <div class="product-img">
                        <img src="assets/img/product/product_1_11.png" alt="Product Image">
                        <div class="overlay gradient-border"></div>
                        <div class="actions">
                            <a href="/cart" class="icon-btn"><i class="far fa-cart-plus"></i></a>
                            <a href="/wishlist" class="icon-btn"><i class="fas fa-heart"></i></a>
                            <a href="#QuickView" class="icon-btn popup-content"><i class="fas fa-eye"></i></a>
                        </div>
                    </div>
                    <div class="product-content">
                        <h3 class="product-title"><a href="/shop_Details">RGB Play Station</a></h3>
                        <span class="price">$232.85</span>
                        <!-- <div class="woocommerce-product-rating">
                    <span class="count">(120 Reviews)</span>
                    <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                        <span>Rated <strong class="rating">5.00</strong> out of 5 based on <span class="rating">1</span> customer rating</span>
                    </div>
                </div> -->
                    </div>
                </div>
            </div>


            <div class="col-xl-3 col-lg-4 col-sm-6">
                <div class="th-product product-grid">
                    <div class="product-img">
                        <img src="assets/img/product/product_1_12.png" alt="Product Image">
                        <div class="overlay gradient-border"></div>
                        <div class="actions">
                            <a href="/cart" class="icon-btn"><i class="far fa-cart-plus"></i></a>
                            <a href="/wishlist" class="icon-btn"><i class="fas fa-heart"></i></a>
                            <a href="#QuickView" class="icon-btn popup-content"><i class="fas fa-eye"></i></a>
                        </div>
                    </div>
                    <div class="product-content">
                        <h3 class="product-title"><a href="/shop_Details">Gaming Computer</a></h3>
                        <span class="price">$30.85</span>
                        <!-- <div class="woocommerce-product-rating">
                    <span class="count">(120 Reviews)</span>
                    <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                        <span>Rated <strong class="rating">5.00</strong> out of 5 based on <span class="rating">1</span> customer rating</span>
                    </div>
                </div> -->
                    </div>
                </div>
            </div>

        </div>
        <div class="th-pagination text-center pt-50">
            <ul>
                <li><a href="/blog"><span class="btn-border"></span> 1</a></li>
                <li><a href="/blog"><span class="btn-border"></span> 2</a></li>
                <li><a href="/blog"><span class="btn-border"></span> 3</a></li>
                <li><a href="/blog"><span class="btn-border"></span><i class="far fa-arrow-right"></i></a></li>
            </ul>
        </div>
    </div>
</section>
@endsection