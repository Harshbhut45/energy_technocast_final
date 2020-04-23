@extends('layouts.public')

@php($title = 'Industies-Servied')
@push('title', yieldTitle($title))

@section('content-company')
        <div id="entry-separator">
            <div class="container">
                <div class="entry-head-servied">
                    <div class="entry-header">	
                        <h1 class="entry-title">Industries-Valves</h1>
                        
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
                        <div class="widget" id="nav_menu-2">
                            <h3 class="short_title  mr-b-12">Industries Served ?</h3>
                            <div class="menu-features-container">
                                <ul class="menu__list" id="menu-features">
                                    <li class="tab-link is-active"><a href="/industries-servied-valves" ><i style="font-size:20px" class="fa">&#xf105;</i>Industrial Valves</a></li>
                                   
                                    <li class="tab-link"><a href="/industries-servied-valves1"><i style="font-size:20px" class="fa">&#xf105;</i>Industrial Pumps</a></li>

                                    <li class="tab-link"><a href="{{ url('industries-servied-valves') }}" ><i style="font-size:20px" class="fa">&#xf105;</i>Automotives</a></li>

                                    <li class="tab-link"><a href="/industries-servied-valves"><i style="font-size:20px" class="fa">&#xf105;</i>Power Plant Equipment</a></li>
                                    <li class="tab-link"><a href="/industries-servied-valves"><i style="font-size:20px" class="fa">&#xf105;</i>Aerospace</a></li>
                                    <li class="tab-link"><a href="/industries-servied-valves"><i style="font-size:20px" class="fa">&#xf105;</i>Marine</a></li>
                                    <li class="tab-link"><a href="/industries-servied-valves"><i style="font-size:20px" class="fa">&#xf105;</i>Power Plant Boiler Parts</a></li>
                                    <li class="tab-link"><a href="/industries-servied-valves"><i style="font-size:20px" class="fa">&#xf105;</i>Defense</a></li>
                                </ul>
                            </div>
                        </div>
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