<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title>HOME PAGE</title>
    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <link href="{{asset('assets/css/font-face.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('assets/vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('assets/vendor/font-awesome-5/css/fontawesome-all.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('assets/vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('assets/vendor/animsition/animsition.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('assets/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('assets/vendor/wow/animate.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('assets/vendor/css-hamburgers/hamburgers.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('assets/vendor/slick/slick.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('assets/vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
    <link href="{{ asset ('assets/vendor/perfect-scrollbar/perfect-scrollbar.css')}}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{asset('assets/css/theme.css')}}" rel="stylesheet" media="all">


        <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">

        <script src="{{asset('assets/js/bootstrap.bundle.js')}}" type="text/javascript" charset="utf-8" async defer></script>
    </head>
    <body>
        <nav class="navbar bg-light navbar-light navbar-expand-sm">
            <div class="container">
                <a class="navbar-brand" href="" >
                    <img  src="{{asset('assets/images/mobile.d/logo.png')}}">
                </a>
                <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#menu" type="">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="menu">

                    <ul class="navbar-nav m-auto">

                        <li class="nav-item"><a class="nav-link" href="" title="">Seek</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="" title="">Sell</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="" title="">Item1</a>
                                <a class="dropdown-item" href="" title="">Item2</a>
                                <a class="dropdown-item" href="" title="">Item3</a>
                                <a class="dropdown-item" href="" title="">Item4</a>
                            </div>
                        </li>


                        <li class="nav-item"><a class="nav-link" href="" title="">Infrom</a></li>
                        <li class="dropdown "><a class="navbar-brand" href=""><i class="fas fa-bell"></i>

                            <span class="badge badge-info"></span>
                          </a></li>
                        <li class="nav-item"><a class="nav-link" href="" title="">
                        <i class="fas fa-parking"></i></a></li>

                    </ul>
                    <a  type="button" class="btn btn-primary" href="">Register</a>

             {{-- <li class="dropdown"><a href="#">Sell</a>
                    <ul>
                        <li><a href="/shopdeliveryform">Order Form</a></li>
                        <li><a href="/shopdetails">Shop Details</a></li>
                        <li><a href="/ourshop">Our Shop</a></li>

                    </ul>
                </li> --}}

            </div>
            </div>
        </nav>



@yield('content')



