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
                    <label class="control-label col-md-2" for="name">
                        Product
                        <span class="text-danger">*</span>
                    </label>
                    <div class="col-md-7">
                        <input type="text" name="name" id="name" placeholder="Enter product" required="required"
                            class="form-control form-control-sm" />
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-3 col-sm-3 offset-md-2">
                        <button type="submit" class="btn btn-sm btn-success">
                            <i class="fa fa-save"></i>
                            Submit
                        </button>
                        <a href="" class="btn btn-sm btn-secondary">
                            Back
                            <i class="fa fa-chevron-right" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</template>

export default{

} 
