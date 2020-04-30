@extends('layouts.public')

@php($title = 'Career')
@push('title', yieldTitle($title))

@section('content-company')
        <div id="entry-separator">
            <div class="container">
                <div class="entry-head">
                    <div class="entry-header">	
                        <h1 class="entry-title">JOBS / CAREER</h1>
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
                   <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 sidebar_res">
                     <div class="sidebar clearfix-sidebar clearfix_res">
                        <div class="widget" id="nav_menu-2">
                            <h3 class="short_title  mr-b-12">Industries Served ?</h3>
                            <div class="menu-features-container">
                                @foreach($categories as $category)
                                <ul class="menu" id="menu-features">
                                    <li><a href="{{ url('industries-servied-valves',['id' => $category->name]) }}">{{ $category->name }}</a></li>
                                </ul>
                                @endforeach
                            </div>
                        </div>

                    </div>
                </div>

                    <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                        <div class="">
                        	<article class="page type-page status-publish hentry">
                                <h3 class="short_title">Jobs / Career</h3>
                                <p><li>If you are passionate about making hight quality Investment castings &amp; machining , then RTCPL is the right place for you.</li>
                                <li>Since 1994 RTCPL is continoulsy growing its strength and building a world class foundry team.</li>
                                <li>Due to our continuous growth and ventures in the new markets, we recruiting the best qualified persons.  </li>
                                <li>Candidate should submit their resume with photo to :  </li>
                                <li>Candidate are free to walk-in-interview as well with prior appointment</li></p>
                                <h3 class="short_title">For HR  &amp; Job Related Inquiries</h3>
                                <p><strong>Email Id :</strong> <a href="mailto:info@rajantechcast.com" style="color:#da251c;">info@rajantechcast.com</a><br>
                                <strong>Mobile :</strong> +91 9687697728, +91 9687697726</p>
							</article>
                        </div>
                    </div>
                </div>
             
             
                <div class="">
                    <div class="partners-carousel">
                        <div class="carousel-title">ETPL Exports to</div>
                            <ul class="slides-partners clearfix">
                                <li><img class="img-responsive" src="image/usa-flag.png"><p>USA</p></li>
                                <li><img class="img-responsive" src="image/canada-flag.png"><p>Canada</p></li>
                            </ul>
                        </div>
                    </div> <!-- span12 -->
                </div>
            </div>
@endsection