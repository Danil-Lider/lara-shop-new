<template>

    <div>
    <!-- Featured -->
    <div class="featured-homepage1">
        <div class="container">
            <div class="product-related hp1 featured-home1">
                <div class="title-pro-v1 hp1">
                    <h3 class="related-title text-center hp1">Featured</h3>
                    <p><a href="" class="view">View All Products<i class="fa fa-angle-right" aria-hidden="true"></i></a></p>
                </div>

                    <item-component v-bind:featured_items="featured_items"></item-component>

            </div>
        </div>
    </div>

    </div>

</template>

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
<script>
    import ItemComponent from "./ItemComponent";
    export default {
        components: {ItemComponent},
        data: function (){
            return {};
        },
        props:[
            'featured_items'
        ],
        mounted() {
        },
        methods: {
        },
    }
</script>
