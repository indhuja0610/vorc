
<?php
include 'config.php'; // DB connection

$query = "SELECT DISTINCT city FROM dealers ORDER BY city ASC";
$result = mysqli_query($conn, $query);
?>



<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Vorc Motors Pvt Ltd </title>
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
    </head>


      <style>

        .bg-breadcrumb{
          background:url('vimage/BGR2.png') no-repeat;
          background-size:cover;
          
        }

        .navbar-light .navbar-nav .nav-link {
    position: relative;
    margin-right: 25px;
    padding: 35px 0;
    letter-spacing: 1px;
    color: var(--bs-dark);
        font-size: 15px;

    font-weight: 500;
    outline: none;
    transition: .5s;
}
@media (min-width: 992px) {
    .px-lg-5 {
        padding-right: 1rem !important;
        padding-left: 3rem !important;
    }
}

         body {
    font-family: "Inter", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto,
    Helvetica, Arial, sans-serif;
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
  color: black;
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

  #n{
    margin-left:90px !important
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
                     <a href="index.php" class="navbar-brand d-flex align-items-center px-4 px-lg-5" id="n">
  <img src="vimage/vorc logo 02.png" alt="Logo" style="height:50px; width:auto;border-radius:8px;margin-left: -126px;">
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
                            <a href="contact.php" class="nav-item nav-link"><strong>Contact Us</strong></a>
                        </div>
                        <a href="#" class="btn btn-primary rounded-pill py-2 px-4 btn-enquire"> Enquire Now</a>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Navbar & Hero End -->

        <!-- Header Start -->
        <div class="container-fluid bg-breadcrumb">
            <div class="container text-center py-5" style="max-width: 900px;">
                <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s"> </h4>
                <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                  
                </ol>    
            </div>
        </div>
        <!-- Header End -->

  
        <!-- Fact Counter -->



<!-- Modal Ends -->
        <!-- Features Start -->
      
        <!-- Features End -->

        <!-- Car Steps Start -->

        <!-- Car Steps End -->

        <!-- Team Start -->
      

<style>
 .section-title {
            font-size: 32px;
            font-weight: 700;
            color: #009cff;
            text-align: center;
            margin-bottom: 10px;
        }

        .subtitle-text {
           font-size: 26px;
    text-align: center;
    padding: 30px;
    color: black;
        }

        .content-box {
            background: #fff;
            padding: 35px;
            border-radius: 12px;
            box-shadow: 0 5px 25px rgba(0,0,0,0.08);
            margin-bottom: 30px;
        }

        .content-title {
            font-size: 26px;
            font-weight: 700;
            color: #0a2647;
            margin-bottom: 15px;
        }

        .content-text {
            font-size: 16px;
            color: #333;
            line-height: 1.7;
        }

        .bullet-list li {
            margin-bottom: 10px;
            font-size: 16px;
        }

        .highlight-box {
            background: #e9f5ff;
            padding: 20px;
            border-radius: 10px;
        }

        .footer-space {
            height: 40px;
        }
        #hello{
          margin-left:20px !important;
        }
        #ad{
          width: 1033px;
        }
    </style>


<div class="container py-5">

    <!-- Subtitle -->
    <h2 class="section-title" >Join a select network of partners building the future of electric mobility.</h2>
    <p class="subtitle-text">
        Become part of the exclusive <span class="lg">VORC</span> Motors dealership network and help shape the future of India’s electric vehicle ecosystem.
    </p>
      </div>
      </div>

    <!-- Section 1 -->

<section class="vorc-simple wow fadeInUp" data-wow-delay="0.2s">
  <div class="vorc-wrap">
    
    <!-- Left Text -->
    <div class="vorc-text ">
      <h2 style="color:#009cff;">The <span class="lg">VORC</span> Motors Advantage</h2>
      <p style="font-size: 20px;
    text-align: justify;    color: white;">
        VORC Motors is at the forefront of the electric mobility revolution.
        We are selectively building our foundational dealership network and
        looking for passionate, growth-oriented entrepreneurs.
      </p>
    </div>

    <!-- Right Image -->
    <div class="vorc-img fade-in-delay">
      <img src="vimage/loader.png" alt="VORC Advantage">
    </div>

  </div>
</section>

