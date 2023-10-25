@extends('layouts.masterfront')
@section('content')



<div class="row">

    <div class="col"> <img src="{{asset('assets/images/mobile.d/homebg.png')}}"></div>
      </div>
  </div>


<div class="container">
    <div class="container">
        <div class="container-fluid mt-5 mb-3 bg-light">



            <div class="card" style="">
                <h5 class="card-title " style="color:blue"></h5><br>
                <div class="card-body" >
                    <div class="row">
                            <div class="col">


                                <ul class="list-group">
                                    <li class="list-group-item active"><i class="fas fa-motorcycle active" ></i></li>
                                    <li class="list-group-item "><i class="fas fa-motorcycle"></i></li>
                                    <li class="list-group-item"><i class="fas fa-motorcycle"></i></li>
                                    <li class="list-group-item"><i class="fas fa-motorcycle"></i></li>

                                  </ul>
                            </div>
                            <div class="col">
                                <label>Brand</label>
                                <select class="form-select" aria-label="Default select example" name="Brand">
                                    <option selected value="Audi">Audi</option>
                                    <option selected value="BMW">BMW</option>
                                </select>
                                <label>Payment method</label><br>
                                <button class="btn btn-light">Buy</button>
                                <button class="btn btn-light">Lease</button>

                            </div>
                            <div class="col">
                                <label>Model</label>
                                <select class="form-select" aria-label="Default select example" name="Model">
                                    <option selected value="">114</option>
                                    <option selected value="">115</option>
                                    <option selected value="">116</option>
                                    <option selected value="">117</option>
                                </select>
                                <label>Price until</label>
                                <select class="form-select" aria-label="Any" name="Price until">
                                    <option selected value="">$5000</option>
                                    <option selected value="">$10000</option>
                                    <option selected value="">$20000</option>
                                    <option selected value="">$30000</option>
                                </select>
                                </div>



                            <div class="col">
                                <label>Registration date form</label>
                                <select class="form-select" aria-label="Any" name="Registration date form">
                                    <option selected value="">2001</option>
                                    <option selected value="">2002</option>
                                    <option selected value="">2003</option>
                                    <option selected value="">2004</option>
                                </select>
                                <label>Town or Postcode</label>
                                <input class="form-control" id="postcode" type="text" name="postcode">

                            </div>

                            <div class="col">
                                <label>Miles to</label>
                                <select class="form-select" aria-label="Any" name="Miles to">
                                    <option selected value="">5000</option>
                                    <option selected value="">10000</option>
                                    <option selected value="">20000</option>
                                    <option selected value="">30000</option>
                                </select>
                              <button class="btn btn-warning "> Offers</button>
                            </div>

                        </div>
                    </div>


                {{-- <a class="btn btn-warning " role="button" href="">save</a> --}}

            </div>

</div>
<div class="container-fluid mt-5 mb-3 bg-light">

