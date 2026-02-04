<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Vorc Motors Pvt Ltd </title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;0,700;0,900;1,400;1,700;1,900&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">

    </head>
    <style>

 body {
    font-family: "Inter", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto,
    Helvetica, Arial, sans-serif;
}

.lg{
    font-family: 'Magneto', sans-serif;
}

      .navbar-light .navbar-brand {
    color: rgba(0, 0, 0, .9);
    margin-left: -31px;
}
.navbar-light .navbar-nav .nav-link {
    position: relative;
    margin-right: 25px;
    padding: 35px 0;
    letter-spacing: 1px;
    color: var(--bs-dark);
        font-size: 16px;

    font-weight: 500;
    outline: none;
    transition: .5s;
}
      /* ----- UNIVERSAL IMAGE POPUP ----- */
.zoom-popup {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0,0,0,.75);
    display: none;
    align-items: center;
    justify-content: center;
    z-index: 99999;
}

.zoom-popup img {
    width: 60%;
    max-width: 745px;
    border-radius: 12px;
    animation: popupZoom .3s 
ease;
    margin-top: 26px;
    
}

@keyframes popupZoom {
    from { transform: scale(.7); opacity: 0; }
    to   { transform: scale(1); opacity: 1; }
}

.popup-close {
    position: absolute;
    top: 40px;
    right: 50px;
    color: white;
    font-size: 55px;
    font-weight: bold;
    cursor: pointer;
}

        .btn-primary {
    color: #fff;
    background-color: #009cff;
    border-color: #009cff;
}

.text-primary {
    color: #009cff !important;
}
a {
    color: #009cff;
    text-decoration: none;
}
.bg-primary {
    background-color: #009cff !important;
}
a:hover{
    color:#009cff;
}

/* Floating Action Bar Styling */
.floating-bar {
  position: fixed;
  bottom: 20px;
  left: 50%;
  transform: translateX(-50%);
  background: white;
  box-shadow: 0 4px 12px rgba(0,0,0,0.15);
  border-radius: 50px;
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 8px 15px;
  gap: 10px;
  z-index: 9999;
  transition: all 0.3s ease;
}

.floating-btn {
  display: flex;
  align-items: center;
  background: #f8f9fa;
  border-radius: 40px;
  padding: 8px 16px;
  font-size: 15px;
  color: #333;
  text-decoration: none;
  font-weight: 600;
  transition: all 0.3s ease;
  border: 1px solid #e0e0e0;
      height: 43px;
}

.floating-btn i {
  font-size: 18px;
  margin-right: 8px;
}

.floating-btn:hover {
  background: #0066cc;
  color: #fff;
  transform: translateY(-2px);
}
/* Grey WhatsApp Button */
.floating-btn.whatsapp {
  background: #6c757d; /* Medium grey */
  color: #fff;
  border: none;
  padding: 10px 14px;
  border-radius: 50%;
}

.floating-btn.whatsapp:hover {
  background: #5a6268; /* Darker grey on hover */
}


.floating-btn.whatsapp i {
  margin: 0;
}


/* Responsive for Mobile */
@media (max-width: 768px) {

html, body {
  width: 100%;
  overflow-x: hidden;
}
  .feature-section {
    padding: 0 !important;
    margin-top: 0;
  }

  /* Reset bootstrap row overflow */
  .feature-section .row {
    margin-left: 0;
    margin-right: 0;
  }

  /* IMAGE BOX */
  .image-box {
    height: 280px;
    padding: 0;
  }

  .image-box img {
    max-width: 100%;
    height: auto;
    object-fit: contain;
  }

  /* TEXT BOX */
  .text-box {
    height: auto;
    padding: 25px 20px;
    text-align: center;
  }

  /* Title */
  .title {
    font-size: 24px;
    line-height: 1.3;
    margin-bottom: 12px;
  }

  /* Description */
  .desc {
    font-size: 15px;
    max-width: 100%;
    line-height: 1.6;
  }

  /* Disable hover animations on mobile */
  .feature-section .row:hover .image-box img,
  .feature-section .row:hover .text-box {
    transform: none;
  }

  /* Disable title underline animation */
  .text-box .title::after {
    display: none;
  }
  
  .floating-bar {
    bottom: 10px;
    flex-direction: row;
    padding: 6px 10px;
    gap: 6px;
  }

  .floating-btn span {
    display: none;
  }

  .floating-btn {
    padding: 10px 12px;
  }
}


/* Desktop */
/* MOBILE FIX */
@media (max-width: 768px) {

  .header-carousel,
  .header-carousel .carousel,
  .header-carousel .carousel-inner,
  .header-carousel .carousel-item {
      height: auto !important;   /* collapse extra height */
  }

  .header-carousel .carousel-item img {
      width: 100%;
      height: auto;              /* image defines height */
      display: block;            /* removes inline gap */
      object-fit: contain;
  }
  
}





    </style>

    <body>

        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Topbar Start -->
         <div class="container-fluid bg-light p-0">
    <div class="row gx-0 d-none d-lg-flex">
        <div class="col-lg-7 px-5 text-start">
            <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                <small class="fa fa-phone-alt text-primary me-2"></small>
               <small> Sales: +91 95005 11821</small>
            </div>
            <div class="h-100 d-inline-flex align-items-center py-3">
                <small class="fa fa-phone-alt text-primary me-2"></small>
              <small>  Service : +91 95005 11434</small>
            </div>
        </div>
        <div class="col-lg-5 px-5 text-end">
            <div class="h-100 d-inline-flex align-items-center">
                <a class="btn btn-sm-square bg-white text-primary me-1" href="https://www.facebook.com/vorcmotors"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-sm-square bg-white text-primary me-1" href="https://www.youtube.com/@VORCMotorsPvtLtd"><i class="fab fa-youtube"></i></a>

                <a class="btn btn-sm-square bg-white text-primary me-0" href="https://www.instagram.com/vorcmotorspvtltd/"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </div>
</div>

        <!-- Topbar End -->

        <!-- Navbar & Hero Start -->
        <div class="container-fluid nav-bar sticky-top px-0 px-lg-4 py-2 py-lg-0">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light">
                     <a href="index.php" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
  <img src="vimage/vorc logo 02.png" alt="Logo" style="height:50px; width:auto;border-radius:8px;">
</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="fa fa-bars"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <div class="navbar-nav mx-auto py-0">
                              <a href="index.php" class="nav-item nav-link"><strong>Home</strong></a>
    <a href="about.php" class="nav-item nav-link"><strong>About Us</strong></a>
    <a href="dealers.php" class="nav-item nav-link"><strong>Become a Dealer</strong></a>
    <a href="products.php" class="nav-item nav-link"><strong>Our Products</strong></a>
    <a href="gallery.php" class="nav-item nav-link"><strong>Gallery</strong></a>
                            <a href="contact.php" class="nav-item nav-link"><strong>Contact Us</strong>
                    
                            </a>
                        </div>
                        <a href="#" class="btn btn-primary rounded-pill py-2 px-4 openEnquiry btn-enquire btn-enquire" id="openEnquiry"> Enquire Now</a>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Navbar & Hero End -->

    <!-- Carousel Start -->
<div class="header-carousel">
  <div id="vorc" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">

    <!-- Indicators -->
    <!-- <div class="carousel-indicators">
      <button type="button" data-bs-target="#vorc" data-bs-slide-to="0" class="active"></button>
      <button type="button" data-bs-target="#vorc" data-bs-slide-to="1"></button>
      <button type="button" data-bs-target="#vorc" data-bs-slide-to="2"></button>
    </div> -->

    <!-- Slides -->
    <div class="carousel-inner">

      <div class="carousel-item active">
        <img src="vimage/banner final 03.png" class="d-block w-100" alt="Slide 1">
      </div>

      <div class="carousel-item">
        <img src="vimage/banner final 02.png" class="d-block w-100" alt="Slide 2">
      </div>

      <div class="carousel-item">
        <img src="vimage/bn2.png" class="d-block w-100" alt="Slide 3">
      </div>

    </div>

    <!-- Controls -->
 <button class="carousel-control-prev" type="button" data-bs-target="#vorc" data-bs-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </button>

    <button class="carousel-control-next" type="button" data-bs-target="#vorc" data-bs-slide="next">
      <span class="carousel-control-next-icon"></span>
    </button> 

  </div>
</div>

<script>
  const carousel = document.querySelector('#vorc');
  new bootstrap.Carousel(carousel, {
    interval: 7000,
    ride: 'carousel',
    pause: 'hover'
  });
</script>

<!-- Carousel End -->

        <!-- Carousel End -->



<style>
/* Section Headings */
.carousel-control-prev, .carousel-control-next {
    position: absolute;
    top: 77px;
    bottom: -123px;
    z-index: 1;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 15%;
    padding: 0;
    color: #fff;
    text-align: center;
    background: none;
    border: 0;
    opacity: 61;
    transition: opacity .15s ease;
}
.spec-section {
    text-align: center;
    padding: 70px 0;
}

.spec-section h2 {
    font-size: 48px;
    font-weight: 800;
    color: #111;
}

.spec-section h2 span {
    color: #00a5ff;
}

.subtitle {
    width: 60%;
    margin: 15px auto 50px;
    font-size: 18px;
    color: #555;
    line-height: 1.6;
}

