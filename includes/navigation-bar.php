<?php

?>
<!-- Navigation -->
<nav class="navbar navbar-light bg-white navbar-expand-md sticky-top shadow-sm">
  <div class="container">
    <a class="navbar-brand" href="/">
      <img class="p-1" src="svg/ecomoran.svg" alt="" height="46">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>


    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link <?php if(isset($currentPage) && $currentPage == 'Home') echo 'active'; ?>" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php if(isset($currentPage) && $currentPage == 'Our Curriculum') echo 'active'; ?>" href="our-curriculum.php">Our Curriculum</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="our-stories.php">Our Stories</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              More
            </a>
            <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
              <li><a class="dropdown-item <?php if(isset($currentPage) && $currentPage == 'Contact Us') echo 'active'; ?>" href="contact-us" title="Contact Us">Contact Us</a></li>
              <li><a class="dropdown-item <?php if(isset($currentPage) && $currentPage == 'FAQs') echo 'active'; ?>" href="faqs" title="Frequently asked questions">FAQs</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item <?php if(isset($currentPage) && $currentPage == 'Get Involved') echo 'active'; ?>" href="get-involved">Get Involved</a></li>
              <li><a class="dropdown-item <?php if(isset($currentPage) && $currentPage == 'About Us') echo 'active'; ?>" href="about-us">About Us!</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>
<!-- Navigation -->