@extends('layouts.public')

@php($title = 'Career')
@push('title', yieldTitle($title))

@section('content-company')
        <div id="entry-separator" class="carrer__inner-img">
            <div class="container">
                <div class="entry-head">
                    <div class="entry-header">	
                        <h1 class="entry-title">JOBS / CAREER</h1>
                        <div class="clear"></div>
                            Energy Techno Cast Pvt. Ltd.
                    </div>
                    <div class="entry-breadcrumb">
                        <p class="breadcrumb"><i class="fa fa-home "></i><a href="/">Home </a>&nbsp;/&nbsp;&nbsp; CAREER</p>
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
                        @include('includes.industries-served-sidebar')

                    </div>
                </div>

                    <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                        <div class="">
                        	<article class="page type-page status-publish hentry">
                                <h3 class="short_title">Jobs / Career</h3>
                                <p><li>ENERGY TECHNOCAST PVT LTD is a strong believer in teamwork. A strong team can empower the organization to gain an edge in the industry. Our focus is consistently on nurturing our workforce through various employee training and engagement to keep them updated to the latest technology and more to keep the motivation alive. The company takes care of both personal and professional growth of each employee, to ensure a happy and healthy workforce.</li>
                                <li>ENERGY TECHNOCAST PVT LTD is a fast expanding organization and we are looking for like-minded people to join our team for a long-term association. If you are motivated and would like to be a part of an innovative and professional team, we would be happy to welcome you to ENERGY TECHNOCAST PVT LTD.</li></p>
                                <h3 class="short_title">For HR  &amp; Job Related Inquiries</h3>
                                <p><strong>Email Id :</strong> <a href="mailto:info@energytechnocast.com" style="color:#da251c;">info@energytechnocast.net</a><br>
                                <strong>Mobile :</strong> +91 7575880001</p>
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
                                <li><img class="img-responsive" src="image/france-flag.png"><p>France</p></li>
                                <li><img class="img-responsive" src="image/united-kingdom-flag.png"><p>UK</p></li>
                                <li><img class="img-responsive" src="image/germany-flag.png"><p>Germany</p></li>
                                <li><img class="img-responsive" src="image/australia-flag.png"><p>Australia</p></li>
                            </ul>
                        </div>
                    </div> <!-- span12 -->
                </div>
            </div>
@endsection