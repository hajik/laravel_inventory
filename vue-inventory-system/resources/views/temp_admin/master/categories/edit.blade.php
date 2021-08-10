@extends('layouts.temp_admin.master')

@section('content')

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Master</a></li>
            <li class="breadcrumb-item"><a href="{{ route('categories.index') }}">Categories</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit</li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Edit Category</h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br />
                    <form method="POST" action="{{ route('categories.update', $category->id) }}" class="form-horizontal form-label-left">
                    @csrf
                    @method('PUT')
                    
                    <div class="form-group row">
                        <label class="control-label col-md-2" for="name"> 
                            Name 
                            <span class="text-danger">*</span>
                        </label>
                        <div class="col-md-7">
                            <input type="text" name="name" id="name" value="{{ $category->name }}" required="required" 
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
                            <a href="{{ route('categories.index') }}" class="btn btn-sm btn-secondary">
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