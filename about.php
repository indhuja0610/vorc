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
    </head>


      <style>
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

        <style>
          
.lg{
    font-family: 'Magneto', sans-serif;
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

@media (min-width: 992px) {
    .px-lg-5 {
        padding-right: 1rem !important;
        padding-left: 3rem !important;
    }
}
          </style>
        <!-- Navbar & Hero End -->

        <!-- Header Start -->
        <!-- <div class="container-fluid bg-breadcrumb">
            <div class="container text-center py-5" style="max-width: 900px;">
                <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s"></h4>
                <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
         
                </ol>    
            </div>
        </div> -->
        <!-- Header End -->


        <section class="about-vorc wow fadeInRight">
  <div class="about-container">

    <!-- Left Image -->
    <div class="about-image">
      <img src="vimage/about.png" alt="VORC Motors Electric Auto">
    </div>

    <!-- Right Content -->
    <div class="about-content">
      <h5 class="tagline">About <span class="lg">VORC</span> Motors</h5>
      <h2>Engineering the Future of Resilient Mobility.</h2>
     <p>
  At <span class="lg">VORC</span> Motors we don’t just assemble vehicles; we redefine the engineering of commercial transport. Established in 2018 and headquartered in Tamil Nadu, India, <span class="lg">VORC</span> is a next-generation automotive manufacturer specializing in high-performance L5-category Electric and Hybrid three-wheelers.
  </p>
  <p>
   Our veteran team of engineers saw the limitations of traditional three-wheeler designs—instability, high maintenance, and safety risks. We set out to bridge this gap by introducing proprietary technologies usually reserved for premium automobiles, creating a new global benchmark for durability and profitability.
  </p>

      <!-- <div class="about-actions">
        <a href="#" class="btn primary">Explore Vehicles</a>
        <a href="#" class="btn outline">Contact Us</a>
      </div> -->
    </div>

  </div>
</section>
<style>

  .about-vorc {
  padding: 80px 40px;
  background: linear-gradient(135deg, #f6fbff, #ffffff);
  font-family: "Segoe UI", sans-serif;
}

.about-container {
  max-width: 1200px;
  margin: auto;
  display: flex;
  align-items: center;
  gap: 60px;
}

/* Image */
.about-image {
  flex: 1;
}

.about-image img {
  width: 100%;
  border-radius: 18px;
  box-shadow: 0 20px 40px rgba(0,0,0,0.15);
}

/* Content */
.about-content {
  flex: 1;
}

.about-content .tagline {
  color: #0b82f0;
  font-weight: 600;
  letter-spacing: 1px;
  margin-bottom: 10px;
}

.about-content h2 {
  font-size: 36px;
  line-height: 1.3;
  color: #0a2540;
  margin-bottom: 20px;
}

.about-content p {
  font-size: 16px;
  color: #4b5563;
  line-height: 1.7;
  margin-bottom: 15px;
}

/* Buttons */
.about-actions {
  margin-top: 30px;
  display: flex;
  gap: 15px;
}

.btn {
  padding: 12px 28px;
  border-radius: 30px;
  /* font-size: 14px; */
  font-weight: 600;
  text-decoration: none;
  transition: all 0.3s ease;
}

.btn.primary {
  background: #0b82f0;
  color: #fff;
  box-shadow: 0 8px 20px rgba(11,130,240,0.4);
}

.btn.primary:hover {
  background: #0667c8;
}

.btn.outline {
  border: 2px solid #0b82f0;
  color: #0b82f0;
}

.btn.outline:hover {
  background: #0b82f0;
  color: #fff;
}

/* Responsive */
@media (max-width: 900px) {
  .about-container {
    flex-direction: column;
    text-align: center;
  }

  .about-actions {
    justify-content: center;
  }

  .about-content h2 {
    font-size: 28px;
  }

   /* SECTION STACK */
  .mv-section {
    display: block;            /* IMPORTANT */
    max-width: 100%;
    margin: 0;
    border-radius: 0;
  }

  /* IMAGE FULL WIDTH */
  .mv-image {
    width: 100% !important;    /* FORCE override */
    height: 260px;
  }

  .mv-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
  }

  /* CONTENT FULL WIDTH */
  .mv-content {
    width: 100% !important;    /* FORCE override */
    padding: 0;
  }

  /* HEADER FIX */
  .mv-header {
    clip-path: none;
    padding: 20px 16px;
    text-align: center;
  }

  .mv-header h1,
  .mv-header h2 {
    font-size: 22px;
  }

  /* CARDS STACK */
  .mv-cards {
    display: block;
    padding: 20px 16px;
  }

  .mv-card {
    width: 100%;
    border-left: none;
    padding-left: 0;
    border-top: 1px solid #ddd;
    padding-top: 20px;
    margin-bottom: 20px;
  }

  .mv-card:first-child {
    border-top: none;
  }

  .mv-card p {
    font-size: 15px !important;
  }
}

.mv-section {
    display: flex;
    max-width: 1281px;
    margin: auto;
    background: #fff;
    border-radius: 6px;
    overflow: hidden;
}

/* Left Image */
.mv-image {
    width: 40%;
}

.mv-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

/* Right Content */
.mv-content {
    width: 60%;
    background: #fff;
    color: #000;
    position: relative;
    padding-bottom: 30px;
}

/* Diagonal Header */
.mv-header {
    background: #009cff;
    color: #000;
    padding: 30px 40px;
    clip-path: polygon(0 0, 100% 0, 100% 70%, 0 100%);
}

.mv-header h2 {
    font-size: 22px;
    margin-bottom: 10px;
}

.mv-header p {
    font-size: 13px;
    line-height: 1.6;
    max-width: 520px;
}

/* Cards */
.mv-cards {
    display: flex;
    gap: 30px;
    padding: 40px;
}

.mv-card {
    width: 50%;
    border-left: 1px solid #444;
    padding-left: 25px;
    position: relative;
}

.mv-card:first-child {
    border-left: none;
}

.mv-card h3 {
    font-size: 18px;
    margin-bottom: 10px;
}

.mv-card p {
    font-size: 13px;
    line-height: 1.6;
    color: #ccc;
}

/* Icons */
.icon {
    width: 45px;
    height: 45px;
    background: #009cff;
    color: #000c21;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 20px;
    margin-bottom: 15px;
}

/* Footer Text */
.footer-text {
    display: block;
    text-align: center;
    font-size: 11px;
    color: #888;
    margin-top: 10px;
}



</style>



<section class="mv-section  wow fadeInUp">

    <!-- Left Image -->
    <div class="mv-image">
        <img src="vimage/vision.jpg"
             alt="Office Work">
    </div>

    <!-- Right Content -->
    <div class="mv-content">

        <!-- Top Diagonal Header -->
        <div class="mv-header">
            <h1>The <span class="lg">VORC</span> Purpose</h1>
            <p>
               .
            </p>
        </div>

        <!-- Cards -->
        <div class="mv-cards">

            <!-- Vision -->
            <div class="mv-card">
                <div class="icon">👁️</div>
                <h2><b>Our Vision</b></h2>
                <p style="color:#000;font-size:18px;text-align:justify;">
                     To establish <span class="lg">VORC</span> Motors as a global benchmark in high-utilization mobility, bridging the gap between Indian engineering excellence and international quality standards for a sustainable future.
                </p>
            </div>

            <!-- Mission -->
            <div class="mv-card">
                <div class="icon">🎯</div>
                <h2> <b>Our Mission</b></h2>
                <p style="color:#000;font-size:18px;text-align:justify;">
To deliver eco-friendly mobility solutions that offer the lowest cost of ownership and the highest safety standards, ensuring maximum profitability for our partners and a cleaner planet for everyone.                </p>
            </div>

        </div>

       

    </div>

</section>

<section>
  <style>
     .header1 {
            text-align: center;
            margin-bottom: 80px;
        }

        .header1 h1 {
            font-size: 2.5em;
            color: white;
            margin-bottom: 15px;
            font-weight: 700;
        }

        .header1 p {
            font-size: 1.1em;
            color: white;
        }

        .infographic {
            position: relative;
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            grid-template-rows: repeat(2, auto);
            gap: 60px 80px;
            align-items: center;
            justify-items: center;
            max-width: 900px;
            margin: 0 auto;
        }

        .center-image {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 1;
        }

        .center-icons {
            display: flex;
            gap: 20px;
            justify-content: center;
            align-items: center;
        }

        .person-icon {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, #3b82f6 0%, #60a5fa 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 8px 20px rgba(59, 130, 246, 0.3);
        }

        .person-icon svg {
            width: 30px;
            height: 30px;
            fill: white;
        }

        .feature-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            max-width: 350px;
            z-index: 2;
            animation: fadeIn 0.8s ease-out backwards;
            
        }
        .feature-item1 {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            max-width: 350px;
            z-index: 2;
            animation: fadeIn 0.8s ease-out backwards;
            height: 402px;
            background:white;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            max-width: 350px;
            z-index: 2;
            animation: fadeIn 0.8s ease-out backwards;
                padding: 18px;
    border-radius: 23px;
        }


        .feature-item:nth-child(1) { animation-delay: 0.1s; }
        .feature-item:nth-child(2) { animation-delay: 0.2s; }
        .feature-item:nth-child(3) { animation-delay: 0.3s; }
        .feature-item:nth-child(4) { animation-delay: 0.4s; }

        .icon-circle {
            width: 100px;
            height: 100px;
            background: linear-gradient(135deg, #3b82f6 0%, #60a5fa 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
            box-shadow: 0 10px 30px rgba(59, 130, 246, 0.3);
            transition: all 0.3s ease;
            position: relative;
        }

        .icon-circle::before {
            content: '';
            position: absolute;
            width: 110px;
            height: 110px;
            border: 3px solid rgba(59, 130, 246, 0.3);
            border-radius: 50%;
            animation: pulse 2s infinite;
        }

        .feature-item:hover .icon-circle {
            transform: scale(1.1);
            box-shadow: 0 15px 40px rgba(59, 130, 246, 0.5);
        }

        .icon-circle svg {
            width: 50px;
            height: 50px;
            stroke: white;
            fill: none;
            stroke-width: 2;
            stroke-linecap: round;
            stroke-linejoin: round;
        }

        .number {
            position: absolute;
            top: -5px;
            right: -5px;
            width: 35px;
            height: 35px;
            background: white;
            color: #3b82f6;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            font-size: 1.1em;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .feature-title {
            font-size: 1.4em;
            font-weight: 700;
            color: #1e293b;
            margin-bottom: 10px;
        }

        .feature-description {
            font-size: 0.95em;
            color: #64748b;
            line-height: 1.6;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes pulse {
            0%, 100% {
                transform: scale(1);
                opacity: 0.5;
            }
            50% {
                transform: scale(1.1);
                opacity: 0.3;
            }
        }

        @media (max-width: 768px) {
            .container {
                padding: 40px 30px;
            }

            .header h1 {
                font-size: 2em;
            }

            .infographic {
                grid-template-columns: 1fr;
                gap: 40px;
                padding-top: 100px;
            }

            .center-image {
                position: static;
                transform: none;
                grid-column: 1;
                margin-bottom: 20px;
            }

            .feature-item {
                max-width: 100%;
            }
        }
        
        .container1 {
     
            margin: 0 auto;
            background: url(vimage/ps2.jpg);
       
            padding: 60px;
            margin-top:30px;
            
        }
    </style>
</head>
<body>
    <div class="container1">
        <div class="header1">
            <h1>Our Core DNA</h1>
            <p>The engineering foundation that defines every <span class="lg">VORC</span> vehicle</p>
        </div>

        <div class="infographic">
            <div class="center-image">
                <!-- <div class="center-icons">
                    <div class="person-icon">
                        <svg viewBox="0 0 24 24">
                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/>
                            <circle cx="12" cy="7" r="4"/>
                        </svg>
                    </div>
                    <div class="person-icon">
                        <svg viewBox="0 0 24 24">
                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/>
                            <circle cx="12" cy="7" r="4"/>
                        </svg>
                    </div>
                    <div class="person-icon">
                        <svg viewBox="0 0 24 24">
                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/>
                            <circle cx="12" cy="7" r="4"/>
                        </svg>
                    </div>
                </div> -->
            </div>

            <div class="feature-item1">
                <div class="icon-circle">
                    <span class="number">01</span>
                    <svg viewBox="0 0 24 24">
                        <path d="M12 2L2 7l10 5 10-5-10-5z"/>
                        <path d="M2 17l10 5 10-5"/>
                        <path d="M2 12l10 5 10-5"/>
                    </svg>
                </div>
                <div class="feature-title">Structural Integrity</div>
                <div class="feature-description">Our signature Rock-Solid Monocoque design provides a 360° high-strength safety cage. Unlike traditional tubular frames, this unibody architecture offers superior crash protection, unmatched torsional rigidity, and a rattle-free ride for the entire life of the vehicle.</div>
            </div>

            <div class="feature-item1">
                <div class="icon-circle">
                    <span class="number">02</span>
                    <svg viewBox="0 0 24 24">
                        <circle cx="12" cy="12" r="3"/>
                        <path d="M12 1v6m0 6v6M5.64 5.64l4.24 4.24m6.36 6.36l4.24 4.24M1 12h6m6 0h6M5.64 18.36l4.24-4.24m6.36-6.36l4.24-4.24"/>
                    </svg>
                </div>
                <div class="feature-title">Zero-Maintenance Engineering</div>
                <div class="feature-description">We design for maximum uptime. By pioneering a Automotive-Grade CV Shaft Drive, we have eliminated the high-maintenance chains and belts found in standard autos. This ensures direct power delivery, quieter operation, and significantly lower service costs.</div>
            </div>

            <div class="feature-item1">
                <div class="icon-circle">
                    <span class="number">03</span>
                    <svg viewBox="0 0 24 24">
                        <rect x="2" y="7" width="20" height="14" rx="2"/>
                        <path d="M7 7V4a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v3"/>
                        <line x1="12" y1="11" x2="12" y2="17"/>
                        <line x1="9" y1="14" x2="15" y2="14"/>
                    </svg>
                </div>
                <div class="feature-title">Advanced Energy</div>
                <div class="feature-description">At the heart of our fleet is an 11.8 kWh LFP (Lithium Ferro Phosphate) battery system. Chosen for its extreme thermal stability in tropical climates, it delivers an industry-leading 2,500+ charging cycles, ensuring your battery stays as strong as your business for years to come.</div>
            </div>

            <div class="feature-item1">
                <div class="icon-circle">
                    <span class="number">04</span>
                    <svg viewBox="0 0 24 24">
                        <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"/>
                        <polyline points="3.27 6.96 12 12.01 20.73 6.96"/>
                        <line x1="12" y1="22.08" x2="12" y2="12"/>
                    </svg>
                </div>
                <div class="feature-title">Connected Intelligence</div>
                <div class="feature-description">Your vehicle is now a secure digital asset. Our optional <span class="lg">VORC</span> Connect suite provides real-time GPS tracking and battery diagnostics. Most importantly, it features Remote Immobilization, allowing you to instantly secure the vehicle via the cloud in case of theft or unauthorized use.</div>
            </div>
        </div>
    </div>

</section>
        <!-- About Start -->
      

        <section>

        <style>
          .hero {
            position: relative;
            height: 500px;
            background: url('bs.jpg') no repeat;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            overflow: hidden;
        }

        .hero-content {
            z-index: 2;
            animation: fadeInUp 1s ease-out;
        }

        .hero h1 {
            font-size: 3.5em;
            font-weight: 700;
            margin-bottom: 20px;
            background:#009cff;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .hero p {
            font-size: 1.5em;
            color: #93c5fd;
            font-weight: 500;
        }

        .intro-section {
            max-width: 1200px;
            margin: 0 auto;
            padding: 80px 20px;
            text-align: center;
        }

        .intro-section h2 {
            font-size: 2em;
            color: #60a5fa;
            margin-bottom: 20px;
        }

        .intro-section p {
            font-size: 1.2em;
            color:  black;
            max-width: 900px;
            margin: 0 auto;
            line-height: 1.8;
        }

        .sections-container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 60px 20px 100px;
        }

        .quality-section {
            background: url('vimage/bs1.jpg') no-repeat;
            background-size:cover;
         
            border-radius: 30px;
            padding: 60px;
            margin-bottom: 60px;
            border: 2px solid rgba(96, 165, 250, 0.3);
            transition: all 0.4s ease;
            animation: fadeIn 0.8s ease-out backwards;
        }

        .quality-section:nth-child(1) { animation-delay: 0.1s; }
        .quality-section:nth-child(2) { animation-delay: 0.2s; }
        .quality-section:nth-child(3) { animation-delay: 0.3s; }
        .quality-section:nth-child(4) { animation-delay: 0.4s; }

        .quality-section:hover {
            transform: translateY(-10px);
            border-color: rgba(96, 165, 250, 0.6);
            box-shadow: 0 30px 60px rgba(59, 130, 246, 0.3);
        }

        .section-header {
            display: flex;
            align-items: center;
            gap: 30px;
            margin-bottom: 40px;
        }

        .section-icon {
            width: 100px;
            height: 100px;
            background: linear-gradient(135deg, #3b82f6 0%, #60a5fa 100%);
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 15px 40px rgba(59, 130, 246, 0.4);
            flex-shrink: 0;
        }

        .section-icon svg {
            width: 50px;
            height: 50px;
            stroke: white;
            fill: none;
            stroke-width: 2;
            stroke-linecap: round;
            stroke-linejoin: round;
        }

        .section-title-group h3 {
            font-size: 2em;
            color: #fff;
            margin-bottom: 10px;
        }

        .section-title-group .subtitle {
            font-size: 1.2em;
            color: #fff;
            font-weight: 500;
        }

        .content-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
            align-items: center;
        }

        .image-container {
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.4);
        }

        .image-container img {
            width: 100%;
            height: 350px;
            object-fit: cover;
            transition: transform 0.4s ease;
        }

        .quality-section:hover .image-container img {
            transform: scale(1.05);
        }

        .features-list {
            list-style: none;
        }

        .feature-item {
            background:white;
            border-left: 4px solid #3b82f6;
            padding: 20px 25px;
            margin-bottom: 20px;
            border-radius: 10px;
            transition: all 0.3s ease;
        }

        .feature-item:hover {
            background: white;
            transform: translateX(10px);
        }

        .feature-item strong {
            color: #60a5fa;
            font-size: 1.1em;
            display: block;
            margin-bottom: 8px;
        }

        .feature-item p {
            color: black;
            font-size: 1.05em;
            line-height: 1.7;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @media (max-width: 1024px) {
            .content-grid {
                grid-template-columns: 1fr;
            }

            .quality-section {
                padding: 40px;
            }

            .section-header {
                flex-direction: column;
                text-align: center;
            }
        }

        @media (max-width: 768px) {
            .hero h1 {
                font-size: 2.5em;
            }

            .hero p {
                font-size: 1.2em;
            }

            .quality-section {
                padding: 30px 20px;
            }

            .section-header {
                gap: 20px;
            }

            .section-icon {
                width: 80px;
                height: 80px;
            }

            .section-title-group h3 {
                font-size: 1.6em;
            }

            .image-container img {
                height: 250px;
            }
        }
        span#num {
    margin-left: 17px;
}
span#num1{
 margin-left: 0px;
}
    </style>