<div class="row text-center">

        <div class="col-6">
            <div class="card" style="">
                <div class="card-body" >
                    <div class="row">
                        <div class="col-6">
                            <img src="https://static.classistatic.de/consumer-webapp/static/ObsBanner.33d04a1812aaf82005f0..png">
                        </div>

                        <div class="col-6">
                            <h3>Clicked. Bought. Delivered.</h3>
                            <p>Buy cars online and have them delivered - with online purchase from mobile.de</p>
                            <a class="btn btn-light " role="button" href="">8020 Online Purchase Offers</a>

                        </div>

                    </div>

                </div>

            </div>
        </div>

        <div class="col-6">

            <div class="card" style="">
                <div class="card-body" >
                    <div class="row">
                        <div class="col-6">
                            <img src="https://static.classistatic.de/consumer-webapp/static/LeasingBanner.2d4d0a0ae61744583512..png">

                        </div>

                        <div class="col-6">
                            <h3>Leasing bargains</h3>
                            <p>Exclusive offers for private and commercial.</p>
                            <a class="btn btn-light " role="button" href="">show leasing deals</a>

                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>



    <div class="container-fluid mt-5 mb-3 bg-light">



        <div class="card" style="">

              <h5 class="card-title ">mobile.de magazine</h5><hr>
              <div class="card-body" >
              <div class="row">

                <div class="col-6">

                  <img src="https://images.prismic.io/shacarlacca/29d7aeba-080c-41ab-b2dc-52e142021958_Elektromobilit%C3%A4t_Deutschland.jpg?auto=compress,format&w=500&h=500">

                 <h4 class="card-text" >Electromobility</h4>
                    <h4 class="card-text" >Is Germany ready for e-mobility?</h4>
                 <p class="card-text" > The mammoth task of driving a transition: A lot has to happen so that Germany becomes fit for e-mobility and we meet the climate goals in 2035. We present five areas that are working or still have potential.</p>

                </div>

          <div class="col-6">
            <div class="row">
                <img src="https://images.prismic.io/shacarlacca/d30a5064-bee6-4682-8275-49bb198fdf81_fiat-500-40.jpg?auto=compress,format&rect=0,100,1920,1080&w=500&h=500">

                    <h4 class="card-text" >From the editorial team</h4>
                    <h4 class="card-text" >Tuning for electric vehicles</h4>
                    <p class="card-text" > We looked at what is possible to make the electric car no longer look so good.</p>

            </div>
            <div class="row">
                <img src="https://images.prismic.io/shacarlacca/82f4e128-105e-4869-a21b-cfd4634d7fc0_Aufmacher_induktivesLaden02.jpg?auto=compress,format&w=500&h=500">
                <h4 class="card-text" >Electromobility</h4>
                <h4 class="card-text" >When will inductive charging come?</h4>
                <p class="card-text" >We know it with smartphones. Charging without cables. There is a lot of work being done on this with the electric car.</p>
            </div>
            <div class="row">
                <img src="https://images.prismic.io/shacarlacca/71186c6f-3f96-47b1-961c-67039a096856_Im+Oktober+solltest+Du+Winterreifen+aufziehen+.jpeg?auto=compress,format&w=500&h=500">
                <h4 class="card-text" >counselor</h4>
                <h4 class="card-text" >Test winner: The best winter tires</h4>
                <p class="card-text" >What makes a good winter tire? All information about winter tire requirements, tire changes and tests.</p>
            </div>
        </div>
        </div>
    </div>
          </div>
     </div>
  </div>




    <div class="container-fluid mt-5 mb-3 bg-light">
        <div class="row ">

            <div class="col-6">

                <div class="card" style="">
                    <div class="card-body" >
                        <div class="row">
                            <div class="col-6">
                                <img src="{{asset('assets/images/mobile.d/financing.png')}}">
                            </div>

                            <div class="col-6">
                                <h3>Financing made easy</h3>
                                <p>Get online financing in just a few minutes.</p>
                                <a class="btn btn-light " role="button" href="">Discover more</a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>




            <div class="col-6">

                <div class="card" style="">
                    <div class="card-body" >
                        <div class="row">
                            <div class="col-6">
                                <img src="{{asset('assets/images/mobile.d/sell.png')}}">

                            </div>

                            <div class="col-6">
                                <h3>Sell ​​your vehicle</h3>
                                <p>To verified dealers in your area or to over 14 million interested parties.</p>
                                <a class="btn btn-light " role="button" href="">show sales value</a>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>




    <div class="container-fluid mt-5 mb-3 bg-light">

        <div class="row">

                <div class="col">

                <div class="card" style="">

                    <h5 class="card-title ">Buy, sell, finance & lease used cars? Or new car? Mobile.de!</h5><br>
                    <hr>
                    <div class="card-body" >
                        <div class="row">
                            <div class="col-6">
                                <img src="https://images.prismic.io/shacarlacca/f5c353af-a1ce-407c-ad5b-6f7f0bffe7a1_Character_CouchBesprechung.png?auto=compress,format&w=500&h=500">
                            </div>

                            <div class="col-6">
                                <p>Here you will find everything that has to do with vehicles - easily get an overview of the entire car market. Over 1.2 million vehicles wait for you here every day.</p>
                                <h5>mobile.de is Germany's largest vehicle market</h5>
                                <p>mobile.de is Germany's largest vehicle market where you can easily buy or sell a car . Here you can find used cars , new cars , classic cars, classic cars , small cars and compact cars, SUVs , luxurious limousines and cheap cars. You can sell your used car , contact new car and used car sellers. You can find out more about car brands and models , find out about vehicle financing, compare financing offers and monthly payments, or find leasing offers. You will also find car tips, tests, guides and much more..</p>


                            </div>
                            <div class="row">
                                <div class="col-3">
                                    <img src="https://images.prismic.io/shacarlacca/b9c7408e-f717-444b-98fe-ecf3be76e4b9_Character_Autokaeufer2.png?auto=compress,format">
                                </div>

                                <div class="col-3">
                                    <h5>Are you thinking about selling a car?</h5>
                                    <p>Then you can sell your used car here for free. Simple and convenient. At the maximum price via advertisement or quickly via express sale at a mobile.de purchasing station.</p>
                                </div>
                                <div class="col-3">
                                    <img src="https://prismic-io.s3.amazonaws.com/shacarlacca/01e20601-b9fb-49af-83fa-c080cfa05552_Home_Illu_Frau_Flipcharr.png">
                                </div>
                                <div class="col-3">
                                    <h5>Are you thinking of buying a used car?</h5>
                                    <p>Then you can compare numerous offers here and contact sellers directly. Professional car dealers or private sellers, company vehicles from commercial providers or annual cars. Also with a used car guarantee or quality seal.</p>
                                </div>

              <div class="row">
                            <div class="col-3">
                                        <img src="https://prismic-io.s3.amazonaws.com/shacarlacca/bc5b3c9a-03a0-40d1-ba9d-57206adffd9b_Home_Illu_Mann_pra%CC%88sentiert.png">
                                    </div>

                                    <div class="col-3">
                                        <h5>Are you thinking about buying a new car?</h5>
                                        <p>Then you will find a huge selection of new cars here: whether cars with daily registration, demonstration vehicles or new EU cars.</p>
                                    </div>

                                    <div class="col-3">

                                <img src="https://prismic-io.s3.amazonaws.com/shacarlacca/d3d85b7a-6e84-4893-828f-7d5adc4e6600_Home_Illu_Mann_sitzt_Handy.png">
                            </div>

                            <div class="col-3">
                                <h5>Do you think leasing?</h5>
                                <p>Whether you buy or lease, you will find what you are looking for with us. Search for your dream car and find suitable leasing offers from our dealers in your area.</p>

                            </div>


                </div>
                <div class="row text-center">

                        <p>
                            Whatever you think, you can stay mobile with us.
                        </p>
                        <h5>Don't just think car.
                            Think mobile.de</h5>
                    </div>
            </div>
        </div>


    </div>
