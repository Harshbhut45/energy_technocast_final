@extends('layouts.admin')

@php($title = 'Create Product')
@push('title', yieldTitle($title))

@section('breadcrumb-title', $title)

@section('breadcrumb-link')
    <li class="breadcrumb-item active" aria-current="page">
        <a href="{{ route('products.index') }}">Products</a>
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
                          <div class="col-md-8">
                            <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="first">Name <span class="tx-danger">*</span></label>
                              <input type="text" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="Name" id="first" name="name"  maxlength="30" value="{{isset($product) ? $product->name : old('name') }}" >
                              @if($errors->has('name'))
                                  <div class="error">{{ $errors->first('name') }}</div>
                              @endif
                            </div>
                          </div>
                          
                          <div class="col-md-6">
                            <div class="form-group">
                                <label for="inputGroupFile01">Profile Picture: <span class="tx-danger">*</span>
                                </label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input {{ $errors->has('profile') ? ' is-invalid' : '' }}" id ="image"
                                            aria-describedby="inputGroupFileAddon01" name='profile' value="{{isset($product) ? $product->profile : old('profile') }}">
                                        <label class="custom-file-label upload-image" for="inputGroupFile01">Choose file</label>
                                    </div>
                                </div>
                            </div>
                                <div class="media-files-name" >
                                    @if (isset($product->profile))
                                        <input id="upload-demo-image" type="hidden" value="/storage/products/{{ $product->id }}/{{ $product->profile }}">
                                        
                                    @else
                                    <p>No image found</p>
                                    @endif
                                    <input type="hidden" id="profile_picture" name="profile_picture">
                                </div>
                                @if($errors->has('profile'))
                                  <div class="error">{{ $errors->first('profile') }}</div>
                                @endif
                              </div>

                              <div class="col-md-6">
                                <div class="form-group">
                                  <label for="first">Categories Name: <span class="tx-danger">*</span></label>
                                   <select id="multiple" class="form-control lokdayros-select__name {{ $errors->has('category') ? ' is-invalid' : '' }} city-district-select" id="district" name="category" >
                                    <option disabled selected>Select Depautment</option>
                                     @foreach($categories as $category)
                                          <option value="{{ $category->id }}" @if(isset($product) && $product->category_id == $category->id) selected @endif>{{ $category->name }}</option>
                                      @endforeach
                                    </select>
                                    @if($errors->has('category'))
                                        <div class="error">{{ $errors->first('category') }}</div>
                                    @endif
                                  
                                </div>
                            </div>

                              <div class="col-md-6">
                                <div class="form-group">
                                    <label for="status">Status: <span class="tx-danger">*</span></label>
                                    <select class="form-control {{ $errors->has('status') ? ' is-invalid' : '' }} user-status-select" id="status" name="status" >
                                        <option disabled selected value>Select Status</option>
                                        @foreach($statuses as $status)
                                        <option value="{{ $status }}" @if(isset($product) && $product->status == $status) selected @endif>{{ $status }}</option>
                                    @endforeach
                                    </select>
                                    @if($errors->has('status'))
                                       <div class="error">{{ $errors->first('status') }}</div>
                                    @endif
                                </div>
                              </div>

                              

                              <div class="col-md-6 m-t-38" >
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox">
                                      <input type="checkbox" class="custom-control-input" id="is_featured" name="is_featured" value="yes" >
                                      <label class="custom-control-label" for="is_featured">Featured</label>
                                  </div>
                                </div>  
                       
      
                              </div>
                            </div>
                          </div>
                              
                            <div class="col-md-4">
                              <div class="row">
                                <div class="col-md-4 text-center">
                                    <div id="upload-demo"></div>
                                </div>
                                <div class="col-md-4" style="padding:5%;"></div>
                              </div>
                            </div>
                          </div>
                          
                        </div>
                       
                          
                    
                        
                          <div class="button">
                            <a href="{{ route('products.index') }}" class="btn btn-warning mg-r-1">Cancel</a>
                            <button type="submit" class="btn btn-primary ">Submit</button>
                         </div>
                       </form>
                    </div>
                </div><!-- table-responsive -->
            </div><!-- df-example -->
        </div>
    </div>
   
@endsection


                         

                    

                       