{{-- <link rel="stylesheet" href="{{ asset(mix('vendors/css/vendors.min.css')) }}" /> --}}
{{-- <link rel="stylesheet" href="{{ asset(mix('vendors/css/ui/prism.min.css')) }}" /> --}}
{{-- Vendor Styles --}}
@yield('vendor-style')

{{-- Page Styles --}}
@yield('page-style')

{{-- Laravel Style --}}
{{-- <link rel="stylesheet"  href="{{asset('blog/css/animate.css')}}"  media="all">
<link rel="stylesheet"  href="{{asset('blog/css/bootstrap.min.css')}}"  media="all">
<link rel="stylesheet"  href="{{asset('blog/css/line-awesome.min.css')}}" media="all">
<link rel="stylesheet"  href="{{asset('blog/css/all.min.css')}}" media="all">
<link rel="stylesheet"  href="{{asset('blog/js/lib/slick/slick.css')}}" media="all">
<link rel="stylesheet"  href="{{asset('blog/js/lib/slick/slick-theme.css')}}" media="all">
<link rel="stylesheet"  href="{{asset('blog/css/style.css')}}" media="all">
<link rel="stylesheet"  href="{{asset('blog/css/responsive.css')}}" media="all">
<link rel="stylesheet"  href="{{asset('blog/css/color.css')}}" media="all">
<link rel="stylesheet"  href="{{asset('blog/css/prism.css')}}" media="all"> --}}
{{-- <script src="{{asset('blog/css/prism.css')}}"></script> --}}

{{-- horizontalLayoutMaster<link href="{{asset('css/whatsapp-widget.css')}}?id={{time()}}" rel="stylesheet" media="all"> --}}

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

{{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> --}}
    <link type="text/css" rel="preload" href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,600,600i,700,700i,900,900i|Roboto:300,300i,400,400i,600,600i,700,700i,900,900i|Lato:300,300i,400,400i,600,600i,700,700i,900,900i|Raleway:300,300i,400,400i,600,600i,700,700i,900,900i|Lato:300,300i,400,400i,600,600i,700,700i,900,900i|Roboto+Slab:300,300i,400,400i,600,600i,700,700i,900,900i|Dosis:300,300i,400,400i,600,600i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,900,900i|Oswald:300,300i,400,400i,600,600i,700,700i,900,900i&amp;display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'"><link rel="stylesheet" href="http://d2uolguxr56s4e.cloudfront.net/internal/pages/css/new_bootstrap.css">

    {{-- <link rel="preload" href="{{asset('assets/css/main_components.css')}}" as="style" onload="this.onload=null;this.rel='stylesheet'"> --}}
    <link rel="preload" href="{{asset('assets/css/font-awesome.css')}}" as="style" onload="this.onload=null;this.rel='stylesheet'">

    <noscript>
        {{-- <link rel="preload" href="{{asset('assets/css/main_components.css')}}" as="style" onload="this.onload=null;this.rel='stylesheet'"> --}}
        {{-- <link rel="stylesheet" href="http://d2uolguxr56s4e.cloudfront.net/internal/pages/css/kartra_components.css"> --}}
        {{-- <link rel="stylesheet" href="http://app.kartra.com/css/new/css/pages/font-awesome.css"> --}}
    <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,600,600i,700,700i,900,900i|Roboto:300,300i,400,400i,600,600i,700,700i,900,900i|Lato:300,300i,400,400i,600,600i,700,700i,900,900i|Raleway:300,300i,400,400i,600,600i,700,700i,900,900i|Lato:300,300i,400,400i,600,600i,700,700i,900,900i|Roboto+Slab:300,300i,400,400i,600,600i,700,700i,900,900i|Dosis:300,300i,400,400i,600,600i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,900,900i|Oswald:300,300i,400,400i,600,600i,700,700i,900,900i&amp;display=swap">
