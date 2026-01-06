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
                      <b>Product</b>
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
      <!-- Page Banner -->
      <div class="page-banner">
        <picture class="media media-bg">
          <source
            media="(max-width: 575px)"
            srcset="{{ asset('assets/images/productImg.png') }}"
          />
          <source
            media="(max-width: 991px)"
            srcset="{{ asset('assets/images/productImg.png') }}"
          />
          <img
            src="{{ asset('assets/images/productImg.png') }}"
            width="1920"
            height="520"
            loading="eager"
            alt="Page Banner Image"
          />
        </picture>
        <div class="page-banner-content">
          <div class="container text-center">
            <h1 class="heading text-60 fw-700" data-aos="fade-up" style="color: #d3b469; font-family: 'HeroesFont';">
              Our Product
            </h1>
          </div>
        </div>
      </div>

      <!-- Projects -->
      <div class="page-projects" style="padding-top: 100px; background-color:#0c0d0d">
        <div class="container-fluid">
          <div class="row product-grid">
            <div class="col-6 col-sm-4" data-aos="fade-up" data-aos-delay="100">
              <a
                class="card-project radius18"
                aria-label="project details"
                href="{{ url('list-product?id=DashCam') }}"
              >
                <img
                  src="{{ asset('assets/images/dashcam.png') }}"
                  alt="Dash Cam image"
                  width="645"
                  height="690"
                  loading="lazy"
                />
                <div class="card-project-content-absolute">
                  <div class="card-project-content">
                    <h2 class="heading text-24">Dash Cam</h2>
                    <p class="text text-16">Smart vehicle camera solutions for enhanced driving safety.</p>
                  </div>
                </div>
                <span class="svg-wrapper icon-project-link">
                  <svg
                    viewBox="0 0 64 64"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <circle cx="32" cy="32" r="32" fill="white" />
                    <path
                      d="M26.1667 39C25.8167 39 25.5833 38.8833 25.35 38.65C24.8833 38.1833 24.8833 37.4833 25.35 37.0167L37.0167 25.35C37.4833 24.8833 38.1833 24.8833 38.65 25.35C39.1167 25.8167 39.1167 26.5167 38.65 26.9833L26.9833 38.65C26.75 38.8833 26.5167 39 26.1667 39Z"
                      fill="#20282D"
                    />
                    <path
                      d="M37.8332 37.8333C37.1332 37.8333 36.6665 37.3667 36.6665 36.6667V27.3333H27.3332C26.6332 27.3333 26.1665 26.8667 26.1665 26.1667C26.1665 25.4667 26.6332 25 27.3332 25H37.8332C38.5332 25 38.9998 25.4667 38.9998 26.1667V36.6667C38.9998 37.3667 38.5332 37.8333 37.8332 37.8333Z"
                      fill="#20282D"
                    />
                  </svg>
                </span>
              </a>
            </div>

            <div class="col-6 col-sm-4" data-aos="fade-up" data-aos-delay="200">
              <a
                class="card-project radius18"
                aria-label="project details"
                href="{{ url('list-product?id=SmartBoard') }}"
              >
                <img
                  src="{{ asset('assets/images/smartboard.png') }}"
                  alt="Smart Board image"
                  width="645"
                  height="690"
                  loading="lazy"
                />
                <div class="card-project-content-absolute">
                  <div class="card-project-content">
                    <h2 class="heading text-24">Smart Board</h2>
                    <p class="text text-16">Interactive display technology for modern education and business collaboration.</p>
                  </div>
                </div>
                <span class="svg-wrapper icon-project-link">
                  <svg
                    viewBox="0 0 64 64"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <circle cx="32" cy="32" r="32" fill="white" />
                    <path
                      d="M26.1667 39C25.8167 39 25.5833 38.8833 25.35 38.65C24.8833 38.1833 24.8833 37.4833 25.35 37.0167L37.0167 25.35C37.4833 24.8833 38.1833 24.8833 38.65 25.35C39.1167 25.8167 39.1167 26.5167 38.65 26.9833L26.9833 38.65C26.75 38.8833 26.5167 39 26.1667 39Z"
                      fill="#20282D"
                    />
                    <path
                      d="M37.8332 37.8333C37.1332 37.8333 36.6665 37.3667 36.6665 36.6667V27.3333H27.3332C26.6332 27.3333 26.1665 26.8667 26.1665 26.1667C26.1665 25.4667 26.6332 25 27.3332 25H37.8332C38.5332 25 38.9998 25.4667 38.9998 26.1667V36.6667C38.9998 37.3667 38.5332 37.8333 37.8332 37.8333Z"
                      fill="#20282D"
                    />
                  </svg>
                </span>
              </a>
            </div>

            <div class="col-6 col-sm-4" data-aos="fade-up" data-aos-delay="200">
              <a
                class="card-project radius18"
                aria-label="project details"
                href="{{ url('list-product?id=EvCharger') }}"
              >
                <img
                  src="{{ asset('assets/images/evcharger.png') }}"
                  alt="EV Charger image"
                  width="645"
                  height="690"
                  loading="lazy"
                />
                <div class="card-project-content-absolute">
                  <div class="card-project-content">
                    <h2 class="heading text-24">EV Charger</h2>
                    <p class="text text-16">Efficient and reliable charging systems for electric vehicles.</p>
                  </div>
                </div>
                <span class="svg-wrapper icon-project-link">
                  <svg
                    viewBox="0 0 64 64"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <circle cx="32" cy="32" r="32" fill="white" />
                    <path
                      d="M26.1667 39C25.8167 39 25.5833 38.8833 25.35 38.65C24.8833 38.1833 24.8833 37.4833 25.35 37.0167L37.0167 25.35C37.4833 24.8833 38.1833 24.8833 38.65 25.35C39.1167 25.8167 39.1167 26.5167 38.65 26.9833L26.9833 38.65C26.75 38.8833 26.5167 39 26.1667 39Z"
                      fill="#20282D"
                    />
                    <path
                      d="M37.8332 37.8333C37.1332 37.8333 36.6665 37.3667 36.6665 36.6667V27.3333H27.3332C26.6332 27.3333 26.1665 26.8667 26.1665 26.1667C26.1665 25.4667 26.6332 25 27.3332 25H37.8332C38.5332 25 38.9998 25.4667 38.9998 26.1667V36.6667C38.9998 37.3667 38.5332 37.8333 37.8332 37.8333Z"
                      fill="#20282D"
                    />
                  </svg>
                </span>
              </a>
            </div>

            <div class="col-6 col-sm-4" data-aos="fade-up" data-aos-delay="300">
              <a
                class="card-project radius18"
                aria-label="project details"
                href="{{ url('list-product?id=LaptopPB') }}"
              >
                <img
                  src="{{ asset('assets/images/aboutimg.png') }}"
                  alt="Laptop Power Bank image"
                  width="645"
                  height="690"
                  loading="lazy"
                />
                <div class="card-project-content-absolute">
                  <div class="card-project-content">
                    <h2 class="heading text-24">Laptop Power Bank</h2>
                    <p class="text text-16">High-capacity power solutions for mobile productivity.</p>
                  </div>
                </div>
                <span class="svg-wrapper icon-project-link">
                  <svg
                    viewBox="0 0 64 64"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <circle cx="32" cy="32" r="32" fill="white" />
                    <path
                      d="M26.1667 39C25.8167 39 25.5833 38.8833 25.35 38.65C24.8833 38.1833 24.8833 37.4833 25.35 37.0167L37.0167 25.35C37.4833 24.8833 38.1833 24.8833 38.65 25.35C39.1167 25.8167 39.1167 26.5167 38.65 26.9833L26.9833 38.65C26.75 38.8833 26.5167 39 26.1667 39Z"
                      fill="#20282D"
                    />
                    <path
                      d="M37.8332 37.8333C37.1332 37.8333 36.6665 37.3667 36.6665 36.6667V27.3333H27.3332C26.6332 27.3333 26.1665 26.8667 26.1665 26.1667C26.1665 25.4667 26.6332 25 27.3332 25H37.8332C38.5332 25 38.9998 25.4667 38.9998 26.1667V36.6667C38.9998 37.3667 38.5332 37.8333 37.8332 37.8333Z"
                      fill="#20282D"
                    />
                  </svg>
                </span>
              </a>
            </div>

            <div class="col-6 col-sm-4" data-aos="fade-up" data-aos-delay="400">
              <a
                class="card-project radius18"
                aria-label="project details"
                href="{{ url('list-product?id=DongleAcc') }}"
              >
                <img
                  src="{{ asset('assets/images/dongle.jpg') }}"
                  alt="Dongle & Accessories image"
                  width="645"
                  height="690"
                  loading="lazy"
                />
                <div class="card-project-content-absolute">
                  <div class="card-project-content">
                    <h2 class="heading text-24">Dongle & Accessories</h2>
                    <p class="text text-16">Supporting tools for seamless device connectivity.</p>
                  </div>
                </div>
                <span class="svg-wrapper icon-project-link">
                  <svg
                    viewBox="0 0 64 64"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <circle cx="32" cy="32" r="32" fill="white" />
                    <path
                      d="M26.1667 39C25.8167 39 25.5833 38.8833 25.35 38.65C24.8833 38.1833 24.8833 37.4833 25.35 37.0167L37.0167 25.35C37.4833 24.8833 38.1833 24.8833 38.65 25.35C39.1167 25.8167 39.1167 26.5167 38.65 26.9833L26.9833 38.65C26.75 38.8833 26.5167 39 26.1667 39Z"
                      fill="#20282D"
                    />
                    <path
                      d="M37.8332 37.8333C37.1332 37.8333 36.6665 37.3667 36.6665 36.6667V27.3333H27.3332C26.6332 27.3333 26.1665 26.8667 26.1665 26.1667C26.1665 25.4667 26.6332 25 27.3332 25H37.8332C38.5332 25 38.9998 25.4667 38.9998 26.1667V36.6667C38.9998 37.3667 38.5332 37.8333 37.8332 37.8333Z"
                      fill="#20282D"
                    />
                  </svg>
                </span>
              </a>
            </div>
            
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

          <nav class="pagination">
            <ul
              class="list-unstyled pagintaion-list"
              data-aos="fade-up"
            >
              <!-- <li>
                <a
                  role="link"
                  class="pagination-link"
                  aria-disabled="true"
                  aria-label="Previous page link"
                >
                  <svg
                    viewBox="0 0 8 12"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M0.910711 5.40903C0.754485 5.5653 0.666722 5.77723 0.666722 5.9982C0.666722 6.21917 0.754485 6.43109 0.910711 6.58736L5.62488 11.3015C5.70175 11.3811 5.7937 11.4446 5.89537 11.4883C5.99704 11.532 6.10639 11.5549 6.21704 11.5559C6.32769 11.5569 6.43742 11.5358 6.53984 11.4939C6.64225 11.452 6.7353 11.3901 6.81354 11.3119C6.89178 11.2336 6.95366 11.1406 6.99556 11.0382C7.03746 10.9357 7.05855 10.826 7.05759 10.7154C7.05662 10.6047 7.03364 10.4954 6.98996 10.3937C6.94629 10.292 6.8828 10.2001 6.80321 10.1232L2.67821 5.9982L6.80321 1.8732C6.95501 1.71603 7.039 1.50553 7.03711 1.28703C7.03521 1.06853 6.94757 0.859522 6.79306 0.705015C6.63855 0.550508 6.42954 0.462868 6.21104 0.460969C5.99255 0.45907 5.78205 0.543066 5.62488 0.694864L0.910711 5.40903Z"
                      fill="currentColor"
                    />
                  </svg>
                </a>
              </li> -->
              {{-- <li>
                <a
                  href="#"
                  class="pagination-link active"
                  aria-label="Page 1 link"
                >
                  1
                </a>
              </li>
              <li>
                <a href="#" class="pagination-link" aria-label="Page 2 link">
                  2
                </a>
              </li>
              <li>
                <a href="#" class="pagination-link" aria-label="Page 3 link">
                  3
                </a>
              </li>
              <li>
                <a href="#" class="pagination-link" aria-label="Next page link">
                  <svg
                    viewBox="0 0 8 12"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M7.08929 5.40903C7.24552 5.5653 7.33328 5.77723 7.33328 5.9982C7.33328 6.21917 7.24552 6.43109 7.08929 6.58736L2.37512 11.3015C2.29825 11.3811 2.2063 11.4446 2.10463 11.4883C2.00296 11.532 1.89361 11.5549 1.78296 11.5559C1.67231 11.5569 1.56258 11.5358 1.46016 11.4939C1.35775 11.452 1.2647 11.3901 1.18646 11.3119C1.10822 11.2336 1.04634 11.1406 1.00444 11.0382C0.962537 10.9357 0.941453 10.826 0.942414 10.7154C0.943376 10.6047 0.966364 10.4954 1.01004 10.3937C1.05371 10.292 1.1172 10.2001 1.19679 10.1232L5.32179 5.9982L1.19679 1.8732C1.04499 1.71603 0.960996 1.50553 0.962894 1.28703C0.964793 1.06853 1.05243 0.859522 1.20694 0.705015C1.36145 0.550508 1.57046 0.462868 1.78896 0.460969C2.00745 0.45907 2.21795 0.543066 2.37512 0.694864L7.08929 5.40903Z"
                      fill="currentColor"
                    />
                  </svg>
                </a>
              </li> --}}
            </ul>
          </nav>
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
