@extends('layouts.masterfront')
@section('content')


<div class="container">
    <div class="container-fluid mt-5 mb-3 bg-light">
        <div class="row">
            <div class="col-4">

                <div class="card" style="">
                    <h6 class="card-title " >Detailed search</h6>
                    <hr>
                    <div class="card-body" >

                    <p class="card-text" >NEW mobile.de online purchase</p>
                    <ul>
                        <li>1 year warranty</li>
                        <li>Free Shipping</li>
                        <li>Free pickup upon return</li>
                      </ul>
                    <a class="btn btn-primary " role="button" href="">7962Offers</a>
                    <hr>
                    <h6>Vehicle condition</h6>
                    <div class="row">
                        <div class="col-6">
                            <p>Any</p>
                        </div>
                        <div class="col-6">
                            <p>Change</p>

                        </div>
                    </div>
                    <hr>
                    <h6>Brand, model, variant</h6>
                    <div class="row">
                        <div class="col-6">
                            <p>Any</p>
                        </div>
                        <div class="col-6">
                            <p>Change</p>

                        </div>

                    </div>
                    <hr>
                   <h6>Payment method</h6>
                    <button class="btn btn-light">Buy</button>
                   <button class="btn btn-light">Lease</button>
                   <h6>Price</h6>
                   <div class="row">
                    <div class="col-6">
                        <select class="form-select" aria-label="Any" name="Price until">
                            <option selected value="">$5000</option>
                            <option selected value="">$10000</option>
                            <option selected value="">$20000</option>
                            <option selected value="">$30000</option>
                        </select>

                    </div>
                    <div class="col-6">
                        <select class="form-select" aria-label="Any" name="Price until">
                            <option selected value="">$5000</option>
                            <option selected value="">$10000</option>
                            <option selected value="">$20000</option>
                            <option selected value="">$30000</option>
                        </select>

                    </div>

                   </div>
                   <h6>Initial registration </h6>
                   <div class="row">
                    <div class="col-6">
                        <select class="form-select" aria-label="from" name="Price until">
                            <option selected value="">2001</option>
                            <option selected value="">2002</option>
                            <option selected value="">2003</option>
                            <option selected value="">2004</option>
                        </select>

                    </div>
                    <div class="col-6">
                        <select class="form-select" aria-label="until" name="Price until">
                            <option selected value="">2010</option>
                            <option selected value="">2011</option>
                            <option selected value="">2012</option>
                            <option selected value="">2013</option>
                        </select>

                    </div>

                   </div>

                   <h6>Kilometre</h6>
                   <div class="row">
                    <div class="col-6">
                        <select class="form-select" aria-label="from" name="Price until">
                            <option selected value="">20000</option>
                            <option selected value="">30000</option>
                            <option selected value="">40000</option>
                            <option selected value="">20000</option>
                        </select>

                    </div>
                    <div class="col-6">
                        <select class="form-select" aria-label="until" name="Price until">
                            <option selected value="">10000</option>
                            <option selected value="">20000</option>
                            <option selected value="">30000</option>
                            <option selected value="">40000</option>
                        </select>

                    </div>

                   </div>
                   <br>
                   <a class="btn btn-warning " role="button" href="">131,701 Offers</a>

                    <p class="text-center">save search</p>
                    <hr>
                    <h6>Location</h6>
                    <div class="row">
                        <div class="col-6">
                            <p>Any</p>
                        </div>
                        <div class="col-6">
                            <p>Change</p>

                        </div>

                    </div>
                    <h6>Fuel type</h6>
                    <div class="row">
                        <div class="col-6">
                            <p>Any</p>
                        </div>
                        <div class="col-6">
                            <p>Change</p>

                        </div>

                    </div>

                    <h6>Performance</h6>
                    <div class="row">
                        <div class="col-6">
                            <p>Any</p>
                        </div>
                        <div class="col-6">
                            <p>Change</p>

                        </div>

                    </div>
                    <h6>Vehicle type</h6>
                    <div class="row">
                        <div class="col-6">
                            <p>Any</p>
                        </div>
                        <div class="col-6">
                            <p>Change</p>

                        </div>

                    </div>
                    <h6>Electric cars</h6>
                        <div class="row">
                            <div class="col-6">
                                <p>Any</p>
                            </div>
                            <div class="col-6">
                                <p>Change</p>

                            </div>

                        </div>
                        <h6>ransmission</h6>
                        <div class="row">
                            <div class="col-6">
                                <p>Any</p>
                            </div>
                            <div class="col-6">
                                <p>Change</p>

                            </div>

                        </div>
                        <hr>
                        <h6>Exterior color</h6>
                        <hr>
                        <h6>seal of quality</h6>

                        <input type="checkbox" id="android" name="">
                        <label>Advertisements with a quality seal</label>
                        <hr>
                        <h6>Air conditioning</h6>
                        <input class="form-radio-input" type="radio" name="" id="">
                        <label for="" class="form-radio-label">Any</label>
                        <br>

                        <input class="form-radio-input" type="radio" name="" id="">
                        <label for="" class="form-radio-label">No air conditioning or automatic (311)</label>
                        <br>
                        <input class="form-radio-input" type="radio" name="" id="">
                        <label for="" class="form-radio-label">Air conditioning or automatic (40,875)</label>
                        <br>
                        <input class="form-radio-input" type="radio" name="" id="">
                        <label for="" class="form-radio-label">Automatic climate control (35,742)</label>
                        <br>
                        <input class="form-radio-input" type="radio" name="" id="">
                        <label for="" class="form-radio-label">2-zone automatic climate control (21.406)</label>
                        <br>
                        <input class="form-radio-input" type="radio" name="" id="">
                        <label for="" class="form-radio-label">3-zone automatic climate control (5,454)</label>
                        <br>
                        <input class="form-radio-input" type="radio" name="" id="">
                        <label for="" class="form-radio-label">4-zone automatic climate control (2,285)</label>
                        <br>
                        <hr>
                        <h6>Furnishing</h6>
                        <input type="checkbox" id="android" name="">
                        <label>Bluetooth (36,136)</label>
                        <br>
                        <input type="checkbox" id="android" name="">
                        <label>On-board computer (38,515)</label>
                        <br>
                        <input type="checkbox" id="android" name="">
                        <label>CD player (6,428)</label>
                        <br>
                        <input type="checkbox" id="android" name="">
                        <label>Electric windows (22,898)</label>
                        <br>
                        <input type="checkbox" id="android" name="">
                        <label>Advertisements with a quality seal</label>
                        <br>
                        <input type="checkbox" id="android" name="">
                        <label>Electric side mirror (22.921)</label>
                        <br>
                        <input type="checkbox" id="android" name="">
                        <label>Electric seat adjustment (8.305)</label>
                        <br>
                        <input type="checkbox" id="android" name="">
                        <label>Hands-free device (21,421)</label>
                        <br>
                        <input type="checkbox" id="android" name="">
                        <label>Head-Up Display (5,017)</label>
                        <br>
                        <input type="checkbox" id="android" name="">
                        <label>Isofix (21.701)</label>
                        <br>
                        <input type="checkbox" id="android" name="">
                        <label>Multifunction steering wheel (21.327)</label>
                        <br>
                        <input type="checkbox" id="android" name="">
                        <label>Navigation system (19,570)</label>
                        <br>
                        <input type="checkbox" id="android" name="">
                        <label>Rain sensor (19,931)</label>
                        <br>
                        <input type="checkbox" id="android" name="">
                        <label>Sunroof (4,435)</label>
                        <br>
                        <input type="checkbox" id="android" name="">
                        <label>Power steering (22,885)</label>
                        <br>
                        <input type="checkbox" id="android" name="">
                        <label>Seat heating (21,400)</label>
                        <br>
                        <input type="checkbox" id="android" name="">
                        <label>Ski bag (745)</label>
                        <br>
                        <input type="checkbox" id="android" name="">
                        <label>Auxiliary heater (2,715)</label>
                        <br>
                        <input type="checkbox" id="android" name="">
                        <label>Automatic start/stop (20,627)</label>
                        <br>
                        <input type="checkbox" id="android" name="">
                        <label>Central locking (21,450)</label>
                        <br>
                        <p>more</p>
                        <hr>
                        <h6>Provider</h6>
                        <input class="form-radio-input" type="radio" name="" id="">
                        <label for="" class="form-radio-label">Any</label>
                        <br>
                        <input class="form-radio-input" type="radio" name="" id="">
                        <label for="" class="form-radio-label">Private provider (0)</label>
                        <br>
                        <input class="form-radio-input" type="radio" name="" id="">
                        <label for="" class="form-radio-label">Dealer (22,079)</label>
                        <br>
                        <input class="form-radio-input" type="radio" name="" id="">
                        <label for="" class="form-radio-label">Company vehicles (0)</label>
                        <br>
                        <hr>
                        <h6>Merchant Rating</h6>
                        <input class="form-radio-input" type="radio" name="" id="">
                        <label for="" class="form-radio-label">Any</label>
                        <br>
                        <input class="form-radio-input" type="radio" name="" id="">
                        <label for="" class="form-radio-label">Away
                            (21,843)</label>
                        <br>
                        <input class="form-radio-input" type="radio" name="" id="">
                        <label for="" class="form-radio-label">
                            Away
                            (21,445)</label>
                            <input class="form-radio-input" type="radio" name="" id="">
                            <label for="" class="form-radio-label">
                                Away
                                (21,445)</label>
                        <br>
                        <hr>
                        <h6>Detailed search</h6>

                </div>
            </div>
        </div>

            <div class="col-8">
                <div class="card" style="">
                    <h5 class="card-title ">21,975 offers match your search criteria</h5>
                    <hr>
                    <div class="card-body" >
                        <div class="row">
                            <div class="col-4">
                                <h6>sort by</h6>
                                <select class="form-select" aria-label="until" name="soting">
                                    <option selected value="">Standard sorting</option>
                                    <option selected value="">Listing(newest first)</option>
                                    <option selected value="">Advertisments (oldest first)</option>
                                    <option selected value="">Price(lowest first)</option>
                                    <option selected value="">Price(highest first)</option>
                                </select>


                            </div>
                            <div class="col-4">

                            </div>
                            <div class="col-4">
                                <button type="button" class="btn btn-warning">save search</button>

                            </div>
                        </div>
                        <br>
                       <div class="row">
                        <div class="col-4">
                            <img src="https://img.classistatic.de/api/v1/mo-prod/images/f4/f4286bae-9591-43c5-8f6a-218b58a7678a?rule=mo-240.jpg">
              <div class="row">
               <div class="col-4">
                 <img src="https://img.classistatic.de/api/v1/mo-prod/images/2c/2c493369-2e1e-4207-a25b-36cbbe2a8380?rule=mo-80.jpg">

               </div>
               <div class="col-4">
                <img src="https://img.classistatic.de/api/v1/mo-prod/images/03/03886b3e-18c4-4068-87b3-a8d2b6677774?rule=mo-80.jpg">
               </div>
               <div class="col-4">
                 <img src="https://img.classistatic.de/api/v1/mo-prod/images/64/64703300-d8da-42a4-a977-5f5d40e6a2f4?rule=mo-80.jpg">

                </div>
           </div>
     </div>
                        <div class="col-8">
                            <h5>Volkswagen Passat Variant 2.0 TDI DSG R-Line Elegance Pano</h5>

                          <p>Advertisement online since October 12, 2023, 3:05 a.m</p>

                          <p>EZ 08/2022, 4,012 km, 110 kW (150 HP)</p>

                          <p>Station wagon, accident-free , diesel, automatic, HU new, 4/5 doors
                            4.0 l/100km (combined)*, 106 g CO₂/km (combined)*</p>
                            <div class="row">
                                <div class="col-2">
                                    <img src="https://img.classistatic.de/api/v1/mo-prod/images/4e/4e99c58c-ae95-4204-9c32-f4a1ee5ad199?rule=mo-80.jpg">

                                </div>
                                <div class="col-10">
                                    <p>Starke Georgsmarienhütte GmbH & Co. KG </p>
                                        <p> Tel.: +49 (0)541 93213001</p>
                                        <p>DE-49124 Georgsmarienhütte (Osnabrück), dealer</p>
                                        <p>Insurance from €11.11 per month.</p>

                                </div>
                            </div>
                            <div class="text-right">
                                <button class="btn btn-primary ">Contact</button>
                                <button class="btn btn-light ">Park</button>

                            </div>

                        </div>

                       </div>

                    </div>




            <div class="card" style="">
                {{-- <h5 class="card-title ">21,975 offers match your search criteria</h5> --}}
                <hr>
                <div class="card-body" >
                    <div class="row">
                        <div class="col-4">
                            <img src="https://img.classistatic.de/api/v1/mo-prod/images/1b/1b8b86bb-e226-4585-a646-a8b522af2502?rule=mo-160.jpg">
                        </div>
                        <div class="col-8">
                            <h5>Renault Twingo E-TECH 100% el. INTENS NAVI + CLIMATE + REVERSE</h5>

                          <p>Advertisement online since October 13, 2023, 10:46 a.m</p>

                          <p>€18,480
                            19.00% VAT
                            Calculate financing
                            Fair price
                            EZ 06/2021, 22,927 km, 31 kW (42 HP)
                            Autohaus Süverkrüp GmbH & CO KG</p>
                            <p>DE-24118 Kiel, dealer</p>
                            <p>Compare insurance</p>
                          <p>Small car, accident-free , electric, automatic, HU new, 4/5 doors</p>
                            <div class="row">
                                <div class="col-2">
                                    <img src="https://img.classistatic.de/api/v1/mo-prod/images/4e/4e99c58c-ae95-4204-9c32-f4a1ee5ad199?rule=mo-80.jpg">

                                </div>
                                <div class="col-10">
                                    <p>Starke Georgsmarienhütte GmbH & Co. KG </p>
                                        <p> Tel.: +49 (0)541 93213001</p>
                                        <p>DE-49124 Georgsmarienhütte (Osnabrück), dealer</p>
                                        <p>Insurance from €11.11 per month.</p>

                                </div>
                                </div>
                                <div class="text-right">
                                <button class="btn btn-primary ">Contact</button>
                                <button class="btn btn-light ">Park</button>

                            </div>

                        </div>

                       </div>
    <hr>

            <div class="row">
                <div class="col-4">
                    <img src="https://img.classistatic.de/api/v1/mo-prod/images/1b/1b8b86bb-e226-4585-a646-a8b522af2502?rule=mo-160.jpg">
                </div>
                <div class="col-8">
                    <h5>Renault Twingo E-TECH 100% el. INTENS NAVI + CLIMATE + REVERSE</h5>

                  <p>Advertisement online since October 13, 2023, 10:46 a.m</p>

                  <p>€18,480
                    19.00% VAT
                    Calculate financing
                    Fair price
                    EZ 06/2021, 22,927 km, 31 kW (42 HP)
                    Autohaus Süverkrüp GmbH & CO KG</p>
                    <p>DE-24118 Kiel, dealer</p>
                    <p>Compare insurance</p>
                  <p>Small car, accident-free , electric, automatic, HU new, 4/5 doors</p>
                    <div class="row">
                        <div class="col-2">
                            <img src="https://img.classistatic.de/api/v1/mo-prod/images/4e/4e99c58c-ae95-4204-9c32-f4a1ee5ad199?rule=mo-80.jpg">

                        </div>
                        <div class="col-10">
                            <p>Starke Georgsmarienhütte GmbH & Co. KG </p>
                                <p> Tel.: +49 (0)541 93213001</p>
                                <p>DE-49124 Georgsmarienhütte (Osnabrück), dealer</p>
                                <p>Insurance from €11.11 per month.</p>

                        </div>
                        </div>
                        <div class="text-right">
                        <button class="btn btn-primary ">Contact</button>
                        <button class="btn btn-light ">Park</button>

                    </div>



                   </div>
                </div>




            </div>
        </div>





    </div>


</div>

@endsection






