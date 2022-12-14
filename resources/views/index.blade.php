@include('layouts.catalog.header')



<div id="app">
    <example-component :featured_items="{{ json_encode($featured_items) }}" />
</div>

<section>
    <div class="kids-winter">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-12 col-xs-12 kids">
                    <div class="kids-st">
                        <div class="owl-carousel owl-theme owl-cate v2 js-owl-cate-hp1">
                            <div class="shop-now hp1">
                                <img src="images/img80.jpg" alt="">
                                <h4>Kids Winter   <span>Jacket,<br>
										Coat & Sweater</span></h4>
                                <p>It is a long established fact that a reader will be distracted by the<br>
                                    readable content of a page when looking at its layout</p>
                                <a href="">Shop now</a>
                            </div>
                            <img src="images/img85.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12">
                    <div class="backpack img81">
                        <a href="" class="hover-images"><img src="images/img81.jpg" alt=""></a>
                        <div class="pos">
                            <p>New Styles</p>
                            <h4 class="st-font">Backpack</h4>
                            <span>2018</span>
                        </div>
                    </div>
                    <div class="backpack">
                        <a href="" class="hover-images"><img src="images/img82.jpg" alt=""></a>
                        <div class="pos-st2">
                            <h4>Sale <span>50%</span> off</h4>
                            <p>This weekend only</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Featured -->
    <div class="featured-homepage1">
        <div class="container">
            <div class="product-related hp1 featured-home1">
                <div class="title-pro-v1 hp1">
                    <h3 class="related-title text-center hp1">Featured</h3>
                    <p><a href="" class="view">View All Products<i class="fa fa-angle-right" aria-hidden="true"></i></a></p>
                </div>
                <div class="owl-carousel owl-theme owl-cate v2 js-owl-cate-feat owl-feat-hp1">
                    {{--  FEATURED --}}

