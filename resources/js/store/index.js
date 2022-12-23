import Vue from 'vue';
import Vuex from 'vuex';

Vue.use(Vuex);

export const store = new Vuex.Store({
    state: {
        cart: [],
        cartCount: 0,
        CartPriceAll: 0,
    },
    getters: {},
    mutations: {

        addToCart(state, item){

            let found = state.cart.find(product => product.id == item.id);

            if (found) {

                found.quantity++;

            } else {

                state.cart.push(item);
                Vue.set(item, 'quantity', 1);

            }


            store.commit('totalPrice');
            store.commit('cartCount');

        },

        totalPrice(state){

            console.log( state)

            let total = 0;

            for(let item of state.cart){

                let item_price = item.price * item.quantity;

                total += item_price;
            }

            state.CartPriceAll = total.toFixed(2);

        },

        cartCount(state){

            let total = 0;

            for(let item of state.cart){



                total += Number(item.quantity);
            }

            state.cartCount = total

        }
    },
    actions: {},
});
