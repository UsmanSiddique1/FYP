<!DOCTYPE html>



<html lang="en" >
    <!-- begin::Head -->
    
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
        <meta charset="utf-8" />
        
        <title>Assets Management System</title>
        <meta name="description" content="Latest updates and statistic charts"> 

        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        
        <script src="{{URL::to('public/assets')}}/ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
        <script>
          WebFont.load({
            google: {"families":["Montserrat:300,400,500,600,700","Roboto:300,400,500,600,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
          });
        </script>
        <!--end::Web font -->

        <!--begin::Base Styles --> 
         
<!--mere wali style sheet -->
<link rel="stylesheet" type="text/css" href="{{URL::to('public')}}/assets/css/app.css">
                 
        <!--begin::Page Vendors --> 
                <link href="{{URL::to('public/assets')}}/vendors/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
                <!--end::Page Vendors -->
         


				<link href="{{URL::to('public')}}/assets/vendors/base/vendors.bundle.css" rel="stylesheet" type="text/css" />
				<link href="{{URL::to('public')}}/assets/demo/demo4/base/style.bundle.css" rel="stylesheet" type="text/css" />
		      
          <link rel="stylesheet" type="text/css" href="{{URL::to('public/css/datatables.css')}}">

<script src="{{URL::to('public/assets')}}/ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
<script src="{{URL::to('public/assets')}}/js/app.js"></script>

            <!--end::Base Styles -->

        <link rel="shortcut icon" href="{{URL::to('public')}}/assets/demo/demo4/media/img/logo/favicon.ico" /> 
   
</head>
    <!-- end::Head -->

    
    <!-- end::Body -->
    <body  style="background-image: url({{URL::to('public')}}/assets/app/media/img/bg/bg-1.jpg)"  class="m-page--boxed m-body--fixed m-header--static m-aside--offcanvas-default"  >

        
        
    	
<!-- begin:: Page -->
<div class="m-grid m-grid--hor m-grid--root m-page">
    
	
		<!-- begin::Header -->
		<header id="m_header" class="m-grid__item	m-grid m-grid--desktop m-grid--hor-desktop  m-header " >
			<div class="m-grid__item m-grid__item--fluid m-grid m-grid--desktop m-grid--hor-desktop m-container m-container--responsive m-container--xxl">
				<div class="m-grid__item m-grid__item--fluid m-grid m-grid--desktop m-grid--ver-desktop m-header__wrapper">
                    					<!-- begin::Brand -->
<div class="m-grid__item m-brand">
	<div class="m-stack m-stack--ver m-stack--general m-stack--inline">
		<div class="m-stack__item m-stack__item--middle m-brand__logo">
			<a href="{{URL::to('index')}}" class="m-brand__logo-wrapper">
				<img alt="" src="{{URL::to('public')}}/assets/demo/demo4/media/img/logo/logo.png"/>
			</a>  
		</div>

		<div class="m-stack__item m-stack__item--middle m-brand__tools">
			<div class="m-nav__link m-dropdown__toggle" style="margin-left: 40px;">
				<a href="{{URL::to('index')}}" class="btn btn-outline-metal m-btn  m-btn--icon m-btn--pill">
					<span>Assets Management System</span>
				</a>
			</div>							
			
<!--class="m-nav__link m-dropdown__toggle"-->
<!--class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-left m-dropdown--align-push" m-dropdown-toggle="click" aria-expanded="true"-->



						<!-- begin::Responsive Header Menu Toggler-->
			<a id="m_aside_header_menu_mobile_toggle" href="javascript:;" class="m-brand__icon m-brand__toggler m--visible-tablet-and-mobile-inline-block">
				<span></span>
			</a>
			<!-- end::Responsive Header Menu Toggler-->
				

			<!-- begin::Topbar Toggler-->
			<a id="m_aside_header_topbar_mobile_toggle" href="javascript:;" class="m-brand__icon m--visible-tablet-and-mobile-inline-block">
				<i class="flaticon-more"></i>
			</a>
			<!--end::Topbar Toggler-->
		</div>
	</div>
</div>
<!-- end::Brand -->

<!-- begin::Topbar -->

<div class="m-grid__item m-grid__item--fluid m-header-head" id="m_header_nav">
	<div id="m_header_topbar" class="m-topbar  m-stack m-stack--ver m-stack--general">
		<div class="m-stack__item m-topbar__nav-wrapper">
			<ul class="m-topbar__nav m-nav m-nav--inline">
				
            

            

@if(Auth::guest())
        <li class="m-nav__item m-topbar__user-profile m-topbar__user-profile--img  m-dropdown m-dropdown--medium m-dropdown--arrow m-dropdown--header-bg-fill m-dropdown--align-right m-dropdown--mobile-full-width m-dropdown--skin-light" m-dropdown-toggle="click">
  <a href="{{URL::to('register_login')}}" class="m-nav__link">
    <span class="m-topbar__username m--hidden-tablet m--hidden-mobile m--padding-right-15"><span class="m-link">Register / Login</span></span>    
  </a>
</li>

@else
        <li class="m-nav__item m-topbar__user-profile m-topbar__user-profile--img  m-dropdown m-dropdown--medium m-dropdown--arrow m-dropdown--header-bg-fill m-dropdown--align-right m-dropdown--mobile-full-width m-dropdown--skin-light" m-dropdown-toggle="click">
  <a href="#" class="m-nav__link m-dropdown__toggle">     
   <!--  <span class="m-topbar__userpic">
      <img src="{{URL::to('public')}}/assets/app/media/img/users/shani.jpg" class="m--img-rounded m--marginless m--img-centered" alt=""/>
    </span>  -->
    <span>&nbsp;</span>
    <span>&nbsp;</span>
    <span class="m-topbar__welcome m--hidden-tablet m--hidden-mobile">Hello,&nbsp;</span> 
    <span>&nbsp;</span>
    <span class="m-topbar__username m--hidden-tablet m--hidden-mobile m--padding-right-15"><span class="m-link">{{Auth::user()->name}}</span></span>  
  </a>
</li>


<li class="m-nav__item m-topbar__user-profile m-topbar__user-profile--img  m-dropdown m-dropdown--medium m-dropdown--arrow m-dropdown--header-bg-fill m-dropdown--align-right m-dropdown--mobile-full-width m-dropdown--skin-light" m-dropdown-toggle="click">
  <a href="{{URL::to('logout')}}" class="m-nav__link">
    <span class="m-topbar__username m--hidden-tablet m--hidden-mobile m--padding-right-15"><span class="m-link">Logout</span></span>    
  </a>
</li>

@endif


   <!--     <li class="m-nav__item m-topbar__user-profile m-topbar__user-profile--img  m-dropdown m-dropdown--medium m-dropdown--arrow m-dropdown--header-bg-fill m-dropdown--align-right m-dropdown--mobile-full-width m-dropdown--skin-light" m-dropdown-toggle="click">
  <a href="{{URL::to('sign_in')}}" class="m-nav__link">
    <span class="m-topbar__username m--hidden-tablet m--hidden-mobile m--padding-right-15"><span class="m-link">SIGN_IN</span></span>    
  </a>
</li> -->


					<!-- <li id="#" class="m-nav__item">
						<a href="#" class="m-nav__link m-dropdown__toggle">
							<span class="m-nav__link-icon m-nav__link-icon--aside-toggle">
								<span class="m-nav__link-icon-wrapper"><i class="flaticon-menu-button"></i></span>
							</span>
						</a>
					</li>	 -->	

							</ul>

		</div>
	</div>
</div>
<!-- end::Topbar -->                    				</div>
			</div>
		</header>
		<!-- end::Header -->



<!-- begin::Body -->
<!-- yahan oper jo "begin::Body" likha howa hai, ye wali body yahan se START toh hoti hai
	 but END hrr os page mein hoti hai jahan jahan hm ne header include krwaya howa hai -->

 <div class="m-grid__item m-grid__item--fluid m-grid m-grid m-grid--hor m-container m-container--responsive m-container--xxl">
	<div class="m-grid__item m-grid__item--fluid m-grid m-grid--hor-desktop m-grid--desktop m-body">
			
@role('Admin')

<div class="m-grid__item m-body__nav">
          <div class="m-stack m-stack--ver m-stack--desktop">


                                    <!-- begin::Horizontal Menu -->
<div class="m-stack__item m-stack__item--middle m-stack__item--fluid">
  <button class="m-aside-header-menu-mobile-close  m-aside-header-menu-mobile-close--skin-light " id="m_aside_header_menu_mobile_close_btn"><i class="la la-close"></i></button>
  
  <div id="m_header_menu" class="m-header-menu m-aside-header-menu-mobile m-aside-header-menu-mobile--offcanvas  m-header-menu--skin-light m-header-menu--submenu-skin-light m-aside-header-menu-mobile--skin-light m-aside-header-menu-mobile--submenu-skin-light "  >
    
    <ul class="m-menu__nav  m-menu__nav--submenu-arrow ">

      <!-- <li class="m-menu__item  m-menu__item--active "  aria-haspopup="true">
        <a  href="{{URL::to('index')}}" class="m-menu__link ">
          <!-- <span class="m-menu__item-here"></span> -->
          <!-- <span class="m-menu__link-text">Dashboard</span>
        </a>
      </li> --> 

      <!-- <li class="m-menu__item "  aria-haspopup="true">
        <a  href="{{URL::to('show_examination_list')}}" class="m-menu__link ">
          <!-- <span class="m-menu__item-here"></span>
          <span class="m-menu__link-text">Examination List</span>
        </a>
      </li> --> 


<!--1st menu__HEC's Lists-->

        <li class="m-menu__item  m-menu__item--submenu m-menu__item--rel"  m-menu-submenu-toggle="click" aria-haspopup="true">
          <a  href="javascript:;" class="m-menu__link m-menu__toggle">
            <span class="m-menu__item-here"></span>
            <span class="m-menu__link-text">HEC&nbsp;Lists</span>

            <i class="m-menu__hor-arrow la la-angle-down"></i>
            <i class="m-menu__ver-arrow la la-angle-right"></i>
          </a>

          <div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--left">

            <span class="m-menu__arrow m-menu__arrow--adjust"></span>
            <ul class="m-menu__subnav">

                <h3 class="m-menu__heading m-menu__toggle" style="margin-left: 10%; color: #54566e;">
                <span class="m-menu__link-text">Campuses / Departments</span>
                </h3>

<!--Division of Sceience & Technology-->

              <li class="m-menu__item  m-menu__item--submenu">
                <a  href="{{URL::to('show_heclist')}}" class="m-menu__link ">
                  <i class="m-menu__link-icon fa fa-university"></i>
                  <span class="m-menu__link-text">Division of S & T</span>             
                </a>

                </li>

<!--Division of Arts & Ssc.-->

                <li class="m-menu__item  m-menu__item--submenu">
                <a  href="{{URL::to('#')}}" class="m-menu__link ">
                  <i class="m-menu__link-icon fa fa-university"></i>
                  <span class="m-menu__link-text">Division of Arts & Ssc.</span>             
                </a>

                </li>

<!--Division of Education-->
                <li class="m-menu__item  m-menu__item--submenu">
                <a  href="{{URL::to('#')}}" class="m-menu__link ">
                  <i class="m-menu__link-icon fa fa-university"></i>
                  <span class="m-menu__link-text">Division of Education</span>             
                </a>

                </li>

<!--Bank Road Campus-->
                <li class="m-menu__item  m-menu__item--submenu">
                <a  href="{{URL::to('#')}}" class="m-menu__link ">
                  <i class="m-menu__link-icon fa fa-university"></i>
                  <span class="m-menu__link-text">Bank Road Campus</span>             
                </a>

                </li>

<!--Faisalabad Campus-->
                <li class="m-menu__item  m-menu__item--submenu">
                <a  href="{{URL::to('#')}}" class="m-menu__link ">
                  <i class="m-menu__link-icon fa fa-university"></i>
                  <span class="m-menu__link-text">Faisalabad Campus</span>             
                </a>

                </li>

<!--DG Khan Campus-->
                <li class="m-menu__item  m-menu__item--submenu">
                <a  href="{{URL::to('#')}}" class="m-menu__link ">
                  <i class="m-menu__link-icon fa fa-university"></i>
                  <span class="m-menu__link-text">DG Khan Campus</span>             
                </a>

                </li>

<!--Attock Campus-->
                <li class="m-menu__item  m-menu__item--submenu">
                <a  href="{{URL::to('#')}}" class="m-menu__link ">
                  <i class="m-menu__link-icon fa fa-university"></i>
                  <span class="m-menu__link-text">Attock Campus</span>             
                </a>

                </li>

<!--Multan Campus-->
                <li class="m-menu__item  m-menu__item--submenu">
                <a  href="{{URL::to('#')}}" class="m-menu__link ">
                  <i class="m-menu__link-icon fa fa-university"></i>
                  <span class="m-menu__link-text">Multan Campus</span>             
                </a>

                </li>

<!--Township Campus-->
                <li class="m-menu__item  m-menu__item--submenu">
                <a  href="{{URL::to('#')}}" class="m-menu__link ">
                  <i class="m-menu__link-icon fa fa-university"></i>
                  <span class="m-menu__link-text">Township Campus</span>             
                </a>

                </li>


                  </ul></div></li>


<!--2nd menu__Examination List-->

        <li class="m-menu__item  m-menu__item--submenu m-menu__item--rel"  m-menu-submenu-toggle="click" aria-haspopup="true">
          <a  href="javascript:;" class="m-menu__link m-menu__toggle">
            <span class="m-menu__item-here"></span>
            <span class="m-menu__link-text">Examination&nbsp;Lists</span>

            <i class="m-menu__hor-arrow la la-angle-down"></i>
            <i class="m-menu__ver-arrow la la-angle-right"></i>
          </a>

          <div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--left">

            <span class="m-menu__arrow m-menu__arrow--adjust"></span>
            <ul class="m-menu__subnav">

                <h3 class="m-menu__heading m-menu__toggle" style="margin-left: 10%; color: #54566e;">
                <span class="m-menu__link-text">Campuses / Departments</span>
                </h3>

<!--Division of Sceience & Technology-->

              <li class="m-menu__item  m-menu__item--submenu"  m-menu-submenu-toggle="hover" m-menu-link-redirect="1" aria-haspopup="true">
                <a  href="javascript:;" class="m-menu__link m-menu__toggle">
                  <i class="m-menu__link-icon fa fa-university"></i>
                  <span class="m-menu__link-text">Division of S & T</span>
                  <i class="m-menu__hor-arrow la la-angle-right"></i>
                  <i class="m-menu__ver-arrow la la-angle-right"></i>
                </a>
                <div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--right">
                  <span class="m-menu__arrow "></span>
                  <ul class="m-menu__subnav">

                    <li class="m-menu__item "  m-menu-link-redirect="1" aria-haspopup="true">
                      <a  href="{{URL::to('exam_show_bsit')}}" class="m-menu__link ">
                        <i class="m-menu__link-icon fa fa-graduation-cap"></i>
                        <span class="m-menu__link-text">BS (Hons) IT</span>
                      </a>
                      </li>

                      <li class="m-menu__item "  m-menu-link-redirect="1" aria-haspopup="true">
                      <a  href="{{URL::to('exam_show_bschemistry')}}" class="m-menu__link ">
                        <i class="m-menu__link-icon fa fa-graduation-cap"></i>
                        <span class="m-menu__link-text">BS (Hons) Chemistry</span>
                      </a>
                      </li>

                      <li class="m-menu__item "  m-menu-link-redirect="1" aria-haspopup="true">
                      <a  href="{{URL::to('exam_show_bsmath')}}" class="m-menu__link ">
                        <i class="m-menu__link-icon fa fa-graduation-cap"></i>
                        <span class="m-menu__link-text">BS (Hons) Mathematics</span>
                      </a>
                      </li>

                      <li class="m-menu__item "  m-menu-link-redirect="1" aria-haspopup="true">
                      <a  href="{{URL::to('exam_show_bsphysics')}}" class="m-menu__link ">
                        <i class="m-menu__link-icon fa fa-graduation-cap"></i>
                        <span class="m-menu__link-text">BS (Hons) Physics</span>
                      </a>
                      </li>

                      <li class="m-menu__item "  m-menu-link-redirect="1" aria-haspopup="true">
                      <a  href="{{URL::to('exam_show_bsbotany')}}" class="m-menu__link ">
                        <i class="m-menu__link-icon fa fa-graduation-cap"></i>
                        <span class="m-menu__link-text">BS (Hons) Botany</span>
                      </a>
                      </li>

                      <li class="m-menu__item "  m-menu-link-redirect="1" aria-haspopup="true">
                      <a  href="{{URL::to('exam_show_bszoology')}}" class="m-menu__link ">
                        <i class="m-menu__link-icon fa fa-graduation-cap"></i>
                        <span class="m-menu__link-text">BS (Hons) Zoology</span>
                      </a>
                      </li>

                      <li class="m-menu__item "  m-menu-link-redirect="1" aria-haspopup="true">
                      <a  href="{{URL::to('exam_show_mscit')}}" class="m-menu__link ">
                        <i class="m-menu__link-icon fa fa-graduation-cap"></i>
                        <span class="m-menu__link-text">MSC (IT)</span>
                      </a>
                      </li>

                      <li class="m-menu__item "  m-menu-link-redirect="1" aria-haspopup="true">
                      <a  href="{{URL::to('exam_show_mscchemistry')}}" class="m-menu__link ">
                        <i class="m-menu__link-icon fa fa-graduation-cap"></i>
                        <span class="m-menu__link-text">MSC (Chemistry)</span>
                      </a>
                      </li>

                      <li class="m-menu__item "  m-menu-link-redirect="1" aria-haspopup="true">
                      <a  href="{{URL::to('exam_show_mscmath')}}" class="m-menu__link ">
                        <i class="m-menu__link-icon fa fa-graduation-cap"></i>
                        <span class="m-menu__link-text">MSC (Mathematics)</span>
                      </a>
                      </li>

                      <li class="m-menu__item "  m-menu-link-redirect="1" aria-haspopup="true">
                      <a  href="{{URL::to('exam_show_mscphysics')}}" class="m-menu__link ">
                        <i class="m-menu__link-icon fa fa-graduation-cap"></i>
                        <span class="m-menu__link-text">MSC (Physics)</span>
                      </a>
                      </li>

                    </ul>
                  </div>
                </li>

<!--Division of Arts & Ssc.-->

                <li class="m-menu__item  m-menu__item--submenu"  m-menu-submenu-toggle="hover" m-menu-link-redirect="1" aria-haspopup="true">
                <a  href="javascript:;" class="m-menu__link m-menu__toggle">
                  <i class="m-menu__link-icon fa fa-university"></i>
                  <span class="m-menu__link-text">Division of Arts & Ssc.</span>
                  <i class="m-menu__hor-arrow la la-angle-right"></i>
                  <i class="m-menu__ver-arrow la la-angle-right"></i>
                </a>
                <div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--right">
                  <span class="m-menu__arrow "></span>
                  <ul class="m-menu__subnav">

                    <li class="m-menu__item "  m-menu-link-redirect="1" aria-haspopup="true">
                      <a  href="{{URL::to('#')}}" class="m-menu__link ">
                        <i class="m-menu__link-icon fa fa-graduation-cap"></i>
                        <span class="m-menu__link-text">BS (Hons) IT</span>
                      </a>
                      </li>

                      <li class="m-menu__item "  m-menu-link-redirect="1" aria-haspopup="true">
                      <a  href="{{URL::to('#')}}" class="m-menu__link ">
                        <i class="m-menu__link-icon fa fa-graduation-cap"></i>
                        <span class="m-menu__link-text">MSC (IT)</span>
                      </a>
                      </li>


                    </ul>
                  </div>
                </li>

<!--Division of Education-->
                <li class="m-menu__item  m-menu__item--submenu"  m-menu-submenu-toggle="hover" m-menu-link-redirect="1" aria-haspopup="true">
                <a  href="javascript:;" class="m-menu__link m-menu__toggle">
                  <i class="m-menu__link-icon fa fa-university"></i>
                  <span class="m-menu__link-text">Division of Education</span>
                  <i class="m-menu__hor-arrow la la-angle-right"></i>
                  <i class="m-menu__ver-arrow la la-angle-right"></i>
                </a>
                <div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--right">
                  <span class="m-menu__arrow "></span>
                  <ul class="m-menu__subnav">

                   <li class="m-menu__item "  m-menu-link-redirect="1" aria-haspopup="true">
                      <a  href="{{URL::to('#')}}" class="m-menu__link ">
                        <i class="m-menu__link-icon fa fa-graduation-cap"></i>
                        <span class="m-menu__link-text">BS (Hons) IT</span>
                      </a>
                      </li>

                      <li class="m-menu__item "  m-menu-link-redirect="1" aria-haspopup="true">
                      <a  href="{{URL::to('#')}}" class="m-menu__link ">
                        <i class="m-menu__link-icon fa fa-graduation-cap"></i>
                        <span class="m-menu__link-text">MSC (IT)</span>
                      </a>
                      </li>

                    
                    </ul>
                  </div>
                </li>

<!--Bank Road Campus-->
                <li class="m-menu__item  m-menu__item--submenu"  m-menu-submenu-toggle="hover" m-menu-link-redirect="1" aria-haspopup="true">
                <a  href="javascript:;" class="m-menu__link m-menu__toggle">
                  <i class="m-menu__link-icon fa fa-university"></i>
                  <span class="m-menu__link-text">Bank Road Campus</span>
                  <i class="m-menu__hor-arrow la la-angle-right"></i>
                  <i class="m-menu__ver-arrow la la-angle-right"></i>
                </a>
                <div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--right">
                  <span class="m-menu__arrow "></span>
                  <ul class="m-menu__subnav">

                    <li class="m-menu__item "  m-menu-link-redirect="1" aria-haspopup="true">
                      <a  href="{{URL::to('#')}}" class="m-menu__link ">
                        <i class="m-menu__link-icon fa fa-graduation-cap"></i>
                        <span class="m-menu__link-text">BS (Hons) IT</span>
                      </a>
                      </li>

                      <li class="m-menu__item "  m-menu-link-redirect="1" aria-haspopup="true">
                      <a  href="{{URL::to('#')}}" class="m-menu__link ">
                        <i class="m-menu__link-icon fa fa-graduation-cap"></i>
                        <span class="m-menu__link-text">MSC (IT)</span>
                      </a>
                      </li>

                    </ul>
                  </div>
                </li>

<!--Faisalabad Campus-->
                <li class="m-menu__item  m-menu__item--submenu"  m-menu-submenu-toggle="hover" m-menu-link-redirect="1" aria-haspopup="true">
                <a  href="javascript:;" class="m-menu__link m-menu__toggle">
                  <i class="m-menu__link-icon fa fa-university"></i>
                  <span class="m-menu__link-text">Faisalabad Campus</span>
                  <i class="m-menu__hor-arrow la la-angle-right"></i>
                  <i class="m-menu__ver-arrow la la-angle-right"></i>
                </a>
                <div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--right">
                  <span class="m-menu__arrow "></span>
                  <ul class="m-menu__subnav">

                    <li class="m-menu__item "  m-menu-link-redirect="1" aria-haspopup="true">
                      <a  href="{{URL::to('#')}}" class="m-menu__link ">
                        <i class="m-menu__link-icon fa fa-graduation-cap"></i>
                        <span class="m-menu__link-text">BS (Hons) IT</span>
                      </a>
                      </li>

                      <li class="m-menu__item "  m-menu-link-redirect="1" aria-haspopup="true">
                      <a  href="{{URL::to('#')}}" class="m-menu__link ">
                        <i class="m-menu__link-icon fa fa-graduation-cap"></i>
                        <span class="m-menu__link-text">MSC (IT)</span>
                      </a>
                      </li>

                    </ul>
                  </div>
                </li>

<!--DG Khan Campus-->
                <li class="m-menu__item  m-menu__item--submenu"  m-menu-submenu-toggle="hover" m-menu-link-redirect="1" aria-haspopup="true">
                <a  href="javascript:;" class="m-menu__link m-menu__toggle">
                  <i class="m-menu__link-icon fa fa-university"></i>
                  <span class="m-menu__link-text">DG Khan Campus</span>
                  <i class="m-menu__hor-arrow la la-angle-right"></i>
                  <i class="m-menu__ver-arrow la la-angle-right"></i>
                </a>
                <div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--right">
                  <span class="m-menu__arrow "></span>
                  <ul class="m-menu__subnav">

                    <li class="m-menu__item "  m-menu-link-redirect="1" aria-haspopup="true">
                      <a  href="{{URL::to('#')}}" class="m-menu__link ">
                        <i class="m-menu__link-icon fa fa-graduation-cap"></i>
                        <span class="m-menu__link-text">BS (Hons) IT</span>
                      </a>
                      </li>

                      <li class="m-menu__item "  m-menu-link-redirect="1" aria-haspopup="true">
                      <a  href="{{URL::to('#')}}" class="m-menu__link ">
                        <i class="m-menu__link-icon fa fa-graduation-cap"></i>
                        <span class="m-menu__link-text">MSC (IT)</span>
                      </a>
                      </li>

                    </ul>
                  </div>
                </li>

<!--Attock Campus-->
                <li class="m-menu__item  m-menu__item--submenu"  m-menu-submenu-toggle="hover" m-menu-link-redirect="1" aria-haspopup="true">
                <a  href="javascript:;" class="m-menu__link m-menu__toggle">
                  <i class="m-menu__link-icon fa fa-university"></i>
                  <span class="m-menu__link-text">Attock Campus</span>
                  <i class="m-menu__hor-arrow la la-angle-right"></i>
                  <i class="m-menu__ver-arrow la la-angle-right"></i>
                </a>
                <div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--right">
                  <span class="m-menu__arrow "></span>
                  <ul class="m-menu__subnav">

                    <li class="m-menu__item "  m-menu-link-redirect="1" aria-haspopup="true">
                      <a  href="{{URL::to('#')}}" class="m-menu__link ">
                        <i class="m-menu__link-icon fa fa-graduation-cap"></i>
                        <span class="m-menu__link-text">BS (Hons) IT</span>
                      </a>
                      </li>

                      <li class="m-menu__item "  m-menu-link-redirect="1" aria-haspopup="true">
                      <a  href="{{URL::to('#')}}" class="m-menu__link ">
                        <i class="m-menu__link-icon fa fa-graduation-cap"></i>
                        <span class="m-menu__link-text">MSC (IT)</span>
                      </a>
                      </li>

                    </ul>
                  </div>
                </li>

<!--Multan Campus-->
                <li class="m-menu__item  m-menu__item--submenu"  m-menu-submenu-toggle="hover" m-menu-link-redirect="1" aria-haspopup="true">
                <a  href="javascript:;" class="m-menu__link m-menu__toggle">
                  <i class="m-menu__link-icon fa fa-university"></i>
                  <span class="m-menu__link-text">Multan Campus</span>
                  <i class="m-menu__hor-arrow la la-angle-right"></i>
                  <i class="m-menu__ver-arrow la la-angle-right"></i>
                </a>
                <div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--right">
                  <span class="m-menu__arrow "></span>
                  <ul class="m-menu__subnav">

                    <li class="m-menu__item "  m-menu-link-redirect="1" aria-haspopup="true">
                      <a  href="{{URL::to('#')}}" class="m-menu__link ">
                        <i class="m-menu__link-icon fa fa-graduation-cap"></i>
                        <span class="m-menu__link-text">BS (Hons) IT</span>
                      </a>
                      </li>

                      <li class="m-menu__item "  m-menu-link-redirect="1" aria-haspopup="true">
                      <a  href="{{URL::to('#')}}" class="m-menu__link ">
                        <i class="m-menu__link-icon fa fa-graduation-cap"></i>
                        <span class="m-menu__link-text">MSC (IT)</span>
                      </a>
                      </li>

                    </ul>
                  </div>
                </li>

<!--Township Campus-->
                <li class="m-menu__item  m-menu__item--submenu"  m-menu-submenu-toggle="hover" m-menu-link-redirect="1" aria-haspopup="true">
                <a  href="javascript:;" class="m-menu__link m-menu__toggle">
                  <i class="m-menu__link-icon fa fa-university"></i>
                  <span class="m-menu__link-text">Township Campus</span>
                  <i class="m-menu__hor-arrow la la-angle-right"></i>
                  <i class="m-menu__ver-arrow la la-angle-right"></i>
                </a>
                <div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--right">
                  <span class="m-menu__arrow "></span>
                  <ul class="m-menu__subnav">

                    <li class="m-menu__item "  m-menu-link-redirect="1" aria-haspopup="true">
                      <a  href="{{URL::to('#')}}" class="m-menu__link ">
                        <i class="m-menu__link-icon fa fa-graduation-cap"></i>
                        <span class="m-menu__link-text">BS (Hons) IT</span>
                      </a>
                      </li>

                      <li class="m-menu__item "  m-menu-link-redirect="1" aria-haspopup="true">
                      <a  href="{{URL::to('#')}}" class="m-menu__link ">
                        <i class="m-menu__link-icon fa fa-graduation-cap"></i>
                        <span class="m-menu__link-text">MSC (IT)</span>
                      </a>
                      </li>

                    </ul>
                  </div>
                </li>


                  </ul></div></li>



<!--4rd menu__Approved lists -->

        <li class="m-menu__item  m-menu__item--submenu m-menu__item--rel"  m-menu-submenu-toggle="click" aria-haspopup="true">
          <a  href="javascript:;" class="m-menu__link m-menu__toggle">
            <span class="m-menu__item-here"></span>
            <span class="m-menu__link-text">Eligible&nbsp;Students</span>

            <i class="m-menu__hor-arrow la la-angle-down"></i>
            <i class="m-menu__ver-arrow la la-angle-right"></i>
          </a>

          <div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--left">

            <span class="m-menu__arrow m-menu__arrow--adjust"></span>
            <ul class="m-menu__subnav">

                <h3 class="m-menu__heading m-menu__toggle" style="margin-left: 10%; color: #54566e;">
                <span class="m-menu__link-text">Campuses / Departments</span>
                </h3>

<!--Division of Sceience & Technology-->

              <li class="m-menu__item  m-menu__item--submenu">
                <a  href="{{URL::to('show_eligiblelist')}}" class="m-menu__link ">
                  <i class="m-menu__link-icon fa fa-university"></i>
                  <span class="m-menu__link-text">Division of S & T</span>             
                </a>

                </li>

<!--Division of Arts & Ssc.-->

                <li class="m-menu__item  m-menu__item--submenu">
                <a  href="{{URL::to('#')}}" class="m-menu__link ">
                  <i class="m-menu__link-icon fa fa-university"></i>
                  <span class="m-menu__link-text">Division of Arts & Ssc.</span>             
                </a>

                </li>

<!--Division of Education-->
                <li class="m-menu__item  m-menu__item--submenu">
                <a  href="{{URL::to('#')}}" class="m-menu__link ">
                  <i class="m-menu__link-icon fa fa-university"></i>
                  <span class="m-menu__link-text">Division of Education</span>             
                </a>

                </li>

<!--Bank Road Campus-->
                <li class="m-menu__item  m-menu__item--submenu">
                <a  href="{{URL::to('#')}}" class="m-menu__link ">
                  <i class="m-menu__link-icon fa fa-university"></i>
                  <span class="m-menu__link-text">Bank Road Campus</span>             
                </a>

                </li>

<!--Faisalabad Campus-->
                <li class="m-menu__item  m-menu__item--submenu">
                <a  href="{{URL::to('#')}}" class="m-menu__link ">
                  <i class="m-menu__link-icon fa fa-university"></i>
                  <span class="m-menu__link-text">Faisalabad Campus</span>             
                </a>

                </li>

<!--DG Khan Campus-->
                <li class="m-menu__item  m-menu__item--submenu">
                <a  href="{{URL::to('#')}}" class="m-menu__link ">
                  <i class="m-menu__link-icon fa fa-university"></i>
                  <span class="m-menu__link-text">DG Khan Campus</span>             
                </a>

                </li>

<!--Attock Campus-->
                <li class="m-menu__item  m-menu__item--submenu">
                <a  href="{{URL::to('#')}}" class="m-menu__link ">
                  <i class="m-menu__link-icon fa fa-university"></i>
                  <span class="m-menu__link-text">Attock Campus</span>             
                </a>

                </li>

<!--Multan Campus-->
                <li class="m-menu__item  m-menu__item--submenu">
                <a  href="{{URL::to('#')}}" class="m-menu__link ">
                  <i class="m-menu__link-icon fa fa-university"></i>
                  <span class="m-menu__link-text">Multan Campus</span>             
                </a>

                </li>

<!--Township Campus-->
                <li class="m-menu__item  m-menu__item--submenu">
                <a  href="{{URL::to('#')}}" class="m-menu__link ">
                  <i class="m-menu__link-icon fa fa-university"></i>
                  <span class="m-menu__link-text">Township Campus</span>             
                </a>

                </li>


                  </ul></div></li>



<!--5th menu__Approved lists -->

        <li class="m-menu__item  m-menu__item--submenu m-menu__item--rel"  m-menu-submenu-toggle="click" aria-haspopup="true">
          <a  href="javascript:;" class="m-menu__link m-menu__toggle">
            <span class="m-menu__item-here"></span>
            <span class="m-menu__link-text">Aproved&nbsp;Students</span>

            <i class="m-menu__hor-arrow la la-angle-down"></i>
            <i class="m-menu__ver-arrow la la-angle-right"></i>
          </a>

          <div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--left">

            <span class="m-menu__arrow m-menu__arrow--adjust"></span>
            <ul class="m-menu__subnav">

                <h3 class="m-menu__heading m-menu__toggle" style="margin-left: 10%; color: #54566e;">
                <span class="m-menu__link-text">Campuses / Departments</span>
                </h3>

<!--Division of Sceience & Technology-->

              <li class="m-menu__item  m-menu__item--submenu">
                <a  href="{{URL::to('show_aprovedlist')}}" class="m-menu__link ">
                  <i class="m-menu__link-icon fa fa-university"></i>
                  <span class="m-menu__link-text">Division of S & T</span>             
                </a>

                </li>

<!--Division of Arts & Ssc.-->

                <li class="m-menu__item  m-menu__item--submenu">
                <a  href="{{URL::to('#')}}" class="m-menu__link ">
                  <i class="m-menu__link-icon fa fa-university"></i>
                  <span class="m-menu__link-text">Division of Arts & Ssc.</span>             
                </a>

                </li>

<!--Division of Education-->
                <li class="m-menu__item  m-menu__item--submenu">
                <a  href="{{URL::to('#')}}" class="m-menu__link ">
                  <i class="m-menu__link-icon fa fa-university"></i>
                  <span class="m-menu__link-text">Division of Education</span>             
                </a>

                </li>

<!--Bank Road Campus-->
                <li class="m-menu__item  m-menu__item--submenu">
                <a  href="{{URL::to('#')}}" class="m-menu__link ">
                  <i class="m-menu__link-icon fa fa-university"></i>
                  <span class="m-menu__link-text">Bank Road Campus</span>             
                </a>

                </li>

<!--Faisalabad Campus-->
                <li class="m-menu__item  m-menu__item--submenu">
                <a  href="{{URL::to('#')}}" class="m-menu__link ">
                  <i class="m-menu__link-icon fa fa-university"></i>
                  <span class="m-menu__link-text">Faisalabad Campus</span>             
                </a>

                </li>

<!--DG Khan Campus-->
                <li class="m-menu__item  m-menu__item--submenu">
                <a  href="{{URL::to('#')}}" class="m-menu__link ">
                  <i class="m-menu__link-icon fa fa-university"></i>
                  <span class="m-menu__link-text">DG Khan Campus</span>             
                </a>

                </li>

<!--Attock Campus-->
                <li class="m-menu__item  m-menu__item--submenu">
                <a  href="{{URL::to('#')}}" class="m-menu__link ">
                  <i class="m-menu__link-icon fa fa-university"></i>
                  <span class="m-menu__link-text">Attock Campus</span>             
                </a>

                </li>

<!--Multan Campus-->
                <li class="m-menu__item  m-menu__item--submenu">
                <a  href="{{URL::to('#')}}" class="m-menu__link ">
                  <i class="m-menu__link-icon fa fa-university"></i>
                  <span class="m-menu__link-text">Multan Campus</span>             
                </a>

                </li>

<!--Township Campus-->
                <li class="m-menu__item  m-menu__item--submenu">
                <a  href="{{URL::to('#')}}" class="m-menu__link ">
                  <i class="m-menu__link-icon fa fa-university"></i>
                  <span class="m-menu__link-text">Township Campus</span>             
                </a>

                </li>


                  </ul></div></li>


<!--6th Selected or Awarded Students -->

        <li class="m-menu__item  m-menu__item--submenu m-menu__item--rel"  m-menu-submenu-toggle="click" aria-haspopup="true">
          <a  href="javascript:;" class="m-menu__link m-menu__toggle">
            <span class="m-menu__item-here"></span>
            <span class="m-menu__link-text">Selected&nbsp;Students</span>

            <i class="m-menu__hor-arrow la la-angle-down"></i>
            <i class="m-menu__ver-arrow la la-angle-right"></i>
          </a>

          <div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--left">

            <span class="m-menu__arrow m-menu__arrow--adjust"></span>
            <ul class="m-menu__subnav">

                <h3 class="m-menu__heading m-menu__toggle" style="margin-left: 10%; color: #54566e;">
                <span class="m-menu__link-text">Campuses / Departments</span>
                </h3>

<!--Division of Sceience & Technology-->

              <li class="m-menu__item  m-menu__item--submenu">
                <a  href="{{URL::to('show_awardedlist')}}" class="m-menu__link ">
                  <i class="m-menu__link-icon fa fa-university"></i>
                  <span class="m-menu__link-text">Division of S & T</span>             
                </a>

                </li>

<!--Division of Arts & Ssc.-->

                <li class="m-menu__item  m-menu__item--submenu">
                <a  href="{{URL::to('#')}}" class="m-menu__link ">
                  <i class="m-menu__link-icon fa fa-university"></i>
                  <span class="m-menu__link-text">Division of Arts & Ssc.</span>             
                </a>

                </li>

<!--Division of Education-->
                <li class="m-menu__item  m-menu__item--submenu">
                <a  href="{{URL::to('#')}}" class="m-menu__link ">
                  <i class="m-menu__link-icon fa fa-university"></i>
                  <span class="m-menu__link-text">Division of Education</span>             
                </a>

                </li>

<!--Bank Road Campus-->
                <li class="m-menu__item  m-menu__item--submenu">
                <a  href="{{URL::to('#')}}" class="m-menu__link ">
                  <i class="m-menu__link-icon fa fa-university"></i>
                  <span class="m-menu__link-text">Bank Road Campus</span>             
                </a>

                </li>

<!--Faisalabad Campus-->
                <li class="m-menu__item  m-menu__item--submenu">
                <a  href="{{URL::to('#')}}" class="m-menu__link ">
                  <i class="m-menu__link-icon fa fa-university"></i>
                  <span class="m-menu__link-text">Faisalabad Campus</span>             
                </a>

                </li>

<!--DG Khan Campus-->
                <li class="m-menu__item  m-menu__item--submenu">
                <a  href="{{URL::to('#')}}" class="m-menu__link ">
                  <i class="m-menu__link-icon fa fa-university"></i>
                  <span class="m-menu__link-text">DG Khan Campus</span>             
                </a>

                </li>

<!--Attock Campus-->
                <li class="m-menu__item  m-menu__item--submenu">
                <a  href="{{URL::to('#')}}" class="m-menu__link ">
                  <i class="m-menu__link-icon fa fa-university"></i>
                  <span class="m-menu__link-text">Attock Campus</span>             
                </a>

                </li>

<!--Multan Campus-->
                <li class="m-menu__item  m-menu__item--submenu">
                <a  href="{{URL::to('#')}}" class="m-menu__link ">
                  <i class="m-menu__link-icon fa fa-university"></i>
                  <span class="m-menu__link-text">Multan Campus</span>             
                </a>

                </li>

<!--Township Campus-->
                <li class="m-menu__item  m-menu__item--submenu">
                <a  href="{{URL::to('#')}}" class="m-menu__link ">
                  <i class="m-menu__link-icon fa fa-university"></i>
                  <span class="m-menu__link-text">Township Campus</span>             
                </a>

                </li>


                  </ul></div></li>


<!--7th Selected or Awarded Students -->

        <li class="m-menu__item  m-menu__item--submenu m-menu__item--rel"  m-menu-submenu-toggle="click" aria-haspopup="true">
          <a  href="javascript:;" class="m-menu__link m-menu__toggle">
            <span class="m-menu__item-here"></span>
            <span class="m-menu__link-text">Assigned&nbsp;Students</span>

            <i class="m-menu__hor-arrow la la-angle-down"></i>
            <i class="m-menu__ver-arrow la la-angle-right"></i>
          </a>

          <div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--left">

            <span class="m-menu__arrow m-menu__arrow--adjust"></span>
            <ul class="m-menu__subnav">

                <h3 class="m-menu__heading m-menu__toggle" style="margin-left: 10%; color: #54566e;">
                <span class="m-menu__link-text">Campuses / Departments</span>
                </h3>

<!--Division of Sceience & Technology-->

              <li class="m-menu__item  m-menu__item--submenu">
                <a  href="{{URL::to('show_assigned_page')}}" class="m-menu__link ">
                  <i class="m-menu__link-icon fa fa-university"></i>
                  <span class="m-menu__link-text">Division of S & T</span>             
                </a>

                </li>

<!--Division of Arts & Ssc.-->

                <li class="m-menu__item  m-menu__item--submenu">
                <a  href="{{URL::to('#')}}" class="m-menu__link ">
                  <i class="m-menu__link-icon fa fa-university"></i>
                  <span class="m-menu__link-text">Division of Arts & Ssc.</span>             
                </a>

                </li>

<!--Division of Education-->
                <li class="m-menu__item  m-menu__item--submenu">
                <a  href="{{URL::to('#')}}" class="m-menu__link ">
                  <i class="m-menu__link-icon fa fa-university"></i>
                  <span class="m-menu__link-text">Division of Education</span>             
                </a>

                </li>

<!--Bank Road Campus-->
                <li class="m-menu__item  m-menu__item--submenu">
                <a  href="{{URL::to('#')}}" class="m-menu__link ">
                  <i class="m-menu__link-icon fa fa-university"></i>
                  <span class="m-menu__link-text">Bank Road Campus</span>             
                </a>

                </li>

<!--Faisalabad Campus-->
                <li class="m-menu__item  m-menu__item--submenu">
                <a  href="{{URL::to('#')}}" class="m-menu__link ">
                  <i class="m-menu__link-icon fa fa-university"></i>
                  <span class="m-menu__link-text">Faisalabad Campus</span>             
                </a>

                </li>

<!--DG Khan Campus-->
                <li class="m-menu__item  m-menu__item--submenu">
                <a  href="{{URL::to('#')}}" class="m-menu__link ">
                  <i class="m-menu__link-icon fa fa-university"></i>
                  <span class="m-menu__link-text">DG Khan Campus</span>             
                </a>

                </li>

<!--Attock Campus-->
                <li class="m-menu__item  m-menu__item--submenu">
                <a  href="{{URL::to('#')}}" class="m-menu__link ">
                  <i class="m-menu__link-icon fa fa-university"></i>
                  <span class="m-menu__link-text">Attock Campus</span>             
                </a>

                </li>

<!--Multan Campus-->
                <li class="m-menu__item  m-menu__item--submenu">
                <a  href="{{URL::to('#')}}" class="m-menu__link ">
                  <i class="m-menu__link-icon fa fa-university"></i>
                  <span class="m-menu__link-text">Multan Campus</span>             
                </a>

                </li>

<!--Township Campus-->
                <li class="m-menu__item  m-menu__item--submenu">
                <a  href="{{URL::to('#')}}" class="m-menu__link ">
                  <i class="m-menu__link-icon fa fa-university"></i>
                  <span class="m-menu__link-text">Township Campus</span>             
                </a>

                </li>


                  </ul></div></li>




    <!--8th menu__Others-->
                      <li class="m-menu__item  m-menu__item--submenu m-menu__item--rel"  m-menu-submenu-toggle="click" m-menu-link-redirect="1" aria-haspopup="true">
                        <a  href="javascript:;" class="m-menu__link m-menu__toggle">
                          <span class="m-menu__item-here"></span>
                          <span class="m-menu__link-text">Others</span>
                          <i class="m-menu__hor-arrow la la-angle-down"></i>
                          <i class="m-menu__ver-arrow la la-angle-right"></i>
                        </a>

                        <div class="m-menu__submenu  m-menu__submenu--fixed m-menu__submenu--left" style="width:280px">
                          <span class="m-menu__arrow m-menu__arrow--adjust">
                          </span>

                          <div class="m-menu__subnav">
                          <ul class="m-menu__content">
                            <li class="m-menu__item">

                              <h3 class="m-menu__heading m-menu__toggle">
                                <span class="m-menu__link-text">Scholership&nbsp;Items</span>
                                <i class="m-menu__ver-arrow la la-angle-right">
                                </i>
                              </h3>
                                   
                              <ul class="m-menu__inner">
                                <li class="m-menu__item "  m-menu-link-redirect="1" aria-haspopup="true">
                                  <a  href="{{URL::to('show_laptop')}}" class="m-menu__link ">
                                    <i class="m-menu__link-icon fa fa-laptop"></i>
                                    <span class="m-menu__link-text">Laptops</span>
                                  </a>
                                </li>
                              </ul>

                              <ul class="m-menu__inner">
                                <li class="m-menu__item "  m-menu-link-redirect="1" aria-haspopup="true">
                                  <a  href="{{URL::to('show_bag')}}" class="m-menu__link ">
                                    <i class="m-menu__link-icon fa fa-suitcase"></i>
                                    <span class="m-menu__link-text">Bags</span>
                                  </a>
                                </li>
                              </ul>

                              <ul class="m-menu__inner">
                                <li class="m-menu__item "  m-menu-link-redirect="1" aria-haspopup="true">
                                  <a  href="{{URL::to('show_evo')}}" class="m-menu__link ">
                                    <i class="m-menu__link-icon fa fa-rss"></i>
                                    <span class="m-menu__link-text">Evo</span>
                                  </a>
                                </li>

                                <h3 class="m-menu__heading m-menu__toggle">
                                <span class="m-menu__link-text">Other Lists</span>
                                <i class="m-menu__ver-arrow la la-angle-right">
                                </i>
                              </h3>

                              </ul>


                              <ul class="m-menu__inner">
                                <li class="m-menu__item "  m-menu-link-redirect="1" aria-haspopup="true">
                                  <a  href="{{URL::to('show_issued_cniclist')}}" class="m-menu__link ">
                                    <i class="m-menu__link-icon fa fa-user"></i>
                                    <span class="m-menu__link-text">Issued CNIC by HEC</span>
                                  </a>
                                </li>
                              </ul>
                              

                              <ul class="m-menu__inner">
                                <li class="m-menu__item "  m-menu-link-redirect="1" aria-haspopup="true">
                                  <a  href="{{URL::to('show_user')}}" class="m-menu__link ">
                                    <i class="m-menu__link-icon fa fa-user"></i>
                                    <span class="m-menu__link-text">Users List</span>
                                  </a>
                                </li>
                              </ul>


                              <!-- <ul class="m-menu__inner">
                                <li class="m-menu__item "  m-menu-link-redirect="1" aria-haspopup="true">
                                  <a  href="{{URL::to('upload')}}" class="m-menu__link ">
                                    <i class="m-menu__link-icon fa fa-trophy"></i>
                                    <span class="m-menu__link-text">Budget Wali List</span>
                                  </a>
                                </li>
                              </ul> -->



                            </li>
                          </ul>
                        </div>
                      </div>
                    </li>  


                     </ul>
  






  </div>
</div>
<!-- end::Horizontal Menu -->                                                                        <!--begin::Search-->

<!--is jaga pe search form pera howa tha-->

<!--end::Search-->                                  </div>
        </div>

    @endrole 