<style>
  /* Section */
  .vorc-simple {
    padding: 80px 10%;
    background: url('vimage/bs4.jpg');
    overflow: hidden;
  }

  /* Flex container */
  .vorc-wrap {
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
        margin-top: -71px; 
        padding: 43px;/* for mobile responsiveness */
  }

  /* Left text */
  .vorc-text {
    flex: 0 0 50%; /* exactly 50% width */
    box-sizing: border-box;
    padding-right: 20px; /* optional spacing */
  }

  .vorc-text h2 {
    font-size: 42px;
    font-weight: 600;
    color: #0b1b2b;
    margin-bottom: 20px;
  }

  .vorc-text p {
    .vorc-text p {
    font-size: 20px;
    line-height: 1.7;
    color: #444;
    align-items: justify !important;
}
  }

  /* Right image */
  .vorc-img {
    flex: 0 0 50%; /* exactly 50% width */
    text-align: right;
    box-sizing: border-box;
    padding-left: 20px; /* optional spacing */
  }

  .vorc-img img {
    max-width: 100%;
    height: auto;
    display: inline-block;
        border-radius: 33px;
  }

  /* Fade animations */
  .fade-in {
    opacity: 0;
    transform: translateY(20px);
    animation: fadeIn 1s ease forwards;
  }

  .fade-in-delay {
    opacity: 0;
    transform: translateY(20px);
    animation: fadeIn 1s ease forwards;
    animation-delay: 0.4s;
  }

  @keyframes fadeIn {
    to {
      opacity: 1;
      transform: translateY(0);
    }
  }

  /* Mobile */
  @media (max-width: 768px) {
    .vorc-text,
    .vorc-img {
      flex: 0 0 100%; /* stack vertically */
      padding: 0;
      text-align: center;
    }

    .vorc-img {
      margin-top: 30px; /* spacing between text and image */
    }
  }
#head{
      font-size: 32px;
    font-weight: 600;
    color: #009cff;
    margin-bottom: 20px;
}

</style>

     
    <!-- <div class="content-box">
        <h3 class="content-title">The VORC Motors Advantage</h3>
        <p class="content-text">
            VORC Motors is at the forefront of the electric mobility revolution. We are selectively building our foundational dealership network and looking for passionate, growth-oriented entrepreneurs.
            <br><br>
            This is more than a standard dealership. It's a chance to get in on the ground floor, secure a key territory, and grow with us as a true partner.
        </p>
    </div> -->
<!-- <section class="vorc-partner wow fadeInUp" data-wow-delay="0.2s">
  <div class="vorc-partner-wrap">
    <h2 class="section-title " id="head">Why Partner with VORC Motors?</h2>
    <p>
      We are a startup—agile, innovative, and committed to partner success. 
      We eliminate bureaucracy and offer a direct, long-term partnership.
    </p>

    <div class="cards-container">
      <div class="card">
        <div class="card-icon">🚗</div>
        <div class="card-content">
          <h3>Innovative Product Line</h3>
          <p>Offer cutting-edge EVs built with precision engineering and future-ready design.</p>
        </div>
      </div>

      <div class="card">
        <div class="card-icon">🤝</div>
        <div class="card-content">
          <h3>A True Partnership</h3>
          <p>We grow when you grow. You become a core member of the VORC Motors brand.</p>
        </div>
      </div>

      <div class="card">
        <div class="card-icon">📈</div>
        <div class="card-content">
          <h3>High-Growth Market</h3>
          <p>The EV sector is booming—capture early demand with a rising brand.</p>
        </div>
      </div>

      <div class="card">
        <div class="card-icon">🛡️</div>
        <div class="card-content">
          <h3>Protected Territories</h3>
          <p>We prioritize quality, giving early partners clear, protected sales zones.</p>
        </div>
      </div>

      <div class="card">
        <div class="card-icon">💡</div>
        <div class="card-content">
          <h3>Comprehensive Support</h3>
          <p>Technical training, marketing, sales support, and continuous guidance.</p>
        </div>
      </div>
    </div>
  </div>
</section> -->

