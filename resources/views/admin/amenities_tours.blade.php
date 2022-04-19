@extends('main.index')

@section('css')
<style>
    .martop{
        margin-top:10px
    }
</style>
@endsection 

@section('content')
<section class="content">        
    <div class="box box-success">
        <div class="box-header clr boxhead">
            <h2 class="box-title">Amenities Tours</h2>
        </div><!-- /.box-header -->
        <div class="box-body">
            <button class="btn btn-sm btn-success pull-right" data-toggle="modal" data-target="#addAmenities">Add Amenities</button>
            <br><br>
            <table class="display compact" style="width:100%" cellspacing="0" id="dtAmenities">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Amenities</th>
                        <th>Actions</th>             
                    </tr>
                </thead>
                <tbody>
                    @foreach($amenities_tours as $a_tours)
                        <tr>
                            <td>{{$a_tours->id}}</td>
                            <td>{{$a_tours->name}}</td>
                            <td>
                                <button class="btn btn-sm btn-primary"data-toggle="modal" data-target="#EditModal{{$a_tours->id}}" onclick="editAmenities({{$a_tours->id}})">Edit</button>
                                <button class="btn btn-sm btn-danger" data-toggle="modal" data-target="#deleteModal{{$a_tours->id}}">Delete</button>

                                <!-- Modal Edit-->
                                <div class="modal fade" id="EditModal{{$a_tours->id}}" tabindex="-1" aria-labelledby="EditModalLabel{{$a_tours->id}}" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header modaleditbckgrnd">
                                                <h5 class="modal-title txt-white">Edit Amenities</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <label for="name">Amenities Name:</label>
                                                        <input type="text" class="form-control" id="edit_name{{$a_tours->id}}">
                                                    </div>
                                                    <div class="col-md-12">
                                                        <label for="code">Code:</label>
                                                        <textarea id="edit_code{{$a_tours->id}}" rows="4" cols="50" class="form-control"></textarea>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="zip">First Zip Code:</label>
                                                        <input type="text" class="form-control" name="edit_zip">
                                                    </div>
                                                    <div class="col-md-12 martop">
                                                        <center>
                                                            <video width="auto" height="auto" controls>
                                                                <source src="videos/sample2.mov" type="video/mp4">
                                                                Your browser does not support the video tag.
                                                            </video>
                                                        </center>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-success pull-right" onclick="UpdateChanges(this,{{$a_tours->id}})"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Update</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{-- Modal Delete  --}}
                                <div class="modal fade" id="deleteModal{{$a_tours->id}}" tabindex="-1" aria-labelledby="deleteModalLabel{{$a_tours->id}}" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header modaldltbckgrnd">
                                                <h5 class="modal-title txt-white">Delete Amenities</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                Are you sure you want to delete Amenities Tours?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" data-dismiss="modal" class="btn btn-danger mr-auto">No</button>
                                                <button type="button" class="btn btn-success pull-right" onclick="deleteAmenities(this, {{$a_tours->id}})">Yes</button>
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

     {{-- Modal Add Town --}}
     <div class="modal fade" id="addAmenities" tabindex="-1" role="dialog" aria-labelledby="addAmenitiesLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header modaladdbckgrnd">
                    <h5 class="modal-title txt-white">Add Amenities</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form >
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <label for="name">Name:</label>
                                <input type="text" class="form-control" name="add_name">
                            </div>
                            <div class="col-md-12">
                                <label for="code">Code:</label>
                                <textarea rows="4" cols="50" class="form-control" name="add_code">
                                </textarea>
                            </div>
                            <div class="col-md-6">
                                <label for="zip">First Zip Code:</label>
                                <input type="text" class="form-control" name="add_zip">
                            </div>
                        </div>
                    </div>
                </form>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" onclick="AddAmenities()">Save changes</button>
                </div>
            </div>
        </div>
    </div>

</section>

@endsection

@section('script')
<script>

var table = $('#dtAmenities').DataTable({
    "responsive": true
});

function AddAmenities(){

    var name = $('input[name="add_name"]').val();
    var code = $('textarea[name="add_code"]').val();
    var zip = $('input[name="add_zip"]').val();

    var data = {
        name : name,
        code : code,
        zip : zip
    }
    
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: "{{ URL::to('/amenities_tours_add') }}",
        method: 'POST',
        data: data,
        success:function(response){

            let _ret = JSON.parse(response);

            if(_ret.length > 0) {
                table.row.add({
                    0: _ret[0].id,
                    1: _ret[0].name,
                    2: _ret[0].code,
                    3: addbuttons(_ret[0].id)
                    // 3: _ret[0].zip,
                }).draw();
            }

            location.reload();
            // $("#addAmenities").modal("hide");

        }
    });

}

