
<?php
session_start();

// view_product.php
include 'config.php'; 
// Adjust path if needed

// Fetch product details from the database
$product_id = $_GET['id']; // Assuming product ID is passed via URL
$query = "SELECT * FROM products WHERE id = $product_id";
$result = mysqli_query($conn, $query);
$product = mysqli_fetch_assoc($result);

// Fetch product images
$images = explode(',', $product['image']); // Assuming images are stored as comma-separated filenames


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
  <img src="vorclogo.jpg" alt="Logo" style="height:50px; width:auto;border-radius:8px;">
</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="fa fa-bars"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <div class="navbar-nav mx-auto py-0">
                              <a href="index.php" class="nav-item nav-link">Home</a>
    <a href="about.php" class="nav-item nav-link">About Us</a>
    <a href="dealers.php" class="nav-item nav-link">Dealership</a>
    <a href="products.php" class="nav-item nav-link">Our Vehicles</a>
   <a href="gallery.php" class="nav-item nav-link">Gallery</a>
                            <a href="contact.html" class="nav-item nav-link">Contact</a>
                        </div>
                        <a href="#" class="btn btn-primary rounded-pill py-2 px-4"> Enquire Now</a>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Navbar & Hero End -->

        <!-- Header Start -->
        <div class="container-fluid bg-breadcrumb">
            <div class="container text-center py-5" style="max-width: 900px;">
                <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Products</h4>
                <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active text-primary">Products</li>
                </ol>    
            </div>
        </div>
        <!-- Header End -->

        <!-- About Start -->
    


        <!-- About End -->

     <!-- About End -->
<style>

  section.product-hero.d-flex.justify-content-center.align-items-center.text-white {
    margin-top: 43px;
    padding-bottom: 47px;
}

  .vorc-section {

    color: #050505ff;
    border-radius: 20px;
    padding: 70px 20px;
   
}

.vorc-title {
    font-size: 42px;
    font-weight: 700;
    letter-spacing: 1px;
    text-transform: uppercase;
    color: #009cff; /* Electric green highlight */
}

.vorc-desc {
    max-width: 850px;
    font-size: 18px;
    line-height: 1.8;
    opacity: 0.9;
}

.vorc-section:hover {
    box-shadow: 0 15px 40px rgba(0,0,0,0.45);
    transition: 0.3s ease-in-out;
}

.vorc-title::after {
    content: '';
    width: 100px;
    height: 4px;
    background: #00e6a7;
    display: block;
    margin: 15px auto 0;
    border-radius: 2px;
}


  
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

  </style>


        <!-- Floating Action Bar -->
<div class="floating-bar">
  <a href="#" class="floating-btn">
    <i class="fas fa-car-side"></i>
    <span>Book Now</span>
  </a>

  <a href="#" class="floating-btn" id="openEnquiry">
    <i class="fas fa-phone-alt"></i>
    <span>Enquire Now</span>
  </a>

  <a href="https://wa.me/919876543210" target="_blank" class="floating-btn whatsapp">
    <i class="fab fa-whatsapp"></i>
  </a>
</div>

