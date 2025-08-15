<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Univs</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
    <!-- In resources/views/layouts/app.blade.php or similar -->
  <link rel="stylesheet" href="{{ asset('style.css') }}?v=2">
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('image/favi.webp') }}" />
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('image/favi.webp') }}" />
    <link rel="shortcut icon" href="{{ asset('image/favi.webp') }}" />
    <link rel="stylesheet" href="/css/style.css?v=20250811">
<script src="/js/app.js?v=20250811"></script>
</head>
<body>
  <div class="alert headerTop alert-success m-0 rounded-0 alertP" role="alert">
  <div class="container d-flex flex-wrap justify-content-between align-items-center">

    <!-- Toggler button visible only on mobile -->
    <button class="navbar-toggler d-md-none" type="button" data-bs-toggle="collapse" data-bs-target="#alertCollapse" aria-controls="alertCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Collapsible content -->
    <div class="collapse d-md-flex flex-wrap justify-content-between align-items-center w-100" id="alertCollapse">
      <div class="me-auto d-flex align-items-center mb-2 mb-md-0">
        <svg width="15" fill="#fff" class="me-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
          <path d="M48 64c-26.5 0-48 21.5-48 48 0 15.1 7.1 29.3 19.2 38.4l208 156c17.1 12.8 40.5 12.8 57.6 0l208-156c12.1-9.1 19.2-23.3 19.2-38.4 0-26.5-21.5-48-48-48L48 64zM0 196L0 384c0 35.3 28.7 64 64 64l384 0c35.3 0 64-28.7 64-64l0-188-198.4 148.8c-34.1 25.6-81.1 25.6-115.2 0L0 196z"/>
        </svg>
        <a href="mailto:info@univs.com" class="text-white text-decoration-underline">info@univs.com</a>
      </div>
      <div class="d-flex gap-3 flex-wrap mb-2 mb-md-0">
        <a href="https://portal.univs.com/login" class="btn btn-sm btn-light">Student Login</a>
        <a href="https://portal.univs.com/agent-login" class="btn btn-sm btn-outline-light">Agent Login</a>
      </div>
      <a href="https://portal.univs.com/cart" class="ms-3 d-flex align-items-center">
        <svg width="15" fill="#fff" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
          <path d="M24-16C10.7-16 0-5.3 0 8S10.7 32 24 32l45.3 0c3.9 0 7.2 2.8 7.9 6.6l52.1 286.3c6.2 34.2 36 59.1 70.8 59.1L456 384c13.3 0 24-10.7 24-24s-10.7-24-24-24l-255.9 0c-11.6 0-21.5-8.3-23.6-19.7l-5.1-28.3 303.6 0c30.8 0 57.2-21.9 62.9-52.2L568.9 69.9C572.6 50.2 557.5 32 537.4 32l-412.7 0-.4-2c-4.8-26.6-28-46-55.1-46L24-16zM208 512a48 48 0 1 0 0-96 48 48 0 1 0 0 96zm224 0a48 48 0 1 0 0-96 48 48 0 1 0 0 96z"/>
        </svg>
      </a>
    </div>
  </div>
</div>
<nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom">
  <div class="container-fluid d-lg-none">
    <!-- Logo -->
    <a class="navbar-brand univImg" href="https://univs.in/app/">
      <img src="{{ asset('image/univs.webp') }}" alt="Logo" />
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mainNavbar">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="https://portal.univs.com/shop">Shop</a></li>
        <li class="nav-item"><a class="nav-link" href="#">About Us</a></li>
      </ul>
        <div class="d-flex gap-3 flex-wrap mb-2 mb-md-0 d-lg-none">
        <a href="https://portal.univs.com/login" class="btn btn-sm btn-light">Student Login</a>
        <a href="https://portal.univs.com/agent-login" class="btn btn-sm btn-outline-dark">Agent Login</a>
      </div>
    </div>
  </div>
  <div class="container d-none d-lg-flex">
    <!-- Logo -->
    <a class="navbar-brand univImg" href="https://univs.in/app/">
      <img src="{{ asset('image/univs.webp') }}" alt="Logo" />
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mainNavbar">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="https://portal.univs.com/shop">Shop</a></li>
        <li class="nav-item"><a class="nav-link" href="#">About Us</a></li>
      </ul>
        <div class="d-flex gap-3 flex-wrap mb-2 mb-md-0 d-lg-none">
        <a href="https://portal.univs.com/login" class="btn btn-sm btn-light">Student Login</a>
        <a href="https://portal.univs.com/agent-login" class="btn btn-sm btn-outline-dark">Agent Login</a>
      </div>
    </div>
  </div>
