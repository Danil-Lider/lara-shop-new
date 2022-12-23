/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */


import FeaturedItemsComponent from "./components/FeaturedItemsComponent";

import CartComponent from "./components/CartComponent";

import ItemComponent from "./components/ItemComponent";



require('./bootstrap');

window.Vue = require('vue').default;



import {store} from './store/index';

Vue.prototype.$store = store;

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

// export const bus = new Vue();


// Vue.component('featured-items-component', require('./components/FeaturedItemsComponent.vue').default);
// Vue.component('cart-component', require('./components/CartComponent.vue').default);
// Vue.component('item-component', require('./components/ItemComponent.vue').default);

const app = new Vue({
    el: '#app',
    store: store,
    components: {
        FeaturedItemsComponent,
        ItemComponent
    }
});

const cart = new Vue({
    el: '#cart',
    store: store,
    components: {
        CartComponent
    }
});

//
// var item = {
//     title: 'lo2131l',
// }

// store.commit('addToCart', item);

// ALSO

// new Vue({
//     el: '#cart',
//     components: {
//         CartComponent: CartComponent,
//     }
// })