<style>
  .vorc-partner {
    padding: 27px 10%;
    background: url('vimage/bs2.jpg');
    font-family: 'Poppins', sans-serif;
  }

  .vorc-partner h2 {
    font-size: 42px;
    font-weight: 600;
    color: #0b1b2b;
    margin-bottom: 15px;
  }

  .vorc-partner p {
    font-size: 18px;
    color: #555;
    margin-bottom: 50px;
    line-height: 1.8;
  }

  .cards-container {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 30px;
  }

  .card {
    background: #ffffff;
    border-radius: 16px;
    box-shadow: 0 8px 20px rgba(0,0,0,0.08);
    padding: 30px;
    display: flex;
    align-items: flex-start;
    gap: 20px;
    transition: transform 0.4s ease, box-shadow 0.4s ease;
    cursor: pointer;
  }

  .card:hover {
    transform: scale(1.05); /* slightly bigger */
    box-shadow: 0 20px 40px rgba(0,0,0,0.15); /* stronger shadow */
  }

  .card-icon {
    font-size: 40px;
    color: #0b1b2b;
    flex-shrink: 0;
    line-height: 1;
  }

  .card-content h3 {
    margin: 0 0 10px;
    font-size: 22px;
    color: #0b1b2b;
  }

  .card-content p {
    margin: 0;
    font-size: 16px;
    color: #555;
    line-height: 1.7;
  }

  @media (max-width: 768px) {
    .cards-container {
      grid-template-columns: 1fr;
    }

    .card {
      flex-direction: row;
    }
  }
</style>




    <!-- Section 2 -->
    <!-- <div class="content-box">
        <h3 class="content-title">Why Partner with VORC Motors?</h3>

        <div class="highlight-box mt-3 mb-3">
            <p class="content-text mb-0">
                We are a startup—agile, innovative, and committed to partner success. We eliminate bureaucracy and offer a direct, long-term partnership.
            </p>
        </div>

        <ul class="bullet-list">
            <li><strong>Innovative Product Line:</strong> Offer cutting-edge EVs built with precision engineering and future-ready design.</li>
            <li><strong>A True Partnership:</strong> We grow when you grow. You become a core member of the VORC Motors brand.</li>
            <li><strong>High-Growth Market:</strong> The EV sector is booming—capture early demand with a rising brand.</li>
            <li><strong>Protected Territories:</strong> We prioritize quality, giving early partners clear, protected sales zones.</li>
            <li><strong>Comprehensive Support:</strong> Technical training, marketing, sales support, and continuous guidance.</li>
        </ul>
    </div> -->
     <h2 class="section-title" id="head" style="margin-top: 37px;">Why Partner with <span class="lg">VORC</span> Motors?</h2>
    <p style="font-size: 26px;
    text-align: center;
    padding: 30px;color:black;">
      We’ve removed the corporate red tape to build a faster, smarter dealership model. When you join <span class="lg">VORC</span>, you aren’t 
      just a vendor—you’re a foundational partner in the EV revolution.
    </p>
<section class="vorc-partner wow fadeInUp" data-wow-delay="0.2s">
  <div class="vorc-partner-wrap">
   
<h2 class="section-title" id="head" style="color:#fff;">The Business Advantage</h2>
    <div class="cards-container">
<div class="advantage-container">



  <div class="advantage-card">
    <div class="card-icon">
      <i class="fas fa-shield-alt"></i>
    </div>
    <h3>Protected Territories</h3>
    <p>
      We prioritize your growth by ensuring clear, exclusive sales zones with no internal competition.
    </p>
  </div>

  <div class="advantage-card">
    <div class="card-icon">
      <i class="fas fa-bolt"></i>
    </div>
    <h3>Startup Agility</h3>
    <p>
      Work directly with our leadership. No bureaucracy—just fast decisions and a partnership that evolves with you.
    </p>
  </div>

  <div class="advantage-card">
    <div class="card-icon">
      <i class="fas fa-chart-line"></i>
    </div>
    <h3>High-Growth Market</h3>
    <p>
      Capture the surging demand for EVs with a brand designed for rapid scale and early market entry.
    </p>
  </div>

  <div class="advantage-card">
    <div class="card-icon">
      <i class="fas fa-headset"></i>
    </div>
    <h3>360° Support</h3>
    <p>
      From localized marketing assets and sales leads to deep-dive technical training, we give you the tools to win.
    </p>
  </div>

</div>

  </div>
</section>

