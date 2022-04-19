@extends('main.index')

{{-- @section('css')
<style>
    .dataTables_wrapper {
        width: 100% !important;
    }
</style>

@endsection --}}

@section('content')
<section class="content">        
    <div class="box box-success">
        <div class="box-header clr boxhead">
            <h2 class="box-title">Sponsors</h2>
        </div><!-- /.box-header -->
        <div class="box-body">
            <button class="btn btn-sm btn-success pull-right" data-toggle="modal" data-target="#addSponsors">Add Sponsor</button>
            <br><br>
            <table class="display compact" style="width:100%" cellspacing="0" id="dtSponsors">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Drop-down Menu Name</th>
                        <th>Company</th>
                        <th>Contact</th>
                        <th>Email</th>
                        <th>Telephone</th>
                        <th>Image</th>
                        <th>Website</th>
                        <th>Count</th>
                        <th>Limit</th>
                        <th>Active</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($sponsors as $s_ponsors)
                        <tr>
                            <td>{{$s_ponsors->id}}</td>
                            <td>{{$s_ponsors->name}}</td>
                            <td>{{$s_ponsors->company_name}}</td>
                            <td>{{$s_ponsors->contact_name}}</td>
                            <td>{{$s_ponsors->email}}</td>
                            <td>{{$s_ponsors->telephone}}</td>
                            <td>{{$s_ponsors->image}}</td>
                            <td>{{$s_ponsors->website}}</td>
                            <td>{{$s_ponsors->current_count}}</td>
                            <td>{{$s_ponsors->limit_cap}}</td>
                            <td>{{$s_ponsors->disable}}</td>
                            <td>
                                <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#viewEdit{{$s_ponsors->id}}" onclick="editViewSponsors({{$s_ponsors->id}})">Edit</button>

                                <div class="modal fade" id="viewEdit{{$s_ponsors->id}}" tabindex="-1" aria-labelledby="viewEditLabel{{$s_ponsors->id}}" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header modaleditbckgrnd">
                                                <h5 class="modal-title txt-white">Update Current Sponsor</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label for="name">Drop-down Menu Name:</label>
                                                        <input type="text" class="form-control" id="add_town" name="add_town">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="company">Company Name:</label>
                                                        <input id="add_code" name="add_code" class="form-control">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="90days">Contact Name:</label>
                                                        <input id="add_zip" type="text" class="form-control" name="add_zip">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="90days">Telephone Number:</label>
                                                        <input id="add_zip" type="text" class="form-control" name="add_zip">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="90days">Contact Email:</label>
                                                        <input id="add_zip" type="text" class="form-control" name="add_zip">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="90days">Wesbite:</label>
                                                        <input id="add_zip" type="text" class="form-control" name="add_zip">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="90days">Image:</label>
                                                        <input id="add_zip" type="file" class="form-control" name="add_zip">
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label for="90days">Total:</label>
                                                        <input id="add_zip" type="text" class="form-control" name="add_zip">
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label for="90days">Add more into total:</label>
                                                        <input id="add_zip" type="text" class="form-control" name="add_zip">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-success pull-right">Update</button>
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

    {{-- Modal Add  --}}
    <div class="modal fade" id="addSponsors" tabindex="-1" role="dialog" aria-labelledby="addSponsorsLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header modaladdbckgrnd">
                    <h5 class="modal-title txt-white">Add New Sponsor</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form >
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="name">Drop-down Menu Name:</label>
                                <input type="text" class="form-control" name="add_menu">
                            </div>
                            <div class="col-md-6">
                                <label for="company">Company Name:</label>
                                <input type="text" class="form-control" name="add_comp">
                            </div>
                            <div class="col-md-6">
                                <label for="90days">Contact Name:</label>
                                <input type="text" class="form-control" name="add_contact_name">
                            </div>
                            <div class="col-md-6">
                                <label for="90days">Telephone Number:</label>
                                <input type="text" class="form-control" name="add_tel">
                            </div>
                            <div class="col-md-6">
                                <label for="90days">Contact Email:</label>
                                <input type="text" class="form-control" name="add_contact_email">
                            </div>
                            <div class="col-md-6">
                                <label for="90days">Wesbite:</label>
                                <input type="text" class="form-control" name="add_website">
                            </div>
                            <div class="col-md-6">
                                <label for="90days">Image:</label>
                                <input type="file" class="form-control" name="add_image">
                            </div>
                            <div class="col-md-6">
                                <label for="90days">Set Limit:</label>
                                <input type="text" class="form-control" name="add_limit">
                            </div>
                        </div>
                    </div>
                </form>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" onclick="addSponsor()">Save changes</button>
                </div>
            </div>
        </div>
    </div>