<!-- FontAwesome CDN -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">


  <!-- Overlay -->
  <div class="overlay" id="overlay"></div>

  <!-- Enquiry Panel -->
  <div class="enquiry-panel" id="enquiryPanel">
    <div class="enquiry-header">
      Enquire Now
      <span class="enquiry-close" id="closeEnquiry">&times;</span>
    </div>

    <div class="enquiry-body">
      <form>
        <div class="mb-3">
          <label class="form-label">Name *</label>
          <input type="text" class="form-control" placeholder="Enter your name" required>
        </div>

        <div class="mb-3">
          <label class="form-label">Mobile Number *</label>
          <input type="tel" class="form-control" placeholder="Enter your mobile number" required>
        </div>

        <div class="mb-3">
          <label class="form-label">Model *</label>
          <select class="form-select" required>
            <option value="">Select Model</option>
            <option>Pulsar N160</option>
            <option>Dominar 400</option>
            <option>Avenger 220</option>
            <option>CT 125X</option>
          </select>
        </div>

        <div class="mb-3">
          <label class="form-label">Location *</label>
          <input type="text" class="form-control" placeholder="Enter your location" required>
        </div>

        <div class="mb-3">
          <label class="form-label">Dealer</label>
          <input type="text" class="form-control" placeholder="Preferred Dealer">
        </div>

        <div class="mb-3">
          <label class="form-label">When do you plan to buy?</label>
          <select class="form-select">
            <option value="">Select</option>
            <option>Immediately</option>
            <option>Within 1 Month</option>
            <option>Within 3 Months</option>
            <option>Just Exploring</option>
          </select>
        </div>

        <button type="submit" class="btn btn-otp">Get OTP</button>

        <p class="form-footer">
          By clicking on Get OTP, you agree to our 
          <a href="#">T&C</a> and <a href="#">Privacy Policy</a>.
        </p>

        <!-- <div class="form-check mt-3">
          <input class="form-check-input" type="checkbox" value="" id="whatsappCheck">
          <label class="form-check-label small" for="whatsappCheck">
            Get updates on WhatsApp <i class="fab fa-whatsapp text-success"></i>
          </label>
        </div> -->
      </form>
    </div>
  </div>

  <script>
    const openBtn = document.getElementById('openEnquiry');
    const closeBtn = document.getElementById('closeEnquiry');
    const panel = document.getElementById('enquiryPanel');
    const overlay = document.getElementById('overlay');

    openBtn.addEventListener('click', (e) => {
      e.preventDefault();
      panel.classList.add('open');
      overlay.classList.add('active');
    });

    closeBtn.addEventListener('click', () => {
      panel.classList.remove('open');
      overlay.classList.remove('active');
    });

    overlay.addEventListener('click', () => {
      panel.classList.remove('open');
      overlay.classList.remove('active');
    });
  </script>

        <!-- Fact Counter -->
<style>
/* Section Base */
.pr {
  padding: 60px 0;
  background: #f9fafb;
}

/* Section Heading */
.heading-text-class {
  font-size: 2.2rem;
  font-weight: 700;
  color: #222;
  position: relative;
  display: inline-block;
      margin-left: 481px;
}

