@extends('layouts.public')

@php($title = 'About')
@push('title', yieldTitle($title))

@section('content-company')

<div id="entry-separator" >
    <div class="container">
	    <div class="entry-head">
		    <div class="entry-header">	
                <h1 class="entry-title">About Company</h1>
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
            <div class="col-lg-3 col-md-3 col-sm-12 col-sm-12 col-xs-12 sidebar_res">
            <div class="sidebar clearfix-sidebar clearfix_res">
                @include('includes.industries-served-sidebar')
            </div>
        </div>
        <div class="col-lg-9 col-md-9 col-sm-12 col-sm-12 col-xs-12 sidebar_res">
            <div class="about-group">
                <article class="page type-page status-publish hentry">
                    <h3 class="short_title"> The Company :</h3>
                    <p>Energy Technocast Pvt. Ltd. (ETPL) is a sterling manufacturer of <strong>Lost	 wax Investment Castings </strong>established in 2013 at Rajkot, Gujarat. We deliver a customer centric approach to our clients to uphold the values and morale of the company in casting industry. Our objective is to serve superior industrial solutions and mechanical capabilities through cutting edge technologies, intensive research & development, superior quality standards and on-time delivery approach.</p>
                    <p>ETPL expertise in manufacturing of Ferrous – Stainless Steel, Carbon Steel, Resistance Steel, Alloy Steel, Heavy Melting Steel, Wear Resistance Alloy, Ni Based Alloys like Iconels, Monels, etc., Cast Iron & Non Ferrous like Aluminum and Copper based alloys as per National & International norms and standards. ETPL has installed a extensive capacity plant with concurrent processing departments like Raw Material & Maintenance Room, Quality Control & Test Lab, Machining Shop, Drying & Pressing Room, Heat Treatment lab, Finished Product Warehouse with ultra modern storage facilities to uphold various technical, mechanical and managerial grounds.</p>
                    <p>Energy Technocast PVT LTD is a <strong>Investment Casting Manufacturer carrying the motto and vision of persistence and excellence in the field of different products 	Investment Casting,	 Fittings Investment Casting Parts, 	Casting of earth moving equipment 	Precision Investment Casting, 	Nickel Based Alloy Casting, 	Copper based Alloy Casting , 	Cobalt Base Alloy Casting, 	Super Alloy Castings , 	Nickel Alloy Castings, 	Pump Castings, 	Lost Wax Casting, 	Valve Castings, 	Precision Casting India, 	Duplex Castings, </strong>	Investment Casting Foundry etc.</p>
                    <p>ETPL is serving a vast range of industries such as 	Valves Castings, Pumps, Pharmaceutical Industry, Industrial Machinery, Agricultural Equipments, Defence & Fire Fighting Equipments, Medical/Orthopedic Implants, Food & Beverages, Aerospace & Railway Parts and many more. Our foremost motive is to uphold the core values of the company by providing our clients the best in terms of quality, durability and reliability to fulfill our motto – “Extensive Reach, Intensive Delivery”.
                        </p>
        
                    <h3 class="short_title"> Vision-Mission : </h3>
                    <p>	To provide quality products to the customers through continuous innovation & upgradation in company’s resources.</p>
                    <p>To develop cordial business relationship with customers, To aim to be market leader, To grow with customers, suppliers & human resource.</p>
                    <p>On time delivery, Superior Quality of products, Continuous training of human resource with respect to change in market scenario.</p>
                    <p>Increase Global presence, providing effective business solutions through Competitive Pricing, including Quality,Delivery & Service.
                        </p>
                   
                    <h3 class="short_title"> Research & Development : </h3>
                        <p>Energy Technocast Pvt. Ltd. (ETPL)  alike its manufacturing facilities and concern to keep the top machines and equipment, also looks after the way of improvisation through the research and development. The company is always more than happy to take up new and innovative ways for the constant growth. The Research and Development department holds the responsibility to make the company moving ahead and ahead.</p>
                
                </article>
            </div>
        </div>
        </div>
    </div>
</div>

        <div class="container">
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

@endsection