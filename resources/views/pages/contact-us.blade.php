@extends('layouts.public')

@php($title = 'Contact-us')
@push('title', yieldTitle($title))

@section('content-company')
        <div id="entry-separator" class="energy-contact contact__inner-img">
            <div class="container">
                <div class="entry-head">
                    <div class="entry-header">	
                        <header class="entry-header">
                            <h1 class="entry-title">Contact Us</h1>
                            <div class="clear"></div>
                            <strong>Energy Techno Cast Pvt. Ltd.</strong><br>
                            Shapar Industrial Area,<br> Rajkot - Gondal Highway, <br> Dist. : Rajkot - 360 002.<br>
                            Gujarat / India. <br><br>
                            
                            <strong>Phone :</strong> +91 7575880001<br>
                            <strong>Fax :</strong> +91 7575880001<br>
                            <strong>E-Mail :</strong> info@energytechnocast.net																				
                        </header>
                    </div>
                    <div class="entry-breadcrumb">
                        <p class="breadcrumb"><i class="fa fa-home "></i><a href="/">Home </a>&nbsp;/&nbsp;&nbsp; Contact-us</p>
                    </div>	
                </div>	
            </div>	
        </div>
        <div role="main" id="content">
            <div class="row-fluid">
              <div class="container">
                <div class="row">
                   <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                     <div class="sidebar clearfix-sidebar clearfix_res1">
                        <div class="contactus" id="nav_menu-2">
                            <h2>Contact Us Now</h2>
                        <div class="border"></div>
                        <br>
                        <p>For any product-related enquiry, feel free to get in touch with us. Leave a message, and our representative will get in touch with you shortly.</p>
                        <br>
                        <div class="contact_details contact_item">
                            <div class="row contact_icon">
                            <div class="col-md-2">
                                <p class="icons icons__mobile"><i class="fa fa-mobile"></i></p>
                            </div>
                            <div class="col-md-10">
                                <h5>Call Us :</h5>
                                <p id="show_explorennumber">+91 7575880001</p>
                            </div>
                         </div>
                    <div class="clearfix"></div>
                    <div class="row contact_icon">
                        <div class="col-md-2">
                            <p class="icons icons__envelope"><i class="fa fa-envelope"></i></p>
                        </div>
                        <div class="col-md-10 email_res">
                            <h5>Email Us :</h5>
                            <p  id="show_exploreemail"><a href="info@energytechnocast.net"> info@energytechnocast.net</a></p>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>

                    <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12 contact_info">
                        <div class="contact_info active">
                            <form action="{{ route('sendMail') }}" method="post" enctype="multipart/form-data" onchange="return setdata();">
                                @csrf
                                <h3>Drop a Message</h3>
                                <br>
                             
                                    <div class="form-group col-md-12">
                                        <select id="country" class="dropdown form-control form-control1" >
                                            <option for="country" selected="" disabled="">--- Select Country ---</option>
                                            <option data-ccode="+91"  data-nnumber="+91 7575880001" value="all" data-consernname="Mr. Ketan Raiyani" data-email="info@energytechnocast.net">India</option>
                                            <option data-ccode="+1 " data-nnumber="1) +1 8135174367, 2) +1 8135219635" value="all" data-consernname="1) Mr. Savan Goswami, 2) Mr. Ajay Vekaria " data-email="ajay@energytechnocast.net,  savan@energytechnocast.net">USA</option>
                                            <option data-ccode="+1" data-nnumber="+1 269754646" value="all" data-consernname="1) Mr. Hiren Limbasiya, 2) Mr. Parth Chaniyara" data-email="hiren@energytechnocast.net">Canada</option>
                                        </select>
                                    </div>
                                 
                           
                          <div id="all" class="">
                            <div class="form_click_inner1">
                                <div class="form-group col-md-12">
                                    <div class="col-md-3 nopadding">
                                        <h5 class="form-control number form-control1">Contact Person</h5>
                                    </div>
                                    <div class="col-md-9 nopadding">
                                        <span id="show_explorename" class="form-control form-control1"></span>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="form-group col-md-12">
                                    <input type="text" name="name" placeholder="Full Name*" class="form-control form-control1" required="">
                                </div>
                                <div class="clearfix"></div>
                                <div class="form-group col-md-12">
                                    <input type="text" name="name" placeholder="Email Id*" class="form-control form-control1" required="">
                                </div>
                                <div class="clearfix"></div>
                                <div class="form-group col-md-12">
                                    <div class="col-md-2 nopadding">
                                        <span name="contactnumner" id="show_exploreccode" class="form-control form-control1"></span>
                                    </div>
                                    <div class="col-md-10 nopadding">
                                        <input type="text" name="name" placeholder="Mobile Number*" class="form-control form-control1" required="">
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                
                                <div class="clearfix"></div>

                                <div class="form-group col-md-12">
                                    <input type="file" name="dfile" id="dfile" class="form_control resume">
                                <h6>Upload pdf / jpg / png</h6>
                                </div>
                                
                                <div class="clearfix"></div>
                                <div class="form-group  col-md-12 ">
                                    <textarea name="message" rows="5" placeholder="Message.." class="form-control" required=""></textarea>
                                    <br>
                                </div>
                                <br><br>
                                <div class="form-group col-md-12">
                                    <input type="submit" id="bookcontact" class="btnRead">
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    

@endsection