{{--                    {{ dd($featured_items) }}--}}

                    @foreach($featured_items as $key => $item)

                    <div class="product-item pro-v1 home1 ">
                        <div class="product-img product-img-home3">
                            <a href="{{ $item->slug }}">
                                <img src="{{ $item->image }}" alt="" class="img-responsive">
                                <i class="fa fa-arrows" aria-hidden="true"></i><span class="quick">Quick view</span>
                            </a>
                            <div class="sale-img shop1 shop2">
                                <div class="before shop1 v2 pro-v1 hp1 featured-before before-home1 bf-featured-hp1"></div>
                            </div>
                            <div class="ribbon zoa-hot shop-v1 hp1 featured-sales"><span>New</span></div>
                            <div class="product-button-group hp1">
                                <a href="#" class="zoa-btn zoa-quickview">
                                    <span class="fa fa-shopping-bag"></span>
                                </a>
                                <a href="#" class="zoa-btn zoa-wishlist">
                                    <span class="fa fa-balance-scale"></span>
                                </a>
                                <a href="#" class="zoa-btn zoa-addcart">
                                    <span class="fa fa-heart "></span>
                                </a>
                            </div>
                        </div>
                        <div class="sale-para2 shop-1 pro-v1 hp2-para home1">
                            <p><a href="{{ $item->slug }}">{{ $item->name }}</a></p>
                            <div class="star-icons">
                                <ul>
                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                    <li class="review"><a class="view" href=""><em>6 Review(s)</em></a></li>
                                </ul>
                            </div>
                            <div class="review-hp1">
                                <p>{{ $item->price }} $</p>
                                <del>{{ $item->price }} $</del>
                            </div>
                        </div>
                    </div>

                    @endforeach

                </div>
            </div>
        </div>
    </div>
    <!-- Banner -->
    <div class="banner-homepage1">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-8 col-xs-12 banner">
                    <div class="banner-right">
                        <img src="images/banner.png" alt="">
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12 banner">
                    <div class="banner-right">
                        <img src="images/banner2.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bestseller -->
    <div class="bestseller">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-12 col-xs-12">
                    <div class="product-related best">
                        <div class="title-pro-v1 hp1">
                            <h3 class="related-title text-center hp1 best">Bestseller</h3>
                            <p><a href="" class="view">View All Products<i class="fa fa-angle-right" aria-hidden="true"></i></a></p>
                        </div>
                        <div class="owl-carousel owl-theme owl-cate v2 js-owl-cate-bestseller owl-best-hp1">
                            <div class="item">
                                <div class="best-seller">
                                    <div class="img-bestseller">
                                        <a href="" class=" hover-img-home1"><img src="images/img50.jpg" alt=""></a>
                                        <div class="sale-img shop1 shop2 st-v2">
                                            <div class="before shop1 v2 pro-v1 st-v2 hp1 best"></div>
                                        </div>
                                        <div class="ribbon zoa-hot shop-v1 v2 hp1 best-seller"><span>-25%</span></div>
                                    </div>
                                    <div class="para-best-home1">
                                        <h4><a href="">Animal Print Sweatshirt</a></h4>
                                        <ul>
                                            <li><a href=""><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href=""><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href=""><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href=""><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href=""><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li class="span"><em>6 Review(s)</em></li>
                                        </ul>
                                        <p>$36.00</p>
                                        <del>$42.00</del><br>
                                        <a href=""><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
                                        <a href=""><i class="fa fa-balance-scale" aria-hidden="true"></i></a>
                                        <a href=""><i class="fa fa-heart" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                                <div class="best-seller">
                                    <div class="img-bestseller">
                                        <a href="" class=" hover-img-home1"><img class="st-img-best" src="images/img99.jpg" alt=""></a>
                                        <div class="before shop1 v2 pro-v1 best"></div>
                                        <div class="ribbon zoa-hot shop-v1 v2 hp1 best-seller"><span>-25%</span></div>
                                    </div>
                                    <div class="para-best-home1">
                                        <h4><a href="">Animal Print Sweatshirt</a></h4>
                                        <ul>
                                            <li><a href=""><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href=""><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href=""><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href=""><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href=""><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li class="span"><em>6 Review(s)</em></li>
                                        </ul>
                                        <p>$36.00</p>
                                        <del>$42.00</del><br>
                                        <a href=""><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
                                        <a href=""><i class="fa fa-balance-scale" aria-hidden="true"></i></a>
                                        <a href=""><i class="fa fa-heart" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="best-seller">
                                    <div class="img-bestseller">
                                        <a href="" class=" hover-img-home1"><img src="images/img52.jpg" alt=""></a>
                                        <div class="sale-img shop1 shop2 st-v2">
                                            <div class="before shop1 v2 pro-v1 st-v2 hp1 best"></div>
                                        </div>
                                        <div class="ribbon zoa-hot shop-v1 v2 hp1 best-seller st-color-home1"><span>-25%</span></div>
                                    </div>
                                    <div class="para-best-home1">
                                        <h4><a href="">Contrasting Dungarees With Craces</a></h4>
                                        <ul>
                                            <li><a href=""><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href=""><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href=""><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href=""><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href=""><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li class="span"><em>6 Review(s)</em></li>
                                        </ul>
                                        <p>$36.00</p>
                                        <del>$42.00</del><br>
                                        <a href=""><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
                                        <a href=""><i class="fa fa-balance-scale" aria-hidden="true"></i></a>
                                        <a href=""><i class="fa fa-heart" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                                <div class="best-seller">
                                    <div class="img-bestseller">
                                        <a href="" class=" hover-img-home1"><img src="images/img59.jpg" alt=""></a>
                                        <div class="sale-img shop1 shop2 st-v2">
                                            <div class="before shop1 v2 pro-v1 st-v2 hp1 best"></div>
                                        </div>
                                        <div class="ribbon zoa-hot shop-v1 v2 hp1 best-seller"><span>-25%</span></div>
                                    </div>
                                    <div class="para-best-home1">
                                        <h4><a href="">Animal Print Sweatshirt</a></h4>
                                        <ul>
                                            <li><a href=""><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href=""><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href=""><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href=""><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href=""><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li class="span"><em>6 Review(s)</em></li>
                                        </ul>
                                        <p>$36.00</p>
                                        <del>$42.00</del><br>
                                        <a href=""><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
                                        <a href=""><i class="fa fa-balance-scale" aria-hidden="true"></i></a>
                                        <a href=""><i class="fa fa-heart" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12">
                    <div class="monial">
                        <div class="title-pro-v1 hp1">
                            <h3 class="related-title text-center hp1">Testimonial</h3>
                        </div>
                        <div class="owl-carousel owl-theme">
                            <div class="item best">
                                <a href=""><img class="img-st1" src="images/img90.png" alt=""></a>
                                <a href=""><h4>JoAnne Theodore<br><em>Graphic Design</em></h4></a>
                                <img class="img-st" src="images/img91.png" alt="">
                                <p><em>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</em></p>
                            </div>
                            <div class="item best">
                                <a href=""><img class="img-st1" src="images/img90.png" alt=""></a>
                                <a href=""><h4>JoAnne Theodore<br><em>Graphic Design</em></h4></a>
                                <img class="img-st" src="images/img91.png" alt="">
                                <p><em>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</em></p>
                            </div>
                            <div class="item best">
                                <a href=""><img class="img-st1" src="images/img90.png" alt=""></a>
                                <a href=""><h4>JoAnne Theodore<br><em>Graphic Design</em></h4></a>
                                <img class="img-st" src="images/img91.png" alt="">
                                <p><em>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</em></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- On-Sale -->
    <div class="onsale">
        <div class="container">
            <div class="product-related onsale">
                <div class="title-pro-v1">
                    <h3 class="related-title text-center onsale-home1">On Sale !</h3>
                    <p><a href="" class="view
								">View All Products<i class="fa fa-angle-right" aria-hidden="true"></i></a></p>
                </div>
                <div class="owl-carousel owl-theme owl-cate v2 js-owl-cate-sales-hp1 owl-onsale">
                    123
                    <div class="product-item pro-v1 home1">
                        <div class="product-img product-img-home3">
                            <a  href=""><img src="images/img46.jpg" alt="" class="img-responsive"></a>
                            <div class="sale-img shop1 shop2 st-v2">
                                <div class="before shop1 v2 pro-v1 st-v2 hp1 before-home1 bf-onsales-hp1"></div>
                            </div>
                            <div class="ribbon zoa-hot shop-v1 v2 hp1 before-home1"><span>-25%</span></div>
                            <div class="product-button-group hp1 onsale-home1">
                                <a href="#" class="zoa-btn zoa-quickview stwh-onsales-home1">
                                    <span class="fa fa-shopping-bag"></span>
                                </a>
                                <a href="#" class="zoa-btn zoa-wishlist stwh-onsales-home1">
                                    <span class="fa fa-balance-scale"></span>
                                </a>
                                <a href="#" class="zoa-btn zoa-addcart stwh-onsales-home1">
                                    <span class="fa fa-heart "></span>
                                </a>
                            </div>
                        </div>
                        <div class="sale-para2 shop-1 pro-v1 hp2-para home1">
                            <p><a href="#">Animal Print Sweatshirt</a></p>
                            <div class="star-icons">
                                <ul>
                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                    <li class="review"><a class="view" href=""><em>6 Review(s)</em></a></li>
                                </ul>
                            </div>
                            <div class="review-hp1">
                                <p>$36.00</p>
                                <del>$42.00</del>
                            </div>
                        </div>
                    </div>
                    <div class="product-item pro-v1 home1">
                        <div class="product-img product-img-home3">
                            <a  href=""><img src="images/img83.jpg" alt="" class="img-responsive"></a>
                            <div class="sale-img shop1 shop2 st-v2">
                                <div class="before shop1 v2 pro-v1 st-v2 hp1 before-home1 bf-onsales-hp1"></div>
                            </div>
                            <div class="ribbon zoa-hot shop-v1 v2 hp1"><span>-25%</span></div>
                            <div class="product-button-group hp1 onsale-home1">
                                <a href="#" class="zoa-btn zoa-quickview stwh-onsales-home1">
                                    <span class="fa fa-shopping-bag"></span>
                                </a>
                                <a href="#" class="zoa-btn zoa-wishlist stwh-onsales-home1">
                                    <span class="fa fa-balance-scale"></span>
                                </a>
                                <a href="#" class="zoa-btn zoa-addcart stwh-onsales-home1">
                                    <span class="fa fa-heart "></span>
                                </a>
                            </div>
                        </div>
                        <div class="sale-para2 shop-1 pro-v1 hp2-para home1">
                            <p><a href="#">Skirt With Coloured Top-<br>stitching</a></p>
                            <div class="star-icons">
                                <ul>
                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                    <li class="review"><a class="view" href=""><em>6 Review(s)</em></a></li>
                                </ul>
                            </div>
                            <div class="review-hp1">
                                <p>$36.00</p>
                                <del>$42.00</del>
                            </div>
                        </div>
                    </div>
                    <div class="product-item pro-v1 home1">
                        <div class="product-img product-img-home3">
                            <a  href=""><img src="images/img100.jpg" alt="" class="img-responsive"></a>
                            <div class="sale-img shop1 shop2 st-v2">
                                <div class="before shop1 v2 pro-v1 st-v2 hp1 before-home1 bf-onsales-hp1"></div>
                            </div>
                            <div class="ribbon zoa-hot shop-v1 v2 hp1"><span>-25%</span></div>
                            <div class="product-button-group hp1 onsale-home1">
                                <a href="#" class="zoa-btn zoa-quickview stwh-onsales-home1">
                                    <span class="fa fa-shopping-bag"></span>
                                </a>
                                <a href="#" class="zoa-btn zoa-wishlist stwh-onsales-home1">
                                    <span class="fa fa-balance-scale"></span>
                                </a>
                                <a href="#" class="zoa-btn zoa-addcart stwh-onsales-home1">
                                    <span class="fa fa-heart "></span>
                                </a>
                            </div>
                        </div>
                        <div class="sale-para2 shop-1 pro-v1 hp2-para home1">
                            <p><a href="#">Fabric Plimsolls With Bow<br> Detail</a></p>
                            <div class="star-icons">
                                <ul>
                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                    <li class="review"><a class="view" href=""><em>6 Review(s)</em></a></li>
                                </ul>
                            </div>
                            <div class="review-hp1">
                                <p>$36.00</p>
                                <del>$42.00</del>
                            </div>
                        </div>
                    </div>
                    <div class="product-item pro-v1 home1">
                        <div class="product-img product-img-home3">
                            <a  href=""><img src="images/img46.jpg" alt="" class="img-responsive"></a>
                            <div class="sale-img shop1 shop2 st-v2">
                                <div class="before shop1 v2 pro-v1 st-v2 hp1 before-home1 bf-onsales-hp1"></div>
                            </div>
                            <div class="ribbon zoa-hot shop-v1 v2 hp1 before-home1"><span>-25%</span></div>
                            <div class="product-button-group hp1 onsale-home1">
                                <a href="#" class="zoa-btn zoa-quickview stwh-onsales-home1">
                                    <span class="fa fa-shopping-bag"></span>
                                </a>
                                <a href="#" class="zoa-btn zoa-wishlist stwh-onsales-home1">
                                    <span class="fa fa-balance-scale"></span>
                                </a>
                                <a href="#" class="zoa-btn zoa-addcart stwh-onsales-home1">
                                    <span class="fa fa-heart "></span>
                                </a>
                            </div>
                        </div>
                        <div class="sale-para2 shop-1 pro-v1 hp2-para home1">
                            <p><a href="#">Animal Print Sweatshirt</a></p>
                            <div class="star-icons">
                                <ul>
                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                    <li class="review"><a class="view" href=""><em>6 Review(s)</em></a></li>
                                </ul>
                            </div>
                            <div class="review-hp1">
                                <p>$36.00</p>
                                <del>$42.00</del>
                            </div>
                        </div>
                    </div>
                    <div class="product-item pro-v1 home1">
                        <div class="product-img product-img-home3">
                            <a  href=""><img src="images/img62.jpg" alt="" class="img-responsive"></a>
                            <div class="sale-img shop1 shop2 st-v2">
                                <div class="before shop1 v2 pro-v1 st-v2 hp1 before-home1 bf-onsales-hp1"></div>
                            </div>
                            <div class="ribbon zoa-hot shop-v1 v2 hp1 "><span>-25%</span></div>
                            <div class="product-button-group hp1 onsale-home1">
                                <a href="#" class="zoa-btn zoa-quickview stwh-onsales-home1">
                                    <span class="fa fa-shopping-bag"></span>
                                </a>
                                <a href="#" class="zoa-btn zoa-wishlist stwh-onsales-home1">
                                    <span class="fa fa-balance-scale"></span>
                                </a>
                                <a href="#" class="zoa-btn zoa-addcart stwh-onsales-home1">
                                    <span class="fa fa-heart "></span>
                                </a>
                            </div>
                        </div>
                        <div class="sale-para2 shop-1 pro-v1 hp2-para home1">
                            <p><a href="#">Animal Print Sweatshirt</a></p>
                            <div class="star-icons">
                                <ul>
                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                    <li class="review"><a class="view" href=""><em>6 Review(s)</em></a></li>
                                </ul>
                            </div>
                            <div class="review-hp1">
                                <p>$36.00</p>
                                <del>$42.00</del>
                            </div>
                        </div>
                    </div>
                    <div class="product-item pro-v1 home1">
                        <div class="product-img product-img-home3">
                            <a  href=""><img src="images/img63.jpg" alt="" class="img-responsive"></a>
                            <div class="sale-img shop1 shop2 st-v2">
                                <div class="before shop1 v2 pro-v1 st-v2 hp1 before-home1 bf-onsales-hp1"></div>
                            </div>
                            <div class="ribbon zoa-hot shop-v1 v2 hp1"><span>-25%</span></div>
                            <div class="product-button-group hp1 onsale-home1">
                                <a href="#" class="zoa-btn zoa-quickview stwh-onsales-home1">
                                    <span class="fa fa-shopping-bag"></span>
                                </a>
                                <a href="#" class="zoa-btn zoa-wishlist stwh-onsales-home1">
                                    <span class="fa fa-balance-scale"></span>
                                </a>
                                <a href="#" class="zoa-btn zoa-addcart stwh-onsales-home1">
                                    <span class="fa fa-heart "></span>
                                </a>
                            </div>
                        </div>
                        <div class="sale-para2 shop-1 pro-v1 hp2-para home1">
                            <p><a href="#">Animal Print Sweatshirt</a></p>
                            <div class="star-icons">
                                <ul>
                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                    <li class="review"><a class="view" href=""><em>6 Review(s)</em></a></li>
                                </ul>
                            </div>
                            <div class="review-hp1">
                                <p>$36.00</p>
                                <del>$42.00</del>
                            </div>
                        </div>
                    </div>
                    <div class="product-item pro-v1 home1">
                        <div class="product-img product-img-home3">
                            <a  href=""><img src="images/img60.jpg" alt="" class="img-responsive"></a>
                            <div class="sale-img shop1 shop2 st-v2">
                                <div class="before shop1 v2 pro-v1 st-v2 hp1 before-home1 bf-onsales-hp1"></div>
                            </div>
                            <div class="ribbon zoa-hot shop-v1 v2 hp1"><span>-25%</span></div>
                            <div class="product-button-group hp1 onsale-home1">
                                <a href="#" class="zoa-btn zoa-quickview stwh-onsales-home1">
                                    <span class="fa fa-shopping-bag"></span>
                                </a>
                                <a href="#" class="zoa-btn zoa-wishlist stwh-onsales-home1">
                                    <span class="fa fa-balance-scale"></span>
                                </a>
                                <a href="#" class="zoa-btn zoa-addcart stwh-onsales-home1">
                                    <span class="fa fa-heart "></span>
                                </a>
                            </div>
                        </div>
                        <div class="sale-para2 shop-1 pro-v1 hp2-para home1">
                            <p><a href="#">Animal Print Sweatshirt</a></p>
                            <div class="star-icons">
                                <ul>
                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                    <li class="review"><a class="view" href=""><em>6 Review(s)</em></a></li>
                                </ul>
                            </div>
                            <div class="review-hp1">
                                <p>$36.00</p>
                                <del>$42.00</del>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blogs -->
    <div class="blogs">
        <div class="container">
            <div class="title-pro-v1 hp1">
                <h3 class="related-title text-center hp1">Blogs</h3>
            </div>
            <div class="owl-carousel owl-theme owl-cate v2 js-owl-cate-blogs">
                <div class="blog-v3 blog-home1">
                    <div class="img-blog-v2 v3 home-1 img-blog-home1">
                        <a href=""><img class="img-home-1" src="images/img86.jpg" alt="img"></a>
                    </div>
                    <div class="img-title2 v2 v3">
                        <div class="kid-all v2 v3 hp1">
                            <div class="para blog-v2 v3 para-blog-hp3">
                                <h4>
                                    <a href="#">Our Kindergarten Anniversarty</a>
                                </h4>
                                <div class="img-title2 blog-v2 v3 hp1">
                                    <a href="#"><img src="images/img4.png" alt="img"></a>
                                    <p><em>Pixel Creative</em></p>
                                </div>
                                <div class="img-title3 v2 v3 hp1">
                                    <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i></a>
                                    <p><em>Jan 30, 2018</em></p>
                                </div>
                                <div class="para2 v2 v3 hp1">
                                    <p>The perfect class for your child with the best staff and best teachers...</p>
                                </div>
                                <div class="icon v2 v3 hp1">
                                    <a href="#"><i class="fa fa-comments" aria-hidden="true"></i></a>
                                    <p><em>123 Comments</em></p>
                                </div>
                                <div class="icon v2 v3 hp1">
                                    <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></a>
                                    <p><em>98 likes</em></p>
                                </div>
                                <div class="read v2 v3 read-hp2 read-home1">
                                    <p><em><a href="#">read more</a></em></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="blog-v3 blog-home1">
                    <div class="img-blog-v2 v3 home1 img-blog-home1">
                        <a href=""><img class="img-home-1" src="images/img87.jpg" alt="img"></a>
                    </div>
                    <div class="img-title2 v2 v3">
                        <div class="kid-all v2 v3 hp1">
                            <div class="para blog-v2 v3 para-blog-hp3">
                                <h4>
                                    <a href="#">Our Kindergarten Anniversarty</a>
                                </h4>
                                <div class="img-title2 blog-v2 v3 hp1">
                                    <a href="#"><img src="images/img4.png" alt="img"></a>
                                    <p><em>Pixel Creative</em></p>
                                </div>
                                <div class="img-title3 v2 v3 hp1">
                                    <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i></a>
                                    <p><em>Jan 30, 2018</em></p>
                                </div>
                                <div class="para2 v2 v3 hp1 hp1">
                                    <p>The perfect class for your child with the best staff and best teachers...</p>
                                </div>
                                <div class="icon v2 v3 hp1">
                                    <a href="#"><i class="fa fa-comments" aria-hidden="true"></i></a>
                                    <p><em>123 Comments</em></p>
                                </div>
                                <div class="icon v2 v3 hp1">
                                    <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></a>
                                    <p><em>98 likes</em></p>
                                </div>
                                <div class="read v2 v3 read-hp2 read-home1">
                                    <p><em><a href="#">read more</a></em></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Newsletter -->
    <div class="newsletter hp1">
        <h4>newsletter</h4>
        <div class="background-home1">
            <div class="container">
                <div class="newsletter-2">
                    <p><em>Subscribe to the Miukid mailing list to receive updates on new arrivals, special offers<br>
                            and other discount information.</em></p>
                    <form class="form_newsletter hp1" action="#" method="post">
                        <input type="email" value="" placeholder="Enter your emaill" name="EMAIL" id="mail" class="newsletter-input form-control">
                        <button id="subscribe" class="button_mini zoa-btn button bt-form-home1" type="submit">
                            Subscribe
                        </button>
                    </form>
                </div>
                <div class="product-item pro-v1 news newsletter-hp1">
                    <div class="product-img  news news-home1">
                        <a class="hover-images" href=""><img src="images/img88.jpg" alt="" class="img-responsive"></a>
                        <div class="product-button-group news">
                            <a href=""><img src="images/img89.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('layouts.catalog.footer')
