<?php
    DEFINE('DB_USER','root');
    DEFINE('DB_PSWD','');
    DEFINE('DB_HOST','localhost');
    DEFINE('DB_NAME','paint-and-pixel');
    $conn = mysqli_connect(DB_HOST,DB_USER,DB_PSWD);
    if ($conn) {
  echo 'connected';
} else {
  echo 'not connected';
}
    if (!$conn = mysqli_connect(DB_HOST,DB_USER,DB_PSWD))
        die("Connection failed.");

    if(!mysqli_select_db($conn, DB_NAME))
        die("Could not open the ".DB_NAME." database.");
    session_start();

?>

<!DOCTYPE html>
<html amp >
<head>
        <!-- V.0 -->

     <!-- Site made with Mobirise Website Builder v4.12.0, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.12.0, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="indexassets/images/fulllogo.png" type="image/x-icon">
  <meta name="description" content="">
  

  <link rel="stylesheet" href="indexassets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="indexassets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="indexassets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="indexassets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="indexassets/tether/tether.min.css">
  <link rel="stylesheet" href="indexassets/dropdown/css/style.css">
  <link rel="stylesheet" href="indexassets/theme/css/style.css">
  <link rel="preload" as="style" href="indexassets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="indexassets/mobirise/css/mbr-additional.css" type="text/css">
  
  <style>
    #hide{
    background:none;
    }
    .deletebutton{
      float:right;
      height: 30px;
      width: 30px;

    }
    #deletebutton{
      float:right;
      height: 30px;
      width: 30px;
}
      .nav-item{margin-right: 16em;
      }
      .contactUs {margin-left: 25em}
      .contactUs strong {margin-left: 3em}
      .contactUs p a {padding-right: 3em;}
      #gallery1-7 {background-color:#efefef;
      align-content: center;}
      #content10-8 {background-color:#e3cd52}
      #Galary {color: black;}
      #footer {color: white;}
      #bkgrnd {color: white;}
      #gallery1-4 {margin-top: 5em;}
    </style>
    
  <!-- Site made with Mobirise Website Builder v4.12.0, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.12.0, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="fassets/images/logo4.png" type="image/x-icon">
  <meta name="description" content="">
  
  <title>Favourite list</title>
  
<link rel="canonical" href="page1.php">
 <style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style>
<noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet">
 
 <style amp-custom> 
