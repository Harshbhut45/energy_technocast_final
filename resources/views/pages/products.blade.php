@extends('layouts.public')

@php($title = 'Industies-Servied')
@push('title', yieldTitle($title))

@section('content-company')
        <div id="entry-separator" class="industries__inner-img">
            <div class="container">
                <div class="entry-head-servied">
                    <div class="entry-header">	
                        <h1 class="entry-title">{{ $category->name }}</h1>
                        
                    </div>
                    	
                </div>	
            </div>	
        </div>

        <div role="main" id="content">
            <div class="row-fluid">
              <div class="container">
                <div class="row">
                   <div class="col-lg-3 col-md-3 col-sm-12 col-sm-12 col-xs-12 sidebar_res">
                     <div class="sidebar clearfix-sidebar clearfix_res">
                        @include('includes.industries-served-sidebar')

                        <div class="divider plus"><span class="plus-ico"></span></div>
                        </div>
                    </div>

        <div id="gallery__grid" class="container gallery__grid" data-element="gallery-item"> 
            <div class="col-lg-9 col-md-9 col-sm-12 col-sm-12 col-xs-12 img__gallery">
                <article class="page type-page status-publish hentry">
                    <div class="flexslider single-carousel pro-cat-list">
                        <ul class="slides portfolio-list__img">
                            @foreach($products as $product)
                            <li>
                                <article class="recent-works">
                                    <div class="img-format media-thumb ">
                                        <div class="img-fill1">
                                        <div class="w-portfolio-item-image1" >
                                            <a class="gallery-item w-portfolio-item-anchor" src="{{ $product->image_full_path  }}" style="background-color: rgba(0,0,0,0.9);color: #ffffff;">
                                        <div class="gallery-item w-portfolio-item-image"  >
                                            <img class="gallery-item" src="{{ $product->image_full_path }}"width="306" height="210">
                                        </div>
                                            </a>
                                        </div>  
                                    </div>
                                </article>
                            </li>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>

    <!-- imagezoom-js --> 
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="{{ asset('js/imagezoom.js') }}"></script>

@endsection