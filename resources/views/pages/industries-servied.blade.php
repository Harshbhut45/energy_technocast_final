@extends('layouts.public')

@php($title = 'Industies-Servied')
@push('title', yieldTitle($title))

@section('content-company')
        <div id="entry-separator" class="industries__inner-img">
            <div class="container">
                <div class="entry-head">
                    <div class="entry-header">	
                        <h1 class="entry-title">Industries-Servied</h1>
                        <div class="clear"></div>
                            Energy Techno Cast Pvt. Ltd.
                    </div>
                    <div class="entry-breadcrumb">
                        <p class="breadcrumb"><i class="fa fa-home "></i><a href="/">Home </a>&nbsp;/&nbsp;&nbsp; Industries-Servied</p>
                    </div>	
                </div>	
            </div>	
        </div>

        <div role="main" id="content">
            <div class="row-fluid">
              <div class="container">
                <div class="row">
                   {{-- <div class="col-lg-3 col-md-3 col-sm-12 col-sm-12 col-xs-12">
                     <div class="sidebar clearfix-sidebar clearfix_res ">
                        @include('includes.industries-served-sidebar')

                        <div class="industy__chart" style="text-align:center; margin-bottom:10px;"><img src="image/material-chart.jpg" style=""></div>
                        </div>
                    </div> --}}
                       
                <div id="gallery__grid" class="container gallery__grid" data-element="gallery-item">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-sm-12 col-xs-12 ">
                        <article class="page type-page status-publish hentry">
                            <h3 class="short_title">Industries Served</h3>
                                <p>ETPL manufactures Lost Wax Investment Castings for a wide range of industries such as</p>
                                <p>In general we can make any intricate Lost Wax Investment Castings for various industries.<br>
                                <strong>Castings weighing from 0.015 Kilograms to 100.00 Kilograms per piece.</strong> </p>
                           @foreach($categories as $category)   
                            <div class="flexslider single-carousel pro-cat-list">
                                <ul class="slides portfolio-list__img">
                                <li>
                                    <article class="recent-works">
                                        <div class="img-format media-thumb ">
                                            <div class="img-fill1">
                                                
                                            <div  class="w-portfolio-item-image1" >
                                                <a href="{{ url('industries-servied-valves',['id' => $category->name ])}}" class=" w-portfolio-item-anchor"  style="background-color: rgba(0,0,0,0.9);color: #ffffff;">
                                            <div class="gallery-item w-portfolio-item-image" >
                                             
                                                <img href="{{ url('industries-servied-valves',['id' => $category->id ])}}" src="{{ $category->image_full_path }}" width="306" height="210" alt="Pump Industries">
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

@endsection