@extends('layouts.public')

@php($title = 'Industies-Servied')
@push('title', yieldTitle($title))

@section('content-company')
        <div id="entry-separator">
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
                   <div class="col-lg-3 col-md-3 col-sm-12 col-sm-12 col-xs-12">
                     <div class="sidebar clearfix-sidebar clearfix_res">
                        @include('includes.industries-served-sidebar')

                        <div class="divider plus"><span class="plus-ico"></span></div>
                        </div>
                    </div>

            <div class="col-lg-9 col-md-9 col-sm-12 col-sm-12 col-xs-12">
                <article class="page type-page status-publish hentry">
                    <div class="flexslider single-carousel pro-cat-list">
                        <ul class="slides portfolio-list__img">
                            @foreach($products as $product)
                            <li>
                                <article class="recent-works">
                                    <div class="img-format media-thumb">
                                        <div class="img-fill1">
                                            <a class="w-portfolio-item-anchor" href="javascript:;" style="background-color: rgba(0,0,0,0.9);color: #ffffff;">
                                        <div class="w-portfolio-item-image" style="background-image: url({{ $product->image_full_path  }})">
                                                <div class="w-portfolio-item-meta">
                                                    <div class="w-portfolio-item-meta-h">
                                                        <h2 class="w-portfolio-item-title">{{ $product->name }}</h2> <span class="w-portfolio-item-arrow"></span>
                                                    </div>
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

@endsection