div,span,h1,h2,h3,h4,h5,h6,p,blockquote,a,ol,ul,li,figcaption{font: inherit;}*{-webkit-box-sizing: border-box;box-sizing: border-box;}body{position: relative;font-style: normal;line-height: 1.5;}section{background-color: #eeeeee;background-position: 50% 50%;background-repeat: no-repeat;background-size: cover;}section,.container,.container-fluid{position: relative;word-wrap: break-word;}a.mbr-iconfont:hover{text-decoration: none;}h1,h2,h3{margin: auto;}h1,h3,p{padding: 10px 0;margin-bottom: 15px;}p,li,blockquote{color: #15181b;letter-spacing: 0.5px;line-height: 1.7;}ul,ol,pre,blockquote{margin-bottom: 0;margin-top: 0;}pre{background: #f4f4f4;padding: 10px 24px;white-space: pre-wrap;}p{margin-top: 0;}a{font-style: normal;font-weight: 400;cursor: pointer;}a,a:hover{text-decoration: none;}figure{margin-bottom: 0;}h1,h2,h3,h4,h5,h6,.h1,.h2,.h3,.h4,.h5,.h6,.display-1,.display-2,.display-3,.display-4{line-height: 1;word-break: break-word;word-wrap: break-word;}b,strong{font-weight: bold;}blockquote{padding: 10px 0 10px 20px;position: relative;border-left: 3px solid;}input:-webkit-autofill,input:-webkit-autofill:hover,input:-webkit-autofill:focus,input:-webkit-autofill:active{-webkit-transition-delay: 9999s;transition-delay: 9999s;-webkit-transition-property: background-color,color;-o-transition-property: background-color,color;transition-property: background-color,color;}html,body{height: auto;min-height: 100vh;}.mbr-section-title{font-style: normal;line-height: 1.2;}.mbr-section-subtitle{line-height: 1.3;}.mbr-text{font-style: normal;line-height: 1.6;}.btn{font-weight: 400;border-width: 2px;border-style: solid;font-style: normal;letter-spacing: 2px;margin: .4rem .5rem;white-space: normal;-webkit-transition: all .3s ease-in-out,-webkit-box-shadow 2s ease-in-out;transition: all .3s ease-in-out,-webkit-box-shadow 2s ease-in-out;-o-transition: all .3s ease-in-out,box-shadow 2s ease-in-out;transition: all .3s ease-in-out,box-shadow 2s ease-in-out;transition: all .3s ease-in-out,box-shadow 2s ease-in-out,-webkit-box-shadow 2s ease-in-out;display: -webkit-inline-box;display: -ms-inline-flexbox;display: inline-flex;-webkit-box-align: center;-ms-flex-align: center;align-items: center;-webkit-box-pack: center;-ms-flex-pack: center;justify-content: center;word-break: break-word;-webkit-align-items: center;-webkit-justify-content: center;display: -webkit-inline-flex;}.btn-form{border-radius: 0;}.btn-form:hover{cursor: pointer;}form .btn{margin: 0;}input,textarea,select{padding: 15px 0.5rem;}.mbr-figure img,.mbr-figure iframe{display: block;width: 100%;}.card{background-color: transparent;border: none;}.card-wrapper{-webkit-box-flex: 1;-webkit-flex: 1;}.card-img{text-align: center;-ms-flex-negative: 0;flex-shrink: 0;-webkit-flex-shrink: 0;}.media{max-width: 100%;margin: 0 auto;}.mbr-figure{-ms-flex-item-align: center;-ms-grid-row-align: center;-webkit-align-self: center;align-self: center;}.media-container > div{max-width: 100%;}.mbr-figure img,.card-img img{width: 100%;}@media (max-width: 991px){.media-size-item{width: auto;}.media{width: auto;}.mbr-figure{width: 100%;}}section.slider .amp-carousel-button{cursor: pointer;}amp-image-lightbox a.control{position: absolute;width: 32px;height: 32px;right: 16px;top: 16px;z-index: 1000;}amp-image-lightbox a.control .close{position: relative;}amp-image-lightbox a.control .close:before,amp-image-lightbox a.control .close:after{position: absolute;left: 15px;content: ' ';height: 33px;width: 2px;background-color: #fff;}amp-image-lightbox a.control .close:before{-webkit-transform: rotate(45deg);-ms-transform: rotate(45deg);transform: rotate(45deg);}amp-image-lightbox a.control .close:after{-webkit-transform: rotate(-45deg);-ms-transform: rotate(-45deg);transform: rotate(-45deg);}.hidden{visibility: hidden;}.super-hide{display: none;}.inactive{-webkit-user-select: none;-moz-user-select: none;-ms-user-select: none;user-select: none;pointer-events: none;-webkit-user-drag: none;user-drag: none;}textarea[type="hidden"]{display: none;}#scrollToTop{display: none;}.popover-content ul.show{min-height: 155px;}.mbr-white{color: #ffffff;}.mbr-black{color: #000000;}.mbr-bg-white{background-color: #ffffff;}.mbr-bg-black{background-color: #000000;}.align-left{text-align: left;}.align-center{text-align: center;}.align-right{text-align: right;}@media (max-width: 767px){.align-left,.align-center,.align-right,.mbr-section-btn,.mbr-section-title{text-align: center;}}.mbr-light{font-weight: 300;}.mbr-regular{font-weight: 400;}.mbr-semibold{font-weight: 500;}.mbr-bold{font-weight: 700;}.mbr-section-btn{margin-left: -.25rem;margin-right: -.25rem;font-size: 0;}nav .mbr-section-btn{margin-left: 0rem;margin-right: 0rem;}.btn .mbr-iconfont,.btn.btn-sm .mbr-iconfont{cursor: pointer;margin-right: 0.5rem;}.btn.btn-md .mbr-iconfont,.btn.btn-md .mbr-iconfont{margin-right: 0.8rem;}[type="submit"]{-webkit-appearance: none;}.google-map{height: 400px;position: relative;width: 100%;}.google-map iframe{height: 100%;width: 100%;}.google-map [data-state-details]{color: #6b6763;font-family: Montserrat;height: 1.5em;margin-top: -0.75em;padding-left: 1.25rem;padding-right: 1.25rem;position: absolute;text-align: center;top: 50%;width: 100%;}.google-map[data-state]{background: #e9e5dc;}.google-map[data-state="loading"] [data-state-details]{display: none;}.map-placeholder{display: none;}.mbr-fullscreen .mbr-overlay{height: 100vh;}.mbr-fullscreen{display: -webkit-box;display: -ms-flexbox;display: flex;display: -moz-flex;display: -ms-flex;display: -o-flex;-webkit-box-align: center;-ms-flex-align: center;align-items: center;-webkit-align-items: center;height: 100vh;-webkit-box-sizing: border-box;box-sizing: border-box;padding-top: 3rem;padding-bottom: 3rem;}.mbr-overlay{bottom: 0;left: 0;position: absolute;right: 0;top: 0;z-index: 0;}section.sidebar-open:before{content: '';position: fixed;top: 0;bottom: 0;right: 0;left: 0;background-color: rgba(0,0,0,0.2);z-index: 1040;}amp-img img{max-height: 100%;max-width: 100%;}img.mbr-temp{width: 100%;}.is-builder .nodisplay + img[async],.is-builder .nodisplay + img[decoding="async"],.is-builder amp-img > a + img[async],.is-builder amp-img > a + img[decoding="async"]{display: none;}html:not(.is-builder) amp-img > a{position: absolute;top: 0;bottom: 0;left: 0;right: 0;z-index: 1;}.is-builder .temp-amp-sizer{position: absolute;}.is-builder section.slider .icon-wrap,.is-builder section[class*="gallery"] .icon-wrap{pointer-events: all;}.is-builder amp-youtube .temp-amp-sizer,.is-builder amp-vimeo .temp-amp-sizer{position: static;}.is-builder section.horizontal-menu .ampstart-btn{display: none;}@media (max-width: 991px){.is-builder section.horizontal-menu .navbar-toggler{display: block;}}.is-builder section.horizontal-menu .dropdown-menu{z-index: auto;opacity: 1;pointer-events: auto;}.is-builder section.horizontal-menu .nav-dropdown .link.dropdown-toggle[aria-expanded="true"]{margin-right: 0;padding: 0.667em 1em;}.mobirise-spinner{position: absolute;top: 50%;left: 40%;margin-left: 10%;-webkit-transform: translate3d(-50%,-50%,0);z-index: 4;}.mobirise-spinner em{width: 24px;height: 24px;background: #3ac;border-radius: 100%;display: inline-block;-webkit-animation: slide 1s infinite;}.mobirise-spinner em:nth-child(1){-webkit-animation-delay: 0.1s;}.mobirise-spinner em:nth-child(2){-webkit-animation-delay: 0.2s;}.mobirise-spinner em:nth-child(3){-webkit-animation-delay: 0.3s;}@-moz-keyframes slide{0%{-webkit-transform: scale(1);}50%{opacity: 0.3;-webkit-transform: scale(2);}100%{-webkit-transform: scale(1);}}@-webkit-keyframes slide{0%{-webkit-transform: scale(1);}50%{opacity: 0.3;-webkit-transform: scale(2);}100%{-webkit-transform: scale(1);}}@-o-keyframes slide{0%{-webkit-transform: scale(1);}50%{opacity: 0.3;-webkit-transform: scale(2);}100%{-webkit-transform: scale(1);}}@keyframes slide{0%{-webkit-transform: scale(1);}50%{opacity: 0.3;-webkit-transform: scale(2);}100%{-webkit-transform: scale(1);}}.mobirise-loader .amp-active > div{display: none;}.mbr-container{max-width: 800px;padding: 0 10px;margin: 0 auto;position: relative;}.container{padding-right: 15px;padding-left: 15px;width: 100%;margin-right: auto;margin-left: auto;}@media (max-width: 767px){.container{max-width: 540px;}}@media (min-width: 768px){.container{max-width: 720px;}}@media (min-width: 992px){.container{max-width: 960px;}}@media (min-width: 1200px){.container{max-width: 1140px;}}.mbr-row,.mbr-form-row{display: -webkit-box;display: -webkit-flex;display: -ms-flexbox;display: flex;-webkit-flex-wrap: wrap;-ms-flex-wrap: wrap;flex-wrap: wrap;margin-right: -1rem;margin-left: -1rem;}.mbr-form-row{margin-right: -0.5rem;margin-left: -0.5rem;}.mbr-form-row > [class*="mbr-col"]{padding-left: 0.5rem;padding-right: 0.5rem;}.mbr-justify-content-center{-webkit-box-pack: center;-ms-flex-pack: center;justify-content: center;-webkit-justify-content: center;}@media (max-width: 767px){.mbr-col-sm-12{-ms-flex: 0 0 100%;-webkit-box-flex: 0;flex: 0 0 100%;max-width: 100%;padding-right: 15px;padding-left: 15px;-webkit-flex: 0 0 100%;}.mbr-row{margin: 0; display: inline;}
}div.mbr-row{float: left;} .clearBoth{ clear:both;}@media (min-width: 768px){.mbr-col-md-3{-ms-flex: 0 0 25%;-webkit-box-flex: 0;flex: 0 0 25%;max-width: 25%;padding-right: 15px;padding-left: 15px;-webkit-flex: 0 0 25%;}.mbr-col-md-4{-ms-flex: 0 0 33.333333%;-webkit-box-flex: 0;flex: 0 0 33.333333%;max-width: 33.333333%;padding-right: 15px;padding-left: 15px;-webkit-flex: 0 0 33.333333%;}.mbr-col-md-5{-ms-flex: 0 0 41.666667%;-webkit-box-flex: 0;flex: 0 0 41.666667%;max-width: 41.666667%;padding-right: 15px;padding-left: 15px;-webkit-flex: 0 0 41.666667%;}.mbr-col-md-6{-ms-flex: 0 0 50%;-webkit-box-flex: 0;flex: 0 0 50%;max-width: 50%;padding-right: 15px;padding-left: 15px;-webkit-flex: 0 0 50%;}.mbr-col-md-7{-ms-flex: 0 0 58.333333%;-webkit-box-flex: 0;flex: 0 0 58.333333%;max-width: 58.333333%;padding-right: 15px;padding-left: 15px;-webkit-flex: 0 0 58.333333%;}.mbr-col-md-8{-ms-flex: 0 0 66.666667%;-webkit-box-flex: 0;flex: 0 0 66.666667%;max-width: 66.666667%;padding-left: 15px;padding-right: 15px;-webkit-flex: 0 0 66.666667%;}.mbr-col-md-10{-ms-flex: 0 0 83.333333%;-webkit-box-flex: 0;flex: 0 0 83.333333%;max-width: 83.333333%;padding-left: 15px;padding-right: 15px;-webkit-flex: 0 0 83.333333%;}.mbr-col-md-12{-ms-flex: 0 0 100%;-webkit-box-flex: 0;flex: 0 0 100%;max-width: 100%;padding-right: 15px;padding-left: 15px;-webkit-flex: 0 0 100%;}}@media (min-width: 992px){.mbr-col-lg-2{-ms-flex: 0 0 16.666667%;-webkit-box-flex: 0;flex: 0 0 16.666667%;max-width: 16.666667%;padding-right: 15px;padding-left: 15px;-webkit-flex: 0 0 16.666667%;}.mbr-col-lg-3{-ms-flex: 0 0 25%;-webkit-box-flex: 0;flex: 0 0 25%;max-width: 25%;padding-right: 15px;padding-left: 15px;-webkit-flex: 0 0 25%;}.mbr-col-lg-4{-ms-flex: 0 0 33.33%;-webkit-box-flex: 0;flex: 0 0 33.33%;max-width: 33.33%;padding-right: 15px;padding-left: 15px;-webkit-flex: 0 0 33.33%;}.mbr-col-lg-5{-ms-flex: 0 0 41.666%;-webkit-box-flex: 0;flex: 0 0 41.666%;max-width: 41.666%;padding-right: 15px;padding-left: 15px;-webkit-flex: 0 0 41.666%;}.mbr-col-lg-6{-ms-flex: 0 0 50%;-webkit-box-flex: 0;flex: 0 0 50%;max-width: 50%;padding-right: 15px;padding-left: 15px;-webkit-flex: 0 0 50%;}.mbr-col-lg-8{-ms-flex: 0 0 66.666667%;-webkit-box-flex: 0;flex: 0 0 66.666667%;max-width: 66.666667%;padding-left: 15px;padding-right: 15px;-webkit-flex: 0 0 66.666667%;}.mbr-col-lg-10{-ms-flex: 0 0 83.3333%;-webkit-box-flex: 0;flex: 0 0 83.3333%;max-width: 83.3333%;padding-right: 15px;padding-left: 15px;-webkit-flex: 0 0 83.3333%;}.mbr-col-lg-12{-ms-flex: 0 0 100%;-webkit-box-flex: 0;flex: 0 0 100%;max-width: 100%;padding-right: 15px;padding-left: 15px;-webkit-flex: 0 0 100%;}}@media (min-width: 1200px){.mbr-col-xl-7{-ms-flex: 0 0 58.333333%;-webkit-box-flex: 0;flex: 0 0 58.333333%;max-width: 58.333333%;padding-right: 15px;padding-left: 15px;-webkit-flex: 0 0 58.333333%;}.mbr-col-xl-8{-ms-flex: 0 0 66.666667%;-webkit-box-flex: 0;flex: 0 0 66.666667%;max-width: 66.666667%;padding-left: 15px;padding-right: 15px;-webkit-flex: 0 0 66.666667%;}}amp-sidebar{background: transparent;}#scrollToTopMarker{position: absolute;width: 0px;height: 0px;top: 300px;}#scrollToTopButton{position: fixed;bottom: 25px;right: 25px;opacity: .4;z-index: 5000;font-size: 32px;height: 60px;width: 60px;border: none;border-radius: 3px;cursor: pointer;}#scrollToTopButton:focus{outline: none;}#scrollToTopButton a:before{content: '';position: absolute;height: 40%;top: 36%;width: 2px;left: calc(50% - 1px);}#scrollToTopButton a:after{content: '';position: absolute;border-top: 2px solid;border-right: 2px solid;width: 40%;height: 40%;left: calc(30% - 1px);bottom: 30%;-ms-transform: rotate(-45deg);transform: rotate(-45deg);-webkit-transform: rotate(-45deg);}.is-builder #scrollToTopButton a:after{left: 30%;}.field{margin-bottom: 1rem;}.field-input{margin: 0;width: 100%;}form a.btn{margin: 0;}.mbr-col,.mbr-col-auto{padding-left: 1rem;padding-right: 1rem;}.mbr-col{flex-basis: 0;flex-grow: 1;max-width: 100%;}.mbr-col-auto{flex: 0 0 auto;width: auto;max-width: none;}.dots-wrapper .dots{margin: 4px 8px;}.dots-wrapper .dots span{cursor: pointer;border-radius: 12px;display: block;height: 24px;width: 24px;transition: 0.4s;border: 10px solid #cccccc;}.dots-wrapper .dots span:hover{opacity: 1;}.dots-wrapper .dots span.current{outline: none;width: 40px;opacity: 1;}.amp-carousel-button{outline: none;}.hidden-slide{display: none;}.visible-slide{display: flex;}
body{font-family: Roboto;}blockquote{border-color: #4ea2e3;}.display-1{font-family: 'Roboto',sans-serif;font-size: 4.5rem;}.display-2{font-family: 'Roboto',sans-serif;font-size: 2.2rem;}.display-4{font-family: 'Roboto',sans-serif;font-size: 0.9rem;}.display-5{font-family: 'Roboto',sans-serif;font-size: 1.8rem;}.display-7{font-family: 'Roboto',sans-serif;font-size: 1.1rem;}input,textarea{font-family: 'Roboto',sans-serif;font-size: 0.9rem;}.display-1 .mbr-iconfont-btn{font-size: 4.5rem;width: 4.5rem;}.display-2 .mbr-iconfont-btn{font-size: 2.2rem;width: 2.2rem;}.display-4 .mbr-iconfont-btn{font-size: 0.9rem;width: 0.9rem;}.display-5 .mbr-iconfont-btn{font-size: 1.8rem;width: 1.8rem;}.display-7 .mbr-iconfont-btn{font-size: 1.1rem;width: 1.1rem;}@media (max-width: 768px){.display-1{font-size: 3.6rem;font-size: calc( 2.225rem + (4.5 - 2.225) * ((100vw - 20rem) / (48 - 20)));line-height: calc( 1.4 * (2.225rem + (4.5 - 2.225) * ((100vw - 20rem) / (48 - 20))));}.display-2{font-size: 1.76rem;font-size: calc( 1.42rem + (2.2 - 1.42) * ((100vw - 20rem) / (48 - 20)));line-height: calc( 1.4 * (1.42rem + (2.2 - 1.42) * ((100vw - 20rem) / (48 - 20))));}.display-4{font-size: 0.72rem;font-size: calc( 0.965rem + (0.9 - 0.965) * ((100vw - 20rem) / (48 - 20)));line-height: calc( 1.4 * (0.965rem + (0.9 - 0.965) * ((100vw - 20rem) / (48 - 20))));}.display-5{font-size: 1.44rem;font-size: calc( 1.28rem + (1.8 - 1.28) * ((100vw - 20rem) / (48 - 20)));line-height: calc( 1.4 * (1.28rem + (1.8 - 1.28) * ((100vw - 20rem) / (48 - 20))));}}.btn{padding: 1rem 2rem;border-radius: 0px;}.btn-sm{border-width: 1px;padding: 0.6rem 0.8rem;border-radius: 0px;}.btn-md{font-weight: 600;padding: 1rem 2rem;border-radius: 0px;}.bg-primary{background-color: #4ea2e3;}.bg-success{background-color: #0dcd7b;}.bg-info{background-color: #8282e7;}.bg-warning{background-color: #767676;}.bg-danger{background-color: #a0a0a0;}.btn-primary,.btn-primary:active,.btn-primary.active{background-color: #4ea2e3;border-color: #4ea2e3;color: #ffffff;}.btn-primary:hover,.btn-primary:focus,.btn-primary.focus{color: #ffffff;background-color: #1f7dc5;border-color: #1f7dc5;}.btn-primary.disabled,.btn-primary:disabled{color: #ffffff;background-color: #1f7dc5;border-color: #1f7dc5;}.btn-secondary,.btn-secondary:active,.btn-secondary.active{background-color: #4addff;border-color: #4addff;color: #003c4a;}.btn-secondary:hover,.btn-secondary:focus,.btn-secondary.focus{color: #003c4a;background-color: #00cdfd;border-color: #00cdfd;}.btn-secondary.disabled,.btn-secondary:disabled{color: #003c4a;background-color: #00cdfd;border-color: #00cdfd;}.btn-info,.btn-info:active,.btn-info.active{background-color: #8282e7;border-color: #8282e7;color: #ffffff;}.btn-info:hover,.btn-info:focus,.btn-info.focus{color: #ffffff;background-color: #4242db;border-color: #4242db;}.btn-info.disabled,.btn-info:disabled{color: #ffffff;background-color: #4242db;border-color: #4242db;}.btn-success,.btn-success:active,.btn-success.active{background-color: #0dcd7b;border-color: #0dcd7b;color: #ffffff;}.btn-success:hover,.btn-success:focus,.btn-success.focus{color: #ffffff;background-color: #088550;border-color: #088550;}.btn-success.disabled,.btn-success:disabled{color: #ffffff;background-color: #088550;border-color: #088550;}.btn-warning,.btn-warning:active,.btn-warning.active{background-color: #767676;border-color: #767676;color: #ffffff;}.btn-warning:hover,.btn-warning:focus,.btn-warning.focus{color: #ffffff;background-color: #505050;border-color: #505050;}.btn-warning.disabled,.btn-warning:disabled{color: #ffffff;background-color: #505050;border-color: #505050;}.btn-danger,.btn-danger:active,.btn-danger.active{background-color: #a0a0a0;border-color: #a0a0a0;color: #ffffff;}.btn-danger:hover,.btn-danger:focus,.btn-danger.focus{color: #ffffff;background-color: #7a7a7a;border-color: #7a7a7a;}.btn-danger.disabled,.btn-danger:disabled{color: #ffffff;background-color: #7a7a7a;border-color: #7a7a7a;}.btn-black,.btn-black:active,.btn-black.active{background-color: #333333;border-color: #333333;color: #ffffff;}.btn-black:hover,.btn-black:focus,.btn-black.focus{color: #ffffff;background-color: #0d0d0d;border-color: #0d0d0d;}.btn-black.disabled,.btn-black:disabled{color: #ffffff;background-color: #0d0d0d;border-color: #0d0d0d;}.btn-white,.btn-white:active,.btn-white.active{background-color: #ffffff;border-color: #ffffff;color: #808080;}.btn-white:hover,.btn-white:focus,.btn-white.focus{color: #808080;background-color: #d9d9d9;border-color: #d9d9d9;}.btn-white.disabled,.btn-white:disabled{color: #808080;background-color: #d9d9d9;border-color: #d9d9d9;}.btn-white,.btn-white:active,.btn-white.active{color: #333333;}.btn-white:hover,.btn-white:focus,.btn-white.focus{color: #333333;}.btn-white.disabled,.btn-white:disabled{color: #333333;}.btn-primary-outline,.btn-primary-outline:active,.btn-primary-outline.active{background: none;border-color: #1c6faf;color: #1c6faf;}.btn-primary-outline:hover,.btn-primary-outline:focus,.btn-primary-outline.focus{color: #ffffff;background-color: #4ea2e3;border-color: #4ea2e3;}.btn-primary-outline.disabled,.btn-primary-outline:disabled{color: #ffffff;background-color: #4ea2e3;border-color: #4ea2e3;}.btn-secondary-outline,.btn-secondary-outline:active,.btn-secondary-outline.active{background: none;border-color: #00b8e3;color: #00b8e3;}.btn-secondary-outline:hover,.btn-secondary-outline:focus,.btn-secondary-outline.focus{color: #003c4a;background-color: #4addff;border-color: #4addff;}.btn-secondary-outline.disabled,.btn-secondary-outline:disabled{color: #003c4a;background-color: #4addff;border-color: #4addff;}.btn-info-outline,.btn-info-outline:active,.btn-info-outline.active{background: none;border-color: #2c2cd7;color: #2c2cd7;}.btn-info-outline:hover,.btn-info-outline:focus,.btn-info-outline.focus{color: #ffffff;background-color: #8282e7;border-color: #8282e7;}.btn-info-outline.disabled,.btn-info-outline:disabled{color: #ffffff;background-color: #8282e7;border-color: #8282e7;}.btn-success-outline,.btn-success-outline:active,.btn-success-outline.active{background: none;border-color: #076d41;color: #076d41;}.btn-success-outline:hover,.btn-success-outline:focus,.btn-success-outline.focus{color: #ffffff;background-color: #0dcd7b;border-color: #0dcd7b;}.btn-success-outline.disabled,.btn-success-outline:disabled{color: #ffffff;background-color: #0dcd7b;border-color: #0dcd7b;}.btn-warning-outline,.btn-warning-outline:active,.btn-warning-outline.active{background: none;border-color: #434343;color: #434343;}.btn-warning-outline:hover,.btn-warning-outline:focus,.btn-warning-outline.focus{color: #ffffff;background-color: #767676;border-color: #767676;}.btn-warning-outline.disabled,.btn-warning-outline:disabled{color: #ffffff;background-color: #767676;border-color: #767676;}.btn-danger-outline,.btn-danger-outline:active,.btn-danger-outline.active{background: none;border-color: #6d6d6d;color: #6d6d6d;}.btn-danger-outline:hover,.btn-danger-outline:focus,.btn-danger-outline.focus{color: #ffffff;background-color: #a0a0a0;border-color: #a0a0a0;}.btn-danger-outline.disabled,.btn-danger-outline:disabled{color: #ffffff;background-color: #a0a0a0;border-color: #a0a0a0;}.btn-black-outline,.btn-black-outline:active,.btn-black-outline.active{background: none;border-color: #000000;color: #000000;}.btn-black-outline:hover,.btn-black-outline:focus,.btn-black-outline.focus{color: #ffffff;background-color: #333333;border-color: #333333;}.btn-black-outline.disabled,.btn-black-outline:disabled{color: #ffffff;background-color: #333333;border-color: #333333;}.btn-white-outline,.btn-white-outline:active,.btn-white-outline.active{background: none;border-color: #ffffff;color: #ffffff;}.btn-white-outline:hover,.btn-white-outline:focus,.btn-white-outline.focus{color: #333333;background-color: #ffffff;border-color: #ffffff;}.text-primary{color: #4ea2e3;}.text-secondary{color: #4addff;}.text-success{color: #0dcd7b;}.text-info{color: #8282e7;}.text-warning{color: #767676;}.text-danger{color: #a0a0a0;}.text-white{color: #ffffff;}.text-black{color: #000000;}a.text-primary:hover,a.text-primary:focus{color: #1c6faf;}a.text-secondary:hover,a.text-secondary:focus{color: #00b8e3;}a.text-success:hover,a.text-success:focus{color: #076d41;}a.text-info:hover,a.text-info:focus{color: #2c2cd7;}a.text-warning:hover,a.text-warning:focus{color: #434343;}a.text-danger:hover,a.text-danger:focus{color: #6d6d6d;}a.text-white:hover,a.text-white:focus{color: #b3b3b3;}a.text-black:hover,a.text-black:focus{color: #4d4d4d;}.alert-success{background-color: #0dcd7b;}.alert-info{background-color: #8282e7;}.alert-warning{background-color: #767676;}.alert-danger{background-color: #a0a0a0;}a,a:hover{color: #4ea2e3;}.mbr-plan-header.bg-primary .mbr-plan-subtitle,.mbr-plan-header.bg-primary .mbr-plan-price-desc{color: #feffff;}.mbr-plan-header.bg-success .mbr-plan-subtitle,.mbr-plan-header.bg-success .mbr-plan-price-desc{color: #acfad9;}.mbr-plan-header.bg-info .mbr-plan-subtitle,.mbr-plan-header.bg-info .mbr-plan-price-desc{color: #ffffff;}.mbr-plan-header.bg-warning .mbr-plan-subtitle,.mbr-plan-header.bg-warning .mbr-plan-price-desc{color: #b6b6b6;}.mbr-plan-header.bg-danger .mbr-plan-subtitle,.mbr-plan-header.bg-danger .mbr-plan-price-desc{color: #e0e0e0;}.mobirise-spinner em:nth-child(1){background: #4ea2e3;}.mobirise-spinner em:nth-child(2){background: #4addff;}.mobirise-spinner em:nth-child(3){background: #0dcd7b;}#scrollToTopMarker{display: none;}#scrollToTopButton{background-color: #4ea2e3;}#scrollToTopButton a:before{background: #ffffff;}#scrollToTopButton a:after{border-top-color: #ffffff;border-right-color: #ffffff;}.field-input{font-family: 'Roboto',sans-serif;font-size: 0.9rem;}.cid-rRDdg8jcXo{padding-top: 5rem;padding-bottom: 5rem;background-color: #efefef;}@media (min-width: 992px){.cid-rRDdg8jcXo .container-fluid{padding-left: 1rem;padding-right: 1rem;}.cid-rRDdg8jcXo .item{padding: 1rem;}.cid-rRDdg8jcXo .item-img{padding-bottom: 0;}}.cid-rRDdg8jcXo .title{padding-bottom: 1rem;}@media (max-width: 991px){.cid-rRDdg8jcXo .item{margin-bottom: 2rem;}}.cid-rRDdg8jcXo .item-sign{margin: 0;}.cid-rRDdg8jcXo .item-wrapper{width: 100%;height: 100%;position: relative;}.cid-rRDdg8jcXo amp-img:after{content: "";display: block;background-color: rgba(254,235,127,0.5);position: absolute;left: 0;right: 0;bottom: 0;top: 100%;transition: 0.2s ease-in;z-index: 1;pointer-events: none;}.cid-rRDdg8jcXo amp-img .item-sign{position: absolute;left: 0;right: 0;bottom: 0;padding: 10px;z-index: 2;transition: 0.2s ease-in;background-color: rgba(254,235,127,0.5);color: #ffffff;}.cid-rRDdg8jcXo amp-img:hover:after{top: 0%;}.cid-rRDdg8jcXo amp-img:hover .item-sign{background-color: rgba(254,235,127,0);}.cid-rRDdg8jcXo .item-btn,.cid-rRDdg8jcXo .item-box-btn{margin: 0;}.cid-rRDdg8jcXo .item-box{justify-content: center;position: relative;width: 100%;background: #efefef;overflow: auto;}@media (min-width: 992px){.cid-rRDdg8jcXo .item-box{max-width: 1000px;}}@media (max-width: 991px){.cid-rRDdg8jcXo .item-box{width: 90%;margin: 1rem;}}@media (min-width: 992px){.cid-rRDdg8jcXo .item-box-img{padding: 2rem;}}@media (max-width: 991px){.cid-rRDdg8jcXo .item-box-img{padding: 1rem;}}.cid-rRDdg8jcXo .item-box-img amp-img{height: auto;}.cid-rRDdg8jcXo .item-box-wrapper{background-color: #efefef;}@media (min-width: 992px){.cid-rRDdg8jcXo .item-box-wrapper{padding: 2rem;}}@media (max-width: 991px){.cid-rRDdg8jcXo .item-box-wrapper{padding: 1rem;}}.cid-rRDdg8jcXo .icon-wrap{display: none;}.cid-rRDdg8jcXo .item{cursor: pointer;}.cid-rRDdg8jcXo .mbr-section-title,.cid-rRDdg8jcXo .mbr-section-subtitle{text-align: center;}
.engine{position: absolute;text-indent: -2400px;text-align: center;padding: 0;top: 0;left: -2400px;}[class*="-iconfont"]{display: inline-flex;}</style>
 
  <script async  src="https://cdn.ampproject.org/v0.js"></script>
  <script async custom-element="amp-analytics" src="https://cdn.ampproject.org/v0/amp-analytics-0.1.js"></script>
  <script async custom-element="amp-lightbox-gallery" src="https://cdn.ampproject.org/v0/amp-lightbox-gallery-0.1.js"></script>
  
  
</head>
<body>
    
    
     <section class="menu cid-rQpmxxKyZ3" once="menu" id="menu2-6">

    

    <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </button>
        <div class="menu-logo">
            <div class="navbar-brand">
                <span class="navbar-logo">
                    <a href="Visitor%20Home%20Page%20.php">
                        <img src="indexassets/images/fulllogo.png" alt="Mobirise" title="" style="height: 4.6rem;">
                    </a>
                </span>
                
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true">
                <li class="nav-item" >
                    <a class="nav-link link text-white display-5" href="Visitor%20Home%20Page%20.php">
                        Home</a>
                </li>
                <li class="nav-item" >
                    <a class="nav-link link text-white display-5" href="#conus">
                        Contact us</a>
                </li><li class="nav-item" >
                    <a class="nav-link link text-white display-5" href="Visitor%20account%20Page%20.php">
                        My account</a>
                </li>
                <div class="search">
                 <li class="nav-item" >
                    <a id = "search1" class="nav-link link text-white display-5" href="#"><img src="indexassets/search.png" width="25" height="28"></a>
                </li>
                    </div>
                                <div class="signout">
                <li class="nav-item" >
                    <a  class="nav-link link text-white display-5" href="index.php"><img src="indexassets/singout.png" width="25" height="28"></a>
                </li>
                                    </div>
            </ul>
            
        </div>
    </nav>
</section>
<!--

<section class="cid-rQpiiEn3UX mbr-fullscreen mbr-parallax-background" id="header2-0">

    

    <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(35, 35, 35);"></div>

    <div class="container align-center">
        <div class="row justify-content-md-center">
            <div class="mbr-white col-md-10" >
                <h1 class="mbr-section-title mbr-bold pb-3 mbr-fonts-style display-3">Welcome</h1>
                
                <p id ="bkgrnd" class="mbr-text pb-3 mbr-fonts-style display-5">Paint &amp; Pixel&#44; the ideal place for digital art enthusiasts</p>
                
        </div>
    </div>
    
</section>
-->

    
    
  <section class="amp-lightbox-gallery cid-rRDdg8jcXo" id="gallery1-4">
	
	
	<div class="container">
		<div class="title mbr-pb-4">
			<h3 class="mbr-section-title mbr-fonts-style display-2"><strong>My Favourite List</strong></h3>
			
		</div>
		<span id="images">
      <?php 
    $userName = $_SESSION['userName'];
    $query = "SELECT AW_title from favorite WHERE V_userName = '$userName';";
    $result = mysqli_query($conn,$query);
    $rowcount= 1;
      while($row = mysqli_fetch_row($result)){
     $title = $row[0];
    $imgQuery = "SELECT * from artwork WHERE title ='$title';";
    $imgResult  = mysqli_query($conn,$imgQuery);
    $imgRow = mysqli_fetch_row($imgResult);
 echo "<span class='item gallery-image mbr-col-md-6 mbr-col-sm-12 mbr-col-lg-4'>
        <span class = 'item-wrapper' id='item-wrapper$imgRow[0]'><amp-img src= '$imgRow[4]' layout='responsive' width='379.5' height='253' alt='image' class='placeholder-loader lb-image'><a id = 'link+$imgRow[0]' href = 'View%20Artwork%20(visitor).php?title=$imgRow[0]'><span class='placeholder'><em></em><em></em><em></em></span></a><p class='item-sign mbr-fonts-style display-7' style = 'color:black;'>$imgRow[0]<span id = 'deletebutton$$imgRow[0]'><img id = '$imgRow[0]' src = 'delete-cross.png' class = 'deletebutton'></span></p></amp-img></span></span>";
        $rowcount = $rowcount+1;
        if($rowcount%3==0){
          echo "</span><span class = 'mbr-row'>";
        }
    }
                        echo "</span>";
           ?>

           
				</span>
			</div>
</section>


  
  
<section class="engine"><a href="https://mobirise.info/a">online website builder</a></section>
    
    
    
    
<section class="mbr-section article content9 cid-rQplkhn7NZ" id="content9-4">

<section class="mbr-section article content9 cid-rQpllaL4cw" id="content9-5">
    
     

    <div class="container" id="conus">
        <div class="inner-container" style="width: 100%;">
            <hr class="line" style="width: 100%;">
            <div class ="contactUs">
            <div class="section-text align-center mbr-fonts-style display-5"><strong>Contact us</strong>
                
            </div><p>
            <a href="https://twitter.com"><img src = "indexassets/twitter.png" width="32" height="26"></a> <a href="https://www.facebook.com"><img src = "indexassets/facebook.png" width="28" height="28"></a>
            <a href="https://www.instagram.com"><img src="indexassets/instagram.png" width="30" height="30" ></a> 
            <a href="mailto:xhadeel@hotmail"><img src="indexassets/email.png" width="32" height="21"></a>
            </p>
                </div>
            <hr class="line" style="width: 100%;">
        
        </div>
    </div>
</section>

<section once="footers" class="cid-rQpl2pRx1d" id="footer6-2">

    

    

    <div class="container">
        <div class="media-container-row align-center mbr-white">
            <div class="col-12">
                <p class="mbr-text mb-0 mbr-fonts-style display-7" id="footer">
                    © Copyright 2020 Paint &amp;Pixel Team - All Rights Reserved
                </p>
            </div>
        </div>
    </div>
</section>


  <script src="indexassets/web/assets/jquery/jquery.min.js"></script>
  <script src="indexassets/popper/popper.min.js"></script>
  <script src="indexassets/bootstrap/js/bootstrap.min.js"></script>
  <script src="indexassets/tether/tether.min.js"></script>
  <script src="indexassets/smoothscroll/smooth-scroll.js"></script>
  <script src="indexassets/dropdown/js/nav-dropdown.js"></script>
  <script src="indexassets/dropdown/js/navbar-dropdown.js"></script>
  <script src="indexassets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="indexassets/parallax/jarallax.min.js"></script>

  <script type = "text/javascript">
    var titles = new Array();

window.addEventListener('load',prepareButtons);
  titles = <?php 
  $img = array();
  $query1 = "SELECT AW_title from favorite WHERE V_userName = '$userName';";
    $result1 = mysqli_query($conn,$query1);
  while($row1 = mysqli_fetch_row($result1)){
    array_push($img, $row1[0]);
  }
  echo json_encode($img);
?>;

function prepareButtons(){
	for(var i=0;i<titles.length;i++){
	document.getElementById("deletebutton$"+titles[i]).addEventListener('click',deleteImage);
}
}
function deleteImage(event){
  var imagename=event.target.id;
  var index = imagename.indexOf('$');
  var title = imagename.substr(index+1);
  (event.target).parentNode.parentNode.parentNode.parentNode.innerHTML= document.getElementById("item-wrapper"+title).innerHTML;
  document.getElementById("item-wrapper"+title).innerHTML = '';
  window.open("deleteImagePHP.php?title='"+title+"'&userName='"+<?php echo $userName; ?>+"'");

  }



    </script>

</body>
    
    
</html>