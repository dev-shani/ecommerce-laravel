@extends('user.layouts.layout')

@section('content')
     <!--Body Content-->
     <div id="page-content">
        <!--MainContent-->
        <div id="MainContent" class="main-content" role="main">
          <!--Breadcrumb-->
          <div class="bredcrumbWrap">
            <div class="container breadcrumbs">
              <a href="index.html" title="Back to the home page">Home</a
              ><span aria-hidden="true">›</span
              ><span>Product details</span>
            </div>
          </div>
          <!--End Breadcrumb-->

          <div
            id="ProductSection-product"
            class="product__container prstyle1 container"
          >
            <!--product-single-->
            <div class="product-single">
              <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                  <div class="product-details-img">
                    <!-- <div class="product-thumb">
                      <div
                        id="gallery"
                        class="product-dec-slider-2 product-tab-left"
                      >
                        <a
                          data-image="assets/images/product-detail-page/camelia-reversible-big1.jpg"
                          data-zoom-image="assets/images/product-detail-page/camelia-reversible-big1.jpg"
                          class="slick-slide slick-cloned"
                          data-slick-index="-4"
                          aria-hidden="true"
                          tabindex="-1"
                        >
                          <img
                            class="blur-up lazyload"
                            data-src="assets/images/product-detail-page/camelia-reversible0.jpg"
                            src="assets/images/product-detail-page/camelia-reversible0.jpg"
                            alt=""
                          />
                        </a>
                        <a
                          data-image="assets/images/product-detail-page/camelia-reversible-big2.jpg"
                          data-zoom-image="assets/images/product-detail-page/camelia-reversible-big2.jpg"
                          class="slick-slide slick-cloned"
                          data-slick-index="-3"
                          aria-hidden="true"
                          tabindex="-1"
                        >
                          <img
                            class="blur-up lazyload"
                            data-src="assets/images/product-detail-page/camelia-reversible.jpg"
                            src="assets/images/product-detail-page/camelia-reversible.jpg"
                            alt=""
                          />
                        </a>
                        <a
                          data-image="assets/images/product-detail-page/camelia-reversible-big3.jpg"
                          data-zoom-image="assets/images/product-detail-page/camelia-reversible-big3.jpg"
                          class="slick-slide slick-cloned"
                          data-slick-index="-2"
                          aria-hidden="true"
                          tabindex="-1"
                        >
                          <img
                            class="blur-up lazyload"
                            data-src="assets/images/product-detail-page/camelia-reversible6.jpg"
                            src="assets/images/product-detail-page/camelia-reversible6.jpg"
                            alt=""
                          />
                        </a>
                        <a
                          data-image="assets/images/product-detail-page/camelia-reversible7-big.jpg"
                          data-zoom-image="assets/images/product-detail-page/camelia-reversible7-big.jpg"
                          class="slick-slide slick-cloned"
                          data-slick-index="-1"
                          aria-hidden="true"
                          tabindex="-1"
                        >
                          <img
                            class="blur-up lazyload"
                            data-src="assets/images/product-detail-page/camelia-reversible7.jpg"
                            src="assets/images/product-detail-page/camelia-reversible7.jpg"
                            alt=""
                          />
                        </a>
                        <a
                          data-image="assets/images/product-detail-page/camelia-reversible-big4.jpg"
                          data-zoom-image="assets/images/product-detail-page/camelia-reversible-big4.jpg"
                          class="slick-slide slick-cloned"
                          data-slick-index="0"
                          aria-hidden="true"
                          tabindex="-1"
                        >
                          <img
                            class="blur-up lazyload"
                            data-src="assets/images/product-detail-page/camelia-reversible8.jpg"
                            src="assets/images/product-detail-page/camelia-reversible8.jpg"
                            alt=""
                          />
                        </a>
                        <a
                          data-image="assets/images/product-detail-page/camelia-reversible-big5.jpg"
                          data-zoom-image="assets/images/product-detail-page/camelia-reversible-big5.jpg"
                          class="slick-slide slick-cloned"
                          data-slick-index="1"
                          aria-hidden="true"
                          tabindex="-1"
                        >
                          <img
                            class="blur-up lazyload"
                            data-src="assets/images/product-detail-page/camelia-reversible9.jpg"
                            src="assets/images/product-detail-page/camelia-reversible9.jpg"
                            alt=""
                          />
                        </a>
                        <a
                          data-image="assets/images/product-detail-page/camelia-reversible-big6.jpg"
                          data-zoom-image="assets/images/product-detail-page/camelia-reversible-big6.jpg"
                          class="slick-slide slick-cloned"
                          data-slick-index="2"
                          aria-hidden="true"
                          tabindex="-1"
                        >
                          <img
                            class="blur-up lazyload"
                            data-src="assets/images/product-detail-page/camelia-reversible1.jpg"
                            src="assets/images/product-detail-page/camelia-reversible1.jpg"
                            alt=""
                          />
                        </a>
                        <a
                          data-image="assets/images/product-detail-page/camelia-reversible-big7.jpg"
                          data-zoom-image="assets/images/product-detail-page/camelia-reversible-big7.jpg"
                          class="slick-slide slick-cloned"
                          data-slick-index="3"
                          aria-hidden="true"
                          tabindex="-1"
                        >
                          <img
                            class="blur-up lazyload"
                            data-src="assets/images/product-detail-page/camelia-reversible2.jpg"
                            src="assets/images/product-detail-page/camelia-reversible2.jpg"
                            alt=""
                          />
                        </a>
                        <a
                          data-image="assets/images/product-detail-page/camelia-reversible-big8.jpg"
                          data-zoom-image="assets/images/product-detail-page/camelia-reversible-big8.jpg"
                          class="slick-slide slick-cloned"
                          data-slick-index="4"
                          aria-hidden="true"
                          tabindex="-1"
                        >
                          <img
                            class="blur-up lazyload"
                            data-src="assets/images/product-detail-page/camelia-reversible3.jpg"
                            src="assets/images/product-detail-page/camelia-reversible3.jpg"
                            alt=""
                          />
                        </a>
                        <a
                          data-image="assets/images/product-detail-page/camelia-reversible-big9.jpg"
                          data-zoom-image="assets/images/product-detail-page/camelia-reversible-big9.jpg"
                          class="slick-slide slick-cloned"
                          data-slick-index="5"
                          aria-hidden="true"
                          tabindex="-1"
                        >
                          <img
                            class="blur-up lazyload"
                            data-src="assets/images/product-detail-page/camelia-reversible4.jpg"
                            src="assets/images/product-detail-page/camelia-reversible4.jpg"
                            alt=""
                          />
                        </a>
                        <a
                          data-image="assets/images/product-detail-page/camelia-reversible-big10.jpg"
                          data-zoom-image="assets/images/product-detail-page/camelia-reversible-big10.jpg"
                          class="slick-slide slick-cloned"
                          data-slick-index="6"
                          aria-hidden="true"
                          tabindex="-1"
                        >
                          <img
                            class="blur-up lazyload"
                            data-src="assets/images/product-detail-page/camelia-reversible5.jpg"
                            src="assets/images/product-detail-page/camelia-reversible5.jpg"
                            alt=""
                          />
                        </a>
                      </div>
                    </div> -->
                    <div class="zoompro-wrap product-zoom-right pl-20">
                      <div class="zoompro-span">
                        <img
                          class="blur-up lazyload zoompro"
                          data-zoom-image="{{asset("images/$product->img")}}"
                          alt=""
                          src="{{asset("images/$product->img")}}"
                        />
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                  <div class="product-single__meta">
                    <h1 class="product-single__title"><?= $product && $product->name ? $product->name : 'N/A' ?></h1>
                    <div class="product-nav clearfix">
                      <a href="#" class="next" title="Next"
                        ><i class="fa fa-angle-right" aria-hidden="true"></i
                      ></a>
                    </div>
                    <p
                      class="product-single__price product-single__price"
                    >
                    
                      <span
                        class="product-price__price  product-price__sale product-price__sale--single"
                      >
                        <span id="ProductPrice"
                          ><span class="money">£<?= $product && $product->price ? $product->price : 'N/A' ?></span></span
                        >
                      </span>
                    </p>
                  </div>
                  <div class="product-desc">
                    <h2 class="mb-2">Description</h2>
                    <p class="mb-4"><?= $product && $product->description ? $product->description : 'N/A' ?></p>
                  </div>
                  <form
                    method="post"
                    action="http://annimexweb.com/cart/add"
                    id="product_form_10508262282"
                    accept-charset="UTF-8"
                    class="product-form product-form hidedropdown"
                    enctype="multipart/form-data"
                  >
                    <div class="product-action clearfix">
                      <div class="product-form__item--quantity">
                        <div class="product-form__item--submit">
                          <button
                            type="button"
                            name="add"
                            class="btn product-form__cart-submit w-100"
                          >
                            <span>Add to cart</span>
                          </button>
                        </div>
                      </div>
                      
                    </div>
                    <!-- End Product Action -->
                  </form>

                </div>
              </div>
            </div>
            <!--End-product-single-->
            <!--Product Fearure-->
            <div class="prFeatures">
              <div class="row">
                <div class="col-12 col-sm-6 col-md-6 col-lg-3 feature">
                  <img
                    src="{{asset('user_assets/images/credit-card.png')}}"
                    alt="Safe Payment"
                    title="Safe Payment"
                  />
                  <div class="details">
                    <h3>Safe Payment</h3>
                    Pay with the world's most payment methods.
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-3 feature">
                  <img
                    src="{{asset('user_assets/images/shield.png')}}"
                    alt="Confidence"
                    title="Confidence"
                  />
                  <div class="details">
                    <h3>Confidence</h3>
                    Protection covers your purchase and personal data.
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-3 feature">
                  <img
                    src="{{asset('user_assets/images/worldwide.png')}}"
                    alt="Worldwide Delivery"
                    title="Worldwide Delivery"
                  />
                  <div class="details">
                    <h3>Worldwide Delivery</h3>
                    FREE &amp; fast shipping to over 200+ countries &amp;
                    regions.
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-3 feature">
                  <img
                    src="{{asset('user_assets/images/phone-call.png')}}"
                    alt="Hotline"
                    title="Hotline"
                  />
                  <div class="details">
                    <h3>Hotline</h3>
                    Talk to help line for your question on 4141 456 789, 4125
                    666 888
                  </div>
                </div>
              </div>
            </div>
            <!--End Product Fearure-->
            

          </div>
          <!--#ProductSection-product-->
        </div>
        <!--MainContent-->
      </div>
      <!--End Body Content-->

@endsection