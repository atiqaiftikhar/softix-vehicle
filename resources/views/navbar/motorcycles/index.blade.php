@extends('layouts.masterfront')
@section('content')

<div class="container">
    <div class="container">
        <br>
        <br>

        <div class="container-fluid mt-5 mb-3 bg-light">
            <h1>Detailed search: Motorcycles – new or used</h1>
            <div class="row">
                <div class="col-8">

                </div>
                <div class="col-4">
                    <div class="row" >
                        <div class="col-6">
          <i class="fas fa-stars"></i><h6>save this search</h6>

                        </div>
                        <div class="col-6">
                            <button type="button" class="btn btn-warning lg">Offers</button>

                        </div>
                    </div>



                </div>

            </div>



            <div class="card" style="">
                <div class="card-body" >
                    <h4>Basic data</h4>
                    <hr>

                    <div class="row" >
                        <h6>Vehicle condition</h6>
                        <div class="col-4">
                            <div class="row">
                                <div class="col-4">
                                    <input class="form-radio-input" type="radio" name="" id="">
                                    <label for="" class="form-radio-label">Any</label>
                                </div>
                                   <div class="col-4">
                                    <input class="form-radio-input" type="radio" name="" id="">
                                    <label for="" class="form-radio-label">New</label>
                                  </div>
                                  <div class="col-4">
                                    <input class="form-radio-input" type="radio" name="" id="">
                                <label for="" class="form-radio-label">Needed</label>

                              </div>



                        </div>
                        </div>
                        <div class="col-4">

                        </div>
                        <div class="col-4">

                        </div>
                        <br>
                    </div>



                  <div class="row">

                    <div class="col-4">

                        <h6><label>Brand</label></h6>
                        <select class="form-select" aria-label="Default select example" name="brand">
                            <option selected value="">Any</option>
                            <option selected value="">Access Engine</option>
                            <option selected value="">Adly</option>
                            <option selected value="">Aeon</option>
                        </select>
                    </div>
                    <div class="col-4">
                       <h6> <label>Model</label></h6>
                        <input class="form-control" id="model" type="text" name="postcode" placeholder="e.g Brutale 1090, R 1200">

                    </div>
                    <div class="col-4">

                    </div>
                </div>
<br>
                <h6>Vehicle type</h6>

            <div class="row">
                <div class="col-3">
                    <input type="checkbox" id="" name="">
                        <label>Chopper/Cruiser</label>
                        <br>
                        <input type="checkbox" id="" name="">
                        <label>Dirt Bike</label>
<br>
                        <input type="checkbox" id="" name="">
                        <label>Enduro/travel enduro</label>
                        <br>

                        <input type="checkbox" id="" name="">
                        <label>Trailer/sidecar</label>
                        <br>
                        <input type="checkbox" id="" name="">
                        <label>Small/light motorcycle</label>

                </div>
                <div class="col-3">
                    <input type="checkbox" id="" name="">
                    <label>Moped/Mokick/Moped</label>
                    <br>
                    <input type="checkbox" id="" name="">
                    <label>motorcycle</label>
                    <br>
                    <input type="checkbox" id="" name="">
                    <label>Naked bike</label>
                    <br>
                    <input type="checkbox" id="" name="">
                    <label>pocket bike</label>
                    <br>
                    <input type="checkbox" id="" name="">
                    <label>Quad</label>
                </div>
                <div class="col-3">
                    <input type="checkbox" id="" name="">
                    <label>
                        Rally/Cross</label>
                        <br>
                    <input type="checkbox" id="" name="">
                    <label>Racing</label>
                    <br>
                    <input type="checkbox" id="" name="">
                    <label>Roller/scooter</label>
                    <br>
                    <input type="checkbox" id="" name="">
                    <label>Athlete/super athlete</label>
                    <br>
                    <input type="checkbox" id="" name="">
                    <label>Sports tourer</label>

                </div>
                <div class="col-3">
                    <input type="checkbox" id="" name="">
                    <label>Street Fighter</label>
                    <br>
                    <input type="checkbox" id="" name="">
                    <label>Great motorcycle</label>
                    <br>
                    <input type="checkbox" id="" name="">
                    <label>Tourer</label>
                    <br>
                    <input type="checkbox" id="" name="">
                    <label>Trike</label>
                    <br>
                    <input type="checkbox" id="" name="">
                    <label>Other</label>

                </div>
            </div>
            <br>
                <h6>Price</h6>
                <div class="row">
                    <div class="col-3">
                        <select class="form-select" aria-label="Any" name="Price fromd">
                            <option selected value="">$5000</option>
                            <option selected value="">$10000</option>
                            <option selected value="">$20000</option>
                            <option selected value="">$30000</option>
                        </select>

                    </div>
                    <div class="col-3">
                        <select class="form-select" aria-label="Any" name="Price until">
                            <option selected value="">$5000</option>
                            <option selected value="">$10000</option>
                            <option selected value="">$20000</option>
                            <option selected value="">$30000</option>
                        </select>

                    </div>
                    <div class="col-6">

                    </div>

                </div>
                <h6>Initial registration </h6>
                <div class="row">
                 <div class="col-3">
                     <select class="form-select" aria-label="from" name="Price until">
                         <option selected value="">2001</option>
                         <option selected value="">2002</option>
                         <option selected value="">2003</option>
                         <option selected value="">2004</option>
                     </select>

                 </div>
                 <div class="col-3">
                     <select class="form-select" aria-label="until" name="Price until">
                         <option selected value="">2010</option>
                         <option selected value="">2011</option>
                         <option selected value="">2012</option>
                         <option selected value="">2013</option>
                     </select>

                 </div>
                 <div class="col-6">

                 </div>

                </div>

                <h6>Kilometre</h6>
                <div class="row">
                 <div class="col-3">
                     <select class="form-select" aria-label="from" name="Price until">
                         <option selected value="">20000</option>
                         <option selected value="">30000</option>
                         <option selected value="">40000</option>
                         <option selected value="">20000</option>
                     </select>

                 </div>
                 <div class="col-3">
                     <select class="form-select" aria-label="until" name="Price until">
                         <option selected value="">10000</option>
                         <option selected value="">20000</option>
                         <option selected value="">30000</option>
                         <option selected value="">40000</option>
                     </select>

                 </div>
                 <div class="col-6">

                 </div>

                </div>
                <br>
                <br>

                <h6>Performance</h6>
                <div class="row">
                    <div class="col-3">
                        <select class="form-select" aria-label="Any" name="Price fromd">
                            <option selected value="">$5000</option>
                            <option selected value="">$10000</option>
                            <option selected value="">$20000</option>
                            <option selected value="">$30000</option>
                        </select>

                    </div>
                    <div class="col-3">
                        <select class="form-select" aria-label="Any" name="Price until">
                            <option selected value="">$5000</option>
                            <option selected value="">$10000</option>
                            <option selected value="">$20000</option>
                            <option selected value="">$30000</option>
                        </select>

                    </div>
                    <div class="col-6">
                        <div class="row">
                            <div class="col-2">
                                <input class="form-radio-input" type="radio" name="" id="">
                                <label for="" class="form-radio-label">P.S</label>

                            </div>
                            <div class="col-2">
                                <input class="form-radio-input" type="radio" name="" id="">
                                <label for="" class="form-radio-label">kW</label>

                            </div>
                            <div class="col-8">

                            </div>
                        </div>

                    </div>

                </div>
