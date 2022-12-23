<template>
    <div>

        <div class="date3 dropdown">
            <div class="date mycart">
                <button  v-on:click="openCart()" class="fa fa-shopping-bag dropdown-toggle" type="button" data-toggle="dropdown">
                </button>
                <div class="dropdown-menu cart2 drop-home-1 check-out-home-1">


                <div class="cart-2">
                    <div  v-for="item in cart"  class="check-out  bd-bt">
                        <div class="img-cart">
                            <a href="#"><img width="85" height="85" v-bind:src="item.image"  alt="img"></a>
                        </div>
                        <div class="para-cart">
                            <p><a href="#">{{ item.name }}</a></p>
                            <br>
                            <h4>{{ item.price }} $</h4>
                            <del>{{ item.price }} $</del>
                            <a href="#"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>

                <div class="check-out2">
                    <div class="total">
                        <p>Total</p>
                        <span>$ 689.8</span>
                    </div>
                    <div class="check">
                        <a href="#">check out</a>
                    </div>
                </div>


                </div>
            </div>
            <div class="para-a a4">
                <h4><a href="#">My Cart.</a></h4>
                <p>{{ this.$store.state.cartCount }} </p>
                <span>/ ${{ this.$store.state.CartPriceAll }}</span>
            </div>
        </div>


    </div>
</template>

<script>
    export default {
        data: function (){
            return {
                cart: this.$store.state.cart,
            }
        },
        props:[
            'items'
        ],
        mounted() {

        },
        methods: {
            openCart: function (){
            }
        },
    }
</script>

<style>
    .check-out {
        display: block;
        height: 100px;
    }
</style>
