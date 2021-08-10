@extends('layouts.temp_admin.master')

@section('content')

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Master</a></li>
            <li class="breadcrumb-item"><a href="{{ route('sizes.index') }}">Sizes</a></li>
            <li class="breadcrumb-item active" aria-current="page">Create</li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Create Size</h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br />
                    <form method="POST" action="{{ route('sizes.store') }}" class="form-horizontal form-label-left">
                    @csrf
                    <div class="form-group row">
                        <label class="control-label col-md-2" for="name"> 
                            Size 
                            <span class="text-danger">*</span>
                        </label>
                        <div class="col-md-7">
                            <input type="text" name="name" id="name" placeholder="Enter size" required="required" 
                            class="form-control form-control-sm {{ $errors->has('name') ? 'is-invalid' : '' }}" required>
                            @if ($errors->has('name'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('name') }}
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-3 col-sm-3 offset-md-2">
                            <button type="submit" class="btn btn-sm btn-success">
                                <i class="fa fa-save"></i>
                                Submit
                            </button>
                            <a href="{{ route('sizes.index') }}" class="btn btn-sm btn-secondary">
                                Back
                                <i class="fa fa-chevron-right" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
@endsection