</head>
<body>
    <div class="hero">
        <div class="hero-content">
            <h1 > Uncompromising Quality & Precision Testing</h1>
            <p style="color:black;">Built for the World's Toughest Roads</p>
                    <p style="color:#1f2e4e;">Quality at <span class="lg">VORC</span> is more than a final check—it's our foundation. Every vehicle manufactured in our  facility undergoes a "Zero-Failure" protocol, meeting both Indian mandates and global quality benchmarks.</p>

        </div>
    </div>
<!-- 
    <div class="intro-section">
        <h2>Zero-Failure Protocol</h2>
        <p>Quality at VORC is more than a final check—it's our foundation. Every vehicle manufactured in our  facility undergoes a "Zero-Failure" protocol, meeting both Indian mandates and global quality benchmarks.</p>
    </div> -->

    <div class="sections-container">
        <div class="quality-section">
            <div class="section-header">
                <div class="section-icon">
                    <svg viewBox="0 0 24 24">
                        <path d="M12 2L2 7l10 5 10-5-10-5z"/>
                        <path d="M2 17l10 5 10-5M2 12l10 5 10-5"/>
                        <circle cx="12" cy="12" r="2"/>
                    </svg>
                </div>
                <div class="section-title-group">
                    <h3>Advanced Battery Safety</h3>
                    <p class="subtitle">AIS-156 Phase 2 Certified</p>
                </div>
            </div>

            <div class="content-grid">
                <div class="image-container">
                    <img src="vimage/DSC08302.JPG" alt="Battery Technology">
                </div>
                <ul class="features-list">
                    <li class="feature-item">
                        <strong>Thermal Propagation Shield</strong>
                        <p>Engineered to prevent cell-to-cell heat transfer for absolute fire safety.</p>
                    </li>
                    <li class="feature-item">
                        <strong>Audio-Visual Warnings</strong>
                        <p>Smart sensors provide instant driver alerts for any thermal anomalies.</p>
                    </li>
                    <li class="feature-item">
                        <strong>LFP Stability</strong>
                        <p>We exclusively use Lithium Ferro Phosphate (LFP) for superior performance in high-heat climates.</p>
                    </li>
                </ul>
            </div>
        </div>

        <div class="quality-section">
            <div class="section-header">
                <div class="section-icon">
                    <svg viewBox="0 0 24 24">
                        <path d="M12 2.69l5.66 5.66a8 8 0 1 1-11.31 0z"/>
                        <line x1="12" y1="8" x2="12" y2="12"/>
                        <line x1="12" y1="16" x2="12.01" y2="16"/>
                    </svg>
                </div>
                <div class="section-title-group">
                    <h3>All-Weather Resilience</h3>
                    <p class="subtitle">IP67 Rated Protection</p>
                </div>
            </div>

            <div class="content-grid">
                <ul class="features-list">
                    <li class="feature-item">
                        <strong>Waterproof Integrity</strong>
                        <p>Motor and battery systems are IP67 certified, designed to withstand 1-meter submersion and monsoon floods.</p>
                    </li>
                    <li class="feature-item">
                        <strong>Anti-Corrosive Armor</strong>
                        <p>Every Monocoque chassis features multi-stage coating for a 10+ year structural lifespan.</p>
                    </li>
                </ul>
                <div class="image-container">
                    <img src="vimage/1000300058.jpeg" alt="Weather Testing">
                </div>
            </div>
        </div>

        <div class="quality-section">
            <div class="section-header">
                <div class="section-icon">
                    <svg viewBox="0 0 24 24">
                        <path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/>
                    </svg>
                </div>
                <div class="section-title-group">
                    <h3>Structural Integrity & Torture Tests</h3>
                    <p class="subtitle">Proven Performance Standards</p>
                </div>
            </div>

            <div class="content-grid">
                <div class="image-container">
                    <img src="vimage/one.jpg" alt="Stress Testing">
                </div>
                <ul class="features-list">
                    <li class="feature-item">
                        <strong>10,000 km Field Trials</strong>
                        <p>Proven across city metros and rugged rural inclines before it reaches you.</p>
                    </li>
                    <li class="feature-item">
                        <strong>120% Stress Loading</strong>
                        <p>Tested beyond capacity to ensure the CV Shaft and frame handle heavy-duty commercial use effortlessly.</p>
                    </li>
                </ul>
            </div>
        </div>

        <div class="quality-section">
            <div class="section-header">
                <div class="section-icon">
                    <svg viewBox="0 0 24 24">
                        <rect x="3" y="11" width="18" height="11" rx="2" ry="2"/>
                        <path d="M7 11V7a5 5 0 0 1 10 0v4"/>
                        <circle cx="12" cy="16" r="1"/>
                    </svg>
                </div>
                <div class="section-title-group">
                    <h3>Digital Security</h3>
                    <p class="subtitle">Remote Immobilization Technology</p>
                </div>
            </div>

            <div class="content-grid">
                <ul class="features-list">
                    <li class="feature-item">
                        <strong>Total Asset Control</strong>
                        <p>Securely manage your fleet from anywhere via the <span class="lg">VORC</span> Connect cloud.</p>
                    </li>
                    <li class="feature-item">
                        <strong>Anti-Theft Protocol</strong>
                        <p>Instantly disable the powertrain in the event of unauthorized access, preventing the motor from restarting.</p>
                    </li>
                    <li class="feature-item">
                        <strong>Geofence Security</strong>
                        <p>Automatically receive alerts or trigger immobilization if the vehicle crosses pre-defined boundaries.</p>
                    </li>
                </ul>
                <div class="image-container">
                    <img src="https://images.unsplash.com/photo-1558494949-ef010cbdcc31?w=800&q=80" alt="Digital Security">
                </div>
            </div>
        </div>
    </div>