</noscript>

    {{-- <script>
        /*! loadCSS rel=preload polyfill. [c]2017 Filament Group, Inc. MIT License */
        (function(w){"use strict";if(!w.loadCSS){w.loadCSS=function(){}}var rp=loadCSS.relpreload={};rp.support=function(){var ret;try{ret=w.document.createElement("link").relList.supports("preload")}catch(e){ret=false}return function(){return ret}}();rp.bindMediaToggle=function(link){var finalMedia=link.media||"all";function enableStylesheet(){link.media=finalMedia}if(link.addEventListener){link.addEventListener("load",enableStylesheet)}else if(link.attachEvent){link.attachEvent("onload",enableStylesheet)}setTimeout(function(){link.rel="stylesheet";link.media="only x"});setTimeout(enableStylesheet,3e3)};rp.poly=function(){if(rp.support()){return}var links=w.document.getElementsByTagName("link");for(var i=0;i<links.length;i++){var link=links[i];if(link.rel==="preload"&&link.getAttribute("as")==="style"&&!link.getAttribute("data-loadcss")){link.setAttribute("data-loadcss",true);rp.bindMediaToggle(link)}}};if(!rp.support()){rp.poly();var run=w.setInterval(rp.poly,500);if(w.addEventListener){w.addEventListener("load",function(){rp.poly();w.clearInterval(run)})}else if(w.attachEvent){w.attachEvent("onload",function(){rp.poly();w.clearInterval(run)})}}if(typeof exports!=="undefined"){exports.loadCSS=loadCSS}else{w.loadCSS=loadCSS}})(typeof global!=="undefined"?global:this);

        window.global_id = 'wUeM7yHb4QrK';
        window.secure_base_url = 'http://app.kartra.com/';
    </script> --}}

    <!--headerIncludes-->
    <style>

    .overlay_builder {
        position: relative;
    }

    .kartra_optin_footer-poweredby > p {
        font-size: 12px;
        line-height: 130%;
        font-weight: 300;
        color: #333;
        margin-top: 0px;
        margin-bottom: 0px;
    }

	body.modal-open{
		overflow:hidden;
		overflow-x:;
	}


	#page_background_color
	{
		background-color:#ffffff;
	}
	body
	{
		background-color:#ffffff;

	}


    [data-effect] {
        visibility: hidden;
    }

    </style>
    {{-- <script>
        var google_analytics = null;
        (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-W78XJT7');
    </script>
    <script src="https://home.kartra.com/js/build/front/pages/skeleton-above.js"></script> --}}
<style id="pagesCustomCSS">
/* CHECKOUT PAGE */



.kartra_list {
    margin: 0px;
    padding: 0px;
    list-style: none;
    justify-content: center;
    display: grid;
}
.kp-nav-pills li {
	background: rgba(0, 0, 0, 0.05);
	-webkit-box-shadow: inset 0 1px 5px 0 rgba(0, 47, 153, .16);
	box-shadow: inset 0 1px 5px 0 rgba(0, 47, 153, .16);
	color: #002f99;
	font-size: 20px;
	border-radius: 0px;
	position: relative;
	text-align: center;
}
.kp-nav-pills li a {
	padding: 15px 25px;
	color: #999;
	font-weight: bold;
}
.kp-nav-pills li a {
	background: transparent;
}
.nav-pills.kp-nav-pills li.active {
	background: #fff;
	border-radius: 4px!important;
	-webkit-box-shadow: 0 2px 4px rgba(0, 0, 0, .24);
	box-shadow: 0 2px 4px rgba(0, 0, 0, .24);
	color: #4692ff;
	font-weight: 700;
	margin-bottom: -3px;
	margin-top: -5px;
}
.kp-nav-pills li:first-child {
	border-radius: 5px 0px 0px 5px;
}
.kp-nav-pills li:last-child {
	border-radius: 0px 5px 5px 0px;
}
.kp-nav-pills {
	display: flex;
	/*margin: auto;*/
	/*height: 100%;*/
	justify-content: center;
	margin-bottom: 40px;
}
.kp-nav-pills li {
	display: flex;
	align-items: center;
	background: rgba(0, 0, 0, 0.05);
	/*display: table-cell !important;*/
	/*float: none;*/
	/*text-align: center;*/
	/*height: 100%;*/
	justify-content: center;
	margin-right: -3px;
	/*vertical-align: top;*/
}
.kp-plans-wrapper {
	position: relative;
	margin-top: 60px;
	height: 500px;
	margin-bottom: 50px;
}
.kp-plans-content {
	width: 100%;
	height: 100%;
	/*position: absolute;*/
	top: 0px;
	left: 0px;
	/*visibility: hidden;*/
}
.kp-plans-content.active-plan {
	visibility: visible;
}
.tab-content {
	margin: 0px 0px 20px 0px;
}
.fade {
	opacity: 0;
	-webkit-transition: opacity 0.3s linear !important;
	-o-transition: opacity 0.3s linear !important;
	transition: opacity 0.3s linear !important;
}
.kp-nav-pills li a span {
	display: block;
	padding: 10px 0px 0px 0px;
	font-size: 14px;
	position: relative;
	color: #666;
	font-weight: 400;
}
.nav-pills>li.active>a, .nav-pills>li.active>a:hover, .nav-pills>li.active>a:focus {
	color: #000;
	background-color: transparent;
}
.pricing_nav {
	margin: 0;
	padding: 0;
	list-style: none;
	display: flex;
	flex-wrap: wrap;
}
.pricing_nav li {
	width: 16.66666666%;
	border-right: 1px solid #eff0f2;
	box-sizing: border-box;
	z-index: 1;
}
.kartra_text--strike-red-color s {
	color: #ff92a0;
}
.background-item--border-top-bottom-none-important {
	border-top: 0px solid !important;
	border-bottom: 0px solid !important;
}
.background-item--border-top-none-important {
	border-top: 0px solid !important;
}
.pricing_nav li a.pricing_link {
	padding: 15px 8px;
	transition: all .3s;
}
.pricing_nav li a.pricing_link:hover {
	background-color: #fbc02d;
}
.pricing_nav li:last-child {
	border-right: 0px solid transparent;
}
/*
.modal-lg {
	max-width: 600px;
}
*/

.kartra_headline--kp-home-index-text-shadow, .kartra_text--kp-home-index-text-shadow {
	text-shadow: 1px 2px 3px rgba(000, 000, 000, 0.2);
}
.kartra_image_180 {
	max-width: 180px;
}
.kartra_image_240 {
	max-width: 240px;
}
.kartra_image_320 {
	max-width: 320px;
}
.kartra_hero_section_shadow:before, .kartra_hero_section_shadow:after {
	content: "";
	position: absolute;
	left: 0;
	right: 0;
	height: 15px;
}
.kartra_hero_section_shadow:before {
	top: 0;
	background: -moz-linear-gradient(top, rgba(0, 0, 0, 0.2) 0%, rgba(0, 0, 0, 0) 100%);
	background: -webkit-linear-gradient(top, rgba(0, 0, 0, 0.2) 0%, rgba(0, 0, 0, 0) 100%);
	background: linear-gradient(to bottom, rgba(0, 0, 0, 0.2) 0%, rgba(0, 0, 0, 0) 100%);
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#4d000000', endColorstr='#00000000', GradientType=0);
}
.kartra_hero_section_shadow:after {
	bottom: 0;
	background: -moz-linear-gradient(top, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.2) 100%);
	background: -webkit-linear-gradient(top, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.2) 100%);
	background: linear-gradient(to bottom, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.2) 100%);
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#00000000', endColorstr='#4d000000', GradientType=0);
}
.kartra_image--logo {
	max-width: 200px !important;
}
.navbar-nav--md-padding-top-bottom-special-medium {
	padding-top: 20px;
	padding-bottom: 20px;
}
.kp-nav-pills li:last-child:before {
	content: "";
	position: absolute;
	top: -35px;
	right: -215px;
	width: 200px;
	height: 90px;
	background-image: url("http://d1aettbyeyfilo.cloudfront.net/Kartra/4798525_1561966383124159.png");
	background-size: contain;
	background-repeat: no-repeat;
	z-index: 0;
}
.kp-nav-pills li:last-child.active:before {
	top: -30px;
}

