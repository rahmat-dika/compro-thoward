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
                      Product
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="menu-link menu-link-main" href="{{ url("/about") }}" style="color: #d3b469">
                      <b>About Us</b>
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
            srcset="{{ asset('assets/images/aboutImg.png') }}"
          />
          <source
            media="(max-width: 991px)"
            srcset="{{ asset('assets/images/aboutImg.png') }}"
          />
          <img
            src="{{ asset('assets/images/aboutImg.png') }}"
            width="1920"
            height="520"
            loading="eager"
            alt="Page Banner Image"
          />
        </picture>
        <div class="page-banner-content">
          <div class="container text-center">
            <h1 class="heading text-60 fw-700" data-aos="fade-up" style="color: #d3b469; font-family: 'HeroesFont';">
              About Sternics
            </h1>
          </div>
        </div>
      </div>

      <!-- About -->
      <div class="image-text mt-60" style="background-color:#0c0d0d">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-6 col-12">
              <div class="media-wrap">
                <img
                  src="{{ asset('assets/images/bannerabout.png') }}"
                  width="992"
                  height="863"
                  loading="lazy"
                  alt="Image"
                  data-aos="zoom-in-up"
                />
                <div
                  class="image-small"
                  data-aos="zoom-in-down"
                  data-aos-anchor-placement="bottom-bottom"
                  style="margin-bottom: 50px"
                >
                  <img
                    src="{{ asset('assets/images/Sternics-gold.png') }}"
                    style="width: 250px; background-color: #2c3333"
                    loading="lazy"
                    alt="Image"
                  />
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-12">
              <div class="content section-headings" style="margin-top: 40px">
                <h2
                  class="heading text-30"
                  data-aos="fade-up"
                  data-aos-delay="50"
                  style="font-family: HeroesFont; color:#d3b469"
                >
                  Electrical & Digital Technology Solution
                </h2>
                <div
                  class="text text-18"
                  data-aos="fade-up"
                  data-aos-delay="80"
                  style="font-family: HeroesFont; color:#ffffff"
                >
                  Sternics is a company engaged in the electrical and digital technology industry. 
                  Since its establishment in 2010, Sternics has been committed to developing innovative 
                  solutions that adapt to the rapid evolution of digital technology.
                </div>
                <ul class="list-block list-unstyled">
                  <li
                    class="text-item text text-18"
                    data-aos="fade-up"
                    data-aos-delay="100"
                    style="color:#d3b469"
                  >
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="60"
                      height="60"
                      viewBox="0 0 60 60"
                      fill="none"
                    >
                      <circle cx="30" cy="30" r="29.5" stroke="#1C2539" />
                      <g clip-path="url(#clip0_9088_7871)">
                        <path
                          d="M17.6645 23.0585C17.9536 23.0713 18.1997 22.8406 18.2097 22.5496L18.2916 20.171H19.8332L19.8752 23.414C19.8776 23.6041 19.9822 23.7782 20.149 23.8696C20.2281 23.913 20.3153 23.9345 20.4025 23.9345C20.499 23.9345 20.5954 23.908 20.6804 23.8554L23.0793 22.3682C23.4423 22.1432 23.8385 21.9858 24.257 21.9001L26.0346 21.5365C26.2934 22.4812 26.9984 23.2578 27.9438 23.5951C28.4258 23.7671 28.9633 23.6936 29.3816 23.3988C29.7998 23.104 30.0495 22.6224 30.0495 22.1107V21.4152C31.3436 21.3001 32.5622 20.7633 33.5262 19.8745L35.1291 18.3968C35.3432 18.1994 35.3568 17.8657 35.1594 17.6515C34.9619 17.4374 34.6283 17.4239 34.4141 17.6212L32.8112 19.0989C32.0429 19.8073 31.0773 20.2424 30.0495 20.3541V19.4985C30.3096 19.3462 30.5363 19.1366 30.7068 18.8822C31.3934 17.857 31.5003 16.5734 30.9927 15.4487C30.8117 15.0655 30.7404 14.8867 30.5598 14.5411C30.6899 14.4487 30.7951 14.321 30.8593 14.1678C30.9929 13.8489 30.9252 13.4808 30.6867 13.2299C30.3259 12.8504 29.6593 12.3448 28.533 12.0921C27.3385 11.8242 26.3261 12.15 25.7719 12.9473C25.182 12.9439 24.3397 13.2015 23.9312 14.2172C23.3791 15.5897 23.8024 16.9465 25.0634 17.8468C25.223 17.958 25.5552 18.1053 25.8893 18.0809C26.0727 18.3439 26.2575 18.5924 26.5698 18.8814L26.0545 20.4559L24.0457 20.8668C23.5049 20.9774 22.9928 21.181 22.5236 21.4718L20.9177 22.4673L20.853 17.4732C20.8406 16.5142 20.0503 15.734 19.0912 15.734C18.1366 15.734 17.3631 16.4814 17.3303 17.4354C17.2871 18.691 17.1986 21.2624 17.1556 22.5134C17.1456 22.8044 17.3734 23.0485 17.6645 23.0585ZM29.8306 18.2952C29.6657 18.5413 29.3909 18.6999 29.0955 18.7196C28.2307 18.7771 27.4117 18.3914 26.9055 17.6873L26.8234 17.5731C26.9393 17.4164 27.0189 17.2324 27.0519 17.0322C27.1102 16.6636 27.2776 16.1451 27.4864 15.7812C27.872 15.1088 28.6831 14.8455 29.3986 14.7512C29.6197 14.9309 29.9074 15.5952 30.0315 15.8825C30.3881 16.6729 30.313 17.5749 29.8306 18.2952ZM26.5029 13.802C26.7417 13.2068 27.2556 13.0528 27.7233 13.0528C28.2626 13.0354 29.2258 13.3744 29.5923 13.6708C28.7134 13.7436 27.5391 14.0128 26.8322 14.8713C26.6729 14.7728 26.5603 14.6535 26.4959 14.5147C26.357 14.2157 26.4662 13.8936 26.5029 13.802ZM24.9098 14.6107C25.0278 14.3171 25.2032 14.1617 25.3753 14.0814C25.3597 14.3876 25.4141 14.6894 25.5392 14.9589C25.6568 15.2122 25.8825 15.531 26.3114 15.7873C26.1751 16.1203 26.0742 16.4791 26.0113 16.8603C25.9955 16.9552 25.928 16.9964 25.8892 17.0126C25.8552 17.0267 25.7663 17.0524 25.6763 16.9882C24.8007 16.3631 24.5356 15.541 24.9098 14.6107ZM28.9241 19.7801C28.9477 19.7801 28.9713 19.7794 28.9949 19.7789V22.1106C28.9949 22.2824 28.9143 22.4376 28.7739 22.5367C28.6336 22.6358 28.4602 22.6594 28.2984 22.6017C27.587 22.3478 27.0852 21.7127 26.9966 20.9681L27.4851 19.4755C27.9316 19.6741 28.42 19.7801 28.9241 19.7801ZM19.0913 16.7887C19.4763 16.7887 19.7934 17.1018 19.7984 17.4867L19.8195 19.1163H18.3278L18.3844 17.4716C18.3977 17.0886 18.7081 16.7887 19.0913 16.7887Z"
                          fill="CurrentColor"
                        />
                        <path
                          d="M40.5805 44.8109H39.7454L39.8653 37.543C39.8785 36.7532 39.5412 36.0061 38.9402 35.4933L36.6506 33.5403C36.4289 33.3511 36.0961 33.3777 35.9071 33.5993C35.7181 33.8208 35.7446 34.1537 35.9661 34.3427L38.2557 36.2958C38.6163 36.6034 38.8186 37.0516 38.8108 37.5255L38.6906 44.8109H37.3269L36.5306 42.2281C36.213 41.1978 36.2378 40.0714 36.6004 39.0562L36.823 38.4328C36.8725 38.294 36.8618 38.1409 36.7933 38.0104C36.7248 37.8799 36.605 37.784 36.4627 37.7459L30.6868 36.1996L30.5948 34.3953C30.5801 34.1044 30.3345 33.8792 30.0413 33.8955C29.7504 33.9103 29.5266 34.1581 29.5415 34.449L29.8263 40.0356C29.8571 40.6418 29.547 41.2022 29.0167 41.4979L28.294 41.901C28.0396 42.0429 27.9484 42.364 28.0903 42.6184C28.1868 42.7915 28.3664 42.889 28.5514 42.889C28.6383 42.889 28.7265 42.8675 28.8078 42.8222L29.5305 42.4191C30.4142 41.9262 30.9312 40.9924 30.8797 39.9819L30.7433 37.3067L35.6373 38.6169C35.1928 39.7857 35.1262 41.2859 35.5228 42.5389L36.4015 45.3893V46.7853C36.4015 47.456 36.9472 48.0017 37.6179 48.0017H42.0965C42.5012 48.0017 42.8305 47.6723 42.8305 47.2677V47.061C42.8305 45.8202 41.8212 44.8109 40.5805 44.8109ZM37.6179 46.9468C37.5287 46.9468 37.4562 46.8743 37.4562 46.7851V45.8656H40.5806C41.2011 45.8656 41.7128 46.3411 41.7704 46.9468H37.6179Z"
                          fill="CurrentColor"
                        />
                        <path
                          d="M26.1036 36.7365C25.4655 35.2029 25.2087 33.5316 25.3546 31.8796L31.6141 30.6277L34.0866 32.7368C34.3082 32.9259 34.6411 32.8994 34.83 32.6778C35.019 32.4562 34.9926 32.1233 34.771 31.9343L32.3587 29.8764L33.6032 25.3202C33.6523 25.1402 33.7435 24.9712 33.8668 24.8312C35.039 23.5 41.5132 16.151 42.5131 15.0151C43.1031 14.3454 43.1149 13.363 42.5411 12.6792C42.2232 12.3004 41.7765 12.0744 41.2831 12.0429C40.789 12.0112 40.3177 12.1785 39.9543 12.5135C39.0336 13.3623 37.1142 15.1317 36.1987 15.9758C35.9846 16.1732 35.971 16.5069 36.1684 16.7211C36.366 16.9351 36.6994 16.9486 36.9137 16.7514L38.6546 15.1464L39.8769 16.4122L33.0753 24.1339C32.8462 24.3939 32.6769 24.708 32.5856 25.0423L31.3388 29.607C30.2809 29.8186 26.1948 30.6358 25.2521 30.8244L24.141 26.7059C24.0544 26.3846 23.8469 26.1177 23.557 25.9544C23.267 25.7909 22.9313 25.7519 22.6115 25.8442L19.1776 26.836C18.9126 26.9123 18.6362 26.8591 18.4186 26.6897C18.2012 26.5202 18.0819 26.265 18.0914 25.9895L18.1253 25.0028C18.1354 24.7117 17.9075 24.4677 17.6164 24.4576C17.3274 24.4452 17.0813 24.6754 17.0713 24.9665L17.0373 25.9532C17.016 26.5703 17.2832 27.142 17.7704 27.5216C18.2575 27.9012 18.877 28.0206 19.4703 27.8493L22.9042 26.8575C22.9658 26.8397 23.0154 26.8597 23.0393 26.8733C23.0633 26.8868 23.106 26.9187 23.1228 26.9806L24.3366 31.4801C24.1139 33.4007 24.3868 35.3559 25.1298 37.1416L26.0376 39.3235L25.6865 39.4013C24.366 39.6944 23.2072 40.4631 22.4239 41.566L20.2228 44.665C19.9891 44.994 19.8656 45.3812 19.8656 45.7847V46.783C19.8656 47.4538 20.4113 47.9994 21.082 47.9994H25.5606C25.9653 47.9994 26.2946 47.67 26.2946 47.2654V47.0587C26.2946 46.1293 25.7281 45.3297 24.9222 44.987L26.7053 43.9926C26.9597 43.8508 27.0509 43.5296 26.909 43.2752C26.7671 43.0208 26.4458 42.9295 26.1915 43.0715L23.0763 44.8088H21.4143L23.2837 42.1768C23.9154 41.2874 24.8499 40.6674 25.9149 40.4311L26.8804 40.2169C27.0327 40.1832 27.1623 40.0836 27.2342 39.9452C27.3061 39.8067 27.3131 39.6436 27.2532 39.4995L26.1036 36.7365ZM39.4303 14.4313L40.6693 13.2891C40.8188 13.1513 41.0126 13.0826 41.2157 13.0955C41.4186 13.1085 41.6024 13.2014 41.733 13.3572C41.969 13.6384 41.9642 14.0425 41.7216 14.318L40.5763 15.6181L39.4303 14.4313ZM24.0447 45.8635C24.6652 45.8635 25.1768 46.339 25.2344 46.9447H21.0819C20.9927 46.9447 20.9202 46.8722 20.9202 46.7831V45.8635H24.0447Z"
                          fill="CurrentColor"
                        />
                      </g>
                      <defs>
                        <clipPath id="clip0_9088_7871">
                          <rect
                            width="36"
                            height="36"
                            fill="white"
                            transform="translate(12 12)"
                          />
                        </clipPath>
                      </defs>
                    </svg>
                    <h3 class="title text text-22 fw-600" style="color:#ffffff;">Our ambition</h3>
                    <div class="text text-16" style="color:#d3b469;">
                      To become a leading provider of solutions that enhance convenience, efficiency, and connectivity.
                    </div>
                  </li>
                  <li
                    class="text-item text text-18"
                    data-aos="fade-up"
                    data-aos-delay="200"
                    style="color:#d3b469; margin-top:20px"
                  >
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="60"
                      height="60"
                      viewBox="0 0 60 60"
                      fill="none"
                    >
                      <circle cx="30" cy="30" r="29.5" stroke="#1C2539" />
                      <g clip-path="url(#clip0_9088_7881)">
                        <path
                          d="M30.2367 26.3969C29.9451 26.3727 29.6871 26.591 29.6632 26.8839L29.5444 28.3407C29.3383 28.2575 29.1135 28.2112 28.878 28.2112H28.6278V26.8196C28.6278 26.1923 28.1175 25.6819 27.4902 25.6819H25.3008C23.6635 25.6819 22.0433 25.137 20.7387 24.1476L20.488 23.9575C20.2973 23.8129 20.062 23.7528 19.8255 23.7878C19.5889 23.823 19.3813 23.949 19.241 24.1428C18.5807 25.0547 18.2317 26.1318 18.2317 27.2577V28.2112H17.9815C17.7556 28.2112 17.5394 28.2539 17.3403 28.3307L16.8959 25.1623C16.8345 24.7242 16.852 24.2829 16.948 23.8506C17.0117 23.5639 16.831 23.2797 16.5442 23.216C16.2574 23.1521 15.9732 23.3331 15.9095 23.6198C15.7857 24.1768 15.7632 24.7454 15.8422 25.3101L16.387 29.1942C16.2649 29.4358 16.1956 29.7085 16.1956 29.9972C16.1956 30.9821 16.9968 31.7833 17.9817 31.7833H18.2478C18.3716 33.4531 19.2868 34.9052 20.6197 35.7654V37.1111L16.9487 38.8461C14.3185 40.089 12.6191 42.7718 12.6191 45.6807V47.4674C12.6191 47.7612 12.8573 47.9993 13.1511 47.9993C13.445 47.9993 13.6831 47.7612 13.6831 47.4674V45.6807C13.6831 43.1812 15.1433 40.8761 17.4031 39.808L20.7367 38.2325C21.073 39.3302 22.0957 40.1307 23.3021 40.1307C24.5084 40.1307 25.5312 39.3301 25.8674 38.2325L29.2013 39.8081L29.2547 39.8346C29.3297 39.871 29.4089 39.8882 29.4868 39.8882C29.6842 39.8882 29.8737 39.778 29.9657 39.5886C30.0941 39.3243 29.984 39.0061 29.7198 38.8777L29.7013 38.8686C29.6861 38.8609 29.6709 38.8533 29.6556 38.8461L25.9846 37.1111V35.9201C27.4549 35.0865 28.4803 33.5578 28.6118 31.7834H28.8779C29.8628 31.7834 30.664 30.9821 30.664 29.9973C30.664 29.759 30.6167 29.5318 30.5317 29.3237L30.7236 26.9704C30.7475 26.6775 30.5295 26.4208 30.2367 26.3969ZM17.2593 29.9972C17.2593 29.599 17.5833 29.2751 17.9815 29.2751H18.2316V30.7194H17.9815C17.5833 30.7194 17.2593 30.3954 17.2593 29.9972ZM24.9208 37.4481C24.9208 38.3406 24.1947 39.0668 23.3021 39.0668C22.4095 39.0668 21.6834 38.3406 21.6834 37.4481V36.2914C22.2296 36.4868 22.8173 36.5941 23.4298 36.5941C23.9479 36.5941 24.4482 36.5168 24.9208 36.375V37.4481ZM27.5639 31.3959C27.5639 33.6755 25.7093 35.5301 23.4298 35.5301C21.1502 35.5301 19.2956 33.6755 19.2956 31.3959V27.2577C19.2956 26.4198 19.5373 25.6156 19.9966 24.9201L20.0958 24.9954C21.5842 26.1242 23.4327 26.7458 25.3008 26.7458H27.4902C27.5308 26.7458 27.5639 26.7789 27.5639 26.8196V31.3959ZM28.878 30.7194H28.6278V29.2751H28.878C29.2761 29.2751 29.6001 29.599 29.6001 29.9972C29.6001 30.3954 29.2762 30.7194 28.878 30.7194Z"
                          fill="CurrentColor"
                        />
                        <path
                          d="M17.4977 22.2682C17.638 22.2682 17.7781 22.213 17.8826 22.1035C18.4046 21.5567 19.0725 21.188 19.8141 21.0374C19.8484 21.0304 19.882 21.02 19.9144 21.0064L21.643 20.2796C24.0632 19.262 26.8038 19.9557 28.462 22.0064C28.6468 22.2348 28.9819 22.2702 29.2102 22.0854C29.4387 21.9007 29.4741 21.5657 29.2894 21.3373C28.3772 20.2094 27.1072 19.3774 25.7135 18.9944C24.2261 18.5858 22.6761 18.691 21.2307 19.2988L19.5492 20.0058C18.6147 20.2065 17.7734 20.6771 17.113 21.3689C16.9101 21.5814 16.9179 21.9182 17.1304 22.121C17.2336 22.2194 17.3657 22.2682 17.4977 22.2682Z"
                          fill="CurrentColor"
                        />
                        <path
                          d="M30.9625 40.2847C30.757 40.4945 30.7603 40.8313 30.9702 41.0369C32.21 42.2518 32.9211 43.9429 32.9211 45.6767V47.4634C32.9211 47.7572 33.1592 47.9954 33.4531 47.9954C33.7469 47.9954 33.985 47.7572 33.985 47.4634V45.6767C33.985 43.6588 33.1576 41.6906 31.7148 40.277C31.5049 40.0715 31.1682 40.0747 30.9625 40.2847Z"
                          fill="CurrentColor"
                        />
                        <path
                          d="M17.1511 44.6719C16.8573 44.6719 16.6191 44.9101 16.6191 45.2038V47.4677C16.6191 47.7615 16.8573 47.9997 17.1511 47.9997C17.445 47.9997 17.6831 47.7615 17.6831 47.4677V45.2038C17.6831 44.9101 17.445 44.6719 17.1511 44.6719Z"
                          fill="CurrentColor"
                        />
                        <path
                          d="M29.4529 44.6719C29.159 44.6719 28.9209 44.9101 28.9209 45.2038V47.4677C28.9209 47.7615 29.159 47.9997 29.4529 47.9997C29.7467 47.9997 29.9848 47.7615 29.9848 47.4677V45.2038C29.9848 44.9101 29.7467 44.6719 29.4529 44.6719Z"
                          fill="CurrentColor"
                        />
                        <path
                          d="M39.8362 23.1695C39.5837 23.3197 39.5008 23.6462 39.6511 23.8987C39.7506 24.0659 39.9275 24.1586 40.1088 24.1586C40.2013 24.1586 40.2951 24.1345 40.3803 24.0837C41.976 23.1341 42.9672 21.3925 42.9672 19.5386C42.9672 19.3859 42.9598 19.2301 42.9449 19.0625C42.9187 18.7699 42.6601 18.5545 42.3675 18.5802C42.0748 18.6065 41.8589 18.865 41.8852 19.1576C41.8974 19.2933 41.9033 19.4179 41.9033 19.5387C41.9033 21.0194 41.1112 22.4106 39.8362 23.1695Z"
                          fill="CurrentColor"
                        />
                        <path
                          d="M37.6812 15.314C38.3764 15.314 39.0658 15.4869 39.6749 15.8138C39.9337 15.9527 40.2561 15.8556 40.3951 15.5967C40.5341 15.3378 40.4369 15.0153 40.178 14.8764C39.4147 14.4666 38.5513 14.25 37.6812 14.25C34.7661 14.25 32.3945 16.6216 32.3945 19.5366C32.3945 22.4517 34.7661 24.8233 37.6812 24.8233C37.7694 24.8233 37.8598 24.821 37.9499 24.8165C38.2434 24.8018 38.4693 24.552 38.4546 24.2585C38.4399 23.9651 38.1918 23.7386 37.8967 23.7538C37.8243 23.7574 37.7517 23.7593 37.6812 23.7593C35.3528 23.7593 33.4585 21.865 33.4585 19.5366C33.4585 17.2082 35.3528 15.314 37.6812 15.314Z"
                          fill="CurrentColor"
                        />
                        <path
                          d="M46.9867 15.1394L45.5427 14.3323L45.3644 12.6877C45.3352 12.4185 45.1714 12.189 44.9264 12.0738C44.6811 11.9587 44.4001 11.9792 44.1742 12.1286L41.7744 13.7166C41.5333 13.8762 41.4028 14.1539 41.4339 14.4415L41.6333 16.2811L39.7795 17.5078C39.2483 16.9579 38.5042 16.6149 37.6811 16.6149C36.0714 16.6149 34.7617 17.9246 34.7617 19.5343C34.7617 21.144 36.0714 22.4536 37.6811 22.4536C39.2908 22.4536 40.6004 21.144 40.6004 19.5343C40.6004 19.1299 40.5176 18.7445 40.3683 18.394L42.2204 17.1684L43.8357 18.0713C43.9532 18.137 44.0825 18.1696 44.2114 18.1696C44.3594 18.1696 44.5071 18.1266 44.6361 18.0413L47.0358 16.4533C47.2617 16.304 47.3905 16.0532 47.3803 15.7826C47.3703 15.512 47.2231 15.2716 46.9867 15.1394ZM39.5365 19.5344C39.5365 20.5574 38.7043 21.3897 37.6812 21.3897C36.6581 21.3897 35.8257 20.5574 35.8257 19.5344C35.8257 18.5113 36.6581 17.6789 37.6812 17.6789C38.1327 17.6789 38.547 17.8413 38.8691 18.1104L37.3877 19.0907C37.1427 19.2528 37.0755 19.5829 37.2376 19.8279C37.3399 19.9826 37.5092 20.0664 37.6817 20.0664C37.7825 20.0664 37.8845 20.0378 37.9748 19.978L39.457 18.9972C39.5085 19.1674 39.5365 19.3476 39.5365 19.5344ZM42.511 14.5051L44.3587 13.2824L44.4797 14.3979L42.632 15.6205L42.511 14.5051ZM44.1985 17.0552L43.219 16.5078L43.9407 16.0303L45.0668 15.2851L46.0462 15.8326L44.1985 17.0552Z"
                          fill="CurrentColor"
                        />
                        <path
                          d="M44.6027 19.2041C44.307 19.1948 44.0641 19.427 44.0558 19.7207C44.009 21.3665 43.3296 22.9146 42.1428 24.0802C40.9554 25.2464 39.3937 25.8976 37.7454 25.914C36.1035 25.9302 34.5416 25.325 33.3412 24.21C33.2333 24.1097 33.0883 24.0588 32.9417 24.0691L30.3382 24.2528L31.6639 22.3008C31.7617 22.157 31.7829 21.9744 31.7208 21.812C31.4215 21.0291 31.2816 20.203 31.3048 19.3568C31.399 15.9267 34.2539 13.1578 37.6819 13.1578C37.7007 13.1578 37.72 13.1578 37.7387 13.158C38.5193 13.165 39.281 13.3117 40.0031 13.5941C40.2767 13.7011 40.5854 13.5662 40.6923 13.2925C40.7993 13.019 40.6643 12.7103 40.3907 12.6033C39.5477 12.2735 38.6586 12.1022 37.7483 12.094C37.7261 12.0938 37.7041 12.0938 37.6819 12.0938C33.6826 12.0938 30.3512 15.3251 30.2413 19.3275C30.2168 20.2193 30.3481 21.0925 30.6316 21.9272L29.2334 23.9857C29.0447 24.2636 29.0315 24.6172 29.1992 24.9084C29.3667 25.1996 29.6794 25.3658 30.0142 25.3421L32.7912 25.1461C34.1487 26.3307 35.8733 26.9781 37.6809 26.9781C37.7058 26.9781 37.7309 26.978 37.756 26.9778C39.6809 26.9587 41.5036 26.1992 42.8884 24.8392C44.2723 23.48 45.0646 21.6729 45.1193 19.7509C45.1277 19.4572 44.8963 19.2124 44.6027 19.2041Z"
                          fill="CurrentColor"
                        />
                      </g>
                      <defs>
                        <clipPath id="clip0_9088_7881">
                          <rect
                            width="36"
                            height="36"
                            fill="white"
                            transform="translate(12 12)"
                          />
                        </clipPath>
                      </defs>
                    </svg>
                    <h3 class="title text text-22 fw-600" style="color:#ffffff;">Our purpose</h3>
                    <div class="text text-16" style="color:#d3b469;">
                      To deliver innovative products and services that improve everyday personal and professional experiences.
                    </div>
                  </li>
                </ul>
                <br><br>
              </div>
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