<br>

                <div class="row">
                    <div class="col-3">
                        <h6>country</h6>
                        <select class="form-select" aria-label="Any" name="Price until">
                            <option selected value="">Any</option>
                            <option selected value="">germany</option>
                            <option selected value="">egypt</option>
                            <option selected value="">albania</option>
                        </select>
                    </div>
                    <div class="col-3">
                        <h6>Location please</h6>
                        <input class="form-control" id="location" type="text" name="location" >


                    </div>
                    <div class="col-3">
                        <h6>perimeter</h6>
                        <select class="form-select" aria-label="Any" name="Price until">
                            <option selected value="">$5000</option>
                            <option selected value="">$10000</option>
                            <option selected value="">$20000</option>
                            <option selected value="">$30000</option>
                        </select>

                    </div>
                    <div class="col-3">

                    </div>
                </div>



            </div>
          </div>

          <div class="card" style="">
            <div class="card-body" >
                <h4>engine</h4>
                    <hr>
                    <br>
<h6>Fuel type</h6>

<div class="row">
    <div class="col-2">
        <input type="checkbox" id="" name="">
        <label>petrol</label>
    </div>
    <div class="col-2">
        <input type="checkbox" id="" name="">
        <label>Diesel</label>

    </div>
    <div class="col-2">
        <input type="checkbox" id="" name="">
        <label>Electric</label>
    </div>
    <div class="col-2">
        <input type="checkbox" id="" name="">
        <label>Other</label>
    </div>
    <div class="col-4">

    </div>
</div>

<br>
<h6>Drive type</h6>

<div class="row">
    <div class="col-2">
        <input type="checkbox" id="" name="">
        <label>Cardan</label>
    </div>
    <div class="col-2">
        <input type="checkbox" id="" name="">
        <label>Chain</label>

    </div>
    <div class="col-2">
        <input type="checkbox" id="" name="">
        <label>belt</label>
    </div>
    <div class="col-2">

    </div>
    <div class="col-4">

    </div>
</div>

<br>
<h6>transmission</h6>
<div class="row">
    <div class="col-2">
        <input type="checkbox" id="" name="">
        <label>Automatic</label>


    </div>
    <div class="col-2">
        <input type="checkbox" id="" name="">
        <label>Semi-automatic</label>


    </div>
    <div class="col-3">
        <input type="checkbox" id="" name="">
        <label>Manual transmission</label>


    </div>
    <div class="col-5">

    </div>
