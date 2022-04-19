@extends('main.index')

@section('css')
<style>
.erclr{
    color:#FF0000;
    font-weight: bold;
}
.desclr{
    color: #787878;
    font-size:9pt;
}
.pad0{
    padding:0;
    font-size:20px;
}
.frm{
    color:#007BFF; 
    font-size:8pt;
}
.tlstp{
    color:#007BFF;
    cursor:pointer
}
.cap{
    word-break: break-word;
    line-height: 100%;
    margin: 1%;
}
.host{
    font-weight: bold;
    font-size: 13pt;
}
.form-controltotal {
    /* display: block; */
    width: auto; 
    height: calc(1.5em + .75rem + 15px);
    padding: .375rem .75rem;
    font-size: 1.5rem;
    font-weight: 400;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: .25rem;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
    text-align: center;
}
.agrees{
    margin: 0% 0% 0% 2%;
    font-size: 10pt;
}
.aftnxt{
    text-align: center;
    margin: 2%;
}
.marbot{
    margin-bottom:1%;
}
label{
    margin-top: 1%;
}
.padtp{
    padding-top: 3%;
}
.bold{
    font-weight: bold;
}
.lines{
    text-align:justify; 
    text-justify:inter-word;
}
.line-height{
    line-height: 80%
}
</style>
@endsection

