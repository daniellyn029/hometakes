@extends('main.index')

@section('css')
<style>
    .marrt{
       margin-right:3px;
    }
</style>

@endsection

@section('content')
<section class="content">        
    <div class="box box-success">
        <div class="box-header clr boxhead">
            <h2 class="box-title">Settings</h2>
        </div><!-- /.box-header -->
        <div class="box-body">
            <button class="btn btn-sm btn-primary pull-right" data-toggle="modal" data-target="#EditSettings">Edit Settings</button>
            <button class="btn btn-sm btn-success pull-right marrt" data-toggle="modal" data-target="#AddVid">Add</button>
            <br><br>
            <table class="display compact" style="width:100%" cellspacing="0" id="dtSettings">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($videographers as $v_ideographers)
                    <tr>
                        <td>{{$v_ideographers->id}}</td>
                        <td>{{$v_ideographers->name}}</td>
                        <td>{{$v_ideographers->email}}</td>
                        <td>{{$v_ideographers->phone}}</td>
                        <td>
                            <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#EditVideographer{{$v_ideographers->id}}" onclick="editVideographersView({{$v_ideographers->id}})">Edit</button>
                            <button class="btn btn-sm btn-danger" data-toggle="modal" data-target="#deleteVideographer{{$v_ideographers->id}}">Delete</button>

                            <!-- Modal Edit Videographer-->
                            <div class="modal fade" id="EditVideographer{{$v_ideographers->id}}" tabindex="-1" aria-labelledby="EditVideographer{{$v_ideographers->id}}Label" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header modaleditbckgrnd">
                                            <h5 class="modal-title txt-white">Edit Videographer</h5>
                                            <button class="close btn" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <label for="name">Name:</label>
                                                    <input type="text" class="form-control" id="edit_name{{$v_ideographers->id}}">
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="phone">Phone:</label>
                                                    <input type="text" class="form-control" id="edit_phone{{$v_ideographers->id}}">
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="email">Email:</label>
                                                    <input type="email" class="form-control" id="edit_email{{$v_ideographers->id}}">
                                                </div>

                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-success pull-right" onclick="UpdateChanges(this,{{$v_ideographers->id}})"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Update</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- Modal Delete Videographer --}}
                            <div class="modal fade" id="deleteVideographer{{$v_ideographers->id}}" tabindex="-1" aria-labelledby="deleteVideographerLabel{{$v_ideographers->id}}" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header modaldltbckgrnd">
                                            <h5 class="modal-title txt-white">Delete Videographer</h5>
                                            <button class="close btn" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            Are you sure you want to delete Videographer?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" data-dismiss="modal" class="btn btn-danger mr-auto">No</button>
                                            <button type="button" class="btn btn-success pull-right" onclick="DeleteVideographer(this, {{$v_ideographers->id}})">Yes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </td>        
                    </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
        <!--end of box body -->
        <div class="box-footer"></div><!-- box-footer -->
    </div>
    
    {{-- Modal Update Settings --}}
    <div class="modal fade" id="EditSettings" tabindex="-1" aria-labelledby="EditSettingsLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header modaleditbckgrnd">
                    <h5 class="modal-title txt-white">Settings</h5>
                    <button class="close btn" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="nice_day">Cancelation Insurance (default): </label>
                            <select class="form-control" id="nice_day">
                                {{-- <option value="" disabled selected hidden>--- SELECT ---</option> --}}
                                <option value="{{$settings[1]->option}}">{{$settings[1]->option}}</option>
                                @if($settings[1]->option == 'On')
                                    <option value="Off">Off</option>
                                @elseif($settings[1]->option == 'Off')
                                    <option value="On">On</option>
                                @endif
                                
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="hdr">HDR Availablity:</label>
                            <select class="form-control">
                                <option value="{{$settings[0]->option}}">{{$settings[0]->option}}</option>
                                @if($settings[0]->option == 'On')
                                    <option value="Off">Off</option>
                                @elseif($settings[0]->option == 'Off')
                                    <option value="On">On</option>
                                @endif
                            </select>
                        </div>
                        <div class="col-md-12">
                            <label for="alternate">Video Tour Alternate (after 365 days):</label>
                            <select class="form-control">
                                @if($settings[2]->option == '1')
                                    <option value="{{$settings[2]->option}}">Alternate Video 1</option>
                                    <option value="2">Alternate Video 2</option>
                                @elseif($settings[2]->option == '2')
                                    <option value="{{$settings[2]->option}}">Alternate Video 2</option>
                                    <option value="1">Alternate Video 1</option>
                                @endif
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success pull-right"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Update</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Add Videographer-->
    <div class="modal fade" id="AddVid" tabindex="-1" aria-labelledby="AddVidLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header modaladdbckgrnd">
                    <h5 class="modal-title txt-white">Add Videographer</h5>
                    <button class="close btn" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <label for="name">Name: </label>
                            <input type="text" class="form-control" name="add_name">
                        </div>
                        <div class="col-md-6">
                            <label for="phone">Phone:</label>
                            <input type="text" class="form-control" name="add_phone">
                        </div>
                        <div class="col-md-6">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" name="add_email">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success pull-right" onclick="addVideographer()">Save changes</button>
                </div>
            </div>
        </div>
    </div>

</section>

@endsection

@section('script')
<script>

var table = $('#dtSettings').DataTable({
    "responsive": true
});

