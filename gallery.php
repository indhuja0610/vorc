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
        <!-- <div class="container-fluid bg-breadcrumb">
            <div class="container text-center py-5" style="max-width: 900px;">
                <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s"></h4>
                <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                                   </ol>    
            </div>
        </div> -->
        <!-- Header End -->
<style>
  #he {
  font-size: 75px;
  margin-top: 89px;
  font-weight: 600;
  text-align: center;
  color: #009cff;
}
  </style>
        <h1 id="he">Gallery</h1>

        <!-- Contact Start -->
     <div class="container">

	<h1 class="heading"></span></h1>

	<div class="gallery">
<!-- 
		<div class="gallery-item">
			<img class="gallery-image" src="vimage/gallery1.png" alt="person writing in a notebook beside by an iPad, laptop, printed photos, spectacles, and a cup of coffee on a saucer">
		</div>

		<div class="gallery-item">
			<img class="gallery-image" src="vimage/gallery4.png" alt="sunset behind San Francisco city skyline">
		</div> -->

		<div class="gallery-item">
			<img class="gallery-image" src="vimage/gl1.png" alt="people holding umbrellas on a busy street at night lit by street lights and illuminated signs in Tokyo, Japan">
		</div>

		<div class="gallery-item">
			<img class="gallery-image" src="vimage/gl2.png" alt="car interior from central back seat position showing driver and blurred view through windscreen of a busy road at night">
		</div>

		<div class="gallery-item">
			<img class="gallery-image" src="vimage/gl3.png" alt="back view of woman wearing a backpack and beanie waiting to cross the road on a busy street at night in New York City, USA">
		</div>

		<div class="gallery-item">
			<img class="gallery-image" src="vimage/gl4.png" alt="man wearing a black jacket, white shirt, blue jeans, and brown boots, playing a white electric guitar while sitting on an amp">
		</div>
        	<div class="gallery-item">
			<img class="gallery-image" src="vimage/gl5.png" alt="man wearing a black jacket, white shirt, blue jeans, and brown boots, playing a white electric guitar while sitting on an amp">
		</div>
        	<div class="gallery-item">
			<img class="gallery-image" src="vimage/gl6.png" alt="man wearing a black jacket, white shirt, blue jeans, and brown boots, playing a white electric guitar while sitting on an amp">
		</div>
    <div class="gallery-item">
			<img class="gallery-image" src="vimage/gl7.png" alt="man wearing a black jacket, white shirt, blue jeans, and brown boots, playing a white electric guitar while sitting on an amp">
		</div>
    <div class="gallery-item">
			<img class="gallery-image" src="vimage/gl8.png" alt="man wearing a black jacket, white shirt, blue jeans, and brown boots, playing a white electric guitar while sitting on an amp">
		</div>
    <div class="gallery-item">
			<img class="gallery-image" src="vimage/gl9.png" alt="man wearing a black jacket, white shirt, blue jeans, and brown boots, playing a white electric guitar while sitting on an amp">
		</div>
      <div class="gallery-item">
			<img class="gallery-image" src="vimage/gallery9.JPG" alt="man wearing a black jacket, white shirt, blue jeans, and brown boots, playing a white electric guitar while sitting on an amp">
		</div>

	</div>

</div>

<style>

    

.footer {
    background: var(--bs-dark);
    margin-top: 99px;
}
.heading {
	font-family: "Montserrat", Arial, sans-serif;
	font-size: 4rem;
	font-weight: 500;
	line-height: 1.5;
	text-align: center;
	padding: 3.5rem 0;
	color: #1a1a1a;
}

.heading span {
	display: block;
}

.gallery {
	display: flex;
	flex-wrap: wrap;
	/* Compensate for excess margin on outer gallery flex items */
	margin: -1rem -1rem;
}

.gallery-item {
	/* Minimum width of 24rem and grow to fit available space */
	flex: 1 0 24rem;
	/* Margin value should be half of grid-gap value as margins on flex items don't collapse */
	margin: 1rem;
	box-shadow: 0.3rem 0.4rem 0.4rem rgba(0, 0, 0, 0.4);
	overflow: hidden;
}

.gallery-image {
	display: block;
	width: 100%;
	height: 100%;
	object-fit: cover;
	transition: transform 400ms ease-out;
}

.gallery-image:hover {
	transform: scale(1.15);
}

/*

The following rule will only run if your browser supports CSS grid.

Remove or comment-out the code block below to see how the browser will fall-back to flexbox styling. 

*/

@supports (display: grid) {
	.gallery {
		display: grid;
		grid-template-columns: repeat(auto-fit, minmax(24rem, 1fr));
		grid-gap: 2rem;
	}

	.gallery,
	.gallery-item {
		margin: 0;
	}
}

    </style>


        <!-- Contact End -->

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