/* Wrapper Area */
.spec-wrapper {
    position: relative;
    width: 1100px;
    height: 1100px;
    margin: 0 auto;
}

/* Center Vehicle Image */
.center-image {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}

.center-image img {
    width: 720px;
    height: auto;
    filter: drop-shadow(0px 10px 25px rgba(0,0,0,0.25));
}

/* Feature Box Design */
.feature-box {
    width: 260px;
    background: #ffffff;
    border-radius: 25px;
    padding: 25px 20px;
    text-align: center;
    box-shadow: 0 8px 25px rgba(0,0,0,0.1);
    transition: 0.3s;
    position: absolute;
    border: 2px solid #eef1ff;
}

/* Hover Effect */
.feature-box:hover {
    transform: translateY(-10px);
    box-shadow: 0 12px 30px rgba(0,0,0,0.15);
}

/* Diamond Icon Container */
.diamond {
    width: 85px;
    height: 85px;
    padding: 18px;
    background: #00a5ff;
    transform: rotate(45deg);
    border-radius: 14px;
    margin: 0 auto 20px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.15);
    transition: 0.3s ease;
}

/* Keep image upright inside diamond */
.diamond img {
    width: 100%;
    height: 100%;
    object-fit: contain;
    transform: rotate(-45deg);
}

/* Diamond Hover Effect */
.diamond:hover {
    transform: rotate(45deg) scale(1.10);
    box-shadow: 0 12px 25px rgba(0,0,0,0.25);
}

/* Feature Text */
.feature-box h4 {
    font-size: 22px;
    color: #212d45;
    font-weight: 700;
    margin-bottom: 10px;
}

.feature-box p {
    font-size: 16px;
    color: #555;
    line-height: 1.5;
}

/* Circle Perfect Positions */
.box1 { top: 4%; left: 50%; transform: translateX(-50%); }
.box2 { top: 50%; right: 2%; transform: translateY(-50%); }
.box3 { bottom: 4%; left: 50%; transform: translateX(-50%); }
.box4 { top: 50%; left: 2%; transform: translateY(-50%); }


figure.image-1 {
    margin-left: -139px;
}



/* Main image hover effect */
.image-1 img {
    width: 100%;
    max-width: 500px;
    border-radius: 10px;
    cursor: pointer;
    transition: transform .3s ease;
}

.image-1 img:hover {
    transform: scale(1.05);
}

/* Popup Overlay */
.zoom-popup-2 {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0,0,0,.75);
    display: none;
    align-items: center;
    justify-content: center;
    z-index: 999;
}

.zoom-popup-2 img {
    width: 65%;
    max-width: 900px;
    border-radius: 12px;
    animation: popupZoom2 .3s ease;
    margin-top: 93px;
}

@keyframes popupZoom2 {
    from { transform: scale(.7); opacity: 0; }
    to { transform: scale(1); opacity: 1; }
}

/* Close button */
.close-popup-2 {
    position: absolute;
    top: 67px;
    right: 60px;
    font-size: 50px;
    color: white;
    cursor: pointer;
    font-weight: bold;
}

</style>



        <!-- Features Start -->
      
        <!-- Features End -->

<section class="about-section">
        <div class="container">
            <div class="row">                
                <div class="content-column col-lg-6 col-md-12 col-sm-12 order-2">
                    <div class="inner-column  wow fadeInRight" style="margin-top:38px;">
                        <div class="sec-title">
                            <!-- <span class="title">About VORC Motors</span> -->
                            <h2>About  <span class="lg">VORC</span> Motors</h2>
                        </div>
                        <div class="text">  At  <span class="lg" >VORC</span>  <strong> Motors</strong> we are revolutionizing the future of urban and commercial mobility with our next-generation electric and hybrid L5N & L5M three-wheelers. Built with cutting-edge engineering, our vehicles deliver unmatched performance, durability, and energy efficiency, making them the ideal choice for modern transportation needs.

 </div>
                        <ul class="list-style-one">
                            <!-- <li>Lorem Ipsum is simply dummy tex</li>
                            <li>Consectetur adipisicing elit</li>
                            <li>Sed do eiusmod tempor incididunt</li> -->
                        </ul>
                        <div class="btn-box">
                            <a href="about.php" class="theme-btn btn-style-one">About Us</a>
                        </div>
                    </div>
                </div>

                <!-- Image Column -->
               <div class="image-column col-lg-6 col-md-12 col-sm-12">
    <div class="inner-column wow fadeInLeft">
        <figure class="image-1">
            
                <img src="vimage/jnuh.png" alt="" class="zoom-trigger" >
         
        </figure>
    </div>
</div>

            </div>
        </div>
    </section>

    <div class="zoom-popup-2">
    <img src="" class="popup-img-2">
    <span class="close-popup-2">&times;</span>
</div>


<script>
document.querySelector(".zoom-trigger-2 img").addEventListener("click", function () {
    const popup = document.querySelector(".zoom-popup-2");
    const popupImg = document.querySelector(".popup-img-2");

    popupImg.src = this.src;
    popup.style.display = "flex";
});

document.querySelector(".close-popup-2").addEventListener("click", function () {
    document.querySelector(".zoom-popup-2").style.display = "none";
});

document.querySelector(".zoom-popup-2").addEventListener("click", function (e) {
    if (e.target === this) this.style.display = "none";
});
</script>

</div>
</div>
</div>

<!--slider-->

<!---->




    <style>
          section {
            padding: 60px 0;
           /* min-height: 100vh;*/
        }

.sec-title{
  position:relative;
  z-index: 1;
  margin-bottom:60px;
}

.sec-title .title{
  position: relative;
  display: block;
  font-size: 18px;
  line-height: 24px;
  color: #009cff;
  font-weight: 500;
  margin-bottom: 15px;
}

.sec-title h2{
  position: relative;
  display: block;
  font-size:40px;
  line-height: 1.28em;
 color: #009cff;
  font-weight: 600;
  padding-bottom:18px;
      margin-top: -25px;
}

.sec-title h2:before{
  position:absolute;
  content:'';
  left:0px;
  bottom:0px;
  width:50px;
  height:3px;
  background-color:#d1d2d6;
  
}

.sec-title .text{
  position: relative;
  font-size: 16px;
  line-height: 26px;
  color: #848484;
  font-weight: 400;
  margin-top: 35px;
}

.sec-title.light h2{
  color: #ffffff;
}

.sec-title.text-center h2:before{
  left:50%;
  margin-left: -25px;
}

.list-style-one{
  position:relative;
}

.list-style-one li{
  position:relative;
  font-size:16px;
  line-height:26px;
  color: #222222;
  font-weight:400;
  padding-left:35px;
  margin-bottom: 12px;
}

.list-style-one li:before {
    content: "\f058";
    position: absolute;
    left: 0;
    top: 0px;
    display: block;
    font-size: 18px;
    padding: 0px;
    color: #009cff;
    font-weight: 600;
    -moz-font-smoothing: grayscale;
    -webkit-font-smoothing: antialiased;
    font-style: normal;
    font-variant: normal;
    text-rendering: auto;
    line-height: 1.6;
    font-family: "Font Awesome 5 Free";
}

.list-style-one li a:hover{
  color: #44bce2;
}

.btn-style-one{
  position: relative;
  display: inline-block;
  font-size: 17px;
  line-height: 30px;
  color: #ffffff;
  padding: 10px 30px;
  font-weight: 600;
  overflow: hidden;
  letter-spacing: 0.02em;
  background-color: #009cff;
      border-radius: 49px;
}

.btn-style-one:hover{
  background-color: #001e57;
  color: #ffffff;
}
.about-section{
  position: relative;
  padding: 120px 0 70px;
}

.about-section .sec-title{
  margin-bottom: 45px;
}

.about-section .content-column{
  position: relative;
  margin-bottom: 50px;
}

.about-section .content-column .inner-column{
  position: relative;
  padding-left: 30px;
  margin-top: 18px !important;
    text-align: justify;
}

.about-section .text{
  margin-bottom: 40px;
    font-size: 17px;
    line-height: 32px;
    color: #201d1d;
    font-weight: 400;
}

.about-section .list-style-one{
  margin-bottom: 45px;
}

.about-section .btn-box{
  position: relative;
}

.about-section .btn-box a{
  padding: 15px 50px;
}

.about-section .image-column{
  position: relative;
}

.about-section .image-column .text-layer{
    position: absolute;
    right: -110px;
    top: 50%;
    font-size: 325px;
    line-height: 1em;
    color: #ffffff;
    margin-top: -175px;
    font-weight: 500;
}

.about-section .image-column .inner-column{
  position: relative;
  padding-left: 120px;
  padding-bottom: 125px;
}

