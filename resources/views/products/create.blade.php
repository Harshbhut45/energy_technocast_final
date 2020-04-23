@extends('layouts.admin')

@php($title = 'Create Product')
@push('title', yieldTitle($title))

@section('breadcrumb-title', $title)

@section('breadcrumb-link')
    <li class="breadcrumb-item active" aria-current="page">
        <a href="{{ route('home') }}">Products</a>
    </li>

    <li class="breadcrumb-item active" aria-current="page">{{ $title }}</li>
@endsection

@section('breadcrumb')
    @include('components.breadcrumb')
@endsection

@push('content-class', 'content-fixed')
@push('container-class', 'container-fluid')

@section('content')
    <div class="card">
        <div class="card-body">
            <div>
                <div class="table-responsive">
                  <div class="container-fluid">
                        <form action="{{ isset($product) ? route('products.update',['id' => $product->id]) : route('products.store') }}" method="post" enctype="multipart/form-data">     
                          @csrf 
                        <div class="row">
                          <div class="col-md-12">
                            <div class="row">
                              <div class="col-md-5">
                                <div class="form-group">
                                  <label for="first">Name <span class="tx-danger">*</span></label>
                                  <input type="text" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="Name" id="first" name="name"  maxlength="30" value="{{isset($product) ? $product->name : old('name') }}" required>
                                  @if($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                  @endif
                                </div>
                              </div>
                              
                              <div class="col-md-3">
                                <label for="inputGroupFile01">Image: @if(!isset($product)) <span class="tx-danger">*</span>@endif</label>
                                  <div class="input-group">
                                      <div class="custom-file">
                                          <input type="file" class="custom-file-input {{ $errors->has('image') ? ' is-invalid' : '' }}" id ="image"
                                              aria-describedby="inputGroupFileAddon01" name='image' value="{{isset($category) ? $category->image : old('image') }}" @if(!isset($product)) required @endif>
                                          <label class="custom-file-label upload-image" for="inputGroupFile01">Choose file</label>
                                      </div>
                                  </div>
                                  @if($errors->has('image'))
                                    <span class="invalid-feedback" role="alert">
                                      <strong>{{ $errors->first('image') }}</strong>
                                    </span>
                                  @endif
                              </div>

                              <div class="col-md-2">
                                <div class="form-group">
                                  <label for="first">Category: <span class="tx-danger">*</span></label>
                                   <select id="multiple" class="form-control lokdayros-select__name {{ $errors->has('category') ? ' is-invalid' : '' }} city-district-select" id="district" name="category" required>
                                    <option disabled selected>Select Category</option>
                                     @foreach($categories as $category)
                                          <option value="{{ $category->id }}" @if(isset($product) && $product->category_id == $category->id) selected @endif>{{ $category->name }}</option>
                                      @endforeach
                                    </select>
                                    @if($errors->has('category'))
                                        <span class="invalid-feedback" role="alert">
                                          strong>{{ $errors->first('category') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                              <div class="col-md-2">
                                <div class="form-group">
                                    <label for="status">Status: <span class="tx-danger">*</span></label>
                                    <select class="form-control {{ $errors->has('status') ? ' is-invalid' : '' }} user-status-select" id="status" name="status" required>
                                        <option disabled selected value>Select Status</option>
                                        @foreach($statuses as $status)
                                        <option value="{{ $status }}" @if(isset($product) && $product->status == $status) selected @endif>{{ $status }}</option>
                                    @endforeach
                                    </select>
                                    @if($errors->has('status'))
                                      <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('status') }}</strong>
                                      </span>
                                    @endif
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                       
                          <div class="button">
                            <a href="{{ route('home') }}" class="btn btn-warning mg-r-1">Cancel</a>
                            <button type="submit" class="btn btn-primary user-form">Submit</button>
                         </div>
                       </form>
                    </div>
                </div><!-- table-responsive -->
            </div><!-- df-example -->
        </div>
    </div>
   
@endsection


                         

                    

                       