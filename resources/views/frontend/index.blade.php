<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta name="csrf-token" content="{{ csrf_token() }}" />

  <title>JM Nation</title>
  <meta name="description"
    content="JM logistic was founded to improve people’s (specially for immigrants) lives by helping those with less, gain access and stay connected to more.

  Since 2015, our aim has been to build & run the safest, simplest, most eﬀective & convenient services, in partnership with the best operators and platforms. We provide more secure logistic to more countries, through more operators, than anyone else – helping people all around the world to send little bytes of happiness to their loved ones, in the blink of an eye. Our customers have successfully sent over 100 million top-ups –and more services To send a little smile all around the world." />

  <meta name="keywords"
    content="International Top-up, International Mobilie Recharge API, International Cargo service, Courier Service, Wind tre marketing, Lyca mobile marketing, Online sim selling Italy, Sundarban Courier Service, FedEx currier service, Air ticket selling, international gift cards api, international mobile recharge api provider, ricarica international provider api, ricarica api italia, ricarica api, euronet, euronet api, euronet recharge api, euronet worldwide, ria money transfer marketing, voli, ryanair, air marocco, air arabia, air france, fligt, biglietti aerei low cost, biglietti aerei, biglietti, biglietto, linkem, kena mobile ricarica, kena mobile" />

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,400,500,600,700"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('frontend')}}/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="{{asset('frontend')}}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{asset('frontend')}}/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{asset('frontend')}}/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="{{asset('frontend')}}/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  {{-- <link href="/your-path-to-fontawesome/css/fontawesome.css" rel="stylesheet">
  <link href="/your-path-to-fontawesome/css/brands.css" rel="stylesheet">
  <link href="/your-path-to-fontawesome/css/solid.css" rel="stylesheet"> --}}

  <!-- Template Main CSS File -->
  <link href="{{asset('frontend')}}/assets/css/style.css" rel="stylesheet">
  <link rel="shortcut icon" type="image/png" href="{{asset('frontend')}}/assets/img/jm-logo.png" />
</head>

<div class="progressbar fixed-top">
  <div class="progress__highlight" id="js-highlight"></div>