<section>

    <style>
     
      

        .hero {
                text-align: center;
    margin-bottom: -57px;
    color: white;
    margin-top: 36px;
        }

        .hero h1 {
          font-size: 32px;
    font-weight: 600;
    color: #009cff;
    margin-bottom: 20px;
        }

        .hero p {
           font-size: 26px;
            max-width: 800px;
            margin: 0 auto;
            line-height: 1.8;
            opacity: 0.95;
        }

        .cards-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
           margin-top: 86px;
        }

        .card {
            background: white;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0,0,0,0.3);
        }

        .card-image {
            width: 100%;
            height: 200px;
            
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
        }

        .card-image::before {
            content: '';
            position: absolute;
            width: 200%;
            height: 200%;
            
            animation: pulse 3s ease-in-out infinite;
        }

        @keyframes pulse {
            0%, 100% { transform: scale(1); opacity: 0.5; }
            50% { transform: scale(1.1); opacity: 0.8; }
        }

        .icon {
            font-size: 4rem;
            z-index: 1;
            filter: drop-shadow(2px 2px 4px rgba(0,0,0,0.2));
        }

        .card-content {
            padding: 30px;
        }

        .card-title {
            font-size: 1.5rem;
            color: #333;
            margin-bottom: 15px;
            font-weight: 600;
        }

        .card-description {
            color: #666;
            line-height: 1.6;
            font-size: 1rem;
        }

        @media (max-width: 768px) {
            .hero h1 {
                font-size: 2rem;
            }

            .hero p {
                font-size: 1rem;
            }

            .cards-container {
                grid-template-columns: 1fr;
            }
        }
        #container1{
          background:url(vimage/ps2.jpg)
        }

        .cont {
    background: url(vimage/ps2.jpg);
    padding: 1px;
    margin-top: 87px;
    padding-bottom: 20px !important;
}
    </style>
<div class="hero">
            <h1>The <span class="lg">VORC</span> Commitment</h1>
            <p style="color:black;">Our vehicles are built to exceed expectations, ensuring your customers remain loyal to your dealership.</p>
        </div>
<div class="cont">
    <div class="container" >
        

        <div class="cards-container">
            <div class="card">
             
                  <i class="fa-solid fa-gears icon"></i>

             
                <div class="card-content">
                    <h3 class="card-title">Precision Engineering</h3>
                    <p class="card-description">Every vehicle is a product of rigorous testing, focused on rider safety and long-term durability.</p>
                </div>
            </div>

            <div class="card">
             
                  <i class="fa-solid fa-leaf icon"></i>

                <div class="card-content">
                    <h3 class="card-title">Sustainable Innovation</h3>
                    <p class="card-description">We lead with eco-friendly technology and future-ready designs that stand out on your showroom floor.</p>
                </div>
            </div>

            <div class="card">
              
                   <i class="fa-solid fa-handshake icon"></i>

              
                <div class="card-content">
                    <h3 class="card-title">Seamless Ownership</h3>
                    <p class="card-description">A robust genuine parts network and dedicated after-sales support ensure a hassle-free experience for every rider.</p>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<style>
  .advantage-container {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: 30px;
  max-width: 1200px;
  margin: auto;
}

