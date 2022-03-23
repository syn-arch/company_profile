<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="/assets/vendor/bootstrap/dist/css/bootstrap.min.css"
    />
    <!-- fontawesome -->
    <link rel="stylesheet" href="/assets/vendor/fontawesome/css/all.min.css" />
    <!-- aos -->
    <link rel="stylesheet" href="/assets/vendor/aos/dist/aos.css">
    <!-- custom css -->
    <link rel="stylesheet" href="/assets/css/style.css" />

    <title>Company</title>
  </head>
  <body>
    <!-- navbar -->
    <nav
      class="navbar navbar-expand-lg navbar-light bg-white shadow shadow-sm fixed-top py-3">
      <div class="container">
        <a class="navbar-brand fw-bold" href="#"
          ><span class="primary">COM</span>PANY</a
        >
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link fw-bolder active" href="/">Home</a>
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link fw-bolder dropdown-toggle"
                href="#"
                id="navbarDropdownMenuLink"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                About
              </a>
              <ul
                class="dropdown-menu"
                aria-labelledby="navbarDropdownMenuLink"
              >
                <li><a class="dropdown-item" href="about">About Us</a></li>
                <li><a class="dropdown-item" href="team">Team</a></li>
                <li>
                  <a class="dropdown-item" href="testimonials"
                    >Testimonials</a
                  >
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link fw-bolder" href="services">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fw-bolder" href="portfolio">Portfolio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fw-bolder" href="contact">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- end navbar -->

    <!-- carousel -->
    <div
      id="carouselExampleCaptions"
      class="carousel slide"
      data-bs-ride="carousel"
    >
      <div class="carousel-indicators">
        <button
          type="button"
          data-bs-target="#carouselExampleCaptions"
          data-bs-slide-to="0"
          class="active"
          aria-current="true"
          aria-label="Slide 1"
        ></button>
        <button
          type="button"
          data-bs-target="#carouselExampleCaptions"
          data-bs-slide-to="1"
          aria-label="Slide 2"
        ></button>
        <button
          type="button"
          data-bs-target="#carouselExampleCaptions"
          data-bs-slide-to="2"
          aria-label="Slide 3"
        ></button>
      </div>
      <div class="carousel-inner">
        @foreach ($sliders as $index => $slider)
        <div class="carousel-item {{$index === 0 ? 'active' : ''}}">
          <img
            src="/assets/img/{{$slider->image}}"
            class="d-block w-100 carousel-img"
            alt="..."
          />
          <div class="carousel-caption d-none d-md-block">
            <h5>{{$slider->title}}</h5>
            <p>
             {{$slider->description}}
            </p>
          </div>
        </div>
        @endforeach

      </div>
      <button
        class="carousel-control-prev"
        type="button"
        data-bs-target="#carouselExampleCaptions"
        data-bs-slide="prev"
      >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button
        class="carousel-control-next"
        type="button"
        data-bs-target="#carouselExampleCaptions"
        data-bs-slide="next"
      >
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <!-- end carousel -->

    <!-- about us -->
    <div class="about-us mt-5">
      <div class="container">
        <div class="title-container">
          <h2 class="text-center fw-bold">ABOUT US</h2>
        </div>
        <div class="row mt-5">
          <div class="col-md-6" data-aos="fade-right">
            <h3 class="fw-bold about-us-title">
              {{$about->judul}}
            </h3>
            <p class="fw-bolder mt-4 about-us-subtitle">
             {{$about->subjudul}}
            </p>
          </div>
          <div class="col-md-6" data-aos="fade-left">
            <p>
             {{$about->deskripsi_1}}
            </p>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">
                <i class="fa fa-check-double primary"></i>
               {{$about->kelebihan_1}}
              </li>
              <li class="list-group-item">
                <i class="fa fa-check-double primary"></i>
               {{$about->kelebihan_2}}
              </li>
              <li class="list-group-item">
                <i class="fa fa-check-double primary"></i>
               {{$about->kelebihan_3}}
              </li>
              <li class="list-group-item">
                <i class="fa fa-check-double primary"></i>
               {{$about->kelebihan_4}}
              </li>
            </ul>
            <p class="mt-2">
              {{$about->deskripsi_2}}
            </p>
          </div>
        </div>
      </div>
    </div>
    <!-- end about us -->

    <!-- services -->
    <div class="services mt-5 bg-light py-5">
      <div class="container">
        <div class="title-container text-center">
          <h2 class="fw-bold">SERVICES</h2>
        </div>
        <p class="text-center mt-4">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus,
          aliquam.
        </p>
        <div class="row mt-5">
            @foreach ($services as $service)
            <div class="col-md-4">
                <div class="card border-0 text-center p-4 mt-3" data-aos="zoom-in">
                <div class="card-body">
                    <div class="card-icon">
                   <img src="/image/{{$service->image}}" alt="" class="img-fluid" width="80">
                    </div>
                    <div class="card-title fw-bolder mt-4">{{$service->title}}</div>
                    <p class="card-description mt-3">
                  {{$service->description}}
                    </p>
                </div>
                </div>
            </div>
            @endforeach

        </div>
      </div>
    </div>
    <!-- end services -->

    <!-- portfolio us -->
    <div class="portfolio-us mt-5">
      <div class="container">
        <div class="title-container">
          <h2 class="text-center fw-bold">PORTFOLIO</h2>
        </div>
        <div class="row mt-4">
            <div class="col-md-12 d-flex justify-content-center">
                <ul class="list-unstyled d-flex portfolio-filters">
                    <li data-filter="*" class="py-2 px-4 filter-active text-white">ALL</li>
                    <li data-filter=".filter-web" class="py-2 px-4">Web</li>
                    <li data-filter=".filter-design" class="py-2 px-4">Design</li>
                    <li data-filter=".filter-photo" class="py-2 px-4">Photography</li>
                </ul>
            </div>
        </div>
        <div class="row mt-5">
          <div class="col-md-12">
            <div class="mansory portfolio-container" data-aos="zoom-in-up">
              <div class="mansory-sizer"></div>

              @foreach ($portfolios as $portfolio)
                    <div class="mansory-item m-2 portfolio-item filter-web">
                        <img src="/image/{{$portfolio->image}}" alt="" class="img-fluid" />
                    </div>
                @endforeach

            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end portfolio us -->

    <!-- clients -->
    <div class="clients mt-5">
      <div class="container">
        <div class="title-container">
          <h2 class="text-center fw-bold">CLIENTS</h2>
        </div>
        <div class="row mt-5">
            @foreach ($clients as $client)

            <div class="col-md-3 pt-5 text-center" data-aos="zoom-in">
                <img
                src="/image/{{$client->image}}"
                class="img-fluid brand-image"
                alt=""
                />
            </div>
            @endforeach

        </div>
      </div>
    </div>
    <!-- end clients -->

    <!-- footer -->
    <footer class="mt-5">
      <div class="footer-top bg-dark text-white p-5">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-3">
              <h4 class="fw-bold">{{$contact->name}}</h2>
              <p>
                {{$contact->description}}
              </p>
              <strong>Phone</strong> : <span>{{$contact->telepon}} </span>
              <br />
              <strong>Email</strong> : <span>{{$contact->email}} </span>
            </div>
            <div class="col-md-2">
              <h4 class="fw-bold">Our Services</h2>
              <ul class="list-group list-unstyled">
                  @foreach ($services as $service)

                  <li class="list-item">
                      <a href="" class="text-decoration-none text-white">
                          <i class="fa fa-chevron-right primary"></i>
                          {{$service->title}}
                        </a>
                    </li>
                    @endforeach

              </ul>
            </div>
            <div class="col-md-2">
              <h4 class="fw-bold">Useful Links</h2>
              <ul class="list-group list-unstyled">
                <li class="list-item">
                  <a href="" class="text-decoration-none text-white">
                    <i class="fa fa-chevron-right primary"></i>
                    Home
                  </a>
                </li>
                <li class="list-item">
                  <a href="" class="text-decoration-none text-white">
                    <i class="fa fa-chevron-right primary"></i>
                    About Us
                  </a>
                </li>
                <li class="list-item">
                  <a href="" class="text-decoration-none text-white">
                    <i class="fa fa-chevron-right primary"></i>
                    Services
                  </a>
                </li>
                <li class="list-item">
                  <a href="" class="text-decoration-none text-white">
                    <i class="fa fa-chevron-right primary"></i>
                    Portfolio
                  </a>
                </li>
                <li class="list-item">
                  <a href="" class="text-decoration-none text-white">
                    <i class="fa fa-chevron-right primary"></i>
                    Contact
                  </a>
                </li>
              </ul>
            </div>
            <div class="col-md-3">
              <h4 class="fw-bold">Join Our Newsletter</h2>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
              <div class="input-group">
                <input
                  type="text"
                  class="form-control"
                  placeholder="yourmail@example.com"
                />
                <button
                  class="btn btn-subscribe"
                  type="button"
                  id="inputGroupFileAddon04"
                >
                  Subscribe
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-down bg-darker text-white px-5 py-3">
          <div class="container-fluid">
              <div class="row">
                  <div class="col-md-1"></div>
                  <div class="col-md-5">
                    <div class="copyright">
                        &copy; Copyright <strong>Company</strong>. All Rights Reserved
                    </div>
                    <div class="credits">
                        Designed by me
                    </div>
                  </div>
                  <div class="col-md-5">
                    <div class="social-links float-end">
                        <a href="" class="mx-2">
                            <i class="fab fa-facebook fa-2x"></i>
                        </a>
                        <a href="" class="mx-2">
                            <i class="fab fa-twitter fa-2x"></i>
                        </a>
                        <a href="" class="mx-2">
                            <i class="fab fa-instagram fa-2x"></i>
                        </a>
                        <a href="" class="mx-2">
                            <i class="fab fa-youtube fa-2x"></i>
                        </a>
                        <a href="" class="mx-2">
                            <i class="fab fa-linkedin fa-2x"></i>
                        </a>
                    </div>
                  </div>
              </div>
          </div>

      </div>
    </footer>
    <!-- end footer -->

    <!-- to top -->
    <a href="#" class="btn-to-top p-3">
        <i class="fa fa-chevron-up"></i>
    </a>
    <!-- end to top -->

    <script src="/assets/vendor/jquery/jquery-3.6.0.min.js"></script>
    <script src="/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/vendor/fontawesome/js/all.min.js"></script>
    <script src="/assets/vendor/mansory/masonry.pkgd.min.js"></script>
    <script src="/assets/vendor/aos/dist/aos.js"></script>
    <script src="/assets/vendor/isotope/isotope.pkgd.min.js"></script>
    <script src="/assets/js/app.js"></script>
  </body>
</html>