.about-section .image-column .inner-column:before{
  position: absolute;
  left: -75px;
  top: 65px;
  height: 520px;
  width: 520px;
  background-image:url(https://i.ibb.co/fxJ1jtC/about-circle-1.png);
  content: "";
}

.about-section .image-column .image-1{
  position: relative;
}

.about-section .image-column .image-2{
  position: absolute;
  left: 0;
  bottom: 0;
}

.about-section .image-column .image-2 img,
.about-section .image-column .image-1 img{
  box-shadow: 0 30px 50px rgba(8,13,62,.15);
}

.about-section .image-column .video-link{
  position: absolute;
  left: 70px;
  top: 170px;
}

.about-section .image-column .video-link .link{
  position: relative;
  display: block;
  font-size: 22px;
  color: #191e34;
  font-weight: 400;
  text-align: center;
  height: 100px;
  width: 100px;
  line-height: 100px;
  background-color: #ffffff;
  border-radius: 50%;
  box-shadow: 0 30px 50px rgba(8,13,62,.15);
  -webkit-transition: all 300ms ease;
  -moz-transition: all 300ms ease;
  -ms-transition: all 300ms ease;
  -o-transition: all 300ms ease;
  transition: all 300ms ease;
}

.about-section .image-column .video-link .link:hover{
  background-color: #191e34;
  color: #fff;}
      </style>

        <!-- About Start -->
  

        <!-- About End -->
<style>

  
  /* Enquiry Panel */
.enquiry-panel {
  position: fixed;
  top: 0;
  right: -420px;
  width: 420px;
  height: 100vh;
  background: #fff;
  box-shadow: -6px 0 15px rgba(0,0,0,0.2);
  transition: right 0.4s ease;
  z-index: 2000;
  display: flex;
  flex-direction: column;
}
.enquiry-panel.open {
  right: 0;
}

/* Header */
.enquiry-header {
  background: #00205b;
  color: #fff;
  padding: 18px 22px; /* reduced height */
  font-size: 1.3rem;
  font-weight: 700;
  display: flex;
  justify-content: space-between;
  align-items: center;
}
.enquiry-close {
  cursor: pointer;
  font-size: 1.4rem;
  color: #fff;
}

/* Body */
.enquiry-body {
  padding: 20px 22px 30px 22px; /* slightly compact */
  flex: 1;
  overflow-y: auto;
}

/* Form Elements */
.form-label {
  font-weight: 600;
  color: #444;
  margin-bottom: 4px;
  font-size: 14px;
}

.form-control,
.form-select {
  border-radius: 8px;
  padding: 7px 10px; /* smaller height */
  border: 1px solid #d1d1d1;
  font-size: 14px;
      height: 55px; /* reduced height */
}
.form-control:focus,
.form-select:focus {
  border-color: #0046be;
  box-shadow: 0 0 0 0.15rem rgba(0,64,128,0.15);
}

/* Button */
.btn-otp {
  width: 100%;
  background: #0046be;
  color: #fff;
  font-weight: 600;
  padding: 10px; /* smaller button height */
  border-radius: 8px;
  border: none;
  margin-top: 8px;
  font-size: 14px;
  transition: all 0.3s ease;
}
.btn-otp:hover {
  background: #00205b;
}

/* Footer */
.form-footer {
  font-size: 12px;
  text-align: center;
  margin-top: 12px;
  color: #666;
}
.form-footer a {
  color: #0046be;
  text-decoration: none;
}

/* Scrollbar */
.enquiry-body::-webkit-scrollbar {
  width: 6px;
}
.enquiry-body::-webkit-scrollbar-thumb {
  background-color: #ccc;
  border-radius: 4px;
}

/* Mobile Responsive */
@media (max-width: 480px) {
  .enquiry-panel {
    width: 100%;
  }
}


#cdr{
  height: 918px;
}

#cdr1{
  height: 918px;
}
.time-slot-wrapper {
  display: flex;
  gap: 12px;
  margin-top: 8px;
}

.time-slot {
  flex: 1;
  cursor: pointer;
}

.time-slot input {
  display: none;
}

.time-slot span {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 8px;
  padding: 14px;
  border: 1px solid #dfe6f1;
  border-radius: 10px;
  font-weight: 500;
  color: #7d8aa5;
  background: #f8faff;
  transition: all 0.3s ease;
}

/* Active slot */
.time-slot input:checked + span {
  border-color: #1a73e8;
  background: #e8f0fe;
  color: #1a73e8;
}

/* Hover */
.time-slot span:hover {
  border-color: #1a73e8;
}

.disclaimer-box {
  padding: 15px;
  
}

.disclaimer-text {
  font-size: 14px;
  color: #555;
  line-height: 1.6;
  margin-bottom: 15px;
}

.checkbox-wrapper {
  display: flex;
  justify-content: center;
  align-items: center;
  gap: 8px;
}

.checkbox-wrapper input[type="checkbox"] {
  width: 16px;
  height: 16px;
  cursor: pointer;
}

.checkbox-wrapper label {
  font-size: 14px;
  color: #222;
  cursor: pointer;
}

  </style>


 
        <!-- Floating Action Bar -->
<div class="floating-bar">
   <a href="#" class="floating-btn btn-enquire">
  <i class="fas fa-phone-alt"></i>
  <span>Enquire Now</span>
</a>

<a href="#" class="floating-btn btn-testdrive">
  <img src="vimage/rickshaw.png" width="35">
  <span style="margin-left:10px;">Test Drive</span>
</a>


  <a href="https://wa.me/917845365222"
   target="_blank" class="floating-btn whatsapp">
    <i class="fab fa-whatsapp"></i>
  </a>
</div>

<!-- FontAwesome CDN -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">



<!-- Right Drawer -->
<div class="side-drawer">
  <div class="drawer-header">
    <h3 class="drawer-title"></h3>
    <span class="close-drawer">&times;</span>
  </div>

  <div class="drawer-body">

    <!-- Enquire Form -->
   <form class="form-enquire" action="save_enquiry.php" method="POST">
    <label>Name *</label>
    <input type="text" name="name" placeholder="Enter your name" required>

    <label>Mobile Number *</label>
    <input type="tel" name="mobile" placeholder="Enter your mobile number" required>

    <label>Model *</label>
    <select name="model" required>
        <option value="">Select Model</option>
        <option>Metro XL</option>
        <option>Loader 600 PV</option>
        <option>Loader 600 DV</option>
    </select>

    <label>Location *</label>
    <select class="js-location" name="location" required>
      <option value="">Choose a location</option>
    </select>

    <label>Dealer *</label>
    <select class="js-dealer" name="dealer_id" required>
      <option value="">Select a dealer</option>
    </select>

    <div class="form-group"> <div class="disclaimer-box"> <p class="disclaimer-text"> <a href="disclaimer.php" target="_blank"><b>Stay Connected</b></a>: By checking this box, you agree to receive updates and promotional messages from us through digital channels (WhatsApp/SMS/Email). We value your privacy and only send information relevant to your VORC vehicle. </p> <div class="checkbox-wrapper"> <input type="checkbox" id="accept" required> <label for="accept"> I accept the <strong><a href="terms.php" target="_blank">Terms & Conditions</a></strong> and <strong><a href="privacy.php" target="_blank">Privacy Policy</a></strong>. </label> </div> </div> </div>

    <button type="submit">Submit</button>
</form>

    <!-- Test Drive Form -->
   <form class="form-testdrive" action="save_testdrive.php" method="POST">
    <label>Full Name *</label>
    <input type="text" name="name" required>

    <label>Email</label>
    <input type="email" name="email">

    <label>Phone Number *</label>
    <input type="tel" name="phone" required>

    <label>Location *</label>
    <select class="js-location" name="location" required>
      <option value="">Choose a location</option>
    </select>

    <label>Dealer *</label>
    <select class="js-dealer" name="dealer_id" required>
      <option value="">Select a dealer</option>
    </select>

    <label>Choose Vehicle</label>
    <select name="model">
        <option value="">Select Model</option>
        <option>Metro XL</option>
        <option>Loader 600 PV</option>
        <option>Loader 600 DV</option>
    </select>

    <label>Preferred Date</label>
    <input type="date" name="preferred_date">
<div class="form-group">
  <label class="form-label">Preferred Time Slot</label>
  <div class="time-slot-wrapper">

    <label class="time-slot">
      <input type="radio" name="preferred_time" value="10AM-01PM" required>
      <span>
        <i class="far fa-clock"></i>
        10AM – 01PM
      </span>
    </label>

    <label class="time-slot">
      <input type="radio" name="preferred_time" value="2PM-06PM" required>
      <span>
        <i class="far fa-clock"></i>
        2PM – 06PM
      </span>
    </label>

  </div>
</div>


    <label>Additional Comments</label>
    <textarea name="comments"></textarea>

    <button type="submit">Book Test Drive</button>
</form>


  </div>