.heading-text-class::after {
  content: "";
  display: block;
  width: 80px;
  height: 3px;
  background: linear-gradient(90deg, #007bff, #00c6ff);
  margin: 10px auto 0;
  border-radius: 5px;
}

/* Product Slider */
.slider {
  display: flex;
  justify-content: center;
  align-items: stretch;
  gap: 25px;
}

/* Product Card */
.product-card {
  width: 100%;
  max-width: 340px;
  min-height: 440px;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  background: #fff;
  border-radius: 20px;
  box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
  transition: all 0.4s ease;
  overflow: hidden;
  border: 1px solid #e5e7eb;
}

.product-card:hover {
  transform: translateY(-8px);
  box-shadow: 0 15px 30px rgba(0, 0, 0, 0.12);
}

/* Image Section */
.product-card .img {
  width: 100%;
  height: 230px;
      margin-top: 34px;
  display: flex;
  justify-content: center;
  align-items: center;
  background: #f2f5f7;
  overflow: hidden;
  border-bottom: 1px solid #eee;
}

.product-card .img img {
  width: 100%;
  height: 100%;
  object-fit: contain;
  transition: transform 0.4s ease;
}

.product-card:hover .img img {
  transform: scale(1.05);
}

/* Card Content */
.product-card .content {
  flex-grow: 1;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  text-align: center;
  padding: 20px 15px 25px;
}

.product-card .title {
  font-size: 1.05rem;
  font-weight: 600;
  color: #333;
  line-height: 1.4;
  margin-bottom: 20px;
}

/* Read More Button */
.custom-btn {
  display: inline-block;
  background: linear-gradient(90deg, #007bff, #00c6ff);
  color: #fff;
  padding: 10px 22px;
  border-radius: 50px;
  font-weight: 500;
  text-decoration: none;
  box-shadow: 0 4px 12px rgba(0, 123, 255, 0.3);
  transition: all 0.3s ease;
}

.custom-btn:hover {
  background: linear-gradient(90deg, #0056b3, #008cff);
  box-shadow: 0 6px 18px rgba(0, 123, 255, 0.4);
  transform: translateY(-2px);
}

/* Carousel Styling */
.owl-stage {
  display: flex !important;
  align-items: stretch;
}

.owl-carousel .owl-item {
  display: flex;
  justify-content: center;
  align-items: stretch;
}

.owl-dots {
  margin-top: 25px;
  text-align: center;
}

.owl-dot span {
  width: 10px;
  height: 10px;
  background: #ccc;
  border-radius: 50%;
  display: inline-block;
  margin: 5px;
  transition: all 0.3s ease;
  
}

.owl-dot.active span {
  background: #007bff;
  width: 12px;
  height: 12px;
}
  .product-container {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
        }
        .product-container img {
            max-width: 500px;
            width: 100%;
            height: auto;
            margin-bottom: 20px;
        }

/* Responsive */
@media (max-width: 768px) {
  .product-card {
    max-width: 100%;
    min-height: 400px;
  }

  .product-card .img {
    height: 200px;
  }

  .product-card .title {
    font-size: 1rem;
  }

  .custom-btn {
    padding: 8px 18px;
    font-size: 0.9rem;
  }
}

.product-text {
    margin-left: 200px;   /* Left space */
    line-height: 1.5;    /* Tight spacing */
    font-size: 16px;
    color: #333;
    max-width: 800px;
}
<style>
.vehicle-card {
    border: 3px solid transparent;
    border-radius: 14px;
    background: linear-gradient(#fff, #fff) padding-box,
                linear-gradient(90deg, #009cff, #212d45) border-box;
    padding: 20px;
    margin-top: 20px;
}

.vehicle-title {
    font-size: 20px;
    font-weight: bold;
    color: #212d45;
    margin-bottom: 10px;
}

.vehicle-description {
    font-size: 15px;
    color: #444;
    margin-bottom: 12px;
}

.vehicle-type strong,
.vehicle-payload strong,
.vehicle-feature strong,
.vehicle-bestfor strong {
    color: #009cff;
}

.vehicle-type,
.vehicle-payload,
.vehicle-feature,
.vehicle-bestfor {
    font-size: 15px;
    margin-bottom: 6px;
}
</style>



        <!-- Fact Counter -->


<!-- Hero Section -->
<section class="product-hero d-flex justify-content-center align-items-center text-white">
    <h1 class="display-4"><?php echo htmlspecialchars($product['name']); ?></h1>
     
</section>


<div class="container product-container wow fadeInUp" data-wow-delay="0.1s">
    <!-- <h2 class="mb-4"><?php echo htmlspecialchars($product['name']); ?></h2> -->
    
    <!-- Product Image -->
    <img src="admin/uploads/<?php echo $product['image']; ?>" alt="<?php echo htmlspecialchars($product['name']); ?>">
<?php
// Clean content (if you still want to use $product['content'])
$content = trim($product['content']);
$content = preg_replace("/\n{2,}/", "\n", $content);
?>

<div class="vehicle-card">

    <h4 class="vehicle-title">
        <?php echo htmlspecialchars($product['title1']); ?>
    </h4>

    <p class="vehicle-description">
        <?php echo nl2br(htmlspecialchars($product['description1'])); ?>
    </p>

    <p class="vehicle-type">
        <strong>Vehicle Type:</strong> <?php echo htmlspecialchars($product['vehicle_type']); ?>
    </p>

    <p class="vehicle-payload">
        <strong>Payload:</strong> <?php echo htmlspecialchars($product['payload1']); ?>
    </p>

    <p class="vehicle-feature">
        <strong>Key Feature:</strong> <?php echo htmlspecialchars($product['key_feature']); ?>
    </p>

    <p class="vehicle-bestfor">
        <strong>Best For:</strong> <?php echo htmlspecialchars($product['best_for']); ?>
    </p>

</div>



    <!-- Download Button -->
 <?php if (!empty($product['brochure'])): ?>
    <a href="admin/uploads/<?php echo $product['brochure']; ?>" 
       class="btn btn-primary btn-lg mt-3" 
       download>
       Download Brochure
    </a>
<?php else: ?>
    <p class="text-muted mt-3">No brochure available</p>
<?php endif; ?>

</div>


<div class="container py-5">
    <div class="row">
        <div class="col-md-6">
            <!-- Product Images Carousel -->
            <!-- <div id="productCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <?php foreach ($images as $index => $image): ?>
                        <div class="carousel-item <?php echo $index === 0 ? 'active' : ''; ?>">
                            <img src="../admin/uploads/<?php echo $image; ?>" class="d-block w-100" alt="Product Image">
                        </div>
                    <?php endforeach; ?>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#productCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#productCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div> -->
        </div>
        <!-- Specifications Section -->
<!-- Specifications Section -->
<!-- Specifications Section -->
<!-- Specifications Section -->
<div class="specifications-section py-5 wow fadeInUp" data-wow-delay="0.2s">
  <div class="container">
    <h3 class="text-white fw-bold mb-4">Product Specifications</h3>

    <!-- Accordion -->
    <div class="accordion" id="specAccordion">

      <!-- Performance -->
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingPerf">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsePerf">
            Performance
          </button>
        </h2>
        <div id="collapsePerf" class="accordion-collapse collapse" data-bs-parent="#specAccordion">
          <div class="accordion-body">
            <ul>
              <?php if ($product['gradeability']) echo "<li><strong>Gradeability:</strong> {$product['gradeability']}</li>"; ?>
              <?php if ($product['top_speed']) echo "<li><strong>Top Speed:</strong> {$product['top_speed']}</li>"; ?>
              <?php if ($product['true_range']) echo "<li><strong>True Range:</strong> {$product['true_range']}</li>"; ?>
            </ul>
          </div>
        </div>
      </div>

      <!-- Vehicle Details -->
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingVehicle">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseVehicle">
            Vehicle Details
          </button>
        </h2>
        <div id="collapseVehicle" class="accordion-collapse collapse" data-bs-parent="#specAccordion">
          <div class="accordion-body">
            <ul>
              <?php if ($product['name']) echo "<li><strong>Name:</strong> {$product['name']}</li>"; ?>
              <?php if ($product['type']) echo "<li><strong>Type:</strong> {$product['type']}</li>"; ?>
              <?php if ($product['vehicle_category']) echo "<li><strong>Vehicle Category:</strong> {$product['vehicle_category']}</li>"; ?>
            </ul>
          </div>
        </div>
      </div>

      <!-- Payload & Volume -->
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingPayload">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsePayload">
            Payload & Volume
          </button>
        </h2>
        <div id="collapsePayload" class="accordion-collapse collapse" data-bs-parent="#specAccordion">
          <div class="accordion-body">
            <ul>
              <?php if ($product['payload']) echo "<li><strong>Payload:</strong> {$product['payload']}</li>"; ?>
              <?php if ($product['volume']) echo "<li><strong>Volume:</strong> {$product['volume']}</li>"; ?>
            </ul>
          </div>
        </div>
      </div>

      <!-- Dimensions & Weight -->
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingDimensions">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseDimensions">
            Dimensions & Weight
          </button>
        </h2>
        <div id="collapseDimensions" class="accordion-collapse collapse" data-bs-parent="#specAccordion">
          <div class="accordion-body">
            <ul>
              <?php if ($product['kerb_weight']) echo "<li><strong>Kerb Weight:</strong> {$product['kerb_weight']}</li>"; ?>
              <?php if ($product['gross_vehicle_weight']) echo "<li><strong>Gross Vehicle Weight:</strong> {$product['gross_vehicle_weight']}</li>"; ?>
              <?php if ($product['tray_dimensions']) echo "<li><strong>Tray Dimensions:</strong> {$product['tray_dimensions']}</li>"; ?>
              <?php if ($product['box_dimensions']) echo "<li><strong>Box Dimensions:</strong> {$product['box_dimensions']}</li>"; ?>
            </ul>
          </div>
        </div>
      </div>

      <!-- Battery & Charging -->
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingBattery">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseBattery">
            Battery & Charging
          </button>
        </h2>
        <div id="collapseBattery" class="accordion-collapse collapse" data-bs-parent="#specAccordion">
          <div class="accordion-body">
            <ul>
              <?php if ($product['battery']) echo "<li><strong>Battery:</strong> {$product['battery']}</li>"; ?>
              <?php if ($product['charging_time']) echo "<li><strong>Charging Time:</strong> {$product['charging_time']}</li>"; ?>
            </ul>
          </div>
        </div>
      </div>

      <!-- Torque & Power -->
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingTorque">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTorque">
            Torque & Power
          </button>
        </h2>
        <div id="collapseTorque" class="accordion-collapse collapse" data-bs-parent="#specAccordion">
          <div class="accordion-body">
            <ul>
              <?php if ($product['peak_power']) echo "<li><strong>Peak Power:</strong> {$product['peak_power']}</li>"; ?>
              <?php if ($product['peak_torque']) echo "<li><strong>Peak Torque:</strong> {$product['peak_torque']}</li>"; ?>
              <?php if ($product['max_torque']) echo "<li><strong>Max Torque:</strong> {$product['max_torque']}</li>"; ?>
            </ul>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>

<!-- Styles -->
<style>
.specifications-section {
  background: linear-gradient(135deg, #0f2027, #203a43, #2c5364);
}
.accordion-item {
  background: transparent;
  border: none;
  border-bottom: 1px solid rgba(255,255,255,0.2);
}
.accordion-button {
  background: transparent;
  color: #fff;
  font-weight: 600;
  box-shadow: none;
}
.accordion-button:focus {
  box-shadow: none;
}
.accordion-button::after {
  filter: invert(1);
}
.accordion-body {
  background: transparent;
  color: #f1f1f1;
}
.accordion-body ul {
  list-style: none;
  padding: 0;
  margin: 0;
}
.accordion-body li {
  padding: 6px 0;
  border-bottom: 1px dashed rgba(255,255,255,0.1);
}
.accordion-body li:last-child {
  border-bottom: none;
}
</style>




<style>
    /* EMI Section */
.emi-section { background: #fff; color: #111; border-radius: 12px; padding: 40px; margin-top: 60px; box-shadow: 0 5px 20px rgba(0,0,0,0.2); }
.emi-section h4 { color: #111; font-weight: bold; }
.emi-section h2 { color: #2b3de6; font-weight: bold; }
.emi-section h5 { color: #111; }
.form-range::-webkit-slider-thumb { background: #f7c17b; }
.form-range::-moz-range-thumb { background: #f7c17b; }
.book-btn { background: rgba(15, 15, 15, 1); color: #fff; font-weight: bold; border: none; transition: 0.3s; }
.book-btn:hover { background: rgba(20, 19, 19, 1); transform: translateY(-3px); }
    </style>

</div>
</div>
</div>
    <!-- EMI Calculator -->
    <div class="emi-section  wow fadeInUp" data-wow-delay="0.1s"">
        <h4 class="text-center mb-4">Calculate Your EMI</h4>
        <div class="row align-items-center">
            
            <!-- Left: Sliders -->
            <div class="col-md-6">
                <!-- Amount -->
                <label class="fw-bold">Amount</label>
                <input type="range" class="form-range" id="loanAmount" min="10000" max="500000" step="1000" value="<?= $product['price'] ?>">
                <div class="d-flex justify-content-between"><span>₹10,000</span><span>₹5 Lakh</span></div>
                <h5 class="text-center mt-2"><strong id="amountLabel">₹<?= number_format($product['price']) ?></strong></h5>

                <!-- Tenure -->
                <label class="fw-bold mt-4">Payment Period</label>
                <input type="range" class="form-range" id="tenure" min="12" max="72" step="6" value="24">
                <div class="d-flex justify-content-between"><span>12 Months</span><span>72 Months</span></div>
                <h5 class="text-center mt-2"><strong id="tenureLabel">24 Months</strong></h5>

                <!-- Interest -->
                <label class="fw-bold mt-4">Interest Rate</label>
                <input type="range" class="form-range" id="interestRate" min="8" max="20" step="0.5" value="10">
                <div class="d-flex justify-content-between"><span>8%</span><span>20%</span></div>
                <h5 class="text-center mt-2"><strong id="interestLabel">10%</strong></h5>
            </div>

            <!-- Right: Results -->
            <div class="col-md-6 text-center">
                <h5>Total Amount Payable:</h5>
                <h2 class="fw-bold" id="totalPayable">₹0</h2>

                <div class="row mt-4">
                    <div class="col-6">
                        <div class="p-3 border rounded">
                            <h6>Down Payment:</h6>
                            <h5 class="fw-bold" id="downPayment">₹0</h5>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="p-3 border rounded bg-light">
                            <h6>Monthly EMI:</h6>
                            <h5 class="fw-bold text-success" id="emiResult">₹0</h5>
                        </div>
                    </div>
                </div>

<!-- <button class="btn book-btn mt-4 px-5 py-2" 
                onclick="window.location.href='booknow.php?vehicle_id=<?= $product['id'] ?>'">
            Book Now →
        </button> -->
        <a href="booknow.php?id=<?= $product['id'] ?>" class="btn book-btn">
  Book Now →
</a>

            </div>
        </div>
    </div>



        <!-- Features Start -->
  
        <!-- Features End -->

        <!-- Car Steps Start -->
       <div class="container-fluid steps py-5" style="background: linear-gradient(120deg, #0a1a3a, #19376d);">
  <div class="container py-5">
    <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
      <h1 class="display-5 text-capitalize text-white mb-3">
        VORC<span class="text-primary"> Booking Process</span>
      </h1>
      <p class="mb-0 text-white">
        Experience a simple and transparent process to own your electric 3-wheeler. 
        From selection to doorstep delivery, VORC Motors ensures a smooth, reliable, and eco-friendly ride every step of the way.
      </p>
    </div>

    <div class="row g-4">
      <!-- Step 1 -->
      <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
        <div class="steps-item p-4 mb-4">
          <h4>Explore Our Models</h4>
          <p class="mb-0">
            Browse our range of electric 3-wheelers — Cargo, Passenger, and Pick-Up. 
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

        <!-- Team Start -->
          
        <!-- Team End -->

        <!-- Banner Start -->
         <div class="container-fluid banner pb-5 wow zoomInDown" data-wow-delay="0.1s">
            <div class="container pb-5">
                <div class="banner-item rounded">
                    <img src="wb.png" class="img-fluid rounded w-100" alt="">
                    <div class="banner-content">
                        <h2 class="text-primary">VORC Motors</h2>
                        <h1 class="text-white"> Passenger & Cargo Solutions</h1>
                        <p class="text-white">Experience power, style, and performance</p>
                        <div class="banner-btn">
                            <a href="#" class="btn btn-secondary rounded-pill py-3 px-4 px-md-5 me-2">WhatsApp</a>
                            <a href="#" class="btn btn-primary rounded-pill py-3 px-4 px-md-5 ms-2">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Banner End -->

        <!-- Footer Start -->
        <div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.2s">
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
                            <a href="#"><i class="fas fa-angle-right me-2"></i>Home</a>
                            <a href="#"><i class="fas fa-angle-right me-2"></i>About Us</a>
                            <a href="#"><i class="fas fa-angle-right me-2"></i> Dealership</a>
                            <a href="#"><i class="fas fa-angle-right me-2"></i> Products</a>
                            <a href="#"><i class="fas fa-angle-right me-2"></i> Register</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="text-white mb-4">Business Hours</h4>
                            <div class="mb-3">
                                <h6 class="text-muted mb-0">Mon - Friday:</h6>
                                <p class="text-white mb-0">09.00 am to 07.00 pm</p>
                            </div>
                            <div class="mb-3">
                                <h6 class="text-muted mb-0">Saturday:</h6>
                                <p class="text-white mb-0">10.00 am to 05.00 pm</p>
                            </div>
                            <div class="mb-3">
                                <h6 class="text-muted mb-0">Vacation:</h6>
                                <p class="text-white mb-0">All Sunday is our vacation</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="text-white mb-4">Contact Info</h4>
                            <!-- <a href="#"><i class="fa fa-map-marker-alt me-2"></i> 123 Street, New York, USA</a> -->
                            <a href="mailto:info@example.com"><i class="fas fa-envelope me-2"></i>admin@vorcmotors.com</a>
                            <a href="tel:+012 345 67890"><i class="fas fa-phone me-2"></i>Sales: +91 95005 11821</a>
                            <a href="tel:+012 345 67890" class="mb-3"><i class="fas fa-phone me-2"></i> Service: +91 95005 11434</a>
                            <div class="d-flex">
                                <a class="btn btn-secondary btn-md-square rounded-circle me-3" href="https://www.facebook.com/vorcmotors"><i class="fab fa-facebook-f text-white"></i></a>
                                <a class="btn btn-secondary btn-md-square rounded-circle me-3" href="https://www.youtube.com/@VORCMotorsPvtLtd"><i class="fab fa-youtube text-white"></i></a>
                                <a class="btn btn-secondary btn-md-square rounded-circle me-3" href="https://www.instagram.com/vorcmotorspvtltd/"><i class="fab fa-instagram text-white"></i></a>
                                <!-- <a class="btn btn-secondary btn-md-square rounded-circle me-0" href=""><i class="fab fa-linkedin-in text-white"></i></a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->
        
        <!-- Copyright Start -->
        <div class="container-fluid copyright py-4">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-md-6 text-center text-md-start mb-md-0">
                        <span class="text-body"><a href="#" class="border-bottom text-white"><i class="fas fa-copyright text-light me-2"></i>vorc motors</a>, All right reserved.</span>
                    </div>
                    <div class="col-md-6 text-center text-md-end text-body">
                        <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                        <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                        <!--/*** you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". ***/-->
                        Designed By <a class="border-bottom text-white" href="https://htmlcodex.com">vorc motors</a>
                    </div>
                </div>
            </div>
        </div>
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