function addbuttons(id){
    return  '<button class="btn btn-sm btn-primary"data-toggle="modal" data-target="#EditModal'+ id +'" onclick="editAmenities('+ id +')">Edit</button>'+
            '<button class="btn btn-sm btn-danger" data-toggle="modal" data-target="#deleteModal'+ id +'">Delete</button>'+

            //  Modal Edit
            '<div class="modal fade" id="EditModal'+ id +'" tabindex="-1" aria-labelledby="EditModalLabel'+ id +'" aria-hidden="true">'+
                '<div class="modal-dialog modal-lg">'+
                    '<div class="modal-content">'+
                        '<div class="modal-header modaleditbckgrnd">'+
                            '<h5 class="modal-title txt-white">Edit Amenities</h5>'+
                            '<button type="button" class="close" data-dismiss="modal" aria-label="Close">'+
                                '<span aria-hidden="true">&times;</span>'+
                            '</button>'+
                        '</div>'+
                        '<div class="modal-body">'+
                            '<div class="row">'+
                                '<div class="col-md-12">'+
                                    '<label for="name">Amenities Name:</label>'+
                                    '<input type="text" class="form-control" name="edit_name">'+
                                '</div>'+
                                '<div class="col-md-12">'+
                                    '<label for="code">Code:</label>'+
                                    '<textarea name="edit_code" rows="4" cols="50" class="form-control"></textarea>'+
                                '</div>'+
                                '<div class="col-md-6">'+
                                    '<label for="zip">First Zip Code:</label>'+
                                    '<input type="text" class="form-control" name="edit_zip">'+
                                '</div>'+
                                '<div class="col-md-12 martop">'+
                                    '<center>'+
                                        '<video width="auto" height="auto" controls>'+
                                            '<source src="videos/sample2.mov" type="video/mp4">'+
                                            'Your browser does not support the video tag.'+
                                        '</video>'+
                                    '</center>'+
                                '</div>'+
                            '</div>'+
                        '</div>'+
                        '<div class="modal-footer">'+
                            '<button type="button" class="btn btn-success pull-right"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Update</button>'+
                        '</div>'+
                    '</div>'+
                '</div>'+
            '</div>'+
            
            // Modal delete
            '<div class="modal fade" id="deleteModal'+ id +'" tabindex="-1" aria-labelledby="deleteModalLabel'+ id +'" aria-hidden="true">'+
                '<div class="modal-dialog">'+
                    '<div class="modal-content">'+
                        '<div class="modal-header modaldltbckgrnd">'+
                            '<h5 class="modal-title txt-white">Delete Amenities</h5>'+
                            '<button type="button" class="close" data-dismiss="modal" aria-label="Close">'+
                                '<span aria-hidden="true">&times;</span>'+
                            '</button>'+
                        '</div>'+
                        '<div class="modal-body">'+
                            'Are you sure you want to delete Amenities Tours?'+
                        '</div>'+
                        '<div class="modal-footer">'+
                            '<button type="button" data-dismiss="modal" class="btn btn-danger mr-auto">No</button>'+
                            '<button type="button" class="btn btn-success pull-right" onclick="deleteAmenities('+ this +','+ id +')">Yes</button>'+
                        '</div>'+
                    '</div>'+
                '</div>'+
            '</div>';
}

function editAmenities(id){
    var data = {
        id: id
    }
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: "{{ URL::to('/amenities_tours_edit_view') }}",
        method: 'POST',
        data: data,
        success: function(response){

            // console.log(response);

            var parsed = JSON.parse(response);

            var name = parsed.name;
            var code = parsed.code;

            $('#edit_name'+id).val(name);
            $('#edit_code'+id).val(code);

        }
    });
}

function UpdateChanges(paramThis ,id) {
    var name = $('#edit_name'+id).val();
    // console.log('update changes '+name);
    var code = $('#edit_code'+id).val();
    // console.log('textearea changes ' +code);
    var data = {
        name: name,
        code: code,
        id: id
    }
    console.log(data);                 
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: "{{ URL::to('/amenities_tours_edit') }}",
        method: 'POST',
        data: data,
        success: function(response){
            
            location.reload();
        }

    });
}


function deleteAmenities(paramThis,id){
    var data ={
        id: id
    }
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: "{{ URL::to('/amenities_tours_delete') }}",
        method: 'POST',
        data: data,
        success: function(response){

            table.row( $(paramThis).parents('tr') )
                .remove()
                .draw();    

            location.reload();
            // $('#deleteAmenities'+id).modal('hide');
        }
    });
}

</script>
    
@endsection