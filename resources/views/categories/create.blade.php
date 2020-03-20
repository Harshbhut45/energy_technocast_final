@extends('layouts.admin')

@php($title = 'Create Category')
@push('title', yieldTitle($title))

@section('breadcrumb-title', $title)

@section('breadcrumb-link')
    <li class="breadcrumb-item active" aria-current="page">
        <a href="{{ route('categories.index') }}">Categories</a>
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
                        <form action="{{ isset($category) ? route('categories.update',['id' => $category->id]) : route('categories.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                          <div class="col-md-8">
                            <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="name">Name <span class="tx-danger">*</span></label>
                              <input type="text" class="form-control"  id="name" name="name" placeholder="Name" maxlength="30" value="{{isset($category) ? $category->name : old('name') }}" required >   
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
                                            aria-describedby="inputGroupFileAddon01" name='profile' value="{{isset($category) ? $category->profile : old('profile') }}">
                                        <label class="custom-file-label upload-image" for="inputGroupFile01">Choose file</label>
                                    </div>
                                </div>
                            </div>
                                <div class="media-files-name" >
                                    @if (isset($category->profile))
                                        <input id="upload-demo-image" type="hidden" value="/storage/categories/{{ $category->id }}/{{ $category->profile }}">
                                        
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
                                    <label for="status">Status: <span class="tx-danger">*</span></label>
                                    <select class="form-control {{ $errors->has('status') ? ' is-invalid' : '' }} user-status-select" id="status" name="status" >
                                        <option disabled selected value>Select Status</option>
                                        @foreach($statuses as $status)
                                        <option value="{{ $status }}" @if(isset($category) && $category->status == $status) selected @endif>{{ $status }}</option>
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
                            <a href="{{ route('categories.index') }}" class="btn btn-warning mg-r-1">Cancel</a>
                            <button type="submit" class="btn btn-primary user-form">Submit</button>
                         </div>
                       </form>
                    </div>
                </div><!-- table-responsive -->
            </div><!-- df-example -->
        </div>
    </div>
   
@endsection


                         

                    

                       