//Add VIdeographer
function addVideographer(){
    var name = $('input[name="add_name"]').val();
    var phone = $('input[name="add_phone"]').val();
    var email = $('input[name="add_email"]').val();

    var data = {
        name : name,
        phone : phone,
        email : email  
    }
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: "{{ URL::to('/settings_add') }}",
        method: 'POST',
        data: data,
        success: function(response){
            
            let _ret = JSON.parse(response);

            if(_ret.length > 0) {
                table.row.add({
                    0: _ret[0].id,
                    1: _ret[0].name,
                    2: _ret[0].phone,
                    3: _ret[0].email,
                    4: addbuttons(_ret[0].id)
                }).draw();
            }

            location.reload();
            // $('#AddVid').modal('hide');
        }

    });
}

//Add buttons when another Videographer is added
function addbuttons(id) {
    return  '<button class="btn btn-sm btn-primary"data-toggle="modal" data-target="#EditVideographer'+ id +'" onclick="editVideographersView('+ id +')">Edit</button>'+
            '<button class="btn btn-sm btn-danger" data-toggle="modal" data-target="#deleteVideographer'+ id +'">Delete</button>'+
            
            // Modal Edit
            '<div class="modal fade" id="EditVideographer'+ id +'" tabindex="-1" aria-labelledby="EditVideographerLabel'+ id +'" aria-hidden="true">'+
                '<div class="modal-dialog modal-lg">'+
                    '<div class="modal-content">'+
                        '<div class="modal-header modaleditbckgrnd">'+
                            '<h5 class="modal-title txt-white">Edit Videographer</h5>'+
                            '<button type="button" class="close" data-dismiss="modal" aria-label="Close">'+
                                '<span aria-hidden="true">&times;</span>'+
                            '</button>'+
                        '</div>'+
                        '<div class="modal-body">'+
                            '<div class="row">'+
                                '<div class="col-md-12">'+
                                    '<label for="name">Name:</label>'+
                                    '<input type="text" class="form-control" name="edit_name">'+
                                '</div>'+
                                '<div class="col-md-6">'+
                                    '<label for="phone">Phone:</label>'+
                                    '<input type="text" class="form-control" name="edit_phone">'+
                                '</div>'+
                                '<div class="col-md-6">'+
                                    '<label for="email">Email:</label>'+
                                    '<input type="text" class="form-control" name="edit_email">'+
                                '</div>'+

                            '</div>'+
                        '</div>'+
                        '<div class="modal-footer">'+
                            '<button type="button" class="btn btn-success pull-right"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Update</button>'+
                        '</div>'+
                    '</div>'+
                '</div>'+
            '</div>'+
            
            // Modal Delete
            '<div class="modal fade" id="deleteVideographer'+ id +'" tabindex="-1" aria-labelledby="deleteVideographerLabel'+ id +'" aria-hidden="true">'+
                '<div class="modal-dialog">'+
                    '<div class="modal-content">'+
                        '<div class="modal-header modaldltbckgrnd">'+
                            '<h5 class="modal-title txt-white">Delete Videographer</h5>'+
                            '<button type="button" class="close" data-dismiss="modal" aria-label="Close">'+
                                '<span aria-hidden="true">&times;</span>'+
                            '</button>'+
                        '</div>'+
                        '<div class="modal-body">'+
                            'Are you sure you want to delete videographer?'+
                        '</div>'+
                        '<div class="modal-footer">'+
                            '<button type="button" data-dismiss="modal" class="btn btn-danger mr-auto">No</button>'+
                            '<button type="button" class="btn btn-success pull-right" onclick="DeleteVideographer('+ this+ ', '+ id +')">Yes</button>'+
                        '</div>'+
                    '</div>'+
                '</div>'+
            '</div>';

}

//View Data in edit settings
function editVideographersView(id) {
    var data = {
        id: id
    }
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: "{{ URL::to('/settings_edit_view') }}",
        method: 'POST',
        data: data,
        success: function(response){

            var parsed = JSON.parse(response);

            var name = parsed.name;
            var phone = parsed.phone;
            var email = parsed.email;
            
            $('#edit_name'+id).val(name);
            $('#edit_phone'+id).val(phone);
            $('#edit_email'+id).val(email);
            // $('input[name="edit_name"]').val(name);
            // $('input[name="edit_phone"]').val(phone);
            // $('input[name="edit_email"]').val(email);

        }

    });
}


//Update Changes for Videographers
function UpdateChanges(paramThis ,id) {
    var name = $('#edit_name'+id).val();
    var phone = $('#edit_phone'+id).val();
    var email = $('#edit_email'+id).val();

    var data = {
        name: name,
        phone: phone,
        email: email,
        id: id
    }
    console.log(data);                 
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: "{{ URL::to('/settings_edit_videograper') }}",
        method: 'POST',
        data: data,
        success: function(response){
            // console.log(response);
            
            location.reload();
        }

    });
}

function DeleteVideographer(paramThis,id) {
    var data = {
        id: id
    }
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: "{{ URL::to('/settings_delete') }}",
        method: 'POST',
        data: data,
        success: function(response){
        
            table.row( $(paramThis).parents('tr') )
            .remove()
            .draw();    

            location.reload();
            // $('#deleteVideographer'+id).modal('hide');     
        }
    
    });
}


</script>
    
@endsection