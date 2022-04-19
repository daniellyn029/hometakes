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
            <h2 class="box-title">Town Tours</h2>
        </div><!-- /.box-header -->
        <div class="box-body">
            <button class="btn btn-sm btn-success pull-right" data-toggle="modal" data-target="#AddTown">Add Town</button>
            <br><br>
            <table class="display compact" style="width:100%" cellspacing="0" id="dtTownTours">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Town</th>
                        <th>Actions</th>             
                    </tr>
                </thead>
                <tbody>
                    @foreach($towntours as $t_tours)
                        <tr>
                            <td>{{$t_tours->id}}</td>
                            <td>{{$t_tours->name}}</td>
                            <td>
                                <button class="btn btn-sm btn-primary"data-toggle="modal" data-target="#EditTown{{$t_tours->id}}" onclick="EditTown({{$t_tours->id}})">Edit</button>
                                <button class="btn btn-sm btn-danger" data-toggle="modal" data-target="#deleteTown{{$t_tours->id}}">Delete</button>

                                <!-- Modal Edit Town-->
                                <div class="modal fade" id="EditTown{{$t_tours->id}}" tabindex="-1" aria-labelledby="EditTown{{$t_tours->id}}Label" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header modaleditbckgrnd">
                                                <h5 class="modal-title txt-white">Edit Town</h5>
                                                <button class="close btn" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <label for="90days">Town Name: </label>
                                                        <input type="text" class="form-control" id="edit_town_name{{$t_tours->id}}">
                                                    </div>
                                                    <div class="col-md-12">
                                                        <label for="90days">Code:</label>
                                                        <textarea id="edit_code{{$t_tours->id}}" rows="4" cols="50" class="form-control"></textarea>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="90days">First Zip Code:</label>
                                                        <input type="text" class="form-control" name="edit_zip" value="">
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
                                                <button type="button" class="btn btn-success pull-right" onclick="UpdateChanges(this,{{$t_tours->id}})"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Update</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{-- Modal Delete Town --}}
                                <div class="modal fade" id="deleteTown{{$t_tours->id}}" tabindex="-1" aria-labelledby="deleteTownLabel{{$t_tours->id}}" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header modaldltbckgrnd">
                                                <h5 class="modal-title txt-white">Delete Town</h5>
                                                <button class="close btn" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                Are you sure you want to delete town?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" data-dismiss="modal" class="btn btn-danger mr-auto">No</button>
                                                <button type="button" class="btn btn-success pull-right" onclick="DeleteTown(this, {{$t_tours->id}})">Yes</button>
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
    <div class="modal fade" id="AddTown" tabindex="-1" role="dialog" aria-labelledby="AddTownLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header modaladdbckgrnd">
                    <h5 class="modal-title txt-white">Add Town</h5>
                    <button class="close btn" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form >
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <label for="name">Name:</label>
                                <input type="text" class="form-control" id="add_town" name="add_town">
                            </div>
                            <div class="col-md-12">
                                <label for="code">Code:</label>
                                <textarea id="add_code" name="add_code" rows="4" cols="50" class="form-control">
                                </textarea>
                            </div>
                            <div class="col-md-6">
                                <label for="zip">First Zip Code:</label>
                                <input id="add_zip" type="text" class="form-control" name="add_zip">
                            </div>
                        </div>
                    </div>
                </form>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" onclick="addTown()">Save changes</button>
                </div>
            </div>
        </div>
    </div>

</section>
  

@endsection

