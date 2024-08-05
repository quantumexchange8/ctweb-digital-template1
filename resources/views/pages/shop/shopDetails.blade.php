@extends('layout.master')

@section('content')
<div class="breadcumb-wrapper " data-bg-src="assets/img/bg/breadcumb-bg.jpg">
    <div class="container">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">Shop Details</h1>
            <ul class="breadcumb-menu">
                <li><a href="/home_Esports">Home</a></li>
                <li>Shop Details</li>
            </ul>
        </div>
    </div>
</div><!--==============================
Product Details
==============================-->
<section class="product-details space-top space-extra-bottom">
    <div class="container">
        <div class="row gx-60">
            <div class="col-lg-6">
                <div class="product-big-img">
                    <div class="img"><img src="assets/img/product/product_details_1_1.png" alt="Product Image"></div>
                </div>
            </div>
            <div class="col-lg-6 align-self-center">
                <div class="product-about">
                    <p class="price">$120.85<del>$150.99</del></p>
                    <h2 class="product-title">Microphone G9000</h2>
                    <div class="product-rating">
                        <div class="star-rating" role="img" aria-label="Rated 4.00 out of 5"><span style="width:100%">Rated <strong class="rating">4.00</strong> out of 5 based on <span class="rating">1</span> customer rating</span></div>
                        <a href="/shop_Details" class="woocommerce-review-link">(<span class="count">4</span> customer reviews)</a>
                    </div>
                    <p class="text">Prepare to embark on a sensory journey with the Bosco Apple, a fruit that transcends the ordinary and promises an unparalleled taste experience. These apples are nothing short of nature’s masterpiece, celebrated for their distinctive blend of flavors and their captivating visual allure.</p>
                    <div class="mt-2 link-inherit">
                        <p>
                            <strong class="text-white me-3">Availability:</strong>
                            <span class="stock in-stock"><i class="far fa-check-square me-2 ms-1"></i>In Stock</span>
                        </p>
                    </div>
                    <div class="actions">
                        <div class="quantity">
                            <input type="number" class="qty-input" step="1" min="1" max="100" name="quantity" value="1" title="Qty">
                            <button class="quantity-plus qty-btn"><i class="far fa-chevron-up"></i></button>
                            <button class="quantity-minus qty-btn"><i class="far fa-chevron-down"></i></button>
                        </div>
                        <button class="th-btn">Add to Cart <span class="icon"><i class="fa-solid fa-arrow-right ms-2"></i></span></button>
                        <a href="/wishlist" class="icon-btn"><i class="far fa-heart"></i></a>
                    </div>
                    <div class="product_meta">
                        <span class="sku_wrapper">SKU: <span class="sku">Wheel-fits-chevy-camaro</span></span>
                        <span class="posted_in">Category: <a href="/shop">Dresses & Bags</a></span>
                        <span>Tags: <a href="/shop">Product</a><a href="/shop">Bags</a></span>
                    </div>
                </div>
            </div>
        </div>
        <ul class="nav product-tab-style1" id="productTab" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link th-btn" id="description-tab" data-bs-toggle="tab" href="#description" role="tab" aria-controls="description" aria-selected="false">Product Description</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link th-btn active" id="reviews-tab" data-bs-toggle="tab" href="#reviews" role="tab" aria-controls="reviews" aria-selected="true">Customer Reviews</a>
            </li>
        </ul>
        <div class="tab-content" id="productTabContent">
            <div class="tab-pane fade" id="description" role="tabpanel" aria-labelledby="description-tab">
                <p class="mt-n2">Prepare to embark on a sensory journey with the Bosco Apple, a fruit that transcends the ordinary and promises an unparalleled taste experience. These apples are nothing short of nature’s masterpiece, celebrated for their distinctive blend of flavors and their captivating visual allure. Bosco Apples are a revelation for your taste buds. Their impeccable balance of sweetness and tartness creates a complex, layered taste profile that keeps you coming back for more. Each bite is a symphony of sweet and tangy notes, making these apples a gastronomic delight whether enjoyed fresh or as a key ingredient in your favorite culinary creations.</p>
                <p>The Bosco Apple is not just a fruit; it’s a work of art. Its striking, deep red skin is adorned with intricate speckles, making it a showstopper in the world of fruit aesthetics. Display these apples with pride in your kitchen, and you’ll undoubtedly draw admiration from all who see them. We take our commitment to the environment seriously. Bosco Apples are cultivated on eco-friendly orchards that prioritize sustainable farming practices. You can savor these apples knowing they are grown with respect for the planet, aligning with your values of environmental responsibility. Whether you’re a culinary aficionado or a casual home chef, Bosco Apples offer limitless possibilities in the kitchen. Slice them into a vibrant salad, transform them into mouthwatering pies, or blend them into wholesome applesauce. The culinary canvas is yours to paint with these versatile apples.</p>
            </div>
            <div class="tab-pane fade show active" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                <div class="woocommerce-Reviews">
                    <div class="th-comments-wrap ">
                        <ul class="comment-list">
                            <li class="review th-comment-item">
                                <div class="th-post-comment">
                                    <div class="comment-avater">
                                        <img src="assets/img/blog/comment-author-1.jpg" alt="Comment Author">
                                    </div>
                                    <div class="comment-content">
                                        <h4 class="name">Adam Jhon</h4>
                                        <span class="commented-on"><i class="far fa-calendar"></i>22 April, 2024</span>
                                        <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                                            <span style="width:100%">Rated <strong class="rating">5.00</strong> out of 5 based on <span class="rating">1</span> customer rating</span>
                                        </div>
                                        <p class="text">This product is very much qualityful and I love this working system and speed.</p>
                                    </div>
                                </div>
                            </li>
                            <li class="review th-comment-item">
                                <div class="th-post-comment">
                                    <div class="comment-avater">
                                        <img src="assets/img/blog/comment-author-2.jpg" alt="Comment Author">
                                    </div>
                                    <div class="comment-content">
                                        <h4 class="name">Jusctin Dacon</h4>
                                        <span class="commented-on"><i class="far fa-calendar"></i>26 April, 2024</span>
                                        <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                                            <span style="width:100%">Rated <strong class="rating">5.00</strong> out of 5 based on <span class="rating">1</span> customer rating</span>
                                        </div>
                                        <p class="text">They delivered the product in a few time. Product quality is also very good.</p>
                                    </div>
                                </div>
                            </li>
                            <li class="review th-comment-item">
                                <div class="th-post-comment">
                                    <div class="comment-avater">
                                        <img src="assets/img/blog/comment-author-3.jpg" alt="Comment Author">
                                    </div>
                                    <div class="comment-content">
                                        <h4 class="name">Jacklin July</h4>
                                        <span class="commented-on"><i class="far fa-calendar"></i>26 April, 2024</span>
                                        <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                                            <span style="width:100%">Rated <strong class="rating">5.00</strong> out of 5 based on <span class="rating">1</span> customer rating</span>
                                        </div>
                                        <p class="text">Their product and service is very satisfying. I highly recommend their services.</p>
                                    </div>
                                </div>
                            </li>
                            <li class="review th-comment-item">
                                <div class="th-post-comment">
                                    <div class="comment-avater">
                                        <img src="assets/img/blog/comment-author-4.jpg" alt="Comment Author">
                                    </div>
                                    <div class="comment-content">
                                        <h4 class="name">Adison Smith</h4>
                                        <span class="commented-on"><i class="far fa-calendar"></i>26 April, 2024</span>
                                        <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                                            <span style="width:100%">Rated <strong class="rating">5.00</strong> out of 5 based on <span class="rating">1</span> customer rating</span>
                                        </div>
                                        <p class="text">I am just in love with this product. Their service is also very good you can also try.</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div> <!-- Comment Form -->
                    <div class="th-comment-form ">
                        <div class="form-title">
                            <h3 class="blog-inner-title ">Add a review</h3>
                        </div>
                        <div class="row">
                            <div class="form-group rating-select d-flex align-items-center">
                                <label>Your Rating</label>
                                <p class="stars">
                                    <span>
                                        <a class="star-1" href="#">1</a>
                                        <a class="star-2" href="#">2</a>
                                        <a class="star-3" href="#">3</a>
                                        <a class="star-4" href="#">4</a>
                                        <a class="star-5" href="#">5</a>
                                    </span>
                                </p>
                            </div>
                            <div class="col-12 form-group style-border">
                                <textarea placeholder="Write a Message" class="form-control"></textarea>
                                <i class="far fa-pencil-alt"></i>
                            </div>
                            <div class="col-md-6 form-group style-border">
                                <input type="text" placeholder="Your Name" class="form-control">
                                <i class="far fa-user"></i>
                            </div>
                            <div class="col-md-6 form-group style-border">
                                <input type="text" placeholder="Your Email" class="form-control">
                                <i class="far fa-envelope"></i>
                            </div>
                            <div class="col-12 form-group">
                                <input id="reviewcheck" name="reviewcheck" type="checkbox">
                                <label for="reviewcheck">Save my name, email, and website in this browser for the next time I comment.<span class="checkmark"></span></label>
                            </div>
                            <div class="col-12 form-group mb-0">
                                <button class="th-btn">Post Review <span class="icon"><i class="fa-solid fa-arrow-right ms-2"></i></span></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--==============================
    Related Product  
    ==============================-->
        <div class="space-extra-top mb-30">
            <div class="row justify-content-between align-items-center">
                <div class="col-md-auto">
                    <h2 class="sec-title text-center">Related Products</h2>
                </div>
                <div class="col-md d-none d-sm-block">
                    <hr class="title-line">
                </div>
                <div class="col-md-auto d-none d-md-block">
                    <div class="sec-btn">
                        <div class="icon-box">
                            <button data-slider-prev="#productSlider1" class="slider-arrow default"><i class="far fa-arrow-left"></i></button>
                            <button data-slider-next="#productSlider1" class="slider-arrow default"><i class="far fa-arrow-right"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper th-slider has-shadow" id="productSlider1" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"2"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"4"}}}'>
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
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


                    <div class="swiper-slide">
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


                    <div class="swiper-slide">
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


                    <div class="swiper-slide">
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


                    <div class="swiper-slide">
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


                    <div class="swiper-slide">
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


                    <div class="swiper-slide">
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


                    <div class="swiper-slide">
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

                </div>
            </div>
            <div class="d-block d-md-none mt-40 text-center">
                <div class="icon-box">
                    <button data-slider-prev="#productSlider1" class="slider-arrow default"><i class="far fa-arrow-left"></i></button>
                    <button data-slider-next="#productSlider1" class="slider-arrow default"><i class="far fa-arrow-right"></i></button>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection