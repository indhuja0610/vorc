<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Cental - Car Rent Website Template</title>
         <link rel="icon" type="images/x-icon" href="vimage/logo.jpeg">
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




        <link href="bb" />
        <!--SEO meta tags-->









<link rel="stylesheet" href='https://cdn.bajajauto.com/css/gogo-three-wheeler/parallax.css'>
          
    </head>

    <style>



@media only screen and (max-width: 767px) {
  .overlay-gradient {
    margin-bottom: 0;
   margin-top: 569px;
  }

 .auto-img {
  width: 479px !important;
  transition: opacity 0.3s ease, transform 0.3s ease;
  margin-top: -47px;
}
    /* Stack section vertically */
html,body{
    width:100%;
    overflow-x:hidden;
}

     .image-box,
  .zoom-box {
    height: 240px; /* same height for all images */
    border-radius: 16px;
  }



  .vehicle-section {
    display: flex;
    flex-direction: column;
    padding: 0;
  }

  /* IMAGE ON TOP */
  .vehicle-left {
    width: 100%;
    order: 1;
    display: block;
  }

  .zoom-box {
    width: 100%;
  }

  .zoom-box img {
    width: 100%;
    height: auto;
    display: block;
    object-fit: cover;
    margin-top: 618px;
  }

  /* CONTENT BELOW */
  .vehicle-right {
    width: 100%;
    order: 2;
    padding: 20px 16px;
    text-align: center;
    margin-top: 265px;
  }

  /* Heading */
  .vehicle-heading {
    font-size: 22px;
    line-height: 1.3;
  }

  /* Paragraph */
  .vehicle-text {
    font-size: 15px;
    line-height: 1.6;
    text-align: justify;
  }

  /* Optional: hide decorative line if any */
  .heading-line {
    display: none;
  }

div#para {
  margin-top: -17px !important;
  line-height: 33px;
}

}






        #parallax1 {
    background-image: url(vorc 02 (2).png) !important;
}

        .navbar-light .navbar-brand {
    color: rgba(0, 0, 0, .9);
    margin-left: -31px;
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

.container-fluid.nav-bar.sticky-top.px-0.px-lg-4.py-2.py-lg-0 {
    height: 92px;
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
                <small>Sales: +91 95005 11821</small>
            </div>
            <div class="h-100 d-inline-flex align-items-center py-3">
                <small class="fa fa-phone-alt text-primary me-2"></small>
                <small>Service: +91 95005 11434</small>
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
                              <a href="index.php" class="nav-item nav-link">Home</a>
    <a href="about.php" class="nav-item nav-link">About Us</a>
    <a href="dealers.php" class="nav-item nav-link">Dealers</a>
    <a href="products.php" class="nav-item nav-link">Our Vehicles</a>
     <a href="gallery.php" class="nav-item nav-link">Gallery</a>
                            <a href="contact.php" class="nav-item nav-link">Contact Us</a>
                        </div>
                        <a href="#" class="btn btn-primary rounded-pill py-2 px-4 btn-enquire"> Enquire Now</a>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Navbar & Hero End -->

        <!-- Header Start -->
       <div class="scene">
  <!-- CENTER AUTO IMAGE -->
 <!-- CENTER AUTO IMAGE -->
<img
  id="autoImage"
  src="vimage/pickup12.png"
  alt="Product"
  class="auto-img"
/>
<!-- COLOR BUTTONS -->
<div class="color-switch">
  <div class="color-pill">
    <span class="dot ivory" onclick="changeProduct('ivory')"></span>
    <span class="dot skyblue" onclick="changeProduct('skyblue')"></span>
    <span class="dot red" onclick="changeProduct('red')"></span>
  </div>
</div>

</div>

</div>


<style>
  .scene {
    width: 100%;
        height: 658px;

    background: url(vimage/NEW1.png) center / cover no-repeat;
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
}

/* AUTO IMAGE */
.auto-img {
width: 700px;
  transition: opacity 0.3s ease, transform 0.3s ease;
      margin-top: -47px;
}
/* COLOR SWITCH CONTAINER */
.color-switch {
  position: absolute;
  right: 40px;
  top: 50%;
  transform: translateY(-50%);
}

/* WHITE PILL ICON */
.color-pill {
    background: #ffffff;
    width: 44px;
    padding: 10px 0;
    border-radius: 30px;
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 12px;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
    height:116px;
}
/* COLOR DOTS */
.color-pill .dot {
  width: 29px;
  height: 25px;
  border-radius: 50%;
  cursor: pointer;
  transition: transform 0.2s ease;
}

.color-pill .dot:hover {
  transform: scale(1.2);
}
.color-pill .ivory {
  background: #cfc288; /* Ivory */
}

.color-pill .skyblue {
  background: #63c7ff; /* Sky Blue */
}

.color-pill .red {
  background: #e23135; /* Signal Red */
}


</style>
<script>
  function changeProduct(color) {
    const auto = document.getElementById("autoImage");

    const productImages = {
      ivory: "vimage/pickup12.png",
      skyblue: "vimage/pickup14.png",
      red: "vimage/pickup13.png"
    };

    auto.style.opacity = "0";

    setTimeout(() => {
      auto.src = productImages[color];
      auto.style.opacity = "1";
    }, 200);
  }
</script>

        <!-- Header End -->

        <!-- Contact Start -->




















<style>
   .wrap{max-width:var(--max-width);margin:60px auto;padding:30px}


/* Two-column layout */
.feature{
display:grid;
grid-template-columns: 1fr 1fr;
gap:40px;align-items:center;
background:#ffffff;
}


.image-card{
width:100%;
display:block;
border-radius:6px;
overflow:hidden;
box-shadow:0 10px 30px rgba(16,24,40,0.08);
}


.image-card img{display:block;width:100%;height:auto;object-fit:cover}


/* Right column */
.content{
padding:10px 0;
margin-top: 27px;

}


.eyebrow{
display:flex;gap:18px;align-items:center;margin-bottom:10px
}
.eyebrow .line{
width:48px;height:3px;background:var(--accent);border-radius:3px;opacity:0.95
}
.eyebrow h4{margin-left: -71px !important;margin:0;color:var(--heading);font-family:Playfair Display,serif;font-weight:700;font-size:34px;line-height:1.05}


.title{font-family:Playfair Display,serif;font-weight:700;font-size:22px;margin:14px 0 12px;color:#111}
.desc{color:var(--muted);line-height:1.8;font-size:15px;max-width:520px}


/* small utility */
.specs{
margin-top:18px;display:flex;flex-wrap:wrap;gap:12px
}
.spec{background:#f7fffe;padding:10px 14px;border-left:4px solid var(--accent);border-radius:6px;font-weight:600;color:#0b4b47}


/* responsive */
@media (max-width:880px){
.feature{grid-template-columns:1fr;gap:20px}
.eyebrow h4{font-size:28px}
.title{font-size:20px}
}


@media (max-width:420px){
.wrap{padding:18px;margin:30px auto}
.eyebrow h4{font-size:22px}
.title{font-size:18px}
}


/* ------------------------------
   BASE ANIMATION (reveal on load)
--------------------------------*/
.reveal-section {
    opacity: 0;
    transform: translateY(40px);
    animation: sectionReveal 1.3s ease-out forwards;
}

@keyframes sectionReveal {
    0% { opacity: 0; transform: translateY(40px); }
    100% { opacity: 1; transform: translateY(0); }
}

/* ------------------------------
   IMAGE FLOAT ANIMATION
--------------------------------*/
.image-float {
    animation: floatAnim 5s ease-in-out infinite;
    transition: transform 0.4s ease, box-shadow 0.4s ease;
}

@keyframes floatAnim {
    0% { transform: translateY(0px); }
    50% { transform: translateY(-10px); }
    100% { transform: translateY(0px); }
}

/* Hover zoom (premium effect) */
.image-float img {
    width: 100%;
    transition: transform 0.5s ease, filter 0.4s ease;
}

.image-float:hover img {
    transform: scale(1.05);
    filter: brightness(1.1);
}

/* ------------------------------
   FADE + SLIDE STAGGERED TEXT
--------------------------------*/
.fade-delay-1,
.fade-delay-2,
.fade-delay-3 {
    opacity: 0;
    transform: translateY(20px);
    animation: fadeUp 1s ease forwards;
}

.fade-delay-1 { animation-delay: 0.4s; }
.fade-delay-2 { animation-delay: 0.7s; }
.fade-delay-3 { animation-delay: 1s; }

@keyframes fadeUp {
    0% { opacity: 0; transform: translateY(20px); }
    100% { opacity: 1; transform: translateY(0); }
}

/* ------------------------------
   GLOW ANIMATED LINE
--------------------------------*/
.glow-line {
    width: 60px;
    height: 3px;
    background: linear-gradient(90deg, #00d2ff, #00ff85);
    border-radius: 5px;
    animation: glowPulse 2.5s infinite ease-in-out;
}

@keyframes glowPulse {
    0% { filter: brightness(0.8); transform: scaleX(1); }
    50% { filter: brightness(1.3); transform: scaleX(1.3); }
    100% { filter: brightness(0.8); transform: scaleX(1); }
}

/* ------------------------------
   TITLE + PARAGRAPH BEAUTIFICATION
--------------------------------*/
.feature .title {
    font-size: 32px;
    font-weight: 700;
    color: #0a0a0a;
    margin-bottom: 12px;
}

.feature .desc {
    line-height: 1.7;
    font-size: 16px;
    color: #444;
    text-align: justify;
}

/* ------------------------------
   LAYOUT FIXES & BEAUTY
--------------------------------*/
.feature {
    display: grid;
    grid-template-columns: 1fr 1.2fr;
    gap: 40px;
    align-items: center;
    padding: 40px 0;
}

.image-card {
    display: block;
    overflow: hidden;
    border-radius: 12px;
    box-shadow: 0px 10px 30px rgba(0,0,0,0.12);
}

/* Fade-in + Zoom for image */
.fade-in-zoom {
    opacity: 0;
    transform: scale(0.9);
    animation: zoomIn 1.2s ease-out forwards;
}

@keyframes zoomIn {
    0% {
        opacity: 0;
        transform: scale(0.9);
    }
    100% {
        opacity: 1;
        transform: scale(1);
    }
}

/* Slide-up + fade-in for content */
.slide-up {
    opacity: 0;
    transform: translateY(30px);
    animation: slideUp 1.2s ease-out forwards;
    animation-delay: 0.3s;
}

@keyframes slideUp {
    0% {
        opacity: 0;
        transform: translateY(30px);
    }
    100% {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Smooth reveal on scroll (optional but recommended) */
.feature {
    animation: fadeSection 1s ease forwards;
}

@keyframes fadeSection {
    from { opacity: 0; }
    to { opacity: 1; }
}


/* ------------------------------
   LAYOUT
------------------------------ */
.wrap {
    width: 100%;
    padding: 40px 0;
}

.feature {
    display: grid;
    grid-template-columns: 1fr 1.2fr;
    gap: 50px;
    align-items: center;
}

/* ------------------------------
   IMAGE FLOAT ANIMATION
------------------------------ */
.image-card img {
    width: 100%;
    border-radius: 14px;
    box-shadow: 0 15px 35px rgba(0,0,0,0.18);
    transition: transform 0.5s ease;
}

.image-float {
    animation: floatAnim 5s ease-in-out infinite;
}

@keyframes floatAnim {
    0% { transform: translateY(0px); }
    50% { transform: translateY(-12px); }
    100% { transform: translateY(0px); }
}

.image-card:hover img {
    transform: scale(1.05);
}

/* ------------------------------
   RIGHT SIDE SLIDE-IN ANIMATION
------------------------------ */
.slide-right {
    opacity: 0;
    transform: translateX(60px);
    animation: slideInRight 1.2s ease-out forwards;
}

@keyframes slideInRight {
    0% { opacity: 0; transform: translateX(60px); }
    100% { opacity: 1; transform: translateX(0); }
}

/* ------------------------------
   STAGGERED TEXT FADE-UP
------------------------------ */
.fade-delay-1,
.fade-delay-2,
.fade-delay-3 {
    opacity: 0;
    transform: translateY(25px);
    animation: fadeUp 1s ease forwards;
}

.fade-delay-1 { animation-delay: 0.3s; }
.fade-delay-2 { animation-delay: 0.6s; }
.fade-delay-3 { animation-delay: 0.9s; }

@keyframes fadeUp {
    0% { opacity: 0; transform: translateY(25px); }
    100% { opacity: 1; transform: translateY(0); }
}

/* ------------------------------
   GLOW LINE EFFECT
------------------------------ */
.glow-line {
    width: 60px;
    height: 4px;
    background: linear-gradient(90deg, #00d2ff, #00ff7f);
    border-radius: 5px;
    margin-bottom: 8px;
    animation: glowPulse 2.2s infinite ease-in-out;
}

@keyframes glowPulse {
    0% { filter: brightness(0.9); transform: scaleX(1); }
    50% { filter: brightness(1.3); transform: scaleX(1.3); }
    100% { filter: brightness(0.9); transform: scaleX(1); }
}

/* ------------------------------
   TEXT STYLES
------------------------------ */
.feature .title {
    font-size: 32px;
    font-weight: 700;
    color: #111;
    margin-bottom: 14px;
}

.feature .desc {
    color: #444;
    font-size: 16px;
    line-height: 1.7;
    text-align: justify;
}

.eyebrow h4 {
    margin: 0;
    font-size: 22px;
    font-weight: 700;
    color: #111;
}

/* ------------------------------
   RESPONSIVE
------------------------------ */
@media (max-width: 768px) {
    .feature {
        grid-template-columns: 1fr;
        text-align: center;
    }

    .slide-right {
        transform: translateY(40px);
        animation: slideUp 1.2s ease forwards;
    }

    @keyframes slideUp {
        0% { opacity: 0; transform: translateY(40px); }
        100% { opacity: 1; transform: translateY(0); }
    }
}
.zoom-img img {
  width: 100%;
  cursor: pointer;
  border-radius: 10px;
  transition: transform 0.3s ease;
}

.zoom-img img:hover {
  transform: scale(1.02);
}

/* Popup Background */
.img-popup {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0.85);
  display: flex;
  align-items: center;
  justify-content: center;
  opacity: 0;
  visibility: hidden;
  transition: all 0.3s ease;
  z-index: 9999;
}

button.btn.btn-primary {
    border-radius: 56px !important;
}

/* Show Popup */
.img-popup.open {
  opacity: 1;
  visibility: visible;
}

/* Popup Image */
.img-popup img {
  max-width: 80%;
  max-height: 80%;
  border-radius: 10px;
  transform: scale(0.5);
  transition: transform 0.3s ease;
}

.img-popup.open img {
  transform: scale(1);
}

/* Close Button */
.close-btn {
  position: absolute;
  top: 20px;
  right: 30px;
  width: 40px;
  height: 40px;
  cursor: pointer;
}

.close-btn .bar {
  width: 100%;
  height: 4px;
  background: #fff;
  position: absolute;
  top: 50%;
  left: 0;
}

.close-btn .bar:first-child {
  transform: rotate(45deg);
}

.close-btn .bar:last-child {
  transform: rotate(-45deg);
}
/* --- LAYOUT --- */
.vehicle-section {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 40px;
    padding: 40px 20px;
    height: 617px;
}

.vehicle-left img {
    
        width: 568px;
    border-radius: 10px;
    cursor: pointer;
    transition: transform .3s;
    height: 485px;
}

/* Hover zoom */
.vehicle-left img:hover {
    transform: scale(1.03);
}

/* ---- HEADING ---- */
.vehicle-heading {
   font-size: 39px;
    font-weight: 700;
    line-height: 1.3;
        color: #009cff;
    position: relative;
}

.heading-line {
    width: 60px;
    height: 4px;
    background: #009cff;
    display: inline-block;
    margin-right: 10px;
    vertical-align: middle;
}

.highlight {
    color: #009cff;
}

.intro-title {
    margin-top: 18px;
    font-size: 22px;
    font-weight: 700;
    color: #2b2b2b;
}

.vehicle-text {
  margin-top: 12px;
    max-width: 636px;
    font-size: 20px;
    line-height: 1.7;
    color: #444;
    text-align: justify;
}

/* ----- POPUP IMAGE ZOOM (CodePen Style) ----- */
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
    z-index: 999;
}

.zoom-popup img {
    width: 60%;
   max-width: 686px;
    border-radius: 10px;
    animation: popupZoom .3s ease;
        margin-top: 90px;
}

@keyframes popupZoom {
    from { transform: scale(.7); opacity: 0; }
    to { transform: scale(1); opacity: 1; }
}

.popup-close {
    position: absolute;
      top: 66px;
    right: 60px;
    color: white;
    font-size: 50px;
    font-weight: bold;
    cursor: pointer;
}
.highlight {
    color: #009cff;
    font-size: 26px;
}

    </style>
<div class="vehicle-section">
    
    <div class="vehicle-left wow fadeInLeft">
        <div class="zoom-box">
            <img src="vimage/pro.png" class="zoom-trigger" alt="Vehicle Image">
        </div>
    </div>

    <div class="vehicle-right wow fadeInRight">
        <h2 class="vehicle-heading">
            <span class="heading-line"></span>
           Powering Your Profits with Loader 600 PV<br> <span class="highlight">The Trailblazing Titan for Modern Entrepreneurs.</span>
        </h2>

     

        <p class="vehicle-text">
With the Loader 600 PV, every haul is engineered for dominance. Designed to stay steady under heavy loads and remain dependable through the toughest delivery schedules, it is the ultimate tool for high-utilization businesses. Built for unmatched structural strength and elite efficiency, it delivers consistent performance and maximum profitability, every single time.        </p>
    </div>
</div>

<style>
    /* User-Provided Styles */
    :root {
        --primary-color: #009cff; /* Teal similar to reference image */
        --text-dark: #333;
        --text-light: #777;
        --bg-light: #f9f9f9;
        --border-color: #eee;
    }


    .spec-container {
        max-width: 1100px;
        margin: 0 auto;
    }

    /* Header Section */
    .header-section {
        margin-bottom: 30px;
        margin-top: 37px;
    }

    .header-section h2 {
           color: var(--primary-color);
    font-size: 71px;
  
    position: relative;
    display: inline-block;
    margin-bottom: 46px;
        margin-top: 69px;
    }

    .header-section h2::before {
        content: '';
        display: inline-block;
        width: 30px;
        height: 2px;
        /* Note: Background color for the line is missing in user's CSS. Adding it here for visibility. */
        background-color: var(--primary-color); 
        vertical-align: middle;
        margin-right: 10px;
    }

    .header-section p {
        font-size: 18px;
        color: var(--text-dark);
        font-weight: 600;
        margin: 0;
    }

    /* Tab Navigation */
    .tabs {
        display: flex;
        border-bottom: 2px solid #eee;
        margin-bottom: 30px;
        overflow-x: auto;
    }

    .tab-btn {
        background: none;
        border: none;
        padding: 15px 25px;
        font-size: 24px;
        font-weight: 700;
        color: #ccc; /* Inactive color */
        cursor: pointer;
        transition: all 0.3s ease;
        white-space: nowrap;
    }

    .tab-btn:hover {
        color: var(--primary-color);
    }

    .tab-btn.active {
        color: var(--primary-color);
        border-bottom: 3px solid var(--primary-color);
    }

    /* Content Area Grid */
    .content-grid {
        display: grid;
        grid-template-columns: 1.5fr 1fr; /* Table takes more space, image takes less */
        gap: 40px;
        align-items: start;
    }

    /* Table Styling */
    .spec-table {
        width: 100%;
        border-collapse: collapse;
    }

    .spec-table tr {
        border-bottom: 1px solid var(--border-color);
    }

    .spec-table tr:first-child {
        border-top: 1px solid var(--border-color); /* Top border for first item */
    }

    .spec-table td {
        padding: 20px 10px;
        font-size: 16px;
    }

    .spec-table td.label {
        font-weight: 500;
        color: var(--text-dark);
        width: 40%;
    }

    .spec-table td.value {
        font-weight: 600;
        color: var(--text-dark);
        text-align: right;
    }

    /* Image Section */
    .product-image {
        text-align: center;
        padding: 20px;
    }

    .product-image img {
        max-width: 100%;
        height: auto;
        background-color: #f0f0f0; 
        border-radius: 10px;
    }

    .product-name {
        font-size: 20px;
        font-weight: 700;
        margin-bottom: 10px;
        display: block;
        text-align: right;
    }

    /* Tab Content Handling */
    .tab-content {
        display: none; /* Hidden by default */
        animation: fadeIn 0.5s;
    }

    .tab-content.active {
        display: grid; /* Matches content-grid */
    }

    @keyframes fadeIn {
        from { opacity: 0; }
        to { opacity: 1; }
    }

    /* Responsive Design for Mobile */
    @media (max-width: 768px) {
        .content-grid {
            grid-template-columns: 1fr;
        }
        
        .tab-btn {
            font-size: 18px;
            padding: 10px 15px;
        }
    }

    @supports (-webkit-touch-callout: none) {
  /* CSS specific to iOS devices */
  .gogo-page .parallax {
    background-size: cover;
    height: 380px;
}
}
body.bajaj-home .container-fluid.section {
    padding-top: 0px !important;
}

div#para {
    margin-top: -78px;
    line-height: 33px;
}
.marquee-transition {
    transition-duration: 1ms;
    transform: translate3d(0, 0, 0);
    color: #009cff;
}

#parallax2 {
    background-image: url(vorc 02 (1).png);
}
.number-container {
    position: absolute;
    top: 0;
    left: 647px !important; 
    transform: translate(-50%, -50%);
    z-index: 6;
    font-size: 7.5rem;
    font-weight: 600;
    color: #171717;
    opacity: 70%;
}
.marquee-slide {
    -webkit-transition-timing-function: linear !important;
    transition-timing-function: linear !important;
    position: relative;
    font-size: 5.5rem;
    line-height: 180px;
    font-weight: 600;
    letter-spacing: 1%;
}
</style>





 <div class="overlay-gradient">
            <div class="swiper-wrapper pb-30px marquee-slide" id="swiper-wrapper" aria-live="off">
                <marquee behavior="scroll" scrollamount="20" direction="right" class="marquee-transition">Product Overview (Pivoted for commercial utility and maximum uptime)</marquee>
            </div>
        </div>
        <div class="container-fluid section">
            <div class="row-section">
                <div class="col-md-6 parallax" id="parallax1" style="background-image: url('vimage/img12 (1).png') !important;"></div>
                <div class="col-md-6 content-container">
                    <div class="number-container">01</div>
                        <div class="row">
    <div class="col-md-12 d-flex align-items-center ">
        <div class="heading-text d-flex align-items-center">
            <!-- <div class="dashed-line"></div> -->
            <!-- <p class="heading-line">Go the Distance</p> -->
        </div>
    </div>
</div>
<div class="row">
  <div class="col-md-12 d-flex align-items-center">
   
  </div>
</div>
<div class="row">
  <div class="col-md-12" id="para">
    <p class="heading" style="color:  #009cff;"> Precision Drivetrain</p>
    <p class="parallax-para">
      <p class="prd-overview-desc">
10kW Peak Power | High-Grade CV Shaft  Equipped with the most advanced, maintenance-free transmission technology. The heavy-duty CV drive shaft ensures unmatched efficiency and eliminates the common failures associated with traditional chains or belts.   </p>
  </div>
</div>

                    </div>
            </div>
        </div>
        <div class="container-fluid section">
            <div class="row-section">
                <div class="col-md-6 parallax" id="parallax2" style="background-image: url('vimage/tyf.png') !important;"></div>
                <div class="col-md-6 content-container">
                    <div class="number-container">02</div>
                        <div class="row">
                            <div class="col-md-12 d-flex align-items-center ">

                                <div class="heading-text d-flex align-items-center">
                                 
                                </div>
                            </div>
                        </div>
                                            <div class="row">
  <div class="col-md-12" id="para">
    <p class="heading" style="color: #009cff;">Rugged Architecture </p>
    <p class="parallax-para">
      <p class="prd-overview-desc">
       
Durable Monocoque Chassis Utilizing advanced manufacturing to provide a unibody safety cage with unmatched stability and durability. Designed as a "Trailblazing Titan" for entrepreneurs, this chassis is built to handle heavy loads across any terrain  </div>
</div>
                    </div>
            </div>
        </div>
        <div class="container-fluid section">
            <div class="row-section">
                <div class="col-md-6 parallax" id="parallax3" style="background-image: url('vimage/cy1.png') !important;"></div>
                <div class="col-md-6 content-container">
                    <div class="number-container">03</div>
                        <div class="row">
                            <div class="col-md-12 d-flex align-items-center ">

                                <div class="heading-text d-flex align-items-center">
                                 
                                </div>
                            </div>
                        </div>
                                           <div class="row">
  <div class="col-md-12" id="para">
    <p class="heading" style="color: #009cff;">Industrial Efficiency Operating Cost</p>
    <p class="parallax-para">
      <p class="prd-overview-desc">
Under ₹0.60/km  Maximize your daily earnings with the lowest running costs in the industry. Paired with a 3-Year Free Maintenance Program, the Loader 600 PV ensures your business stays profitable with minimal downtime.    </p>
  </div>
</div>
                    </div>
            </div>
        </div>



<h2 id="he">Focus on Innovation</h2>
<div class="feature-container">
    <div class="mosaic-grid">
        
        <div class="mosaic-card">
            <img src="vimage/jj1.png" alt="Metro XL On Road" class="zoom-trigger">
            </div>

        <div class="mosaic-card">
            <img src="vimage/jj2.png" alt="Spacious Seat" class="zoom-trigger">
            <div class="card-content">
                <!-- <h3 class="card-title">Biggest Passenger Cabin</h3>
                <p class="card-desc">
                    A spacious cabin offers enhanced comfort for a more relaxed journey and higher profitability.
                </p> -->
            </div>
        </div>

        <div class="mosaic-card">
            <img src="vimage/jj3.png" alt="Heavy Duty Tyres" class="zoom-trigger">
            <div class="card-content">
                <!-- <h3 class="card-title">Heavy Duty 12-inch Tyres</h3>
                <p class="card-desc">
                    130/80 R12 front tyres ensure superior grip, easy repair, and a better driving experience.
                </p> -->
            </div>
        </div>

        <div class="mosaic-card">
            <img src="vimage/jj4.png" alt="Front Dual Suspension" class="zoom-trigger">
            <div class="card-content">
                <!-- <h3 class="card-title">Front Dual Suspension</h3>
                <p class="card-desc">
                    Advanced fork with anti-dive link ensures smooth rides every time.
                </p> -->
            </div>
        </div>
          <div class="mosaic-card">
            <img src="vimage/jj5.png" alt="Front Dual Suspension" class="zoom-trigger">
            <div class="card-content">
                <!-- <h3 class="card-title">Front Dual Suspension</h3>
                <p class="card-desc">
                    Advanced fork with anti-dive link ensures smooth rides every time.
                </p> -->
            </div>
        </div>
         <div class="mosaic-card">
            <img src="vimage/jj6.png" alt="Front Dual Suspension" class="zoom-trigger">
            <div class="card-content">
                <!-- <h3 class="card-title">Front Dual Suspension</h3>
                <p class="card-desc">
                    Advanced fork with anti-dive link ensures smooth rides every time.
                </p> -->
            </div>
        </div>

    </div>
</div>

<div class="spec-container">
    
    <div class="header-section">
        <h2>LOADER 600 PV</h2>
        <p>The "Best in Class" Benchmarks.</p>
    </div>
<div class="tabs">
    <button class="tab-btn active" onclick="openTab(event, 'Performance')">Performance</button>
    <button class="tab-btn" onclick="openTab(event, 'Battery')">Battery</button>
    <button class="tab-btn" onclick="openTab(event, 'Safety')">Safety</button>
    <button class="tab-btn" onclick="openTab(event, 'Dimensions')">Dimensions</button>
    <button class="tab-btn" onclick="openTab(event, 'DriveTrain')">Power Train</button>
</div>

<!-- PERFORMANCE -->
<div id="Performance" class="tab-content active content-grid">
    <div class="table-container">
        <table class="spec-table">
            <tr>
                <td class="label">Top Speed</td>
                <td class="value">50 km/hr</td>
            </tr>
            <tr>
                <td class="label">Drive Modes</td>
                <td class="value">BFNR(Boost, Forward, Neutral, Reverse)</td>
            </tr>
            <tr>
                <td class="label">Gradeability</td>
                <td class="value">24%</td>
            </tr>
            <tr>
                <td class="label">True Range</td>
                <td class="value">160 ± 5 km</td>
            </tr>
              <tr>
                <td class="label">Payload</td>
                <td class="value">650 KG</td>
            </tr>
              <tr>
                <td class="label">Vehicle Category</td>
                <td class="value">L5N</td>
            </tr>
              <tr>
                <td class="label">Cabin Roof Type</td>
                <td class="value">Hard Panel</td>
            </tr>
        </table>
    </div>

    <div class="product-image">
        <span class="product-name">VORC Loader 600</span>
        <img src="vimage/Untitled design (48).png" alt="VORC Loader 600" class="zoom-trigger">
    </div>
</div>

<!-- BATTERY -->
<div id="Battery" class="tab-content content-grid">
    <div class="table-container">
        <table class="spec-table">
            <tr>
                <td class="label">Battery Type</td>
                <td class="value">Lithium Ferro Phosphate (LFP)-51.2V</td>
            </tr>
            <tr>
                <td class="label">Battery Capacity</td>
                <td class="value">11.8 kWh</td>
            </tr>
            <tr>
                <td class="label">Charging Time</td>
                <td class="value">3.5 – 4 Hours</td>
            </tr>
        </table>
    </div>

    <div class="product-image">
        <span class="product-name">VORC Loader 600</span>
        <img src="vimage/vorc battery.png" alt="Battery" class="zoom-trigger">
    </div>
</div>

<!-- SAFETY -->
<div id="Safety" class="tab-content content-grid">
    <div class="table-container">
        <table class="spec-table">
            <tr>
                <td class="label">Ingress Protection</td>
                <td class="value">IPV4 (Battery & Motor)</td>
            </tr>
            <tr>
                <td class="label">Chassis</td>
                <td class="value">Heavy-Duty Reinforced Chassis</td>
            </tr>
            <tr>
                <td class="label">Braking System</td>
                <td class="value">Hydraulic Drum Brakes (Front & Rear)</td>
            </tr>
            <tr>
                <td class="label">Vehicle Security</td>
                <td class="value">Key Based Immobilization</td>
            </tr>
            <tr>
                <td class="label">Tyre</td>
                <td class="value">LT 145 R12-Tubeless</td>
            </tr>
        </table>
    </div>

    <div class="product-image">
        <span class="product-name">VORC Loader 600</span>
        <img src="vimage/Untitled design (49).png" alt="Safety Features" class="zoom-trigger">
    </div>
</div>

<!-- DIMENSIONS -->
<div id="Dimensions" class="tab-content content-grid">
    <div class="table-container">
        <table class="spec-table">
            <tr>
                <td class="label">Overall Dimensions L x W x H(mm)</td>
                <td class="value">3582 x 1490 x 1695 </td>
            </tr>
            <tr>
                <td class="label">Wheelbase</td>
                <td class="value">2435 mm</td>
            </tr>
            <tr>
                <td class="label">Rear Track</td>
                <td class="value">1340 mm</td>
            </tr>
            <tr>
                <td class="label">Turning Radius</td>
                <td class="value">3.05 mm</td>
            </tr>
            <tr>
                <td class="label">Ground Clearance</td>
                <td class="value">175 mm</td>
            </tr>
             <tr>
                <td class="label">Tray Size L x W x H (Inside Dimensions )-mm</td>
                <td class="value">1982 x 1527 x 300</td>
            </tr>
            <!-- <tr>
                <td class="label">Tyre</td>
                <td class="value">6.5 Feet</td>
            </tr> -->
        </table>
    </div>

    <div class="product-image">
        <span class="product-name">VORC Loader 600</span>
        <img src="vimage/Untitled design (47).png" alt="Dimensions" class="zoom-trigger">
    </div>
</div>

<!-- DRIVE TRAIN -->
<div id="DriveTrain" class="tab-content content-grid">
    <div class="table-container">
        <table class="spec-table">
            <tr>
                <td class="label">Motor Type</td>
                <td class="value"> IPV4</td>
            </tr>
            <tr>
                <td class="label">Peak Power</td>
                <td class="value">10 kW</td>
            </tr>
            <tr>
                <td class="label">Peak  Torque</td>
                <td class="value">55 Nm</td>
            </tr>
            <!-- <tr>
                <td class="label">Peak Wheel Torque</td>
                <td class="value">812 Nm</td>
            </tr> -->
            <tr>
                <td class="label">Transmission Type</td>
                <td class="value">Direct Drive</td>
            </tr>
        </table>
    </div>

    <div class="product-image">
        <span class="product-name">VORC Loader 600</span>
        <img src="vimage/WhatsApp Image 2026-01-07 at 1.48.44 PM.jpeg" alt="Drive Train" class="zoom-trigger">
    </div>
</div>

<script>
    function openTab(evt, tabName) {
        // 1. Hide all tab content within the current spec-container
        var container = evt.currentTarget.closest('.spec-container');
        var tabcontent = container.getElementsByClassName("tab-content");
        for (var i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
            tabcontent[i].classList.remove("active");
        }

        // 2. Remove "active" class from all tab buttons within the current spec-container
        var tablinks = container.getElementsByClassName("tab-btn");
        for (var i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }

        // 3. Show the current tab, and add an "active" class to the button that opened the tab
        document.getElementById(tabName).style.display = "grid"; 
        document.getElementById(tabName).classList.add("active");
        evt.currentTarget.className += " active";
    }

    // Initialize the first tab as active on load if not already set
    document.addEventListener("DOMContentLoaded", function() {
        var firstTab = document.querySelector(".spec-container .tab-content");
        if (firstTab && !firstTab.classList.contains('active')) {
            firstTab.style.display = "grid";
            firstTab.classList.add("active");
        }
    });
</script>


<h2 id="he" style="    font-size: 60px;">Ready to Empower Your Business?</h2>
<h4 style="text-align:center;margin-top:-47px;"><b>Experience the Efficiency of India's most advanced electric Cargo Loader</b></h4>

<style>
      
      #he {
         font-size: 75px;
    margin-top: 155px;
    font-weight: 600;
    text-align: center;
    color: #009cff;
    margin-bottom: 83px;
    
}
       
  .product-page-container {
            display: flex;
            width: 100%;
            max-width: 1300px;
            min-height: 85vh;
            margin: 30px auto;
            background: #fff;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
            border-radius: 8px;
        }

        /* --- LEFT/CENTER: IMAGE VIEWER & THUMBNAILS --- */
        .image-gallery-area {
            flex: 2;
            display: flex; 
            background-color: var(--bg-light);
            border-radius: 8px 0 0 8px;
            padding: 20px;
        }

        /* Vertical Thumbnail Strip (The "Mapping" Part) */
        .thumbnail-strip {
            width: 100px; 
            margin-right: 20px;
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .thumbnail {
            width: 100%;
            height: 70px;
            border: 2px solid var(--border-color);
            border-radius: 4px;
            overflow: hidden;
            cursor: pointer;
            transition: all 0.2s;
        }

        .thumbnail img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* Active Thumbnail (Primary Color Accent) */
        .thumbnail.active {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 1px var(--primary-color);
        }

        /* Main Image Display */
        .main-image-display {
            flex-grow: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
            background-color: #fff;
            border-radius: 4px;
        }

        .main-image-display img {
            max-width: 100%;
            max-height: 100%;
            height: auto;
            transition: opacity 0.3s ease;
        }


        /* --- RIGHT SIDE: DETAILS PANEL --- */
        .details-panel {
            flex: 1;
            padding: 50px 40px;
            display: flex;
            flex-direction: column;
            justify-content: flex-start; 
        }

        .brand-model {
            font-size: 18px;
            font-weight: 600;
            color: #888;
            margin-bottom: 5px;
        }
        
        h1 {
            font-size: 42px;
            margin: 0 0 30px 0;
            color: var(--text-dark);
            font-weight: 900;
        }

        /* Pricing Section */
        .pricing-section {
            margin-bottom: 40px;
            padding-top: 20px;
            border-top: 1px solid #eee;
        }

        .price-value {
            font-size: 48px;
            font-weight: 700;
            color: var(--text-dark);
            line-height: 1.2;
        }
        
        .ex-showroom {
            font-size: 14px;
            color: #666;
            margin-top: 5px;
        }


        /* Buttons */
        .btn-group {
            display: flex;
            flex-direction: column;
            gap: 15px;
            margin-top: 20px;
        }

        .btn {
            padding: 15px 25px;
            font-size: 16px;
            font-weight: 600;
            text-transform: uppercase;
            cursor: pointer;
            transition: all 0.3s;
            border-radius: 6px;
            text-align: center;
        }

        /* Primary Button (Download Brochure) - Uses #009cff */
        .btn-primary {
            background-color: #009cff;
            color: #fff;
            border: none;
            box-shadow: 0 4px 15px rgba(0, 156, 255, 0.4);
        }

        .btn-primary:hover {
            background-color: #007bbd; /* Darker blue for hover */
        }

        /* Secondary Button (Enquire Now) - Outline in #009cff */
        .btn-secondary {
            background-color: transparent;
            color: var(--primary-color);
            border: 2px solid var(--primary-color);
        }

        .btn-secondary:hover {
            background-color: var(--primary-color);
            color: #fff;
        }


        /* Responsive Adjustments */
        @media (max-width: 900px) {
            .product-page-container {
                flex-direction: column;
                min-height: auto;
                margin: 0;
            }
            .image-gallery-area {
                flex-direction: column;
                padding: 10px;
                height: 60vh;
                border-radius: 0;
            }
            .thumbnail-strip {
                flex-direction: row; 
                width: 100%;
                height: 80px;
                margin-bottom: 15px;
                margin-right: 0;
                overflow-x: auto;
            }
            .thumbnail {
                min-width: 70px;
                height: 60px;
            }
            .details-panel {
                padding: 30px;
            }

            
        }
    </style>





<div class="product-page-container">
    
    <div class="image-gallery-area">

        <div class="thumbnail-strip" id="thumbnailStrip">
            </div>

        <div class="main-image-display">
          <div class="product-360-wrapper">
    <div class="product-360-view" >
       <img id="productFrame" src="vimage/p123.png" >

    </div>

    <div class="dot-navigation">
        <span class="dot active" onclick="changeFrame(0)"></span>
        <span class="dot" onclick="changeFrame(1)"></span>
        <span class="dot" onclick="changeFrame(2)"></span>
        <span class="dot" onclick="changeFrame(3)"></span>
        
       
    </div>
</div>
        </div>
    </div>

    <div class="details-panel">
        <span class="brand-model">VORC MOTORS</span>   
        <h1 style="    font-size: 37px;">LOADER 600 PV</h1>

        
<!--         
        <div class="pricing-section">
            <div class="price-value"></div> 
            <div class="ex-showroom"></div>
        </div> -->

        <div class="btn-group">
                    <h5 style="text-align:center">Get the full Technical Datasheet for the Loader 600 PV</h5>
            <a href="VORC_Loader 600 Brochure.pdf"
   target="_blank" 
  ><button class="btn btn-primary" style="    width: 236px !important;
        margin-left: 40px;">Download Brochure</button></a>
    <h5 style="text-align:center">Get a custom quote for your fleet requirements.</h5>
            <button class="btn btn-primary  btn-enquire" style="    width: 236px !important;
       margin-left: 40px;">Enquire Now</button>
        </div>
    </div>

</div>


<style>
.product-360-wrapper{
    text-align:center;
    width:100%;
    max-width:850px;
    margin:0 auto;
}

.product-360-view{
    width: 100%;
    height: 420px;
    display: flex;
    justify-content: center;
    align-items: center;
    overflow: hidden;
}

.product-360-view img{
    max-width: 100%;
    max-height: 100%;
    object-fit: contain;
    display: block;
    user-select: none;
    pointer-events: auto;   /* ✅ ALLOW CLICK */
    cursor: zoom-in;        /* Optional nice effect */
}


.dot-navigation{
    margin-top:15px;
    display:flex;
    justify-content:center;
    gap:12px;
}

.dot{
    width:12px;
    height:12px;
    background:#ccc;
    border-radius:50%;
    cursor:pointer;
    transition:0.3s;
}

.dot.active{
    background:#0077be;
    transform:scale(1.2);
}

.dot-navigation{
    margin-top:15px;
    display:flex;
    justify-content:center;
    gap:12px;
}

.dot{
    width:12px;
    height:12px;
    background:#ccc;
    border-radius:50%;
    cursor:pointer;
    transition:0.3s;
}

.dot.active{
    background:#0077be; /* Bajaj Blue */
    transform:scale(1.2);
}
</style>

<script>
let frames = [
    "vimage/p123.png",
    "vimage/frl.png",
    "vimage/frb.png",
    "vimage/leftside.png",
   
];

let currentFrame = 0;
let img = document.getElementById("productFrame");
let dots = document.querySelectorAll(".dot");

// Preload images
frames.forEach(src => {
    let preloadImg = new Image();
    preloadImg.src = src;
});

// Change frame manually (dot click)
function changeFrame(i){
    currentFrame = i;
    img.src = frames[i];

    dots.forEach(d => d.classList.remove("active"));
    dots[i].classList.add("active");
}

// Drag rotation
let startX = 0;
let isDragging = false;

document.querySelector(".product-360-view").addEventListener("mousedown", e => {
    isDragging = true;
    startX = e.clientX;
});

document.addEventListener("mouseup", () => {
    isDragging = false;
});

document.addEventListener("mousemove", e => {
    if(!isDragging) return;

    let diff = e.clientX - startX;

    if(Math.abs(diff) > 15){
        if(diff > 0){
            currentFrame = (currentFrame + 1) % frames.length;
        } else {
            currentFrame = (currentFrame - 1 + frames.length) % frames.length;
        }
        changeFrame(currentFrame);
        startX = e.clientX;
    }
});
</script>
                <!-- About End -->




                <!-- IMAGE GALLERY SECTION -->

                <!-- IMAGE GALLERY HEADING SECTION -->
<div class="container text-center mt-4 mb-4">
    <h2 class="gallery-heading">Discover the Design</h2>
</div>

<style>
.gallery-heading {
  font-size: 44px;
    font-weight: 700;
    color: #009cff;
    text-transform: capitalize;
        margin-top: 71px;
    margin-bottom: 51px;

}

.gallery-subtext {
    font-size: 16px;
    color: #555;
    margin-top: 5px;
}
</style>

<section class="riki-gallery-section">
  <div class="gallery-img">
    <img src="vimage/bluegallery.png" alt="Gallery Image">
  </div>
</section>


<style>
/* ----- IMAGE GALLERY STYLING ----- */
.riki-gallery-section {
    padding: 20px;
    margin-left: 0; /* remove negative margin for mobile safety */
}

.gallery-img {
  width: 100%;
  overflow: hidden;
  border-radius: 10px;
}

.gallery-img img {
  width: 100%;
  height: auto;        /* 👈 KEY for mobile shrink */
  max-width: 100%;
  display: block;
}


  .vehicle-left img {
  width: 568px;
  border-radius: 10px;
  cursor: pointer;
  transition: transform .3s;
  height: 382px;
  width: 513px;
  margin-top: 187px !important;
}


/* Optional height control for desktop */
@media (min-width: 769px) {
  .gallery-img img {
    max-height: 520px;
    object-fit: cover;
  }


  .vehicle-left img {
  width: 568px;
  border-radius: 10px;
  cursor: pointer;
  transition: transform .3s;
  height: 382px;
  width: 513px;
  margin-top: 607px;
}

.vehicle-section {
  display: flex;
  align-items: center;
  justify-content: center;
  margin-top: 280px !important;
 
}
}

</style>



   <style>
    .feature-container {
        max-width: 1200px;
        margin: 0 auto;
        margin-top: 41px;
    }

    /* Grid Layout matching the reference image */
    .mosaic-grid {
        display: grid;
        grid-template-columns: 1fr 1fr; /* Two columns */
        grid-template-rows: 400px 400px; /* Two rows of fixed height */
        gap: 15px;
    }

    /* Image Card Styling */
    .mosaic-card {
        position: relative;
        overflow: hidden;
        border-radius: 8px;
        cursor: pointer;
        background-color: #ddd; /* Placeholder color */
    }

    .mosaic-card img {
        width: 100%;
        height: 100%;
      
        transition: transform 0.5s ease;
    }

    .mosaic-card:hover img {
        transform: scale(1.05); /* Zoom effect on hover */
    }

    /* Text Overlay Styling */
    .card-content {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        padding: 30px;
        box-sizing: border-box;
        background: var(--overlay-gradient);
        color: white;
        text-shadow: 1px 1px 3px rgba(0,0,0,0.5);
    }

    .card-title {
        font-size: 28px;
        font-weight: 700;
        margin: 0 0 10px 0;
        display: block;
    }

    .card-desc {
        font-size: 16px;
        line-height: 1.4;
        margin: 0;
        opacity: 0.9;
        max-width: 90%;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .mosaic-grid {
            grid-template-columns: 1fr; /* Stack vertically on mobile */
            grid-template-rows: auto;
        }
        .mosaic-card {
            height: 300px; /* Smaller height on mobile */
        }
    }
</style>


<style>
    /* Local styles for the FAQ component */
    .faq-component-styles {
        --primary-blue: #009cff;
        --text-dark: #333;
        --text-medium: #555;
        --border-color: #e5e5e5;
        font-family: 'Segoe UI', Roboto, sans-serif;
    }

    .faq-container {
        width: 100%;
        max-width: 1100px; /* Increased max width for better two-column display */
        margin: 0 auto;
        background-color: #fff;
        padding: 40px;
        box-sizing: border-box;
        
        /* Key Flexbox changes for two-column layout */
        display: flex;
        gap: 60px; /* Spacing between left and right columns */
        align-items: flex-start; /* Align content to the top */
    }

    /* --- LEFT COLUMN: Header Group --- */
    .faq-heading-group {
        flex-basis: 35%; /* Left column width */
        flex-shrink: 0;
        margin-bottom: 0; /* Clear previous vertical margin */
        padding-top: 10px; /* Aligns visually with the first question */
    }
    
    .faq-heading {
        color: var(--primary-blue);
           font-size: 35px;
        font-weight: 700;
        margin: 0;
        display: inline-block;
        position: relative;
        padding-bottom: 15px;
    }

    .faq-heading::before {
        content: '';
        position: absolute;
        left: 0;
        bottom: 0;
        width: 80px;
        height: 3px;
        background-color: var(--primary-blue);
        border-radius: 2px;
    }

    .faq-subheading {
        color: var(--text-medium);
        font-size: 18px;
        margin: 15px 0 0 0;
    }

    /* --- RIGHT COLUMN: Q&A Wrapper --- */
    .faq-qna-wrapper {
        flex-basis: 65%; /* Right column width */
        flex-grow: 1;
    }

    .faq-list {
        list-style: none;
        padding: 0;
    }

    .faq-item {
        border-bottom: 1px solid var(--border-color);
        margin: 0;
    }

    .faq-question {
        display: block;
        padding: 25px 0;
            font-size: 22px;
        font-weight: 600;
        color: var(--text-dark);
        cursor: pointer;
        position: relative;
        user-select: none;
        transition: color 0.2s;
        list-style: none;
    }
    
    /* Custom arrow styling */
    .faq-question::marker {
        content: "";
    }
    .faq-question::after {
        content: '\2304'; /* Down arrow */
        position: absolute;
        right: 0;
        font-size: 24px;
        color: var(--text-medium);
        transition: transform 0.3s;
    }

    .faq-item[open] .faq-question::after {
        content: '\2303'; /* Up arrow */
        color: var(--primary-blue);
        transform: rotate(180deg);
    }

    .faq-item[open] .faq-question {
        color: var(--primary-blue);
    }

    .faq-answer {
        padding: 0 0 30px 0;
        font-size: 16px;
        line-height: 1.7;
        color: var(--text-medium);
        max-width: 95%;
    }

    /* Responsive adjustment for smaller screens */
    @media (max-width: 900px) {
        .faq-container {
            flex-direction: column; /* Stacks the columns vertically */
            gap: 20px;
            padding: 20px;
        }
        .faq-heading-group, .faq-qna-wrapper {
            flex-basis: auto; /* Columns take full width */
        }
    }
</style>

<div class="faq-container faq-component-styles">
    <div class="faq-heading-group">
    <h2 class="faq-heading">Frequently Asked Questions</h2>
    <p class="faq-subheading">Have questions about our Electric Loader PV?</p>
</div>

<div class="faq-qna-wrapper">
    <div class="faq-list">

        <details class="faq-item">
            <summary class="faq-question">
                What is the maximum payload capacity of the Loader 600 PV?
            </summary>
            <div class="faq-answer">
                The Loader 600 PV is engineered for heavy-duty commercial use with a segment-leading
payload capacity of 650 kg. Its reinforced unibody monocoque chassis is specifically
designed to handle these heavy loads across diverse terrains with maximum stability.
            </div>
        </details>

        <details class="faq-item">
            <summary class="faq-question">
               What is the real-world driving range on a single charge?
            </summary>
            <div class="faq-answer">
             While the ARAI-certified range is higher, the Loader 600 PV delivers a Highest True Range
of 160 ± 5 km in real-world conditions. This ensures a full day of operations without the need
for mid-day charging, even when carrying significant cargo.
            </div>
        </details>

        <details class="faq-item">
            <summary class="faq-question">
               How long does it take to fully charge the battery?
            </summary>
            <div class="faq-answer">
                The vehicle is equipped with a high-capacity 11.8 kWh LFP battery. Using a standard
charger, it takes approximately 3.5 to 4 hours to achieve a full charge (160+ km range),
allowing for quick turnaround times between shifts.
            </div>
        </details>

        <details class="faq-item">
            <summary class="faq-question">
                What makes the Loader 600 PV more profitable than diesel or CNG loaders?
            </summary>
            <div class="faq-answer">
                The primary advantage is the ultra-low operating cost of under ₹0.60 per km. Additionally,
VORC Motors offers a 3-Year Free Maintenance Program*, significantly reducing the total
cost of ownership and maximizing your daily profit margins.
            </div>
        </details>

        <details class="faq-item">
            <summary class="faq-question">
              How does the &quot;CV Shaft Drive&quot; benefit my business?
            </summary>
            <div class="faq-answer">
                Unlike traditional loaders that use high-maintenance chains or belts, the Loader 600 PV
features a Heavy-Duty CV Drive Shaft. This automotive-grade technology is maintenance-
free, eliminates common roadside breakdowns, and ensures smoother power delivery to the
wheels.
            </div>
        </details>

        
        <details class="faq-item">
            <summary class="faq-question">
              Is the vehicle safe to operate in rain or dusty conditions?
            </summary>
            <div class="faq-answer">
         Yes. The critical components, including the 10kW Peak Power motor and the battery, are
IP67 rated. This means they are completely protected against dust and water ingress, ensuring
reliable performance during monsoons or in industrial environments.
            </div>
        </details>

        
        <details class="faq-item">
            <summary class="faq-question">
           Can I track and secure my vehicle remotely?
            </summary>
            <div class="faq-answer">
        Absolutely. Every Loader 600 PV comes integrated with VORC Connect. Through the
mobile app, you can monitor live battery SOC, track vehicle location, and use the Remote
Immobilizer to disable the powertrain instantly in case of unauthorized use or theft.
            </div>
        </details>

        <!-- <details class="faq-item">
            <summary class="faq-question">
                Are telematics and remote monitoring available?
            </summary>
            <div class="faq-answer">
                Yes, real-time tracking, performance analytics, and remote immobilization are supported.
            </div>
        </details> -->

    </div>
</div>

    </div>
</div>
<!---->
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


  </style>


 
        <!-- Floating Action Bar -->
<div class="floating-bar">
   <a href="#" class="floating-btn btn-enquire">
  <i class="fas fa-phone-alt"></i>
  <span>Enquire Now</span>
</a>

<a href="#" class="floating-btn btn-testdrive">
  <img src="vimage/king18.png" width="40px">
  <span style="margin-left:10px;">Test Drive</span>
</a>


  <a href="https://wa.me/917845365222"
   target="_blank" target="_blank" class="floating-btn whatsapp">
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
    <form class="form-enquire">
      <label>Name *</label>
      <input type="text" placeholder="Enter your name" required>

      <label>Mobile Number *</label>
      <input type="tel" placeholder="Enter your mobile number" required>

      <label>Model *</label>
      <select required>
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

<style>

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


<div class="form-group">
  <div class="disclaimer-box">

    <p class="disclaimer-text">
      <a href="disclaimer.php" target="_blank"><b>Stay Connected</b></a>: By checking this box, you agree to receive updates and
      promotional messages from us through digital channels (WhatsApp/SMS/Email).
      We value your privacy and only send
      information relevant to your VORC vehicle.
    </p>

    <div class="checkbox-wrapper">
      <input type="checkbox" id="accept" required>
      <label for="accept">
        I accept the <strong><a href="terms.php" target="_blank">Terms & Conditions</a></strong> and
        <strong><a href="privacy.php" target="_blank">Privacy Policy</a></strong>.
      </label>
    </div>

  </div>
</div>
      <button type="submit">Submit</button>
    </form>

    <!-- Test Drive Form -->
    <form class="form-testdrive">
      <label>Full Name *</label>
      <input type="text" required>

      <label>Email</label>
      <input type="email">

      <label>Phone Number *</label>
      <input type="tel" required>

     
     <label>Location *</label>
<select class="js-location" name="location" required>
  <option value="">Choose a location</option>
</select>

<label>Dealer *</label>
<select class="js-dealer" name="dealer_id" required>
  <option value="">Select a dealer</option>
</select>

      <label>Choose Vehicle</label>
      <select>
        <option value="">Select Model</option>
        <option>Metro XL</option>
        <option>Loader 600 PV</option>
        <option>Loader 600 DV</option>
      </select>

      <label>Preferred Date</label>
      <input type="date">
<div class="form-group">
  <label class="form-label">Preferred Time Slot</label>

  <div class="time-slot-wrapper">
    <label class="time-slot">
      <input type="radio" name="preferred_time" value="10AM-01PM">
      <span>
        <i class="far fa-clock"></i>
        10AM – 01PM
      </span>
    </label>

    <label class="time-slot">
      <input type="radio" name="preferred_time" value="2PM-06PM">
      <span>
        <i class="far fa-clock"></i>
        2PM – 06PM
      </span>
    </label>
  </div>
</div>


      <label>Additional Comments</label>
      <textarea></textarea>

      <button type="submit">Book Test Drive</button>
    </form>

  </div>
</div>

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

</div>
</div>
</div>
<section>


<style>
    .position-relative {
    position: relative !important;
    margin-left: -39px;
}

.btn.btn-secondary {
    color: var(--bs-white);
    background-color: #1f2e4e;
}
    </style>
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

        
<!-- IMAGE POPUP -->
<div class="zoom-popup">
    <img src="" class="popup-img">
    <span class="popup-close">&times;</span>
</div>
<script>
// When ANY zoom-trigger image is clicked
document.querySelectorAll(".zoom-trigger").forEach(img => {
    img.addEventListener("click", function () {
        const popup = document.querySelector(".zoom-popup");
        const popupImg = document.querySelector(".popup-img");

        popupImg.src = this.src;
        popup.style.display = "flex";
    });
});

// Close button
document.querySelector(".popup-close").addEventListener("click", function () {
    document.querySelector(".zoom-popup").style.display = "none";
});

// Click outside image closes popup
document.querySelector(".zoom-popup").addEventListener("click", function (e) {
    if (e.target === this) this.style.display = "none";
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
