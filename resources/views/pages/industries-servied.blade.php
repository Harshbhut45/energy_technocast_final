@extends('layouts.public')

@php($title = 'Industies-Servied')
@push('title', yieldTitle($title))

@section('content-company')
        <div id="entry-separator">
            <div class="container">
                <div class="entry-head">
                    <div class="entry-header">	
                        <h1 class="entry-title">Industries-Servied</h1>
                        <div class="clear"></div>
                            Energy Techno Cast Pvt. Ltd.
                    </div>
                    <div class="entry-breadcrumb">
                        <p class="breadcrumb"><i class="fa fa-home "></i><a href="/">Home </a>&nbsp;/&nbsp;&nbsp; About Company</p>
                    </div>	
                </div>	
            </div>	
        </div>

        <div role="main" id="content">
            <div class="row-fluid">
              <div class="container">
                <div class="row">
                   <div class="col-lg-3 col-md-3 col-sm-12 col-sm-12 col-xs-12">
                     <div class="sidebar clearfix-sidebar clearfix_res ">
                        <div class="widget" id="nav_menu-2">
                            <h3 class="short_title  mr-b-12">Industries Served ?</h3>
                            <div class="menu-features-container">
                                @foreach($categories as $category)
                                <ul class="menu" id="menu-features">
                                    <li><a href="/industries-servied-valves">{{ $category->name }}</a></li>
                                        
                                </ul>
                                @endforeach
                            </div>
                        </div>

                        <div class="industy__chart" style="text-align:center; margin-bottom:10px;"><img src="image/material-chart.jpg" style=""></div>
                        {{-- <div class="divider plus"><span class="plus-ico"></span></div> --}}
                        </div>
                    </div>
                       
                <div id="gallery__grid" class="container gallery__grid" data-element="gallery-item">
                    <div class="col-lg-9 col-md-9 col-sm-12 col-sm-12 col-xs-12 ">
                        <article class="page type-page status-publish hentry">
                           @foreach($categories as $category)   
                            <div class="flexslider single-carousel pro-cat-list">
                                <ul class="slides portfolio-list__img">
                                <li>
                                    <article class="recent-works">
                                        <div class="img-format media-thumb ">
                                            <div class="img-fill1">
                                                <a class="w-portfolio-item-anchor"  style="background-color: rgba(0,0,0,0.9);color: #ffffff;" >
                                                <div  class="w-portfolio-item-image1" >
                                                <a class=" w-portfolio-item-anchor"  style="background-color: rgba(0,0,0,0.9);color: #ffffff;">
                                                    <div class="gallery-item w-portfolio-item-image" src="{{ $category->image_full_path }}" >
                                                        <img class="gallery-item" src="{{ $category->image_full_path }}" width="306" height="210" alt="Pump Industries">
                                                    </div>

                                                 <div class="w-portfolio-item-meta">
                                                    <div class="w-portfolio-item-meta-h">
                                                        <h2 class="w-portfolio-item-title">{{ $category->name }}</h2> <span class="w-portfolio-item-arrow"></span>
                                                    </div>
                                                </div> 
                                                </a>
                                             </div>  
                                          </div>
                                      </article>
                                </li>
                               </ul>
                            @endforeach
                        </div>
                     </article>
                   </div>
               </div>
            </div>
        </div>
    </div>




        <!-- imagezoom-js --> 
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="{{ asset('js/imagezoom.js') }}"></script>
@endsection