</section>

        <!-- About End -->

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
.mb-0 {
    margin-bottom: 13px !important;
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


        <!-- Fact Counter -->
         <!-- <div class="container-fluid fact bg-dark my-5 py-5">
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
</div> -->
        <!-- Fact Counter -->

        <!-- Features Start -->
        <!-- <div class="container-fluid feature py-5">
  <div class="container py-5">
    <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
      <h1 class="display-5 text-capitalize mb-3">Vehicle <span class="text-primary">Specifications</span></h1>
      <p class="mb-0">
        Experience cutting-edge performance and reliability with our advanced electric vehicle technology. 
        Designed for durability, power, and unmatched efficiency.
      </p>
    </div>

    <div class="row g-4 align-items-center">
      Left Features 
      <div class="col-xl-4">
        <div class="row gy-4 gx-0">
          <div class="col-12 wow fadeInUp" data-wow-delay="0.1s">
            <div class="feature-item">
              <div class="feature-icon">
                <span class="fa fa-bolt fa-2x"></span>
              </div>
              <div class="ms-4">
                <h5 class="mb-3">Best in Class IPM Motors</h5>
                <p class="mb-0">
                  World-class technology ensuring unmatched traction and power output for superior performance.
                </p>
              </div>
            </div>
          </div>

          <div class="col-12 wow fadeInUp" data-wow-delay="0.3s">
            <div class="feature-item">
              <div class="feature-icon">
                <span class="fa fa-car fa-2x"></span>
              </div>
              <div class="ms-4">
                <h5 class="mb-3">Rock-Solid Monocoque Chassis</h5>
                <p class="mb-0">
                  Built tough with a smooth ride and long-lasting durability for demanding conditions.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

    Center Image 
      <div class="col-lg-12 col-xl-4 wow fadeInUp" data-wow-delay="0.2s">
        <img src="g1.png" class="img-fluid w-100" style="object-fit: cover;height: 481px;" alt="Vehicle Image" >
      </div>

       Right Features 
      <div class="col-xl-4">
        <div class="row gy-4 gx-0">
          <div class="col-12 wow fadeInUp" data-wow-delay="0.1s">
            <div class="feature-item justify-content-end">
              <div class="text-end me-4">
                <h5 class="mb-3">Revolutionary CV Shaft</h5>
                <p class="mb-0">
                  Zero maintenance and maximum efficiency for consistent, high-performance transmission.
                </p>
              </div>
              <div class="feature-icon">
                <span class="fa fa-cogs fa-2x"></span>
              </div>
            </div>
          </div>

          <div class="col-12 wow fadeInUp" data-wow-delay="0.3s">
            <div class="feature-item justify-content-end">
              <div class="text-end me-4">
                <h5 class="mb-3">Next-Gen LFP Battery</h5>
                <p class="mb-0">
                  Built to last and engineered for safety, powered by an intelligent BMS for optimal performance.
                </p>
              </div>
              <div class="feature-icon">
                <span class="fa fa-battery-full fa-2x"></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> 
       Features End -->

        <!-- Car Steps Start -->
      
        <!-- Car Steps End -->

        <!-- Team Start -->
        
        <!-- Team End -->

        <!-- Banner Start -->
         <div class="container-fluid banner pb-5 wow zoomInDown" data-wow-delay="0.1s">
            <div class="container pb-5">
                <div class="banner-item rounded">
                    <img src="vimage/Vorc 108.png" class="img-fluid rounded w-100" alt="">
                    <div class="banner-content">
                        <h2 class="text-primary"><span class="lg">VORC</span> Motors</h2>
                        <h1 class="text-white">Passenger & Cargo Solutions</h1>
                        <p class="text-white">Experience power, style, and performance</p>
                        <div class="banner-btn">
                            <a href="https://wa.me/917845365222"
   target="_blank" class="btn btn-secondary rounded-pill py-3 px-4 px-md-5 me-2">WhatsApp</a>
                            <a href="#" class="btn btn-primary rounded-pill py-3 px-4 px-md-5 ms-2">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Banner End -->

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