</div>
<script>
document.addEventListener('DOMContentLoaded', () => {

  // LOAD LOCATIONS FOR ALL LOCATION DROPDOWNS
  fetch('fetch_locations.php')
    .then(res => res.json())
    .then(locations => {
      document.querySelectorAll('.js-location').forEach(locationSelect => {
        locationSelect.innerHTML = '<option value="">Choose a location</option>';
        locations.forEach(city => {
          const option = document.createElement('option');
          option.value = city;
          option.textContent = city;
          locationSelect.appendChild(option);
        });
      });
    })
    .catch(err => console.error('Error fetching locations:', err));

  // HANDLE LOCATION CHANGE → LOAD DEALERS
  document.querySelectorAll('.js-location').forEach(locationSelect => {
    locationSelect.addEventListener('change', function() {

      const selectedCity = this.value;
      const form = this.closest('form');
      const dealerSelect = form.querySelector('.js-dealer');

      dealerSelect.innerHTML = '<option value="">Loading dealers...</option>';

      if (!selectedCity) {
        dealerSelect.innerHTML = '<option value="">Select a dealer</option>';
        return;
      }

      fetch('fetch_dealers1.php?city=' + encodeURIComponent(selectedCity))
        .then(res => res.json())
        .then(dealers => {
          dealerSelect.innerHTML = '<option value="">Select a dealer</option>';

          if (dealers.length === 0) {
            dealerSelect.innerHTML += '<option value="">No dealers found</option>';
            return;
          }

          dealers.forEach(d => {
            const option = document.createElement('option');
            option.value = d.id;
            option.textContent = `${d.name} - ${d.address}`;
            dealerSelect.appendChild(option);
          });
        })
        .catch(err => {
          console.error('Error fetching dealers:', err);
          dealerSelect.innerHTML = '<option value="">Error loading dealers</option>';
        });
    });
  });

});



</script>

<!-- Overlay -->
<div class="drawer-overlay"></div>

<style>
.side-drawer {
  position: fixed;
  top: 0;
  right: -460px;
  width: 460px;          /* SAME WIDTH */
  height: 100vh;         /* SAME HEIGHT */
  background: #fff;
  z-index: 9999;
  transition: right 0.4s ease;
  display: flex;
  flex-direction: column;
}

.side-drawer.active {
  right: 0;
}

/* Overlay */
.drawer-overlay {
  position: fixed;
  inset: 0;
  background: rgba(0,0,0,0.5);
  z-index: 9998;
  display: none;
}

/* Header */
.drawer-header {
  background: #009cff;
  color: white;
  padding: 15px 20px;
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.drawer-header h3 {
  margin: 0;
}

.close-drawer {
  font-size: 22px;
  cursor: pointer;
}

/* Body */
.drawer-body {
  padding: 20px;
  overflow-y: auto;
  flex: 1;
}

.drawer-body label {
  font-weight: 500;
  margin-top: 12px;
  display: block;
}

.drawer-body input,
.drawer-body select,
.drawer-body textarea {
  width: 100%;
  padding: 10px;
  margin-top: 6px;
  border-radius: 6px;
  border: 1px solid #ccc;
}

.drawer-body textarea {
  resize: none;
  height: 80px;
}

.drawer-body button {
  width: 100%;
  margin-top: 20px;
  background: #0073e6;
  color: white;
  border: none;
  padding: 12px;
  font-weight: 600;
  border-radius: 6px;
  cursor: pointer;
}

.drawer-body button:hover {
  background: #005bb5;
}

/* Forms */
.form-enquire,
.form-testdrive {
  display: none;
}

    </style>
<script>
const drawer = document.querySelector(".side-drawer");
const overlay = document.querySelector(".drawer-overlay");
const enquireForm = document.querySelector(".form-enquire");
const testDriveForm = document.querySelector(".form-testdrive");
const title = document.querySelector(".drawer-title");

// Enquire buttons
document.querySelectorAll(".btn-enquire").forEach(btn => {
  btn.onclick = e => {
    e.preventDefault();
    drawer.classList.add("active");
    overlay.style.display = "block";
    title.innerText = "Enquire Now";
    enquireForm.style.display = "block";
    testDriveForm.style.display = "none";
  };
});

// Test drive buttons
document.querySelectorAll(".btn-testdrive").forEach(btn => {
  btn.onclick = e => {
    e.preventDefault();
    drawer.classList.add("active");
    overlay.style.display = "block";
    title.innerText = "Book a Test Drive";
    enquireForm.style.display = "none";
    testDriveForm.style.display = "block";
  };
});

// Close
document.querySelector(".close-drawer").onclick = closeDrawer;
overlay.onclick = closeDrawer;

function closeDrawer() {
  drawer.classList.remove("active");
  overlay.style.display = "none";
}
</script>



<!--products-->
<!-- 3-Wheelers Products Section -->
<div class="bg" data-aos-delay="150" data-aos="fade-up"
     >
  <h1 class="heading-text-class text-center mb-4" style="color:black;">
    Passenger & Cargo Solutions
  </h1>

  <div class="slider owl-carousel scroll-content" id="whee">

      <!-- Product 1 -->
      
      <div class="card product-card text-center">
          <div class="product-img-wrapper ">
            
              <img src="vimage/in1.png" alt="Passenger Vehicle"  class="zoom-trigger">
          </div>
          <div class="content p-3">
              <h5 class="title" >Metro XL - Where Comfort Meets Capacity - The King of Passenger 3-Wheelers</h5>
              <a href="products1.php" class="custom-btn mt-3">View Details</a>
          </div>
      </div>

      <!-- Product 2 -->
      <div class="card product-card text-center">
          <div class="product-img-wrapper">
              <img src="vimage/p127.png" alt="Cargo Vehicle" class="zoom-trigger">
          </div> 
          <div class="content p-3">
              <h5 class="title">Loader 600 PV - Built to Carry More, Earn More</h5>
              <a href="products2.php" class="custom-btn mt-3">View Details</a>
          </div>
      </div>

      <!-- Product 3 -->
      <div class="card product-card text-center">
          <div class="product-img-wrapper">
              <img src="vimage/p128.png" alt="Heavy Load Vehicle" class="zoom-trigger">
          </div>
          <div class="content p-3">
              <h5 class="title">Loader 600 DV - Engineered for Last Mile Champions</h5>
              <a href="products3.php" class="custom-btn mt-3">View Details</a>
          </div>
      </div>

  </div>
</div>


<style>
.product-card {
    background: #fff;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    transition: all .3s ease;
    padding-bottom: 20px;
}

.product-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 8px 25px rgba(0,0,0,0.15);
}

/* Image Box */
.product-img-wrapper {
    
    display: flex;
    justify-content: center;
    align-items: center;
}

.product-img-wrapper img {
    max-width: 90%;
    height: auto;
    object-fit: contain;
}

/* Title */
.title {
    font-size: 20px;
    font-weight: 600;
    color: #222;
}

/* Button */
.custom-btn {
    display: inline-block;
    padding: 10px 24px;
    background: #00a5ff;
    color: #fff;
    border-radius: 30px;
    font-weight: 600;
    text-decoration: none;
    transition: 0.3s;
}

.custom-btn:hover {
    background: #007fcc;
}
#he {
    font-size: 75px;
    margin-top: 89px;
    font-weight: 600;
    text-align: center;
    color: #009cff;
  
}
</style>


<script>
$(document).ready(function(){
  $("#whee").owlCarousel({
      loop:true,
      margin:25,
      nav:true,
      navText:["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
      dots:false,
      autoplay:true,
      autoplayTimeout:3500,
      autoplayHoverPause:true,
      responsive:{
          0:{ items:1 },
          768:{ items:2 },
          992:{ items:3 },
          1200:{ items:3 }
      }
  });
});
</script>



<!--end products-->
        <!-- Fact Counter -->
        <div class="container-fluid fact bg-dark my-5 py-5" data-aos-delay="150" data-aos="fade-up"
     data-aos-anchor-placement="bottom-bottom">
    <div class="container">
        <div class="row g-4">

           <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.1s">
    <i class="fa fa-users fa-2x text-white mb-3"></i>
    <h4 class="text-white mb-2">Veteran Team</h4>
    <p class="text-white mb-0">Decades of expertise in automotive engineering and mobility.</p>
</div>

<div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.3s">
    <i class="fa fa-lightbulb fa-2x text-white mb-3"></i>
    <h4 class="text-white mb-2">Innovation at the Core</h4>
    <p class="text-white mb-0">Solving real-world mobility challenges with forward-thinking ideas.</p>
</div>

<div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.5s">
    <i class="fa fa-microchip fa-2x text-white mb-3"></i>
    <h4 class="text-white mb-2">Cutting-Edge Tech</h4>
    <p class="text-white mb-0">Proprietary EV technology built for a smarter, efficient future.</p>
</div>

<div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.7s">
    <i class="fa fa-handshake fa-2x text-white mb-3"></i>
    <h4 class="text-white mb-2">Trusted Partners</h4>
    <p class="text-white mb-0">Strong relationships with visionary early adopters and EV leaders.</p>
</div>


        </div>
    </div>
</div>

        <!-- Fact Counter -->

<style>

.feature-section {
  padding: 40px;
  margin-top: -35px;
}

/* LEFT SIDE */
.image-box {
  background-color: #00b6c4;
  display: flex;
  align-items: center;
  justify-content: center;
  height: 350px;
}



/* RIGHT SIDE */
.text-box {
  background-color: #111827;
  color: white;
  height: 350px;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
}

/* HEADING STYLE (same feel as image) */
.title {
  font-style: italic;
  font-weight: 600;
  font-size: 32px;
  color: #1e90ff;
  letter-spacing: 0.5px;
  margin-bottom: 16px;
}

/* PARAGRAPH STYLE */
.desc {
font-size: 16px;
  font-weight: 400;
  color: #e5e7eb;
  max-width: 80%;
  line-height: 1.6;
}
/* Feature section base */
.feature-section .row {
    transition: all 0.4s ease;
}

/* Image box */
.image-box {
    overflow: hidden;
}

.image-box img {
    transition: transform 0.6s ease;
}

/* Image hover – subtle zoom */
.feature-section .row:hover .image-box img {
    transform: scale(1.08);
}

/* Text hover lift */
.text-box {
    transition: transform 0.4s ease, box-shadow 0.4s ease;
}

.feature-section .row:hover .text-box {
    transform: translateY(-8px);
}

/* Title hover underline */
.text-box .title {
    position: relative;
    display: inline-block;
}

.text-box .title::after {
    content: "";
    position: absolute;
    width: 0;
    height: 2px;
    background: #0d6efd;
    left: 50%;
    bottom: -8px;
    transform: translateX(-50%);
    transition: width 0.4s ease;
}

.feature-section .row:hover .title::after {
    width: 60%;
}

/* Soft background glow */
.feature-section .row:hover {
    background: linear-gradient(
        180deg,
        rgba(0,0,0,0.02),
        rgba(0,0,0,0.04)
    );
}

  </style>
        

        <!-- Services Start -->
<h2 id="he"><span class="lg">VORC</span> DNA</h2>
 <h1 style="    color: #111010 !important;
    font-size: 24px;
    text-align: center;margin-top:36px;"> The Engineering Excellence Behind Every Ride</h1>


<div class="container-fluid service py-5" data-aos-delay="150" data-aos="fade-up">
    <div class="container py-5" style="padding-top: 1rem !important;">
        
      
<div class="container-fluid feature-section" >
  <div class="row g-0 align-items-center">
    
   <div class="container-fluid feature-section">

  <!-- SECTION 1 -->
  <div class="row g-0 align-items-center mb-5">
    <div class="col-md-6 image-box" data-aos="fade-right"
     data-aos-duration="1000">
      <img src="vimage/vrdf.png" class="img-fluid" />
    </div>
    <div class="col-md-6 text-box text-center " data-aos="fade-left"
     data-aos-duration="1000">
      <h2 class="title">Next-Gen LFP Battery Technology</h2>
      <p class="desc">
       Enjoy a superior certified range with our 11.8 kWh LFP battery, engineered for safety and extreme thermal stability..
      </p>
    </div>
  </div>



  <!-- SECTION 4 (IMAGE RIGHT) -->
<div class="row g-0 align-items-center mb-5">
  <div class="col-md-6 text-box text-center order-md-1 order-2" data-aos="fade-right"
     data-aos-duration="1000">
    <h2 class="title">On-board Charger</h2>
    <p class="desc">
     Charge anywhere, anytime with our integrated system that eliminates the need for carrying heavy external chargers.
    </p>
  </div>

  <div class="col-md-6 image-box order-md-2 order-1" data-aos="fade-left"
     data-aos-duration="1000">
    <img src="vimage/charge.png" class="img-fluid" />
  </div>
</div>

  <!-- SECTION 2 -->
  <div class="row g-0 align-items-center mb-5">
    <div class="col-md-6 image-box" data-aos="fade-right"
     data-aos-duration="1000">
      <img src="vimage/vrfg.png" class="img-fluid" />
    </div>
    <div class="col-md-6 text-box text-center" data-aos="fade-left"
     data-aos-duration="1000">
      <h2 class="title">IPV4 Rated Powerful Motor
</h2>
      <p class="desc">
        Experience best-in-class smooth acceleration and 10 kW peak power, driven by a waterproof motor engineered for superior all-weather traction and performance.
      </p>
    </div>
  </div>



  <!-- SECTION 4 (IMAGE RIGHT) -->
<div class="row g-0 align-items-center mb-5">
  <div class="col-md-6 text-box text-center order-md-1 order-2" data-aos="fade-right"
     data-aos-duration="1000">
    <h2 class="title">Rock-Solid Monocoque Chassis </h2>
    <p class="desc">
    Drive with confidence in a high-strength unibody "safety cage" that offers superior durability over traditional frames.
    </p>
  </div>

  <div class="col-md-6 image-box order-md-2 order-1" data-aos="fade-left"
     data-aos-duration="1000">
    <img src="vimage/chassis.png" class="img-fluid" />
  </div>
</div>



  <!-- SECTION 3 -->
  <div class="row g-0 align-items-center mb-5">
    <div class="col-md-6 image-box" data-aos="fade-right"
     data-aos-duration="1000">
      <img src="vimage/sha.png" class="img-fluid" style="height: 301px;"/>
    </div>
    <div class="col-md-6 text-box text-center" data-aos="fade-left"
     data-aos-duration="1000">
      <h2 class="title">Revolutionary CV Shaft</h2>
      <p class="desc">
       Maximize your uptime with a heavy-duty CV Shaft drive system designed for zero maintenance and direct power delivery.
      </p>
    </div>
  </div>




  <!-- SECTION 4 (IMAGE RIGHT) -->
<div class="row g-0 align-items-center mb-5">
  <div class="col-md-6 text-box text-center order-md-1 order-2" data-aos="fade-right"
     data-aos-duration="1000">
    <h2 class="title">R12 Tubeless Radial Tyres</h2>
    <p class="desc">
      Experience a smoother, more stable ride with large-diameter tyres built for better grip and hassle-free repairs.
    </p>
  </div>

  <div class="col-md-6 image-box order-md-2 order-1" data-aos="fade-left"
     data-aos-duration="1000">
    <img src="vimage/tyre2.png" class="img-fluid" />
  </div>
</div>

 <div class="row g-0 align-items-center mb-5">
    <div class="col-md-6 image-box" data-aos="fade-right"
     data-aos-duration="1000">
      <img src="vimage/map.png" class="img-fluid" />
    </div>
    <div class="col-md-6 text-box text-center" data-aos="fade-left"
     data-aos-duration="1000">
      <h2 class="title">VORC Connect   (Optional Add-on)</h2>
      <p class="desc">
     Upgrade to professional fleet management. Get real-time GPS tracking, battery health alerts, and geofencing via the VORC Mobile App.
      </p>
    </div>
  </div>



</div>

    

  </div>
</div>



    </div>
</div>

        <!-- Services End -->
<div class="header-carousel">
    <div id="carouselId" class="carousel slide" data-bs-ride="carousel" data-bs-interval="false">
        <ol class="carousel-indicators">
            <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active" aria-current="true" aria-label="First slide"></li>
            <li data-bs-target="#carouselId" data-bs-slide-to="1" aria-label="Second slide"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            
            <!-- ===== Slide 1 ===== -->
           <!-- Test Drive Form -->
<div class="carousel-item active" id="cdr">
    <img src="vimage/Vorc 108.png" class="img-fluid w-100" alt="First slide" id="cdr1"/>
    <div class="carousel-caption">
        <div class="container py-4">
            <div class="row g-5">

                <!-- Form Section -->
                <div class="col-lg-6 fadeInLeft animated" data-animation="fadeInLeft" data-delay="1s" style="animation-delay: 1s;">
                    <div class="bg-primary h-100 d-flex flex-column justify-content-center text-center p-5 rounded">
                        <div class="form-box text-start">
                            <h2 class="text-white mb-4">Book a Test Drive</h2>

                            <form action="save_test_drive.php" method="POST">

                                <!-- Full Name -->
                                <div class="form-group mb-3">
                                    <label class="text-white">Full Name</label>
                                    <input type="text" name="name" class="form-control border-0" placeholder="Enter your name" required>
                                </div>

                                <!-- Email -->
                                <div class="form-group mb-3">
                                    <label class="text-white">Email Address</label>
                                    <input type="email" name="email" class="form-control border-0" placeholder="Enter your email" required>
                                </div>

                                <!-- Phone -->
                                <div class="form-group mb-3">
                                    <label class="text-white">Phone Number</label>
                                    <input type="tel" name="phone" class="form-control border-0" placeholder="Enter your phone number" required>
                                </div>

                                <!-- Pincode -->
                                <div class="form-group mb-3">
                                    <label class="text-white">Pincode</label>
                                    <input type="text" id="pincode" name="pincode" class="form-control border-0" placeholder="Enter your pincode" required>
                                </div>

                                <!-- Location + Dealer -->
                             <div class="row mb-3">
    <div class="col-6">
        <label class="text-white">Select Location</label>
        <select id="location" name="location" class="form-select border-0" required>
            <option value="">Choose a location</option>
        </select>
    </div>

    <div class="col-6">
        <label class="text-white">Nearest Dealer</label>
        <select id="dealer" name="dealer_id" class="form-select border-0" required>
            <option value="">Select a dealer</option>
        </select>
    </div>
</div>


                                <!-- Vehicle + Date -->
                                <div class="row mb-3">
                                    <div class="col-6">
                                        <label class="text-white">Select Vehicle</label>
                                        <select id="vehicle" name="vehicle" class="form-select border-0" required>
                                            <option value="">Choose a vehicle</option>
                                              <option>Metro XL</option>
            <option>Loader 600 PV</option>
            <option>Loader 600 DV</option>                      </select>
                                    </div>
                                    <div class="col-6">
                                        <label class="text-white">Preferred Date</label>
                                        <input type="date" id="date" name="date" class="form-control border-0" required>
                                    </div>
                                </div>


                                <!-- Comments -->
                                <div class="form-group mb-3">
                                    <label class="text-white">Additional Comments</label>
                                    <textarea name="comments" class="form-control border-0" rows="3" placeholder="Any specific request?"></textarea>
                                </div>

                                <!-- Submit -->
                                <button type="submit" class="btn btn-secondary w-100 py-3">Submit Request</button>
                            </form>

                        </div>
                    </div>
                </div>

                <!-- Right Section Empty -->
                <div class="col-lg-6 d-none d-lg-flex fadeInRight animated" data-animation="fadeInRight" data-delay="1s"></div>

            </div>
        </div>
    </div>
</div>

<!-- jQuery (Required for AJAX) -->

<script>
// LOAD LOCATIONS ON PAGE LOAD
document.addEventListener('DOMContentLoaded', function () {
    fetch('fetch_locations.php')
        .then(res => res.json())
        .then(data => {
            const location = document.getElementById('location');
            data.forEach(city => {
                location.innerHTML += `<option value="${city}">${city}</option>`;
            });
        });
});

// LOAD DEALERS BASED ON LOCATION
document.getElementById('location').addEventListener('change', function () {
    const city = this.value;
    const dealer = document.getElementById('dealer');

    dealer.innerHTML = '<option value="">Loading dealers...</option>';

    if (!city) {
        dealer.innerHTML = '<option value="">Select a dealer</option>';
        return;
    }

    fetch('fetch_dealers1.php?city=' + encodeURIComponent(city))
        .then(res => res.json())
        .then(data => {
            dealer.innerHTML = '<option value="">Select a dealer</option>';

            if (data.length === 0) {
                dealer.innerHTML += '<option value="">No dealers found</option>';
            }

            data.forEach(d => {
                dealer.innerHTML += `
                    <option value="${d.id}">
                        ${d.name} - ${d.address}
                    </option>`;
            });
        });
});

document.addEventListener('DOMContentLoaded', function () {
    fetch('fetch_locations.php')
        .then(res => res.json())
        .then(data => {
            const location = document.getElementById('location1');
            data.forEach(city => {
                location.innerHTML += `<option value="${city}">${city}</option>`;
            });
        });
});

// LOAD DEALERS BASED ON LOCATION
document.getElementById('location1').addEventListener('change', function () {
    const city = this.value;
    const dealer = document.getElementById('dealer1');

    dealer.innerHTML = '<option value="">Loading dealers...</option>';

    if (!city) {
        dealer.innerHTML = '<option value="">Select a dealer</option>';
        return;
    }

    fetch('fetch_dealers1.php?city=' + encodeURIComponent(city))
        .then(res => res.json())
        .then(data => {
            dealer.innerHTML = '<option value="">Select a dealer</option>';

            if (data.length === 0) {
                dealer.innerHTML += '<option value="">No dealers found</option>';
            }

            data.forEach(d => {
                dealer.innerHTML += `
                    <option value="${d.id}">
                        ${d.name} - ${d.address}
                    </option>`;
            });
        });
});


// LOAD LOCATIONS ON PAGE LOAD
document.addEventListener('DOMContentLoaded', function () {
    fetch('fetch_locations.php')
        .then(res => res.json())
        .then(data => {
            const location = document.getElementById('location2');
            data.forEach(city => {
                location.innerHTML += `<option value="${city}">${city}</option>`;
            });
        });
});

// LOAD DEALERS BASED ON LOCATION
document.getElementById('location2').addEventListener('change', function () {
    const city = this.value;
    const dealer = document.getElementById('dealer2');

    dealer.innerHTML = '<option value="">Loading dealers...</option>';

    if (!city) {
        dealer.innerHTML = '<option value="">Select a dealer</option>';
        return;
    }

    fetch('fetch_dealers1.php?city=' + encodeURIComponent(city))
        .then(res => res.json())
        .then(data => {
            dealer.innerHTML = '<option value="">Select a dealer</option>';

            if (data.length === 0) {
                dealer.innerHTML += '<option value="">No dealers found</option>';
            }

            data.forEach(d => {
                dealer.innerHTML += `
                    <option value="${d.id}">
                        ${d.name} - ${d.address}
                    </option>`;
            });
        });
});

document.addEventListener('DOMContentLoaded', function () {
    fetch('fetch_locations.php')
        .then(res => res.json())
        .then(data => {
            const location = document.getElementById('location2');
            data.forEach(city => {
                location.innerHTML += `<option value="${city}">${city}</option>`;
            });
        });
});

</script>



            <!-- ===== Slide 2 ===== -->
            
        </div>
    </div>
</div>




    <!-- Car Categories Start -->

<!-- Updated Styles -->
<style>
/* Section background */
.bg {
  background-color: #f4f6f8; /* light grey for better contrast */
  padding: 60px 0;


}

/* Product Card */
.product-card {
        height: 561px;
  width: 90%;
  margin: 0 auto;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  border-radius: 20px;
  overflow: hidden;
  background: #ffffff;
  box-shadow: 0 4px 20px rgba(0,0,0,0.1);
  transition: all 0.3s ease;
  padding: 20px;
  border: 2px solid #dee2e6; /* subtle grey border */
}

.product-card:hover {
  transform: translateY(-6px);
  box-shadow: 0 10px 25px rgba(0,0,0,0.2);
  border-color: #326cca; /* highlight blue border on hover */
}

/* Image area */
.product-card .img {
  background: #e9ecef; /* grey background behind image */
  border-radius: 15px;
  padding: 10px;
  display: flex;
  align-items: center;
  justify-content: center;
  height: 220px;
}

.product-card .img img {
    /* max-width: 100%; */
    /* max-height: 200px; */
    /* object-fit: contain; */
    height: 246px;
    width: 468px;
}

/* Title */
.product-card .title {
  font-size: 18px;
  font-weight: 600;
  color: #212529;
  margin-top: 15px;
  margin-bottom: 20px;
  text-align: center;
}

/* Button */
.custom-btn {
      background-color: #009cff;
  border: none;
  border-radius: 25px;
  padding: 10px 25px;
  color: #fff !important;
  font-weight: 500;
  transition: all 0.3s ease;
  text-decoration: none;
  display: inline-block;
}

.custom-btn:hover {
  background-color: #1f2e4e;;
  color: #fff !important;
  transform: scale(1.05);
}

/* Navigation Arrows */
.owl-nav {
  position: absolute;
  top: 40%;
  width: 100%;
  display: flex;
  justify-content: space-between;
}

.owl-nav button {
  background: #fff !important;
  color: #326cca !important;
  border-radius: 50%;
  width: 45px;
  height: 45px;
  box-shadow: 0 3px 10px rgba(0,0,0,0.2);
  font-size: 18px !important;
  transition: all 0.3s ease;
}

.owl-nav button:hover {
  background: #d98905 !important;
  color: #fff !important;
  transform: scale(1.1);
}
.mb-0 {
    margin-bottom: 13px !important;
}
</style>





                   
        <!-- Car categories End -->

<style>
  .lg {
    font-family: 'Magneto', sans-serif;
}
  </style>
        

        <!-- Car Steps Start -->
       <div class="container-fluid steps py-5" style="background: linear-gradient(120deg, #0a1a3a, #19376d);">
  <div class="container py-5">
    <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
      <h1 class="display-5 text-capitalize text-white mb-3">
        <span class="lg">VORC</span><span class="text-primary"> Booking Process</span>
      </h1>
      <p class="mb-0 text-white">
        Experience a simple and transparent process to own your electric 3-wheeler. 
        From selection to doorstep delivery, <span class="lg">VORC</span> Motors ensures a smooth, reliable, and eco-friendly ride every step of the way.
      </p>
    </div>

    <div class="row g-4">
      <!-- Step 1 -->
      <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
        <div class="steps-item p-4 mb-4">
          <h4>Explore Our Models</h4>
          <p class="mb-0">
            Browse our range of electric 3-wheelers — Loader 600 DV/ PV, Metro XL and Pick-Up. 
            Compare performance, range, and comfort to find the perfect match for your business.
          </p>
          <div class="setps-number">01.</div>
        </div>
      </div>

      <!-- Step 2 -->
      <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
        <div class="steps-item p-4 mb-4">
          <h4>Book Your Vehicle</h4>
          <p class="mb-0">
            Reserve your preferred model online with just a few clicks. 
            Our team will guide you through finance options, registration, and delivery timelines.
          </p>
          <div class="setps-number">02.</div>
        </div>
      </div>

      <!-- Step 3 -->
      <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
        <div class="steps-item p-4 mb-4">
          <h4>Get It Delivered</h4>
          <p class="mb-0">
            Sit back and relax — your VORC 3-wheeler will be delivered to your doorstep, fully charged and ready to drive.
            Our after-sales team ensures continuous support and maintenance.
          </p>
          <div class="setps-number">03.</div>
        </div>
      </div>
    </div>
  </div>
</div>
        <!-- Car Steps End -->

        <div class="bg-slider" id="bgSlider">
</div>
  <!-- <div class="overlay">
    <h1>Welcome to Our Page</h1>
    <p>Experience smooth background transitions</p>
  </div> -->
</div>



<style>

  img#san {
    height: 593px;
    width: 100%;
    margin-top: -496px;}

  /* --- Background Slider Container --- */
.bg-slider {
  position: relative;
  width: 100%;
  height: 500px; /* adjust as needed */
  background-size: cover;
  background-position: center;
  transition: background-image 1s ease-in-out;
  display: flex;
  align-items: center;
  justify-content: center;
  margin-top:100px;
}

/* --- Optional Overlay Text --- */
.bg-slider .overlay {
  background: rgba(0, 0, 0, 0.4);
  color: #fff;
  text-align: center;
  padding: 40px;
  border-radius: 10px;
}

.bg-slider h1 {
  font-size: 2.5rem;
  margin-bottom: 10px;
}
.bg-slider p {
  font-size: 1.2rem;
}


.blog-img {
height: 343px;/* set your preferred uniform height */
  overflow: hidden; /* hides excess image parts */
  border-radius: 10px; /* optional for rounded corners */
}

.blog-img img {
  width: 100%;
  height: 100%;
  object-fit: cover; /* ensures uniform aspect ratio with cropping */
}

#bl{
      margin-top: -581px;
}
/* Blog Card Base */
.blog-item {
    overflow: hidden;
    border-radius: 12px;
    background: #fff;
    transition: all 0.4s ease;
    position: relative;
}

/* Lift card on hover */
.blog-item:hover {
    transform: translateY(-12px);
    box-shadow: 0 18px 40px rgba(0, 0, 0, 0.18);
}