.kartra_item_info__text{
    position: relative;
}
.kartra_item_info__text--bg-highlight::before{
    content: "";
    position: absolute;
    width: calc(100% + 25px);
    height: calc(100% + 10px);
    top: -5px;
    left: -15px;
    background-image: url('http://d2uolguxr56s4e.cloudfront.net/internal/pages/images/custom-brush01.png');
    background-size: 100% 100%;
}
@media(max-width: 991px) {
	.kp-nav-pills li:last-child:before {
		top: -15px;
		right: -130px;
		width: 120px;
		height: 60px
	}
	.kp-nav-pills li:last-child.active:before {
		top: -10px;
	}
}

.kartra_helpdesk_sidebar_button {
    display:none;
}

@media (max-width: 767px) {
	.kartra_button1--kp-home-01-sm-padding-left-right-small, .kartra_button1--hollow.kartra_button1--kp-home-01-sm-padding-left-right-small {
		padding: 15px 30px;
	}
	.kartra_image--logo {
		max-width: 160px !important;
	}
	.navbar-toggle {
		margin-top: 0px;
		margin-bottom: 0px;
	}
	.navbar-nav--md-padding-top-bottom-special-medium {
		padding-top: 0px;
		padding-bottom: 0px;
	}
	.kp-nav-pills li:last-child:before {
		display: none;
	}
		#bonusarrows {display:none;}
}

 div[data-component=image] .kartra_element_wrapper__pattern-2 .kartra_element_wrapper__pattern--top{
    content: url(http://d2uolguxr56s4e.cloudfront.net/internal/pages/images/kp-pattern/kp-colored-top-pills-3-bw.png);
    position: absolute;
    top: -75px;
    right: -40px;
}


 div[data-component=image] .kartra_element_wrapper__pattern-2 .kartra_element_wrapper__pattern--bottom{
    content: url(http://d2uolguxr56s4e.cloudfront.net/internal/pages/images/kp-pattern/kp-colored-bottom-pills-3-bw.png);
    position: absolute;
    bottom: 155px;
    right: -10px;
}

 div[data-component=image] .kartra_element_wrapper__pattern-1 .kartra_element_wrapper__pattern--top{
    content: url(http://d2uolguxr56s4e.cloudfront.net/internal/pages/images/kp-pattern/kp-colored-top-pills-3-bw.png);
    position: absolute;
    top: 45px;
    right: -40px;
}


 div[data-component=image] .kartra_element_wrapper__pattern-1 .kartra_element_wrapper__pattern--bottom{
    content: url(http://d2uolguxr56s4e.cloudfront.net/internal/pages/images/kp-pattern/kp-colored-bottom-pills-3-bw.png);
    position: absolute;
    bottom: 60px;
    right: -60px;
}

.kartra_element_wrapper__pattern--top-left{
    content: url(http://d2uolguxr56s4e.cloudfront.net/internal/pages/images/kp-pattern/kp-colored-top-pills-2-bw.png);
    position: absolute;
    top: -65px;
    right: -40px;
}


.kartra_element_wrapper__pattern--bottom-left{
    content: url(http://d2uolguxr56s4e.cloudfront.net/internal/pages/images/kp-pattern/kp-colored-bottom-pills-2-bw.png);
    position: absolute;
    bottom: -85px;
    left: 0px;
}
.kartra_element_wrapper__pattern--top-right{
    content: url(http://d2uolguxr56s4e.cloudfront.net/internal/pages/images/kp-pattern/kp-colored-top-pills-3-bw.png);
    position: absolute;
    top: -65px;
    left: -40px;
}
.kartra_element_wrapper__pattern--bottom-right{
    content: url(http://d2uolguxr56s4e.cloudfront.net/internal/pages/images/kp-pattern/kp-colored-bottom-pills-3-bw.png);
    position: absolute;
    bottom: -85px;
    right: 0px;
}
.kartra_element_wrapper__pattern--top-center{
    content: url(http://d2uolguxr56s4e.cloudfront.net/internal/pages/images/kp-pattern/kp-colored-top-pills-6.png);
    position: absolute;
    top: -35px;
    left: -90px;
}
.kartra_element_wrapper__pattern--bottom-center{
    content: url(http://d2uolguxr56s4e.cloudfront.net/internal/pages/images/kp-pattern/kp-colored-bottom-pills-6.png);
    position: absolute;
    bottom: -60px;
    right: -90px;
}
.content--shadow-top-small::before {
    content: "";
    position: absolute;
    top: -20px;
    left: 0;
    width: 100%;
    height: 20px;
    box-shadow: 0 10px 15px rgba(0,0,0,0.15);
}
.content--shadow-bottom-small::before {
    content: "";
    position: absolute;
    bottom: -20px;
    left: 0;
    width: 100%;
    height: 20px;
    box-shadow: 0 -10px 15px rgba(0,0,0,0.15);
}


@media (max-width: 992px) {

.kartra_element_wrapper__pattern--top{
    display:none;
}


.kartra_element_wrapper__pattern--bottom{
    display:none;
}
.kartra_element_wrapper__pattern--top-left{
    display:none;
}
.kartra_element_wrapper__pattern--top-right{
    display:none;
}
.kartra_element_wrapper__pattern--top-center{
    display:none;
}
  .kartra_element_wrapper__pattern--bottom-left{
    display:none;
}
.kartra_element_wrapper__pattern--bottom-right{
    display:none;
}
.kartra_element_wrapper__pattern--bottom-center{
    display:none;
}

.modal-dialog {
		width: 900px;
	}
}
</style>
