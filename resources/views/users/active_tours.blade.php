@extends('main.index')

@section('css')
<style>
    /*
*
* ==========================================
* CUSTOM UTIL CLASSES
* ==========================================
*
*/
/* Horizontal line */
.collapsible-link::before {
  content: '';
  width: 14px;
  height: 2px;
  background: #333;
  position: absolute;
  top: calc(50% - 1px);
  right: 1rem;
  display: block;
  transition: all 0.3s;
}

/* Vertical line */
.collapsible-link::after {
  content: '';
  width: 2px;
  height: 14px;
  background: #333;
  position: absolute;
  top: calc(50% - 7px);
  right: calc(1rem + 6px);
  display: block;
  transition: all 0.3s;
}

.collapsible-link[aria-expanded='true']::after {
  transform: rotate(90deg) translateX(-1px);
}

.collapsible-link[aria-expanded='true']::before {
  transform: rotate(180deg);
}


/*
*
* ==========================================
* FOR DEMO PURPOSES
* ==========================================
*
*/
/* body {
  background: #dd5e89;
  background: -webkit-linear-gradient(to left, #dd5e89, #f7bb97);
  background: linear-gradient(to left, #dd5e89, #f7bb97);
  min-height: 100vh;
} */

button{
    margin:5px;
}
.mar10{
  margin:10px;
}


</style>
@endsection