/* Image animation */
.blog-img {
    overflow: hidden;
}

.blog-img img {
    transition: transform 0.6s ease;
}

/* Zoom + subtle rotate */
.blog-item:hover .blog-img img {
    transform: scale(1.15) rotate(1deg);
}

/* Content slide-up */
.blog-content {
    transition: transform 0.4s ease;
}

.blog-item:hover .blog-content {
    transform: translateY(-8px);
}

/* Title underline animation */
.blog-content a.h4 {
    position: relative;
    text-decoration: none;
}

.blog-content a.h4::after {
    content: "";
    position: absolute;
    width: 0;
    height: 2px;
    background-color: #0d6efd; /* Bootstrap primary */
    left: 0;
    bottom: -6px;
    transition: width 0.4s ease;
}

.blog-item:hover .blog-content a.h4::after {
    width: 100%;
}

/* Smooth fade-in on page load */
.blog-item {
    animation: fadeUp 0.8s ease forwards;
}

@keyframes fadeUp {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

span#num {
    margin-left: 17px;
}
span#num1{
 margin-left: 8px;
}

  </style>

  


        <!-- Blog Start -->
        <div class="container-fluid blog py-5">
            <div class="container py-5" id="bl">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
                    <h1 class="display-5 text-capitalize mb-3"><span class="text-primary"> Blog & News</span></h1>
                    <p class="mb-0">Stay updated with the latest happenings from Vorc Motors – from new electric vehicle launches to sustainability initiatives and auto industry insights.
                    </p>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="blog-item">
                            <div class="blog-img">
                                <img src="vimage/in1.png" class="img-fluid rounded-top w-100" alt="Image" id="she">
                            </div>
                            <div class="blog-content rounded-bottom p-4">
                                <div class="blog-date">30 Dec 2025</div>
                                <div class="blog-comment my-3">
                                    <div class="small"><span class="fa fa-user text-primary"></span><span class="ms-2">Martin.C</span></div>
                                    <div class="small"><span class="fa fa-comment-alt text-primary"></span><span class="ms-2">6 Comments</span></div>
                                </div>
                                <a href="#" class="h4 d-block mb-3">New EV Launch</a>
                                <p class="mb-3">              Vorc Motors has unveiled its latest electric auto, designed for both urban and rural mobility. With extended battery life and faster charging, it sets a new benchmark in the EV market.</p>

                                <!-- <a href="#" class="">Read More  <i class="fa fa-arrow-right"></i></a> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="blog-item">
                            <div class="blog-img">
                                <img src="vimage/p127.png" class="img-fluid rounded-top w-100" alt="Image" >
                            </div>
                            <div class="blog-content rounded-bottom p-4">
                                <div class="blog-date">25 Dec 2025</div>
                                <div class="blog-comment my-3">
                                    <div class="small"><span class="fa fa-user text-primary"></span><span class="ms-2">Martin.C</span></div>
                                    <div class="small"><span class="fa fa-comment-alt text-primary"></span><span class="ms-2">6 Comments</span></div>
                                </div>
                                <a href="#" class="h4 d-block mb-3">EV Charging Expansion</a>
                                <p class="mb-3">  To support the growing EV ecosystem, Vorc Motors is installing fast-charging stations across major cities, making eco-friendly travel more convenient and accessible.</p>

                                <!-- <a href="#" class="">Read More  <i class="fa fa-arrow-right"></i></a> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="blog-item">
                            <div class="blog-img">
                                <img src="vimage/p128.png" class="img-fluid rounded-top w-100" alt="Image" >
                            </div>
                            <div class="blog-content rounded-bottom p-4">
                                <div class="blog-date">27 Dec 2025</div>
                                <div class="blog-comment my-3">
                                    <div class="small"><span class="fa fa-user text-primary"></span><span class="ms-2">Martin.C</span></div>
                                    <div class="small"><span class="fa fa-comment-alt text-primary"></span><span class="ms-2">6 Comments</span></div>
                                </div>
                                <a href="#" class="h4 d-block mb-3">Vorc at Auto Expo</a>
                                <p class="mb-3"> Vorc Motors showcased its futuristic designs and EV technology at the International Auto Expo 2025, attracting huge attention from industry leaders and customers alike.</p>

                                <!-- <a href="#" class="">Read More  <i class="fa fa-arrow-right"></i></a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog End -->

        <!-- Banner Start -->
        <div class="container-fluid banner pb-5 wow zoomInDown" data-wow-delay="0.1s">
            <div class="container pb-5">
                <div class="banner-item rounded">
                    <img src="vimage/Vorc 108.png" class="img-fluid rounded w-100" alt="">
                    <div class="banner-content">
                        <h2 class="text-primary"><span class="lg"> VORC</span> Motors</h2>
                        <h1 class="text-white"> Passenger & Cargo Solutions</h1>
                        <p class="text-white">Experience power, style, and performance</p>
                        <div class="banner-btn">
                            <a href="https://wa.me/917845365222"
   target="_blank"
   class="btn btn-secondary rounded-pill py-3 px-4 px-md-5 me-2">WhatsApp</a>
                            <a href="contact.php" class="btn btn-primary rounded-pill py-3 px-4 px-md-5 ms-2">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Banner End -->

        <!-- Team Start -->
        <!-- <div class="container-fluid team pb-5">
            <div class="container pb-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
                  <h1 class="display-5 text-capitalize mb-3">Customer<span class="text-primary"> Support</span> Center</h1>
<p class="mb-0">
Our Customer Support Center is dedicated to providing prompt and reliable assistance for all your queries and concerns. Whether you need help with a product, service, or technical issue, our team is here to ensure a smooth and satisfying experience every time.
</p>

                </div>
                <div class="row g-4">
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item p-4 pt-0">
                            <div class="team-img">
                                <img src="vimage/rev1.jpg" class="img-fluid rounded w-100" alt="Image">
                            </div>
                            <div class="team-content pt-4">
                               <h4>Murugesan Raja</h4>

<p>Delivery & Road Assistance</p>
                                <div class="team-icon d-flex justify-content-center">
                                    <a class="btn btn-square btn-light rounded-circle mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-light rounded-circle mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-light rounded-circle mx-1" href=""><i class="fab fa-instagram"></i></a>
                                    <a class="btn btn-square btn-light rounded-circle mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item p-4 pt-0">
                            <div class="team-img">
                                <img src="vimage/rev3.png" class="img-fluid rounded w-100" alt="Image">
                            </div>
                            <div class="team-content pt-4">
                               <h4>Prasad </h4>

<p>Auto Technician</p>
                                <div class="team-icon d-flex justify-content-center">
                                    <a class="btn btn-square btn-light rounded-circle mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-light rounded-circle mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-light rounded-circle mx-1" href=""><i class="fab fa-instagram"></i></a>
                                    <a class="btn btn-square btn-light rounded-circle mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="team-item p-4 pt-0">
                            <div class="team-img">
                                <img src="vimage/rev5.png" class="img-fluid rounded w-100" alt="Image">
                            </div>
                            <div class="team-content pt-4">
                              <h4>Ramesh Arun</h4>

<p>Service Engineer</p>
                                <div class="team-icon d-flex justify-content-center">
                                    <a class="btn btn-square btn-light rounded-circle mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-light rounded-circle mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-light rounded-circle mx-1" href=""><i class="fab fa-instagram"></i></a>
                                    <a class="btn btn-square btn-light rounded-circle mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="team-item p-4 pt-0">
                            <div class="team-img">
                                <img src="vimage/rev6.png" class="img-fluid rounded w-100" alt="Image">
                            </div>
                            <div class="team-content pt-4">
                               <h4>Kumar Senthil</h4>

