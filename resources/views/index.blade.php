<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link
    rel="stylesheet"
    href="https://unpkg.com/swiper@8/swiper-bundle.min.css"
  />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
</head>
<body>
    <!-- contianer -->
    <!-- Header Section -->
    <section class="header__main bg-light ">
    <div class="container">
        <h1 class="header__title">Hier finden Sie unsere Aktionsanlagen.</h1>
        <p class="header__subtitle">
          Neben dem attraktiven Preis, haben Sie den Vorteil einer schnelleren
          Lieferung.
        </p>
    </div>
      </section>
      <!-- End Header Section -->
  <div class="container">
      <!-- Showcase Section -->
      <section class="showcase__main">
        <h2 class="showcase__title">Click & Collect – leicht gemacht</h2>
        <h3 class="showcase__subtitle">
          Mobile Pickup Stationen, Übergabeautomaten und Lieferstationen
        </h3>
        <p class="showcase__parg">
          Mit unseren kompakten Stand-Alone Abholboxen wollen wir Warenübergabe
          sicherer machen. Übergabe kann dank der Paketboxen kontaktlos
          erfolgen. Unsere Plug & Play Anlagen können im Innen- und Außenbereich
          aufgestellt werden. Angepasst auf das stetig steigende Interesse des
          Einzelhandels und kleinerer Unternehmen, sowie der momentanen
          Situation fokussieren wir unsere Kapazitäten auf günstige und eine
          Schließfachlösungen für Jedermann.
        </p>
        <!--
       <div>
          <img
          class="showcase__img"
          src="./img/media.svg"
          alt="locker"
        />
        <h2 class="clc--main">Kontaktlose Übergabe & Lieferung</h2>
        <span class="showcase__clc clc-1 frist">Kontaklose Übergabeprozesse<span>
        <span class="showcase__clc clc-2">Sichere Lieferung von Waren oder Paketen</span>
        <span class="showcase__clc clc-3">Simple Inbetriebnahme-Plug and Play</span>
        <span class="showcase__clc clc-4">Sofort einsetzbar</span>
        <span class="showcase__clc clc-5">Liferzeit auf Anfrage<span>
       </div>
       -->
       <div id="Kontaktlose">

         <div class="Kontaktlose-img">
           <img height="300px" width="300px" src="{{url('lockers_section.svg')}}" alt="">
         </div>

         <div class="Kontaktlose-content">
          <h2>Kontaktlose Übergabe & Lieferung</h2>
          <ul>
            <li>Kontaklose Übergabeprozesse</li>
            <li>Sichere Lieferung von Waren oder Paketen</li>
            <li>Simple Inbetriebnahme-Plug and Play</li>
            <li>Sofort einsetzbar</li>
            <li>Liferzeit auf Anfrage</li>
          </ul>
         </div>

       </div>
      </section>

      <!-- End Showcase Section -->

      <!-- Angebote Section -->
      <section class="angebote__main">
        <h2 class="angebote__title">Neue Angebote</h2>

        <div class="angebote__product">
          <div class="product__content p-4">
            <h2 class="product__title">CoolLocker</h2>
            <span class="product__price">ab 20.000 EUR</span>
            <p class="product__parg">
              The cool lockers locker system is a versatile, electronically controllable pick-up station designed according to the latest technology: Intelligent temperature control creates different temperature zones in the compartments - whether chilled, frozen or tempered.
            </p>
            <button
              data-toggle="modal"
              data-target="#modal__product__one"
              class="product__button"
            >
              Tecnische Daten
            </button>
          </div>

          <div class="product__img-1">
            <img src="./lastimg/test.jpg" alt="locker" />
          </div>
        </div>

        <!-- Modal One for Product One -->
        <div
          class="modal fade"
          id="modal__product__one"
          tabindex="-1"
          role="dialog"
          aria-labelledby="exampleModalLongTitle"
          aria-hidden="true"
        >
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">
                  Cool lockers
                </h5>
                <button
                  type="button"
                  class="close"
                  data-dismiss="modal"
                  aria-label="Close"
                >
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <ul class="list-group">
                  <li class="list-group-item">high strength</li>
                  <li class="list-group-item">insulated</li>
                  <li class="list-group-item"> laminated panels</li>
                  <li class="list-group-item">the doors are made of 3mm thick aluminium</li>
                  <li class="list-group-item"> All other parts are made of high quality stainless steel and plastic</li>
                  <li class="list-group-item">The locker systems can be installed indoor as well as outdoor. </li>

                  <li class="list-group-item list-group-item-danger ">
                    Price:28000
                  </li>
                </ul>
              </div>
              <div class="modal-footer">
                <button
                  type="button"
                  class="btn btn-outline-danger"
                  data-dismiss="modal"
                >
                  Close
                </button>
                <a target="_blank" href="https://www.locktec.com/kontakt/" class="btn btn-outline-danger"
                  >Contact us</a
                >
              </div>
            </div>
          </div>
        </div>

        <div class="angebote__product">
          <div class="product__img-2">
            <img src="./lastimg/csm_locksafe_white_adc369fbe6.jpg" alt="locker" />
          </div>
          <div class="product__content p-4">
            <h2 class="product__title">Locksafe</h2>
            <span class="product__price">ab 10.000 EUR</span>
            <p class="product__parg">
              This luggage storage facility was developed for public use. Due to the solid workmanship, it offers a high level of security. Locksafe5 can be used as a digital safe, as cell phone locker, laptop locker, left luggage locker, wardrobe locker, to store handbags, shopping bags, skis and snowboards, golf bags or strollers – the various locker sizes provide ample storage space for luggage of all sizes.
            </p>
            <button
              data-toggle="modal"
              data-target="#modal__product__two"
              class="product__button"
            >
              Tecnische Daten
            </button>
          </div>
        </div>

        <!-- Modal One for Product two -->
        <div
          class="modal fade"
          id="modal__product__two"
          tabindex="-1"
          role="dialog"
          aria-labelledby="exampleModalLongTitle"
          aria-hidden="true"
        >
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">
                  Locksafe
                </h5>
                <button
                  type="button"
                  class="close"
                  data-dismiss="modal"
                  aria-label="Close"
                >
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">


                  <ul class="list-group">
                    <li class="list-group-item">made of 1.5mm thick</li>
                    <li class="list-group-item">powder-coated sheet steel</li>
                    <li class="list-group-item">the locker floor of 1.5 mm thick stainless steel</li>
                    <li class="list-group-item">The fifth generation of smart lockers is equipped with a wider and more accessible touch screen user station</li>
                    <li class="list-group-item">a barcode ticket scanner and LED lights as an occupancy display</li>
                    <li class="list-group-item"> The system can be used both, indoors and outdoors.</li>


                    <li class="list-group-item list-group-item-danger">
                      Price:10000
                    </li>

                  </ul>





              </div>
              <div class="modal-footer">
                <button
                  type="button"
                  class="btn btn-outline-danger"
                  data-dismiss="modal"
                >
                  Close
                </button>
                <a target="_blank" href="https://www.locktec.com/kontakt/" class="btn btn-outline-danger"
                  >Contact us</a
                >
              </div>
            </div>
          </div>
        </div>

        <div class="angebote__product">
          <div class="product__content">
            <h2 class="product__title"> Servicebox</h2>
            <span class="product__price">ab 20.000 EUR</span>
            <p class="product__parg">
              Servicebox is an electronically controlled locker system designed for the unattended handover of goods, packages and services. It is used as a parcel station in internal transfer processes and also as a pickup station for customers or recipients. Due to the multi carrier function, a these click & collect lockers can be used simultaneously by postal service providers, courier services and other service providers.
            </p>
            <button
              data-toggle="modal"
              data-target="#modal__product__three"
              class="product__button"
            >
              Tecnische Daten
            </button>
          </div>

          <div class="product__img-3">
            <img src="./lastimg/Servicebox 1 (2).jpg" alt="locker" />
          </div>
        </div>

        <!-- Modal One for Product Three -->
        <div
          class="modal fade"
          id="modal__product__three"
          tabindex="-1"
          role="dialog"
          aria-labelledby="exampleModalLongTitle"
          aria-hidden="true"
        >
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">
                  Servicebox
                </h5>
                <button
                  type="button"
                  class="close"
                  data-dismiss="modal"
                  aria-label="Close"
                >
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <ul class="list-group">
                  <li class="list-group-item">Compartment housing</li>
                  <li class="list-group-item">user station and locker doors are made of 1.5 mm thick galvanized steel</li>
                  <li class="list-group-item"> The locker system can be adjusted indoors as well as outdoors.</li>


                  <li class="list-group-item list-group-item-danger">
                    Price:20,000
                  </li>
                </ul>
              </div>
              <div class="modal-footer">
                <button
                  type="button"
                  class="btn btn-outline-danger"
                  data-dismiss="modal"
                >
                  Close
                </button>
                <a target="_blank" href="https://www.locktec.com/kontakt/" class="btn btn-outline-danger"
                  >Contact us</a
                >
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- End Angebote Section -->

      <!-- Carousel Section -->




      <section class="carousel__main">
        <h2 class="carousel__title">Lockers</h2>
        <p class="carousel__parg">Suchen Sie in den Lockers.</p>
        @foreach($categories as $category)
        <div class="carousel__product">
            <h2 class="carousel__product__title">{{$category->title}}</h2>

        <!-- CLICK & Collect -->

          <!-- Slider main container -->
          <div class="swiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
              <!-- Slides -->
              @foreach($category->actions as $action)
              <div class="swiper-slide">
                <img src="{{asset('storage/'.$action->image_path)}}" alt="">
               <h2 >{{$action->title}}</h2>
                <p>{{$action->body}}</p>
                <div class="swiper__price__footer">
                  <span class="swiper__price">ab {{$action->price}}EUR</span>
                  <button
                  data-toggle="modal"
                  data-target="#modal__product__one"
                  class="swiper__button"
                >
                  Tecnische Daten
                </button>
                 </div>
              </div>

              @endforeach
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>

            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev text-danger"></div>
            <div class="swiper-button-next text-danger"></div>

          </div>



        </div>
        @endforeach




      </section>


    </div>


    <script src="https://kit.fontawesome.com/ca11177b7a.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js" integrity="sha512-H6cPm97FAsgIKmlBA4s774vqoN24V5gSQL4yBTDOY2su2DeXZVhQPxFK4P6GPdnZqM9fg1G3cMv5wD7e6cFLZQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/ScrollTrigger.min.js" integrity="sha512-5efjkDjhldlK+BrHauVYJpbjKrtNemLZksZWxd6Wdxvm06dceqWGLLNjZywOkvW7BF032ktHRMUOarbK9d60bg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script src="{{ asset('js/custom.js') }}" ></script>
</body>
</html>