</nav>
<section class="firstSection overflow-hidden py-3">
  <div class="container px-4 my-5 text-center">
    <h1 class="display-5 fw-bold text-body-emphasis mb-3">Univs Application Portal</h1>
    <div class="col-12 col-md-8 col-lg-6 mx-auto">
      <p class="mb-4">Univs.com — the official portal to effortlessly track your university application, get real-time updates, and access post-admission support. It's easy, fast, and completely transparent, designed with students in mind.</p>
      <div class="d-grid gap-2 d-sm-flex justify-content-sm-center flex-wrap">
        <a href="https://portal.univs.com/login" class="btn btn-primary p-2 me-sm-2 mb-2 mb-sm-0">Student Login</a>
        <a href="https://portal.univs.com/agent-login" class="btn btn-outline-secondary p-2 me-sm-2 mb-2 mb-sm-0">Agent Login</a>
      </div>
    </div>
  </div>
</section>
<section class="secondSection overflow-hidden py-5 bg-body-tertiary">
  <div class="container col-xl-10 col-xxl-8 px-4">
    <form class="p-4 border rounded-3 bg-white">
      <h3 class="mb-3 text-center helpTitle">Need Help? <span>We will contact you shortly</span></h3>
      <div class="row g-3 mb-4">
        <div class="col-12 col-sm-6 col-md-3">
          <div class="form-floating">
            <input type="text" class="form-control" id="name" placeholder="Name" />
            <label for="name">Name</label>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-3">
          <div class="form-floating">
            <input type="email" class="form-control" id="email" placeholder="Email" />
            <label for="email">Email</label>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-3">
          <div class="form-floating">
            <input type="tel" class="form-control" id="phone" placeholder="Phone" />
            <label for="phone">Phone</label>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-3">
          <div class="form-floating">
            <select class="form-select" id="programSelect">
              <option selected disabled>Select Program</option>
              <option value="MBBS">MBBS</option>
              <option value="BDS">BDS</option>
              <option value="MSc IT">MSc IT</option>
              <option value="MBA">MBA</option>
            </select>
            <label for="programSelect">Program</label>
          </div>
        </div>
      </div>
      <div class="text-center">
        <button type="submit" class="btn btn-primary px-5">Submit</button>
      </div>
    </form>
  </div>
</section>
<section class="thirdSection overflow-hidden py-5 bg-lite">
  <div class="container">
    <div class="text-center mb-5">
      <h3 class="fw-bold">Offering The Best In Education To The World</h3>
    </div>
    <div class="row g-4">
      <div class="col-12 col-md-6 col-lg-3">
        <div class="card h-100 text-center shadow-lg border-0 py-2">
          <img src="https://portal.univs.com/assets/landing-pages/assets-one/images/poststudy.png" class="card-img-top mx-auto" style="width: 40px; margin-top: 20px;" alt="University Application" />
          <div class="card-body">
            <h3 class="card-title">University Application</h3>
            <p class="card-text">Easily Apply to Top Universities Worldwide with Step-by-Step Updates.</p>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-3">
        <div class="card h-100 text-center shadow-lg border-0  py-2">
          <img src="https://portal.univs.com/assets/landing-pages/assets-one/images/jobmarket.png" class="card-img-top mx-auto" style="width: 40px; margin-top: 20px;" alt="Post Application Services" />
          <div class="card-body">
            <h3 class="card-title">Post Application Services</h3>
            <p class="card-text">Get Support for Visas, Accommodation, and Everything after Admission.</p>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-3">
        <div class="card h-100 text-center shadow-lg border-0  py-2">
          <img src="https://portal.univs.com/assets/landing-pages/assets-one/images/programs.png" class="card-img-top mx-auto" style="width: 40px; margin-top: 20px;" alt="Range of Programs" />
          <div class="card-body">
            <h3 class="card-title">Range of Programs</h3>
            <p class="card-text">Explore Diverse Programs in Medicine, Engineering, Business, Arts, and More.</p>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-3">
        <div class="card h-100 text-center shadow-lg border-0  py-2">
          <img src="https://portal.univs.com/assets/landing-pages/assets-one/images/scholarship.png" class="card-img-top mx-auto" style="width: 40px; margin-top: 20px;" alt="Application Update" />
          <div class="card-body">
            <h3 class="card-title">Application Update</h3>
            <p class="card-text">Get Automated Updates as your Application Progresses and Admission is Completed.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="fourthSection overflow-hidden py-5 bg-light">
  <div class="container">
    <div class="text-center mb-4">
      <h3 class="fw-bold">Top Universities</h3>
      <p class="text-muted">Our partner universities offering world-class education in Georgia</p>
    </div>
    <div class="univ-carousel">
      <div class="d-flex align-items-center justify-content-center univImg">
        <img src="https://univs.com/wp-content/uploads/2024/11/Alte-University-UNIV-LTD-e1704686655939.webp" style="width: 150px;" alt="Alte University" />
      </div>
      <div class="d-flex  align-items-center justify-content-center univImg">
        <img src="https://univs.com/wp-content/uploads/2024/10/Caucasus-University-UNIV-LTD.png" style="width: 150px;" alt="Caucasus University" />
      </div>
      <div class="d-flex  align-items-center justify-content-center univImg">
        <img src="https://univs.com/wp-content/uploads/2024/10/Georgian-National-University-SEU-UNIV-LTD-e1705383906482.webp" style="width: 150px;" alt="Georgian National University" />
      </div>
      <div class="d-flex  align-items-center justify-content-center univImg">
        <img src="https://univs.com/wp-content/uploads/2024/10/Ilia-State-University-UNIV-LTD.png" style="width: 150px;" alt="Ilia State University" />
      </div>
      <div class="d-flex  align-items-center justify-content-center univImg">
        <img src="https://univs.com/wp-content/uploads/2024/10/University-of-Georgia-UNIV-LTD.webp" style="width: 150px;" alt="University of Georgia" />
      </div>
    </div>
  </div>
