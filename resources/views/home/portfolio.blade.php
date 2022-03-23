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
    <link rel="stylesheet" href="/assets/vendor/aos/dist/aos.css" />
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

    <!-- breadcumbs -->
    <div class="breadcumbs py-2">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center text-white">
                <h2>Portfolio</h2>
                <ol class="d-flex list-unstyled">
                    <li>Home</li>
                    <li>Portfolio</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- end breadcumbs -->

    <!-- teams -->
    <div class="teams bg-light py-5">
        <div class="container">
             <div class="title-container">
                <h2 class="text-center fw-bold">Portfolio</h2>
            </div>
            <p class="text-center mt-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quidem modi vero voluptas ea molestias eum illo, ducimus eius quisquam repellendus accusamus rerum! Repellendus enim incidunt assumenda pariatur, quisquam eveniet numquam.</p>
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
    <!-- end teams -->

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
