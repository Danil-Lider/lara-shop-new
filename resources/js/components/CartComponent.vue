<template>
    <div>

        <div class="cart-2">
            <div  v-for="item in items.items"  class="check-out  bd-bt">
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
</template>

<script>
    export default {
        data: function (){
            return {
                cart: {},
            }
        },
        props:[
            'items'
        ],
        mounted() {
            console.log('CART Component mounted.')
            console.log(this.items)
        },
        methods: {
        },
    }
</script>

<style>
    .check-out {
        display: block;
        height: 100px;
    }
</style>