</section>
<section class="fifthSection overflow-hidden pt-4">
  <div class="container">

    <!-- Section 1 -->
    <div class="row align-items-center fifthSec gy-4">
      <div class="col-12 col-md-6">
        <h3 class="fw-bold mb-3">Why Choose Univs.com</h3>
        <p>Univs.com is your one-stop platform for University Admissions. We offer expert guidance, exclusive partnerships with top universities, and a seamless application experience—completely free for students!</p>
      </div>
      <div class="col-12 col-md-6">
        <div class="card border-0 shadow-sm h-100">
          <img src="{{ asset('image/studygeorgia.jpg') }}" alt="studygeorgia" />
        </div>
      </div>
    </div>
    <div class="row align-items-center mb-5 gy-4">
      <div class="col-12 col-md-6 order-md-2">
        <h3 class="fw-bold mb-4">Benefits of Choosing Univs.com</h3>
        <p>The Portal of Univs.com Offers an Easy Login, One-Click Registration, Real-Time Application Tracking, Personalized Dashboards for Students and Agents, Secure Access, Direct Communication for Support, and Seamless Navigation to the Main Site.</p>
      </div>
      <div class="col-12 col-md-6 order-md-1">
        <div class="card h-100">
          <img src="{{ asset('image/uni.jpg') }}" alt="study" />
        </div>
      </div>
    </div>
  </div>
</section>
<section class="sixthSection overflow-hidden py-lg-3">
  <div class="container">
    <div class="row text-center univCard">
      <div class="col-md-4">
        <div class="card border-0 shadow-sm bg-custom p-4">
          <div class="d-flex align-items-center justify-content-center">
            <img src="{{ asset('/image/graduation.png') }}" alt="graduation" width="40" class="me-3">
            <div>
              <span class="counter" data-target="100">0</span><span>+</span>
              <p class="mb-0">Universities</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card border-0 shadow-sm bg-custom1 p-4">
          <div class="d-flex align-items-center justify-content-center">
            <img src="{{ asset('/image/nomad-visa.png') }}" alt="graduation" width="40" class="me-3">
            <div>
              <span class="counter" data-target="95">0</span><span>%</span>
              <p class="mb-0">Visa Success</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card border-0 shadow-sm bg-custom2 p-4">
          <div class="d-flex align-items-center justify-content-center">
            <img src="{{ asset('/image/graduate.png') }}" alt="graduation" width="40" class="me-3">
            <div>
              <span class="counter" data-target="5000">0</span><span>+</span>
              <p class="mb-0">Students</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="contactus-section overflow-hidden py-0">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6 mb-lg-4 mb-md-0">
        <img src="https://portal.univs.com/assets/landing-pages/assets-one/images/contactus.jpg" alt="Contact Us" class="img-fluid w-100">
      </div>
      <div class="col-md-6 ctf">
        <form class="contact-form" action="https://portal.univs.com/web-to-lead-tracking" method="POST">
          <input type="hidden" name="wl_staff" value="1">
          <input type="hidden" name="wl_staff_branch" value="1">
          <h4 class="fw-bold mb-1">Book Free Counseling</h4>
          <p class="mb-4">Share your details to get a callback from our team.</p>
          <div class="mb-3">
            <input type="text" id="wl_first_name" name="wl_first_name" class="form-control" placeholder="Name*" required>
          </div>
          <div class="mb-3">
            <input type="email" id="wl_email" name="wl_email" class="form-control" placeholder="Email*" required>
          </div>
          <div class="mb-3 d-flex">
            <select class="form-select me-2" name="wl_dialcode" id="wl_dialcode" style="width: 70px;">
              <option value="91">91</option>
              <option value="1">1</option>
              <option value="44">44</option>
              <option value="971">971</option>
            </select>
            <input type="text" name="wl_mobile" id="wl_mobile" class="form-control" placeholder="Mobile No.*" required>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
