<template>
    <div class="x_panel">
        <div class="x_title">
            <h2>Create Product</h2>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <br />
            <form method="POST" action="" class="form-horizontal form-label-left">
                <div class="form-group row">
                    <label class="control-label col-md-2" for="">
                        Category
                        <span class="text-danger">*</span>
                    </label>
                    <div class="col-md-7">
                        <Select2 v-model="form.category_id" :options="categories" :settings="{ placeholder: 'Select Category'}"></Select2>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-md-2" for="">
                        Brand
                        <span class="text-danger">*</span>
                    </label>
                    <div class="col-md-7">
                        <Select2 v-model="form.brand_id" :options="brands" :settings="{ placeholder: 'Select Brands'}"></Select2>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-3 col-sm-3 offset-md-2">
                        <button type="submit" class="btn btn-sm btn-success">
                            <i class="fa fa-save"></i>
                            Submit
                        </button>
                        <a href="/products" class="btn btn-sm btn-secondary">
                            Back
                            <i class="fa fa-chevron-right" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</template>

<script>

    import store from '../store'
    import * as actions from '../store/action-types'
    import { mapGetters } from 'vuex'
    import Select2 from 'v-select2-component';

    export default{
        components: {Select2}, //declare select2
        data(){
            return {
                form: {
                    category_id : 0,
                    brand_id: 0
                }
            }
        },
        computed: {
            ...mapGetters({
                'categories': 'getCategories',
                'brands': 'getBrands'
            })
        },
        mounted() {
            // Get categories
            store.dispatch(actions.GET_CATEGORIES)
            // Get brands
            store.dispatch(actions.GET_BRANDS)
        },
    }
</script>
