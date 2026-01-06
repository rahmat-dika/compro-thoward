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
    <meta property="og:site_name" content="Sternics" />
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
      content="Sternics is a creative business consulting Bootstrap 5 template designed for corporate entities and professional businesses."
    />

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />

    <!-- all css -->
    <link rel="stylesheet" href="{{ asset("assets/css/vendor.css") }}" />
    <style>
      @font-face {
        font-family: 'HeroesFont';
        /* src: url('fonts/PlateiaBold.ttf') format('truetype'); */
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
      <header class="header-sc header-floating header-hover">
        <div class="container-fluid">
          <div class="header-grid header-hover">
            <a class="header-logo" href={{ url('/') }} aria-label="Sternics">
              <img
                src="{{ asset('assets/images/Sternics-logo-front.png') }}"
                alt="Sternics Logo"
                width="189"
                height="32"
              />
            </a>
            <drawer-menu>
              <nav class="header-nav drawer-menu" style="border: none">
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
                      <b>Home</b>
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
                      Contact
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
      <!-- Hero Banner -->
      <div class="hero-slider with-floating-header with-fixed-bg">
        <div class="slider-card overlay">
          <picture class="slider-media">
            <source
              media="(max-width: 575px)"
              srcset="{{ asset('assets/images/hero-img.jpg') }}"
            />
            <source
              media="(max-width: 991px)"
              srcset="{{ asset('assets/images/hero-img.jpg') }}"
            />
            <img
              src="{{ asset('assets/images/hero-img.jpg') }}"
              width="1920"
              height="1000"
              loading="eager"
              alt="Hero Image"
            />
          </picture>
          <div class="slider-content">
            <div
              class="container text-center height-100 d-flex align-items-center justify-content-center"
            >
              <div class="content-box section-headings">
                
                <h2
                  class="heading text-65 fw-600"
                  data-aos="fade-up"
                  data-aos-delay="100"
                  style="color: #d3b469; font-family: 'HeroesFont';"
                  {{-- style="color: #d3b469" --}}
                >
                  Electric & Digital Tech Solution
                </h2>
                <div
                  class="text text-18"
                  data-aos="fade-up"
                  data-aos-delay="200"
                  style="margin-top: 40px"
                  {{-- style="color: #D1B36F" --}}
                >
                  We provide a comprehensive range of electrical and digital technology to enhance convenience, efficiency, and connectivity in both personal and professional environments.
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Running Logo -->
      <div class="running-content mt-100">
        <div class="content-inner">
          <div class="content-lists running-animation">
            <div class="content-item">
              <div class="content-link" style="width: 150px">
                <img
                  src="{{ asset('assets/images/Sternics-gold.png') }}"
                  width="100"
                  loading="lazy"
                  alt="Brand Image"
                />
              </div>
              <div class="content-link" style="width: 150px">
                <img
                  src="{{ asset('assets/images/Sternics-black.png') }}"
                  width="100"
                  loading="lazy"
                  alt="Brand Image"
                />
              </div>
              <div class="content-link" style="width: 150px">
                <img
                  src="{{ asset('assets/images/Sternics-gold.png') }}"
                  width="100"
                  loading="lazy"
                  alt="Brand Image"
                />
              </div>
              <div class="content-link" style="width: 150px">
                <img
                  src="{{ asset('assets/images/Sternics-black.png') }}"
                  width="100"
                  loading="lazy"
                  alt="Brand Image"
                />
              </div>
              <div class="content-link" style="width: 150px">
                <img
                  src="{{ asset('assets/images/Sternics-gold.png') }}"
                  width="100"
                  loading="lazy"
                  alt="Brand Image"
                />
              </div>
              <div class="content-link" style="width: 150px">
                <img
                  src="{{ asset('assets/images/Sternics-black.png') }}"
                  width="100"
                  loading="lazy"
                  alt="Brand Image"
                />
              </div>
              <div class="content-link" style="width: 150px">
                <img
                  src="{{ asset('assets/images/Sternics-gold.png') }}"
                  width="100"
                  loading="lazy"
                  alt="Brand Image"
                />
              </div>
              <div class="content-link" style="width: 150px">
                <img
                  src="{{ asset('assets/images/Sternics-black.png') }}"
                  width="100"
                  loading="lazy"
                  alt="Brand Image"
                />
              </div>
              <div class="content-link" style="width: 150px">
                <img
                  src="{{ asset('assets/images/Sternics-gold.png') }}"
                  width="100"
                  loading="lazy"
                  alt="Brand Image"
                />
              </div>
              <div class="content-link" style="width: 150px">
                <img
                  src="{{ asset('assets/images/Sternics-black.png') }}"
                  width="100"
                  loading="lazy"
                  alt="Brand Image"
                />
              </div>
              <div class="content-link" style="width: 150px">
                <img
                  src="{{ asset('assets/images/Sternics-gold.png') }}"
                  width="100"
                  loading="lazy"
                  alt="Brand Image"
                />
              </div>
              <div class="content-link" style="width: 150px">
                <img
                  src="{{ asset('assets/images/Sternics-black.png') }}"
                  width="100"
                  loading="lazy"
                  alt="Brand Image"
                />
              </div>
              <div class="content-link" style="width: 150px">
                <img
                  src="{{ asset('assets/images/Sternics-gold.png') }}"
                  width="100"
                  loading="lazy"
                  alt="Brand Image"
                />
              </div>
              <div class="content-link" style="width: 150px">
                <img
                  src="{{ asset('assets/images/Sternics-black.png') }}"
                  width="100"
                  loading="lazy"
                  alt="Brand Image"
                />
              </div>
              <div class="content-link" style="width: 150px">
                <img
                  src="{{ asset('assets/images/Sternics-gold.png') }}"
                  width="100"
                  loading="lazy"
                  alt="Brand Image"
                />
              </div>
              <div class="content-link" style="width: 150px">
                <img
                  src="{{ asset('assets/images/Sternics-black.png') }}"
                  width="100"
                  loading="lazy"
                  alt="Brand Image"
                />
              </div>
              <div class="content-link" style="width: 150px">
                <img
                  src="{{ asset('assets/images/Sternics-gold.png') }}"
                  width="100"
                  loading="lazy"
                  alt="Brand Image"
                />
              </div>
              <div class="content-link" style="width: 150px">
                <img
                  src="{{ asset('assets/images/Sternics-black.png') }}"
                  width="100"
                  loading="lazy"
                  alt="Brand Image"
                />
              </div>
              <div class="content-link" style="width: 150px">
                <img
                  src="{{ asset('assets/images/Sternics-gold.png') }}"
                  width="100"
                  loading="lazy"
                  alt="Brand Image"
                />
              </div>
              <div class="content-link" style="width: 150px">
                <img
                  src="{{ asset('assets/images/Sternics-black.png') }}"
                  width="100"
                  loading="lazy"
                  alt="Brand Image"
                />
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Commitment about us -->
      <div class="image-text mt-100">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-6 col-12">
              <div class="media-wrap" data-aos="zoom-in-up">
                <img
                  src="{{ asset('assets/images/charge-vehicle.png') }}"
                  width="992"
                  height="863"
                  loading="lazy"
                  alt="Image"
                  style="
                    background: linear-gradient(90deg, #D1B36F, #fff8d2);
                    -webkit-background-clip: text;
                    -webkit-text-fill-color: transparent;
                  "
                />
              </div>
            </div>
            <div class="col-lg-6 col-12">
              <div class="content section-headings">
                <h2
                  class="heading text-30"
                  data-aos="fade-up"
                  style="color: #bd9c4f; font-family: 'HeroesFont';"
                >
                  Driving the future of digital technology.
                </h2>
                <div
                  class="text text-18"
                  data-aos="fade-up"
                >
                  Sternics aims to be a trusted partner in advancing technology for a smarter and more connected future.
                </div>
                <ul class="text-lists list-unstyled">
                  <li
                    class="text-item text text-18"
                    data-aos="fade-up"
                  >
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="28"
                      height="28"
                      viewBox="0 0 28 28"
                      fill="none"
                    >
                      <g clip-path="url(#clip0_9088_5324)">
                        <path
                          fill-rule="evenodd"
                          clip-rule="evenodd"
                          d="M8.81362 13.0268C8.34112 12.7113 7.70994 12.783 7.31911 13.196C6.92886 13.6084 6.89211 14.2431 7.23336 14.6975L10.7334 19.3642C10.9445 19.6453 11.2712 19.8168 11.6229 19.8303C11.9741 19.8431 12.313 19.6972 12.5446 19.4324L20.7113 10.0991C21.1144 9.63883 21.0928 8.94525 20.6623 8.51008C20.2318 8.07492 19.5388 8.04692 19.0739 8.44475L11.5786 14.8696L8.81362 13.0268Z"
                          fill="white"
                        />
                        <path
                          fill-rule="evenodd"
                          clip-rule="evenodd"
                          d="M13.9327 0.515625C6.52939 0.515625 0.519531 6.52549 0.519531 13.9288C0.519531 21.3321 6.52939 27.3419 13.9327 27.3419C21.336 27.3419 27.3458 21.3321 27.3458 13.9288C27.3458 6.52549 21.336 0.515625 13.9327 0.515625ZM13.9327 1.68166C20.6921 1.68166 26.1798 7.16938 26.1798 13.9288C26.1798 20.6882 20.6921 26.1759 13.9327 26.1759C7.17329 26.1759 1.68557 20.6882 1.68557 13.9288C1.68557 7.16938 7.17329 1.68166 13.9327 1.68166Z"
                          fill="CurrentColor"
                        />
                        <path
                          fill-rule="evenodd"
                          clip-rule="evenodd"
                          d="M9.13872 12.5389C8.42939 12.0658 7.48265 12.1731 6.89698 12.792C6.31073 13.4115 6.25648 14.363 6.76806 15.0449L10.2681 19.7115C10.5848 20.1339 11.0748 20.3905 11.6021 20.4104C12.1295 20.4302 12.6376 20.2109 12.9852 19.8142L21.1519 10.4809C21.7562 9.78965 21.7241 8.74956 21.0784 8.0974C20.4326 7.44465 19.3926 7.40205 18.6961 7.99938L11.5356 14.1366L9.13872 12.5389ZM8.4918 13.5096L11.2562 15.3529C11.4738 15.4976 11.7608 15.4801 11.9597 15.3103L19.455 8.88547C19.6871 8.68597 20.0342 8.70055 20.2495 8.91814C20.4647 9.13514 20.4752 9.48222 20.274 9.71264L12.1073 19.046C11.9912 19.1778 11.8221 19.2513 11.6459 19.2443C11.4703 19.2379 11.307 19.1521 11.2014 19.0116L7.7014 14.3449C7.53106 14.1174 7.54913 13.8006 7.74455 13.5941C7.93938 13.3876 8.25497 13.3521 8.4918 13.5096Z"
                          fill="CurrentColor"
                        />
                      </g>
                      <defs>
                        <clipPath>
                          <rect width="28" height="28" fill="white" />
                        </clipPath>
                      </defs>
                    </svg>
                    Focus on technological innovation
                  </li>
                  <li
                    class="text-item text text-18"
                    data-aos="fade-up"
                  >
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="28"
                      height="28"
                      viewBox="0 0 28 28"
                      fill="none"
                    >
                      <g clip-path="url(#clip0_9088_5324)">
                        <path
                          fill-rule="evenodd"
                          clip-rule="evenodd"
                          d="M8.81362 13.0268C8.34112 12.7113 7.70994 12.783 7.31911 13.196C6.92886 13.6084 6.89211 14.2431 7.23336 14.6975L10.7334 19.3642C10.9445 19.6453 11.2712 19.8168 11.6229 19.8303C11.9741 19.8431 12.313 19.6972 12.5446 19.4324L20.7113 10.0991C21.1144 9.63883 21.0928 8.94525 20.6623 8.51008C20.2318 8.07492 19.5388 8.04692 19.0739 8.44475L11.5786 14.8696L8.81362 13.0268Z"
                          fill="white"
                        />
                        <path
                          fill-rule="evenodd"
                          clip-rule="evenodd"
                          d="M13.9327 0.515625C6.52939 0.515625 0.519531 6.52549 0.519531 13.9288C0.519531 21.3321 6.52939 27.3419 13.9327 27.3419C21.336 27.3419 27.3458 21.3321 27.3458 13.9288C27.3458 6.52549 21.336 0.515625 13.9327 0.515625ZM13.9327 1.68166C20.6921 1.68166 26.1798 7.16938 26.1798 13.9288C26.1798 20.6882 20.6921 26.1759 13.9327 26.1759C7.17329 26.1759 1.68557 20.6882 1.68557 13.9288C1.68557 7.16938 7.17329 1.68166 13.9327 1.68166Z"
                          fill="CurrentColor"
                        />
                        <path
                          fill-rule="evenodd"
                          clip-rule="evenodd"
                          d="M9.13872 12.5389C8.42939 12.0658 7.48265 12.1731 6.89698 12.792C6.31073 13.4115 6.25648 14.363 6.76806 15.0449L10.2681 19.7115C10.5848 20.1339 11.0748 20.3905 11.6021 20.4104C12.1295 20.4302 12.6376 20.2109 12.9852 19.8142L21.1519 10.4809C21.7562 9.78965 21.7241 8.74956 21.0784 8.0974C20.4326 7.44465 19.3926 7.40205 18.6961 7.99938L11.5356 14.1366L9.13872 12.5389ZM8.4918 13.5096L11.2562 15.3529C11.4738 15.4976 11.7608 15.4801 11.9597 15.3103L19.455 8.88547C19.6871 8.68597 20.0342 8.70055 20.2495 8.91814C20.4647 9.13514 20.4752 9.48222 20.274 9.71264L12.1073 19.046C11.9912 19.1778 11.8221 19.2513 11.6459 19.2443C11.4703 19.2379 11.307 19.1521 11.2014 19.0116L7.7014 14.3449C7.53106 14.1174 7.54913 13.8006 7.74455 13.5941C7.93938 13.3876 8.25497 13.3521 8.4918 13.5096Z"
                          fill="CurrentColor"
                        />
                      </g>
                      <defs>
                        <clipPath>
                          <rect width="28" height="28" fill="white" />
                        </clipPath>
                      </defs>
                    </svg>
                    Creating smart and connected solutions
                  </li>
                  <li
                    class="text-item text text-18"
                    data-aos="fade-up"
                  >
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="28"
                      height="28"
                      viewBox="0 0 28 28"
                      fill="none"
                    >
                      <g clip-path="url(#clip0_9088_5324)">
                        <path
                          fill-rule="evenodd"
                          clip-rule="evenodd"
                          d="M8.81362 13.0268C8.34112 12.7113 7.70994 12.783 7.31911 13.196C6.92886 13.6084 6.89211 14.2431 7.23336 14.6975L10.7334 19.3642C10.9445 19.6453 11.2712 19.8168 11.6229 19.8303C11.9741 19.8431 12.313 19.6972 12.5446 19.4324L20.7113 10.0991C21.1144 9.63883 21.0928 8.94525 20.6623 8.51008C20.2318 8.07492 19.5388 8.04692 19.0739 8.44475L11.5786 14.8696L8.81362 13.0268Z"
                          fill="white"
                        />
                        <path
                          fill-rule="evenodd"
                          clip-rule="evenodd"
                          d="M13.9327 0.515625C6.52939 0.515625 0.519531 6.52549 0.519531 13.9288C0.519531 21.3321 6.52939 27.3419 13.9327 27.3419C21.336 27.3419 27.3458 21.3321 27.3458 13.9288C27.3458 6.52549 21.336 0.515625 13.9327 0.515625ZM13.9327 1.68166C20.6921 1.68166 26.1798 7.16938 26.1798 13.9288C26.1798 20.6882 20.6921 26.1759 13.9327 26.1759C7.17329 26.1759 1.68557 20.6882 1.68557 13.9288C1.68557 7.16938 7.17329 1.68166 13.9327 1.68166Z"
                          fill="CurrentColor"
                        />
                        <path
                          fill-rule="evenodd"
                          clip-rule="evenodd"
                          d="M9.13872 12.5389C8.42939 12.0658 7.48265 12.1731 6.89698 12.792C6.31073 13.4115 6.25648 14.363 6.76806 15.0449L10.2681 19.7115C10.5848 20.1339 11.0748 20.3905 11.6021 20.4104C12.1295 20.4302 12.6376 20.2109 12.9852 19.8142L21.1519 10.4809C21.7562 9.78965 21.7241 8.74956 21.0784 8.0974C20.4326 7.44465 19.3926 7.40205 18.6961 7.99938L11.5356 14.1366L9.13872 12.5389ZM8.4918 13.5096L11.2562 15.3529C11.4738 15.4976 11.7608 15.4801 11.9597 15.3103L19.455 8.88547C19.6871 8.68597 20.0342 8.70055 20.2495 8.91814C20.4647 9.13514 20.4752 9.48222 20.274 9.71264L12.1073 19.046C11.9912 19.1778 11.8221 19.2513 11.6459 19.2443C11.4703 19.2379 11.307 19.1521 11.2014 19.0116L7.7014 14.3449C7.53106 14.1174 7.54913 13.8006 7.74455 13.5941C7.93938 13.3876 8.25497 13.3521 8.4918 13.5096Z"
                          fill="CurrentColor"
                        />
                      </g>
                      <defs>
                        <clipPath>
                          <rect width="28" height="28" fill="white" />
                        </clipPath>
                      </defs>
                    </svg>
                    Sustainable growth through technology
                  </li>
                </ul>
                <div class="buttons" data-aos="fade-up">
                  <a
                    href="{{ url("/about") }}"
                    class="button button--primary"
                    aria-label="More About Us"
                  >
                    More About Us
                    <span class="svg-wrapper">
                      <svg
                        class="icon-20"
                        width="20"
                        height="20"
                        viewBox="0 0 20 20"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M13.3365 7.84518L6.16435 15.0173L4.98584 13.8388L12.158 6.66667H5.83652V5H15.0032V14.1667H13.3365V7.84518Z"
                          fill="CurrentColor"
                        />
                      </svg>
                    </span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      {{-- Our services --}}
      <div class="promotion mt-100 section-padding" style="background-color: #0c0d0d">
        <div class="container">
          <div class="promotion-container">
            <div class="row">
              <div class="col-lg-7 col-12">
                <div class="promtion-content section-headings">
                  <h2
                    class="heading text-50"
                    data-aos="fade-right"
                    data-aos-delay="200"
                    style="font-family: 'HeroesFont'; color: #d3b469;"
                  >
                    Our Services
                  </h2>
                  <div
                    class="text text-18"
                    data-aos="fade-right"
                    data-aos-delay="200"
                    style="color: #d3b469;"
                  >
                    We not only deliver products but also provide end-to-end technical services and support, including:
                  </div>
                  <ul class="promotion-lists list-unstyled">
                    <li
                      class="promotion-item"
                      data-aos="fade-up"
                      data-aos-delay="10"
                    >
                      <div class="promotion-title">
                        <div class="text text-18 fw-600" style="color: #d3b469;">
                          Installation & Integration Services
                        </div>
                      </div>
                      <div class="promotion-text text text-16" style="color: #d3b469;">
                        We help install products and integrate them with optimal functionality.
                      </div>
                    </li>
                    <li
                      class="promotion-item"
                      data-aos="fade-up"
                      data-aos-delay="30"
                    >
                      <div class="promotion-title">
                        <div class="text text-18 fw-600" style="color: #d3b469;">
                          Maintenance & After-Sales Support
                        </div>
                      </div>
                      <div class="promotion-text text text-16" style="color: #d3b469;">
                        We provide maintenance and support after purchase to ensure the product continues to perform well.
                      </div>
                    </li>
                    <li
                      class="promotion-item"
                      data-aos="fade-up"
                      data-aos-delay="70"
                    >
                      <div class="promotion-title">
                        <div class="text text-18 fw-600" style="color: #d3b469;">
                          Custom Solution Development
                        </div>
                      </div>
                      <div class="promotion-text text text-16" style="color: #d3b469;">
                        We develop custom solutions to support your needs.
                      </div>
                    </li>
                    <li
                      class="promotion-item"
                      data-aos="fade-up"
                      data-aos-delay="90"
                    >
                      <div class="promotion-title">
                        <div class="text text-18 fw-600" style="color: #d3b469;">
                          Product Consultation and Training
                        </div>
                      </div>
                      <div class="promotion-text text text-16" style="color: #d3b469;">
                        We provide product consultation and training to ensure effective and optimal product use.
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-5 col-12">
                <div class="promotion-img radius18" data-aos="flip-left">
                  <img
                    src="{{ asset('assets/images/service.webp') }}"
                    width="1000"
                    height="1469"
                    loading="lazy"
                    alt="Promotion image"
                  />
                </div>
              </div>
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
                <div class="text text-16" style="margin-bottom: 20px;">
                  Monday - Friday 09.00 - 17.00 WIB
                </div>
              </div>
              <div class="col-6">
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