<p>Senior Mechanic</p>
                                <div class="team-icon d-flex justify-content-center">
                                    <a class="btn btn-square btn-light rounded-circle mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-light rounded-circle mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-light rounded-circle mx-1" href=""><i class="fab fa-instagram"></i></a>
                                    <a class="btn btn-square btn-light rounded-circle mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Team End -->

        <!-- Testimonial Start -->
      <div class="container-fluid testimonial pb-5" data-aos="fade-up" data-aos-delay="100">
    <div class="container pb-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
            <h1 class="display-5 text-capitalize mb-3">Our Clients<span class="text-primary"> Reviews</span></h1>
            <p class="mb-0">At VORC Motors, our customers are at the heart of everything we do. Here's what they have to say about our vehicles, service quality, and overall experience with us.</p>
        </div>

        <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">

            <!-- Review 1 -->
          <div class="testimonial-item">
    <div class="testimonial-quote"><i class="fa fa-quote-right fa-2x"></i></div>
    <div class="testimonial-inner p-4">
        <img src="vimage/review1.png" class="img-fluid rounded-circle" alt="Customer 1">
        <div class="ms-4">
           <h4>Aravind Raj</h4>
            <p>Business Owner</p>
            <div class="d-flex text-primary">
                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                <i class="fas fa-star"></i><i class="fas fa-star"></i>
            </div>
        </div>
    </div>
    <div class="border-top rounded-bottom p-4">
        <p class="mb-0">
           “I recently bought a  Loader 600 DV from VORC Motors. The power, smooth ride
            and build quality are outstanding. The showroom service was professional and quick—
            highly recommended!”
        </p>
    </div>
</div>


            <!-- Review 2 -->
            <div class="testimonial-item">
                <div class="testimonial-quote"><i class="fa fa-quote-right fa-2x"></i></div>
                <div class="testimonial-inner p-4">
                    <img src="vimage/review4.png" class="img-fluid rounded-circle" alt="Customer 2">
                    <div class="ms-4">
                        <h4>Senthil Kumar</h4>
            <p>Customer</p>
                        <div class="d-flex text-primary">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star text-body"></i>
                        </div>
                    </div>
                </div>
                <div class="border-top rounded-bottom p-4">
                    <p class="mb-0">   “Bought my first  auto at VORC Motors. Delivery was fast and the staff explained
            everything including finance and service schedule. Best showroom experience!”</p>
                </div>
            </div>

            <!-- Review 3 -->
            <div class="testimonial-item">
                <div class="testimonial-quote"><i class="fa fa-quote-right fa-2x"></i></div>
                <div class="testimonial-inner p-4">
                    <img src="vimage/review3.png" class="img-fluid rounded-circle" alt="Customer 3">
                    <div class="ms-4">
                         <h4>Karthik Suresh</h4>
            <p>Customer</p>
                        <div class="d-flex text-primary">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star text-body"></i>
                            <i class="fas fa-star text-body"></i>
                        </div>
                    </div>
                </div>
                <div class="border-top rounded-bottom p-4">
                    <p class="mb-0">"Great experience! Bought my first VORC auto  last month and it’s been amazing so far. Stylish looks, smooth handling, and good mileage."</p>
                </div>
            </div>
        </div>
    </div>
</div>

        <!-- Testimonial End -->

        <!-- Footer Start -->
         <div class="container-fluid footer py-5 " data-aos="fade-up" data-aos-delay="100">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <div class="footer-item">
                               <h4 class="text-white mb-4">About Us</h4>
<p class="mb-3 text-white-50">
    At <strong>VORC Motors</strong>, we are driven by passion, innovation, and excellence.  
    
</p>
                            </div>
                            <div class="position-relative">
                                <input class="form-control rounded-pill w-100 py-3 ps-4 pe-5" type="text" placeholder="Enter your email">
                                <button type="button" class="btn btn-secondary rounded-pill position-absolute top-0 end-0 py-2 mt-2 me-2">Subscribe</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="text-white mb-4">Quick Links</h4>
                            <a href="index.php"><i class="fas fa-angle-right me-2"></i>Home</a>
                            <a href="about.php"><i class="fas fa-angle-right me-2"></i>About Us</a>
                            <a href="dealers.php"><i class="fas fa-angle-right me-2"></i> Dealership</a>
                            <a href="products.php"><i class="fas fa-angle-right me-2"></i> Products</a>
                            <a href="careers.php"><i class="fas fa-angle-right me-2"></i> Careers</a>
                               <a href="safety.php"><i class="fas fa-angle-right me-2"></i> RSA</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="text-white mb-4">Business Hours</h4>
                            <div class="mb-3">
                                <h6 class="text-muted mb-0">Mon - Friday:</h6>
                                <p class="text-white mb-0">9:30 AM to 6:00 PM</p>
                            </div>
                            <div class="mb-3">
                                <h6 class="text-muted mb-0">Saturday:</h6>
                                <p class="text-white mb-0">9:30 AM to 6:00 PM</p>
                            </div>
                            <!-- <div class="mb-3">
                                <h6 class="text-muted mb-0">Vacation:</h6>
                                <p class="text-white mb-0">All Sunday is our vacation</p>
                            </div> -->
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="text-white mb-4">Contact Info</h4>
                            <!-- <a href="#"><i class="fa fa-map-marker-alt me-2"></i> 123 Street, New York, USA</a> -->
                            <a href="mailto:info@example.com"><i class="fas fa-envelope me-2"></i>admin@vorcmotors.com</a>
                            <a href="tel:+012 345 67890"><i class="fas fa-phone me-2"></i> Sales   <span id="num">:</span> +91 95005 11821</a>
                            <a href="tel:+012 345 67890" class="mb-3"><i class="fas fa-phone me-2"></i>Service <span id="num1">:</span> +91 95005 11434</a>
                          
                        </div>
                    </div>

                     <div class="footer-bottom">

  <!-- Divider line -->
  <div class="footer-divider"></div>

  <!-- Social Icons -->
  <div class="footer-social-icons">
    <a href="https://www.facebook.com/vorcmotors"><i class="fab fa-facebook-f"></i></a>
    <a href="#"><i class="fab fa-x-twitter"></i></a>
    <a href="https://www.youtube.com/@VORCMotorsPvtLtd"><i class="fab fa-youtube"></i></a>
    <a href="https://www.instagram.com/vorcmotorspvtltd/"><i class="fab fa-instagram"></i></a>
    <a href="#"><i class="fab fa-linkedin-in"></i></a>
  </div>

  <!-- Policy Links -->
  <div class="footer-policy">
  
    <a href="privacy.php">Privacy Policy</a>
    <a href="terms.php">Terms & Conditions</a>
      <a href="disclaimer.php">Disclaimer</a>
    <!-- <a href="#"></a> -->
  </div>

  <!-- Copyright -->
  <p class="footer-copy">
     Copyrights © 2026 All Rights Reserved by VORC Motors .
  </p>

</div>
                </div>
            </div>
        </div>
        <!-- Footer End -->
        
        <!-- Copyright Start -->
     
<style>

  .footer-bottom {
  background: #000c21;
  padding: 28px 15px 22px;
  text-align: center;
  overflow-x: hidden;
}

/* Divider line above icons */
.footer-divider {
  width: 100%;
  max-width: 92%;
  height: 1px;
  background: rgba(255,255,255,0.15);
  margin: 0 auto 18px;
}

/* Social Icons */
.footer-social-icons a {
  width: 38px;
  height: 38px;
  margin: 0 6px;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  background: #009cff;
  border-radius: 50%;
  color: #fff;
  font-size: 15px;
  text-decoration: none;
  transition: all 0.3s ease;
}

.footer-social-icons a:hover {
  background: #fff;
  color: #000c21;
}

/* Policy links */
.footer-policy {
  margin-top: 17px;
}

.footer-policy a {
  color: #bfc6d1;
  font-size: 14px;
  margin: 0 14px;
  text-decoration: none;
}

.footer-policy a:hover {
  color: #ffffff;
}

/* Copyright */
.footer-copy {
  color: #9aa3b2;
  font-size: 14.5px;
  margin-top: 10px;
}

/* Mobile handling */
@media (max-width: 768px) {
  .footer-policy a {
    display: inline-block;
    margin: 6px 10px;
  }
}

  </style>
        <!-- Copyright End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-secondary btn-lg-square rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>   

        <!-- UNIVERSAL IMAGE POPUP -->
<div class="zoom-popup">
    <img src="" class="popup-img">
    <span class="popup-close">&times;</span>
</div>
<script>
// MAKE ALL IMAGES WITH "zoom-trigger" CLICKABLE
document.querySelectorAll(".zoom-trigger").forEach(img => {
    img.addEventListener("click", function () {
        const popup = document.querySelector(".zoom-popup");
        const popupImg = document.querySelector(".popup-img");

        popupImg.src = this.src;
        popup.style.display = "flex";
    });
});

// CLOSE BUTTON
document.querySelector(".popup-close").addEventListener("click", function () {
    document.querySelector(".zoom-popup").style.display = "none";
});

// CLICK OUTSIDE IMAGE TO CLOSE
document.querySelector(".zoom-popup").addEventListener("click", function (e) {
    if (e.target === this) this.style.display = "none";
});
</script>

<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script>
  AOS.init({
    duration: 1200,
    easing: 'ease-in-out-cubic',
    once: false,
    mirror: true,
    offset: 120
  });
</script>


        
    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    </body>

</html>