<br>

</div>


     <div class="container-fluid mt-5 mb-3 bg-light">

        <div class="card" style="">
                <h5 class="card-title ">Popular car brands and more on our vehicle market</h5>
                <hr>
            <div class="card-body" >
                <div class="row">

                    <div class="col-2">
                       <h5>Audi</h5>
                       <a href="">Audi A1</a>
                       <p>Audi A3</p>
                       <p>Audi A4</p>
                       <p>Audi A6</p>
                       <p> Audi Q5</p>

                       <h5>Other car brands</h5>
                       <p>Citroën</p>
                       <p>Fiat</p>
                       <p>Peugeot</p>
                       <p>Renault</p>
                       <p>Skoda</p>
                    </div>
                    <div class="col-2">
                            <h5>BMW</h5>
                       <p>BMW 1 Series</p>
                       <p>BMW 2 Series</p>
                       <p>BMW 3 Series</p>
                       <p>BMW 5 Series</p>
                       <p> BMW X1</p>

                       <h5>Car brands from Asia</h5>
                       <p>Hyundai</p>
                       <p>Mazda</p>
                       <p>Mitsubishi</p>
                       <p>Nissan</p>
                       <p>Toyota</p>

                     </div>
                    <div class="col-2">
                            <h5>ford</h5>
                       <p>Ford Ecosport</p>
                       <p>Ford Fiesta</p>
                       <p>Ford Focus</p>
                       <p>Ford Ka</p>
                       <p> Ford Mondeo</p>

                       <h5>Car dealerships nearby</h5>
                            <p>Car dealerships in Berlin</p>
                            <p>Car dealerships in Frankfurt</p>
                            <p>Car dealerships in Cologne</p>
                            <p>Car dealerships in Hamburg</p>
                            <p>Car dealerships in Munich</p>


                     </div>
                        <div class="col-2">
                            <h5>Mercedes Benz</h5>
                       <p>Mercedes B-Class</p>
                       <p>Mercedes C-Class</p>
                       <p>Mercedes CLA</p>
                       <p>Mercedes E-Class</p>
                       <p>Mercedes GLA</p>

                       <h5> Popular</h5>
                            <p>Buy a car online</p>
                            <p>Purchase agreement for the car</p>
                            <p>Used car leasing</p>
                            <p>Audi leasing</p>
                            <p>E-car leasing</p>

                    </div>
                    <div class="col-2"></div>
                        <h5>Opel</h5>
                        <p>Opel Adam</p>
                        <p>Opel astra</p>
                        <p>Opel Corsa</p>
                        <p>Opel Insignia</p>
                        <p> Opel Mokka</p>

                    </div>
                    <div class="col-2"></div>
                        <h5>VW</h5>
                        <p>VW Golf</p>
                        <p>VW Polo</p>
                        <p>VW Passat</p>
                        <p>VW Touran</p>
                        <p> VW up!</p>

                    </div>

                 </div>



            </div>
        </div>
    </div>






@endsection