.advantage-card {
  background: #ffffff;
  padding: 40px;
      height: 260px;
  border-radius: 16px;
  box-shadow: 0 12px 30px rgba(0, 0, 0, 0.08);
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.advantage-card:hover {
  transform: translateY(-8px);
  box-shadow: 0 20px 45px rgba(0, 0, 0, 0.12);
}

.card-icon {
  font-size: 40px;
  color: #1fa34a; /* EV green */
  margin-bottom: 20px;
  text-align: center;
}

.advantage-card h3 {
  font-size: 22px;
  font-weight: 600;
  margin-bottom: 12px;
  text-align: center;
}

.advantage-card p {
  font-size: 16px;
  line-height: 1.7;
  color: #555;
  text-align: center;
}

/* Responsive */
@media (max-width: 768px) {
  .advantage-container {
    grid-template-columns: 1fr;
  }
}

  .card-icon i {
  font-size: 44px;
  color: #38bdf8; /* SKY BLUE */
  transition: transform 0.4s ease, color 0.4s ease;
}

.card:hover .card-icon i {
  transform: scale(1.15);
  color: #0ea5e9;
}
.card {
  text-align: center;
  flex-direction: column;
  align-items: center;
}

  </style>


    <!-- Section 3 -->
   

    <div class="footer-space"></div>
</div>


<div class="container" id="hello">
  
    <h1 class="heading">Let's Build the Future Together</h1>
    <p class="subheading">We are looking for visionary partners to help us redefine urban mobility. Let’s build something legendary together.</p>

  </div>


<style>

     .img-fluid {
    max-width: 100%;
    height: 416px;
}
  .container {
    
    margin: 0 auto;
  }

  .heading {
    font-size: 36px;
    font-weight: bold;
    margin-bottom: 15px;
    color: #111;
    margin-top:50px;
  }

  .subheading {
    font-size: 18px;
    color: #555;
    line-height: 1.6;
    margin-bottom: -76px;
  }

  .why-us {
    font-weight: bold;
    margin-bottom: 20px;
  }

  .cards {
    display: flex;
    gap: 15px;
    flex-wrap: wrap;
  }

  .card {
    flex: 1 1 30%;
    border: 1px solid #ddd;
    border-radius: 8px;
    padding: 15px;
    display: flex;
    align-items: center;
    gap: 10px;
    min-width: 250px;
    text-align: center;
  }

  .card img {
    width: 40px;
    height: 40px;
  }

  .card p {
    margin: 0;
    font-size: 14px;
    font-weight: 600;
    color: #333;
  }

  @media (max-width: 768px) {
    .cards {
      flex-direction: column;
    }
  }
    
 
       .dealer-section {
    display: flex
;
    min-height: 100vh;
    margin-top: 109px;
    margin-bottom: 112px;
}
        .dealer-left {
            flex: 1;
            background: url('vimage/07.jpeg') center/cover no-repeat;
            border-top-right-radius: 10px;
            border-bottom-right-radius: 10px;
        }
        .dealer-right {
            flex: 1;
            background-color: #e3e7ef;
            padding: 60px 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        .dealer-right h2 {
            color: #1f3d46;
            margin-bottom: 30px;
        }
        .form-control, .form-select {
            border-radius: 30px;
            padding: 15px 20px;
            margin-bottom: 15px;
        }
        .form-check-label {
            margin-left: 10px;
        }
        .btn-submit {
            background-color: #f4a261;
            color: white;
            border-radius: 30px;
            padding: 12px 30px;
            border: none;
            font-weight: bold;
            transition: 0.3s;
        }
        .btn-submit:hover {
            background-color: #1e2b56;
        }
        @media (max-width: 992px) {
            .dealer-section {
                flex-direction: column;
            }
            .dealer-left, .dealer-right {
                border-radius: 0;
            }
        }

   <!-- About End -->


  
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
.mb-0 {
    margin-bottom: 13px !important;
}
  </style>
        
    </style>


<div class="dealer-section" class="fade-up">
    <!-- Left Image -->
    <div class="dealer-left"></div>

    <!-- Right Form -->
    <div class="dealer-right"  >
        <h2>Become a Dealer</h2>
       <form action="save_dealer.php" method="POST">
    <input type="text" name="fullname" class="form-control" placeholder="Full Name*" required>

    <div class="row g-2">
        <div class="col">
            <input type="email" name="email" class="form-control" placeholder="Email*" required>
        </div>
        <div class="col">
            <input type="text" name="mobile" class="form-control" placeholder="Mobile*" required>
        </div>
    </div>

    <input type="text" name="pincode" id="pincode" class="form-control" placeholder="Pincode*" required>
    <input type="text" name="location" id="location" class="form-control" placeholder="Location*" required>

    <textarea name="address" class="form-control" rows="3" placeholder="Address*" required></textarea>

    <label class="mt-3">Previous dealership experience?</label>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="experience" id="expYes" value="Yes" required>
        <label class="form-check-label" for="expYes">Yes</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="experience" id="expNo" value="No" required>
        <label class="form-check-label" for="expNo">No</label>
    </div>

    <select class="form-select mt-3" name="type" required>
        <option value="">Type*</option>
        <option value="Owned">Owned</option>
        <option value="Rented">Rented</option>
    </select>

    <label class="mt-3">Association with any other Electric vehicle company?</label>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="association" id="assocYes" value="Yes" required>
        <label class="form-check-label" for="assocYes">Yes</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="association" id="assocNo" value="No" required>
        <label class="form-check-label" for="assocNo">No</label>
    </div>
   

    <div class="form-check mt-3">
        <input class="form-check-input" type="checkbox" id="consent" required>
        <label class="form-check-label" for="consent">I agree to the <a href="">privacy policy</a> and terms.</label>
    </div>

    <button type="submit" class="btn btn-submit mt-4">Submit</button>
</form>
      </div>
      </div>


        <!-- Team End -->

        <!-- Banner Start -->
         <!-- <div class="container-fluid banner pb-5 wow zoomInDown" data-wow-delay="0.1s">
            <div class="container pb-5">
                <div class="banner-item rounded">
                    <img src="vimage/wb.png" class="img-fluid rounded w-100" alt="">
                    <div class="banner-content">
                        <h2 class="text-primary">VORC Motors</h2>
                        <h1 class="text-white">Passenger & Cargo Solutions</h1>
                        <p class="text-white">Experience power, style, and performance</p>
                        <div class="banner-btn">
                            <a href="#" class="btn btn-secondary rounded-pill py-3 px-4 px-md-5 me-2">WhatsApp</a>
                            <a href="#" class="btn btn-primary rounded-pill py-3 px-4 px-md-5 ms-2">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Banner End -->


        
<section class="dlr">
  <style>
    section.dlr {
    margin-bottom: 58px;
}
        .header {
            background: white;
            padding: 40px 20px;
            text-align: center;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        }

        .header h1 {
            font-size: 2.5em;
            color: #009cff;
            margin-bottom: 10px;
            font-weight: 700;
        }

        .header p {
            color: #666;
            font-size: 1.1em;
            max-width: 800px;
            margin: 0 auto;
        }

        .search-section {
            background: #009cff;
            padding: 30px 20px;
        }

        .search-container {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 2fr 1fr 1fr;
            gap: 20px;
            align-items: end;
        }

        .input-group {
            display: flex;
            flex-direction: column;
        }

        .input-group label {
            color: white;
            font-size: 0.95em;
            margin-bottom: 8px;
            font-weight: 500;
        }

        .search-input-wrapper {
            position: relative;
        }

        .search-input {
            width: 100%;
            padding: 14px 45px 14px 18px;
            border: none;
            border-radius: 6px;
            font-size: 1em;
            background: white;
            transition: all 0.3s;
        }

        .search-input:focus {
            outline: none;
            box-shadow: 0 0 0 3px rgba(255,255,255,0.3);
        }

        .search-icon {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #666;
            pointer-events: none;
        }

        select.search-input {
            appearance: none;
            background-image: url("data:image/svg+xml,%3Csvg width='12' height='8' viewBox='0 0 12 8' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1 1L6 6L11 1' stroke='%23666' stroke-width='2' stroke-linecap='round'/%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: right 15px center;
            padding-right: 40px;
            cursor: pointer;
        }

        .main-content {
            display: grid;
            grid-template-columns: 400px 1fr;
            max-width: 1400px;
            margin: 0 auto;
            background: white;
            box-shadow: 0 0 30px rgba(0,0,0,0.1);
        }

        .dealer-list {
            padding: 20px;
            overflow-y: auto;
            max-height: 600px;
            border-right: 1px solid #e0e0e0;
        }

        .dealer-card {
            background: #fafafa;
            border: 1px solid #e0e0e0;
            border-radius: 8px;
            padding: 20px;
              margin-bottom: 15px;
            transition: all 0.3s;
            cursor: pointer;
        }

        .dealer-card:hover {
            background: white;
            border-color: #3b4c9f;
            box-shadow: 0 4px 12px rgba(59,76,159,0.1);
        }

        .dealer-name {
            font-size: 1.1em;
            font-weight: 700;
            color: #1a1a1a;
            margin-bottom: 12px;
        }

        .dealer-info {
            display: flex;
            align-items: start;
            margin-bottom: 8px;
            font-size: 0.95em;
            color: #555;
        }

        .dealer-info svg {
            width: 16px;
            height: 16px;
            margin-right: 10px;
            flex-shrink: 0;
            margin-top: 2px;
            stroke: #3b4c9f;
        }

        .directions-btn {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: #009cff;
            color: white;
            padding: 10px 18px;
            border: none;
            border-radius: 6px;
            font-size: 0.95em;
            font-weight: 600;
            cursor: pointer;
            margin-top: 12px;
            transition: all 0.3s;
        }

        .directions-btn:hover {
            background: #2d3a7f;
            transform: translateY(-1px);
        }

        .distance {
            color: #3b4c9f;
            font-weight: 600;
        }

        #map {
            height: 600px;
            width: 100%;
        }

        @media (max-width: 968px) {
            .search-container {
                grid-template-columns: 1fr;
            }

            .main-content {
                grid-template-columns: 1fr;
            }

            .dealer-list {
                max-height: 400px;
                border-right: none;
                border-bottom: 1px solid #e0e0e0;
            }
        }
    </style>

    <div class="header">
        <h1> <span class="lg">VORC</span> Dealers Near You</h1>
        <p> <span class="lg">VORC</span>'s dealer network spans around the globe, bringing you closer to quality vehicles and exceptional service.</p>
    </div>

    <div class="search-section">
        <div class="search-container">
            <div class="input-group">
                <div class="search-input-wrapper">
                    <input type="text" class="search-input" placeholder="Enter a Location" id="locationInput">
                    <svg class="search-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <circle cx="11" cy="11" r="8"></circle>
                        <path d="m21 21-4.35-4.35"></path>
                    </svg>
                </div>
            </div>

           <div class="input-group">
    <label>State</label>
    <select class="search-input" id="stateSelect">
        <option value="">Select State</option>
        <option value="TAMIL NADU">TAMIL NADU</option>
        <option value="ANDHRA PRADESH">ANDHRA PRADESH</option>
        <option value="KARNATAKA">KARNATAKA</option>
        <option value="KERALA">KERALA</option>
        <option value="TELANGANA">TELANGANA</option>
        <option value="PUDUCHERRY">PUDUCHERRY</option>
    </select>
</div>

           <div class="input-group">
    <label>City</label>
    <select class="search-input" id="citySelect" name="city">
        <option value="All Cities">All Cities</option>

        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
            <option value="<?php echo $row['city']; ?>">
                <?php echo $row['city']; ?>
            </option>
        <?php } ?>

    </select>
</div>

        </div>
    </div>

    <div class="main-content">
       <div class="dealer-list" id="dealerList"></div>
       <div id="map" style="height:600px;"></div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.9.4/leaflet.min.js"></script>
    

</section>


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


.fa-solid, .fas {
    font-weight: 900;
    color: #009cff;
}
.lg {
    font-family: 'Magneto', sans-serif;
}

   
  </style>


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




        <!-- Back to Top -->
        <a href="#" class="btn btn-secondary btn-lg-square rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>   
<script>
let map = L.map('map').setView([11.1271, 78.6569], 6);
let markers = [];

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; OpenStreetMap'
}).addTo(map);

