import * as actions from '../../action-types'
import * as mutations from '../../mutation-types'
import Axios from 'axios'

export default {
    [actions.GET_BRANDS]({ commit }) {
        Axios.get('/api/brands')
        .then(res => {
            if(res.data.success){
                commit(mutations.SET_BRANDS, res.data.data)
            }
        }).catch(e => {
            console.log(e.response)
        })
    }
}