@section('script')
<script>
    var table = $('#dtTownTours').DataTable({
        "responsive": true
    });

    function addTown(){
        // var town = $('#agent_pho').val(); // getting id
        // var sample = $('.asd').val(); //getting classname
        var town = $('input[name="add_town"]').val(); //getting name
        var code = $('textarea[name="add_code"]').val();
        var zip = $('input[name="add_zip"]').val();


        var data = {
            town: town,
            code: code,
            zip: zip
        }
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: "{{ URL::to('/town_tours_add') }}",
            method: 'POST',
            data: data,
            success: function(response){

                let _ret = JSON.parse(response);

                if(_ret.length > 0) {
                    table.row.add({
                        0: _ret[0].id,
                        1: _ret[0].name,
                        2: addbuttons(_ret[0].id)
                    }).draw();
                }

                location.reload();
                // $('#AddTown').modal('hide');
            }
    
        });
    }

    //Add buttons when another town is added
    function addbuttons(id) {
        return  '<button class="btn btn-sm btn-primary"data-toggle="modal" data-target="#EditTown'+ id +'" onclick="EditTown('+ id +')">Edit</button>'+
                '<button class="btn btn-sm btn-danger" data-toggle="modal" data-target="#deleteTown'+ id +'">Delete</button>'+

                '<div class="modal fade" id="EditTown'+ id +'" tabindex="-1" aria-labelledby="EditTownLabel'+ id +'" aria-hidden="true">'+
                    '<div class="modal-dialog modal-lg">'+
                        '<div class="modal-content">'+
                            '<div class="modal-header modaleditbckgrnd">'+
                                '<h5 class="modal-title txt-white">Edit Town</h5>'+
                                '<button type="button" class="close" data-dismiss="modal" aria-label="Close">'+
                                    '<span aria-hidden="true">&times;</span>'+
                                '</button>'+
                            '</div>'+
                            '<div class="modal-body">'+
                                '<div class="row">'+
                                    '<div class="col-md-12">'+
                                        '<label for="90days">Town Name: </label>'+
                                        '<input type="text" class="form-control" name="edit_town'+ id +'">'+
                                    '</div>'+
                                    '<div class="col-md-12">'+
                                        '<label for="90days">Code:</label>'+
                                        '<textarea name="edit_code'+ id +'" rows="4" cols="50" class="form-control"></textarea>'+
                                    '</div>'+
                                    '<div class="col-md-6">'+
                                        '<label for="90days">First Zip Code:</label>'+
                                        '<input type="text" class="form-control" name="edit_zip'+ id +'">'+
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
                                '<button type="button" class="btn btn-success pull-right" onclick="UpdateChanges('+ id +')"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Update</button>'+
                            '</div>'+
                        '</div>'+
                    '</div>'+
                '</div>'+

                '<div class="modal" id="deleteTown'+ id +'" tabindex="-1" aria-labelledby="deleteTownLabel'+ id +'" aria-hidden="true">'+
                    '<div class="modal-dialog">'+
                        '<div class="modal-content">'+
                            '<div class="modal-header modaldltbckgrnd">'+
                                '<h5 class="modal-title txt-white">Delete Town</h5>'+
                                '<button type="button" class="close" data-dismiss="modal" aria-label="Close">'+
                                    '<span aria-hidden="true">&times;</span>'+
                                '</button>'+
                            '</div>'+
                            '<div class="modal-body">'+
                                'Are you sure you want to delete town?'+
                            '</div>'+
                            '<div class="modal-footer">'+
                                '<button type="button" data-dismiss="modal" class="btn btn-danger mr-auto">No</button>'+
                                '<button type="button" class="btn btn-success pull-right" onclick="DeleteTown('+ this +','+ id +')">Yes</button>'+
                            '</div>'+
                        '</div>'+
                    '</div>'+
                '</div>';
        
    }
    
    //View Data when edit button is clicked
    function EditTown(id) {
        var data = {
            id: id
        }
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: "{{ URL::to('/town_tours_edit_town') }}",
            method: 'POST',
            data: data,
            success: function(response){

                var parsed = JSON.parse(response);

                var name = parsed.name;
                var code = parsed.code;

                $('#edit_town_name'+id).val(name);
                $('#edit_code'+id).val(code);

            }
    
        });
    }

    function UpdateChanges(paramThis ,id) {
        var name = $('#edit_town_name'+id).val();
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
            url: "{{ URL::to('/town_tours_update_town') }}",
            method: 'POST',
            data: data,
            success: function(response){
                // console.log(response);

                location.reload();
            }
    
        });
    }

    function DeleteTown(paramThis,id) {
        var data = {
            id: id
        }
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: "{{ URL::to('/town_tours_delete_town') }}",
            method: 'POST',
            data: data,
            success: function(response){
            
                table.row( $(paramThis).parents('tr') )
                .remove()
                .draw();    

                location.reload();
                // $('#deleteTown'+id).modal('hide');     
            }
        
        });
    }
    
</script>
    
@endsection