function loadDealers() {
    const state = document.getElementById("stateSelect").value;
    const city  = document.getElementById("citySelect").value;

    fetch(`fetch_dealers.php?state=${state}&city=${city}`)
        .then(res => res.json())
        .then(data => {
            renderDealers(data);
            renderMap(data);
        });
}

function renderDealers(dealers) {
    const container = document.getElementById("dealerList");
    container.innerHTML = "";

    dealers.forEach(d => {
        container.innerHTML += `
        <div class="dealer-card">
            <div class="dealer-name">${d.name}-${d.city},<br>${d.state}</div>

            <div class="dealer-info">
                📍 <span>${d.address}</span>
            </div>

            <div class="dealer-info">
                📞 <span>${d.phone}</span>
            </div>

            <div class="dealer-info">
                📅 <span>${d.days}</span>
            </div>

            <div class="dealer-info">
                ⏰ <span>${d.timing}</span>
            </div>

            <button class="directions-btn" onclick="openDirections(${d.lat}, ${d.lng})">
                Directions
            </button>
        </div>`;
    });
}

function renderMap(dealers) {
    markers.forEach(m => map.removeLayer(m));
    markers = [];

    if (dealers.length > 0) {
        map.setView([dealers[0].lat, dealers[0].lng], 10);
    }

    dealers.forEach(d => {
        let marker = L.marker([d.lat, d.lng]).addTo(map)
            .bindPopup(`<b>${d.name}</b><br>${d.address}<br>${d.phone}`);
        markers.push(marker);
    });
}

function openDirections(lat, lng) {
    window.open(`https://www.google.com/maps?q=${lat},${lng}`, '_blank');
}

// Auto load on page load
loadDealers();

// Reload on filter change
document.getElementById("stateSelect").addEventListener("change", loadDealers);
document.getElementById("citySelect").addEventListener("change", loadDealers);
</script>


        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.9.4/leaflet.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.9.4/leaflet.js"></script>

        
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
