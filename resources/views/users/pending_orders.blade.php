@extends('main.index')

@section('css')
<style>
.mar3{
  margin:3px;
}
.boxhead{
    margin: 0px 0px 20px 0px;
}
.sched{
    cursor:pointer;
    color:blue;
}
</style>
@endsection

@section('content')
<section class="content">  
    <div class="box box-success">
        <div class="box-header clr boxhead">
            <h2 class="box-title">Pending Orders</h2>
        </div><!-- /.box-header -->
        <div class="box-body">
            <table class="display compact" style="width:100%" cellspacing="0" id="pending_orders">
                <thead>
                    <tr>
                        <th class="text-left">Address</th>
                        <th class="text-left">Type</th>
                        <th class="text-left">Schedule / Film Date</th>
                        <th class="text-left">Download Photos</th>
                        <th class="text-left">Online Photos</th>
                        <th class="text-left">MLS</th>
                        <th class="text-left">Notes/UpgradeReceipt</th>
                        <th class="text-left">Script</th>
                        <th class="text-left">Mattertags</th>
                        <th class="text-left">Copy of Order</th>
                        <th class="text-left">Additional Info</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pending_orders as $p_orders)
                        <tr>
                            <td>{{$p_orders->address}}</td>
                            <td>sample</td>
                            <td>
                                <div class="sched" data-toggle="tooltip" data-placement="top" title="The moment you click this link your requested appointment times will be cancelled in our system. Please be sure that you want to cancel or reschedule these times before you click this link.">
                                    <span data-toggle="modal" data-target="#delete_sched"> Reschedule Filming Date</span>
                                </div>
                                {{-- <button class="btn btn-sm btn-primary" data-
                                toggle="modal" data-target="#EditSched"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                <button class="btn btn-sm btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i></button> --}}
                            </td>
                            <td>sample</td>
                            <td><a href="{{$p_orders->gallery}}" target="_blank">View Online Photos</a></td>
                            <td>
                                <button class="btn btn-sm btn-success" data-toggle="modal" data-target="#AddMls">Add</button>
                            </td>
                            <td>sample</td>
                            <td>sample</td>
                            <td>Sample</td>
                            <td>sample</td>
                            <td>
                                <button class="btn btn-sm btn-success" data-toggle="modal" data-target="#AddProp">Add</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
        <!--end of box body -->
        <div class="box-footer"></div><!-- box-footer -->
    </div>

    
    <!-- Modal Resched Date-->
    <div class="modal fade" id="EditSched" tabindex="-1" aria-labelledby="EditSchedLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title clr">Reschedule Filming Date</h5>
                    <div class="btn close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <input type="checkbox" id="90days" name="90days" value="">
                            <label for="90days">Schedule Later </label>
                        </div>
                        <div class="col-md-4">                            
                            <label for="90days">Date 1: </label>
                            <input type="text" class="form-control datepicker" id="datepicker" placeholder="mm/dd/yyyy">
                        </div>
                        <div class="col-md-4">
                            <label for="90days">Time 1: </label>
                            <input type="text" class="form-control timepicker" placeholder="hh:mm">
                        </div>
                        <div class="col-md-4">
                            <label for="90days">Final Date and Time: </label>
                            <input type="text" id="datepicker" class="form-control" placeholder="07/27/2021 at 09:00 AM" readonly>
                        </div>
                        <div class="col-md-4">
                            <label for="90days">Date 2: </label>
                            <input type="text" id="datepicker1" class="form-control datepicker" placeholder="mm/dd/yyyy">
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
                            <input type="text" id="datepicker2" class="form-control datepicker" placeholder="mm/dd/yyyy">
                        </div>
                        <div class="col-md-4">
                            <label for="90days">Time 3: </label>
                            <input type="text" id="datepicker" class="form-control" placeholder="hh:mm">
                        </div>
                        <div class="col-md-4">
                            <label for="90days">Final Date and Time : </label>
                            <input type="text" id="datepicker" class="form-control" placeholder="07/30/2021 at 12:00 PM" readonly>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary pull-right">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    {{-- Modal Delete Resched Date---}}
    <div class="modal fade" id="delete_sched" tabindex="-1" aria-labelledby="delete_schedLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header modaldltbckgrnd">
                    <h5 class="modal-title txt-white">Delete Schedule</h5>
                    <div class="btn close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </div>
                </div>
                <div class="modal-body">
                    Are you sure you want to cancel/reschedule this tour?
                    <br><br>
                    The moment you click this link your current appointment will be cancelled in our system.
                </div>
                <div class="modal-footer">
                    <button class="btn btn-danger mr-auto" data-dismiss="modal">No</button>
                    <button class="btn btn-success pull-right">Yes</button>
                </div>
            </div> 
        </div>
    </div>  
    <!-- Modal MLS-->
    <div class="modal fade" id="AddMls" tabindex="-1" aria-labelledby="AddMlsLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title clr">Update MLS Number</h5>
                    <div class="btn close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </div>
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
                    <button type="button" class="btn btn-primary pull-right">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Add Actions-->
    <div class="modal fade" id="AddProp" tabindex="-1" aria-labelledby="AddPropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Additional property information (auto-saving)</h5>
                    <div class="btn close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6 mar3">
                            <label for="bedrooms">Bedrooms:</label>
                            <input type="text" id="bedrooms" class="form-control" name="bedrooms" value="" placeholder="Not Required">
                        </div>
                        <div class="col-md-5 mar3">
                            <label for="hbaths">Half Baths:</label>
                            <input type="text" id="hbaths" class="form-control" name="hbaths" value="" placeholder="Not Required">
                        </div>
                        <div class="col-md-4 mar3">
                            <label for="baths">Full Baths:</label>
                            <input type="text" id="baths" class="form-control" name="baths" value="" placeholder="Not Required">
                        </div>
                        <div class="col-md-4 mar3">
                            <label for="sqfeet">Square Feet:</label>
                            <input type="text" id="sqfeet" class="form-control" name="sqfeet" value="" placeholder="Not Required">
                        </div>
                        <div class="col-md-3 mar3">
                            <label for="price">Price:</label>
                            <input type="text" id="price" class="form-control" name="price" value="" placeholder="Not Required">
                        </div>
                        <div class="col-md-12 mar3">
                            <label for="hbaths">Property Title (auto-saving):</label>
                            <input type="text" id="hbaths" class="form-control" name="hbaths" value="" placeholder="Video Only"> 
                        </div>
                        <div class="col-md-12 mar3">
                            <label for="hbaths">Property description (auto-saving):</label>
                            <textarea rows="4" cols="50" name="comment" class="form-control" value="" placeholder="Video Only"> </textarea>
                        </div>
                        <div class="col-md-12 mar3">
                            <label for="hbaths">Select Property Status (auto-saving):</label>
                            <input type="text" id="hbaths" class="form-control" name="hbaths" value="" placeholder="Video Only"> 
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary pull-right">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    
</section>

@endsection
@section('script')

<script>

var table = $('#pending_orders').DataTable({
    "responsive": true
});

// $(document).ready( function () {
//     $("#sched-schedule").datepicker({ 
//         dateFormat: 'yy-mm-dd',
//         beforeShow: function(input, inst) {
//             $(inst.dpDiv[0]).removeClass('sched-bp');
//         } 
//     }); 
// });

</script>

@endsection