</section>

@endsection

@section('script')
<script>
var table = $('#dtSponsors').DataTable({
    "responsive": true
});

function addSponsor(){

    var menu         = $('input[name="add_menu"]').val();
    var company      = $('input[name="add_comp"]').val();
    var contact_name = $('input[name="add_contact_name"]').val();
    var telephone    = $('input[name="add_tel"]').val();
    var contact_email= $('input[name="add_contact_email"]').val();
    var website      = $('input[name="add_website"]').val();
    var image        = $('input[name="add_image"]').val();
    var limit        = $('input[name="add_limit"]').val();
    

    var data = {
        menu: menu,
        company: company,
        contact_name: contact_name,
        telephone: telephone,
        contact_email: contact_email,
        website: website,
        image: image,
        limit: limit
        
    }
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: "{{ URL::to('/sponsors_add') }}",
        method: 'POST',
        data: data,
        success: function(response){

            let _ret = JSON.parse(response);

            if(_ret.length > 0) {
                table.row.add({
                    0: _ret[0].id,
                    1: _ret[0].menu,
                    2: _ret[0].company,
                    3: _ret[0].contact_name,
                    4: _ret[0].telephone,
                    5: _ret[0].contact_email,
                    6: _ret[0].website,
                    7: _ret[0].image,
                    8: _ret[0].limit,
                    9: addButtons(_ret[0].id)
                    
                }).draw();
            }

            $('#addSponsors').modal('hide');
        }

    });
}

function addButtons(id){
    return '<button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#viewEdit'+ id +'" onclick="editViewSponsors('+id+')">Edit</button>'+

            '<div class="modal fade" id="viewEdit'+ id +'" tabindex="-1" aria-labelledby="viewEditLabel'+ id +'" aria-hidden="true">'+
                '<div class="modal-dialog modal-lg">'+
                    '<div class="modal-content">'+
                        '<div class="modal-header modaleditbckgrnd">'+
                            '<h5 class="modal-title txt-white">Update Current Sponsor</h5>'+
                            '<button type="button" class="close" data-dismiss="modal" aria-label="Close">'+
                                '<span aria-hidden="true">&times;</span>'+
                            '</button>'+
                        '</div>'+
                        '<div class="modal-body">'+
                            '<div class="row">'+
                                '<div class="col-md-6">'+
                                    '<label for="name">Drop-down Menu Name:</label>'+
                                    '<input type="text" class="form-control" name="vedit_name'+ id +'">'+
                                '</div>'+
                                '<div class="col-md-6">'+
                                    '<label for="company">Company Name:</label>'+
                                    '<input class="form-control" name="vedit_company'+ id +'">'+
                                '</div>'+
                                '<div class="col-md-6">'+
                                    '<label for="90days">Contact Name:</label>'+
                                    '<input type="text" class="form-control" name="vedit_contact_name'+ id +'">'+
                                '</div>'+
                                '<div class="col-md-6">'+
                                    '<label for="90days">Telephone Number:</label>'+
                                    '<input type="text" class="form-control" name="vedit_telephone'+ id +'">'+
                                '</div>'+
                                '<div class="col-md-6">'+
                                    '<label for="90days">Contact Email:</label>'+
                                    '<input type="text" class="form-control" name="vedit_contact_email'+ id +'">'+
                                '</div>'+
                                '<div class="col-md-6">'+
                                    '<label for="90days">Wesbite:</label>'+
                                    '<input type="text" class="form-control" name="vedit_website'+ id +'">'+
                                '</div>'+
                                '<div class="col-md-6">'+
                                    '<label for="90days">Image:</label>'+
                                    '<input type="file" class="form-control" name="vedit_image'+ id +'">'+
                                '</div>'+
                                '<div class="col-md-3">'+
                                    '<label for="90days">Total:</label>'+
                                    '<input type="text" class="form-control" name="vedit_total'+ id +'">'+
                                '</div>'+
                                '<div class="col-md-3">'+
                                    '<label for="90days">Add more into total:</label>'+
                                    '<input type="text" class="form-control" name="vedit_addmore'+ id +'">'+
                                '</div>'+
                            '</div>'+
                        '</div>'+
                        '<div class="modal-footer">'+
                            '<button type="button" class="btn btn-success pull-right">Update</button>'+
                        '</div>'+
                    '</div>'+
                '</div>'+
            '</div>';
}

function editViewSponsors(id){

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
            
            // var parsed = JSON.parse(response);
            // // console.log(parsed);
            // var name =parsed.name

            // $('input[name="edit_town"]').val(name);

        }

    });
}




</script>
    
@endsection