</div>
<div class="jscontainer" id="js-container">

  <!-- Messenger Chat Plugin Code -->
  <div id="fb-root"></div>

  <!-- Your Chat Plugin code -->
  <div id="fb-customer-chat" class="fb-customerchat">
  </div>

  <script>
    var chatbox = document.getElementById('fb-customer-chat');
    chatbox.setAttribute("page_id", "116049684058037");
    chatbox.setAttribute("attribution", "biz_inbox");

    window.fbAsyncInit = function () {
      FB.init({
        xfbml: true,
        version: 'v11.0'
      });
    };

    (function (d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
  </script>

  <body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center header-transparent">
      <div class="container d-flex align-items-center" style="        background: linear-gradient(to right, #888 0%, #72cff3 100%)">

        <a href="{{ route('/') }}" class="logo me-auto" ><img src="{{asset('frontend')}}/assets/img/NEW_JM.png" alt="" class="img-fluid"></a>
        <h1 class="logo me-auto"><a href="{{ route('/') }}"><span>JM</span> Nation</a></h1>

        <nav id="navbar" class="navbar order-last order-lg-0">
          <ul>
            <li><a class="nav-link scrollto active" href="#home">Home</a></li>
            <li><a class="nav-link scrollto" href="#about">About</a></li>
            <li><a class="nav-link scrollto" href="#services">Services</a></li>
            <li><a class="nav-link scrollto" href="#features">Features</a></li>
            <li><a class="nav-link scrollto" href="#team">Team</a></li>
            <li><a class="nav-link scrollto" href="#pricing">Pricing</a></li>
            <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
            <li style="margin-left: 1rem;"><button type="button" class="btn btn-warning" onclick="location.href='login'">Log In</button></li>
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->
      </div>
    </header><!-- End Header -->

    <!-- ======= home Section ======= -->
    <section id="home" class="clearfix">
      <div class="container d-flex h-100">
        <div class="row justify-content-center align-self-center" data-aos="fade-up">
          <div class="col-lg-6 intro-info order-lg-first order-last" data-aos="zoom-in" data-aos-delay="100">
            <div class="intoAnimation">
              <img src="{{asset('frontend')}}/assets/img/Pre-comp 1_2.gif" width="100%" style="transform: scale(2.5)">
            </div>
            <div class="started-button">
              <a href="#about" class="btn-get-started scrollto">Get Started</a>
            </div>
          </div>

          <div class="col-lg-6 intro-img order-lg-last order-first" data-aos="zoom-out" data-aos-delay="200">
            <img src="{{asset('frontend')}}/assets/img/intro-img.svg" alt="" class="img-fluid">
          </div>
        </div>

      </div>
    </section><!-- End home -->

    <main id="main">

      <!-- ======= About Section ======= -->
      <section id="about" class="about">

        <div class="container" data-aos="fade-up">
          <div class="row">

            <div class="col-lg-5 col-md-6">
              <div class="about-img" data-aos="fade-right" data-aos-delay="100">
                <img src="{{asset('frontend')}}/assets/img/Team work.gif" alt="">
              </div>
            </div>

            <div class="col-lg-7 col-md-6">
              <div class="about-content" data-aos="fade-left" data-aos-delay="100">
                <h2>About Us</h2>
                <p>Our company was founded to improve people’s (specially for immigrants) lives by helping those with
                  less, gain access and stay connected to more.</p>
                <p>Since 2015, our aim has been to build & run the safest, simplest, most eﬀective & convenient
                  services, in partnership with the best operators and platforms. We provide most secure service to
                  more countries, Via worldclass operators, than anyone else. Helping people all around the world to send
                  little bytes of happiness to their loved ones, in the blink of an eye. Our customers have successfully
                  sent over 100 million top-ups –and more services
                  To send a little smile all around the world.</p>
                <ul>
                  <li><i class="bi bi-check-circle"></i> One of the most trusted company around Asia Pacific and
                    Southern Europe </li>
                  <li><i class="bi bi-check-circle"></i> We provide the most secured services in Italy</li>
                </ul>
                <span style="font-size: 1.5rem;"> - <b>Abdullah Al Mamun Khan, </b></span><span
                  style="font-size: 0.8rem;">CEO</span>
              </div>
            </div>
          </div>
        </div>

      </section><!-- End About Section -->

      <!-- ======= Services Section ======= -->
      <section id="services" class="services section-bg">
        <div class="container" data-aos="fade-up">

          <header class="section-header">
            <h3>Services</h3>
          </header>

          <div class="row">

            <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="200">
              <a href="#mobile-recharge">
                <div class="box">
                  <div class="icon" style="background: #fff0da;"><i class="bi bi-phone" style="color: #e98e06;"></i>
                  </div>
                  <h4 class="title">Mobile Recharge</h4>
                </div>
              </a>
            </div>

            <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="200">
              <a href="#sim-card">
                <div class="box">
                  <div class="icon" style="background: #F7F6F6;"><i class="bi bi-sim" style="color: #EC5454;"></i></div>
                  <h4 class="title">SIM Card</h4>
                </div>
              </a>
            </div>

            <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="300">
              <a href="#air-ticket">
                <div class="box">
                  <div class="icon" style="background: #e6fdfc;"><i class="bi bi-cash" style="color: #3fcdc7;"></i>
                  </div>
                  <h4 class="title">Air Ticket</h4>
                </div>
              </a>
            </div>

            <div href="#cargo" class="col-md-6 col-lg-4 wow bounceInUp" data-aos="zoom-in" data-aos-delay="100">
              <a href="#cargo">
                <div class="box">
                  <div class="icon" style="background: #fceef3;"><i class="bi bi-truck" style="color: #ff689b;"></i>
                  </div>
                  <h4 class="title">Cargo</h4>
                </div>
              </a>
            </div>

            <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="500">
              <a href="#eCommerce">
                <div class=" box">
                  <div class="icon" style="background: #e1eeff;"><i class="bi bi-cart3" style="color: #2282ff;"></i>
                  </div>
                  <h4 class="title">E-Commerce</h4>
                </div>
              </a>
            </div>

            <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="600">
              <a href="#api">
                <div class="box">
                  <div class="icon" style="background: #e1eeff;"><i class="bi bi-code-slash"
                      style="color: #c759fa;"></i></div>
                  <h4 class="title">Talk-time API Provider</h4>
                </div>
              </a>
            </div>

            {{-- <div class="col-md-6 col-lg-4 mx-auto" data-aos="zoom-in" data-aos-delay="600">
              <a href="#agent" class="scrollto">
                <div class=" box">
                  <div class="icon" style="background: #F5F5DC;"><img src="{{asset('frontend')}}/assets/img/ria.svg" width="65%"></div>
                  <h4 class="title">Become an agent of Ria</h4>
                </div>
              </a>
            </div> --}}
          </div>

        </div>
      </section><!-- End Services Section -->

      <!-- ======= Why Us Section ======= -->
      <section id="why-us" class="why-us">
        <div class="container" data-aos="fade-up">

          <header class="section-header">
            <h3>Why choose us?</h3>
          </header>

          <div class="row">

            <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="100">
              <div class="why-us-img">
                <img src="{{asset('frontend')}}/assets/img/why us.svg" alt="" class="img-fluid">
              </div>
            </div>

            <div class="col-lg-5 m-auto">
              <div class="why-us-content">

                <p>
                  This is the company where you can get everything,
                  which could help you to stay connected with your family and your loved ones.
                  Our company can offer you the most fastest and secured services at the lowest price.
                  we are evolving this company to help whose is with less.</p>
                <p>
                  To share their happiness with the family and their loved ones.
                </p>

              </div>

            </div>

          </div>

        </div>

        <div class="container">
          <div class="row counters" data-aos="fade-up" data-aos-delay="100">

            <div class="col-lg-3 col-6 text-center">
              <span data-purecounter-start="0" data-purecounter-end="300" data-purecounter-duration="1"
                class="purecounter"></span>
              <p>Clients</p>
            </div>

            <div class="col-lg-3 col-6 text-center">
              <span data-purecounter-start="0" data-purecounter-end="5000" data-purecounter-duration="1"
                class="purecounter"></span>
              <p>Projects</p>
            </div>

            <div class="col-lg-3 col-6 text-center">
              <span data-purecounter-start="0" data-purecounter-end="8544" data-purecounter-duration="1"
                class="purecounter"></span>
              <p>Hours Of Support</p>
            </div>

            <div class="col-lg-3 col-6 text-center">
              <span data-purecounter-start="0" data-purecounter-end="48" data-purecounter-duration="1"
                class="purecounter"></span>
              <p>Hard Workers</p>
            </div>

          </div>

        </div>
      </section><!-- End Why Us Section -->

      <!-- ======= Features Section ======= -->
      <section id="features" class="features">
        <div class="container" data-aos="fade-up">

          <div class="row feature-item" id="cargo">
            <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
              <img src="{{asset('frontend')}}/assets/img/shipping.gif" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 wow fadeInUp pt-lg-0" data-aos="fade-left" data-aos-delay="150">
              <h4>Safe, Fast & Express Cargo Service</h4>
              <p>
                Select your location to find services for shipping your package, package tracking, shipping rates and
                tools to support shippers.
              <p>
                Our cargo service works with the FedEx Integrator hub. We have late cut off times and can be anywhere in
                the world.
              </p>
              <p>
                We also manage multiple strategic stock locations worldwide, allowing us to provide our clients with a
                global solution to their Customer Care and Logistic needs. All of our facilities and strategic stock
                locations operate with the same Transport Management System (TMS) and Warehouse Management System
                (WMS).Our service will also provide <span style="color: #f99c0f">Home delivery</span> system. To
                minimize your suffering and multiply your happiness. The World class Cargo service will ensure your
                safety.
              </p>
              <p style="color: #f99c0f">You can track you product at any time from our website.</p>
              <a href="#" class="btn btn-warning"><i class="bi bi-geo-fill"></i> Track Products</a>
            </div>
          </div>

          <div class="row feature-item" id="mobile-recharge">
            <div class="col-lg-6 wow fadeInUp order-1 order-lg-2 mob-recharge-img" data-aos="fade-left"
              data-aos-delay="100">
              <img src="{{asset('frontend')}}/assets/img/Calling.gif" class="img-fluid" alt="">
            </div>

            <div class="col-lg-6 wow fadeInUp pt-5 pt-lg-0 order-2 order-lg-1" data-aos="fade-right"
              data-aos-delay="150">
              <h4>Top-up Now from anywhere anytime !!</h4>
              <p>
                Now you can top-up any prepaid mobile phone number (your own, your friends or your relatives) across the
                world with your credit/debit cards.
              </p>
              <p>
                Our service erases country, language, currency and distance barriers. We are available in 188 countries
                and supports more than 1736 world's largest mobile phone operators and also applicable in any operators,
                such as China Mobile, Vodafone, Bharti Airtel.
              </p>
              <p>
                We will help you to be close to your loved ones despite the distance! The recharge we provide, can top
                up to your operator instantly. Top-up Now from anywhere anytime !!
              </p>
            </div>
          </div>

          <div id="air-ticket" class="row feature-item">
            <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
              <img src="{{asset('frontend')}}/assets/img/air ticket.gif" width="110%" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 wow fadeInUp pt-5 pt-lg-0" data-aos="fade-left" data-aos-delay="150">
              <h4>Air Ticket at reasonable price</h4>
              <p>
                Cant Find the best price to book your air ticket?
              </p>
              <p>
                Here we are to help you 24/7.
              </p>
              <p>
                Book your Air ticket at the lowest price that none can get. Get help from our experts to get you any
                kind of information about your ticket.
              </p>
              <p>
                We have Full accreditation authorizes travel agents to sell international and/or domestic tickets on
                behalf of <span style="color: #f99c0f">IATA member airlines</span>.It also allows access to <span
                  style="color: #f99c0f">IATA’s Billing and Settlement Plan (BSP)</span>,
                an efficient interface for invoicing and payment between the agent and customers.
                We are giving after sell service to our valuable customers. <span
                  style="color: #f99c0f">Ticket-Reissue</span> and <span style="color: #f99c0f">Ticket-Renew</span>
                comes with <span style="color: #f99c0f">after sell service</span>.
              </p>
            </div>
          </div>

          <div id="sim-card" class="row feature-item">
            <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
              <img src="{{asset('frontend')}}/assets/img/sim.png" width="110%" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 wow fadeInUp pt-5 pt-lg-0" data-aos="fade-left" data-aos-delay="150">
              <h4>SIM</h4>
              <p>
                If you are looking for exceptional cellular coverage and service for you in Italy, simply choose your
                plan and we will send you an Italian SIM card. And that will also comes with the offers you are looking
                for.
              </p>
              <p>
                Our company provides the most popular operators like.. Wind , Vodafone, Tim , Lyca and all the other
                operators available in Italy and we are authorized reseller of these operators.
              </p>
              <p>
                The company has a very close connection with all the popular operators in Italy.
              </p>
            </div>
          </div>

          <div id="api" class="row feature-item">
            <div class="col-lg-6 wow fadeInUp order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
              <img src="{{asset('frontend')}}/assets/img/api.png" class="img-fluid" alt="">
            </div>

            <div class="col-lg-6 wow fadeInUp pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-right"
              data-aos-delay="150">
              <h4>Talk time API provider</h4>
              <p>
                Talktime and Data Top Up API Access one of the The World's largest Developer Platform for Connecting Το
                Global Telcos Enable your mobile and web apps to send mobile top - ups worldwide within minutes GET YOUR
                FREE API KEY Get free test credits . No credit card required IC O
              </p>
            </div>
          </div>

          <div id="eCommerce" class="row feature-item">
            <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
              <img src="{{asset('frontend')}}/assets/img/Online marketing.gif" width="100%" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 wow fadeInUp pt-5 pt-lg-0" data-aos="fade-left" data-aos-delay="150">
              <h4>Online marketing </h4>
              <p>
                Wholesale ecommerce is growing in popularity as more traditional B2B businesses moved our operations
                online.
              </p>
              <p>
                Using our ecommerce platform to buy every kinds of hand set you are actually looking for.our e commerce
                service is a way to automate time-consuming manual processes. With our platform you can checkout new
                bands and phone models, billing and inventory management are done with apps instead of by your touch.
              </p>
              <p>
                Our employees can help you to resources to other parts of the business, such as digital marketing or
                customer service. Additionally, our sales teams can spend time working with larger, more complex
                accounts instead of handling order processing for bulk purchases that can be easily completed through a
                self-service model on our website.
              </p>
            </div>
          </div>

          {{-- <div id="ria" class="row feature-item">
            <div class="col-lg-6 wow fadeInUp order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
              <img src="{{asset('frontend')}}/assets/img/ria.svg" class="img-fluid" alt="">
            </div>

            <div class="col-lg-6 wow fadeInUp pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-right"
              data-aos-delay="150">
              <h4>Transfer Money with Ria Money Transfer</h4>
              <p>
                Send money online through Ria Money Transfer, one of the largest international money transfer companies
                in the world. Transfer money using your bank.
              </p>
              <p>
              <ul>
                <li>Esternalizzazione (2 originali)</li>
                <li>Privacy (1 originale)</li>
                <li>Oam (1 originale)</li>
                <li>Dichiarazione di residenza (1 originale)</li>
                <li>Documento identità fronte/retro legale rappresentante</li>
                <li>Codice fiscale fronte/retro legale rappresentante</li>
                <li>Visura ordinaria datata non più vecchia di 5 mesi</li>
                <li>permesso di soggiorno (se non ha cittadinanza italiana)</li>
              </ul>
              </p>
            </div>
          </div> --}}

      </section><!-- End Features Section -->

      <!-- ======= Team Section ======= -->
      <section id="team" class="team section-bg">
        <div class="container" data-aos="fade-up">
          <div class="section-header">
            <h3>Team</h3>
          </div>

          <div class="row">

            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
              <div class="member">
                <img src="{{asset('frontend')}}/assets/img/team-2.jpg" class="img-fluid" alt="">
                <div class="member-info">
                  <div class="member-info-content">
                    <h4>Mohammad Mahadi Hassan Bhuiyan</h4>
                    <span>Founder</span>
                    <div class="social">
                      <a href=""><i class="bi bi-twitter"></i></a>
                      <a href=""><i class="bi bi-facebook"></i></a>
                      <a href=""><i class="bi bi-instagram"></i></a>
                      <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
              <div class="member">
                <img src="{{asset('frontend')}}/assets/img/team-2.jpg" class="img-fluid" alt="">
                <div class="member-info">
                  <div class="member-info-content">
                    <h4>Jahid Hassan Bhuiyan</h4>
                    <span>Co Founder</span>
                    <div class="social">
                      <a href=""><i class="bi bi-twitter"></i></a>
                      <a href=""><i class="bi bi-facebook"></i></a>
                      <a href=""><i class="bi bi-instagram"></i></a>
                      <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
              <div class="member">
                <img src="{{asset('frontend')}}/assets/img/team-2.jpg" class="img-fluid" alt="">
                <div class="member-info">
                  <div class="member-info-content">
                    <h4>Abdullah Al Mamun Khan</h4>
                    <span>CEO</span>
                    <div class="social">
                      <a href=""><i class="bi bi-twitter"></i></a>
                      <a href=""><i class="bi bi-facebook"></i></a>
                      <a href=""><i class="bi bi-instagram"></i></a>
                      <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>



          </div>

        </div>
      </section><!-- End Team Section -->

      <!-- ======= Pricing Section ======= -->
      <section id="pricing" class="pricing section-bg wow fadeInUp">

        <div class="container" data-aos="fade-up">

          <header class="section-header">
            <h3>Pricing</h3>
          </header>

          <div class="row flex-items-xs-middle flex-items-xs-center">

            <!-- Basic Plan  -->
            <div class="col-xs-12 col-lg-4" data-aos="fade-up" data-aos-delay="100">
              <div class="card">
                <div class="card-header">
                  <h3><span class="currency">€</span>19<span class="period">/Kg</span></h3>
                </div>
                <div class="card-block">
                  <h4 class="card-title">1-20 <small>Kg</small></h4>
                </div>
              </div>
            </div>

            <!-- Regular Plan  -->
            <div class="col-xs-12 col-lg-4" data-aos="fade-up" data-aos-delay="200">
              <div class="card">
                <div class="card-header">
                  <h3><span class="currency">€</span>29<span class="period">/Kg</span></h3>
                </div>
                <div class="card-block">
                  <h4 class="card-title">21-100 <small>Kg</small></h4>
                </div>
              </div>
            </div>

            <!-- Premium Plan  -->
            <div class="col-xs-12 col-lg-4" data-aos="fade-up" data-aos-delay="300">
              <div class="card">
                <div class="card-header">
                  <h3><span class="currency">€</span>39<span class="period">/Kg</span></h3>
                </div>
                <div class="card-block">
                  <h4 class="card-title">Documents</h4>
                </div>
              </div>
            </div>

            <!--Converter-->

            <div class="col-xs-12 col-lg-6 mx-auto mt-5" data-aos="fade-up" data-aos-delay="300">
              <div class="card">
                <div class="container">
                  <div class="card-header">
                    <h3><span class="currency">Money Converter</h3>
                  </div>
                  <div class="currency">
                    <select id="from_currency">
                      <option value="BDT">Bangladeshi Taka</option>
                      <option value="EUR" selected>Euro</option>
                      <option value="GBP">Pound</option>
                      <option value="INR">Indian Rupee</option>
                      <option value="KWD">Kuwaiti Dinar</option>
                      <option value="PKR">Pakistani Rupee</option>
                      <option value="USD">US Dollar</option>
                    </select>
                    <input type="number" id="from_ammount" placeholder="0" value=1 />
                  </div>
                  <div class="middle">
                    <button id="exchange">
                      <i class="bi bi-arrow-down-up" style="transform: rotate(90deg);"></i>
                    </button>
                    <div class="rate" id="rate"></div>
                  </div>
                  <div class="currency">
                    <select id="to_currency">
                      <option value="BDT" selected>Bangladeshi Taka</option>
                      <option value="EUR">Euro</option>
                      <option value="GBP">Pound</option>
                      <option value="INR">Indian Rupee</option>
                      <option value="KWD">Kuwaiti Dinar</option>
                      <option value="PKR">Pakistani Rupee</option>
                      <option value="USD">US Dollar</option>
                    </select>
                    <input type="number" id="to_ammount" placeholder="0" />
                  </div>
                </div>

              </div>
            </div>

      </section><!-- End Pricing Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="section-bg">

      {{-- <section id="agent" class="section-bg wow fadeInUp" style="background: #fff;">

        <div class="container" data-aos="fade-up">


          <div id="ria" class="row feature-item fadeInUp order-2 order-lg-1" data-aos="fade-right" data-aos-delay="150"">
          <div class=" col-12" style="margin-top: -40px;">
            <header class="section-header">
              <h3>Become an Ria Money Transfer agent</h3>
            </header>
            <p>
              Join our agent network! Your business must be open to the public to become a Ria agent.
            </p>
            <p>
              Connect your business with Ria’s and unlock new opportunities for your clients.
            </p>
            <p>
              With Ria’s secure money transfer system, you can enable your customers to send or receive money transfers
              at the touch
              of a button. Our solutions are simple, secure and come with the backing of a trusted company with more
              than 30 years’
              experience. Let us take care of powering your money transfer service while you earn attractive
              commissions.
            </p>
            <p>
              We are open to partner with multiple businesses around the world. Online agents, banks, post offices,
              retailers… Click
              below to learn more about payment partnerships we can enable.
            </p>
          </div>
        </div>

        <header class="section-header">
          <h3>Apply to become an Ria Money Transfer agent</h3>
        </header>
        <div class="form">

          <form action="forms/agent.php" method="post" role="form" class="php-email-form">

            <div class="row">
              <div class="form-group col-md-6 mt-3">
                <input type="text" class="form-control" name="fname" placeholder="First Name*" required>
              </div>
              <div class="form-group col-md-6 mt-3">
                <input type="text" class="form-control" name="lname" placeholder="Last Name*" required>
              </div>
            </div>

            <div class="row">
              <div class="form-group col-md-6 mt-3">
                <input type="text" class="form-control" name="email" placeholder="Email*" required>
              </div>
              <div class="form-group col-md-6 mt-3">
                <input type="text" class="form-control" name="bphone" placeholder="Business Phone*" required>
              </div>
            </div>

            <div class="row">
              <div class="form-group col-md-6 mt-3">
                <input type="text" class="form-control" name="mphone" placeholder="Mobile Phone*" required>
              </div>
              <div class="form-group col-md-6 mt-3">
                <input type="text" class="form-control" name="address" placeholder="Address*" required>
              </div>
            </div>

            <div class="row">
              <div class="form-group col-md-6 mt-3">
                <input type="text" class="form-control" name="city" placeholder="City*" required>
              </div>
              <div class="form-group col-md-6 mt-3">
                <input type="text" class="form-control" name="state" placeholder="State/Province*" required>
              </div>
            </div>

            <div class="row">
              <div class="form-group col-md-6 mt-3">
                <input type="text" class="form-control" name="zip" placeholder="Zip Code*" required>
              </div>
              <div class="form-group col-md-6 mt-3">
                <select class="form-control" name="country" placeholder="Country of Residence*" required>
                  <option value="Country" selected disabled>Country of Residence*</option>
                  <option value="Afghanistan">Afghanistan</option>
                  <option value="Aland Islands">Aland Islands</option>
                  <option value="Albania">Albania</option>
                  <option value="Algeria">Algeria</option>
                  <option value="American Samoa">American Samoa</option>
                  <option value="Andorra">Andorra</option>
                  <option value="Angola">Angola</option>
                  <option value="Anguilla">Anguilla</option>
                  <option value="Antarctica">Antarctica</option>
                  <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                  <option value="Argentina">Argentina</option>
                  <option value="Armenia">Armenia</option>
                  <option value="Aruba">Aruba</option>
                  <option value="Australia">Australia</option>
                  <option value="Austria">Austria</option>
                  <option value="Azerbaijan">Azerbaijan</option>
                  <option value="Bahamas">Bahamas</option>
                  <option value="Bahrain">Bahrain</option>
                  <option value="Bangladesh">Bangladesh</option>
                  <option value="Barbados">Barbados</option>
                  <option value="Belarus">Belarus</option>
                  <option value="Belgium">Belgium</option>
                  <option value="Belize">Belize</option>
                  <option value="Benin">Benin</option>
                  <option value="Bermuda">Bermuda</option>
                  <option value="Bhutan">Bhutan</option>
                  <option value="Bolivia">Bolivia</option>
                  <option value="Bonaire, Sint Eustatius and Saba">Bonaire, Sint Eustatius and Saba</option>
                  <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                  <option value="Botswana">Botswana</option>
                  <option value="Bouvet Island">Bouvet Island</option>
                  <option value="Brazil">Brazil</option>
                  <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                  <option value="Brunei Darussalam">Brunei Darussalam</option>
                  <option value="Bulgaria">Bulgaria</option>
                  <option value="Burkina Faso">Burkina Faso</option>
                  <option value="Burundi">Burundi</option>
                  <option value="Cambodia">Cambodia</option>
                  <option value="Cameroon">Cameroon</option>
                  <option value="Canada">Canada</option>
                  <option value="Cape Verde">Cape Verde</option>
                  <option value="Cayman Islands">Cayman Islands</option>
                  <option value="Central African Republic">Central African Republic</option>
                  <option value="Chad">Chad</option>
                  <option value="Chile">Chile</option>
                  <option value="China">China</option>
                  <option value="Christmas Island">Christmas Island</option>
                  <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                  <option value="Colombia">Colombia</option>
                  <option value="Comoros">Comoros</option>
                  <option value="Congo">Congo</option>
                  <option value="Congo, Democratic Republic of the Congo">Congo, Democratic Republic of the Congo
                  </option>
                  <option value="Cook Islands">Cook Islands</option>
                  <option value="Costa Rica">Costa Rica</option>
                  <option value="Cote D'Ivoire">Cote D'Ivoire</option>
                  <option value="Croatia">Croatia</option>
                  <option value="Cuba">Cuba</option>
                  <option value="Curacao">Curacao</option>
                  <option value="Cyprus">Cyprus</option>
                  <option value="Czech Republic">Czech Republic</option>
                  <option value="Denmark">Denmark</option>
                  <option value="Djibouti">Djibouti</option>
                  <option value="Dominica">Dominica</option>
                  <option value="Dominican Republic">Dominican Republic</option>
                  <option value="Ecuador">Ecuador</option>
                  <option value="Egypt">Egypt</option>
                  <option value="El Salvador">El Salvador</option>
                  <option value="Equatorial Guinea">Equatorial Guinea</option>
                  <option value="Eritrea">Eritrea</option>
                  <option value="Estonia">Estonia</option>
                  <option value="Ethiopia">Ethiopia</option>
                  <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                  <option value="Faroe Islands">Faroe Islands</option>
                  <option value="Fiji">Fiji</option>
                  <option value="Finland">Finland</option>
                  <option value="France">France</option>
                  <option value="French Guiana">French Guiana</option>
                  <option value="French Polynesia">French Polynesia</option>
                  <option value="French Southern Territories">French Southern Territories</option>
                  <option value="Gabon">Gabon</option>
                  <option value="Gambia">Gambia</option>
                  <option value="Georgia">Georgia</option>
                  <option value="Germany">Germany</option>
                  <option value="Ghana">Ghana</option>
                  <option value="Gibraltar">Gibraltar</option>
                  <option value="Greece">Greece</option>
                  <option value="Greenland">Greenland</option>
                  <option value="Grenada">Grenada</option>
                  <option value="Guadeloupe">Guadeloupe</option>
                  <option value="Guam">Guam</option>
                  <option value="Guatemala">Guatemala</option>
                  <option value="Guernsey">Guernsey</option>
                  <option value="Guinea">Guinea</option>
                  <option value="Guinea-Bissau">Guinea-Bissau</option>
                  <option value="Guyana">Guyana</option>
                  <option value="Haiti">Haiti</option>
                  <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                  <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                  <option value="Honduras">Honduras</option>
                  <option value="Hong Kong">Hong Kong</option>
                  <option value="Hungary">Hungary</option>
                  <option value="Iceland">Iceland</option>
                  <option value="India">India</option>
                  <option value="Indonesia">Indonesia</option>
                  <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                  <option value="Iraq">Iraq</option>
                  <option value="Ireland">Ireland</option>
                  <option value="Isle of Man">Isle of Man</option>
                  <option value="Israel">Israel</option>
                  <option value="Italy">Italy</option>
                  <option value="Jamaica">Jamaica</option>
                  <option value="Japan">Japan</option>
                  <option value="Jersey">Jersey</option>
                  <option value="Jordan">Jordan</option>
                  <option value="Kazakhstan">Kazakhstan</option>
                  <option value="Kenya">Kenya</option>
                  <option value="Kiribati">Kiribati</option>
                  <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                  <option value="Korea, Republic of">Korea, Republic of</option>
                  <option value="Kosovo">Kosovo</option>
                  <option value="Kuwait">Kuwait</option>
                  <option value="Kyrgyzstan">Kyrgyzstan</option>
                  <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                  <option value="Latvia">Latvia</option>
                  <option value="Lebanon">Lebanon</option>
                  <option value="Lesotho">Lesotho</option>
                  <option value="Liberia">Liberia</option>
                  <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                  <option value="Liechtenstein">Liechtenstein</option>
                  <option value="Lithuania">Lithuania</option>
                  <option value="Luxembourg">Luxembourg</option>
                  <option value="Macao">Macao</option>
                  <option value="Macedonia, the Former Yugoslav Republic of">Macedonia, the Former Yugoslav Republic of
                  </option>
                  <option value="Madagascar">Madagascar</option>
                  <option value="Malawi">Malawi</option>
                  <option value="Malaysia">Malaysia</option>
                  <option value="Maldives">Maldives</option>
                  <option value="Mali">Mali</option>
                  <option value="Malta">Malta</option>
                  <option value="Marshall Islands">Marshall Islands</option>
                  <option value="Martinique">Martinique</option>
                  <option value="Mauritania">Mauritania</option>
                  <option value="Mauritius">Mauritius</option>
                  <option value="Mayotte">Mayotte</option>
                  <option value="Mexico">Mexico</option>
                  <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                  <option value="Moldova, Republic of">Moldova, Republic of</option>
                  <option value="Monaco">Monaco</option>
                  <option value="Mongolia">Mongolia</option>
                  <option value="Montenegro">Montenegro</option>
                  <option value="Montserrat">Montserrat</option>
                  <option value="Morocco">Morocco</option>
                  <option value="Mozambique">Mozambique</option>
                  <option value="Myanmar">Myanmar</option>
                  <option value="Namibia">Namibia</option>
                  <option value="Nauru">Nauru</option>
                  <option value="Nepal">Nepal</option>
                  <option value="Netherlands">Netherlands</option>
                  <option value="Netherlands Antilles">Netherlands Antilles</option>
                  <option value="New Caledonia">New Caledonia</option>
                  <option value="New Zealand">New Zealand</option>
                  <option value="Nicaragua">Nicaragua</option>
                  <option value="Niger">Niger</option>
                  <option value="Nigeria">Nigeria</option>
                  <option value="Niue">Niue</option>
                  <option value="Norfolk Island">Norfolk Island</option>
                  <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                  <option value="Norway">Norway</option>
                  <option value="Oman">Oman</option>
                  <option value="Pakistan">Pakistan</option>
                  <option value="Palau">Palau</option>
                  <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                  <option value="Panama">Panama</option>
                  <option value="Papua New Guinea">Papua New Guinea</option>
                  <option value="Paraguay">Paraguay</option>
                  <option value="Peru">Peru</option>
                  <option value="Philippines">Philippines</option>
                  <option value="Pitcairn">Pitcairn</option>
                  <option value="Poland">Poland</option>
                  <option value="Portugal">Portugal</option>
                  <option value="Puerto Rico">Puerto Rico</option>
                  <option value="Qatar">Qatar</option>
                  <option value="Reunion">Reunion</option>
                  <option value="Romania">Romania</option>
                  <option value="Russian Federation">Russian Federation</option>
                  <option value="Rwanda">Rwanda</option>
                  <option value="Saint Barthelemy">Saint Barthelemy</option>
                  <option value="Saint Helena">Saint Helena</option>
                  <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                  <option value="Saint Lucia">Saint Lucia</option>
                  <option value="Saint Martin">Saint Martin</option>
                  <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                  <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
                  <option value="Samoa">Samoa</option>
                  <option value="San Marino">San Marino</option>
                  <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                  <option value="Saudi Arabia">Saudi Arabia</option>
                  <option value="Senegal">Senegal</option>
                  <option value="Serbia">Serbia</option>
                  <option value="Serbia and Montenegro">Serbia and Montenegro</option>
                  <option value="Seychelles">Seychelles</option>
                  <option value="Sierra Leone">Sierra Leone</option>
                  <option value="Singapore">Singapore</option>
                  <option value="Sint Maarten">Sint Maarten</option>
                  <option value="Slovakia">Slovakia</option>
                  <option value="Slovenia">Slovenia</option>
                  <option value="Solomon Islands">Solomon Islands</option>
                  <option value="Somalia">Somalia</option>
                  <option value="South Africa">South Africa</option>
                  <option value="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich
                    Islands</option>
                  <option value="South Sudan">South Sudan</option>
                  <option value="Spain">Spain</option>
                  <option value="Sri Lanka">Sri Lanka</option>
                  <option value="Sudan">Sudan</option>
                  <option value="Suriname">Suriname</option>
                  <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                  <option value="Swaziland">Swaziland</option>
                  <option value="Sweden">Sweden</option>
                  <option value="Switzerland">Switzerland</option>
                  <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                  <option value="Taiwan, Province of China">Taiwan, Province of China</option>
                  <option value="Tajikistan">Tajikistan</option>
                  <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                  <option value="Thailand">Thailand</option>
                  <option value="Timor-Leste">Timor-Leste</option>
                  <option value="Togo">Togo</option>
                  <option value="Tokelau">Tokelau</option>
                  <option value="Tonga">Tonga</option>
                  <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                  <option value="Tunisia">Tunisia</option>
                  <option value="Turkey">Turkey</option>
                  <option value="Turkmenistan">Turkmenistan</option>
                  <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                  <option value="Tuvalu">Tuvalu</option>
                  <option value="Uganda">Uganda</option>
                  <option value="Ukraine">Ukraine</option>
                  <option value="United Arab Emirates">United Arab Emirates</option>
                  <option value="United Kingdom">United Kingdom</option>
                  <option value="United States">United States</option>
                  <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                  <option value="Uruguay">Uruguay</option>
                  <option value="Uzbekistan">Uzbekistan</option>
                  <option value="Vanuatu">Vanuatu</option>
                  <option value="Venezuela">Venezuela</option>
                  <option value="Viet Nam">Viet Nam</option>
                  <option value="Virgin Islands, British">Virgin Islands, British</option>
                  <option value="Virgin Islands, U.s.">Virgin Islands, U.s.</option>
                  <option value="Wallis and Futuna">Wallis and Futuna</option>
                  <option value="Western Sahara">Western Sahara</option>
                  <option value="Yemen">Yemen</option>
                  <option value="Zambia">Zambia</option>
                  <option value="Zimbabwe">Zimbabwe</option>
                </select>
              </div>
            </div>


            <div class="form-group">
              <textarea name="message" rows="5" class="form-control mt-3" placeholder="Message (Optional)"></textarea>
            </div>


            <div class="form-group mt-3">
              <input type="checkbox" name="agreed" required> I have read and accept the <a
                href="privacy-policy.html">privacy policy*</a>
            </div>


            <div class="text-center my-3"><button type="submit" title="Send Message">Send Message</button></div>

          </form>

        </div>

</div>

</section> --}}

<div id="contact" class="footer-top">

  <div class="container">

    <div class="row">

      <div class="col-lg-6">

        <div class="row">

          <div class="col-sm-6">

            <div class="footer-info">
              <h3><span><span style="color: #f99c0f">JM</span></span> nation</h3>
              <p>Since 2015, our aim has been to build & run the safest, simplest, most eﬀective & convenient services,
                in partnership with the best operators and platforms. We provide more secure logistic to more countries.
              </p>
            </div>

            <div class="col-sm-3">
              <div class="footer-links">
                <h4>Useful Links</h4>
                <ul>
                  <li><a class="scrollto" href="#home">Home</a></li>
                  <li><a class="scrollto" href="#about">About us</a></li>
                  <li><a class="scrollto" href="#services">Services</a></li>
                  <li><a class="scrollto" href="#team">Team</a></li>
                  <li><a class="scrollto" href="#pricing">Pricing</a></li>
                </ul>
              </div>

            </div>
          </div>

          <div class="col-sm-6">

            <div class="footer-links">
              <h4>Contact Us</h4>
              <p>
                <strong>Main Office: </strong> <br>
                Via Guglielmo Marconi, 219, <br>
                60125 <br> Ancona(AN)<br>
                <strong>Office 2: </strong> <br>
                Via Aldo Fiorini, 42, <br>
                60127 <br> Ancona(AN)<br>
                {{-- <strong>Bangladesh Office: </strong> <br>
                43/20 nobabgonj lean. Lalbagh, Dhaka-1211 --}}
                <strong>Phone 1: </strong><a href="tel:+393897666667">+393897666667</a><br>
                <strong>Phone 2: </strong><a href="tel:+393889883882">+393889883882</a><br>
                <strong>Phone 3: </strong><a href="tel:+393478678388">+393478678388</a><br>
                <strong>Email: </strong><a href="mailto:pointrecharge2015@gmail.com">pointrecharge2015@gmail.com</a> <br>
              </p>
            </div>

            <div class="social-links">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>

          </div>

        </div>

      </div>

      <div class="col-lg-6">

        <div class="form">

          <h4>Send us a message</h4>

          <form id="mail_form" method="post" role="form" class="php-email-form">
            <div class="form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
            </div>
            <div class="form-group mt-3">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
            </div>
            <div class="form-group mt-3">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
            </div>
            <div class="form-group mt-3">
              <textarea class="form-control" id="message" name="message" rows="5" placeholder="Message" required></textarea>
            </div>

            <div class="text-center mt-3"><button type="submit" title="Send Message">Send Message</button></div>
          </form>

        </div>

      </div>

    </div>

  </div>
</div>

<div class="container">
  <div class="copyright">
    &copy; Copyright <strong><a href="https://jmnation.com/">JM NATION</a></strong>. All Rights Reserved
  </div>
</div>

</footer>

<!-- End  Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
    class="bi bi-arrow-up-short"></i></a>
<!-- Vendor JS Files -->
<script src="{{asset('frontend')}}/assets/vendor/aos/aos.js"></script>
<script src="{{asset('frontend')}}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('frontend')}}/assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="{{asset('frontend')}}/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="{{asset('frontend')}}/assets/vendor/php-email-form/validate.js"></script>
<script src="{{asset('frontend')}}/assets/vendor/purecounter/purecounter.js"></script>
<script src="{{asset('frontend')}}/assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


<!-- Template Main JS File -->
<script src="{{asset('frontend')}}/assets/js/main.js"></script>
<script src="{{asset('frontend')}}/assets/js/script.js"></script>

<script>
  $(function()
  {
    $("#mail_form" ).submit(function( event ) {
      event.preventDefault();
      var name = $("#name").val();
      var email = $("#email").val();
      var subject = $("#subject").val();
      var message = $("#message").val();
     // alert(message);
      //return;
      var formData = new FormData();
      formData.append('name',name);
      formData.append('email',email);
      formData.append('subject',subject);
      formData.append('message',message);

      $.ajax({
        processData: false,
        contentType: false,
        url: "send_frontpage_email",
        type:"POST",
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
         },
        data: formData,

        success:function(response){
          swal("Message Send Successfully!")
          .then((value) => {
            location.reload()
});



        },
       });
     // alert(name+" "+email+" "+subject+" "+message);

});
  })
</script>

</body>
</div>

</html>
