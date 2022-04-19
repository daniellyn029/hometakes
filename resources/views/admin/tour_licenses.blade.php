@extends('main.index')

@section('css')
<style>
* {
  box-sizing: border-box;
}
.row {
  margin-left:-5px;
  margin-right:-5px;
}
    
.column {
  float: left;
  width: 100%;
  padding: 5px;
}
/* .column1 {
  float: left;
  width: 100%;
  padding: 5px;
} */

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
}

table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

td {
  text-align: left;
  padding: 5px;
}

/* tr:nth-child(even) {
  background-color: #f2f2f2;
}
tr:hover {background-color:#f5f5f5;} */
 th {
  /* padding-top: 12px;
  padding-bottom: 12px; */
  padding:10px;
  text-align: left;
  color: white;
  border: 1px solid white;
}
tr:nth-child(even){background-color: #f2f2f2;}

tr:hover {background-color: #ddd;}

.style-1::-webkit-scrollbar{
  height:10px;
  width:4px;
  border-radius: 4px;
  background: transparent;
  transition: all 0.3s ease;
}
.style-1::-webkit-scrollbar:hover{
  background: #c6c7ca;
}
.style-1::-webkit-scrollbar-thumb{
  background: #777779;
  border-radius: 4px;
}
.bckgrndclr1{
 background-color: #FFC107;

}
.bckgrndclr2{
  background-color: #17A2B8;
}
.bckgrndclr3{
  background-color: #6C757D;
}
.rowmar{
  margin-top: 20px;
}


</style>

@endsection

@section('content')

<section class="content">

  <h2 class="clr">Tour Licenses</h2>

  <div class="row style-1 rowmar" style="overflow-y:auto;">
    <div class="column">
      <h5>ALL YEARLY LICENSE ON TOWN & AMENITIES</h5>
      <table style="width: 100%" id="tTownAmenities tbody">
        <thead>
          <tr>
            <th class="bckgrndclr1" style="width:30px">No</th>
            <th class="bckgrndclr1" style="width:50px">Username</th>
            <th class="bckgrndclr1" style="width:150px">Name</th>
            <th class="bckgrndclr1" style="width:150px">Email</th>
            <th class="bckgrndclr1" style="width:50px">Expiration</th>
            <th class="bckgrndclr1" style="width:30px">Action</th>
          </tr>
        </thead>
        <tbody class="style-1">
          @foreach ($town_amenities as $yearly_tm)
            <tr>
              <td style="width:30px">{{$yearly_tm->id}}</td>
              <td style="width:50px">{{$yearly_tm->username}}</td>
              <td style="width:150px">{{$yearly_tm->fname}} {{$yearly_tm->lname}}</td>
              <td style="width:150px">{{$yearly_tm->email}}</td>
              <td style="width:50px">{{$yearly_tm->tour_license_expire}}</td>
              <td style="width:30px">
                <button class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete_t_a{{$yearly_tm->id}}">Delete</button>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>

    {{-- Modal Delete --}}
    <div class="modal fade" id="delete_t_a{{$yearly_tm->id}}" tabindex="-1" aria-labelledby="delete_t_aLabel{{$yearly_tm->id}}" aria-hidden="true">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header modaldltbckgrnd">
                  <h5 class="modal-title txt-white">Delete Town & Amenities</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
                  Are you sure you want to delete yearly license on town & amenities?
              </div>
              <div class="modal-footer">
                  <button class="btn btn-danger mr-auto" data-dismiss="modal">No</button>
                  <button class="btn btn-success pull-right" onclick="Delete_t_a(this,{{$yearly_tm->id}})">Yes</button>
              </div>
          </div> 
      </div>
    </div>

  </div>
  <div class="row style-1 rowmar" style="overflow-y:auto">
    <div class="column">
      <h5>YEARLY LICENSE ON TOWN</h5>
      <table style="width: 100%" id="tTown">
        <thead>
            <tr>
              <th class="bckgrndclr2" style="width:30px">No</th>
              <th class="bckgrndclr2" style="width:150px">Town Name</th>
              <th class="bckgrndclr2" style="width:50px">Zipcode</th>
              <th class="bckgrndclr2" style="width:150px">User</th>
              <th class="bckgrndclr2" style="width:50px">Expiration</th>
              <th class="bckgrndclr2" style="width:30px">Action</th>
            </tr>
        </thead>
        <tbody class="style-1">
          @foreach ($license_town as $yearly_town)
            <tr>
              <td style="width:30px">{{$yearly_town->id}}</td>
              <td style="width:150px">{{$yearly_town->name}}</td>
              <td style="width:50px">{{$yearly_town->zipcode}}</td>
              <td style="width:150px">{{$yearly_town->fname}} {{$yearly_town->lname}}</td>
              <td style="width:50px">{{$yearly_town->date}}</td>
              <td style="width:30px">
                <button class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete_t{{$yearly_town->id}}">Delete</button>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>

    {{-- Modal Delete --}}
    <div class="modal fade" id="delete_t{{$yearly_town->id}}" tabindex="-1" aria-labelledby="delete_tLabel{{$yearly_town->id}}" aria-hidden="true">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header modaldltbckgrnd">
                  <h5 class="modal-title txt-white">Delete Town</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
                  Are you sure you want to delete yearly license on town?
              </div>
              <div class="modal-footer">
                  <button class="btn btn-danger mr-auto" data-dismiss="modal">No</button>
                  <button class="btn btn-success pull-right" onclick="Delete_a(this,{{$yearly_town->id}})">Yes</button>
              </div>
          </div> 
      </div>
    </div>

  </div>

  <div class="row style-1 rowmar" style="overflow-y:auto">
    <div class="column">
        <h5>YEARLY LINCENSE ON AMENITIES</h5>
        <table style="width: 100%" id="tAmenities">
          <thead>
            <tr>
              <th class="bckgrndclr3" style="width:30px">No</th>
              <th class="bckgrndclr3" style="width:150px">Amenity Name</th>
              <th class="bckgrndclr3" style="width:50px">Zipcode</th>
              <th class="bckgrndclr3" style="width:150px">User</th>
              <th class="bckgrndclr3" style="width:50px">Expiration</th>
              <th class="bckgrndclr3" style="width:30px">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($license_amenities as $yearly_amenities)
              <tr>
                <td style="width:30px">{{$yearly_amenities->id}}</td>
                <td style="width:150px">{{$yearly_amenities->name}}</td>
                <td style="width:50px">{{$yearly_amenities->zipcode}}</td>
                <td style="width:150px">{{$yearly_amenities->fname}} {{$yearly_amenities->lname}}</td>
                <td style="width:50px">{{$yearly_amenities->date}}</td>
                <td style="width:30px">
                  <button class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete_m{{$yearly_amenities->id}}">Delete</button>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
    </div>

    {{-- Modal Delete --}}
    <div class="modal fade" id="delete_m{{$yearly_amenities->id}}" tabindex="-1" aria-labelledby="delete_mLabel{{$yearly_amenities->id}}" aria-hidden="true">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header modaldltbckgrnd">
                  <h5 class="modal-title txt-white">Delete Town</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
                  Are you sure you want to delete yearly license on town?
              </div>
              <div class="modal-footer">
                  <button class="btn btn-danger mr-auto" data-dismiss="modal">No</button>
                  <button class="btn btn-success pull-right" onclick="Delete_m(this,{{$yearly_amenities->id}})">Yes</button>
                  {{-- <button class="btn btn-success pull-right">Yes</button> --}}
              </div>
          </div> 
      </div>
    </div>  

  </div>


</section>

@endsection

@section('script')
<script>
  function Delete_t_a(paramThis,id) {
    var data = {
        id: id
    }
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: "{{ URL::to('/tour_licenses_delete_t_a') }}",
        method: 'POST',
        data: data,
        success: function(response){

            table = $('#tTownAmenities tbody tr');
            $(paramThis).parents('tr')
            .remove()
               
            location.reload();
            // $('#delete_t_a'+id).modal('hide');     
        }
    
    });
  }

  function Delete_a(paramThis,id){
    var data = {
        id: id
    }
    $.ajax({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: "{{ URL::to('/tour_licenses_delete_t')}}",
        method: 'POST',
        data: data,
        success: function(response){

            table = $('#tTown tbody tr');
            $(paramThis).parents('tr')
            .remove()

            location.reload();
            // $('#delete_t'+id).modal('hide');
        }
    });
  }

  function Delete_m(paramThis,id){
    var data = {
      id: id
    }
    $.ajax({
        headers:{
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: "{{ URL::to('/tour_licenses_delete_m')}}",
        method: 'POST',
        data: data,
        success: function(response){

          table = $('tAmenities tbody tr');
          $(paramThis).parents('tr')
          .remove()

          location.reload();
          // $('#delete_m'+id).modal('hide');

        }
    });
  }

</script>
    
@endsection 