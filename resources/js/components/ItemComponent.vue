<template>
    <div class="owl-carousel owl-theme owl-cate v2 js-owl-cate-feat owl-feat-hp1">

        <div v-for="item in featured_items" class="product-item pro-v1 home1 ">
            <div class="product-img product-img-home3">
                <a href="#">
                    <img v-bind:src="item.image" alt="" class="img-responsive">
                    <i class="fa fa-arrows" aria-hidden="true"></i><span class="quick">Quick view</span>
                </a>
                <div class="sale-img shop1 shop2">
                    <div class="before shop1 v2 pro-v1 hp1 featured-before before-home1 bf-featured-hp1"></div>
                </div>
                <div class="ribbon zoa-hot shop-v1 hp1 featured-sales"><span>New</span></div>
                <div class="product-button-group hp1">



                    <a v-on:click="addInCart(item, $event)" class="zoa-btn zoa-quickview">
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
                <p><a  v-bind:href="item.slug">{{ item.name }}</a></p>
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
                    <p>{{ item.price }} $</p>
                    <del>{{ item.price }} $</del>
                </div>
            </div>
        </div>

    </div>
</template>

<script>

    export default {
        data: function (){
            return {};
        },
        props:[
            'featured_items'
        ],
        mounted() {
        },
        methods: {
            getCart: function (){
                axios.get('/cart').then( function (response){

                    console.log(response.data)

                })
            },
            addInCart: function (item, event){

                this.$store.commit('addToCart', item );

                event.preventDefault()


            }
        },
    }
</script>


<style>
.zoa-quickview {
    cursor:pointer;
}
.product-button-group {
    opacity: 1 !important;
    visibility: visible !important;
    bottom: -100% !important;
}

.zoa-btn {
    opacity: 1 !important;
    visibility: visible !important;
    -webkit-transform: translateY(-20px) !important;
    transform: translateY(-20px) !important;
}

.overlay-img {
    opacity: 1 !important;
}
</style>