@section('content')
<div class="container">
    <div class="row">
        {{-- <div class="row py-5"> --}}
            <div class="col-lg-9 mx-auto text-white text-center">
              <h1 class="display-4 clr">Choose your tour package & options</h1>
              {{-- <p class="lead mb-0">Using Bootstrap 4 card component, build a vertical accrodion with up & down chevrons.</p>
              <p class="lead">Snippet by
                <a href="https://bootstrapious.com/snippets" class="text-white">
                  <u>Bootstrapious</u>
                </a>
              </p> --}}
            </div>
            <p>H<sub>2</sub>0</p>
            <p>XY<sup>2</sup></p>
          {{-- </div> --}}
            <div class="col-lg-12 mx-auto">
                <div class="accordion" id="accordion">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h5 class="mb-0">
                                <button class="btn btn-link pad0" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Premier package</button>
                                <span class="erclr pull-right">$599</span>
                                <br>
                                <span class="desclr">Customized Video Tour + <span class="tlstp" data-toggle="tooltip" data-placement="top" title="Unlimited means that the photographer will take however many photos needed to capture all the rooms inside a property and notable exterior features of the property such as a pool, boat dock, horse stables etc. The total photo count is at the photographers disrection. 'However Many Photos it takes' does not mean carte blanche for the agent to direct the photographer to shoot 3 angles of the same room or a say a close up of bench in the yard. However Many Photos it takes means that all rooms and exterior features will be included in the shoot."> Unlimited </span> + Aerial Photos and Video + 3D Tour + Floor Plan </span>
                            </h5>
                        </div>
                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card-body" style="margin:10px;">
                                <div class="row" id="CollapsedRow1">
                                    <div class="col-md-6"> 
                                        <b>Premier package video tour example:</b>
                                        <video width="auto" height="240" controls>
                                            <source src="videos/sample1.mov" type="video/mp4">
                                            Your browser does not support the video tag.
                                        </video>
                                    </div>
                                    <div class="col-md-6"> 
                                        <b>3D Tour Sample:</b>
                                        <video width="auto" height="240" controls>
                                            <source src="videos/sample2.mov" type="video/mp4">
                                            Your browser does not support the video tag.
                                        </video>
                                    </div>
                                    <div class="col-md-6"></div>
                                    <div class="col-md-6">
                                        <p class="tlstp" data-toggle="tooltip" data-placement="top" title="Please note: There are certain camera limitations such as the camera cannot shoot exterior images so that you can travel from the inside to the tour or the addition of Mattertags. We do not photoshop any camera reflections from the tour (The tour is processed by Matterport not at Hometakes). Some jagged edges may appear in the 3-D dollhouse and floor plan view and cannot be prevented. Windows without shades or blinds may display as overexposed. If the home has a separate guest house building that is detached from the main house and you want to include it in your tour, there is a $50 addition charge. This is necessary as it has to be made and processed as a separate tour. -----Chrome browser may not be fully supported when viewing the tour------.">
                                            → Read these important 3D Tour Limitations
                                        </p>
                                        <p class="tlstp" data-toggle="tooltip" data-placement="top" title="Please note that floor plans will only include areas that were shot with the Matterport Camera. It will not include areas such as patios, pools or garages and any room that was not shot inside the home such as storage cupboards etc. Floor plans are produced by Matterport and not Hometakes and as such, are non refundable. Please view the sample before ordering this item.">
                                            → Floor plan Limitations </p>
                                        <p> <a href="https://www.hometakesvideos.com/orders/Sample_Floor_Plan.pdf" target="_blank"> → Sample Floor Plan </a> </p>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="" class="erclr">You must enter the exact AC Square footage so that we can calculate your appointment time accurately:</label>
                                        <div class="col-md-6">
                                            <input type="text" id="acsquare" class="form-control" name="acsquare" placeholder="Exact AC Square Unit Footage" required>
                                        </div>
                                    
                                        <div class="cap">
                                            <li> 3D Tour is hosted on your Tour Template and will not function after 60 days. You should purchase addition hosting if you think it may take longer than 60 days to sell the property. You can purchase additional hosting later.</li> 
                                        </div> 
                                        <p class="text-center host" style="border-top: 1px solid #DCDCDC;">*Hosting fees non-refundable or transferable</p>
                                    </div>
                                    {{-- default check --}}
                                    <div class="col-md-4">
                                        <input type="checkbox" value="35" class="hostingcheckbox_premier checkbox_premier" onchange="checkTotalPremier()"  checked/>
                                        <label for="90days">90 days additional hosting <span class="erclr">$35</span> </label>
                                    </div>
                                    <div class="col-md-4">
                                        <input type="checkbox" value="55" class="hostingcheckbox_premier checkbox_premier" onchange="checkTotalPremier()" />
                                        <label for="180days"> 180 days additional hosting <span class="erclr">$55</span></label>
                                    </div>
                                    <div class="col-md-4">
                                        <input type="checkbox" value="79" class="hostingcheckbox_premier checkbox_premier" onchange="checkTotalPremier()" />
                                        <label for="360days"> 360 days additional hosting <span class="erclr">$79</span></label>
                                    </div>
                                    {{-- table --}}
                                    <div class="col-md-12" >
                                        <table style="width: 100%;">
                                            <tr>
                                                <td>
                                                    <li>3D Tour (Guest House not included).</li>
                                                </td>
                                                <td>
                                                    <li>60 Days of 3D Tour Hosting.</li>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <li>Floor Plan.</li>
                                                </td>
                                                <td>
                                                    <li>6 Aerial Photos.</li>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <li>Unlimited Photos and Videos.</li>
                                                </td>
                                                <td>
                                                    <li>6 Twilight Enhanced Photos <a href="https://www.hometakesvideos.com/orders/twilight_enhancement_samples/index.html" target="_blank">(see here)</a>.</li>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <li>Aerial Video footage.</li>
                                                </td>
                                                <td>
                                                    <li>Copy of Original Video file.</li>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <li>Produced exclusively with an electric slider for a more customized look.</li>
                                                </td>
                                                <td>
                                                    <li>Up to a 3 hour on-site appointment with the videographer.</li>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <li>Sound effects are added to exterior scenes such as wildlife and water feature effects.</li>
                                                </td>
                                                <td>
                                                    <li>Edited with hard cut transitions which are synced to the beat of the music.</li>
                                                </td>
                                            
                                            </tr>
                                            <tr>
                                                <td>
                                                    <li>Video length between 3 to 4 minutes.</li>
                                                </td>
                                            </tr>
                                        
                                        </table>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="checkbox" value="19" class="checkbox_premier" onchange="checkTotalPremier()">
                                        <label for="branding">Removal of 'Hometakes' branding on your Tour <span class="erclr">$19</span> </label>
                                    </div>    
                                    <div class="col-md-6">
                                        <input type="checkbox" value="175" class="checkbox_premier" onchange="checkTotalPremier()">
                                        <label for="genuine">Genuine Twilight photography <span class="erclr">$175 </span> <a href="https://www.hometakesvideos.com/orders/twilight_samples/index.html" target="_blank">(see sample)</a> </label>
                                    </div>
                                    <div class="col-md-12 col-xs-12 text-center">
                                        <p style="border-top: 1px solid #DCDCDC"></p>
                                        <center>
                                            <label for="total">Total:</label>
                                            <input type="text" class="form-controltotal" id="total_premier" placeholder="$634.00" readonly>
                                            <br>
                                            <div class="agrees">
                                                <input type="checkbox">
                                                <label for="90days">I agree to the <a href="" data-toggle="modal" data-target="#policies">policies and conditions</a> </label>
                                                <br>
                                                <button class="btn btn-primary btn-lg " id="show1">Next</button>
                                            </div>
                                        </center>
                                    </div>
                                
                                </div>
                                {{-- Here we insert another nested accordion --}}
                                <div class="accordion" id="accordionnes1">
                                    <div class="accordion-group">
                                        <div id="collapseNested1" class="accordion-body collapse in">
                                            <div class="accordion-inner">
                                                <div class="row"> 
                                                    <div class="col-md-12">
                                                        <button class="btn btn-primary accordion-toggle pull-right" id="hide1">Back</button>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="mlsnum">MLS Number:</label>
                                                        <input type="text" id="mlsnum" class="form-control" name="mlsnum" value="" data-toggle="tooltip" data-placement="top" title="If you do not yet have an MLS number, you must leave this field empty. If you enter an incorrect MLS# for the property you will not notified that you entered an incorrect number so please ensure that you enter the correct number.">
                                                    </div>
                                                    <div class="col-md-8">
                                                        <label for="address">Address to be filmed:</label>
                                                        <input type="text" id="address" class="form-control" name="address" value="">
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label for="mlsnum">Unit Number:</label>
                                                        <input type="text" id="mlsnum" class="form-control" name="mlsnum" value="">
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label for="city">City:</label>
                                                        <input type="text" id="city" class="form-control" name="city" value="">
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label for="place">Place</label>
                                                        <input type="text" id="place" class="form-control" name="place" value="" readonly placeholder="Florida">
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label for="zipc">Zip Code</label>
                                                        <input type="text" id="zipc" class="form-control" name="zipc" value="">
                                                    </div>
                                                    <div class="col-md-6 col-md-offset-6">
                                                        <label for="zipc">Does the community have a name?</label>
                                                        <select  class="form-control" name="" id="">
                                                            <option value="" disabled selected hidden>Select</option>
                                                            <option value="">Yes</option>
                                                            <option value="">No</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-12 aftnxt">
                                                        <b>Music for video tour:</b> 
                                                    </div> 
                                                    <div class="col-md-4 marbot" >
                                                        {{-- <label for="zipc">Does</label> --}}
                                                        <select  class="form-control" name="" id="">
                                                            <option value="" disabled selected hidden>Select Happy</option>
                                                            <option value="">Happy Mandolin</option>
                                                            <option value="">Blue Skies</option>
                                                            <option value="">How it began</option>
                                                            <option value="">Payday</option>
                                                            <option value="">Locally Sourced</option>
                                                            <option value="">Indie Romance</option>
                                                            <option value="">Jazz In Paris</option>
                                                            <option value="">The Engagement</option>
                                                            <option value="">Swamp Stomp</option>
                                                            <option value="">Venice Beach</option>
                                                            <option value="">The Creek</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 marbot">
                                                        <select  class="form-control" name="" id="">
                                                            <option value="" disabled selected hidden>Select Cool & Jazzy</option>
                                                            <option value="">Must Be Something</option>
                                                            <option value="">Get Back</option>
                                                            <option value="">Fortaleza</option>
                                                            <option value="">Blakey's Burnout</option>
                                                            <option value="">Confessin</option>
                                                            <option value="">Raindrops</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 marbot">
                                                        <select  class="form-control" name="" id="">
                                                            <option value="" disabled selected hidden>Select Classical</option>
                                                            <option value="">Blue Danube by Strauss</option>
                                                            <option value="">Eine Kleine Nachtmusik by Mozart</option>
                                                            <option value="">Waltz of the Flowers by Tchaikovsky</option>
                                                            <option value="">Les Toreadors from Carmen by Bizet</option>
                                                            <option value="">Messiah by Handel</option>
                                                            <option value="">Morning Mood</option>
                                                            <option value="">Moonlight Sonata by Beethoven</option>
                                                            <option value="">Habanera by Bizet</option>
                                                            <option value="">Far Behind</option>
                                                            <option value="">Hungarian Rhapsody No 2 by Liszt</option>
                                                            <option value="">Ride of the Valkyries by Wagner</option>
                                                            <option value="">Symphony No 5 by Beethoven</option>
                                                            <option value="">Fur Elise by Beethoven</option>
                                                            <option value="">William Tell Overture by Rossini</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <select  class="form-control" name="" id="">
                                                            <option value="" disabled selected hidden>Select Upbeat</option>
                                                            <option value="">Dont Hate Me (vocals)</option>
                                                            <option value="">The Place Inside</option>
                                                            <option value="">How About It</option>
                                                            <option value="">Switch It Up</option>
                                                            <option value="">Rubber Necking</option>
                                                            <option value="">Cimson Fly</option>
                                                            <option value="">Gotta Find Out</option>
                                                            <option value="">Boo Boogie</option>
                                                            <option value="">Festival</option>
                                                            <option value="">Magic Marker</option>
                                                            <option value="">Runaways</option>
                                                            <option value="">Reasons To Smile</option>
                                                            <option value="">Golden Days</option>
                                                            <option value="">First Day</option>
                                                            <option value="">Stalling</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <select  class="form-control" name="" id="">
                                                            <option value="" disabled selected hidden>Select Mello</option>
                                                            <option value="">Hey Girl</option>
                                                            <option value="">Let's Do It</option>
                                                            <option value="">Sweet as Honey</option>
                                                            <option value="">Chances Sax</option>
                                                            <option value="">Until We Meet Again</option>
                                                            <option value="">Keep Dreaming</option>
                                                            <option value="">Don't Look</option>
                                                            <option value="">Where I Am From</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <select  class="form-control" name="" id="">
                                                            <option value="" disabled selected hidden>Select Piano</option>
                                                            <option value="">Sunday Stroll</option>
                                                            <option value="">Keith</option>
                                                            <option value="">Tonto</option>
                                                            <option value="">Clouds</option>
                                                            <option value="">Getting There</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-12 aftnxt">
                                                        <b>Addition Property Information:</b> 
                                                    </div> 
                                                    <div class="col-md-3">
                                                        <label for="bedrooms">Bedrooms:</label>
                                                        <input type="text" id="bedrooms" class="form-control" name="bedrooms" value="">
                                                    </div>
                                                    <div class="col-md-2">
                                                        <label for="baths">Full Baths:</label>
                                                        <input type="text" id="baths" class="form-control" name="baths" value="">
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label for="sqfeet">Square Feet:</label>
                                                        <input type="text" id="sqfeet" class="form-control" name="sqfeet" value="">
                                                    </div>
                                                    <div class="col-md-2">
                                                        <label for="price">Price:</label>
                                                        <input type="text" id="price" class="form-control" name="price" value="">
                                                    </div>
                                                    <div class="col-md-2">
                                                        <label for="hbaths">Half Baths:</label>
                                                        <input type="text" id="hbaths" class="form-control" name="hbaths" value="">
                                                    </div>
                                                    <div class="col-md-12">
                                                        <label for="hbaths">Property Title:</label>
                                                        <input type="text" id="hbaths" class="form-control" name="hbaths" value="" placeholder="The text you enter here will upper on your template"> 
                                                    </div>
                                                    <div class="col-md-12">
                                                        <label for="hbaths">Property Description:</label>
                                                        <input type="text" id="hbaths" class="form-control" name="hbaths" value="" Placeholder="The text you enter here will upper on your template"> 
                                                    </div>
                                                    <div class="col-md-12 aftnxt">
                                                        <b>After submitting this order, you will be emailed a specific time from one of your chosen dates within 8 business hours.</b> 
                                                    </div> 
                                                    <div class="col-md-12">
                                                        <input type="checkbox" id="90days" name="90days" value="">
                                                        <label for="90days">Schedule Later </label>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="90days">Date 1: </label>
                                                        <input type="text" id="datepicker" class="form-control" placeholder="mm/dd/yyyy">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="90days">Time 1: </label>
                                                        <input type="text" id="datepicker" class="form-control" placeholder="hh:mm">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="90days">Final Date and Time: </label>
                                                        <input type="text" id="datepicker" class="form-control" placeholder="07/27/2021 at 09:00 AM" readonly>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="90days">Date 2: </label>
                                                        <input type="text" id="datepicker1" class="form-control" placeholder="mm/dd/yyyy">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="90days">Time 2: </label>
                                                        <input type="text" id="datepicker" class="form-control" placeholder="hh:mm">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="90days">Final Date and Time : </label>
                                                        <input type="text" id="datepicker" class="form-control" placeholder="07/28/2021 at 12:00 PM" readonly>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="90days">Date 3: </label>
                                                        <input type="text" id="datepicker2" class="form-control" placeholder="mm/dd/yyyy">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="90days">Time 3: </label>
                                                        <input type="text" id="datepicker" class="form-control" placeholder="hh:mm">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="90days">Final Date and Time : </label>
                                                        <input type="text" id="datepicker" class="form-control" placeholder="07/30/2021 at 12:00 PM" readonly>
                                                    </div>
                                                    <div class="col-md-12 padtp">
                                                        <center>
                                                            <button class="btn btn-success btn-lg" type="submit"><i class="fa fa-sign-in"></i> Submit Order</button>
                                                        </center>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>          
                                {{-- Inner accordion ends here --}}
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed pad0" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Showcase package
                                </button>
                                <span class="erclr pull-right">$449</span>
                                <br>
                                <span class="desclr">20 video scenes + <span class="tlstp" data-toggle="tooltip" data-placement="top" title="Unlimited means that the photographer will take however many photos needed to capture all the rooms inside a property and notable exterior features of the property such as a pool, boat dock, horse stables etc. The total photo count is at the photographers disrection. 'However Many Photos it takes' does not mean carte blanche for the agent to direct the photographer to shoot 3 angles of the same room or a say a close up of bench in the yard. However Many Photos it takes means that all rooms and exterior features will be included in the shoot."> Unlimited </span> + 3D Tour</span>
                            </h5>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                            <div class="card-body" style="margin:10px;">
                                <div class="row" id="CollapsedRow2">
                                    <div class="col-md-6"> 
                                        <b>Showcase package video tour example:</b>
                                        <video width="auto" height="240" controls>
                                            <source src="videos/sample1.mov" type="video/mp4">
                                            Your browser does not support the video tag.
                                        </video>
                                    </div>
                                    <div class="col-md-6"> 
                                        <b>3D Tour Sample:</b>
                                        <video width="auto" height="240" controls>
                                            <source src="videos/sample2.mov" type="video/mp4">
                                            Your browser does not support the video tag.
                                        </video>
                                    </div>
                                    <div class="col-md-6"></div>
                                    <div class="col-md-6">
                                        <p class="tlstp" data-toggle="tooltip" data-placement="top" title="Please note: There are certain camera limitations such as the camera cannot shoot exterior images so that you can travel from the inside to the exterior of the home. We do not shoot exterior 360 images nor add a play button to the tour or the addition of Mattertags. We do not photoshop any camera reflections from the tour (The tour is processed by Matterport not at Hometakes). Some jagged edges may appear in the 3-D dollhouse and floor plan view and cannot be prevented. Windows without shades or blinds may display as overexposed. If the home has a separate guest house building that is detached from the main house and you want to include it in your tour, there is a $50 addition charge. This is necessary as it has to be made a processed as a separate tour.. Chrome browser may not be fully supported when viewing the tour.">
                                            → Read these important 3D Tour Limitations
                                        </p>
                                        <p class="tlstp" data-toggle="tooltip" data-placement="top" title="Please note that floor plans will only include areas that were shot with the Matterport Camera. It will not include areas such as patios, pools or garages and any room that was not shot inside the home such as storage cupboards etc. Floor plans are produced by Matterport and not Hometakes and as such, are non refundable. Please view the sample before ordering this item.">
                                            → Floor plan Limitations </p>
                                        <p> <a href="https://www.hometakesvideos.com/orders/Sample_Floor_Plan.pdf" target="_blank"> → Sample Floor Plan </a> </p>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="" class="erclr">You must enter the exact AC Square footage so that we can calculate your appointment time accurately:</label>
                                        <div class="col-md-6">
                                            <input type="text" id="acsquare" class="form-control" name="acsquare" placeholder="Exact AC Square Unit Footage" required>
                                        </div>
                                        
                                        <div class="cap">
                                            <li> 3D Tour is hosted on your Tour Template and will not function after 60 days. You should purchase addition hosting if you think it may take longer than 60 days to sell the property. You can purchase additional hosting later.</li> 
                                        </div> 
                                        <p class="text-center host" style="border-top: 1px solid #DCDCDC;">*Hosting fees non-refundable or transferable</p>
                                    </div>
                                    {{-- default check --}}
                                    <div class="col-md-4">
                                        <input type="checkbox" value="35" class="hostingcheckbox_showcase checkbox_showcase" onchange="checkTotalShowcase()" checked>
                                        <label for="90days">90 days additional hosting <span class="erclr">$35</span> </label>
                                    </div>
                                    <div class="col-md-4">
                                        <input type="checkbox" value="55" class="hostingcheckbox_showcase checkbox_showcase" onchange="checkTotalShowcase()">
                                        <label for="180days"> 180 days additional hosting <span class="erclr">$55</span></label>
                                    </div>
                                    <div class="col-md-4" >
                                        <input type="checkbox" value="79" class="hostingcheckbox_showcase checkbox_showcase" onchange="checkTotalShowcase()">
                                        <label for="360days"> 360 days additional hosting <span class="erclr">$79</span></label>
                                    </div>
                                    <br><br>
                                    <div class="col-md-6">
                                        <input type="checkbox" value="35" class="checkbox_showcase" onchange="checkTotalShowcase()">
                                        <label for="Plan"> Add a Floor Plan <span class="erclr">$35</span></label>
                                    </div>
                                    {{-- default check --}}
                                    <div class="col-md-6">
                                        <input type="checkbox" value="50" class="checkbox_showcase" onchange="checkTotalShowcase()" checked>
                                        <label for="Plan"> ‘Plus’ option - 2 Aerial photos <span class="erclr">$50</span></label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="checkbox" value="70" class="checkbox_showcase" onchange="checkTotalShowcase()">
                                        <label for="Plan"> ‘Premium’ option - 6 Aerial photos <span class="erclr">$70</span></label>
                                    </div>
                                    {{-- default check --}}
                                    <div class="col-md-6 line-height">
                                        <input type="checkbox" value="10" class="checkbox_showcase" onchange="checkTotalShowcase()" checked>
                                            Send me the original video file when its ready  <span class="erclr">$10</span>
                                        <br>
                                        <span class="desclr">Receive the original video file for upload to your own social networking websites such as YouTube and Facebook</span> 
                                    </div>
                                    {{-- default check --}}
                                    <div class="col-md-6">
                                        <input type="checkbox" value="5" class="checkbox_showcase" onchange="checkTotalShowcase()" checked>
                                        <label for="cance"> Cancelation Insurance 
                                            <span class="tlstp" data-toggle="tooltip" data-placement="top" title="If you want to reschedule the appointment, you must notify us 18 hours prior to the appointment or you will incur a $30 cancelation/reschedule fee. Checking the insurance check box allows you to cancel up 1 hour prior to the appointment.">
                                                (What's this?)
                                            </span>
                                            <span class="erclr">$5</span>
                                            
                                        </label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="checkbox" value="19" class="checkbox_showcase" onchange="checkTotalShowcase()">
                                        <label for="cance"> Removal of 'Hometakes' branding on your Tour 
                                            <span class="erclr">$19</span>
                                        </label>
                                    </div>
                                    {{-- default check --}}
                                    <div class="col-md-6">
                                        <input type="checkbox" value="60" class="checkbox_showcase" onchange="checkTotalShowcase()" checked>
                                        <label for="cance"> 5 Twilight Enhancement photos <a href="https://www.hometakesvideos.com/orders/twilight_enhancement_samples/index.html" target="_blank">(See sample)</a>
                                            <span class="erclr">$60</span>
                                        </label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="checkbox" value="175" class="checkbox_showcase" onchange="checkTotalShowcase()">
                                        <label for="cance"> Genuine Twilight photography <a href="https://www.hometakesvideos.com/orders/twilight_samples/index.html" target="_blank">(See sample)</a>
                                            <span class="erclr">$175</span>
                                        </label>
                                    </div>
                                    <div class="col-md-12 col-xs-12 text-center">
                                        <p style="border-top: 1px solid #DCDCDC"></p>
                                        <center>
                                            <label for="total">Total:</label>
                                            <input type="text" id="total_showcase" class="form-controltotal" placeholder="$609.00" readonly>
                                            <br>
                                            <div class="agrees">
                                                <input type="checkbox" value="">
                                                <label for="90days">I agree to the <a href="" data-toggle="modal" data-target="#policies">policies and conditions</a> </label>
                                                <br>
                                                {{-- <button class="btn btn-primary btn-lg accordion-toggle" data-toggle="collapse" data-parent="#accordionnes2" href="#collapseInner2">Next</button> --}}
                                                <button class="btn btn-primary btn-lg " id="show2">Next</button>
                                            </div>
                                        </center> 
                                    </div>
                                </div>
                                {{-- Here we insert another nested accordion --}}
                                <div class="accordion" id="accordionnes2">
                                    <div class="accordion-group">
                                        <div id="collapsedNested2" class="accordion-body collapse in">
                                            <div class="accordion-inner">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <button class="btn btn-primary accordion-toggle pull-right" id="hide2">Back</button>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="mlsnum">MLS Number:</label>
                                                        <input type="text" id="mlsnum" class="form-control" name="mlsnum" value="" data-toggle="tooltip" data-placement="top" title="If you do not yet have an MLS number, you must leave this field empty. If you enter an incorrect MLS# for the property you will not notified that you entered an incorrect number so please ensure that you enter the correct number.">
                                                    </div>
                                                    <div class="col-md-8">
                                                        <label for="address">Address to be filmed:</label>
                                                        <input type="text" id="address" class="form-control" name="address" value="">
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label for="mlsnum">Unit Number:</label>
                                                        <input type="text" id="mlsnum" class="form-control" name="mlsnum" value="">
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label for="city">City:</label>
                                                        <input type="text" id="city" class="form-control" name="city" value="">
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label for="place">Place</label>
                                                        <input type="text" id="place" class="form-control" name="place" value="" readonly placeholder="Florida">
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label for="zipc">Zip Code</label>
                                                        <input type="text" id="zipc" class="form-control" name="zipc" value="">
                                                    </div>
                                                    <div class="col-md-6 col-md-offset-6">
                                                        <label for="zipc">Does the community have a name?</label>
                                                        <select  class="form-control" name="" id="">
                                                            <option value="" disabled selected hidden>Select</option>
                                                            <option value="">Yes</option>
                                                            <option value="">No</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-12 aftnxt">
                                                        <b>Music for video tour:</b> 
                                                    </div> 
                                                    <div class="col-md-4 marbot" >
                                                        {{-- <label for="zipc">Does</label> --}}
                                                        <select  class="form-control" name="" id="">
                                                            <option value="" disabled selected hidden>Select Happy</option>
                                                            <option value="">Happy Mandolin</option>
                                                            <option value="">Blue Skies</option>
                                                            <option value="">How it began</option>
                                                            <option value="">Payday</option>
                                                            <option value="">Locally Sourced</option>
                                                            <option value="">Indie Romance</option>
                                                            <option value="">Jazz In Paris</option>
                                                            <option value="">The Engagement</option>
                                                            <option value="">Swamp Stomp</option>
                                                            <option value="">Venice Beach</option>
                                                            <option value="">The Creek</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 marbot">
                                                        <select  class="form-control" name="" id="">
                                                            <option value="" disabled selected hidden>Select Cool & Jazzy</option>
                                                            <option value="">Must Be Something</option>
                                                            <option value="">Get Back</option>
                                                            <option value="">Fortaleza</option>
                                                            <option value="">Blakey's Burnout</option>
                                                            <option value="">Confessin</option>
                                                            <option value="">Raindrops</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 marbot">
                                                        <select  class="form-control" name="" id="">
                                                            <option value="" disabled selected hidden>Select Classical</option>
                                                            <option value="">Blue Danube by Strauss</option>
                                                            <option value="">Eine Kleine Nachtmusik by Mozart</option>
                                                            <option value="">Waltz of the Flowers by Tchaikovsky</option>
                                                            <option value="">Les Toreadors from Carmen by Bizet</option>
                                                            <option value="">Messiah by Handel</option>
                                                            <option value="">Morning Mood</option>
                                                            <option value="">Moonlight Sonata by Beethoven</option>
                                                            <option value="">Habanera by Bizet</option>
                                                            <option value="">Far Behind</option>
                                                            <option value="">Hungarian Rhapsody No 2 by Liszt</option>
                                                            <option value="">Ride of the Valkyries by Wagner</option>
                                                            <option value="">Symphony No 5 by Beethoven</option>
                                                            <option value="">Fur Elise by Beethoven</option>
                                                            <option value="">William Tell Overture by Rossini</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <select  class="form-control" name="" id="">
                                                            <option value="" disabled selected hidden>Select Upbeat</option>
                                                            <option value="">Dont Hate Me (vocals)</option>
                                                            <option value="">The Place Inside</option>
                                                            <option value="">How About It</option>
                                                            <option value="">Switch It Up</option>
                                                            <option value="">Rubber Necking</option>
                                                            <option value="">Cimson Fly</option>
                                                            <option value="">Gotta Find Out</option>
                                                            <option value="">Boo Boogie</option>
                                                            <option value="">Festival</option>
                                                            <option value="">Magic Marker</option>
                                                            <option value="">Runaways</option>
                                                            <option value="">Reasons To Smile</option>
                                                            <option value="">Golden Days</option>
                                                            <option value="">First Day</option>
                                                            <option value="">Stalling</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <select  class="form-control" name="" id="">
                                                            <option value="" disabled selected hidden>Select Mello</option>
                                                            <option value="">Hey Girl</option>
                                                            <option value="">Let's Do It</option>
                                                            <option value="">Sweet as Honey</option>
                                                            <option value="">Chances Sax</option>
                                                            <option value="">Until We Meet Again</option>
                                                            <option value="">Keep Dreaming</option>
                                                            <option value="">Don't Look</option>
                                                            <option value="">Where I Am From</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <select  class="form-control" name="" id="">
                                                            <option value="" disabled selected hidden>Select Piano</option>
                                                            <option value="">Sunday Stroll</option>
                                                            <option value="">Keith</option>
                                                            <option value="">Tonto</option>
                                                            <option value="">Clouds</option>
                                                            <option value="">Getting There</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-12 aftnxt">
                                                        <b>Addition Property Information:</b> 
                                                    </div> 
                                                    <div class="col-md-3">
                                                        <label for="bedrooms">Bedrooms:</label>
                                                        <input type="text" id="bedrooms" class="form-control" name="bedrooms" value="">
                                                    </div>
                                                    <div class="col-md-2">
                                                        <label for="baths">Full Baths:</label>
                                                        <input type="text" id="baths" class="form-control" name="baths" value="">
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label for="sqfeet">Square Feet:</label>
                                                        <input type="text" id="sqfeet" class="form-control" name="sqfeet" value="">
                                                    </div>
                                                    <div class="col-md-2">
                                                        <label for="price">Price:</label>
                                                        <input type="text" id="price" class="form-control" name="price" value="">
                                                    </div>
                                                    <div class="col-md-2">
                                                        <label for="hbaths">Half Baths:</label>
                                                        <input type="text" id="hbaths" class="form-control" name="hbaths" value="">
                                                    </div>
                                                    <div class="col-md-12">
                                                        <label for="hbaths">Property Title:</label>
                                                        <input type="text" id="hbaths" class="form-control" name="hbaths" value="" placeholder="The text you enter here will upper on your template"> 
                                                    </div>
                                                    <div class="col-md-12">
                                                        <label for="hbaths">Property Description:</label>
                                                        <input type="text" id="hbaths" class="form-control" name="hbaths" value="" Placeholder="The text you enter here will upper on your template"> 
                                                    </div>
                                                    <div class="col-md-12 aftnxt">
                                                        <b>After submitting this order, you will be emailed a specific time from one of your chosen dates within 8 business hours.</b> 
                                                    </div> 
                                                    <div class="col-md-12">
                                                        <input type="checkbox" id="90days" name="90days" value="">
                                                        <label for="90days">Schedule Later </label>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="90days">Date 1: </label>
                                                        <input type="text" id="datepicker" class="form-control" placeholder="mm/dd/yyyy">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="90days">Time 1: </label>
                                                        <input type="text" id="datepicker" class="form-control" placeholder="hh:mm">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="90days">Final Date and Time: </label>
                                                        <input type="text" id="datepicker" class="form-control" placeholder="07/27/2021 at 09:00 AM" readonly>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="90days">Date 2: </label>
                                                        <input type="text" id="datepicker1" class="form-control" placeholder="mm/dd/yyyy">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="90days">Time 2: </label>
                                                        <input type="text" id="datepicker" class="form-control" placeholder="hh:mm">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="90days">Final Date and Time : </label>
                                                        <input type="text" id="datepicker" class="form-control" placeholder="07/28/2021 at 12:00 PM" readonly>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="90days">Date 3: </label>
                                                        <input type="text" id="datepicker2" class="form-control" placeholder="mm/dd/yyyy">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="90days">Time 3: </label>
                                                        <input type="text" id="datepicker" class="form-control" placeholder="hh:mm">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="90days">Final Date and Time : </label>
                                                        <input type="text" id="datepicker" class="form-control" placeholder="07/30/2021 at 12:00 PM" readonly>
                                                    </div>
                                                    <div class="col-md-12 padtp">
                                                        <center>
                                                            <button class="btn btn-success btn-lg" type="submit"><i class="fa fa-sign-in"></i> Submit Order</button>
                                                        </center>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>          
                                {{-- Inner accordion ends here --}}
                    
                            </div>
                    
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed pad0" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Flythrough Unlimited
                                </button>
                                <span class="erclr pull-right">$349</span>
                                <br>
                                <span class="desclr">15 video scenes + <span class="tlstp" data-toggle="tooltip" data-placement="top" title="Unlimited means that the photographer will take however many photos needed to capture all the rooms inside a property and notable exterior features of the property such as a pool, boat dock, horse stables etc. The total photo count is at the photographers disrection. 'However Many Photos it takes' does not mean carte blanche for the agent to direct the photographer to shoot 3 angles of the same room or a say a close up of bench in the yard. However Many Photos it takes means that all rooms and exterior features will be included in the shoot."> Unlimited </span></span>
                            </h5>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                            <div class="card-body" style="margin:10px;">
                                <div class="row" id="CollapsedRow3">
                                    <div class="col-md-6"> 
                                        <b>Video Tour Sample:</b>
                                        <video width="auto" height="240" controls>
                                            <source src="videos/sample1.mov" type="video/mp4">
                                            Your browser does not support the video tag.
                                        </video>
                                    </div>
                                    <div class="col-md-6"> 
                                        <b>3D Tour Sample:</b>
                                        <video width="auto" height="240" controls>
                                            <source src="videos/sample2.mov" type="video/mp4">
                                            Your browser does not support the video tag.
                                        </video>
                                    </div>
                                    <div class="col-md-6"></div>
                                    <div class="col-md-6">
                                        <p class="tlstp" data-toggle="tooltip" data-placement="top" title="Please note: There are certain camera limitations such as the camera cannot shoot exterior images so that you can travel from the inside to the exterior of the home. We do not shoot exterior 360 images nor add a play button to the tour or the addition of Mattertags. We do not photoshop any camera reflections from the tour (The tour is processed by Matterport not at Hometakes). Some jagged edges may appear in the 3-D dollhouse and floor plan view and cannot be prevented. Windows without shades or blinds may display as overexposed. If the home has a separate guest house building that is detached from the main house and you want to include it in your tour, there is a $50 addition charge. This is necessary as it has to be made a processed as a separate tour.. Chrome browser may not be fully supported when viewing the tour.">
                                            → Read these important 3D Tour Limitations
                                        </p>
                                        <p class="tlstp" data-toggle="tooltip" data-placement="top" title="Please note that floor plans will only include areas that were shot with the Matterport Camera. It will not include areas such as patios, pools or garages and any room that was not shot inside the home such as storage cupboards etc. Floor plans are produced by Matterport and not Hometakes and as such, are non refundable. Please view the sample before ordering this item.">
                                            → Floor plan Limitations </p>
                                        <p> <a href="https://www.hometakesvideos.com/orders/Sample_Floor_Plan.pdf" target="_blank"> → Sample Floor Plan </a> </p>
                                    </div>
                                    {{-- default check --}}
                                    <div class="col-md-6">
                                        <input type="checkbox" value="99" class="checkbox_flythrough" onchange="checkTotalFlythrough()" checked>
                                        <label for="touroption">3D Tour option (from) <span class="erclr">$99</span> </label>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="" class="erclr">You must enter the exact AC Square footage so that we can calculate your appointment time accurately:</label>
                                        <div class="col-md-6">
                                            <input type="text" id="acsquare" class="form-control" name="acsquare" placeholder="Exact AC Square Unit Footage" data-toggle="tooltip" data-placement="top" title="Do not estimate the size of the home. We check the size of the home against Realtor.com after you place the listing into MLS. Any difference in the price of the tour due to an incorrect number entered here will result in your account being charged the difference in price plus a re-assessment fee of $49" required>
                                        </div>
                                    
                                        <div class="cap">
                                            <li> 3D Tour is hosted on your Tour Template and will not function after 60 days. You should purchase addition hosting if you think it may take longer than 60 days to sell the property. You can purchase additional hosting later.</li> 
                                        </div> 
                                        <p class="text-center host" style="border-top: 1px solid #DCDCDC;">*Hosting fees non-refundable or transferable</p>
                                    </div>
                                    {{-- default check --}}
                                    <div class="col-md-4 col-xs-12">
                                        <input type="checkbox" value="35" class="hostingcheckbox_flythrough checkbox_flythrough" onchange="checkTotalFlythrough()" checked>
                                        <label for="90days">90 days additional hosting <span class="erclr">$35</span> </label>
                                    </div>
                                    <div class="col-md-4 col-xs-12">
                                        <input type="checkbox" value="55" class="hostingcheckbox_flythrough checkbox_flythrough" onchange="checkTotalFlythrough()">
                                        <label for="180days"> 180 days additional hosting <span class="erclr">$55</span></label>
                                    </div>
                                    <div class="col-md-4 col-xs-12">
                                        <input type="checkbox" value="79" class="hostingcheckbox_flythrough checkbox_flythrough" onchange="checkTotalFlythrough()">
                                        <label for="360days"> 360 days additional hosting <span class="erclr">$79</span></label>
                                    </div>
                                    <br><br>
                                    <div class="col-md-6 col-xs-12">
                                        <input type="checkbox" value="35" class="checkbox_flythrough" onchange="checkTotalFlythrough()">
                                        <label for="Plan"> Add a Floor Plan <span class="erclr">$35</span></label>
                                    </div>
                                    {{-- default check --}}
                                    <div class="col-md-6">
                                        <input type="checkbox" value="50" class="checkbox_flythrough" onchange="checkTotalFlythrough()" checked>
                                        <label for="Plan"> ‘Plus’ option - 2 Aerial photos <span class="erclr">$50</span></label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="checkbox" value="70" class="checkbox_flythrough" onchange="checkTotalFlythrough()">
                                        <label for="Plan"> ‘Premium’ option - 6 Aerial photos <span class="erclr">$70</span></label>
                                    </div>
                                    {{-- default check --}}
                                    <div class="col-md-6 line-height">
                                        <input type="checkbox" value="10" class="checkbox_flythrough" onchange="checkTotalFlythrough()" checked>
                                            Send me the original video file when its ready  <span class="erclr">$10</span>
                                        <br>
                                        <span class="desclr">Receive the original video file for upload to your own social networking websites such as YouTube and Facebook</span> 
                                    </div>
                                    {{-- default check --}}
                                    <div class="col-md-6">
                                        <input type="checkbox" value="5" class="checkbox_flythrough" onchange="checkTotalFlythrough()" checked>
                                        <label for="cance"> Cancelation Insurance 
                                            <span class="tlstp" data-toggle="tooltip" data-placement="top" title="If you want to reschedule the appointment, you must notify us 18 hours prior to the appointment or you will incur a $30 cancelation/reschedule fee. Checking the insurance check box allows you to cancel up 1 hour prior to the appointment.">
                                                (What's this?)
                                            </span>
                                            <span class="erclr">$5</span>
                                        </label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="checkbox" value="19" class="checkbox_flythrough" onchange="checkTotalFlythrough()">
                                        <label for="cance"> Removal of 'Hometakes' branding on your Tour 
                                            <span class="erclr">$19</span>
                                            
                                        </label>
                                    </div>
                                    {{-- default check --}}
                                    <div class="col-md-6">
                                        <input type="checkbox" value="50" class="checkbox_flythrough" onchange="checkTotalFlythrough()" checked>
                                        <label for="cance"> 4 Twilight Enhancement photos <a href="https://www.hometakesvideos.com/orders/twilight_enhancement_samples/index.html" target="_blank">(See sample)</a>
                                            <span class="erclr">$50</span>
                                        </label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="checkbox" value="175" class="checkbox_flythrough" onchange="checkTotalFlythrough()">
                                        <label for="cance"> Genuine Twilight photography <a href="https://www.hometakesvideos.com/orders/twilight_samples/index.html" target="_blank">(See sample)</a>
                                            <span class="erclr">$175</span>
                                        </label>
                                    </div>
                                    <div class="col-md-12 col-xs-12 text-center">
                                        <p style="border-top: 1px solid #DCDCDC"></p>
                                        <center>
                                            <label for="total">Total:</label>
                                            <input type="text" id="total_flythrough" class="form-controltotal" placeholder="$598.00" readonly>
                                            <br>
                                            <div class="agrees">
                                                <input type="checkbox" id="90days" name="90days" value="">
                                                <label for="90days">I agree to the <a href="" data-toggle="modal" data-target="#policies">policies and conditions</a> </label>
                                                <br>
                                                <button class="btn btn-primary btn-lg " id="show3">Next</button>
                                            </div>
                                        </center> 
                                    </div>
                                </div>
                                {{-- Here we insert another nested accordion --}}
                                <div class="accordion" id="accordionnes3">
                                    <div class="accordion-group">
                                        <div id="collapsedNested3" class="accordion-body collapse in">
                                            <div class="accordion-inner">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <button class="btn btn-primary accordion-toggle pull-right" id="hide3">Back</button>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="mlsnum">MLS Number:</label>
                                                        <input type="text" id="mlsnum" class="form-control" name="mlsnum" value="" data-toggle="tooltip" data-placement="top" title="If you do not yet have an MLS number, you must leave this field empty. If you enter an incorrect MLS# for the property you will not notified that you entered an incorrect number so please ensure that you enter the correct number.">
                                                    </div>
                                                    <div class="col-md-8">
                                                        <label for="address">Address to be filmed:</label>
                                                        <input type="text" id="address" class="form-control" name="address" value="">
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label for="mlsnum">Unit Number:</label>
                                                        <input type="text" id="mlsnum" class="form-control" name="mlsnum" value="">
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label for="city">City:</label>
                                                        <input type="text" id="city" class="form-control" name="city" value="">
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label for="place">Place</label>
                                                        <input type="text" id="place" class="form-control" name="place" value="" readonly placeholder="Florida">
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label for="zipc">Zip Code</label>
                                                        <input type="text" id="zipc" class="form-control" name="zipc" value="">
                                                    </div>
                                                    <div class="col-md-6 col-md-offset-6">
                                                        <label for="zipc">Does the community have a name?</label>
                                                        <select  class="form-control" name="" id="">
                                                            <option value="" disabled selected hidden>Select</option>
                                                            <option value="">Yes</option>
                                                            <option value="">No</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-12 aftnxt">
                                                        <b>Music for video tour:</b> 
                                                    </div> 
                                                    <div class="col-md-4 marbot" >
                                                        {{-- <label for="zipc">Does</label> --}}
                                                        <select  class="form-control" name="" id="">
                                                            <option value="" disabled selected hidden>Select Happy</option>
                                                            <option value="">Happy Mandolin</option>
                                                            <option value="">Blue Skies</option>
                                                            <option value="">How it began</option>
                                                            <option value="">Payday</option>
                                                            <option value="">Locally Sourced</option>
                                                            <option value="">Indie Romance</option>
                                                            <option value="">Jazz In Paris</option>
                                                            <option value="">The Engagement</option>
                                                            <option value="">Swamp Stomp</option>
                                                            <option value="">Venice Beach</option>
                                                            <option value="">The Creek</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 marbot">
                                                        <select  class="form-control" name="" id="">
                                                            <option value="" disabled selected hidden>Select Cool & Jazzy</option>
                                                            <option value="">Must Be Something</option>
                                                            <option value="">Get Back</option>
                                                            <option value="">Fortaleza</option>
                                                            <option value="">Blakey's Burnout</option>
                                                            <option value="">Confessin</option>
                                                            <option value="">Raindrops</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 marbot">
                                                        <select  class="form-control" name="" id="">
                                                            <option value="" disabled selected hidden>Select Classical</option>
                                                            <option value="">Blue Danube by Strauss</option>
                                                            <option value="">Eine Kleine Nachtmusik by Mozart</option>
                                                            <option value="">Waltz of the Flowers by Tchaikovsky</option>
                                                            <option value="">Les Toreadors from Carmen by Bizet</option>
                                                            <option value="">Messiah by Handel</option>
                                                            <option value="">Morning Mood</option>
                                                            <option value="">Moonlight Sonata by Beethoven</option>
                                                            <option value="">Habanera by Bizet</option>
                                                            <option value="">Far Behind</option>
                                                            <option value="">Hungarian Rhapsody No 2 by Liszt</option>
                                                            <option value="">Ride of the Valkyries by Wagner</option>
                                                            <option value="">Symphony No 5 by Beethoven</option>
                                                            <option value="">Fur Elise by Beethoven</option>
                                                            <option value="">William Tell Overture by Rossini</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <select  class="form-control" name="" id="">
                                                            <option value="" disabled selected hidden>Select Upbeat</option>
                                                            <option value="">Dont Hate Me (vocals)</option>
                                                            <option value="">The Place Inside</option>
                                                            <option value="">How About It</option>
                                                            <option value="">Switch It Up</option>
                                                            <option value="">Rubber Necking</option>
                                                            <option value="">Cimson Fly</option>
                                                            <option value="">Gotta Find Out</option>
                                                            <option value="">Boo Boogie</option>
                                                            <option value="">Festival</option>
                                                            <option value="">Magic Marker</option>
                                                            <option value="">Runaways</option>
                                                            <option value="">Reasons To Smile</option>
                                                            <option value="">Golden Days</option>
                                                            <option value="">First Day</option>
                                                            <option value="">Stalling</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <select  class="form-control" name="" id="">
                                                            <option value="" disabled selected hidden>Select Mello</option>
                                                            <option value="">Hey Girl</option>
                                                            <option value="">Let's Do It</option>
                                                            <option value="">Sweet as Honey</option>
                                                            <option value="">Chances Sax</option>
                                                            <option value="">Until We Meet Again</option>
                                                            <option value="">Keep Dreaming</option>
                                                            <option value="">Don't Look</option>
                                                            <option value="">Where I Am From</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <select  class="form-control" name="" id="">
                                                            <option value="" disabled selected hidden>Select Piano</option>
                                                            <option value="">Sunday Stroll</option>
                                                            <option value="">Keith</option>
                                                            <option value="">Tonto</option>
                                                            <option value="">Clouds</option>
                                                            <option value="">Getting There</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-12 aftnxt">
                                                        <b>Addition Property Information:</b> 
                                                    </div> 
                                                    <div class="col-md-3">
                                                        <label for="bedrooms">Bedrooms:</label>
                                                        <input type="text" id="bedrooms" class="form-control" name="bedrooms" value="">
                                                    </div>
                                                    <div class="col-md-2">
                                                        <label for="baths">Full Baths:</label>
                                                        <input type="text" id="baths" class="form-control" name="baths" value="">
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label for="sqfeet">Square Feet:</label>
                                                        <input type="text" id="sqfeet" class="form-control" name="sqfeet" value="">
                                                    </div>
                                                    <div class="col-md-2">
                                                        <label for="price">Price:</label>
                                                        <input type="text" id="price" class="form-control" name="price" value="">
                                                    </div>
                                                    <div class="col-md-2">
                                                        <label for="hbaths">Half Baths:</label>
                                                        <input type="text" id="hbaths" class="form-control" name="hbaths" value="">
                                                    </div>
                                                    <div class="col-md-12">
                                                        <label for="hbaths">Property Title:</label>
                                                        <input type="text" id="hbaths" class="form-control" name="hbaths" value="" placeholder="The text you enter here will upper on your template"> 
                                                    </div>
                                                    <div class="col-md-12">
                                                        <label for="hbaths">Property Description:</label>
                                                        <input type="text" id="hbaths" class="form-control" name="hbaths" value="" Placeholder="The text you enter here will upper on your template"> 
                                                    </div>
                                                    <div class="col-md-12 aftnxt">
                                                        <b>After submitting this order, you will be emailed a specific time from one of your chosen dates within 8 business hours.</b> 
                                                    </div> 
                                                    <div class="col-md-12">
                                                        <input type="checkbox" id="90days" name="90days" value="">
                                                        <label for="90days">Schedule Later </label>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="90days">Date 1: </label>
                                                        <input type="text" id="datepicker" class="form-control" placeholder="mm/dd/yyyy">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="90days">Time 1: </label>
                                                        <input type="text" id="datepicker" class="form-control" placeholder="hh:mm">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="90days">Final Date and Time: </label>
                                                        <input type="text" id="datepicker" class="form-control" placeholder="07/27/2021 at 09:00 AM" readonly>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="90days">Date 2: </label>
                                                        <input type="text" id="datepicker1" class="form-control" placeholder="mm/dd/yyyy">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="90days">Time 2: </label>
                                                        <input type="text" id="datepicker" class="form-control" placeholder="hh:mm">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="90days">Final Date and Time : </label>
                                                        <input type="text" id="datepicker" class="form-control" placeholder="07/28/2021 at 12:00 PM" readonly>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="90days">Date 3: </label>
                                                        <input type="text" id="datepicker2" class="form-control" placeholder="mm/dd/yyyy">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="90days">Time 3: </label>
                                                        <input type="text" id="datepicker" class="form-control" placeholder="hh:mm">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="90days">Final Date and Time : </label>
                                                        <input type="text" id="datepicker" class="form-control" placeholder="07/30/2021 at 12:00 PM" readonly>
                                                    </div>
                                                    <div class="col-md-12 padtp">
                                                        <center>
                                                            <button class="btn btn-success btn-lg" type="submit"><i class="fa fa-sign-in"></i> Submit Order</button>
                                                        </center>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>          
                                {{-- Inner accordion ends here --}}
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" id="headingFour">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed pad0" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                    Flythrough 20 package
                                </button>
                                <span class="erclr pull-right">$269</span>
                                <br>
                                <span class="desclr">12 video scenes + 20 HDR Photos</span>
                            </h5>
                        </div>
                    
                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                            <div class="card-body">
                                <div class="row" id="CollapsedRow4">
                                    <div class="col-md-6"> 
                                        <b>Video Tour Sample:</b>
                                        <video width="auto" height="240" controls>
                                            <source src="videos/sample1.mov" type="video/mp4">
                                            Your browser does not support the video tag.
                                        </video>
                                    </div>
                                    <div class="col-md-6"> 
                                        <b>3D Tour Sample:</b>
                                        <video width="auto" height="240" controls>
                                            <source src="videos/sample2.mov" type="video/mp4">
                                            Your browser does not support the video tag.
                                        </video>
                                    </div>
                                    <div class="col-md-6"></div>
                                    <div class="col-md-6">
                                        <p class="tlstp" data-toggle="tooltip" data-placement="top" title="Please note: There are certain camera limitations such as the camera cannot shoot exterior images so that you can travel from the inside to the exterior of the home. We do not shoot exterior 360 images nor add a play button to the tour or the addition of Mattertags. We do not photoshop any camera reflections from the tour (The tour is processed by Matterport not at Hometakes). Some jagged edges may appear in the 3-D dollhouse and floor plan view and cannot be prevented. Windows without shades or blinds may display as overexposed. If the home has a separate guest house building that is detached from the main house and you want to include it in your tour, there is a $50 addition charge. This is necessary as it has to be made a processed as a separate tour.. Chrome browser may not be fully supported when viewing the tour.">
                                            → Read these important 3D Tour Limitations
                                        </p>
                                        <p class="tlstp" data-toggle="tooltip" data-placement="top" title="Please note that floor plans will only include areas that were shot with the Matterport Camera. It will not include areas such as patios, pools or garages and any room that was not shot inside the home such as storage cupboards etc. Floor plans are produced by Matterport and not Hometakes and as such, are non refundable. Please view the sample before ordering this item.">
                                            → Floor plan Limitations </p>
                                        <p> <a href="https://www.hometakesvideos.com/orders/Sample_Floor_Plan.pdf" target="_blank"> → Sample Floor Plan </a> </p>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="checkbox" value="99" class="checkbox_flythrough20" onchange="checkTotalFlythrough20()" checked>
                                        <label for="branding">3D Tour option (from) <span class="erclr">$99</span> </label>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="" class="erclr">You must enter the exact AC Square footage so that we can calculate your appointment time accurately:</label>
                                        <div class="col-md-6">
                                            <input type="text" id="acsquare" class="form-control" name="acsquare" placeholder="Exact AC Square Unit Footage" data-toggle="tooltip" data-placement="top" title="Do not estimate the size of the home. We check the size of the home against Realtor.com after you place the listing into MLS. Any difference in the price of the tour due to an incorrect number entered here will result in your account being charged the difference in price plus a re-assessment fee of $49" required>
                                        </div>
                                    
                                        <div class="cap">
                                            <li> 3D Tour is hosted on your Tour Template and will not function after 60 days. You should purchase addition hosting if you think it may take longer than 60 days to sell the property. You can purchase additional hosting later.</li> 
                                        </div> 
                                        <p class="text-center host" style="border-top: 1px solid #DCDCDC;">*Hosting fees non-refundable or transferable</p>
                                    </div>
                                    {{-- default check --}}
                                    <div class="col-md-4 col-xs-12">
                                        <input type="checkbox" value="35" class="hostingcheckbox_flythrough20 checkbox_flythrough20" onchange="checkTotalFlythrough20()" checked>
                                        <label for="90days">90 days additional hosting <span class="erclr">$35</span> </label>
                                    </div>
                                    <div class="col-md-4 col-xs-12">
                                        <input type="checkbox" value="55" class="hostingcheckbox_flythrough20 checkbox_flythrough20" onchange="checkTotalFlythrough20()">
                                        <label for="180days"> 180 days additional hosting <span class="erclr">$55</span></label>
                                    </div>
                                    <div class="col-md-4 col-xs-12">
                                        <input type="checkbox" value="79" class="hostingcheckbox_flythrough20 checkbox_flythrough20" onchange="checkTotalFlythrough20()">
                                        <label for="360days"> 360 days additional hosting <span class="erclr">$79</span></label>
                                    </div>
                                    <br><br>
                                    <div class="col-md-6 col-xs-12">
                                        <input type="checkbox" value="35" class="checkbox_flythrough20" onchange="checkTotalFlythrough20()">
                                        <label for="Plan"> Add a Floor Plan <span class="erclr">$35</span></label>
                                    </div>
                                    {{-- default check --}}
                                    <div class="col-md-6">
                                        <input type="checkbox" value="50" class="checkbox_flythrough20" onchange="checkTotalFlythrough20()" checked>
                                        <label for="Plan"> ‘Plus’ option - 2 Aerial photos <span class="erclr">$50</span></label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="checkbox" value="70" class="checkbox_flythrough20" onchange="checkTotalFlythrough20()">
                                        <label for="Plan"> ‘Premium’ option - 6 Aerial photos <span class="erclr">$70</span></label>
                                    </div>
                                    {{-- default check --}}
                                    <div class="col-md-6 line-height">
                                        <input type="checkbox" value="10" class="checkbox_flythrough20" onchange="checkTotalFlythrough20()" checked>
                                            Send me the original video file when its ready  <span class="erclr">$10</span>
                                        <br>
                                        <span class="desclr">Receive the original video file for upload to your own social networking websites such as YouTube and Facebook</span> 
                                    </div>
                                    {{-- default check --}}
                                    <div class="col-md-6">
                                        <input type="checkbox" value="5" class="checkbox_flythrough20" onchange="checkTotalFlythrough20()" checked>
                                        <label for="cance"> Cancelation Insurance 
                                            <span class="tlstp" data-toggle="tooltip" data-placement="top" title="If you want to reschedule the appointment, you must notify us 18 hours prior to the appointment or you will incur a $30 cancelation/reschedule fee. Checking the insurance check box allows you to cancel up 1 hour prior to the appointment.">
                                                (What's this?)
                                            </span>
                                            <span class="erclr">$5</span>
                                        </label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="checkbox" value="19" class="checkbox_flythrough20" onchange="checkTotalFlythrough20()">
                                        <label for="cance"> Removal of 'Hometakes' branding on your Tour 
                                            <span class="erclr">$19</span>
                                            
                                        </label>
                                    </div>
                                    {{-- default check --}}
                                    <div class="col-md-6">
                                        <input type="checkbox" value="40" class="checkbox_flythrough20" onchange="checkTotalFlythrough20()" checked>
                                        <label for="cance"> 3 Twilight Enhancement photos <a href="https://www.hometakesvideos.com/orders/twilight_enhancement_samples/index.html" target="_blank">(See sample)</a>
                                            <span class="erclr">$40</span>
                                        </label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="checkbox" value="175" class="checkbox_flythrough20" onchange="checkTotalFlythrough20()">
                                        <label for="cance"> Genuine Twilight photography <a href="https://www.hometakesvideos.com/orders/twilight_samples/index.html" target="_blank">(See sample)</a>
                                            <span class="erclr">$175</span>
                                        </label>
                                    </div>
                                    <div class="col-md-12 col-xs-12 text-center">
                                        <p style="border-top: 1px solid #DCDCDC"></p>
                                        <center>
                                            <label for="total">Total:</label>
                                            <input type="text" id="total_flythrough20" class="form-controltotal" placeholder="$508.00" readonly>
                                            <br>
                                            <div class="agrees">
                                                <input type="checkbox" id="90days" name="90days" value="">
                                                <label for="90days">I agree to the <a href="" data-toggle="modal" data-target="#policies">policies and conditions</a> </label>
                                                <br>
                                                {{-- <button class="btn btn-primary btn-lg accordion-toggle" data-toggle="collapse" data-parent="#accordionnes4" href="#collapseInner4">Next</button> --}}
                                                <button class="btn btn-primary btn-lg " id="show4">Next</button>
                                            </div>
                                        </center> 
                                    </div>
                                </div>
                                {{-- Here we insert another nested accordion --}}
                                <div class="accordion" id="accordionnes4">
                                    <div class="accordion-group">
                                        <div id="collapsedNested4" class="accordion-body collapse in">
                                            <div class="accordion-inner">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <button class="btn btn-primary accordion-toggle pull-right" id="hide4">Back</button>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="mlsnum">MLS Number:</label>
                                                        <input type="text" id="mlsnum" class="form-control" name="mlsnum" value="" data-toggle="tooltip" data-placement="top" title="If you do not yet have an MLS number, you must leave this field empty. If you enter an incorrect MLS# for the property you will not notified that you entered an incorrect number so please ensure that you enter the correct number.">
                                                    </div>
                                                    <div class="col-md-8">
                                                        <label for="address">Address to be filmed:</label>
                                                        <input type="text" id="address" class="form-control" name="address" value="">
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label for="mlsnum">Unit Number:</label>
                                                        <input type="text" id="mlsnum" class="form-control" name="mlsnum" value="">
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label for="city">City:</label>
                                                        <input type="text" id="city" class="form-control" name="city" value="">
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label for="place">Place</label>
                                                        <input type="text" id="place" class="form-control" name="place" value="" readonly placeholder="Florida">
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label for="zipc">Zip Code</label>
                                                        <input type="text" id="zipc" class="form-control" name="zipc" value="">
                                                    </div>
                                                    <div class="col-md-6 col-md-offset-6">
                                                        <label for="zipc">Does the community have a name?</label>
                                                        <select  class="form-control" name="" id="">
                                                            <option value="" disabled selected hidden>Select</option>
                                                            <option value="">Yes</option>
                                                            <option value="">No</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-12 aftnxt">
                                                        <b>Music for video tour:</b> 
                                                    </div> 
                                                    <div class="col-md-4 marbot" >
                                                        {{-- <label for="zipc">Does</label> --}}
                                                        <select  class="form-control" name="" id="">
                                                            <option value="" disabled selected hidden>Select Happy</option>
                                                            <option value="">Happy Mandolin</option>
                                                            <option value="">Blue Skies</option>
                                                            <option value="">How it began</option>
                                                            <option value="">Payday</option>
                                                            <option value="">Locally Sourced</option>
                                                            <option value="">Indie Romance</option>
                                                            <option value="">Jazz In Paris</option>
                                                            <option value="">The Engagement</option>
                                                            <option value="">Swamp Stomp</option>
                                                            <option value="">Venice Beach</option>
                                                            <option value="">The Creek</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 marbot">
                                                        <select  class="form-control" name="" id="">
                                                            <option value="" disabled selected hidden>Select Cool & Jazzy</option>
                                                            <option value="">Must Be Something</option>
                                                            <option value="">Get Back</option>
                                                            <option value="">Fortaleza</option>
                                                            <option value="">Blakey's Burnout</option>
                                                            <option value="">Confessin</option>
                                                            <option value="">Raindrops</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 marbot">
                                                        <select  class="form-control" name="" id="">
                                                            <option value="" disabled selected hidden>Select Classical</option>
                                                            <option value="">Blue Danube by Strauss</option>
                                                            <option value="">Eine Kleine Nachtmusik by Mozart</option>
                                                            <option value="">Waltz of the Flowers by Tchaikovsky</option>
                                                            <option value="">Les Toreadors from Carmen by Bizet</option>
                                                            <option value="">Messiah by Handel</option>
                                                            <option value="">Morning Mood</option>
                                                            <option value="">Moonlight Sonata by Beethoven</option>
                                                            <option value="">Habanera by Bizet</option>
                                                            <option value="">Far Behind</option>
                                                            <option value="">Hungarian Rhapsody No 2 by Liszt</option>
                                                            <option value="">Ride of the Valkyries by Wagner</option>
                                                            <option value="">Symphony No 5 by Beethoven</option>
                                                            <option value="">Fur Elise by Beethoven</option>
                                                            <option value="">William Tell Overture by Rossini</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <select  class="form-control" name="" id="">
                                                            <option value="" disabled selected hidden>Select Upbeat</option>
                                                            <option value="">Dont Hate Me (vocals)</option>
                                                            <option value="">The Place Inside</option>
                                                            <option value="">How About It</option>
                                                            <option value="">Switch It Up</option>
                                                            <option value="">Rubber Necking</option>
                                                            <option value="">Cimson Fly</option>
                                                            <option value="">Gotta Find Out</option>
                                                            <option value="">Boo Boogie</option>
                                                            <option value="">Festival</option>
                                                            <option value="">Magic Marker</option>
                                                            <option value="">Runaways</option>
                                                            <option value="">Reasons To Smile</option>
                                                            <option value="">Golden Days</option>
                                                            <option value="">First Day</option>
                                                            <option value="">Stalling</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <select  class="form-control" name="" id="">
                                                            <option value="" disabled selected hidden>Select Mello</option>
                                                            <option value="">Hey Girl</option>
                                                            <option value="">Let's Do It</option>
                                                            <option value="">Sweet as Honey</option>
                                                            <option value="">Chances Sax</option>
                                                            <option value="">Until We Meet Again</option>
                                                            <option value="">Keep Dreaming</option>
                                                            <option value="">Don't Look</option>
                                                            <option value="">Where I Am From</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <select  class="form-control" name="" id="">
                                                            <option value="" disabled selected hidden>Select Piano</option>
                                                            <option value="">Sunday Stroll</option>
                                                            <option value="">Keith</option>
                                                            <option value="">Tonto</option>
                                                            <option value="">Clouds</option>
                                                            <option value="">Getting There</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-12 aftnxt">
                                                        <b>Addition Property Information:</b> 
                                                    </div> 
                                                    <div class="col-md-3">
                                                        <label for="bedrooms">Bedrooms:</label>
                                                        <input type="text" id="bedrooms" class="form-control" name="bedrooms" value="">
                                                    </div>
                                                    <div class="col-md-2">
                                                        <label for="baths">Full Baths:</label>
                                                        <input type="text" id="baths" class="form-control" name="baths" value="">
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label for="sqfeet">Square Feet:</label>
                                                        <input type="text" id="sqfeet" class="form-control" name="sqfeet" value="">
                                                    </div>
                                                    <div class="col-md-2">
                                                        <label for="price">Price:</label>
                                                        <input type="text" id="price" class="form-control" name="price" value="">
                                                    </div>
                                                    <div class="col-md-2">
                                                        <label for="hbaths">Half Baths:</label>
                                                        <input type="text" id="hbaths" class="form-control" name="hbaths" value="">
                                                    </div>
                                                    <div class="col-md-12">
                                                        <label for="hbaths">Property Title:</label>
                                                        <input type="text" id="hbaths" class="form-control" name="hbaths" value="" placeholder="The text you enter here will upper on your template"> 
                                                    </div>
                                                    <div class="col-md-12">
                                                        <label for="hbaths">Property Description:</label>
                                                        <input type="text" id="hbaths" class="form-control" name="hbaths" value="" Placeholder="The text you enter here will upper on your template"> 
                                                    </div>
                                                    <div class="col-md-12 aftnxt">
                                                        <b>After submitting this order, you will be emailed a specific time from one of your chosen dates within 8 business hours.</b> 
                                                    </div> 
                                                    <div class="col-md-12">
                                                        <input type="checkbox" id="90days" name="90days" value="">
                                                        <label for="90days">Schedule Later </label>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="90days">Date 1: </label>
                                                        <input type="text" id="datepicker" class="form-control" placeholder="mm/dd/yyyy">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="90days">Time 1: </label>
                                                        <input type="text" id="datepicker" class="form-control" placeholder="hh:mm">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="90days">Final Date and Time: </label>
                                                        <input type="text" id="datepicker" class="form-control" placeholder="07/27/2021 at 09:00 AM" readonly>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="90days">Date 2: </label>
                                                        <input type="text" id="datepicker1" class="form-control" placeholder="mm/dd/yyyy">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="90days">Time 2: </label>
                                                        <input type="text" id="datepicker" class="form-control" placeholder="hh:mm">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="90days">Final Date and Time : </label>
                                                        <input type="text" id="datepicker" class="form-control" placeholder="07/28/2021 at 12:00 PM" readonly>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="90days">Date 3: </label>
                                                        <input type="text" id="datepicker2" class="form-control" placeholder="mm/dd/yyyy">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="90days">Time 3: </label>
                                                        <input type="text" id="datepicker" class="form-control" placeholder="hh:mm">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="90days">Final Date and Time : </label>
                                                        <input type="text" id="datepicker" class="form-control" placeholder="07/30/2021 at 12:00 PM" readonly>
                                                    </div>
                                                    <div class="col-md-12 padtp">
                                                        <center>
                                                            <button class="btn btn-success btn-lg" type="submit"><i class="fa fa-sign-in"></i> Submit Order</button>
                                                        </center>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>          
                                {{-- Inner accordion ends here --}}
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingFive">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed pad0" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    Flythrough 13 package
                                </button>
                                <span class="erclr pull-right">$199</span>
                                <br>
                                <span class="desclr">8 video scenes + 13 HDR Photos</span>
                            </h5>
                        </div>
                        <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
                            <div class="card-body">
                                <div class="row" id="CollapsedRow5">
                                    <div class="col-md-6"> 
                                        <b>Video Tour Sample:</b>
                                        <video width="auto" height="240" controls>
                                            <source src="videos/sample1.mov" type="video/mp4">
                                            Your browser does not support the video tag.
                                        </video>
                                    </div>
                                    <div class="col-md-6"> 
                                        <b>3D Tour Sample:</b>
                                        <video width="auto" height="240" controls>
                                            <source src="videos/sample2.mov" type="video/mp4">
                                            Your browser does not support the video tag.
                                        </video>
                                    </div>
                                    <div class="col-md-6"></div>
                                    <div class="col-md-6">
                                        <p class="tlstp" data-toggle="tooltip" data-placement="top" title="Please note: There are certain camera limitations such as the camera cannot shoot exterior images so that you can travel from the inside to the exterior of the home. We do not shoot exterior 360 images nor add a play button to the tour or the addition of Mattertags. We do not photoshop any camera reflections from the tour (The tour is processed by Matterport not at Hometakes). Some jagged edges may appear in the 3-D dollhouse and floor plan view and cannot be prevented. Windows without shades or blinds may display as overexposed. If the home has a separate guest house building that is detached from the main house and you want to include it in your tour, there is a $50 addition charge. This is necessary as it has to be made a processed as a separate tour.. Chrome browser may not be fully supported when viewing the tour.">
                                            → Read these important 3D Tour Limitations
                                        </p>
                                        <p class="tlstp" data-toggle="tooltip" data-placement="top" title="Please note that floor plans will only include areas that were shot with the Matterport Camera. It will not include areas such as patios, pools or garages and any room that was not shot inside the home such as storage cupboards etc. Floor plans are produced by Matterport and not Hometakes and as such, are non refundable. Please view the sample before ordering this item.">
                                            → Floor plan Limitations </p>
                                        <p> <a href="https://www.hometakesvideos.com/orders/Sample_Floor_Plan.pdf" target="_blank"> → Sample Floor Plan </a> </p>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="checkbox" value="99" class="checkbox_flythrough13" onchange="checkTotalFlythrough13()" checked>
                                        <label for="branding">3D Tour option (from) <span class="erclr">$99</span> </label>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="" class="erclr">You must enter the exact AC Square footage so that we can calculate your appointment time accurately:</label>
                                        <div class="col-md-6">
                                            <input type="text" id="acsquare" class="form-control" name="acsquare" placeholder="Exact AC Square Unit Footage" data-toggle="tooltip" data-placement="top" title="Do not estimate the size of the home. We check the size of the home against Realtor.com after you place the listing into MLS. Any difference in the price of the tour due to an incorrect number entered here will result in your account being charged the difference in price plus a re-assessment fee of $49" required>
                                        </div>
                                        <div class="cap">
                                            <li> 3D Tour is hosted on your Tour Template and will not function after 60 days. You should purchase addition hosting if you think it may take longer than 60 days to sell the property. You can purchase additional hosting later.</li> 
                                        </div> 
                                        <p class="text-center host" style="border-top: 1px solid #DCDCDC;">*Hosting fees non-refundable or transferable</p>
                                    </div>
                                    {{-- default check --}}
                                    <div class="col-md-4 col-xs-12">
                                        <input type="checkbox" value="35" class="hostingcheckbox_flythrough13 checkbox_flythrough13" onchange="checkTotalFlythrough13()" checked>
                                        <label for="90days">90 days additional hosting <span class="erclr">$35</span> </label>
                                    </div>
                                    <div class="col-md-4 col-xs-12">
                                        <input type="checkbox" value="55" class="hostingcheckbox_flythrough13 checkbox_flythrough13" onchange="checkTotalFlythrough13()">
                                        <label for="180days"> 180 days additional hosting <span class="erclr">$55</span></label>
                                    </div>
                                    <div class="col-md-4 col-xs-12">
                                        <input type="checkbox" value="79" class="hostingcheckbox_flythrough13 checkbox_flythrough13" onchange="checkTotalFlythrough13()">
                                        <label for="360days"> 360 days additional hosting <span class="erclr">$79</span></label>
                                    </div>
                                    <br><br>
                                    <div class="col-md-6 col-xs-12">
                                        <input type="checkbox" value="35" class="checkbox_flythrough13" onchange="checkTotalFlythrough13()">
                                        <label for="Plan"> Add a Floor Plan <span class="erclr">$35</span></label>
                                    </div>
                                    {{-- default check --}}
                                    <div class="col-md-6">
                                        <input type="checkbox" value="50" class="checkbox_flythrough13" onchange="checkTotalFlythrough13()" checked>
                                        <label for="Plan"> ‘Plus’ option - 2 Aerial photos <span class="erclr">$50</span></label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="checkbox" value="70" class="checkbox_flythrough13" onchange="checkTotalFlythrough13()">
                                        <label for="Plan"> ‘Premium’ option - 6 Aerial photos <span class="erclr">$70</span></label>
                                    </div>
                                    {{-- default check --}}
                                    <div class="col-md-6 line-height">
                                        <input type="checkbox" value="10" class="checkbox_flythrough13" onchange="checkTotalFlythrough13()" checked>
                                            Send me the original video file when its ready  <span class="erclr">$10</span>
                                        <br>
                                        <span class="desclr">Receive the original video file for upload to your own social networking websites such as YouTube and Facebook</span> 
                                    </div>
                                    {{-- default check --}}
                                    <div class="col-md-6">
                                        <input type="checkbox" value="5" class="checkbox_flythrough13" onchange="checkTotalFlythrough13()" checked>
                                        <label for="cance"> Cancelation Insurance 
                                            <span class="tlstp" data-toggle="tooltip" data-placement="top" title="If you want to reschedule the appointment, you must notify us 18 hours prior to the appointment or you will incur a $30 cancelation/reschedule fee. Checking the insurance check box allows you to cancel up 1 hour prior to the appointment.">
                                                (What's this?)
                                            </span>
                                            <span class="erclr">$5</span>
                                        </label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="checkbox" value="19" class="checkbox_flythrough13" onchange="checkTotalFlythrough13()">
                                        <label for="cance"> Removal of 'Hometakes' branding on your Tour 
                                            <span class="erclr">$19</span>
                                        </label>
                                    </div>
                                    {{-- default check --}}
                                    <div class="col-md-6">
                                        <input type="checkbox" value="40" class="checkbox_flythrough13" onchange="checkTotalFlythrough13()" checked>
                                        <label for="cance"> 3 Twilight Enhancement photos <a href="https://www.hometakesvideos.com/orders/twilight_enhancement_samples/index.html" target="_blank">(See sample)</a>
                                            <span class="erclr">$40</span>
                                        </label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="checkbox" value="175" class="checkbox_flythrough13" onchange="checkTotalFlythrough13()">
                                        <label for="cance"> Genuine Twilight photography <a href="https://www.hometakesvideos.com/orders/twilight_samples/index.html" target="_blank">(See sample)</a>
                                            <span class="erclr">$175</span>
                                        </label>
                                    </div>
                                    <div class="col-md-12 col-xs-12 text-center">
                                        <p style="border-top: 1px solid #DCDCDC"></p>
                                        <center>
                                            <label for="total">Total:</label>
                                            <input type="text" id="total_flythrough13" class="form-controltotal" placeholder="$428.00" readonly>
                                            <br>
                                            <div class="agrees">
                                                <input type="checkbox" value="">
                                                <label for="90days">I agree to the <a href="" data-toggle="modal" data-target="#policies">policies and conditions</a> </label>
                                                <br>
                                                {{-- <button class="btn btn-primary btn-lg accordion-toggle" data-toggle="collapse" data-parent="#accordionnes5" href="#collapseInner5">Next</button> --}}
                                                <button class="btn btn-primary btn-lg " id="show5">Next</button>
                                            </div>
                                        </center> 
                                    </div>
                                </div>
                                {{-- Here we insert another nested accordion --}}
                                <div class="accordion" id="accordionnes5">
                                    <div class="accordion-group">
                                        <div id="collapsedNested5" class="accordion-body collapse in">
                                            <div class="accordion-inner">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <button class="btn btn-primary accordion-toggle pull-right" id="hide5">Back</button>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="mlsnum">MLS Number:</label>
                                                        <input type="text" id="mlsnum" class="form-control" name="mlsnum" value="" data-toggle="tooltip" data-placement="top" title="If you do not yet have an MLS number, you must leave this field empty. If you enter an incorrect MLS# for the property you will not notified that you entered an incorrect number so please ensure that you enter the correct number.">
                                                    </div>
                                                    <div class="col-md-8">
                                                        <label for="address">Address to be filmed:</label>
                                                        <input type="text" id="address" class="form-control" name="address" value="">
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label for="mlsnum">Unit Number:</label>
                                                        <input type="text" id="mlsnum" class="form-control" name="mlsnum" value="">
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label for="city">City:</label>
                                                        <input type="text" id="city" class="form-control" name="city" value="">
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label for="place">Place</label>
                                                        <input type="text" id="place" class="form-control" name="place" value="" readonly placeholder="Florida">
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label for="zipc">Zip Code</label>
                                                        <input type="text" id="zipc" class="form-control" name="zipc" value="">
                                                    </div>
                                                    <div class="col-md-6 col-md-offset-6">
                                                        <label for="zipc">Does the community have a name?</label>
                                                        <select  class="form-control" name="" id="">
                                                            <option value="" disabled selected hidden>Select</option>
                                                            <option value="">Yes</option>
                                                            <option value="">No</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-12 aftnxt">
                                                        <b>Music for video tour:</b> 
                                                    </div> 
                                                    <div class="col-md-4 marbot" >
                                                        {{-- <label for="zipc">Does</label> --}}
                                                        <select  class="form-control" name="" id="">
                                                            <option value="" disabled selected hidden>Select Happy</option>
                                                            <option value="">Happy Mandolin</option>
                                                            <option value="">Blue Skies</option>
                                                            <option value="">How it began</option>
                                                            <option value="">Payday</option>
                                                            <option value="">Locally Sourced</option>
                                                            <option value="">Indie Romance</option>
                                                            <option value="">Jazz In Paris</option>
                                                            <option value="">The Engagement</option>
                                                            <option value="">Swamp Stomp</option>
                                                            <option value="">Venice Beach</option>
                                                            <option value="">The Creek</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 marbot">
                                                        <select  class="form-control" name="" id="">
                                                            <option value="" disabled selected hidden>Select Cool & Jazzy</option>
                                                            <option value="">Must Be Something</option>
                                                            <option value="">Get Back</option>
                                                            <option value="">Fortaleza</option>
                                                            <option value="">Blakey's Burnout</option>
                                                            <option value="">Confessin</option>
                                                            <option value="">Raindrops</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 marbot">
                                                        <select  class="form-control" name="" id="">
                                                            <option value="" disabled selected hidden>Select Classical</option>
                                                            <option value="">Blue Danube by Strauss</option>
                                                            <option value="">Eine Kleine Nachtmusik by Mozart</option>
                                                            <option value="">Waltz of the Flowers by Tchaikovsky</option>
                                                            <option value="">Les Toreadors from Carmen by Bizet</option>
                                                            <option value="">Messiah by Handel</option>
                                                            <option value="">Morning Mood</option>
                                                            <option value="">Moonlight Sonata by Beethoven</option>
                                                            <option value="">Habanera by Bizet</option>
                                                            <option value="">Far Behind</option>
                                                            <option value="">Hungarian Rhapsody No 2 by Liszt</option>
                                                            <option value="">Ride of the Valkyries by Wagner</option>
                                                            <option value="">Symphony No 5 by Beethoven</option>
                                                            <option value="">Fur Elise by Beethoven</option>
                                                            <option value="">William Tell Overture by Rossini</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <select  class="form-control" name="" id="">
                                                            <option value="" disabled selected hidden>Select Upbeat</option>
                                                            <option value="">Dont Hate Me (vocals)</option>
                                                            <option value="">The Place Inside</option>
                                                            <option value="">How About It</option>
                                                            <option value="">Switch It Up</option>
                                                            <option value="">Rubber Necking</option>
                                                            <option value="">Cimson Fly</option>
                                                            <option value="">Gotta Find Out</option>
                                                            <option value="">Boo Boogie</option>
                                                            <option value="">Festival</option>
                                                            <option value="">Magic Marker</option>
                                                            <option value="">Runaways</option>
                                                            <option value="">Reasons To Smile</option>
                                                            <option value="">Golden Days</option>
                                                            <option value="">First Day</option>
                                                            <option value="">Stalling</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <select  class="form-control" name="" id="">
                                                            <option value="" disabled selected hidden>Select Mello</option>
                                                            <option value="">Hey Girl</option>
                                                            <option value="">Let's Do It</option>
                                                            <option value="">Sweet as Honey</option>
                                                            <option value="">Chances Sax</option>
                                                            <option value="">Until We Meet Again</option>
                                                            <option value="">Keep Dreaming</option>
                                                            <option value="">Don't Look</option>
                                                            <option value="">Where I Am From</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <select  class="form-control" name="" id="">
                                                            <option value="" disabled selected hidden>Select Piano</option>
                                                            <option value="">Sunday Stroll</option>
                                                            <option value="">Keith</option>
                                                            <option value="">Tonto</option>
                                                            <option value="">Clouds</option>
                                                            <option value="">Getting There</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-12 aftnxt">
                                                        <b>Addition Property Information:</b> 
                                                    </div> 
                                                    <div class="col-md-3">
                                                        <label for="bedrooms">Bedrooms:</label>
                                                        <input type="text" id="bedrooms" class="form-control" name="bedrooms" value="">
                                                    </div>
                                                    <div class="col-md-2">
                                                        <label for="baths">Full Baths:</label>
                                                        <input type="text" id="baths" class="form-control" name="baths" value="">
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label for="sqfeet">Square Feet:</label>
                                                        <input type="text" id="sqfeet" class="form-control" name="sqfeet" value="">
                                                    </div>
                                                    <div class="col-md-2">
                                                        <label for="price">Price:</label>
                                                        <input type="text" id="price" class="form-control" name="price" value="">
                                                    </div>
                                                    <div class="col-md-2">
                                                        <label for="hbaths">Half Baths:</label>
                                                        <input type="text" id="hbaths" class="form-control" name="hbaths" value="">
                                                    </div>
                                                    <div class="col-md-12">
                                                        <label for="hbaths">Property Title:</label>
                                                        <input type="text" id="hbaths" class="form-control" name="hbaths" value="" placeholder="The text you enter here will upper on your template"> 
                                                    </div>
                                                    <div class="col-md-12">
                                                        <label for="hbaths">Property Description:</label>
                                                        <input type="text" id="hbaths" class="form-control" name="hbaths" value="" Placeholder="The text you enter here will upper on your template"> 
                                                    </div>
                                                    <div class="col-md-12 aftnxt">
                                                        <b>After submitting this order, you will be emailed a specific time from one of your chosen dates within 8 business hours.</b> 
                                                    </div> 
                                                    <div class="col-md-12">
                                                        <input type="checkbox" id="90days" name="90days" value="">
                                                        <label for="90days">Schedule Later </label>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="90days">Date 1: </label>
                                                        <input type="text" id="datepicker" class="form-control" placeholder="mm/dd/yyyy">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="90days">Time 1: </label>
                                                        <input type="text" id="datepicker" class="form-control" placeholder="hh:mm">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="90days">Final Date and Time: </label>
                                                        <input type="text" id="datepicker" class="form-control" placeholder="07/27/2021 at 09:00 AM" readonly>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="90days">Date 2: </label>
                                                        <input type="text" id="datepicker1" class="form-control" placeholder="mm/dd/yyyy">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="90days">Time 2: </label>
                                                        <input type="text" id="datepicker" class="form-control" placeholder="hh:mm">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="90days">Final Date and Time : </label>
                                                        <input type="text" id="datepicker" class="form-control" placeholder="07/28/2021 at 12:00 PM" readonly>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="90days">Date 3: </label>
                                                        <input type="text" id="datepicker2" class="form-control" placeholder="mm/dd/yyyy">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="90days">Time 3: </label>
                                                        <input type="text" id="datepicker" class="form-control" placeholder="hh:mm">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="90days">Final Date and Time : </label>
                                                        <input type="text" id="datepicker" class="form-control" placeholder="07/30/2021 at 12:00 PM" readonly>
                                                    </div>
                                                    <div class="col-md-12 padtp">
                                                        <center>
                                                            <button class="btn btn-success btn-lg" type="submit"><i class="fa fa-sign-in"></i> Submit Order</button>
                                                        </center>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>          
                                {{-- Inner accordion ends here --}}
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingSix">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed pad0" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    {{-- However Many  --}}
                                    Photos Only
                                </button>
                                <span class="erclr pull-right">$175</span>
                                <br>
                                 <span class="desclr">Up to 30 Photos (Amenity Photos not included)</span>  
                                {{-- <span class="desclr"><span class="tlstp" data-toggle="tooltip" data-placement="top" title="However Many Photos it takes means that the photographer will take however many photos needed to capture all the rooms inside a property and notable exterior features of the property such as a pool, boat dock, horse stables etc. The total photo count is at the photographers disrection. 'However Many Photos it takes' does not mean carte blanche for the agent to direct the photographer to shoot 3 angles of the same room or a say a close up of bench in the yard. However Many Photos it takes means that all rooms and exterior features will be included in the shoot."> However Many Photos it takes Photos </span> (Amenity Photos not included)</span>   --}}
                            </h5>
                        </div>
                        <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion">
                            <div class="card-body">
                                <div class="row" id="CollapsedRow6"> 
                                    <b>Frameless Photo Tour:</b>
                                    <div class="col-md-12"> 
                                        <center>
                                            <video width="auto" height="auto" controls>
                                                <source src="videos/sample1.mov" type="video/mp4">
                                                Your browser does not support the video tag.
                                            </video>
                                        </center>
                                    </div>
                                    <div class="col-md-12"> <b> Photo Only Options: </b></div>
                                    {{-- default check --}}
                                    <div class="col-md-6">
                                        <input type="checkbox" value="50" class="checkbox_howevermanyphotos" onchange="checkTotalHoweverManyPhotos()" checked>
                                        <label for="Plan"> ‘Plus’ option - 2 Aerial photos <span class="erclr">$50</span></label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="checkbox" value="99" class="checkbox_howevermanyphotos" onchange="checkTotalHoweverManyPhotos()">
                                        <label for="Plan"> ‘Premium’ option - 6 Aerial photos <span class="erclr">$99</span></label>
                                    </div>
                                    {{-- default check --}}
                                    <div class="col-md-6">
                                        <input type="checkbox" value="5" class="checkbox_howevermanyphotos" onchange="checkTotalHoweverManyPhotos()" checked>
                                        <label for="cance"> Cancelation Insurance 
                                            <span class="tlstp" data-toggle="tooltip" data-placement="top" title="If you want to reschedule the appointment, you must notify us 18 hours prior to the appointment or you will incur a $30 cancelation/reschedule fee. Checking the insurance check box allows you to cancel up 1 hour prior to the appointment.">
                                                (What's this?)
                                            </span>
                                            <span class="erclr">$5</span>
                                        </label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="checkbox" value="19" class="checkbox_howevermanyphotos" onchange="checkTotalHoweverManyPhotos()">
                                        <label for="cance"> Removal of 'Hometakes' branding on your Tour 
                                            <span class="erclr">$19</span>
                                        </label>
                                    </div>
                                    {{-- default check --}}
                                    <div class="col-md-6">
                                        <input type="checkbox" value="40" class="checkbox_howevermanyphotos" onchange="checkTotalHoweverManyPhotos()" checked>
                                        <label for="cance"> 3 Twilight Enhancement photos <a href="https://www.hometakesvideos.com/orders/twilight_enhancement_samples/index.html" target="_blank">(See sample)</a>
                                            <span class="erclr">$40</span>
                                        </label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="checkbox" value="175" class="checkbox_howevermanyphotos" onchange="checkTotalHoweverManyPhotos()">
                                        <label for="cance"> Twilight photography <a href="https://www.hometakesvideos.com/orders/twilight_samples/index.html" target="_blank">(See sample)</a>
                                            <span class="erclr">$175</span>
                                        </label>
                                    </div>
                                    {{-- default check --}}
                                    <div class="col-md-6">
                                        <input type="checkbox" value="99" class="checkbox_howevermanyphotos" onchange="checkTotalHoweverManyPhotos()" checked>
                                        <label for="branding">3D Tour option (from) <span class="erclr">$99</span> </label>
                                    </div>
                                    <div class="col-md-12"> 
                                        <center>
                                            <video width="auto" height="auto" controls>
                                                <source src="videos/sample2.mov" type="video/mp4">
                                                Your browser does not support the video tag.
                                            </video>
                                        </center>
                                    </div>
                                    <div class="col-md-3"></div>
                                    <div class="col-md-9">
                                            <p class="tlstp" data-toggle="tooltip" data-placement="top" title="Please note: There are certain camera limitations such as the camera cannot shoot exterior images so that you can travel from the inside to the exterior of the home. We do not shoot exterior 360 images nor add a play button to the tour or the addition of Mattertags. We do not photoshop any camera reflections from the tour (The tour is processed by Matterport not at Hometakes). Some jagged edges may appear in the 3-D dollhouse and floor plan view and cannot be prevented. Windows without shades or blinds may display as overexposed. If the home has a separate guest house building that is detached from the main house and you want to include it in your tour, there is a $50 addition charge. This is necessary as it has to be made a processed as a separate tour.. Chrome browser may not be fully supported when viewing the tour.">
                                                → Read these important 3D Tour Limitations
                                        </p>
                                        <p class="tlstp" data-toggle="tooltip" data-placement="top" title="Please note that floor plans will only include areas that were shot with the Matterport Camera. It will not include areas such as patios, pools or garages and any room that was not shot inside the home such as storage cupboards etc. Floor plans are produced by Matterport and not Hometakes and as such, are non refundable. Please view the sample before ordering this item.">
                                            → Floor plan Limitations </p>
                                        <p> <a href="https://www.hometakesvideos.com/orders/Sample_Floor_Plan.pdf" target="_blank"> → Sample Floor Plan </a> </p>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="branding">3D Tour option:</label>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="" class="erclr">You must enter the exact AC Square footage so that we can calculate your appointment time accurately:</label>
                                        <div class="col-md-6">
                                            <input type="text" id="acsquare" class="form-control" name="acsquare" placeholder="Exact AC Square Unit Footage" data-toggle="tooltip" data-placement="top" title="Do not estimate the size of the home. We check the size of the home against Realtor.com after you place the listing into MLS. Any difference in the price of the tour due to an incorrect number entered here will result in your account being charged the difference in price plus a re-assessment fee of $49" required>
                                        </div>
                                        <div class="cap">
                                            <li> 3D Tour is hosted on your Tour Template and will not function after 60 days. You should purchase addition hosting if you think it may take longer than 60 days to sell the property. You can purchase additional hosting later.</li> 
                                        </div> 
                                        <p class="text-center host" style="border-top: 1px solid #DCDCDC;">*Hosting fees non-refundable or transferable</p>
                                    </div>
                                    {{-- default check --}}
                                    <div class="col-md-4 col-xs-12">
                                        <input type="checkbox" value="90" class="hostingcheckbox_howevermanyphotos checkbox_howevermanyphotos" onchange="checkTotalHoweverManyPhotos()" checked>
                                        <label for="90days">90 days additional hosting <span class="erclr">$35</span> </label>
                                    </div>
                                    <div class="col-md-4 col-xs-12">
                                        <input type="checkbox" value="55" class="hostingcheckbox_howevermanyphotos checkbox_howevermanyphotos" onchange="checkTotalHoweverManyPhotos()">
                                        <label for="180days"> 180 days additional hosting <span class="erclr">$55</span></label>
                                    </div>
                                    <div class="col-md-4 col-xs-12">
                                        <input type="checkbox" value="79" class="hostingcheckbox_howevermanyphotos checkbox_howevermanyphotos" onchange="checkTotalHoweverManyPhotos()">
                                        <label for="360days"> 360 days additional hosting <span class="erclr">$79</span></label>
                                    </div>
                                    <br><br>
                                    <div class="col-md-12 col-xs-12">
                                        <input type="checkbox" value="35" class="checkbox_howevermanyphotos" onchange="checkTotalHoweverManyPhotos()">
                                        <label for="Plan"> Add a Floor Plan <span class="erclr">($35)</span></label>
                                    </div>
                                    <div class="col-md-12 col-xs-12 text-center">
                                        <p style="border-top: 1px solid #DCDCDC"></p>
                                        <center>
                                            <label for="total">Total:</label>
                                            <input type="text" id="total_howevermanyphotos" class="form-controltotal" placeholder="$404.00" readonly>
                                            <br>
                                            <div class="agrees">
                                                <input type="checkbox" value="">
                                                <label for="90days">I agree to the <a href="" data-toggle="modal" data-target="#policies">policies and conditions</a> </label>
                                                <br>
                                                {{-- <button class="btn btn-primary btn-lg accordion-toggle" data-toggle="collapse" data-parent="#accordionnes7" href="#collapseInner7">Next</button> --}}
                                                <button class="btn btn-primary btn-lg " id="show6">Next</button>
                                            </div>
                                        </center> 
                                    </div>
                                </div>
                                {{-- Here we insert another nested accordion --}}
                                <div class="accordion" id="accordionnes7">
                                    <div class="accordion-group">
                                        <div id="collapsedNested6" class="accordion-body collapse in">
                                            <div class="accordion-inner">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <button class="btn btn-primary accordion-toggle pull-right" id="hide6">Back</button>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="mlsnum">MLS Number:</label>
                                                        <input type="text" id="mlsnum" class="form-control" name="mlsnum" value="" data-toggle="tooltip" data-placement="top" title="If you do not yet have an MLS number, you must leave this field empty. If you enter an incorrect MLS# for the property you will not notified that you entered an incorrect number so please ensure that you enter the correct number.">
                                                    </div>
                                                    <div class="col-md-8">
                                                        <label for="address">Address to be filmed:</label>
                                                        <input type="text" id="address" class="form-control" name="address" value="">
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label for="mlsnum">Unit Number:</label>
                                                        <input type="text" id="mlsnum" class="form-control" name="mlsnum" value="">
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label for="city">City:</label>
                                                        <input type="text" id="city" class="form-control" name="city" value="">
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label for="place">Place</label>
                                                        <input type="text" id="place" class="form-control" name="place" value="" readonly placeholder="Florida">
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label for="zipc">Zip Code</label>
                                                        <input type="text" id="zipc" class="form-control" name="zipc" value="">
                                                    </div>
                                                    <div class="col-md-6 col-md-offset-6">
                                                        <label for="zipc">Does the community have a name?</label>
                                                        <select  class="form-control" name="" id="">
                                                            <option value="" disabled selected hidden>Select</option>
                                                            <option value="">Yes</option>
                                                            <option value="">No</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-12 aftnxt">
                                                        <b>Music for video tour:</b> 
                                                    </div> 
                                                    <div class="col-md-4 marbot" >
                                                        {{-- <label for="zipc">Does</label> --}}
                                                        <select  class="form-control" name="" id="">
                                                            <option value="" disabled selected hidden>Select Happy</option>
                                                            <option value="">Happy Mandolin</option>
                                                            <option value="">Blue Skies</option>
                                                            <option value="">How it began</option>
                                                            <option value="">Payday</option>
                                                            <option value="">Locally Sourced</option>
                                                            <option value="">Indie Romance</option>
                                                            <option value="">Jazz In Paris</option>
                                                            <option value="">The Engagement</option>
                                                            <option value="">Swamp Stomp</option>
                                                            <option value="">Venice Beach</option>
                                                            <option value="">The Creek</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 marbot">
                                                        <select  class="form-control" name="" id="">
                                                            <option value="" disabled selected hidden>Select Cool & Jazzy</option>
                                                            <option value="">Must Be Something</option>
                                                            <option value="">Get Back</option>
                                                            <option value="">Fortaleza</option>
                                                            <option value="">Blakey's Burnout</option>
                                                            <option value="">Confessin</option>
                                                            <option value="">Raindrops</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 marbot">
                                                        <select  class="form-control" name="" id="">
                                                            <option value="" disabled selected hidden>Select Classical</option>
                                                            <option value="">Blue Danube by Strauss</option>
                                                            <option value="">Eine Kleine Nachtmusik by Mozart</option>
                                                            <option value="">Waltz of the Flowers by Tchaikovsky</option>
                                                            <option value="">Les Toreadors from Carmen by Bizet</option>
                                                            <option value="">Messiah by Handel</option>
                                                            <option value="">Morning Mood</option>
                                                            <option value="">Moonlight Sonata by Beethoven</option>
                                                            <option value="">Habanera by Bizet</option>
                                                            <option value="">Far Behind</option>
                                                            <option value="">Hungarian Rhapsody No 2 by Liszt</option>
                                                            <option value="">Ride of the Valkyries by Wagner</option>
                                                            <option value="">Symphony No 5 by Beethoven</option>
                                                            <option value="">Fur Elise by Beethoven</option>
                                                            <option value="">William Tell Overture by Rossini</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <select  class="form-control" name="" id="">
                                                            <option value="" disabled selected hidden>Select Upbeat</option>
                                                            <option value="">Dont Hate Me (vocals)</option>
                                                            <option value="">The Place Inside</option>
                                                            <option value="">How About It</option>
                                                            <option value="">Switch It Up</option>
                                                            <option value="">Rubber Necking</option>
                                                            <option value="">Cimson Fly</option>
                                                            <option value="">Gotta Find Out</option>
                                                            <option value="">Boo Boogie</option>
                                                            <option value="">Festival</option>
                                                            <option value="">Magic Marker</option>
                                                            <option value="">Runaways</option>
                                                            <option value="">Reasons To Smile</option>
                                                            <option value="">Golden Days</option>
                                                            <option value="">First Day</option>
                                                            <option value="">Stalling</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <select  class="form-control" name="" id="">
                                                            <option value="" disabled selected hidden>Select Mello</option>
                                                            <option value="">Hey Girl</option>
                                                            <option value="">Let's Do It</option>
                                                            <option value="">Sweet as Honey</option>
                                                            <option value="">Chances Sax</option>
                                                            <option value="">Until We Meet Again</option>
                                                            <option value="">Keep Dreaming</option>
                                                            <option value="">Don't Look</option>
                                                            <option value="">Where I Am From</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <select  class="form-control" name="" id="">
                                                            <option value="" disabled selected hidden>Select Piano</option>
                                                            <option value="">Sunday Stroll</option>
                                                            <option value="">Keith</option>
                                                            <option value="">Tonto</option>
                                                            <option value="">Clouds</option>
                                                            <option value="">Getting There</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-12 aftnxt">
                                                        <b>Addition Property Information:</b> 
                                                    </div> 
                                                    <div class="col-md-3">
                                                        <label for="bedrooms">Bedrooms:</label>
                                                        <input type="text" id="bedrooms" class="form-control" name="bedrooms" value="">
                                                    </div>
                                                    <div class="col-md-2">
                                                        <label for="baths">Full Baths:</label>
                                                        <input type="text" id="baths" class="form-control" name="baths" value="">
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label for="sqfeet">Square Feet:</label>
                                                        <input type="text" id="sqfeet" class="form-control" name="sqfeet" value="">
                                                    </div>
                                                    <div class="col-md-2">
                                                        <label for="price">Price:</label>
                                                        <input type="text" id="price" class="form-control" name="price" value="">
                                                    </div>
                                                    <div class="col-md-2">
                                                        <label for="hbaths">Half Baths:</label>
                                                        <input type="text" id="hbaths" class="form-control" name="hbaths" value="">
                                                    </div>
                                                    <div class="col-md-12">
                                                        <label for="hbaths">Property Title:</label>
                                                        <input type="text" id="hbaths" class="form-control" name="hbaths" value="" placeholder="The text you enter here will upper on your template"> 
                                                    </div>
                                                    <div class="col-md-12">
                                                        <label for="hbaths">Property Description:</label>
                                                        <input type="text" id="hbaths" class="form-control" name="hbaths" value="" Placeholder="The text you enter here will upper on your template"> 
                                                    </div>
                                                    <div class="col-md-12 aftnxt">
                                                        <b>After submitting this order, you will be emailed a specific time from one of your chosen dates within 8 business hours.</b> 
                                                    </div> 
                                                    <div class="col-md-12">
                                                        <input type="checkbox" id="90days" name="90days" value="">
                                                        <label for="90days">Schedule Later </label>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="90days">Date 1: </label>
                                                        <input type="text" id="datepicker" class="form-control" placeholder="mm/dd/yyyy">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="90days">Time 1: </label>
                                                        <input type="text" id="datepicker" class="form-control" placeholder="hh:mm">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="90days">Final Date and Time: </label>
                                                        <input type="text" id="datepicker" class="form-control" placeholder="07/27/2021 at 09:00 AM" readonly>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="90days">Date 2: </label>
                                                        <input type="text" id="datepicker1" class="form-control" placeholder="mm/dd/yyyy">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="90days">Time 2: </label>
                                                        <input type="text" id="datepicker" class="form-control" placeholder="hh:mm">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="90days">Final Date and Time : </label>
                                                        <input type="text" id="datepicker" class="form-control" placeholder="07/28/2021 at 12:00 PM" readonly>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="90days">Date 3: </label>
                                                        <input type="text" id="datepicker2" class="form-control" placeholder="mm/dd/yyyy">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="90days">Time 3: </label>
                                                        <input type="text" id="datepicker" class="form-control" placeholder="hh:mm">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="90days">Final Date and Time : </label>
                                                        <input type="text" id="datepicker" class="form-control" placeholder="07/30/2021 at 12:00 PM" readonly>
                                                    </div>
                                                    <div class="col-md-12 padtp">
                                                        <center>
                                                            <button class="btn btn-success btn-lg" type="submit"><i class="fa fa-sign-in"></i> Submit Order</button>
                                                        </center>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>          
                                {{-- Inner accordion ends here --}}
                                
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" id="headingSeven">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed pad0" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven">
                                    Video Only
                                </button>
                                <span class="erclr pull-right">$175</span>
                                <br>
                                <span class="desclr">10 Video Scenes</span>  
                            </h5>
                        </div>
                    
                        <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordion">
                            <div class="card-body">
                                <div class="row" id="CollapsedRow7">
                                    <div class="col-md-12"> 
                                        <center>
                                            <video width="auto" height="auto" controls>
                                                <source src="videos/sample1.mov" type="video/mp4">
                                                Your browser does not support the video tag.
                                            </video>
                                        </center>
                                    </div>
                                    <div class="col-md-12">
                                        <b>Video Only Options:</b>
                                    </div>
                                    {{-- default check --}}
                                    <div class="col-md-6">
                                        <input type="checkbox" value="50" class="checkbox_videoonly10" onchange="checkTotalVideoOnly10()" checked>
                                        <label for="Plan"> ‘Plus’ option - 2 Aerial photos <span class="erclr">$50</span></label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="checkbox" value="99" class="checkbox_videoonly10" onchange="checkTotalVideoOnly10()">
                                        <label for="Plan"> ‘Premium’ option - 6 Aerial photos <span class="erclr">$99</span></label>
                                    </div>
                                    {{-- default check --}}
                                    <div class="col-md-6 line-height">
                                        <input type="checkbox" value="10" class="checkbox_videoonly10" onchange="checkTotalVideoOnly10()" checked>
                                            Send me the original video file when its ready  <span class="erclr">$10</span>
                                        <br>
                                        <span class="desclr">Receive the original video file for upload to your own social networking websites such as YouTube and Facebook</span> 
                                    </div>
                                    {{-- default check --}}
                                    <div class="col-md-6">
                                        <input type="checkbox" value="5" class="checkbox_videoonly10" onchange="checkTotalVideoOnly10()" checked>
                                        <label for="cance"> Cancelation Insurance 
                                            <span class="tlstp" data-toggle="tooltip" data-placement="top" title="If you want to reschedule the appointment, you must notify us 18 hours prior to the appointment or you will incur a $30 cancelation/reschedule fee. Checking the insurance check box allows you to cancel up 1 hour prior to the appointment.">
                                                (What's this?)
                                            </span>
                                            <span class="erclr">$5</span>
                                        </label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="checkbox" value="19" class="checkbox_videoonly10" onchange="checkTotalVideoOnly10()">
                                        <label for="cance"> Removal of 'Hometakes' branding on your Tour 
                                            <span class="erclr">$19</span>
                                        </label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="checkbox" value="175" class="checkbox_videoonly10" onchange="checkTotalVideoOnly10()">
                                        <label for="cance"> Twilight photography <a href="https://www.hometakesvideos.com/orders/twilight_samples/index.html" target="_blank">(See sample)</a>
                                            <span class="erclr">$175</span>
                                        </label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="checkbox" value="25" class="checkbox_videoonly10" onchange="checkTotalVideoOnly10()">
                                        <label for="cance"> Additional Video Scene (includes photo) ea.
                                            <span class="erclr">$25</span>
                                        </label>
                                        <input type="text" id="acsquare" class="form-control" name="acsquare" placeholder="Enter No. of Video Scenes" >
                                    </div>
                                    <div class="col-md-12 col-xs-12 text-center">
                                        <p style="border-top: 1px solid #FFF"></p>
                                        <center>
                                            <label for="total">Total:</label>
                                            <input type="text" id="total_videoonly10" class="form-controltotal" placeholder="$240.00" readonly>
                                            <br>
                                            <div class="agrees">
                                                <input type="checkbox" value="">
                                                <label for="90days">I agree to the <a href="" data-toggle="modal" data-target="#policies">policies and conditions</a> </label>
                                                <br>
                                                <button class="btn btn-primary btn-lg " id="show7">Next</button>
                                            </div>
                                        </center> 
                                    </div>
                                </div>
                                {{-- Here we insert another nested accordion --}}
                                <div class="accordion" id="accordionnes7">
                                    <div class="accordion-group">
                                        <div id="collapsedNested7" class="accordion-body collapse in">
                                            <div class="accordion-inner">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <button class="btn btn-primary accordion-toggle pull-right" id="hide7">Back</button>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="mlsnum">MLS Number:</label>
                                                        <input type="text" id="mlsnum" class="form-control" name="mlsnum" value="" data-toggle="tooltip" data-placement="top" title="If you do not yet have an MLS number, you must leave this field empty. If you enter an incorrect MLS# for the property you will not notified that you entered an incorrect number so please ensure that you enter the correct number.">
                                                    </div>
                                                    <div class="col-md-8">
                                                        <label for="address">Address to be filmed:</label>
                                                        <input type="text" id="address" class="form-control" name="address" value="">
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label for="mlsnum">Unit Number:</label>
                                                        <input type="text" id="mlsnum" class="form-control" name="mlsnum" value="">
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label for="city">City:</label>
                                                        <input type="text" id="city" class="form-control" name="city" value="">
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label for="place">Place</label>
                                                        <input type="text" id="place" class="form-control" name="place" value="" readonly placeholder="Florida">
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label for="zipc">Zip Code</label>
                                                        <input type="text" id="zipc" class="form-control" name="zipc" value="">
                                                    </div>
                                                    <div class="col-md-6 col-md-offset-6">
                                                        <label for="zipc">Does the community have a name?</label>
                                                        <select  class="form-control" name="" id="">
                                                            <option value="" disabled selected hidden>Select</option>
                                                            <option value="">Yes</option>
                                                            <option value="">No</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-12 aftnxt">
                                                        <b>Music for video tour:</b> 
                                                    </div> 
                                                    <div class="col-md-4 marbot" >
                                                        {{-- <label for="zipc">Does</label> --}}
                                                        <select  class="form-control" name="" id="">
                                                            <option value="" disabled selected hidden>Select Happy</option>
                                                            <option value="">Happy Mandolin</option>
                                                            <option value="">Blue Skies</option>
                                                            <option value="">How it began</option>
                                                            <option value="">Payday</option>
                                                            <option value="">Locally Sourced</option>
                                                            <option value="">Indie Romance</option>
                                                            <option value="">Jazz In Paris</option>
                                                            <option value="">The Engagement</option>
                                                            <option value="">Swamp Stomp</option>
                                                            <option value="">Venice Beach</option>
                                                            <option value="">The Creek</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 marbot">
                                                        <select  class="form-control" name="" id="">
                                                            <option value="" disabled selected hidden>Select Cool & Jazzy</option>
                                                            <option value="">Must Be Something</option>
                                                            <option value="">Get Back</option>
                                                            <option value="">Fortaleza</option>
                                                            <option value="">Blakey's Burnout</option>
                                                            <option value="">Confessin</option>
                                                            <option value="">Raindrops</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 marbot">
                                                        <select  class="form-control" name="" id="">
                                                            <option value="" disabled selected hidden>Select Classical</option>
                                                            <option value="">Blue Danube by Strauss</option>
                                                            <option value="">Eine Kleine Nachtmusik by Mozart</option>
                                                            <option value="">Waltz of the Flowers by Tchaikovsky</option>
                                                            <option value="">Les Toreadors from Carmen by Bizet</option>
                                                            <option value="">Messiah by Handel</option>
                                                            <option value="">Morning Mood</option>
                                                            <option value="">Moonlight Sonata by Beethoven</option>
                                                            <option value="">Habanera by Bizet</option>
                                                            <option value="">Far Behind</option>
                                                            <option value="">Hungarian Rhapsody No 2 by Liszt</option>
                                                            <option value="">Ride of the Valkyries by Wagner</option>
                                                            <option value="">Symphony No 5 by Beethoven</option>
                                                            <option value="">Fur Elise by Beethoven</option>
                                                            <option value="">William Tell Overture by Rossini</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <select  class="form-control" name="" id="">
                                                            <option value="" disabled selected hidden>Select Upbeat</option>
                                                            <option value="">Dont Hate Me (vocals)</option>
                                                            <option value="">The Place Inside</option>
                                                            <option value="">How About It</option>
                                                            <option value="">Switch It Up</option>
                                                            <option value="">Rubber Necking</option>
                                                            <option value="">Cimson Fly</option>
                                                            <option value="">Gotta Find Out</option>
                                                            <option value="">Boo Boogie</option>
                                                            <option value="">Festival</option>
                                                            <option value="">Magic Marker</option>
                                                            <option value="">Runaways</option>
                                                            <option value="">Reasons To Smile</option>
                                                            <option value="">Golden Days</option>
                                                            <option value="">First Day</option>
                                                            <option value="">Stalling</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <select  class="form-control" name="" id="">
                                                            <option value="" disabled selected hidden>Select Mello</option>
                                                            <option value="">Hey Girl</option>
                                                            <option value="">Let's Do It</option>
                                                            <option value="">Sweet as Honey</option>
                                                            <option value="">Chances Sax</option>
                                                            <option value="">Until We Meet Again</option>
                                                            <option value="">Keep Dreaming</option>
                                                            <option value="">Don't Look</option>
                                                            <option value="">Where I Am From</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <select  class="form-control" name="" id="">
                                                            <option value="" disabled selected hidden>Select Piano</option>
                                                            <option value="">Sunday Stroll</option>
                                                            <option value="">Keith</option>
                                                            <option value="">Tonto</option>
                                                            <option value="">Clouds</option>
                                                            <option value="">Getting There</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-12 aftnxt">
                                                        <b>Addition Property Information:</b> 
                                                    </div> 
                                                    <div class="col-md-3">
                                                        <label for="bedrooms">Bedrooms:</label>
                                                        <input type="text" id="bedrooms" class="form-control" name="bedrooms" value="">
                                                    </div>
                                                    <div class="col-md-2">
                                                        <label for="baths">Full Baths:</label>
                                                        <input type="text" id="baths" class="form-control" name="baths" value="">
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label for="sqfeet">Square Feet:</label>
                                                        <input type="text" id="sqfeet" class="form-control" name="sqfeet" value="">
                                                    </div>
                                                    <div class="col-md-2">
                                                        <label for="price">Price:</label>
                                                        <input type="text" id="price" class="form-control" name="price" value="">
                                                    </div>
                                                    <div class="col-md-2">
                                                        <label for="hbaths">Half Baths:</label>
                                                        <input type="text" id="hbaths" class="form-control" name="hbaths" value="">
                                                    </div>
                                                    <div class="col-md-12">
                                                        <label for="hbaths">Property Title:</label>
                                                        <input type="text" id="hbaths" class="form-control" name="hbaths" value="" placeholder="The text you enter here will upper on your template"> 
                                                    </div>
                                                    <div class="col-md-12">
                                                        <label for="hbaths">Property Description:</label>
                                                        <input type="text" id="hbaths" class="form-control" name="hbaths" value="" Placeholder="The text you enter here will upper on your template"> 
                                                    </div>
                                                    <div class="col-md-12 aftnxt">
                                                        <b>After submitting this order, you will be emailed a specific time from one of your chosen dates within 8 business hours.</b> 
                                                    </div> 
                                                    <div class="col-md-12">
                                                        <input type="checkbox" id="90days" name="90days" value="">
                                                        <label for="90days">Schedule Later </label>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="90days">Date 1: </label>
                                                        <input type="text" id="datepicker" class="form-control" placeholder="mm/dd/yyyy">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="90days">Time 1: </label>
                                                        <input type="text" id="datepicker" class="form-control" placeholder="hh:mm">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="90days">Final Date and Time: </label>
                                                        <input type="text" id="datepicker" class="form-control" placeholder="07/27/2021 at 09:00 AM" readonly>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="90days">Date 2: </label>
                                                        <input type="text" id="datepicker1" class="form-control" placeholder="mm/dd/yyyy">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="90days">Time 2: </label>
                                                        <input type="text" id="datepicker" class="form-control" placeholder="hh:mm">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="90days">Final Date and Time : </label>
                                                        <input type="text" id="datepicker" class="form-control" placeholder="07/28/2021 at 12:00 PM" readonly>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="90days">Date 3: </label>
                                                        <input type="text" id="datepicker2" class="form-control" placeholder="mm/dd/yyyy">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="90days">Time 3: </label>
                                                        <input type="text" id="datepicker" class="form-control" placeholder="hh:mm">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="90days">Final Date and Time : </label>
                                                        <input type="text" id="datepicker" class="form-control" placeholder="07/30/2021 at 12:00 PM" readonly>
                                                    </div>
                                                    <div class="col-md-12 padtp">
                                                        <center>
                                                            <button class="btn btn-success btn-lg" type="submit"><i class="fa fa-sign-in"></i> Submit Order</button>
                                                        </center>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>          
                                {{-- Inner accordion ends here --}}
                    
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo22">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed pad0" data-toggle="collapse" data-target="#collapseTwo22" aria-expanded="false" aria-controls="collapseTwo22">
                                    Aerials Only
                                </button>
                                <span class="erclr pull-right">$149</span>
                                <br>
                                <span class="desclr">6 Aerial photos</span>  
                            </h5>
                        </div>
                        <div id="collapseTwo22" class="collapse" aria-labelledby="headingTwo22" data-parent="#accordion">
                            <div class="card-body">
                                <div class="row" id="CollapsedRow8">
                                    <div class="col-md-12">
                                        <b>Aerial Photos include the following:</b>
                                        <div class="cap">
                                            <li> 3D Tour is hosted on your Tour Template and will not function after 60 days. You should purchase addition hosting if you think it may take longer than 60 days to sell the property. You can purchase additional hosting later.</li> 
                                        </div> 
                                    </div>
                                    <div class="col-md-12">
                                        <b> Aerial Only Options:</b>
                                    </div>
                                        {{-- default check --}}
                                        <div class="col-md-6">
                                        <input type="checkbox" value="5" class="checkbox_aerials" onchange="checkTotalAerials()" checked>
                                        <label for="cance"> Cancelation Insurance 
                                            <span class="tlstp" data-toggle="tooltip" data-placement="top" title="If you want to reschedule the appointment, you must notify us 18 hours prior to the appointment or you will incur a $30 cancelation/reschedule fee. Checking the insurance check box allows you to cancel up 1 hour prior to the appointment.">
                                                (What's this?)
                                            </span>
                                            <span class="erclr">$5</span>
                                        </label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="checkbox" value="19" class="checkbox_aerials" onchange="checkTotalAerials()">
                                        <label for="cance"> Removal of 'Hometakes' branding on your Tour 
                                            <span class="erclr">$19</span>
                                        </label>
                                    </div>
                                    <div class="col-md-12 col-xs-12 text-center">
                                        <p style="border-top: 1px solid #FFF"></p>
                                        <center>
                                            <label for="total">Total:</label>
                                            <input type="text" id="total_aerials" class="form-controltotal" placeholder="$154.00" readonly>
                                            <br>
                                            <div class="agrees">
                                                <input type="checkbox" id="90days" name="90days" value="">
                                                <label for="90days">I agree to the <a href="" data-toggle="modal" data-target="#policies">policies and conditions</a> </label>
                                                <br>
                                                {{-- <button class="btn btn-primary btn-lg accordion-toggle" data-toggle="collapse" data-parent="#accordionnes8" href="#collapseInner8">Next</button> --}}
                                                <button class="btn btn-primary btn-lg " id="show8">Next</button>
                                            </div>
                                        </center> 
                                    </div>
                                </div>
                                {{-- Here we insert another nested accordion --}}
                                <div class="accordion" id="accordionnes8">
                                    <div class="accordion-group">
                                        <div id="collapsedNested8" class="accordion-body collapse in">
                                            <div class="accordion-inner">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <button class="btn btn-primary accordion-toggle pull-right" id="hide8">Back</button>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="mlsnum">MLS Number:</label>
                                                        <input type="text" id="mlsnum" class="form-control" name="mlsnum" value="" data-toggle="tooltip" data-placement="top" title="If you do not yet have an MLS number, you must leave this field empty. If you enter an incorrect MLS# for the property you will not notified that you entered an incorrect number so please ensure that you enter the correct number.">
                                                    </div>
                                                    <div class="col-md-8">
                                                        <label for="address">Address to be filmed:</label>
                                                        <input type="text" id="address" class="form-control" name="address" value="">
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label for="mlsnum">Unit Number:</label>
                                                        <input type="text" id="mlsnum" class="form-control" name="mlsnum" value="">
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label for="city">City:</label>
                                                        <input type="text" id="city" class="form-control" name="city" value="">
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label for="place">Place</label>
                                                        <input type="text" id="place" class="form-control" name="place" value="" readonly placeholder="Florida">
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label for="zipc">Zip Code</label>
                                                        <input type="text" id="zipc" class="form-control" name="zipc" value="">
                                                    </div>
                                                    <div class="col-md-6 col-md-offset-6">
                                                        <label for="zipc">Does the community have a name?</label>
                                                        <select  class="form-control" name="" id="">
                                                            <option value="" disabled selected hidden>Select</option>
                                                            <option value="">Yes</option>
                                                            <option value="">No</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-12 aftnxt">
                                                        <b>Music for video tour:</b> 
                                                    </div> 
                                                    <div class="col-md-4 marbot" >
                                                        {{-- <label for="zipc">Does</label> --}}
                                                        <select  class="form-control" name="" id="">
                                                            <option value="" disabled selected hidden>Select Happy</option>
                                                            <option value="">Happy Mandolin</option>
                                                            <option value="">Blue Skies</option>
                                                            <option value="">How it began</option>
                                                            <option value="">Payday</option>
                                                            <option value="">Locally Sourced</option>
                                                            <option value="">Indie Romance</option>
                                                            <option value="">Jazz In Paris</option>
                                                            <option value="">The Engagement</option>
                                                            <option value="">Swamp Stomp</option>
                                                            <option value="">Venice Beach</option>
                                                            <option value="">The Creek</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 marbot">
                                                        <select  class="form-control" name="" id="">
                                                            <option value="" disabled selected hidden>Select Cool & Jazzy</option>
                                                            <option value="">Must Be Something</option>
                                                            <option value="">Get Back</option>
                                                            <option value="">Fortaleza</option>
                                                            <option value="">Blakey's Burnout</option>
                                                            <option value="">Confessin</option>
                                                            <option value="">Raindrops</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 marbot">
                                                        <select  class="form-control" name="" id="">
                                                            <option value="" disabled selected hidden>Select Classical</option>
                                                            <option value="">Blue Danube by Strauss</option>
                                                            <option value="">Eine Kleine Nachtmusik by Mozart</option>
                                                            <option value="">Waltz of the Flowers by Tchaikovsky</option>
                                                            <option value="">Les Toreadors from Carmen by Bizet</option>
                                                            <option value="">Messiah by Handel</option>
                                                            <option value="">Morning Mood</option>
                                                            <option value="">Moonlight Sonata by Beethoven</option>
                                                            <option value="">Habanera by Bizet</option>
                                                            <option value="">Far Behind</option>
                                                            <option value="">Hungarian Rhapsody No 2 by Liszt</option>
                                                            <option value="">Ride of the Valkyries by Wagner</option>
                                                            <option value="">Symphony No 5 by Beethoven</option>
                                                            <option value="">Fur Elise by Beethoven</option>
                                                            <option value="">William Tell Overture by Rossini</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <select  class="form-control" name="" id="">
                                                            <option value="" disabled selected hidden>Select Upbeat</option>
                                                            <option value="">Dont Hate Me (vocals)</option>
                                                            <option value="">The Place Inside</option>
                                                            <option value="">How About It</option>
                                                            <option value="">Switch It Up</option>
                                                            <option value="">Rubber Necking</option>
                                                            <option value="">Cimson Fly</option>
                                                            <option value="">Gotta Find Out</option>
                                                            <option value="">Boo Boogie</option>
                                                            <option value="">Festival</option>
                                                            <option value="">Magic Marker</option>
                                                            <option value="">Runaways</option>
                                                            <option value="">Reasons To Smile</option>
                                                            <option value="">Golden Days</option>
                                                            <option value="">First Day</option>
                                                            <option value="">Stalling</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <select  class="form-control" name="" id="">
                                                            <option value="" disabled selected hidden>Select Mello</option>
                                                            <option value="">Hey Girl</option>
                                                            <option value="">Let's Do It</option>
                                                            <option value="">Sweet as Honey</option>
                                                            <option value="">Chances Sax</option>
                                                            <option value="">Until We Meet Again</option>
                                                            <option value="">Keep Dreaming</option>
                                                            <option value="">Don't Look</option>
                                                            <option value="">Where I Am From</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <select  class="form-control" name="" id="">
                                                            <option value="" disabled selected hidden>Select Piano</option>
                                                            <option value="">Sunday Stroll</option>
                                                            <option value="">Keith</option>
                                                            <option value="">Tonto</option>
                                                            <option value="">Clouds</option>
                                                            <option value="">Getting There</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-12 aftnxt">
                                                        <b>Addition Property Information:</b> 
                                                    </div> 
                                                    <div class="col-md-3">
                                                        <label for="bedrooms">Bedrooms:</label>
                                                        <input type="text" id="bedrooms" class="form-control" name="bedrooms" value="">
                                                    </div>
                                                    <div class="col-md-2">
                                                        <label for="baths">Full Baths:</label>
                                                        <input type="text" id="baths" class="form-control" name="baths" value="">
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label for="sqfeet">Square Feet:</label>
                                                        <input type="text" id="sqfeet" class="form-control" name="sqfeet" value="">
                                                    </div>
                                                    <div class="col-md-2">
                                                        <label for="price">Price:</label>
                                                        <input type="text" id="price" class="form-control" name="price" value="">
                                                    </div>
                                                    <div class="col-md-2">
                                                        <label for="hbaths">Half Baths:</label>
                                                        <input type="text" id="hbaths" class="form-control" name="hbaths" value="">
                                                    </div>
                                                    <div class="col-md-12">
                                                        <label for="hbaths">Property Title:</label>
                                                        <input type="text" id="hbaths" class="form-control" name="hbaths" value="" placeholder="The text you enter here will upper on your template"> 
                                                    </div>
                                                    <div class="col-md-12">
                                                        <label for="hbaths">Property Description:</label>
                                                        <input type="text" id="hbaths" class="form-control" name="hbaths" value="" Placeholder="The text you enter here will upper on your template"> 
                                                    </div>
                                                    <div class="col-md-12 aftnxt">
                                                        <b>After submitting this order, you will be emailed a specific time from one of your chosen dates within 8 business hours.</b> 
                                                    </div> 
                                                    <div class="col-md-12">
                                                        <input type="checkbox" id="90days" name="90days" value="">
                                                        <label for="90days">Schedule Later </label>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="90days">Date 1: </label>
                                                        <input type="text" id="datepicker" class="form-control" placeholder="mm/dd/yyyy">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="90days">Time 1: </label>
                                                        <input type="text" id="datepicker" class="form-control" placeholder="hh:mm">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="90days">Final Date and Time: </label>
                                                        <input type="text" id="datepicker" class="form-control" placeholder="07/27/2021 at 09:00 AM" readonly>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="90days">Date 2: </label>
                                                        <input type="text" id="datepicker1" class="form-control" placeholder="mm/dd/yyyy">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="90days">Time 2: </label>
                                                        <input type="text" id="datepicker" class="form-control" placeholder="hh:mm">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="90days">Final Date and Time : </label>
                                                        <input type="text" id="datepicker" class="form-control" placeholder="07/28/2021 at 12:00 PM" readonly>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="90days">Date 3: </label>
                                                        <input type="text" id="datepicker2" class="form-control" placeholder="mm/dd/yyyy">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="90days">Time 3: </label>
                                                        <input type="text" id="datepicker" class="form-control" placeholder="hh:mm">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="90days">Final Date and Time : </label>
                                                        <input type="text" id="datepicker" class="form-control" placeholder="07/30/2021 at 12:00 PM" readonly>
                                                    </div>
                                                    <div class="col-md-12 padtp">
                                                        <center>
                                                            <button class="btn btn-success btn-lg" type="submit"><i class="fa fa-sign-in"></i> Submit Order</button>
                                                        </center>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>          
                                {{-- Inner accordion ends here --}}
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree33">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed pad0" data-toggle="collapse" data-target="#collapseThree33" aria-expanded="false" aria-controls="collapseThree33">
                                    Video Only
                                </button>
                                <span class="erclr pull-right">$145</span>
                                <br>
                                <span class="desclr">8 Video Scenes</span>  
                            </h5>
                        </div>
                        <div id="collapseThree33" class="collapse" aria-labelledby="headingThree33" data-parent="#accordion">
                            <div class="card-body">
                                <div class="row" id="CollapsedRow9">
                                    <div class="col-md-12"> 
                                        <center>
                                            <video width="auto" height="auto" controls>
                                                <source src="videos/sample1.mov" type="video/mp4">
                                                Your browser does not support the video tag.
                                            </video>
                                        </center>
                                    </div>
                                    <div class="col-md-12">
                                        <b>Video Only Options:</b>
                                    </div>
                                    {{-- default check --}}
                                    <div class="col-md-6">
                                        <input type="checkbox" value="50" class="checkbox_videoonly8" onchange="checkTotalVideoOnly8()" checked>
                                        <label for="Plan"> ‘Plus’ option - 2 Aerial photos <span class="erclr">$50</span></label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="checkbox" value="99" class="checkbox_videoonly8" onchange="checkTotalVideoOnly8()">
                                        <label for="Plan"> ‘Premium’ option - 6 Aerial photos <span class="erclr">$99</span></label>
                                    </div>
                                    {{-- default check --}}
                                    <div class="col-md-6 line-height">
                                        <input type="checkbox" value="10" class="checkbox_videoonly8" onchange="checkTotalVideoOnly8()" checked>
                                            Send me the original video file when its ready  <span class="erclr">$10</span>
                                        <br>
                                        <span class="desclr">Receive the original video file for upload to your own social networking websites such as YouTube and Facebook</span> 
                                    </div>
                                    {{-- default check --}}
                                    <div class="col-md-6">
                                        <input type="checkbox" value="5" class="checkbox_videoonly8" onchange="checkTotalVideoOnly8()" checked>
                                        <label for="cance"> Cancelation Insurance 
                                            <span class="tlstp" data-toggle="tooltip" data-placement="top" title="If you want to reschedule the appointment, you must notify us 18 hours prior to the appointment or you will incur a $30 cancelation/reschedule fee. Checking the insurance check box allows you to cancel up 1 hour prior to the appointment.">
                                                (What's this?)
                                            </span>
                                            <span class="erclr">$5</span>
                                        </label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="checkbox" value="19" class="checkbox_videoonly8" onchange="checkTotalVideoOnly8()">
                                        <label for="cance"> Removal of 'Hometakes' branding on your Tour 
                                            <span class="erclr">$19</span>
                                        </label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="checkbox" value="175" class="checkbox_videoonly8" onchange="checkTotalVideoOnly8()">
                                        <label for="cance"> Twilight photography <a href="https://www.hometakesvideos.com/orders/twilight_samples/index.html" target="_blank">(See sample)</a>
                                            <span class="erclr">$175</span>
                                        </label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="checkbox" value="25" class="checkbox_videoonly8" onchange="checkTotalVideoOnly8()">
                                        <label for="cance"> Additional Video Scene (includes photo) ea.
                                            <span class="erclr">$25</span>
                                        </label>
                                        <input type="text" id="acsquare" class="form-control" name="acsquare" placeholder="No. of Video Scenes" >
                                    </div>
                                    <div class="col-md-12 col-xs-12 text-center">
                                        <p style="border-top: 1px solid #FFF"></p>
                                        <center>
                                            <label for="total">Total:</label>
                                            <input type="text" id="total_videoonly8" class="form-controltotal" placeholder="$210.00" readonly>
                                            <br>
                                            <div class="agrees">
                                                <input type="checkbox" id="90days" name="90days" value="">
                                                <label for="90days">I agree to the <a href="" data-toggle="modal" data-target="#policies">policies and conditions</a> </label>
                                                <br>
                                                {{-- <button class="btn btn-primary btn-lg accordion-toggle" data-toggle="collapse" data-parent="#accordionnes9" href="#collapseInner9">Next</button> --}}
                                                <button class="btn btn-primary btn-lg " id="show9">Next</button>
                                            </div>
                                        </center> 
                                    </div>
                                </div>
                                {{-- Here we insert another nested accordion --}}
                                <div class="accordion" id="accordionnes9">
                                    <div class="accordion-group">
                                        <div id="collapsedNested9" class="accordion-body collapse in">
                                            <div class="accordion-inner">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <button class="btn btn-primary accordion-toggle pull-right" id="hide9">Back</button>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="mlsnum">MLS Number:</label>
                                                        <input type="text" id="mlsnum" class="form-control" name="mlsnum" value="" data-toggle="tooltip" data-placement="top" title="If you do not yet have an MLS number, you must leave this field empty. If you enter an incorrect MLS# for the property you will not notified that you entered an incorrect number so please ensure that you enter the correct number.">
                                                    </div>
                                                    <div class="col-md-8">
                                                        <label for="address">Address to be filmed:</label>
                                                        <input type="text" id="address" class="form-control" name="address" value="">
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label for="mlsnum">Unit Number:</label>
                                                        <input type="text" id="mlsnum" class="form-control" name="mlsnum" value="">
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label for="city">City:</label>
                                                        <input type="text" id="city" class="form-control" name="city" value="">
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label for="place">Place</label>
                                                        <input type="text" id="place" class="form-control" name="place" value="" readonly placeholder="Florida">
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label for="zipc">Zip Code</label>
                                                        <input type="text" id="zipc" class="form-control" name="zipc" value="">
                                                    </div>
                                                    <div class="col-md-6 col-md-offset-6">
                                                        <label for="zipc">Does the community have a name?</label>
                                                        <select  class="form-control" name="" id="">
                                                            <option value="" disabled selected hidden>Select</option>
                                                            <option value="">Yes</option>
                                                            <option value="">No</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-12 aftnxt">
                                                        <b>Music for video tour:</b> 
                                                    </div> 
                                                    <div class="col-md-4 marbot" >
                                                        {{-- <label for="zipc">Does</label> --}}
                                                        <select  class="form-control" name="" id="">
                                                            <option value="" disabled selected hidden>Select Happy</option>
                                                            <option value="">Happy Mandolin</option>
                                                            <option value="">Blue Skies</option>
                                                            <option value="">How it began</option>
                                                            <option value="">Payday</option>
                                                            <option value="">Locally Sourced</option>
                                                            <option value="">Indie Romance</option>
                                                            <option value="">Jazz In Paris</option>
                                                            <option value="">The Engagement</option>
                                                            <option value="">Swamp Stomp</option>
                                                            <option value="">Venice Beach</option>
                                                            <option value="">The Creek</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 marbot">
                                                        <select  class="form-control" name="" id="">
                                                            <option value="" disabled selected hidden>Select Cool & Jazzy</option>
                                                            <option value="">Must Be Something</option>
                                                            <option value="">Get Back</option>
                                                            <option value="">Fortaleza</option>
                                                            <option value="">Blakey's Burnout</option>
                                                            <option value="">Confessin</option>
                                                            <option value="">Raindrops</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 marbot">
                                                        <select  class="form-control" name="" id="">
                                                            <option value="" disabled selected hidden>Select Classical</option>
                                                            <option value="">Blue Danube by Strauss</option>
                                                            <option value="">Eine Kleine Nachtmusik by Mozart</option>
                                                            <option value="">Waltz of the Flowers by Tchaikovsky</option>
                                                            <option value="">Les Toreadors from Carmen by Bizet</option>
                                                            <option value="">Messiah by Handel</option>
                                                            <option value="">Morning Mood</option>
                                                            <option value="">Moonlight Sonata by Beethoven</option>
                                                            <option value="">Habanera by Bizet</option>
                                                            <option value="">Far Behind</option>
                                                            <option value="">Hungarian Rhapsody No 2 by Liszt</option>
                                                            <option value="">Ride of the Valkyries by Wagner</option>
                                                            <option value="">Symphony No 5 by Beethoven</option>
                                                            <option value="">Fur Elise by Beethoven</option>
                                                            <option value="">William Tell Overture by Rossini</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <select  class="form-control" name="" id="">
                                                            <option value="" disabled selected hidden>Select Upbeat</option>
                                                            <option value="">Dont Hate Me (vocals)</option>
                                                            <option value="">The Place Inside</option>
                                                            <option value="">How About It</option>
                                                            <option value="">Switch It Up</option>
                                                            <option value="">Rubber Necking</option>
                                                            <option value="">Cimson Fly</option>
                                                            <option value="">Gotta Find Out</option>
                                                            <option value="">Boo Boogie</option>
                                                            <option value="">Festival</option>
                                                            <option value="">Magic Marker</option>
                                                            <option value="">Runaways</option>
                                                            <option value="">Reasons To Smile</option>
                                                            <option value="">Golden Days</option>
                                                            <option value="">First Day</option>
                                                            <option value="">Stalling</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <select  class="form-control" name="" id="">
                                                            <option value="" disabled selected hidden>Select Mello</option>
                                                            <option value="">Hey Girl</option>
                                                            <option value="">Let's Do It</option>
                                                            <option value="">Sweet as Honey</option>
                                                            <option value="">Chances Sax</option>
                                                            <option value="">Until We Meet Again</option>
                                                            <option value="">Keep Dreaming</option>
                                                            <option value="">Don't Look</option>
                                                            <option value="">Where I Am From</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <select  class="form-control" name="" id="">
                                                            <option value="" disabled selected hidden>Select Piano</option>
                                                            <option value="">Sunday Stroll</option>
                                                            <option value="">Keith</option>
                                                            <option value="">Tonto</option>
                                                            <option value="">Clouds</option>
                                                            <option value="">Getting There</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-12 aftnxt">
                                                        <b>Addition Property Information:</b> 
                                                    </div> 
                                                    <div class="col-md-3">
                                                        <label for="bedrooms">Bedrooms:</label>
                                                        <input type="text" id="bedrooms" class="form-control" name="bedrooms" value="">
                                                    </div>
                                                    <div class="col-md-2">
                                                        <label for="baths">Full Baths:</label>
                                                        <input type="text" id="baths" class="form-control" name="baths" value="">
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label for="sqfeet">Square Feet:</label>
                                                        <input type="text" id="sqfeet" class="form-control" name="sqfeet" value="">
                                                    </div>
                                                    <div class="col-md-2">
                                                        <label for="price">Price:</label>
                                                        <input type="text" id="price" class="form-control" name="price" value="">
                                                    </div>
                                                    <div class="col-md-2">
                                                        <label for="hbaths">Half Baths:</label>
                                                        <input type="text" id="hbaths" class="form-control" name="hbaths" value="">
                                                    </div>
                                                    <div class="col-md-12">
                                                        <label for="hbaths">Property Title:</label>
                                                        <input type="text" id="hbaths" class="form-control" name="hbaths" value="" placeholder="The text you enter here will upper on your template"> 
                                                    </div>
                                                    <div class="col-md-12">
                                                        <label for="hbaths">Property Description:</label>
                                                        <input type="text" id="hbaths" class="form-control" name="hbaths" value="" Placeholder="The text you enter here will upper on your template"> 
                                                    </div>
                                                    <div class="col-md-12 aftnxt">
                                                        <b>After submitting this order, you will be emailed a specific time from one of your chosen dates within 8 business hours.</b> 
                                                    </div> 
                                                    <div class="col-md-12">
                                                        <input type="checkbox" id="90days" name="90days" value="">
                                                        <label for="90days">Schedule Later </label>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="90days">Date 1: </label>
                                                        <input type="text" id="datepicker" class="form-control" placeholder="mm/dd/yyyy">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="90days">Time 1: </label>
                                                        <input type="text" id="datepicker" class="form-control" placeholder="hh:mm">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="90days">Final Date and Time: </label>
                                                        <input type="text" id="datepicker" class="form-control" placeholder="07/27/2021 at 09:00 AM" readonly>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="90days">Date 2: </label>
                                                        <input type="text" id="datepicker1" class="form-control" placeholder="mm/dd/yyyy">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="90days">Time 2: </label>
                                                        <input type="text" id="datepicker" class="form-control" placeholder="hh:mm">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="90days">Final Date and Time : </label>
                                                        <input type="text" id="datepicker" class="form-control" placeholder="07/28/2021 at 12:00 PM" readonly>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="90days">Date 3: </label>
                                                        <input type="text" id="datepicker2" class="form-control" placeholder="mm/dd/yyyy">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="90days">Time 3: </label>
                                                        <input type="text" id="datepicker" class="form-control" placeholder="hh:mm">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="90days">Final Date and Time : </label>
                                                        <input type="text" id="datepicker" class="form-control" placeholder="07/30/2021 at 12:00 PM" readonly>
                                                    </div>
                                                    <div class="col-md-12 padtp">
                                                        <center>
                                                            <button class="btn btn-success btn-lg" type="submit"><i class="fa fa-sign-in"></i> Submit Order</button>
                                                        </center>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>          
                                {{-- Inner accordion ends here --}}
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" id="headingTen">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed pad0" data-toggle="collapse" data-target="#collapseTen" aria-expanded="true" aria-controls="collapseTen">
                                    Photos Only
                                </button>
                                <span class="erclr pull-right">$129</span>
                                <br>
                                <span class="desclr">8 HDR Photos</span>  
                            </h5>
                        </div>
                    
                        <div id="collapseTen" class="collapse" aria-labelledby="headingTen" data-parent="#accordion">
                            <div class="card-body">
                                <div class="row" id="CollapsedRow10">
                                    <b>Photo Slideshow:</b>
                                    <div class="col-md-12"> 
                                        <center>
                                            <video width="auto" height="auto" controls>
                                                <source src="videos/sample1.mov" type="video/mp4">
                                                Your browser does not support the video tag.
                                            </video>
                                        </center>
                                    </div>
                                    <div class="col-md-12">
                                        <b>Photo Only Options:</b>
                                    </div>
                                    {{-- default check --}}
                                    <div class="col-md-6">
                                        <input type="checkbox" value="50" class="checkbox_photoonly" onchange="checkTotalPhotoOnly()" checked>
                                        <label for="Plan"> ‘Plus’ option - 2 Aerial photos <span class="erclr">$50</span></label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="checkbox" value="99" class="checkbox_photoonly" onchange="checkTotalPhotoOnly()">
                                        <label for="Plan"> ‘Premium’ option - 6 Aerial photos <span class="erclr">$99</span></label>
                                    </div>
                                    {{-- default check --}}
                                    <div class="col-md-6">
                                        <input type="checkbox" value="5" class="checkbox_photoonly" onchange="checkTotalPhotoOnly()" checked>
                                        <label for="cance"> Cancelation Insurance 
                                            <span class="tlstp" data-toggle="tooltip" data-placement="top" title="If you want to reschedule the appointment, you must notify us 18 hours prior to the appointment or you will incur a $30 cancelation/reschedule fee. Checking the insurance check box allows you to cancel up 1 hour prior to the appointment.">
                                                (What's this?)
                                            </span>
                                            <span class="erclr">$5</span>
                                        </label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="checkbox" value="19" class="checkbox_photoonly" onchange="checkTotalPhotoOnly()">
                                        <label for="cance"> Removal of 'Hometakes' branding on your Tour 
                                            <span class="erclr">$19</span>
                                        </label>
                                    </div>
                                    {{-- default check --}}
                                    <div class="col-md-6">
                                        <input type="checkbox" value="20" class="checkbox_photoonly" onchange="checkTotalPhotoOnly()" checked>
                                        <label for="Plan"> 1 Twilight Enhancement Photo <a href="https://www.hometakesvideos.com/orders/twilight_enhancement_samples/index.html" target="_blank">(See sample)</a>
                                            <span class="erclr">$20</span>
                                        </label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="checkbox" value="50" class="checkbox_photoonly" onchange="checkTotalPhotoOnly()">
                                        <label for="Plan"> ‘Plus’ option - 2 Aerial photos <span class="erclr">$50</span></label>
                                    </div>
                                    <div class="col-md-12 col-xs-12 text-center">
                                        <p style="border-top: 1px solid #FFF"></p>
                                        <center>
                                            <label for="total">Total:</label>
                                            <input type="text" id="total_photoonly" class="form-controltotal" placeholder="$204.00" readonly>
                                            <br>
                                            <div class="agrees">
                                                <input type="checkbox" id="90days" name="90days" value="">
                                                <label for="90days">I agree to the <a href="" data-toggle="modal" data-target="#policies">policies and conditions</a> </label>
                                                <br>
                                                {{-- <button class="btn btn-primary btn-lg accordion-toggle" data-toggle="collapse" data-parent="#accordionnes10" href="#collapseInner10">Next</button> --}}
                                                <button class="btn btn-primary btn-lg " id="show10">Next</button>
                                            </div>
                                        </center> 
                                    </div>
                                </div>
                                {{-- Here we insert another nested accordion --}}
                                <div class="accordion" id="accordionnes10">
                                    <div class="accordion-group">
                                        <div id="collapsedNested10" class="accordion-body collapse in">
                                            <div class="accordion-inner">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <button class="btn btn-primary accordion-toggle pull-right" id="hide10">Back</button>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="mlsnum">MLS Number:</label>
                                                        <input type="text" id="mlsnum" class="form-control" name="mlsnum" value="" data-toggle="tooltip" data-placement="top" title="If you do not yet have an MLS number, you must leave this field empty. If you enter an incorrect MLS# for the property you will not notified that you entered an incorrect number so please ensure that you enter the correct number.">
                                                    </div>
                                                    <div class="col-md-8">
                                                        <label for="address">Address to be filmed:</label>
                                                        <input type="text" id="address" class="form-control" name="address" value="">
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label for="mlsnum">Unit Number:</label>
                                                        <input type="text" id="mlsnum" class="form-control" name="mlsnum" value="">
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label for="city">City:</label>
                                                        <input type="text" id="city" class="form-control" name="city" value="">
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label for="place">Place</label>
                                                        <input type="text" id="place" class="form-control" name="place" value="" readonly placeholder="Florida">
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label for="zipc">Zip Code</label>
                                                        <input type="text" id="zipc" class="form-control" name="zipc" value="">
                                                    </div>
                                                    <div class="col-md-6 col-md-offset-6">
                                                        <label for="zipc">Does the community have a name?</label>
                                                        <select  class="form-control" name="" id="">
                                                            <option value="" disabled selected hidden>Select</option>
                                                            <option value="">Yes</option>
                                                            <option value="">No</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-12 aftnxt">
                                                        <b>Music for video tour:</b> 
                                                    </div> 
                                                    <div class="col-md-4 marbot" >
                                                        {{-- <label for="zipc">Does</label> --}}
                                                        <select  class="form-control" name="" id="">
                                                            <option value="" disabled selected hidden>Select Happy</option>
                                                            <option value="">Happy Mandolin</option>
                                                            <option value="">Blue Skies</option>
                                                            <option value="">How it began</option>
                                                            <option value="">Payday</option>
                                                            <option value="">Locally Sourced</option>
                                                            <option value="">Indie Romance</option>
                                                            <option value="">Jazz In Paris</option>
                                                            <option value="">The Engagement</option>
                                                            <option value="">Swamp Stomp</option>
                                                            <option value="">Venice Beach</option>
                                                            <option value="">The Creek</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 marbot">
                                                        <select  class="form-control" name="" id="">
                                                            <option value="" disabled selected hidden>Select Cool & Jazzy</option>
                                                            <option value="">Must Be Something</option>
                                                            <option value="">Get Back</option>
                                                            <option value="">Fortaleza</option>
                                                            <option value="">Blakey's Burnout</option>
                                                            <option value="">Confessin</option>
                                                            <option value="">Raindrops</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 marbot">
                                                        <select  class="form-control" name="" id="">
                                                            <option value="" disabled selected hidden>Select Classical</option>
                                                            <option value="">Blue Danube by Strauss</option>
                                                            <option value="">Eine Kleine Nachtmusik by Mozart</option>
                                                            <option value="">Waltz of the Flowers by Tchaikovsky</option>
                                                            <option value="">Les Toreadors from Carmen by Bizet</option>
                                                            <option value="">Messiah by Handel</option>
                                                            <option value="">Morning Mood</option>
                                                            <option value="">Moonlight Sonata by Beethoven</option>
                                                            <option value="">Habanera by Bizet</option>
                                                            <option value="">Far Behind</option>
                                                            <option value="">Hungarian Rhapsody No 2 by Liszt</option>
                                                            <option value="">Ride of the Valkyries by Wagner</option>
                                                            <option value="">Symphony No 5 by Beethoven</option>
                                                            <option value="">Fur Elise by Beethoven</option>
                                                            <option value="">William Tell Overture by Rossini</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <select  class="form-control" name="" id="">
                                                            <option value="" disabled selected hidden>Select Upbeat</option>
                                                            <option value="">Dont Hate Me (vocals)</option>
                                                            <option value="">The Place Inside</option>
                                                            <option value="">How About It</option>
                                                            <option value="">Switch It Up</option>
                                                            <option value="">Rubber Necking</option>
                                                            <option value="">Cimson Fly</option>
                                                            <option value="">Gotta Find Out</option>
                                                            <option value="">Boo Boogie</option>
                                                            <option value="">Festival</option>
                                                            <option value="">Magic Marker</option>
                                                            <option value="">Runaways</option>
                                                            <option value="">Reasons To Smile</option>
                                                            <option value="">Golden Days</option>
                                                            <option value="">First Day</option>
                                                            <option value="">Stalling</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <select  class="form-control" name="" id="">
                                                            <option value="" disabled selected hidden>Select Mello</option>
                                                            <option value="">Hey Girl</option>
                                                            <option value="">Let's Do It</option>
                                                            <option value="">Sweet as Honey</option>
                                                            <option value="">Chances Sax</option>
                                                            <option value="">Until We Meet Again</option>
                                                            <option value="">Keep Dreaming</option>
                                                            <option value="">Don't Look</option>
                                                            <option value="">Where I Am From</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <select  class="form-control" name="" id="">
                                                            <option value="" disabled selected hidden>Select Piano</option>
                                                            <option value="">Sunday Stroll</option>
                                                            <option value="">Keith</option>
                                                            <option value="">Tonto</option>
                                                            <option value="">Clouds</option>
                                                            <option value="">Getting There</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-12 aftnxt">
                                                        <b>Addition Property Information:</b> 
                                                    </div> 
                                                    <div class="col-md-3">
                                                        <label for="bedrooms">Bedrooms:</label>
                                                        <input type="text" id="bedrooms" class="form-control" name="bedrooms" value="">
                                                    </div>
                                                    <div class="col-md-2">
                                                        <label for="baths">Full Baths:</label>
                                                        <input type="text" id="baths" class="form-control" name="baths" value="">
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label for="sqfeet">Square Feet:</label>
                                                        <input type="text" id="sqfeet" class="form-control" name="sqfeet" value="">
                                                    </div>
                                                    <div class="col-md-2">
                                                        <label for="price">Price:</label>
                                                        <input type="text" id="price" class="form-control" name="price" value="">
                                                    </div>
                                                    <div class="col-md-2">
                                                        <label for="hbaths">Half Baths:</label>
                                                        <input type="text" id="hbaths" class="form-control" name="hbaths" value="">
                                                    </div>
                                                    <div class="col-md-12">
                                                        <label for="hbaths">Property Title:</label>
                                                        <input type="text" id="hbaths" class="form-control" name="hbaths" value="" placeholder="The text you enter here will upper on your template"> 
                                                    </div>
                                                    <div class="col-md-12">
                                                        <label for="hbaths">Property Description:</label>
                                                        <input type="text" id="hbaths" class="form-control" name="hbaths" value="" Placeholder="The text you enter here will upper on your template"> 
                                                    </div>
                                                    <div class="col-md-12 aftnxt">
                                                        <b>After submitting this order, you will be emailed a specific time from one of your chosen dates within 8 business hours.</b> 
                                                    </div> 
                                                    <div class="col-md-12">
                                                        <input type="checkbox" id="90days" name="90days" value="">
                                                        <label for="90days">Schedule Later </label>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="90days">Date 1: </label>
                                                        <input type="text" id="datepicker" class="form-control" placeholder="mm/dd/yyyy">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="90days">Time 1: </label>
                                                        <input type="text" id="datepicker" class="form-control" placeholder="hh:mm">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="90days">Final Date and Time: </label>
                                                        <input type="text" id="datepicker" class="form-control" placeholder="07/27/2021 at 09:00 AM" readonly>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="90days">Date 2: </label>
                                                        <input type="text" id="datepicker1" class="form-control" placeholder="mm/dd/yyyy">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="90days">Time 2: </label>
                                                        <input type="text" id="datepicker" class="form-control" placeholder="hh:mm">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="90days">Final Date and Time : </label>
                                                        <input type="text" id="datepicker" class="form-control" placeholder="07/28/2021 at 12:00 PM" readonly>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="90days">Date 3: </label>
                                                        <input type="text" id="datepicker2" class="form-control" placeholder="mm/dd/yyyy">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="90days">Time 3: </label>
                                                        <input type="text" id="datepicker" class="form-control" placeholder="hh:mm">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="90days">Final Date and Time : </label>
                                                        <input type="text" id="datepicker" class="form-control" placeholder="07/30/2021 at 12:00 PM" readonly>
                                                    </div>
                                                    <div class="col-md-12 padtp">
                                                        <center>
                                                            <button class="btn btn-success btn-lg" type="submit"><i class="fa fa-sign-in"></i> Submit Order</button>
                                                        </center>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>          
                                {{-- Inner accordion ends here --}}
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingEleven">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed pad0" data-toggle="collapse" data-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
                                    3D Tour - Click [  ] on sample below
                                </button>
                                <span class="erclr pull-right"><span class="frm">(from)</span> $199</span>
                                <br>
                                <span class="desclr">Please note: 3D Tours added as an option to any of the above packages are deeply discounted <br> with a minimum of 50% off of the price than if ordered here separately</span>  
                            </h5>
                        </div>
                        <div id="collapseEleven" class="collapse" aria-labelledby="headingEleven" data-parent="#accordion">
                            <div class="card-body">
                                <div class="row" id="CollapsedRow11">
                                    <div class="col-md-12"> 
                                        <center>
                                            <video width="auto" height="auto" controls>
                                                <source src="videos/sample2.mov" type="video/mp4">
                                                Your browser does not support the video tag.
                                            </video>
                                        </center>
                                    </div>
                                    <div class="col-md-3"></div>
                                    <div class="col-md-9">
                                            <p class="tlstp" data-toggle="tooltip" data-placement="top" title="Please note: There are certain camera limitations such as the camera cannot shoot exterior images so that you can travel from the inside to the exterior of the home. We do not shoot exterior 360 images nor add a play button to the tour or the addition of Mattertags. We do not photoshop any camera reflections from the tour (The tour is processed by Matterport not at Hometakes). Some jagged edges may appear in the 3-D dollhouse and floor plan view and cannot be prevented. Windows without shades or blinds may display as overexposed. If the home has a separate guest house building that is detached from the main house and you want to include it in your tour, there is a $50 addition charge. This is necessary as it has to be made a processed as a separate tour.. Chrome browser may not be fully supported when viewing the tour.">
                                                → Read these important 3D Tour Limitations
                                        </p>
                                        <p class="tlstp" data-toggle="tooltip" data-placement="top" title="Please note that floor plans will only include areas that were shot with the Matterport Camera. It will not include areas such as patios, pools or garages and any room that was not shot inside the home such as storage cupboards etc. Floor plans are produced by Matterport and not Hometakes and as such, are non refundable. Please view the sample before ordering this item.">
                                            → Floor plan Limitations </p>
                                        <p> <a href="https://www.hometakesvideos.com/orders/Sample_Floor_Plan.pdf" target="_blank"> → Sample Floor Plan </a> </p>
                                    </div>
                                    <div class="col-md-12">
                                        <b>3D Tour option:</b>
                                    </div>
                                    <div class="col-md-12">
                                        <input type="checkbox" value="19" class="checkbox_tour" onchange="checkTotalTour()">
                                        <label for="cance"> Removal of 'Hometakes' branding on your Tour 
                                            <span class="erclr">$19</span>
                                        </label>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="" class="erclr">You must enter the exact AC Square footage so that we can calculate your appointment time accurately:</label>
                                        <div class="col-md-6">
                                            <input type="text" id="acsquare" class="form-control" name="acsquare" placeholder="Exact AC Square Unit Footage" data-toggle="tooltip" data-placement="top" title="Do not estimate the size of the home. We check the size of the home against Realtor.com after you place the listing into MLS. Any difference in the price of the tour due to an incorrect number entered here will result in your account being charged the difference in price plus a re-assessment fee of $49" required>
                                        </div>
                                        <div class="cap">
                                            <li> 3D Tour is hosted on your Tour Template and will not function after 60 days. You should purchase addition hosting if you think it may take longer than 60 days to sell the property. You can purchase additional hosting later.</li> 
                                        </div> 
                                        <p class="text-center host" style="border-top: 1px solid #DCDCDC;">*Hosting fees non-refundable or transferable</p>
                                    </div>
                                    {{-- default check --}}
                                    <div class="col-md-4 col-xs-12">
                                        <input type="checkbox" value="35" class="hostingcheckbox_3dtour checkbox_tour" onchange="checkTotalTour()" checked>
                                        <label for="90days">90 days additional hosting <span class="erclr">$35</span> </label>
                                    </div>
                                    <div class="col-md-4 col-xs-12">
                                        <input type="checkbox" value="55" class="hostingcheckbox_3dtour checkbox_tour" onchange="checkTotalTour()">
                                        <label for="180days"> 180 days additional hosting <span class="erclr">$55</span></label>
                                    </div>
                                    <div class="col-md-4 col-xs-12">
                                        <input type="checkbox" value="79" class="hostingcheckbox_3dtour checkbox_tour" onchange="checkTotalTour()">
                                        <label for="360days"> 360 days additional hosting <span class="erclr">$79</span></label>
                                    </div>
                                    <br><br>
                                    <div class="col-md-12 col-xs-12">
                                        <input type="checkbox" value="35" class="checkbox_tour" onchange="checkTotalTour()">
                                        <label for="Plan"> Add a Floor Plan <span class="erclr">$35</span></label>
                                    </div>
                                    <div class="col-md-12 col-xs-12 text-center">
                                        <p style="border-top: 1px solid #DCDCDC"></p>
                                        <center>
                                            <label for="total">Total:</label>
                                            <input type="text" id="total_tour" class="form-controltotal" placeholder="$234.00" readonly>
                                            <br>
                                            <div class="agrees">
                                                <input type="checkbox" id="90days" name="90days" value="">
                                                <label for="90days">I agree to the <a href="" data-toggle="modal" data-target="#policies">policies and conditions</a> </label>
                                                <br>
                                                <button class="btn btn-primary btn-lg " id="show11">Next</button>
                                            </div>
                                        </center> 
                                    </div>
                                </div>
                                {{-- Here we insert another nested accordion --}}
                                <div class="accordion" id="accordionnes11">
                                    <div class="accordion-group">
                                        <div id="collapsedNested11" class="accordion-body collapse in">
                                            <div class="accordion-inner">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <button class="btn btn-primary accordion-toggle pull-right" id="hide11">Back</button>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="mlsnum">MLS Number:</label>
                                                        <input type="text" id="mlsnum" class="form-control" name="mlsnum" value="" data-toggle="tooltip" data-placement="top" title="If you do not yet have an MLS number, you must leave this field empty. If you enter an incorrect MLS# for the property you will not notified that you entered an incorrect number so please ensure that you enter the correct number.">
                                                    </div>
                                                    <div class="col-md-8">
                                                        <label for="address">Address to be filmed:</label>
                                                        <input type="text" id="address" class="form-control" name="address" value="">
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label for="mlsnum">Unit Number:</label>
                                                        <input type="text" id="mlsnum" class="form-control" name="mlsnum" value="">
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label for="city">City:</label>
                                                        <input type="text" id="city" class="form-control" name="city" value="">
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label for="place">Place</label>
                                                        <input type="text" id="place" class="form-control" name="place" value="" readonly placeholder="Florida">
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label for="zipc">Zip Code</label>
                                                        <input type="text" id="zipc" class="form-control" name="zipc" value="">
                                                    </div>
                                                    <div class="col-md-6 col-md-offset-6">
                                                        <label for="zipc">Does the community have a name?</label>
                                                        <select  class="form-control" name="" id="">
                                                            <option value="" disabled selected hidden>Select</option>
                                                            <option value="">Yes</option>
                                                            <option value="">No</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-12 aftnxt">
                                                        <b>Music for video tour:</b> 
                                                    </div> 
                                                    <div class="col-md-4 marbot" >
                                                        {{-- <label for="zipc">Does</label> --}}
                                                        <select  class="form-control" name="" id="">
                                                            <option value="" disabled selected hidden>Select Happy</option>
                                                            <option value="">Happy Mandolin</option>
                                                            <option value="">Blue Skies</option>
                                                            <option value="">How it began</option>
                                                            <option value="">Payday</option>
                                                            <option value="">Locally Sourced</option>
                                                            <option value="">Indie Romance</option>
                                                            <option value="">Jazz In Paris</option>
                                                            <option value="">The Engagement</option>
                                                            <option value="">Swamp Stomp</option>
                                                            <option value="">Venice Beach</option>
                                                            <option value="">The Creek</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 marbot">
                                                        <select  class="form-control" name="" id="">
                                                            <option value="" disabled selected hidden>Select Cool & Jazzy</option>
                                                            <option value="">Must Be Something</option>
                                                            <option value="">Get Back</option>
                                                            <option value="">Fortaleza</option>
                                                            <option value="">Blakey's Burnout</option>
                                                            <option value="">Confessin</option>
                                                            <option value="">Raindrops</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 marbot">
                                                        <select  class="form-control" name="" id="">
                                                            <option value="" disabled selected hidden>Select Classical</option>
                                                            <option value="">Blue Danube by Strauss</option>
                                                            <option value="">Eine Kleine Nachtmusik by Mozart</option>
                                                            <option value="">Waltz of the Flowers by Tchaikovsky</option>
                                                            <option value="">Les Toreadors from Carmen by Bizet</option>
                                                            <option value="">Messiah by Handel</option>
                                                            <option value="">Morning Mood</option>
                                                            <option value="">Moonlight Sonata by Beethoven</option>
                                                            <option value="">Habanera by Bizet</option>
                                                            <option value="">Far Behind</option>
                                                            <option value="">Hungarian Rhapsody No 2 by Liszt</option>
                                                            <option value="">Ride of the Valkyries by Wagner</option>
                                                            <option value="">Symphony No 5 by Beethoven</option>
                                                            <option value="">Fur Elise by Beethoven</option>
                                                            <option value="">William Tell Overture by Rossini</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <select  class="form-control" name="" id="">
                                                            <option value="" disabled selected hidden>Select Upbeat</option>
                                                            <option value="">Dont Hate Me (vocals)</option>
                                                            <option value="">The Place Inside</option>
                                                            <option value="">How About It</option>
                                                            <option value="">Switch It Up</option>
                                                            <option value="">Rubber Necking</option>
                                                            <option value="">Cimson Fly</option>
                                                            <option value="">Gotta Find Out</option>
                                                            <option value="">Boo Boogie</option>
                                                            <option value="">Festival</option>
                                                            <option value="">Magic Marker</option>
                                                            <option value="">Runaways</option>
                                                            <option value="">Reasons To Smile</option>
                                                            <option value="">Golden Days</option>
                                                            <option value="">First Day</option>
                                                            <option value="">Stalling</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <select  class="form-control" name="" id="">
                                                            <option value="" disabled selected hidden>Select Mello</option>
                                                            <option value="">Hey Girl</option>
                                                            <option value="">Let's Do It</option>
                                                            <option value="">Sweet as Honey</option>
                                                            <option value="">Chances Sax</option>
                                                            <option value="">Until We Meet Again</option>
                                                            <option value="">Keep Dreaming</option>
                                                            <option value="">Don't Look</option>
                                                            <option value="">Where I Am From</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <select  class="form-control" name="" id="">
                                                            <option value="" disabled selected hidden>Select Piano</option>
                                                            <option value="">Sunday Stroll</option>
                                                            <option value="">Keith</option>
                                                            <option value="">Tonto</option>
                                                            <option value="">Clouds</option>
                                                            <option value="">Getting There</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-12 aftnxt">
                                                        <b>Addition Property Information:</b> 
                                                    </div> 
                                                    <div class="col-md-3">
                                                        <label for="bedrooms">Bedrooms:</label>
                                                        <input type="text" id="bedrooms" class="form-control" name="bedrooms" value="">
                                                    </div>
                                                    <div class="col-md-2">
                                                        <label for="baths">Full Baths:</label>
                                                        <input type="text" id="baths" class="form-control" name="baths" value="">
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label for="sqfeet">Square Feet:</label>
                                                        <input type="text" id="sqfeet" class="form-control" name="sqfeet" value="">
                                                    </div>
                                                    <div class="col-md-2">
                                                        <label for="price">Price:</label>
                                                       <input type="text" id="price" class="form-control" name="price" value="">
                                                    </div>
                                                    <div class="col-md-2">
                                                        <label for="hbaths">Half Baths:</label>
                                                        <input type="text" id="hbaths" class="form-control" name="hbaths" value="">
                                                    </div>
                                                    <div class="col-md-12">
                                                        <label for="hbaths">Property Title:</label>
                                                        <input type="text" id="hbaths" class="form-control" name="hbaths" value="" placeholder="The text you enter here will upper on your template"> 
                                                    </div>
                                                    <div class="col-md-12">
                                                        <label for="hbaths">Property Description:</label>
                                                        <input type="text" id="hbaths" class="form-control" name="hbaths" value="" Placeholder="The text you enter here will upper on your template"> 
                                                    </div>
                                                    <div class="col-md-12 aftnxt">
                                                        <b>After submitting this order, you will be emailed a specific time from one of your chosen dates within 8 business hours.</b> 
                                                    </div> 
                                                    <div class="col-md-12">
                                                        <input type="checkbox" id="90days" name="90days" value="">
                                                        <label for="90days">Schedule Later </label>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="90days">Date 1: </label>
                                                        <input type="text" id="datepicker" class="form-control" placeholder="mm/dd/yyyy">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="90days">Time 1: </label>
                                                        <input type="text" id="datepicker" class="form-control" placeholder="hh:mm">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="90days">Final Date and Time: </label>
                                                        <input type="text" id="datepicker" class="form-control" placeholder="07/27/2021 at 09:00 AM" readonly>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="90days">Date 2: </label>
                                                        <input type="text" id="datepicker1" class="form-control" placeholder="mm/dd/yyyy">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="90days">Time 2: </label>
                                                        <input type="text" id="datepicker" class="form-control" placeholder="hh:mm">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="90days">Final Date and Time : </label>
                                                        <input type="text" id="datepicker" class="form-control" placeholder="07/28/2021 at 12:00 PM" readonly>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="90days">Date 3: </label>
                                                        <input type="text" id="datepicker2" class="form-control" placeholder="mm/dd/yyyy">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="90days">Time 3: </label>
                                                        <input type="text" id="datepicker" class="form-control" placeholder="hh:mm">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="90days">Final Date and Time : </label>
                                                        <input type="text" id="datepicker" class="form-control" placeholder="07/30/2021 at 12:00 PM" readonly>
                                                    </div>
                                                    <div class="col-md-12 padtp">
                                                        <center>
                                                            <button class="btn btn-success btn-lg" type="submit"><i class="fa fa-sign-in"></i> Submit Order</button>
                                                        </center>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>          
                                {{-- Inner accordion ends here --}}
                            </div>
                        </div>
                    </div>
                </div>

            </div>    
    
        

        <!-- Modal -->
        <div class="modal fade" id="policies" tabindex="-1" role="dialog" aria-labelledby="policies" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="policies">Policies and Conditions</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p class="bold">Please maximize this window for easier reading. Understanding and following the policies and conditions will ensure a quality product and keep prices low.</p>
                        <br>
                        <p class="bold">Ownership of Photos and Video:</p>
                        <p class="lines">Hometakes.com owns and retains all copyrights and ownership for photography and/or videography that was taken for any property or Town/Amenity tour for the agent. We never sell or release the rights to any of our photos or tours. The Photography and/or Video Tour is 'licensed' to the agent in connection with the marketing of the property for the purposes of selling or renting it as well as after the sale marketing such as Sold. This is not limited to using the photos/tour for placement in the MLS (and IDX), Advertisements to sell the home in newspapers, magazines and any other forms of Advertising the property for sale or rent. Also, they may use the photos to market themselves as an agent such as "Listed and Sold" by ('Name of Agent' of 'Real Estate Brokerage Name'). The Brokerage for which the agent is licensed under may also market the property and use the photography on its Brokerage website or use them for any other marketing material providing that they are marking it under that agents name who purchased the photography/videography from us. Our licenses are good for the life time of the agent. The agent may not sell, transfer or giveaway the photographs or video to anyone else what so ever without our express written permission. If you wish to purchase a license to a tour that was shot by us for the previous listing agent, you must first have that agent email us saying that they give you permission to use the tour. You will be charged for what the previous agent paid for the tour minus 50%, i.e. if the tour cost $280 you will be charged $140.</p>
                        <p class="bold">Payment Processing:</p>
                        <p class="lines">The processing of your card for payment is at our sole discretion. You shall at all times maintain a credit card on file with us that is valid to pay for any tours you have ordered. Valid means that it has not been cancelled or revoke by the bank for any reason and valid also means having the current billing address. Our merchant requires us to enter a valid billing address in order to process your card payment so you must notify us upon changing your billing address. If your credit card is declined we will email you and request updated payment information. If you do not update your payment information after we have made 3 requests, we will consider that it is your intent not to pay for your order(s). We track all emails so that we know if the agent has received and opened these emails. Non-payment of a home tour is a copyright infringement as you have not yet licensed the photos or home tour from us. At this point, your account will be suspended and none of your tours will function. We will report the copyright infringement to your local MLS and Realtor.com board and demand that the photos and tours be removed from their websites. The notice will also be sent to you demanding that we received full payment for the tour. If we do not receive payment within 5 days, we will proceed with legal action. If we have to process with legal action, an additional $500 will be due for initial attorney fees. We may also place a lien on the property for what is owed on your account.</p>
                        <p class="bold">Right to Lien any and all Properties:</p>
                        <p class="lines">You agree that when you place an order for a tour, you have notified the owner that they are giving Hometakes the right to lien their property for any outstanding balance owed to Hometakes on the agents account. This means any balance owed for any and all properties to which we have filmed a tour for that agent account. As soon as payment is satisfied and the agents account has been brought into good standing, any liens in place will be removed from any property or properties. We will not be held liable for any sale that may fall through on a home due. The agent indemnifies Hometakes from any and all liability should this occur.</p>
                        <p class="bold">Cancellations or re-scheduling:</p>
                        <p class="lines">Cancellations or rescheduling of appointments must be made 18 hrs. before the appointment time or a $30 cancellation fee (per tour if multiple appointments are scheduled) will automatically be applied to your account. Sorry we cannot make exceptions. The time limit is reduced to 1 hour notice before the appointment if you took the ‘Cancelation Insurance’ option at the time of your order.</p>
                        <p class="bold">Operations Guide:</p>
                        <p class="lines">When you created a new account with us, a link to download the operations guide in PDF format is sent upon us or you setting up your account. You agree to follow the policies and procedures in that guide.</p>
                        <p class="bold">Our Arrival and No shows:</p>
                        <p class="lines">The videographer must depart if you are not at the property at the scheduled appointment time. Calling us to say that you are on your way wont reverse time. To maintain our schedule for the next appointment, we we will not allow our previous appointment to make us late to the next appointment. A $30 no show/rescheduling fee will automatically be applied to your account. Please understand that the time allotted for the appointment is sufficient enough to allows us for us to film the property and have you review the photos and nothing more. If the agent or representative of the agent does not have the property ready when the videographer arrives and time runs short, you will forfeit your photo review rights. It may lead to having to reschedule the shoot and you will be subject to a reschedule fee. It is the responsibly of the agent (or representative) if the property is located in a guard gated community to clear Hometakes through the gate. If there is a time delay due to Hometakes not having clearance at the gate or a gate code for non-guarded communities was not given with your order, the time delay will be treated as a 'late show'.</p>
                        <p class="bold">Weather:</p>
                        <p class="lines">On the day of the appointment if the weather is overcast or raining, the appointment will not be cancelled. Rainy weather will not affect the filming of the interior shots (refer to video below). If it is physically raining when the camera person needs to take the exterior shots, we will come back and shoot the exterior as soon as we have an opening. The agent nor the owner has to be at the property for a reshoot. If you opted for "Cancelation Insurance” exterior photos will have blue photoshopped skies (except within screened enclosures) or you may choose to re-schedule your appointment through your account up to 1 hour prior to your appointment time.</p>
                        <p>
                            <video width="auto" height="240" controls>
                                <source src="videos/sample1.mov" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </p>
                        <p class="bold">Staged property:</p>
                        <p class="lines">Agent or owner agrees that the property will be ready at the scheduled date and time is in staged condition. Staged conditions means: ALL lighting should be switched on, TV's turned on (sound can be off), gas fireplaces lit, pillows fluffed, window treatments and blinds should be drawn open, storm shutters completely removed or open, patio or pool furniture appropriately placed, pool fences be removed, etc. If due to the fact that the property is not ready, because of staging or having to work around other people such as contractors, maids etc., will have to leave upon reaching the allotted time (for the tour appointment) as we cannot be late for their next agents appointment. If there is no another appointment set after your appointment and we can continue completing the photography/videography (etc.) an overage of time of $50 per hour or part there-of will added as an upgrade to the tour.</p>
                        <p class="bold">Showcase Video Package:</p>
                        <p class="lines">Up to 20 Video Scenes will be filmed at the discretion of the videographer unless otherwise directed by the agent or agents representative. Ordering of extra scenes can be made at the property through the videographer.</p>
                        <p class="bold">Flythrough 13 Package orders (with 8 scenes):</p>
                        <p class="lines">If you chose a Flythrough 13 package tour with 8 video scenes the following scenes will be filmed unless you tell the videographer otherwise: Front Elevation, Living area or great room area, Kitchen, Family room area, Dining area, Master bedroom, Pool/patio area & view shot. Walkings shots footage is included in the package and is not considered a scene. If time permits, you may add additional video scenes (or plus and premium aerial photos option) to your tour on the day of the shoot.</p>
                        <p class="bold">Yearly licensing on town and amenity video tours for single agents and brokerages:</p>
                        <p class="lines">Yearling licensing of any town or amenity tour video package will automatically renew at the end of the time limit. Unless we receive written cancellation 14 days BEFORE the renewal your renewal will take place. We require this 14 day period so that we may make preparations to take down the videos on the day of expiration. Once renewal has taken place, there can be no refunds (not even pro-ration of time not used) due to the nature of the product. Licensed tours can only be served on our servers and are not to be copied or reproduced in any other way. They can only be served on Real Estate websites owned and registered by the agent or company purchasing the license. We are extremely serious with enforcing these terms, and will pursue copyright infringement to the fullest extent of the law, not only civilly but criminally too.</p>
                        <p class="bold">Amenity and town photo licensing Single Agents lifetime license:</p>
                        <p class="lines">Amenity or town photos for the individual agent come with a lifetime license for THAT AGENT ONLY. The photos will be watermarked with the following: 'licensed to [name of agent] © Hometakes'. The watermark is not permitted to be removed under any circumstance. Removal of it will constitute a violation of the 'terms of license' and will be subject to revocation of all licenses without refund. An agent cannot re-sell or give away the use of the photos to anyone else.</p>
                        <p class="bold">Release of original 'home tour' video file:</p>
                        <p class="lines">The release of the original 'home tour' video file is by no means a release of copyright of the video. We provide this file to you for the sole purpose of uploading the video to your social networking video channels such as YouTube and Facebook.</p>
                        <p class="bold">Credit Card on file:</p>
                        <p class="lines">You agree that the credit card on file (stored in our system or an authorization form that is on file with us) can be charged for any cancellations that were not made at least 18 hrs. before the scheduled appointment. You agree that charges for any upgrades (either verbally or written) that were not ordered through our ordering system will be automatically added to your credit card.</p>
                        <p class="bold">Maintaining an account and Video Hosting:</p>
                        <p class="lines">Your videos are hosted on your video template providing you maintain an account with us. Maintaining an account requires that you order a minimum of 1 tour every 365 days. We cannot restore deleted accounts once deleted as all information is lost once deleted. Videos are hosted for the first year on Hometakes Vimeo account after which it will be hosted from our youtube account. Our youtube account allows comments, liking (thumbs up or down) sharing and advertisements. If you want to add an additional year of non-youtube hosting on a particular video, just email us the property address of the home tour and we will re-host it for an additional year on an ad free server. Your account will be charged $10.</p>
                        <p class="bold">Payment:</p>
                        <p class="lines">Once payment has been received and a property is filmed, refunds or partial refunds will not be made. Refunds can only be issued to the credit card that was originally charged.</p>
                        <p class="bold">Refunds:</p>
                        <p class="lines">If you request a refund due to our product not meeting the standards as seen by the samples on our <a href="https://www.hometakes.com/index.php" target="_blank">hometakes.com</a> web site, you are agreeing to give hometakes the opportunity to correct any part of the product that did not meet these standards including coming back to the property to re-shoot anything (if necessary). If we fail to correct any part of the product to these standards on the second attempt, you may request a refund for that portion of the tour (i.e. video not up to standard, then video portion refunded). A full refund will not be issued if other parts of the tour are up to the standards as seen on our website. Please understand that all of the costs involved to produce our product involves labor. Our product is not a physical product that can be returned to the manufacturer due to a faulty part. It is all labour and the only way it can be measured as 'faulty' is to compare it to our samples on our website. Our experience has been that most refund requests are made due to the sellers expectations being higher than the agents expectations. This is because of the fact that the seller isn't the one ordering the tour and did not know what to expect. We cannot give refunds because your seller was expecting something different from the tour you saw and ordered from our website. We strongly suggest that you direct your sellers to our website prior to placing any order with us so that they know the standard of product that they will be receiving from you.</p>
                        <p class="bold">Non-Payment and account termination:</p>
                        <p class="lines">We reserve the right to refuse any order for a tour or product. Non-payment for a tour may result in your account being terminated. If termination occurs, all videos in your account will no longer play on our servers due to account termination.</p>
                        <p class="bold">Email:</p>
                        <p class="lines">We reserve the right to publish to the web any email or part thereof that we receive from the agent or their representative that contains any form of compliment. We may use these on any blog, testimonial or any other website. We will however only use your first name should we publish any content from such emails.</p>
                        <p class="lines">You agree that you will receive promotional and informational emails from Hometakes to the email address that you signed up when creating your account and any added email address that you enter at a later date or any email that we receive in relation to your account with us.</p>
                        <p class="bold">Intellectual Property Rights and Logos:</p>
                        <p class="lines">Per the Policies and Conditions of our website, Hometakes holds all intellectual and copyright property rights on all photos and videos produced. You agree that you will not removed any logos from the videos (or photos if applicable). The removal of our Hometakes intro Logo is by no means a release of our copyright.</p>
                        <p class="bold">Changed Terms:</p>
                        <p class="lines">Hometakes reserves the right at any time to change or modify the terms and conditions applicable to the use of this site, or any part thereof, or to impose new conditions, including, without limitation, fees and charges. Such changes, modifications, additions or deletions shall be effective immediately after posting new terms on the ordering page of our website.</p>
                        <p class="lines">We also reserve the right not to distribute any part of the product until the balance of any payments (possible additions to your order) have been paid in full. We may disconnect any and all previous tours if there is a balance on a tour or product that has not been paid due to a credit card that has been declined or due to an on going credit card dispute for any reason what so ever.</p>
                        <p class="lines">In no event shall we be held responsible for any damages to the property for any reason what-so-ever. Aggregate liability for any claim is limited to the amount paid for a tour.</p>
                        <p class="lines">All rights regarding production and products, final or in part are solely the property of Hometakes™, Hometakes.com™ and Sun land Holdings, LLC. Unless waived by written consent & release by any of the above entities, no media or product may be copied/reproduced, republished, transmitted, displayed, broadcast or otherwise exploited in any manner. All videos are served through our servers and permission is not granted for use through any other server with the exception of video media and social networking websites such as Youtube and Facebook except for the purchase of the original video file. Copyright infringement is a felony offense and is punishable by up to 5 years in prison and a $250,000 fine under federal law. We pursue all copyright infringements to the full extent of the law.</p>
                        <p class="bold">Hold Harmless Agreement for Aerial Drone footage:</p>
                        <p class="lines">This HOLD HARMLESS AGREEMENT is made effective on the date of the account holders first order by and between Hometakes, of 4175 Main Street, Palm Beach Gardens, 33458, and the account holder and will continue to the end of time. Hometakes and the account holder sometimes individually referred to as "Party" and collectively referred to as "Parties"</p>
                        <p class="lines">WHEREAS, the account holder desires to hold harmless Hometakes from any claims and/or litigation, fines arising out of the FAA or NTSB's actions in connection with any Aerial Drone footage that appears on their order or an upgrade on the day of the shoot. NOW THEREFORE, in consideration of the mutual covenants and conditions contained herein, Hometakes and the account holder hereby agree as follows:</p>
                        <p class="bold">TERMS:</p>
                        <p class="lines">1. Hold Harmless. The account holder shall fully defend, indemnify, and hold harmless Hometakes from any and all claims, lawsuits, demands and/or injury, of any kind whatsoever (including without limitation all claims for monetary loss, property damage, equitable relief, personal injury and/or wrongful death), whether brought by an individual or other entity, or imposed by a court of law or by administrative action action of any federal, state, or local governmental body or agency arising out of, in any way whatsoever, any acts, omissions, negligence, or willful misconduct on the part of Hometakes, its officers, owners, personnel employees or sub-contractors. This indemnification applies to and includes, without limitation, the payment of all penalties, fines, judgments, awards, decrees, attorneys fees, and related costs or expenses, and any reimbursements to Hometakes for all legal fees, expenses, and costs incurred by it.
                        </p>
                        <p class="lines">2. Authority to Enter Agreement. Each Party warrants that the individuals who have signed this agreement have the actual legal power, right, and authority to make this agreement and bind each respective party.</p>
                        <p class="lines">3. Amendment; Modification. No supplement, modification, or amendment of this Agreement shall be binding unless executed in writing and signed by both parties.</p>
                        <p class="lines">4. Waiver. No waiver of any default shall constitute a waiver of any other default or breach, whether of the same or other covenant or condition. No waiver, benefit, privilege, or service voluntarily give or performed by a party shall give the other party any contractual right by custom, estoppel, or otherwise.</p>
                        <p class="lines">5. Attorneys' Fees and Costs. If any legal action or other proceeding is brought in connection with this Agreement, the successful or prevailing Party, if any, shall be entitled to recover reasonable attorneys' fees and other related costs, in addition to any other relief to which that Party is entitled. In the event that it is the subject of dispute, the court or trier of fact who presides over such legal action or proceeding is empowered to determine which Party, if any, is the prevailing party in accordance with this provision.</p>
                        <p class="lines">6. Entire Agreement. This Agreement contains the entire agreement between the Parties related to the matters specified herein, and supersedes any prior oral or written statements or agreements between the Parties related to such matters.</p>
                        <p class="lines">7. Enforceability, Severability, and Reformation, If any provision of this Agreement shall be held to be invalid or unenforceable for any reason, the remaining provisions shall continue to be valid and enforceable. If a court finds that any provision of this Agreement is invalid or unenforceable, but that by limiting such provision it would become valid and enforceable, then such provision shall be deemed to be written, construed, and enforced as so limited. Parties is to provide as broad an indemnification as possible under state law. In the event that any aspect of this Agreement is deemed unenforceable, the court is empowered to modify this Agreement to give the broadest possible interpretation permitted under state law.</p>
                        <p class="lines">8. Applicable Law. This Agreement shall be governed exclusively by the laws of Florida, without regard to conflict of law provisions.</p>
                        <p class="lines">9. Exclusive Venue and Jurisdiction. Any lawsuit of legal proceeding arising out of or relating to this Agreement in any way whatsoever shall be exclusively brought and litigated in the federal and state courts of Florida. Each party expressly consents and submits to this exclusive jurisdiction and exclusive venue. Each Party expressly waives the right to challenge this jurisdiction and/or venue as improper or inconvenient. Each party consents to the dismissal of any lawsuit that they bring in any other jurisdiction or venue.</p>
                        <p class="lines">10. Signature. Submitting an order will constitute an as an authorized signature of the account holder for the first and future orders of package options that include free Aerial Drone footage . Upgrading to packages that include free Aerial footage on the day of the shoot by the account holder or any representative that the account holder sends in place of themselves also constitutes agreement to this Agreement.</p>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

    </div>{{-- /.row--}}   
</div>

@endsection

@section('script')
<script>
//checked box with functionality of radio button for premmier package
$('.hostingcheckbox_premier').change(function(){
    $('.hostingcheckbox_premier').prop('checked', false);
    $(this).prop('checked', true);
    checkTotalPremier();
  });
// For showcase package
$('.hostingcheckbox_showcase').change(function(){
    $('.hostingcheckbox_showcase').prop('checked', false);
    $(this).prop('checked', true);
    checkTotalShowcase();
});
//For Flythrough However Many package
$('.hostingcheckbox_flythrough').change(function(){
    $('.hostingcheckbox_flythrough').prop('checked', false);
    $(this).prop('checked', true);
    checkTotalFlythrough();
});
//For Flythrough 20 package
$('.hostingcheckbox_flythrough20').change(function(){
    $('.hostingcheckbox_flythrough20').prop('checked', false);
    $(this).prop('checked', true);
    checkTotalFlythrough20();
});
//For Flythrough 13 package
$('.hostingcheckbox_flythrough13').change(function(){
    $('.hostingcheckbox_flythrough13').prop('checked', false);
    $(this).prop('checked', true);
    checkTotalFlythrough13();
});
//For However many photos
$('.hostingcheckbox_howevermanyphotos').change(function(){
    $('.hostingcheckbox_howevermanyphotos').prop('checked', false);
    $(this).prop('checked', true);
    checkTotalHoweverManyPhotos();
});
//For 3D Tour package
$('.hostingcheckbox_3dtour').change(function(){
    $('.hostingcheckbox_3dtour').prop('checked', false);
    $(this).prop('checked', true);
});

$(document).ready(function(){
  $("#hide1").click(function(){
    $("#collapseNested1").hide();
    $("#CollapsedRow1").show();
  });
  $("#show1").click(function(){
    $("#CollapsedRow1").hide();
    $("#collapseNested1").show();
  });

  $("#hide2").click(function(){
    $("#collapsedNested2").hide();
    $("#CollapsedRow2").show();
  });
  $("#show2").click(function(){
    $("#CollapsedRow2").hide();
    $("#collapsedNested2").show();
  });

  $("#hide3").click(function(){
    $("#collapsedNested3").hide();
    $("#CollapsedRow3").show();
  });
  $("#show3").click(function(){
    $("#CollapsedRow3").hide();
    $("#collapsedNested3").show();
  });

  $("#hide4").click(function(){
    $("#collapsedNested4").hide();
    $("#CollapsedRow4").show();
  });
  $("#show4").click(function(){
    $("#CollapsedRow4").hide();
    $("#collapsedNested4").show();
  });

  $("#hide5").click(function(){
    $("#collapsedNested5").hide();
    $("#CollapsedRow5").show();
  });
  $("#show5").click(function(){
    $("#CollapsedRow5").hide();
    $("#collapsedNested5").show();
  });

  $("#hide6").click(function(){
    $("#collapsedNested6").hide();
    $("#CollapsedRow6").show();
  });
  $("#show6").click(function(){
    $("#CollapsedRow6").hide();
    $("#collapsedNested6").show();
  });

  $("#hide7").click(function(){
    $("#collapsedNested7").hide();
    $("#CollapsedRow7").show();
  });
  $("#show7").click(function(){
    $("#CollapsedRow7").hide();
    $("#collapsedNested7").show();
  });

  $("#hide8").click(function(){
    $("#collapsedNested8").hide();
    $("#CollapsedRow8").show();
  });
  $("#show8").click(function(){
    $("#CollapsedRow8").hide();
    $("#collapsedNested8").show();
  });

  $("#hide9").click(function(){
    $("#collapsedNested9").hide();
    $("#CollapsedRow9").show();
  });
  $("#show9").click(function(){
    $("#CollapsedRow9").hide();
    $("#collapsedNested9").show();
  });

  $("#hide10").click(function(){
    $("#collapsedNested10").hide();
    $("#CollapsedRow10").show();
  });
  $("#show10").click(function(){
    $("#CollapsedRow10").hide();
    $("#collapsedNested10").show();
  });

  $("#hide11").click(function(){
    $("#collapsedNested11").hide();
    $("#CollapsedRow11").show();
  });
  $("#show11").click(function(){
    $("#CollapsedRow11").hide();
    $("#collapsedNested11").show();
  });

});

function checkTotalPremier() {
    var sum = 0;
    checkBoxArray = [];

    $('.checkbox_premier:checkbox:checked').each(function(){
      var checkedVal = $(this).val();
      checkBoxArray.push(checkedVal);
    });

    for (i = 0; i < checkBoxArray.length; i++) {
      sum += parseInt(checkBoxArray[i]);
    }

    sum += 599;

    $('#total_premier').val('$'+ sum + '.00');
};

function checkTotalShowcase(){
    var sum = 0;
    checkBoxArray = [];

    $('.checkbox_showcase:checkbox:checked').each(function(){
      var checkedVal = $(this).val();
      checkBoxArray.push(checkedVal);
    });

    for (i = 0; i < checkBoxArray.length; i++){
        sum += parseInt(checkBoxArray[i]);
    }

    sum += 449;

    $('#total_showcase').val('$'+ sum + '.00');
}

function checkTotalFlythrough(){
    var sum = 0;
    checkBoxArray = [];

    $('.checkbox_flythrough:checkbox:checked').each(function(){
      var checkedVal = $(this).val();
      checkBoxArray.push(checkedVal);
    });

    for (i = 0; i < checkBoxArray.length; i++){
        sum += parseInt(checkBoxArray[i]);
    }

    sum += 349;

    $('#total_flythrough').val('$'+ sum + '.00');
};

function checkTotalFlythrough20(){
    var sum = 0;
    checkBoxArray = [];

    $('.checkbox_flythrough20:checkbox:checked').each(function(){
      var checkedVal = $(this).val();
      checkBoxArray.push(checkedVal);
    });

    for (i = 0; i < checkBoxArray.length; i++){
        sum += parseInt(checkBoxArray[i]);
    }

    sum += 269;

    $('#total_flythrough20').val('$'+ sum + '.00');

};

function checkTotalFlythrough13(){
    var sum = 0;
    checkBoxArray = [];

    $('.checkbox_flythrough13:checkbox:checked').each(function(){
      var checkedVal = $(this).val();
      checkBoxArray.push(checkedVal);
    });

    for (i = 0; i < checkBoxArray.length; i++){
        sum += parseInt(checkBoxArray[i]);
    }

    sum += 199;

    $('#total_flythrough13').val('$'+ sum + '.00');
}

function checkTotalHoweverManyPhotos(){
    var sum = 0;
    checkBoxArray = [];

    $('.checkbox_howevermanyphotos:checkbox:checked').each(function(){
      var checkedVal = $(this).val();
      checkBoxArray.push(checkedVal);
    });

    for (i = 0; i < checkBoxArray.length; i++){
        sum += parseInt(checkBoxArray[i]);
    }

    sum += 175;

    $('#total_howevermanyphotos').val('$'+ sum + '.00');
}

function checkTotalVideoOnly10(){
    sum = 0;
    checkBoxArray = [];

    $('.checkbox_videoonly10:checkbox:checked').each(function(){
      var checkedVal = $(this).val();
      checkBoxArray.push(checkedVal);
    });

    for (i = 0; i < checkBoxArray.length; i++){
        sum += parseInt(checkBoxArray[i]);
    }

    sum += 175;

    $('#total_videoonly10').val('$'+ sum + '.00');
}

function checkTotalAerials(){
    sum = 0;
    checkBoxArray = [];

    $('.checkbox_aerials:checkbox:checked').each(function(){
      var checkedVal = $(this).val();
      checkBoxArray.push(checkedVal);
    });

    for (i = 0; i < checkBoxArray.length; i++){
        sum += parseInt(checkBoxArray[i]);
    }

    sum += 149;

    $('#total_aerials').val('$'+ sum + '.00');
}

function checkTotalVideoOnly8(){
    sum = 0;
    checkBoxArray = [];

    $('.checkbox_videoonly8:checkbox:checked').each(function(){
      var checkedVal = $(this).val();
      checkBoxArray.push(checkedVal);
    });

    for (i = 0; i < checkBoxArray.length; i++){
        sum += parseInt(checkBoxArray[i]);
    }

    sum += 145;

    $('#total_videoonly8').val('$'+ sum + '.00');
}

function checkTotalPhotoOnly(){
    sum = 0;
    checkBoxArray = [];

    $('.checkbox_photoonly:checkbox:checked').each(function(){
      var checkedVal = $(this).val();
      checkBoxArray.push(checkedVal);
    });

    for (i = 0; i < checkBoxArray.length; i++){
        sum += parseInt(checkBoxArray[i]);
    }

    sum += 129;

    $('#total_photoonly').val('$'+ sum + '.00');
}

function checkTotalTour(){
    sum = 0;
    checkBoxArray = [];

    $('.checkbox_tour:checkbox:checked').each(function(){
      var checkedVal = $(this).val();
      checkBoxArray.push(checkedVal);
    });

    for (i = 0; i < checkBoxArray.length; i++){
        sum += parseInt(checkBoxArray[i]);
    }

    sum += 199;

    $('#total_tour').val('$'+ sum + '.00');
}

// $( function() {
//     $( "#datepicker" ).datepicker();
//     $( "#datepicker1" ).datepicker();
//     $( "#datepicker2" ).datepicker();
// } );

</script>
@endsection

