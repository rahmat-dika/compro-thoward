<!DOCTYPE html>
<html lang="en" class="no-js">
  <head>
    <title>Sternics Company</title>
    <link
      rel="shortcut icon"
      href="{{ asset('assets/images/Sternics-sm.png') }}"
      type="image/x-icon"
    />

    <!-- meta tags -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="view-transition" content="same-origin" />
    <meta name="theme-color" content="Red" />
    <meta property="og:site_name" content="Consulo" />
    <meta
      property="og:url"
      content="https://themeforest.net/user/spreethemes/portfolio"
    />
    <meta property="og:title" content="Creative Business Consulting Template" />
    <meta
      property="og:description"
      content="A versatile HTML template designed for corporate entities and professional businesses."
    />
    <meta
      name="description"
      content="Consulo is a creative business consulting Bootstrap 5 template designed for corporate entities and professional businesses."
    />

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    />
    
    <!-- all css -->
    <link rel="stylesheet" href="{{ asset("assets/css/vendor.css") }}" />
    <style>
      @font-face {
        font-family: 'HeroesFont';
        /* src: url('fonts/HeroesFont.ttf') format('truetype'); */
        src: url('fonts/MiSansLatin-Semibold.ttf') format('truetype');
        font-weight: normal;
        font-style: normal;
      }

      @font-face {
        font-family: 'BodyFont';
        src: url('fonts/MiSansLatin-Medium.ttf') format('truetype');
        font-weight: normal;
        font-style: normal;
      }

      body {
        font-family: 'BodyFont';
      }

      .header-hover:hover {
        background-color:#0c0d0d;
      }

      .header-sc {
        --header-radius: 0;
        --color-background: rgba(0, 0, 0, 0);
        --color-foreground: rgba(255, 255, 255, 1);
        --color-primary-hover: rgba(255, 255, 255, 0.6);
        --color-border: rgba(255, 255, 255, 0.2);
        --style-border-width: 1px;
        background: var(--color-background);
        border-bottom: var(--style-border-width) solid var(--color-border); }
        
      .header-sc .menu-open {
        --color-foreground: rgb(0, 0, 0); }

      .header-sc.header-floating:hover,
      .header-sc.header-sticky.scrolled-past-header {
        --color-secondary-button-hover-border: rgba(255, 255, 255, 0.3);
        --color-background: #0c0d0d;
        border-bottom: var(--style-border-width) solid rgba(255, 255, 255, 0); }
        
      .contact-card {
        background: transparent;
        border: 2px solid #d3b469;
        border-radius: 18px;
        padding: 45px 35px;
        text-align: center;
        transition: all 0.3s ease;
        height: 100%;
      }

      /* Hover effect halus */
      .contact-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 10px 30px rgba(211, 180, 105, 0.25);
      }

      /* Icon */
      .contact-card .icon {
        width: 65px;
        height: 65px;
        background: #d3b469;
        color: #ffffff;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 25px;
        font-size: 26px;
      }

      /* Title */
      .contact-card h3 {
        font-size: 20px;
        margin-bottom: 18px;
        color: #d3b469;
        font-weight: 600;
      }

      /* Text */
      .contact-card p {
        font-size: 15.5px;
        line-height: 1.8;
        color: #333;
      }

      .socmed-grid {
        list-style: none;
        padding: 0;
        margin: 0;

        display: grid;
        grid-template-columns: repeat(2, 1fr); /* 2 kolom */
        gap: 16px; /* jarak antar logo */
        justify-items: center;
      }

      .socmed-grid li a img {
        width: 32px;          /* lebih kecil dari 40px */
        height: auto;
        transition: transform 0.2s ease;
      }

      .socmed-grid li a:hover img {
        transform: scale(1.1);
      }
      
      :root {
        /* Typography */
        --font-body--family: "Montserrat", sans-serif;
        --font-body--style: normal;
        --font-body--weight: 400;

        --font-heading--family: "Montserrat", sans-serif;
        --font-heading--style: normal;
        --font-heading--weight: 600;

        --font-button--family: "Montserrat", sans-serif;
        --font-button--style: normal;
        --font-button--weight: 600;

        /* h1-h6 */
        --font-h1--size: 60px;
        --font-h2--size: 48px;
        --font-h3--size: 36px;
        --font-h4--size: 24px;
        --font-h5--size: 20px;
        --font-h6--size: 16px;

        /* header nav */
        --font-nav-main: 16px;

        /* Colors */
        /* --color-background: rgba(255, 255, 255, 1);
        --color-foreground: rgb(10, 12, 16);
        --color-foreground-heading: rgba(28, 37, 57, 1);
        --color-foreground-subheading: rgba(93, 102, 111, 1);
        --color-background-subheading: rgba(255, 255, 255, 0.1);
        --color-border-subheading-bg: rgba(32, 40, 45, 0.1);
        --color-primary: rgba(28, 37, 57, 1);
        --color-primary-background: rgba(28, 37, 57, 1);
        --color-primary-hover: rgba(28, 37, 57, 1);
        --color-primary-background-hover: rgba(28, 37, 57, 1);
        --color-border: rgba(255, 255, 255, 0.3);
        --color-border-hover: rgba(93, 102, 111, 0.5);
        --color-shadow: rgba(0, 0, 0, 1);
        --color-overlay: rgba(28, 37, 57, 0.6); */

        --color-background: rgba(255, 255, 255, 1);
        --color-foreground: rgb(9, 10, 13);
        --color-foreground-heading: rgb(14, 17, 23);
        --color-foreground-subheading: rgba(93, 102, 111, 1);
        --color-background-subheading: rgba(255, 255, 255, 0.1);
        --color-border-subheading-bg: rgba(32, 40, 45, 0.1);
        --color-primary: rgba(14, 17, 23);
        --color-primary-background: rgba(14, 17, 23);
        --color-primary-hover: rgba(14, 17, 23);
        --color-primary-background-hover: rgb(0, 0, 0);
        --color-border: rgba(255, 255, 255, 0.3);
        --color-border-hover: rgba(93, 102, 111, 0.5);
        --color-shadow: rgba(0, 0, 0, 1);
        --color-overlay: rgba(0, 0, 0, 0.6);

        /* Buttons */
        --font-button-size: 16px;
        --font-button-size-mobile: 16px;
        --style-button-height: 56px;
        --style-button-height-mobile: 48px;
        --style-button-slim-height: 52px;
        --style-button-slim-height-mobile: 40px;
        --style-cta-underline-offset: 5px;
        --style-cta-underline-thickness: 1px;

        /* Colors - Primary Button */
        --color-primary-button-text: rgba(255, 255, 255, 1);
        --color-primary-button-background: rgba(32, 40, 45, 1);
        --color-primary-button-border: rgba(32, 40, 45, 1);
        --color-primary-button-icon: rgba(28, 37, 57, 1);
        --color-primary-button-icon-background: rgba(255, 255, 255, 1);

        --color-primary-button-hover-text: rgba(32, 40, 45, 1);
        --color-primary-button-hover-background: rgb(255, 255, 255, 1);
        --color-primary-button-hover-border: rgb(32, 40, 45, 1);
        --color-primary-button-hover-icon: rgba(255, 255, 255, 1);
        --color-primary-button-hover-icon-background: rgba(28, 37, 57, 1);

        /* Colors - Secondary Button */
        --color-secondary-button-text: rgba(32, 40, 45, 1);
        --color-secondary-button-background: rgba(255, 255, 255, 1);
        --color-secondary-button-border: rgba(255, 255, 255, 1);
        --color-secondary-button-icon: rgba(255, 255, 255, 1);
        --color-secondary-button-icon-background: rgba(32, 40, 45, 1);

        --color-secondary-button-hover-text: rgba(255, 255, 255, 1);
        --color-secondary-button-hover-background: rgba(32, 40, 45, 1);
        --color-secondary-button-hover-border: rgba(32, 40, 45, 1);
        --color-secondary-button-hover-icon: rgba(28, 37, 57, 1);
        --color-secondary-button-hover-icon-background: rgba(255, 255, 255, 1);

        /* Colors - Input */
        --color-input-background: rgba(255, 255, 255, 1);
        --color-input-text: rgba(93, 102, 111, 1);
        --color-input-border: rgba(93, 102, 111, 0.2);
        --color-input-hover-background: rgba(255, 255, 255, 1);
        --color-input-hover-text: rgba(93, 102, 111, 1);
        --color-input-hover-border: rgba(93, 102, 111, 0.2);

        /* Borders */
        --style-border-width-buttons-primary: 1px;
        --style-border-width-buttons-secondary: 1px;
        --style-border-radius-buttons-primary: 40px;
        --style-border-radius-buttons-secondary: 40px;

        --style-border-width-inputs: 1px;
        --style-border-radius-inputs: 8px;
        --style-border-width: 1px;

        /* Focus */
        --focus-outline-width: 1px;
        --focus-outline-offset: 3px;

        /* Pagination */
        --style-pagination-border-width: 1px;
        --pagination-item-foreground: rgba(28, 37, 57, 1);
        --pagination-item-background: rgba(242, 242, 242, 1);
        --pagination-item-border: rgba(242, 242, 242, 1);
        --pagination-item-active-foreground: rgba(255, 255, 255, 1);
        --pagination-item-active-background: rgba(28, 37, 57, 1);
        --pagination-item-active-border: rgba(28, 37, 57, 1);

        /* Swiper */
        --swiper-navigation-size: 16px;
        --swiper-navigation-color: rgba(255, 255, 255, 1);
        --swiper-navigation-background-color: transparent;
        --swiper-navigation-hover-color: rgba(255, 255, 255, 1);
        --swiper-navigation-hover-background-color: rgba(255, 255, 255, 0.15);
        --swiper-pagination-bullet-inactive-color: rgba(242, 242, 242);
        --swiper-pagination-color: rgba(28, 37, 57, 1);
        --swiper-pagination-bullet-inactive-opacity: 1;
      }

      @media (max-width: 767px) {
        :root {
          --font-h1--size: 48px;
          --font-h2--size: 40px;
          --font-h3--size: 28px;
          --font-h4--size: 20px;
          --font-h5--size: 18px;
        }
      }
    </style>
    <link rel="stylesheet" href="{{ asset("assets/css/style.css") }}" />
  </head>

  <body>
    <!-- Header 1 -->
    <sticky-header data-sticky-type="always">
      <header class="header-sc header-floating">
        <div class="container-fluid">
          <div class="header-grid">
            <a class="header-logo" href={{ url('/') }} aria-label="Sternics">
              <img
                src="{{ asset('assets/images/Sternics-logo-front.png') }}"
                alt="Sternics Logo"
                width="189"
                height="32"
              />
            </a>
            <drawer-menu>
              <nav class="header-nav drawer-menu">
                <div class="d-lg-none header-nav-headings">
                  <a class="header-logo" href="{{ url('/') }}" aria-label="Sternics">
                    <img
                      src="{{ asset('assets/images/Sternics-black.png') }}"
                      alt="Sternics Logo"
                      width="189"
                      height="32"
                      loading="lazy"
                    />
                  </a>
                  <drawer-opener
                    class="svg-wrapper menu-close"
                    data-drawer=".drawer-menu"
                  >
                    <svg
                      width="30px"
                      height="30px"
                      viewBox="0 0 24 24"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M8.00386 9.41816C7.61333 9.02763 7.61334 8.39447 8.00386 8.00395C8.39438 7.61342 9.02755 7.61342 9.41807 8.00395L12.0057 10.5916L14.5907 8.00657C14.9813 7.61605 15.6144 7.61605 16.0049 8.00657C16.3955 8.3971 16.3955 9.03026 16.0049 9.42079L13.4199 12.0058L16.0039 14.5897C16.3944 14.9803 16.3944 15.6134 16.0039 16.0039C15.6133 16.3945 14.9802 16.3945 14.5896 16.0039L12.0057 13.42L9.42097 16.0048C9.03045 16.3953 8.39728 16.3953 8.00676 16.0048C7.61624 15.6142 7.61624 14.9811 8.00676 14.5905L10.5915 12.0058L8.00386 9.41816Z"
                        fill="currentColor"
                      />
                      <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M23 12C23 18.0751 18.0751 23 12 23C5.92487 23 1 18.0751 1 12C1 5.92487 5.92487 1 12 1C18.0751 1 23 5.92487 23 12ZM3.00683 12C3.00683 16.9668 7.03321 20.9932 12 20.9932C16.9668 20.9932 20.9932 16.9668 20.9932 12C20.9932 7.03321 16.9668 3.00683 12 3.00683C7.03321 3.00683 3.00683 7.03321 3.00683 12Z"
                        fill="currentColor"
                      />
                    </svg>
                  </drawer-opener>
                </div>
                <ul class="header-menu list-unstyled">
                  <li class="nav-item">
                    <a class="menu-link menu-link-main" href="{{ url("/") }}" style="color: #d3b469">
                      Home
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="menu-link menu-link-main" href="{{ url("/product") }}" style="color: #d3b469">
                      Product
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="menu-link menu-link-main" href="{{ url("/about") }}" style="color: #d3b469">
                      About Us
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="menu-link menu-link-main" href="{{ url("/contact") }}" style="color: #d3b469">
                      <b>Contact</b>
                    </a>
                  </li>
                </ul>
              </nav>
            </drawer-menu>
            <drawer-opener
                class="svg-wrapper menu-open d-lg-none"
                data-drawer=".drawer-menu"
              >
                <svg
                  width="52"
                  height="52"
                  viewBox="0 0 52 52"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <circle
                    cx="26"
                    cy="26"
                    r="25.5"
                    fill="white"
                    stroke="currentColor"
                  />
                  <path
                    d="M32.5 18.2857C32.5 17.5757 31.9179 17 31.2 17H14.3C13.5821 17 13 17.5757 13 18.2857C13 18.9958 13.5821 19.5714 14.3 19.5714H31.2C31.9179 19.5714 32.5 18.9957 32.5 18.2857ZM14.3 24.7143H37.7C38.4179 24.7143 39 25.29 39 26C39 26.7101 38.4179 27.2857 37.7 27.2857H14.3C13.5821 27.2857 13 26.7101 13 26C13 25.29 13.5821 24.7143 14.3 24.7143ZM14.3 32.4286H26C26.7179 32.4286 27.3 33.0042 27.3 33.7143C27.3 34.4243 26.7179 35 26 35H14.3C13.5821 35 13 34.4243 13 33.7143C13 33.0042 13.5821 32.4286 14.3 32.4286Z"
                    fill="currentColor"
                  />
                </svg>
              </drawer-opener>
          </div>
        </div>
      </header>
    </sticky-header>

    <!-- Main -->
    <main>
      <!-- Page Banner -->
      <div class="page-banner">
        <picture class="media media-bg">
          <source
            media="(max-width: 575px)"
            srcset="{{ asset('assets/images/contactImg.png') }}"
          />
          <source
            media="(max-width: 991px)"
            srcset="{{ asset('assets/images/contactImg.png') }}"
          />
          <img
            src="{{ asset('assets/images/contactImg.png') }}"
            width="1920"
            height="520"
            loading="eager"
            alt="Page Banner Image"
          />
        </picture>
        <div class="page-banner-content">
          <div class="container text-center">
            <h1 class="heading text-60 fw-700" data-aos="fade-up" style="color: #D1B36F; font-family: 'HeroesFont';">
              Contact Us
            </h1>
          </div>
        </div>
      </div>

      <!-- Contact -->
      <div class="image-text mt-60" style="background-color:#0c0d0d">
        <div class="container">
          <div class="text-center multicolumn-header section-headings">
            <div style="padding-top: 80px">

              <!-- Title -->
              <h2 class="heading text-25" data-aos="fade-up" style="color:#d3b469;">
                Contact Us
              </h2>
              <p class="text text-16" data-aos="fade-up" style="margin-bottom: 60px; color:white">
                We are happy to assist you. Please feel free to reach out to us for any questions,
                business inquiries, or further information.
              </p>

              <!-- Cards -->
              <div class="pb-5 row justify-content-center gx-4">

                <!-- Address Card -->
                <div class="mb-4 col-12">
                  <div class="contact-card" data-aos="fade-up">
                    <div class="icon">
                      <i class="fa-solid fa-location-dot"></i>
                    </div>
                    <h3 style="color: white">Company Address</h3>
                    <p style="color: white">
                      <strong>Sternics Company</strong><br>
                      Jl. Raya Perjuangan, Kebon Jeruk<br>
                      Jakarta Barat, Indonesia
                    </p>
                  </div>
                </div>

                <!-- Contact Card -->
                <div class="mb-4 col-12">
                  <div class="contact-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon">
                      <i class="fa-solid fa-phone"></i>
                    </div>
                    <h3 style="color: white">Contact</h3>
                    <p style="color: white">
                      Phone : (021) 1234-5678<br>
                      Mobile : +62 812-3456-7890
                    </p>
                  </div>
                </div>

                <!-- Office Hour Card -->
                <div class="mb-4 col-12">
                  <div class="contact-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="icon">
                      <i class="fa-solid fa-clock"></i>
                    </div>
                    <h3 style="color: white">Office Hour</h3>
                    <p style="color: white">
                      Monday – Friday<br>
                      09.00 – 17.00 WIB
                    </p>
                  </div>
                </div>

              </div>
            </div>
          </div>

          <div class="row align-items-center">
            <div class="col-12">
              <div class="row">
                <hr style="color: white; margin-top: 70px">
                <div class="col-6">
                  <img
                    src="{{ asset('assets/images/Sternics-logo-front.png') }}"
                    alt="Logo Sternics"
                    style="width: 60%; margin-top: 20px"
                  />
                  <h4 class="heading text-15" style="color:#d3b469; margin-top: 30px">
                    Office Hours
                  </h4>
                  <div class="text text-16" style="margin-bottom: 20px; color: white">
                    Monday - Friday 09.00 - 17.00 WIB
                  </div>
                </div>
                <div class="col-6" style="margin-bottom: 100px">
                  <div class="row">
                    <div class="col-4">
                      <h4 class="heading text-15" style="color:#d3b469; margin-top: 70px">
                        Products
                      </h4>
                      <div class="text text-16" style="margin-top: 20px;">
                        <ul style="list-style: none; padding: 0; margin: 0; ">
                          <li style="margin-bottom: 8px;">
                            <a
                              href="{{ url("list-product?id=DashCam") }}"
                              class="link"
                              aria-label="Dash Cam"
                              style="color: #ffffff; text-decoration: none;"
                            >
                              Dash Cam
                            </a>
                          </li>
                          <li style="margin-bottom: 8px;">
                            <a
                              href="{{ url("list-product?id=SmartBoard") }}"
                              class="link"
                              aria-label="Smart Board"
                              style="color: #ffffff; text-decoration: none;"
                            >
                              Smart Board
                            </a>
                          </li>
                          <li style="margin-bottom: 8px;">
                            <a
                              href="{{ url("list-product?id=EvCharger") }}"
                              class="link"
                              aria-label="EV Charger"
                              style="color: #ffffff; text-decoration: none;"
                            >
                              EV Charger
                            </a>
                          </li>
                          <li style="margin-bottom: 8px;">
                            <a
                              href="{{ url("list-product?id=LaptopPB") }}"
                              class="link"
                              aria-label="Laptop Power Bank"
                              style="color: #ffffff; text-decoration: none;"
                            >
                              Laptop Power Bank
                            </a>
                          </li>
                          <li style="margin-bottom: 8px;">
                            <a
                              href="{{ url("list-product?id=DongleAcc") }}"
                              class="link"
                              aria-label="Dongle & Accessories"
                              style="color: #ffffff; text-decoration: none;"
                            >
                              Dongle & Accessories
                            </a>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class="col-4">
                      <h4 class="heading text-15" style="color:#d3b469; margin-top: 70px">
                        Information
                      </h4>
                      <div class="text text-16" style="margin-top: 20px;">
                        <ul style="list-style: none; padding: 0; margin: 0; ">
                          <li style="margin-bottom: 8px;">
                            <a
                              href="{{ url("/about") }}"
                              class="link"
                              aria-label="About"
                              style="color: #ffffff; text-decoration: none;"
                            >
                              About
                            </a>
                          </li>
                          <li style="margin-bottom: 8px;">
                            <a
                              href="{{ url("/contact") }}"
                              class="link"
                              aria-label="Contact"
                              style="color: #ffffff; text-decoration: none;"
                            >
                              Contact
                            </a>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class="col-4">
                      <h4 class="heading text-15" style="color:#d3b469; margin-top: 70px">
                        Socmed & Marketplace
                      </h4>
                      <div class="col-12 col-md-6 col-lg-6">
                        <ul class="mt-2 footer-menu footer-policies socmed-grid">
                          <li>
                            <a href="https://www.instagram.com/sternics.co?igsh=aHQ1NGF0Zm1rY2Zl" target="_blank" aria-label="Instagram">
                              <img src="{{ asset('assets/images/logo/ig.png') }}" alt="Instagram">
                            </a>
                          </li>
                        </ul>
                      </div>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

    <!-- Footer -->
    <footer>
      <!-- Footer Main -->
      <div
        class="bg-contain footer-main"
        style="background-image: url(assets/img/footer/footer-bg-large.jpg)"
      >
        <div class="footer-bottom" style="background-color: #0c0d0d;">
          <div class="container">
            <div class="row footer-bottom-row">
              <div class="col-12 col-md-6 col-lg-6">
                <div class="footer-copyright text text-16">
                  Copyright ©<span class="current-year"></span> Sternics. All
                  rights reserved.
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-6">
                <ul class="footer-menu footer-policies list-unstyled">
                  <li>
                    <img src="{{ asset('assets/images/ic_sternics_1x.svg') }}" alt="Sternics logo" style="width: 100px; margin-top: 15px">
                  </li>
                  <li>
                    <img src="{{ asset('assets/images/ic_thoward_1x.svg') }}" alt="Thoward logo" style="width: 100px">
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <!-- Modal and Drawer Overlay -->
    <drawer-opener id="drawer-overlay"></drawer-opener>

    <!-- Scroll to Top Button -->
    <scroll-top>
      <div class="scroll-to-top">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          fill="none"
          viewBox="0 0 24 24"
          stroke-width="1.5"
          stroke="currentColor"
        >
          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            d="m4.5 15.75 7.5-7.5 7.5 7.5"
          />
        </svg>
      </div>
    </scroll-top>

    <!-- all js -->
    <script src="assets/js/vendor.js" defer></script>
    <script src="assets/js/main.js" defer></script>
  </body>
</html>