</div>
<br>
<h6>displacement</h6>
<div class="row">
    <div class="col-3">
        <select class="form-select" aria-label="Any" name="displacement">
            <option selected value="">50 cm</option>
            <option selected value="">80 cm</option>
            <option selected value="">125 cm</option>
            <option selected value="">250 cm</option>
        </select>

    </div>
    <div class="col-3">
        <select class="form-select" aria-label="Any" name="displacement">
            <option selected value="">50 cm</option>
            <option selected value="">80 cm</option>
            <option selected value="">125 cm</option>
            <option selected value="">250 cm</option>
        </select>

    </div>
    <div class="col-6">

    </div>
</div>


            </div>
        </div>



        <div class="card" style="">
            <div class="card-body" >
                <h4>Furnishing</h4>
                    <hr>
                    <br>
    <h6>Exterior color</h6>


    <br>
    <br>
    <h6>Further equipment</h6>
    <div class="row">
        <div class="col">
            <input type="checkbox" id="" name="">
        <label>SECTION</label>

        </div>
        <div class="col-2">
            <input type="checkbox" id="" name="">
        <label>Electric starter</label>

        </div>
        <div class="col">
            <input type="checkbox" id="" name="">
        <label>catalyst</label>

        </div>
        <div class="col">
            <input type="checkbox" id="" name="">
        <label>Kickstarter</label>

        </div>
        <div class="col">
            <input type="checkbox" id="" name="">
        <label>Suitcase</label>

        </div>
        <div class="col">
            <input type="checkbox" id="" name="">
        <label>disc</label>

        </div>
        <div class="col">
            <input type="checkbox" id="" name="">
        <label>Crash bars</label>

        </div>
        <div class="col">
        </div>

    </div>

    </div>
</div>
         <div class="card" style="">
            <div class="card-body" >
                <h4>Offer details
                </h4>
                    <hr>
                    <div class="row">
                        <div class="col-3">
                            <h6>VAT</h6>
                            <select class="form-select" aria-label="Any" name="displacement">
                                <option selected value="">Any</option>
                                <option selected value="">VAT reportable</option>
                                <option selected value="">VAT not included</option>
                            </select>

                        </div>
                        <div class="col-3">
                            <h6>Advertisement online since</h6>
                            <select class="form-select" aria-label="Any" name="displacement">
                                <option selected value="">Any</option>
                                <option selected value="">1 day reportable</option>
                                <option selected value="">3 day reportable</option>
                                <option selected value="">7 day reportable</option>
                                <option selected value="">14 day reportable</option>

                            </select>

                        </div>
                        <div class="col-3">

                        </div>
                        <div class="col-3">

                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-3">
                            <input type="checkbox" id="" name="">
                            <label> Advertisements with pictures</label>

                        </div>
                        <div class="col-2">
                            <input type="checkbox" id="" name="">
                            <label>Ads with video</label>

                        </div>
                        <div class="col-2">
                            <input type="checkbox" id="" name="">
                            <label>Reduced price</label>

                        </div>
                        <div class="col-5">

                        </div>
                    </div>




                    <br>
                    <h6>Provider</h6>
                    <div class="row">
                        <div class="col-2">
                            <input class="form-radio-input" type="radio" name="" id="">
                            <label for="" class="form-radio-label">Any</label>



                        </div>
                        <div class="col-2">
                            <input class="form-radio-input" type="radio" name="" id="">
                            <label for="" class="form-radio-label">Private provider</label>



                        </div>
                        <div class="col-2">
                            <input class="form-radio-input" type="radio" name="" id="">
                            <label for="" class="form-radio-label">Dealer</label>


                        </div>
                        <div class="col-2">
                            <input class="form-radio-input" type="radio" name="" id="">
                            <label for="" class="form-radio-label">Company vehicles</label>



                        </div>
                        <div class="col-4">

                        </div>

                    </div>

                    <br>
                    <h6>Vehicle history</h6>
                    <div class="row">
                        <div class="col-3">
                            <input type="checkbox" id="" name="">
                            <label>Disabled Conversion</label>


                        </div>
                        <div class="col-2">
                            <input type="checkbox" id="" name="">
                            <label>HU new</label>


                        </div>
                        <div class="col-3">
                            <input type="checkbox" id="" name="">
                            <label>Service history maintained</label>


                        </div>
                        <div class="col-4">

                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-3">
                            <h6>Damaged vehicles</h6>
                            <select class="form-select" aria-label="Any" name="displacement">
                                <option selected value="">Any</option>
                                <option selected value="">Do not slow</option>
                                <option selected value="">slow only</option>
                            </select>

                        </div>
                        <div class="col-3">
                            <h6>Number of owners of the vehicle</h6>
                            <select class="form-select" aria-label="Any" name="displacement">
                                <option selected value="">Any</option>
                                <option selected value="">Up to 1</option>
                                <option selected value="">Up to 2</option>
                                <option selected value="">Up to 3</option>
                                <option selected value="">Up to 4</option>

                            </select>

                        </div>
                        <div class="col-3">
                            <h6>seal of quality</h6>
                            <select class="form-select" aria-label="Any" name="displacement">
                                <option selected value="">Please choose</option>
                                <option selected value="">Any seal</option>
                                <option selected value="">harly-davison originals</option>


                            </select>

                        </div>
                        <div class="col-3">

                        </div>
                    </div>


            </div>
        </div>



 </div>
</div>
@endsection