@section('content')
<div class="container">
    <div class="row">
      <div class="container">
          <div class="row py-5">
            <div class="col-lg-9 mx-auto text-white text-center">
              <h1 class="display-4 clr">Active Tours</h1>
              {{-- <p class="lead mb-0">Using Bootstrap 4 card component, build a vertical accrodion with up & down chevrons.</p>
              <p class="lead">Snippet by
                <a href="https://bootstrapious.com/snippets" class="text-white">
                  <u>Bootstrapious</u>
                </a>
              </p> --}}
            </div>
          </div>
          <div class="col-lg-12 mx-auto">
            <!-- Accordion -->
            <div id="accordionExample" class="accordion shadow">
              <!-- Accordion item 1 -->
              <div class="card">
                <div id="headingOne" class="card-header bg-white shadow-sm border-0">
                  <h6 class="mb-0 font-weight-bold"><a href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne" class="d-block position-relative text-dark text-uppercase collapsible-link py-2 text-center">3D Tour #1</a></h6>
                </div>
                <div id="collapseOne" aria-labelledby="headingOne" data-parent="#accordionExample" class="collapse">
                  <div class="card-body p-5">
                    <div class="row">
                      <div class="col-md-12"> 
                        <p style="text-align:right"><strong>Filming Date:</strong> 2017 1st April</p> 
                      </div>
                      <div class="col-md-12 text-center">
                          <button class="btn btn-lg btn-primary" data-toggle="tooltip" data-placement="top" title="If you are a Showcase member of Realtor.com, We will upload you tour link. PLease check that the street, city, state & aip that you entered into MLS is exactly the same as to what if to the left. If it is not, our portal to upload it to Realtor.com will not find the listing and your tour won't be uploaded"><span data-toggle="modal" data-target="#updateMLS">Update MLS # </span>
                          </button>
                      </div>
                      <div class="col-md-12 text-center">
                          <button class="btn btn-lg btn-primary">Photo Download Instructions.</button>
                      </div>
                      <div class="col-md-12 text-center">
                        <button class="btn btn-success btn-block" data-toggle="tooltip" data-placement="top" title="To copy the tour link, simply click this button and a new tab will open to the Agent Branded Tour. From here you can copy the link from the browsers URL." >Website Template - Agent Branded Tour</button>
                      </div>
                      <div class="col-md-12">
                        <button class="btn btn-secondary btn-block" data-toggle="tooltip" data-placement="top" title="To copy the tour link, simply click this button and a new tab will open to the MLS Non-Branded Tour. From here you can copy the link from the browsers URL." >Website Template - MLS 'No Agent' Branding</button>
                      </div>
                      <div class="col-md-12">
                        <button class="btn btn-success btn-block" data-toggle="tooltip" data-placement="top" title="To copy the tour link, simply click this button and a new tab will open to the Agent Branded Tour. From here you can copy the link from the browsers URL." >Modern Template - Agent Branded Tour</button>
                      </div>
                      <div class="col-md-12">
                        <button class="btn btn-secondary btn-block" data-toggle="tooltip" data-placement="top" title="To copy the tour link, simply click this button and a new tab will open to the MLS Non-Branded Tour. From here you can copy the link from the browsers URL." >Modern Template - MLS 'No Agent' Branding</button>
                      </div>
                      <div class="col-md-12">
                        <button class="btn btn-success btn-block" data-toggle="tooltip" data-placement="top" title="To copy the tour link, simply click this button and a new tab will open to the Agent Branded Tour. From here you can copy the link from the browsers URL." >Classic Template - Agent Branded Tour</button>
                      </div>

                      <div class="col-md-12">
                        <a class="btn btn-secondary btn-block" data-toggle="tooltip" data-placement="top" title="To copy the tour link, simply click this button and a new tab will open to the MLS Non-Branded Tour. From here you can copy the link from the browsers URL." >Classic Template - MLS 'No Agent' Branding</a>
                      </div>
                      <br><br><br><br>
                      <div class="col-md-12">
                        <h5 class="clr">Additional property information (auto-saving)</h5>
                      </div>
                      <br><br>
                      <div class="col-md-2 mar10">
                        <label for="bedrooms">Bedrooms:</label>
                        <input type="text" id="bedrooms" class="form-control" name="bedrooms" value="" placeholder="Not Required">
                      </div>
                      <div class="col-md-2 mar10">
                        <label for="hbaths">Half Baths:</label>
                        <input type="text" id="hbaths" class="form-control" name="hbaths" value="" placeholder="Not Required">
                      </div>
                      <div class="col-md-2 mar10">
                          <label for="baths">Full Baths:</label>
                          <input type="text" id="baths" class="form-control" name="baths" value="" placeholder="Not Required">
                      </div>
                      <div class="col-md-2 mar10">
                          <label for="sqfeet">Square Feet:</label>
                          <input type="text" id="sqfeet" class="form-control" name="sqfeet" value="" placeholder="Not Required">
                      </div>
                      <div class="col-md-2 mar10">
                          <label for="price">Price:</label>
                          <input type="text" id="price" class="form-control" name="price" value="" placeholder="Not Required">
                      </div>
                      <div class="col-md-12 mar10">
                        <label for="hbaths">Property Title (auto-saving):</label>
                        <input type="text" id="hbaths" class="form-control" name="hbaths" value="" placeholder="Video Only"> 
                      </div>
                      <div class="col-md-12 mar10">
                        <label for="hbaths">Property description (auto-saving):</label>
                        <textarea rows="4" cols="50" name="comment" class="form-control" value="" placeholder="Video Only"> </textarea>
                      </div>
                      <div class="col-md-12 mar10">
                        <label for="hbaths">Select Property Status (auto-saving):</label>
                        <input type="text" id="hbaths" class="form-control" name="hbaths" value="" placeholder="Video Only"> 
                      </div>
                    </div>
                    
                    {{-- <p class="font-weight-light m-0">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.</p> --}}
                  </div>
                </div>
              </div>
      
              <!-- Accordion item 2 -->
              <div class="card">
                <div id="headingTwo" class="card-header bg-white shadow-sm border-0">
                  <h6 class="mb-0 font-weight-bold"><a href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" class="d-block position-relative collapsed text-dark text-uppercase collapsible-link py-2 text-center">Photos Only #1</a></h6>
                </div>
                <div id="collapseTwo" aria-labelledby="headingTwo" data-parent="#accordionExample" class="collapse">
                  <div class="card-body p-5">
                    <div class="row">
                      <div class="col-md-12">
                        <p style="text-align:right"><strong>Filming Date:</strong> 2017 1st April</p> 
                      </div>
                      <div class="col-md-12 text-center">
                          <button class="btn btn-lg btn-primary" data-toggle="tooltip" data-placement="top" title="If you are a Showcase member of Realtor.com, We will upload you tour link. PLease check that the street, city, state & aip that you entered into MLS is exactly the same as to what if to the left. If it is not, our portal to upload it to Realtor.com will not find the listing and your tour won't be uploaded">Update MLS # </button>
                      </div>
                      <div class="col-md-12 text-center">
                          <button class="btn btn-lg btn-primary">Photo Download Instructions.</button>
                      </div>
                      <div class="col-md-12 text-center">
                        <button class="btn btn-success btn-block" data-toggle="tooltip" data-placement="top" title="To copy the tour link, simply click this button and a new tab will open to the Agent Branded Tour. From here you can copy the link from the browsers URL." >Website Template - Agent Branded Tour</button>
                      </div>
                      <div class="col-md-12">
                        <button class="btn btn-secondary btn-block" data-toggle="tooltip" data-placement="top" title="To copy the tour link, simply click this button and a new tab will open to the MLS Non-Branded Tour. From here you can copy the link from the browsers URL." >Website Template - MLS 'No Agent' Branding</button>
                      </div>
                      <div class="col-md-12">
                        <button class="btn btn-success btn-block" data-toggle="tooltip" data-placement="top" title="To copy the tour link, simply click this button and a new tab will open to the Agent Branded Tour. From here you can copy the link from the browsers URL." >Modern Template - Agent Branded Tour</button>
                      </div>
                      <div class="col-md-12">
                        <button class="btn btn-secondary btn-block" data-toggle="tooltip" data-placement="top" title="To copy the tour link, simply click this button and a new tab will open to the MLS Non-Branded Tour. From here you can copy the link from the browsers URL." >Modern Template - MLS 'No Agent' Branding</button>
                      </div>
                      <div class="col-md-12">
                        <button class="btn btn-success btn-block" data-toggle="tooltip" data-placement="top" title="To copy the tour link, simply click this button and a new tab will open to the Agent Branded Tour. From here you can copy the link from the browsers URL." >Classic Template - Agent Branded Tour</button>
                      </div>

                      <div class="col-md-12">
                        <button class="btn btn-secondary btn-block" data-toggle="tooltip" data-placement="top" title="To copy the tour link, simply click this button and a new tab will open to the MLS Non-Branded Tour. From here you can copy the link from the browsers URL." >Classic Template - MLS 'No Agent' Branding</button>
                      </div>
                      <br><br><br><br>
                      <div class="col-md-12">
                        <h5 class="clr">Additional property information (auto-saving)</h5>
                      </div>
                      <br><br>
                      <div class="col-md-2 mar10">
                        <label for="bedrooms">Bedrooms:</label>
                        <input type="text" id="bedrooms" class="form-control" name="bedrooms" value="" placeholder="Not Required">
                      </div>
                      <div class="col-md-2 mar10">
                        <label for="hbaths">Half Baths:</label>
                        <input type="text" id="hbaths" class="form-control" name="hbaths" value="" placeholder="Not Required">
                      </div>
                      <div class="col-md-2 mar10">
                          <label for="baths">Full Baths:</label>
                          <input type="text" id="baths" class="form-control" name="baths" value="" placeholder="Not Required">
                      </div>
                      <div class="col-md-2 mar10">
                          <label for="sqfeet">Square Feet:</label>
                          <input type="text" id="sqfeet" class="form-control" name="sqfeet" value="" placeholder="Not Required">
                      </div>
                      <div class="col-md-2 mar10">
                          <label for="price">Price:</label>
                          <input type="text" id="price" class="form-control" name="price" value="" placeholder="Not Required">
                      </div>
                      <div class="col-md-12 mar10">
                        <label for="hbaths">Property Title (auto-saving):</label>
                        <input type="text" id="hbaths" class="form-control" name="hbaths" value="" placeholder="Video Only"> 
                      </div>
                      <div class="col-md-12 mar10">
                        <label for="hbaths">Property description (auto-saving):</label>
                        <textarea rows="4" cols="50" name="comment" class="form-control" value="" placeholder="Video Only"> </textarea>
                      </div>
                      <div class="col-md-12 mar10">
                        <label for="hbaths">Select Property Status (auto-saving):</label>
                        <input type="text" id="hbaths" class="form-control" name="hbaths" value="" placeholder="Video Only"> 
                      </div>
                    </div>
                    
                    {{-- <p class="font-weight-light m-0">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.</p> --}}
                  </div>
                </div>
              </div>
      
              <!-- Accordion item 3 -->
              <div class="card">
                <div id="headingThree" class="card-header bg-white shadow-sm border-0">
                  <h6 class="mb-0 font-weight-bold"><a href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" class="d-block position-relative collapsed text-dark text-uppercase collapsible-link py-2 text-center">Video Only #1</a></h6>
                </div>
                <div id="collapseThree" aria-labelledby="headingThree" data-parent="#accordionExample" class="collapse">
                  <div class="card-body p-5">
                    <div class="row">
                      <div class="col-md-12">
                        <p style="text-align:right"><strong>Filming Date:</strong> 2017 1st April</p> 
                      </div>
                      <div class="col-md-12 text-center">
                          <button class="btn btn-lg btn-primary" data-toggle="tooltip" data-placement="top" title="If you are a Showcase member of Realtor.com, We will upload you tour link. PLease check that the street, city, state & aip that you entered into MLS is exactly the same as to what if to the left. If it is not, our portal to upload it to Realtor.com will not find the listing and your tour won't be uploaded">Update MLS # </button>
                      </div>
                      <div class="col-md-12 text-center">
                          <button class="btn btn-lg btn-primary">Photo Download Instructions.</button>
                      </div>
                      <div class="col-md-12 text-center">
                        <button class="btn btn-success btn-block" data-toggle="tooltip" data-placement="top" title="To copy the tour link, simply click this button and a new tab will open to the Agent Branded Tour. From here you can copy the link from the browsers URL." >Website Template - Agent Branded Tour</button>
                      </div>
                      <div class="col-md-12">
                        <button class="btn btn-secondary btn-block" data-toggle="tooltip" data-placement="top" title="To copy the tour link, simply click this button and a new tab will open to the MLS Non-Branded Tour. From here you can copy the link from the browsers URL." >Website Template - MLS 'No Agent' Branding</button>
                      </div>
                      <div class="col-md-12">
                        <button class="btn btn-success btn-block" data-toggle="tooltip" data-placement="top" title="To copy the tour link, simply click this button and a new tab will open to the Agent Branded Tour. From here you can copy the link from the browsers URL." >Modern Template - Agent Branded Tour</button>
                      </div>
                      <div class="col-md-12">
                        <button class="btn btn-secondary btn-block" data-toggle="tooltip" data-placement="top" title="To copy the tour link, simply click this button and a new tab will open to the MLS Non-Branded Tour. From here you can copy the link from the browsers URL." >Modern Template - MLS 'No Agent' Branding</button>
                      </div>
                      <div class="col-md-12">
                        <button class="btn btn-success btn-block" data-toggle="tooltip" data-placement="top" title="To copy the tour link, simply click this button and a new tab will open to the Agent Branded Tour. From here you can copy the link from the browsers URL." >Classic Template - Agent Branded Tour</button>
                      </div>

                      <div class="col-md-12">
                        <button class="btn btn-secondary btn-block" data-toggle="tooltip" data-placement="top" title="To copy the tour link, simply click this button and a new tab will open to the MLS Non-Branded Tour. From here you can copy the link from the browsers URL." >Classic Template - MLS 'No Agent' Branding</button>
                      </div>
                      <br><br><br><br>
                      <div class="col-md-12">
                        <h5 class="clr">Additional property information (auto-saving)</h5>
                      </div>
                      <br><br>
                      <div class="col-md-2 mar10">
                        <label for="bedrooms">Bedrooms:</label>
                        <input type="text" id="bedrooms" class="form-control" name="bedrooms" value="" placeholder="Not Required">
                      </div>
                      <div class="col-md-2 mar10">
                        <label for="hbaths">Half Baths:</label>
                        <input type="text" id="hbaths" class="form-control" name="hbaths" value="" placeholder="Not Required">
                      </div>
                      <div class="col-md-2 mar10">
                          <label for="baths">Full Baths:</label>
                          <input type="text" id="baths" class="form-control" name="baths" value="" placeholder="Not Required">
                      </div>
                      <div class="col-md-2 mar10">
                          <label for="sqfeet">Square Feet:</label>
                          <input type="text" id="sqfeet" class="form-control" name="sqfeet" value="" placeholder="Not Required">
                      </div>
                      <div class="col-md-2 mar10">
                          <label for="price">Price:</label>
                          <input type="text" id="price" class="form-control" name="price" value="" placeholder="Not Required">
                      </div>
                      <div class="col-md-12 mar10">
                        <label for="hbaths">Property Title (auto-saving):</label>
                        <input type="text" id="hbaths" class="form-control" name="hbaths" value="" placeholder="Video Only"> 
                      </div>
                      <div class="col-md-12 mar10">
                        <label for="hbaths">Property description (auto-saving):</label>
                        <textarea rows="4" cols="50" name="comment" class="form-control" value="" placeholder="Video Only"> </textarea>
                      </div>
                      <div class="col-md-12 mar10">
                        <label for="hbaths">Select Property Status (auto-saving):</label>
                        <input type="text" id="hbaths" class="form-control" name="hbaths" value="" placeholder="Video Only"> 
                      </div>
                    </div>
                    
                    {{-- <p class="font-weight-light m-0">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.</p> --}}
                  </div>
                </div>
              </div>
      
            </div>
          </div>

          <!-- Modal Update MLS-->
          <div class="modal fade" id="updateMLS" tabindex="-1" aria-labelledby="updateMLSLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title clr">Update MLS Number</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                          <div class="col-md-12">
                            <label for="bedrooms">Add MLS Number:</label>
                            <input type="text" id="bedrooms" class="form-control" name="bedrooms" value="">
                          </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        {{-- <button type="button" class="pull-left btn btn-secondary" data-dismiss="modal">Close</button> --}}
                        <button type="button" class="btn btn-primary pull-right">Save changes</button>
                    </div>
                </div>
            </div>
          </div>



        </div>
      </div>
    </div>
</div>
@endsection