{{--
<!-- Footer -->
<footer class="bg-dark  text-white">
    <!-- Grid container -->
    <br>
    <br>
    <div class="container p-4">
        <div class="row">
            <div class="col">
                <section>
                    <div class="row">
                        <div class="col-2">
                            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
                      ><i class="fab fa-facebook-f"></i></a>

                        </div>
                        <div class="col-2">
                            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
                            ><i class="fab fa-twitter"></i></a>

                        </div>
                        <div class="col-2">
                            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button" ><i class="fab fa-google"></i></a>

                        </div>
                        <div class="col-2">
                            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
                            ><i class="fab fa-instagram"></i
                          ></a>
                        </div>
                        <div class="col-2">
                            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
                            ><i class="fab fa-linkedin-in"></i
                          ></a>

                        </div>
                    <div class="col-2">
                            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
                            ><i class="fab fa-github"></i
                          ></a>


                        </div>

                    </div>
                    <br>
                    <select class="form-select bg-dark  text-white" aria-label="Default select example" name="Brand">
                        <option selected value="Audi">Audi</option>
                        <option selected value="BMW">BMW</option>
                    </select>
                    <br>
                    <select class="form-select bg-dark  text-white" aria-label="Default select example" name="Brand">
                        <option selected value="Audi">Audi</option>
                        <option selected value="BMW">BMW</option>
                    </select>











                  </section>

            </div>
          <div class="col">
            <h5 class="text-uppercase">Pursue</h5>

            <ul class="list-unstyled mb-0">
              <li>
                <a href="#!" class="text-white">About Us</a>
              </li>
              <li>
                <a href="#!" class="text-white">Press</a>
              </li>
              <li>
                <a href="#!" class="text-white">Careers (English)</a>
              </li>
              <li>
                <a href="#!" class="text-white">Advertising</a>
              </li>
              <li>
                <a href="#!" class="text-white">Help</a>
              </li>
              <li>
                <a href="#!" class="text-white">Contact</a>
              </li>
            </ul>

          </div>
          <div class="col">
            <h5 class="text-uppercase">Legal</h5>

            <ul class="list-unstyled mb-0">
              <li>
                <a href="#!" class="text-white">imprint</a>
              </li>
              <li>
                <a href="#!" class="text-white">Conditions</a>
              </li>
              <li>
                <a href="#!" class="text-white">data protection</a>
              </li>
              <li>
                <a href="#!" class="text-white">Privacy Settings</a>
              </li>
            </ul>

          </div>
          <div class="col">
            <h5 class="text-uppercase">Dealer</h5>

            <ul class="list-unstyled mb-0">
              <li>
                <a href="#!" class="text-white">Register</a>
              </li>
              <li>
                <a href="#!" class="text-white">to register</a>
              </li>
              <li>
                <a href="#!" class="text-white">our range</a>
              </li>
              <li>
                <a href="#!" class="text-white">Price list</a>
              </li>
              <li>
                <a href="#!" class="text-white">Dealer terms and conditions</a>
              </li>

            </ul>

          </div>
          <div class="col">
            <h5 class="text-uppercase">Popular</h5>

            <ul class="list-unstyled mb-0">
              <li>
                <a href="#!" class="text-white">mobile.de iOS</a>
              </li>
              <li>
                <a href="#!" class="text-white">mobile.de Android</a>
              </li>
              <li>
                <a href="#!" class="text-white">MOTOR TALK</a>
              </li>
              <li>
                <a href="#!" class="text-white">automobile.it</a>
              </li>
              <li>
                <a href="#!" class="text-white">Classifieds</a>
              </li>
              <li>
                <a href="#!" class="text-white">Adevinta</a>
              </li>
            </ul>

          </div>


        </div>






      <section class="">




 --}}

          {{-- <div class="col-lg-3 col-md-6 mb-4 mb-md-0">

          </div> --}}


      {{-- </section>
      <!-- Section: Links -->


<br>
<br>
  </footer> --}}



  {{-- <footer class="mainfooter col img-footer-logo text-dark" role="contentinfo">
            <div class="row bg-success">
                <div class="col-md-3 col-sm-3 col-xs-3">&nbsp;</div>
            </div>
            <div class="footer-middle">
                <div class="container">
                    <div class="row">
                        <div class="col-sm text-center">
                            <a href="https://edu.abidingtech.com">
                                <img class="img-fluid logo" src="/assets/img/atcelogo.png" alt="Abiding Tech Computer Education" data-pagespeed-url-hash="1538027628" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                            </a>
                            <div class="h5 top20">
                                Address:
                                11-E Near Rathore House, Block E, Satellite Town, Gujranwala

                                                            </div>
                            <h4 class="top30">Follow Us</h4>
                            <ul class="social-network social-circle">
                                <li><a href="https://www.facebook.com/ATCEofficial/" target="_blank" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="https://www.youtube.com/channel/UC7e6iVdJ5CNSpxdmNmObDFw" target="_blank" class="youtube" title="Abiding Tech Youtube"><i class="fa fa-youtube"></i></a>
                                </li>
                            </ul>
                        </div>

                        <div class="col-sm text-center">

                            <!-- Links -->
                            <h6 class="text-uppercase font-weight-bold h2">Contact</h6>
                            <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">

                            <p class="h4">
                                <i class="fa fa-envelope mr-3"></i> support@edu.abidingtech.com</p>
                            <p class="h4">
                                <i class="fa fa-whatsapp mr-3"></i> + 92 303 6850464</p>
                            <p class="h4">
                                <i class="fa fa-whatsapp mr-3"></i> + 92 305 7718742</p>
                        </div>


                    </div>
                    <div class="row">
                        <div class="col-md-12 copy top20">
                            <p class="text-center">© Copyright 2023 - Abiding Tech Computer Education. All rights
                                reserved.</p>
                        </div>
                    </div>


                </div>
            </div>
            <div class="modal fade" id="playModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
      <div class="modal-header">
          <h5 class="modal-title" id="title">Download our Android app from Playstore</h5>
          <button data-dismiss="modal" type="button" class="close" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
      </div>
        <div class="text-center modal-body">
            <div class="">Download our Android  to have awesome experience</div>
            <div class="">
                <a href="https://play.google.com/store/apps/details?id=com.abidingtech.edu.wd"><img class="img-fluid" src="/assets/images/logo/playstore.png" alt="playstoer" data-pagespeed-url-hash="325363798" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>

            </div>

        </div>

      </div>
    </div>
  </div>
        </footer> --}}


  <!-- Footer -->



<!-- jequery plugins -->
<script src="js/jquery.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/validation.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/scrollbar.js"></script>

<!-- main-js -->
<script src="js/script.js"></script>

</body>
</html>
