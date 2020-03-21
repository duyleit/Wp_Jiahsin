<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bootstrapjsin
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
   
    <link type="text/css" rel="stylesheet" href="<?php bloginfo('stylesheet_directory')?>/bootstrap.css"/>
<!-- 	<link type="text/css" rel="stylesheet" href="https://www.jiahsin.com.vn/wp-content/themes/jiahsin/css/normalize.css"/> -->
	<link type="text/css" rel="stylesheet" href="https://www.jiahsin.com.vn/wp-content/themes/jiahsin/css/foundation.min.css"/>
	
	<link type="text/css" rel="stylesheet" href="https://www.jiahsin.com.vn/wp-content/themes/jiahsin/js/bxslider/jquery.bxslider.css"/>
	<link type="text/css" rel="stylesheet" href="https://www.jiahsin.com.vn/wp-content/themes/jiahsin/js/fancybox/jquery.fancybox.css"/>
	<!-- 	dung ke khung menu -->
	<link type="text/css" rel="stylesheet" href="https://www.jiahsin.com.vn/wp-content/themes/jiahsin/css/jiahsin.css"/>
	<link type="text/css" rel="stylesheet" href="<?php bloginfo('stylesheet_directory')?>/1.css"/>
	
	
	<script type="text/javascript" src="https://www.jiahsin.com.vn/wp-content/themes/jiahsin/js/jquery-1.11.3.min.js"></script>
<!-- 	<script type="text/javascript" src="<?php bloginfo('stylesheet_directory')?>/jquery.min.js"></script> -->
<!-- 	<script type="text/javascript" src="<?php bloginfo('stylesheet_directory')?>/bootstrap.js"></script> -->
	<script type="text/javascript" src="https://www.jiahsin.com.vn/wp-content/themes/jiahsin/js/foundation.min.js"></script>
	<script type="text/javascript" src="https://www.jiahsin.com.vn/wp-content/themes/jiahsin/js/fancybox/jquery.fancybox.pack.js"></script>

	
	<script type="text/javascript" src="https://www.jiahsin.com.vn/wp-content/themes/jiahsin/js/bxslider/jquery.bxslider.min.js"></script>
    <script type="text/javascript" src="https://www.jiahsin.com.vn/wp-content/themes/jiahsin/js/jiahsin.js"></script>
	

	
<?php wp_head(); ?>
	
</head>
<body  class="page-home">
<header>
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/wordpress"><img src="https://www.jiahsin.com.vn/wp-content/themes/jiahsin/img/logo.png"></a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">

                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Sản Phẩm</a>
                        <ul class="dropdown-menu">
                            <li><a href="/wordpress/production/#introduction">Giới Thiệu</a></li>
                            <li><a href="/wordpress/production/#process">Qui Trình Sản Xuất</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#"> <b>Trách nhiệm xã hội</b></a>
                        <ul class="dropdown-menu">
                            <li><a href="/wordpress/csr/#general-approach">Khái quát chung</a></li>
                            <li><a href="/wordpress/csr/#sustainability-strategy">Chiến lược PTBV</a></li>
                            <li><a href="/wordpress/csr/#commitment">Cam kết từ ban lãnh đạo</a></li>
							 <li><a href="/wordpress/csr/#principles">Nguyên tắc thực thi</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#"> <b>Nguồn nhân lực</b></a>
                        <ul class="dropdown-menu">
                            <li><a href="hr/#recruitment-policies">Chính sách tuyển dụng</a></li>
                            <li><a href="hr/#training-policies">Chính sách đào tạo</a></li>
                            <li><a href="hr/#wage-benefits">Lương và phúc lợi</a></li>
                            <li><a href="hr/#career-opportunity">Cơ hội nghề nghiệp</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#"> <b>Tin tức</b></a>
                        <ul class="dropdown-menu">
                            <li><a href="category/news/industry-news">Tin trong ngành</a></li>
                            <li><a href="category/news/company-news">Tin tức công ty</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#"> <b>Liên hệ</b></a>
                        <ul class="dropdown-menu">
                            <li class="nav-link"><a href="/wordpress/contact">Thông tin liên hệ</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
  
<!-- #masthead -->  

<!-- <nav id="header-menu" class="navbar navbar-expand-lg navbar-light bg-light">
 <a class="navbar-brand" href="">
                <img src="https://www.jiahsin.com.vn/wp-content/themes/jiahsin/img/logo.png">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
	
	  <div class="collapse navbar-collapse" id="navbarsExample07">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href=""><b>Trách nhiệm xã hội</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href=""><b>Nguồn nhân lực</b></a>
                    </li>
					 <li class="nav-item dropdown">
                        <a class="nav-link=" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Bộ Phận Nhân Sự</a>

                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="">Lưu Trình, Quy Trình(cho người Việt) </a>
                            <a class="dropdown-item" href="">Lưu Trình, Quy Trình(cho CB hải ngoại)</a>
						 </div>
					</li>
		  </ul>
	</div> -->
<!--       <div class="navbar-header">
       <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
       </button>
	      <a class="navbar-brand" href="https://www.jiahsin.com.vn"><img src="https://www.jiahsin.com.vn/wp-content/themes/jiahsin/img/logo.png" title="Jiahsin"/></a>
     </div>

     <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav ml-auto small">
          <li class="nav-item dropdown">
			  <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" id="navbarDropdown" ><b>Sản phẩm</b> </a>
		  	  <div class="dropdown-menu" ria-labelledby="navbarDropdown">
     				 <a class="dropdown-item" href="#">Link 1</a>
     				 <a class="dropdown-item" href="#">Link 2</a>
      				<a class="dropdown-item" href="#">Link 3</a>
   			   </div>
		  </li>
		  <li><a href="#"> <b>Trách nhiệm xã hội</b></a></li>
          <li><a href="#"><b> Nguồn nhân lực</b></a></li>
          <li><a href="#"><b>Tin tức</b> </a></li>
		  <li><a href="#"><b>Liên hệ</b> </a></li>
      </ul>
     </div> -->
					