</section>
<footer class="bg-light overflow-hidden border-top py-0 pt-5">
  <div class="container">
    <div class="row">
      <!-- Column 1 -->
      <div class="col-6 col-md-2 mb-3">
        <h5>Links</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-1"><a href="https://univs.in/app/" class="nav-link p-0 text-muted">Home</a></li>
          <li class="nav-item"><a href="https://portal.univs.com/shop" class="nav-link p-0 text-muted">Shop</a></li>
        </ul>
      </div>

      <!-- Column 2 -->
      <div class="col-6 col-md-2 mb-3">
        <h5>Support</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-1"><a href="#" class="nav-link p-0 text-muted">Help Center</a></li>
        </ul>
      </div>

      <!-- Column 3 -->
      <div class="col-6 col-md-2 mb-3">
        <h5>Company</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-1"><a href="#" class="nav-link p-0 text-muted">About Us</a></li>
          <li class="nav-item"><a href="#" class="nav-link p-0 text-muted">Careers</a></li>
        </ul>
      </div>

      <!-- Newsletter -->
      <div class="col-md-5 offset-md-1">
        <a class="navbar-brand mb-2 d-block" href="https://univs.in/app/">
            <img src="https://univs.in/app/image/univs.webp" alt="Logo" width="130">
        </a>
        <div>
        <div class="me-auto d-flex align-items-center">
          <svg width="15" fill="#0e6bd3" class="me-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M48 64c-26.5 0-48 21.5-48 48 0 15.1 7.1 29.3 19.2 38.4l208 156c17.1 12.8 40.5 12.8 57.6 0l208-156c12.1-9.1 19.2-23.3 19.2-38.4 0-26.5-21.5-48-48-48L48 64zM0 196L0 384c0 35.3 28.7 64 64 64l384 0c35.3 0 64-28.7 64-64l0-188-198.4 148.8c-34.1 25.6-81.1 25.6-115.2 0L0 196z"/></svg> <a href="mailto:info@univs.com" class="text-decoration-underline">info@univs.com</a>
        </div>
      </div>
    </div>
    <div class="d-flex flex-column flex-sm-row justify-content-between pt-1 mt-4 border-top">
      <p class="my-1 text-muted">©2025, Univs Portal. All rights reserved.</p>
      <ul class="list-unstyled d-flex">
        <li class="ms-3"><a class="text-muted" href="#"><i class="bi bi-instagram"></i></a></li>
        <li class="ms-3"><a class="text-muted" href="#"><i class="bi bi-facebook"></i></a></li>
        <li class="ms-3"><a class="text-muted" href="#"><i class="bi bi-twitter"></i></a></li>
      </ul>
    </div>
  </div>
</footer>
</body>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
  $(document).ready(function(){
    $('.univ-carousel').slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  arrows: false,
  dots: true,
  infinite: true,
  autoplay: true,
  autoplaySpeed: 3000,
  adaptiveHeight: false, // disable adaptive height to keep fixed height
  responsive: [
    {
      breakpoint: 992,
      settings: {
        slidesToShow: 2
      }
    },
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 1
      }
    }
  ]
});

  });
  const counters = document.querySelectorAll('.counter');
  const speed = 100;

  const animateCounter = (counter) => {
    const updateCount = () => {
      const target = +counter.getAttribute('data-target');
      const count = +counter.innerText;
      const increment = Math.ceil(target / speed);

      if (count < target) {
        counter.innerText = count + increment;
        setTimeout(updateCount, 20);
      } else {
        counter.innerText = target;
      }
    };
    updateCount();
  };

  const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        const counter = entry.target;
        animateCounter(counter);
        observer.unobserve(counter); // Run only once
      }
    });
  }, { threshold: 0.5 });

  counters.forEach(counter => observer.observe(counter));
</script>

</html>
