import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex)

// modules
import categories from './modules/categories'

export default new Vuex.Store({
    modules: {
        categories
    }
})